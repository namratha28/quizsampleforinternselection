<html>

<?php
$servername = "localhost";
$username ="root";
$password = "password28";
$dbname = "questions";
$i=1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, ques, op1,op2,ans FROM set1";
$result = $conn->query($sql);

if (!isset($_POST['submit'])) {
    echo "<form method=post action='no.php'>";
    echo "<table border=0>";
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $question = $row["ques"];
        $opt1 = $row["op1"];
        $opt2 = $row["op2"];
        $an=$row["ans"];
        
        echo "<tr><td colspan=3><br><b>$question</b></td></tr>";
        echo "<tr><td> <input type=radio name='<?php echo '$id';?>'    value=\"$opt1\">$opt1</td><td>     <input type=radio name='$id' value=\"$opt2\">$opt2</td></tr>";
    
}
$c=0;
  
    echo "</table>";
    echo "<input type='submit' value='See how you did' name='submit'>";
    echo "</form>";

}


?>
</html>