<?php
require_once __DIR__ . '/data/catalog.php';
$slug = preg_replace('/[^a-z0-9-]/', '', strtolower($_GET['slug'] ?? 'resolute-black'));
$product = fabius_product($slug) ?? fabius_product('resolute-black');
$relatedProducts = array_slice(array_values(array_filter(array_map(fn($itemSlug, $item) => ['slug' => $itemSlug] + $item, array_keys(fabius_catalog()), array_values(fabius_catalog())), fn($item) => $item['slug'] !== $product['slug'])), 0, 3);
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($product['description']) ?>">
  <title>Fabius <?= htmlspecialchars($product['name']) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&family=Pinyon+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="pdp.css">
  <link rel="stylesheet" href="header.css">
</head>
<body>
  <?php $pageType = 'product'; require __DIR__ . '/header.php'; ?>

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
        <h1>Fabius <?= htmlspecialchars($product['collection']) ?><br><?= htmlspecialchars($product['tone']) ?></h1>
        <p class="product-intro"><?= htmlspecialchars($product['description']) ?></p>
        <strong class="price"><?= htmlspecialchars($product['price']) ?></strong>
        <div class="purchase-row">
          <a class="acquisition-link" href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer">Acquire via IndieKonnect <span aria-hidden="true">↗</span></a>
        </div>
        <p class="purchase-note">Secure purchasing is completed through our official retail portal, IndieKonnect.</p>
      </div>
    </section>

    <section class="product-details" aria-label="Product details">
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
        <h2>Mechanical clarity.<br><em>Uncompromised</em> character.</h2>
        <p>An exposed automatic movement turns precision into theatre. Every bridge, wheel, and polished surface is framed for those who appreciate what lies beneath.</p>
      </div>
      <div class="pdp-scroll-mark" aria-hidden="true"><i></i><span>Explore</span></div>
    </section>

    <section class="craft-pillars">
      <article class="pdp-reveal"><span>01</span><h3>Sapphire Clarity</h3><p>A flat sapphire crystal offers enduring transparency and confident daily protection.</p></article>
      <article class="pdp-reveal"><span>02</span><h3>Living Mechanics</h3><p>The skeleton architecture reveals the automatic movement in continuous motion.</p></article>
      <article class="pdp-reveal"><span>03</span><h3>Resolute Form</h3><p>A sculpted 42mm steel case balances architectural presence with refined proportion.</p></article>
    </section>

    <section class="specs pdp-reveal">
      <header><span>Read</span><h2><em>The</em> Specs</h2></header>
      <?php foreach ($product['specs'] as $group => $items): ?><div class="spec-group"><h3><?= htmlspecialchars($group) ?></h3><dl><?php foreach ($items as $label => $value): ?><div><dt><?= htmlspecialchars($label) ?></dt><dd><?= htmlspecialchars($value) ?></dd></div><?php endforeach; ?></dl></div><?php endforeach; ?>
    </section>

    <section class="related pdp-reveal">
      <header><h2><em>Related</em> Products</h2></header>
      <div class="related-grid">
        <?php foreach ($relatedProducts as $related): ?>
        <a class="related-card" href="product.php?slug=<?= urlencode($related['slug']) ?>"><img src="<?= htmlspecialchars($related['model_image']) ?>" alt="Fabius <?= htmlspecialchars($related['name']) ?>"><h3>Fabius <?= htmlspecialchars($related['collection']) ?><br><?= htmlspecialchars($related['tone']) ?></h3><p><?= htmlspecialchars($related['price']) ?></p><span class="related-view">View Timepiece&nbsp; →</span></a>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
  <script src="pdp.js"></script>
</body>
</html>
