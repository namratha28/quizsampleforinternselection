<html>
<head>
<style>
div {
    width: 200px;
    height: 50px;
    padding: 15px;
    background-color: rgb(128,128,128);
    box-shadow: 10px 10px 5px black;
}
.button1 {border-radius: 2px;}
body {
    background-color: white;
}
</style>
</head>

<body>


<?php

$servername = "localhost";
$username = "root";
$password = "password28";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT username FROM admininfo WHERE username = '$myusername' and password = '$mypassword'";
      $result = $conn->query($sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
         header("location: crud.html");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }

$conn->close();
?>
<form action="" method="post">
<center>
<h1>admin login</h1><br><br>

<div>username: <input type="text" name="username"><br><br><br><br></div><br><br><br>
<div>password: <input type="password" name="password"><br><br><br></div><br><br><br>
<button class="button button1"><input type="submit"></button>
</center>
</form>

</body>
</html>

