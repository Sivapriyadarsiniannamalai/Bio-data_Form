<?php

include 'dbconnection.php';
$sql = "SELECT * FROM student_registration";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<br> id:   " . $row["stdid"]. " <br>Name:  " . $row["stdname"]. "<br>Course: " . $row["course"]. "<br>Semester:  " . $row["semester"]."<br>Gender:  ".$row["gender"] ."<br>Hobbies:  ".$row["hobbies"] ."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
<html>
 <body>
    <center>
	<a href="stdhomepage.php">Back</a>
    </center>
 </body>
</html>
