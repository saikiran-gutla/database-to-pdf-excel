<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Split Buttons</h2>
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Sony</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="index.html">Tablet</a></li>
      <li><a href="connection.php">Smartphone</a></li>
    </ul>
  </div>
</div>

</body>
</html>



//////////////
<?php
     while($row = mysqli_fetch_array($result))  
     {
        echo '  
       <tr>  
         <td>'.$row["id"].'</td>  
         <td>'.$row["employee_name"].'</td>  
         <td>'.$row["employee_salary"].'</td>  
         <td>'.$row["employee_age"].'</td>  
       </tr>  
        ';  
     }
    ?>

    <!-- <div class="container">  
   <br />  
   <br />  
   <br /> 
   <div class="table-responsive">  
    <table class="table table-bordered">
     <tr>  
                         <th>ID</th>  
                         <th>NAME</th>  
                         <th>SALARY</th>  
                         <th>AGE</th>
                    </tr>
     -->
     </table>
    <br />
    <form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>
   </div>  
  </div>  
