<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/styleLoged.css">
    <title>Feed</title>
</head>
<body>
<?php
    if(isset($_SESSION['loged'])){
        if($_SESSION['loged']){
            echo '
                <div id="container" class="glass">
                    <h3>====Você está logado!!!!====</h3> <br>
                    <h4>Obrigado por acessar meu site!</h4> <br>
                    <p>
                        Código de estilo aproveitado de um projeto * feito
                        por mim *, que se econtra no meu github,
                        caro queira acessar:    
                        <a target="_blank" href="https://github.com/Gabriel-Malenowitch/Login-Glass "> Aqui </a>
                    </p>
                </div>
            ';
        }
        else{
            echo '
            <div id="container" class="glass">
                <h3>====Você não está logado!!!!====</h3> <br>
            </div>
            ';
        }
    }else{
        echo '
            <div id="container" class="glass">
                <h3>====Você não está logado!!!!====</h3> <br>
            </div>
            ';
    }
    
?>
</body>
</html>