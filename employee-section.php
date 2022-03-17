<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <title>EmployeeSection</title>
  </head>
  <body>
  <div class="prenav"></div>

<div class="BarNav">
   <ul class="nav float-end">

 <li class="nav-item ">
   <a class="nav-link " href="employee-history.php">History</a>
 </li>
 <li class="nav-item ">
   <a class="nav-link " href="index.php">Log out</a>
 </li>

</ul>
</div>

<div class="bodyForm">
<form action="" method="post">

          
               <div class="form-floating">
                 <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea"></textarea>
                 <label for="floatingTextarea">Work Description</label>
               </div>
                <div>
                      <label for="worktime">Time Started</label>
                      <br>
                      <input type="time" id="start-time" name="start_time">
                </div>
                 <br>
                <div>
                        <label for="worktime">Time Ended</label>
                        <br>
                        <input type="time" id="end-time" name="end_time">
                </div>

          
                            <br>
                  <div class="col-12 ">
                    <button type="submit" name="save" class="btn btncolor">Update</button>
                  </div>
           </div>
       </form>


</div>
<?php
session_start();
include_once 'connection.php';

if(isset($_POST['save']))
{	 $ename=$_SESSION['employeename'];
	 $descr = $_POST['description'];
	 $strStart = $_POST['start_time'];
	 $strEnd = $_POST['end_time'];

   $startime= new DateTime($strStart);
   $endtime= new DateTime($strEnd);
   
   $hours=$startime->diff($endtime);
   $hours=$hours->format("%H:%I:%S");
   

	 $sql = "INSERT INTO employeetables (employee_name,description,start_time,end_time,timeworked)
	 VALUES ('$ename ','$descr','$strStart','$strEnd', '$hours');";

	 if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}




?>


  </body>


  </html>