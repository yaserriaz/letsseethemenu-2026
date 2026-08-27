<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$page = 'delivery-information';
$page_title = 'Delivery Information - Let\'s See The Menu';
$page_eyebrow = 'Info';
$page_heading = 'Delivery Information';
$page_lead = 'Delivery is handled by each restaurant — here is what that means for you.';
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
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">How delivery works</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">At Let's See The Menu, we connect you with your favorite local restaurants, making it easy to browse menus and place orders online. However, please note that delivery services and policies are set by the individual restaurants you order from. This includes delivery fees, delivery times, and delivery areas.</p>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Restaurant policies</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">We recommend checking each restaurant's delivery policy directly on their profile before placing your order to ensure it meets your needs. Any questions or concerns regarding delivery should be directed to the restaurant providing the service.</p>
</section>
<section>
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Thank you</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">Thank you for using Let's See The Menu! We're committed to making your dining experience as convenient as possible.</p>
</section>
</div>

</div>
</main>
<?php include __DIR__ . '/../../inc/legal-toc.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-public.php';
