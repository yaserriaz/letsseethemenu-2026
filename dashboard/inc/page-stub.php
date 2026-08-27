<?php
/**
 * Shared placeholder body for unfinished dashboard pages.
 * Expects: $page_heading, $page_lead (optional)
 */
$page_heading = $page_heading ?? 'Coming soon';
$page_lead = $page_lead ?? 'This section is scaffolded and will be wired to live data next.';
?>
<div class="max-w-3xl">
  <div class="mb-6">
    <h1 class="font-headline-md text-headline-md text-on-background"><?php echo htmlspecialchars($page_heading, ENT_QUOTES, 'UTF-8'); ?></h1>
    <p class="mt-2 text-on-surface-variant"><?php echo htmlspecialchars($page_lead, ENT_QUOTES, 'UTF-8'); ?></p>
  </div>
  <div class="rounded-2xl border border-dashed border-outline-variant bg-white p-6 text-sm text-on-surface-variant">
    Content and forms for this module will be added in a later pass.
  </div>
</div>
