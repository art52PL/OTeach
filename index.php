<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTeach</title>
</head>
<body>
    <header>OTeach</header>
    <div>
        <form action="./login.php">
            <input type="submit" class="login" value="login">
        </form>

        <form action="./register.php">
            <input type="submit" class="register" value="register">
        </form>
    </div>
</body>
</html>

<style>
    body{
        margin: 0;
        background-color: #7a7a74;
        font-family: Arial;
    }
    header{
        padding-left: 10px;
        font-size: 30px;
        width: 100vw;
        background-color: #fcfc03;
        color: #7a7a74;
    }
    input{
        width: 20vw;
        height: 5vw;
        background-color: #fcfc03;
        text-align: center;
        border-radius: 2vw;
        color: #7a7a74;
        font-size: 30px;
        transition: 0.5s;
        border: 0;
    }
    input:hover{
        background-color: #d9a816;
    }
    body>div{
        display: flex;
        height: 100%;
        justify-content: space-evenly;
        align-items: center;
        height: 90vh;
    }
</style>