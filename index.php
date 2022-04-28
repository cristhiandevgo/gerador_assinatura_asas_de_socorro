	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
	"http://www.w3.org/TR/html4/loose.dtd"> 

	<html> 
	<head> 
	<meta http-equiv="Content-Type" content="width=device-width, initial-scale=1.0; charset=iso-8859-1" name="viewport">
	<link href="img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

	<title>Gerador de Assinatura - Asas de Socorro</title>
	<?php header ('Content-type: text/html; charset=UTF-8'); ?>
	
	<script src="js.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	
	</head>
	
	<body>
			<div id="geral">
			
				<form name="loginForm" method="post" action="gerador.php" >
				
					<div id="topo">
						<div id="logo"></div>
						<div id='tituloTopo'>Gerador de Assinatura de Email - Asas de Socorro</div>
					</div>
					
					<div id='formularios'>
					
							<table border="0" align="center">
								<tr>
									<td >Nome:</td>
									<td><input type="text" name="nome" id="nome" required></td>
								</tr>
								<tr>
									<td>Cargo:</td>
									<td><input type="text" name="cargo" id="cargo" required></td>
								</tr>
								<tr>
									<td>Skype:</td>
									<td><input type="text" name="skype" id="skype" required></td>
								</tr>
								
								<tr>
									<td>Base:</td>
									<td>
										<select id='base' name='base' required >
											<option value=''>Selecione uma opção...</option>
											<option value='Anápolis'>Anápolis</option>
											<option value='Belém'>Belém</option>
											<option value='Boa Vista'>Boa Vista</option>
											<option value='Manaus'>Manaus</option>
											<option value='Porto Velho'>Porto Velho</option>
											<option value='Santarém'>Santarém</option>
										</select>
									</td>
								</tr>
							
								<tr>
									<td >Email:</td>
									<td><input type="text" name="email" id="email" required></td>
								</tr>
								<tr>
									<td>Fone:</td>
									<td><input type="text" name="tel" id="tel" onkeyup='somente_numero(this);' required placeholder="(DDD)Número"></td>
								</tr>
								<tr>
									<td>Cel.:</td>
									<td><input type="text" name="cel" id="cel" onkeyup='somente_numero(this);' required placeholder="(DDD)Número"></td>
								</tr>
								
								
							</table>
							
							<table align="center">
								
								<tr><td colspan="2"><br></td></tr>
								
								<tr>
								<tr><td colspan="2">Logo da Assinatura:</td></tr>
								<tr>
									<td><input type="radio" name="imagem" id="imagem" value="assinatura1.png" checked></td>
									<td align="center"><img src="img/assinatura1.png" width="127px" height="82px"></td>
								</tr>
								<tr>
									<td><input type="radio" name="imagem" id="imagem" value="assinatura2.gif" ></td>
									<td align="center"><img src="img/assinatura2.gif" width="191px" height="77px"></td>
								</tr>
							</table>
							
					</div><!--formularios-->
					
					<div id="enviarBtn"><input type="submit" value="Gerar" title="Clique para gerar a assinatura."></div>
					
				</form>
				<div id='rodape'>Gerador de Assinatura de Email  &copy Asas de Socorro 2015 - <?php echo date("Y"); ?><br><a href="mailto:ivancristhian@hotmail.com" title="Enviar Email.">Ivan Cristhian</a></div>

			</div>
	</body>
	
	</html> 