<?php
if (!isset($page)) {
    $page = basename($_SERVER['SCRIPT_NAME'] ?? '', '.php');
}
if (!isset($page_title)) {
    $page_title = "Let's See The Menu";
}
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
<?php include __DIR__ . '/head.php'; ?>
</head>
<body class="bg-background text-on-surface font-body-md antialiased flex flex-col min-h-screen">
<?php include __DIR__ . '/main-nav.php'; ?>
