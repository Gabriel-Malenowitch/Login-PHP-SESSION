<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="./assets/styleLogin.css">
    <title>Trabalho</title>
</head>
<body>
<div class="myName">
        <p class="myNameP">Desenvolvido por <strong>Gabriel Botelho Malenowitch</strong></p>
    </div>
    <section class="container">
        <div class="glassDown glassDown0 glass"></div>
        <div class="glassUp glassDown1 glass"></div>
        <div class="glassDown glassDown2 glass"></div>
        <div id="containerLogin" class="glass">
            <h1 class="title"><span class="title-decoration">Login</span> Glass</h1>
            <form method="POST" action="/Trabalho00/index.php">
                <input name="username" id="name" autofocus type="text" placeholder="Username" class="glass inputText username">
                <input name="password" id="password" type="password" placeholder="Password" class="glass inputText passworld">
                <button type="submit" class="buttonGo">Login</button>
            </form>
            <p class="option">Forgot password? <a onclick="alert('Esse Botão é só enfeite : )')" href="#">Click Here</a></p>
            <p class="option">Don't have an account? <a target="_blank" href="/Trabalho00/createAccount.php">Sign Up</a></p>
        </div>
        <div class="glassUp glassUp0 glass"></div>
        <div class="glassUp glassUp1 glass"></div>
    </section>
    </div>
    <script src="./assets/scriptRegexTest.js"></script>
    <?php
        //printa as sections
        // print_r($_SESSION);
    ?>
    <!-- !aA2asdfas -->
    <!-- !1aAaaaaaa -->
</body>
</html> 
