function isLetter(param) 
{
    var letters = /^[A-Za-z]+$/;    
    if (param.value.match(letters)) { 
        return true;
    }
    return false;     
} 
function isValid(param, lBound, uBound) 
{
    var paramLen = param.value.length;       
    if (paramLen == 0) {
        return false;        
    } else if (paramLen < lBound || paramLen > uBound ) {
        return false;           
    } else {   
        return true;
    }          
} 
function isCheck(gender) 
{
    check = 0;     
    if ((gender[0].checked == false) && (gender[1].checked == false)) {          
        return false;       
    }          
    return true;     
} 
function isNumber(param) 
{
    var numbers = /^[0-9]+$/;
    if (param.value.match(numbers)) {
        return true;
    }   
    return false;
}
function isMatch(checkPassword, checkConfirmPassword) 
{
    if(checkPassword != checkConfirmPassword) {
        return false;
    }
    return true;
}
function blurActionOn(param) 
{
    param.style.border = "1px solid red";
    param.focus();    
} 
function blurActionOff(param) 
{
    param.style.border = "";
} 


  
