<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


// WILL PAINT 4 FOOD
// 2007
// installation


$nav_section = 'projects';

$page_title = 'fuckCAPTCHA - Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="projects work_item">
 <div id="template_wrapper" class="c">
  <div class="rel c">

   <article id="content" class="work_item">

    <?php include_once('../_globals/flash.inc.php') ?>

    <div class="item_intro rel">
     <section class="intro">
      <h4>Code</h4>
      <h1>fuckCAPTCHA</h1>
      <p class="large serif">fuckCAPTCHA, an open-source alternative to the spam prevention and evil humanization of human brain cycles for corporate pet projects.</p>
     </section>

     <section class="featured_images shifted rel">
      <div class="carousel">
       <iframe src="http://player.vimeo.com/video/9188525" width="500" height="375" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
      </div>
     </section>
    </div>

    <section class="statement paragraph c">
     <h3>Statement</h3>
     <p class="medium serif">fuckCAPTCHA, an open-source alternative to the spam prevention & evil humanization of human brain cycles for corporate pet projects. <a href="http://github.com/gleuch/fuckCAPTCHA" class="b" target="_blank">Add this to your site!</a></p>
     <p class="medium serif"><strong>See it in action:</strong></p>
     <div class="c" style="width: 350px; margin: 0 auto;">
      <script type="text/javascript" src="http://fffff.at/widgets/fuckCAPTCHA/fuckCAPTCHA.js"></script><script type="text/javascript">if (FATLab_fuckCAPTCHA) {FATLab_fuckCAPTCHA.Values.Theme='default'; FATLab_fuckCAPTCHA.Make();}</script>
     </div>
    </section>

    <section class="explanation paragraph c">
     <h3>Explanation</h3>

     <p class="medium serif">The founder of reCAPTCHA created their tool to prevent spam and help humanize OCR scanning errors, later noting that he had "unwittingly created a system that was frittering away, in ten-second increments, millions of hours of a most precious resource: human brain cycles."</p>
     <p class="medium serif">In Sept 2009, Google bought reCAPTCHA, assumingly to help with the work of their book scanning project.</p>
     <p class="medium serif">So why support them when you can reaffirm your efforts of enforcing the fuck corporate culture by typing it in for every time to need to verify yourself as a non-evil human.</p>
     <p class="medium serif"><strong>Includes hearing impared audio captchas!</strong></p>

    </section>

    <hr />

    <section class="exhibitions grouped_list c">
     <h3>Exhibitions</h3>
     <dl>
      <dt><em>Futurity Now!</em>, transmediale.10</dt>
      <dd>Haus der Kulturen der Welt<br>Feb 2010</dd>
     </dl>
    </section>
   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Code Repo</h4>
     <ul>
      <li class="to"><a href="http://github.com/gleuch/fuckCAPTCHA" target="_blank">github.com/gleuch/fuckCAPTCHA</a></li>
     </ul>
    </section>

    <section class="box">
     <p>A project from the <a href="http://fffff.at/fuck-google/">"Fuck Google"</a> collaboration by <a href="http://fffff.at">Free Art &amp; Technology Lab (F.A.T. Lab)</a> at <a href="http://www.transmediale.de/en/free-art-and-technology-lab-ft-lab">transmediale.10</a>.</p>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>