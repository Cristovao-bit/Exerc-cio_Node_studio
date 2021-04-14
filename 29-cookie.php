<?php
// COOKIE - arquivo criado pelo servidor no computador do usuário
setcookie('user', 'Cristovão L. Braga', time()+3600);// primeiro parâmento é o nome do cookie, segundo é o valor e o terceiro é a validade
setcookie('email', 'ml.manutencaolira@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tênis adidas', time()+3600);

var_dump($_COOKIE);