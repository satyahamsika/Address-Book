function validate()
{
	var error = true;
	var userName = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if (userName == "") {	        
    	document.getElementById("usernameError").innerHTML = "E-mail id cannot be empty"; 
	    var error = false; 
	} 
	if (password == "") { 
        document.getElementById("passwordError").innerHTML = "Password cannot be empty";
	    var error = false; 
	}  
    if (error) {
    	return true;
    } else {
      	return false;
    }
}

	
    
    
