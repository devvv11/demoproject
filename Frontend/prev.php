<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            background-color: black;
        }
        table,th,td{
            margin-top: 10px;
            border: 2px solid white;
            height: 30px;    
            color: white;
            font-size: 18px;
        }
        th,td{
            padding: 20px 20px;
        }
        header{
            background-color: #f2f2f2;
            text-align: center;
            height: 50px;
            font-size : 30px;
            font-weight: 800;
            padding-top: 10px;
        }
        </style>
</head>
</html>
<?php

$conn = mysqli_connect("localhost", "root","","lab_management");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM addcomp";
$result = mysqli_query($conn, $sql);
echo "<header>View computer details</header>";
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>id</th>
        <th>name</th>
        <th>cname</th>
        <th>motherboard</th>
        <th>cpu</th>
        <th>gpu</th>
        <th>bit</th>
        <th>ram</th>
        <th>rom</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["cname"] . "</td>";
        echo "<td>" . $row["motherboard"] . "</td>";
        echo "<td>" . $row["cpu"] . "</td>";
        echo "<td>" . $row["gpu"] . "</td>";
        echo "<td>" . $row["bit"] . "</td>";
        echo "<td>" . $row["ram"] . "</td>";
        echo "<td>" . $row["rom"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No computers added yet.";
}
mysqli_close($conn);
?>