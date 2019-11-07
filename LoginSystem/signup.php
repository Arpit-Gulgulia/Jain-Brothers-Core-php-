<?php

require "header.php";

?>

 <main>
	<section id="signupContent">
   <div class="wrapper-main my-5">
   	 <div class="container bg-light">
   	 	<h1 class="text-center">Create an Account</h1>
        <div class="container w-75">
              <?php echo "<h3 class='py-2 printError'>".$_SESSION['signup']."</h3>"; ?>
        	<form class="form-signup" onsubmit="return validation()" action="includes/signup.inc.php" method="post">
            <div class="row">
              <span id="title">Please select your title</span>  
        		<div class="col-lg-12 pl-0">
        				<select name="title" class="custom-select rounded-0 float-left pl-4" style="height: 48px; width:15%;">
        					<option selected>Title</option>
        					<option value="Mr">Mr</option>
        					<option value="Mrs">Mrs</option>
        					<option value="Miss">Miss</option>
        					<option value="Mrs">Mrs</option>
        					<option value="Other">Other</option>
        				</select>
        			
        		</div> <!-- End of title dropdown Buttons -->
        		    <div class="col-lg-6 my-2">
                        <span id="fname">Please enter your first name</span>
        			    <input type="text" name="firstName" class="form-control rounded-0" placeholder="First Name*">
        			</div>
        			<div class="col-lg-6 my-2">
                        <span id="lname">Please enter your last name</span>
        			    <input type="text" name="lastName" class="form-control rounded-0" placeholder="Last Name*">
        			</div>
        			<div class="col-lg-6 my-2">
                        <span id="email">Please provide an email.</span>
        				<input type="email" name="emailaddress" class="form-control rounded-0" placeholder="Email address*">
        			</div>
        			<div class="col-lg-6 my-2">
                        <span id="emailConfirm">Please provide an email confirmation.</span>
        				<input type="email" name="confirmEmailAddress" class="form-control rounded-0" placeholder="Confirm Email address*">
        			</div>
        			<div class="col-lg-6 my-2">
                        <span id="pwd">Please provide a password</span>
        				<input type="password" name="pwd" class="form-control rounded-0" placeholder="Create Password*">
        			</div>
        			<div class="col-lg-6 my-2">
                        <span id="confirmPwd">Please provide a password confirmation.</span>
        				<input type="password" name="confirmPwd" class="form-control rounded-0" placeholder="Confirm Password*">
        			</div>
        			<div>
        				<input type="checkbox" class="my-4" name="" class="" value="">Please send me email update,special offers and promotion
        			</div>
        			<div class="col-lg-6">
        				<input type="submit" name="signup-submit" class="submitButton btn my-2 mb-3" value="CREATE AN ACCOUNT">
        			</div>
        			<div class="" style="font-size: 0.8rem;font-family:"Gill Sans Light";">
        				<p>By creating an account you are aged over 18 and agree to the <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></p>
        			</div>
        			
        	</div> <!-- End of row -->
         </form>   
        </div> <!-- End of container --> 

   	 </div> <!--  End of bg-light container -->
   </div> <!-- End of wrapper-main -->
</section>

 </main>

 <script type="text/javascript">

function validation(){

     var fname = document.getElementsByName("firstName")[0].value;
     var lname = document.getElementsByName("lastName")[0].value;
      
     var email = document.getElementsByName("emailaddress")[0].value;
     var confirmemail = document.getElementsByName("confirmEmailAddress")[0].value;
    
     var pwd = document.getElementsByName("pwd")[0].value;
     var confirmPwd = document.getElementsByName("confirmPwd")[0].value;

     // A Regex is typically delimited by a pair of forward slash,in the form of /.../ 
     //The leading ^ and $ the trailing are known as position anchors, which match the beginning and ending of the input string,respectively.As result, as a result entire string shall be matched instead of matching a portion of input string.Without these postion anchors, the refex can match any part of input string 
     // ^ The password string start this way
     // (?=.*[a-z]) The string must contain at least 1 lowercase alphabetical character
     // (?=.*[A-Z]) The string must contain at least 1 uppercase alphabetical character
     // (?=.*[0-9]) The string must contain at least 1 numeric character
     // (?=.*[!@#\$%\^&\*]) The string must contain atleast one special character,but we escapping reserved Regex  Characters to avoid conflict
     // (?=.{8,}) The stringmust be 8 characteror long
     
     //[] Brackets are used to find a range of characters:
     //{} to give limits
     
     namepattern = /^[a-zA-Z ]*$/ ; //omly letter and space allowed

     emailpattern = /^[A-Za-z_.0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;

     pwdpattern = /^(?=.*[0-9])(?=.*[!@#\$%\^&\*])[a-zA-Z0-9!@#\$%\^&\*]{8,}$/;

     //Error handling
     
    if (fname == "") {
         document.getElementById('fname').style.display = "inline";
         return false;
    }
    if (lname == "") {
         document.getElementById('lname').style.display = "inline";
         return false;
    }
    if (email == "") {
         document.getElementById('email').style.display = "inline";
         return false;
    }
    if (confirmemail == "") {
         document.getElementById('emailConfirm').style.display = "inline";
         return false;
    }
    if (pwd == "") {
         document.getElementById('pwd').style.display = "inline";
         return false;
    }
    if (confirmPwd == "") {
         document.getElementById('confirmPwd').style.display = "inline";
         return false;
    }

   else{

    if ( !namepattern.test(fname)) {
         document.getElementById('fname').innerHTML = "Only letter and space are allowed";
         document.getElementById('fname').style.display = "inline";
         return false;
    }
    if ( !namepattern.test(lname)) {
         document.getElementById('lname').innerHTML = "Only letter and space are allowed";
         document.getElementById('lname').style.display = "inline";
         return false;
    }
         
    
    if ( !emailpattern.test(email)) {
         document.getElementById('email').innerHTML = "Please provide valid email address ";
         document.getElementById('email').style.display = "inline";
         return false;
    }
     if (confirmemail != email) {
         document.getElementById('emailConfirm').innerHTML = "The two email address isn't matching";
         document.getElementById('emailConfirm').style.display = "inline";
         return false;
    }
    if ( !pwdpattern.test(pwd)) {
         document.getElementById('pwd').innerHTML =  "Password must contain atleast one number, one special character and 8 character long";
         document.getElementById('pwd').style.display = "inline";
         return false;
    }
    if (confirmPwd != pwd) {
         document.getElementById('confirmPwd').innerHTML = "The two Password doesn't matching";
         document.getElementById('confirmPwd').style.display = "inline";
         return false;
    }


   }  //end of else

}
    
     


 </script>

<?php

require "footer.php";


?>