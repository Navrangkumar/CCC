<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";
?>
<?php
if(isset($_POST["action"]))
{
if($_POST["action"] == "delete")
{
 $query = "DELETE FROM tbltestimonial WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted from Database';
 }
}
if($_POST["action"] == "view")
{
 $query = "UPDATE tbltestimonial set approved=1 WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data updated from Database';
 }
}
if($_POST["action"] == "inactive")
{
 $query = "UPDATE tbltestimonial set approved=0 WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data updated from Database';
 }
}
}
?>
