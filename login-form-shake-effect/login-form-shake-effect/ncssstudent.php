<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<?php
/*  if (!$_SESSION["name"] && $_SESSION["type"] != "student")
  {
    $_SESSION["error"] = "Please Login To continue:";
    header('Location: li.php');
  }
*/?>
<table>
  <tr>
    <th>Serial</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Department</th>
    <th>Hostel</th>
    <th>Warden</th>
    <th>Care Taker</th>
    <th>Gymkhana</th>
    <th>Ass Register</th>
    <th>Submit Thesis</th>
    <th>Library</th>
    <th>CC</th>
    <th>CC Incharge</th>
    <th>HOD</th>
    <th>Account</th>
  </tr>
  <?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $Database = "no_dues";

  $conn = new mysqli($server, $username, $password, $Database);

  if (!$conn) {
  	die("No connection to Database");
  }
  $name = $_SESSION["name"];
  $query1 = "SELECT * FROM `student`";
  $res = $conn->query($query1);
  if ($res) {
  	foreach ($res as $row) {
//  		echo '<tr><td>'.$row['serial'].'</td><td>'.$row['name'].'</td><td>'.$row['roll_num'].'</td><td>'.$row['department'].'</td><td>'.$row['hostel'].'</td><td>'.decide($row['warden']).'</td><td>'.decide($row['care_taker']).'</td><td>'.decide($row['gymkhana']).'</td><td>'.decide($row['asst_register']).'</td><td>'.decide($row['submit_thesis']).'</td><td>'.decide($row['library']).'</td><td>'.decide($row['cc_online_no_dues']).'</td><td>'.decide($row['cc_in_charge']).'</td><td>'.decide($row['hod']).'</td><td>'.decide($row['account']);
  	  echo $row[1];
  	}
  }

function decide($bol)
{
    if ($bol) {
        return "yes";
    }
    else return "no";
}
  ?>
</body>
</html>