<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
        <h1 class="page-header">
            Manage Testmonials
        </h1>
<ol class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li class="active">Testmonials</li>
					</ol>

		</div>
<div id="page-inner">


<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Pending Testmonials
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                  <?php

                  $query = "SELECT * FROM tbltestimonial where approved=0 ORDER BY id DESC";
                  $result = mysqli_query($connect, $query);
    ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="20%">Name</th>
                                <th width="60%">Feedback</th>
                                <th width="10%">View</th>
                                <th width="10%">Delete</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result))
                        {
                          ?>
                          <tbody>
                              <tr class="gradeU">
                                  <td><?php echo $row["fullname"] ;?>
                                    </td>
                                  <td><?php echo $row["testimonials"] ;?>
                                  </td>
                                  <td><button type="button" name="view" class="btn btn-warning bt-xs view" id=<?php echo $row["id"];?>>
                                    View</button></td>
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
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                 Active Testmonials
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                  <?php

                  $query = "SELECT * FROM tbltestimonial where approved=1 ORDER BY id DESC";
                  $result = mysqli_query($connect, $query);
    ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example1">
                        <thead>
                            <tr>
                                <th width="20%">Name</th>
                                <th width="60%">Feedback</th>
                                <th width="10%">InActive</th>
                                <th width="10%">Delete</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_array($result))
                        {
                          ?>
                          <tbody>
                              <tr class="gradeU">
                                  <td><?php echo $row["fullname"] ;?>
                                    </td>
                                  <td><?php echo $row["testimonials"] ;?>
                                  </td>
                                  <td><button type="button" name="Deactive" class="btn btn-warning bt-xs inactive" id=<?php echo $row["id"];?>>
                                    Inactive</button></td>
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
<script src="assets/js/testimonials.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example1').dataTable();
    });
</script>
