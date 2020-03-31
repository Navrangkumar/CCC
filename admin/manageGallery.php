<?php include "header.php" ?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header">
                        <h1 class="page-header">
                            Manage Gallery
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="manageGallery.php">Gallery</a></li>
					  <li class="active">Manage Gallery</li>
					</ol>
		</div>
    <div id="page-inner">
      <div class="row">
          <div class="col-md-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">

                  <div class="panel-body">

   <h3 align="center"></h3>
   <br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success">Add</button>
   </div>
   <br />
  <div class="table-responsive" id="image_data">

   </div>


                  </div>
              </div>
              <!--End Advanced Tables -->
          </div>
      </div>
    </div>

<?php include "footer.php" ?>
<script src="assets/js/gallery.js"></script>
<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image" id="image" /></p><br />
     <input type="hidden" name="action" id="action" value="insert" />
     <input type="hidden" name="image_id" id="image_id" />
     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
