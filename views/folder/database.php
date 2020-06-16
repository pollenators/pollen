<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "pollen";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// Output story if id matches
//$id = 1;
//$sql = "SELECT title, article FROM story WHERE id = $id LIMIT 1";
$sql = "SELECT id, title, article FROM story";
$result = $conn->query($sql);

//if(mysql_num_rows($result))
//{
//    $row = mysql_fetch_assoc($result) or die(mysql_error());
//    echo $row['article'];
//}

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Title: " . $row["title"]. " " . $row["article"]. "<br>";
  }
} else {
  echo "0 results";
}

// Close connection
$conn->close();
?>