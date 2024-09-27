<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Proteção básica contra XSS (Cross Site Scripting)
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);

    // Exemplo: Salvar os dados em um arquivo local
    $file = 'dados.txt'; // Nome do arquivo onde os dados serão salvos
    $data = "Email: " . $email . " | Senha: " . $password . "\n";

    // Escreve os dados no arquivo
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    // Redireciona de volta para a página de sucesso ou exibe uma mensagem
    echo "Dados salvos com sucesso!";
}
?>
