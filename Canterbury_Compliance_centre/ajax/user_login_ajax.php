<?php

?>

<?php

//Start session
session_start();
//Include file to get connection to MySQL
include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

//Check if 2 values email and a password are given
if ($_POST["email"] != '' and $_POST["password"] != '')
{

		//Declare 2 variables
		$username    = cleanData($_POST["email"]);
		$password = cleanData($_POST["password"]);
		$sqlText = "SELECT * FROM owner WHERE username='" . $username . "' AND password='" . $password . "'";
		//Create a query which helps us to check if there is a user in a database who tries to log in
        $query = $mysqli->query($sqlText);
        $myrow = $query->fetch_assoc();

		//If there is no such a record inside of a database then we return 2 parameters resultOK=false and a message to my.js
        if (empty($myrow['id'])) {
            header('Content-type: application/json; charset=utf-8');
            $massiv_jasone['resultOK'] = false;
            $massiv_jasone['message']  = 'Autorization is not successfull! Email or password is incorrect!';
            $jason_encode              = json_encode($massiv_jasone);
            echo $jason_encode;
        } else {
			//If user is found then
			//we create 5 sessions and put values of a found user inside of it
			//print_r($myrow);
            $_SESSION['fullname'] = $myrow['fullname'];
            $_SESSION['password'] = $myrow['password'];
            $_SESSION['email']    = $myrow['email'];
            $_SESSION['user_id']   = $myrow['id'];
            $_SESSION['role_id']  = $myrow['roleId'];
 						$sqlnext = "SELECT id, role FROM role WHERE id = " . $myrow['roleId'];
			//After we define what role does he have based on a value from 'role_id'
            $query            = $mysqli->query($sqlnext);
            $myrow            = $query->fetch_assoc();
            $_SESSION['role'] = $myrow['role'];
            //We return 2 parameters resultOK=true and a message to my.js
            header('Content-type: application/json; charset=utf-8');

            $massiv_jasone['resultOK'] = true;
            $massiv_jasone['message']  = 'OK';
            $jason_encode              = json_encode($massiv_jasone);

            echo $jason_encode;
        }
} else {
	//We return 2 parameters resultOK=false and a message to my.js
    header('Content-type: application/json; charset=utf-8');
    $massiv_jasone['resultOK'] = false;
    $massiv_jasone['message']  = 'ERROR';
    $jason_encode              = json_encode($massiv_jasone);
    echo $jason_encode;
}
?>
