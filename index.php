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
    <link rel="stylesheet" href="css.css">
   
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
           
            <a href="index.php" class="navbar-brand d-flex w-50 mr-auto">JAIN BROTHERS</a> <!-- BRAND NAME --> 
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
                           <a class="nav-link" href="LoginSystem/login.php"><i class="far fa-user fa-lg"></i></a>
                        </li>
                </ul>
            </div> <!-- End of collapsing navbar-content -->
    </nav> <!-- END OF NAVBAR -->

             
<!-- SECTION CONTAINING JUMBOTRON AND SHOP CATEGORY(MEN OR WOMEN) -->
    <section id="title">
         <!-- 2-JUMBOTRONS IN ONE DIV USING GRID SYSTEM -->
        <div class="row container-fluid m-0 p-0">
                    <div id="jumbo1" class="col-lg-6 jumbotron jumbotron-fluid" style="cursor: pointer;" onclick="location.href='#';"  >
                        
                    </div>
                    <div id="jumbo2" class="col-lg-6 jumbotron jumbotron-fluid" style="cursor: pointer;" onclick="location.href='#';">
                        
                    </div>
        </div> <!-- END OF JUMBOTRON CONTAINER -->


        <!-- SHOP CATEGORY DIV = WOMEN -->
        <div class="row container-fluid Shop-Women float-left mb-1" style="height: 330px;">
                <h2>Shop Women</h2>
            <div id="buttonDivWomen" class="container-fluid">
                <a href="#" class="btn btn-outline float-left"  role="button" >DRESSES</a>
                <a href="#" class="btn btn-outline float-right" role="button" >T-SHIRTS</a>
                <a href="#" class="btn btn-outline float-left"  role="button" >SWIMWEAR</a>
                <a href="#" class="btn btn-outline float-right" role="button" >HOODIES</a>
            </div>
        </div> <!-- END OF SHOP CATEGORY DIV = WOMEN  -->

        <!-- SHOP CATEGORY DIV = MEN -->
        <div class="container-fluid Shop-Men w-50 mb-1" style="height: 330px;"> <!-- Using height to Make Two ctegory div same height -->
                <h2 class="mx-auto">Shop Men</h2>  <!-- mx-auto to text-align center because unfortunately text-center or text-align both not working -->
            <div id="buttonDivMen" class="container-fluid">
                <a href="#" class="btn btn-outline float-left"  role="button" >SHIRTS</a>
                <a href="#" class="btn btn-outline float-right" role="button" >T-SHIRTS</a>
                <a href="#" class="btn btn-outline float-left"  role="button" >SHORTS</a>
                <a href="#" class="btn btn-outline float-right" role="button" >HOODIES</a>
            </div>
        </div> <!-- END OF SHOP CATEGORY DIV = MEN -->
    </section>    <!-- END OF SECTION CONTAINING JUMBOTRON AND SHOP CATEGORY(MEN OR WOMEN) -->         











<!-- FOR SALE -->
   <section id="sale">

       <div class="mb-1" style="cursor: pointer;" onclick="location.href='#';">
           <img src="download.png" class="img-fluid">
       </div>
       
   </section>
   
<!-- FOR NEW    -->
  <section id="new">
        <div class="mb-5" style="cursor: pointer;" onclick="location.href='#';">
            <img src="new(2).png" class="img-fluid">
            <div class="text-block">
                <h3>NEW <br>ARRIVALS</h3>
                <p>CAUSE EVERY SEASON CALL FOR NEW A NEW WARDROBES</p>
                <button class="btn btn-outline-dark"> SEE WHAT'S NEW >> </button>
            </div>
        </div> 
        <div class="container">
            <hr>
        </div>
  </section>




<!-- Features Section -->
    <section id="features">

                  <div class="container">
                           
                            <h2 class="text-center">Delivery for you </h2>
                        
                
                             <div class="row">
                                       <div style="cursor: pointer;" onclick="location.href='returns.php';"             class="col-lg-3 col-sm-6 customCol1"><!--  window.location is same as location.href   --> <!-- To make entire div as link -->
                                             <i class="fas fa-redo fa-3x"></i>
                                                <h6>FREE RETURNS</h6>
                                                      
                                                  <p>Returning your order for free: just take it back to one of our stores.</p>
                                       </div>
                                       <div style="cursor: pointer;" onclick="location.href='delivery.php';" class="col-lg-3 col-sm-6 customCol2">
                                             <i class="fas fa-home fa-3x"></i>
                                                <h6>CLICK & COLLECT</h6>
                                                       
                                                  <p>Place an order and collect it from 2000+ location across the UK.</p>
                                       </div>
                                       <div style="cursor: pointer;" onclick="location.href='delivery.php';" class="col-lg-3 col-sm-6 customCol3">
                                             <i class="fa fa-truck fa-3x"></i>
                                                <h6>FREE DELIVERY</h6>
                                                       
                                                   <p>That's right! We offer free delivery. Click here for for more info. </p>
                                        </div>
                                       <div style="cursor: pointer;" onclick="location.href='#';" class="col-lg-3 col-sm-6 customCol4">
                                            <i class="fas fa-gift fa-3x"></i>
                                                <h6>E-VOUCHERS</h6>
                                                       
                                                   <p>E-Vouchers- less running around for you, more choice for them.</p>
                            </div>
                </div>
                        <br>
                        <!-- <center><a class="btn btn-outline-light btn-md" href="#" style="color: #000; ">F I N D &nbsp; O U T &nbsp; M O R E</a></center>  -->

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
                                    <a class="nav-link" href="workWithUs.php">Work With Us</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="ethicalTrading.php">Ethical Trading</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link"  href="Corporate-Social-Responsibility.php">Corporate Social Responsibility</a>
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