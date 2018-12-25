<?php 
  include_once 'database_driver/rb.php';
  R::setup('sqlite:application_database.db');
  R::setAutoResolve(TRUE);
?>