<?php
include("connection.php");

if (isset($_POST['no']) && isset($_POST['id'])) {
    $no = $_POST['no'];
    $id = $_POST['id'];

    $checkQuery = "SELECT * FROM `givepc` WHERE `no` = '$no' AND `id` != '$id'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        echo '<script>alert("This PC number is already assigned to another entry.");</script>';
    } else {
        $ins = "UPDATE `givepc` SET `no` = '$no' WHERE `id` = '$id'";
        $query = mysqli_query($conn, $ins);

        if ($query) {
            echo '<script>alert("PC number has been updated successfully.");</script>';
        } else {
            echo '<script>alert("Failed to update the PC number.");</script>';
        }
    }
}

if (isset($_POST['delete']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $deleteQuery = "DELETE FROM `givepc` WHERE `id` = '$id'";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        echo '<script>alert("Record has been deleted successfully.");</script>';
    } else {
        echo '<script>alert("Failed to delete the record.");</script>';
    }
}

$sql = "SELECT * FROM givepc";
$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.min.css"/>
    <style>
        html,body
        {
            height: 100%;
            width: 100%;   
            display: flex;
            align-items: center;
            justify-content: center;
        }
        table,th,td
        {
            text-align:center;
        }
    </style>
</head>
<body class='p-3 mb-2 bg-dark'>
    <div class="container">
    <table border="1" cellpadding="10" class='table table-bordered'>
        <thead>
            <tr class="table-secondary">
                <th>Name</th> 
                <th>Aadhar No</th>
                <th>From</th>
                <th>To</th>
                <th>Type</th>
                <th>PC No</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($total > 0) {
                while ($result = mysqli_fetch_assoc($data)) {
                    echo "<tr class='bg-info'>";
                    echo "<td>" . $result['name'] . "</td>";
                    echo "<td>" . $result['addharno'] . "</td>";
                    echo "<td>" . $result['time'] . "</td>";
                    echo "<td>" . $result['time2'] . "</td>";
                    echo "<td>" . $result['type'] . "</td>";
                    echo "<td>" . $result['no'] . "</td>";
                    echo "<td>
                            <form action='' method='post' style='display:inline-block'>
                                <input type='number' name='no' min='0' max='10' value='" . $result['no'] . "' required>
                                <input type='hidden' name='id' value='" . $result['id'] . "'>
                                <button class='btn btn-success'type='submit'>Update PC No</button>
                            </form>
                            <form action='' method='post' style='display:inline-block'>
                                <input type='hidden' name='id' value='" . $result['id'] . "'>
                                <button class='btn btn-danger' type='submit' name='delete'>Delete</button>
                            </form>
                        </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>
