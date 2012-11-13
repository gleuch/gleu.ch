<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


// Shaved Bieber
// 2010
// browser extensions


$nav_section = 'projects';

$page_title = 'KANYEFY - Greg Leuch: Creative + User Interaction';


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
      <h4>Bookmarklet</h4>
      <h1>KANYEFY</h1>
      <p class="large serif">CAP LOCKS THE WEB AS KANYE WEST SEES IT. MAKE YOUR WEB PAGE YEEZY-APPROVED. A F.A.T. LAB PROJECT.</p>
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
     <p class="large serif"><strong>WE ALL KNOW THAT YEEZY <a href="http://www.kanyeuniversecity.com/blog/index.php?em3106=196808_-1__0_~0_-1_6_2008_0_0&amp;co=1" target="_blank">RANTS</a> ARE THE GREATEST, RIGHT????? NOW MAKE EVERY WEB PAGE A KAYNE RANT!!!!!!!!!!!!!</strong></p>
     <p class="medium serif tc" style="padding: 15px 0;"><a class="button" href="javascript:function%20kwt(u)%7Bvar%20s=document.createElement('script');s.setAttribute('language','JavaScript');s.setAttribute('src',u);document.body.appendChild(s);%7Dkwt('http://assets.gleuch.com/code/KANYE-WEB-TOOLS/KANYEFY/KANYEFY.js');">&raquo; KANYEFY &laquo;</a></p>
     <p class="medium serif">DRAG THE BUTTON ABOVE TO UR BOOKMARK BAR (OR RIGHT-CLICK AND 'BOOKMARK/FAVORITE')........ THEN CLICK IT TO MAKE YOUR WEB PAGE YEEZY-APPROVED.</p>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
       <dt><a target="_blank" href="http://digg.com/security/HOW_TO_CAPSLOCK_THE_ENTIRE_INTERNET_Ouch">Digg</a></dt>
       <dt><a target="_blank" href="http://www.urlesque.com/2009/05/13/kanyefy-your-internet/">Urlesque</a></dt>
       <dt><a target="_blank" href="http://www.buzzfeed.com/jonah/kanyefy-bookmarklet">BuzzFeed</a></dt>
       <dt><a target="_blank" href="http://www.grooveeffect.com/stream/get-kanye-fied-caps-lock-the-whole-internet/">Grooveeffect</a></dt>
       <dt><a target="_blank" href="http://current.com/items/90042945_kanyefy-any-webpage.htm">Current</a></dt>
       <dt><a target="_blank" href="http://network.nationalpost.com/np/blogs/theampersand/archive/2009/05/14/it-s-kanye-webst-week-at-f-a-t.aspx">National Post</a></dt>
       <dt><a target="_blank" href="http://waxy.org/links/">Waxy.org</a></dt>
       <dt><a target="_blank" href="http://lolblips.dailyradar.com/story/kanye_vision_bookmarklet/">DailyRadar</a></dt>
       <dt><a target="_blank" href="http://animalnewyork.com/2009/05/kanye-webst-week/">Animal New York</a></dt>
       <dt><a target="_blank" href="http://topiclinks.boston.com/article/09fUdXm3aJ4Yf?q=Kanye+West">Boston.com</a></dt>
     </dl>
    </section>

    <?php include '../_globals/projects.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <p>Image by bad ass mother fucker <a href="http://www.evan-roth.com">Evan Roth</a>.</p>
    </section>

    <section class="box">
     <h4>Code Repo</h4>
     <ul>
      <li class="to"><a href="http://github.com/gleuch/KANYEFY" target="_blank">github.com/gleuch/KANYEFY</a></li>
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