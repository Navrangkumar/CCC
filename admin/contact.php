<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
        <h1 class="page-header">
            Contact Form Request
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
                 Contact Request Data
            </div>
            <div class="panel-body">
              <?php

              $query = "SELECT * FROM tblcontactus ORDER BY id DESC";
              $result = mysqli_query($connect, $query);
?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                              <th width="40%">Personal Information</th>
                              <th width="50%">Message</th>
                              <th width="10%">Delete</th>
                          </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result))
                        {
                          ?>
                          <tbody>
                              <tr class="gradeU">
                                  <td><p><b>Name : </b><?php echo $row["fullname"] ;?><br><b>Email ID : </b><?php echo $row["emailId"] ; ?>
                                    <br><b>Phone No : </b><?php echo $row["mobileNo"] ; ?>
                                    <br><b>Time : </b><?php echo $row["rDate"] ; ?>
                                    <p></td>
                                  <td><p><b>Subject : </b><?php echo $row["subject"] ;?>
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
<script src="assets/js/contactus.js"></script>
