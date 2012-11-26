<?php

include_once('../_globals/functions.inc.php');

$fname = dirname(__FILE__) .'/../newsletter.txt';

foreach($banned_ips as $v) {
  if (preg_match($v, $_SERVER['REMOTE_ADDR'])) {
    echo 'SPAM filter triggered.';
    exit;
  }
}

// phpinfo(); exit;

/* Block certain requests */
$filter = '/viagra|cialis|vigara|cilais|mailto|href\=|\[url|\[link/i';

foreach ($_POST as $k=>$v) {
  if (eregi("content-type", $v) || preg_match($filter, $v)) {
    echo 'SPAM filter triggered';
    exit;
  }
}

if (!empty($_COOKIE['newsletter'])) {
  header("Location: /");
  exit;
}

if (isset($_POST['auth'])) {
  if ((($_POST['auth']/date('wW'))+(30*60*10)) > date("U")) {
    if (!empty($_POST['email'])) {
      $email = preg_replace('/[\r\t]+/m', '', $_POST['email']);
      $email = preg_replace('/(((\r)?\n.*))?$/', '', $email);

      if (preg_match('/\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\Z/i', $email)) {
        if (!is_file($fname)) @touch($fname);
        @file_put_contents($fname, $email ."\n", FILE_APPEND);
        @chmod($fname, 0755);

        setcookie('newsletter', date("U"), (time()+60*60*24*365), '/');
        
        $url = (isset($_POST['referrer']) ? $_POST['referrer'] : $_SERVER['HTTP_REFERER']);
        if ($url == $_SERVER['PHP_SELF']) $url = '/';
        header("Location: ". $url .'?newsletter_thanks=1');
        exit;

      } else {
        array_push($_flashes, array('type' => 'error', 'msg' => 'Your email address is invalid. Please try again.'));
      }
    } else {
      array_push($_flashes, array('type' => 'error', 'msg' => 'There was an error with your newsletter signup. Please try again.'));
    }
  } else {
    array_push($_flashes, array('type' => 'error', 'msg' => 'There was an error with your newsletter signup. Please try again.'));
  }
}


$page_title = 'Newsletter Signup - Greg Leuch: Creative + User Interaction';
$meta_robots = 'noindex,follow';

?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="error_page">
 <div id="template_wrapper" class="c">
  <div id="content_area" class="rel c">

   <article id="content">

    <?php include_once('../_globals/flash.inc.php') ?>

    <?php $newsletter_content_area = true; ?>
    <?php include_once('../_globals/newsletter.inc.php'); ?>

    <p class="serif"><a href="/">Return to homepage &raquo;</a></p>
   </article>

   <aside id="sidebar">

   </aside>

  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>