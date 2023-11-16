<?php
include('conexao.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SISAGRORR</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg)
        }
        div {
            background-color:black;
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding:80px;
            border-radius: 15px;
            color:white;
            
        }
        h1{
            color:green;
        }
        button{
            color: green;
        }
        h6{
            color:green;
        }

    </style>
</head>
<body>
    <form action="" method="POST">
        <div>
        <h1>SISAGRORR</h1>
        <p>
            <label>Usuário</label>
            <input type="text" name="nome">
        </p>
        
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>

        <p>
            <button type="submit">Login</button>
        </p>
        <h6>Ainda não é cadastrado? cadastre se!</h6>
        <button>Aqui</button>
        </div>
        

    </form>
    
</body>
</html>