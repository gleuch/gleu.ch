<?php

include_once('../_globals/functions.inc.php');


$nav_section = 'work';

$page_title = 'Auburn University Graphic Design Department - Greg Leuch: Creative + User Interaction';


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
      <h4>Design, Web Application</h4>
      <h1>Auburn University Graphic Design Department</h1>
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
     <p class="medium serif">The Auburn University Graphic Design program web site is a collaboration between Professor Wei Wang and student Greg Leuch. Over the course of several months, they worked on developing an interactive design community focusing on professional and educational development for the purpose of increasing communication, collaboration, and creativity between students, faculty, and alumni.</p>
     <p class="medium serif">Many, many lines of code were written and rewritten as the scope of the project changed, but patience prevailed. The design community is now composed of over one hundred twenty community members incorporating over four hundred ninety-three photos since its launch one year ago.</p>
    </section>

    <section class="challenge paragraph c">
     <h3>Challenge</h3>
     <p class="medium serif">During the course of study with Professor Wei Wang, the Graphic Design program moved to the College of Architecture, Design, and Construction (CADC), and required a new identity for the program. Professor Wang and I adapted the early ideas of a portfolio management system I began working on, and attempted to turn it into a community network for students, faculty, and alumni of the program.</p>
    </section>

    <section class="solution paragraph c">
     <h3>Solution</h3>
     <p class="medium serif">To meet the demands of the project, I had to develop a hybrid content management and user management application which laid on top of the existing framework for dynamic sections of the web site. In order to make this work, I wrote a highly-adaptable gateway processing script that would evaluate the requested URL and determine if it was a dynamic section or a content-managed page. Much like the Convention over Configuration philosophy of Ruby on Rails, the path structure mimics a simplistic approach to framework orientation, allowing for user-friendly URLs as well as a simplified way to evaluate requests.</p>
     <p class="medium serif">One of the difficulties of the project required two separate but united areas of the web site (the public side and the community side) that utilized the resources of the other area to function. Adding to the difficulty was the timeline in which the website was to launch. Instead of creating a complete application and then opening the site to everyone, the site was built in pieces to allow for the public section to work while adding new features to the community section.</p>
     <p class="medium serif">The entire application was hand-coded over several months without any assisted external libraries or packaged code during an independent study with Professor Wang. It was built using PHP 5 and MySQL on a Microsoft IIS 6 platform. Specific interest was taken in image manipulation with the GD2 functions in PHP to allow for image altering, resizing, web-optimization.</p>
    </section>

    <section class="result paragraph c">
     <h3>Result</h3>
     <p class="medium serif">Working on this project gave me the opportunity to develop a highly efficient, dynamic web site while expanding my knowledge and experience in web development. Although my career in new media design/development began before I entered college, this was the first large-scale web application I have the honor of saying I created from scratch. Knowing that I can work at this level has empowered me to look into a career in creating new web interfaces and applications for larger companies.</p>
    </section>

    <section class="exhibitions grouped_list c">
     <h3>Awards</h3>

     <dl>
      <dt>2008 University and College Designers Association Design Award</dt>
      <dd>Silver Award</dd>
     </dl>

     <dl>
      <dt>2008 Horizon International Interactive Award</dt>
      <dd>Silver Award</dd>
     </dl>

     <dl>
      <dt>2008 Interactive Media Awards</dt>
      <dd>Best in Class, Interactive Media Council</dd>
     </dl>

     <dl>
      <dt>2008 ADDY® Award</dt>
      <dd>Montgomery Advertising Federation</dd>
     </dl>

     <dl>
      <dt>2008 Juror Award</dt>
      <dd>3rd Annual MS State AIGA Design Show</dd>
     </dl>
    </section>

    <?php include '../_globals/work.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Tasks</h4>
     <p>design, develop</p>
     <h4>Client</h4>
     <p>Auburn University</p>
     <h4>Finished</h4>
     <p>Nov 2007</p>
    </section>
   </aside>
  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>