<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

    $fullname     = trim(htmlspecialchars(stripslashes(cleanData($_POST["fullname"]))));
    $comment         = trim(htmlspecialchars(stripslashes(cleanData($_POST["comment"]))));
    $approved = 0;


	$sqltext = "INSERT INTO tbltestimonial (fullname,testimonials,approved) VALUES ('$fullname','$comment','$approved')";
	$query = mysqli_query($mysqli,$sqltext );

    header('Content-type: application/json; charset=utf-8');
    $massiv_jasone['resultOK'] = true;
    $massiv_jasone['message']  = "ok";
    $jason_encode              = json_encode($massiv_jasone);
    echo $jason_encode;

?>
