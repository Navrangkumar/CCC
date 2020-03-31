$(document).ready(function() {

  function validateEmail($email) {
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      return emailReg.test($email);
  }

    $('.only_integers_allowed').on('keyup keypress', function(e) {
        if (e.keyCode == 8 || e.keyCode == 46) {} else {
            var letters = '+1234567890';
            return (letters.indexOf(String.fromCharCode(e.which)) != -1);
        }
    });
    $('.only_defined_integers_allowed').on('keyup keypress', function(e) {
        var id = $(this).attr('id').trim();
        var val = $('#' + id).val().trim();

        if (id == 'phone') {
            if (val.length > 11) {
                return false;
            }
        }
    });
    $('.only_defined_integers_allowed').on('keyup keypress', function(e) {
        var id = $(this).attr('id').trim();
        var val = $('#' + id).val().trim();
        if (id == 'year') {
            if (val.length > 3) {
                return false;
            }
        }
    });

$(document).on('click', '.eastimate', function() {


var fullname= $('#fullname').val().trim();
var email= $('#email').val().trim();
var phone= $('#phone').val().trim();
var country= $('#country').val().trim();
var make_model= $('#make_model').val().trim();
var identification_no= $('#identification_no').val().trim();
var year= $('#year').val().trim();
var patrol_desigal= $('#patrol_desigal').val().trim();
var isModified= $('#isModified').val().trim();
var hand_type= $('#hand_type').val().trim();
var EES= $('#EES').val().trim();
var msg= $('#msg').val().trim();

        pError = false;
        if (fullname == "") {
            $('#fullname_warning_message').html('Fullname should be filled');
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

        if (phone == "") {
            $('#phone_warning_message').html('Phone Number should be filled');
            $("#phone_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }
        else if (phone.length < 10 || phone.length > 10) {
            $('#phone_warning_message').html('Phone Number should contain 10 digits');
            $("#phone_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }
        else {
            $("#phone_warning_message").switchClass("d-block", "d-none");
        }


        if (country == "") {
            $('#country_warning_message').html('Country should be filled');
            $("#country_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#country_warning_message").switchClass("d-block", "d-none");
        }

        if (make_model == "") {
            $('#make_model_warning_message').html('Model should be filled');
            $("#make_model_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#make_model_warning_message").switchClass("d-block", "d-none");
        }

        if (identification_no == "") {
            $('#identification_no_warning_message').html('Vehicle Identification Number should be filled');
            $("#identification_no_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#identification_no_warning_message").switchClass("d-block", "d-none");
        }

        if (year == "") {
            $('#year_warning_message').html('Vehicle Manufacture Year should be filled');
            $("#year_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }
		    else if (year.length < 4 || year.length > 4) {
            $('#year_warning_message').html('Year should contain 10 digits');
            $("#year_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#year_warning_message").switchClass("d-block", "d-none");
        }



		    if (patrol_desigal == "") {
            $('#patrol_desigal_warning_message').html('Fuel Type should be filled');
            $("#patrol_desigal_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#patrol_desigal_warning_message").switchClass("d-block", "d-none");
        }


		    if (isModified == "") {
            $('#isModified_warning_message').html('Type Yes or No');
            $("#isModified_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#isModified_warning_message").switchClass("d-block", "d-none");
        }

        if (hand_type == "") {
            $('#hand_type_warning_message').html('Type Left or Right');
            $("#hand_type_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#hand_type_warning_message").switchClass("d-block", "d-none");
        }

        if (EES == "") {
            $('#EES_warning_message').html('EES should be filled');
            $("#EES_warning_message").switchClass("d-none", "d-block");
            pError = true;
        }  else {
            $("#EES_warning_message").switchClass("d-block", "d-none");
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
              url: 'ajax/ajax_estimateform.php',
              data: {
              fullname: fullname,
              email: email,
              phone: phone,
			        country: country,
			        make_model: make_model,
			        identification_no: identification_no,
              year: year,
              patrol_desigal: patrol_desigal,
              isModified: isModified,
              hand_type: hand_type,
              EES: EES,
              msg: msg
            },
            success: function(result) {
				//alert(result);
              if (result.resultOK == true) {
              $('#fullname').val('');
              $('#email').val('');
              $('#phone').val('');
              $('#country').val('');
              $('#make_model').val('');
              $('#identification_no').val('');
              $('#year').val('');
              $('#patrol_desigal').val('');
              $('#isModified').val('');
              $('#hand_type').val('');
              $('#EES').val('');
              $('#msg').val('');
                    Swal.fire(
                        'Congradulations!',
                        'Record has just been inserted',
                        'success'
                    )
                }
                else {
                    $("#message").switchClass("d-none", "d-block");
                    $('#message').html(result.message);
                }
            }
        });
    });
});
