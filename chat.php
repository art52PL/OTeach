<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="powrot"><a href="./profile.php">Powrót</a></div>
    <div class="chatWindow">
        <div id="chat" class="chat">
            
            <div class="chatMessage">wegu</div>
            <div class="chatMessage">wgwg</div>
        </div>
        <form action="./chat.php">
            <input type="text" placeholder="enter message">
            <input type="submit" value="send">
        </form>
    </div>
</body>
</html>

<style>
    body{
        margin: 0;
        background-color: #7a7a74;
        font-family: Arial;
        overflow: hidden;
    }
    body form{
        display: flex;
        width: 100vw;
        justify-content: center;
        align-items: space-around;
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
        width: 10vw;
    }
    input:hover{
        background-color: #d9a816;
    }
    #chat{
        width: 50vw;
        height: 70vh;
    }
    .chatWindow{
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
    }
    .chatMessage{
        width: 40vw;
        background-color: #8a8a84;
        color: #fcfc03;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 20px;
        margin-bottom: 10px;
    }
    .main{
        margin: 10px;
        width: 7vw;
        border-radius: 2vw;
        text-align: center;
        background-color: #fcfc03;
        color: #7a7a74;
        margin-bottom: 10px;
        padding: 10px;
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

<!-- 
#7a7a74
#8a8a84

#fcfc03
#d9a816
 -->