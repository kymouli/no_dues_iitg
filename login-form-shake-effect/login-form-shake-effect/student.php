<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Student</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/student.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Amatic+SC" >
<style type="text/css">
.navbar-header{
    height: 89px;
}
.navbar-inner {
    background:transparent;
    border: none;
}
.footer_info{
  background: transparent;
  border:none;
  color: #ffffff;
}
.header ul {

    list-style-type: none;
    margin: 0;
    overflow: hidden;
    background: transparent;
    top: 0;
    display: inline-block;
    vertical-align: middle;
}
.header li {
    float: center;
    vertical-align: middle;
    line-height:35px;
    display: block;
    color: white;
    /*text-align: center;*/
    padding: 14px 16px;
    text-decoration: none;
    vertical-align: middle;
}
.header .no_dues{
  text-align: center;
}
.header li a {
    display: block;
    color: white;
    /*text-align: center;*/
    padding: 14px 16px;
    text-decoration: none;
    vertical-align: middle;
}
.header li a:hover:not(.active) {
    background-color: #ffffff;
    font-weight: bold;
    color: black;
    text-decoration: none;
    vertical-align: middle;
    height: 40px;
    padding-bottom: 40px;
}
li .list:hover {
    background-color: #ffffff;
    font-weight: bold;
    color: black;
    text-decoration: none;
}
.header{
  padding-top: 0px;
}
.sidebar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 20%;
    position: fixed;
    overflow: auto;
    border:0;
}

.sidebar li a {
    display: block;
    color: #ffffff;
    text-align: right;
    padding: 15px 16px;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 900;
}
.sidebar li span{
  display: block;
    color: #ffffff;
    text-align: right;
    padding: 15px 16px;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 900;
}
.sidebar li a.active {
    background-color:none;
    color: white;
}
.sidebar li span.active {
    background-color:none;
    color: white;
}

.sidebar li a:hover:not(.active) {
    background-color: #ffffff;
    color: black;
}
html,body {
    margin:0;
    padding:0;
    width: 100%;
}
.hello{
    font-size: 15px;
}
.no_dues_hr {
  height: 1px;
  background-color: #000000;
}
.glyphicon-question-sign{
    font-size: 15px;
}
.glyphicon-education{
  font-size: 34px;
  vertical-align: bottom;
}
.scrollimage{
    background-image: url("wardentitle.png");
    background-color: white;
    max-width: 100%;
    max-height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body><div style="width: 100%;">
<div class="sidebar" style="float:left;">
  <ul style=" background-image: url(css/login.png); height: 100%;" ><br><br><br>
<li><a href="#" style="text-align: center; font-size: 23px; vertical-align: middle;" class="active"><b><p style="display: inline-block;" class="glyphicon glyphicon-education"></p>&nbsp;&nbsp;IIT GUWAHATI</b></a>
  <br>
  <br><br><li><span style="font-size: 17px; padding-bottom: 0px;" class="active">You are logged in as Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
  <hr style="width: 85%; float: left; "><br><br><br>
  <li><a href="#" style="font-size: 18px;">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="student_department.php" style="font-size: 18px;">Professors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  <li><a href="#" style="font-size: 18px;">Intranet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="#" style="font-size: 18px;">Moodle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="#" style="font-size: 18px;">Academic Calendar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </li>
   </li><br><br><br><br><br><br>
  <hr style="width: 85%; float: left; padding: 0;"><br><br>
  <li><a href="#" style="font-size: 17px; "><p style="display: inline-block;" class="glyphicon glyphicon-question-sign"></p>&nbsp;&nbsp;Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="li.php" style="font-size: 17px; ">Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>
</div>
</div>
<div style="width: 80%; border-top: 0; float:right;">
<div class="fixed_scroll" id="hide_as_scroll" style=" height:100%;"  >
<img src="wardentitle.png" alt="Title" style="max-width: 100%; max-height:100%; max-width: 100%; max-height: 100%; height: auto; width: auto; background-color: white;">
</div>
<div style="margin-top: 5%;">
<table id="keywords" cellspacing="0" cellpadding="0" style="display: table; empty-cells: hide; font-weight: bold;">
    <tbody>
<?php
if (!isset($_SESSION["name"]) || ($_SESSION["type"] != "student"))
{
  $_SESSION["error"] = "Please Login To continue:";
//   header('Location: li.php');
  echo "<script>window.location = 'li.php';</script>";
}
$server = "localhost";
$username = "root";
$password = "";
$Database = "no_dues";

$conn = new mysqli($server, $username, $password, $Database);

if (!$conn) {
  die("No connection to Database");
}
$name = $_SESSION["name"];
$query1 = "SELECT * FROM `student` WHERE name = '$name'";
$res = $conn->query($query1);
if ($res) {
  foreach ($res as $row) {
//    echo '<tr><td>'.$row['serial'].'</td><td>'.$row['name'].'</td><td>'.$row['roll_num'].'</td><td>'.$row['department'].'</td><td>'.$row['hostel'].'</td><td>'.decide($row['warden']).'</td><td>'.decide($row['care_taker']).'</td><td>'.decide($row['gymkhana']).'</td><td>'.decide($row['asst_register']).'</td><td>'.decide($row['submit_thesis']).'</td><td>'.decide($row['library']).'</td><td>'.decide($row['cc_online_no_dues']).'</td><td>'.decide($row['cc_in_charge']).'</td><td>'.decide($row['hod']).'</td><td>'.decide($row['account']);
    if ($row['Amit Awekar'] && $row['Arjit Sur'] && $row['Arnab Sarkar'] && $row['Aryabartta Sahu'] && $row['Ashish Anand'] && $row['Benny George K'] && $row['Chandan Karfa'] && $row['Deepanjan Kesh'] && $row['Diganta Goswami'] && $row['G Sajith'] && $row['Gautam Barua'] && $row['Hemangee K Kapoor'] && $row['Jatindra Kumar Deka'] && $row['John Jose'] && $row['Pinaki Mitra'] && $row['Purandar Bhaduri'] && $row['R Inkulu'] && $row['Rashmi Duta Baruah'] && $row['S V Rao'] && $row['Samit Bhattacharya'] && $row['Sanasam Ranbir Singh'] && $row['Santosh Biswas'] && $row['Shivashankar B Nair'] && $row['Sukumar Nandi'] && $row['Sushanta Karmakar'] && $row['T Venkatesh'] && $row['V Vijaya Saradhi'])
    {
      $faa = 1;
      $f = "faculty";
      sql_check($row['roll_num'],$conn,$f);
    }
    else $faa = 0;

    $care_taker = $row['care_taker'];
    $warden = $row['warden'];
    $asst_register = $row['asst_register'];
    $submit_thesis = $row['submit_thesis'];
    $library = $row['library'];
    $cc = $row['cc_online_no_dues'];
    $cc_in_charge = $row['cc_in_charge'];
    $faculty = $row['faculty'];
    $hod = $row['hod'];
    $account = $row['account'];
    $gymkhana = $row['gymkhana'];

  }
}
function sql_check($roll,$conn,$table)
{
  $que = "UPDATE `student` SET `".$table."` = 1 WHERE roll_num =$roll";
//        echo $que;
  $some = $conn->query($que);
}
?>
      <tr class="hello" >
        <td style="background-color: <?php if($care_taker) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white;">Care Taker</td>
        <td style="background-color: <?php if($gymkhana) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white; border-right: 10px solid white;">Gymkhana</td>
        <td style="background-color: <?php if($submit_thesis) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white; border-right: 10px solid white;">Thesis</td>
        <td style="background-color: <?php if($cc) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white; border-right: 10px solid white;">CC No dues</td>
        <td style="background-color: <?php if($faa) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>; "><a style="text-decoration:none; color: white;" href="student_department.php" style="color: white;">Faculty</a></td>
      </tr>
      <tr class="hello" >
        <td style="background-color: <?php if($warden) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white;">Warden</td>
        <td></td>
        <td style="background-color: <?php if($library) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white; border-right: 10px solid white; border-left: 10px solid white;">Library</td>
        <td style="background-color: <?php if($cc_in_charge) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white; border-right: 10px solid white;">CC In-charge</td>
        <td></td>
      </tr>
      <tr class="hello">
        <td colspan="2" style="background-color: <?php if($asst_register) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white; border-right: 10px solid white;">Asst. Registrar</td>
        <td colspan="3"></td>
      </tr>
      <tr class="hello" >
        <td colspan="5" style="background-color: <?php if($hod) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white;">HOD</td>
      </tr>
      <tr class="hello" >
        <td colspan="5" style="background-color: <?php if($account) echo "rgb(33,48,49)"; else echo "rgb(162,134,111)"; ?>;  color: white;">Account</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</body>
</html>
