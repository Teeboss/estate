<?php

include ("../model/controller.php");
if (isset($_POST['admin']) && isset($_POST['password'])) {
	$admin = $_POST['admin'];
	$password = $_POST['password'];

if (DB::query('SELECT username FROM admin WHERE username=:admin', array(':admin'=>$admin))) {
	if ($password == DB::query('SELECT password FROM admin WHERE username = :admin', array(':admin'=>$admin))[0]['password']) {
              session_start([
            'cookie_lifetime' => 86400,
              ]);
              $user_id=DB::query('SELECT id FROM admin WHERE username=:admin', array(':admin'=>$admin))[0]['id'];
               $_SESSION['admin'] = $user_id;
               $_SESSION['logged_in']="true";
        echo "true";
    } else {
    echo "false_password";
    echo $admin;
    echo $password;
  }
} else {
    echo "false_user";
  }
}
?>