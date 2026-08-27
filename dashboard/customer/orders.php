<?php
require_once __DIR__ . '/../../inc/site-settings.php';

$dash_user = 'customer';
$dash_page = 'orders';
$dash_user_name = 'Manery deleon';
$dash_user_email = 'manerydeleon@gmail.com';
$page_title = 'My Orders - Customer Dashboard';

$orders = [
    [
        'id' => 'LSTM-10428',
        'restaurant' => 'Oak & Smoke',
        'city' => 'Austin, TX',
        'placed' => 'Aug 24, 2026 · 6:42 PM',
        'status' => 'preparing',
        'type' => 'Pickup',
        'items' => [
            ['name' => 'Brisket Plate', 'qty' => 1, 'price' => 18.50],
            ['name' => 'Sweet Tea', 'qty' => 2, 'price' => 3.00],
        ],
        'total' => 24.50,
        'image' => 'assets/img/oak-smoke.jpg',
    ],
    [
        'id' => 'LSTM-10391',
        'restaurant' => 'Sakura Soul',
        'city' => 'Austin, TX',
        'placed' => 'Aug 18, 2026 · 12:15 PM',
        'status' => 'completed',
        'type' => 'Delivery',
        'items' => [
            ['name' => 'Salmon Roll', 'qty' => 2, 'price' => 14.00],
            ['name' => 'Miso Soup', 'qty' => 1, 'price' => 4.50],
        ],
        'total' => 32.50,
        'image' => 'assets/img/sakura.jpg',
    ],
    [
        'id' => 'LSTM-10277',
        'restaurant' => 'Petit Paris',
        'city' => 'Austin, TX',
        'placed' => 'Aug 02, 2026 · 7:05 PM',
        'status' => 'cancelled',
        'type' => 'Pickup',
        'items' => [
            ['name' => 'Croque Monsieur', 'qty' => 1, 'price' => 16.00],
        ],
        'total' => 16.00,
        'image' => 'assets/img/petit-paris.jpg',
    ],
];

$status_meta = [
    'preparing' => ['label' => 'Preparing', 'class' => 'bg-amber-100 text-amber-900'],
    'completed' => ['label' => 'Completed', 'class' => 'bg-emerald-100 text-emerald-900'],
    'cancelled' => ['label' => 'Cancelled', 'class' => 'bg-rose-100 text-rose-900'],
    'out_for_delivery' => ['label' => 'Out for delivery', 'class' => 'bg-sky-100 text-sky-900'],
];

ob_start();
?>
<div class="max-w-4xl mx-auto">
  <div class="dash-rise mb-6 md:mb-8 flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
    <div>
      <p class="text-xs uppercase tracking-[0.16em] text-primary font-bold mb-2">Online ordering</p>
      <h1 class="font-headline-lg text-[28px] md:text-[32px] text-on-background leading-tight">My Orders</h1>
      <p class="mt-2 text-on-surface-variant text-sm md:text-base">Track pickup and delivery orders from local restaurants.</p>
    </div>
    <a href="<?php echo htmlspecialchars(rtrim($sitepath, '/') . '/available-states', ENT_QUOTES, 'UTF-8'); ?>"
       class="inline-flex items-center gap-1.5 rounded-full bg-primary text-white font-bold text-sm px-5 py-2.5 shadow-sm hover:bg-primary-container no-underline">
      <span class="material-symbols-outlined text-[18px]">restaurant_menu</span>
      Order again
    </a>
  </div>

  <?php if (!$orders): ?>
  <div class="rounded-3xl border border-dashed border-outline-variant bg-white p-10 text-center">
    <span class="material-symbols-outlined text-primary text-5xl mb-3">receipt_long</span>
    <h2 class="font-bold text-lg text-on-background mb-1">No orders yet</h2>
    <p class="text-sm text-on-surface-variant mb-5">When you place an order online, it will show up here.</p>
  </div>
  <?php else: ?>
  <div class="space-y-4">
    <?php foreach ($orders as $i => $order):
        $st = $status_meta[$order['status']] ?? $status_meta['completed'];
    ?>
    <article class="dash-rise <?php echo $i === 0 ? '' : 'dash-rise-delay-1'; ?> rounded-3xl bg-white border border-outline-variant/30 shadow-sm overflow-hidden">
      <div class="flex flex-col sm:flex-row gap-4 p-4 md:p-5">
        <div class="w-full sm:w-28 h-28 rounded-2xl overflow-hidden bg-surface-container shrink-0">
          <img src="<?php echo htmlspecialchars($order['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="" class="w-full h-full object-cover" loading="lazy">
        </div>
        <div class="min-w-0 flex-1">
          <div class="flex flex-wrap items-start justify-between gap-2 mb-2">
            <div>
              <p class="text-xs font-bold text-on-surface-variant tracking-wide"><?php echo htmlspecialchars($order['id'], ENT_QUOTES, 'UTF-8'); ?></p>
              <h2 class="font-bold text-lg text-on-background leading-snug"><?php echo htmlspecialchars($order['restaurant'], ENT_QUOTES, 'UTF-8'); ?></h2>
              <p class="text-sm text-on-surface-variant"><?php echo htmlspecialchars($order['city'], ENT_QUOTES, 'UTF-8'); ?> · <?php echo htmlspecialchars($order['type'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider <?php echo htmlspecialchars($st['class'], ENT_QUOTES, 'UTF-8'); ?>">
              <?php echo htmlspecialchars($st['label'], ENT_QUOTES, 'UTF-8'); ?>
            </span>
          </div>
          <ul class="text-sm text-on-surface-variant space-y-0.5 mb-3">
            <?php foreach ($order['items'] as $item): ?>
            <li class="flex justify-between gap-3">
              <span><?php echo (int) $item['qty']; ?>× <?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></span>
              <span class="tabular-nums shrink-0">$<?php echo number_format($item['price'] * $item['qty'], 2); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="flex flex-wrap items-center justify-between gap-3 pt-3 border-t border-outline-variant/25">
            <p class="text-xs text-on-surface-variant"><?php echo htmlspecialchars($order['placed'], ENT_QUOTES, 'UTF-8'); ?></p>
            <p class="font-bold text-on-background tabular-nums">Total $<?php echo number_format($order['total'], 2); ?></p>
          </div>
        </div>
      </div>
      <div class="px-4 md:px-5 py-3 bg-[#f8fafc] border-t border-outline-variant/20 flex flex-wrap gap-2">
        <button type="button" class="inline-flex items-center gap-1 rounded-full border border-outline-variant px-4 py-1.5 text-sm font-semibold text-on-surface hover:border-primary hover:text-primary transition-colors">
          View details
        </button>
        <?php if ($order['status'] === 'completed'): ?>
        <button type="button" class="inline-flex items-center gap-1 rounded-full bg-primary/10 text-primary px-4 py-1.5 text-sm font-semibold hover:bg-primary hover:text-white transition-colors">
          Reorder
        </button>
        <?php endif; ?>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</div>
<?php
$content = ob_get_clean();
include __DIR__ . '/../../templates/layout-dashboard.php';
