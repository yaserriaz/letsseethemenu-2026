<?php
/**
 * Bootstrap a dashboard stub page.
 * Usage from role folders:
 *   $dash_user = 'affiliate'; $dash_page = 'orders'; $page_heading = 'My Orders';
 *   require __DIR__ . '/../inc/bootstrap-stub.php';
 */
require_once __DIR__ . '/../../inc/site-settings.php';
$dash_user = $dash_user ?? 'customer';
$dash_page = $dash_page ?? 'index';
$page_heading = $page_heading ?? 'Page';
$page_lead = $page_lead ?? null;
$page_title = ($page_title ?? $page_heading) . ' - Dashboard';

if ($dash_user === 'vendor') {
    $dash_user_name = $dash_user_name ?? 'Mair Ahmed';
    $dash_user_email = $dash_user_email ?? 'mairahmed007@gmail.com';
} elseif ($dash_user === 'affiliate') {
    $dash_user_name = $dash_user_name ?? 'Mair Ahmed';
    $dash_user_email = $dash_user_email ?? 'mairahmed007@gmail.com';
    $dash_earnings = $dash_earnings ?? '$0.00';
} else {
    $dash_user_name = $dash_user_name ?? 'Manery deleon';
    $dash_user_email = $dash_user_email ?? 'manerydeleon@gmail.com';
}

ob_start();
include __DIR__ . '/page-stub.php';
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
