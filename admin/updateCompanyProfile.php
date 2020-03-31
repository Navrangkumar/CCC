<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Company Profile
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Change Company Profile</li>
					</ol>
		</div>
    <div id="page-inner">
      <div class="row">
          <div class="col-xs-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="card-title">
                          <div class="title">Edit Company Profile</div>
                      </div>
                  </div>
                  <div class="panel-body">
                    <?php

                    $query = "SELECT * FROM owner where id=1";
                    $result = mysqli_query($connect, $query);
      ?>

                    <form>
                      <?php
                      while($row = mysqli_fetch_array($result))
                      {
                        ?>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" value="<?php echo $row["username"] ; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" value="<?php echo $row["password"] ; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="mobileno">Mobile No</label>
                            <input type="text" class="form-control" id="mobileno" value="<?php echo $row["mobileNo"] ; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="emailid">Email ID</label>
                            <input type="text" class="form-control" id="emailid" value="<?php echo $row["emailId"] ; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="address1">Plot No , Stree Name</label>
                            <input type="text" class="form-control" id="address1" value="<?php echo $row["address1"] ; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="address2">Suburb, City</label>
                            <input type="text" class="form-control" id="address2" value="<?php echo $row["address2"] ; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="address3">Region, Country</label>
                            <input type="text" class="form-control" id="address3" value="<?php echo $row["address3"] ; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="hours">Hours</label>
                            <input type="text" class="form-control" id="hours" value="<?php echo $row["hours"] ; ?>" >
                        </div>


                        <button type="submit" class="btn btn-info">Submit</button>
                        <?php
                        }  ?>

                    </form>

                  </div>
              </div>
          </div>
      </div>
    </div>
<?php include "footer.php" ?>
