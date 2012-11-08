<?php

include_once('../_globals/functions.inc.php');


/* Block certain IPs */
$banned = array('/^91\.201/');

foreach($banned as $v) {
  if (preg_match($v, $_SERVER['REMOTE_ADDR'])) {
    echo 'SPAM filter triggered.';
    exit;
  }
}


/* Block certain requests */
$filter = '/viagra|cialis|vigara|cilais|mailto|href\=|\[url|\[link/i';

foreach ($_POST as $k=>$v) {
  if (eregi("content-type", $v) || preg_match($filter, $v)) {
    echo 'SPAM filter triggered';
    exit;
  }
}


$errors = false;
if (isset($_POST['auth'])) {
  if ((($_POST['auth']/date('wW'))+(30*60*10)) > date("U")) {
    $types = array('name', 'email', 'phone', 'message');
    $error_types = array(
      'name'=>'<p>You must enter your name so I can address you properly.</p>',
      'email'=>'<p>How can I contact you if you don\'t enter an email address?</p>',
      'message'=>'<p>As much as I try, I am not a mindreader. Please enter a worthwhile message.</p>'
    );

    $message = '';
    foreach ($types as $v) {
      if ((isset($error_types[$v]) && !empty($_POST[$v])) || !isset($error_types[$v])) {
        $message .= ucfirst(eregi_replace("^(cf_)", '', $v)) .": ". $_POST[$v] ."\n";
      } else {
        $errors .= ((!empty($errors)) ? "\n" : '') . $error_types[$v];
      }
    }

    $message .= "IP Address: ". $_SERVER['REMOTE_ADDR'] ."\n";

    if (empty($errors)) {
      if (mail('Greg Leuch <contact@gleuch.com>', 'gleuch.com Contact Message', $message, "From: Greg Leuch <contact_form@gleuch.com>\r\n")) {
        header('Location: /contact?thanks');
        exit;
      } else {
        header('Location: /contact?error');
        exit;
      }
    }
  } else {
    $errors = '<p>You did not submit the form within the allotted time. Please submit your content again.</p>';
  }
}





/* ---------------------------------------------------------------------------- */



$nav_section = 'contact';

$page_title = 'Contact Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="contact">
 <div id="template_wrapper" class="c">
  <div class="rel c">

   <article id="content">

    <?php include_once('../_globals/flash.inc.php') ?>

    <section class="intro">
     <h1>Contact Greg</h1>
     <h4>It is easier than you might think.</h4>
    </section>

    <?php if (isset($_GET['thanks']) || (isset($_POST['auth']) && empty($errors))): ?>
     <p class="large serif">Thanks for sending a message. Count to one thousand (slowly) and then check your email inbox for my response.</p>

    <?php else: ?>
     <p class="large serif">Fill out the form, send me an email, or <a href="https://twitter.com/gleuch" target="_blank">tweet at me</a>. I'll get back with you shortly.</p>


      <?php if ($errors): echo "<div id=\"contact_errors\">". $errors ."</div>"; endif; ?>

      <form action="/contact/" method="post">
       <input type="hidden" name="auth" value="<?php echo date("U") * date("wW"); ?>" />
       <fieldset>
        <div class="row">
         <div class="row_label"><label for="contact_name">Name</label></div>
         <div class="row_items"><input id="contact_name" type="text" class="tb" name="name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" /><span class="req">*</span></div>
        </div>
        <div class="row">
         <div class="row_label"><label for="contact_email">Email</label></div>
         <div class="row_items"><input id="contact_email" type="text" class="tb" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" /><span class="req">*</span></div>
        </div>
        <div class="row">
         <div class="row_label"><label for="contact_phone">Phone</label></div>
         <div class="row_items"><input id="contact_phone" type="text" class="tb" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>" /></div>
        </div>
        <div class="row">
         <div class="row_label"><label for="contact_message">Message</label></div>
         <div class="row_items"><textarea id="contact_message" name="message"><?php if (isset($_POST['message'])) echo $_POST['message']; ?></textarea><span class="req">*</span></div>
        </div>
       </fieldset>
       <fieldset class="buttons">
         <button>Send Message</button>
       </fieldset>
      </form>

    <?php endif; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Work Availablity</h4>
     <p>Available for part-time, uniquely creative freelance work.</p>
    </section>

    <section class="box">
     <h4>Other Methods</h4>
     <ul>
      <li><span class="grey dc">Twitter</span> <a class="dc" href="https://twitter.com/gleuch" title="Twitter" target="_blank">@gleuch</a></li>
      <li><span class="grey dc">Email</span> <script type="text/javascript">_en="&#109;&#101;"; _ed="&#103;&#108;&#101;&#117;&#099;&#104;&#046;&#099;&#111;&#109;"; document.write('<a class="dc" href="&#109;&#097;&#105;&#108;&#116;&#111;:'+_en+'@'+_ed+'">'+_en+'@'+_ed+'</a>');</script><noscript>&#109;&#101; (at) &#103;&#108;&#101;&#117;&#099;&#104;&#046;&#099;&#111;&#109;</noscript></li>
     </ul>
    </section>
   </aside>

  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>