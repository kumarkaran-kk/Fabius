<?php $footerClass = ($pageType ?? 'home') !== 'home' ? 'pdp-footer' : ''; ?>
<footer<?= $footerClass ? ' class="' . $footerClass . '"' : '' ?> id="footer">
  <div class="footer-brand">
    <div class="footer-mark">F</div>
    <p>Get insider information about<br>exclusive offers, events and more.</p>
    <small>2026 Fabius. All rights reserved</small>
  </div>
  <div>
    <h3>Information</h3><a href="#">Shipping</a><a href="#">Warranty &amp; Authenticity</a><a href="#">Terms &amp; Conditions</a><a href="#">Privacy Policy</a><a href="#">Sustainability</a>
  </div>
  <div>
    <h3>Services</h3><a href="#">Sale</a><a href="#">Quick Ship</a><a href="#">New Designs</a><a href="#">Protection Plan</a><a href="#">Gift Cards</a>
  </div>
  <div>
    <h3>Help</h3><a href="#">Contact Us</a><a href="#">About Us</a><a href="#">Reviews</a><a href="#">Terms of Service</a><a href="#">Refund Policy</a>
  </div>
  <div class="footer-wordmark" aria-hidden="true">FABIUS</div>
</footer>
