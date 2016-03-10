<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<title>Contato</title>

<link href='https://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="css/contato.css">
<link rel="stylesheet" type="text/css" href="includes/css/cabec.css">
<link rel="stylesheet" type="text/css" href="includes/css/topo.css">
<link rel="stylesheet" type="text/css" href="includes/css/rodape.css">
<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">



</head>

<body>

<?php
	
	include("includes/cabec.php");

?>

<main>

<div class="container-fluid">

	<div class="col-lg-8 col-md-8">
    	
        <form class="form-horizontal" action="enviarcontato.php" method="post">
        
            <br>
        	<h1 class="label-control text-center">FORMULÁRIO DE CONTATO</h1>
            
        	<div class="form-group">
                <label class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" required autofocus>
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-8">
                <input type="email" class="form-control" name="email" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-6">
                <input type="tel" class="form-control" name="telefone" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Assunto</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" name="assunto" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Mensagem</label>
                <div class="col-sm-10">
                <textarea class="form-control" rows="5" name="mensagem"required></textarea>
                </div>
            </div>
            
            <div class="form-group">
                    
                    <label class="col-sm-2 col-md-2 col-lg-2 control-label"></label>
                    <div class="col-sm-8">
                    <input type="submit" class="btn btn-primary btn-lg col-sm-5 animated infinite pulse" value="Enviar">
                    </div>
                                                          
            </div>

            
           
        </form>
        
    </div>
    
    <div class="col-lg-4 col-md-4">
    	
        <address class="text-center">
        
            <br>
            <h2>TwisterCar</h2><br>
            <b>Rua Carlos da Costa Ramalho Júnior, 106<br>
            Presidente Altino - Osasco<br>
            SP – CEP: 06213-110<br></b>
    
    		<h4><abbr title="Phone">F:</abbr> (11) 3681-4941 / 3681-4969</h4>

            <br>

            <h4>Email: Twister@twistercar.com.br</h4>
    	</address>
        
    </div>
    
    <div class="col-lg-12 col-md-12">

        <h1 class="text-center">Localização</h1>
        <br>
    
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.1060756903503!2d-46.768805600000015!3d-23.528686900000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceff1796cbadbf%3A0xb7022c62795ccf1f!2sR.+Carlos+da+Costa+Ramalho+J%C3%BAnior%2C+106+-+Pres.+Altino%2C+Osasco+-+SP%2C+06213-110!5e0!3m2!1spt-BR!2sbr!4v1443659427738" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    
    </div>
    
</div>    

</main>

<?php 

    include("includes/seguradoras.php");

?>

<?php

	include("includes/rodape.php");

?>
    

</body>
</html>