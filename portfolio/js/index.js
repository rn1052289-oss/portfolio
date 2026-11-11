document.addEventListener('DOMContentLoaded', () => {
  const hero = document.querySelector('.hero'),
        shapes = document.querySelectorAll('.hero__shape');
  const prefersReduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (hero && shapes.length && window.innerWidth > 991 && !prefersReduce) {
    hero.addEventListener('mousemove', e => {
      const r = hero.getBoundingClientRect(),
            x = (e.clientX - r.left) / r.width - .5,
            y = (e.clientY - r.top) / r.height - .5;
      shapes.forEach((s, i) => {
        const sp = (i + 1) * 18;
        // Each shape has its own base rotation via dataset or defaults to 0
        const baseRotate = s.dataset.rotate || '0deg';
        s.style.transform = `translate(${x * sp}px, ${y * sp}px) scale(1) rotate(${baseRotate})`;
      });
    });
  }

  // Skill cards staggered entrance
  const sc = document.querySelectorAll('.skill-card');
  if (sc.length) {
    if (prefersReduce || !('IntersectionObserver' in window)) {
      sc.forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'none';
      });
      return;
    }
    const so = new IntersectionObserver(e => {
      e.forEach(en => {
        if (en.isIntersecting) {
          en.target.style.opacity = '1';
          en.target.style.transform = 'translateY(0)';
          so.unobserve(en.target);
        }
      });
    }, { threshold: .15 });
    sc.forEach((c, i) => {
      c.style.opacity = '0';
      c.style.transform = 'translateY(40px)';
      c.style.transition = `all .9s cubic-bezier(.16,1,.3,1) ${i * .1}s`;
      so.observe(c);
    });
  }

  // Ink hover origin
  document.querySelectorAll('.work-card').forEach(card => {
    const ink = card.querySelector('.work-card__ink');
    if (!ink) return;
    card.addEventListener('mouseenter', e => {
      const r = card.getBoundingClientRect();
      ink.style.left = (e.clientX - r.left) + 'px';
      ink.style.top = (e.clientY - r.top) + 'px';
    });
  });
});
