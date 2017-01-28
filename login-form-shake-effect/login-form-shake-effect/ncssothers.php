<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    <?php if($_SESSION["type"] == "gymkhana") echo "Gymkhana";
    elseif($_SESSION["type"] == "submit_thesis") echo "Thesis cordinator";
        elseif($_SESSION["type"] == "cc_online_no_dues") echo "CC";
            ?>
    </title>
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
<table>
    <tr>
        <th>Check</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Department</th>
        <th>Hostel</th>
    </tr>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<?php
if (!$_SESSION["name"] || ($_SESSION["type"] != "submit_thesis" && $_SESSION["type"] != "gymkhana" && $_SESSION["type"] != "cc_online_no_due"))
{
    $_SESSION["error"] = "Please Login To continue:";
    header('Location: li.php');
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
    $q1 = "SELECT * FROM `student`";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $res = $conn->query($q1);
        foreach ($res as $row)
        {
            if (!$row[$main_type])
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
        if($row[$main_type] == 0)
        echo '<tr><td><input type="checkbox" name='.$row['roll_num'].'></td><td>'.$row['name'].'</td><td>'.$row['roll_num'].'</td><td>'.$row['department'].'</td><td>'.$row['hostel'].'</td></tr>';
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
    </table>
<input type='submit' value='Approve'></form>
</body>
</html>
