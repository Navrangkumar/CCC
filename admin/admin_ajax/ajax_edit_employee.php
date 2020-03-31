
<?php
//edit.php
include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

if($_POST['id']) {
	$id      = trim(htmlspecialchars(stripslashes(cleanData($_POST["id"]))));
	$query = $mysqli->query("SELECT * FROM tblteam WHERE id=".$id);
	$myrow = $query->fetch_assoc();

        echo "
		<div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title'>Edit Employee Record</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>

        <div class='modal-body'>
				<div class='card-body'>
        <form id='employee_update_form'>
            <div class='form-group'>
                <label for='exampleInputEmail1'>Employee Name</label>
                <input type='text' class='form-control' id='fullname' name='fullname' value='$myrow[fullname]' placeholder='Employee Name'>
            </div>
						<div class='form-group'>
                <label for='exampleInputEmail1'>Designation</label>
                <input type='text' class='form-control' id='designation' name='designation' value='$myrow[designation]' placeholder='Employee Designation'>
            </div>

        </form>
            </div>

		</div>
        <div class='modal-footer'>
		      <button type='button' class='btn btn-success edit_employee' data-id='$myrow[id]' data-action='update'>Update</button>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
        ";
}
?>
