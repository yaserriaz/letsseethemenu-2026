<?php
/**
 * Affiliate dashboard sidebar — includes earnings / promote tools.
 */
require_once __DIR__ . '/sidebar-helpers.php';
$base = rtrim($sitepath, '/') . '/dashboard/affiliate/';
$openEvents = in_array($dash_page ?? '', ['events', 'sponsors'], true);
$openRestaurants = ($dash_page ?? '') === 'restaurants';
$openGifts = ($dash_page ?? '') === 'gift-cards';
$openAffiliates = ($dash_page ?? '') === 'affiliates';
?>
<nav class="py-2" aria-label="Affiliate dashboard">
<ul class="list-none m-0 p-0">
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base, ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'index'); ?>">
    <span class="material-symbols-outlined text-[20px]">dashboard</span><span>Affiliates Dashboard</span>
  </a>
</li>
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base . 'profile', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'profile'); ?>">
    <span class="material-symbols-outlined text-[20px]">edit</span><span>Edit Profile</span>
  </a>
</li>
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base . 'password', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'password'); ?>">
    <span class="material-symbols-outlined text-[20px]">lock</span><span>Change Password</span>
  </a>
</li>
<li class="dash-divider border-b">
  <button type="button" class="w-full flex items-center gap-3 px-4 py-3 text-sm text-left text-white" data-dash-accordion aria-expanded="<?php echo $openRestaurants ? 'true' : 'false'; ?>" aria-controls="aff-sub-restaurants">
    <span class="material-symbols-outlined text-[20px]">storefront</span>
    <span class="flex-1">Restaurants/Venues</span>
    <span class="material-symbols-outlined text-[18px]" data-caret><?php echo $openRestaurants ? 'expand_less' : 'expand_more'; ?></span>
  </button>
  <div id="aff-sub-restaurants" class="dash-sub <?php echo $openRestaurants ? '' : 'hidden'; ?>">
    <a href="<?php echo htmlspecialchars($base . 'restaurants', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'restaurants'); ?> pl-12">Manage Restaurants</a>
  </div>
</li>
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base . 'banners', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'banners'); ?>">
    <span class="material-symbols-outlined text-[20px]">image</span><span>My Banners</span>
  </a>
</li>
<li class="dash-divider border-b">
  <button type="button" class="w-full flex items-center gap-3 px-4 py-3 text-sm text-left text-white" data-dash-accordion aria-expanded="<?php echo $openGifts ? 'true' : 'false'; ?>" aria-controls="aff-sub-gifts">
    <span class="material-symbols-outlined text-[20px]">card_giftcard</span>
    <span class="flex-1">Gift Cards</span>
    <span class="material-symbols-outlined text-[18px]" data-caret><?php echo $openGifts ? 'expand_less' : 'expand_more'; ?></span>
  </button>
  <div id="aff-sub-gifts" class="dash-sub <?php echo $openGifts ? '' : 'hidden'; ?>">
    <a href="<?php echo htmlspecialchars($base . 'gift-cards', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'gift-cards'); ?> pl-12">Manage Gift Cards</a>
  </div>
</li>
<li class="dash-divider border-b">
  <button type="button" class="w-full flex items-center gap-3 px-4 py-3 text-sm text-left text-white" data-dash-accordion aria-expanded="<?php echo $openEvents ? 'true' : 'false'; ?>" aria-controls="aff-sub-events">
    <span class="material-symbols-outlined text-[20px]">event</span>
    <span class="flex-1">Events</span>
    <span class="material-symbols-outlined text-[18px]" data-caret><?php echo $openEvents ? 'expand_less' : 'expand_more'; ?></span>
  </button>
  <div id="aff-sub-events" class="dash-sub <?php echo $openEvents ? '' : 'hidden'; ?>">
    <a href="<?php echo htmlspecialchars($base . 'events', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'events'); ?> pl-12">Manage Events</a>
    <a href="<?php echo htmlspecialchars($base . 'sponsors', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'sponsors'); ?> pl-12">Manage Sponsors</a>
  </div>
</li>
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base . 'orders', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'orders'); ?>">
    <span class="material-symbols-outlined text-[20px]">receipt_long</span><span>My Orders</span>
  </a>
</li>
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base . 'favourites', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'favourites'); ?>">
    <span class="material-symbols-outlined text-[20px]">favorite</span><span>My Favourites</span>
  </a>
</li>
<li class="dash-divider border-b">
  <button type="button" class="w-full flex items-center gap-3 px-4 py-3 text-sm text-left text-white" data-dash-accordion aria-expanded="<?php echo $openAffiliates ? 'true' : 'false'; ?>" aria-controls="aff-sub-affiliates">
    <span class="material-symbols-outlined text-[20px]">group</span>
    <span class="flex-1">Affiliates Details</span>
    <span class="material-symbols-outlined text-[18px]" data-caret><?php echo $openAffiliates ? 'expand_less' : 'expand_more'; ?></span>
  </button>
  <div id="aff-sub-affiliates" class="dash-sub <?php echo $openAffiliates ? '' : 'hidden'; ?>">
    <a href="<?php echo htmlspecialchars($base . 'affiliates', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'affiliates'); ?> pl-12">Sales &amp; payouts</a>
  </div>
</li>
<li class="dash-divider border-b">
  <a href="<?php echo htmlspecialchars($base . 'promote', ENT_QUOTES, 'UTF-8'); ?>" class="<?php echo dash_link_class(($dash_page ?? '') === 'promote'); ?>">
    <span class="material-symbols-outlined text-[20px]">campaign</span><span>Promote To Earn</span>
  </a>
</li>
</ul>
</nav>
