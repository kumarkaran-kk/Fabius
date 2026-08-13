<?php
$pageType = $pageType ?? 'home';
$isProductPage = $pageType === 'product';
$isInnerPage = $pageType !== 'home';
?>
<?php if ($isInnerPage): ?>
<header class="pdp-header">
  <button class="pdp-menu" aria-label="Open menu" aria-expanded="false"><i></i><i></i></button>
  <a class="pdp-logo" href="index.php" aria-label="Fabius home">FABIUS</a>
  <nav class="pdp-actions header-utilities" aria-label="Utility navigation">
    <a href="search.php" aria-label="Search Fabius watches" data-label="Search"><span class="utility-icon search-icon"></span></a>
    <a href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit official retail portal, IndieKonnect" data-label="Retail Portal"><span class="utility-icon portal-icon"></span></a>
  </nav>
  <nav class="pdp-mobile-nav" aria-label="Main navigation">
    <a href="index.php">Home</a><a href="search.php">Search</a><a href="mens-watches.php">Men's Watches</a><a href="womens-watches.php">Women's Watches</a><a href="index.php#story">Our Story</a><a href="#footer">Contact</a>
  </nav>
</header>
<?php else: ?>
<header class="site-header">
  <button class="icon-button menu-toggle" aria-label="Open menu" aria-expanded="false"><span></span><span></span></button>
  <a class="wordmark" href="#top" aria-label="Fabius home">FABIUS</a>
  <nav class="desktop-actions header-utilities" aria-label="Utility navigation">
    <a href="search.php" aria-label="Search Fabius watches" data-label="Search"><span class="utility-icon search-icon"></span></a>
    <a href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit official retail portal, IndieKonnect" data-label="Retail Portal"><span class="utility-icon portal-icon"></span></a>
  </nav>
  <nav class="mobile-nav" aria-label="Main navigation">
    <a href="search.php">Search</a><a href="mens-watches.php">Men's Watches</a><a href="womens-watches.php">Women's Watches</a><a href="#story">Our story</a><a href="#footer">Contact</a>
  </nav>
</header>
<?php endif; ?>
