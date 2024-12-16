<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.0.2-dist/css/bootstrap.css" />
    <style>
        html,body
        {
            height: 100%;
            width: 100%;   
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container
        {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align:center;
            width: 24rem;
            
        }
        
        </style>

</head>
<body  class='p-3 mb-2 bg-secondary text-white'>
    <div class="container card bg-dark">
        
        <img class="card-img-top" heigth="400px" width="400px" src='../Image/asus.jpg'>
        <div class="card-body text-ligth">
        <?php 
        session_start();
        include 'connection.php'; 
           echo  "<h5 class='card-title'>".$_SESSION['name']."</h5>" ;
           echo  "<p class='card-text'>".$_SESSION['email']."</p>";
           $email=$_SESSION['email'];

            $q="select name ,no,time, time2 from givepc where email='$email'";
            $r=mysqli_query($conn,$q);

            if(mysqli_num_rows($r))
            {
                while($row=mysqli_fetch_assoc($r))
                {
                    echo "<hr>";
                    echo "<p class='card-text'>Name :".$row['name']." | Pc No is :".$row['no']."</p>";
                    $time = new DateTime($row['time']);
                    $time1 = new DateTime($row['time2']);
                    $interval = $time->diff($time1);
                    echo "<p class='card-text'>For Time of ".$interval->h." hours and ".$interval->i." minutes.</p>";
                    echo "<hr>";
                }
            }

        ?>
    </div>
    </div>
</body>
</html>