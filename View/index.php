<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <form method="POST" action="../Controller/validar-login.php">
            <input type="text" name="login" placeholder="Login" required=""><br>
            <input type="password" name="senha" placeholder="Senha" required=""><br>
            <input type="submit" value="Login">    
        </form>
        <form method="POST" action="Cadastro.php">
            <input type="submit" value="Cadastrar">
        </form>
    </center>
    </body>
</html>