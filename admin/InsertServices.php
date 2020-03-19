<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Add Services
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="InsertServices.php">Add Services</a></li>
					  <li class="active">Services</li>
					</ol>
		</div>
    <div id="page-inner">
      <div class="row">
          <div class="col-xs-12">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <div class="card-title">
                          <div class="title">Insert Details</div>
                      </div>
                  </div>
                  <div class="panel-body">
                      <form>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Service Name</label>
                              <input type="text" class="form-control" id="serviceName" placeholder="Service Name">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Details</label>
                              <textarea class="form-control" id="txtEditor"></textarea>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Example block-level help text here.</p>
                          </div>

                          <button type="submit" class="btn btn-default">Submit</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>
<?php include "footer.php" ?>
