<!DOCTYPE html>
    <html>
<head>
    <title>
        testing forms
    </title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <input type="checkbox" name="c1" value="c1">
    <input type="checkbox" name="c2">
    <input type="checkbox" value="c3">
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "The fin things are  <br>";
    if(isset($_POST["c1"]))
        if($_POST["c1"] == 'c1') echo $_POST["c1"]."<br>";
    if(isset($_POST["c2"]))
        if($_POST["c2"] == "on") echo $_POST["c2"]."<br>";
//    if($_POST["c3"]) echo $_POST["c3"]."<br>";
}
?>
</body>
</html>