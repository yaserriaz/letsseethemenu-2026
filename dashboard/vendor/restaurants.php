<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$dash_user = 'vendor';
$dash_page = 'restaurants';
$page_title = 'Restaurants / Venues - Vendor Dashboard';
ob_start();
?>
<div class="max-w-4xl">
  <div class="mb-6">
    <p class="text-xs uppercase tracking-wider text-primary font-bold mb-1">Vendor Dashboard</p>
    <h1 class="font-headline-md text-headline-md text-on-background">Restaurants / Venues</h1>
    <p class="mt-2 text-on-surface-variant">Manage the restaurants and venues linked to your account.</p>
  </div>
  <div class="rounded-2xl border border-outline-variant/40 bg-white p-6 shadow-sm">
    <p class="text-on-surface-variant text-sm">This view is ready. Content and forms will be wired up in a later phase.</p>
  </div>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
