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
    if (name == "" || name >= 7 || name <= 15 ) {         
        document.getElementById("nameError").innerHTML = "Name cannot be empty"; 
        var error = false; 
    } 
    if (userName == "") {         
        document.getElementById("usernameError").innerHTML = "E-mail id cannot be empty"; 
        var error = false; 
    } 
    if (password == "" || password >= 7 || password <=15) { 
        document.getElementById("passwordError").innerHTML = "Password cannot be empty";
        var error = false; 
    } 
    if (cpassword == "" || cpassword >= 7 || cpassword <=15) {         
        document.getElementById("cpasswordError").innerHTML = "Confirm password cannot be empty"; 
        var error = false; 
    } 
    if (genderM == "" && genderF == "") {
        document.getElementById("genderError").innerHTML = "Gender cannot be empty"; 
        var error = false; 
    } 
    if (mobno == "") {         
        document.getElementById("mobNoError").innerHTML = "Mobile no cannot be empty"; 
        var error = false; 
    }  
    if (error) {
        return true;
    } else {
        return false;
    }
}


        
        
             
    
           
          
      
    
    
    
     
       
         
    
    
    
    
    
                     
    
    
    
      
              
      
         
       

            
      
          
      
          
     
                 

         
     
           
     
     
           
         
       
        
         
         
        
     
       
                 
      
        
        
     
           

            
     
       
     
           
       
         
      
        
       
     
    
      
          
      
      
      
          
        
      
      
      
           
     
       
         
       
     
     
           
      
          
       
         
       
         
     
       
         
       
       
       
           
          
         
                
          
          
       
         
       
            
      
              
      
            

        
     
       

           
     
       
         
         
       
       
       
     
       
     
           
            
        
        
            
     
       
          
      
            
       
       
        
    
       
         
            
            

