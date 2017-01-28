<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
  <style>
    .error {
      color: #FF0000;}
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=password], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
</head>
<body>
<?php
$nameErr = $passErr = $validatErr = $_SESSION["name"] = $_SESSION["pass"] = $_SESSION["type"] = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $_SESSION["error"] = "";
  $name = $_POST["name"];
  $pass = $_POST["password"];
  $type = $_POST["type"];
  $dec = 0;
  if (empty($name)){
    $dec = 0;
    $nameErr = "* Username can't be empty";
  }
  else $dec = 1;
  if (empty($pass)){
    $dec = 0;
    $passErr = "* Password can't be empty";
  }
  else $dec = 1;
  if(empty($name) || empty($pass)) $dec = 0;
  if ($dec)
  {
    $server = "localhost";
    $username = "root";
    $password = "";
    $Database = "no_dues";
    $conn = new mysqli($server, $username, $password, $Database);
    if (!$conn) die("No connection to database");
    if ($type == "student")
    {
      $dec = 2;
      $q1 = "SELECT * FROM `student` WHERE name = '$name'";
      $res = $conn->query($q1);
      if ($res)
      {
        $dec = 3;
        foreach ($res as $resarr)
        if ($resarr['password'] == $pass)
        {
          $_SESSION["name"] = $name;
          $_SESSION["pass"] = $pass;
          $_SESSION["type"] = $type;
          $dec = 4;
          header('Location: '.$type.'.php');
        }
        else $validatErr = "*Username and Password does not match";
        if(!$validatErr) $validatErr = "* Username does not exist";
      }
      else $validatErr = "* Username does not exist";
    }
    elseif ($type == "warden" || $type == "care_taker")
    {
      $dec = 2;
      $q1 = "SELECT * FROM `$type` WHERE name = '$name'";
      $res = $conn->query($q1);
      if ($res)
      {
        $dec = 3;
        foreach ($res as $resarr)
          if ($resarr['password'] == $pass)
          {
            $_SESSION["name"] = $name;
            $_SESSION["pass"] = $pass;
            $_SESSION["type"] = $type;
            $dec = 4;
            header('Location: '.$type.'.php');
          }
          else $validatErr = "*Username and Password does not match";
      }
      else $validatErr = "* Username does not exist";
    }
  }
  echo "dec is ".$dec;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div>
  <span class="error"><?php echo $_SESSION["error"] ?></span>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    User name:<br>
    <input type="text" name="name"><br>
    <span class="error"><?php echo $nameErr ?></span><br>
    Password:<br>
    <input type="password" name="password"><br>
    <span class="error"><?php echo $passErr?></span><br>
    Login as :
    <select name="type">
      <option value="student">Student</option>
      <option value="warden">Warden</option>
      <option value="care_taker">Care Taker</option>
      <option value="Faculty">Faculty</option>
      <option value="gymkhana">Gymkhana</option>
      <option value="asst_register">Asst. Register</option>
      <option value="submit_thesis">Submit Thesis</option>
      <option value="library">Library</option>
      <option value="cc_online_no_dues">CC</option>
      <option value="cc_in_charge">CC in Charge</option>
      <option value="hod">HOD</option>
      <option value="account">Account</option>
      <option value="cc_in_charge">cc_in_charge</option>
    </select><br><br>
    <span class="error"><?php echo $validatErr ?></span>
    <input type="submit" value="Login">
  </form>
</div>
</body>
</html>