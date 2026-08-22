<?php
require_once dirname(__DIR__) . '/data/pages.php';
$pageKey = $pageKey ?? 'house';
$page = fabius_editorial_page($pageKey);
if (!$page) {
  http_response_code(404);
  exit('Page not found');
}
$plainTitle = trim(strip_tags(str_replace('<br>', ' ', $page['title'])));
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?= htmlspecialchars($page['description']) ?>">
  <title><?= htmlspecialchars($plainTitle) ?> | Fabius</title>
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Libre+Baskerville:ital,wght@0,400;1,400&family=Pinyon+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/pdp.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/css/editorial.css">
</head>

<body>
  <?php $pageType = 'editorial';
  require dirname(__DIR__) . '/includes/header.php'; ?>
  <main class="editorial-page<?= !empty($page['compact']) ? ' editorial-page--compact' : '' ?>">
    <section class="editorial-hero">
      <img src="<?= htmlspecialchars($page['hero']) ?>" alt="">
      <div class="editorial-hero-shade"></div>
      <div class="editorial-hero-copy"><span><?= htmlspecialchars($page['eyebrow']) ?></span>
        <h1><?= $page['title'] ?></h1>
        <p><?= htmlspecialchars($page['description']) ?></p>
      </div>
      <div class="editorial-scroll" aria-hidden="true"><i></i><span>Discover</span></div>
    </section>

    <section class="editorial-intro pdp-reveal">
      <span><?= htmlspecialchars($page['eyebrow']) ?></span>
      <h2><?= $page['intro_title'] ?></h2>
      <div><?php foreach ($page['intro'] as $paragraph): ?><p><?= htmlspecialchars($paragraph) ?></p><?php endforeach; ?></div>
    </section>

    <?php if (!empty($page['quote'])): ?><blockquote class="editorial-quote pdp-reveal">“<?= htmlspecialchars($page['quote']) ?>”</blockquote><?php endif; ?>

    <?php if (!empty($page['sections'])): ?>
      <section class="editorial-sections">
        <?php foreach ($page['sections'] as $section): ?>
          <article class="pdp-reveal<?= empty($section['number']) ? ' editorial-section--plain' : '' ?>">
            <?php if (!empty($section['number'])): ?><span><?= htmlspecialchars($section['number']) ?></span><?php endif; ?>
            <h2><?= htmlspecialchars($section['title']) ?></h2>
            <div><?php foreach ($section['body'] as $paragraph): ?><p><?= htmlspecialchars($paragraph) ?></p><?php endforeach; ?></div>
          </article>
        <?php endforeach; ?>
      </section>
    <?php endif; ?>

    <?php if (!empty($page['faqs'])): ?>
      <section class="faq-list" aria-label="Frequently asked questions">
        <?php foreach ($page['faqs'] as $index => $faq): ?><details class="pdp-reveal" <?= $index === 0 ? ' open' : '' ?>>
            <summary><?= htmlspecialchars($faq['q']) ?><span aria-hidden="true">+</span></summary>
            <p><?= htmlspecialchars($faq['a']) ?></p>
          </details><?php endforeach; ?>
      </section>
    <?php endif; ?>

    <?php if (!empty($page['note'])): ?><aside class="editorial-note pdp-reveal"><span>Important</span>
        <p><?= htmlspecialchars($page['note']) ?></p>
      </aside><?php endif; ?>

    <?php if (!empty($page['links'])): ?><nav class="editorial-links" aria-label="Continue exploring"><?php foreach ($page['links'] as $link): ?><a href="<?= htmlspecialchars($link['href']) ?>" <?= !empty($link['external']) ? ' target="_blank" rel="noopener noreferrer"' : '' ?>><?= htmlspecialchars($link['label']) ?><span aria-hidden="true">→</span></a><?php endforeach; ?></nav><?php endif; ?>
  </main>
  <?php require dirname(__DIR__) . '/includes/footer.php'; ?>
  <script src="assets/js/pdp.js"></script>
</body>

</html>
