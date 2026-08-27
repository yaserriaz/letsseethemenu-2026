<?php
$page = 'index';
$page_title = "Let's See The Menu";
?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
<?php include __DIR__ . '/inc/head.php'; ?>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased overflow-x-hidden">
<?php include __DIR__ . '/inc/main-nav.php'; ?>
<main>
<?php include __DIR__ . '/inc/hero.php'; ?>
<!-- Menus in [City] Section -->
<section class="py-xl max-w-container-max mx-auto px-md">
<?php include __DIR__ . '/inc/search-bar.php'; ?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter">
<article class="group bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-2 transition-all duration-300">
<a href="single-restaurant.php" class="block">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500" style="background-image: url('assets/img/veloce.jpg');"></div>
<div class="absolute top-3 right-3 bg-tertiary-fixed text-on-tertiary-fixed font-label-sm px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        4.9
                    </div>
</div>
<div class="p-md pb-2">
<div class="flex justify-between items-start mb-1">
<h3 class="font-title-card text-title-card text-on-surface group-hover:text-primary transition-colors">Veloce Pizzeria</h3>
<span class="text-on-error font-label-xs bg-error px-2 py-0.5 rounded text-[10px] uppercase">Open</span>
</div>
<p class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                        South Congress, Austin
                    </p>
</div>
</a>
<div class="px-md pb-md flex flex-wrap gap-1">
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Italian</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Artisan</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Pizza</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Wood-Fired</a>
</div>
</article>
<article class="group bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-2 transition-all duration-300">
<a href="single-restaurant.php" class="block">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500" style="background-image: url('assets/img/mesa.jpg');"></div>
<div class="absolute top-3 right-3 bg-tertiary-fixed text-on-tertiary-fixed font-label-sm px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        4.7
                    </div>
</div>
<div class="p-md pb-2">
<div class="flex justify-between items-start mb-1">
<h3 class="font-title-card text-title-card text-on-surface group-hover:text-primary transition-colors">Mesa Grill</h3>
<span class="text-on-error font-label-xs bg-error px-2 py-0.5 rounded text-[10px] uppercase">Open</span>
</div>
<p class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                        Downtown, Austin
                    </p>
</div>
</a>
<div class="px-md pb-md flex flex-wrap gap-1">
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Mexican</a>
<a href="locations.php" class="bg-secondary-container/10 text-secondary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-secondary hover:text-white transition-colors">Trending</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Tacos</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Margaritas</a>
</div>
</article>
<article class="group bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-2 transition-all duration-300">
<a href="single-restaurant.php" class="block">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500" style="background-image: url('assets/img/sakura.jpg');"></div>
<div class="absolute top-3 right-3 bg-tertiary-fixed text-on-tertiary-fixed font-label-sm px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        4.8
                    </div>
</div>
<div class="p-md pb-2">
<div class="flex justify-between items-start mb-1">
<h3 class="font-title-card text-title-card text-on-surface group-hover:text-primary transition-colors">Sakura Soul</h3>
<span class="text-on-surface-variant font-label-xs bg-surface-container-high px-2 py-0.5 rounded text-[10px] uppercase">Closed</span>
</div>
<p class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                        East Austin
                    </p>
</div>
</a>
<div class="px-md pb-md flex flex-wrap gap-1">
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Japanese</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Fusion</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Sushi</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Ramen</a>
</div>
</article>
<article class="group bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-2 transition-all duration-300">
<a href="single-restaurant.php" class="block">
<div class="relative h-48 overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500" style="background-image: url('assets/img/oak-smoke.jpg');"></div>
<div class="absolute top-3 right-3 bg-tertiary-fixed text-on-tertiary-fixed font-label-sm px-3 py-1 rounded-full flex items-center gap-1 shadow-sm">
<span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                        5.0
                    </div>
</div>
<div class="p-md pb-2">
<div class="flex justify-between items-start mb-1">
<h3 class="font-title-card text-title-card text-on-surface group-hover:text-primary transition-colors">Oak &amp; Smoke</h3>
<span class="text-on-error font-label-xs bg-error px-2 py-0.5 rounded text-[10px] uppercase">Open</span>
</div>
<p class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                        North Lamar, Austin
                    </p>
</div>
</a>
<div class="px-md pb-md flex flex-wrap gap-1">
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">BBQ</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Classic</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Smoked</a>
<a href="locations.php" class="bg-primary/10 text-primary text-[10px] leading-none px-1.5 py-1 rounded-full hover:bg-primary hover:text-white transition-colors">Texas</a>
</div>
</article>
</div>
<div class="mt-lg flex justify-center">
<a href="locations.php" class="btn-iconed bg-primary text-white font-bold rounded-full px-10 py-4 shadow-md hover:shadow-xl hover:bg-primary-container transition-all active:scale-95">
<span class="material-symbols-outlined">explore</span>
<span class="spn">View All in Austin</span>
</a>
</div>
</section>
<!-- Latest Online Menus -->
<section class="bg-surface-container-low py-xl">
<div class="max-w-container-max mx-auto px-md">
<div class="flex items-center gap-4 mb-lg">
<h2 class="font-headline-lg text-headline-lg text-on-surface shrink-0">Latest Online Menus</h2>
<div class="flex-grow h-[1px] bg-outline-variant/30"></div>
<a href="locations.php" class="btn-iconed bg-primary text-white font-bold font-label-sm rounded-full px-5 py-2.5 shadow-md hover:bg-primary-container shrink-0 no-underline hover:no-underline">
<span class="material-symbols-outlined">explore</span>
<span class="spn">View All</span>
</a>
</div>
<div class="flex gap-gutter overflow-x-auto pb-6 snap-x no-scrollbar">
<a href="single-restaurant.php" class="min-w-[280px] bg-white rounded-lg p-3 flex gap-4 card-shadow snap-start group cursor-pointer hover:bg-primary/5 transition-colors">
<div class="w-16 h-16 rounded bg-cover bg-center shrink-0" style="background-image: url('assets/img/zen-juice.jpg');"></div>
<div>
<h4 class="font-bold text-on-surface group-hover:text-primary transition-colors">Zen Juice Bar</h4>
<p class="text-on-surface-variant text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                            Westlake, TX
                        </p>
<span class="text-primary font-label-xs mt-1 block">New Menu Added</span>
</div>
</a>
<a href="single-restaurant.php" class="min-w-[280px] bg-white rounded-lg p-3 flex gap-4 card-shadow snap-start group cursor-pointer hover:bg-primary/5 transition-colors">
<div class="w-16 h-16 rounded bg-cover bg-center shrink-0" style="background-image: url('assets/img/oak-smoke.jpg');"></div>
<div>
<h4 class="font-bold text-on-surface group-hover:text-primary transition-colors">Burger Theory</h4>
<p class="text-on-surface-variant text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                            Round Rock, TX
                        </p>
<span class="text-primary font-label-xs mt-1 block">Lunch Specials Updated</span>
</div>
</a>
<a href="single-restaurant.php" class="min-w-[280px] bg-white rounded-lg p-3 flex gap-4 card-shadow snap-start group cursor-pointer hover:bg-primary/5 transition-colors">
<div class="w-16 h-16 rounded bg-cover bg-center shrink-0" style="background-image: url('assets/img/petit-paris.jpg');"></div>
<div>
<h4 class="font-bold text-on-surface group-hover:text-primary transition-colors">Petit Paris</h4>
<p class="text-on-surface-variant text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                            Bee Cave, TX
                        </p>
<span class="text-primary font-label-xs mt-1 block">Summer Pastry List</span>
</div>
</a>
<a href="single-restaurant.php" class="min-w-[280px] bg-white rounded-lg p-3 flex gap-4 card-shadow snap-start group cursor-pointer hover:bg-primary/5 transition-colors">
<div class="w-16 h-16 rounded bg-cover bg-center shrink-0" style="background-image: url('assets/img/mesa.jpg');"></div>
<div>
<h4 class="font-bold text-on-surface group-hover:text-primary transition-colors">Silk Road Thai</h4>
<p class="text-on-surface-variant text-[12px] flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">location_on</span>
                            Pflugerville, TX
                        </p>
<span class="text-primary font-label-xs mt-1 block">Chef's Tasting Menu</span>
</div>
</a>
</div>
</div>
</section>
<!-- Culinary Journal -->
<section class="py-xl bg-[#FDFBF7]">
<div class="max-w-container-max mx-auto px-md">
<div class="flex justify-between items-center mb-lg">
<h2 class="font-headline-lg text-headline-lg text-on-surface">The Culinary Journal</h2>
<a class="btn-iconed btn-iconed-outline text-primary font-bold font-label-sm no-underline hover:no-underline border border-transparent rounded-full px-3 py-1" href="blog.php">
<span class="material-symbols-outlined">open_in_new</span>
<span class="spn">Visit Blog</span>
</a>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<article class="flex flex-col bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-1 transition-transform group">
<a href="blog.php" class="block">
<div class="h-48 bg-cover bg-center" style="background-image: url('assets/img/blog-farm.jpg');"></div>
</a>
<div class="p-md flex-grow flex flex-col">
<a href="blog.php" class="text-secondary font-label-xs uppercase tracking-widest mb-2 w-fit hover:underline">Trends</a>
<a href="blog.php" class="block">
<h3 class="font-title-card text-title-card mb-4 group-hover:text-primary transition-colors">How Farm-to-Table is Changing Austin's Food Scene</h3>
</a>
<a href="blog.php" class="flex justify-between items-center mt-auto pt-4 border-t border-outline-variant/20 no-underline">
<span class="text-on-surface-variant font-label-xs">May 12, 2024</span>
<span class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">schedule</span> 5 min read
                            </span>
</a>
</div>
</article>
<article class="flex flex-col bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-1 transition-transform group">
<a href="blog.php" class="block">
<div class="h-48 bg-cover bg-center" style="background-image: url('assets/img/petit-paris.jpg');"></div>
</a>
<div class="p-md flex-grow flex flex-col">
<a href="blog.php" class="text-primary font-label-xs uppercase tracking-widest mb-2 w-fit hover:underline">Insights</a>
<a href="blog.php" class="block">
<h3 class="font-title-card text-title-card mb-4 group-hover:text-primary transition-colors">The Psychology of a Perfect Restaurant Menu</h3>
</a>
<a href="blog.php" class="flex justify-between items-center mt-auto pt-4 border-t border-outline-variant/20 no-underline">
<span class="text-on-surface-variant font-label-xs">May 08, 2024</span>
<span class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">schedule</span> 8 min read
                            </span>
</a>
</div>
</article>
<article class="flex flex-col bg-white rounded-xl overflow-hidden card-shadow hover:-translate-y-1 transition-transform group">
<a href="blog.php" class="block">
<div class="h-48 bg-cover bg-center" style="background-image: url('assets/img/blog-patio.jpg');"></div>
</a>
<div class="p-md flex-grow flex flex-col">
<a href="blog.php" class="text-tertiary font-label-xs uppercase tracking-widest mb-2 w-fit hover:underline">Local Guide</a>
<a href="blog.php" class="block">
<h3 class="font-title-card text-title-card mb-4 group-hover:text-primary transition-colors">Top 10 Hidden Gem Patios to Visit This Summer</h3>
</a>
<a href="blog.php" class="flex justify-between items-center mt-auto pt-4 border-t border-outline-variant/20 no-underline">
<span class="text-on-surface-variant font-label-xs">May 01, 2024</span>
<span class="text-on-surface-variant font-label-xs flex items-center gap-1">
<span class="material-symbols-outlined text-[14px]">schedule</span> 6 min read
                            </span>
</a>
</div>
</article>
</div>
</div>
</section>
<!-- Upcoming Games -->
<?php
$upcoming_games = [
    ['league' => 'nhl', 'img' => 'game-nhl.jpg', 'title' => 'Stars vs Avalanche', 'date' => 'Tonight · 7:00 PM', 'sponsor' => 'Oak & Smoke', 'icon' => 'local_fire_department'],
    ['league' => 'nhl', 'img' => 'game-nhl.jpg', 'title' => 'Bruins @ Rangers', 'date' => 'Thu · 6:30 PM', 'sponsor' => "Tony's Pizzeria", 'icon' => 'restaurant'],
    ['league' => 'nhl', 'img' => 'game-nhl.jpg', 'title' => 'Oilers vs Flames', 'date' => 'Sat · 8:00 PM', 'sponsor' => 'Mesa Grill', 'icon' => 'restaurant'],
    ['league' => 'nba', 'img' => 'game-nba.jpg', 'title' => 'Lakers vs Warriors', 'date' => 'Tonight · 9:30 PM', 'sponsor' => "Tony's Pizzeria", 'icon' => 'restaurant'],
    ['league' => 'nba', 'img' => 'game-nba.jpg', 'title' => 'Celtics @ Heat', 'date' => 'Fri · 7:00 PM', 'sponsor' => 'Sakura Soul', 'icon' => 'bakery_dining'],
    ['league' => 'nba', 'img' => 'game-nba.jpg', 'title' => 'Nuggets vs Suns', 'date' => 'Sun · 3:00 PM', 'sponsor' => 'Oak & Smoke', 'icon' => 'local_fire_department'],
    ['league' => 'mlb', 'img' => 'game-mlb.jpg', 'title' => 'Rangers @ Yankees', 'date' => 'Tonight · 7:05 PM', 'sponsor' => 'Sakura Soul', 'icon' => 'bakery_dining'],
    ['league' => 'mlb', 'img' => 'game-mlb.jpg', 'title' => 'Astros vs Mariners', 'date' => 'Fri · 8:10 PM', 'sponsor' => 'Mesa Grill', 'icon' => 'restaurant'],
    ['league' => 'mlb', 'img' => 'game-mlb.jpg', 'title' => 'Dodgers @ Cubs', 'date' => 'Sat · 2:20 PM', 'sponsor' => "Tony's Pizzeria", 'icon' => 'restaurant'],
    ['league' => 'nfl', 'img' => 'game-mlb.jpg', 'title' => 'Cowboys @ Eagles', 'date' => 'Sun · 8:20 PM', 'sponsor' => 'Mesa Grill', 'icon' => 'restaurant'],
    ['league' => 'nfl', 'img' => 'game-mlb.jpg', 'title' => 'Chiefs vs Bills', 'date' => 'Sun · 4:25 PM', 'sponsor' => 'Oak & Smoke', 'icon' => 'local_fire_department'],
    ['league' => 'nfl', 'img' => 'game-nba.jpg', 'title' => '49ers @ Packers', 'date' => 'Mon · 8:15 PM', 'sponsor' => 'Sakura Soul', 'icon' => 'bakery_dining'],
];
$default_league = 'nhl';
?>
<section class="bg-surface-container-low border-y border-outline-variant/30 py-xl" id="upcoming-games">
<div class="max-w-container-max mx-auto px-md">
<div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-lg">
<div>
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Upcoming Games</h2>
<p class="text-on-surface-variant font-body-md">Catch the action at our partner restaurants tonight.</p>
</div>
<div class="games-tabs flex flex-wrap gap-2 p-1 bg-white rounded-full shadow-sm border border-outline-variant/30" role="tablist" aria-label="Filter by league">
<button class="game-tab bg-primary text-white px-5 py-2 rounded-full text-sm font-bold shadow-sm" type="button" data-filter="nhl" role="tab" aria-selected="true">NHL</button>
<button class="game-tab text-on-surface-variant px-5 py-2 rounded-full text-sm font-bold hover:bg-surface-container transition-colors" type="button" data-filter="nba" role="tab" aria-selected="false">NBA</button>
<button class="game-tab text-on-surface-variant px-5 py-2 rounded-full text-sm font-bold hover:bg-surface-container transition-colors" type="button" data-filter="mlb" role="tab" aria-selected="false">MLB</button>
<button class="game-tab text-on-surface-variant px-5 py-2 rounded-full text-sm font-bold hover:bg-surface-container transition-colors" type="button" data-filter="nfl" role="tab" aria-selected="false">NFL</button>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter" id="games-grid">
<?php foreach ($upcoming_games as $game) :
    $league = $game['league'];
    $hidden = $league !== $default_league ? ' hidden' : '';
?>
<article class="game-card<?php echo $hidden; ?> group bg-white rounded-2xl overflow-hidden shadow-md border border-outline-variant/20 hover:shadow-xl transition-all flex flex-col" data-league="<?php echo htmlspecialchars($league, ENT_QUOTES, 'UTF-8'); ?>">
<div class="relative h-44 overflow-hidden shrink-0">
<img alt="<?php echo htmlspecialchars(strtoupper($league) . ' game', ENT_QUOTES, 'UTF-8'); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="assets/img/<?php echo htmlspecialchars($game['img'], ENT_QUOTES, 'UTF-8'); ?>">
<div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent"></div>
<span class="absolute top-4 left-4 bg-white/20 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/30 uppercase tracking-widest"><?php echo htmlspecialchars(strtoupper($league), ENT_QUOTES, 'UTF-8'); ?></span>
<div class="absolute bottom-4 left-4 right-4 flex justify-between items-end gap-3">
<h3 class="text-white font-title-card text-lg"><?php echo htmlspecialchars($game['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
<span class="text-white/90 text-xs font-bold shrink-0"><?php echo htmlspecialchars($game['date'], ENT_QUOTES, 'UTF-8'); ?></span>
</div>
</div>
<div class="px-5 py-4 flex items-center justify-between">
<span class="text-[10px] uppercase text-on-surface-variant font-bold tracking-tight opacity-60">Sponsored by</span>
<a href="single-restaurant.php" class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary text-[18px]"><?php echo htmlspecialchars($game['icon'], ENT_QUOTES, 'UTF-8'); ?></span>
<span class="text-sm font-bold text-primary group-hover:underline"><?php echo htmlspecialchars($game['sponsor'], ENT_QUOTES, 'UTF-8'); ?></span>
</a>
</div>
</article>
<?php endforeach; ?>
</div>
<p id="games-empty" class="hidden text-center text-on-surface-variant font-body-md py-8">No games in this league right now.</p>
</div>
</section>
<script>
(function () {
  var section = document.getElementById('upcoming-games');
  if (!section) return;
  var tabs = section.querySelectorAll('.game-tab');
  var cards = section.querySelectorAll('.game-card');
  var empty = document.getElementById('games-empty');
  var activeCls = ['bg-primary', 'text-white', 'shadow-sm'];
  var idleCls = ['text-on-surface-variant'];

  function setFilter(filter) {
    var visible = 0;
    cards.forEach(function (card) {
      var show = card.getAttribute('data-league') === filter;
      card.classList.toggle('hidden', !show);
      if (show) visible++;
    });
    if (empty) empty.classList.toggle('hidden', visible > 0);
    tabs.forEach(function (tab) {
      var on = tab.getAttribute('data-filter') === filter;
      tab.setAttribute('aria-selected', on ? 'true' : 'false');
      activeCls.forEach(function (c) { tab.classList.toggle(c, on); });
      idleCls.forEach(function (c) { tab.classList.toggle(c, !on); });
      if (on) tab.classList.remove('hover:bg-surface-container');
      else tab.classList.add('hover:bg-surface-container');
    });
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      setFilter(tab.getAttribute('data-filter'));
    });
  });

  var first = tabs[0];
  if (first) setFilter(first.getAttribute('data-filter'));
})();
</script>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
</body>
</html>
