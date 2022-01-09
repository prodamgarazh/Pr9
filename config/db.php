<?php

class Db {
   public function __construct(){
   }
   public function getConnect(){
       $conn = mysqli_connect("127.0.0.1", "root", "", "testdb");

      if (!$conn) {
          echo "Could not connect MySQL.";
          echo "Код ошибки errno: " . mysqli_connect_errno();
          echo "Текст ошибки error: " . mysqli_connect_error();
          exit;
      }
      return $conn;
  }
}


$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
