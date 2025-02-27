<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);

    $to = "samuel.calixto@escola.pr.gov.br"; // Substitua pelo seu email
    $subject = "Novo Cadastro de Usuário";
    $message = "Nome: $nome\nEmail: $email";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Cadastro enviado com sucesso!";
    } else {
        echo "Falha no envio do cadastro. Tente novamente.";
    }
} else {
    echo "Método não permitido.";
}
?>
