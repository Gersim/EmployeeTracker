<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>Admin Authentication</title>
  </head>
  <body>

  <div class="prenav"></div>

 <div class="BarNav">
    <ul class="nav float-end">

    <li class="nav-item ">
    <a class="nav-link " href="admin-view.php">Total</a>
  </li>

  <li class="nav-item ">
    <a class="nav-link " href="add-user.php">Add a user</a>
  </li>
  <li class="nav-item ">
    <a class="nav-link " href="user-added.php">User's Added</a>
  </li>

</ul>
</div>
<br>
<br>
<table class="table table-success table-striped">
  <tr>
  <th>EmployeeName</th>
  <th>Description</th>
  <th>StartTime</th>
  <th>EndTime</th>
  <th>TimeWorked</th>
  <th>TimeUpdated</th>
</tr>
<?php
include 'connection.php';
 $sql ="SELECT * FROM employeetables;";
 $result = mysqli_query($con,$sql);
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0){
   while($row= mysqli_fetch_assoc($result)){
     echo "<tr> <td>".$row['employee_name']."</td><td>".$row['description']."</td> <td>".$row['start_time']."</td> <td>".$row['end_time']."</td> <td>".$row['timeworked']."</td><td>".$row['date']."</td></tr>";
   }
 }

?>
</table>
</html>