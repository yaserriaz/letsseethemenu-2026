<?php
/**
 * Shared Change Password form for customer / vendor / affiliate.
 * Expects: $dash_user, $sitepath
 * Optional: $dash_user_name, $password_action
 */
$dash_user_name = $dash_user_name ?? (
    in_array($dash_user ?? '', ['vendor', 'affiliate'], true) ? 'Mair Ahmed' : 'Manery deleon'
);
$password_action = $password_action ?? '';
$first_name = explode(' ', trim($dash_user_name))[0];
?>
<div class="max-w-xl mx-auto">
  <div class="mb-6 md:mb-8">
    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Security</p>
    <h1 class="font-headline-lg text-[28px] md:text-[32px] text-on-background leading-tight">Change Password</h1>
    <p class="mt-2 text-on-surface-variant text-sm md:text-base">
      <?php echo htmlspecialchars($first_name, ENT_QUOTES, 'UTF-8'); ?>, you can update your password here.
    </p>
  </div>

  <form method="post" action="<?php echo htmlspecialchars($password_action, ENT_QUOTES, 'UTF-8'); ?>"
        id="dash-password-form"
        class="rounded-3xl bg-white border border-outline-variant/30 shadow-sm overflow-hidden"
        novalidate data-allow-submit="1">

    <div class="px-5 py-6 md:px-7 md:py-8 space-y-5">
      <div>
        <div class="flex items-center justify-between gap-3 mb-2">
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant" for="new-password">New password</label>
          <button type="button" id="pwd-generate"
                  class="inline-flex items-center gap-1 rounded-full bg-[#c45c12] text-white text-xs font-bold uppercase tracking-wide px-3 py-1.5 hover:bg-[#a34c0f] transition-colors">
            <span class="material-symbols-outlined text-[14px]">auto_awesome</span>
            Generate
          </button>
        </div>
        <div class="relative">
          <input id="new-password" name="new_password" type="password" required minlength="8" autocomplete="new-password"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] pl-4 pr-28 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow"
                 placeholder="At least 8 characters">
          <div class="absolute inset-y-0 right-2 flex items-center gap-0.5">
            <button type="button" id="pwd-copy" class="p-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-primary disabled:opacity-40 disabled:pointer-events-none" aria-label="Copy password" title="Copy password" disabled>
              <span class="material-symbols-outlined text-[20px]" data-copy-icon>content_copy</span>
            </button>
            <button type="button" id="pwd-toggle" class="p-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-primary" aria-label="Show password" title="Show password">
              <span class="material-symbols-outlined text-[20px]" data-eye>visibility</span>
            </button>
            <button type="button" id="pwd-clear" class="p-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-secondary" aria-label="Clear password" title="Clear">
              <span class="material-symbols-outlined text-[20px]">delete</span>
            </button>
          </div>
        </div>
        <div class="mt-2 flex items-center gap-2">
          <div class="flex-1 h-1.5 rounded-full bg-surface-container-high overflow-hidden">
            <div id="pwd-strength-bar" class="h-full w-0 rounded-full transition-all duration-300 bg-outline"></div>
          </div>
          <span id="pwd-strength-label" class="text-xs text-on-surface-variant font-medium min-w-[4.5rem]">Strength</span>
        </div>
        <p id="pwd-copy-msg" class="mt-1.5 text-xs text-primary font-medium hidden" aria-live="polite">Copied to clipboard</p>
      </div>

      <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="confirm-password">Confirm password</label>
        <input id="confirm-password" name="confirm_password" type="password" required minlength="8" data-match="new-password" autocomplete="new-password"
               class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow"
               placeholder="Re-enter new password">
        <p id="pwd-match-msg" class="mt-2 text-xs text-on-surface-variant hidden"></p>
      </div>
    </div>

    <div class="px-5 py-5 md:px-7 md:py-6 border-t border-outline-variant/25 bg-[#f8fafc] flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <p class="text-xs text-on-surface-variant">Use a unique password you do not reuse elsewhere.</p>
      <button type="submit"
              class="inline-flex items-center justify-center gap-2 rounded-full bg-primary text-white font-bold px-7 py-3 shadow-md shadow-primary/20 hover:bg-primary-container transition-colors">
        <span class="material-symbols-outlined text-[20px]">lock_reset</span>
        Update Password
      </button>
    </div>
  </form>
</div>
<script>
(function () {
  var input = document.getElementById('new-password');
  var confirm = document.getElementById('confirm-password');
  var genBtn = document.getElementById('pwd-generate');
  var clearBtn = document.getElementById('pwd-clear');
  var copyBtn = document.getElementById('pwd-copy');
  var copyMsg = document.getElementById('pwd-copy-msg');
  var toggleBtn = document.getElementById('pwd-toggle');
  var bar = document.getElementById('pwd-strength-bar');
  var label = document.getElementById('pwd-strength-label');
  var matchMsg = document.getElementById('pwd-match-msg');
  if (!input || !confirm) return;

  function setCopyEnabled() {
    if (!copyBtn) return;
    copyBtn.disabled = !input.value;
  }

  function scorePassword(pw) {
    var s = 0;
    if (pw.length >= 8) s++;
    if (pw.length >= 12) s++;
    if (/[A-Z]/.test(pw) && /[a-z]/.test(pw)) s++;
    if (/\d/.test(pw)) s++;
    if (/[^A-Za-z0-9]/.test(pw)) s++;
    return Math.min(s, 4);
  }

  function updateStrength() {
    var pw = input.value;
    var score = pw ? scorePassword(pw) : 0;
    var widths = ['0%', '25%', '50%', '75%', '100%'];
    var colors = ['#737783', '#c45c12', '#c45c12', '#2a5db0', '#15803d'];
    var texts = ['Strength', 'Weak', 'Fair', 'Good', 'Strong'];
    bar.style.width = widths[score];
    bar.style.backgroundColor = colors[score];
    label.textContent = texts[score];
    label.style.color = score ? colors[score] : '';
    setCopyEnabled();
    checkMatch();
  }

  function checkMatch() {
    if (!confirm.value) {
      matchMsg.classList.add('hidden');
      confirm.style.borderColor = '';
      return;
    }
    var ok = confirm.value === input.value;
    matchMsg.classList.remove('hidden');
    matchMsg.textContent = ok ? 'Passwords match.' : 'Passwords do not match.';
    matchMsg.style.color = ok ? '#15803d' : '#ba1a1a';
    confirm.style.borderColor = ok ? '#22c55e' : '#ef4444';
  }

  function generatePassword() {
    var chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz23456789!@#$%';
    var out = '';
    var arr = new Uint32Array(16);
    if (window.crypto && window.crypto.getRandomValues) {
      window.crypto.getRandomValues(arr);
      for (var i = 0; i < 16; i++) out += chars[arr[i] % chars.length];
    } else {
      for (var j = 0; j < 16; j++) out += chars[Math.floor(Math.random() * chars.length)];
    }
    input.type = 'text';
    confirm.type = 'text';
    input.value = out;
    confirm.value = out;
    var eye = toggleBtn && toggleBtn.querySelector('[data-eye]');
    if (eye) eye.textContent = 'visibility_off';
    if (toggleBtn) toggleBtn.setAttribute('aria-label', 'Hide password');
    updateStrength();
  }

  function copyPassword() {
    if (!input.value || !copyBtn) return;
    var icon = copyBtn.querySelector('[data-copy-icon]');
    function done() {
      if (icon) icon.textContent = 'check';
      if (copyMsg) {
        copyMsg.classList.remove('hidden');
        copyMsg.textContent = 'Copied to clipboard';
      }
      setTimeout(function () {
        if (icon) icon.textContent = 'content_copy';
        if (copyMsg) copyMsg.classList.add('hidden');
      }, 1600);
    }
    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard.writeText(input.value).then(done).catch(function () {
        fallbackCopy();
        done();
      });
    } else {
      fallbackCopy();
      done();
    }
  }

  function fallbackCopy() {
    var prev = input.type;
    input.type = 'text';
    input.select();
    try { document.execCommand('copy'); } catch (e) {}
    input.type = prev;
    input.setSelectionRange(0, 0);
  }

  input.addEventListener('input', updateStrength);
  confirm.addEventListener('input', checkMatch);
  if (genBtn) genBtn.addEventListener('click', generatePassword);
  if (copyBtn) copyBtn.addEventListener('click', copyPassword);
  if (clearBtn) {
    clearBtn.addEventListener('click', function () {
      input.value = '';
      confirm.value = '';
      updateStrength();
      if (copyMsg) copyMsg.classList.add('hidden');
      input.focus();
    });
  }
  if (toggleBtn) {
    toggleBtn.addEventListener('click', function () {
      var show = input.type === 'password';
      input.type = show ? 'text' : 'password';
      confirm.type = show ? 'text' : 'password';
      var eye = toggleBtn.querySelector('[data-eye]');
      if (eye) eye.textContent = show ? 'visibility_off' : 'visibility';
      toggleBtn.setAttribute('aria-label', show ? 'Hide password' : 'Show password');
    });
  }
  setCopyEnabled();
})();
</script>
