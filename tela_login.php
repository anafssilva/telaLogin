<?php session_start(); include("config.php") ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABCD - Login</title>
    <link rel="icon" href="Imagens/Logo.png">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
    <form class="login" action="Login.php" method="POST">
        <div class="card">
          <div class="cardtop">
            <img class="imglogin" src="Imagens/Logo.png">
            <h5 class="title">GERENCIAMENTO SECRETARIA ESCOLAR</h5>
            <div class="cardgroup">
                <label>Usuário</label>
                <input type="text" name="usuario" id="usuario" placeholder="Digite seu nome de usuário">
            </div>
            <div class="cardgroup">

                <label>Senha</label>
                <input type="password" name="senha"  id="senha" placeholder="Digite sua senha">
            </div>
            <div class="cardgroup">
                <button type="submit" name="submit" value="Enviar">ACESSAR</button>
                <?php 

                if(isset($_SESSION['msg']))
                  {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                  }
                ?> 
                
            </div>
            </div>
          </div>
        </div>
    </form>
</body>
</html>
    


    