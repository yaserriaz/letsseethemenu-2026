<?php
if (!isset($search_title)) {
    $search_title = 'Menus in Austin';
}
if (!isset($search_subtitle)) {
    $search_subtitle = 'Discover the finest flavors your city has to offer.';
}
if (!isset($search_placeholder)) {
    $search_placeholder = 'Restaurant or dish...';
}
if (!isset($search_cuisines) || !is_array($search_cuisines)) {
    $search_cuisines = ['All Cuisines', 'Italian', 'Mexican', 'BBQ', 'American', 'Asian'];
}
?>
<div class="flex flex-col lg:flex-row lg:items-end justify-between mb-lg gap-gutter">
<div class="shrink-0">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-2"><?php echo htmlspecialchars($search_title, ENT_QUOTES, 'UTF-8'); ?></h2>
<p class="text-on-surface-variant font-body-md"><?php echo htmlspecialchars($search_subtitle, ENT_QUOTES, 'UTF-8'); ?></p>
</div>
<form class="flex flex-row items-center gap-1 w-full max-w-xl bg-white rounded-full p-1.5 shadow-lg border border-surface-container-high min-w-0" action="#" method="get" role="search">
<div class="flex items-center gap-2 px-3 border-r border-outline-variant/30 shrink-0 min-w-0">
<span class="material-symbols-outlined text-primary shrink-0" aria-hidden="true">restaurant</span>
<select class="bg-transparent border-none focus:ring-0 font-label-sm text-on-surface min-w-0 max-w-[9rem] py-2" name="cuisine" aria-label="Cuisine">
<?php foreach ($search_cuisines as $cuisine) : ?>
<option><?php echo htmlspecialchars($cuisine, ENT_QUOTES, 'UTF-8'); ?></option>
<?php endforeach; ?>
</select>
</div>
<div class="flex-1 min-w-0 px-3">
<input class="w-full min-w-0 bg-transparent border-none focus:ring-0 font-body-md text-on-surface placeholder:text-on-surface-variant/70 py-2" name="q" placeholder="<?php echo htmlspecialchars($search_placeholder, ENT_QUOTES, 'UTF-8'); ?>" type="search" autocomplete="off">
</div>
<button class="bg-primary text-white shrink-0 w-11 h-11 rounded-full flex items-center justify-center hover:bg-primary-container transition-colors" type="submit" aria-label="Search">
<span class="material-symbols-outlined" aria-hidden="true">search</span>
</button>
</form>
</div>
