<?php 


include 'database.php';

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crud";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if(!$conn){
    die('error in db'. mysqli_connect_error($conn));
    
}else{
    $id = $_GET['id'];
    $qry= "SELECT * FROM events WHERE id = $id";
    $run = $conn -> query($qry);
    if($run-> num_rows > 0){
        while($row = $run -> fetch_assoc()){
            $name = $row['name'];
            $eventTitle = $row['eventTitle'];
            $description = $row['description'];
            $start = $row['start'];
            $end = $row['end'];
            $venue = $row['venue'];
            $location = $row['location'];
            $streetAddress = $row['streetAddress'];
            $province = $row['province'];
            $city = $row['city'];
            $postal = $row['postal'];
        }
    }
}




?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event Details</title>
    <link href="css/style.css" rel="stylesheet" media="all">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


<a href="event_list.php" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') ">Back</a> 



<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" >
                    <h2 class="title">Event Details</h2>
                </div> 
                <div class="card-body">

                
            <form method="POST" id="form">
                        <div class="form-row">
                            <div class="name">Host</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5"type="text" name="host" id="host" value="<?php echo $name ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Event Title* </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="eventTitle" id="eventTitle" value="<?php echo  $eventTitle ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input  class="input--style-5" type="text" name="message" id="message"value="<?php echo $description ?>">
                    
                                </div>
                            </div>
            
                        </div>
                        <div class="form-row">
                            <div class="name">Starts At*</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="start" id="start"value="<?php echo $start ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">End At*</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ends" id="ends" value="<?php echo $end ?>">
                                </div>
                            </div>
                        </div><br>  

                        <div class="form-row m-b-55">
                            <div class="name">Venue</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col1">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="venue" id= "venue" value="<?php echo  $venue  ?>">
                                            <label class="label--desc">input address | clear address</label>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Location Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="location"  id= "location"value="<?php echo $location ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Street Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="streetaddress" id= "streetaddress" value="<?php echo $streetAddress  ?>">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Province</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="province" id= "province" value="<?php echo $province ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" id= "city" value="<?php echo  $city ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Postalcode</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="postalcode" value="<?php echo  $postal ?>">
                                </div>
                            </div>
                        </div>
                                             

                
                        <!-- <a href="event_list.php" class="btn btn-success" ><input type="submit" name="update"> Update </a> -->
                         <!-- <a href="#" class="btn btn-danger">Cancel</a> -->
                   
                    
                         <a= href="event_list.php"><button type="submit"  name="update" class="btn btn-success" id="submit">Update</button></a>
                         <!-- <a href="event_list.php" class="btn btn-primary">List</a> -->
                         
                        
                    </form>
  

                  
                </div>
            </div>
         </div>
    </div> 



</body>
</html>


<?php 

if(isset($_POST['update'])){
    $name = $_POST['host'];
    $eventTitle = $_POST['eventTitle'];
    $description = $_POST['message'];
    $start= $_POST['start'];
    $end = $_POST['ends'];
    $venue = $_POST['venue'];
    $location = $_POST['location'];
    $streetadd = $_POST['streetaddress'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $postal = $_POST['postalcode'];

    $qry = "UPDATE events SET name='$name ', eventTitle='$eventTitle', description=' $description ',start=' $start',
    end= '$end ', location= '$location', streetAddress='$streetadd',province='$province',city = ' $city',postal ='$postal' 
    WHERE id = $id";

    if(mysqli_query($conn,$qry)){
        echo '<script>alert("Event Details Edit successfully")</script>';
      
        
    }else{
        echo mysqli_error($conn);
    }


}





?>