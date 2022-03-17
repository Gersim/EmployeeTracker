<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>Employee Authentication</title>
  </head>
  <body>
    <div class="prenav"></div>

 <div class="BarNav">
    <ul class="nav float-end">

  <li class="nav-item ">
    <a class="nav-link " href="admin-auth.php">Admin</a>
  </li>

</ul>
</div>

<div class="bodyForm">
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Employee Username</label>
    <input type="text" name="ename" class="form-control"  >

  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="epass" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" name="save" class="btn">Submit</button>
</form>


</div>
<?php 
session_start();
include 'connection.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['ename'];
	 $password = $_POST['epass'];
   $_SESSION['employeename']=$username;
	
$sql ="SELECT * FROM user_added;";
$result = mysqli_query($con,$sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
  while($row= mysqli_fetch_assoc($result)){
    if($row['username']==$username and $row['password']==$password){
      header('Location: employee-section.php ');
    }else{
      echo "Something went wrong";
    }
    
  }
}
}
?>

  </body>
</html>