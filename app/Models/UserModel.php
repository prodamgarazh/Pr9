<?php
class User {
   private $name;
   private $email;
   private $gender;
   private $filePath;

   public function __construct($name = '', $email = '', $gender = '', $filePath = 'https://www.fillmurray.com/32/32')
   {
       $this->name = $name;
       $this->email = $email;
       $this->gender = $gender;
	   $this->filePath = $filePath;
   }

   public function add($conn) {
       $sql = "INSERT INTO users (email, name, gender, password, filePath)
           VALUES ('$this->email', '$this->name','$this->gender', '11111', '$this->filePath')";
           $res = mysqli_query($conn, $sql);
           if ($res) {
               return true;
           }
   }

   public static function all($conn) {
       $sql = "SELECT * FROM users";
       $result = $conn->query($sql); //виконання запиту
       if ($result->num_rows > 0) {
           $arr = [];
           while ( $db_field = $result->fetch_assoc() ) {
               $arr[] = $db_field;
           }
           return $arr;
       } else {
           return [];
       }
   }
   
   public static function delete($conn, $id) {
   $sql = "DELETE FROM users WHERE id=$id";
   $res = mysqli_query($conn, $sql);
   if ($res) {
       return true;
   }
}

public static function byID($conn, $id) {
   $sql = "SELECT * FROM users WHERE id=$id";
   $res = $conn->query($sql);
   return $res->fetch_assoc();
}




   public static function update($conn, $id, $data1, $data2, $data3, $data4) {
       $sql = "UPDATE users SET email='$data1' , name='$data2' , gender='$data3' , ашдуЗфер='$data4' WHERE id=$id";
	   $res = mysqli_query($conn, $sql);
   if ($res) {
       return true;
   }
   }
}
?>