<!-- to connect webpage with database -->

<?php

// server name
$sname= "localhost";
// username
$unmae= "root";
// password may be empty or not it's optional
$password = "";

// name of the database is "test_db"
$db_name = "test_db";

// code for connecting webpage with mysql using "mysqli_connect function"
$conn = mysqli_connect($sname, $unmae, $password, $db_name);


// condition for connection failed.
if (!$conn) {

    echo "Connection failed!";

}
?>