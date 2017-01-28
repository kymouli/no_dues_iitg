<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Care Taker
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
if (!$_SESSION["name"] || $_SESSION["type"] != "care_taker")
{
    $_SESSION["error"] = "Please Login To continue:";
//    header('Location: li.php');
}
else
{
    $main_name = $_SESSION["name"];
    $main_type = $_SESSION["type"];
    $main_q1 = "SELECT * FROM `care_taker` WHERE name = '$main_name'";
    $server = "localhost";
    $username = "root";
    $password = "";
    $Database = "no_dues";

    $conn = new mysqli($server, $username, $password, $Database);

    if (!$conn) {
        die("No connection to Database");
    }

    $main_res = $conn->query($main_q1);
    if ($main_res)
    {
        foreach ($main_res as $main_resArr)
        $main_hostel = $main_resArr["hostel"];
    }

    $query1 = "SELECT * FROM `student` WHERE hostel = '$main_hostel'";
    $res = $conn->query($query1);
    function decide($bol)
    {
        if ($bol) {
            return "yes";
        }
        else return "no";
    }
    if ($res) {
        foreach ($res as $row) {
            echo '<tr><td>'.$row['serial'].'</td><td>'.$row['name'].'</td><td>'.$row['roll_num'].'</td><td>'.$row['department'].'</td><td>'.$row['hostel'].'</td><td>'.decide($row['warden']).'</td><td>'.decide($row['care_taker']).'</td><td>'.decide($row['gymkhana']).'</td><td>'.decide($row['asst_register']).'</td><td>'.decide($row['submit_thesis']).'</td><td>'.decide($row['library']).'</td><td>'.decide($row['cc_online_no_dues']).'</td><td>'.decide($row['cc_in_charge']).'</td><td>'.decide($row['hod']).'</td><td>'.decide($row['account']);
        }
    }
}
?>
    </table>
</body>