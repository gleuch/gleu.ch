<?php

include_once('../_globals/functions.inc.php');


$page_title = 'Server Error - Greg Leuch: Creative + User Interaction';
$meta_robots = 'noindex,follow';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="error_page">
 <div id="template_wrapper" class="c">
  <div class="rel c">

   <article id="content">
    <section class="intro">
     <h1>Document Boo-boo</h1>
     <h4>An error has occurred.</h4>
    </section>

    <p class="large serif lt_grey">The document you were looking for had an internal server error.</p>

    <p class="large serif lt_grey"><a href="/">Return to homepage &raquo;</a></p>
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