<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$page = 'user-data-deletion';
$page_title = 'User Data Deletion - Let\'s See The Menu';
$page_eyebrow = 'Privacy';
$page_heading = 'User Data Deletion';
$page_lead = 'How to request deletion of your Facebook app data.';
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
<p class="font-body-md text-on-surface-variant leading-relaxed mb-xl">If you logged in with Facebook or shared data with Let's See The Menu, you can request deletion of your data at any time.</p>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">How to request deletion</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-md">Email us at <a class="text-primary hover:underline" href="mailto:ali@letsseethemenu.com">ali@letsseethemenu.com</a> with the subject line:</p>
<p class="font-bold text-on-background mb-md px-md py-sm bg-surface-container-low rounded-lg inline-block">Delete my Facebook app data</p>
<p class="font-body-md text-on-surface-variant leading-relaxed mb-sm">Please include:</p>
<ul class="list-disc pl-lg space-y-sm font-body-md text-on-surface-variant">
<li>Your Facebook name</li>
<li>Your Facebook user ID if available</li>
<li>The email address used on the account</li>
</ul>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">What happens next</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">We will verify your request, delete any stored app data associated with your account, and confirm when deletion is complete.</p>
</section>
<section>
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Questions</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">Contact us at <a class="text-primary hover:underline" href="mailto:ali@letsseethemenu.com">ali@letsseethemenu.com</a>.</p>
</section>
</div>

</div>
</main>
<?php include __DIR__ . '/../../inc/legal-toc.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-public.php';
