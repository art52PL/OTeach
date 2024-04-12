<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTeach</title>
    <style>
        body {
            margin: 0;
            background-color: #7a7a74;
            font-family: Arial, sans-serif;
        }
        header {
            padding: 20px 10px;
            font-size: 32px;
            width: 100%;
            background-color: #fcfc03;
            color: #7a7a74;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }
        input[type="text"], input[type="password"], input[type="submit"] {
            text-align: center;
            width: 300px;
            height: 50px;
            background-color: #fcfc03;
            border: none;
            border-radius: 25px;
            margin-bottom: 20px;
            font-size: 20px;
            color: #7a7a74;
            transition: background-color 0.3s ease-in-out;
        }
        input[type="submit"] {
            cursor: pointer;
            background-color: #d9a816;
        }
        input[type="submit"]:hover {
            background-color: #c69412;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_POST["name"]))
        {
            $conn = new mysqli("localhost", "root", "", "oteach");
            $name = $_POST["name"];
            $password = $_POST["password"];
        
            if ($password != "" && $password == $conn->query("select haslo from uzytkownicy where nazwa = '" . $name . "'")->fetch_assoc()["haslo"])
            {
                header("Location: ./profile.php");
            }
        }
    ?>

    <header>OTeach</header>
    <div>
        <form action="./login.php" method="POST">
            <input type="text" placeholder="Name" name="name">
            <input type="password" placeholder="Password" name="password">        
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>