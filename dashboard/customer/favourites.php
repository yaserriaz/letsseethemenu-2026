<?php
require_once __DIR__ . '/../../inc/site-settings.php';

$dash_user = 'customer';
$dash_page = 'favourites';
$dash_user_name = 'Manery deleon';
$dash_user_email = 'manerydeleon@gmail.com';
$page_title = 'My Favourites - Customer Dashboard';

/* Demo: venues the user saved by tapping the heart on listing / restaurant pages */
$favourites = [
    [
        'name' => 'Oak & Smoke',
        'cuisine' => 'BBQ · American',
        'city' => 'Austin, TX',
        'rating' => 4.8,
        'open' => true,
        'saved_on' => 'Aug 22, 2026',
        'image' => 'assets/img/oak-smoke.jpg',
        'href' => 'single-restaurant',
    ],
    [
        'name' => 'Sakura Soul',
        'cuisine' => 'Japanese · Sushi',
        'city' => 'Austin, TX',
        'rating' => 4.9,
        'open' => true,
        'saved_on' => 'Aug 19, 2026',
        'image' => 'assets/img/sakura.jpg',
        'href' => 'single-restaurant',
    ],
    [
        'name' => 'Petit Paris',
        'cuisine' => 'French · Cafe',
        'city' => 'Austin, TX',
        'rating' => 4.6,
        'open' => false,
        'saved_on' => 'Aug 10, 2026',
        'image' => 'assets/img/petit-paris.jpg',
        'href' => 'single-restaurant',
    ],
];

ob_start();
?>
<div class="max-w-4xl mx-auto">
  <div class="dash-rise mb-6 md:mb-8">
    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Saved listings</p>
    <h1 class="font-headline-lg text-[28px] md:text-[32px] text-on-background leading-tight">My Favourites</h1>
    <p class="mt-2 text-on-surface-variant text-sm md:text-base max-w-2xl">
      Places you saved with the heart icon. Tap the heart again here to remove a listing.
    </p>
  </div>

  <?php if (!$favourites): ?>
  <div class="rounded-3xl border border-dashed border-outline-variant bg-white p-10 text-center">
    <span class="material-symbols-outlined text-secondary text-5xl mb-3" style="font-variation-settings: 'FILL' 1;">favorite</span>
    <h2 class="font-bold text-lg text-on-background mb-1">No favourites yet</h2>
    <p class="text-sm text-on-surface-variant mb-5 max-w-sm mx-auto">
      Browse menus and tap the heart on any restaurant listing to save it here.
    </p>
    <a href="<?php echo htmlspecialchars(rtrim($sitepath, '/') . '/available-states', ENT_QUOTES, 'UTF-8'); ?>"
       class="inline-flex items-center gap-1.5 rounded-full bg-primary text-white font-bold text-sm px-5 py-2.5 no-underline hover:bg-primary-container">
      Browse restaurants
    </a>
  </div>
  <?php else: ?>
  <div class="space-y-3">
    <?php foreach ($favourites as $i => $fav): ?>
    <article class="dash-rise <?php echo $i ? 'dash-rise-delay-1' : ''; ?> flex gap-3 md:gap-4 rounded-2xl bg-white border border-outline-variant/30 shadow-sm p-3 md:p-4 hover:border-primary/25 transition-colors">
      <a href="<?php echo htmlspecialchars($fav['href'], ENT_QUOTES, 'UTF-8'); ?>" class="w-24 h-24 md:w-28 md:h-28 rounded-xl overflow-hidden bg-surface-container shrink-0 no-underline">
        <img src="<?php echo htmlspecialchars($fav['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
      </a>

      <div class="min-w-0 flex-1 flex flex-col">
        <div class="flex items-start justify-between gap-2">
          <div class="min-w-0">
            <h2 class="font-bold text-base md:text-lg text-on-background leading-snug truncate">
              <a href="<?php echo htmlspecialchars($fav['href'], ENT_QUOTES, 'UTF-8'); ?>" class="no-underline text-inherit hover:text-primary">
                <?php echo htmlspecialchars($fav['name'], ENT_QUOTES, 'UTF-8'); ?>
              </a>
            </h2>
            <p class="text-sm text-on-surface-variant mt-0.5"><?php echo htmlspecialchars($fav['cuisine'], ENT_QUOTES, 'UTF-8'); ?></p>
            <p class="text-xs text-on-surface-variant mt-1 flex flex-wrap items-center gap-x-3 gap-y-1">
              <span class="inline-flex items-center gap-0.5">
                <span class="material-symbols-outlined text-[14px]">location_on</span>
                <?php echo htmlspecialchars($fav['city'], ENT_QUOTES, 'UTF-8'); ?>
              </span>
              <span class="inline-flex items-center gap-0.5 text-[#654000] font-semibold">
                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                <?php echo htmlspecialchars((string) $fav['rating'], ENT_QUOTES, 'UTF-8'); ?>
              </span>
              <span class="<?php echo $fav['open'] ? 'text-emerald-700' : 'text-on-surface-variant'; ?> font-semibold">
                <?php echo $fav['open'] ? 'Open now' : 'Closed'; ?>
              </span>
            </p>
          </div>

          <button type="button"
                  class="shrink-0 inline-flex items-center justify-center w-10 h-10 rounded-full text-secondary hover:bg-secondary/10 transition-colors"
                  aria-label="Remove from favourites"
                  title="Remove favourite (unheart)">
            <span class="material-symbols-outlined text-[22px]" style="font-variation-settings: 'FILL' 1;">favorite</span>
          </button>
        </div>

        <div class="mt-auto pt-2 flex flex-wrap items-center justify-between gap-2">
          <p class="text-[11px] text-on-surface-variant inline-flex items-center gap-1">
            <span class="material-symbols-outlined text-[14px] text-secondary" style="font-variation-settings: 'FILL' 1;">favorite</span>
            Saved <?php echo htmlspecialchars($fav['saved_on'], ENT_QUOTES, 'UTF-8'); ?>
          </p>
          <a href="<?php echo htmlspecialchars($fav['href'], ENT_QUOTES, 'UTF-8'); ?>"
             class="inline-flex items-center gap-1 rounded-full bg-primary/10 text-primary font-bold text-sm px-4 py-1.5 no-underline hover:bg-primary hover:text-white transition-colors">
            View listing
            <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
          </a>
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
