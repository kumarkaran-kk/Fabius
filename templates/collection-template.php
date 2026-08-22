<?php
require_once dirname(__DIR__) . '/data/catalog.php';
$collectionKey = $collectionKey ?? (($audience ?? 'men') === 'women' ? 'women' : 'men');
$configs = [
  'men' => ['title' => "Men's Watches", 'display' => "Men's", 'intro' => 'Architectural mechanics, decisive proportions and enduring materials.', 'hero' => 'assets/new-images/optimized/promo-mens-watch.webp', 'label' => 'Resolute', 'word' => 'presence', 'statement' => 'Exposed mechanics meet confident silhouettes in watches created to move with purpose.'],
  'women' => ['title' => "Women's Watches", 'display' => "Women's", 'intro' => 'Radiant materials, refined proportions and effortless contemporary elegance.', 'hero' => 'assets/new-images/optimized/promo-womens-watch.webp', 'label' => 'Lumina', 'word' => 'radiance', 'statement' => 'Mother-of-pearl dials and considered details illuminate every moment without excess.'],
  'automatic' => ['title' => 'Automatic Watches', 'display' => 'Automatic', 'intro' => 'Living mechanics shaped by motion, energy and an appreciation for what lies beneath.', 'hero' => 'assets/new-images/optimized/hero-resolute-blue.webp', 'label' => 'Mechanical', 'word' => 'motion', 'statement' => 'Skeleton architecture reveals the rhythm of automatic timekeeping in continuous motion.'],
  'quartz' => ['title' => 'Quartz Watches', 'display' => 'Quartz', 'intro' => 'Dependable precision expressed through luminous materials and composed proportions.', 'hero' => 'assets/new-images/optimized/promo-womens-watch.webp', 'label' => 'Precision', 'word' => 'clarity', 'statement' => 'Quartz Slim movements bring effortless accuracy to refined everyday timekeeping.'],
  'limited' => ['title' => 'Limited Editions', 'display' => 'Limited', 'intro' => 'Rare expressions reserved for defining chapters in the story of FABIUS.', 'hero' => 'assets/new-images/optimized/manifesto-watch-background.webp', 'label' => 'Exceptional', 'word' => 'rarity', 'statement' => 'Limited editions will be introduced only when a timepiece has a singular story worth preserving.'],
];
$config = $configs[$collectionKey] ?? $configs['men'];
$products = match ($collectionKey) {
  'men', 'women' => fabius_products_for($collectionKey),
  'automatic' => fabius_products_by_movement('Automatic'),
  'quartz' => fabius_products_by_movement('Quartz'),
  default => [],
};
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Fabius <?= htmlspecialchars($config['title']) ?> collection."><title>Fabius <?= htmlspecialchars($config['title']) ?></title>
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/pdp.css"><link rel="stylesheet" href="assets/css/header.css"><link rel="stylesheet" href="assets/css/collection.css"><link rel="stylesheet" href="assets/css/collection-spotlight.css"><link rel="stylesheet" href="assets/css/collections-hub.css">
  <?php if ($collectionKey === 'men'): ?><link rel="stylesheet" href="assets/css/mens-collection.css"><?php endif; ?>
</head>
<body><?php $pageType = 'collection'; require dirname(__DIR__) . '/includes/header.php'; ?>
<main class="collection-page collection-page--<?= htmlspecialchars($collectionKey) ?>">
  <section class="collection-hero"><img src="<?= htmlspecialchars($config['hero']) ?>" alt="<?= htmlspecialchars($config['title']) ?> campaign"><div></div><header><span>Fabius Collection</span><h1><?= htmlspecialchars($config['display']) ?><br><em>Watches</em></h1><p><?= htmlspecialchars($config['intro']) ?></p><a href="#collection-products">Explore&nbsp; ↓</a></header></section>
  <section class="collection-statement"><span><?= htmlspecialchars($config['label']) ?></span><h2>Designed for<br><em><?= htmlspecialchars($config['word']) ?></em></h2><p><?= htmlspecialchars($config['statement']) ?></p></section>
  <section class="collection-products" id="collection-products"><header><span>Discover</span><h2><?= $collectionKey === 'limited' ? 'A Future Chapter' : 'The Collection' ?></h2></header>
    <?php if ($products): ?><div class="collection-product-grid"><?php foreach ($products as $product): ?><a href="product.php?slug=<?= urlencode($product['slug']) ?>" class="collection-product"><div><img src="<?= htmlspecialchars($product['model_image']) ?>" alt="Fabius <?= htmlspecialchars($product['name']) ?> watch"></div><small><?= htmlspecialchars($product['subtitle']) ?></small><h3>Fabius <?= htmlspecialchars($product['name']) ?></h3><p><?= htmlspecialchars($product['price']) ?></p><b>View&nbsp; →</b></a><?php endforeach; ?></div>
    <?php else: ?><div class="collection-empty"><span>By Invitation of Time</span><p>No limited-edition timepiece has been announced. Explore the current collections while the next exceptional chapter takes shape.</p><a href="collections.php">Explore Collections&nbsp; →</a></div><?php endif; ?>
  </section>
  <section class="collection-portal" style="--portal-background:url('/<?= htmlspecialchars(ltrim($config['hero'], '/')) ?>')"><span>Official Retail Partner</span><h2>Continue your<br><em>acquisition</em></h2><p>Purchasing is completed securely through our official retail portal.</p><a href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer">Visit IndieKonnect&nbsp; ↗</a></section>
</main><?php require dirname(__DIR__) . '/includes/footer.php'; ?><script src="assets/js/pdp.js"></script>
</body></html>
