<div class="modal fade" id="myModal">
	<div class='modal-dialog'>
	</div>
</div>
<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";
?>
<?php
//action.php
if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
  $query = "SELECT * FROM tblservices ORDER BY s_id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
    <tr>
     <th width="20%">Service Name</th>
     <th width="50%">Details</th>
     <th width="15%">Image</th>
     <th width="7%">Edit</th>
     <th width="8%">Remove</th>
    </tr>
    </thead>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<tbody>
    <tr>
    <td>
    '.$row["name"].'
    </td>
    <td>
       '.$row["details"].'
    </td>
     <td>

		 <button type="button" name="edit_image" class="btn bt-xs edit_image" id="'.$row["s_id"].'">
		 <img src="data:image/jpeg;base64,'.base64_encode($row['s_img'] ).'" height="60" width="75" class="img-thumbnail" />
			</button>
     </td>
     <td><button type="button" name="edit_service" class="btn btn-warning bt-xs edit_service" data-id="'.$row["s_id"].'" data-action="edit">Edit</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["s_id"].'">Remove</button></td>
    </tr>
    </tbody>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
   $name=$_POST['serviceName'];
   $details=$_POST['serviceeditor'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

  $query = "INSERT INTO tblservices(name,details,s_img) VALUES ('$name','$details','$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Data Inserted into Database';
  }
 }

 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM tblservices WHERE s_id = '".$_POST["service_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Data Deleted from Database';
  }
 }
}
if(isset($_POST["actionEdit"]))
{
	if($_POST["actionEdit"] == "updateEdit")
  {
   $file = addslashes(file_get_contents($_FILES["image_Edit"]["tmp_name"]));
   $query = "UPDATE tblservices SET s_img = '$file' WHERE s_id = '".$_POST["image_id_Edit"]."'";
   if(mysqli_query($connect, $query))
   {
    echo 'Image Updated into Database';
   }
  }
}
?>
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
</script>
