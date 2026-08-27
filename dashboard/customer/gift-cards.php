<?php
require_once __DIR__ . '/../../inc/site-settings.php';

$dash_user = 'customer';
$dash_page = 'gift-cards';
$dash_user_name = 'Manery deleon';
$dash_user_email = 'manerydeleon@gmail.com';
$page_title = 'My Gift Cards - Customer Dashboard';

$gift_cards = [
    [
        'business' => 'Letsseethemenu',
        'address' => '6 Midway Oval, Groton, CT 06340',
        'offer' => '10% Off',
        'value' => '$50',
        'valid_from' => 'Aug 15, 2026',
        'valid_to' => 'Aug 31, 2026',
        'available' => '1 scan',
        'cover' => 'assets/img/blog-patio.jpg',
        'logo' => 'assets/img/blog-farm.jpg',
        'type' => 'Gift Certificate',
    ],
    [
        'business' => 'Oak & Smoke',
        'address' => '120 Congress Ave, Austin, TX 78701',
        'offer' => 'Free dessert',
        'value' => '$25',
        'valid_from' => 'Aug 01, 2026',
        'valid_to' => 'Sep 30, 2026',
        'available' => '2 scans',
        'cover' => 'assets/img/oak-smoke.jpg',
        'logo' => 'assets/img/oak-smoke.jpg',
        'type' => 'Coupon',
    ],
    [
        'business' => 'Sakura Soul',
        'address' => '88 Rainey St, Austin, TX 78701',
        'offer' => '15% Off',
        'value' => '$40',
        'valid_from' => 'Jul 20, 2026',
        'valid_to' => 'Oct 20, 2026',
        'available' => '1 scan',
        'cover' => 'assets/img/sakura.jpg',
        'logo' => 'assets/img/sakura.jpg',
        'type' => 'Gift Certificate',
    ],
];

ob_start();
?>
<style>
  .gc-card {
    font-family: 'Plus Jakarta Sans', Georgia, serif;
  }
  .gc-cover {
    background: linear-gradient(135deg, #0b2a5c 0%, #2a5db0 55%, #654000 100%);
  }
  .gc-rule {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: #a8b0bf;
  }
  .gc-rule::before,
  .gc-rule::after {
    content: '';
    flex: 1;
    height: 1px;
    background: #d8dde6;
  }
</style>
<div class="max-w-6xl mx-auto">
  <div class="dash-rise mb-6 md:mb-8">
    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Rewards</p>
    <h1 class="font-headline-lg text-[28px] md:text-[32px] text-on-background leading-tight">My Gift Cards</h1>
    <p class="mt-2 text-on-surface-variant text-sm md:text-base max-w-2xl">
      Gift certificates and coupons linked to your account — same card style for both.
    </p>
  </div>

  <?php if (!$gift_cards): ?>
  <div class="rounded-3xl border border-dashed border-outline-variant bg-white p-10 text-center">
    <span class="material-symbols-outlined text-primary text-5xl mb-3">card_giftcard</span>
    <h2 class="font-bold text-lg text-on-background mb-1">No gift cards yet</h2>
    <p class="text-sm text-on-surface-variant">When you buy or receive a gift card, it will appear here.</p>
  </div>
  <?php else: ?>
  <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-5 md:gap-6">
    <?php foreach ($gift_cards as $i => $card): ?>
    <article class="gc-card dash-rise <?php echo $i === 1 ? 'dash-rise-delay-1' : ($i === 2 ? 'dash-rise-delay-2' : ''); ?> bg-white rounded-[1.35rem] border border-[#e5e8ef] shadow-[0_8px_24px_rgba(15,35,70,0.08)] overflow-hidden flex flex-col">
      <div class="gc-cover relative h-28 md:h-32">
        <img src="<?php echo htmlspecialchars($card['cover'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-70 mix-blend-luminosity" loading="lazy">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0b2a5c]/70 to-transparent"></div>
        <div class="absolute left-1/2 -bottom-8 -translate-x-1/2">
          <div class="w-16 h-16 rounded-full border-4 border-white shadow-md overflow-hidden bg-[#7dcf4a]">
            <img src="<?php echo htmlspecialchars($card['logo'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
          </div>
        </div>
      </div>

      <div class="pt-11 px-5 pb-5 text-center flex-1 flex flex-col">
        <h2 class="text-[1.15rem] font-bold text-[#0f274d] leading-tight"><?php echo htmlspecialchars($card['business'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <p class="mt-1 text-[11px] leading-snug text-[#8b93a3]"><?php echo htmlspecialchars($card['address'], ENT_QUOTES, 'UTF-8'); ?></p>

        <div class="gc-rule my-4 text-[10px]">◆</div>

        <p class="text-[1.05rem] font-semibold text-[#0f274d]"><?php echo htmlspecialchars($card['offer'], ENT_QUOTES, 'UTF-8'); ?></p>
        <p class="mt-1 text-[2.35rem] leading-none font-extrabold tracking-tight text-[#0f274d]"><?php echo htmlspecialchars($card['value'], ENT_QUOTES, 'UTF-8'); ?></p>

        <div class="mt-4 grid grid-cols-2 rounded-xl border border-[#dfe4ec] overflow-hidden text-left">
          <div class="px-3 py-2.5 border-r border-[#dfe4ec]">
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#8b93a3]">Valid</p>
            <p class="mt-1 text-[11px] leading-snug text-[#0f274d] font-semibold"><?php echo htmlspecialchars($card['valid_from'] . ' → ' . $card['valid_to'], ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
          <div class="px-3 py-2.5">
            <p class="text-[10px] font-bold uppercase tracking-wider text-[#8b93a3]">Available</p>
            <p class="mt-1 text-[11px] leading-snug text-[#0f274d] font-semibold"><?php echo htmlspecialchars($card['available'], ENT_QUOTES, 'UTF-8'); ?></p>
          </div>
        </div>

        <div class="gc-rule my-4 text-[10px]">❧</div>

        <p class="text-[11px] text-[#8b93a3]"><?php echo htmlspecialchars($card['type'], ENT_QUOTES, 'UTF-8'); ?> · Presented through</p>
        <p class="mt-1 text-sm font-bold text-[#0f274d]">www.letsseethemenu.com</p>

        <div class="mt-auto pt-4">
          <button type="button" class="w-full inline-flex items-center justify-center gap-1.5 rounded-full bg-primary text-white font-bold text-sm px-4 py-2.5 hover:bg-primary-container transition-colors">
            <span class="material-symbols-outlined text-[18px]">qr_code_2</span>
            Show to redeem
          </button>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
