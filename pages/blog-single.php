<?php
require_once __DIR__ . '/../inc/site-settings.php';
require_once __DIR__ . '/../inc/blog-posts.php';

$id = false;
if (isset($_GET['slug']) && (string) $_GET['slug'] !== '') {
    $slug = strtolower(trim((string) $_GET['slug']));
    foreach ($blog_posts as $i => $p) {
        if (($p['slug'] ?? '') === $slug) {
            $id = $i;
            break;
        }
    }
}
if ($id === false) {
    $id = isset($_GET['id']) ? (int) $_GET['id'] : -1;
}
if ($id < 0 || $id >= count($blog_posts)) {
    header('Location: ' . rtrim($sitepath, '/') . '/blog');
    exit;
}

$post = $blog_posts[$id];

$page = 'blog-single';
$page_title = $post['title'] . ' - Let\'s See The Menu';
$page_eyebrow = $post['category'];
$page_heading = $post['title'];
$page_lead = $post['excerpt'];
$page_hero_image = $post['image'];

/* Categories + counts for sidebar */
$categories = [];
$category_slugs = [];
foreach ($blog_posts as $p) {
    $cat = $p['category'];
    $categories[$cat] = ($categories[$cat] ?? 0) + 1;
    if (!isset($category_slugs[$cat])) {
        $category_slugs[$cat] = $p['category_slug'] ?? '';
    }
}

/* Recent posts excluding current */
$recent = [];
foreach ($blog_posts as $i => $p) {
    if ($i === $id) {
        continue;
    }
    $recent[] = [$i, $p];
    if (count($recent) >= 4) {
        break;
    }
}

$related = [];
foreach ($blog_posts as $i => $p) {
    if ($i === $id) {
        continue;
    }
    if ($p['category'] === $post['category']) {
        $related[] = [$i, $p];
    }
}
if (count($related) < 3) {
    foreach ($blog_posts as $i => $p) {
        if ($i === $id) {
            continue;
        }
        $already = false;
        foreach ($related as $r) {
            if ($r[0] === $i) {
                $already = true;
                break;
            }
        }
        if (!$already) {
            $related[] = [$i, $p];
        }
        if (count($related) >= 3) {
            break;
        }
    }
}
$related = array_slice($related, 0, 3);

ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<nav aria-label="Breadcrumb" class="flex text-on-surface-variant font-label-sm text-label-sm mb-lg">
<ol class="inline-flex items-center flex-wrap gap-1">
<li><a class="hover:text-primary transition-colors" href="<?php echo htmlspecialchars($sitepath, ENT_QUOTES, 'UTF-8'); ?>">Home</a></li>
<li class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">chevron_right</span>
<a class="hover:text-primary transition-colors" href="blog">Blog</a></li>
<?php if (!empty($post['category_slug'])): ?>
<li class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">chevron_right</span>
<a class="hover:text-primary transition-colors" href="<?php echo htmlspecialchars(blog_category_url($post['category_slug']), ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></a></li>
<?php endif; ?>
<li class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">chevron_right</span>
<span class="text-on-surface font-medium line-clamp-1 max-w-[280px]"><?php echo htmlspecialchars($post['title'], ENT_QUOTES, 'UTF-8'); ?></span></li>
</ol>
</nav>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-xl items-start">

<!-- ── Main content (wider) ─────────────────────────────────────────── -->
<article class="lg:col-span-8 min-w-0">
<div class="flex flex-wrap items-center gap-md text-on-surface-variant font-label-xs mb-lg">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span><?php echo htmlspecialchars($post['date'], ENT_QUOTES, 'UTF-8'); ?></span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">schedule</span><?php echo (int) $post['read_mins']; ?> min read</span>
<span class="px-3 py-1 rounded-full bg-primary/10 text-primary font-bold uppercase tracking-wider"><?php echo htmlspecialchars($post['category'], ENT_QUOTES, 'UTF-8'); ?></span>
</div>

<div class="rounded-2xl overflow-hidden mb-xl border border-outline-variant/30">
<img src="<?php echo htmlspecialchars($post['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-auto object-cover max-h-[480px]">
</div>

<div class="space-y-md font-body-lg text-on-surface-variant leading-relaxed text-[18px]">
<?php foreach ($post['body'] as $para): ?>
<p><?php echo htmlspecialchars($para, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endforeach; ?>
</div>

<div class="mt-xl pt-lg border-t border-outline-variant/30 flex flex-wrap gap-sm">
<a href="blog" class="btn-iconed btn-iconed-outline border border-outline-variant text-on-surface font-bold rounded-full px-6 py-3">
<span class="material-symbols-outlined">arrow_back</span>
<span class="spn">Back to Blog</span>
</a>
</div>
</article>

<!-- ── Sidebar ──────────────────────────────────────────────────────── -->
<aside class="lg:col-span-4 w-full space-y-lg lg:sticky lg:top-28">

<div>
<h2 class="font-title-card text-title-card text-on-background mb-md">Categories</h2>
<ul class="space-y-sm">
<?php foreach ($categories as $cat => $count):
    $cat_slug = $category_slugs[$cat] ?? '';
    $cat_href = $cat_slug !== '' ? blog_category_url($cat_slug) : 'blog';
?>
<li>
<a href="<?php echo htmlspecialchars($cat_href, ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center justify-between gap-2 py-2 border-b border-outline-variant/20 last:border-0 text-on-surface-variant hover:text-primary transition-colors no-underline">
<span class="font-body-md text-sm"><?php echo htmlspecialchars($cat, ENT_QUOTES, 'UTF-8'); ?></span>
<span class="font-label-xs bg-primary/10 text-primary px-2 py-0.5 rounded-full"><?php echo (int) $count; ?></span>
</a>
</li>
<?php endforeach; ?>
</ul>
</div>

<div class="rounded-2xl border border-outline-variant/40 bg-surface-container-lowest p-lg">
<h2 class="font-title-card text-title-card text-on-background mb-md">Recent posts</h2>
<ul class="space-y-md">
<?php foreach ($recent as [$rid, $rp]): ?>
<li>
<a href="<?php echo htmlspecialchars(blog_post_url($rp), ENT_QUOTES, 'UTF-8'); ?>" class="flex gap-3 group no-underline hover:no-underline">
<div class="w-16 h-16 rounded-lg overflow-hidden shrink-0 bg-surface-container">
<img src="<?php echo htmlspecialchars($rp['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
</div>
<div class="min-w-0">
<p class="font-label-xs text-primary uppercase tracking-wider mb-0.5"><?php echo htmlspecialchars($rp['category'], ENT_QUOTES, 'UTF-8'); ?></p>
<p class="font-label-sm text-on-background group-hover:text-primary transition-colors leading-snug line-clamp-2"><?php echo htmlspecialchars($rp['title'], ENT_QUOTES, 'UTF-8'); ?></p>
</div>
</a>
</li>
<?php endforeach; ?>
</ul>
</div>

<div class="rounded-2xl bg-primary text-white p-lg">
<p class="font-label-sm uppercase tracking-wider text-white/80 mb-sm">Stay hungry</p>
<h2 class="font-title-card text-title-card mb-sm">Get local menu updates</h2>
<p class="font-body-md text-white/85 text-sm mb-md leading-relaxed">New posts, neighborhood finds, and sponsor stories — straight to your inbox.</p>
<a href="contact" class="inline-flex items-center justify-center gap-1 bg-white text-primary font-bold rounded-full px-5 py-2.5 text-sm hover:bg-white/90 transition-colors no-underline">
Contact us
<span class="material-symbols-outlined text-[18px]">arrow_forward</span>
</a>
</div>

</aside>
</div>

<?php if ($related): ?>
<section class="mt-xl pt-xl border-t border-outline-variant/30">
<h2 class="font-headline-md text-headline-md text-on-background mb-lg">More from the journal</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-lg">
<?php foreach ($related as [$rid, $rp]): ?>
<a href="<?php echo htmlspecialchars(blog_post_url($rp), ENT_QUOTES, 'UTF-8'); ?>" class="group flex flex-col rounded-2xl overflow-hidden border border-outline-variant/40 bg-surface-container-lowest no-underline hover:no-underline">
<div class="aspect-[16/10] overflow-hidden bg-surface-container">
<img src="<?php echo htmlspecialchars($rp['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
</div>
<div class="p-md">
<p class="font-label-xs text-primary uppercase tracking-wider mb-xs"><?php echo htmlspecialchars($rp['category'], ENT_QUOTES, 'UTF-8'); ?></p>
<h3 class="font-title-card text-title-card text-on-background group-hover:text-primary transition-colors leading-snug"><?php echo htmlspecialchars($rp['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
</div>
</a>
<?php endforeach; ?>
</div>
</section>
<?php endif; ?>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
