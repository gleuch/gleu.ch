<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


$nav_section = 'work';

$page_title = 'Auburn Art & College Football Art - Greg Leuch: Creative + User Interaction';


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
      <h4>E-Commerce Website</h4>
      <h1>Auburn Art &amp; <br /> College Football Art</h1>
      <p class="large serif">All-in-one shops for your college football art needs.</p>
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
     <p class="medium serif">AuburnArt.com and CollegeFootballArt.com are two sister web sites that sell collegiate art, framed prints, collectables, and other related products. While AuburnArt.com sells only Auburn University related products, CollegeFooballArt.com sells products for most major colleges & universities. Both web sites have become pillars in their industry for how the manage, sell, and ship their products. CollegeFootballArt.com is uniquely known for themeing each team's section with the team's colors.</p>
    </section>

    <section class="challenge paragraph c">
     <h3>Challenge</h3>
     <p class="medium serif">Maintaining one site is difficult, but keeping the code consistent between two unique web sites requires dedicated teamwork. Satsuma approached us to redesign and develop AuburnArt.com and its larger sister, CollegeFootballArt.com. They wanted to keep the core customer and administrative features on the site similar. The front-end differences, however, required a some impressive plays. CollegeFootballArt.com not only had 40 teams to manage, but each team section required themeing based on the team's colors.</p>
    </section>

    <section class="solution paragraph c">
     <h3>Solution</h3>
     <p class="medium serif">Both AuburnArt.com and CollegeFootballArt.com were analyzed to make the entire checkout process straightforward, allowing for multiple shipping options, payment options, and other configurations. AuburnArt.com took the lead with its design and structuring of code. CollegeFootballArt.com made the next play, taking the completed AuburnArt.com site and building out a more comprehensive templating system to accommodate better category navigation, graphics, and color themes.</p>
    </section>

    <section class="result paragraph c">
     <h3>Result</h3>
     <p class="medium serif">The re-designs of AuburnArt.com and CollegeFootballArt.com made a game-changing touchdown and continue to pull in large numbers of customers on a daily basis while managing over 15,000 collegiate products.</p>
    </section>

    <?php include '../_globals/work.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Tasks</h4>
     <p>design, develop</p>
     <h4>Client</h4>
     <p>Satsuma Enterprises</p>
     <h4>Firm</h4>
     <p>Virticle Corp</p>
     <h4>Finished</h4>
     <p>Sept 2007</p>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>