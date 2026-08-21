<?php $footerClass = ($pageType ?? 'home') !== 'home' ? 'pdp-footer' : ''; ?>
<footer<?= $footerClass ? ' class="' . $footerClass . '"' : '' ?> id="footer">
  <div class="footer-brand"><div class="footer-mark">F</div><p>Where time becomes legacy.<br>Discover watches designed for defining moments.</p><small>© <?= date('Y') ?> Fabius. All rights reserved.</small></div>
  <div><h3>The House</h3><a href="house-of-fabius.php">Our Story</a><a href="our-philosophy.php">Our Philosophy</a><a href="craftsmanship.php">Craftsmanship</a><a href="art-of-timekeeping.php">The Art of Timekeeping</a><a href="become-a-partner.php">Become a Partner</a></div>
  <div><h3>Collections</h3><a href="collections.php">All Collections</a><a href="mens-watches.php">Men’s Watches</a><a href="womens-watches.php">Women’s Watches</a><a href="automatic-watches.php">Automatic</a><a href="quartz-watches.php">Quartz</a><a href="limited-editions.php">Limited Editions</a></div>
  <div><h3>Client Care</h3><a href="watch-care-guide.php">Watch Care Guide</a><a href="warranty-service.php">Warranty &amp; Service</a><a href="faqs.php">FAQs</a><a href="contact.php">Contact Us</a><a href="shipping-policy.php">Shipping</a><a href="returns-exchanges.php">Returns &amp; Exchanges</a><a href="privacy-policy.php">Privacy Policy</a><a href="terms-conditions.php">Terms &amp; Conditions</a></div>
  <div class="footer-wordmark" aria-hidden="true">FABIUS</div>
</footer>
