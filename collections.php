<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="Explore every Fabius watch collection.">
  <title>Collections | Fabius</title>
  <link rel="icon" href="assets/brand/fabius-logo.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&family=Pinyon+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/pdp.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/editorial.css">
  <link rel="stylesheet" href="assets/css/collections-hub.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/brand-accents.css">
</head>
<body>
<?php $pageType = 'collection'; require __DIR__ . '/includes/header.php'; ?>
<main class="collections-hub">
  <section class="editorial-hero">
    <img src="assets/new-images/optimized/manifesto-watch-background.webp" alt="Fabius watch collections">
    <div class="editorial-hero-shade"></div>
    <div class="editorial-hero-copy"><span>Fabius Collections</span><h1>Expressions<br>Of Time</h1><p>Discover mechanical presence, luminous precision and timepieces designed to accompany defining moments.</p></div>
    <div class="editorial-scroll" aria-hidden="true"><i></i><span>Discover</span></div>
  </section>
  <section class="collection-directory">
    <header class="pdp-reveal"><div><span>Explore The House</span><h2>Find Your<br><em>Expression</em></h2></div><p>Five distinct perspectives on time, united by considered materials, precise proportions, and enduring Fabius character.</p></header>
    <div class="collection-directory-grid">
      <?php
      $cards = [
        ['Men’s Watches', 'Resolute architecture and exposed mechanics.', 'mens-watches.php', 'assets/new-images/optimized/promo-mens-watch.webp'],
        ['Women’s Watches', 'Radiant materials in refined proportions.', 'womens-watches.php', 'assets/new-images/optimized/promo-womens-watch.webp'],
        ['Automatic Watches', 'Mechanical energy revealed in motion.', 'automatic-watches.php', 'assets/new-images/optimized/hero-resolute-blue.webp'],
        ['Quartz Watches', 'Quartz Slim precision with effortless elegance.', 'quartz-watches.php', 'assets/new-images/optimized/promo-womens-watch.webp'],
        ['Limited Editions', 'Future chapters of exceptional rarity.', 'limited-editions.php', 'assets/new-images/optimized/manifesto-watch-background.webp'],
      ];
      foreach ($cards as $cardIndex => $card): ?>
        <a class="directory-card pdp-reveal" href="<?= $card[2] ?>"><img src="<?= $card[3] ?>" alt="<?= htmlspecialchars($card[0]) ?> collection"><i class="directory-index">0<?= $cardIndex + 1 ?></i><div><span>Fabius Collection</span><h2><?= htmlspecialchars($card[0]) ?></h2><p><?= htmlspecialchars($card[1]) ?></p><b><span>Explore Collection</span><i aria-hidden="true">→</i></b></div></a>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php require __DIR__ . '/includes/footer.php'; ?>
<script src="assets/js/pdp.js"></script>
</body>
</html>
