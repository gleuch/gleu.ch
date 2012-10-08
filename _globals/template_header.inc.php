<?php

if (!isset($page_title)) $page_title = 'Greg Leuch: Creative + User Interaction';
if (!isset($javascripts)) $javascripts = array();
if (!isset($stylesheets)) $stylesheets = array();
array_unshift($javascripts, array('js' => 'jquery-latest.js'), array('js' => 'site.js'));
array_unshift($stylesheets, array('css' => 'site.css', 'media' => 'all'));

if (!isset($canonical_url)) $canonical_url = '';
if (!isset($meta_description)) $meta_description = 'Greg Leuch is a user interface designer, interaction designer, visual designer, front-end web developer, and open-source artist.';
if (!isset($meta_keywords)) $meta_keywords = 'greg leuch, gleuch, halvfet, interface, interaction, visual, design, designer, user experience, art, programming, web, css, html, php, rails, javascript, code, general';
if (!isset($meta_robots)) $meta_robots = 'index, follow';
if (!isset($meta_tags)) $meta_tags = array();

?>
<head>
  <!--
    All work is copyrighted 2012 by Greg Leuch and/or its respective owners.
    All other non-copyrighted or non-licensed work is licensed under a Creative Commons Attribution-Share Alike 3.0 United States License <http://creativecommons.org/licenses/by-sa/3.0/us>.
    Permissions beyond the scope of this license may be available at: http://gleuch.com/contact.
   -->

 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>

 <title><?php echo $page_title; ?></title>
<?php if (false): ?><link rel="alternate" type="application/rss+xml" title="online portfolio of Greg Leuch Feed" href="http://gleuch.com/feeds/rss" /><?php endif; ?>

 <link rel="canonical" href="<?php echo $canonical_url; ?>" />
 <meta name="description" content="<?php echo $meta_description; ?>"/>
 <meta name="keywords" content="<?php echo $meta_keywords; ?>"/>
 <meta name="author" content="Greg Leuch at http://gleuch.com/"/>
 <meta name="robots" content="<?php echo $meta_robots; ?>" />
 <meta name="googlebot" content="<?php echo $meta_robots; ?>"/>
 <meta name="revisit-after" content="3 days" />
 <meta name="distribution" content="global" />

<?php foreach($meta_tags as $mt): ?>
 <meta name="<?php echo $mt['name']; ?>" content="<?php echo $mt['content']; ?>" />
<?php endforeach;?>

<?php foreach($javascripts as $js): ?>
 <script type="text/javascript" src="/assets/js/<?php echo $js['js'] ?>"></script>
<?php endforeach; ?>

 <meta name="viewport" content="width=device-width; initial-scale=1.0" />
<?php foreach($stylesheets as $css): ?>
 <link rel="stylesheet" href="/assets/css/<?php echo $css['css'] ?>" media="<?php echo (isset($css['media']) ? $css['media'] : 'all') ?>" />
<?php endforeach; ?>

</head>