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
  $query = "SELECT * FROM tblteam ORDER BY id DESC";
  $result = mysqli_query($connect, $query);
  $output = '
      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead>
    <tr>
     <th width="30%">Employee Name</th>
     <th width="30%">Designation</th>
     <th width="20%">Image</th>
     <th width="10%">Edit</th>
     <th width="10%">Remove</th>
    </tr>
    </thead>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
<tbody>
    <tr>
    <td>
    '.$row["fullname"].'
    </td>
    <td>
       '.$row["designation"].'
    </td>
     <td>

		 <button type="button" name="edit_image" class="btn bt-xs edit_image" id="'.$row["id"].'">
		 <img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="100" width="60" class="img-thumbnail" />
			</button>
     </td>
     <td><button type="button" name="edit_employee" class="btn btn-warning bt-xs edit_employee" data-id="'.$row["id"].'" data-action="edit">Edit</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["id"].'">Remove</button></td>
    </tr>
    </tbody>
   ';
  }
  $output .= '</table>';
  echo $output;
 }

 if($_POST["action"] == "insert")
 {
   $fullname=$_POST['fullname'];
   $designation=$_POST['designation'];
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

  $query = "INSERT INTO tblteam(fullname,designation,photo) VALUES ('$fullname','$designation','$file')";
  if(mysqli_query($connect, $query))
  {
   echo 'Data Inserted into Database';
  }
 }

 if($_POST["action"] == "delete")
 {
  $query = "DELETE FROM tblteam WHERE id = '".$_POST["emp_id"]."'";
  if(mysqli_query($connect, $query))
  {
   echo 'Image Deleted from Database';
  }
 }
}
if(isset($_POST["actionEdit"]))
{
	if($_POST["actionEdit"] == "updateEdit")
  {
   $file = addslashes(file_get_contents($_FILES["image_Edit"]["tmp_name"]));
   $query = "UPDATE tblteam SET photo = '$file' WHERE id = '".$_POST["image_id_Edit"]."'";
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
