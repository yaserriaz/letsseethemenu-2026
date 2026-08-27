<?php
$page = 'contact';
$page_title = 'Contact Us - Let\'s See The Menu';
$page_eyebrow = 'Support';
$page_heading = 'How Can We Help?';
$page_lead = 'Please select a topic below related to your inquiry. If you don\'t find what you need, fill out our contact form.';
include __DIR__ . '/inc/page-start.php';
include __DIR__ . '/inc/page-hero.php';
?>
<main class="flex-grow w-full max-w-container-max mx-auto px-md py-xl pb-24 md:pb-xl">
<div class="grid grid-cols-1 lg:grid-cols-5 gap-xl">
<div class="lg:col-span-2 flex flex-col gap-lg">
<a href="single-restaurant.php" class="group block p-lg rounded-2xl border border-outline-variant/40 hover:border-primary transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">play_circle</span>
<h3 class="font-title-card text-title-card mb-xs group-hover:text-primary transition-colors">Book a Demo</h3>
<p class="font-body-md text-on-surface-variant">Request a demo from one of our conversion specialists.</p>
</a>
<a href="blog.php" class="group block p-lg rounded-2xl border border-outline-variant/40 hover:border-primary transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">lightbulb</span>
<h3 class="font-title-card text-title-card mb-xs group-hover:text-primary transition-colors">Get Inspired</h3>
<p class="font-body-md text-on-surface-variant">Discover the many ways local businesses use Let's See The Menu.</p>
</a>
<a href="affiliates.php" class="group block p-lg rounded-2xl border border-outline-variant/40 hover:border-primary transition-colors">
<span class="material-symbols-outlined text-primary text-3xl mb-sm">handshake</span>
<h3 class="font-title-card text-title-card mb-xs group-hover:text-primary transition-colors">Become a Partner</h3>
<p class="font-body-md text-on-surface-variant">Join our Partner Program and earn commissions.</p>
</a>
<div class="mt-md space-y-sm text-on-surface-variant font-body-md">
<p class="flex items-center gap-sm"><span class="material-symbols-outlined text-primary">call</span> <a class="hover:text-primary" href="tel:+18609619057">+1 (860) 961-9057</a></p>
<p class="flex items-center gap-sm"><span class="material-symbols-outlined text-primary">mail</span> <a class="hover:text-primary" href="mailto:info@letsseethemenu.com">info@letsseethemenu.com</a></p>
<p class="flex items-start gap-sm"><span class="material-symbols-outlined text-primary">location_on</span> Midway Oval, Groton, CT 06340, USA</p>
</div>
</div>
<div class="lg:col-span-3">
<form class="flex flex-col gap-md" action="#" method="post" onsubmit="return false;">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs">Your Name</label>
<input class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md" type="text" placeholder="John Doe" required>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs">Email</label>
<input class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md" type="email" placeholder="you@example.com" required>
</div>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs">Subject</label>
<input class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md" type="text" placeholder="How can we help?">
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs">Message</label>
<textarea class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md resize-none" rows="5" placeholder="Tell us more..."></textarea>
</div>
<button type="submit" class="btn-iconed self-start bg-primary text-white font-bold rounded-full px-8 py-3 mt-sm">
<span class="material-symbols-outlined">send</span>
<span class="spn">Send Message</span>
</button>
</form>
</div>
</div>
</main>
<?php include __DIR__ . '/inc/page-end.php'; ?>
