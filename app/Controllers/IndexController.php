<?php
class IndexController
{
   public function __construct($db)
   {
   }

   public function index()
   {
	   
if($_SESSION != NULL && $_SESSION['auth']===true)
 {
	echo '
<body>
<div class="container">
<h3>Ви вже увійшли.</h3>
<br>
<a class="btn" href="views/addUser.php">continue</a>
<a class="btn" href="logout.php">log out</a>
</div>
</body>';
} else {
       // виклик відображення
	   //session_start();
       include_once 'views/home.php';
   }
}
}
?>