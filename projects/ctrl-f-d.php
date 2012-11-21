<?php

include_once('../_globals/functions.inc.php');

// Ctrl+F'd
// 2009
// bookmarklet


$nav_section = 'projects';

$page_title = 'Ctrl+F\'d - Greg Leuch: Creative + User Interaction';


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
      <h4>Bookmarklet</h4>
      <h1>Ctrl+F'd</h1>
      <p class="large serif">A playful experiment in "censoring" a web page by hiding text and images behind blocks.</p>
     </section>

     <section class="featured_images rel">
      <div class="carousel">
       <img src="/assets/projects/ctrl-f-d/item1.png" alt="" title="" border="0" />
       <img src="/assets/projects/ctrl-f-d/item2.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/ctrl-f-d/item3.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/ctrl-f-d/item4.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/ctrl-f-d/item5.png" alt="" title="" border="0" class="hide" />
       <img src="/assets/projects/ctrl-f-d/item6.png" alt="" title="" border="0" class="hide" />
      </div>
      <div class="carousel_buttons">
       <a href="javascript:;" class="prev"><i class="icon prev">Previous</i></a>
       <a href="javascript:;" class="next"><i class="icon next">Next</i></a>
      </div>
     </section>
    </div>

    <section class="statement paragraph c">
     <p class="medium serif">With recent mistakes by companies and organizations not knowing how to properly censor online documents, its easy to see why people believe the text they can't see can't be read. <strong>And with computer illiterate people like <a href="http://mediamatters.org/research/200902130016" target="_blank">Rush Limbaugh</a>, it is easy to befuddle them with the appearance of censored text on the web pages they commonly visit.</strong></p>
     <p class="medium serif">Try it out on your fffffavorite web pages. Grab the bookmarklet below and drag into the bookmarklet bar (or right-click as 'Bookmark/Favorite this Link').</p>
     <p class="medium serif tc" style="padding: 15px 0;"><a class="button" href="javascript:function%20ctrl_f_d(u)%7Bvar%20s=document.createElement('script');s.setAttribute('language','JavaScript');s.setAttribute('src',u);document.body.appendChild(s);%7Dctrl_f_d('http://assets.gleuch.com/projects/ctrl-f-d/ctrl-f-d.min.js?v=2');">Ctrl+F'd Bookmarket</a></p>
    </section>

    <hr />

    <section class="exhibitions grouped_list c">
     <h3>Exhibitions</h3>

     <dl>
      <dt><em>Versions</em>, Netherlands Media Arts Institute</dt>
      <dd>Amsterdam, Netherlands<br />Nov 2009</dd>
     </dl>
     <dl>
      <dt><em>Futurity Now!</em>, transmediale.10</dt>
      <dd>Haus der Kulturen der Welt<br />Feb 2010</dd>
     </dl>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
      <dt><a target="_blank" href="http://www.rhizome.org/editorial/2914">Rhizome.org</a></dt>
      <dt><a target="_blank" href="http://www.psfk.com/2009/08/fat-fatlab-grl-graffitiresearchlab-internet-censorship-rush-limbaugh-china-twitte.html">PSFK</a></dt>
      <dt><a target="_blank" href="http://www.artzilla.org/add-ons/ctrlfd/">Artzilla.org</a></dt>
      <dt><a target="_blank" href="http://b1ff.org/2009/08/01/3040/all-the-noise-thats-fit-to-block/">B1FF.org</a></dt>
      <dt><a target="_blank" href="http://ffffound.com/image/35b6d2e71f14b249eb3b7df7c0ff1c593c1a12ae">FFFFound (Screenshot)</a></dt>
      <dt><a target="_blank" href="http://justinlanglois.com/courses/0127245/2009/10/12/ctrl-f'd/">Emily Hamid, University of Windsor, School of Visual Arts, Digital Media and Images</a></dt>
     </dl>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Code Repo</h4>
     <ul>
      <li><a href="https://www.github.com/gleuch/ctrl-f-d" target="_blank">github.com/gleuch/ctrl-f-d</a></li>
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