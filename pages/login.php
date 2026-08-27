<?php
require_once __DIR__ . '/../inc/site-settings.php';

$page       = 'login';
$page_title = "Sign In — Let's See The Menu";
$ref        = isset($_GET['ref']) ? (int) $_GET['ref'] : 0;
ob_start();
?>
<main class="flex-grow w-full px-4 py-16 pb-28 md:pb-16">
  <div class="max-w-[860px] mx-auto rounded-3xl overflow-hidden shadow-2xl border border-gray-200 grid md:grid-cols-[360px_1fr]">

    <!-- ── Left branding panel ─────────────────────────────────────── -->
    <div class="hidden md:flex flex-col justify-between bg-primary p-10 text-white">
      <a href="<?php echo $sitepath; ?>" class="inline-flex flex-col">
        <span class="uppercase font-bold text-[22px] leading-none tracking-tight" style="font-family: 'Plus Jakarta Sans', sans-serif;">Let's see the menu</span>
        <span class="text-sm font-normal tracking-widest opacity-75 mt-1" style="font-family: Arial, sans-serif;">Taste What's Out There!</span>
      </a>

      <div class="flex flex-col gap-4">
        <p class="text-2xl font-bold leading-snug">Your food adventure<br>starts here.</p>
        <p class="opacity-75 text-sm leading-relaxed">Access your favorites, votes, restaurant tools, and exclusive local deals — all in one place.</p>
        <div class="flex flex-col gap-3 mt-2">
          <?php foreach ([
            ['restaurant', 'Discover local restaurants near you'],
            ['favorite',   'Save and revisit your favourites'],
            ['star',       'Rate and vote on dishes'],
          ] as [$icon, $text]): ?>
          <div class="flex items-center gap-3 opacity-90">
            <span class="material-symbols-outlined text-base" style="font-variation-settings:'FILL' 1;"><?php echo $icon; ?></span>
            <span class="text-sm"><?php echo $text; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <p class="opacity-40 text-xs">© <?php echo date('Y'); ?> LetsSeethemenu.com</p>
    </div>

    <!-- ── Right form panel ───────────────────────────────────────── -->
    <div class="bg-surface-container-lowest p-8 md:p-10 flex flex-col justify-center">

      <?php if ($ref): ?>
      <div class="flex items-start gap-3 bg-primary-container text-on-primary-container rounded-2xl px-4 py-3 mb-6 text-sm leading-snug">
        <span class="material-symbols-outlined text-lg shrink-0 mt-0.5" style="font-variation-settings:'FILL' 1;">restaurant</span>
        <span>Sign in to save, vote, or interact with this restaurant listing.</span>
      </div>
      <?php endif; ?>

      <h1 class="text-2xl font-bold text-on-background mb-1">Sign in</h1>
      <p class="text-sm text-on-surface-variant mb-8">Welcome back! Enter your credentials below.</p>

      <form class="flex flex-col gap-5" action="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>dashboard/" method="post" id="login-form">
        <?php if ($ref): ?>
        <input type="hidden" name="ref" value="<?php echo $ref; ?>">
        <?php endif; ?>

        <!-- Email -->
        <div>
          <label class="block text-xs font-semibold text-on-surface-variant mb-2" for="login-email">Your Email</label>
          <input id="login-email"
            class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-2.5 focus:ring-0 focus:border-primary outline-none text-sm transition-colors"
            type="email" name="email" placeholder="you@example.com" autocomplete="email" required>
        </div>

        <!-- Password -->
        <div>
          <div class="flex items-center justify-between mb-2">
            <label class="text-xs font-semibold text-on-surface-variant" for="login-pw">Your Password</label>
            <a href="#" onclick="return false;" class="text-xs text-primary hover:underline">Forgot Password?</a>
          </div>
          <div class="relative">
            <input id="login-pw"
              class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-2.5 pr-8 focus:ring-0 focus:border-primary outline-none text-sm transition-colors"
              type="password" name="password" placeholder="••••••••" autocomplete="current-password" required>
            <button type="button" id="login-pw-toggle" tabindex="-1"
              class="absolute right-0 bottom-2 text-on-surface-variant hover:text-primary transition-colors"
              aria-label="Toggle password visibility">
              <span class="material-symbols-outlined text-[20px] select-none">visibility</span>
            </button>
          </div>
        </div>

        <!-- Submit -->
        <button type="submit"
          class="flex items-center justify-center gap-2 bg-primary text-white font-bold rounded-full px-6 py-3 mt-2 w-full hover:bg-primary/90 active:scale-95 transition-all">
          <span class="material-symbols-outlined text-[18px]">login</span>
          Login
        </button>

        <!-- Divider -->
        <div class="flex items-center gap-3">
          <div class="flex-1 h-px bg-gray-200"></div>
          <span class="text-xs text-on-surface-variant whitespace-nowrap">or login with</span>
          <div class="flex-1 h-px bg-gray-200"></div>
        </div>

        <!-- Google SSO -->
        <button type="button"
          class="flex items-center justify-center gap-3 border border-gray-200 rounded-full px-6 py-3 text-sm font-semibold text-on-surface hover:bg-surface-variant active:scale-95 transition-all w-full"
          onclick="window.location.href='<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>dashboard/';">
          <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
          </svg>
          Sign in with Google
        </button>
      </form>

      <p class="text-sm text-on-surface-variant text-center mt-8">
        Don't have an account?
        <a href="signup<?php echo $ref ? '?ref=' . $ref : ''; ?>" class="text-primary font-bold hover:underline">Sign up</a>
      </p>

    </div>
  </div>
</main>

<script>
(function () {
  var btn   = document.getElementById('login-pw-toggle');
  var input = document.getElementById('login-pw');
  if (!btn || !input) return;
  btn.addEventListener('click', function () {
    var isHidden = input.type === 'password';
    input.type = isHidden ? 'text' : 'password';
    btn.querySelector('.material-symbols-outlined').textContent = isHidden ? 'visibility_off' : 'visibility';
  });
})();
</script>

<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
