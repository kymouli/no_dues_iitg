<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Students-Faculty</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/warden.css">
<link rel="stylesheet" type="text/css" href="css/student_department.css">
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
<?php
if (!isset($_SESSION["name"]) || ($_SESSION["type"] != "student"))
{
  $_SESSION["error"] = "Please Login To continue:";
//   header('Location: li.php');
  echo "<script>window.location = 'li.php';</script>";
}
?>
<!-- <script type="text/javascript">
function showStuff(ide, text) {
     document.getElementById(ide).style.display = 'none';
     document.getElementById(text).style.display='none';    
}
</script> -->
<div style="width: 100%;">
<div class="sidebar" style="float:left;">
  <ul style="/*background-color: black;*/background-image:url(css/login.png); height: 100%;" ><br><br><br>
<li><a href="javascript:void(0)" style="text-align: center; font-size: 23px; vertical-align: middle;" class="active"><b><p style="display: inline-block;" class="glyphicon glyphicon-education"></p>&nbsp;&nbsp;IIT GUWAHATI</b></a>
  <br>
  <br><br><li>><span style="font-size: 17px; padding-bottom: 0px;" class="active">You are logged in as Student &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></li>
  <hr style="width: 85%; float: left; "><br><br><br>
   <li><a href="student.php" style="font-size: 18px;">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
  <li><a href="javascript:void(0)" style="font-size: 18px;">Professors&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="javascript:void(0)" style="font-size: 18px;">Intranet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="javascript:void(0)" style="font-size: 18px;">Moodle&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <!-- <li><a href="javascript:void(0)" onclick="showStuff('warden_table_all', 'warden_table_approved');" style="font-size: 18px;">Approved&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> -->
  <li><a href="javascript:void(0)" style="font-size: 18px;">Academic Calendar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  
  <br><br><br><br><br>
  <hr style="width: 85%; float: left; padding: 0;"><br><br>
  <li><a href="javascript:void(0)" style="font-size: 17px; "><p style="display: inline-block;" class="glyphicon glyphicon-question-sign"></p>&nbsp;&nbsp;Help&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
  <li><a href="li.php" style="font-size: 17px; ">Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
</ul>
</div>
</div>
<div style="width: 80%; border-top: 0; float:right;">
<div class="fixed_scroll" id="hide_as_scroll" style=" height:100%;"  >
<img src="wardentitle.png" alt="Title" style="max-width: 100%; max-height:100%;  height: auto; width: auto;"></div>
<div style="margin-top: 22%; display: inherit;" id="warden_table_all">
<table id="keywords" cellspacing="0" cellpadding="0" style="display: table; empty-cells: hide;">
    <tbody>
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
    $query1 = "SELECT * FROM `student` WHERE name = '$name'";
    $res = $conn->query($query1);
    if ($res) {
        foreach ($res as $row) {
            echo "<thead>
            <tr style='font-size:15px;'>
            <th>Professor</th>
            <th>Approval</th>
            </tr>
            </thead> 
            <tr class='hello'>
<td>Amit Awekar</td>
<td>" . decide($row['Amit Awekar']) . "</td>
</tr>

<tr class='hello'>
<td>Arjit Sur</td>
<td>" . decide($row['Arjit Sur']) . "</td>
</tr>

<tr class='hello'>
<td>Arnab Sarkar</td>
<td>" . decide($row['Arnab Sarkar']) . "</td>
</tr>

<tr class='hello'>
<td>Aryabartta Sahu</td>
<td>" . decide($row['Aryabartta Sahu']) . "</td>
</tr>

<tr class='hello'>
<td>Ashish Anand</td>
<td>" . decide($row['Ashish Anand']) . "</td>
</tr>

<tr class='hello'>
<td>Benny George K</td>
<td>" . decide($row['Benny George K']) . "</td>
</tr>

<tr class='hello'>
<td>Chandan Karfa</td>
<td>" . decide($row['Chandan Karfa']) . "</td>
</tr>

<tr class='hello'>
<td>Deepanjan Kesh</td>
<td>" . decide($row['Deepanjan Kesh']) . "</td>
</tr>

<tr class='hello'>
<td>Diganta Goswami</td>
<td>" . decide($row['Diganta Goswami']) . "</td>
</tr>

<tr class='hello'>
<td>G Sajith</td>
<td>" . decide($row['G Sajith']) . "</td>
</tr>

<tr class='hello'>
<td>Gautam Barua</td>
<td>" . decide($row['Gautam Barua']) . "</td>
</tr>

<tr class='hello'>
<td>Hemangee K Kapoor</td>
<td>" . decide($row['Hemangee K Kapoor']) . "</td>
</tr>

<tr class='hello'>
<td>Jatindra Kumar Deka</td>
<td>" . decide($row['Jatindra Kumar Deka']) . "</td>
</tr>

<tr class='hello'>
<td>John Jose</td>
<td>" . decide($row['John Jose']) . "</td>
</tr>

<tr class='hello'>
<td>Pinaki Mitra</td>
<td>" . decide($row['Pinaki Mitra']) . "</td>
</tr>

<tr class='hello'>
<td>Purandar Bhaduri</td>
<td>" . decide($row['Purandar Bhaduri']) . "</td>
</tr>

<tr class='hello'>
<td>R Inkulu</td>
<td>" . decide($row['R Inkulu']) . "</td>
</tr>

<tr class='hello'>
<td>Rashmi Duta Baruah</td>
<td>" . decide($row['Rashmi Duta Baruah']) . "</td>
</tr>

<tr class='hello'>
<td>S V Rao</td>
<td>" . decide($row['S V Rao']) . "</td>
</tr>

<tr class='hello'>
<td>Samit Bhattacharya</td>
<td>" . decide($row['Samit Bhattacharya']) . "</td>
</tr>

<tr class='hello'>
<td>Sanasam Ranbir Singh</td>
<td>" . decide($row['Sanasam Ranbir Singh']) . "</td>
</tr>

<tr class='hello'>
<td>Santosh Biswas</td>
<td>" . decide($row['Santosh Biswas']) . "</td>
</tr>

<tr class='hello'>
<td>Shivashankar B Nair</td>
<td>" . decide($row['Shivashankar B Nair']) . "</td>
</tr>

<tr class='hello'>
<td>Sukumar Nandi</td>
<td>" . decide($row['Sukumar Nandi']) . "</td>
</tr>

<tr class='hello'>
<td>Sushanta Karmakar</td>
<td>" . decide($row['Sushanta Karmakar']) . "</td>
</tr>

<tr class='hello'>
<td>T Venkatesh</td>
<td>" . decide($row['T Venkatesh']) . "</td>
</tr>

<tr class='hello'>
<td>V Vijaya Saradhi</td>
<td>" . decide($row['V Vijaya Saradhi']) . "</td>
</tr>
";
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
    </tbody>
  </table>
  </div>
</div>
</body>
</html>
