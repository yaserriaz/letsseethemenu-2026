<?php
if (!isset($page_eyebrow)) {
    $page_eyebrow = '';
}
if (!isset($page_heading)) {
    $page_heading = $page_title ?? '';
}
if (!isset($page_lead)) {
    $page_lead = '';
}
$hero_compact = !empty($page_hero_compact);
?>
<section class="relative overflow-hidden border-b border-outline-variant/30 <?php echo $hero_compact ? 'py-xl' : 'py-xl md:py-[100px]'; ?>">
<div class="absolute inset-0 bg-gradient-to-br from-primary/8 via-background to-tertiary-fixed/10 pointer-events-none"></div>
<div class="absolute -right-24 -top-24 w-72 h-72 rounded-full bg-primary/10 blur-3xl pointer-events-none"></div>
<div class="max-w-container-max mx-auto px-md relative">
<?php if ($page_eyebrow !== ''): ?>
<p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-sm"><?php echo htmlspecialchars($page_eyebrow, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
<h1 class="font-headline-lg text-headline-lg text-on-background max-w-3xl"><?php echo htmlspecialchars($page_heading, ENT_QUOTES, 'UTF-8'); ?></h1>
<?php if ($page_lead !== ''): ?>
<p class="font-body-lg text-body-lg text-on-surface-variant mt-md max-w-2xl leading-relaxed"><?php echo htmlspecialchars($page_lead, ENT_QUOTES, 'UTF-8'); ?></p>
<?php endif; ?>
</div>
</section>
