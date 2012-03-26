var v1 = false;
var v2 = false;
var v3 = false;
var v4 = false;
var v5 = false;
var v6 = false;

function isEmailCorrect(email) {
	var re = /^\w+([\.-]?\w+)*@(((([a-z0-9]{2,})|([a-z0-9][-][a-z0-9]+))[\.][a-z0-9])|([a-z0-9]+[-]?))+[a-z0-9]+\.([a-z]{2}|(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum))$/i;
	if(re.test(email)) {
		return true;
	} else {
		return false;
	}
}

function checkData(input, errorDivId, min, max) {
	data = document.forms['registerForm'][input].value;
	errorDiv = document.getElementById(errorDivId);

	if (data == null || (data.length < min || data.length > max)) {
		errorDiv.style.display = "block";
		return false;
	} else {
	  	errorDiv.style.display = "none";
	  	return true;
	}	
}

function comparePasswords(min, max) {
	pass1 = document.forms['registerForm']['password'].value;
	pass2 = document.forms['registerForm']['password2'].value;
	errorDiv = document.getElementById('rperr');

	if ((pass1 == null || (pass1.length < min || pass1.length > max)) ||
			(pass2 == null || (pass2.length < min || pass2.length > max))) {
		errorDiv.style.display = "block";
		v5 = false;
	} else if(pass1 != pass2){
		errorDiv.style.display = "block";	
		v5 = false;		
	} else {
	  	errorDiv.style.display = "none";
	  	v5 = true;
	}	
}


function validateForm(index)
{
	if(index == 1) {
		v1 = checkData('login', 'lerr', 5, 20);
  	}

  	if(index ==  2) {
		v2 = checkData('firstname', 'fnerr', 2, 20);
  	}

  	if(index == 3) {
		v3 = checkData('secondname', 'snerr', 2, 20);
  	}

  	if(index == 4) {
		v4 = checkData('password', 'perr', 6, 25);
  	}

  	if(index == 5) {
		comparePasswords(6, 25);
  	}

  	if(index == 6) {
  		data = document.forms['registerForm']['email'].value;
		errorDiv = document.getElementById('emerr');

		if ((data == null || data == "" || !isEmailCorrect(data)) && index > 0) {
	  		errorDiv.style.display = "block";
	  		v6 = false;
	  	} else {
	  		errorDiv.style.display = "none";
	  		v6 = true;
	  	}
  	}
}

function TestDataCheck() {
	for(var i = 1; i < 7; i++)
		validateForm(i);
	if(v1 && v2 && v3 && v4 && v5 && v6)
		return true;
	return false;
}