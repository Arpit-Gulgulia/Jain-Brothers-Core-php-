<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  
  <meta charset="utf-8">
  <!-- UTF-8(Unicode Transformation Format) can represent any character in the Unicode standard. -->
  <!-- Unicode: Unicode is a universal character encoding standard. Unlike ASCII, which was designed to represent only basic English characters, Unicode was designed to support characters from all languages around the world. While ASCII only uses one byte to represent each character, Unicode supports up to 4 bytes for each character -->
  
  <title>Login| My Account| SnehaEnterprises</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <!--  General Syntax: <link rel="icon" href="icon_path" type="image/icon type"> -->
  <link rel="icon" type="image/png" href="S, Character, Alphabet, Letter.png">
  
  <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
   
    <!-- Bootstrap Scripts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">

    <style type="text/css">

      @font-face {
        font-family: "Gill Sans Medium";
            src: url("font/Gill Sans Medium.otf") format("opentype");
            }

        @font-face {
        font-family: "Gill Sans Light";
            src: url("font/Gill Sans Light.otf") format("opentype");
      }

        @font-face {
        font-family: "baskerville old face";
            src: url("font/BASKVILL.ttf") format("truetype");
        }
    </style>


</head>


<!-- Why do we put a # in the href attribute of the link?

Since we do not have any page to link it to, and we do not want to get a "404" message, we put # as the link -->
<body>
        <!-- Header -->
    <section id="header">
                  
                 <!-- FREE DELIVERY DIV HEADING  -->
            <div class="top_header bg-dark ">
                  <i class="fa fa-truck" aria-hidden="true">
                               <span style="font-family: Gill Sans Medium">Free Standard Delivery on Order Over $49</span>
                    </i>
            </div>   

        <!-- MAIN NAVIGATION BAR -->
    <nav class="navbar navbar-light navbar-expand-md bg-light justify-content-center border-bottom sticky-top"><!-- bg-faded for making navbar transparent -->
           
            <a href="/" class="navbar-brand d-flex w-50 mr-auto">JAINS BROTHERS</a> <!-- BRAND NAME --> 
               <!-- COLLAPSABLE BUTTON -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <!-- COLLAPSING ITEMS -->
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                 <ul class="navbar-nav w-100 justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Women</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Men</a>
                        </li>
                </ul>
                <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="far fa-heart fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="fas fa-shopping-bag fa-lg"></i></a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#"><i class="far fa-user fa-lg"></i></a>
                        </li>
                </ul>
            </div> <!-- End of collapsing navbar-content -->
    </nav> <!-- END OF NAVBAR -->

             
 <main>
  <section id="loginContent">
   <div class="wrapper-main my-5">
     <div class="container bg-light">
      <h1 class="text-center pt-5 my-5">My account</h1>
        <div class="container">
         
            <div class="row">  
            <div class="col-lg-5 pl-5">
               <form class="form-signup" action="includes/login.inc.php" method="post">
                 <h6>I HAVE AN ACCOUNT</h6>
                 <div class="col-lg-12 my-2 pl-0 py-2">
                      <input type="email" name="emailaddress" class="form-control rounded-0" placeholder="Email address*">
                 </div>
                 <div class="col-lg-12 my-2 pl-0 py-2">
                      <input type="password" name="pwd" class="form-control rounded-0" placeholder="Password*">
                 </div> 
                 <a href="#" style="border:none;font-size: 0.7rem;font-family:Gill Sans Medium;">Forgotten your password?</a>
                 <div class="col-lg-12 pl-0 py-2">
                      <input type="submit" name="login-submit" class="submitButton btn my-2 mb-3" value="LOG IN">
                 </div>
              </form>     
            </div>
             <div class="col-lg-7">
                <div>
                   <h6>CREATE AN ACCOUNT</h6>
                    <p>Creating an account will give you access to the following:</p>
                    <p><b>Editing of Personal Information:</b></p>
                    <p>Save or change your name, password or billing address</p>
                    <p><b>Address Book:</b></p>
                    <p>Save your delivery addresses</p>
                    <p>Wishlist: Let people know about the items you'd like</p>
                    <p><b>Order History:</b></p>
                    <p>Find your previous orders</p>
                </div>
                <div class="col-lg-12 pl-0">
                   <a href="signup.php" class="btn custom">Create an account using your email address</a>
                </div>
             </div> 

          </div> <!-- End of row -->
          
        </div> <!-- End of container --> 

     </div> <!--  End of bg-light container -->
     <?php
        // if (isset($_SESSION['u_id'])) {
        //   echo "<h1>Hi! ".$_SESSION['u_title']." ".$_SESSION['u_first']." ".$_SESSION['u_last']." "." YOU ARE LOGGED IN</h1>";
        // }
      
      ?>
   </div> <!-- End of wrapper-main -->
</section>
 </main>



        
        
        
            
    
                 
     <script >
     	
       function validation() {

           var user = document.getElementById('userEmail').value; 
           if (user == "") {
           	 document.querySelector('small').style.display = "block";
           }

       }





     </script>       
    
                 
     

            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
         </script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
         </script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
         </script>


</body>


</html>











