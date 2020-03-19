<?php

include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

 $fullname      	= trim(htmlspecialchars(stripslashes(cleanData($_POST["fullname"]))));
$email     		  = trim(htmlspecialchars(stripslashes(cleanData($_POST["email"]))));
$mobileNo      	= trim(htmlspecialchars(stripslashes(cleanData($_POST["mobileNo"]))));
$subject      	= trim(htmlspecialchars(stripslashes(cleanData($_POST["subject"]))));
$msg      		  = trim(htmlspecialchars(stripslashes(cleanData($_POST["msg"]))));

  $sqltext = "INSERT INTO tblcontactus (fullname,emailId,mobileNo,subject,message)
  VALUES ('$fullname','$email','$mobileNo','$subject','$msg')";

  $query = mysqli_query($mysqli,$sqltext );

    header('Content-type: application/json; charset=utf-8');
    $massiv_jasone['resultOK'] = true;
    $massiv_jasone['message']  = "OK";
    $jason_encode              = json_encode($massiv_jasone);
    echo $jason_encode;

?>
