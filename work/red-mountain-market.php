<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


$nav_section = 'work';

$page_title = 'Red Mountain Market - Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="client work_item">
 <div id="template_wrapper" class="c">
  <div id="content_area" class="work_item rel c">

   <article id="content">

    <?php include_once('../_globals/flash.inc.php') ?>

    <div class="item_intro rel">
     <section class="intro">
      <h4>E-Commerce Website</h4>
      <h1>Red Mountain Market</h1>
      <p class="large serif">Online grocery delivery service.</p>
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
     <p class="medium serif">Red Mountain Market is a online grocery retailer in Birmingham, AL that allows customers to order their groceries online and schedule for delivery or pick up. The grocery retailer served the major Birmingham area, including Downtown, Vestavia Hills, Pelham, and Mountain Brook.</p>
     <p class="medium serif">More than just a online grocery retailer, Red Mountain Market was designed for multiple audiences, from the busy individual to nursing home residents. The web sites became a one-stop online resource for customers to shop from hundreds of grocery and household items, shop for gifts and gift baskets, view and print quick recipes, locate community events, and even donate to local charities.</p>
    </section>

    <section class="challenge paragraph c">
     <h3>Challenge</h3>
     <p class="medium serif">Red Mountain Market approached Virticle with a large bill of challenges. We not only had to create a customized shopping cart for food, alcohol, and household items, but also create a multi-function checkout system to determine delivery areas, schedule deliveries & pickups, allow customers to donate their orders to charity, create one-click shopping lists, create tools to allow for recipes, and even accept monetary charity donations.</p>
    </section>

    <section class="solution paragraph c">
     <h3>Solution</h3>
     <p class="medium serif">The design approach to Red Mountain Market focused on home-grown and earthy colors. To make the interface simple, a consistent navigation system was implemented in a compact, horizontal format with a drop-down menu for browsing product categories. Identifying the user-experience approach to scheduling deliveries and checking out was broken out into three steps.</p>
    </section>

    <section class="result paragraph c">
     <h3>Result</h3>
     <p class="medium serif">Red Mountain Market launched with great praise and acceptance from the community, serving a wide range of customers, including local businesses, busy families, and nursing home residents. Red Mountain Market was even recommended by a local group for the blind for its web accessibility and ease of use.</p>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Tasks</h4>
     <p>design, develop</p>
     <h4>Client</h4>
     <p>Red Mountain Market</p>
     <h4>Firm</h4>
     <p>Virticle Corp</p>
     <h4>Launched</h4>
     <p>Jan 2008</p>
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