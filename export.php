<?php  
//export.php  
include('exportexcel.php');
$connect = mysqli_connect("localhost", "root", "", "fileconvert");
$output = '';
/*
$val= $_POST['num2'];
if(isset($_POST["export"]))
{
*/

 $query = "SELECT * FROM employee WHERE id='$val'";
 $result = mysqli_query($connect, $query);
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
//}
?>