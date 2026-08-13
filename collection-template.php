<?php
require_once __DIR__ . '/data/catalog.php';
$audience = $audience ?? 'men';
$isMen = $audience === 'men';
$products = fabius_products_for($audience);
$title = $isMen ? "Men's Watches" : "Women's Watches";
$intro = $isMen ? 'Architectural mechanics, decisive proportions, and enduring materials.' : 'Radiant materials, refined proportions, and effortless contemporary elegance.';
$heroImage = $isMen ? 'assets/new-images/optimized/promo-mens-watch.webp' : 'assets/new-images/optimized/promo-womens-watch.webp';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Fabius <?= htmlspecialchars($title) ?> collection.">
  <title>Fabius <?= htmlspecialchars($title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="pdp.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="collection.css">
  <link rel="stylesheet" href="collection-spotlight.css">
</head>

<body><?php $pageType = 'collection';
      require __DIR__ . '/header.php'; ?>
  <main class="collection-page">
    <section class="collection-hero"><img src="<?= $heroImage ?>" alt="<?= htmlspecialchars($title) ?> campaign">
      <div></div>
      <header><span>Fabius Collection</span>
        <h1><?= $isMen ? "Men's" : "Women's" ?><br><em>Watches</em></h1>
        <p><?= $intro ?></p><a href="#collection-products">Explore the Collection&nbsp; ↓</a>
      </header>
    </section>
    <section class="collection-statement"><span><?= $isMen ? 'Resolute' : 'Lumina' ?></span>
      <h2>Designed for<br><em><?= $isMen ? 'presence' : 'radiance' ?></em></h2>
      <p><?= $isMen ? 'Exposed mechanics meet confident silhouettes in watches created to move with purpose.' : 'Mother-of-pearl dials and considered details illuminate every moment without excess.' ?></p>
    </section>
    <section class="collection-products" id="collection-products">
      <header><span>Discover</span>
        <h2>The Collection</h2>
      </header>
      <div class="collection-product-grid">
        <?php foreach ($products as $product): ?><a href="product.php?slug=<?= urlencode($product['slug']) ?>" class="collection-product">
            <div><img src="<?= htmlspecialchars($product['model_image']) ?>" alt="Fabius <?= htmlspecialchars($product['name']) ?> watch"></div><small><?= htmlspecialchars($product['subtitle']) ?></small>
            <h3>Fabius <?= htmlspecialchars($product['name']) ?></h3>
            <p><?= htmlspecialchars($product['price']) ?></p><b>View Timepiece&nbsp; →</b>
          </a><?php endforeach; ?>
      </div>
    </section>
    <section class="collection-portal" style="--portal-background:url('<?= $heroImage ?>')"><span>Official Retail Partner</span>
      <h2>Continue your<br><em>acquisition</em></h2>
      <p>Purchasing is completed securely through our official retail portal.</p><a href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer">Visit IndieKonnect&nbsp; ↗</a>
    </section>
  </main><?php require __DIR__ . '/footer.php'; ?><script src="pdp.js"></script>
</body>

</html>
