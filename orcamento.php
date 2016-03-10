<!doctype html>
<html>
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Twister Car - Osasco</title>
		
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,300,300italic,700,700italic,900,900italic,100italic,100' rel='stylesheet' type='text/css'>
		
		<link rel="stylesheet" type="text/css" href="includes/css/cabec.css">
		<link rel="stylesheet" type="text/css" href="includes/css/topo.css">
		<link rel="stylesheet" type="text/css" href="includes/css/rodape.css">
		<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="animate.css-master/animate.css">
		<link rel="stylesheet" href="css/style.css">
		

	</head>

	<body>

		<?php

			include("includes/cabec.php");

		?>

		<main>

			<div class="container">

				<h1 class="text-center">ORÇAMENTO</h1>
				<br>
                <h3>Preencha seus dados e coloque as imagens do seu veiculo, que nós entraremos em contato com você</h3>
                <br>

				<div class="col-lg-12 col-md-12 col-sm-12">
    	
        	<form class="form-horizontal" action="enviarorcamento.php" method="post" enctype="multipart/form-data">
        
                
        	<div class="form-group">
                <label class="col-sm-2 col-md-2 col-lg-2 control-label" for="nome">Nome *</label>
                <div class="col-sm-10 col-md-10 col-lg-9">
                <input id="nome" type="text" class="form-control" name="nome" required autofocus>
                </div>
            </div>
            
            
            <div class="form-group">
                <label class="col-sm-2 col-md-2 col-lg-2 control-label" for="endereco">Endereço *</label>
                <div class="col-sm-10 col-md-10 col-lg-9">
                <input id="endereco" type="text" class="form-control" name="endereco"required>
                </div>
            </div>
            
            <div class="form-group">

            	<label class="col-sm-2 col-md-2 col-lg-2 control-label" for="bairro">Bairro *</label>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <input id="bairro" type="tel" class="form-control" name="bairro" required>
                </div>	

                <label class="col-sm-2 col-md-2 col-lg-1 control-label" for="cidade">Cidade *</label>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <input id="cidade" type="tel" class="form-control" name="cidade" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-md-2 col-lg-2 control-label" for="celular">Celular *</label>
                <div class="col-sm-4 col-md-4 col-lg-4">
                <input id="celular" type="tel" class="form-control" name="celular" required>
                </div>

                <label class="col-sm-2 col-md-2 col-lg-1 control-label" for="telefone">Telefone</label>
				<div class="col-sm-4 col-md-4 col-lg-4">
                <input id="telefone" type="tel" class="form-control" name="telefone">
                </div>

            </div>
            
            <div class="form-group">
                <label class="col-sm-2 col-md-2 col-lg-2 control-label" for="email">Email *</label>
                <div class="col-sm-10 col-md-10 col-lg-9">
                <input id="email" type="email" class="form-control" name="email" required>
                </div>
            </div>

            <div class="form-group">

                <label class="col-sm-2 col-md-2 col-lg-2 control-label" for="marca">Marca *</label>
                <div class="col-sm-3 col-md-3 col-lg-3">
                <select class="form-control" name="marca">

                	<option value="audi">Selecionar</option>
                	<option value="audi">AUDI</option>
                	<option value="bmw">BMW</option>
                	<option value="chery">CHERY</option>
                	<option value="citroen">CITROEN</option>
                	<option value="fiat">FIAT</option>
                	<option value="ford">FORD</option>
                	<option value="gm">GM</option>
                	<option value="honda">HONDA</option>
                	<option value="hyundai">HYUNDAI</option>
                	<option value="jac">JAC</option>
                	<option value="kia">KIA</option>
                	<option value="landrover">LAND ROVER</option>
                	<option value="mercedesbens">MERCEDES</option>
                	<option value="mitsubichi">MITSUBICHI</option>
                	<option value="nissan">NISSAN</option>
                	<option value="peugeot">PEUGEOT</option>
                	<option value="renault">RENAULT</option>
                	<option value="suzuki">SUZUKI</option>
                	<option value="toyota">TOYOTA</option>
                	<option value="volkswagem">VOLKSWAGEM</option>
                	<option value="outros">Outros</option>

                </select>	

                </div>

                <label class="col-sm-1 col-md-1 col-lg-1 control-label" for="modelo">Modelo *</label>
                <div class="col-sm-3 col-md-3 col-lg-2">
                <input id="modelo" type="text" class="form-control" name="modelo" required>
                </div>

                <label class="col-sm-1 col-md-1 col-lg-1 control-label" for="ano">Ano *</label>
                <div class="col-sm-2 col-md-2 col-lg-2">
                <select class="form-control" name="ano">

                	<option value="2015">Selecionar</option>
                	<option value="2015">2015</option>
                	<option value="2015">2014</option>
                	<option value="2015">2013</option>
                	<option value="2015">2012</option>
                	<option value="2015">2011</option>
                	<option value="2015">2010</option>
                	<option value="2015">2009</option>
                	<option value="2015">2008</option>
                	<option value="2015">2007</option>
                	<option value="2015">2006</option>
                	<option value="2015">2005</option>
                	<option value="2015">2004</option>
                	<option value="2015">2003</option>
                	<option value="2015">2002</option>
                	<option value="2015">2001</option>
                	<option value="2015">2000</option>
                	<option value="2015">1999</option>
                	<option value="2015">1998</option>
                	<option value="2015">1997</option>
                	<option value="2015">1996</option>
                	<option value="2015">1995</option>
                	<option value="2015">1994</option>
                	<option value="2015">1993</option>
                	<option value="2015">1992</option>
                	<option value="2015">1991</option>
                	<option value="2015">1990</option>
                	<option value="2015">1989</option>
                	<option value="2015">1988</option>
                	<option value="2015">1987</option>
                	<option value="2015">1986</option> 
                	<option value="2015">1985</option>
                	<option value="2015">1984</option>
                	<option value="2015">1983</option>
                	<option value="2015">1982</option>
                	<option value="2015">1981</option>
                	<option value="2015">1980</option>
                	<option value="2015">1979</option>
                	<option value="2015">1978</option>
                	<option value="2015">1977</option>
                	<option value="2015">1976</option>
                	<option value="2015">1975</option>
                	<option value="2015">1974</option>
                	<option value="2015">1973</option>       	
                	<option value="2015">1972</option>
                	<option value="2015">1971</option>
                	<option value="2015">1970</option>


                </select>	
                </div>

            </div>

            <div class="form-group">

                <label class="col-sm-2 col-md-2 col-lg-2 control-label">Seguradora </label>
                <div class="col-sm-3 col-md-3 col-lg-3">
                <select class="form-control" name="seguradora">
                	<option value="allianz">Selecionar</option>
                	<option value="allianz">Allianz</option>
                	<option value="azul">Azul Seguros</option>
                	<option value="bradesco">Bradesco Seguros</option>
                	<option value="hdi">HDI Seguros</option>
                	<option value="itau">Itau Seguros</option>
                	<option value="liberty">Liberty Seguros</option>
                	<option value="mapfre">Mapfre</option>
                	<option value="maritima">Maritima</option>
                	<option value="porto">Porto Seguro</option>
                	<option value="sulamerica">Sulamerica</option>
                	<option value="zurich">Zurich</option>
                	
                </select>	

                </div>

             </div>
            
            <div class="form-group">
                    
                	<label class="col-sm-2 col-md-2 col-lg-2 control-label">Enviar imagens *</label>
                	<div class="col-sm-10 col-md-">
                	<input type="file" name="anexo" multiple>
                    </div>
    				                                                   
            </div>

            <div class="form-group">
                <label class="col-sm-2 col-md-2 col-lg-2 control-label" for="obs">Observações *</label>
                <div class="col-sm-10 col-md-10 col-lg-9">
                <textarea id="obs" class="form-control" rows="5" name="obs" required></textarea>
                </div>
            </div>
           
            <div class="form-group">
                    
                	<label class="col-sm-2 col-md-2 col-lg-2 control-label"></label>
                	<div class="col-sm-8">
                	<input type="submit" class="btn btn-primary btn-lg col-sm-5" value="Enviar Orçamento">
                    </div>
    				                                      
            </div>
                
            

            
           
        </form>
        
    </div>
				
			</div>	

		</main>

		<?php 

			include("includes/seguradoras.php");

		?>


		<?php 

			include("includes/rodape.php");

		?>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	</body>

</html>