<?php
// ponytail: static slide array now; swap for DB rows later without changing markup.
if (!isset($hero_slides) || !is_array($hero_slides)) {
    $hero_slides = [
        [
            'image' => 'assets/img/hero.jpg',
            'badge' => 'Featured This Week',
            'title' => 'Veloce Pizzeria',
            'text' => "The heart of South Congress. Traditional wood-fired techniques meet Austin's vibrant local ingredients.",
            'button_label' => 'View Menu',
            'button_url' => 'single-restaurant.php',
            'button_icon' => 'restaurant',
        ],
        [
            'image' => 'assets/img/mesa.jpg',
            'badge' => 'Trending Now',
            'title' => 'Mesa Grill',
            'text' => 'Vibrant street tacos and craft margaritas in the heart of Downtown Austin.',
            'button_label' => 'View Menu',
            'button_url' => 'single-restaurant.php',
            'button_icon' => 'restaurant',
        ],
        [
            'image' => 'assets/img/oak-smoke.jpg',
            'badge' => 'Local Favorite',
            'title' => 'Oak & Smoke',
            'text' => 'Authentic Texas BBQ and classic American comfort food on North Lamar.',
            'button_label' => 'View Menu',
            'button_url' => 'single-restaurant.php',
            'button_icon' => 'local_fire_department',
        ],
        // Image-only slide: no text/button → whole image is the link when `link` is set.
        [
            'image' => 'assets/img/sakura.jpg',
            'link' => 'single-restaurant.php',
        ],
    ];
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<section class="relative w-full h-[300px] overflow-hidden">
<div class="swiper hero-swiper h-full w-full">
<div class="swiper-wrapper">
<?php foreach ($hero_slides as $slide) :
    $image = $slide['image'] ?? '';
    $badge = trim((string) ($slide['badge'] ?? ''));
    $title = trim((string) ($slide['title'] ?? ''));
    $text = trim((string) ($slide['text'] ?? ''));
    $btn_label = trim((string) ($slide['button_label'] ?? ''));
    $btn_url = trim((string) ($slide['button_url'] ?? ''));
    $btn_icon = trim((string) ($slide['button_icon'] ?? 'restaurant'));
    $link = trim((string) ($slide['link'] ?? ''));
    $has_copy = ($badge !== '' || $title !== '' || $text !== '' || $btn_label !== '');
    $image_only_link = (!$has_copy && $link !== '');
?>
<div class="swiper-slide relative h-[300px]">
<?php if ($image_only_link) : ?>
<a href="<?php echo htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); ?>" class="absolute inset-0 block" aria-label="Featured promotion">
<span class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>');"></span>
</a>
<?php else : ?>
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo htmlspecialchars($image, ENT_QUOTES, 'UTF-8'); ?>');"></div>
<?php if ($has_copy) : ?>
<div class="absolute inset-0 hero-gradient bg-black/50"></div>
<div class="relative z-10 max-w-container-max mx-auto px-md w-full h-full flex items-center text-white pointer-events-none">
<div class="max-w-2xl pointer-events-auto">
<?php if ($badge !== '') : ?>
<span class="inline-block bg-secondary text-white font-label-sm px-4 py-1 rounded-full mb-4 uppercase tracking-wider"><?php echo htmlspecialchars($badge, ENT_QUOTES, 'UTF-8'); ?></span>
<?php endif; ?>
<?php if ($title !== '') : ?>
<h1 class="font-headline-lg text-4xl leading-tight mb-2"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>
<?php endif; ?>
<?php if ($text !== '') : ?>
<p class="text-body-md font-body-md mb-6 opacity-95 leading-relaxed line-clamp-2"><?php echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
<?php if ($btn_label !== '' && $btn_url !== '') : ?>
<div class="flex flex-wrap gap-4">
<a href="<?php echo htmlspecialchars($btn_url, ENT_QUOTES, 'UTF-8'); ?>" class="btn-iconed bg-primary text-white font-bold px-6 py-3 rounded-full text-label-sm hover:bg-primary-container transition-all duration-300 shadow-xl">
<span class="material-symbols-outlined"><?php echo htmlspecialchars($btn_icon, ENT_QUOTES, 'UTF-8'); ?></span>
<span class="spn"><?php echo htmlspecialchars($btn_label, ENT_QUOTES, 'UTF-8'); ?></span>
</a>
</div>
<?php endif; ?>
</div>
</div>
<?php endif; ?>
<?php endif; ?>
</div>
<?php endforeach; ?>
</div>
</div>
<div class="absolute bottom-6 right-md z-20 flex items-center gap-4">
<button class="hero-swiper-prev w-8 h-8 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors text-white" type="button" aria-label="Previous">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<div class="hero-swiper-pagination flex gap-2"></div>
<button class="hero-swiper-next w-8 h-8 rounded-full border border-white/30 flex items-center justify-center hover:bg-white/10 transition-colors text-white" type="button" aria-label="Next">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
(function () {
  if (typeof Swiper === 'undefined') return;
  new Swiper('.hero-swiper', {
    loop: true,
    speed: 500,
    autoplay: { delay: 5000, disableOnInteraction: false },
    navigation: {
      nextEl: '.hero-swiper-next',
      prevEl: '.hero-swiper-prev'
    },
    pagination: {
      el: '.hero-swiper-pagination',
      clickable: true,
      bulletClass: 'hero-bullet',
      bulletActiveClass: 'hero-bullet-active',
      renderBullet: function (index, className) {
        return '<button type="button" class="' + className + ' w-2 h-2 rounded-full bg-white/30 transition-colors" aria-label="Go to slide ' + (index + 1) + '"></button>';
      }
    }
  });
})();
</script>
<style>
.hero-swiper-pagination .hero-bullet-active { background-color: #fff !important; }
.hero-swiper { overflow: hidden; }
</style>
