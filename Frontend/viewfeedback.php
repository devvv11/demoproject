<html>
<head>
    <title>View Feedbacks</title>
   <style>
body {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    background-image: url('bg.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: white; 
    margin: 0;
    padding: 0;
    box-sizing: border-box; 
	background-size: cover;
	background-repeat: no-repeat;
	opacity: 0.7;
	backdrop-filter: blur(0.2 px);
	border-radius: 5px;
}
.box{
    padding-top: 10px;
    padding-left: 20px;
    height: 170px;
    width: 240px;
    color: white ;
    font-weight : 900;
    opacity: 0.8;
    display: flex;
    margin-left: 20px;
    margin-top: 20px;
    background-color: black;
    border-radius: 5px;
}
header{
font-size: 30px;
background-color: white;
color: black;
font-weight: 600;
}
.main{
    display: flex;
}
h1{
    color: black;
    text-align: center;
    margin: auto;
}
   </style>
</head>
</html>
<?php 
  include("connection.php");

   $sql = "select * from feedbacks";
   $data = mysqli_query($conn,$sql);
   $total = mysqli_num_rows($data);

   if($total != 0)
   {
?>

      <header align="center"> View Feedbacks</header>
   <div class="main">
<?php
       while($result = mysqli_fetch_assoc($data))
       {       
        
            echo "<div class='box'>"."Name :".$result['name']."<br/><br/>";
            echo "Email :".$result['Email']."<br/><br/>";
            echo "Message :".$result['feedback']."<br/>"."</div>";
       }
       
}
else{
    echo "<h1>No Feedbacks</h1>";
}
?>
</div>