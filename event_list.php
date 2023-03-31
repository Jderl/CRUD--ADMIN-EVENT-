<?php 


include "database.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<a href="user_admin.php" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') ">Back</a> 
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