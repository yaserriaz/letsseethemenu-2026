<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$page = 'refund-policy';
$page_title = 'Refund Policy - Let\'s See The Menu';
$page_eyebrow = 'Info';
$page_heading = 'Refund Policy';
$page_lead = 'Please review how refunds and cancellations work on our platform.';
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
<p class="font-body-sm text-on-surface-variant mb-xl">Last updated: August 2026</p>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Online Orders</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">At Let's See The Menu, we aim to provide the best service and experience possible. Once you place an online order and it is accepted by the vendor, it is considered final. We do not offer refunds for online orders after they have been accepted. Please review your order carefully before completing the purchase to ensure everything is accurate.</p>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-sm"><strong class="text-on-background">Unfulfilled or undelivered orders:</strong> If an order you paid for was accepted by a vendor but never prepared, delivered, or made available for pickup — and you were charged — you are entitled to a full refund of the amount charged for that order. To request a refund for an unfulfilled order:</p>
<ol class="list-decimal pl-lg space-y-xs font-body-md text-on-surface-variant mb-md">
<li>Contact the vendor directly first using the contact information on their profile page.</li>
<li>If the vendor does not resolve the issue within 48 hours, contact us at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a> with your order number, date, and a description of the issue.</li>
<li>We will investigate and, if the order was confirmed unfulfilled, issue a refund to your original payment method within 5–10 business days.</li>
</ol>
<p class="font-body-md text-on-surface-variant leading-relaxed"><strong class="text-on-background">Incorrect orders:</strong> Disputes over incorrect or incomplete orders must be directed to the vendor. Let's See The Menu is not liable for order accuracy, as menu and order content is controlled by the vendor. However, if you are unable to reach the vendor, please contact us and we will assist in mediating the dispute.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Gift Certificates</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Gift certificate purchases are non-refundable once issued, except as required by applicable law.</p>
<ul class="list-disc pl-lg space-y-sm font-body-md text-on-surface-variant">
<li>Gift certificates do not expire within 5 years of the purchase date.</li>
<li>If you were charged for a gift certificate but did not receive it (e.g., due to a technical error), contact us within 30 days at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a> and we will reissue or refund.</li>
<li>If a participating vendor leaves the Platform, your gift certificate remains valid for use at other participating vendors in the network. We will notify you by email if this occurs.</li>
</ul>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Banner Ads Subscription</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">You may cancel your recurring subscription for banner ads at any time. Upon cancellation, your ads will continue to run until the end of the current billing month. After the cancellation month concludes, your ads will no longer be displayed, and you will not be charged for future billing cycles. Partial-month refunds are not issued for banner ad subscriptions. If you believe you were charged in error, contact us within 30 days of the charge at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a>.</p>
</section>

<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Game-Event Sponsorship Billing</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Sponsors are charged a per-redemption fee each time a verified winning voter redeems a prize at their location. These charges are non-refundable once a redemption has been verified, as the sponsor has received the economic benefit (a customer visit).</p>
<p class="font-body-md text-on-surface-variant leading-relaxed"><strong class="text-on-background">To dispute a redemption charge:</strong> If you believe a redemption was fraudulent or in error, notify us within 30 days of the charge at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a>. Include your business name, the charge date, the charge amount, and the reason for the dispute. We will investigate and respond within 10 business days.</p>
</section>

<section>
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Questions</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">If you have any questions or concerns about a charge, please <a class="text-primary hover:underline" href="contact">contact our support team</a> at <a class="text-primary hover:underline" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a> or <a class="text-primary hover:underline" href="tel:+18609619057">+1 (860) 961-9057</a> before filing a dispute with your bank, as we can typically resolve issues faster.</p>
</section>
</div>

</div>
</main>
<?php include __DIR__ . '/../../inc/legal-toc.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-public.php';
