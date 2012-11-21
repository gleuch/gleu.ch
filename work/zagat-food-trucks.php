<?php

include_once('../_globals/functions.inc.php');

// Zagat Food Trucks
// JESS3 / Zagat
// web application
// 2011


$nav_section = 'work';

$page_title = 'Zagat Food Trucks - Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="projects work_item">
 <div id="template_wrapper" class="c">
  <div id="content_area" class="work_item rel c">

   <article id="content">

    <?php include_once('../_globals/flash.inc.php') ?>

    <div class="item_intro rel">
     <section class="intro">
      <h4>Web Application</h4>
      <h1>Zagat Food Trucks</h1>
      <p class="large serif">Interactive maps for Zagat-rated food trucks.</p>
     </section>

     <section class="featured_images rel">
      <div class="carousel">
       <img src="/assets/work/zagat-food-trucks/item1.png" alt="" title="" border="0" />
      </div>
      <div class="carousel_buttons">
       <a href="javascript:;" class="prev"><i class="icon prev">Previous</i></a>
       <a href="javascript:;" class="next"><i class="icon next">Next</i></a>
      </div>
     </section>
    </div>

    <section class="statement paragraph c">
     <h3>About</h3>
     <p class="medium serif">Zagat wanted to build a web site application that would track the locations of food trucks and allow visitors to filter search results through cuisine, Zagat rating, and proximity. What we delivered was a great, full-screen map that integrated with a large number of food trucks to allow hungry visitors to find their nearby favorite food trucks.</p>
    </section>

    <section class="solution paragraph c">
     <h3>Solution</h3>
     <p class="medium serif">One of the biggest challenges to solve is getting food trucks to announce their openings and locations. With all the available technologies, we chose to have food trucks send out a location-aware tweet. These tweets were scraped through Twitter's API, determined their open status, a location derived from their plan, and marked on a map. However, some food trucks had semi-permanent locations, in which a online schedule was built to accommodate those food trucks.</p>
     <p class="medium serif">In the end, over 30 food trucks in NYC were participating on the launch of the site, attracting attention for its ease-of-use for lunch-time works wanting a great snack nearby.</p>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
      <dt><a target="_blank" href="http://mashable.com/2010/11/09/zagat-food-trucks/">Mashable</a></dt>
      <dt><a target="_blank" href="http://www.psfk.com/2010/11/zagat-announces-food-truck-tracking-site.html">PSFK</a></dt>
     </dl>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Tasks</h4>
     <p>develop</p>
     <h4>Client</h4>
     <p>Zagat</p>
     <h4>Firm</h4>
     <p>JESS3</p>
     <h4>Launched</h4>
     <p>Nov 2011</p>
     <p><a target="_blank" href="http://foodtrucks.zagat.com">foodtrucks.zagat.com</a></p>
    </section>
   </aside>

   <?php include '../_globals/work.footer.inc.php'; ?>

  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>