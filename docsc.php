
<!DOCTYPE html>
<html>
<head>
<style>
body{
background-color: linen;
color: maroon;



border-style: double;
border-width: medium;
border-color: orange;
 margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 350px;
  margin-left: 100px;
text-align: justify;
}

</style>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hos";
$id=$_POST['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM doc_scl where Doctor_id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<p>Your's Today scedule</p>";
		echo "<br> Doctor name: ". $row["Doctor_Name"]."<br>";
		echo "<br> Doctor id: ". $row["Doctor_id"]."<br>";
		echo "<br> 8 am to 10 am: ". $row["8 am to 10 am"]."<br>";
		echo "<br> 10:30 am to 1 pm: ". $row["10:30 am to 1 pm"]."<br>";
        echo "<br> 2 pm to 4 pm: ". $row["2 pm to 4 pm"]."<br>";
		 
		
    }
} else {
    echo "Oops!! No such record in the detail of you entered";
}

$conn->close();
?>

</body>
</html>