<?php

require 'vendor/autoload.php';

Flight::route('/', function () {
  echo 'Homepage';
});

Flight::route('/about-us', function () {
  echo 'About Us';
});

Flight::route('/api', function () {
  Flight::json([
    "success" => true,
    "uniqid" => uniqid(),
  ]);
});


Flight::start();
