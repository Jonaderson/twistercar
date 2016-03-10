<?php  

 	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone =$_POST['telefone'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

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
	$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>Fone: {$telefone}<br>Assunto: {$assunto}<br>Mensagem: {$mensagem}</html>");
	
	if($mail->send()) {
    
	?>	

	
	<script>

		alert("Mensagem Enviada com Sucesso!!!");

		window.location = "contato.php";

	</script>';		
    
    <?php
    

} else {
    echo "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();

?>
