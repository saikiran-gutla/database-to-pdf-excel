
<html>  
 <head>  
  <title>Export MySQL data to Excel in PHP</title>  
  <!-- <script src="./js/data.js"></script>-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 </head>  
 <body>  
 <?php
$connect = mysqli_connect("localhost", "root", "", "fileconvert");
$val= $_POST['num2'];
$sql = "SELECT * FROM employee WHERE id='$val'";  
$result = mysqli_query($connect, $sql);
$output="";
if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>ID</th>  
                         <th>NAME</th>  
                         <th>SALARY</th>  
                         <th>AGE</th>
                    </tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["id"].'</td>  
                         <td>'.$row["employee_name"].'</td>  
                         <td>'.$row["employee_salary"].'</td>  
                         <td>'.$row["employee_age"].'</td>  
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
?>
 </body>  
</html>


