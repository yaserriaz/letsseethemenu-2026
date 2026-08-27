<?php
require_once __DIR__ . '/../inc/site-settings.php';
$page = 'become-a-sponsor';
$page_title = 'Become a Sponsor - Let\'s See The Menu';
$page_eyebrow = 'Game Event Sponsorship';
$page_heading = 'Turn Sports Fans Into Walk-In Customers';
$page_lead = 'Sponsor local sports voting events on Let\'s See The Menu. Fans vote, winners walk into your business to redeem their prize — and you only pay when they show up.';
ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="flex flex-wrap gap-sm mb-xl">
<a href="contact" class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">rocket_launch</span>
<span class="spn">Become a Sponsor</span>
</a>
<a href="page/how-it-works" class="btn-iconed btn-iconed-outline border border-primary text-primary font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">info</span>
<span class="spn">See How It Works</span>
</a>
</div>
<section class="mb-xl">
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm">Simple process</p>
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">How Sponsorship Works</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
<?php
$steps = [
    ['01', 'Register Your Business', 'Create your free sponsor account with your business name, location, and contact details. Takes less than 3 minutes.'],
    ['02', 'Configure Your Event', 'Pick which sport leagues to support, set your voting limits, and choose your prize — a free item, discount voucher, or both.'],
    ['03', 'Save Payment Method', 'Securely save a payment method for prize redemptions. No charge is made now — you\'re only billed when a winner redeems.'],
    ['04', 'Customers Walk In', 'Winning voters show their digital prize in your store. You verify and they redeem — a real walk-in customer.'],
];
foreach ($steps as $s): ?>
<div class="rounded-2xl p-lg border border-outline-variant/40">
<p class="font-headline-md text-primary mb-sm"><?php echo $s[0]; ?></p>
<h3 class="font-title-card text-title-card mb-sm"><?php echo htmlspecialchars($s[1]); ?></h3>
<p class="font-body-md text-on-surface-variant"><?php echo htmlspecialchars($s[2]); ?></p>
</div>
<?php endforeach; ?>
</div>
</section>
<section class="mb-xl rounded-3xl bg-surface-container-low p-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">You Only Pay On Redemption</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed max-w-3xl mb-lg">Your payment method is securely stored when you register — but no charge is ever made upfront. A small platform service fee is only applied when a winning customer actually redeems their prize at your location. No redemptions = no charges.</p>
<div class="border border-outline-variant rounded-2xl p-lg bg-surface-container-lowest max-w-3xl">
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm flex items-center gap-sm"><span class="material-symbols-outlined text-[18px]">credit_card</span> Billing disclosure</p>
<ul class="space-y-sm font-body-md text-on-surface-variant">
<li class="flex gap-sm"><span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">check_circle</span><span>Payment processing is handled by <strong class="text-on-background">Stripe, Inc.</strong> Your full card number is never stored on our servers.</span></li>
<li class="flex gap-sm"><span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">check_circle</span><span>Charges appear on your bank statement as <strong class="text-on-background">LTSTHEMENU</strong> or similar.</span></li>
<li class="flex gap-sm"><span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">check_circle</span><span>You may remove your saved payment method and end future participation at any time by emailing <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a>.</span></li>
<li class="flex gap-sm"><span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">check_circle</span><span>To dispute any redemption charge, contact us within 30 days at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a>. See our <a class="text-primary hover:underline" href="page/refund-policy">Refund Policy</a> for full details.</span></li>
</ul>
</div>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">Supported Leagues</h2>
<div class="flex flex-wrap gap-sm">
<?php foreach (['NHL', 'NBA', 'MLB', 'NFL', 'More Coming Soon'] as $league): ?>
<span class="px-5 py-2 rounded-full border border-outline-variant font-label-sm text-on-background"><?php echo $league; ?></span>
<?php endforeach; ?>
</div>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">What Can You Offer as a Prize?</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
<div class="p-lg rounded-2xl border border-outline-variant/40"><h3 class="font-title-card text-title-card mb-sm">Free Food Item</h3><p class="font-body-md text-on-surface-variant">Award winners a complimentary menu item — a slice, a burger, a dessert. They claim it in person, guaranteed foot traffic.</p></div>
<div class="p-lg rounded-2xl border border-outline-variant/40"><h3 class="font-title-card text-title-card mb-sm">Discount Voucher</h3><p class="font-body-md text-on-surface-variant">Give winners a percentage off their next visit or a fixed dollar discount — turn one-time winners into repeat customers.</p></div>
<div class="p-lg rounded-2xl border border-outline-variant/40"><h3 class="font-title-card text-title-card mb-sm">Consolation Prize</h3><p class="font-body-md text-on-surface-variant">Optionally reward losing-team voters too — keeps everyone engaged and coming back.</p></div>
</div>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">Sponsors Who Have Seen Results</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
<blockquote class="p-lg rounded-2xl bg-surface-container-lowest border border-outline-variant/40"><p class="font-body-md text-on-surface-variant mb-md">"Since we started sponsoring NBA vote events, Sunday foot traffic is up 25%. Fans literally come in showing their prize on their phone."</p><footer class="font-label-sm"><strong>Tony R.</strong> — Owner, Tony's Pizzeria</footer></blockquote>
<blockquote class="p-lg rounded-2xl bg-surface-container-lowest border border-outline-variant/40"><p class="font-body-md text-on-surface-variant mb-md">"We offered a free coffee to NHL winners. We saw 40 new faces in one week — the pay-on-redemption model means zero risk."</p><footer class="font-label-sm"><strong>Linda K.</strong> — Manager, The Corner Cafe</footer></blockquote>
<blockquote class="p-lg rounded-2xl bg-surface-container-lowest border border-outline-variant/40"><p class="font-body-md text-on-surface-variant mb-md">"The setup took 10 minutes. We picked MLB, set a 10% discount, and within the first event we had 30 new customers."</p><footer class="font-label-sm"><strong>Mark S.</strong> — Owner, Mark's Grill House</footer></blockquote>
</div>
</section>
<section class="rounded-3xl bg-primary text-white p-xl flex flex-col md:flex-row md:items-center md:justify-between gap-lg">
<div>
<h2 class="font-headline-md text-headline-md mb-sm">Ready to Bring Fans Through Your Door?</h2>
<p class="opacity-90 max-w-xl">Join local businesses turning community sports excitement into real walk-in customers. Setup takes under 10 minutes.</p>
</div>
<a href="contact" class="btn-iconed bg-white text-primary font-bold rounded-full px-6 py-3 shrink-0">
<span class="material-symbols-outlined">storefront</span>
<span class="spn">Create Your Sponsor Account</span>
</a>
</section>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
