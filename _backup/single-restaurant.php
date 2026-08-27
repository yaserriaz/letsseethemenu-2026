<?php
$page = 'single-restaurant';
$page_title = 'Demo Restaurant - Lively Gastronomy';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/inc/head.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
<style>
body { background-color: #fdfbf7; }
.glass-container {
  background: rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(16px) saturate(100%);
  -webkit-backdrop-filter: blur(16px) saturate(100%);
  border: 1px solid rgba(255, 255, 255, 0.3);
  border-radius: 24px;
  box-shadow: 0px 10px 25px -5px rgba(0, 0, 0, 0.2);
}
.sec-nav.is-active {
  background-color: #004496;
  border-color: #004496;
  color: #fff;
  font-weight: 700;
}
.sec-nav.is-active > .material-symbols-outlined,
.sec-nav.is-active > .spn {
  color: #fff;
}
</style>
</head>
<body class="font-body-md text-on-background antialiased selection:bg-primary-container selection:text-on-primary-container">
<!-- Top Utility Bar -->
<div class="w-full bg-primary py-2 px-md">
<div class="max-w-container-max mx-auto flex justify-between items-center">
<div class="flex items-center gap-xs text-white font-label-sm">
<span class="material-symbols-outlined text-[18px]">location_on</span>
            Current Location: Groton, CT
        </div>
<div class="hidden md:flex gap-md text-white font-label-xs opacity-90">
<span>Support Health Care</span>
<span>Support local businesses</span>
</div>
</div>
</div>
<!-- Restaurant-specific Header -->
<header class="sticky top-0 z-50 bg-surface/70 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm transition-all supports-[backdrop-filter]:bg-surface/60">
<div class="flex justify-between items-center w-full px-md py-sm max-w-container-max mx-auto h-20">
<a class="navbar-brand flex flex-col items-center text-center" href="<?php echo $sitepath; ?>" style="font-family: &quot;Plus Jakarta Sans&quot;, sans-serif;" title="Back to Home"><span class="uppercase font-bold text-[24px] leading-none text-[#32325d] tracking-tight">Let's see the menu</span><span class="block text-[16px] capitalize font-normal tracking-[1.5px] text-[#32325d]" style="font-family: Arial, sans-serif;">Taste What's Out there!</span></a>
<nav class="hidden md:flex items-center gap-2" id="section-nav">
<a class="sec-nav btn-iconed btn-iconed-outline text-on-surface-variant font-medium font-label-sm border border-outline-variant py-2 px-4 rounded-full" href="#printed-menu">
<span class="material-symbols-outlined">menu_book</span>
<span class="spn">Printed Menu</span>
</a>
<a class="sec-nav btn-iconed btn-iconed-outline text-on-surface-variant font-medium font-label-sm border border-outline-variant py-2 px-4 rounded-full" href="#overview">
<span class="material-symbols-outlined">info</span>
<span class="spn">Overview</span>
</a>
<a class="sec-nav btn-iconed btn-iconed-outline text-on-surface-variant font-medium font-label-sm border border-outline-variant py-2 px-4 rounded-full" href="#gallery">
<span class="material-symbols-outlined">photo_library</span>
<span class="spn">Gallery</span>
</a>
<a class="sec-nav btn-iconed btn-iconed-outline text-on-surface-variant font-medium font-label-sm border border-outline-variant py-2 px-4 rounded-full" href="#location">
<span class="material-symbols-outlined">map</span>
<span class="spn">Location</span>
</a>
</nav>
<div class="flex items-center gap-sm">
<button class="btn-iconed bg-primary text-white font-bold font-label-sm text-label-sm rounded-full px-6 py-2.5 active:scale-95 shadow-md hover:bg-primary-container hidden sm:inline-flex" type="button">
<span class="material-symbols-outlined">login</span>
<span class="spn">Login</span>
</button>
</div>
<button class="md:hidden p-2 text-on-surface" type="button" aria-label="Open menu">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</header>
<main class="w-full">
<section class="w-full pb-xl">
<div class="relative w-full h-[300px] overflow-hidden bg-surface-container">
<div class="absolute inset-0 bg-cover bg-center" style="background-image: url('assets/img/restaurant-hero.jpg');"></div>
</div>
<div class="max-w-container-max mx-auto px-lg relative z-10 -mt-16 sm:-mt-20">
<div class="flex flex-col sm:flex-row items-end gap-md">
<div class="w-32 h-32 sm:w-40 sm:h-40 rounded-2xl bg-surface border-4 border-surface shadow-md overflow-hidden shrink-0 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-6xl">restaurant</span>
</div>
<div class="glass-container p-md flex-1 flex flex-col justify-center sm:mb-2 w-full">
<h1 class="font-headline-lg text-headline-lg text-on-background">Demo Restaurant</h1>
<div class="flex flex-col sm:flex-row gap-4 mt-2">
<div class="flex items-start gap-sm text-on-surface-variant">
<span class="material-symbols-outlined text-xl">location_on</span>
<p class="font-body-md text-body-md">123 street, Groton, CT</p>
</div>
<div class="flex items-center gap-sm text-on-surface-variant">
<span class="material-symbols-outlined text-xl">call</span>
<p class="font-body-md text-body-md">860-908-2282</p>
</div>
</div>
</div>
</div>
</div>
</section>
<div class="max-w-container-max mx-auto px-lg py-md">
<nav aria-label="Breadcrumb" class="flex text-on-surface-variant font-label-sm text-label-sm mb-lg">
<ol class="inline-flex items-center space-x-1 md:space-x-3">
<li class="inline-flex items-center">
<a class="inline-flex items-center hover:text-primary transition-colors" href="<?php echo $sitepath; ?>">Home</a>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<a class="hover:text-primary transition-colors ml-1 md:ml-2" href="available-states.php">States</a>
</div>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<a class="hover:text-primary transition-colors ml-1 md:ml-2" href="available-cities.php">Connecticut</a>
</div>
</li>
<li>
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<a class="hover:text-primary transition-colors ml-1 md:ml-2" href="locations.php">Groton</a>
</div>
</li>
<li aria-current="page">
<div class="flex items-center">
<span class="material-symbols-outlined text-sm mx-1">chevron_right</span>
<span class="text-on-background ml-1 md:ml-2 font-medium">Demo Restaurant</span>
</div>
</li>
</ol>
</nav>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-xl">
<div class="lg:col-span-2 flex flex-col gap-xl">
<section class="scroll-mt-xl" id="printed-menu">
<h2 class="font-headline-md text-headline-md mb-md text-on-background flex items-center gap-sm">
<span class="material-symbols-outlined text-primary">menu_book</span>
                        Printed Menu
                    </h2>
<a href="assets/img/printed-menu.jpg" data-fancybox="menu" data-caption="Printed Menu" class="block w-full rounded-lg overflow-hidden mb-md cursor-zoom-in">
<img class="w-full h-auto object-contain" alt="Printed Menu" src="assets/img/printed-menu.jpg" loading="lazy">
</a>
<div class="flex flex-wrap gap-sm">
<button class="bg-[#1877F2] text-white font-label-sm text-label-sm px-md py-sm rounded-full flex items-center gap-xs hover:opacity-90 transition-opacity" type="button">
<span class="material-symbols-outlined text-sm">share</span> Facebook
                            </button>
<button class="bg-black text-white font-label-sm text-label-sm px-md py-sm rounded-full flex items-center gap-xs hover:opacity-90 transition-opacity" type="button">
<span class="material-symbols-outlined text-sm">close</span> X
                            </button>
<button class="bg-[#E60023] text-white font-label-sm text-label-sm px-md py-sm rounded-full flex items-center gap-xs hover:opacity-90 transition-opacity" type="button">
<span class="material-symbols-outlined text-sm">push_pin</span> Pinterest
                            </button>
<button class="bg-primary text-on-primary font-label-sm text-label-sm px-md py-sm rounded-full flex items-center gap-xs hover:bg-on-primary-fixed-variant transition-colors shadow-sm" type="button">
<span class="material-symbols-outlined text-sm">ios_share</span> Share
                            </button>
</div>
</section>
<section class="scroll-mt-xl" id="overview">
<h2 class="font-headline-md text-headline-md mb-md text-on-background flex items-center gap-sm">
<span class="material-symbols-outlined text-primary">info</span>
                        About Us
                    </h2>
<p class="font-body-md text-body-lg text-on-surface-variant leading-relaxed">
                            Welcome to our Demo Restaurant, a virtual showcase of our portal's exceptional features designed to elevate the living standards of you and your employees. Experience a curated approach to dining discovery, emphasizing quality, ambiance, and community connection.
                        </p>
</section>
<section class="scroll-mt-xl" id="gallery">
<h2 class="font-headline-md text-headline-md mb-md text-on-background flex items-center gap-sm">
<span class="material-symbols-outlined text-primary">photo_library</span>
                        Gallery
                    </h2>
<div class="grid grid-cols-2 md:grid-cols-3 gap-sm">
<a href="assets/img/gallery-salad.jpg" data-fancybox="gallery" data-caption="Salad" class="aspect-square rounded-lg overflow-hidden relative group block cursor-zoom-in">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Salad" src="assets/img/gallery-salad.jpg" loading="lazy">
</a>
<a href="assets/img/mesa.jpg" data-fancybox="gallery" data-caption="Tacos" class="aspect-square rounded-lg overflow-hidden relative group block cursor-zoom-in">
<img alt="Tacos" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="assets/img/mesa.jpg" loading="lazy">
</a>
<a href="assets/img/sakura.jpg" data-fancybox="gallery" data-caption="Sushi" class="aspect-square rounded-lg overflow-hidden relative group block cursor-zoom-in">
<img alt="Sushi" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="assets/img/sakura.jpg" loading="lazy">
</a>
<a href="assets/img/oak-smoke.jpg" data-fancybox="gallery" data-caption="Oak &amp; Smoke" class="aspect-square rounded-lg overflow-hidden relative group block cursor-zoom-in">
<img alt="Oak and Smoke" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="assets/img/oak-smoke.jpg" loading="lazy">
</a>
<a href="assets/img/petit-paris.jpg" data-fancybox="gallery" data-caption="Petit Paris" class="aspect-square rounded-lg overflow-hidden relative group block cursor-zoom-in">
<img alt="Petit Paris" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="assets/img/petit-paris.jpg" loading="lazy">
</a>
<a href="assets/img/veloce.jpg" data-fancybox="gallery" data-caption="Veloce" class="aspect-square rounded-lg overflow-hidden relative group block cursor-zoom-in">
<img alt="Veloce" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" src="assets/img/veloce.jpg" loading="lazy">
</a>
</div>
</section>
<section class="mt-md">
<div class="relative w-full h-[250px] rounded-xl overflow-hidden flex items-center justify-center p-lg group cursor-pointer">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" style="background-image: url('assets/img/foodie-game.jpg');"></div>
<div class="absolute inset-0 bg-on-background/70 group-hover:bg-on-background/60 transition-colors"></div>
<div class="relative z-10 text-center flex flex-col items-center gap-md">
<div class="bg-secondary text-on-secondary font-label-xs text-label-xs px-2 py-1 rounded uppercase tracking-wider">Demo</div>
<h2 class="font-headline-lg text-headline-lg text-white">Foodie Game Demo</h2>
<button class="btn-iconed bg-primary text-on-primary font-label-sm text-label-sm px-lg py-sm rounded-full shadow-sm hover:-translate-y-1 hover:shadow-md transition-all" type="button">
<span class="material-symbols-outlined">arrow_forward</span>
<span class="spn">Try a Demonstration</span>
</button>
</div>
</div>
</section>
<section class="scroll-mt-xl" id="location">
<h2 class="font-headline-md text-headline-md mb-md text-on-background flex items-center gap-sm">
<span class="material-symbols-outlined text-primary">map</span>
                        Location
                    </h2>
<div class="grid grid-cols-1 md:grid-cols-5 gap-lg items-stretch">
<div class="md:col-span-2 flex flex-col gap-md justify-center">
<p class="font-label-xs text-label-xs uppercase tracking-wider text-primary">Find us</p>
<h3 class="font-headline-md text-headline-md text-on-background leading-tight">Demo Restaurant</h3>
<div class="flex flex-col gap-sm mt-xs">
<a class="inline-flex items-center gap-sm text-on-surface-variant hover:text-primary transition-colors font-body-md" href="https://maps.google.com/?q=123+street,+Groton,+CT,+06340" target="_blank" rel="noopener">
<span class="material-symbols-outlined text-primary">location_on</span>
<span>123 street, Groton, CT, 06340</span>
</a>
<a class="inline-flex items-center gap-sm text-on-surface-variant hover:text-primary transition-colors font-body-md" href="tel:8609082282">
<span class="material-symbols-outlined text-primary">call</span>
<span>860-908-2282</span>
</a>
</div>
<a class="btn-iconed btn-iconed-outline mt-sm self-start text-primary font-bold font-label-sm border border-primary py-2 px-5 rounded-full" href="https://maps.google.com/?q=123+street,+Groton,+CT,+06340" target="_blank" rel="noopener">
<span class="material-symbols-outlined">directions</span>
<span class="spn">Get directions</span>
</a>
</div>
<div class="md:col-span-3 h-[280px] md:h-full min-h-[280px] rounded-2xl overflow-hidden relative bg-surface-container">
<iframe class="absolute inset-0 w-full h-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Demo Restaurant map" src="https://maps.google.com/maps?q=Demo+Restaurant%2C+123+street%2C+Groton%2C+CT%2C+06340&amp;output=embed"></iframe>
</div>
</div>
</section>
<section class="scroll-mt-xl mt-xl mb-xl" id="contact">
<h2 class="font-headline-md text-headline-md mb-xs text-on-background flex items-center gap-sm">
<span class="material-symbols-outlined text-primary">mail</span>
                        Contact Us
                    </h2>
<p class="font-body-md text-on-surface-variant mb-lg max-w-xl">Questions about the menu, hours, or a private event? Send a note and we'll get back soon.</p>
<form class="flex flex-col gap-md max-w-2xl" id="contact-form" novalidate onsubmit="return false;">
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="c-name">Your Name</label>
<input id="c-name" name="name" class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary font-body-md text-label-sm outline-none" placeholder="John Doe" type="text" required>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="c-email">Email</label>
<input id="c-email" name="email" class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary font-body-md text-label-sm outline-none" placeholder="john@example.com" type="email" required>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="c-phone">Phone</label>
<input id="c-phone" name="phone" class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary font-body-md text-label-sm outline-none" placeholder="(555) 555-5555" type="tel">
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="c-subject">Subject</label>
<input id="c-subject" name="subject" class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary font-body-md text-label-sm outline-none" placeholder="Inquiry subject" type="text" required>
</div>
</div>
<div>
<label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="c-message">Message</label>
<textarea id="c-message" name="message" class="w-full bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-3 focus:ring-0 focus:border-primary font-body-md text-label-sm outline-none resize-none" placeholder="How can we help?" rows="4" required></textarea>
</div>
<div class="flex flex-wrap items-center gap-md pt-sm">
<span class="font-bold tracking-widest text-primary select-none" style="font-family: monospace;">4367</span>
<input id="c-captcha" name="captcha" class="w-28 bg-transparent border-0 border-b border-outline-variant rounded-none px-0 py-2 focus:ring-0 focus:border-primary font-body-md text-label-sm outline-none" placeholder="Code" type="text" aria-label="Captcha code" required>
<button class="btn-iconed ml-auto bg-primary text-on-primary font-label-sm text-label-sm px-8 py-3 rounded-full hover:bg-on-primary-fixed-variant transition-colors shadow-sm" type="submit">
<span class="material-symbols-outlined">send</span>
<span class="spn">Submit</span>
</button>
</div>
</form>
</section>
</div>
<div class="lg:col-span-1 flex flex-col gap-xl">
<div class="bg-surface rounded-xl shadow-sm p-lg border border-surface-variant sticky top-24 z-10">
<h3 class="font-title-card text-title-card mb-md text-on-background border-b border-outline-variant pb-xs">Restaurant Info</h3>
<div class="flex flex-col gap-sm mb-lg">
<div class="flex items-start gap-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary">location_on</span>
<p class="font-body-md text-body-md">123 street, Groton, CT, USA, 06340</p>
</div>
<div class="flex items-center gap-sm text-on-surface-variant">
<span class="material-symbols-outlined text-primary">call</span>
<p class="font-body-md text-body-md">860-908-2282</p>
</div>
</div>
<h4 class="font-label-sm text-label-sm text-on-background mb-sm">Opening Hours</h4>
<ul class="flex flex-col gap-xs mb-lg font-body-md text-label-xs text-on-surface-variant">
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Monday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Tuesday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Wednesday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Thursday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Friday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Saturday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
<li class="flex justify-between items-center py-1 border-b border-surface-variant last:border-0"><span>Sunday</span><div class="flex items-center gap-sm"><span class="bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded-full text-[10px] font-bold uppercase">Open</span><span>10:00 am - 10:00 pm</span></div></li>
</ul>
<h4 class="font-label-sm text-label-sm text-on-background mb-sm">Tags</h4>
<div class="flex flex-wrap gap-xs">
<span class="bg-primary/10 text-primary-container font-label-xs text-label-xs px-3 py-1 rounded-full border border-primary/20">Pizza</span>
<span class="bg-primary/10 text-primary-container font-label-xs text-label-xs px-3 py-1 rounded-full border border-primary/20">Burgers</span>
<span class="bg-primary/10 text-primary-container font-label-xs text-label-xs px-3 py-1 rounded-full border border-primary/20">Vegetarian</span>
</div>
</div>
</div>
</div>
</div>
</main>
<?php include __DIR__ . '/inc/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script>
Fancybox.bind('[data-fancybox]');
(function () {
  var links = Array.prototype.slice.call(document.querySelectorAll('.sec-nav'));
  if (!links.length) return;
  function setActive(id) {
    links.forEach(function (a) {
      a.classList.toggle('is-active', a.getAttribute('href') === '#' + id);
    });
  }
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) setActive(e.target.id);
    });
  }, { rootMargin: '-35% 0px -55% 0px', threshold: 0 });
  links.forEach(function (a) {
    a.addEventListener('click', function (e) {
      e.preventDefault();
      var target = document.getElementById(this.getAttribute('href').slice(1));
      if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
    var el = document.getElementById(a.getAttribute('href').slice(1));
    if (el) io.observe(el);
  });
})();
</script>
</body>
</html>
