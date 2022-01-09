<?php
const ADMIN_EMAIL = 'admin@admin.com';
const ADMIN_PASSWORD = '111111';
//include 'session_start'
session_start();
if($_POST["password"] != NULL && $_POST["email"] != NULL){
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$email = $_POST["email"];
   filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   if($password == ADMIN_PASSWORD && $email == ADMIN_EMAIL)
   {
	   $_SESSION['auth'] = true;
	   header('Location: views/addUser.php');
   } else {
	   header('Location: app/Controllers/IndexController.php');
}
} else {
	   header('Location: app/Controllers/IndexController.php');
}

?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
   </style>
</head>
<body style="padding-top: 3rem;">
 
<div class="container">
</html>
<?php





?>