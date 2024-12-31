<?php
// Configurações do email (substitua pelos seus dados)
$para = "tobias.teles@gmail.com";
$assunto = "Novo contato do site";

// Coleta os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$disciplinas = $_POST['disciplinas'];
$mensagem = $_POST['mensagem'];

// Monta o corpo do email
$corpo = "Nome: $nome\n";
$corpo .= "Email: $email\n";
$corpo .= "Celular: $celular\n";
$corpo .= "Disciplinas: $disciplinas\n";
$corpo .= "Mensagem: $mensagem\n";

// Cabeçalhos do email
$headers = "From: $nome <$email>";

// Envia o email
mail($para, $assunto, $corpo, $headers);

// Mensagem de sucesso (opcional)
echo "Mensagem enviada com sucesso!";
?>