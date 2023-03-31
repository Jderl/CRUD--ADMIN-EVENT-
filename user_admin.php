<?php 
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Admin Account</title>
     <!--Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    
    <link href="css/style.css" rel="stylesheet" media="all">
        
 
        
  
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


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
                                    <input class="input--style-5"type="text" name="host" id="host"required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Event Title* </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="eventTitle" id="eventTitle"required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <input  class="input--style-5" type="text" name="message" id="message"required>
                    
                                </div>
                            </div>
            
                        </div>
                        <div class="form-row">
                            <div class="name">Starts At*</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="start" id="start" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">End At*</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ends" id="ends" required>
                                </div>
                            </div>
                        </div><br>  

                        <div class="form-row m-b-55">
                            <div class="name">Venue</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col1">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="venue" id= "venue" required>
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
                                    <input class="input--style-5" type="text" name="location"  id= "location"required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Street Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="streetaddress" id= "streetaddress" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Province</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="province" id= "province" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" id= "city" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Postalcode</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="postalcode" required>
                                </div>
                            </div>
                        </div>
                      

                        <div>
                         <a href="#" class="btn btn-danger">Cancel</a>
                         <button type="submit"  name="submit" class="btn btn-success" id="submit">Submit</button>
                         <a href="event_list.php" class="btn btn-primary">List</a>
                         
                        </div>
                    </form>


                  
                </div>
            </div>
         </div>
    </div> 

    <hr> 

    
<h3> Game Enlist </h3>

<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
  <tr>
    <th scope="col">Id </th>
    <th scope="col">Host</th>
    <th scope="col">Event Title</th>
    <th scope="col">Description</th>
    <th scope="col">Start</th>
    <th scope="col">End</th>
    <th scope="col">Venue</th>
    <th scope="col">Location</th>
    <th scope="col">Street Address</th>
    <th scope="col">Province</th>
    <th scope="col">City</th>
    <th scope="col">Postal Code</th>
    <th scope="col">Actions</th>
  </tr>

  <?php 
    $i = 1;
    $qry= "SELECT * FROM events";
    $run = $conn -> query($qry);
    if($run-> num_rows > 0){
        while($row = $run -> fetch_assoc()){
          $id = $row['id'];
            
       
  ?>
  <tr>
    <th scope="row"><?php echo $i++?></th>
    <td><?php echo $row['name']?></td>
    <td><?php echo $row['eventTitle']?></td>
    <td><?php echo $row['description']?></td>
    <td><?php echo $row['start']?></td>
    <td><?php echo $row['end']?></td>
    <td><?php echo $row['venue']?></td>
    <td><?php echo $row['location']?></td>
    <td><?php echo $row['streetAddress']?></td>
    <td><?php echo $row['province']?></td>
    <td><?php echo $row['city']?></td>
    <td><?php echo $row['postal']?></td>
    <td>
      <a href="event_edit.php? id= <?php echo $id; ?>" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure?') ">Edit</a> 
      <a href="event_delete.php? id=<?php echo $id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') ">Delete</a> 
    </td>
  </tr>
  <?php 
    }
  }
  ?>

</table>
</div>



    
</body>
</html>

<?php 



if(isset($_POST ['submit'])){
    $name = $_POST['host'];
    $event = $_POST['eventTitle'];
    $description = $_POST['message'];
    $start = $_POST['start'];
    $end = $_POST['ends'];
    $venue = $_POST['venue'];
    $location = $_POST['location'];
    $streetadd= $_POST['streetaddress'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $postal = $_POST['postalcode'];

    #VALUES (NULL,'$name ',' $description ','$start','$end','[value-6]','$venue',' $location','   $streetadd
    
    #VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')
    #$qry = "INSERT INTO eight VALUES(NULL, '$name','$event', '$description', '$start' ,'$end', '$venue', '$location','$streetadd')";
    $qry = "INSERT INTO events VALUES(NULL, '$name','$event', '$description', '$start' ,'$end', '$venue', '$location','$streetadd',' $province',' $city ',' $postal')";

    if(mysqli_query($conn,$qry)){
        echo '<script>alert("User registered successfully")</script>';


    }else{
        echo mysqli_error($conn);
    }



}





?>