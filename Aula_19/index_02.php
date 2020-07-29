<!doctype html>
<html lang="pt-br">
    <head>
        <title>Formulário</title>
        <meta charset="utf-8" />
        <style>
            ul{
                list-style: none;
            }
            input, select{
                padding: 5px;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form method="POST">
            <ul>
                <li>Usuário: <input type="text" name="txtUsuario" /></li>
                <li>Senha: <input type="password" name="txtSenha2" /></li>
                <li><input type="submit" name="btnSubmit" value="Entrar" />
                    <a href="http://localhost/Curso_PHP/Aula_19/index_02.php">Atualizar</a></li>
            </ul>
        </form>
        <br />
        <?php
        echo "Usuário: " . filter_input(INPUT_POST, "txtUsuario", FILTER_SANITIZE_STRING);
        echo "<br />";
        echo "Senha: " . md5(filter_input(INPUT_POST, "txtSenha2", FILTER_SANITIZE_STRING));
        ?>
    </body>
</html>