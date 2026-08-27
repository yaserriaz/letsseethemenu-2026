<?php
$page = 'affiliates';
$page_title = 'Affiliate Program - Let\'s See The Menu';
$page_eyebrow = 'Partners';
$page_heading = 'Partner for Profit and Purpose';
$page_lead = 'Join our mission to fund the future of medical innovation while growing your income.';
include __DIR__ . '/inc/page-start.php';
include __DIR__ . '/inc/page-hero.php';
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="mb-xl">
<a href="contact.php" class="btn-iconed bg-primary text-white font-bold rounded-full px-8 py-3 inline-flex">
<span class="material-symbols-outlined">person_add</span>
<span class="spn">Join Now</span>
</a>
</div>
<section class="mb-xl">
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm">How it works</p>
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-lg mt-md">
<?php
$steps = [
    ['looks_one', 'Sign Up', 'Join our program with a simple and quick registration.'],
    ['share', 'Share Your Link', 'Use your unique affiliate link to refer local businesses.'],
    ['store', 'Onboard Businesses', 'Help businesses join our platform and get discovered.'],
    ['payments', 'Earn & Contribute', 'Earn commissions and help fund advanced medical infrastructure.'],
];
foreach ($steps as $s): ?>
<div class="rounded-2xl p-lg border border-outline-variant/40 bg-surface-container-lowest">
<span class="material-symbols-outlined text-primary text-3xl mb-sm"><?php echo $s[0]; ?></span>
<h3 class="font-title-card text-title-card mb-xs"><?php echo htmlspecialchars($s[1]); ?></h3>
<p class="font-body-md text-on-surface-variant"><?php echo htmlspecialchars($s[2]); ?></p>
</div>
<?php endforeach; ?>
</div>
</section>
<section class="mb-xl max-w-3xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">A Partnership with Dual Benefits</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Let's See The Menu's affiliate program is a unique opportunity to make a real difference in the world of healthcare. By partnering with us, you can help onboard new members and generate transaction fees through our online ordering system. One-third of these fees will be used to fund the purchase or lease of advanced medical infrastructure, such as robotics and AI.</p>
<p class="font-body-md text-on-surface-variant leading-relaxed">As an affiliate, you will not only earn additional income, but you will also be part of a movement to create a healthcare system that is accessible and efficient for everyone.</p>
</section>
<section class="mb-xl grid grid-cols-1 md:grid-cols-3 gap-lg text-center">
<div class="p-lg rounded-2xl bg-primary/5 border border-primary/20"><p class="font-headline-lg text-headline-lg text-primary">$5M+</p><p class="font-label-sm text-on-surface-variant mt-xs">Target for Medical AI</p></div>
<div class="p-lg rounded-2xl bg-primary/5 border border-primary/20"><p class="font-headline-lg text-headline-lg text-primary">1,200+</p><p class="font-label-sm text-on-surface-variant mt-xs">Affiliates Joined</p></div>
<div class="p-lg rounded-2xl bg-primary/5 border border-primary/20"><p class="font-headline-lg text-headline-lg text-primary">42</p><p class="font-label-sm text-on-surface-variant mt-xs">Communities Impacted</p></div>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">What Our Affiliates Say</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg">
<blockquote class="p-lg rounded-2xl border border-outline-variant/40"><p class="font-body-md text-on-surface-variant mb-md">"Partnering with Let's See The Menu has been a game-changer. Not only have I created a new income stream, but I'm also proud to be part of a movement that's advancing healthcare technology."</p><footer class="font-label-sm"><strong>Alex Johnson</strong> — Affiliate Partner since 2022</footer></blockquote>
<blockquote class="p-lg rounded-2xl border border-outline-variant/40"><p class="font-body-md text-on-surface-variant mb-md">"The affiliate program has exceeded all my expectations. I've been able to help local businesses grow while earning a substantial income."</p><footer class="font-label-sm"><strong>Sarah Martinez</strong> — Affiliate Partner since 2021</footer></blockquote>
</div>
</section>
<section class="mb-xl max-w-3xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">Frequently Asked Questions</h2>
<details class="border-b border-outline-variant py-md"><summary class="font-bold cursor-pointer">How much can I earn as an affiliate?</summary><p class="font-body-md text-on-surface-variant mt-sm">Our affiliate program offers competitive commission rates based on the businesses you onboard. Earnings vary depending on successful referrals and subscription plans chosen.</p></details>
<details class="border-b border-outline-variant py-md"><summary class="font-bold cursor-pointer">How does my contribution help medical infrastructure?</summary><p class="font-body-md text-on-surface-variant mt-sm">A portion of all revenue generated through our platform is dedicated to funding advanced medical infrastructure, including robotics and AI technologies.</p></details>
<details class="border-b border-outline-variant py-md"><summary class="font-bold cursor-pointer">Is there any cost to join the program?</summary><p class="font-body-md text-on-surface-variant mt-sm">No, joining our affiliate program is completely free. There are no upfront costs, membership fees, or hidden charges.</p></details>
</section>
<section class="rounded-3xl bg-primary text-white p-xl flex flex-col md:flex-row md:items-center md:justify-between gap-lg">
<div>
<h2 class="font-headline-md text-headline-md mb-sm">Ready to Make an Impact?</h2>
<p class="opacity-90 max-w-xl">Join a community of forward-thinkers who are earning an income while building the future of healthcare.</p>
</div>
<a href="contact.php" class="btn-iconed bg-white text-primary font-bold rounded-full px-6 py-3 shrink-0">
<span class="material-symbols-outlined">arrow_forward</span>
<span class="spn">Become an Affiliate</span>
</a>
</section>
</main>
<?php include __DIR__ . '/inc/page-end.php'; ?>
