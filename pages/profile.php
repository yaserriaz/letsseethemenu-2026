<?php
require_once __DIR__ . '/../inc/site-settings.php';
$page = 'profile';
$page_title = 'Profile - Let\'s See The Menu';
$page_eyebrow = 'Account';
$page_heading = 'Your Profile';
$page_lead = 'Manage your account preferences once authentication is connected.';
$page_hero_compact = true;
ob_start();
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="rounded-3xl border border-outline-variant/40 bg-surface-container-lowest p-xl max-w-xl mx-auto text-center">
<div class="w-20 h-20 rounded-full bg-primary/10 text-primary flex items-center justify-center mx-auto mb-md">
<span class="material-symbols-outlined text-4xl">person</span>
</div>
<h2 class="font-headline-md text-headline-md text-on-background mb-sm">Guest</h2>
<p class="font-body-md text-on-surface-variant mb-lg">You are not signed in. Log in to view account details, votes, and saved preferences.</p>
<a href="login" class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3 inline-flex">
<span class="material-symbols-outlined">login</span>
<span class="spn">Go to Login</span>
</a>
</div>
</main>
<?php
$content = ob_get_clean();
include __DIR__ . '/../templates/layout-public.php';
