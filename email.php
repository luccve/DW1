<?php



if(isset($_POST['email']) && !empty($_POST['email'])){
    $nome = addcslashes($_POST['name'])
    $email = addcslashes($_POST['email'])
    $mensagem = addcslashes($_POST['message'])
}

$to = "hurryblank@gmail.com";
$subject = "Formulário de contato";
$body = "Nome: ".$nome. "\r\n".
        "E-mail: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "from:hurryblank@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=<Mailer:PHP>".phpversion();       

if(mail($to, $subject, $body, $header)){
    echo("Email enviado com sucesso.");
}else{
    echo("O email n foi enviado.");
}

?>