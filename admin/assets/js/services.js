$(document).ready(function(){

 fetch_data();


 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"admin_ajax/ajax_service.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#service_data').html(data);
   }
  })
 }
 $('#addservice').click(function(){
  $('#serviceModel').modal('show');
  $('#service_form')[0].reset();
  $('.modal-title').text("Add Service");
  $('#service_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#service_form').submit(function(event){
  event.preventDefault();
  CKEDITOR.instances.serviceeditor.updateElement();
  var serviceName = $('#serviceName').val();
  var details = $('#serviceeditor').val();
  var image_name = $('#image').val();
  if(serviceName=='')
  {
    alert("Please Insert Service Name");
    return false;
  }
  else if(details=='')
  {
    alert("Please Insert Service Details");
    return false;
  }
  else if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"admin_ajax/ajax_service.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {

      fetch_data();
      $('#service_form')[0].reset();
      $('#serviceModel').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.edit_service', function(){
  var id = $(this).attr('data-id');
  var action = $(this).attr('data-action');
  if (action == "edit") {
  $.ajax({
        type: 'post',
        url: 'admin_ajax/ajax_edit_service.php',
        data: 'id=' + id,
        success: function(response) {

        $('.modal-dialog').html(response);
        $('#myModal').modal('show');
        }
      });
  }

  if (action == "update") {
CKEDITOR.instances.serviceeditor.updateElement();
    var serviceName = $('#serviceName').val();
    var serviceeditor = $('#serviceeditor').val();


    if(serviceName=='')
    {
      alert("Please Insert Service Name");
      return false;
    }
    else if(serviceeditor=='')
    {
      alert("Please Insert Service Details");
      return false;
    }

    pError = false;

    if (pError == true) {
        return false;
    }

    $.ajax({
        type: 'POST',
        url: 'admin_ajax/ajax_update_service.php',
        data: {
            id: id,
            action: action,
            serviceName: serviceName,
            serviceeditor: serviceeditor
        },
        success: function(result) {
            if (result.resultOK == true) {
                fetch_data();
                $('#service_update_form')[0].reset();
                $('#myModal').modal('hide');
                alert("Data Changed Successfully");

            } else {
                $("#message").switchClass("d-none", "d-block");
                $('#message').html(result.message);
            }
        }
    });
}

 });
 $('#image_form_edit').submit(function(event){
  event.preventDefault();
  var image_name = $('#image_Edit').val();
  if(image_name == '')
  {
   alert("Please Select Image");
   return false;
  }
  else
  {
   var extension = $('#image_Edit').val().split('.').pop().toLowerCase();
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#image_Edit').val('');
    return false;
   }
   else
   {
    $.ajax({
     url:"admin_ajax/ajax_service.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form_edit')[0].reset();
      $('#ServiceimageModal').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.edit_image', function(){
  $('#image_id_Edit').val($(this).attr("id"));
  $('#actionEdit').val("updateEdit");
  $('.modal-title').text("Update Image");
  $('#insert_Edit').val("Update");
  $('#ServiceimageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var service_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"admin_ajax/ajax_service.php",
    method:"POST",
    data:{service_id:service_id, action:action},
    success:function(data)
    {
     alert(data);
     fetch_data();
    }
   })
  }
  else
  {
   return false;
  }
 });
});
