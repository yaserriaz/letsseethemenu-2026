<?php
require_once __DIR__ . '/../inc/site-settings.php';
$page = 'favorites';
$page_title = 'Favorites - Let\'s See The Menu';
$page_eyebrow = 'Saved';
$page_heading = 'Your Favorites';
$page_lead = 'Restaurants and menus you love will appear here once you are signed in.';
$page_hero_compact = true;
ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="rounded-3xl border border-dashed border-outline-variant bg-surface-container-low px-xl py-xl text-center max-w-xl mx-auto">
<span class="material-symbols-outlined text-primary text-5xl mb-md">favorite</span>
<h2 class="font-headline-md text-headline-md text-on-background mb-sm">No favorites yet</h2>
<p class="font-body-md text-on-surface-variant mb-lg">Sign in to sync favorites across devices, or keep exploring local menus.</p>
<div class="flex flex-wrap justify-center gap-sm">
<a href="login" class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">login</span>
<span class="spn">Login to sync</span>
</a>
<a href="available-states" class="btn-iconed btn-iconed-outline border border-outline-variant font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">explore</span>
<span class="spn">Explore menus</span>
</a>
</div>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
