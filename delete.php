<html>
<head>
<style>
form {margin:100px;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
h1{
font-size:32px;
margin:100px;}

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 12px 2px;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
input{
background-color: white; 
    color: black; 
    border: 2px blaack;
   padding:5px;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="create.php" target="_top">create</a></li>
  <li><a href="update.php">delete</a></li>
  <li><a href="delete.php">update</a></li>
  <li><a href="logout.php">logout</a></li>
</ul>

<form method="post" action="">
  <button class="button button1">set name</button><input type="text" name="k">
  <button class="button button1">id</button><input type="text" name="i">
  <input type="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "password28";
$dbname = "questions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  
$j=$_POST['i'];
$j1=$_POST['k'];
// sql to delete a record
$sql = "DELETE FROM $j1 WHERE id=$j";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
