<?php

$nome = $_POST ['nome'];
$email = $_POST ['email'];
$senha = $_POST ['senha'];

echo "Nome é: $nome";
echo "<br>";
echo "E-mail é: $email";
echo "<br>";
echo "Senha é: $senha";
echo "<br>";
echo "<br>";

print_r($_POST);

?>