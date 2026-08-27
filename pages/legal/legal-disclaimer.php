<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$page = 'legal-disclaimer';
$page_title = 'Legal Disclaimer - Let\'s See The Menu';
$page_eyebrow = 'Legal';
$page_heading = 'Legal Disclaimer';
$page_lead = 'Important information about the use of this website and our services.';
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
<h2 class="font-headline-md text-headline-md text-on-background mb-md">General information</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">The information provided on Let's See The Menu is for general informational purposes only. While we strive to keep restaurant menus, hours, and related details accurate and up to date, content is supplied by third-party businesses and may change without notice.</p>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">No warranty</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">Let's See The Menu does not warrant the completeness, reliability, or accuracy of any information on this site. Any action you take based on information found here is strictly at your own risk. We are not liable for losses or damages in connection with the use of our website.</p>
</section>
<section class="mb-xl">
<h2 class="font-headline-md text-headline-md text-on-background mb-md">External links</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">External links may appear on this site for convenience. We do not control or endorse third-party websites and are not responsible for their content or privacy practices.</p>
</section>
<section>
<h2 class="font-headline-md text-headline-md text-on-background mb-md">Related policies</h2>
<p class="font-body-md text-on-surface-variant leading-relaxed">For binding terms governing vendors and platform use, see our <a class="text-primary hover:underline" href="page/terms-condition">Terms &amp; Conditions</a> and <a class="text-primary hover:underline" href="page/privacy-policy">Privacy Policy</a>.</p>
</section>
</div>

</div>
</main>
<?php include __DIR__ . '/../../inc/legal-toc.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-public.php';
