<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $telefone = $_POST['cel'];
    $mensagem = $_POST['mensagem'];
    $mensagem = wordwrap($messagem, 70, "\r\n");
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    $emailEnviar = "gobbocarlos@hotmail.com";
    $assunto = "Contato pelo Site";
    /*$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: $nome <$email>';*/
    $headers = array(
        'From' => $email,
        'Reply-To' => 'kkgobbo@gmail.com',
        'X-Mailer' => 'PHP/' . phpversion()
    );
    $enviaremail = mail($emailEnviar, $assunto, $mensagem, $headers);
    if($enviaremail){
        //echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
        echo("Mensagem enviada com sucesso");
    } 
    else {
        echo "";
    }
?>