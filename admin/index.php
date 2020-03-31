<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
        <h1 class="page-header">
            Enquiry Details
        </h1>
<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li class="active">Data</li>
					</ol>

		</div>

<div id="page-inner">

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Service Vehicle Eastimate Enquiry Table
            </div>
            <div class="panel-body" id="mydiv">
                <div class="table-responsive">
                  <?php

                  $query = "SELECT * FROM tblserviceestimate ORDER BY id DESC";
                  $result = mysqli_query($connect, $query);
    ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="40%">Personal Information</th>
                                <th width="50%">Enquiry Details</th>
                                <th width="10%">Delete</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result))
                        {
                          ?>
                        <tbody>
                            <tr class="gradeU">
                                <td><p><b>Name : </b><?php echo $row["fullname"] ;?><br><b>Email ID : </b><?php echo $row["email"] ; ?>
                                  <br><b>Phone No : </b><?php echo $row["phone"] ; ?>
                                  <br><b>Time : </b><?php echo $row["rDate"] ; ?>
                                  <p></td>
                                <td><p><b>Shipping Country : </b><?php echo $row["country"] ;?><br><b>Model Name : </b><?php echo $row["make_model"] ; ?>
                                  <br><b>Vehicle Identification No : </b><?php echo $row["identification_no"] ; ?><br><b>Year :</b><?php echo $row["year"] ; ?>
                                  <br><b>Fuel Type : </b><?php echo $row["patrol_desigal"] ; ?><br><b>Is Modified ? : </b><?php echo $row["isModified"] ; ?>
                                  <br><b>Hand Drive Type : </b><?php echo $row["hand_type"] ; ?><br><b>EES ? : </b><?php echo $row["EES"] ; ?>
                                  <br><b>Message : </b><br><?php echo $row["message"] ; ?>
                                  <p>
                                </td>
                                <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id=<?php echo $row["id"];?>>
                                  Remove</button></td>
                            </tr>
                        </tbody>
                        <?php
                        }  ?>

                    </table>

                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

</div>

<?php include "footer.php" ?>
<script src="assets/js/estimate.js"></script>
