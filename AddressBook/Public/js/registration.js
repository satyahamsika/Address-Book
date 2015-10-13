function nameValidation() 
{
    var name = document.registration.pname;
    if (!isLetter(name)) {      
        alert ('Name should not be empty and it must be letter');
        blurActionOn(name);
        return false;              
    } else {           
        blurActionOff(name);
        return true;
    }
}        
function userNameValidation() 
{
    var uName = document.registration.uname;
    var lBound = 7, uBound = 12;
    if (!isValid(uName)) {     
        alert("User name should not be empty");     
        blurActionOn(uName);         
        return false;             
    } else if(!isValid(uName,lBound,uBound)) {          
        alert("User name length must be between "+lBound+" to "+uBound);     
        blurActionOn(uName);         
        return false;         
    } else {      
        blurActionOff(uName);  
        return true;      
    }     
}
function passwordValidation() 
{
    var password = document.registration.password;
    var lBound = 7,uBound = 12;
    if(!isValid(password)) {           
        alert("Password should not be empty");      
        blurActionOn(password);         
        return false;    
    } else if (!isValid(password,lBound,uBound)) {     
        alert("Password length must be between "+lBound+"  to "+uBound);            
        blurActionOn(lName);         
        return false; 
    } else {               
        blurActionOff(password);  
        return true;    
    }       
}
function confirmPasswordValidation() 
{
    var cPassword = document.registration.cpassword;
    var lBound = 7,uBound = 12;
    var checkPassword = document.registration.password.value;     
    var checkConfirmPassword = document.registration.cpassword.value;
    if (!isValid(cPassword)) {         
        alert("Confirm password should not be empty");     
        blurActionOn(cPassword);         
        return false;       
    } else if (!isValid(cPassword,lBound,uBound)) {     
        alert("Confirm password length must be between "+lBound+"  to "+uBound);          
        blurActionOn(cPassword);         
        return false;        
    } else if (!isMatch(checkPassword,checkConfirmPassword)) {            
        alert("Password mismatch"); 
        return false;     
    } else {         
        blurActionOff(cPassword);  
        return true; 
    }
}
function genValidation() 
{
    var gen = document.registration.gender;   
    if(!isCheck(gen)) {
        alert("Select gender");
        blurActionOn(gen);
        return false;  
    } else {
        blurActionOff(gen);
        return true;
    }
}
function mobNoValidation() 
{
    var mobNo = document.registration.mobileno;
    if(!isNumber(mobNo)) {     
        alert('Mob no must have numeric characters only');             
        blurActionOn(mobNo);         
        return false;     
    } else {
        blurActionOff(mobNo);  
        return true;
    }  
}

        
        
             
    
           
          
      
    
    
    
     
       
         
    
    
    
    
    
                     
    
    
    
      
              
      
         
       

            
      
          
      
          
     
                 

         
     
           
     
     
           
         
       
        
         
         
        
     
       
                 
      
        
        
     
           

            
     
       
     
           
       
         
      
        
       
     
    
      
          
      
      
      
          
        
      
      
      
           
     
       
         
       
     
     
           
      
          
       
         
       
         
     
       
         
       
       
       
           
          
         
                
          
          
       
         
       
            
      
              
      
            

        
     
       

           
     
       
         
         
       
       
       
     
       
     
           
            
        
        
            
     
       
          
      
            
       
       
        
    
       
         
            
            

    
