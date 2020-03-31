$(document).ready(function() {

$(document).on('click', '.feedbackquery', function()
{

var fullname= $('#fullname').val().trim();
var comment= $('#comment').val().trim();
pError = false;

    if (fullname == "") {
        $('#fullname_warning_message').html('[Fullname] should be filled');
        $("#fullname_warning_message").switchClass("d-none", "d-block");
        pError = true;
    }  else {
        $("#fullname_warning_message").switchClass("d-block", "d-none");
    }

    if (comment == "") {
        $('#comment_warning_message').html('[comment] should be filled');
        $("#comment_warning_message").switchClass("d-none", "d-block");
        pError = true;
    }  else {
        $("#comment_warning_message").switchClass("d-block", "d-none");
    }
        if (pError == true) {
            return false;
        }
		$.ajax({
            type: 'POST',
            url: 'ajax/ajax_feedback.php',
            data: {

            fullname: fullname,
			      comment: comment
            },
            success: function(result) {
				//alert(result);
                if (result.resultOK == true) {
                    $('#fullname').val('');
					          $('#comment').val('');
                    Swal.fire(
                        'Congradulations!',
                        'Record has just been inserted',
                        'success'
                    )
                } else {
                    $("#message").switchClass("d-none", "d-block");
                    $('#message').html(result.message);
                }
            }
        });
    });
});
