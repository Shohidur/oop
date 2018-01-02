<?php
	require_once 'core/init.php';


	var_dump(Token::check(Input::get('token')));

	if(Input::exists()){
		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' => array(
				'required' => true,
				'min'      => '2',
				'max'      => '20',
				'unique'   => 'users'
			),
			'password' => array(
				'required' => true,
				'min'      => '6',
			),
			'password_again' => array(
				'required' => true,
				'matches'  => 'password'
			),
			'name' => array(
				'required' => true,
				'min'      => '2',
				'max'      => '60'
			)
		));

		if($validation->passed()){

			echo "passed";

		}else{

			foreach($validation->errors() as $error){
				echo $error ."<br>";
			}
		}


	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
	<form action = "" method = "post">
		<div class="field">
			<label for="username">UserName</label>
			<input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
		</div>

		<div class="field">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="">
		</div>

		<div class="field">
			<label for="password_again">Password Agian</label>
			<input type="password" name="password_again" id="password_again" value="">
		</div>

		<div class="field">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" autocomplete="off" >
		</div>

		<input type="hidden" name="token" value =" <?php //echo Token::generate(); ?> "> 

		<button>Register</button>

	</form>
</body>
</html>