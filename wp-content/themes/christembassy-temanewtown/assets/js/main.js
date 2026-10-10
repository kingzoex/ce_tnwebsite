/**
 * Main Interactive Script - Christ Embassy Tema Newtown (Content & Healing Streams Focused)
 */

document.addEventListener('DOMContentLoaded', () => {
  initDockNavigation();
  initModals();
  initMobileDrawer();
  initGivingCopy();
  initFirstTimerForm();
  initCountdownTimer();
  initVideoRailInteractions();
});

/* --- Floating Dock & Scroll Spy --- */
function initDockNavigation() {
  const sections = document.querySelectorAll('section[id]');
  const dockLinks = document.querySelectorAll('.dock-link[href^="#"]');

  window.addEventListener('scroll', () => {
    let currentId = '';
    const scrollPosition = window.scrollY + 200;

    sections.forEach(section => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      if (scrollPosition >= top && scrollPosition < top + height) {
        currentId = section.getAttribute('id');
      }
    });

    dockLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${currentId}`) {
        link.classList.add('active');
      }
    });
  });
}

/* --- Mobile Drawer --- */
function initMobileDrawer() {
  const toggleBtn = document.querySelector('.mobile-nav-toggle');
  const closeBtn = document.querySelector('.mobile-drawer-close');
  const drawer = document.getElementById('mobile-nav-drawer');
  const drawerLinks = document.querySelectorAll('.mobile-drawer-link');

  if (!drawer) return;

  const openDrawer = () => {
    drawer.classList.add('open');
    document.body.style.overflow = 'hidden';
  };

  const closeDrawer = () => {
    drawer.classList.remove('open');
    document.body.style.overflow = '';
  };

  if (toggleBtn) toggleBtn.addEventListener('click', openDrawer);
  if (closeBtn) closeBtn.addEventListener('click', closeDrawer);

  drawerLinks.forEach(link => {
    link.addEventListener('click', closeDrawer);
  });
}

/* --- Dynamic Countdown Timer --- */
function initCountdownTimer() {
  const daysEl = document.getElementById('cd-days');
  const hoursEl = document.getElementById('cd-hours');
  const minsEl = document.getElementById('cd-mins');
  const secsEl = document.getElementById('cd-secs');

  if (!daysEl) return;

  // Target: 12 days from now for Live Healing Services
  const now = new Date().getTime();
  const targetDate = now + (12 * 24 * 60 * 60 * 1000) + (20 * 60 * 60 * 1000) + (37 * 60 * 1000);

  function update() {
    const current = new Date().getTime();
    const diff = targetDate - current;

    if (diff <= 0) {
      daysEl.textContent = '00';
      hoursEl.textContent = '00';
      minsEl.textContent = '00';
      secsEl.textContent = '00';
      return;
    }

    const d = Math.floor(diff / (1000 * 60 * 60 * 24));
    const h = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const m = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const s = Math.floor((diff % (1000 * 60)) / 1000);

    daysEl.textContent = String(d).padStart(2, '0');
    hoursEl.textContent = String(h).padStart(2, '0');
    minsEl.textContent = String(m).padStart(2, '0');
    secsEl.textContent = String(s).padStart(2, '0');
  }

  update();
  setInterval(update, 1000);
}

/* --- Modal System & Video Card Handlers --- */
function initModals() {
  const modalTriggers = document.querySelectorAll('[data-modal-target]');
  const modalCloses = document.querySelectorAll('.modal-close-btn');
  const overlays = document.querySelectorAll('.modal-overlay');

  modalTriggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = btn.getAttribute('data-modal-target');
      const targetModal = document.getElementById(targetId);
      if (targetModal) {
        openModal(targetModal);
      }
    });
  });

  modalCloses.forEach(btn => {
    btn.addEventListener('click', () => {
      const modal = btn.closest('.modal-overlay');
      if (modal) closeModal(modal);
    });
  });

  overlays.forEach(overlay => {
    overlay.addEventListener('click', (e) => {
      if (e.target === overlay) {
        closeModal(overlay);
      }
    });
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      const activeModal = document.querySelector('.modal-overlay.active');
      if (activeModal) closeModal(activeModal);
    }
  });
}

function openModal(modal) {
  modal.classList.add('active');
  document.body.style.overflow = 'hidden';
  
  if (modal.id === 'modal-live') {
    const iframe = modal.querySelector('iframe');
    if (iframe && (!iframe.src || iframe.src.indexOf('youtube') === -1)) {
      iframe.src = iframe.getAttribute('data-src') || 'https://www.youtube-nocookie.com/embed/live_stream?channel=UCXw5Z18rK6nE8QW9R6lQ2wA';
    }
  }
}

function closeModal(modal) {
  modal.classList.remove('active');
  document.body.style.overflow = '';
  
  if (modal.id === 'modal-live') {
    const iframe = modal.querySelector('iframe');
    if (iframe) {
      const currentSrc = iframe.src;
      iframe.src = '';
      iframe.src = currentSrc;
    }
  }
}

/* --- Video Rail Click Interactivity --- */
function initVideoRailInteractions() {
  const cards = document.querySelectorAll('.video-thumb-card, .featured-show-card, .bento-card');
  const liveModal = document.getElementById('modal-live');
  const liveTitle = document.getElementById('live-title');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      const titleEl = card.querySelector('.video-card-title, .featured-show-title, .bento-title');
      const title = titleEl ? titleEl.textContent : 'Healing Streams Live Broadcast';
      
      if (liveTitle) {
        liveTitle.textContent = title;
      }
      if (liveModal) {
        openModal(liveModal);
        showToast(`Now Playing: ${title}`);
      }
    });
  });
}

/* --- Copy to Clipboard helper with Toast --- */
function initGivingCopy() {
  const copyButtons = document.querySelectorAll('[data-copy-text]');
  copyButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const textToCopy = btn.getAttribute('data-copy-text');
      navigator.clipboard.writeText(textToCopy).then(() => {
        showToast(`Copied "${textToCopy}" to clipboard!`);
      }).catch(() => {
        showToast(`Copied: ${textToCopy}`);
      });
    });
  });
}

function showToast(message) {
  let toast = document.getElementById('toast-notice');
  if (!toast) {
    toast = document.createElement('div');
    toast.id = 'toast-notice';
    toast.className = 'toast-notice';
    document.body.appendChild(toast);
  }
  toast.textContent = message;
  toast.classList.add('show');
  setTimeout(() => {
    toast.classList.remove('show');
  }, 3000);
}

/* --- First-Timer & Membership Form --- */
function initFirstTimerForm() {
  const form = document.getElementById('first-timer-form');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const name = form.querySelector('[name="full_name"]').value;
    const phone = form.querySelector('[name="phone"]').value;
    
    const cardBody = form.parentElement;
    cardBody.innerHTML = `
      <div style="text-align: center; padding: 30px 10px;">
        <div style="width: 60px; height: 60px; background: rgba(56, 189, 248, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; color: #38BDF8;">
          <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
        </div>
        <h3 style="font-family: var(--font-display); font-size: 1.8rem; font-weight: 800; color: #FFF; margin-bottom: 10px;">Praise God, ${name}!</h3>
        <p style="color: #CBD5E1; font-size: 1.05rem; line-height: 1.6; max-width: 480px; margin: 0 auto 24px;">
          You are deeply loved and celebrated. Our pastoral connection team at Christ Embassy Tema Newtown will contact you shortly via <strong>${phone}</strong>.
        </p>
        <div style="padding: 16px; background: rgba(255, 255, 255, 0.05); border-radius: var(--radius-md); border: 1px solid rgba(255, 255, 255, 0.1); margin-bottom: 24px; font-size: 0.95rem; color: #E2E8F0;">
          <em>"The lines are fallen unto you in pleasant places; yea, you have a goodly heritage!"</em> — Psalm 16:6
        </div>
        <button class="btn btn-blue" onclick="closeModal(document.getElementById('modal-first-timer'))">Amen & Continue</button>
      </div>
    `;
    showToast(`Welcome to the Family, ${name}!`);
  });
}
