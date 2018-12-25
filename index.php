<?php 
  require 'vendor/autoload.php';
  include_once 'inc.php';

  Flight::route('/', function(){
    $vars = [
      'appName' => 'PHP Starter',
      'appVersion' => 1
    ];
    $twig = get_template_engine();
    echo $twig->render('home.html', $vars);
  });
  
  Flight::route('/all_users', function(){
    $users = array();
    $allUsers = R::findAll('users');

    foreach ($allUsers as $userID => $user) {
      array_push($users, $user);
    }
    
    $vars = [
      'users' => $users
    ];
    $twig = get_template_engine();
    echo $twig->render('all_users.html', $vars);

  });

  Flight::start();

?>