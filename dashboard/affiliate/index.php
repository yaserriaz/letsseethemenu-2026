<?php
require_once __DIR__ . '/../../inc/site-settings.php';

$dash_user = 'affiliate';
$dash_page = 'index';
$dash_user_name = 'Mair Ahmed';
$dash_user_email = 'mairahmed007@gmail.com';
$dash_earnings = '$0.00';
$dash_role_label = 'Affiliates';
$dash_member_since = 'Aug 2026';
$dash_first = explode(' ', trim($dash_user_name))[0];
$dash_initial = strtoupper(substr($dash_user_name, 0, 1));

$stats = [
    ['label' => 'Active venues', 'value' => '0', 'suffix' => 'units', 'icon' => 'storefront'],
    ['label' => 'Total orders', 'value' => '0', 'suffix' => 'orders', 'icon' => 'receipt_long'],
    ['label' => 'Earnings', 'value' => '$0.00', 'suffix' => 'balance', 'icon' => 'account_balance_wallet', 'accent' => true],
];

$base = rtrim($sitepath, '/') . '/dashboard/affiliate/';
$actions = [
    ['title' => 'Edit Profile', 'desc' => 'Update account details and contact info.', 'icon' => 'person', 'href' => $base . 'profile', 'warn' => false],
    ['title' => 'Change Password', 'desc' => 'Keep your affiliate account secure.', 'icon' => 'lock', 'href' => $base . 'password', 'warn' => false],
    ['title' => 'Restaurants / Venues', 'desc' => 'Create and manage venue profiles.', 'icon' => 'restaurant', 'href' => $base . 'restaurants', 'warn' => true],
    ['title' => 'Online Menus', 'desc' => 'Publish the menus diners see online.', 'icon' => 'menu_book', 'href' => $base . 'restaurants', 'warn' => true],
    ['title' => 'My Banners', 'desc' => 'Run geo-targeted promotional banners.', 'icon' => 'image', 'href' => $base . 'banners', 'warn' => true],
    ['title' => 'Manage Events', 'desc' => 'Create food events and community games.', 'icon' => 'event', 'href' => $base . 'events', 'warn' => true],
    ['title' => 'My Orders', 'desc' => 'Review purchases and account activity.', 'icon' => 'receipt_long', 'href' => $base . 'orders', 'warn' => false],
    ['title' => 'My Favourites', 'desc' => 'Venues and menus you have saved.', 'icon' => 'favorite', 'href' => $base . 'favourites', 'warn' => false],
    ['title' => 'Affiliate Sales', 'desc' => 'Track your referrals and sales performance.', 'icon' => 'monitoring', 'href' => $base . 'affiliates', 'warn' => false],
    ['title' => 'Earnings & Payouts', 'desc' => 'View your earnings and payout details.', 'icon' => 'payments', 'href' => $base . 'affiliates', 'warn' => false],
    ['title' => 'Promote to Earn', 'desc' => 'Market products for commissions.', 'icon' => 'campaign', 'href' => $base . 'promote', 'warn' => false],
    ['title' => 'Graphics Material', 'desc' => 'Download brand marketing assets.', 'icon' => 'download', 'href' => $base . 'promote', 'warn' => false],
];

$page_title = 'Affiliates Dashboard - Let\'s See The Menu';
ob_start();
?>
<div class="max-w-6xl mx-auto">
  <section class="dash-rise relative overflow-hidden rounded-3xl mb-6 md:mb-8 bg-gradient-to-br from-[#0b2a5c] via-primary to-[#1a5bb8] text-white px-5 py-6 md:px-8 md:py-8">
    <div class="pointer-events-none absolute -right-10 -top-16 w-56 h-56 rounded-full bg-white/10 blur-2xl"></div>
    <div class="pointer-events-none absolute right-16 bottom-0 w-40 h-40 rounded-full bg-tertiary-fixed-dim/25 blur-xl"></div>
    <div class="relative flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
      <div class="max-w-xl">
        <p class="text-xs uppercase tracking-[0.18em] text-white/70 font-semibold mb-2">Affiliate console</p>
        <h1 class="font-headline-lg text-[28px] md:text-[34px] leading-tight text-white mb-2">
          Welcome back, <?php echo htmlspecialchars($dash_first, ENT_QUOTES, 'UTF-8'); ?>
        </h1>
        <p class="text-white/80 text-sm md:text-base leading-relaxed">
          Grow your network, promote local venues, and track commissions from one place.
        </p>
      </div>
      <div class="flex items-center gap-3 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-md px-4 py-3 min-w-0">
        <span class="w-12 h-12 rounded-2xl bg-white text-primary font-bold text-lg flex items-center justify-center shrink-0 shadow-sm">
          <?php echo htmlspecialchars($dash_initial, ENT_QUOTES, 'UTF-8'); ?>
        </span>
        <div class="min-w-0">
          <p class="font-bold text-white truncate"><?php echo htmlspecialchars($dash_user_name, ENT_QUOTES, 'UTF-8'); ?></p>
          <p class="text-xs text-white/75 truncate"><?php echo htmlspecialchars($dash_user_email, ENT_QUOTES, 'UTF-8'); ?></p>
          <div class="flex flex-wrap gap-1.5 mt-2">
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white text-primary"><?php echo htmlspecialchars($dash_role_label, ENT_QUOTES, 'UTF-8'); ?></span>
            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-bold uppercase tracking-wider bg-white/15 text-white border border-white/20"><?php echo htmlspecialchars($dash_member_since, ENT_QUOTES, 'UTF-8'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="dash-rise dash-rise-delay-1 grid grid-cols-1 sm:grid-cols-3 gap-3 md:gap-4 mb-8">
    <?php foreach ($stats as $stat):
        $is_accent = !empty($stat['accent']);
    ?>
    <div class="<?php echo $is_accent ? 'rounded-2xl bg-primary text-white p-5 shadow-md shadow-primary/20' : 'rounded-2xl bg-white border border-outline-variant/30 p-5 shadow-sm'; ?>">
      <div class="flex items-start justify-between gap-3">
        <div>
          <p class="text-xs uppercase tracking-wider font-semibold <?php echo $is_accent ? 'text-white/70' : 'text-on-surface-variant'; ?>"><?php echo htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></p>
          <p class="mt-2 text-2xl md:text-3xl font-bold tabular-nums leading-none"><?php echo htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></p>
          <p class="mt-1 text-xs <?php echo $is_accent ? 'text-white/65' : 'text-on-surface-variant'; ?>"><?php echo htmlspecialchars($stat['suffix'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
        <span class="w-10 h-10 rounded-xl flex items-center justify-center <?php echo $is_accent ? 'bg-white/15 text-white' : 'bg-primary/10 text-primary'; ?>">
          <span class="material-symbols-outlined text-[22px]"><?php echo htmlspecialchars($stat['icon'], ENT_QUOTES, 'UTF-8'); ?></span>
        </span>
      </div>
    </div>
    <?php endforeach; ?>
  </section>

  <section class="dash-rise dash-rise-delay-2">
    <div class="flex items-end justify-between gap-4 mb-4">
      <div>
        <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-1">Shortcuts</p>
        <h2 class="font-headline-md text-headline-md text-on-background">Quick actions</h2>
      </div>
      <p class="hidden sm:block text-xs text-on-surface-variant max-w-xs text-right">Earnings tools are affiliate-only — vendors do not see them.</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3 md:gap-4">
      <?php foreach ($actions as $action): ?>
      <a href="<?php echo htmlspecialchars($action['href'], ENT_QUOTES, 'UTF-8'); ?>" class="group relative flex gap-4 rounded-2xl bg-white border border-outline-variant/30 p-4 md:p-5 no-underline hover:no-underline shadow-sm hover:shadow-md hover:border-primary/30 hover:-translate-y-0.5 transition-all duration-200">
        <?php if (!empty($action['warn'])): ?>
        <span class="absolute top-3 right-3 text-[#c45c12]" title="Needs setup" aria-label="Needs setup">
          <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">warning</span>
        </span>
        <?php endif; ?>
        <span class="w-11 h-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
          <span class="material-symbols-outlined text-[22px]"><?php echo htmlspecialchars($action['icon'], ENT_QUOTES, 'UTF-8'); ?></span>
        </span>
        <div class="min-w-0 pr-4">
          <h3 class="font-bold text-on-background group-hover:text-primary transition-colors leading-snug"><?php echo htmlspecialchars($action['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
          <p class="mt-1 text-sm text-on-surface-variant leading-snug"><?php echo htmlspecialchars($action['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </section>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
