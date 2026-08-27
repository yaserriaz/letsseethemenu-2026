<?php
$page = 'blog';
$page_title = 'Blog - Let\'s See The Menu';
$page_eyebrow = 'Culinary Journal';
$page_heading = 'Stories from the table';
$page_lead = 'Local guides, host tips, news, and restaurant introductions from around the community.';
include __DIR__ . '/inc/page-start.php';
include __DIR__ . '/inc/page-hero.php';

$posts = [
    ['Enterprise Rent-A-Car: Your Go-To Ride Wherever You Go', 'LSTM Picks', 'Where it fits in real life — ever found yourself last-minute on a business trip needing a reliable ride?', 'assets/img/blog-patio.jpg'],
    ['Explore Groton, CT\'s Best Kept Secrets', 'Travel Tips and Guides', 'Honestly, Groton, CT might have its fame tied to maritime history, but there is so much more to taste.', 'assets/img/blog-farm.jpg'],
    ['From Hidden Gem to Local Star: Elevate Your Rental with Let\'s See The Menu', 'Airbnb Host Tips', 'Discover how to transform your short-term rental into a local star by tapping into nearby menus.', 'assets/img/blog-patio.jpg'],
    ['Boost Your Restaurant\'s Local Presence with Let\'s See The Menu', 'Airbnb Host Tips', 'Are you a restaurant host seeking to captivate a local crowd? Start with visibility that converts.', 'assets/img/blog-farm.jpg'],
    ['Why Every Airbnb Host Should Be Advertising on Let\'s See The Menu', 'Airbnb Host Tips', 'As an Airbnb host, showcasing local flavors can be the key to creating memorable guest stays.', 'assets/img/blog-patio.jpg'],
    ['Let\'s See the Menu.com YouTube Channel!', 'News', 'Follow along for restaurant features, community stories, and platform updates on YouTube.', 'assets/img/blog-farm.jpg'],
    ['Big Exposure, Small Budget: The Most Affordable Local Advertising for Southeastern CT Businesses!', 'News', 'Reach highly targeted zip codes without the enterprise media spend.', 'assets/img/blog-patio.jpg'],
    ['Used MTI-10 AutoFry For Sale', 'Used Restaurant Equipment', 'Browse available restaurant equipment listings from the community.', 'assets/img/blog-farm.jpg'],
    ['Health care free in America through advertising.', 'The National Health Care Initiative', 'Our banner program channels ad spend into community healthcare support.', 'assets/img/blog-patio.jpg'],
];
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
<?php foreach ($posts as $post): ?>
<article class="flex flex-col rounded-2xl overflow-hidden border border-outline-variant/40 bg-surface-container-lowest group">
<div class="aspect-[16/10] overflow-hidden bg-surface-container">
<img src="<?php echo htmlspecialchars($post[3]); ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
</div>
<div class="p-lg flex flex-col flex-1">
<p class="font-label-xs text-label-xs text-primary uppercase tracking-wider mb-xs"><?php echo htmlspecialchars($post[1]); ?></p>
<h2 class="font-title-card text-title-card text-on-background mb-sm leading-snug"><?php echo htmlspecialchars($post[0]); ?></h2>
<p class="font-body-md text-on-surface-variant flex-1"><?php echo htmlspecialchars($post[2]); ?></p>
</div>
</article>
<?php endforeach; ?>
</div>
</main>
<?php include __DIR__ . '/inc/page-end.php'; ?>
