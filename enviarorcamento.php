<?php  

 	$nome = $_POST['nome'];
 	$endereco = $_POST['endereco'];
 	$bairro = $_POST['bairro'];
 	$cidade = $_POST['cidade'];
 	$celular = $_POST['celular'];
 	$telefone = $_POST['telefone'];
 	$email = $_POST['email'];
 	$marca = $_POST['marca'];
 	$modelo = $_POST['modelo'];
 	$ano = $_POST['ano'];
 	$seguradora = $_POST['seguradora'];
 	$anexo = $_FILES['anexo'];
 	$obs = $_POST['obs'];
	

	require_once("PHPMailer-master/PHPMailerAutoload.php");

	$mail = new Phpmailer();

	$mail->issmtp();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "jonadersonmartines@gmail.com";
	$mail->Password = "1rodrigo";

	$mail->setFrom("jonadersonmartines@gmail.com", "Email de Contato do Site");
	$mail->addAddress("jonadersonmartines@gmail.com");


	$mail->Subject = "Email de contato do Site";
	$mail->msgHTML("<html><strong>Cliente: {$nome}<br/>Endereço: {$endereco}<br>Bairro: {$bairro}<br>Cidade: {$cidade}<br>Celular: {$celular}<br>Telefone: {$telefone}<br>email: {$email}<br/>Marca: {$marca}<br> Modelo: {$modelo}<br>Ano: {$ano}<br>Seguradora: {$seguradora}<br>Observações: {$obs}</strong></html>");
	$mail->AddAttachment($anexo['tmp_name'], $anexo['name']  );

	



	
	if($mail->send()) {
    
	?>	

	<script>alert("Orcamento Enviado com Sucesso!!!\nEm Breve Retornaremos o seu contato.\nObrigado pela Preferencia"); window.location = "orcamento.php";</script>';		
    
    <?php
    

	} else {
    echo "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
	}
	die();

?>