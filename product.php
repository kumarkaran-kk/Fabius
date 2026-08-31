<?php
require_once __DIR__ . '/data/catalog.php';
$slug = preg_replace('/[^a-z0-9-]/', '', strtolower($_GET['slug'] ?? 'resolute-black'));
$product = fabius_product($slug) ?? fabius_product('resolute-black');
$isQuartz = ($product['product_data']['Movement'] ?? '') === 'Quartz Slim';
$productCollectionUrl = $product['audience'] === 'women' ? 'womens-watches.php' : 'mens-watches.php';
$productCollectionLabel = $product['audience'] === 'women' ? "Explore Women's Collection" : "Explore Men's Collection";
$relatedProducts = array_slice(array_values(array_filter(array_map(fn($itemSlug, $item) => ['slug' => $itemSlug] + $item, array_keys(fabius_catalog()), array_values(fabius_catalog())), fn($item) => $item['slug'] !== $product['slug'])), 0, 3);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($product['description']) ?>">
  <title>Fabius <?= htmlspecialchars($product['name']) ?></title>
  <link rel="icon" href="assets/brand/fabius-logo.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&family=Pinyon+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/pdp.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/product-hero.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/brand-accents.css">
</head>
<body>
  <?php $pageType = 'product'; require __DIR__ . '/includes/header.php'; ?>

  <main>
    <section class="product-hero">
      <div class="product-gallery">
        <button class="gallery-arrow gallery-prev" aria-label="Previous image">←</button>
        <figure><img id="product-image" src="<?= htmlspecialchars($product['gallery'][0]) ?>" alt="Fabius <?= htmlspecialchars($product['name']) ?> watch"></figure>
        <button class="gallery-arrow gallery-next" aria-label="Next image">→</button>
        <div class="gallery-thumbs" aria-label="Product images">
          <?php foreach ($product['gallery'] as $index => $galleryImage): ?><button<?= $index === 0 ? ' class="is-active"' : '' ?> data-image="<?= htmlspecialchars($galleryImage) ?>" data-alt="Fabius <?= htmlspecialchars($product['name']) ?> watch view <?= $index + 1 ?>"><img src="<?= htmlspecialchars($galleryImage) ?>" alt="<?= htmlspecialchars($product['name']) ?> view <?= $index + 1 ?>"></button><?php endforeach; ?>
        </div>
      </div>

      <div class="product-summary">
        <div class="product-kicker"><span><?= htmlspecialchars($product['collection']) ?> Collection</span><i aria-hidden="true"></i></div>
        <h1><span>Fabius</span><?= htmlspecialchars($product['name']) ?></h1>
        <span class="product-ornament" aria-hidden="true"><i></i></span>
        <p class="product-intro"><?= htmlspecialchars($product['description']) ?></p>
        <div class="product-price-panel">
          <div><span>Price</span><strong class="price"><?= htmlspecialchars($product['price']) ?></strong></div>
          <i class="price-emblem" aria-hidden="true"></i>
        </div>
        <div class="purchase-row">
          <a class="acquisition-link" href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer"><span>Acquire via IndieKonnect</span><b aria-hidden="true">↗</b></a>
        </div>
        <p class="purchase-note"><span aria-hidden="true">✓</span><span>Secure purchasing is completed through our official retail portal, IndieKonnect.</span></p>
      </div>
    </section>

    <section class="product-details" aria-label="Product details">
      <header class="product-data-heading">
        <span>At a Glance</span>
        <h2><em>Product</em> Details</h2>
        <p>The essential characteristics of this Fabius timepiece.</p>
      </header>
      <div class="product-tabs">
        <div role="tablist"><button class="is-active" data-tab="data">Product Data</button><button data-tab="reviews">Reviews (0)</button></div>
        <dl class="tab-panel is-active" data-panel="data"><?php foreach ($product['product_data'] as $label => $value): ?><div><dt><?= htmlspecialchars($label) ?></dt><dd><?= htmlspecialchars($value) ?></dd></div><?php endforeach; ?></dl>
        <div class="tab-panel reviews-panel" data-panel="reviews"><p>No reviews yet.</p></div>
      </div>
    </section>

    <section class="pdp-manifesto pdp-reveal">
      <img src="<?= htmlspecialchars($product['hero_image']) ?>" alt="Fabius <?= htmlspecialchars($product['name']) ?> in a dramatic setting">
      <div class="pdp-manifesto-shade"></div>
      <div class="pdp-manifesto-copy">
        <span>Inside the <?= htmlspecialchars($product['collection']) ?></span>
        <h2><?= $isQuartz ? 'Luminous clarity.' : 'Mechanical clarity.' ?><br><em>Uncompromised</em> character.</h2>
        <p><?= $isQuartz ? 'A refined Quartz Slim movement brings effortless precision to a radiant composition of mother-of-pearl, polished metal, and crystal hour markers.' : 'An exposed automatic movement turns precision into theatre. Every bridge, wheel, and polished surface is framed for those who appreciate what lies beneath.' ?></p>
      </div>
      <a class="pdp-scroll-mark" href="<?= $productCollectionUrl ?>" aria-label="<?= htmlspecialchars($productCollectionLabel) ?>"><i aria-hidden="true"></i><span>Explore Collection</span><b aria-hidden="true">→</b></a>
    </section>

    <section class="craft-pillars">
      <article class="pdp-reveal"><span>01</span><h3>Sapphire Clarity</h3><p>A flat sapphire crystal offers enduring transparency and confident daily protection.</p></article>
      <article class="pdp-reveal"><span>02</span><h3><?= $isQuartz ? 'Quartz Precision' : 'Living Mechanics' ?></h3><p><?= $isQuartz ? 'A slender Quartz Slim movement delivers composed, dependable timekeeping.' : 'The skeleton architecture reveals the automatic movement in continuous motion.' ?></p></article>
      <article class="pdp-reveal"><span>03</span><h3><?= $isQuartz ? 'Lumina Form' : 'Resolute Form' ?></h3><p><?= $isQuartz ? 'A refined 30mm case balances luminous materials with graceful everyday proportion.' : 'A sculpted 42mm steel case balances architectural presence with refined proportion.' ?></p></article>
    </section>

    <section class="specs pdp-reveal">
      <header><span>Technical Composition</span><h2><em>Read</em> The Specs</h2><p>Every dimension, material, and mechanism considered with purpose.</p></header>
      <div class="specs-grid">
        <?php $specNumber = 0; foreach ($product['specs'] as $group => $items): $specNumber++; ?><article class="spec-group"><div class="spec-group-heading"><span>0<?= $specNumber ?></span><h3><?= htmlspecialchars($group) ?></h3></div><dl><?php foreach ($items as $label => $value): ?><div><dt><?= htmlspecialchars($label) ?></dt><dd><?= htmlspecialchars($value) ?></dd></div><?php endforeach; ?></dl></article><?php endforeach; ?>
      </div>
    </section>

    <section class="related pdp-reveal">
      <header><h2><em>Related</em> Products</h2></header>
      <div class="related-grid">
        <?php foreach ($relatedProducts as $related): ?>
        <a class="related-card" href="product.php?slug=<?= urlencode($related['slug']) ?>">
          <div class="related-visual"><img src="<?= htmlspecialchars($related['gallery'][0]) ?>" alt="Fabius <?= htmlspecialchars($related['name']) ?>"><span class="related-badge">New</span></div>
          <div class="related-card-body"><span class="related-emblem" aria-hidden="true"><i></i></span><h3>Fabius <?= htmlspecialchars($related['collection']) ?><br><?= htmlspecialchars($related['tone']) ?></h3><span class="related-rule" aria-hidden="true"><i></i></span><p class="catalog-price"><span>Price</span><strong><?= htmlspecialchars($related['price']) ?></strong></p><span class="related-view"><b>View Timepiece</b><i aria-hidden="true">→</i></span></div>
        </a>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/pdp.js"></script>
</body>
</html>
