<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Feedback || page</title>
    <link rel="stylesheet" href="../Css/feed.css?v=<?php echo time();?>">

</head>
<body>
    <div class="main">
    <div class="box">
        <h1 style="color:white">Feedback</h1>
    <form action="../Backend/feed(back).php"method="post"  id="form">
        <input type="text" placeholder="Enter Name" name="name" size=35><br><br>

            <input type="text" placeholder="Enter E-Mail" name="email" size=35><br><br>

                <textarea name="msg" placeholder="Enter Message" rows=10 cols=34></textarea><br><br>

                <input type="submit" value="Submit">
    </form>
</div>
</div>
    </body>
</html>
