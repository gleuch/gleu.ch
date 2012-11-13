<?php

// HTML
if (!empty($_COOKIE['newsletter'])):
  if (isset($_GET['newsletter_thanks'])):
?>
<section id="newsletter_signup" class="box <?php if (!!$newsletter_content_area) echo 'intro'; ?>">
 <?php if (!!$newsletter_content_area): ?>
  <h1>Newsletter</h1>
 <?php else: ?>
  <h4>Newsletter</h4>
 <?php endif; ?>

 <p>Thank you for signing up!</p>
</section>
<?php
  endif;

else:
?>
 <section id="newsletter_signup" class="box <?php if (!!$newsletter_content_area) echo 'intro'; ?>">
  <?php if (!!$newsletter_content_area): ?>
   <h1>Newsletter</h1>
  <?php else: ?>
   <h4>Newsletter</h4>
  <?php endif; ?>

  <p>Sign up for updates and other announcements.</p>

  <form action="/newsletter/signup.php" method="post">
   <input type="hidden" name="auth" value="<?php echo date("U") * date("wW"); ?>" />
   <input type="hidden" name="referrer" value="<?php echo (isset($_POST['referrer']) ? $_POST['referrer'] : $_SERVER['REQUEST_URI']); ?>" />
   <input type="text" name="email" value="" placeholder="Your email address..." />
   <button>Sign Up!</button>
  </form>
 </section>
<?php endif; ?>