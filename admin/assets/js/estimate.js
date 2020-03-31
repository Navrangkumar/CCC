$(document).ready(function(){
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   var action = "delete";
   if(confirm("Are you sure you want to remove this message from database?"))
   {
    $.ajax({
     url:"admin_ajax/ajax_estimate.php",
     method:"POST",
     data:{id:id, action:action},
     success:function(data)
     {
      //alert(data);
      window.location.reload();
     }
    })
   }
   else
   {
    return false;
   }
  });
  });
