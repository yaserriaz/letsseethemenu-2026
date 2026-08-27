<?php
require_once __DIR__ . '/../../inc/site-settings.php';

$dash_user = 'customer';
$dash_page = 'index';
$dash_user_name = 'Manery deleon';
$dash_user_email = 'manerydeleon@gmail.com';
$dash_first = explode(' ', trim($dash_user_name))[0];
$dash_initial = strtoupper(substr($dash_user_name, 0, 1));
$dash_role_label = 'Customer';
$dash_member_since = 'Aug 2026';

$base = rtrim($sitepath, '/') . '/dashboard/customer/';

$actions = [
    [
        'title' => 'Edit Profile',
        'desc' => 'Update your account and contact information.',
        'icon' => 'person',
        'href' => $base . 'profile',
    ],
    [
        'title' => 'Change Password',
        'desc' => 'Change your password to keep your account secure.',
        'icon' => 'lock',
        'href' => $base . 'password',
    ],
    [
        'title' => 'My Orders',
        'desc' => 'View orders, purchases, and account activity.',
        'icon' => 'receipt_long',
        'href' => $base . 'orders',
    ],
    [
        'title' => 'My Gift Cards',
        'desc' => 'Check balances and manage gift cards.',
        'icon' => 'card_giftcard',
        'href' => $base . 'gift-cards',
    ],
    [
        'title' => 'My Favourites',
        'desc' => 'View restaurants and venues you have saved.',
        'icon' => 'favorite',
        'href' => $base . 'favourites',
    ],
];

$page_title = 'Customer Dashboard - Let\'s See The Menu';
ob_start();
?>
<div class="max-w-6xl mx-auto">
  <div class="dash-rise mb-6 md:mb-8">
    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Customer console</p>
    <h1 class="font-headline-lg text-[28px] md:text-[34px] leading-tight text-on-background mb-2">
      Welcome back, <?php echo htmlspecialchars($dash_first, ENT_QUOTES, 'UTF-8'); ?>
    </h1>
    <p class="text-on-surface-variant text-sm md:text-base max-w-2xl">
      Everything you need for your account — profile, orders, gift cards, and saved favourites.
    </p>
  </div>

  <section class="dash-rise dash-rise-delay-1 mb-8">
    <div class="rounded-3xl bg-white border border-outline-variant/30 shadow-sm px-5 py-5 md:px-6 md:py-6 flex flex-col sm:flex-row sm:items-center gap-4 md:gap-6">
      <span class="w-16 h-16 rounded-full bg-primary text-white font-bold text-2xl flex items-center justify-center shrink-0 shadow-md shadow-primary/20">
        <?php echo htmlspecialchars($dash_initial, ENT_QUOTES, 'UTF-8'); ?>
      </span>
      <div class="min-w-0 flex-1">
        <p class="font-bold text-lg text-on-background truncate"><?php echo htmlspecialchars($dash_user_name, ENT_QUOTES, 'UTF-8'); ?></p>
        <p class="text-sm text-on-surface-variant flex items-center gap-1.5 mt-0.5 truncate">
          <span class="material-symbols-outlined text-[16px]">mail</span>
          <?php echo htmlspecialchars($dash_user_email, ENT_QUOTES, 'UTF-8'); ?>
        </p>
        <div class="flex flex-wrap gap-2 mt-3">
          <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-[#1e2430] text-white">
            <?php echo htmlspecialchars($dash_role_label, ENT_QUOTES, 'UTF-8'); ?>
          </span>
          <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-surface-container-high text-on-surface-variant">
            <?php echo htmlspecialchars($dash_member_since, ENT_QUOTES, 'UTF-8'); ?>
          </span>
        </div>
      </div>
      <a href="<?php echo htmlspecialchars($base . 'profile', ENT_QUOTES, 'UTF-8'); ?>"
         class="inline-flex items-center justify-center gap-1.5 rounded-full border border-outline-variant px-4 py-2 text-sm font-semibold text-on-surface hover:border-primary hover:text-primary transition-colors no-underline shrink-0">
        <span class="material-symbols-outlined text-[18px]">edit</span>
        Edit profile
      </a>
    </div>
  </section>

  <section class="dash-rise dash-rise-delay-2">
    <div class="mb-4">
      <p class="text-xs uppercase tracking-[0.16em] text-on-surface-variant font-bold mb-1">Quick actions</p>
      <h2 class="font-headline-md text-headline-md text-on-background">Jump to a section</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3 md:gap-4">
      <?php foreach ($actions as $action): ?>
      <a href="<?php echo htmlspecialchars($action['href'], ENT_QUOTES, 'UTF-8'); ?>"
         class="group flex gap-4 rounded-2xl bg-white border border-outline-variant/30 p-4 md:p-5 no-underline hover:no-underline shadow-sm hover:shadow-md hover:border-primary/30 hover:-translate-y-0.5 transition-all duration-200">
        <span class="w-11 h-11 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-colors">
          <span class="material-symbols-outlined text-[22px]"><?php echo htmlspecialchars($action['icon'], ENT_QUOTES, 'UTF-8'); ?></span>
        </span>
        <div class="min-w-0">
          <h3 class="font-bold text-on-background group-hover:text-primary transition-colors leading-snug">
            <?php echo htmlspecialchars($action['title'], ENT_QUOTES, 'UTF-8'); ?>
          </h3>
          <p class="mt-1 text-sm text-on-surface-variant leading-snug">
            <?php echo htmlspecialchars($action['desc'], ENT_QUOTES, 'UTF-8'); ?>
          </p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </section>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
