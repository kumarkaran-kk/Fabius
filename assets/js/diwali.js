(() => {
  const intro = document.querySelector('.diwali-intro');
  if (!intro) return;
  const canvas = intro.querySelector('.diwali-fireworks');
  const context = canvas?.getContext('2d');
  const skip = intro.querySelector('.diwali-skip');
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  let particles = [];
  let animationFrame = 0;
  let closeTimer = 0;
  let closed = false;

  document.body.classList.add('diwali-lock');

  const resizeCanvas = () => {
    if (!canvas || !context) return;
    const ratio = Math.min(window.devicePixelRatio || 1, 2);
    canvas.width = Math.round(innerWidth * ratio);
    canvas.height = Math.round(innerHeight * ratio);
    canvas.style.width = `${innerWidth}px`;
    canvas.style.height = `${innerHeight}px`;
    context.setTransform(ratio, 0, 0, ratio, 0, 0);
  };

  const palette = ['#fff4c9', '#e6b75d', '#f39b32', '#d9682e'];
  const burst = (x, y, amount = 72) => {
    for (let index = 0; index < amount; index += 1) {
      const angle = (Math.PI * 2 * index) / amount + Math.random() * .09;
      const speed = 1.7 + Math.random() * 4.2;
      particles.push({
        x, y,
        vx: Math.cos(angle) * speed,
        vy: Math.sin(angle) * speed,
        life: 1,
        decay: .008 + Math.random() * .009,
        size: .8 + Math.random() * 1.7,
        color: palette[Math.floor(Math.random() * palette.length)]
      });
    }
  };

  const draw = () => {
    context.fillStyle = 'rgba(6, 4, 3, .16)';
    context.fillRect(0, 0, innerWidth, innerHeight);
    context.globalCompositeOperation = 'lighter';
    particles = particles.filter(particle => particle.life > 0);
    particles.forEach(particle => {
      particle.x += particle.vx;
      particle.y += particle.vy;
      particle.vy += .018;
      particle.vx *= .994;
      particle.life -= particle.decay;
      context.globalAlpha = Math.max(particle.life, 0);
      context.fillStyle = particle.color;
      context.beginPath();
      context.arc(particle.x, particle.y, particle.size, 0, Math.PI * 2);
      context.fill();
    });
    context.globalAlpha = 1;
    context.globalCompositeOperation = 'source-over';
    animationFrame = requestAnimationFrame(draw);
  };

  const closeIntro = () => {
    if (closed) return;
    closed = true;
    clearTimeout(closeTimer);
    intro.classList.add('is-closing');
    document.body.classList.remove('diwali-lock');
    window.setTimeout(() => {
      cancelAnimationFrame(animationFrame);
      intro.remove();
    }, 850);
  };

  skip?.addEventListener('click', closeIntro);
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape') closeIntro();
  }, { once: true });

  if (reducedMotion || !context) {
    closeTimer = window.setTimeout(closeIntro, 3000);
    return;
  }

  resizeCanvas();
  window.addEventListener('resize', resizeCanvas, { passive: true });
  draw();
  window.setTimeout(() => burst(innerWidth * .22, innerHeight * .32, 58), 160);
  window.setTimeout(() => burst(innerWidth * .78, innerHeight * .26, 66), 620);
  window.setTimeout(() => burst(innerWidth * .5, innerHeight * .22, 82), 1100);
  window.setTimeout(() => burst(innerWidth * .13, innerHeight * .62, 42), 1800);
  window.setTimeout(() => burst(innerWidth * .87, innerHeight * .58, 42), 2150);
  closeTimer = window.setTimeout(closeIntro, 5200);
})();
