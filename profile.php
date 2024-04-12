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
            font-size: 30px;
            width: 100%;
            background-color: #fcfc03;
            color: #7a7a74;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: #7a7a74;
            text-decoration: none;
            margin-right: 20px;
            font-size: 20px;
        }
        .profile {
            width: 50%;
            background-color: #d9a816;
            margin: 5% auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .profile h2 {
            font-size: 24px;
            margin: 0;
        }
        p {
            margin: 20px;
        }
    </style>
</head>
<body>
    <header>
        <span>OTeach</span>
        <a href="./login.php">Wyloguj</a>
        <a href="./chat.php">Wiadomości</a>
        <a href="./search.php">Wyszukaj korepetytora</a>
    </header>
    <div class="profile">
        <h2>Nazwa użytkownika</h2>
        <img src="./deafultUser.jpg" alt="Profile Picture">
        <p>Opis: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae vel porro esse doloribus et quam est? Magni nostrum itaque soluta ad porro ab? Voluptates eligendi fugiat minus, quidem ad provident.</p>
    </div>
</body>
</html>