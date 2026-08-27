<?php
$page       = 'signup';
$page_title = "Create an Account — Let's See The Menu";
$ref        = isset($_GET['ref']) ? (int) $_GET['ref'] : 0;
include __DIR__ . '/inc/page-start.php';

$business_types = [
    'Restaurant', 'Bar', 'Cafe', 'Food Truck', 'Caterer',
    'Retail Shop', 'Seafood Vendor', 'Fishing Boat', 'Local Farm',
    'Farmers Market', 'Bakery', 'Specialty Food', 'Other',
];

$us_states = [
    'AL'=>'Alabama','AK'=>'Alaska','AZ'=>'Arizona','AR'=>'Arkansas','CA'=>'California',
    'CO'=>'Colorado','CT'=>'Connecticut','DE'=>'Delaware','FL'=>'Florida','GA'=>'Georgia',
    'HI'=>'Hawaii','ID'=>'Idaho','IL'=>'Illinois','IN'=>'Indiana','IA'=>'Iowa',
    'KS'=>'Kansas','KY'=>'Kentucky','LA'=>'Louisiana','ME'=>'Maine','MD'=>'Maryland',
    'MA'=>'Massachusetts','MI'=>'Michigan','MN'=>'Minnesota','MS'=>'Mississippi','MO'=>'Missouri',
    'MT'=>'Montana','NE'=>'Nebraska','NV'=>'Nevada','NH'=>'New Hampshire','NJ'=>'New Jersey',
    'NM'=>'New Mexico','NY'=>'New York','NC'=>'North Carolina','ND'=>'North Dakota','OH'=>'Ohio',
    'OK'=>'Oklahoma','OR'=>'Oregon','PA'=>'Pennsylvania','RI'=>'Rhode Island','SC'=>'South Carolina',
    'SD'=>'South Dakota','TN'=>'Tennessee','TX'=>'Texas','UT'=>'Utah','VT'=>'Vermont',
    'VA'=>'Virginia','WA'=>'Washington','WV'=>'West Virginia','WI'=>'Wisconsin','WY'=>'Wyoming',
];
?>

<main class="flex-grow w-full px-4 pt-8 pb-28 md:pb-10">
  <div class="max-w-[1140px] mx-auto">

    <!-- Page heading -->
    <div class="text-center mb-6">
      <p class="font-label-sm text-label-sm text-primary uppercase tracking-wider mb-1">Get Started</p>
      <h1 class="font-headline-lg text-headline-lg text-on-background">Create a New Account</h1>
      <p class="font-body-md text-on-surface-variant mt-1">Choose your account type to get started.</p>
    </div>

    <!-- User-type tabs -->
    <div class="flex justify-center gap-sm mb-6 flex-wrap" role="tablist" aria-label="Account type">
      <?php
      $types = [
        ['customer',  'person',       'Customer',         'For food lovers'],
        ['vendor',    'storefront',   'Business / Vendor','Restaurants & more'],
        ['affiliate', 'handshake',    'Affiliates',       'Build your network'],
      ];
      foreach ($types as $i => [$key, $icon, $label, $sub]):
      ?>
      <button type="button" role="tab"
        data-tab="<?php echo $key; ?>"
        aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
        class="tab-btn flex flex-col items-center gap-xs px-xl py-md rounded-2xl border-2 transition-all duration-200 min-w-[130px]
               <?php echo $i === 0
                 ? 'border-primary bg-primary-container text-on-primary-container'
                 : 'border-outline-variant/40 bg-surface-container-lowest text-on-surface-variant hover:border-primary/40 hover:bg-surface-variant'; ?>">
        <span class="material-symbols-outlined text-2xl" style="font-variation-settings:'FILL' 1;"><?php echo $icon; ?></span>
        <span class="font-label-sm font-bold"><?php echo $label; ?></span>
        <span class="font-label-xs opacity-70"><?php echo $sub; ?></span>
      </button>
      <?php endforeach; ?>
    </div>

    <!-- Two-column layout: form + info -->
    <div class="grid lg:grid-cols-[1fr_280px] gap-5 items-start">

      <!-- ── Form card ─────────────────────────────────────────────── -->
      <div class="rounded-3xl border border-outline-variant/40 bg-surface-container-lowest p-6 md:p-8 shadow-sm">
        <form id="signup-form" action="#" method="post" onsubmit="return false;" class="grid grid-cols-1 sm:grid-cols-2 gap-md" novalidate>

          <?php if ($ref): ?>
          <input type="hidden" name="ref" value="<?php echo $ref; ?>">
          <?php endif; ?>
          <input type="hidden" name="user_type" id="hidden-user-type" value="customer">

          <!-- Business Type — vendor only -->
          <div id="field-biz-type" class="hidden col-span-full">
            <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="biz-type">Business Type</label>
            <select id="biz-type" name="business_type"
              class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md appearance-none transition-colors">
              <option value="">Select business type</option>
              <?php foreach ($business_types as $bt): ?>
              <option value="<?php echo htmlspecialchars($bt, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($bt, ENT_QUOTES, 'UTF-8'); ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <!-- Name -->
          <div>
            <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-name">Name</label>
            <input id="su-name" type="text" name="name" placeholder="Your full name" autocomplete="name"
              class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors" required>
          </div>

          <!-- Email -->
          <div>
            <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-email">Email</label>
            <input id="su-email" type="email" name="email" placeholder="you@example.com" autocomplete="email"
              class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors" required>
          </div>

          <!-- Phone -->
          <div>
            <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-phone">Phone</label>
            <input id="su-phone" type="tel" name="phone" placeholder="+1 (555) 000-0000" autocomplete="tel"
              class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors">
          </div>

          <!-- Location fields — all user types -->
          <div id="fields-location" class="contents">
            <!-- Country -->
            <div>
              <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-country">Country</label>
              <select id="su-country" name="country"
                class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md appearance-none transition-colors">
                <option value="US" selected>United States</option>
              </select>
            </div>

            <!-- State -->
            <div>
              <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-state">State</label>
              <select id="su-state" name="state"
                class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md appearance-none transition-colors">
                <option value="">Select a State</option>
                <?php foreach ($us_states as $abbr => $name): ?>
                <option value="<?php echo $abbr; ?>"><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <!-- City -->
            <div>
              <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-city">City</label>
              <input id="su-city" type="text" name="city" placeholder="Your city"
                class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors">
            </div>

            <!-- Zipcode -->
            <div>
              <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-zip">Zipcode</label>
              <input id="su-zip" type="text" name="zipcode" placeholder="e.g. 06340" maxlength="10"
                class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors">
            </div>
          </div>

          <!-- Password -->
          <div>
            <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-pw">Password</label>
            <div class="relative">
              <input id="su-pw" type="password" name="password" placeholder="Min 8 characters" autocomplete="new-password"
                class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 pr-9 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors" required>
              <button type="button" tabindex="-1" data-pw-toggle="su-pw"
                class="absolute right-0 bottom-3 text-on-surface-variant hover:text-primary transition-colors" aria-label="Toggle password">
                <span class="material-symbols-outlined text-[20px] select-none">visibility</span>
              </button>
            </div>
            <!-- Strength bar -->
            <div class="mt-xs flex gap-1 h-1">
              <div class="pw-bar flex-1 rounded-full bg-outline-variant/30 transition-colors duration-300"></div>
              <div class="pw-bar flex-1 rounded-full bg-outline-variant/30 transition-colors duration-300"></div>
              <div class="pw-bar flex-1 rounded-full bg-outline-variant/30 transition-colors duration-300"></div>
              <div class="pw-bar flex-1 rounded-full bg-outline-variant/30 transition-colors duration-300"></div>
            </div>
            <p class="pw-hint font-label-xs text-on-surface-variant mt-1 h-4 transition-all"></p>
          </div>

          <!-- Confirm Password -->
          <div>
            <label class="block font-label-sm text-label-sm text-on-surface-variant mb-xs" for="su-pw2">Confirm Password</label>
            <div class="relative">
              <input id="su-pw2" type="password" name="password_confirm" placeholder="Re-enter password" autocomplete="new-password" data-match="su-pw"
                class="w-full bg-transparent border-0 border-b border-outline-variant px-0 py-3 pr-9 focus:ring-0 focus:border-primary outline-none font-body-md transition-colors" required>
              <button type="button" tabindex="-1" data-pw-toggle="su-pw2"
                class="absolute right-0 bottom-3 text-on-surface-variant hover:text-primary transition-colors" aria-label="Toggle confirm password">
                <span class="material-symbols-outlined text-[20px] select-none">visibility</span>
              </button>
            </div>
          </div>

          <!-- Submit -->
          <button type="submit"
            class="btn-iconed bg-primary text-white font-bold rounded-full px-6 py-3 mt-sm w-full justify-center hover:bg-primary/90 active:scale-95 transition-all col-span-full">
            <span class="material-symbols-outlined">person_add</span>
            <span class="spn">Submit</span>
          </button>

        </form>

        <p class="font-label-sm text-on-surface-variant text-center mt-lg">
          Already a member?
          <a href="login.php<?php echo $ref ? '?ref=' . $ref : ''; ?>" class="text-primary font-bold hover:underline">Login</a>
        </p>
      </div>

      <!-- ── Info sidebar ───────────────────────────────────────────── -->
      <div class="sticky top-24 space-y-md">

        <!-- Customer panel — soft blue -->
        <div data-panel="customer"
          class="info-panel rounded-3xl border border-blue-100 bg-blue-50 p-6 shadow-sm transition-all duration-300">
          <div class="flex items-center gap-3 mb-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary text-white">
              <span class="material-symbols-outlined text-lg" style="font-variation-settings:'FILL' 1;">person</span>
            </span>
            <h2 class="font-bold text-base text-on-background">Hello Customer</h2>
          </div>
          <p class="text-sm text-on-surface-variant leading-relaxed mb-5">
            Create a customer account and order food online from participating restaurants. Discover nearby menus, save your favourites, vote on dishes, and join a community built around local food.
          </p>
          <a href="login.php<?php echo $ref ? '?ref='.$ref : ''; ?>"
            class="block text-center border border-outline-variant text-on-surface font-bold rounded-full px-5 py-2 text-sm w-full hover:border-primary hover:text-primary transition-colors bg-white">
            Already a member? Login
          </a>
        </div>

        <!-- Vendor panel — soft green -->
        <div data-panel="vendor"
          class="info-panel hidden rounded-3xl border border-emerald-100 bg-emerald-50 p-6 shadow-sm transition-all duration-300">
          <div class="flex items-center gap-3 mb-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-emerald-600 text-white">
              <span class="material-symbols-outlined text-lg" style="font-variation-settings:'FILL' 1;">storefront</span>
            </span>
            <h2 class="font-bold text-base text-on-background">Hello Vendor</h2>
          </div>
          <p class="text-sm text-on-surface-variant leading-relaxed mb-5">
            Becoming a vendor gives you access to simple online marketing tools for your establishment — online ordering, geo-located banner advertising, menu management, and direct customer engagement.
          </p>
          <a href="login.php<?php echo $ref ? '?ref='.$ref : ''; ?>"
            class="block text-center border border-outline-variant text-on-surface font-bold rounded-full px-5 py-2 text-sm w-full hover:border-emerald-600 hover:text-emerald-600 transition-colors bg-white">
            Already a member? Login
          </a>
        </div>

        <!-- Affiliate panel — soft violet -->
        <div data-panel="affiliate"
          class="info-panel hidden rounded-3xl border border-violet-100 bg-violet-50 p-6 shadow-sm transition-all duration-300">
          <div class="flex items-center gap-3 mb-4">
            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-600 text-white">
              <span class="material-symbols-outlined text-lg" style="font-variation-settings:'FILL' 1;">handshake</span>
            </span>
            <h2 class="font-bold text-base text-on-background">Hello Affiliates</h2>
          </div>
          <p class="text-sm text-on-surface-variant leading-relaxed mb-5">
            Join us in building your own piece of Let's See The Menu in your area. List and market local restaurants, build networks, create great income, and participate in community health initiatives.
          </p>
          <a href="login.php<?php echo $ref ? '?ref='.$ref : ''; ?>"
            class="block text-center border border-outline-variant text-on-surface font-bold rounded-full px-5 py-2 text-sm w-full hover:border-violet-600 hover:text-violet-600 transition-colors bg-white">
            Already a member? Login
          </a>
        </div>

      </div>
    </div><!-- /grid -->
  </div>
</main>

<script>
(function () {
  /* ── Tab switching ─────────────────────────────────────────────── */
  var tabBtns      = Array.from(document.querySelectorAll('.tab-btn'));
  var panels       = Array.from(document.querySelectorAll('.info-panel'));
  var hiddenType   = document.getElementById('hidden-user-type');
  var fieldBizType = document.getElementById('field-biz-type');

  function switchTab(key) {
    tabBtns.forEach(function (btn) {
      var active = btn.dataset.tab === key;
      btn.setAttribute('aria-selected', active);
      btn.classList.toggle('border-primary',           active);
      btn.classList.toggle('bg-primary-container',     active);
      btn.classList.toggle('text-on-primary-container',active);
      btn.classList.toggle('border-outline-variant/40',!active);
      btn.classList.toggle('bg-surface-container-lowest', !active);
      btn.classList.toggle('text-on-surface-variant',  !active);
    });
    panels.forEach(function (p) {
      var show = p.dataset.panel === key;
      p.classList.toggle('hidden', !show);
    });
    hiddenType.value = key;
    /* Show/hide business type field — vendor only */
    fieldBizType.classList.toggle('hidden', key !== 'vendor');
    /* Clear any validation state left from a previous submit attempt */
    var form = document.getElementById('signup-form');
    if (form) {
      form.querySelectorAll('input, textarea, select').forEach(function (el) {
        el.style.borderBottomColor = '';
      });
      form.querySelectorAll('.fv-msg, .fv-ok').forEach(function (el) { el.remove(); });
    }
  }

  tabBtns.forEach(function (btn) {
    btn.addEventListener('click', function () { switchTab(this.dataset.tab); });
  });
  switchTab('customer'); /* init */

  /* ── Password toggles ──────────────────────────────────────────── */
  document.querySelectorAll('[data-pw-toggle]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var input = document.getElementById(this.dataset.pwToggle);
      if (!input) return;
      var isHidden = input.type === 'password';
      input.type = isHidden ? 'text' : 'password';
      this.querySelector('.material-symbols-outlined').textContent =
        isHidden ? 'visibility_off' : 'visibility';
    });
  });

  /* ── Password strength meter ───────────────────────────────────── */
  var pwInput = document.getElementById('su-pw');
  var bars    = Array.from(document.querySelectorAll('.pw-bar'));
  var hint    = document.querySelector('.pw-hint');
  var colours = ['bg-red-400', 'bg-orange-400', 'bg-green-400', 'bg-green-600'];
  var hints   = ['Too short', 'Weak', 'Good', 'Strong'];

  function scorePassword(pw) {
    if (pw.length < 4) return 0;
    var score = 0;
    if (pw.length >= 8)  score++;
    if (/[A-Z]/.test(pw)) score++;
    if (/[0-9]/.test(pw)) score++;
    if (/[^A-Za-z0-9]/.test(pw)) score++;
    return score;
  }

  pwInput && pwInput.addEventListener('input', function () {
    var score = scorePassword(this.value);
    bars.forEach(function (b, i) {
      b.className = 'pw-bar flex-1 rounded-full transition-colors duration-300 ' +
        (i < score ? colours[score - 1] : 'bg-outline-variant/30');
    });
    hint.textContent = this.value.length ? hints[score - 1] || '' : '';
  });

  /* ── Confirm password match indicator ─────────────────────────── */
  var pw2 = document.getElementById('su-pw2');
  pw2 && pw2.addEventListener('input', function () {
    var match = pwInput && this.value === pwInput.value;
    this.classList.toggle('border-primary', match && this.value.length > 0);
    this.classList.toggle('border-error',   !match && this.value.length > 0);
  });
})();
</script>

<?php include __DIR__ . '/inc/page-end.php'; ?>
