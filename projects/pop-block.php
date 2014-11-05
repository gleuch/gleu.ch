<?php

include_once('../_globals/functions.inc.php');

// Pop Block
// 2012
// web application, browser extensions


$nav_section = 'projects';

$page_title = 'Pop Block - Greg Leuch: Creative + User Interaction';


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
      <h4>Web Application, Browser Extensions</h4>
      <h1>Pop Block</h1>
      <p class="large serif">Manage your content bubble by controlling aspects of your online experience.</p>
     </section>

     <section class="featured_images rel">
      <div class="carousel">
       <img src="/assets/projects/pop-block/item1.png" alt="" title="" border="0" />
       <img src="/assets/projects/pop-block/item2.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/pop-block/item3.png" alt="" title="" border="0" class="hide" />
      </div>
      <div class="carousel_buttons">
       <a href="javascript:;" class="prev"><i class="icon prev">Previous</i></a>
       <a href="javascript:;" class="next"><i class="icon next">Next</i></a>
      </div>
     </section>
    </div>

    <section class="statement paragraph c">
     <h3>Statement</h3>
     <p class="medium serif"><a href="https://pop-block.com" target="_blank">Pop Block</a> wants to help users manage their content bubble, by allowing them to control content visibility while browsing the web. Blocking and hiding content is notably achieved through advertising blocking extensions, but the everyday web content we consume contains many more things we may not wish to see.</p>
     <p class="medium serif">By launching a customizable keyword blocker through browser extensions, Pop Block gives users the ability to control their engagement with content while browsing. This approach allows users to manage a list of keywords that synchronize wherever they have installed the extension.</p>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
      <dt><a target="_blank" href="http://thecreatorsproject.com/blog/get-rid-of-things-on-the-internet-you-dont-want-to-see-with-pop-block">The Creators Project</a></dt>
      <dt><a target="_blank" href="http://animalnewyork.com/2012/block-everything-and-anyone-with-a-magical-blissful-ignorance-internet-plug-in/">Animal New York</a></dt>
      <dt><a target="_blank" href="http://www.aux.tv/2012/12/remove-anything-you-want-from-your-browsing-experience-with-pop-block/">AUX.tv</a></dt>
      <dt><a target="_blank" href="http://blog.omusicawards.com/2012/12/sick-of-gangnam-style-chris-brown-andor-drake-heres-the-solution/">MTV's O Music Awards</a></dt>
     </dl>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Website</h4>
     <ul>
      <li><a href="https://pop-block.com" target="_blank">pop-block.com</a></li>
     </ul>
    </section>
   </aside>

   <?php include '../_globals/projects.footer.inc.php'; ?>

  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>