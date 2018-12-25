<?php

 // Get Twig Engine & setup Cache
 function get_template_engine() {
  $loader = new Twig_Loader_Filesystem('templates/');
  $twig = new Twig_Environment($loader
  // , 
  // array(
  //   'cache' => 'render_cache/',
  // )
  );
  return $twig;
 }

?>