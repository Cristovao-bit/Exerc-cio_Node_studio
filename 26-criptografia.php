<?php
$pass = "123456";
$newPass = base64_encode($pass); // codificando em mão dupla

echo "base64: " . $newPass . "<br>";
echo "Decodificando sua senha: " . base64_decode($newPass); // decodificando em mão dupla

echo "<hr>";

echo "MD5 de 32 caractere: " . md5($pass); // criptografado em mão única

echo "<hr>";

echo "Sha1: " . sha1($pass);

echo "<hr>";

//$passSeguro = password_hash($pass, PASSWORD_DEFAULT); // atualiza a cada sessão e são 60 caractere
//echo "Password_Hash: " . $passSeguro;

$senhaSegura = '$2y$10$5WqlZCM49SoIPG6ryB.f6.I3Mixd5GL5srUmySSLFWnm1vUopzM.i';

if(password_verify($pass, $senhaSegura)):
    echo "Senha válida!";
else:
    echo "Senha inválida!";
endif;