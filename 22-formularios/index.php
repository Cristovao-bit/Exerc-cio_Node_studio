<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulários</title>
    </head>
    <body>
        <?php
            /*
             * Validação
             * 
             * funções (filter_input - filter_var)
             * FILTER_VALIDATE_INT
             * FILTER_VALIDATE_EMAIL
             * FILTER_VALIDATE_FLOAT
             * FILTER_VALIDATE_IP
             * FILTER_VALIDATE_URL
             * 
             * saiba mais: https://www.php.net/manual/en/filter.filters.validate.php
             */
        
             /*
              * Sanitização - filtros de limpeza
              * 
              * Funções (filter_input - filter_var)
              * FILTER_SANITIZE_SPECIAL_CHARS
              * FILTER_SANITIZE_NUMBER_INT
              * FILTER_SANITIZE_EMAIL
              * FILTER_SANITIZE_URL
              * 
              * https://www.php.net/manual/en/filter.filters.sanitize.php
              */
        ?>
        <?php
        if(isset($_POST['enviar'])):
            // Arrays de erros
            $erros = array();
        
            // Validações
            /*
             * if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;
            
            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email inválido!";
            endif;
            
            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Peso precisa ser float!";
            endif;
            
            if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido!";
            endif;
            
            if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválida!";
            endif;
             */
        
             // Sanitize
             $name = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
             echo $name;
             
             $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
             if(!filter_var($idade, FILTER_VALIDATE_INT)):
                 $erros[] = "Idade precisa ser um inteiro";
             endif;
             
             $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
             if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                 $erros[] = "Email inválido!";
             endif;
             
             $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
             if(!filter_var($url, FILTER_VALIDATE_URL)):
                 $erros[] = "Url inválida!";
             endif;
             
            // exibindo mensagens
            if(!empty($erros)):
                foreach ($erros as $erro):
                    echo "<li> $erro </li>";
                endforeach;
            else:
                echo "Parabéns, seus dados estão corretos!";
            endif;
        endif;
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!--Idade: <input type="text" name="idade"/>
            Email: <input type="email" name="email" />
            Peso: <input type="text" name="peso" />
            IP: <input type="text" name="ip" />
            URL: <input type="url" name="url" /> -->         
            
            Nome: <input type="text" name="nome" />
            Idade: <input type="text" name="idade"/>
            Email: <input type="email" name="email" />
            URL: <input type="url" name="url" />
            <input type="submit" name="enviar"/>
        </form>
    </body>
</html>
