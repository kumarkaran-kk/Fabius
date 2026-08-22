(() => {
  const menuButton = document.querySelector('.pdp-menu');
  const mobileNav = document.querySelector('.pdp-mobile-nav');
  const closeMenu = () => {
    mobileNav?.classList.remove('is-open');
    menuButton?.classList.remove('is-open');
    menuButton?.setAttribute('aria-expanded', 'false');
  };
  menuButton?.addEventListener('click', () => {
    const open = !mobileNav.classList.contains('is-open');
    mobileNav.classList.toggle('is-open', open);
    menuButton.classList.toggle('is-open', open);
    menuButton.setAttribute('aria-expanded', String(open));
  });
  mobileNav?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));

  const image = document.querySelector('#product-image');
  const thumbs = [...document.querySelectorAll('.gallery-thumbs button')];
  let active = 0;
  const showImage = index => {
    active = (index + thumbs.length) % thumbs.length;
    const thumb = thumbs[active];
    image.classList.add('is-changing');
    window.setTimeout(() => {
      image.src = thumb.dataset.image;
      image.alt = thumb.dataset.alt;
      image.classList.remove('is-changing');
    }, 140);
    thumbs.forEach((item, i) => item.classList.toggle('is-active', i === active));
  };
  thumbs.forEach((thumb, index) => thumb.addEventListener('click', () => showImage(index)));
  document.querySelector('.gallery-prev')?.addEventListener('click', () => showImage(active - 1));
  document.querySelector('.gallery-next')?.addEventListener('click', () => showImage(active + 1));
  document.querySelectorAll('[data-tab]').forEach(tab => tab.addEventListener('click', () => {
    document.querySelectorAll('[data-tab]').forEach(item => item.classList.toggle('is-active', item === tab));
    document.querySelectorAll('[data-panel]').forEach(panel => panel.classList.toggle('is-active', panel.dataset.panel === tab.dataset.tab));
  }));

  const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: .14 });
  document.querySelectorAll('.pdp-reveal').forEach(item => revealObserver.observe(item));

  document.querySelectorAll('.collection-portal').forEach(portal => {
    portal.addEventListener('pointerenter', () => portal.classList.add('is-spotlit'));
    portal.addEventListener('pointerleave', () => portal.classList.remove('is-spotlit'));
    portal.addEventListener('pointermove', event => {
      const bounds = portal.getBoundingClientRect();
      portal.style.setProperty('--spot-x', `${((event.clientX - bounds.left) / bounds.width) * 100}%`);
      portal.style.setProperty('--spot-y', `${((event.clientY - bounds.top) / bounds.height) * 100}%`);
    });
  });

  const gallery = document.querySelector('.product-gallery figure');
  gallery?.addEventListener('pointermove', event => {
    if (window.matchMedia('(hover: none)').matches) return;
    const bounds = gallery.getBoundingClientRect();
    const x = ((event.clientX - bounds.left) / bounds.width - .5) * 10;
    const y = ((event.clientY - bounds.top) / bounds.height - .5) * 10;
    image.style.transform = `scale(1.035) translate(${x * -.25}px, ${y * -.25}px)`;
  });
  gallery?.addEventListener('pointerleave', () => image.style.transform = '');

  const footer = document.querySelector('.pdp-footer');
  const footerWordmark = footer?.querySelector('.footer-wordmark');
  if (footer && footerWordmark) {
    footerWordmark.dataset.wordmark = footerWordmark.textContent.trim();
    const lights = [];
    const colours = [
      'rgba(23, 75, 137, .96)',
      'rgba(10, 42, 86, .92)',
      'rgba(34, 99, 172, .94)',
      'rgba(7, 27, 58, .94)'
    ];
    for (let row = 0; row < 3; row += 1) {
      for (let column = 0; column < 21; column += 1) {
        const x = 2.1 + (column * 4.79);
        const y = [18, 51, 82][row];
        const colour = colours[(column + (row * 2)) % colours.length];
        const radius = row === 0 ? 5.1 : 4.65;
        lights.push(`radial-gradient(ellipse ${radius}% 37% at ${x}% ${y}%, ${colour} 0%, rgba(8, 30, 66, .82) 32%, transparent 65%)`);
      }
    }
    footerWordmark.style.setProperty('--footer-lights', lights.join(','));

    let displayedX = 50;
    let targetX = 50;
    let frame = 0;
    const renderLight = () => {
      displayedX += (targetX - displayedX) * .34;
      footerWordmark.style.setProperty('--footer-spot-x', `${displayedX}%`);
      if (Math.abs(targetX - displayedX) > .08) frame = requestAnimationFrame(renderLight);
      else {
        footerWordmark.style.setProperty('--footer-spot-x', `${targetX}%`);
        displayedX = targetX;
        frame = 0;
      }
    };
    const moveLight = event => {
      const bounds = footer.getBoundingClientRect();
      targetX = Math.max(0, Math.min(100, ((event.clientX - bounds.left) / bounds.width) * 100));
      if (!frame) frame = requestAnimationFrame(renderLight);
    };
    footer.addEventListener('pointerenter', event => {
      footerWordmark.classList.add('is-lit');
      moveLight(event);
    });
    footer.addEventListener('pointermove', moveLight);
    footer.addEventListener('pointerleave', () => footerWordmark.classList.remove('is-lit'));
  }
})();
