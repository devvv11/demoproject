<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new computer</title>
    <link rel="stylesheet" href="../Css/add.css">
</head>
<body>
<header class="header-section">Add computer</header>
    <div class="form-box">
        <form action="../Backend/add(backend).php" method="post">

            <input type="text" placeholder="Enter monitor name" name="name" required><br><br>

            <input type="text" placeholder= "enter container name" name="cname" required><br><br>

            <label> Select mother board</label><br>
            <select name="motherboard" id="selc">
                <option value="INTEL">INTEL</option>
                <option value="GIGABYTE">GIGABYTE</option>
                <option value="AORUS">AORUS</option>
                <option value="ASUS">ASUS</option>
            </select><br><br>

            <label for="">CPU</label><br>
            <select name="cpu" id="cpu">
                <option value="INTEL">INTEL</option>
                <option value="INTEL">AMD</option>
            </select><br><br>

            <label for="">GPU</label><br>
            <select name="gpu" id="gpu">
                <option value="INTEL">INTEL SERIES</option>
                <option value="AMD">AMD SERIES</option>
            </select><br><br>

            <label for="">BIT</label><br>
            <select name="bit" id="bit">
                <option value="32 bit">32 bit</option>
                <option value="64 bit">64 bit</option>
            </select><br><br>

            <label for="">RAM</label><br>
            <select name="ram" id="ram">
                <option value="3 GB DDR4">3 GB DDR4</option>
                <option value="4 GB DDR4">4 GB DDR4</option>
                <option value="6 GB DDR4">6 GB DDR4</option>
                <option value="8 GB DDR4">8 GB DDR4</option>
            </select><br><br>

            <label for="">ROM</label><br>
            <select name="rom" id="rom">
                <option value="128 GB">128 GB</option>
                <option value="256 GB">256 GB</option>
                <option value="512 GB">512 GB</option>
            </select><br><br>

            <input type="submit">
           <a href="../index.php"> <button id="btn">back</button> </a>
        <form>
</div>
</body>
</html>