$(document).ready(function(){
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   var action = "delete";
   if(confirm("Are you sure you want to remove this message from database?"))
   {
    $.ajax({
     url:"admin_ajax/ajax_testimonials.php",
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
  $(document).on('click', '.view', function(){
   var id = $(this).attr("id");
   var action = "view";
   if(confirm("Are you sure you want to show this Feedback to website?"))
   {
    $.ajax({
     url:"admin_ajax/ajax_testimonials.php",
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
  $(document).on('click', '.inactive', function(){
   var id = $(this).attr("id");
   var action = "inactive";
   if(confirm("Are you sure you want to Inactive this Feedback from website?"))
   {
    $.ajax({
     url:"admin_ajax/ajax_testimonials.php",
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
