(() => {
  const menuButton = document.querySelector('.menu-toggle');
  const mobileNav = document.querySelector('.mobile-nav');
  const closeMainMenu = () => {
    mobileNav?.classList.remove('is-open');
    menuButton?.classList.remove('is-open');
    menuButton?.setAttribute('aria-expanded', 'false');
  };
  menuButton?.addEventListener('click', () => {
    const open = mobileNav.classList.toggle('is-open');
    menuButton.classList.toggle('is-open', open);
    menuButton.setAttribute('aria-expanded', String(open));
  });
  mobileNav?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMainMenu));
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeMainMenu();
  });
  document.addEventListener('pointerdown', event => {
    if (!mobileNav?.classList.contains('is-open')) return;
    if (!mobileNav.contains(event.target) && !menuButton.contains(event.target)) closeMainMenu();
  });
  const categoryLabels = ['Mens Watches', 'Ladies Watches'];
  document.querySelectorAll('.category-card').forEach((card, index) => {
    const title = document.createElement('strong');
    title.textContent = categoryLabels[index];
    card.append(title);
  });

  const manifesto = document.querySelector('.manifesto');
  manifesto?.addEventListener('pointerenter', () => manifesto.classList.add('is-spotlit'));
  manifesto?.addEventListener('pointerleave', () => manifesto.classList.remove('is-spotlit'));
  manifesto?.addEventListener('pointermove', event => {
    const bounds = manifesto.getBoundingClientRect();
    const x = ((event.clientX - bounds.left) / bounds.width) * 100;
    const y = ((event.clientY - bounds.top) / bounds.height) * 100;
    manifesto.style.setProperty('--spot-x', x + '%');
    manifesto.style.setProperty('--spot-y', y + '%');
  });

  const visit = document.querySelector('.visit');
  visit?.addEventListener('pointerenter', () => visit.classList.add('is-spotlit'));
  visit?.addEventListener('pointerleave', () => visit.classList.remove('is-spotlit'));
  visit?.addEventListener('pointermove', event => {
    const bounds = visit.getBoundingClientRect();
    const x = ((event.clientX - bounds.left) / bounds.width) * 100;
    const y = ((event.clientY - bounds.top) / bounds.height) * 100;
    visit.style.setProperty('--spot-x', x + '%');
    visit.style.setProperty('--spot-y', y + '%');
  });

  const heroSlides = [...document.querySelectorAll('.hero-slide')];
  const heroDots = [...document.querySelectorAll('[data-hero]')];
  let heroIndex = 0;
  let heroDirection = 1;
  const heroContent = heroSlides.map(slide => ({
    slug: slide.dataset.slug,
    tone: slide.querySelector('h1').textContent.trim(),
    model: slide.querySelector('h2').textContent.trim(),
    copy: slide.querySelector('p').textContent.trim()
  }));
  const makeHeroTrack = (windowClass, tag, key) => {
    const viewport = document.createElement('div');
    const rail = document.createElement('div');
    viewport.className = windowClass;
    rail.className = 'hero-text-rail';
    heroContent.forEach(item => {
      const node = document.createElement(tag);
      node.textContent = item[key];
      rail.append(node);
    });
    viewport.append(rail);
    return viewport;
  };
  const sharedHeroCopy = document.createElement('div');
  const heroBrand = document.createElement('span');
  const orderButton = document.createElement('a');
  sharedHeroCopy.className = 'hero-copy hero-copy-shared';
  heroBrand.className = 'eyebrow hero-brand';
  heroBrand.textContent = 'Fabius';
  orderButton.className = 'button button-light';
  orderButton.href = `product.php?slug=${heroContent[0]?.slug || 'resolute-black'}`;
  orderButton.textContent = 'Discover';
  sharedHeroCopy.append(
    heroBrand,
    makeHeroTrack('hero-title-window', 'h1', 'tone'),
    makeHeroTrack('hero-model-window', 'h2', 'model'),
    makeHeroTrack('hero-copy-window', 'p', 'copy'),
    orderButton
  );
  heroSlides.forEach(slide => slide.querySelector('.hero-copy').remove());
  document.querySelector('.hero').append(sharedHeroCopy);
  const showHero = index => {
    const nextIndex = (index + heroSlides.length) % heroSlides.length;
    if (nextIndex === heroIndex) return;
    const outgoing = heroSlides[heroIndex];
    const incoming = heroSlides[nextIndex];
    const reverse = nextIndex < heroIndex;
    outgoing.classList.remove('is-active');
    outgoing.classList.add(reverse ? 'is-exiting-right' : 'is-exiting');
    incoming.classList.remove('is-exiting', 'is-exiting-right', 'is-active');
    if (reverse) {
      incoming.classList.add('is-entering-left');
      requestAnimationFrame(() => requestAnimationFrame(() => {
        incoming.classList.add('is-active');
        incoming.classList.remove('is-entering-left');
      }));
    } else {
      incoming.classList.add('is-active');
    }
    window.setTimeout(() => outgoing.classList.remove('is-exiting', 'is-exiting-right'), 650);
    heroIndex = nextIndex;
    orderButton.href = `product.php?slug=${heroContent[heroIndex].slug || 'resolute-black'}`;
    sharedHeroCopy.style.setProperty('--hero-index', String(heroIndex));
    heroDots.forEach((dot, i) => dot.classList.toggle('is-active', i === heroIndex));
  };
  heroDots.forEach(dot => dot.addEventListener('click', () => showHero(Number(dot.dataset.hero))));
  document.querySelectorAll('.button:not(.hero-order)').forEach(button => {
    const label = button.textContent.trim();
    const labelNode = document.createElement('span');
    const arrowNode = document.createElement('span');
    labelNode.className = 'button-motion-label';
    labelNode.textContent = label;
    arrowNode.className = 'button-motion-arrow';
    arrowNode.textContent = '→';
    arrowNode.setAttribute('aria-hidden', 'true');
    button.replaceChildren(labelNode, arrowNode);
  });

  if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) setInterval(() => {
    if (heroIndex === heroSlides.length - 1) heroDirection = -1;
    if (heroIndex === 0) heroDirection = 1;
    showHero(heroIndex + heroDirection);
  }, 2600);

  const collectionSlides = [...document.querySelectorAll('.collection-slide')];
  const progress = [...document.querySelectorAll('.progress i')];
  let collectionIndex = 0;
  const showCollection = index => {
    collectionIndex = (index + collectionSlides.length) % collectionSlides.length;
    collectionSlides.forEach((slide, i) => slide.classList.toggle('is-active', i === collectionIndex));
    progress.forEach((item, i) => item.classList.toggle('is-active', i === collectionIndex));
  };
  document.querySelector('[data-collection="prev"]')?.addEventListener('click', () => showCollection(collectionIndex - 1));
  document.querySelector('[data-collection="next"]')?.addEventListener('click', () => showCollection(collectionIndex + 1));
  showCollection(0);

  const reviewQuotes = [
    '“I had a really nice ring that was too loose for my finger but Fabius resized it in an hour and now it’s a perfect size. Thanks, guys, you’re the best masters!”',
    '“The finish is beautiful and the exposed movement gets compliments every time I wear it.”',
    '“Elegant, comfortable and even better in person. The service felt every bit as premium as the watch.”'
  ];
  let reviewIndex = 0;
  const quote = document.querySelector('.review-content blockquote');
  const showReview = index => { reviewIndex = (index + reviewQuotes.length) % reviewQuotes.length; if (quote) quote.textContent = reviewQuotes[reviewIndex]; };
  document.querySelector('[data-review="prev"]')?.addEventListener('click', () => showReview(reviewIndex - 1));
  document.querySelector('[data-review="next"]')?.addEventListener('click', () => showReview(reviewIndex + 1));

    const footer = document.querySelector('footer');
    const footerWordmark = footer?.querySelector('.footer-wordmark');
    if (footerWordmark) {
      footerWordmark.dataset.wordmark = footerWordmark.textContent.trim();

      // The Figma wordmark is built from 63 overlapping blurred ellipses
      // (21 columns x 3 rows), clipped by the FABIUS letter shapes.
      const lights = [];
      const lightColours = [
        'rgba(23, 75, 137, .96)',
        'rgba(10, 42, 86, .92)',
        'rgba(34, 99, 172, .94)',
        'rgba(7, 27, 58, .94)'
      ];
      for (let row = 0; row < 3; row += 1) {
        for (let column = 0; column < 21; column += 1) {
          const x = 2.1 + (column * 4.79);
          const y = [18, 51, 82][row];
          const colour = lightColours[(column + (row * 2)) % lightColours.length];
          const radius = row === 0 ? 5.1 : 4.65;
          lights.push(`radial-gradient(ellipse ${radius}% 37% at ${x}% ${y}%, ${colour} 0%, rgba(8, 30, 66, .82) 32%, transparent 65%)`);
        }
      }
      footerWordmark.style.setProperty('--footer-lights', lights.join(','));

      let displayedX = 50;
      let targetX = 50;
      let animationFrame = 0;
      const renderFooterLight = () => {
        displayedX += (targetX - displayedX) * .34;
        footerWordmark.style.setProperty('--footer-spot-x', `${displayedX}%`);
        if (Math.abs(targetX - displayedX) > .08) {
          animationFrame = requestAnimationFrame(renderFooterLight);
        } else {
          displayedX = targetX;
          footerWordmark.style.setProperty('--footer-spot-x', `${displayedX}%`);
          animationFrame = 0;
        }
      };
      const moveFooterLight = event => {
        const bounds = footer.getBoundingClientRect();
        targetX = Math.max(0, Math.min(100, ((event.clientX - bounds.left) / bounds.width) * 100));
        if (!animationFrame) animationFrame = requestAnimationFrame(renderFooterLight);
      };

      footer.addEventListener('pointerenter', event => {
        footerWordmark.classList.add('is-lit');
        moveFooterLight(event);
      });
      footer.addEventListener('pointerleave', () => footerWordmark.classList.remove('is-lit'));
      footer.addEventListener('pointermove', moveFooterLight);
    }

  const feature = document.querySelector('.feature');
  if (feature && !feature.querySelector('.feature-watch')) {
    const featureWatch = document.createElement('img');
    featureWatch.className = 'feature-watch';
    featureWatch.src = 'assets/new-images/optimized/feature-lumina-gold-watch.webp';
    featureWatch.alt = 'Fabius Lumina gold watch';
    feature.insertBefore(featureWatch, feature.querySelector('.feature-copy'));
  }

  document.querySelectorAll('.model-card').forEach((card, index) => {
    card.classList.add('model-card--' + index);
    const modelName = card.querySelector(':scope > span');
    if (modelName) modelName.textContent = card.dataset.modelName;
    const data = JSON.parse(card.dataset.product || '{}');
    const labels = [
      [`CASE ${data['Case Size'] || ''}`, data['Bracelet'] || data['Strap Material'] || 'STAINLESS STEEL'],
      ['MOVEMENT', data.Movement || ''],
      ['GLASS', data.Glass || ''],
      ['WR', data['Water Resistance'] || '']
    ];
    const layer = document.createElement('div');
    layer.className = 'model-tech model-tech--' + index;
    labels.forEach(label => {
      const callout = document.createElement('b');
      const heading = document.createElement('strong');
      const detail = document.createElement('span');
      heading.textContent = label[0];
      detail.innerHTML = label[1].split('|').map(line => {
        const emphasized = line.startsWith('!');
        const text = emphasized ? line.slice(1) : line;
        return emphasized ? '<strong>' + text + '</strong>' : text;
      }).join('<br>');
      callout.append(heading, detail);
      layer.appendChild(callout);
    });
    card.appendChild(layer);
  });

  const observer = new IntersectionObserver(entries => entries.forEach(entry => {
    if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
  }), { threshold: .12 });
  document.querySelectorAll('.reveal').forEach(item => observer.observe(item));
})();
