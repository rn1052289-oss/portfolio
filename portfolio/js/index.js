/* Halftone rings spread from the shop like air leaving the doorway. Dots are
   kept away from the text, and drawing stops while the hero is out of view. */
function startHeroAir(press, reduceMotion) {
  const hero = press && press.closest('.hero'),
        canvas = hero && hero.querySelector('.hero__air'),
        ctx = canvas && canvas.getContext('2d');
  if (!ctx) return;

  const GRID = 14, MAX_RADIUS = 5.4, MIN_RADIUS = .45, FRAME_MS = 33;
  const plates = [
    { color: 'rgba(214, 52, 38, .36)', shift: 0, dx: 0, dy: 0 },
    { color: 'rgba(235, 180, 36, .5)', shift: .12, dx: 3, dy: 4 },
    { color: 'rgba(43, 76, 126, .3)', shift: .24, dx: -3, dy: 2 },
  ];
  const soft = (value, range) => {
    const k = Math.max(0, Math.min(1, value / range));
    return k * k * (3 - 2 * k);
  };
  let dots = new Float32Array(0), width = 0, height = 0, wavelength = 150;

  function measure() {
    const box = hero.getBoundingClientRect(),
          art = press.getBoundingClientRect(),
          dpr = Math.min(window.devicePixelRatio || 1, 1.5),
          text = [...hero.querySelectorAll('.hero__label, .hero__title, .hero__desc, .hero__cta, .hero__trust')]
            .map(el => el.getBoundingClientRect()),
          left = Math.min(...text.map(r => r.left)) - box.left,
          right = Math.max(...text.map(r => r.right)) - box.left,
          top = Math.min(...text.map(r => r.top)) - box.top,
          bottom = Math.max(...text.map(r => r.bottom)) - box.top,
          originX = art.left + art.width / 2 - box.left,
          originY = art.top + art.height / 2 - box.top,
          headerHeight = parseFloat(getComputedStyle(hero).paddingTop) || 0;

    width = box.width;
    height = box.height;
    canvas.width = Math.round(width * dpr);
    canvas.height = Math.round(height * dpr);
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    wavelength = Math.max(110, Math.min(190, width * .13));

    const reach = Math.max(width, height) * .6,
          edge = Math.min(70, width * .11),
          next = [];
    for (let y = GRID / 2; y < height; y += GRID) {
      for (let x = GRID / 2; x < width; x += GRID) {
        const distance = Math.hypot(x - originX, y - originY),
              textGap = Math.hypot(Math.max(left - x, 0, x - right), Math.max(top - y, 0, y - bottom)),
              weight = soft(textGap, edge) * soft(distance - art.width * .4, edge)
                * soft(y - headerHeight, edge) * soft(height - y, 90) * Math.exp(-distance / reach);
        if (weight > .02) next.push(x, y, distance, weight);
      }
    }
    dots = new Float32Array(next);
  }

  function draw(seconds, strength) {
    ctx.clearRect(0, 0, width, height);
    plates.forEach(plate => {
      ctx.fillStyle = plate.color;
      ctx.beginPath();
      for (let i = 0; i < dots.length; i += 4) {
        const wave = .5 + .5 * Math.sin(Math.PI * 2 * (dots[i + 2] / wavelength - seconds * .16 - plate.shift)),
              radius = MAX_RADIUS * wave * wave * wave * dots[i + 3] * strength;
        if (radius < MIN_RADIUS) continue;
        const x = dots[i] + plate.dx, y = dots[i + 1] + plate.dy;
        ctx.moveTo(x + radius, y);
        ctx.arc(x, y, radius, 0, Math.PI * 2);
      }
      ctx.fill();
    });
  }

  const startedAt = performance.now();
  const seconds = () => (performance.now() - startedAt) / 1000;
  const render = () => {
    if (reduceMotion) { draw(3.2, 1); return; }
    const t = seconds();
    draw(t, soft(t - .5, 1.6));
  };

  measure();
  render();
  new ResizeObserver(() => { measure(); render(); }).observe(hero);
  if (reduceMotion) return;

  let frame = 0, lastDraw = 0, heroVisible = true;
  const tick = now => {
    frame = requestAnimationFrame(tick);
    if (now - lastDraw < FRAME_MS) return;
    lastDraw = now;
    render();
  };
  const sync = () => {
    const shouldRun = heroVisible && !document.hidden;
    if (shouldRun && !frame) frame = requestAnimationFrame(tick);
    if (!shouldRun && frame) { cancelAnimationFrame(frame); frame = 0; }
  };
  new IntersectionObserver(entries => {
    heroVisible = entries[entries.length - 1].isIntersecting;
    sync();
  }).observe(hero);
  document.addEventListener('visibilitychange', sync);
  sync();
}

document.addEventListener('DOMContentLoaded', () => {
  const heroPress = document.querySelector('.hero__press');
  const prefersReduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Wait one frame so the out-of-register start state is painted first.
  if (heroPress && !prefersReduce) {
    requestAnimationFrame(() => requestAnimationFrame(() => heroPress.classList.add('is-pressed')));
  }
  startHeroAir(heroPress, prefersReduce);

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
