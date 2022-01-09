


<?php
/*require 'config/db.php';

echo '<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">
<div class="container">
<table>';
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
       $users[] = [
           'name' => $row['name'],
           'email' => $row['email'],
           'gender' => $row['gender'],
           'filePath'=>$row['filePath']
       ];
   }
}

/*if (file_exists('database/users.csv')) {
	$fp = fopen('database/users.csv', 'r+');
	$str = file_get_contents('database/users.csv');
	//echo $str;
	$users = explode("\n", $str);
	for($i = 0; $i < count($users); ++$i)
	{
		$user = $users[$i];
		echo '<tr> <td>'. $user['name']. '</td> <td>'. $user['email']. '</td>'. '<td>'. $user['gender']. '</td>';
		if($user['filePath'] == "")
		{
			echo '<td><img src="https://www.fillmurray.com/32/32"></td>';
		} else {
			echo '<td><img src='. $user['filePath']. ' height="32"></td>';
		}
		echo '</tr>';
	}
	
echo '</table>
<hr>
   <a class="btn" href="adduser.php">return back</a>
</div>
</body>';
//$user;
*/
?>