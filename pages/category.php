<?php
require_once __DIR__ . '/../inc/site-settings.php';
require_once __DIR__ . '/../inc/blog-posts.php';

$slug = isset($_GET['slug']) ? strtolower(trim((string) $_GET['slug'])) : '';
$slug = preg_replace('/[^a-z0-9\-]/', '', $slug) ?? '';

$filtered = [];
$category_name = '';
foreach ($blog_posts as $i => $post) {
    if (($post['category_slug'] ?? '') === $slug) {
        $filtered[] = [$i, $post];
        if ($category_name === '') {
            $category_name = $post['category'];
        }
    }
}

if ($category_name === '' && $slug !== '') {
    $category_name = ucwords(str_replace('-', ' ', $slug));
}

$page = 'category';
$page_title = ($category_name !== '' ? $category_name : 'Category') . ' - Let\'s See The Menu';
$page_eyebrow = 'Blog Category';
$page_heading = $category_name !== '' ? $category_name : 'Category';
$page_lead = $filtered
    ? 'Posts filed under ' . $category_name . '.'
    : 'No posts found in this category yet.';

ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<nav aria-label="Breadcrumb" class="flex text-on-surface-variant font-label-sm text-label-sm mb-lg">
<ol class="inline-flex items-center flex-wrap gap-1">
<li><a class="hover:text-primary transition-colors" href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>">Home</a></li>
<li class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">chevron_right</span>
<a class="hover:text-primary transition-colors" href="blog">Blog</a></li>
<li class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-on-surface font-medium"><?php echo htmlspecialchars($category_name !== '' ? $category_name : 'Category', ENT_QUOTES, 'UTF-8'); ?></span></li>
</ol>
</nav>

<?php if (!$filtered): ?>
<div class="rounded-2xl border border-outline-variant/40 bg-surface-container-lowest p-xl text-center">
<p class="font-body-lg text-on-surface-variant mb-md">No posts found for this category.</p>
<a href="blog" class="btn-iconed btn-iconed-outline border border-outline-variant text-on-surface font-bold rounded-full px-6 py-3 inline-flex items-center gap-2 no-underline">
<span class="material-symbols-outlined">arrow_back</span>
<span class="spn">Back to Blog</span>
</a>
</div>
<?php else: ?>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-lg">
<?php foreach ($filtered as [$i, $post]): ?>
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
<?php endif; ?>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
