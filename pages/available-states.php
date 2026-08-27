<?php
require_once __DIR__ . '/../inc/site-settings.php';
$page = 'available-states';
$page_title = "Let's See The Menu - Select Your State";
$body_class = 'bg-background text-on-surface font-body-md antialiased flex flex-col min-h-screen';
ob_start();
?>
<?php include __DIR__ . '/../inc/hero.php'; ?>
<main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-md py-lg pb-24 md:pb-lg">
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-lg gap-md">
<div>
<span class="font-label-sm text-label-sm text-tertiary-fixed-dim uppercase tracking-wider mb-xs block">Explore</span>
<h1 class="font-headline-lg text-headline-lg text-on-surface relative inline-block">
                    Select Your State
                    <div class="absolute -bottom-2 left-0 w-1/2 h-1 bg-tertiary-fixed-dim rounded-full"></div>
</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-sm">Find restaurants and menus wherever you are</p>
</div>
<div class="w-full md:w-auto">
<div class="flex items-center bg-surface-container-lowest rounded-full px-4 py-2 shadow-[0_2px_8px_rgba(0,68,150,0.08)] border border-outline-variant focus-within:border-primary focus-within:ring-1 focus-within:ring-primary w-full md:w-72">
<span class="material-symbols-outlined text-on-surface-variant mr-2">search</span>
<input class="bg-transparent border-none focus:ring-0 text-body-md w-full outline-none placeholder-on-surface-variant" placeholder="Filter states..." type="text">
</div>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-lg">
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/california">
<img alt="California" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-ca.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">California</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">1,245 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/new-york">
<img alt="New York" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-ny.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">New York</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">980 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/texas">
<img alt="Texas" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-tx.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">Texas</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">850 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/florida">
<img alt="Florida" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-fl.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">Florida</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">720 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/illinois">
<img alt="Illinois" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-il.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">Illinois</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">650 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/pennsylvania">
<img alt="Pennsylvania" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-pa.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">Pennsylvania</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">540 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/ohio">
<img alt="Ohio" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-oh.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">Ohio</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">480 Menus</p>
</div>
</a>
<a class="group relative rounded-xl overflow-hidden aspect-[4/3] bg-surface-container shadow-[0_2px_8px_rgba(0,68,150,0.1)] transition-all duration-300 state-card-hover block" href="state/georgia">
<img alt="Georgia" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/state-ga.jpg">
<div class="absolute inset-0 bg-gradient-to-t from-[#2a1800]/80 via-[#654000]/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 p-4 w-full">
<h3 class="font-title-card text-title-card text-on-primary">Georgia</h3>
<p class="font-label-xs text-label-xs text-on-primary/80 mt-1">410 Menus</p>
</div>
</a>
</div>
<div class="flex justify-center items-center gap-xs mt-xl">
<button class="flex items-center justify-center w-8 h-8 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-variant transition-colors" type="button" aria-label="Previous">
<span class="material-symbols-outlined text-sm">chevron_left</span>
</button>
<button class="flex items-center justify-center w-8 h-8 rounded-full bg-primary text-on-primary font-label-sm text-label-sm font-bold shadow-sm" type="button">1</button>
<button class="flex items-center justify-center w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant hover:bg-surface-variant transition-colors font-label-sm text-label-sm" type="button">2</button>
<button class="flex items-center justify-center w-8 h-8 rounded-full bg-surface-container-lowest text-on-surface-variant hover:bg-surface-variant transition-colors font-label-sm text-label-sm" type="button">3</button>
<span class="text-on-surface-variant font-label-sm text-label-sm">...</span>
<button class="flex items-center justify-center w-8 h-8 rounded-full bg-surface-container-highest text-on-surface-variant hover:bg-surface-variant transition-colors" type="button" aria-label="Next">
<span class="material-symbols-outlined text-sm">chevron_right</span>
</button>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
