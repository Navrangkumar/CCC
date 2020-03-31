
$(document).ready(function() {

  function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test($email);
  }

    $('.only_integers_allowed').on('keyup keypress', function(e) {
        if (e.keyCode == 8 || e.keyCode == 46) {} else {
            var letters = '1234567890';
            return (letters.indexOf(String.fromCharCode(e.which)) != -1);
        }
    });

    $('.only_defined_integers_allowed').on('keyup keypress', function(e) {
        var id = $(this).attr('id').trim();
        var val = $('#' + id).val().trim();

        if (id == 'mobileNo') {
            if (val.length > 10) {
                return false;
            }
        }
    });


    $(document).on('click', '.contact', function() {

      var fullname= $('#fullname').val().trim();
      var email= $('#email').val().trim();
      var mobileNo= $('#mobileNo').val().trim();
      var subject= $('#subject').val().trim();
      var msg= $('#msg').val().trim();

        pError = false;



        if (fullname == "") {
            $('#fullname_warning_message').html('Full Name should be filled');
            $("#fullname_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#fullname_warning_message").switchClass("d-block", "d-none");
        }

        if (email == "") {
            $('#email_warning_message').html('Email should be filled');
            $("#email_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else if (!validateEmail(email)) {
            $('#email_warning_message').html('The email field must be valid');
            $("#email_warning_message").switchClass("d-none", "d-block");
            pError = true;
		//If there are no mistakes then we hide a message below it
        }

        else {
            $("#email_warning_message").switchClass("d-block", "d-none");
        }


		if (mobileNo == "") {
            $('#mobileNo_warning_message').html('Mobile Number should be filled');
            $("#mobileNo_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }
		else if (mobileNo.length < 10 || mobileNo.length > 10) {
            $('#mobileNo_warning_message').html('Mobile Number should contain 10 digits');
            $("#mobileNo_warning_message").switchClass("d-none", "d-block");
            pError = true;
        } else {
            $("#mobileNo_warning_message").switchClass("d-block", "d-none");
        }


		if (subject == "") {
            $('#subject_warning_message').html('Subject should be filled');
            $("#subject_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#subject_warning_message").switchClass("d-block", "d-none");
        }

		if (msg == "") {
            $('#msg_warning_message').html('Message should be filled');
            $("#msg_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#msg_warning_message").switchClass("d-block", "d-none");
        }

        if (pError == true) {
            return false;
        }

        $.ajax({
              type: 'POST',
              url: 'ajax/ajax_contact.php',
              data: {

              fullname: fullname,
              email: email,
              mobileNo: mobileNo,
  			      subject: subject,
  			      msg: msg
              },
              success: function(result) {
  				alert(result);

              if (result.resultOK == true) {

                      $('#fullname').val('');
  					          $('#email').val('');
  					          $('#mobileNo').val('');
                      $('#subject').val('');
  					          $('#msg').val('');

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
