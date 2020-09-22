<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$contato = $_POST['contato'];
		$assunto = $_POST['assunto'];
		$categoria = $_POST['categoria'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "$email");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "contato@montagnafilmes.com.br");
        $content = new SendGrid\Content("text/html", "Olá Marcos, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Contato: $contato <br> Assunto: $assunto <br> Categoria: $categoria <br>  Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo "Mensagem enviada com sucesso";
		
        ?>
    </body>
</html>
