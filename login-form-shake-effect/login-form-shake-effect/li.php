<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Amatic+SC" >
<style type="text/css">
    .error {
        color: #FF0000;}
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
</style>
</head>
<body style="background-image: url(css/login.png)">
  <?php
  $er = 0;
  $nameErr = $passErr = $validatErr = $_SESSION["name"] = $_SESSION["pass"] = $_SESSION["type"] = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
      $nameErr = $passErr = $validatErr = $_SESSION["name"] = $_SESSION["pass"] = $_SESSION["type"] = "";
      $er = 0;
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
        $q1 = "SELECT * FROM `$type` WHERE name = '$name'";
        $res = $conn->query($q1);
        if ($res)
        {
          $dec = 3;
          foreach ($res as $resarr)
          {
                    if ($name != $resarr["name"]) {
                      $validatErr = "*Invalid credentials!";
                    }
          if ($resarr['password'] == $pass)
          {
            $_SESSION["name"] = $name;
            $_SESSION["pass"] = $pass;
            $_SESSION["type"] = $type;
              $dec = 4;
              header('Location: '.$type.'.php');
          }
          else $validatErr = "*Invalid credentials!";
            }
            if(!$validatErr) $validatErr = "* Invalid Credentials!";
        }
        else $validatErr = "* Invalid Credentials!";
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
              {
                    if ($name != $resarr["name"]) {
                      $validatErr = "*Invalid credentials!";
                    }
                  if ($resarr['password'] == $pass)
                  {
                      $_SESSION["name"] = $name;
                      $_SESSION["pass"] = $pass;
                      $_SESSION["type"] = $type;
                      $_SESSION["hostel"] = $resarr['hostel'];
                      $dec = 4;
                      header('Location: '.$type.'.php');
            }
            else $validatErr = "*Invalid credentials!";
            }
            if(!$validatErr) $validatErr = "* Invalid Credentials!";
        }
        else $validatErr = "* Invalid Credentials!";
      }
      elseif ($type == "gymkhana" || $type == "submit_thesis" || $type == "cc_online_no_dues")
      {
          $dec = 2;
          $q1 = "SELECT * FROM `others` WHERE type = '$type' AND name = '$name'";
          echo $q1;
          $res = $conn->query($q1);
          if ($res)
          {
              $dec = 3;
              foreach ($res as $resarr)
              {
                    if ($name != $resarr["name"]) {
                      $validatErr = "*Invalid credentials!";
                    }
                  if ($resarr['password'] == $pass)
                  {
                      $_SESSION["name"] = $name;
                      $_SESSION["pass"] = $pass;
                      $_SESSION["type"] = $type;
                      $dec = 4;
                      header('Location: others.php');
                  }
                  else $validatErr = "*Invalid credentials!";
              }
              if(!$validatErr) $validatErr = "* Invalid Credentials!";
          }
          else $validatErr = "* Invalid Credentials!";
      }
      elseif ($type == "asst_register" || $type == "library" || $type == "cc_in_charge" || $type == "account")
      {
          $dec = 2;
          $q1 = "SELECT * FROM `$type` WHERE name = '$name'";
          echo $q1;
          $res = $conn->query($q1);
          if ($res)
          {
              $dec = 3;
              foreach ($res as $resarr)
              {
                    if ($name != $resarr["name"]) {
                      $validatErr = "*Invalid credentials!";
                    }
                  if ($resarr['password'] == $pass)
                  {
                      $_SESSION["name"] = $name;
                      $_SESSION["pass"] = $pass;
                      $_SESSION["type"] = $type;
                      $dec = 4;
                      header('Location: '.$type.'.php');
                  }
                  else $validatErr = "*Invalid credentials!";
              }
              if(!$validatErr) $validatErr = "* Invalid Credentials!";
          }
          else $validatErr = "* Invalid Credentials!";
      }
      elseif ($type == "hod" || $type == "faculty" )
      {
          $dec = 2;
          $q1 = "SELECT * FROM `$type` WHERE name = '$name'";
          echo $q1;
          $res = $conn->query($q1);
          if ($res)
          {
              $dec = 3;
              foreach ($res as $resarr)
                  {
                    if ($name != $resarr["name"]) {
                      $validatErr = "*Invalid credentials!";
                    }
                   else if ($resarr['password'] == $pass)
                  {
                      $_SESSION["name"] = $name;
                      $_SESSION["pass"] = $pass;
                      $_SESSION["type"] = $type;
                      $_SESSION["department"] = $resarr['department'];
                      $dec = 4;
                      header('Location: '.$type.'.php');
                  }
                  else $validatErr = "*Invalid credentials!";
                }
              if(!$validatErr) $validatErr = "* Invalid Credentials!";
          }
          else $validatErr = "* Invalid Credentials!";
      }
    }
//    echo "dec is ".$dec;
  }
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<header>
 <nav class="navbar navbar-default navbar-fixed-top navbar-inner">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <!--<a href="#"><img class="img-responsive2"
       src="css/icon.png"></a>-->
      <a class="navbar-brand" href="#" style="color: #ffffff;">IIT GUWAHATI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" style="color: #ffffff;">FAQs</a></li>
        <li><a href="#" style="color: #ffffff;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

  <div class="login-form" >
     <h1>Login</h1><br>
    <br>
      <span class="error" class="alert">
          <?php
          if(isset($_SESSION["error"]))
          {
              echo $_SESSION["error"];
//              $_SESSION["error"] = "";
              unset($_SESSION["error"]);
          }
          ?></span>
     <div class="form-group ">
       <input type="text" class="form-control" style="font-size: 15px;" placeholder="Username " id="UserName" name="name">
         <i class="fa fa-user"></i>
         <span class="error" class="alert">
             <?php
             if(isset($nameErr) && $nameErr)
             {
                 $er = 1;
                 echo $nameErr;
//                 $nameErr = "";
                 unset($nameErr);
             }
            ?>
         </span><br>
     </div>
     <div class="form-group log-status">

       <input type="password" class="form-control" style="font-size: 15px;" placeholder="Password" id="Password" name="password">
         <i class="fa fa-lock"></i>
         <span class="error" class="alert">
             <?php
             if(isset($passErr) && $passErr)
             {
                 $er = 1;
                 echo $passErr;
//                 $passErr = "";
                unset($passErr);
             }
             ?>
         </span><br>
     </div>
      <span style="display:inline;" class="heading">Login as :</span><br><br>
      <select name="type" class=" submit_padding">
        <option value="student">Student</option>
        <option value="warden">Warden</option>
        <option value="care_taker">Care Taker</option>
        <option value="faculty">Faculty</option>
        <option value="gymkhana">Gymkhana</option>
        <option value="asst_register">Asst. Register</option>
        <option value="submit_thesis">Submit Thesis</option>
        <option value="library">Library</option>
        <option value="cc_online_no_dues">CC</option>
        <option value="cc_in_charge">CC in Charge</option>
        <option value="hod">HOD</option>
        <option value="account">Account</option>
      </select><br>

      <span class="error" class="alert">
          <?php
          if(isset($validatErr) && $validatErr)
          {
              $er = 1;
              echo $validatErr;
//              $validatErr = "";
              unset($validatErr);
          }
          ?>
      </span>
<br>
     <input type="submit" class="log-btn" name="Login" value="Login">
   </div></form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<?php
if(isset($er) && $er) {
    $er = 0;
    echo "<script src='js/index.js'></script>";
    unset($er);
}
?>
<footer>
  <nav class="navbar navbar-default navbar-fixed-bottom navbar-inner">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" style="color: #ffffff;">
        <p style="display: inline;" style="color: #ffffff;">For any query e-mail to webmaster@iitg.ernet.in</p>
        <div class="nav navbar-nav navbar-right">
        <pre style="display: inline;" class="footer_info" style="color: #ffffff;">You are not logged in      </pre>
        </div>
    </div>
  </div>
</nav>
</footer>
</body>
</html>
