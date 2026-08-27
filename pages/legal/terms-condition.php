<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$page = 'terms-condition';
$page_title = 'Terms & Conditions - Let\'s See The Menu';
$page_eyebrow = 'Legal';
$page_heading = 'Terms & Conditions';
$page_lead = 'Welcome to Let\'s See The Menu.com — please review these terms before using the platform.';
$page_hero_compact = true;
ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="legal-doc grid grid-cols-1 lg:grid-cols-12 gap-xl items-start">

<aside id="legal-toc" class="lg:col-span-3 order-2 lg:order-1 lg:sticky lg:top-28">
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest mb-md">On this page</p>
<nav id="legal-toc-nav" class="flex flex-col gap-1" aria-label="Page sections"></nav>
</aside>

<div class="legal-content lg:col-span-9 order-1 lg:order-2 min-w-0">
<p class="font-body-sm text-on-surface-variant mb-lg">Last updated: August 2026</p>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-lg">Welcome to Let's See The Menu ("Platform," "we," "us," or "our"), an online food and beverage discovery and ordering platform. By accessing or using our website at <a class="text-primary hover:underline" href="https://letsseethemenu.com">letsseethemenu.com</a> — whether as a customer placing orders, a vendor listing your business, or a sponsor running a promotion — you agree to be bound by these Terms &amp; Conditions. If you do not agree, please do not use the Platform.</p>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Who these terms apply to</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">These Terms apply to all users of the Platform, including:</p>
<ul class="list-disc pl-lg space-y-sm font-body-md text-on-surface-variant">
<li><strong class="text-on-background">Customers</strong> — individuals who browse menus, place food or beverage orders, or purchase gift certificates through the Platform.</li>
<li><strong class="text-on-background">Vendors</strong> — restaurants and food &amp; beverage businesses that list menus, accept online orders, or purchase advertising through the Platform.</li>
<li><strong class="text-on-background">Sponsors</strong> — businesses that participate in our game-event sponsorship program and offer prizes to winning voters.</li>
<li><strong class="text-on-background">Affiliates</strong> — partners who refer vendors to the Platform under our affiliate program.</li>
</ul>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Online ordering</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Vendors may use our online ordering feature to accept orders from customers. All proceeds from online orders are remitted to the vendor, minus our applicable transaction fee (see "Fees" section below). Vendors are solely responsible for fulfilling orders placed through the Platform, including accuracy of menu information, food preparation, and delivery or pickup. Let's See The Menu is not a party to the transaction between a vendor and a customer; we provide the technology platform only.</p>
<p class="font-body-md text-on-surface-variant leading-relaxed">Customers agree that order accuracy is their responsibility prior to checkout. Once an order is submitted and accepted by the vendor it is considered final. Please see our <a class="text-primary hover:underline" href="page/refund-policy">Refund Policy</a> for information on unfulfilled orders and disputes.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Fees</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">The following fees apply to vendors using our paid features. All fees are in USD.</p>
<div class="overflow-x-auto">
<table class="w-full text-left font-body-md text-on-surface-variant border border-outline-variant/40 rounded-lg mb-md">
<thead><tr class="bg-surface-container-low"><th class="px-md py-sm font-bold text-on-background border-b border-outline-variant/40">Feature</th><th class="px-md py-sm font-bold text-on-background border-b border-outline-variant/40">Fee</th></tr></thead>
<tbody>
<tr class="border-b border-outline-variant/20"><td class="px-md py-sm">Online ordering — transaction fee</td><td class="px-md py-sm font-bold text-on-background">Contact us for current rates</td></tr>
<tr class="border-b border-outline-variant/20"><td class="px-md py-sm">Banner advertising — monthly subscription</td><td class="px-md py-sm font-bold text-on-background">Contact us for current rates</td></tr>
<tr><td class="px-md py-sm">Game-event sponsorship — per redemption fee</td><td class="px-md py-sm font-bold text-on-background">Contact us for current rates</td></tr>
</tbody>
</table>
</div>
<p class="font-body-md text-on-surface-variant leading-relaxed">Payment processing is handled by Stripe, Inc. By saving a payment method on our Platform, you authorize us to charge the applicable fees as described above. Stripe's services are subject to Stripe's own <a class="text-primary hover:underline" href="https://stripe.com/legal/ssa" target="_blank" rel="noopener">Terms of Service</a>. We do not store full card numbers; all payment data is stored securely by Stripe.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Geo-located banner advertising</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">Vendors may purchase recurring monthly subscriptions to display geo-targeted banner advertisements on the Platform. Subscriptions renew automatically each billing cycle until cancelled. Vendors may cancel at any time; the subscription will remain active until the end of the current billing period, after which no further charges will be made. See our <a class="text-primary hover:underline" href="page/refund-policy">Refund Policy</a> for cancellation details.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Gift certificates</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Vendors may make gift certificates available for purchase through the Platform. By purchasing a gift certificate, customers agree to the following:</p>
<ul class="list-disc pl-lg space-y-sm font-body-md text-on-surface-variant mb-md">
<li>Gift certificates are stored-value instruments redeemable at participating vendors in our network.</li>
<li>Let's See The Menu holds the purchase proceeds and remits them to the redeeming vendor upon redemption.</li>
<li>Gift certificates do not expire within 5 years of purchase, in accordance with applicable U.S. law.</li>
<li>Gift certificates are non-refundable after purchase except as required by law.</li>
<li>Lost or stolen gift certificates cannot be replaced unless the purchaser provides proof of purchase, at our sole discretion.</li>
<li>If a vendor leaves the Platform, any outstanding gift certificates originally branded for that vendor may be redeemed at other participating vendors in the network; we will notify affected purchasers by email.</li>
</ul>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Game-event sponsorship</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Sponsors who participate in our game-event program authorize us to store their payment method and to charge the applicable per-redemption fee each time a winning voter redeems a prize at the sponsor's location. By registering as a sponsor:</p>
<ul class="list-disc pl-lg space-y-sm font-body-md text-on-surface-variant mb-md">
<li>You authorize Let's See The Menu to charge your saved payment method for each verified prize redemption.</li>
<li>Charges will appear on your billing statement as <strong class="text-on-background">LTSTHEMENU</strong> or similar.</li>
<li>You may remove your payment method and end future participation at any time by contacting us at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a>.</li>
<li>Disputed redemption charges must be raised with us within 30 days of the charge date. To dispute a charge, email <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a> with your business name, the charge date, and the reason for the dispute.</li>
</ul>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Prohibited use</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">You agree not to use the Platform to:</p>
<ul class="list-disc pl-lg space-y-sm font-body-md text-on-surface-variant">
<li>Violate any applicable local, state, national, or international law or regulation.</li>
<li>Submit false, misleading, or fraudulent orders, reviews, or information.</li>
<li>Engage in any activity that could damage, disable, or impair the Platform.</li>
<li>Attempt unauthorized access to any portion of the Platform or its related systems.</li>
<li>Use the Platform for any commercial purpose not expressly permitted by these Terms.</li>
</ul>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Intellectual property</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">All content on the Platform — including text, graphics, logos, and software — is the property of Let's See The Menu or its licensors and is protected by applicable intellectual property laws. Vendors grant us a non-exclusive, royalty-free license to display their menu content, images, and business information on the Platform for the purpose of operating the service. You may not reproduce, distribute, or create derivative works from Platform content without our express written consent.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Limitation of liability</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">To the fullest extent permitted by law, Let's See The Menu, its officers, directors, employees, and agents shall not be liable for any indirect, incidental, special, consequential, or punitive damages — including lost profits or data — arising out of or in connection with your use of the Platform, even if advised of the possibility of such damages.</p>
<p class="font-body-md text-on-surface-variant leading-relaxed">Our total cumulative liability to any user for any claim arising out of these Terms or your use of the Platform shall not exceed the greater of (a) the total fees you paid to us in the 90 days preceding the claim, or (b) one hundred dollars ($100).</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Dispute resolution</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">If you have a dispute with us, please contact us first at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a> or <a class="text-primary hover:underline" href="tel:+18609619057">+1 (860) 961-9057</a>. We will attempt to resolve disputes informally within 30 days. If a dispute cannot be resolved informally, it shall be submitted to binding arbitration in Connecticut under the rules of the American Arbitration Association, except that either party may seek injunctive relief in a court of competent jurisdiction. Nothing in this section prevents you from filing a complaint with your card issuer or a consumer protection agency.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Termination of service</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">Let's See The Menu reserves the right to suspend or terminate the account of any user or vendor at any time for violation of these Terms or for any other reason at our sole discretion. Upon termination, any outstanding vendor payouts for completed and verified orders will be settled within 30 days. Customers with unredeemed gift certificates will be notified and given a reasonable opportunity to redeem them.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Governing law</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">These Terms shall be governed by and construed in accordance with the laws of the State of Connecticut, United States, without regard to its conflict of law principles.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Changes to these terms</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">We may update these Terms at any time. When we do, we will revise the "Last updated" date at the top of this page. For material changes, we will provide notice via email or a prominent notice on the Platform at least 14 days before the change takes effect. Continued use of the Platform after the effective date constitutes acceptance of the updated Terms.</p>
</section>

<p class="font-body-md text-on-surface-variant leading-relaxed">Questions? Contact us at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a> or call <a class="text-primary hover:underline" href="tel:+18609619057">+1 (860) 961-9057</a>.</p>
</div>

</div>
</main>
<?php include __DIR__ . '/../../inc/legal-toc.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-public.php';
