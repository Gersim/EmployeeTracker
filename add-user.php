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
    <a class="nav-link " href="admin-view.php">Total</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="admin-section.php">History</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="user-added.php">User's Added</a>
  </li>
  

</ul>
</div>

<div class="bodyForm">
<form action="insert.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Name</label>
    <input type="text" class="form-control"  name="fname">

  </div>

  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Last Name</label>
    <input type="text" class="form-control"  name="lname">

  </div>

  <div class="mb-3">
    <label for="exampleInputText1" class="form-label">Userame</label>
    <input type="text" class="form-control" name="username" >

  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
  </div>

  <button type="submit" name="save" class="btn">Submit</button>
</form>

</div>


  </body>
</html>