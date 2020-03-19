<?php
/*
************************************************************
Long name  : Internet Project Framework
Short name : IPF
Author     : Alexey Abramov
E-mail     : abramov.developer@gmail.com
LinkedIn   : https://www.linkedin.com/in/alexey-abramov-kz/
City       : Christchurch / NewZealand
Year       : 2020
************************************************************
*/
?>

<?php
//No error will be shown
error_reporting(0);

//Create a new MySQL instance
$mysqli = new mysqli("localhost", "root", "", "ccc");

//In case there is an error in connection then we print a message
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//This function is used to clean up data retrieved from a database or from an HTML form
function cleanData($data) {
    $data = trim(htmlspecialchars(stripslashes($data)));
    $data = mysqli_real_escape_string($GLOBALS['mysqli'], $data);
    $data = str_replace("'", "`", $data);
    return trim($data);
}

?>
