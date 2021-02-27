<?php  include_once 'include/class.user.php'; $user=new User(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/footer-contactform.css" />

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</head>
<body>
<div class="container divback">
<div class="darkBack">

  <div style="text-align:center" >
  <br>
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message</p>
  </div>
  <div class="row">
    <div class="column">
    <br>
   
      <img src="images/Hotel-Facade.jpg" style="width:100%;">
      <br>
      <br>
      <section style="color :white">Our Customer care service willcall you back or reply to your query within 24 hours, please have patience we will get back to you shortly</section>
      <br>
      <div class="social-bnr-agileits footer-icons-agileinfo socialIcon">
      <p style="color :white">Contact number : +63 456374654 | Website : contactUs@elegance.com</p>

							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>	
    </div>
    <div class="column ">
      <form method="POST" action="" style="color:white;">
          <div class="row ">
            <div class ="column"><label for="fname" style="color:white">First Name</label>
              <input type="text" id="firstname" pattern="[A-Za-z]{2,}" name="firstname" title="Should have more than 2 'Letters' " placeholder="Your name.." required></div>
              <div class="column">  
              <label for="lname"  style="color:white">Last Name</label>
              <input type="text" id="lastname" name="lastname"  pattern="[A-Za-z]{2,}" title="Should have more than 2 'Letters' " placeholder="Your last name.." required></div>
            </div>

            <div class="row">
              <div class="column">
              <label for="number"  style="color:white">Number</label>
              <input type="telephone" id="number" name="number" placeholder="number" pattern="[0-9]{5,}" title="Numbers only" required>
              </div>
              <div class="column"> 
              <label for="email"  style="color:white">Email</label>
            
              <input type="email" id="emailID" name="email" placeholder="email id " required>
            </div>
          </div>


        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:80px" required></textarea>
        <input type="submit" id="submit" name="submit" class="btn btn-lg  btn-block btn btn-warning">


        <?php 
       
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST[ 'submit'])) 
        { 
            extract($_POST); 
           
              $resultQ=$user->post_form($firstname, $lastname, $email, $number, $subject); 
              if($resultQ) { 
                
              echo  '<script>alert("Your request has been submitted")</script>'; 
              } 
              else {
              echo '<script>alert("Something is wrong please again")</script>'; 
            }
         
               
            }   
            
       }
        ?>





      </form>
    </div>
  </div>
  </div>
</div>
</body>
</html>