<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            About US
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="UpdateAbout.php"> About Us Details</a></li>
					  <li class="active">Details</li>
					</ol>
		</div>
    <div id="page-inner">
      <div class="row">
          <div class="col-xs-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="card-title">
                          <div class="title">Update About Us Details</div>
                      </div>
                  </div>
                  <div class="panel-body">
                      <form>
                        <?php

                        $query = "SELECT * FROM tblaboutus ORDER BY id=1";
                        $result = mysqli_query($connect, $query);
                        while($row = mysqli_fetch_array($result))
                        {
                      ?>
                          <div class="form-group">

                              <textarea class="form-control"  id="edtAboutus" name="edtAboutus" ><?php echo $row["about"] ; ?>
                              </textarea>

                          </div>

                          <button type="submit" class="btn btn-info" id="'.$row["id"].'">Update</button>
                          <?php
                          }  ?>

                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>


<?php include "footer.php" ?>
<script>
       CKEDITOR.replace( 'edtAboutus' );
</script>
