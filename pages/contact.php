<?php 

    require dirname(__DIR__) . '/parts/header.php';

?>
<h1>Contact Us</h1>

<p>We would love to hear from you! If you have any questions or would like to learn more about our products and services, please don't hesitate to contact us.</p>

<!-- Contact form -->
<form>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Enter your email">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea class="form-control" id="message" rows="3" placeholder="Enter your message"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php

    require dirname(__DIR__) . '/parts/footer.php';

    