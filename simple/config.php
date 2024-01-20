<?php 
  //
  include_once 'api.php';

  // All config vars here
  
  // Database Module
  include_once 'rb/rb.php';
  R::setup('sqlite:database.db');
  R::setAutoResolve(TRUE);

  // Template Config
  // Get Twig Engine & setup Cache
  function get_template_engine() {
    $loader = new Twig_Loader_Filesystem('templates/');
    $twig = new Twig_Environment($loader
    // , 
    // array(
    //   'cache' => 'cache/',
    // )
    );
    return $twig;
  }

?>