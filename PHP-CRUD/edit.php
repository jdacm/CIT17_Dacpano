<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        body {
            background: url('img/mcbg.png') no-repeat center center fixed; 
            background-size: cover;
            margin:0;
            font-family:"Press Start 2P", monospace;
        }

        .header {
            background: #1a472a;
            padding:25px;
            text-align:center;
            color:#fff;
            text-shadow:2px 2px #000;
            font-size:36px;
            font-weight:bold;
            border-bottom:5px solid #222;
        }

        .container {
            width: 95%;             
            max-width: 500px;  
            min-width: 350px;       
            margin: 50px auto;
            background: rgba(0,0,0,0.7);
            padding: 50px;        
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
        }

        input[type="text"], input[type="email"] {
            width:100%;
            padding:12px;
            margin-bottom:20px;
            border:3px solid #444;
            border-radius:6px;
            font-size:16px;
            background:#f0f0f0;
            color:#000;
            transition:0.2s;
        }

        input[type="text"]:focus, input[type="email"]:focus {
            border-color:#1e90ff;
            outline:none;
            transform:scale(1.02);
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
            background:#0b61c1;
            transform:scale(1.05);
        }

        .back-btn {
            display:inline-block;
            padding:8px 18px;
            margin-bottom:20px;
            background:#1e90ff;
            color:#fff;
            text-decoration:none;
            font-weight:bold;
            border-radius:6px;
            transition:0.2s;
        }

        .back-btn:hover {
            background:#2c5d1c;
            transform:scale(1.05);
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

<div class="header">EDIT USER</div>

<div class="container">
    <a href="index.php" class="back-btn">< Back</a>
    <form method="POST">
        <input type="text" name="name" value="<?= $row['name']; ?>" required>
        <input type="email" name="email" value="<?= $row['email']; ?>" required>
        <input type="text" name="phone" value="<?= $row['phone']; ?>" required>
        <button type="submit" name="update">Update</button>
    </form>
</div>

<?php
if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conn->query("UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id");
    header("Location:index.php");
}
?>
</body>
</html>
