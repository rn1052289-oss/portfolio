document.addEventListener('DOMContentLoaded', () => {
  const buttons = Array.from(document.querySelectorAll('.works-filter__btn'));
  const cards = Array.from(document.querySelectorAll('.works-full-grid .work-card'));
  const filterGroup = buttons[0]?.closest('.works-filter');
  const grid = document.querySelector('.works-full-grid');

  if (filterGroup && grid && buttons.length && cards.length) {
    if (!grid.id) grid.id = 'works-grid';

    const status = document.createElement('p');
    status.id = 'works-filter-status';
    status.className = 'visually-hidden';
    status.setAttribute('role', 'status');
    status.setAttribute('aria-live', 'polite');
    status.setAttribute('aria-atomic', 'true');
    status.textContent = `${cards.length}件の作品を表示中`;
    filterGroup.insertAdjacentElement('afterend', status);
    filterGroup.setAttribute('aria-describedby', status.id);

    buttons.forEach(button => {
      button.setAttribute('aria-controls', grid.id);
      button.addEventListener('click', () => {
        const filter = button.dataset.filter || 'all';
        const url = new URL(window.location.href);
        if (filter === 'all') url.searchParams.delete('type');
        else url.searchParams.set('type', filter);
        history.replaceState(null, '', url);
        let visibleCount = 0;

        buttons.forEach(item => {
          const selected = item === button;
          item.classList.toggle('active', selected);
          item.setAttribute('aria-pressed', String(selected));
        });

        cards.forEach(card => {
          const isVisible = filter === 'all' || (filter === 'site' ? card.dataset.category !== 'app' : card.dataset.category === filter);
          card.hidden = !isVisible;
          if (isVisible) visibleCount += 1;
        });

        const label = button.textContent.trim();
        status.textContent = `${label}：${visibleCount}件の作品を表示中`;
      });
    });
  }

  const initialFilter = new URLSearchParams(window.location.search).get('type');
  const compatibleFilter = ['wordpress','brand','landing'].includes(initialFilter) ? 'site' : initialFilter;
  const initialButton = buttons.find(button => button.dataset.filter === compatibleFilter);
  if (initialButton) initialButton.click();

  const canUseInkEffect = window.matchMedia('(hover: hover) and (pointer: fine)').matches
    && !window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (canUseInkEffect) {
    cards.forEach(card => {
      const ink = card.querySelector('.work-card__ink');
      if (!ink) return;
      card.addEventListener('mouseenter', event => {
        const rect = card.getBoundingClientRect();
        ink.style.left = `${event.clientX - rect.left}px`;
        ink.style.top = `${event.clientY - rect.top}px`;
      });
    });
  }
});
