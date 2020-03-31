<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";
?>
<?php
if(isset($_POST["action"]))
{
if($_POST["action"] == "delete")
{
 $query = "DELETE FROM tblcontactus WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted from Database';
 }
}
}
?>
