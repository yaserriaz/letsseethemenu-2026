<?php
require_once __DIR__ . '/../inc/site-settings.php';

$state_slug = isset($_GET['state']) ? strtolower(trim((string) $_GET['state'])) : '';
$state_slug = preg_replace('/[^a-z0-9\-]/', '', $state_slug) ?? '';

if ($state_slug === '') {
    header('Location: ' . rtrim($sitepath, '/') . '/available-states');
    exit;
}

$state_name = ucwords(str_replace('-', ' ', $state_slug));

/* Demo city list — replace with DB-driven data later */
$demo_cities = [
    'alabama' => ['Abbeville', 'Birmingham', 'Huntsville', 'Mobile', 'Montgomery', 'Tuscaloosa'],
    'california' => ['Los Angeles', 'San Diego', 'San Francisco', 'Sacramento', 'Oakland'],
    'connecticut' => ['Hartford', 'New Haven', 'Stamford', 'Bridgeport', 'Waterbury', 'Groton', 'Mystic'],
    'florida' => ['Miami', 'Orlando', 'Tampa', 'Jacksonville', 'Tallahassee'],
    'georgia' => ['Atlanta', 'Savannah', 'Augusta', 'Macon'],
    'illinois' => ['Chicago', 'Springfield', 'Naperville', 'Peoria'],
    'new-york' => ['New York', 'Buffalo', 'Rochester', 'Albany', 'Syracuse'],
    'ohio' => ['Columbus', 'Cleveland', 'Cincinnati', 'Toledo'],
    'pennsylvania' => ['Philadelphia', 'Pittsburgh', 'Harrisburg', 'Allentown'],
    'texas' => ['Austin', 'Houston', 'Dallas', 'San Antonio', 'Fort Worth'],
];

$cities = $demo_cities[$state_slug] ?? [
    'Downtown',
    'Midtown',
    'Northside',
    'East End',
    'Westside',
];
sort($cities, SORT_NATURAL | SORT_FLAG_CASE);

$page = 'state';
$page_title = 'Menus in ' . $state_name . ' - Let\'s See The Menu';
$page_eyebrow = 'Explore';
$page_heading = $state_name;
$page_lead = 'Browse cities in ' . $state_name . ' to find local menus.';

ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-md py-lg pb-24 md:pb-lg">
<nav aria-label="Breadcrumb" class="flex text-on-surface-variant font-label-sm text-label-sm mb-6">
<ol class="inline-flex items-center space-x-1 md:space-x-2">
<li class="inline-flex items-center">
<a class="hover:text-primary transition-colors" href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>">Home</a>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<a class="hover:text-primary transition-colors" href="available-states">States</a>
</div>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<span class="text-on-surface font-medium"><?php echo htmlspecialchars($state_name, ENT_QUOTES, 'UTF-8'); ?></span>
</div>
</li>
</ol>
</nav>

<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-lg gap-6">
<div>
<span class="font-label-sm text-label-sm text-tertiary-fixed-dim uppercase tracking-wider mb-xs block">State</span>
<h1 class="font-headline-lg text-headline-lg text-primary mb-2"><?php echo htmlspecialchars($state_name, ENT_QUOTES, 'UTF-8'); ?></h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Select a city to browse restaurants and menus.</p>
</div>
</div>

<div class="mb-lg">
<h2 class="font-label-sm text-label-sm text-outline uppercase tracking-wider mb-3">Cities</h2>
<div class="flex flex-wrap gap-3">
<?php foreach ($cities as $city):
    $city_slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $city) ?? '');
    $city_slug = trim($city_slug, '-');
    $href = 'state/' . rawurlencode($state_slug) . '/city/' . rawurlencode($city_slug);
?>
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm no-underline" href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?></a>
<?php endforeach; ?>
</div>
</div>

<div class="mt-xl">
<a href="available-states" class="btn-iconed btn-iconed-outline border border-outline-variant text-on-surface font-bold rounded-full px-6 py-3 inline-flex items-center gap-2 no-underline">
<span class="material-symbols-outlined">arrow_back</span>
<span class="spn">All States</span>
</a>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
