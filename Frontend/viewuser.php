<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: black;
        }
        table,th,td{
            margin-top: 10px;
            border: 2px solid white;
            height: 30px;    
            color: white;
            font-size: 18px;
            width: 800px;
        }
        th,td{
            padding: 20px 20px;
        }
        header{
            width: 100%;
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
$sql = "SELECT * FROM datas";
$result = mysqli_query($conn, $sql);
echo "<header>View Users</header>";
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>
        <th>id</th>
        <th>username</th>
        <th>email</th>
        </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
mysqli_close($conn);
?>