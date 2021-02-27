<?php  include_once 'include/class.user.php'; $user=new User(); $once = true;?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Restaurants</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
    
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>

    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
      $( function() {
        $( ".datepicker" ).datepicker({
                      dateFormat : 'yy-mm-dd'
                    });
      });
    </script>

<style>
    .rest_id{
      
      }
    .imgC{
          height:250px;
      }
    input[type=text], .newC {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius : 4px;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            color: black;
        }
            body{
              background-image: url('images/home_bg.jpg');
              background-repeat: no-repeat;
              background-repeat: no-repeat;
              background-attachment: fixed;
            }
          
            }

      
</style>
</head>


<body >
<div class="bg-image"></div>
<div class="container justify-content-center">

<?php 

$result=$user->get_restaurants();
$cuisine = $user->get_restaurant_cuisine();
$eachcusine = mysqli_fetch_array($cuisine);


if($result)
{
    if(mysqli_num_rows($result) > 0)
    {
        while($eachrow = mysqli_fetch_array($result))
        {
?>      
<br>

    <div class="card mx-auto" style="width:85% ; filter: drop-shadow(0.25rem 0 0.75rem #ffffff);">
        <img class="card-img-left imgC" src="/Updated-SDP-master/images/r1.jpg" alt="Card image">
            <div class="card-body">
                
            
               <div class="row">
                    <div class="col-md-9">  <h4 class="card-title"name="rest_name"><?php echo $eachrow['restaurant_name']; ?></h4> </div>
                    <button class="btn btn-light">
                         <?php 
                         $t = $eachrow['restaurant_mode']; 
                         if ($t == "Both") {
                            echo "Veg & Non Veg";
                            
                          }else if($t == "Veg"){
                            echo "Veg";
                          }else{
                            echo "Non Veg";
                          }
                         ?> 
                         <span class="badge badge-success"> V </span>
                    </button>
                </div>

                <hr>
             
                <p class="card-text"><?php echo $eachrow['restaurant_detail']; ?> </p>
                
                <div class="row">
                <div class="col-md-6"><span class="font-weight-bold">Cuisines :</span> 




            <!-- WORK HERE FOR CUISINES -->
               <?php
              
              $sqll = "SELECT restaurant_name,  cuisine_type
               FROM t_restaurants
               INNER JOIN t_restaurant_cuisine
               ON t_restaurants.restaurant_id = t_restaurant_cuisine.restaurant_id
               where t_restaurants.restaurant_id =".$eachrow['restaurant_id'];
               $result11 = mysqli_query($user->db, $sqll);
               while($row = mysqli_fetch_array($result11))
               {
                 echo " ".$row['cuisine_type'];
               }
                
               ?>
                 
                  
                      
                
    
                </div>

                <div class="col-md-6"><span class="font-weight-bold">Rate for two :</span> <?php echo $eachrow['restaurant_rates']; ?></div>
                </div>

                <div class="row">
                <div class="col-md-6"><span class="font-weight-bold">Open :</span>
                        <?php 
                      
                        // date_default_timezone_set("Asia/Calcutta");
                         $t = $eachrow['restaurant_open_time']; 
                        // echo  date('Y-m-d H:i:s',(int)$t);
                         $closeD = $eachrow['restaurant_close_time']; 
                        echo date((int)$t )."-".date((int)$closeD ) ;
                         ?> 
                </div>
                <div class="col-md-6"><span class="font-weight-bold">Loyalty Points :</span> <?php echo $eachrow['restaurant_max_loyalty_points']; ?> </div>
                </div>

                <br>
          <form method="POST" action="" >
              <div class="row">
                <div class="col-md-3">
                <input type="text" class="datepicker" name="checkin" id="checkin" placeholder ="date">
                </div>

                <div class="col-md-3">
                <select class="custom-select my-1 mr-sm-2 newC"  name="time" id="time"> 
                <option name="time">Time</option> 
                    <?php
                        date_default_timezone_set("Asia/Calcutta");
                         $date = date('G', time());
                         $min = date('i', time());
                        for($hours=$date ; $hours<24; $hours++) // the interval for hours is '1'
                        for($mins=$min; $mins<60; $mins+=30) // the interval for mins is '30'
                        echo '<option>'.str_pad($hours,2,'0',STR_PAD_LEFT).':'
                       .str_pad($mins,2,'0',STR_PAD_LEFT).'</option>';
                    ?>       
                </select>
                </div>

                <div class="col-md-3">
                <select class="custom-select my-1 mr-sm-2 newC" id="no_guests" name="no_guests">
                    <option selected>Guests</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="12">12</option>
                </select>
                </div>

                <div class="col-md-3" >
                <input type="submit" id="submit" name="submit" VALUE="Reserve a Table"class="btn btn-primary btn-block my-1"></input>
                </div> 
            </div>
            </form>



            </div>
        

    
    </div>


<br>


<?php 
      if($once){
       
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if(isset($_POST['submit'])) 
          { 
            $rest_id = $eachrow['restaurant_id'];
        
             extract($_POST); 
             
             $reserveTable=$user->post_book_restaurant($rest_id,$checkin,$time,$no_guests);
            // echo $reserveTable."This is reserve result"; 
             if($reserveTable) { 
               
             echo  '<script>alert("Your request has been submitted")</script>'; 
             } 
             else {
             echo '<script>alert("Something is wrong please again")</script>'; 
           }
        
             
           
                 
              }   
              
         }
         $once = false;
      } 
         ?>


<?php
}
}
}
?>  

    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
</html>