<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Photos will be posted shortly.'));


// WILL PAINT 4 FOOD
// 2007
// installation


$nav_section = 'projects';

$page_title = 'WILL PAINT 4 FOOD - Greg Leuch: Creative + User Interaction';


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
      <h4>Installation</h4>
      <h1>WILL PAINT 4 FOOD</h1>
      <p class="large serif">WILL PAINT 4 FOOD was a prototype for a new campagin of artist statements recreated in the form of outdoor advertising.</p>
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
     <p class="medium serif">WILL PAINT 4 FOOD was a prototype for a new campaign of artist statements recreated in the form of outdoor advertising. Utilizing 133 10mm, 45000mcd blue LED lights to spell out the phrase on the front facade of the fine arts building on the Auburn University campus, the phrase was selected to provoke thought about the role of an artist versus the common stereotype of the "starving artist". Even down to the lack of spelling, the piece encompassed the intention of an art school for being a place of learning, not just in the arts, but in a broad range of subjects.</p>
    </section>

    <section class="explanation paragraph c">
     <h3>Explanation</h3>
     <p class="medium serif">The WILL PAINT 4 FOOD sign was hung on the outside of Biggin Hall for nearly two weeks. Over that time, it generated a lot of buzz from passers-by. Its location, on the front facade of the art building, is located on the famous Toomer's Corner in downtown Auburn, AL. This location was important as it one of the most traveled places by students, but also heavily traveled by residents of Auburn. The piece could be seen by both drivers and pedestrians along College Street.</p>
     <p class="medium serif">Unfortunately this piece was destroyed in a severe, mid-May thunderstorm.</p>
    </section>

   </article>

   <!-- <aside id="sidebar">
    <section class="box">

    </section>
   </aside> -->

   <?php include '../_globals/projects.footer.inc.php'; ?>

  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>