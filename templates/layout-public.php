<?php
/**
 * Public site layout — header + optional page hero + content + footer.
 * Expects $content from output buffering. Optional: $page, $page_title,
 * $page_heading, $page_eyebrow, $page_lead, $page_hero_image,
 * $page_hero_compact, $page_hero_overlay, $body_class.
 */
require_once __DIR__ . '/../inc/site-settings.php';
if (!isset($page)) {
    $page = basename($_SERVER['SCRIPT_NAME'] ?? '', '.php');
}
if (!isset($page_title)) {
    $page_title = "Let's See The Menu";
}
$body_class = $body_class ?? 'bg-background text-on-surface font-body-md antialiased flex flex-col min-h-screen';
$html_class = $html_class ?? 'light';
?>
<!DOCTYPE html>
<html class="<?php echo htmlspecialchars($html_class, ENT_QUOTES, 'UTF-8'); ?>" lang="en">
<head>
<?php include __DIR__ . '/../inc/head.php'; ?>
<?php if (!empty($extra_head)) {
    echo $extra_head;
} ?>
</head>
<body class="<?php echo htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8'); ?>">
<?php if (empty($skip_main_nav)) {
    include __DIR__ . '/../inc/main-nav.php';
} ?>
<?php if (!empty($page_heading)) {
    include __DIR__ . '/../inc/page-hero.php';
} ?>
<?php echo $content; ?>
<?php include __DIR__ . '/../inc/footer.php'; ?>
<?php if (!empty($extra_footer)) {
    echo $extra_footer;
} ?>
</body>
</html>
