<!-- Footer -->
<footer class="bg-inverse-surface text-inverse-on-surface py-xl">
<div class="max-w-container-max mx-auto px-md">
<div class="grid grid-cols-1 md:grid-cols-4 gap-xl mb-xl">
<div class="flex flex-col">
<a class="navbar-brand flex flex-col items-center text-center mb-6" href="<?php echo $sitepath; ?>" style="font-family: &quot;Plus Jakarta Sans&quot;, sans-serif;" title="Back to Home"><span class="uppercase font-bold text-[24px] leading-none text-white tracking-tight">Let's see the menu</span><span class="block text-[16px] capitalize font-normal tracking-[1.5px] text-surface-variant" style="font-family: Arial, sans-serif;">Taste What's Out there!</span></a>
<p class="text-surface-variant font-body-md mb-8 leading-relaxed max-w-xs">
                    Connecting food lovers with the most authentic local flavors through interactive discovery and sponsored community games.
                </p>
<div class="flex gap-4">
<a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">share</span></a>
<a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">public</span></a>
<a class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-primary transition-colors" href="#"><span class="material-symbols-outlined text-[20px]">camera</span></a>
</div>
</div>
<div>
<h4 class="text-white font-headline-md font-bold mb-6">Quick Links</h4>
<ul class="space-y-4">
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/mission-statement">Mission Statement</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/how-it-works">How it works</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="contact">Contact</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="blog">Blog</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/local-events">Local Events</a></li>
</ul>
</div>
<div>
<h4 class="text-white font-headline-md font-bold mb-6">Info</h4>
<ul class="space-y-4">
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/terms-condition">Terms &amp; condition</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/privacy-policy">Privacy Policy</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/affiliates">Affiliates</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/become-a-sponsor">Become a Sponsor</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/delivery-information">Delivery Information</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/refund-policy">Refund policy</a></li>
<li><a class="text-surface-variant hover:text-primary-fixed-dim transition-colors font-body-md" href="page/user-data-deletion">User Data Deletion</a></li>
</ul>
</div>
<div>
<h4 class="text-white font-headline-md font-bold mb-6">Join the Table</h4>
<p class="text-surface-variant font-body-md mb-6">Get the latest local menu updates and exclusive deals.</p>
<form class="space-y-3">
<input class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-primary-fixed-dim text-white placeholder:text-surface-variant/50" placeholder="Your Name" type="text">
<input class="w-full bg-white/5 border border-white/10 rounded-lg px-4 py-3 focus:outline-none focus:border-primary-fixed-dim text-white placeholder:text-surface-variant/50" placeholder="email@address.com" type="email">
<button class="w-full bg-secondary text-white font-bold py-3 rounded-full hover:bg-on-secondary-fixed-variant transition-colors shadow-lg" type="button">Subscribe</button>
</form>
</div>
</div>
<div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-md">
<p class="text-surface-variant font-label-xs">
                © <?php echo date('Y'); ?> Let's See The Menu. Taste What's Out There!
            </p>
<div class="flex gap-gutter">
<a class="text-surface-variant hover:text-white font-label-xs transition-colors" href="page/privacy-policy">Privacy Policy</a>
<a class="text-surface-variant hover:text-white font-label-xs transition-colors" href="page/terms-condition">Terms of Service</a>
<a class="text-surface-variant hover:text-white font-label-xs transition-colors" href="legal/legal-disclaimer">Legal Disclaimer</a>
</div>
</div>
</div>
</footer>
<!-- Scroll To Top Button -->
<button id="scroll-top-btn" aria-label="Scroll to top"
  class="fixed bottom-24 right-5 md:bottom-8 z-50 flex items-center justify-center w-12 h-12 rounded-full bg-primary text-white shadow-lg
         opacity-0 translate-y-4 pointer-events-none
         transition-all duration-300 ease-out
         hover:scale-110 hover:shadow-xl active:scale-95
         focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">
  <span class="material-symbols-outlined select-none" style="font-variation-settings:'FILL' 1,'wght' 500;">arrow_upward</span>
</button>
<style>
  #scroll-top-btn.visible {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
  }
  @keyframes pulse-ring {
    0%   { box-shadow: 0 0 0 0 rgba(0,68,150,.45); }
    70%  { box-shadow: 0 0 0 10px rgba(0,68,150,0); }
    100% { box-shadow: 0 0 0 0 rgba(0,68,150,0); }
  }
  #scroll-top-btn.visible {
    animation: pulse-ring 2.4s ease-out infinite;
  }
  #scroll-top-btn.visible:hover {
    animation: none;
  }
</style>
<script>
(function () {
  var btn = document.getElementById('scroll-top-btn');
  if (!btn) return;
  function onScroll() {
    btn.classList.toggle('visible', window.scrollY > 300);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();
</script>

<!-- Mobile Bottom Nav -->
<nav class="fixed bottom-0 w-full z-50 flex justify-around items-center px-4 py-2 md:hidden bg-surface-container-lowest shadow-lg rounded-t-xl">
<a class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-variant p-2 rounded-lg" href="<?php echo $sitepath; ?>">
<span class="material-symbols-outlined mb-1">explore</span>
<span class="font-label-xs text-label-xs">Explore</span>
</a>
<a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-4 py-1 scale-90 transition-all duration-200" href="available-states">
<span class="material-symbols-outlined mb-1" style="font-variation-settings: 'FILL' 1;">search</span>
<span class="font-label-xs text-label-xs">Search</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-variant p-2 rounded-lg" href="favorites">
<span class="material-symbols-outlined mb-1">favorite</span>
<span class="font-label-xs text-label-xs">Favorites</span>
</a>
<a class="flex flex-col items-center justify-center text-on-surface-variant hover:bg-surface-variant p-2 rounded-lg" href="profile">
<span class="material-symbols-outlined mb-1">person</span>
<span class="font-label-xs text-label-xs">Profile</span>
</a>
</nav>

<!-- ── Shared Form Validation ─────────────────────────────────────────── -->
<style>
.fv-msg { font-size: .72rem; color: #ef4444; margin-top: 3px; line-height: 1.3; }
.fv-ok  { position: absolute; right: 0; bottom: 10px; color: #22c55e; font-size: .85rem; font-weight: 700; pointer-events: none; }
</style>
<script>
(function () {
  var EMAIL_RE = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

  function getError(el) {
    var val = el.value.trim();
    var type = el.type;
    if (el.required && !val)          return 'This field is required.';
    if (!val)                         return null; /* optional + empty = ok */
    if (type === 'email' && !EMAIL_RE.test(val))
      return 'Please enter a valid email address.';
    if (type === 'password' && val.length < 8)
      return 'Password must be at least 8 characters.';
    if (el.dataset.match) {
      var other = document.getElementById(el.dataset.match);
      if (other && val !== other.value) return 'Passwords do not match.';
    }
    return null;
  }

  function wrap(el) {
    /* inputs sit directly inside a <div> — make it position:relative for the ✓ icon */
    var p = el.parentElement;
    if (p && getComputedStyle(p).position === 'static') p.style.position = 'relative';
  }

  function setValid(el) {
    el.style.borderBottomColor = '#22c55e';
    var p = el.parentElement;
    var msg = p && p.querySelector('.fv-msg'); if (msg) msg.remove();
    if (p && !p.querySelector('.fv-ok')) {
      var ok = document.createElement('span');
      ok.className = 'fv-ok'; ok.textContent = '✓';
      p.appendChild(ok);
    }
  }

  function setInvalid(el, err) {
    el.style.borderBottomColor = '#ef4444';
    var p = el.parentElement;
    var ok = p && p.querySelector('.fv-ok'); if (ok) ok.remove();
    var msg = p && p.querySelector('.fv-msg');
    if (!msg) { msg = document.createElement('p'); msg.className = 'fv-msg'; p && p.appendChild(msg); }
    msg.textContent = err;
  }

  function resetState(el) {
    el.style.borderBottomColor = '';
    var p = el.parentElement;
    var msg = p && p.querySelector('.fv-msg'); if (msg) msg.remove();
    var ok  = p && p.querySelector('.fv-ok');  if (ok)  ok.remove();
  }

  function validate(el) {
    var err = getError(el);
    if (err)                            { setInvalid(el, err); return false; }
    if (el.value.trim() || el.required) { setValid(el); }
    else                                { resetState(el); }
    return true;
  }

  function initForm(form) {
    var fields = Array.from(form.querySelectorAll(
      'input[required], input[type="email"], input[type="password"], textarea[required], input[data-match]'
    ));
    fields.forEach(function (el) {
      wrap(el);
      el.addEventListener('blur', function () {
        if (this.value.trim()) validate(this);
      });
      el.addEventListener('input', function () {
        /* live re-check only once the user has been shown an error */
        if (this.style.borderBottomColor === 'rgb(239, 68, 68)') validate(this);
        /* confirm-password: also recheck the confirm field when origin changes */
        var dependants = form.querySelectorAll('[data-match="' + this.id + '"]');
        dependants.forEach(function (dep) {
          if (dep.style.borderBottomColor) validate(dep);
        });
      });
    });

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var ok = true;
      fields.forEach(function (el) { if (!validate(el)) ok = false; });
      if (ok) {
        /* All valid — allow real submit when opted in (static demo auth) */
        if (form.getAttribute('data-allow-submit') === '1') {
          HTMLFormElement.prototype.submit.call(form);
          return;
        }
      }
    });
  }

  /* Auto-init every form that opts in via novalidate */
  function init() {
    document.querySelectorAll('form[novalidate]').forEach(initForm);
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
</script>
