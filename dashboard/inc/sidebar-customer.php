<?php
/**
 * Customer dashboard sidebar.
 * Expects $dash_page and $sitepath.
 */
$base = rtrim($sitepath, '/') . '/dashboard/customer/';
$items = [
    ['index', 'dashboard', 'Dashboard Customer', $base],
    ['profile', 'edit', 'Edit Profile', $base . 'profile'],
    ['password', 'lock', 'Change Password', $base . 'password'],
    ['orders', 'list_alt', 'My Orders', $base . 'orders'],
    ['gift-cards', 'card_giftcard', 'My Gift Cards', $base . 'gift-cards'],
    ['favourites', 'favorite', 'My Favourites', $base . 'favourites'],
];
?>
<nav class="py-2" aria-label="Customer dashboard">
<ul class="list-none m-0 p-0">
<?php foreach ($items as $item):
    [$id, $icon, $label, $href] = $item;
    $active = ($dash_page ?? '') === $id;
?>
<li class="dash-divider border-b">
<a href="<?php echo htmlspecialchars($href, ENT_QUOTES, 'UTF-8'); ?>"
   class="flex items-center gap-3 px-4 py-3 text-sm <?php echo $active ? 'dash-active font-bold' : ''; ?>">
  <span class="material-symbols-outlined text-[20px]"><?php echo htmlspecialchars($icon, ENT_QUOTES, 'UTF-8'); ?></span>
  <span><?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?></span>
</a>
</li>
<?php endforeach; ?>
</ul>
</nav>
