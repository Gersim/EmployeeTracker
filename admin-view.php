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
    <a class="nav-link " href="admin-section.php">History</a>
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
 <th>Duration</th>
</tr>
<?php
include 'connection.php';
 $sql ="SELECT employee_name ,IFNULL(SEC_TO_TIME(SUM(TIME_TO_SEC(timeworked))),'00:00:00') AS duration  FROM employeetables GROUP BY employee_name;";
 $result = mysqli_query($con,$sql);
 $resultCheck = mysqli_num_rows($result);

 if($resultCheck > 0){
   while($row= mysqli_fetch_assoc($result)){
     echo "<tr> <td>".$row['employee_name']."</td><td>".$row['duration']."</td></tr>";
   }
 }

?>
</table>
</html>