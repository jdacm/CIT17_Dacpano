<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body {
            background: url('img/mcbg.png') repeat;
            background-size: cover;
            margin: 0;
            font-family: "Trebuchet MS", Tahoma, Verdana, sans-serif; 
        }

        .header {
            font-family: 'Press Start 2P', cursive;
            background: #1a472a;
            padding: 25px;
            text-align: center;
            color: #fff;
            text-shadow: 2px 2px #000;
            font-size: 36px;
            font-weight: bold;
            border-bottom: 8px solid #3a2f0b;
        }

        .container {
            width: 90%;
            max-width: 500px;
            min-width: 350px;
            margin: 50px auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }

        .form-box input[type="text"],
        .form-box input[type="email"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 3px solid #444;
            border-radius: 6px;
            font-size: 16px;
            background: #f0f0f0;
            color: #000;
            transition: 0.2s;
        }

        .form-box input[type="text"]:focus,
        .form-box input[type="email"]:focus {
            border-color: #1e90ff;
            outline: none;
            transform: scale(1.02);
        }

        button {
            width: 50%;
            padding: 14px;        
            background: #1e90ff;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
            display: block;
            margin: 0 auto;
        }

        button:hover {
            background: #2c5d1c;
            transform: scale(1.05);
        }

        .back-btn {
            display: inline-block;
            padding: 8px 18px;
            margin-bottom: 20px;
            background: #1e90ff;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 6px;
            transition: 0.2s;
            font-family:"Press Start 2P", monospace;
        }

        .back-btn:hover {
            background: #2c5d1c;
            transform: scale(1.05);
        }

        @media(max-width: 480px){
            .container {
                width: 95%;
                padding: 25px;
            }
        }

    </style>
</head>
<body>

<div class="header">ADD NEW USER</div>

<div class="container">
    <a href="index.php" class="back-btn">< Back</a>
    <div class="form-box">
        <form method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <button type="submit" name="save">SAVE</button>
        </form>
    </div>
</div>

<?php
if(isset($_POST['save'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";
    if($conn->query($sql)){
        header("Location: index.php");
        exit;
    } else {
        echo "<p style='color:red; text-align:center; margin-top:20px;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
