<?php 
  session_start();
  $product_ids = array();
  // session_destroy(); //In case if any created
  //Check if Add to cart button has been submitted
  if (filter_input(INPUT_POST,'add_to_cart'))
   {
       if (isset($_SESSION['shopping_cart'])) //If Shopping cart exist exist
       { 
          //Create a counter to keep track of how many products are in the shopping so we know the array key for next product 
          $count = count($_SESSION['shopping_cart']); 
           // count(array,mode);
           //mode Optional. Specifies the mode. Possible values:
           //0 - Default. Does not count all elements of multidimensional arrays
           //1 - Counts the array recursively (counts all the elements of multidimensional arrays)
          
           //Create a sequential (Index array) array for matching array keys to products id's
           $product_ids = array_column( $_SESSION['shopping_cart'],'id'); //Id of products that are added in cart
           // echo "<pre>";
           // print_r($product_ids);
           // echo "</pre>";
          
                 if (!in_array(filter_input(INPUT_GET, 'id'),$product_ids))
                  { //if Product with this id doesn't already exist in cart
                     $_SESSION['shopping_cart'][$count] = array  //just copied below code when no product was added
                       (
              
                        'id' => filter_input(INPUT_GET, 'id'),
                        'name' => filter_input(INPUT_POST,'name'),
                        'price' => filter_input(INPUT_POST,'price'),
                        'quantity' => filter_input(INPUT_POST,'quantity')


                        );//End of array
                   }  //end of if statements
                 else { //if product already exist in cart just add quantity
               
                          for ($i=0; $i < count($product_ids) ; $i++)
                             {//loop through add quantity that has been already add
                                 if ($product_ids[$i] == filter_input(INPUT_GET, 'id')) 
                                 { //if id matches add its quantity
                                //add item quantity to the existing product in the array 
                              $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
                                  }
                              }

                       }  //end of else statements

        } //End of inner if statements


        else { // if shopping cart doesn't exist,create first product with array key 0
           // create array using submitted from data, start from key 0 and fill it with values
           $_SESSION['shopping_cart'][0] = array
           (
              
              'id' => filter_input(INPUT_GET, 'id'),
              'name' => filter_input(INPUT_POST,'name'),
              'price' => filter_input(INPUT_POST,'price'),
              'quantity' => filter_input(INPUT_POST,'quantity')


           );//End of array

        } //End of inner else statements

   // 
  }//End of outer if statements
  
  //Removing products from the shopping cart session:
 if (filter_input(INPUT_GET,'action') == 'delete') { //To check if remove button is clicked or not 
     //loop through all product in the shopping cart until it matches with GET id variable
      foreach ($_SESSION['shopping_cart'] as $key => $product) {//looping through shopping cart array.
        if ($product['id'] == filter_input(INPUT_GET, 'id')) { //if input id provided from form matches with cart product id
          //Remove product from the shopping cart when it matches with GET id
          unset($_SESSION['shopping_cart'][$key]);
        }
      }
      //Reset session array keys so they match with $product_ids numeric array
      $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
 }



    echo "<pre>";
   print_r($_SESSION);
   echo "</pre>";
?>



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
    <link rel="stylesheet" href="rough.css">
   
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


             
 <!-- Main Content -->
       
     <section id="products">
	            <div id="pinkStrip" class="container-fluid">
        	      <p>25% off everythings- ends tomorrow</p> 
                </div>
  <!--  WE CAN USE The .breadcrumb and .breadcrumb-item classes indicates the current page's location within a navigational hierarchy  -->     
                <div id="currentPath" class="container-fluid">
        	        <ul class="text-center mt-1 mb-5">
        	        	<li><a href="">MEN</a> > </li>
        	        	<li><a href="">T-SHIRTS</a></li>
        	        	<li></li>
        	        </ul>
                </div>

               <div class="container text-center customClass">
                 	<h3 style="font-weight: 400; font-size: 25px;font-family: "baskerville old face";">Men's T-Shirts</h3>
                 	<div class="container" style="font-size: .9rem;width: 70%;max-width: 100%;line-height: 2;">
                 		<p>Super-soft and effortless, we'll take one for every day of the week. Find your staple tee in our men's T-shirt collection – whether it’s a plain white tee, printed, or detailed with a pocket. Crafted from the finest cotton, our collection of crew necks, long sleeve tees and more will keep you covered throughout the year.</p>
                 	</div>
        	        <div class="container" style="display: inline-block;">
        	        	<a href="#" class="btn btnWomen m-2 w-25">SHOP WOMEN'S</a>
        	        	<a href="#" class="btn btnMen m-2 w-25">SHOP MEN'S</a>
        	        </div>
              </div>
  <!-- T_SHIRTS GALLERY -->
              <div class="container my-5">
              	    <div class="row"> 

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "mentshirts";
//create connection with Mysql Database System
 // $conn = mysqli_connect($servername,$username,$password);

//Check connection
// if (!$conn) {
//      die("Connection failed: ".mysqli_connect_error());
//   }
// else{
//     echo "Connected Successfully";
 // }

  //Create Database
   // $sqlQueryCreateDB = "CREATE DATABASE $dbName";

   // if (!mysqli_query($conn,$sqlQueryCreateDB)) {
   //   echo "Error creating Database:".mysqli_error($conn);
   // }

  //Create connection with exising database in DBMS
  $conn = mysqli_connect($servername,$username,$password,$dbName);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
 //Create Table TShirts
//   $sqlQueryCreateTable = "CREATE TABLE TShirts (
//    id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    ProductName VARCHAR(255) NOT NULL,
//    image VARCHAR(255) NOT NULL,
//    price FLOAT(5) UNSIGNED NOT NULL  
//    -- dont use comma a last command in query
// )";
 // To fire sql query of creating Tshirts table we use mysqliquery()
 // if (!mysqli_query($conn,$sqlQueryCreateTable)) {  
 //     echo "Error creating table: " . mysqli_error($conn);
 // }
 // else {
 //     echo "Table TShirts created successfully";
 // }
// After a database and a table have been created, we can start adding data in them.
//  $sqlQueryInsertInto = "INSERT INTO TShirts (ProductName,image,price) VALUES 
// ('Sandleford T-Shirt','10001725008.jpg','20.95'), 
// ('Sandleford T-Shirt','10001602302.jpg','20.95'),
// ('Sandleford T-Shirt','10001602302.jpg','20.95'),
// ('Sandleford T-Shirt','10001602302.jpg','20.95')
//   ";
//   if (!mysqli_query($conn,$sqlQueryInsertInto)) {
//       echo "Error Inserting into table: " . mysqli_error($conn);
//   }
//   else {
//     echo "Data inserted successfully";
//   }
 
 // how to display datafrom database usinf php mysql

  $queryforSelecting = "SELECT * FROM TShirts ORDER BY id ASC";
  $result = mysqli_query($conn,$queryforSelecting);

  if ($result) {
        if (mysqli_num_rows($result) > 0)
           {
             // output data of each row
             while( $product = mysqli_fetch_assoc($result)) {
            // print_r($product);
             ?>
                 <div class="col-lg-3 col-md-4 col-sm-3 col-6 my-5">
                      <form method="post" action="t-shirts.php?action=add&id=<?php echo $product['id'];?>">
                         <div class="products">
                        <!-- Displaying product Images, Name, Price  -->
                            <img src = "<?php echo $product['image']; ?> " class="img-responsive w-100";style="overflow : hidden" > <!-- To display img -->
                            <h4 class="text-info"><?php echo $product['ProductName'];?></h4> <!-- To display Product name -->
                            <h4> <?php echo $product['price']; ?> </h4>
                     
                           <!-- TO access price and productname variables later in order details codes -->
                           <input type="text" name="quantity" class="form-control" value="1">
                           <input type="hidden" name="name" value=" <?php echo $product['ProductName']; ?>">   
                           <input type="hidden" name="price" value="<?php echo $product['price']; ?>">
                           <input type="submit" name="add_to_cart" class="btn btn-info my-2" value="Add to Cart">   
                         </div>
                    </form>
                  </div>


            <?php
            } //Endof While loop
        } //Endif (mysqli_num_rows($result) > 0) loop
        else 
        {
          echo "0 results";
         }

  } //End of if(results)

?>
<!-- Calculating Individual product table,grand total, and Displaying grand total -->
<div id="orderDetails" class="table-responsive">
    <table class="table">
         <tr><th colspan="5"><h3>Order Details</h3></th></tr>
    <tr>
         <th width="40%">Product Name</th>
         <th width="10%">Quantity</th>
         <th width="20%">Price</th>
         <th width="15%">Total</th>
         <th width="15%">Action</th>
    </tr>
    <?php
     if (!empty($_SESSION['shopping_cart'])) {  //if shopping cart is not an empty
           
         $total = 0;   //to caalculate grand total

         foreach ($_SESSION['shopping_cart'] as $key => $product) {
    ?>
    <tr>
        <td><?php echo $product['name'];?></td>
        <td><?php echo $product['quantity'];?></td>
        <td>&<?php echo $product['price'];?></td>
        <td>&<?php echo number_format($product['quantity']* $product['price'],2);?></td>
        <td>
            <a href="t-shirts.php?action=delete&id=<?php echo $product['id'];?>"><!-- action deleted is submitted to know which part is remove -->
              <div class="btn-danger">Remove</div>
            </a>
        </td>
    </tr>
    <?php       //total=0 previously
           $total = $total + ($product['quantity']*$product['price']);
         } // End of foreaach loop 
    ?>
    <tr>
         <td colspan="4" align="right">Total</td>
         <td align="right">$<?php echo number_format($total,2); ?></td>
         <td></td>
    </tr>
    <tr>
         <!-- Show Checkout button only if the shopping cart is not empty -->
         <td colspan="5">
           <?php 
              if (isset($_SESSION['shopping_cart'])) {
                if (count($_SESSION['shopping_cart'])>0) {
            ?>
                <a href="PaytmKit/TxnTest.php?total=<?php echo $total ?>" class="button">Checkout</a> 
                Passing $total variable to checkbox.php page in url using get Method  
             <?php    
                } //Endif
              
              } //enfif
           ?>
         </td>
    </tr>
    <?php      
         }  //<!-- End of if (!empty($_SESSION['shopping_cart'])) statesman -->


    ?>

    </table>
</div>


              	    
              	    </div> <!-- END OF BS4 GRID SYSTEM -->
              </div>  <!-- END OF PRDUCT GALLERY CONTAINER -->


         <!-- PAGINATION LINKS    -->
            <ul class="pagination justify-content-center">
                <li class="page-item" ><a class="page-link" href="#"> << </a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#"> >> </a></li>
            </ul>

         <!-- TO ADD BACK TO TOP BUTTON WE HAVE TO USE JAVASCRIPT -->




     </section>













<!-- Features Section -->
<!--     <section id="features">

        	      <div class="container">
        		           
        			        <h2 class="text-center">Delivery for you </h2>
        		        
        		
        	             	 <div class="row">
        			                   <div style="cursor: pointer;" onclick="location.href='#';"             class="col-lg-3 col-sm-6 customCol1">
        			  	                     <i class="fas fa-redo fa-3x"></i>
        			  	                        <h6>FREE RETURNS</h6>
        			  	                              
        			  	                          <p>Returning your order for free: just take it back to one of our stores.</p>
        			                   </div>
        			                   <div style="cursor: pointer;" onclick="location.href='#';" class="col-lg-3 col-sm-6 customCol2">
        			  	                     <i class="fas fa-home fa-3x"></i>
        			  	                        <h6>CLICK & COLLECT</h6>
        			  	                               
        			                           	  <p>Place an order and collect it from 2000+ location across the UK.</p>
        			                   </div>
        			                   <div style="cursor: pointer;" onclick="location.href='#';" class="col-lg-3 col-sm-6 customCol3">
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
        		        <center><a class="btn btn-outline-light btn-md" href="#" style="color: #000; ">F I N D &nbsp; O U T &nbsp; M O R E</a></center> 

        	</div>
        </section>
        
        <section id="articles">
        	     
        	     <div class="container-fluid">
        	     	<div class="row">
        	     		<div class="col-lg-4" style="border-right: 1px solid #fff">
        	     			<ul class="nav flex-column" style="text-align: center;">
        	     				<h6>A T &nbsp; Y O U R &nbsp; S E R V I C E</h6>
                                <li class="nav-item">
                                   <a class="nav-link" href="#">Store Finder</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Student Discount</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Gift Cards</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="#">Delivery & Returns</a>
                                </li>
                                <li class="nav-item">
                                     <a class="nav-link" href="#">Contact Us</a>
                                </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="#">Privacy & Terms</a>
                                </li>
                            </ul>
        	     			
  
        	     		</div>
        	     		<div class="col-lg-4" style="text-align: center;border-right: 1px solid #fff">
        	     			<h6>J O I N &nbsp; T H E &nbsp; W O R L D &nbsp; O F &nbsp; J A I N  &nbsp;B R O T H E R S</h6>
        	     			<br>
        	     	           <p>Get 5% off when you sign up - be the first to get the latest style stories and exclusive offers.</p>
        	     	           <div class="container">
        	     	           	<form action="" method="post">
                                   <div class="form-group" >
                                   	 <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email"
                                   	 style="background-color:rgb(16,26,49);border-radius:0 ;">
                                   </div>
                                   <button type="submit" class="btn btn-outline-light women">Women</button>
                                   <button type="submit" class="btn btn-outline-light men">Men</button>
        	     	           	</form>	
        	     	           </div>
        	     		</div>
        	     		<div class="col-lg-4">
        	     			<ul class="nav flex-column" style="text-align: center;">
        	     				<h6>J A I N  &nbsp;B R O T H E R S</h6>
                                <li class="nav-item">
                                   <a class="nav-link" href="#">Our History</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">The Handbook</a>
                                </li>
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
                                       <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="nav-item">
                                       <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    </ul> 
                </div>

            </div>
            
   </footer>
                 
        	 	
    
                  -->
     

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







<!-- 
//Removing products from the shopping cart session:
  // if (filter_input(INPUT_GET, 'action'))
  //  {
  //         if (filter_input(INPUT_GET, 'action') == 'delete')
  //           {
  //              //Loop through all products in the  shopping cart until it matches GET id variable
  //               foreach ($_SESSION['shopping_cart'] as $key => $product) 
  //                {
  //                   if ($product)['id'] == filter_input(INPUT_GET, 'id')
  //                      {
  //                         //Remove product from the shopping cart when it matches with the GET id
  //                       unset($_SESSION['shopping_cart'][$key]);
  //                      }
  //                }
  //           }

  //           //reset session array keys so they match with $product_ids numeric array
  //           $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
  //  } //End of if statements -->