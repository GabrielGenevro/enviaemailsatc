<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try 
    {
        // servidor SMTP
        $mail->isSMTP();

        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        $mail->Username   = 'testesatc2@gmail.com';
        $mail->Password   = 'bcnnwgzyivxqcpic';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // remetente
        $mail->setFrom('testesatc2@gmail.com', 'Sistema de Bancas');

        // destinatário
        $mail->addAddress('gabrielgenevro01@gmail.com');

        // conteúdo
        $mail->isHTML(true);

        $mail->Subject = 'Banca criada';

        $mail->Body = '
            <h1>Banca criada com sucesso</h1>
            <p>Sua banca foi cadastrada.</p>
        ';
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';
        $mail->send();

        echo "Email enviado com sucesso";

    } 
catch (Exception $e) 
    {
        echo "Erro ao enviar email: {$mail->ErrorInfo}";
    }
?>