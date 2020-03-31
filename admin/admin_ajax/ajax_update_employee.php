

<?php

	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

	if ($_POST["id"] != '') {

	   $id     = trim(htmlspecialchars(stripslashes(cleanData($_POST["id"]))));

    $fullname       = trim(htmlspecialchars(stripslashes(cleanData($_POST["fullname"]))));
		$designation       = trim(htmlspecialchars(stripslashes(cleanData($_POST["designation"]))));



    $query = mysqli_query($mysqli, "UPDATE tblteam SET fullname='$fullname',designation='$designation' WHERE id='$id'");

    header('Content-type: application/json; charset=utf-8');
    $massiv_jasone['resultOK'] = true;
    $massiv_jasone['message']  = "OK : ".$id;
    $jason_encode              = json_encode($massiv_jasone);
    echo $jason_encode;
} else {
    header('Content-type: application/json; charset=utf-8');
    $massiv_jasone['resultOK'] = false;
    $massiv_jasone['message']  = "ERROR";
    $jason_encode              = json_encode($massiv_jasone);
    echo $jason_encode;
}

?>
