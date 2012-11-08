<?php

include_once('./_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'A work in progress. Stay tuned!'));


$page_title = 'Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include './_globals/template_header.inc.php'; ?>
<body class="home">
 <div id="template_wrapper" class="c">
  <div class="rel c">

   <article id="content">

    <?php include_once('./_globals/flash.inc.php') ?>


    <section class="intro">
     <h1>Portfolio of Greg Leuch</h1>
     <p class="large serif"> Design, web, technology, and art.</p>
     <p class="link a b">View a list of all <a href="/work/all">client work</a> or <a href="/projects/all">projects</a>.</p>
    </section>

    <section class="featured_list">
     <h3>Featured Work &amp; Projects</h3>

     <div class="first c">
      <ul>
       <li>
        <dl>
         <dd class="image"><a href="/work/heineken-fever-keeper"><img src="" title="Heineken Fever Keeper" alt="" /></a></dd>
         <dt><a href="/work/heineken-fever-keeper">Heineken Fever Keeper</a></dt>
         <dd class="about">...</dd>
         <dd>work: browser extensions</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image"><a href="/projects/greed"><img src="" title="G.R.E.E.D." alt="" /></a></dd>
         <dt><a href="/projects/greed">G.R.E.E.D.</a></dt>
         <dd class="about">An innovative tool to clean up the lower regions of web pages from unwanted Justin Bieber mentions.</dd>
         <dd>project: browser extensions</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image"><a href="/projects/shaved-bieber"><img src="" title="Shaved Bieber" alt="" /></a></dd>
         <dt><a href="/projects/shaved-bieber">Shaved Bieber</a></dt>
         <dd class="about">An innovative tool to clean up the lower regions of web pages from unwanted Justin Bieber mentions.</dd>
         <dd>project: browser extensions</dd>
        </dl>
       </li>
      </ul>
     </div>
    </section>
   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Who</h4>
<?php /* eventually add pop-block */ ?>
     <p>Maker of <!-- <a href="https://pop-block.com">Pop Block</a>, --> <a href="http://metafetch.com" target="_blank">Metafetch</a> and other products. <a href="http://fffff.at" target="_blank">F.A.T. Lab</a> virtual fellow. Previously at BuzzFeed, Know Your Meme, Rocketboom, and JESS3.</p>
    </section>

    <section class="box">
     <h4>What</h4>
     <p>Creative freelancer with a background in user experience design, interface design, interaction design, visual design, e-commerce, and web development.</p>
    </section>
   </aside>

  </div>

<?php include './_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include './_globals/footer.inc.php'; ?>


</body>
</html>