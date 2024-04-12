<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="searchbar" class="searchnar">
        <form action="./search.php" method="get">
            <input type="text" name="search">
            <input type="submit" value="wyszukaj">
            <div class="powrot"><a href="./profile.php">Powrót</a></div>
        </form>

        <div id="found" class="found">
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            <div class="result"></div>
            

        </div>
    </div>

    <style>
        .result{
            width: 27vw;
            height: 27vw;
            margin: 1.5vw;
            background-color: #d9a816;
            border-radius: 15px;
        }
        .found{
            display: flex;
            justify-content: left;
            flex-wrap: wrap;
            padding-top: 1.5vw;
            width: 90vw;
            margin-left: 5vw;
            margin-top: 5vh;
            background-color: #7a7a74;
            border-radius: 25px;
        }
        input{
        padding: 0;
        text-align: center;
        height: 5vw;
        background-color: #fcfc03;
        color: #7a7a74;
        font-size: 30px;
        transition: 0.5s;
        border: 0;
        margin: 3px
        }
        input[type=text]{
            border-top-left-radius: 2vw;
            border-bottom-left-radius: 2vw;
            width: 40vw;
        }
        input[type=submit]{
            border-top-right-radius: 2vw;
            border-bottom-right-radius: 2vw;
            width: 20vw;
        }
        .powrot{
            float: right;
            padding: 0;
            text-align: center;
            height: 2.5vw;
            background-color: #fcfc03;
            color: #7a7a74;
            font-size: 30px;
            transition: 0.5s;
            border: 0;
            margin: 3px
            border-top-left-radius: 2vw;
            border-bottom-left-radius: 2vw;
        }
    </style>
</body>
</html>