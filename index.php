<?php

   require_once 'core/init.php';

  DB::getInstance()->query("SELECT * FROM users WHERE id = ?", array('Alex'));
  
  // $users = DB::getInstance()->update('users','3', array(

  // 	'username ' => 'dale',
  // 	'password'  => 'password'
  // ));


	// if($users->error()){

	// 	echo "Query Error";

	// }else{

	// 	foreach ($users->results() as $user) {
	// 		echo $user->username;
	// 	}
	// }
