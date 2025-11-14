<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
        body {
            background: url('img/mcbg.png') repeat;
            background-size: cover;
            margin: 0;
            font-family:"Trebuchet MS", Tahoma, Verdana, sans-serif;
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
            max-width: 1000px;
            margin: 40px auto;
            background: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border: 5px solid #3a2f0b;
            border-radius: 12px;
            overflow-x: auto;
        }

        a.btn {
            font-family: 'Press Start 2P', cursive;
            display: inline-block;
            background: #3c8527;
            padding: 12px 25px;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            border: 4px solid #2c5d1c;
            font-weight: bold;
            text-shadow: 2px 2px #000;
            margin-bottom: 20px;
            transition: 0.2s;
        }
        a.btn:hover {
            background: #2c5d1c;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #c6c6c6;
            border: 5px solid #676767;
            font-size: 16px;
        }

        th, td {
            padding: 12px;
            border: 3px solid #555;
            text-align: center;
            background: #e3e3e3;
            font-weight: bold;
        }

        th {
            background: #999;
        }

        .action-btn {
            padding: 6px 14px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            border: 2px solid #222;
            border-radius: 4px;
            transition: 0.2s;
        }

        .edit { background: #1e90ff; }
        .delete { background: #d63c3c; }
        .edit:hover { background: #0b61c1; transform: scale(1.05); }
        .delete:hover { background: #b32424; transform: scale(1.05); }


        @media (max-width: 768px) {
            .header { font-size: 28px; padding: 20px; }
            a.btn { font-size: 16px; padding: 10px 20px; }
            table { font-size: 14px; }
        }

        @media (max-width: 480px) {
            .container { padding: 20px; }
            table th, table td { padding: 8px; }
        }
    </style>
</head>
<body>

<div class="header">USER LIST</div>

<div class="container">
    <a href="add.php" class="btn">+ Add New User</a>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php
        $result = $conn->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['phone']; ?></td>
            <td>
                <a class="action-btn edit" href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                <a class="action-btn delete" href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this record?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
