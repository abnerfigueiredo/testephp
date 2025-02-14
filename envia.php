<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagen = ($_POST['mensagem']);

    $para = "abner.luiz23@gmail.com;";
    $assunto = "Coleta de dados - Cartão Saúde Fácil";
    
    $corpo = "Nome: ".$nome."\n"."E-mail:".$email."\n".

    $cabeca = "From: abner.luiz23@hotmail.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-ail enviado com sucesso");
}else{
    echo("Houve um erro ao enviar o email");
}


?>
