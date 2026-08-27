<?php
require_once __DIR__ . '/../inc/site-settings.php';
$page = 'mission-statement';
$page_title = 'Mission Statement - Let\'s See The Menu';
$page_eyebrow = 'Our purpose';
$page_heading = 'To empower local businesses and connect them with their communities.';
$page_lead = 'We are dedicated to building a vibrant ecosystem where local businesses thrive and communities connect through shared experiences.';
ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<section class="mb-xl">
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm">Our vision</p>
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Shaping the Future of Local Commerce.</h2>
<p class="font-body-lg text-on-surface-variant leading-relaxed max-w-3xl">Our vision is to become the essential discovery platform for every neighborhood, fostering economic growth for small businesses and creating a more connected, vibrant local ecosystem for everyone.</p>
</section>
<section class="mb-xl grid grid-cols-1 md:grid-cols-2 gap-xl">
<div>
<h3 class="font-title-card text-title-card text-on-background mb-sm">Economic Growth</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">To provide the tools and visibility that help small businesses flourish in the digital age.</p>
</div>
<div>
<h3 class="font-title-card text-title-card text-on-background mb-sm">Vibrant Communities</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">To create a go-to platform where residents can discover and support the unique businesses that make their community special.</p>
</div>
</section>
<section class="mb-xl rounded-3xl bg-primary text-white p-lg md:p-xl relative overflow-hidden">
<div class="absolute inset-0 bg-gradient-to-br from-primary via-primary to-primary-container/80 pointer-events-none"></div>
<div class="relative grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
<div>
<h2 class="font-headline-md text-headline-md mb-md">Empowering Local Businesses and Communities Through Advertising for Healthcare</h2>
<p class="font-body-md leading-relaxed opacity-95 mb-md">Let's See The Menu believes that businesses should have a role in shaping the healthcare system, and our banner program allows them to do just that. By purchasing a banner, you're not just advertising - you're actively supporting the goal of weaving healthcare into the fabric of the local economy.</p>
<p class="font-body-md leading-relaxed opacity-95 mb-md">Each advertising banner on our website covers up to 5 United States zip codes, ensuring your business gains valuable visibility among a highly targeted local audience. And the best part? $60 of the $100 monthly fee goes directly towards providing free, high-quality healthcare to the community.</p>
<p class="font-body-md leading-relaxed opacity-95">In 2022, the United States spent a staggering $4.5 trillion on healthcare, accounting for 17.3% of the nation's Gross Domestic Product. Our banner program harnesses the collective power of local businesses - imagine Groton, Connecticut, where just 2,000 businesses could generate $120,000 per month for healthcare.</p>
</div>
<div class="relative rounded-2xl overflow-hidden min-h-[280px] lg:min-h-[380px] border border-white/20 shadow-lg">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/img/blog-farm.jpg');"></div>
<div class="absolute inset-0 bg-gradient-to-t from-primary/50 to-transparent"></div>
</div>
</div>
</section>
<section class="mb-xl">
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm">Our values</p>
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">What we stand for</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
<div class="border-t-2 border-primary pt-md">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">groups</span>
<h3 class="font-title-card text-title-card mb-sm">Community</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">We believe in the power of connection, bringing neighbors and local businesses together to build stronger, more vibrant communities.</p>
</div>
<div class="border-t-2 border-primary pt-md">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">handshake</span>
<h3 class="font-title-card text-title-card mb-sm">Support</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">We are committed to championing local entrepreneurs, providing them with the tools and platform they need to succeed and thrive.</p>
</div>
<div class="border-t-2 border-primary pt-md">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">explore</span>
<h3 class="font-title-card text-title-card mb-sm">Discovery</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">We celebrate the joy of finding hidden gems and unique local spots, making every neighborhood an adventure to explore.</p>
</div>
</div>
</section>
<section class="mb-xl">
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm">How we help</p>
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg mt-md">
<div class="p-lg rounded-2xl bg-surface-container-lowest border border-outline-variant/40">
<h3 class="font-title-card text-title-card mb-sm">Banner Advertising</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">Increase your visibility and reach engaged customers. Our banner advertising places your business front and center, driving foot traffic and brand awareness within the local community.</p>
</div>
<div class="p-lg rounded-2xl bg-surface-container-lowest border border-outline-variant/40">
<h3 class="font-title-card text-title-card mb-sm">Content Hub &amp; Features</h3>
<p class="font-body-md text-on-surface-variant leading-relaxed">Share your unique story and connect with your audience on a deeper level. Our Content Hub allows you to showcase what makes your business special, from new menu items to behind-the-scenes stories.</p>
</div>
</div>
</section>
<section class="rounded-3xl bg-surface-container-low p-xl flex flex-col md:flex-row md:items-center md:justify-between gap-lg">
<div>
<h2 class="font-headline-md text-headline-md text-on-background mb-sm">Join Our Community</h2>
<p class="font-body-md text-on-surface-variant max-w-xl">Ready to get started? Explore the best local businesses in your area or learn how our platform can help your business grow.</p>
</div>
<div class="flex flex-wrap gap-sm">
<a href="available-states" class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">search</span>
<span class="spn">Browse Businesses</span>
</a>
<a href="page/become-a-sponsor" class="btn-iconed btn-iconed-outline border border-primary text-primary font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">campaign</span>
<span class="spn">Advertise With Us</span>
</a>
</div>
</section>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
