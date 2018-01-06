$('.rating input').change(function () {
  var $radio = $(this);
  $('.rating .selected').removeClass('selected');
  $radio.closest('label').addClass('selected');
});

function validate(form){
	var fname_format = /^[A-Za-z\s]+$/
	if(!fname_format.test(form.fname.value)) {
		alert("Error: You have entered an invalid first name!");
		form.fname.focus();
		return false;
	}
	var lname_format = /^[A-Za-z\s]+$/
	if(!lname_format.test(form.lname.value)) {
		alert("Error: You have entered an invalid second name!");
		form.lname.focus();
		return false;
	}
	var mail_format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	if(!mail_format.test(form.email.value)) {
		alert("Error: You have entered an invalid email address!");
		form.email.focus();
		return false;
	}
}

