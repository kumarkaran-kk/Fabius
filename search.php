<?php
require_once __DIR__ . '/data/catalog.php';
$products = array_map(fn($slug, $product) => ['slug' => $slug] + $product, array_keys(fabius_catalog()), array_values(fabius_catalog()));
$query = trim($_GET['q'] ?? '');
$results = $query === '' ? $products : array_values(array_filter($products, function ($product) use ($query) {
  return stripos($product['name'] . ' ' . $product['subtitle'] . ' ' . $product['search'], $query) !== false;
}));
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Search the Fabius watch collection."><title>Search Fabius Watches</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/pdp.css"><link rel="stylesheet" href="assets/css/header.css"><link rel="stylesheet" href="assets/css/search.css">
</head>
<body>
  <?php $pageType = 'search'; require __DIR__ . '/includes/header.php'; ?>
  <main class="search-page">
    <header class="search-intro"><span>Discover</span><h1>Find Your<br><em>Timepiece</em></h1>
      <form action="search.php" method="get"><label class="sr-only" for="watch-search">Search watches</label><input id="watch-search" name="q" value="<?= htmlspecialchars($query) ?>" placeholder="Search by collection, colour or movement" autofocus><button>Search</button></form>
    </header>
    <section class="search-results" aria-live="polite">
      <p class="result-count"><?= count($results) ?> <?= count($results) === 1 ? 'timepiece' : 'timepieces' ?><?= $query !== '' ? ' found for “' . htmlspecialchars($query) . '”' : ' in the collection' ?></p>
      <?php if ($results): ?><div class="search-grid">
        <?php foreach ($results as $product): ?><a class="search-card" href="product.php?slug=<?= urlencode($product['slug']) ?>"><div><img src="<?= htmlspecialchars($product['model_image']) ?>" alt="Fabius <?= htmlspecialchars($product['name']) ?> watch"></div><span><?= htmlspecialchars($product['subtitle']) ?></span><h2><?= htmlspecialchars($product['name']) ?></h2><p><?= htmlspecialchars($product['price']) ?></p><b>View Timepiece&nbsp; →</b></a><?php endforeach; ?>
      </div><?php else: ?><div class="empty-results"><h2>No timepiece found</h2><p>Try “Resolute”, “Lumina”, “automatic”, “gold”, or “blue”.</p><a href="search.php">View the complete collection</a></div><?php endif; ?>
    </section>
  </main>
  <?php require __DIR__ . '/includes/footer.php'; ?>
  <script src="assets/js/pdp.js"></script>
</body></html>
