$(document).ready(function(){

 fetch_data();


 function fetch_data()
 {
  var action = "fetch";
  $.ajax({
   url:"admin_ajax/ajax_employee.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#employee_data').html(data);
   }
  })
 }
 $(document).on('click', '.addemployee', function(){
  $('#employeeModel').modal('show');
  $('#employee_form')[0].reset();
  $('.modal-title').text("Add Employee");
  $('#emp_id').val('');
  $('#action').val('insert');
  $('#insert').val("Insert");
 });
 $('#employee_form').submit(function(event){
  event.preventDefault();
  var fullname = $('#fullname').val();
  var designation = $('#designation').val();
  var image_name = $('#image').val();
  if(fullname=='')
  {
    alert("Please Insert Service Name");
    return false;
  }
  else if(designation=='')
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
     url:"admin_ajax/ajax_employee.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {

      fetch_data();
      $('#employee_form')[0].reset();
      $('#employeeModel').modal('hide');
     }
    });
   }
  }
 });
 $(document).on('click', '.edit_employee', function(){
  var id = $(this).attr('data-id');
  var action = $(this).attr('data-action');
  if (action == "edit") {
  $.ajax({
        type: 'post',
        url: 'admin_ajax/ajax_edit_employee.php',
        data: 'id=' + id,
        success: function(response) {

        $('.modal-dialog').html(response);
        $('#myModal').modal('show');
        }
      });
  }

 if (action == "update") {

    var fullname = $('#fullname').val();
    var designation = $('#designation').val();


    if(fullname=='')
    {
      alert("Please Insert Service Name");
      return false;
    }
    else if(designation=='')
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
        url: 'admin_ajax/ajax_update_employee.php',
        data: {
            id: id,
            action: action,
            fullname: fullname,
            designation: designation
        },
        success: function(result) {
            if (result.resultOK == true)
            {
                fetch_data();
                $('#employee_update_form')[0].reset();
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
     url:"admin_ajax/ajax_employee.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
      alert(data);
      fetch_data();
      $('#image_form_edit')[0].reset();
      $('#EmployeeimageModal').modal('hide');
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
  $('#EmployeeimageModal').modal("show");
 });
 $(document).on('click', '.delete', function(){
  var emp_id = $(this).attr("id");
  var action = "delete";
  if(confirm("Are you sure you want to remove this image from database?"))
  {
   $.ajax({
    url:"admin_ajax/ajax_employee.php",
    method:"POST",
    data:{emp_id:emp_id, action:action},
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
