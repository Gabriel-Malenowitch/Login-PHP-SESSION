<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/styleCreateAccount.css">
    <title>Crie uma conta!!</title>
</head>
<body>
    <div id="container" class="glass">
        <h1 class="title"><span class="title-decoration">Inscreva-se</span> Bro</h1>
        <form method="POST" action="./index.php">
            <input name="createUsername" id="name" autofocus type="text" placeholder="Username" class="glass inputText username">
            <input id="password" type="password" placeholder="Password" name="createPassword" class="glass inputText passworld">
            <input id="password1" type="password" placeholder="Password Again" class="glass inputText passworld">
            <button type="submit" class="buttonGo">Criar</button>
        </form>
    </div>
    <script>
        document.addEventListener('submit', e=>{
            let password0 = document.getElementById('password').value
            let password1 = document.getElementById('password1').value
            if(String(password0) !== String(password1)){
                e.preventDefault()
                alert("As senhas não conhecidem!")
            }
        })
    </script>

    <script src="./assets/scriptRegexTest.js"></script>

</body>
</html>