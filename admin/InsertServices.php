<?php include "header.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div class="header">
                            <h1 class="page-header">
                                Manage Services
                            </h1>
    						<ol class="breadcrumb">
    					  <li><a href="index.php">Home</a></li>
    					  <li class="active">Service Details</li>
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
                        <button type="button" name="addservice" id="addservice" class="btn btn-success">Add</button>
                      </div>
                      <br />
                      <div class="table-responsive" id="service_data">
                      </div>
                  </div>
              </div>
              <!--End Advanced Tables -->
          </div>
      </div>
    </div>

<?php include "footer.php" ?>
<script src="assets/js/services.js"></script>

<div id="serviceModel" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Services</h4>
   </div>
   <div class="modal-body">
     <div class="panel-body">
         <form id="service_form" method="post" enctype="multipart/form-data">
             <div class="form-group">
                 <label for="exampleInputEmail1">Service Name</label>
                 <input type="text" class="form-control" id="serviceName" name="serviceName" placeholder="Service Name">
             </div>
             <div class="form-group">
                 <label for="exampleInputPassword1">Details</label>
                 <textarea  class="form-control" id="serviceeditor" name="serviceeditor"></textarea>
                 <script>
                        CKEDITOR.replace( 'serviceeditor' );
                </script>

             </div>
             <div class="form-group">
                 <label for="exampleInputFile">File input</label>
                 <input type="file" name="image" id="image" /></p>
                 <input type="hidden" name="action" id="action" value="insert" />
                 <input type="hidden" name="service_id" id="service_id" />
             </div>
                <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
         </form>
     </div>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="ServiceimageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Add Image</h4>
   </div>
   <div class="modal-body">
    <form id="image_form_edit" method="post" enctype="multipart/form-data">
     <p><label>Select Image</label>
     <input type="file" name="image_Edit" id="image_Edit" /></p><br />
     <input type="hidden" name="actionEdit" id="actionEdit" value="insertEdit" />
     <input type="hidden" name="image_id_Edit" id="image_id_Edit" />
     <input type="submit" name="insert_Edit" id="insert_Edit" value="Insert_Edit" class="btn btn-info" />

    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
