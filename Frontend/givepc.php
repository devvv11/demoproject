<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Css/givpc.css?v=<?php echo time();?>"/>
</head>
<body>
    <div class="mainbro">
        <div class="form-container">
            <h1>Registration For Pc</h1>
            <form class="form" action="../Backend/givepcb.php" method="post" onsubmit="return validateTime()">
                <label>Name</label>
                <input type="text" class="input" placeholder="Enter your name" name="name" required>
                <label>Aadhar No</label>
                <input type="text" class="input" placeholder="Enter your Aadhar no" name="addh" required> 
                <label>Age</label>
                <input type="number" class="input" placeholder="Enter your age" min="10" name="age" required> 
                <label>From</label>
                <input type="datetime-local" class="input" name="time" required> 
                <label>To</label>
                <input type="datetime-local" class="input" name="time2" required> 
                <label>Payment Method</label>
                <select name="type" id="type" required>
                    <option value="">Select payment method</option>
                    <option value="cash">Cash</option>
                    <option value="upi">UPI</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function validateTime() {
            const name = document.forms[0]["name"].value;
            const addh = document.forms[0]["addh"].value;
            const age = document.forms[0]["age"].value;
            const time = new Date(document.forms[0]["time"].value);
            const time2 = new Date(document.forms[0]["time2"].value);
            const type = document.forms[0]["type"].value;

            if (!name || !addh || !age || !time || !time2 || !type) {
                alert("Please fill out all fields.");
                return false;
            }
            if(addh.length!=12)
            {
                console.log(addh.length);
                alert("Addhar Sholud be 12 Digit ");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
