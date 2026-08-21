<?php
$pageType = $pageType ?? 'home';
$isInnerPage = $pageType !== 'home';
if (!function_exists('fabius_drawer_navigation')) {
  function fabius_drawer_navigation(): void { ?>
    <a class="nav-home" href="index.php">Home</a>
    <div class="nav-group"><a href="house-of-fabius.php">The House of FABIUS</a><div><a href="our-philosophy.php">Our Philosophy</a><a href="craftsmanship.php">Craftsmanship</a><a href="art-of-timekeeping.php">The Art of Timekeeping</a></div></div>
    <div class="nav-group"><a href="collections.php">Collections</a><div><a href="mens-watches.php">Men’s</a><a href="womens-watches.php">Women’s</a><a href="automatic-watches.php">Automatic</a><a href="quartz-watches.php">Quartz</a><a href="limited-editions.php">Limited Editions</a></div></div>
    <div class="nav-group"><a href="watch-care-guide.php">Care &amp; Service</a><div><a href="warranty-service.php">Warranty &amp; Service</a><a href="faqs.php">FAQs</a></div></div>
    <a href="become-a-partner.php">Become a Partner</a><a href="contact.php">Contact</a>
  <?php }
}
?>
<?php if ($isInnerPage): ?>
<header class="pdp-header">
  <button class="pdp-menu" aria-label="Open menu" aria-expanded="false"><i></i><i></i></button>
  <a class="pdp-logo" href="index.php" aria-label="Fabius home">FABIUS</a>
  <nav class="pdp-actions header-utilities" aria-label="Utility navigation"><a href="search.php" aria-label="Search Fabius watches" data-label="Search"><span class="utility-icon search-icon"></span></a><a href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit official retail portal, IndieKonnect" data-label="Retail Portal"><span class="utility-icon portal-icon"></span></a></nav>
  <nav class="pdp-mobile-nav" aria-label="Main navigation"><?php fabius_drawer_navigation(); ?></nav>
</header>
<?php else: ?>
<header class="site-header">
  <button class="icon-button menu-toggle" aria-label="Open menu" aria-expanded="false"><span></span><span></span></button>
  <a class="wordmark" href="index.php" aria-label="Fabius home">FABIUS</a>
  <nav class="desktop-actions header-utilities" aria-label="Utility navigation"><a href="search.php" aria-label="Search Fabius watches" data-label="Search"><span class="utility-icon search-icon"></span></a><a href="https://www.indiekonnect.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit official retail portal, IndieKonnect" data-label="Retail Portal"><span class="utility-icon portal-icon"></span></a></nav>
  <nav class="mobile-nav" aria-label="Main navigation"><?php fabius_drawer_navigation(); ?></nav>
</header>
<?php endif; ?>
