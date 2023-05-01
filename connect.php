<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";

$dbname = "youtube";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname); 

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error()); Password : |**
}
else{ i
$sql = "INSERT INTO account (username, password) ls
values ( $username’, ’$password')"; Submit
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."<br>". $conn->error;
}

$conn->close();
}
}

?>