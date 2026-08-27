<?php
require_once __DIR__ . '/../../inc/site-settings.php';
$dash_user = 'customer';
$dash_page = 'profile';
$dash_user_name = 'Manery deleon';
$dash_user_email = 'manerydeleon@gmail.com';
$page_title = 'Edit Profile - Customer Dashboard';
ob_start();
include __DIR__ . '/../inc/profile-form.php';
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
