<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <title>
    HOD
  </title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/warden.css">
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
#hide{
  display: block;
  background: transparent;
  border:0;
  float: right;
    color: #ffffff;
    text-align: right;
    padding: 15px 16px;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 900;
    margin-right: 10%;
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
#hide:hover:not(.active) {
    background-color: #ffffff;
    color: black;
    width: 100%;
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
    max-width: 100%;
    max-height: 100%;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
</head>
<body>
<div style="width: 100%;">
<div class="sidebar" style="float:left;">
  <ul style="/*background-color: black;*/background-image:url(css/login.png); height: 100%;" ><br><br><br>
<li><a href="javascript:void(0)" style="text-align: center; font-size: 23px; vertical-align: middle;" class="active"><b><p style="display: inline-block;" class="glyphicon glyphicon-education"></p>&nbsp;&nbsp;IIT GUWAHATI</b></a>
  <br>
  <br><br><li>><span style="font-size: 17px; padding-bottom: 0px;" class="active">You are logged in as <?php echo $_SESSION["type"] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
  <hr style="width: 85%; float: left; "><br><br><br>
  <li><a href="javascript:void(0)" style="font-size: 18px;">Intranet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="javascript:void(0)" style="font-size: 18px;">Moodle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <!-- <li><a href="javascript:void(0)" onclick="showStuff('warden_table_all', 'warden_table_approved');" style="font-size: 18px;">Approved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> -->
  <li><a href="javascript:void(0)" style="font-size: 18px;">Approved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  <li><a href="javascript:void(0)" style="font-size: 18px;">Academic Calendar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li><br><br><br><br><br><br><br><br><br>
  <hr style="width: 85%; float: left; padding: 0;"><br><br>
  <li><a href="javascript:void(0)" style="font-size: 17px; "><p style="display: inline-block;" class="glyphicon glyphicon-question-sign"></p>&nbsp;&nbsp;Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="li.php" style="font-size: 17px;">Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>
</div>
</div>
<div style="width: 80%; border-top: 0; float:right;">
<div class="fixed_scroll" id="hide_as_scroll" style=" height:100%;"  >
<img src="wardentitle.png" alt="Title" style="max-width: 100%; max-height:100%; 
position: fixed; max-width: 100%; max-height: 100%; height: auto; width: auto;"></div>
<div style="margin-top: 22%; display: inherit;" id="warden_table_all">
<table id="keywords" cellspacing="0" cellpadding="0" style="display: table; empty-cells: hide;">
    <thead style="font-size: 17px;">
      <tr>
        <th style="padding-right: 0px; padding-left: 9px; text-align: center;">Check</th>
<!--        <th style="padding-right: 0px; padding-left: 0px; text-align: center;"></th>-->
        <th><span>Name</span></th>
        <th><span>Roll No.</span></th>
        <th><span>Department</span></th>
        <th><span>Hostel</span></th>
      </tr>
    </thead>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <tbody>

 <?php
 if (!isset($_SESSION["name"]) || ($_SESSION["type"] != "hod"))
 {
   $_SESSION["error"] = "Please Login To continue:";
//   header('Location: li.php');
    echo "<script>window.location = 'li.php';</script>";
 }
 else
 {
   $main_name = $_SESSION["name"];
   $main_type = $_SESSION["type"];
//    $main_q1 = "SELECT * FROM `care_taker` WHERE name = '$main_name'";
   $server = "localhost";
   $username = "root";
   $password = "";
   $Database = "no_dues";

   $conn = new mysqli($server, $username, $password, $Database);

   if (!$conn) {
     die("No connection to Database");
   }
//   $q1 = "SELECT * FROM `student` WHERE department = `".$_SESSION['department']."`";
   $q1 = "SELECT * FROM `student`";
   if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
     $res = $conn->query($q1);
     foreach ($res as $row)
     {
       if (!$row[$main_type] && $row['department'] == $_SESSION['department'] && $row['faculty'] && $row['care_taker'] && $row['warden'] && $row['gymkhana'] && $row['asst_register'] && $row['submit_thesis'] && $row['library'] && $row['cc_in_charge'])
       {
         if (isset($_POST[$row["roll_num"]]))
         {
           sql_check($row["roll_num"],$conn,$main_type);
         }
       }
     }
     $_SERVER["REQUEST_METHOD"] = "";
//        echo "<script>location.reload();</script>";
   }
//    $i = 0;
   $res = $conn->query($q1);
   foreach ($res as $row)
   {
    if($row[$main_type] == 0 && $row['department'] == $_SESSION['department'] && $row['faculty'] && $row['care_taker'] && $row['warden'] && $row['gymkhana'] && $row['asst_register'] && $row['submit_thesis'] && $row['library'] && $row['cc_in_charge'])
       echo '<tr class="hello"><td><input type="checkbox" name='.$row['roll_num'].'></td><td>'.$row['name'].'</td><td>'.$row['roll_num'].'</td><td>'.$row['department'].'</td><td>'.$row['hostel'].'</td></tr>';
   }
//    echo "<input type='submit' value='Save'></form>";
 }
 function sql_check($roll,$conn,$table)
 {
   $que = "UPDATE `student` SET `".$table."` = 1 WHERE roll_num =$roll";
//        echo $que;
   $some = $conn->query($que);
 }
 ?>
    </tbody>
  </table>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
  <input type='submit' class="log-btn" value='Approve' style="width: 40%; ">
    </div></div></div>
  </form>

</div>
</div>
</body>
</html>
