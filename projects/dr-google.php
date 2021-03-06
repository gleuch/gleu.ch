<?php

include_once('../_globals/functions.inc.php');

// Dr. Google
// 2010
// websote


$nav_section = 'projects';

$page_title = 'Dr. Google - Greg Leuch: Creative + User Interaction';


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
      <h4>Website</h4>
      <h1>Dr. Google</h1>
      <p class="large serif">Feeling sick? Not sure what you've come down with? Let Google diagnose you!</p>
     </section>

     <section class="featured_images rel">
      <div class="carousel">
       <img src="/assets/projects/dr-google/item1.png" alt="" title="" border="0" />
       <img src="/assets/projects/dr-google/item2.png" alt="" title="" border="0" class="hide" />
      </div>
      <div class="carousel_buttons">
       <a href="javascript:;" class="prev"><i class="icon prev">Previous</i></a>
       <a href="javascript:;" class="next"><i class="icon next">Next</i></a>
      </div>
     </section>
    </div>

    <section class="blurb paragraph c">
     <p class="medium" style="padding-top: 9px;"><strong><u>UPDATE:</u> On October 1st, 2013, The Google Trademark team send FAT Lab a cease and desist letter on use of logo, trademark, and likeness of the site. To comply with the request, the Dr. Google site has been taken down and replaced with the contents of the C&amp;D letter.</strong></p>
     <hr />
     <p class="medium serif">Feeling sick? Not sure what you've come down with? Let Google diagnose you! Enter your symptoms into the search box, and press "I'm Feeling Icky" to be diagnosed. Don't like your options? Go back and get a "Second Opinion".</p>
     <p class="medium serif tc" style="padding: 15px 0;"><a href="http://fffff.at/dr-google" class="button">Visit Dr. Google!</a></p>
    </section>

    <section class="statement paragraph c">
     <h3>Statement</h3>
     <p class="medium serif">In the digital age of instant access to information, searching for health information has become commonplace for millions, helping people self-diagnose their conditions before treatment or consultation from official medical personnel. While most people search for symptoms and cures for common ailments, many reports have surfaced of people relying too much on the web site results produced by Google. A search on Twitter for "Dr. Google" will show hundreds of tweets daily for people thanking the invisibile "Dr. Google" in their search for cures to their illnesses.</p>
     <p class="medium serif">Dr. Google spoofs the Google search interface by providing a one-click diagnostic result ("I'm Feeling Icky") to whatever search a person may have. These results are entirely fictitious and do not represent a true diagnosis, however, all viewers have the option for second opinions for their ailments.</p>
     <p class="medium serif"><em>(Not intended for actual medical consultation.)</em></p>
    </section>

    <hr />

    <section class="exhibitions grouped_list c">
     <h3>Exhibitions</h3>
     <dl>
      <dt><em>Futurity Now!</em>, transmediale.10</dt>
      <dd>Haus der Kulturen der Welt<br>Feb 2010</dd>
     </dl>
    </section>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Code Repo</h4>
     <ul>
      <li class="to"><a href="http://github.com/gleuch/Dr.-Google" target="_blank">github.com/gleuch/Dr.-Google</a></li>
     </ul>
    </section>

    <section class="box">
     <p>A project from the <a href="http://fffff.at/fuck-google/">"Fuck Google"</a> collaboration by <a href="http://fffff.at">Free Art &amp; Technology Lab (F.A.T. Lab)</a> at <a href="http://www.transmediale.de/en/free-art-and-technology-lab-ft-lab">transmediale.10</a>.</p>
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