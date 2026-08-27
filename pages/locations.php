<?php
require_once __DIR__ . '/../inc/site-settings.php';

$state_slug = isset($_GET['state']) ? strtolower(trim((string) $_GET['state'])) : 'texas';
$city_slug = isset($_GET['city']) ? strtolower(trim((string) $_GET['city'])) : 'austin';
$state_slug = preg_replace('/[^a-z0-9\-]/', '', $state_slug) ?? 'texas';
$city_slug = preg_replace('/[^a-z0-9\-]/', '', $city_slug) ?? 'austin';

$state_name = ucwords(str_replace('-', ' ', $state_slug));
$city_name = ucwords(str_replace('-', ' ', $city_slug));

$page = 'locations';
$page_title = 'Menus in ' . $city_name . ' - Let\'s See The Menu';
$html_class = 'scroll-smooth';
$body_class = 'bg-surface text-on-surface min-h-screen flex flex-col font-body-md antialiased overflow-x-hidden';
ob_start();
?>
<main class="flex-grow pb-24 md:pb-lg">
<?php include __DIR__ . '/../inc/hero.php'; ?>
<div class="max-w-container-max mx-auto px-margin-mobile md:px-md w-full">
<nav class="py-4 text-sm text-outline font-label-sm flex items-center gap-2 mt-4" aria-label="Breadcrumb">
<a class="hover:text-primary transition-colors" href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>">Home</a>
<span>/</span>
<a class="hover:text-primary transition-colors" href="available-states">States</a>
<span>/</span>
<a class="hover:text-primary transition-colors" href="state/<?php echo htmlspecialchars(rawurlencode($state_slug), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($state_name, ENT_QUOTES, 'UTF-8'); ?></a>
<span>/</span>
<span class="text-on-surface font-semibold"><?php echo htmlspecialchars($city_name, ENT_QUOTES, 'UTF-8'); ?></span>
</nav>
<div class="mt-lg">
<?php include __DIR__ . '/../inc/search-bar.php'; ?>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-xl">
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Oak &amp; Smoke" src="assets/img/oak-smoke.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.8
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Oak &amp; Smoke</h3>
<span class="text-green-600 font-label-xs font-bold text-xs uppercase bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Open</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Authentic Texas BBQ and classic American comfort food.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">American</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">BBQ</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Sakura Soul" src="assets/img/sakura.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.9
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Sakura Soul</h3>
<span class="text-green-600 font-label-xs font-bold text-xs uppercase bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Open</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Premium sushi and modern Japanese cuisine.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Japanese</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Sushi</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Mesa Grill" src="assets/img/mesa.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.6
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Mesa Grill</h3>
<span class="text-on-surface-variant font-label-xs font-bold text-xs uppercase bg-surface-container-high px-2 py-0.5 rounded-full border border-outline-variant/30">Closed</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Vibrant street tacos and craft margaritas.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Mexican</span>
<span class="bg-secondary/10 text-secondary font-label-xs px-2.5 py-1 rounded-full">Trending</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Chef's Plating" src="assets/img/blog-farm.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.9
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Chef's Plating</h3>
<span class="text-green-600 font-label-xs font-bold text-xs uppercase bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Open</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Elevated fine dining tasting menus.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Fine Dining</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">European</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Dragon Palace" src="assets/img/mesa.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.5
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Dragon Palace</h3>
<span class="text-green-600 font-label-xs font-bold text-xs uppercase bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Open</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Authentic Chinese cuisine and dim sum specialties.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Chinese</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Dim Sum</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Desi Delights" src="assets/img/petit-paris.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.7
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Desi Delights</h3>
<span class="text-green-600 font-label-xs font-bold text-xs uppercase bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Open</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Rich and flavorful traditional Indian curries and tandoori.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Indian</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Curry</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Seoul Kitchen" src="assets/img/sakura.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.6
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Seoul Kitchen</h3>
<span class="text-on-surface-variant font-label-xs font-bold text-xs uppercase bg-surface-container-high px-2 py-0.5 rounded-full border border-outline-variant/30">Closed</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Modern Korean BBQ and traditional comfort food.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Korean</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">BBQ</span>
</div>
</div>
</a>
<a href="single-restaurant" class="bg-white rounded-xl overflow-hidden card-shadow card-hover flex flex-col relative group cursor-pointer border border-outline-variant/20">
<div class="relative h-48 w-full overflow-hidden">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="Liberty Grill" src="assets/img/oak-smoke.jpg">
<div class="absolute top-3 right-3 bg-tertiary-fixed-dim text-on-tertiary-fixed font-label-xs px-2 py-1 rounded-full shadow-sm flex items-center gap-1 font-bold z-10">
<span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            4.4
                        </div>
</div>
<div class="p-4 flex flex-col flex-grow">
<div class="flex justify-between items-start mb-2">
<h3 class="font-title-card text-title-card text-on-surface">Liberty Grill</h3>
<span class="text-green-600 font-label-xs font-bold text-xs uppercase bg-green-50 px-2 py-0.5 rounded-full border border-green-200">Open</span>
</div>
<p class="text-body-md text-on-surface-variant mb-4 line-clamp-2">Classic American diner serving all-day breakfast and burgers.</p>
<div class="mt-auto flex flex-wrap gap-2">
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">American</span>
<span class="bg-primary/10 text-primary font-label-xs px-2.5 py-1 rounded-full">Diner</span>
</div>
</div>
</a>
</div>
<div class="flex justify-center items-center gap-2 mb-xl mt-lg">
<button class="bg-white text-on-surface-variant font-label-sm px-4 py-2 rounded-full border border-outline-variant hover:bg-surface-container-high transition-colors shadow-sm" type="button">Previous</button>
<button class="bg-primary text-white font-label-sm w-10 h-10 rounded-full flex items-center justify-center shadow-md" type="button">1</button>
<button class="bg-white text-on-surface-variant font-label-sm w-10 h-10 rounded-full flex items-center justify-center hover:bg-surface-container-high transition-colors shadow-sm" type="button">2</button>
<button class="bg-white text-on-surface-variant font-label-sm w-10 h-10 rounded-full flex items-center justify-center hover:bg-surface-container-high transition-colors shadow-sm" type="button">3</button>
<button class="bg-white text-on-surface-variant font-label-sm w-10 h-10 rounded-full flex items-center justify-center hover:bg-surface-container-high transition-colors shadow-sm" type="button">4</button>
<button class="bg-white text-on-surface-variant font-label-sm px-4 py-2 rounded-full border border-outline-variant hover:bg-surface-container-high transition-colors shadow-sm" type="button">Next</button>
</div>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
