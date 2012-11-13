<?php

if (!isset($nav_section)) $nav_section = '';

?>
  <header id="header" class="c">
   <h1 title="Greg Leuch"><a href="/"><i class="icon logo">Greg Leuch</i></a></h1>
   <nav>
    <ul class="c">
     <li class="<?php if ($nav_section == 'projects') echo 'selected'; ?>"><a href="/projects" title="Projects" class="">Projects</a></li>
      <li class="<?php if ($nav_section == 'work') echo 'selected'; ?>"><a href="/work" title="Client Work" class=""><span class="mfull inline">Client</span> Work</a></li>
     <li class="<?php if ($nav_section == 'about') echo 'selected'; ?>"><a href="/about" title="About" class="">About</a></li>
     <li class="<?php if ($nav_section == 'contact') echo 'selected'; ?>"><a href="/contact" title="Contact" class="">Contact</a></li>
     <!-- <li class="<?php if ($nav_section == 'blog') echo 'selected'; ?>"><a href="http://blog.gleu.ch" title="Blog" class="">Blog</a></li> -->
     <li class="twitter"><a href="https://twitter.com/gleuch" target="_blank"><i class="icon twitter">Twitter: @gleuch</i></a></li>
     <li class="facebook"><a href="https://facebook.com/gleuch" target="_blank"><i class="icon facebook">Facebook: Greg Leuch</i></a></li>
    </ul>
   </nav>
  </header>

  <footer id="footer" class="c">
   <p>&copy; 2003&ndash;<?php echo date('Y'); ?> Greg Leuch, unless noted differently.</p>
  </footer>
