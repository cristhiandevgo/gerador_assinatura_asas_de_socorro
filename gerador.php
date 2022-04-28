<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd"> 

<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<title>Gerador de Assinatura de E-Mail</title>
<style type="text/css">
	body{
		color:#222;
		background-color:#FFF;
	}
	
	hr{
		border:1px solid #AAA;
	}
	
	#gerar{
		color:#888;
		text-decoration:none;
	}
	
	table{
		width: 682px;
	}
	
</style>
</head> 

<body> 

<div>
	<?php
	
		$nome=$_POST["nome"];
		$cargo=$_POST["cargo"];
		$tel=$_POST["tel"];
		$cel=$_POST["cel"];
		$skype=$_POST["skype"];
		$email=$_POST["email"];
		$base=$_POST["base"];
		$img=$_POST["imagem"];
		
	?>
</div>
<div><hr></div>
	<table cellpadding="0" border="0" >

		<tr> 
		<td width="286"><p align="center"><a href="http://asasdesocorro.org.br/2012/pt/banner-7.html"><img src="http://asasdesocorro.org.br/intranet/geradorAssinatura/img/<?php echo $img; ?>" alt="http://asasdesocorro.org.br/intranet/geradorAssinatura/img/<?php echo $img; ?>"></a></p></td> 

		<td width="415"><p><strong><?php echo $nome; ?> | <?php echo $cargo; ?> </strong></p> 
		<label style="">Asas de Socorro: </label><?php echo $base; ?> <br> 
		Fone: <!--<a href="tel:%28<?php //echo $codigo; ?><?php //echo $tel; ?>%29%20">--><?php //echo $codigo; ?> <?php echo $tel; ?></a> / <?php echo $cel; ?> <br> 
		Skype: <a href="skype:<?php echo $skype; ?>?add"><?php echo $skype; ?></a><br> 
		Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		</td>
		</tr> 
		<tr> 
		<td colspan="2"><p><img width="682" height="87" src="http://asasdesocorro.org.br/intranet/geradorAssinatura/img/rodape.png" alt="http://asasdesocorro.org.br/intranet/geradorAssinatura/img/rodape.png"></p></td> 
		
		</tr> 
	</table>
</body> 
</html> 
