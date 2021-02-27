<?php session_start();
include_once 'include/class.user.php';
$user=new User();
// $uid=$_SESSION[ 'uid']; 
// if(!$user->get_session()) 
// { 
//     header("location:SPA/login.php"); 
// } 
// if(isset($_GET['q'])) 
// { 
//     $user->user_logout();
//  header("location:index.php"); 
// } 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>ELEGANCE HOTEL</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SPA Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <style>
        .well {
            background: rgba(0, 0, 0, 0.7);
            border: none;
            height: 200px;
        }
        
        body {
            background-image: url('images/asian-woman-spa-salon_1421-3764.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: 
        }
        
        h4 {
            color: #ffbb2b;
        }
        
        ul {
            color: white;
            font-size: 13px;
        }
    </style>


</head>

<body>
    <div class="">

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    
                    <li class="active"><a href="SPA.php">SPA</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="SPA.php?q=logout">
                            <button type="button" class="btn btn-danger">Logout</button>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

   
       </section>
<!-- //gallery -->
     <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
                 <div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">SPA And Rates</h3>
                        <div class="priceing-table-main">
                 <div class="col-md-3 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="images/images.jpg" alt=""> 
                            <h4>Deep Tissue Sports Massage
                            </h4>
                        </div>
                        <div class="price-gd-bottom">
                               <div class="price-list">
                                    <ul>
                                            <li>Free Cancellation</li>
                                            
                                     
                                     </ul>
                            </div>
                            <div class="price-selet">   
                                <h3><span>€</span>25/HOUR</h3>                      
                                <a href="spares.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid ">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                        
                            <h4>Healing Hot Stone Massage</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                    <ul>
                                    <li>Free Cancellation</li>
                             <img src="images/download.jpg" alt="">    
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>€</span>22/HOUR</h3>
                                <a href="spares.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid lost">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                         <img src="images/images.jpg" alt="">  
                            <h4>Soothing Foot Therapy</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li>Free Cancellation</i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>€</span>18/HOUR</h3>
                                <a href="spares.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid wthree lost">
                    <div class="price-block agile">
                        <div class="price-gd-top ">
                        <img src="images/download.jpg" alt="">    
                            <h4>Mom-to-Be</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li>Free Cancellation(Conditions)</i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>€</span> 15/HOUR</h3>
                                <a href="spares.php" >Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
           
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->  
<!-- Calendar -->
        <script src="js/jquery-ui.js"></script>
        <script>
                $(function() {
                $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
                });
        </script>
<!-- //Calendar -->
<!-- gallery popup -->

<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
                <script defer src="js/jquery.flexslider.js"></script>
                <script type="text/javascript">
                $(window).load(function(){
                  $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                      $('body').removeClass('loading');
                    }
                  });
                });
              </script>
            <!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
            <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                          // Slideshow 4
                          $("#slider4").responsiveSlides({
                            auto: true,
                            pager:true,
                            nav:false,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                              $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                              $('.events').append("<li>after event fired.</li>");
                            }
                          });
                    
                        });
            </script>
        <!--search-bar-->
        <script src="js/main.js"></script>  
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
    <script type="text/javascript">
        $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
            };
        */                              
        $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    
    <div class="arr-w3ls">
    <a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>
<!-- //smooth scrolling -->



 </div>