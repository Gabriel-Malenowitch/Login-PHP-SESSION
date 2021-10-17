<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        session_start();
    
        //Define se está logado ou não
        $_SESSION['loged'] = 0;
    
        //Adiciona logins às sections
        if(isset($_POST["createUsername"]) && isset($_POST["createPassword"])){
            $_SESSION[$_POST["createUsername"]] = $_POST["createPassword"];
        }
    
        //confere os dados e toma as providencias
        if(isset($_POST["username"]) && isset($_POST["password"])){
            if(isset($_SESSION[$_POST["username"]])){
                if($_SESSION[$_POST["username"]] == $_POST["password"]){
                    $_SESSION['loged'] = 1;
                    // header ("location: loged.php",false);
                }else{
                    echo '<script>alert(`Login Inválido!`)</script>';
                }           
            }else{
                echo '<script>alert(`Login Inválido!`)</script>';
            }
        }
        
        if($_SESSION['loged'] == 1){
            include 'Loged.php';
        }else{
            include 'login.php';
        }
    ?>
</body>
</html>