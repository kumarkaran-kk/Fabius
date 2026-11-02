<?php
require_once __DIR__ . '/data/catalog.php';
$catalog = fabius_catalog();
$imageBase = 'assets/images/shoot/';
$assets = [
  'hero_01' => $imageBase . 'home/hero-01.webp',
  'hero_02' => $imageBase . 'home/hero-02.webp',
  'hero_03' => $imageBase . 'home/hero-03.webp',
  'hero_04' => $imageBase . 'home/hero-04.webp',
  'hero_05' => $imageBase . 'home/hero-05.webp',
  'promo_men' => $imageBase . 'home/category-men.webp',
  'promo_women' => $imageBase . 'home/category-women.webp',
  'banner' => $imageBase . 'home/manifesto.webp',
  'visit_banner' => $imageBase . 'home/visit.webp',
  'feature' => $imageBase . 'home/feature-campaign.webp',
  'feature_watch' => $imageBase . 'home/feature-watch-cutout.webp',
];

$heroMap = [
  ['slug' => 'resolute-brown', 'image_url' => $assets['hero_01']],
  ['slug' => 'resolute-brown', 'image_url' => $assets['hero_02']],
  ['slug' => 'resolute-black', 'image_url' => $assets['hero_03']],
  ['slug' => 'resolute-blue', 'image_url' => $assets['hero_04']],
  ['slug' => 'resolute-black', 'image_url' => $assets['hero_05']],
];
$heroSlides = array_map(function ($slide) use ($catalog) {
  $product = $catalog[$slide['slug']];
  return $slide + ['tone' => $product['tone'], 'model' => $product['collection'], 'copy' => $product['description']];
}, $heroMap);

$collections = array_map(fn($slug) => ['slug' => $slug, 'image_url' => $catalog[$slug]['collection_image'], 'tone' => $catalog[$slug]['tone'], 'copy' => $catalog[$slug]['description']], ['resolute-black', 'resolute-blue', 'resolute-brown']);
$models = array_map(fn($slug, $product) => ['slug' => $slug] + $product, array_keys($catalog), array_values($catalog));
?>
<!doctype html>
<html lang="en">

<head>
  <?php require __DIR__ . '/includes/gtm-head.php'; ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Fabius precision watches — crafted for those who value every moment.">
  <title>Fabius Watches</title>
  <link rel="icon" href="assets/brand/fabius-logo.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/motion.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/brand-accents.css">
</head>

<body>
  <?php $pageType = 'home';
  require __DIR__ . '/includes/header.php'; ?>

  <main id="top">
    <section class="hero" aria-label="Featured watches">
      <?php foreach ($heroSlides as $index => $slide): ?>
        <article class="hero-slide<?= $index === 0 ? ' is-active' : '' ?>" data-slug="<?= htmlspecialchars($slide['slug']) ?>" style="--hero:url('/<?= htmlspecialchars(ltrim($slide['image_url'], '/')) ?>')">
          <div class="hero-copy">
            <span class="eyebrow hero-brand">Fabius</span>
            <h1><?= htmlspecialchars($slide['tone']) ?></h1>
            <h2><?= htmlspecialchars($slide['model']) ?></h2>
            <p><?= htmlspecialchars($slide['copy']) ?></p>
            <a class="button button-light" href="product.php?slug=<?= urlencode($slide['slug']) ?>">Discover</a>
          </div>
        </article>
      <?php endforeach; ?>
      <div class="hero-dots" role="tablist" aria-label="Choose featured watch">
        <?php foreach ($heroSlides as $index => $slide): ?><button class="<?= $index === 0 ? 'is-active' : '' ?>" data-hero="<?= $index ?>" aria-label="Show <?= htmlspecialchars($slide['tone']) ?> watch"></button><?php endforeach; ?>
      </div>
    </section>

    <section class="category-grid section-pad reveal">
      <a class="category-card category-card--men" href="mens-watches.php"><img src="<?= $assets['promo_men'] ?>" alt="Man wearing a blue Fabius watch"><span>More</span></a>
      <a class="category-card" href="womens-watches.php"><img src="<?= $assets['promo_women'] ?>" alt="Woman wearing a rose-gold Fabius watch" width="1400" height="933" loading="lazy" decoding="async"><span>More</span></a>
    </section>

    <section class="manifesto dark-visual reveal" style="--background:url('/<?= ltrim($assets['banner'], '/') ?>')">
      <h2><strong>Crafted</strong> <em>for</em><br><strong>those</strong> <em>who</em> <strong>value</strong><br><em>Every</em> <strong>moment</strong></h2>
    </section>

    <section class="collections section-pad" id="collections">
      <header class="section-heading reveal"><span>Discover</span>
        <h2><em>Our</em> Collections</h2>
      </header>
      <div class="collection-stage reveal">
        <?php foreach ($collections as $index => $item): ?>
          <article class="collection-slide<?= $index === 0 ? ' is-active' : '' ?>">
            <div class="collection-photo"><img src="<?= htmlspecialchars($item['image_url']) ?>" alt="Fabius Resolute <?= htmlspecialchars($item['tone']) ?> watch"></div>
            <div class="collection-copy"><span class="eyebrow">Collection</span>
              <h3>Resolute<br><?= htmlspecialchars($item['tone']) ?></h3>
              <p><?= htmlspecialchars($item['copy']) ?></p><a class="button" href="product.php?slug=<?= urlencode($item['slug']) ?>">View</a>
            </div>
          </article>
        <?php endforeach; ?>
        <div class="collection-controls"><button data-collection="prev" aria-label="Previous collection">←</button>
          <div class="progress"><i></i><i></i><i></i></div><button data-collection="next" aria-label="Next collection">→</button>
        </div>
      </div>
    </section>

    <section class="models" id="models">
      <header class="section-heading reveal"><span>Explore</span>
        <h2><em>Our</em> Models</h2>
      </header>
      <div class="model-grid">
        <?php foreach ($models as $model): ?>
          <a class="model-card reveal" href="product.php?slug=<?= urlencode($model['slug']) ?>" data-model-name="FABIUS <?= htmlspecialchars(strtoupper($model['name'])) ?>" data-product='<?= htmlspecialchars(json_encode($model['product_data'], JSON_UNESCAPED_UNICODE), ENT_QUOTES) ?>'><img src="<?= htmlspecialchars($model['model_image']) ?>" alt="Fabius <?= htmlspecialchars($model['name']) ?> watch"><span><?= htmlspecialchars($model['name']) ?></span></a>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="vanguard reveal">
      <h2>Eclipse<br>Vanguard</h2>
      <p>A bold design with shadowy tones and cutting-edge features</p>
    </section>

    <section class="feature" id="story">
      <div class="feature-image reveal"><img src="<?= $assets['feature'] ?>" alt="Fabius Lumina gold watch campaign"></div>
      <img class="feature-watch" src="<?= $assets['feature_watch'] ?>" alt="Fabius Lumina gold watch">
      <div class="feature-copy reveal">
        <h2>Small pleasures<br>from Fabius</h2>
        <p>We create considered timepieces where precision, purpose and enduring design become part of life’s defining moments.</p><a class="button" href="house-of-fabius.php">Our Story</a>
      </div>
    </section>

    <section class="visit dark-visual reveal" style="--background:url('/<?= ltrim($assets['visit_banner'], '/') ?>')">
      <div>
        <h2><em>Your</em> Specialist<br>Watch <em>Store</em></h2>
        <p>Need a closer look? Come visit us in store</p><a class="button button-light" href="#footer">Discover</a>
      </div>
    </section>

    <section class="reviews section-pad">
      <header class="section-heading reveal">
        <h2>Customer Reviews</h2>
      </header>
      <div class="review-box reveal"><button class="review-arrow" data-review="prev" aria-label="Previous review">←</button>
        <div class="review-content">
          <blockquote>“The Resolute has a confident presence without feeling excessive. The skeleton dial makes every glance at the time feel considered.”</blockquote>
          <p class="review-meta">Resolute Collection</p>
        </div><button class="review-arrow" data-review="next" aria-label="Next review">→</button>
      </div>
    </section>
  </main>

  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/script.js"></script>
</body>

</html>
