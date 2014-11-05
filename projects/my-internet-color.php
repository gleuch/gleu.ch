<?php

include_once('../_globals/functions.inc.php');

// My Internet Color
// 2014
// algoriths, browser extensions, data, internet


$nav_section = 'projects';

$page_title = 'My Internet Color - Greg Leuch: Creative + User Interaction';

array_push($_flashes, array('type' => '', 'msg' => 'on-going project - check back often for updates!'));

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
      <h4>Applictions &amp; Algorithms, Internet</h4>
      <h1>My Internet Color <ins class="new">New!</ins></h1>
      <p class="large serif">An experiment in quantified self, browsing history, and color data.</p>
     </section>

     <section class="featured_images rel">
      <div class="carousel">
       <img src="/assets/projects/myinternetcolor/item1.png" alt="" title="" border="0" />
       <img src="/assets/projects/myinternetcolor/item2.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/myinternetcolor/item3.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/myinternetcolor/item4.png" alt="" title="" border="0" class="hide" />
      </div>
      <div class="carousel_buttons">
       <a href="javascript:;" class="prev"><i class="icon prev">Previous</i></a>
       <a href="javascript:;" class="next"><i class="icon next">Next</i></a>
      </div>
     </section>
    </div>

    <section class="statement paragraph c">
     <h3>Statement</h3>
     <p class="medium serif">Is there a correlation of our Internet browsing habits and the average color of a web page? Are there visual trends we partake throughout the day? What do we ultimately look at online?</p>
    </section>

    <hr />

    <section class="explanation paragraph c">
     <h3>Explanation</h3>
     <p class="medium serif">After the <a href="http://whatcolor.istheinter.net">WhatColor.IsTheInter.net/?</a> piece, I became curious in my browsing habits and wanted to partake on a visual representation of my daily browsing history. More surprising for me is not the daily visual imagery that is created from the project, but the quantity of pages I view daily. Although our generation skims more than reads, it was that I was averaging over 300 pages daily &mdash; quite a lot of clicks and scanning of information!</p>
     <p class="medium serif">Following a similar process used for WhatColor.IsTheInter.net/?, I created a small app that is run locally on my laptop. A listener script waits for connections from a Chrome browser extension that updates the database with the latest pages I have visited. This extension also shows me the current day's average color and stats in the toolbar. A process job then goes through the queue, loads the page I visited, snapshots it, and determines the average pixel color. This information is then saved back into the database. At the end of each night, another script generated a SVG image of the day's browsing history, which is then posted manually to Instagram and shared among other social networks.</p>
     <p class="medium serif">This project, a work in progress, is evolving from a personal capture of information. Perhaps this will become an interactive piece accessible and useable by many others, however until then, you can continue to view the latest images on <a href="https://instagram.com/gleuch" target="_blank">my Instagram</a>.</p>
    </section>

    <section class="roadmap paragraph c">
     <h3>Roadmap</h3>
     <p class="medium serif"><em>This project is ongoing, with an eventual release of a web site and browser extension for viewing your own visual Internet history. Check back for more information or follow <a href="https://instagram.com/gleuch">@gleuch on Instagram</a>.</em></p>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Code</h4>
     <ul>
      <li><a href="https://github.com/gleuch/my-internet-color" target="_blank">v0.1 on Github</a></li>
     </ul>
    </section>
    <section class="box">
     <ul>
      <li><strong>Related Project:</strong> <a href="http://whatcolor.istheinter.net/?" target="_blank">WhatColor.IsTheInter.net/?</a></li>
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