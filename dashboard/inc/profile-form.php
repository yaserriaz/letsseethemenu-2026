<?php
/**
 * Shared Edit Profile form for customer + vendor dashboards.
 * Expects: $sitepath, $dash_user ('customer'|'vendor')
 * Optional overrides: $profile (assoc), $profile_action
 */
$profile = $profile ?? [];
$profile_defaults = [
    'name' => in_array($dash_user, ['vendor', 'affiliate'], true) ? 'Mair Ahmed' : 'Manery deleon',
    'email' => in_array($dash_user, ['vendor', 'affiliate'], true) ? 'mairahmed007@gmail.com' : 'manerydeleon@gmail.com',
    'phone' => in_array($dash_user, ['vendor', 'affiliate'], true) ? '(860) 961-9057' : '(860) 861-7347',
    'address' => in_array($dash_user, ['vendor', 'affiliate'], true)
        ? '100 Main Street, Norwich, Connecticut, 06360'
        : '25 Albert Street, Norwich, Connecticut, 06360',
    'zipcode' => '06360',
    'city' => 'Norwich',
    'state' => 'Connecticut',
    'country' => 'United States',
    'user_type' => $dash_user === 'affiliate' ? 'affiliate' : ($dash_user === 'vendor' ? 'vendor' : 'customer'),
];
$profile = array_merge($profile_defaults, $profile);
$profile_action = $profile_action ?? '';
$active_type = $profile['user_type'];

$user_types = [
    ['customer', 'person', 'Customer'],
    ['vendor', 'storefront', 'Seller / Vendor'],
    ['affiliate', 'handshake', 'Affiliates'],
];
?>
<div class="max-w-3xl mx-auto">
  <div class="mb-6 md:mb-8">
    <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Account</p>
    <h1 class="font-headline-lg text-[28px] md:text-[32px] text-on-background leading-tight">Edit Profile</h1>
    <p class="mt-2 text-on-surface-variant text-sm md:text-base">
      Keep your contact details current so orders, payouts, and local recommendations stay accurate.
    </p>
  </div>

  <form method="post" action="<?php echo htmlspecialchars($profile_action, ENT_QUOTES, 'UTF-8'); ?>"
        class="rounded-3xl bg-white border border-outline-variant/30 shadow-sm overflow-hidden"
        novalidate data-allow-submit="1" id="dash-profile-form">

    <div class="px-5 py-5 md:px-7 md:py-6 border-b border-outline-variant/25 bg-[#f8fafc]">
      <p class="text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-3">Account type</p>
      <input type="hidden" name="user_type" id="profile-user-type" value="<?php echo htmlspecialchars($active_type, ENT_QUOTES, 'UTF-8'); ?>">
      <div class="flex flex-wrap gap-2" role="radiogroup" aria-label="Account type">
        <?php foreach ($user_types as [$key, $icon, $label]):
            $is_active = $active_type === $key;
        ?>
        <button type="button"
                data-profile-type="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>"
                aria-pressed="<?php echo $is_active ? 'true' : 'false'; ?>"
                class="profile-type-btn inline-flex items-center gap-2 rounded-full px-4 py-2.5 text-sm font-semibold border transition-all
                       <?php echo $is_active
                           ? 'bg-primary text-white border-primary shadow-sm shadow-primary/25'
                           : 'bg-white text-on-surface-variant border-outline-variant hover:border-primary/40 hover:text-primary'; ?>">
          <span class="material-symbols-outlined text-[18px]"><?php echo htmlspecialchars($icon, ENT_QUOTES, 'UTF-8'); ?></span>
          <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>
        </button>
        <?php endforeach; ?>
      </div>
      <p class="mt-3 text-xs text-on-surface-variant">
        Switching type updates how your account is treated on the platform. Sidebar tools follow your primary role.
      </p>
    </div>

    <div class="px-5 py-6 md:px-7 md:py-8 space-y-5">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-name">Name</label>
          <input id="profile-name" name="name" type="text" required
                 value="<?php echo htmlspecialchars($profile['name'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow">
        </div>
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-email">Email</label>
          <input id="profile-email" name="email" type="email" required
                 value="<?php echo htmlspecialchars($profile['email'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow">
        </div>
      </div>

      <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-phone">Phone number</label>
        <input id="profile-phone" name="phone" type="tel"
               value="<?php echo htmlspecialchars($profile['phone'], ENT_QUOTES, 'UTF-8'); ?>"
               class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow"
               placeholder="(860) 000-0000">
      </div>

      <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-address">Address</label>
        <input id="profile-address" name="address" type="text" autocomplete="street-address"
               value="<?php echo htmlspecialchars($profile['address'], ENT_QUOTES, 'UTF-8'); ?>"
               class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow"
               placeholder="Start typing your U.S. street address">
        <p class="mt-2 text-xs text-on-surface-variant leading-relaxed">
          U.S. addresses only. Powered by OpenStreetMap — pick a result or type your full street address.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-zipcode">Zipcode</label>
          <input id="profile-zipcode" name="zipcode" type="text" inputmode="numeric"
                 value="<?php echo htmlspecialchars($profile['zipcode'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow">
        </div>
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-city">City</label>
          <input id="profile-city" name="city" type="text"
                 value="<?php echo htmlspecialchars($profile['city'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow">
        </div>
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-state">State</label>
          <input id="profile-state" name="state" type="text"
                 value="<?php echo htmlspecialchars($profile['state'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow">
        </div>
        <div>
          <label class="block text-xs font-bold uppercase tracking-wider text-on-surface-variant mb-2" for="profile-country">Country</label>
          <input id="profile-country" name="country" type="text"
                 value="<?php echo htmlspecialchars($profile['country'], ENT_QUOTES, 'UTF-8'); ?>"
                 class="w-full rounded-xl border border-outline-variant/50 bg-[#fafbfd] px-4 py-3 text-on-background outline-none focus:border-primary focus:ring-2 focus:ring-primary/15 transition-shadow">
        </div>
      </div>
    </div>

    <div class="px-5 py-5 md:px-7 md:py-6 border-t border-outline-variant/25 bg-[#f8fafc] flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
      <p class="text-xs text-on-surface-variant">Changes save to your account immediately after update.</p>
      <button type="submit"
              class="inline-flex items-center justify-center gap-2 rounded-full bg-primary text-white font-bold px-7 py-3 shadow-md shadow-primary/20 hover:bg-primary-container transition-colors">
        <span class="material-symbols-outlined text-[20px]">save</span>
        Update My Profile
      </button>
    </div>
  </form>
</div>
<script>
(function () {
  var hidden = document.getElementById('profile-user-type');
  var buttons = document.querySelectorAll('.profile-type-btn');
  if (!hidden || !buttons.length) return;
  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var type = btn.getAttribute('data-profile-type');
      hidden.value = type;
      buttons.forEach(function (b) {
        var on = b === btn;
        b.setAttribute('aria-pressed', on ? 'true' : 'false');
        b.classList.toggle('bg-primary', on);
        b.classList.toggle('text-white', on);
        b.classList.toggle('border-primary', on);
        b.classList.toggle('shadow-sm', on);
        b.classList.toggle('shadow-primary/25', on);
        b.classList.toggle('bg-white', !on);
        b.classList.toggle('text-on-surface-variant', !on);
        b.classList.toggle('border-outline-variant', !on);
      });
    });
  });
})();
</script>
