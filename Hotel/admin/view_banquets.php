

<?php  include_once 'include/class.user.php'; $user=new User(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Banquet Halls</title>
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



  
<style>
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
        background-attachment: fixed;
        }
    
</style>
<script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  });
  </script>
</head>
<body >

<div class="container justify-content-center">
<?php 


$sql="SELECT * FROM `t_banquets`";
$sql2 = "SELECT * FROM `t_banquet_menu_type`";


$result = mysqli_query($user->db,$sql);






if($result)
{
    if(mysqli_num_rows($result) > 0)
    {
        while($eachrow = mysqli_fetch_array($result))
        {
?>
         


    <div class="card" style="width:85%">
        <img class="card-img-left imgC" src="images/banquet_1.jpg" alt="Card image">
            <div class="card-body">
                
               <div class="row">
                    <div class="col-md-9">  <h4 class="card-title"><?php echo $eachrow['banquet_name']; ?></h4> </div>
                </div>

                <hr>
                <p class="card-text"><?php echo $eachrow['banquet_description']; ?> </p>
                
                <div class="row">
                    <div class="col-md-3"><span class="font-weight-bold">Total Capacity :</span> <?php echo $eachrow['total_capacity']; ?></div>
                    <div class="col-md-3"><span class="font-weight-bold">Seating Capacity :</span> <?php echo $eachrow['seating_capacity']; ?></div>
                    <div class="col-md-6"><span class="font-weight-bold">Price for given capacity :</span> <?php echo $eachrow['banquet_rate']; ?></div>
                </div>

                <div class="row">
                    <div class="col-md-3"><span class="font-weight-bold">Opening Time  :</span> <?php echo $eachrow['opening_time']; ?></div>
                    <div class="col-md-3"><span class="font-weight-bold">Closing Time :</span> <?php echo $eachrow['closing_time']; ?> </div>
                </div>
                <?php
              $banquet_menu = mysqli_query($user->db,$sql2);
                    if($banquet_menu)
                    {
                        echo "Hi";
                        if(mysqli_num_rows($banquet_menu) > 0)
                        {
                            while($eachrow1 = mysqli_fetch_array($banquet_menu))
                            {
                ?>
                            <div class="row">
                                <div class="col-md-3"><span class="font-weight-bold">Menu type  :</span> <?php echo $eachrow1['banquet_menu_type']; ?></div>
                            </div>
                <?php
                            }
                        }
                    }
                ?>
            <br>

                <div class="row">
                    <div class="col-md-3">
                        <input type="text" class="datepicker" name="checkin" placeholder ="Date">
                    </div>

                    <div class="col-md-3">
                        <select class="custom-select my-1 mr-sm-2 newC" id="inlineFormCustomSelectPref">
                            <option selected>Time</option>
                            <option value="1">10:00 - 04:00</option>
                            <option value="2">19:00 - 23:30</option>
                            <option value="2">10:00 - 23:30</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <select class="custom-select my-1 mr-sm-2 newC" id="inlineFormCustomSelectPref">
                            <option selected>Guests</option>
                            <option value="1">150</option>
                            <option value="2">200</option>
                            <option value="3">300</option>
                            <option value="4">400</option>
                            <option value="5">500</option>
                        </select>
                    </div>

                    <div class="col-md-3" >
                        <button type="submit" class="btn btn-primary btn-block my-1">Book Now</button>
                    </div> 

                </div>

            </div>
    </div>


<br>
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
</html>
