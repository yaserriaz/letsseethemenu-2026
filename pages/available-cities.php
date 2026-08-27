<?php
require_once __DIR__ . '/../inc/site-settings.php';

$state_slug = 'connecticut';
$state_name = 'Connecticut';

$city_slug = static function (string $name): string {
    $slug = strtolower(preg_replace('/[^a-z0-9]+/i', '-', $name) ?? '');
    return trim($slug, '-');
};
$city_url = static function (string $name) use ($state_slug, $city_slug): string {
    return 'state/' . $state_slug . '/city/' . $city_slug($name);
};

$page = 'available-cities';
$page_title = 'Search in Connecticut - Let\'s See The Menu';
$body_class = 'bg-background text-on-surface font-body-md antialiased min-h-screen flex flex-col';
ob_start();
?>
<?php include __DIR__ . '/../inc/hero.php'; ?>
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
<a class="hover:text-primary transition-colors" href="state/<?php echo htmlspecialchars($state_slug, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($state_name, ENT_QUOTES, 'UTF-8'); ?></a>
</div>
</li>
</ol>
</nav>
<div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-lg gap-6">
<div>
<h1 class="font-headline-lg text-headline-lg text-primary mb-2">Search in Connecticut</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Browse cities in Connecticut to find local menus.</p>
</div>
<div class="w-full md:w-auto relative group">
<div class="flex items-center bg-surface-container-lowest rounded-full shadow-sm border border-surface-variant group-focus-within:border-primary group-focus-within:shadow-md transition-all px-4 py-2">
<span class="material-symbols-outlined text-outline mr-2">search</span>
<input aria-label="Filter cities" class="bg-transparent border-none focus:ring-0 text-on-surface w-full md:w-64 font-body-md" placeholder="Filter cities..." type="text">
</div>
</div>
</div>
<div class="mb-lg">
<h2 class="font-label-sm text-label-sm text-outline uppercase tracking-wider mb-3">Popular Cities</h2>
<div class="flex flex-wrap gap-3">
<?php foreach (['Hartford', 'New Haven', 'Stamford', 'Bridgeport', 'Waterbury'] as $city): ?>
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm" href="<?php echo htmlspecialchars($city_url($city), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?></a>
<?php endforeach; ?>
</div>
</div>
<?php
$city_groups = [
    'A' => ['Andover', 'Ansonia', 'Ashford', 'Avon'],
    'B' => ['Barkhamsted', 'Beacon Falls', 'Berlin', 'Bethany', 'Bethel', 'Bethlehem', 'Bloomfield', 'Bolton', 'Bozrah', 'Branford', 'Bridgeport', 'Bridgewater', 'Bristol', 'Brookfield', 'Brooklyn', 'Burlington'],
    'C' => ['Canaan', 'Canterbury', 'Canton', 'Chaplin', 'Cheshire', 'Chester', 'Clinton', 'Colchester', 'Colebrook', 'Columbia', 'Cornwall', 'Coventry', 'Cromwell'],
    'D' => ['Danbury', 'Darien', 'Deep River', 'Derby', 'Durham'],
    'E' => ['East Granby', 'East Haddam', 'East Hampton', 'East Hartford', 'East Haven', 'East Lyme', 'East Windsor', 'Eastford', 'Easton', 'Ellington', 'Enfield', 'Essex'],
];
?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-10 relative">
<?php foreach ($city_groups as $letter => $cities): ?>
<div class="break-inside-avoid mb-6">
<h3 class="font-title-card text-title-card text-primary mb-4 pb-1 border-b-2 border-tertiary-fixed-dim inline-block"><?php echo htmlspecialchars($letter, ENT_QUOTES, 'UTF-8'); ?></h3>
<ul class="space-y-3 font-body-md text-body-md">
<?php foreach ($cities as $city): ?>
<li><a class="text-on-surface hover:text-primary transition-colors" href="<?php echo htmlspecialchars($city_url($city), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($city, ENT_QUOTES, 'UTF-8'); ?></a></li>
<?php endforeach; ?>
</ul>
</div>
<?php endforeach; ?>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
