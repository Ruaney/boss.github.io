<html>
    <head><title>Enviando e-mail...</title>
    </head>
    <body>
        <?php
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $assunto=$_POST['assunto'];
        $mensagem=$_POST['mensagem'];
        ?>
        <?php
            $to = "ruan.ramos@hotmail.com";
            $subject = "$assunto";
            $message = "<strong>Nome:</strong>$nome<br/><br/><strong>Email:</strong>$email<br/><br/><strong>Assunto:</strong>$assunto<br/><br/><strong>Mensagem</strong>$mensagem<br/><br/>";
            $header = "MIME-Version: 1.0\n";
            $header .= "Content-type: text/html; charset = 8859-1\n";
            $header .= "From: $email\n";
            mail($to, $subject, $message,$header);
            echo"Mensagem enviada com sucesso";
        ?>
   
    </body>
</html>