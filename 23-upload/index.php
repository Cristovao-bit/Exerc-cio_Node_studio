<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Uploads de imagens</title>
    </head>
    <body>
        
        <?php
            if(isset($_POST['enviar'])):                
                $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
                $quantidade = count($_FILES['arquivo']['name']);
                $contador = 0;
            
                while ($contador < $quantidade):
                $extensoes = pathinfo($_FILES["arquivo"]["name"][$contador], PATHINFO_EXTENSION);// arquivo - nome do input, name - nome do indice
                
                if(in_array($extensoes, $formatosPermitidos)):
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensoes";
                    
                    if(move_uploaded_file($temporario, $pasta.$novoNome)):
                        echo "Upload feito com sucesso $pasta$novoNome <br>";
                    else:
                        echo "Erro ao enviar upload $temporario<br>";
                    endif;
                else:
                    echo "$extensoes inválida!<br>";
                endif;
          
                $contador++;
                endwhile;
            endif;
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" >
            <input type="file" name="arquivo[]" multiple/>
            <input type="submit" name="enviar" />
        </form>
    </body>
</html>
