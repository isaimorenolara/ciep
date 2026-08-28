(function () {
  'use strict';

  var toggle = document.querySelector('.ciep-menu-toggle');
  var closeBtn = document.querySelector('.ciep-menu-close');
  var panel = document.getElementById('ciepMobilePanel');

  if (!toggle || !panel) {
    return;
  }

  function isOpen() {
    return panel.classList.contains('is-open');
  }

  function openMenu() {
    panel.classList.add('is-open');
    document.body.classList.add('ciep-scroll-lock');
    toggle.setAttribute('aria-expanded', 'true');
  }

  function closeMenu() {
    panel.classList.remove('is-open');
    document.body.classList.remove('ciep-scroll-lock');
    toggle.setAttribute('aria-expanded', 'false');
  }

  toggle.addEventListener('click', function () {
    if (isOpen()) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', closeMenu);
  }

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && isOpen()) {
      closeMenu();
      toggle.focus();
    }
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth >= 992 && isOpen()) {
      closeMenu();
    }
  });

  document.querySelectorAll('.ciep-mobile-summary').forEach(function (summary) {
    var target = document.getElementById(summary.getAttribute('aria-controls'));
    if (!target) {
      return;
    }
    summary.addEventListener('click', function () {
      var expanded = summary.getAttribute('aria-expanded') === 'true';
      summary.setAttribute('aria-expanded', String(!expanded));
      target.classList.toggle('is-open', !expanded);
    });
  });
})();

(function () {
  'use strict';

  function getActiveButton(tabs) {
    return tabs.querySelector('.t-tab[aria-selected="true"]') || tabs.querySelector('.t-tab');
  }

  function movePill(pill, button, animate) {
    if (!animate) {
      pill.style.transition = 'none';
    }
    pill.style.transform = 'translateX(' + button.offsetLeft + 'px)';
    pill.style.width = button.offsetWidth + 'px';
    if (!animate) {
      void pill.offsetWidth;
      pill.style.transition = '';
    }
  }

  function selectTab(buttons, pill, button) {
    buttons.forEach(function (b) {
      b.setAttribute('aria-selected', b === button ? 'true' : 'false');
    });

    var targetId = button.getAttribute('aria-controls');
    var target = targetId ? document.getElementById(targetId) : null;
    if (target && target.parentElement) {
      Array.prototype.forEach.call(target.parentElement.children, function (panel) {
        panel.classList.toggle('is-active', panel === target);
      });
    }

    movePill(pill, button, true);
  }

  function setupTabs(tabs) {
    if (tabs.dataset.tTabsReady === 'true') {
      return;
    }

    var pill = tabs.querySelector('.t-tabs-pill');
    var buttons = Array.prototype.slice.call(tabs.querySelectorAll('.t-tab'));
    if (!pill || !buttons.length) {
      return;
    }

    buttons.forEach(function (button) {
      button.addEventListener('click', function () {
        selectTab(buttons, pill, button);
      });
    });

    var initial = getActiveButton(tabs);
    movePill(pill, initial, false);
    tabs.dataset.tTabsReady = 'true';
  }

  function refreshTabs(tabs) {
    var pill = tabs.querySelector('.t-tabs-pill');
    var active = getActiveButton(tabs);
    if (pill && active) {
      movePill(pill, active, false);
    }
  }

  document.querySelectorAll('.t-tabs').forEach(function (tabs) {
    setupTabs(tabs);
  });

  window.addEventListener('resize', function () {
    document.querySelectorAll('.t-tabs').forEach(refreshTabs);
  });

  document.addEventListener('shown.bs.tab', function (event) {
    var targetSelector = event.target.getAttribute('data-bs-target');
    var pane = targetSelector ? document.querySelector(targetSelector) : null;
    if (!pane) {
      return;
    }
    pane.querySelectorAll('.t-tabs').forEach(function (tabs) {
      setupTabs(tabs);
      requestAnimationFrame(function () {
        refreshTabs(tabs);
      });
    });
  });
})();

(function () {
  'use strict';

  if (typeof window.bootstrap === 'undefined') {
    return;
  }

  document.querySelectorAll('.ciep-program-tabs .nav-tabs[role="tablist"]').forEach(function (nav) {
    var triggers = Array.prototype.slice.call(nav.querySelectorAll('[data-bs-toggle="tab"]'));
    var slideDir = 'right';

    nav.addEventListener('show.bs.tab', function (event) {
      var newIndex = triggers.indexOf(event.target);
      var oldIndex = event.relatedTarget ? triggers.indexOf(event.relatedTarget) : newIndex;
      slideDir = newIndex >= oldIndex ? 'right' : 'left';
    });

    nav.addEventListener('shown.bs.tab', function (event) {
      var targetSelector = event.target.getAttribute('data-bs-target');
      var pane = targetSelector ? document.querySelector(targetSelector) : null;
      if (!pane) {
        return;
      }
      var cls = slideDir === 'left' ? 'ciep-tab-slide-left' : 'ciep-tab-slide-right';
      pane.classList.remove('ciep-tab-slide-left', 'ciep-tab-slide-right');
      void pane.offsetWidth;
      pane.classList.add(cls);
      pane.addEventListener('animationend', function handler() {
        pane.classList.remove(cls);
        pane.removeEventListener('animationend', handler);
      });
    });
  });

  document.querySelectorAll('[data-tab-jump]').forEach(function (link) {
    link.addEventListener('click', function (event) {
      var trigger = document.querySelector('[data-bs-target="#' + link.getAttribute('data-tab-jump') + '"]');
      if (!trigger) {
        return;
      }
      event.preventDefault();
      window.bootstrap.Tab.getOrCreateInstance(trigger).show();
      trigger.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
    });
  });
})();
