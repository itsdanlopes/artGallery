
<!--------------------------------------------- Credentials validation ------------------------------------------------------------------->
<?php
$dbhost = '52.215.185.140';
$dbuser = 'daniel_2018267';
$dbpass = '13072012';
$dbname = 'daniel_2018267';
// -------------------------------------------------------------------------------------------------------------------------------------->
// ------------------------------------------- Create a database connection ------------------------------------------------------------->
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
// -------------------------------------------------------------------------------------------------------------------------------------->
// --------------------------------------------- Check connection ----------------------------------------------------------------------->
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
// -------------------------------------------------------------------------------------------------------------------------------------->

// 5. Close database connection
//mysqli_close($connection);
?>