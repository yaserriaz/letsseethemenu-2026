<?php
/**
 * Dashboard entry — login/signup form action target.
 */
require_once __DIR__ . '/../inc/site-settings.php';
header('Location: ' . rtrim($sitepath, '/') . '/dashboard/customer/');
exit;
