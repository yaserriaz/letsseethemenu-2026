<?php
/**
 * Reusable inner-page title banner.
 *
 * Set on each page (optional overrides):
 *   $page_eyebrow       — small uppercase label
 *   $page_heading       — main H1 (required for layout to show this)
 *   $page_lead          — supporting sentence
 *   $page_hero_image    — path relative to site root, e.g. 'assets/img/blog-patio.jpg'
 *   $page_hero_compact  — true for shorter padding (legal / account pages)
 *   $page_hero_overlay  — 'dark' (default with image) | 'light' | 'none'
 */
if (!isset($page_eyebrow)) {
    $page_eyebrow = '';
}
if (!isset($page_heading)) {
    $page_heading = $page_title ?? '';
}
if (!isset($page_lead)) {
    $page_lead = '';
}

$hero_compact = !empty($page_hero_compact);

/* Default photos by page key — override any page with $page_hero_image */
$hero_image_defaults = [
    'blog'                 => 'assets/img/blog-patio.jpg',
    'blog-single'          => 'assets/img/blog-patio.jpg',
    'contact'              => 'assets/img/restaurant-hero.jpg',
    'how-it-works'         => 'assets/img/foodie-game.jpg',
    'mission-statement'    => 'assets/img/blog-farm.jpg',
    'local-events'         => 'assets/img/game-nba.jpg',
    'become-a-sponsor'     => 'assets/img/game-nhl.jpg',
    'affiliates'           => 'assets/img/oak-smoke.jpg',
    'favorites'            => 'assets/img/mesa.jpg',
    'profile'              => 'assets/img/petit-paris.jpg',
    'terms-condition'      => 'assets/img/blog-farm.jpg',
    'privacy-policy'       => 'assets/img/blog-farm.jpg',
    'legal-disclaimer'     => 'assets/img/blog-farm.jpg',
    'refund-policy'        => 'assets/img/blog-farm.jpg',
    'user-data-deletion'   => 'assets/img/blog-farm.jpg',
    'delivery-information' => 'assets/img/veloce.jpg',
];

$page_key = $page ?? '';
if (!isset($page_hero_image) && isset($hero_image_defaults[$page_key])) {
    $page_hero_image = $hero_image_defaults[$page_key];
}
$page_hero_image = $page_hero_image ?? '';

$has_image = $page_hero_image !== '';
$overlay = $page_hero_overlay ?? ($has_image ? 'dark' : 'none');

$pad = $hero_compact ? 'py-xl' : 'py-xl md:py-[100px]';

if ($has_image) {
    $title_class = 'text-white';
    $lead_class = 'text-white/85';
    $eyebrow_class = 'text-tertiary-fixed-dim';
} else {
    $title_class = 'text-on-background';
    $lead_class = 'text-on-surface-variant';
    $eyebrow_class = 'text-primary';
}
?>
<section class="relative overflow-hidden border-b border-outline-variant/30 <?php echo $pad; ?>">
<?php if ($has_image): ?>
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo htmlspecialchars($page_hero_image, ENT_QUOTES, 'UTF-8'); ?>');"></div>
<?php if ($overlay === 'dark'): ?>
<div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/55 to-black/35 pointer-events-none"></div>
<?php elseif ($overlay === 'light'): ?>
<div class="absolute inset-0 bg-gradient-to-r from-white/90 via-white/75 to-white/50 pointer-events-none"></div>
<?php endif; ?>
<?php else: ?>
<div class="absolute inset-0 bg-gradient-to-br from-primary/10 via-background to-tertiary-fixed/15 pointer-events-none"></div>
<div class="absolute -right-24 -top-24 w-72 h-72 rounded-full bg-primary/15 blur-3xl pointer-events-none"></div>
<div class="absolute -left-16 bottom-0 w-56 h-56 rounded-full bg-secondary/10 blur-3xl pointer-events-none"></div>
<?php endif; ?>

<div class="max-w-container-max mx-auto px-md relative z-10">
<?php if ($page_eyebrow !== ''): ?>
<p class="font-label-sm text-label-sm <?php echo $eyebrow_class; ?> uppercase tracking-wider mb-sm"><?php echo htmlspecialchars($page_eyebrow, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
<h1 class="font-headline-lg text-headline-lg <?php echo $title_class; ?> max-w-3xl"><?php echo htmlspecialchars($page_heading, ENT_QUOTES, 'UTF-8'); ?></h1>
<?php if ($page_lead !== ''): ?>
<p class="font-body-lg text-body-lg <?php echo $lead_class; ?> mt-md max-w-2xl leading-relaxed"><?php echo htmlspecialchars($page_lead, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
</div>
</section>
