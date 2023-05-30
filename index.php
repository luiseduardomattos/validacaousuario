<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ValidacaoUsuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
    <div class="card" style="width: 18rem";>
    <form action="validar.php" method="post">

    <img src="imagem/digitacaodesenha.jpg" class="card-img-top" alt="...">
        <h4>Tela de Login</h4>
        <br>
        <h5>Digite seu email</h5>
        <input placeholder="usuario@email.com" name="usuario"><br>
        <br>
        <h5>Digite sua senha.</h5>
        <input type="password" placeholder="Senha" name="senha"><br>
        <br>
       <button type="submit" class="btn btn-primary">Entrar</button> 
    </div>
</div>

       <!-- <button type="button" class="btn btn-primary">Primary</button> -->
       
    </form>   
    
</body>
</html>