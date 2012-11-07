<?php

include_once('../_globals/functions.inc.php');


// G.R.E.E.D
// 2012
// browser extensions


$nav_section = 'projects';

$page_title = 'Twitter Fileshare - Greg Leuch: Creative + User Interaction';


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
      <h4>Browser Extensions</h4>
      <h1>Twitter Fileshare</h1>
      <p class="large serif">If Twitter is today's Usenet and Usenet was used for file sharing years ago, why shouldn't Twitter be used today for file sharing?</p>
     </section>

     <section class="featured_images rel">
      <div class="carousel">
       <!-- TODO FIGURE OUT LATER -->
      </div>
      <div class="carousel_buttons">
       <a href="javascript:;" class="prev"><i class="icon prev">Previous</i></a>
       <a href="javascript:;" class="next"><i class="icon next">Next</i></a>
      </div>
     </section>
    </div>

    <section class="statement paragraph c">
     <h3>Statement</h3>
     <p class="medium serif">Why is filesharing on Twitter important? Governments and private organizations continue to lock down legitimate file sharing through raids, law suits, and "consumer protection" laws & treaties. And while larger file sharing arenas are targeted, many forget file sharing has existed across many different mediums for decades. Early filesharing beginning with Usenet groups, where the binary data was converted to text characters and reprocessed for download. Facsimile machines follow a similar method of dissemination of binary data. And even ham radio used teletype to transmit photos across long distances by converting photos to ASCII before transmission.</p>
     <p class="medium serif">If Twitter is today's Usenet and Usenet was used for file sharing years ago, why shouldn't Twitter be utilized today for file sharing?</p>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Code Repo</h4>
     <ul>
      <li><a href="http://github.com/gleuch/twitter-fileshare" target="_blank">github.com/gleuch/twitter-fileshare</a></li>
     </ul>
    </section>

    <section class="box">
     <p>A collaboration with <a href="http://theowatson.com/" target="_blank">Theo Watson</a>. A <a href="http://fffff.at" target="_blank">Free Art &amp; Technology Lab</a> project.</p>
     <p>Copyfree. No rights reserved.</p>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>