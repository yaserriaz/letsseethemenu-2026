<?php
/**
 * Dashboard layout — slim header + dark sidebar + content area.
 * Expects: $content, $dash_user ('customer'|'vendor'|'affiliate'), $dash_page, $page_title.
 * Optional: $dash_user_name, $dash_user_email, $dash_earnings (affiliate only).
 */
require_once __DIR__ . '/../inc/site-settings.php';
if (!headers_sent()) {
    header('X-Robots-Tag: noindex, nofollow');
}
$robots_noindex = true;
if (!isset($page_title)) {
    $page_title = 'Dashboard - Let\'s See The Menu';
}

$dash_user = $dash_user ?? 'customer';
if (!in_array($dash_user, ['customer', 'vendor', 'affiliate'], true)) {
    $dash_user = 'customer';
}
$dash_page = $dash_page ?? 'index';

$role_defaults = [
    'customer' => ['name' => 'Manery deleon', 'email' => 'manerydeleon@gmail.com', 'label' => 'Customer console'],
    'vendor' => ['name' => 'Mair Ahmed', 'email' => 'mairahmed007@gmail.com', 'label' => 'Vendor console'],
    'affiliate' => ['name' => 'Mair Ahmed', 'email' => 'mairahmed007@gmail.com', 'label' => 'Affiliate console'],
];
$dash_user_name = $dash_user_name ?? $role_defaults[$dash_user]['name'];
$dash_user_email = $dash_user_email ?? $role_defaults[$dash_user]['email'];
$dash_console_label = $role_defaults[$dash_user]['label'];
$dash_earnings = $dash_earnings ?? '$0.00';
$dash_initial = strtoupper(substr(trim($dash_user_name), 0, 1));
$show_earnings = ($dash_user === 'affiliate');

$sidebar_map = [
    'customer' => __DIR__ . '/../dashboard/inc/sidebar-customer.php',
    'vendor' => __DIR__ . '/../dashboard/inc/sidebar-vendor.php',
    'affiliate' => __DIR__ . '/../dashboard/inc/sidebar-affiliate.php',
];
$sidebar_file = $sidebar_map[$dash_user];

$role_switch = [
    'customer' => ['vendor', 'Vendor'],
    'vendor' => ['affiliate', 'Affiliate'],
    'affiliate' => ['customer', 'Customer'],
];
[$other_role, $other_label] = $role_switch[$dash_user];
$other_dash = rtrim($sitepath, '/') . '/dashboard/' . $other_role . '/';
$logout_url = rtrim($sitepath, '/') . '/login';
$profile_url = rtrim($sitepath, '/') . '/dashboard/' . $dash_user . '/profile';
$password_url = rtrim($sitepath, '/') . '/dashboard/' . $dash_user . '/password';
$base_dash = rtrim($sitepath, '/') . '/dashboard/';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
<?php include __DIR__ . '/../inc/head.php'; ?>
<style>
  .dash-sidebar { background: #1e2430; }
  .dash-sidebar a { color: rgba(255,255,255,.88); text-decoration: none; }
  .dash-sidebar a:hover,
  .dash-sidebar a.dash-active { background: rgba(0,68,150,.45); color: #fff; }
  .dash-sidebar .dash-sub { background: #161b24; }
  .dash-sidebar .dash-divider { border-color: rgba(255,255,255,.08); }
  .dash-sidebar button { color: rgba(255,255,255,.88); }
  .dash-sidebar button:hover { background: rgba(255,255,255,.06); }
  @media (max-width: 1023px) {
    .dash-sidebar-panel {
      transform: translateX(-100%);
      transition: transform .2s ease;
    }
    .dash-sidebar-panel.open { transform: translateX(0); }
  }
  .dash-user-menu { display: none; }
  .dash-user-menu.open { display: block; }
  @keyframes dash-rise {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  .dash-rise { animation: dash-rise .45s ease both; }
  .dash-rise-delay-1 { animation-delay: .06s; }
  .dash-rise-delay-2 { animation-delay: .12s; }
  .dash-rise-delay-3 { animation-delay: .18s; }
</style>
</head>
<body class="bg-[#f4f6fa] text-on-surface font-body-md antialiased min-h-screen">
<header class="sticky top-0 z-40 bg-primary shadow-sm">
  <div class="flex items-center justify-between px-4 lg:px-6 h-14 lg:h-16">
    <div class="flex items-center gap-3 min-w-0">
      <button type="button" id="dash-menu-toggle" class="lg:hidden p-2 rounded-lg text-white hover:bg-white/10" aria-label="Open menu">
        <span class="material-symbols-outlined">menu</span>
      </button>
      <a href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>" class="flex flex-col leading-none min-w-0" title="Back to Home">
        <span class="uppercase font-bold text-[15px] sm:text-[17px] text-white tracking-tight truncate" style="font-family: 'Plus Jakarta Sans', sans-serif;">Let's see the menu</span>
        <span class="text-[10px] sm:text-[11px] tracking-[1.2px] text-white/75 uppercase" style="font-family: Arial, sans-serif;"><?php echo htmlspecialchars($dash_console_label, ENT_QUOTES, 'UTF-8'); ?></span>
      </a>
    </div>
    <div class="flex items-center gap-2 sm:gap-3">
      <?php if ($show_earnings): ?>
      <div class="hidden md:flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-3 py-1.5 text-white text-sm">
        <span class="material-symbols-outlined text-[18px] text-tertiary-fixed-dim">payments</span>
        <span class="opacity-80">Earnings</span>
        <span class="font-bold tabular-nums"><?php echo htmlspecialchars($dash_earnings, ENT_QUOTES, 'UTF-8'); ?></span>
      </div>
      <?php endif; ?>
      <a href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>" class="hidden sm:inline-flex items-center gap-1 text-sm text-white/90 hover:text-white hover:bg-white/10 px-3 py-1.5 rounded-full border border-white/25 transition-colors">
        Back to Site
      </a>
      <div class="relative">
        <button type="button" id="dash-user-toggle" class="inline-flex items-center gap-2 rounded-full bg-white/10 hover:bg-white/15 border border-white/20 pl-1.5 pr-2.5 py-1 text-white text-sm transition-colors" aria-expanded="false" aria-controls="dash-user-menu">
          <span class="w-8 h-8 rounded-full bg-white text-primary font-bold flex items-center justify-center text-sm"><?php echo htmlspecialchars($dash_initial, ENT_QUOTES, 'UTF-8'); ?></span>
          <span class="hidden sm:inline font-semibold max-w-[9rem] truncate"><?php echo htmlspecialchars($dash_user_name, ENT_QUOTES, 'UTF-8'); ?></span>
          <span class="material-symbols-outlined text-[18px] opacity-80">expand_more</span>
        </button>
        <div id="dash-user-menu" class="dash-user-menu absolute right-0 mt-2 w-60 rounded-xl bg-white shadow-xl border border-outline-variant/30 overflow-hidden z-50">
          <div class="px-4 py-3 border-b border-outline-variant/20">
            <p class="font-bold text-sm text-on-background truncate"><?php echo htmlspecialchars($dash_user_name, ENT_QUOTES, 'UTF-8'); ?></p>
            <p class="text-xs text-on-surface-variant truncate"><?php echo htmlspecialchars($dash_user_email, ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <a href="<?php echo htmlspecialchars($profile_url, ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 px-4 py-2.5 text-sm text-on-surface hover:bg-surface-container-low no-underline">
            <span class="material-symbols-outlined text-[18px]">person</span> Edit profile
          </a>
          <a href="<?php echo htmlspecialchars($password_url, ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 px-4 py-2.5 text-sm text-on-surface hover:bg-surface-container-low no-underline">
            <span class="material-symbols-outlined text-[18px]">lock</span> Change password
          </a>
          <div class="border-t border-outline-variant/20 px-4 py-2">
            <p class="text-[10px] uppercase tracking-wider font-bold text-on-surface-variant mb-1">Preview as</p>
            <a href="<?php echo htmlspecialchars($base_dash . 'customer/', ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 py-1.5 text-sm text-on-surface hover:text-primary no-underline <?php echo $dash_user === 'customer' ? 'font-bold text-primary' : ''; ?>">Customer</a>
            <a href="<?php echo htmlspecialchars($base_dash . 'vendor/', ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 py-1.5 text-sm text-on-surface hover:text-primary no-underline <?php echo $dash_user === 'vendor' ? 'font-bold text-primary' : ''; ?>">Vendor</a>
            <a href="<?php echo htmlspecialchars($base_dash . 'affiliate/', ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 py-1.5 text-sm text-on-surface hover:text-primary no-underline <?php echo $dash_user === 'affiliate' ? 'font-bold text-primary' : ''; ?>">Affiliate</a>
          </div>
          <a href="<?php echo htmlspecialchars($logout_url, ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-2 px-4 py-2.5 text-sm text-secondary hover:bg-secondary/5 no-underline border-t border-outline-variant/20 font-semibold">
            <span class="material-symbols-outlined text-[18px]">logout</span> Logout
          </a>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="flex min-h-[calc(100vh-3.5rem)] lg:min-h-[calc(100vh-4rem)]">
  <div id="dash-overlay" class="fixed inset-0 bg-black/40 z-30 hidden lg:hidden" aria-hidden="true"></div>

  <aside id="dash-sidebar" class="dash-sidebar-panel fixed lg:sticky top-14 lg:top-16 left-0 z-40 h-[calc(100vh-3.5rem)] lg:h-[calc(100vh-4rem)] w-64 shrink-0 overflow-y-auto dash-sidebar shadow-xl lg:shadow-none">
    <div class="h-1 bg-tertiary-fixed-dim"></div>
    <?php include $sidebar_file; ?>
  </aside>

  <main class="flex-1 min-w-0 p-4 md:p-6 lg:p-8">
    <?php echo $content; ?>
  </main>
</div>

<script>
(function () {
  var toggle = document.getElementById('dash-menu-toggle');
  var sidebar = document.getElementById('dash-sidebar');
  var overlay = document.getElementById('dash-overlay');
  var userToggle = document.getElementById('dash-user-toggle');
  var userMenu = document.getElementById('dash-user-menu');

  function closeSidebar() {
    if (!sidebar) return;
    sidebar.classList.remove('open');
    if (overlay) overlay.classList.add('hidden');
  }
  function openSidebar() {
    if (!sidebar) return;
    sidebar.classList.add('open');
    if (overlay) overlay.classList.remove('hidden');
  }
  if (toggle && sidebar) {
    toggle.addEventListener('click', function () {
      if (sidebar.classList.contains('open')) closeSidebar();
      else openSidebar();
    });
  }
  if (overlay) overlay.addEventListener('click', closeSidebar);

  if (userToggle && userMenu) {
    userToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      var open = userMenu.classList.toggle('open');
      userToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    document.addEventListener('click', function () {
      userMenu.classList.remove('open');
      userToggle.setAttribute('aria-expanded', 'false');
    });
  }

  document.querySelectorAll('[data-dash-accordion]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var panel = document.getElementById(btn.getAttribute('aria-controls'));
      if (!panel) return;
      var openNow = panel.classList.toggle('hidden') === false;
      btn.setAttribute('aria-expanded', openNow ? 'true' : 'false');
      var icon = btn.querySelector('[data-caret]');
      if (icon) icon.textContent = openNow ? 'expand_less' : 'expand_more';
    });
  });
})();
</script>
</body>
</html>
