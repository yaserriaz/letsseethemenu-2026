<?php
if (!isset($page)) {
    $page = basename($_SERVER['SCRIPT_NAME'] ?? '', '.php');
}
$nav_pill = 'btn-iconed btn-iconed-outline text-on-surface-variant font-medium font-label-sm border border-outline-variant rounded-full px-4 py-2';
$nav_active = 'btn-iconed btn-iconed-outline text-primary font-bold font-label-sm border border-primary rounded-full px-4 py-2';
$nav_login = 'btn-iconed bg-primary text-white font-bold font-label-sm rounded-full px-6 py-2.5 active:scale-95 shadow-md hover:bg-primary-container';
?>
<!-- Top Utility Bar -->
<div class="w-full bg-primary py-2 px-md">
<div class="max-w-container-max mx-auto flex justify-between items-center">
<div class="flex items-center gap-xs text-white font-label-sm">
<span class="material-symbols-outlined text-[18px]" data-original-icon="location_on">location_on</span>
            Current Location: Austin, TX
        </div>
<div class="hidden md:flex gap-md text-white font-label-xs opacity-90">
<span>Support Health Care</span>
<span>Support local businesses</span>
</div>
</div>
</div>
<!-- Header -->
<header class="sticky top-0 z-50 bg-surface/70 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm supports-[backdrop-filter]:bg-surface/60">
<div class="flex justify-between items-center w-full px-md py-sm max-w-container-max mx-auto h-20">
<a class="navbar-brand flex flex-col items-center text-center" href="<?php echo $sitepath; ?>" style="font-family: &quot;Plus Jakarta Sans&quot;, sans-serif;" title="Back to Home"><span class="uppercase font-bold text-[24px] leading-none text-[#32325d] tracking-tight">Let's see the menu</span><span class="block text-[16px] capitalize font-normal tracking-[1.5px] text-[#32325d]" style="font-family: Arial, sans-serif;">Taste What's Out there!</span></a>
<nav class="hidden md:flex items-center gap-4">
<a class="<?php echo $page === 'single-restaurant' ? $nav_active : $nav_pill; ?>" href="single-restaurant" title="Try a Demo">
<span class="material-symbols-outlined">restaurant</span>
<span class="spn">Try a Demo</span>
</a>
<a class="<?php echo $page === 'available-states' ? $nav_active : $nav_pill; ?>" href="available-states" title="Search by State">
<span class="material-symbols-outlined">location_on</span>
<span class="spn">Search by State</span>
</a>
<a class="<?php echo $page === 'blog' ? $nav_active : $nav_pill; ?>" href="blog" title="Blog">
<span class="material-symbols-outlined">edit</span>
<span class="spn">Blog</span>
</a>
<a class="<?php echo $nav_login; ?>" href="login" title="Login">
<span class="material-symbols-outlined">login</span>
<span class="spn">Login</span>
</a>
</nav>
<button class="md:hidden p-2 text-on-surface" type="button" aria-label="Open menu">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
