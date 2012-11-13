<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'Images will be posted shortly.'));


// G.R.E.E.D.
// 2012
// browser extensions


$nav_section = 'projects';

$page_title = 'G.R.E.E.D. - Greg Leuch: Creative + User Interaction';


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
      <h4>Browser Extensions</h4>
      <h1>G.R.E.E.D.</h1>
      <p class="large serif">Greed powers our economy through restrictive licensing deals and claims of copyright.</p>
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
     <p class="medium serif">Greed powers our economy through restrictive licensing deals and claims of copyright. What enables this demand is the ability to control access or demand incentives as compensation for their work. The Internet, built without these restrictions, is being threatened to include protections for licensed and copyrighted content.</p>
     <p class="medium serif">G.R.E.E.D. (Glom &amp; Restrict Entities on Existing Domains) demonstrates how a web user's browsing experience and anonymity can be threatened through restrictions, take-downs, censorship, and monetary blackmail if such license and copyright restrictions are imposed on the Internet.</p>
    </section>

    <hr />

    <section class="exhibitions grouped_list c">
     <h3>Exhibitions</h3>

     <dl>
      <dt><em>C.R.E.A.M.</em></dt>
      <dd>Art Micro Patronage<br />Internet<br />Apr 2012</dd>
     </dl>
    </section>

    <hr />

    <section class="press item_list c">
     <h3>Press</h3>

     <dl>
      <dt><a target="_blank" href="http://blogs.artinfo.com/artintheair/2012/04/09/internet-art-subverts-the-monetary-ecosystem-with-viruses-spyware-and-leaks/">ARTInfo</a></dt>
      <dt><a target="_blank" href="http://www.artfagcity.com/2012/04/27/c-r-e-a-m-review/">Art Fag City</a></dt>
     </dl>
    </section>

    <?php include '../_globals/projects.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Download</h4>
     <ul>
      <li><a href="http://restrict.cc/greed/download" target="_blank">restrict.cc/greed</a></li>
     </ul>
    </section>

    <section class="box">
     <p>As seen in <a href="http://artmicropatronage.org/exhibition/C.R.E.A.M-Lindsay-Howard" target="_blank">"C.R.E.A.M." online exhibition</a> at Art Micro Patronage.</p>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>