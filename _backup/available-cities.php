<?php
$page = 'available-cities';
$page_title = 'Search in Connecticut - Let\'s See The Menu';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
<?php include __DIR__ . '/inc/head.php'; ?>
</head>
<body class="bg-background text-on-surface font-body-md antialiased min-h-screen flex flex-col">
<?php include __DIR__ . '/inc/main-nav.php'; ?>
<?php include __DIR__ . '/inc/hero.php'; ?>
<main class="flex-grow w-full max-w-container-max mx-auto px-margin-mobile md:px-md py-lg pb-24 md:pb-lg">
<nav aria-label="Breadcrumb" class="flex text-on-surface-variant font-label-sm text-label-sm mb-6">
<ol class="inline-flex items-center space-x-1 md:space-x-2">
<li class="inline-flex items-center">
<a class="hover:text-primary transition-colors" href="<?php echo $sitepath; ?>">Home</a>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<a class="hover:text-primary transition-colors" href="available-states.php">States</a>
</div>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<span class="text-on-surface font-medium">Connecticut</span>
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
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm" href="locations.php">Hartford</a>
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm" href="locations.php">New Haven</a>
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm" href="locations.php">Stamford</a>
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm" href="locations.php">Bridgeport</a>
<a class="px-4 py-2 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm hover:bg-secondary hover:text-on-secondary transition-colors shadow-sm" href="locations.php">Waterbury</a>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-10 relative">
<div class="break-inside-avoid mb-6">
<h3 class="font-title-card text-title-card text-primary mb-4 pb-1 border-b-2 border-tertiary-fixed-dim inline-block">A</h3>
<ul class="space-y-3 font-body-md text-body-md">
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Andover</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Ansonia</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Ashford</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Avon</a></li>
</ul>
</div>
<div class="break-inside-avoid mb-6">
<h3 class="font-title-card text-title-card text-primary mb-4 pb-1 border-b-2 border-tertiary-fixed-dim inline-block">B</h3>
<ul class="space-y-3 font-body-md text-body-md">
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Barkhamsted</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Beacon Falls</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Berlin</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bethany</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bethel</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bethlehem</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bloomfield</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bolton</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bozrah</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Branford</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bridgeport</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bridgewater</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Bristol</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Brookfield</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Brooklyn</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Burlington</a></li>
</ul>
</div>
<div class="break-inside-avoid mb-6">
<h3 class="font-title-card text-title-card text-primary mb-4 pb-1 border-b-2 border-tertiary-fixed-dim inline-block">C</h3>
<ul class="space-y-3 font-body-md text-body-md">
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Canaan</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Canterbury</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Canton</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Chaplin</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Cheshire</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Chester</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Clinton</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Colchester</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Colebrook</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Columbia</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Cornwall</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Coventry</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Cromwell</a></li>
</ul>
</div>
<div class="break-inside-avoid mb-6">
<h3 class="font-title-card text-title-card text-primary mb-4 pb-1 border-b-2 border-tertiary-fixed-dim inline-block">D</h3>
<ul class="space-y-3 font-body-md text-body-md">
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Danbury</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Darien</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Deep River</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Derby</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Durham</a></li>
</ul>
</div>
<div class="break-inside-avoid mb-6">
<h3 class="font-title-card text-title-card text-primary mb-4 pb-1 border-b-2 border-tertiary-fixed-dim inline-block">E</h3>
<ul class="space-y-3 font-body-md text-body-md">
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Granby</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Haddam</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Hampton</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Hartford</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Haven</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Lyme</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">East Windsor</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Eastford</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Easton</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Ellington</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Enfield</a></li>
<li><a class="text-on-surface hover:text-primary transition-colors" href="locations.php">Essex</a></li>
</ul>
</div>
</div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
</body>
</html>
