<?php
class UsersController
{
   private $conn;
   public function __construct($db)
   {
       $this->conn = $db->getConnect();
   }

   public function index()
   {
       include_once 'app/Models/UserModel.php';

       // отримання користувачів
       $users = (new User())::all($this->conn);

       include_once 'views/users.php';
   }

   public function addForm(){
       include_once 'views/addUser.php';
   }

   public function add()
   {
       include_once 'app/Models/UserModel.php';
       // блок з валідацією
       $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
       $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
       $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	   $target_dir = "public/images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$isUploaded = false;
$filePath = 'https://www.fillmurray.com/32/32';
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
   $filePath = $target_dir . basename($_FILES["photo"]["name"]);
   $filePath = filter_var($filePath, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $isUploaded = true;
}
       if (trim($name) !== "" && trim($email) !== "" && trim($gender) !== "") {
           // додати користувача
           $user = new User($name, $email, $gender, $filePath);
           $user->add($this->conn);
       }
       header('Location: ?controller=users');
   }
   
   public function delete() {
   include_once 'app/Models/UserModel.php';
   // блок з валідацією
   $id = $_GET['id'];
   //$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   if (trim($id) !== "" && is_numeric($id))
	   {
       (new User())::delete($this->conn, $id);
   }
   header('Location: ?controller=users');
}

	public function show(){
		include_once 'app/Models/UserModel.php';
		$id = $_GET['id'];
   if (trim($id) !== "" && is_numeric($id)) {
       $user = (new User())::byId($this->conn, $id);
   }
   include_once 'views/showUser.php';
}

public function edit(){
		include_once 'app/Models/UserModel.php';
		$id = $_POST['id'];
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$isUploaded = false;
$filePath = 'https://www.fillmurray.com/32/32';
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
   $filePath = $target_dir . basename($_FILES["photo"]["name"]);
   $filePath = filter_var($filePath, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
   $isUploaded = true;
}
   if (trim($id) !== "" && is_numeric($id)) {
       (new User())::update($this->conn, $id, filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL), filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS), filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_FULL_SPECIAL_CHARS), $filePath);
   }
   header('Location: ?controller=users');
}

}
?>