<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


$nav_section = 'work';

$page_title = 'Magma - Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="client work_item">
 <div id="template_wrapper" class="c">
  <div class="rel c">

   <article id="content" class="work_item">

    <?php include_once('../_globals/flash.inc.php') ?>

    <div class="item_intro rel">
     <section class="intro">
      <h4>Web Application</h4>
      <h1>Magma</h1>
      <p class="large serif">An entry point for online videos.</p>
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

    <section class="about paragraph c">
     <h3>About</h3>
     <p class="medium serif">Magma is an online video statistic aggregator and entry point for online video.</p>
     <p class="medium serif">Founded in 2009, Magma represents Rocketboom's first major entrance into web-based products, relying on its knowledge on the online video and internet culture landscape. Understanding and analyzing videos, especially viral and popular videos, gives insight to online video viewership trends and understanding of current internet culture.</p>
     <p class="medium serif">Magma is based on statistics gathering and online watching, agnostic to any specific online video player or source. Stats and videos are gathered from many sources, including providers, news sites, blogs, social websites, and more, allowing Magma to provide a real-time understanding of trending and viral videos, gathered into our Must Watch section, as well as seeing where on the internet videos are gathering increasing views and chatter.</p>
    </section>

    <section class="solution paragraph c">
     <h3>Solution</h3> 
     <p class="medium serif">Developed by Jamie Wilkinson and Greg Leuch, Magma's first version was written in six months, combining a back-end video and statistics scraping system with a front-end interface for watching & collecting videos, as well as showcasing viewing and social stats about these videos. The application is built using Ruby on Rails, with extensive use of JSON data (utilizing our own API for data requests).</p>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
      <dt><a target="_blank" href="http://techcrunch.com/2009/05/24/our-first-taste-of-magma/">TechCrunch</a> <a class="nb" target="_blank" href="http://techcrunch.com/2009/05/24/our-first-taste-of-magma/">[1]</a> <a class="nb" target="_blank" href="http://techcrunch.com/2009/07/10/magma-bubbles-up-300-invites-for-techcrunch-readers/">[2]</a></dt>
      <dt><a target="_blank" href="http://mashable.com/2009/08/25/magma/">Mashable</a></dt>
      <dt><a target="_blank" href="http://www.readwriteweb.com/archives/magma_the_billboard_charts_of_video.php">ReadWriteWeb</a></dt>
      <dt><a target="_blank" href="http://gigaom.com/video/rocketbooms-magma-aims-to-be-ultimate-viral-tracker/">Gigaom</a></dt>
      <dt><a target="_blank" href="http://www.artfagcity.com/2009/08/25/magma-the-tv-guide-of-web-video/">Art Fag City</a></dt>
      <dt><a target="_blank" href="http://www.killerstartups.com/video-music-photo/mag-ma-the-best-videos-on-the-web-in-the-same-place/">KillerStartups</a></dt>
     </dl>
    </section>

    <?php include '../_globals/work.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Tasks</h4>
     <p>design, develop</p>
     <h4>Client</h4>
     <p>Rocketboom</p>
     <h4>Launched</h4>
     <p>Jun 2009</p>
     <p><a target="_blank" href="http://mag.ma">mag.ma</a></p>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>