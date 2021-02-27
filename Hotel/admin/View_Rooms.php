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

 $sql="SELECT * FROM `room`";
 $result = mysqli_query($user->db,$sql);


if($result)
{
    if(mysqli_num_rows($result) > 0)
    {
        while($eachrow = mysqli_fetch_array($result))
        {
?>      
<br>

    <div class="card mx-auto" style="width:55% ; filter: drop-shadow(0.25rem 0 0.75rem #ffffff);">
        <img class="card-img-left imgC" src="/Updated-SDP-master/images/r4.jpg" alt="Card image">
            <div class="card-body">
                
            
               <div class="row">
                    <div class="col-md-9">  <h4 class="card-title"name="rest_name"><?php echo $eachrow['type']; ?></h4> </div>
                </div>

                <hr>
                <p class="card-text"><?php echo $eachrow['bedding']; ?> </p>
                </div>

                <br>
         <form method="POST" action="" >
                <div class="col-md-3" >
                <a href="reservation.php" type="submit" id="submit" name="submit" VALUE="Book a room"class="btn btn-primary btn-block my-1">Book Room</a>
                </div> 
            
            </form> 



            </div>
    </div>
<br>


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
</HTML>