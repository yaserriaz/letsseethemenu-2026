<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$dash_user = 'vendor';
$dash_page = 'password';
$dash_user_name = 'Mair Ahmed';
$dash_user_email = 'mairahmed007@gmail.com';
$page_title = 'Change Password - Vendor Dashboard';
ob_start();
include __DIR__ . '/../inc/password-form.php';
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
