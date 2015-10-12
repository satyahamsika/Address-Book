function userNameValidation()
{
	var userName = document.login.username;
	var letters = /^[A-Za-z]+$/;
	if (userName.value.match(letters)) { 
        return true;
    }
	alert('Username cannot be empty');
    return false;     
} 
function passwordValidation()
{
	var password = document.login.password;
	var letters = /^[A-Za-z]+$/;
	if (password.value.match(letters)) { 
        return true;
    }
	alert('Password cannot be empty');
    return false;     
} 

	
    
    
