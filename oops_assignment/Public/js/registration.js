function firstNameValidation() 
{
    var fName = document.registration.fname;
    if (!isLetter(fName)) {      
        alert ('First Name should not be empty and it must be letter');
        blurActionOn(fName);
        return false;              
    } else {           
        blurActionOff(fName);
        return true;
    }
}        
function lastNameValidation() 
{
    var lName = document.registration.lname; 
    if (!isLetter(lName)) {        
        alert ('Last Name should not be empty and it must be letter'); 
        blurActionOn(lName); 
        return false;       
    } else {         
        blurActionOff(lName); 
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
function monthValidation() 
{
    var uMonth = document.registration.month;
    if(!isEmpty(uMonth)) {     
        alert("Select birth month");        
        blurActionOn(uMonth);         
        return false;    
    } else {          
        blurActionOff(uMonth);  
        return true;
    }
}
function dateValidation() 
{
    var uDate = document.registration.date;  
    if(!isEmpty(uDate)) {  
        alert("Select birth date");     
        blurActionOn(uDate);         
        return false;        
    } else {        
        blurActionOff(uDate);  
        return true;
    }
}
function yearValidation() 
{
    var uYear = document.registration.year; 
    if(!isEmpty(uYear)) {            
        alert("Select birth year");
        blurActionOn(uYear);         
        return false;             
    } else {      
        blurActionOff(uYear);  
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
function uLocationValidation() 
{
    var uLocation = document.registration.loc;  
    if(!isEmpty(uLocation)) {       
        alert("Select location");         
        blurActionOn(uLocation);         
        return false;          
    } else {
        blurActionOff(uLocation);  
        return true;
    }  
}
function pinCodeValidation() 
{   
    var pinCode = document.registration.pincode;
    if(!isNumber(pinCode)) {
        alert('Pincode must have numeric characters only');       
        blurActionOn(pinCode);         
        return false;           
    } else {                  
        blurActionOff(pinCode);  
        return true;                  
    }  
}
function agreeValidation() 
{
    var agree =  document.registration.agree; 
    if(!isAgree(agree)) {
        alert('Agree terms and conditions');     
        blurActionOn(agree);         
        return false;         
    } else {                  
        blurActionOff(agree);
        return true;  
    }
}


        
        
             
    
           
          
      
    
    
    
     
       
         
    
    
    
    
    
                     
    
    
    
      
              
      
         
       

            
      
          
      
          
     
                 

         
     
           
     
     
           
         
       
        
         
         
        
     
       
                 
      
        
        
     
           

            
     
       
     
           
       
         
      
        
       
     
    
      
          
      
      
      
          
        
      
      
      
           
     
       
         
       
     
     
           
      
          
       
         
       
         
     
       
         
       
       
       
           
          
         
                
          
          
       
         
       
            
      
              
      
            

        
     
       

           
     
       
         
         
       
       
       
     
       
     
           
            
        
        
            
     
       
          
      
            
       
       
        
    
       
         
            
            

    
