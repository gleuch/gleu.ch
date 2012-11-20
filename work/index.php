<?php

include_once('../_globals/functions.inc.php');

array_push($_flashes, array('type' => '', 'msg' => 'A work in progress. Stay tuned!'));


$nav_section = 'work';

$page_title = 'Greg Leuch: Creative + User Interaction';


?>
<!DOCTYPE html>
<html>
<?php include '../_globals/template_header.inc.php'; ?>
<body class="work clients_list featured_list">
 <div id="template_wrapper" class="c">
  <div class="rel c">

   <article id="content">

    <?php include_once('../_globals/flash.inc.php') ?>

    <section class="intro">
     <h1>Client Work</h1>
     <p class="large serif">A varied list of creative, design, &amp; development work.</p>
     <!-- <p class="link a b"><a href="/work/all">View a list of all client work &raquo;</a></p> -->
    </section>

    <section class="featured_list">
     <!-- <h3>Featured Client Work</h3> -->

     <div class="first c">
      <!-- <h3 class="callout">2012</h3> -->
     
      <ul>
       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/heineken-fever-keeper"><img src="" title="Heineken Fever Keeper" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/heineken-fever-keeper">Heineken Fever Keeper</a></dt>
         <dd class="about">Block the spoilers from tape-delayed UEFA soccer matches.</dd>
         <dd>browser extensions</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/zagat-food-trucks"><img src="" title="Zagat Food Trucks" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/zagat-food-trucks">Zagat Food Trucks</a></dt>
         <dd class="about">Interactive maps for Zagat-rated food trucks.</dd>
         <dd>web application</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/know-your-meme"><img src="/assets/work/know-your-meme/feature.png" title="Know Your Meme" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/know-your-meme">Know Your Meme</a></dt>
         <dd class="about">Documenting Internet phenomena: viral videos, image macros, catchphrases, web celebs and more.</dd>
         <dd>web application</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/magma"><img src="" title="Magma" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/magma">Magma</a></dt>
         <dd class="about">An entry point for online videos.</dd>
         <dd>web application</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/thesa.me"><img src="" title="thesa.me" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/thesa.me">thesa.me</a></dt>
         <dd class="about">An online web application manager and distributive content publisher.</dd>
         <dd>design, identity</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/politics4all"><img src="" title="Politics4All" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/politics4all">Politics4All</a></dt>
         <dd class="about">A social network for politics.</dd>
         <dd>design, identity, web application</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/auburn-graphic-design-dept"><img src="" title="Auburn University Graphic Design Department" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/auburn-graphic-design-dept">Auburn University Graphic Design Department</a></dt>
         <dd class="about"></dd>
         <dd>design, web application</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/red-mountain-market"><img src="" title="Red Mountain Market" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/red-mountain-market">Red Mountain Market</a></dt>
         <dd class="about">Online grocery delivery service.</dd>
         <dd>e-commerce website</dd>
        </dl>
       </li>

       <li>
        <dl>
         <dd class="image">
          <figure><a href="/work/auburn-art-college-football-art"><img src="" title="Auburn Art &amp; College Football Art" alt="" /></a></figure>
         </dd>
         <dt><a href="/work/auburn-art-college-football-art">Auburn Art &amp; College Football Art</a></dt>
         <dd class="about">All-in-one shops for your college football art needs.</dd>
         <dd>e-commerce website</dd>
        </dl>
       </li>

      </ul>
     </div>
    </section>

    <aside class="footer tc">
     <p class="large link a b"><a href="/work/all" class="b">View list of all client work &raquo;</a></p>
    </aside>

    <?php include '../_globals/work.footer.inc.php'; ?>

   </article>

   <aside id="sidebar">
    <section class="box">
     <h4>Who</h4>
     <p>Creative freelancer. Making Metafetch. Former Senior Designer at Buzzfeed. Previously at Know Your Meme/Rocketboom and JESS3. Current F.A.T. Lab virtual fellow. New York City, New York. Design, web, technology, and art.</p>
    </section>

    <section class="box">
     <h4>What</h4>
     <p>User Experience Designer with a background in interface design, interaction design, visual design, e-commerce, and web development.</p>
    </section>
   </aside>

  </div>

<?php include '../_globals/header.inc.php'; ?>

 </div>

 <div id="template_static_bar"></div>

<?php include '../_globals/footer.inc.php'; ?>


</body>
</html>