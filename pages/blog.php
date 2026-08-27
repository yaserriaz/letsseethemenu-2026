<?php
require_once __DIR__ . '/../inc/site-settings.php';
require_once __DIR__ . '/../inc/blog-posts.php';

$page = 'blog';
$page_title = 'Blog - Let\'s See The Menu';
$page_eyebrow = 'Culinary Journal';
$page_heading = 'Stories from the table';
$page_lead = 'Local guides, host tips, news, and restaurant introductions from around the community.';

ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
<?php foreach ($blog_posts as $i => $post): ?>
<a href="<?php echo htmlspecialchars(blog_post_url($post), ENT_QUOTES, 'UTF-8'); ?>" class="flex flex-col rounded-2xl overflow-hidden border border-outline-variant/40 bg-surface-container-lowest group no-underline hover:no-underline card-shadow hover:-translate-y-1 transition-transform">
<div class="aspect-[16/10] overflow-hidden bg-surface-container">
<img src="<?php echo htmlspecialchars($post['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
</div>
<div class="p-lg flex flex-col flex-1">
<p class="font-label-xs text-label-xs text-primary uppercase tracking-wider mb-xs"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></p>
<h2 class="font-title-card text-title-card text-on-background mb-sm leading-snug group-hover:text-primary transition-colors"><?php echo htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
<p class="font-body-md text-on-surface-variant flex-1"><?php echo htmlspecialchars($post['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
<span class="mt-md font-label-sm text-primary font-bold inline-flex items-center gap-1">
Read more <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</span>
</div>
</a>
<?php endforeach; ?>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
