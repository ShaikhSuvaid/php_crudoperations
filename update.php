<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `data` where id=$id";
$result=mysqli_query($con ,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Name'];
$branch=$row['Branch'];
$contact=$row['Contact'];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $branch=$_POST['branch'];
    $contact=$_POST['contact'];

    $sql="update `data` set Id=$id, Name='$name', Branch='$branch', Contact='$contact' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    } else{
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>CRUD Operations Project</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" value=<?php echo $name;?>>
  </div>
  <div class="form-group">
    <label>Branch</label>
    <input type="text" class="form-control" placeholder="Enter your Branch" name="branch" value=<?php echo $branch;?>>
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control" placeholder="Enter your Contact" name="contact" value=<?php echo $contact;?>>
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>

    </div>

    
  </body>
</html>