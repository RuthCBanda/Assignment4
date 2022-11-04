var nameError = document.getElementById('name-error');
var numError = document.getElementById('num-error');
var emailError = document.getElementById('email-error');
var enquiryError = document.getElementById('enquiry-error');
var submitError = document.getElementById('submit-error');

function validateName(){
	var name = document.getElementById('birthname').value;
	
	if(name.length == 0){
		nameError.innerHTML = 'Name is REQUIRED';
		return false;
	}
	if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
		nameError.innerHTML = 'Write full name';
		return false;
	}
	nameError.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
	return true;
}

function validateNumber(){
	var number = document.getElementById('phonenumber').value;
	
	if(number.length == 0){
		numError.innerHTML = 'Number is REQUIRED';
		return false;
	}
	if(number.length !== 10){
		numError.innerHTML = 'Number should be 10 digits';
		return false;
	}
	if(!number.match(/^[0-9]{10}$/)){
		numError.innerHTML = 'Only digits are REQUIRED';
		return false;
	}
	
	numError.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
	return true;
}

function validateEmail(){
	var email = document.getElementById('emailaddress').value;
	
	if(email.length == 0){
		emailError.innerHTML = 'Email is REQUIRED';
		return false;
	}
	if(!email.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/)){
		emailError.innerHTML = 'Email INVALID';
		return false;
		}
		emailError.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
	return true;
}

function validateEnquiry(){
	var enquiry = document.getElementById('enquirymessage').value;
	var required = 50;
	var left = required - enquiry.length;
	
	if(left > 0){
		enquiryError.innerHTML = left +  ' more characters required';
		return false;
	}
	enquiryError.innerHTML = '<i class="fa fa-check-circle" aria-hidden="true"></i>';
	return true;
}

function validateForm(){
	if(!validateName() || !validateNumber() || !validateEmail() || !validateEnquiry()){
		submitError.style.display = 'block'	;
		submitError.innerHTML = 'Please fix error to submit';
		setTimeout(function(){submitError.style.display ='none';}, 3000);
	return false;
	}
} 