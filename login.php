<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&family=Anton&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Alumni Sans', sans-serif;
            background-image: linear-gradient(88deg, black, yellow);
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .inputSubmit {
            background-color: #ffeb01;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: black;
            font-family: 'Anton', sans-serif;
            font-size: 15px;
        }

        .inputSubmit:hover {
            background-color: yellow;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" nome="senha" placeholder="Senha">
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    
</body>
</html>