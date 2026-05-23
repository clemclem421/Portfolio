/* ═══════════════════════════════════════════════════════════
   PORTFOLIO BUT RT — script.js
   ══════════════════════════════════════════════════════════ */
/* ── Thème clair / sombre ──────────────────────────────────── */
(function () {
  const btn  = document.querySelector('[data-theme-toggle]');
  const html = document.documentElement;

  let theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
  html.setAttribute('data-theme', theme);
  updateIcon(theme);

  btn.addEventListener('click', function () {
    theme = theme === 'dark' ? 'light' : 'dark';
    html.setAttribute('data-theme', theme);
    updateIcon(theme);
  });

  function updateIcon(t) {
    btn.setAttribute('aria-label', t === 'dark' ? 'Passer en mode clair' : 'Passer en mode sombre');
    btn.innerHTML = t === 'dark'
      ? `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
           <circle cx="12" cy="12" r="5"/>
           <path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42
                    M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
         </svg>`
      : `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
           <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
         </svg>`;
  }
})();

/* ── Onglets analyse réflexive ─────────────────────────────── */
(function () {
  const tabs   = document.querySelectorAll('[data-tab]');
  const panels = document.querySelectorAll('.gibbs-panel');

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      const target = tab.dataset.tab;

      tabs.forEach(function (t) {
        t.classList.remove('active');
        t.setAttribute('aria-selected', 'false');
      });
      panels.forEach(function (p) { p.classList.remove('active'); });

      tab.classList.add('active');
      tab.setAttribute('aria-selected', 'true');
      document.getElementById(target).classList.add('active');
    });
  });
})();

/* ── Active nav link au scroll ─────────────────────────────── */
(function () {
  const links    = document.querySelectorAll('.nav a');
  const sections = document.querySelectorAll('main section[id]');

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        links.forEach(function (l) { l.removeAttribute('aria-current'); });
        const link = document.querySelector('.nav a[href="#' + entry.target.id + '"]');
        if (link) link.setAttribute('aria-current', 'page');
      }
    });
  }, { rootMargin: '-30% 0px -60% 0px' });

  sections.forEach(function (s) { observer.observe(s); });
})();