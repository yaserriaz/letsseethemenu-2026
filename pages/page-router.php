<?php
/**
 * Maps live /page/{slug} URLs to existing page scripts.
 */
require_once __DIR__ . '/../inc/site-settings.php';

$slug = isset($_GET['slug']) ? strtolower(trim((string) $_GET['slug'])) : '';
$slug = preg_replace('/[^a-z0-9\-]/', '', $slug) ?? '';

$slug_map = [
    'mission-statement' => __DIR__ . '/mission-statement.php',
    'how-it-works' => __DIR__ . '/how-it-works.php',
    'affiliates' => __DIR__ . '/affiliates.php',
    'become-a-sponsor' => __DIR__ . '/become-a-sponsor.php',
    'local-events' => __DIR__ . '/local-events.php',
    'available-states' => __DIR__ . '/available-states.php',
    'available-cities' => __DIR__ . '/available-cities.php',
    'terms-condition' => __DIR__ . '/legal/terms-condition.php',
    'privacy-policy' => __DIR__ . '/legal/privacy-policy.php',
    'refund-policy' => __DIR__ . '/legal/refund-policy.php',
    'delivery-information' => __DIR__ . '/legal/delivery-information.php',
    'user-data-deletion' => __DIR__ . '/legal/user-data-deletion.php',
    'foodie' => __DIR__ . '/how-it-works.php',
    'events' => __DIR__ . '/local-events.php',
    'cart' => __DIR__ . '/../index.php',
    'checkout' => __DIR__ . '/../index.php',
    'home' => __DIR__ . '/../index.php',
];

if ($slug === '' || !isset($slug_map[$slug]) || !is_file($slug_map[$slug])) {
    http_response_code(404);
    $page = '404';
    $page_title = 'Page not found - Let\'s See The Menu';
    $page_eyebrow = '404';
    $page_heading = 'Page not found';
    $page_lead = 'The page you requested does not exist or has moved.';
    ob_start();
    ?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl text-center">
<p class="font-body-lg text-on-surface-variant mb-lg">Sorry, we could not find that page.</p>
<a href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>" class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3 inline-flex items-center gap-2 no-underline">
<span class="material-symbols-outlined">home</span>
<span class="spn">Back to Home</span>
</a>
</main>
    <?php
    $content = ob_get_clean();
    include __DIR__ . '/../templates/layout-public.php';
    exit;
}

require $slug_map[$slug];
