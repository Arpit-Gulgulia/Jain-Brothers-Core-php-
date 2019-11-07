<!-- Why do I put a # in the href attribute of the link?

Since I do not have any page to link it to, and I do not want to get a "404" message, I put # as the link in our examples. It should be a real URL to a specific page.
 -->
<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <!-- UTF-8(Unicode Transformation Format) can represent any character in the Unicode standard. -->
    <!-- Unicode: Unicode is a universal character encoding standard. Unlike ASCII, which was designed to represent only basic English characters, Unicode was designed to support characters from all languages around the world. While ASCII only uses one byte to represent each character, Unicode supports up to 4 bytes for each character -->
    
    <title>SnehaEnterprises: Online Shopping for Women, Men, Kids Fashion & Lifestyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Favicon -->
    <!--  General Syntax: <link rel="icon" href="icon_path" type="image/icon type"> -->
    <link rel="icon" type="image/png" href="S, Character, Alphabet, Letter.png">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesheets.css">
   
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
           
            <a href="#" class="navbar-brand d-flex w-50 mr-auto">JAIN BROTHERS</a> <!-- BRAND NAME --> 
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
                           <a class="nav-link" href="t-shirts.php">Men</a>
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
                           <a class="nav-link" href="login.html"><i class="far fa-user fa-lg"></i></a>
                        </li>
                </ul>
            </div> <!-- End of collapsing navbar-content -->
    </nav> <!-- END OF NAVBAR -->

    <section id="ethicalTrading">
            
    

             <div class="contentEthicalTrading text-center container-fluid my-5 bg-light py-5">
                  <div class="">
                     <p style="font-size: 1rem">Our Company Values</p> 
                  </div>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-4 ">
                            <div class="bg-white py-5 px-2" style="height: 45vh">
                              <h2>Courage</h2>
                              <p class="py-3">You will walk into any part of the business and meet courageous, charming and ambitious individuals that share the same entrepreneurial spirit the brand was founded on.</p>
                            </div>  
                          </div>
                          <div class="col-lg-4">
                            <div class="bg-white py-5 px-2" style="height: 45vh">
                              <h2>Integrity</h2>
                              <p class="py-3">Our people are principled, open and honest, creating a respectful and transparent environment to work in. We do not take ourselves too seriously either; we are humble, authentic and sincere.</p>
                            </div>  
                          </div>
                          <div class="col-lg-4">
                            <div class="bg-white py-5 px-2" style="height: 45vh">
                              <h2>Youthful Spirit</h2>
                              <p class="py-3">Like our clothes, we strive to make things appear effortless and embody the spirit of youth in our approach to life.</p>
                            </div>  
                          </div>

                      </div>
                  </div>
                     
             </div>


            <div class="text-center py-5 my-5 text-white" style="background-color: rgb(16,26,49);font-size: 1.5rem;font-family: baskerville old face";>
                <div class="py-3" style="line-height: 2rem;letter-spacing: 0.09rem">
                    JOIN OUR TEAM <br>
                    We can’t deliver our mission without<br>
                    a world‑class team – join us.<BR><br>
                    <a href="#" class="btn w-25 border-white text-white" style="font-family: Gill Sans Light">VIEW ALL VACANCIES</a>
                </div>
            </div>

            <div class="text-center py-5 my-5" style="font-size: 1.5rem;font-family: baskerville old face";>
                <div class="py-3" style="line-height: 2rem;letter-spacing: 0.09rem">
                    <i class="fab fa-linkedin-in" style="color: #0077B5"></i> <br>
                    LINKED IN<br>
                    Follow us to stay updated on the latest<br> Jain Brothers news and vacancies..<BR><br>
                    <a href="https://www.linkedin.com/uas/login" class="btn w-25 border-dark text-dark" style="font-family: Gill Sans Light">LET'S CONNECT</a>
                </div>
            </div>


    </section>         
             












        
        <section id="articles">
                 
                 <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4" style="border-right: 1px solid #fff">
                            <ul class="nav flex-column" style="text-align: center;">
                                <h6>A T &nbsp; Y O U R &nbsp; S E R V I C E</h6>
                                <li class="nav-item">
                                     <a class="nav-link" href="delivery.php">Delivery & Returns</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="contactUs.php">Contact Us</a>
                                </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="privacyPolicy.php">Privacy & Terms</a>
                                </li>
                            </ul>
                            
  
                        </div>
                        <div class="col-lg-4" style="text-align: center;border-right: 1px solid #fff">
                            <h6>J O I N &nbsp; T H E &nbsp; W O R L D &nbsp; O F &nbsp; J A I N  &nbsp;B R O T H E R S</h6>
                            <br>
                               <p style="letter-spacing: 0.07rem;">Get 5% off when you sign up - be the first to get the latest style stories and exclusive offers.</p>

                               <div class="container" style="letter-spacing: 0.05rem">
                    
                                   <a href="LoginSystem/signup.php" class="btn btn-outline-light women">Signup</a>
                                   <a href="LoginSystem/login.php" class="btn btn-outline-light men">Login</a>
    
                               </div>
                        </div>
                        <div class="col-lg-4">
                            <ul class="nav flex-column" style="text-align: center;">
                                <h6>J A I N  &nbsp;B R O T H E R S</h6>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Work With Us</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="#">Ethical Trading</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="#">Corporate Social Responsibility</a>
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                 </div>

        </section>
        
                
    <footer">
            <div id="footer" class="container-fluid bg-light" >
                      <div id="copyright">
                        <i class="far fa-copyright">JAIN BROTHERS</i>
                      </div>
                        
                      
                <div id="socialMedia" >
                                    
                            <ul class="nav justify-content-end">
                              <span >FOLLOW US: </span>
                                    <li class="nav-item">
                                       <a class="nav-link" href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="https://twitter.com/login?lang=en"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="https://touch.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    </ul> 
                </div>

            </div>
            
   </footer>
                 
                
    
                 
     

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