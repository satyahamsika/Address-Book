function validateRegistration()
{
    var error = true;
    var name = document.getElementById("pname").value;
    var userName = document.getElementById("uname").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
    var genderM = document.getElementById("genderM").checked;
    var genderF = document.getElementById("genderF").checked;
    var mobno = document.getElementById("mobileno").value;
    var letters = /^[A-Za-z]+$/; 
    var numbers = /^[A-Za-z0-9]+$/; 
    var mobileNum = /^[0-9]+$/;
    if (name == "" || name <= 25 ) {         
        document.getElementById("nameError").innerHTML = "Name cannot be empty"; 
        var error = false; 
    } else if (!letters.test(name)) {
        document.getElementById("nameError").innerHTML = "Name must be in alphabets"; 
        var error = false;
    } else {
        document.getElementById("nameError").innerHTML = ""; 
    }
    if (userName == "") {         
        document.getElementById("usernameError").innerHTML = "E-mail id cannot be empty"; 
        var error = false; 
    } else {
        document.getElementById("usernameError").innerHTML = ""; 
    }
    if (password == "" || password <=12) { 
        document.getElementById("passwordError").innerHTML = "Password cannot be empty and it must be less than 12";
        var error = false; 
    } else if (!numbers.test(password)) {
        document.getElementById("passwordError").innerHTML = "Password must be in alphanumeric"; 
        var error = false;
    } else {
        document.getElementById("passwordError").innerHTML = ""; 
    }
    if (cpassword == "" || cpassword <=12) {         
        document.getElementById("cpasswordError").innerHTML = "Confirm password cannot be empty and it must be less than 12"; 
        var error = false; 
    } else if (!numbers.test(cpassword)) {
        document.getElementById("cpasswordError").innerHTML = "confirm Password must be in alphanumeric"; 
        var error = false;
    } else {
        document.getElementById("cpasswordError").innerHTML = ""; 
    }
    if (password != cpassword) {
        document.getElementById("mismatchError").innerHTML = "Password mismatch"; 
        var error = false; 
    } else {
        document.getElementById("mismatchError").innerHTML = ""; 
    }
    if (genderM == "" && genderF == "") {
        document.getElementById("genderError").innerHTML = "Gender cannot be empty"; 
        var error = false; 
    } else {
        document.getElementById("genderError").innerHTML = ""; 
    }
    if (mobno == "") {         
        document.getElementById("mobNoError").innerHTML = "Mobile no cannot be empty"; 
        var error = false; 
    }  else if (!mobileNum.test(mobno)) {
        document.getElementById("mobNoError").innerHTML = "mobile number must be in numbers"; 
        var error = false;
    } else {
        document.getElementById("mobNoError").innerHTML = ""; 
    }
    if (error) {
        return true;
    } else {
        return false;
    }
}


        
        
             
    
           
          
      
    
    
    
     
       
         
    
    
    
    
    
                     
    
    
    
      
              
      
         
       

            
      
          
      
          
     
                 

         
     
           
     
     
           
         
       
        
         
         
        
     
       
                 
      
        
        
     
           

            
     
       
     
           
       
         
      
        
       
     
    
      
          
      
      
      
          
        
      
      
      
           
     
       
         
       
     
     
           
      
          
       
         
       
         
     
       
         
       
       
       
           
          
         
                
          
          
       
         
       
            
      
              
      
            

        
     
       

           
     
       
         
         
       
       
       
     
       
     
           
            
        
        
            
     
       
          
      
            
       
       
        
    
       
         
            
            
