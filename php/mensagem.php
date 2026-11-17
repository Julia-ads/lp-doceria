<?php

require_once "conexao.php";

if ($_POST['acao'] == "Enviar Mensagem") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];

    $stmt = $conn->prepare("
        INSERT INTO Formulario (nome, email, telefone, mensagem)
        VALUES (:nome, :email, :telefone, :mensagem)
    ");

    $stmt->execute([
        ":nome" => $nome,
        ":email" => $email,
        ":telefone" => $telefone,
        ":mensagem" => $mensagem
    ]);
}

