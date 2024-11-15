<?php include 'connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD Operations Project</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Data</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Branch</th>
      <th scope="col">Contact</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql="Select * from `data`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $id=$row['Id'];
      $name=$row['Name'];
      $branch=$row['Branch'];
      $contact=$row['Contact'];
      echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$branch.'</td>
      <td>'.$contact.'</td>
      <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
      </tr>';
    }
  }
  ?>
    
  </tbody>
</table>
    </div>
  </body>
  </html>