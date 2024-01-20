<?php
  
  // DON'T INCLUDE FLIGHT OR COMPOSER
  // API-LEVEL ROUTES

  Flight::route('/api', function(){
    Flight::json([
      'ping' => "pong",
      'echo' => 'APIServer',
      'answerToUniverse' => 42,
      'develMode' => true
    ]);
  });

  // Get all users
  Flight::route('/api/all_users', function(){
    $users = array();
    $allUsers = R::findAll('users');

    foreach ($allUsers as $userID => $user) {
      array_push($users, $user);
    }

    echo Flight::json([
      'users' => $users,
    ]);
  });


  // Get user with ID
  Flight::route('/api/get_user/@id', function($id){
    $user = array();
    $objUser = R::find('users', 'id = ?', [$id]);

    foreach ($objUser as $userID => $user) {}

    echo Flight::json([
      'user' => $user,
      'id' => $id,
    ]);
  });

?>