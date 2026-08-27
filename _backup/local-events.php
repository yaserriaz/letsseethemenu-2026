<?php
$page = 'local-events';
$page_title = 'Local Events - Let\'s See The Menu';
$page_eyebrow = 'Community';
$page_heading = 'Local Events';
$page_lead = 'Discover sponsored sports voting events and community games near you. Click through to register when events are live.';
include __DIR__ . '/inc/page-start.php';
include __DIR__ . '/inc/page-hero.php';
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="rounded-3xl border border-dashed border-outline-variant bg-surface-container-low px-xl py-xl text-center">
<span class="material-symbols-outlined text-primary text-5xl mb-md">event_busy</span>
<h2 class="font-headline-md text-headline-md text-on-background mb-sm">No Upcoming Events found.</h2>
<p class="font-body-md text-on-surface-variant max-w-md mx-auto mb-lg">There are no live voting events right now. Check back soon, or learn how your business can sponsor the next game.</p>
<div class="flex flex-wrap justify-center gap-sm">
<a href="become-a-sponsor.php" class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">campaign</span>
<span class="spn">Become a Sponsor</span>
</a>
<a href="<?php echo $sitepath; ?>" class="btn-iconed btn-iconed-outline border border-outline-variant text-on-surface font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">home</span>
<span class="spn">Back to Home</span>
</a>
</div>
</div>
</main>
<?php include __DIR__ . '/inc/page-end.php'; ?>
