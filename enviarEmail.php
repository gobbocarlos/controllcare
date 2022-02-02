<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
    
    $nome = $_POST['nome'];
    echo($nome);
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $telefone = $_POST['cel'];
    $mensagem = $_POST['mensagem'];
    $mensagem = wordwrap($messagem, 70, "\r\n");
    $data_envio = date('d/m/Y');
    $hora_envio = date('H:i:s');
    $emailEnviar = "gobbocarlos@hotmail.com";
    $assunto = "Contato pelo Site";
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Port = '465'; //porta usada pelo gmail.
    $mail->Host = 'smtp.gmail.com'; 
    $mail->IsHTML(true); 
    $mail->Mailer = 'smtp'; 
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAuth = true; 
    $mail->Username = 'kkgobbo@gmail.com'; // usuario gmail.   
    $mail->Password = 'bcf828385'; // senha do email.
    $mail->SingleTo = true; 
    $mail->From = "Mensagem de email, pode vim por uma variavel."; 
    $mail->FromName = "Nome do remetente."; 

    $mail->addAddress("kkgobbo@gmail.com"); // email do destinatario.

    $mail->Subject = "Aqui vai o assunto do email, pode vim atraves de variavel."; 
    $mail->Body = "Aqui vai a mensagem, que tambem pode vim por variavel.";
    $mail->Send();
    if(!$mail->Send())
        echo "Erro ao enviar Email:" . $mail->ErrorInfo;
?>