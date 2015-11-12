function validate()
{
	var error = true;
	var userName = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	var numbers = /^[A-Za-z0-9]+$/; 
	if (userName == "") {	        
    	document.getElementById("usernameError").innerHTML = "E-mail id cannot be empty"; 
	    var error = false; 
	} else {
        document.getElementById("usernameError").innerHTML = ""; 
    }
	if (password == "") { 
        document.getElementById("passwordError").innerHTML = "Password cannot be empty";
	    var error = false; 
	}  else if (!numbers.test(password)) {
        document.getElementById("passwordError").innerHTML = "Password must be in alphanumeric"; 
        var error = false;
    } else {
        document.getElementById("passwordError").innerHTML = ""; 
    }
    if (error) {
    	return true;
    } else {
      	return false;
    }
}

	
    
    
