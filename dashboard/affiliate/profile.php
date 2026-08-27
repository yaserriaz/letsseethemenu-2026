<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$dash_user = 'affiliate';
$dash_page = 'profile';
$dash_user_name = 'Mair Ahmed';
$dash_user_email = 'mairahmed007@gmail.com';
$dash_earnings = '$0.00';
$page_title = 'Edit Profile - Affiliates Dashboard';
ob_start();
include __DIR__ . '/../inc/profile-form.php';
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
