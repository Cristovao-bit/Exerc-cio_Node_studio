<?php
    // Conexão
    require_once 'db_connect.php';
    
    // sessão
    session_start();
    
    // botão enviar
    if(isset($_POST['btn-entrar'])):
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);
        
        // se estiver vazio
        if(empty($login) || empty($senha)):
            $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
        
            // SQL injection
            // 105 or 1=1
            // 1; DROP TABLE nomedatabela
        else:
            $sql = "SELECT login FROM usuarios WHERE login = '$login'"; // where - onde 
            $resultado = mysqli_query($connect , $sql);
            
            if(mysqli_num_rows($resultado) > 0): // se o número de linha que na $resultado é maior do que 0, ou seja, se houver alguma linha no banco de dados
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);
                
                if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li> Usuário e senha não conferem! </li>";
                endif;
            else:
                $erros[] = "<li> Usuários inexistentes </li>";
            endif;
        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        
        <?php
        if(!empty($erros)):
            foreach ($erros as $erro):
                echo $erro;
            endforeach;
        endif;
        ?>
        
        <hr>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Login: <input type="text" name="login"/>
            Senha: <input type="password" name="senha"/>
            <button type="submit" name="btn-entrar" >Entrar</button>
        </form>
    </body>
</html>
