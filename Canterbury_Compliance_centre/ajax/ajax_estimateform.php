<?php
include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

	$fullname      	= trim(htmlspecialchars(stripslashes(cleanData($_POST["fullname"]))));
  $email     		= trim(htmlspecialchars(stripslashes(cleanData($_POST["email"]))));
  $phone      	= trim(htmlspecialchars(stripslashes(cleanData($_POST["phone"]))));
	$country      	= trim(htmlspecialchars(stripslashes(cleanData($_POST["country"]))));
	$make_model     = trim(htmlspecialchars(stripslashes(cleanData($_POST["make_model"]))));
	$identification_no = trim(htmlspecialchars(stripslashes(cleanData($_POST["identification_no"]))));
	$year      		= trim(htmlspecialchars(stripslashes(cleanData($_POST["year"]))));
	$patrol_desigal	= trim(htmlspecialchars(stripslashes(cleanData($_POST["patrol_desigal"]))));
	$isModified     = trim(htmlspecialchars(stripslashes(cleanData($_POST["isModified"]))));
	$hand_type      = trim(htmlspecialchars(stripslashes(cleanData($_POST["hand_type"]))));
	$EES      		= trim(htmlspecialchars(stripslashes(cleanData($_POST["EES"]))));
	$msg      		= trim(htmlspecialchars(stripslashes(cleanData($_POST["msg"]))));


  $sqltext = "INSERT INTO tblserviceestimate (fullname,email,phone,country,make_model,identification_no,year,patrol_desigal,isModified,hand_type,EES,message) VALUES ('$fullname','$email','$phone','$country','$make_model','$identification_no','$year','$patrol_desigal','$isModified','$hand_type','$EES','$msg')";
	$query = mysqli_query($mysqli,$sqltext );

    header('Content-type: application/json; charset=utf-8');
    $massiv_jasone['resultOK'] = true;
    $massiv_jasone['message']  = "OK";
    $jason_encode              = json_encode($massiv_jasone);
    echo $jason_encode;

?>
