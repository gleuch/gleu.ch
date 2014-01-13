<?php

include_once('./_globals/functions.inc.php');

// array_push($_flashes, array('type' => '', 'msg' => 'A work in progress. Stay tuned!'));


$page_title = 'Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include './_globals/template_header.inc.php'; ?>
<body class="home">
 <div id="template_wrapper" class="c">
  <div id="content_area" class="rel c">

   <article id="content">

    <?php include_once('./_globals/flash.inc.php') ?>


    <section class="intro">
     <h1>Portfolio of Greg Leuch</h1>
     <p class="large serif"> Design, web, technology, and art.</p>
    </section>

    <section class="featured_list">
     <h3>Featured Work &amp; Projects</h3>

     <div class="first c">
      <ul>
        <li>
         <dl>
          <dd class="image">
           <figure><a href="/projects/pop-block"><img src="/assets/projects/pop-block/feature.png" title="Pop Block" alt="" /></a></figure>
          </dd>
          <dt><a href="/projects/pop-block">Pop Block <ins class="new">New!</ins></a></dt>
          <dd class="about">Manage your content bubble by controlling aspects of your online experience.</dd>
          <dd>web application, browser extensions</dd>
         </dl>
        </li>

        <li>
         <dl>
          <dd class="image">
           <figure><a href="/projects/shaved-bieber"><img src="/assets/projects/shaved-bieber/feature.png" title="Shaved Bieber" alt="" /></a></figure>
          </dd>
          <dt><a href="/projects/shaved-bieber">Shaved Bieber</a></dt>
          <dd class="about">An innovative tool to clean up the lower regions of web pages from unwanted Justin Bieber mentions.</dd>
          <dd>project: browser extensions</dd>
         </dl>
        </li>

       <!-- <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/heineken-fever-keeper"><img src="/assets/work/heineken-feverkeeper/feature.png" title="Heineken Fever Keeper" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/heineken-fever-keeper">Heineken Fever Keeper</a></dt>
         <dd class="about">Block the spoilers from tape-delayed UEFA soccer matches.</dd>
         <dd>work: browser extensions</dd>
        </dl>
       </li> -->

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/projects/greed"><img src="/assets/projects/greed/feature.png" title="G.R.E.E.D." alt="" /></a></figure>
         </dd>
         <dt><a href="/projects/greed">G.R.E.E.D.</a></dt>
         <dd class="about">Greed powers our economy through restrictive licensing deals and claims of copyright.</dd>
         <dd>project: browser extensions</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/know-your-meme"><img src="/assets/work/know-your-meme/feature.png" title="Know Your Meme" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/know-your-meme">Know Your Meme</a></dt>
         <dd class="about">Documenting Internet phenomena: viral videos, image macros, catchphrases, web celebs and more.</dd>
         <dd>web application, design, branding</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/projects/ctrl-f-d"><img src="/assets/projects/ctrl-f-d/feature.png" title="Ctrl+F'd" alt="" /></a></figure>
         </dd>
         <dt><a href="/projects/ctrl-f-d">Ctrl+F'd</a></dt>
         <dd class="about">Many people believe you cannot keyword search online documents. In other words, they are Ctrl+F'd. A playful experiment in "censoring" a web page by hiding text and images behind blocks.</dd>
         <dd>bookmarklet</dd>
        </dl>
       </li>

      </ul>
     </div>
    </section>

    <hr />

    <footer class="tc">
     <p class="large link a b">View a list of all <a href="/work/all">client work</a> or <a href="/projects/all">projects</a>.</p>
    </footer>
   </article>

   <aside id="sidebar">


    <section class="box">
     <h4>Who</h4>
     <p>Co-owner, Tech/R&amp;D at <a href="http://www.xolator.com" target="_blank">XOlator</a>.</p>
     <p><a href="http://fffff.at" target="_blank">F.A.T. Lab</a> virtual fellow.</p>
     <p>Maker of <a href="https://pop-block.com">Pop Block</a>, <a href="http://metafetch.com" target="_blank">Metafetch</a> and other products.</p>
    </section>

    <section class="box">
     <h4>What</h4>
     <p>Creative freelancer with a background in user experience design, interface design, interaction design, visual design, e-commerce, and web development.</p>
    </section>

    <?php include_once('./_globals/sidebar.work_avail.inc.php'); ?>

    <?php include_once('./_globals/newsletter.inc.php'); ?>

    <section class="box">
     <h4>Online Activity</h4>
     <ul>
      <li><a class="grey dc" href="https://twitter.com/gleuch" title="Twitter" target="_blank">Twitter</a></li>
      <li><a class="grey dc" href="https://github.com/gleuch" title="GitHub" target="_blank">GitHub</a></li>
      <li><a class="grey dc" href="http://instagram.com/gleuch" title="Instagram" target="_blank">Instagram</a></li>
      <li><a class="grey dc" href="http://www.linkedin.com/in/gleuch" title="LinkedIn" target="_blank">LinkedIn</a></li>
      <li><a class="grey dc" href="https://www.facebook.com/gleuch" title="Facebook" target="_blank">Facebook</a></li>
     </ul>
    </section>
   </aside>

  </div>

<?php include './_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include './_globals/footer.inc.php'; ?>


</body>
</html>