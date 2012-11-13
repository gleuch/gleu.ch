<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


// Shaved Bieber
// 2010
// browser extensions


$nav_section = 'projects';

$page_title = 'lowercase kanye - Greg Leuch: Creative + User Interaction';


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
      <h4>Website</h4>
      <h1>lowercase kanye</h1>
      <p class="large serif">Repairing the damage from Kanye West's CAPS LOCK key, one Yeezy blog post at a time.</p>
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
     <p class="medium serif">We all know and love Mr. Kanye West and his <a href="http://kanyewest.com/blog" rel="nofollow">blog</a>. And while his CAPS LOCK rants are his best online trademark, it is difficult to read his rants. We here at F.A.T. Lab have take the time to clean up Kanye's blog and repair the damage done by his CAPS LOCK key.</p>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
       <dt><a target="_blank" href="http://animalnewyork.com/2009/05/thank-goodness-its-still-kanye-webst-week/">Animal New York</a></dt>
       <dt><a target="_blank" href="http://idolator.com/5230972/5230972">Idolator</a></dt>
       <dt><a target="_blank" href="http://www.prefixmag.com/news/lowercase-kanye-a-site-that-makes-kanyes-blog-post/29012/">Prefix</a></dt>
       <dt><a target="_blank" href="http://ruleofnext.com/2009/05/lowercase-kanye/">Next</a></dt>
     </dl>
    </section>

    <?php include '../_globals/projects.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <p>A collaboration with bad ass mother fucker <a href="http://www.evan-roth.com">Evan Roth</a>.</p>
    </section>

    <section class="box">
     <h4>Code Repo</h4>
     <ul>
      <li class="to"><a href="http://github.com/gleuch/lowercase-kanye" target="_blank">github.com/gleuch/lowercase-kanye</a></li>
     </ul>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>