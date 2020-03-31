
<?php
//edit.php
include $_SERVER['DOCUMENT_ROOT'] . "/CCC/config.php";

if($_POST['id']) {
	$id      = trim(htmlspecialchars(stripslashes(cleanData($_POST["id"]))));
	$query = $mysqli->query("SELECT * FROM tblservices WHERE s_id=".$id);
	$myrow = $query->fetch_assoc();

        echo "
		<div class='modal-content'>
        <div class='modal-header'>
          <h4 class='modal-title'>Edit Service Record</h4>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
        </div>

        <div class='modal-body'>
				<div class='card-body'>
        <form id='service_update_form'>
            <div class='form-group'>
                <label for='exampleInputEmail1'>Service Name</label>
                <input type='text' class='form-control' id='serviceName' name='serviceName' value='$myrow[name]' placeholder='Service Name'>
            </div>
            <div class='form-group'>
                <label for='exampleInputPassword1'>Details</label>
                <textarea  class='form-control' id='serviceeditor' name='serviceeditor'>$myrow[details]</textarea>
                <script>
                       CKEDITOR.replace( 'serviceeditor' );
                </script>
            </div>

        </form>
            </div>

		</div>
        <div class='modal-footer'>
		      <button type='button' class='btn btn-success edit_service' data-id='$myrow[s_id]' data-action='update'>Update</button>
          <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
        </div>
      </div>
        ";
}
?>
