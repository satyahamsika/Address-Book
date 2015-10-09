<?php 
require_once "/var/www/hamsika.com/public_html/html/sample folder/OOPSAssignment/Config/Config.php";
require_once "/var/www/hamsika.com/public_html/html/sample folder/OOPSAssignment/Application/Controllers/User.php";
require_once "/var/www/hamsika.com/public_html/html/sample folder/OOPSAssignment/Application/Models/Database.php";
require_once "/var/www/hamsika.com/public_html/html/sample folder/OOPSAssignment/Public/Logger.php";

if (isset($_POST['submit'])) {       
    $user = new User($_POST);
    $error =  $user->validate();
    if ($error['errorFlag'] === false) {
    if ($user->addUser() === true) {
        header('location: Signup.php?success=1');  
    }
    }    
}
?>
<!doctype html>
<html>
    <head>
        <title>Account Creation</title>
        <meta content = "text/html;charset=utf-8" http-equiv = "Content-Type">
        <meta content = "utf-8" http-equiv="encoding">
        <link rel = "stylesheet" type = "text/css" href = "../Public/css/SignupForm.css"/>
        <script src = "../Public/js/common.js" type="application/javascript">
        </script>
        <script src = "../Public/js/registration.js" type="application/javascript">
        </script>
    </head>
    <body background = "../Public/images/Background.jpeg">
        <img src = "../Public/images/Logo.jpeg" alt = "Logo.jpeg"/>    
        <br/>
        <h1>Create your account<font color = "red"><?php if (isset($error['errorFlag']) && $error['errorFlag'] === true) {
            echo $error['errorMsg'];            
        } 
        ?></font>
        </h1>
        <div id = "color">
            <form name = "registration" action = "Signup.php" method = "POST">
                <p class = "ex">
                    <p>Name<span>*</span><br/>
                        <input type = "text" name = "fname" id = "fname" placeholder = "First name" onblur = "firstNameValidation()" onsubmit = "validate()">&nbsp;
                        <input type = "text" name = "lname" id = "lname" placeholder = "Last name" onblur = "lastNameValidation()" ><br/></p>
                    <p>Username<span>*</span><br/>
                        <input type = "text" name = "username" id = "uname" onblur = "userNameValidation()"><br/>
                    </p>
                    <p>Password<span>*</span><br/>     
                        <input type = "password" name = "password" id = "password" onblur = "passwordValidation()"><br/>
                    </p>
                    <p>Confirm Password<span>*</span><br/>
                        <input type = "password" name = "confirmpassword" id = "cpassword" onblur = "confirmPasswordValidation()"><br/>
                    </p>
                    <p>Birthday<span>*</span><br/> 
                        <select id = "month" name = "month" onblur = "monthValidation()" >
                            <option value = "0" selected >Select month</option>
                            <option value = "Jan">Jan</option>
                            <option value = "Feb">Feb</option>
                            <option value = "Mar">Mar</option>
                            <option value = "Apr">Apr</option>
                            <option value = "May">May</option>
                            <option value = "Jun">Jun</option>
                            <option value = "Jul">Jul</option>
                            <option value = "Aug">Aug</option>
                            <option value = "Sep">Sep</option>
                            <option value = "Oct">Oct</option>
                            <option value = "Nov">Nov</option>
                            <option value = "Dec">Dec</option>
                        </select>
                        <select id = "date" name = "day" onblur = "dateValidation()">
                            <option value = "0" selected >Select date</option>
                            <option value = "1">01</option>
                            <option value = "2">02</option>
                            <option value = "3">03</option>
                            <option value = "4">04</option>
                            <option value = "5">05</option>
                            <option value = "6">06</option>
                            <option value = "7">07</option>
                            <option value = "8">08</option>
                            <option value = "9">09</option>
                            <option value = "10">10</option>
                            <option value = "11">11</option>
                            <option value = "12">12</option>
                            <option value = "13">13</option>
                            <option value = "14">14</option>                     
                            <option value = "15">15</option>                       
                            <option value = "16">16</option>
                            <option value = "17">17</option>                    
                            <option value = "18">18</option>    
                            <option value = "19">19</option>
                            <option value = "20">20</option> 
                            <option value = "21">21</option>
                            <option value = "22">22</option>
                            <option value = "23">23</option>                                        
                            <option value = "24">24</option>
                            <option value = "25">25</option>
                            <option value = "26">26</option>
                            <option value = "27">27</option>
                            <option value = "28">28</option>
                            <option value = "29">29</option>
                            <option value = "30">30</option>
                            <option value = "31">31</option>
                        </select>
                        <select id = "year" name = "year" onblur = "yearValidation()">
                            <option value = "0" selected >Select year</option>
                            <option value = "1993">1993</option>
                            <option value = "1994">1994</option>
                            <option value = "1995">1995</option>
                            <option value = "1996">1996</option>
                            <option value = "1997">1997</option>
                            <option value = "1998">1998</option>
                            <option value = "1999">1999</option>
                            <option value = "2000">2000</option>
                            <option value = "2001">2001</option>
                            <option value = "2002">2002</option>
                            <option value = "2003">2003</option>
                            <option value = "2004">2004</option>
                            <option value = "2005">2005</option>
                            <option value = "2006">2006</option>                     
                            <option value = "2007">2007</option>                       
                            <option value = "2008">2008</option>
                            <option value = "2009">2009</option>                    
                            <option value = "2010">2010</option>    
                            <option value = "2011">2011</option>
                            <option value = "2012">2012</option> 
                            <option value = "2013">2013</option>
                            <option value = "2014">2014</option>
                            <option value = "2015">2015</option>                                        
                        </select>                    
                    </p>
                    <p>Gender<span>*</span><br/>
                        <input type = "radio" name = "gender" value = "male" onblur = "genValidation()">Male
                        <input type = "radio" name = "gender" value = "female" onblur = "genValidation()">Female
                    </p>
                    <p>Mobile No.<span>*</span><br/>
                        <input type = "text" name = "mobno" id = "mobileno" maxlength = "10" onblur = "mobNoValidation()" />
                    </p>
                    <p>Address<br/>
                        <textarea rows = "4" cols = "50" name = "address"></textarea>
                    </p>
                    <p>Location<span>*</span><br/>
                        <select id = "loc" name = "location" onblur = "uLocationValidation()">
		                    <option value = "0" selected >Select location</option>
	                        <option value = "Afghanisthan">Afghanistan</option>
	                        <option value = "Aland Islands">Aland Islands</option>
	                        <option value = "Albania">Albania</option>
	                        <option value = "Algeria">Algeria</option>
	                        <option value = "American Samoa">American Samoa</option>
	                        <option value = "Andorra">Andorra</option>
	                        <option value = "Angola">Angola</option>
	                        <option value = "Anguilla">Anguilla</option>
	                        <option value = "Antarctica">Antarctica</option>
	                        <option value = "Antigua">Antigua</option>
	                        <option value = "Argentina">Argentina</option>
	                        <option value = "Armenia">Armenia</option>
	                        <option value = "Aruba">Aruba</option>
	                        <option value = "Australia">Australia</option>
	                        <option value = "Austria">Austria</option>
	                        <option value = "Azerbaijan">Azerbaijan</option>
	                        <option value = "Bahamas">Bahamas</option>
	                        <option value = "Bahrian">Bahrain</option>
	                        <option value = "Bangladesh">Bangladesh</option>
	                        <option value = "Barbados">Barbados</option>
	                        <option value = "Belarus">Belarus</option>
	                        <option value = "Belgium">Belgium</option>
	                        <option value = "Belize">Belize</option>
	                        <option value = "Benin">Benin</option>
	                        <option value = "Bermuda">Bermuda</option>
	                        <option value = "Bhutan">Bhutan</option>
	                        <option value = "Bolivia">Bolivia</option>
	                        <option value = "Bonarie">Bonaire</option>
	                        <option value = "Bosnia">Bosnia</option>
	                        <option value = "Botswana">Botswana</option>
	                        <option value = "Bouvet">Bouvet Island</option>
	                        <option value = "Brazil">Brazil</option>
	                        <option value = "British">British Indian Ocean Territory</option>
	                        <option value = "Brunei">Brunei Darussalam</option>
	                        <option value = "Bulgaria">Bulgaria</option>
	                        <option value = "Burkina">Burkina Faso</option>
	                        <option value = "Burundi">Burundi</option>
	                        <option value = "Cambodia">Cambodia</option>
	                        <option value = "Cameroon">Cameroon</option>
	                        <option value = "Canada">Canada</option>
	                        <option value = "Cape">Cape Verde</option>
	                        <option value = "Cayman">Cayman Islands</option>
	                        <option value = "CAfrican">Central African Republic</option>
	                        <option value = "Chad">Chad</option>
	                        <option value = "Eritrea">Eritrea</option>
	                        <option value = "Estonia">Estonia</option>
	                        <option value = "Ethiopia">Ethiopia</option>
	                        <option value = "Falkland">Falkland Islands (Malvinas)</option>
	                        <option value = "Faroe">Faroe Islands</option>
	                        <option value = "Fiji">Fiji</option>
	                        <option value = "Finland">Finland</option>
	                        <option value = "Iceland">Iceland</option>
	                        <option value = "India">India</option>
	                        <option value = "Indonesia">Indonesia</option>
	                        <option value = "Iran">Iran</option>
	                        <option value = "Iraq">Iraq</option>
	                        <option value = "Ireland">Ireland</option>
	                        <option value = "Isle">Isle of Man</option>
	                        <option value = "Israel">Israel</option>
	                        <option value = "Italy">Italy</option>
	                        <option value = "Jamica">Jamaica</option>
	                        <option value = "Japan">Japan</option>
	                        <option value = "Jersey">Jersey</option>
	                        <option value = "Jordan">Jordan</option>	            
	                    </select> 
                    </p>
                    <p>Pincode<span>*</span><br/>
                        <input type = "text" name = "pincode" id = "pincode" maxlength = "6" onblur = "pinCodeValidation()"/>  
                    </p>                    
                    <p><input type = "checkbox" name = "agree" id = "agree" value = "on" onblur = "agreeValidation()">
                        I agree to terms and conditions.
                    </p>
                    <p><br/>
                        <input type = "submit"  value = "Submit" name = "submit"/>		
                        <input type = "reset" name = "reset" value = "Reset"/>
                    </p>
                    <p><b>Note:</b><span>*</span> Indicates required fields.
                    </p>
                </p>   
            </form>
        </div>
    </body>
</html>

