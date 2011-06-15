<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Systhex</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function validaContato(){
	if(document.contato.nome.value == "" ){
		alert("Favor preencher o nome.");
		return false;
	}
	if(document.contato.email.value == ""){
		alert("Favor preencher o email.");
		return false;
	}else{
		if (!checkMail(document.contato.email.value)){
			alert(" Email inválido");
			return false;
		}
	}

	document.contato.submit();
	return true;
}
function checkMail(mail){
	var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);
	if(typeof(mail) == "string"){
		if(er.test(mail)){
			return true;
		}
	}else if(typeof(mail) == "object"){
		if(er.test(mail.value)){
			return true;
		}
	}else{
		return false;
	}
}

function enviaContato()
{
	var erro = false;

	if(document.FormContato.nome.value == "" ){
		alert("Favor preencher o nome.");
		erro = true;
	}
	
	if(document.FormContato.email.value == ""){
		alert("Favor preencher o email.");
		erro = true;
	}else{
		if (!checkMail(document.FormContato.email.value)){
			alert(" Email inválido");
			erro = true;
		}
	}

	if (!erro){
		document.FormContato.submit();
	}
  
}

function cadastraNewsletter()
{
  document.newsletter.submit();
}
</script>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery-translate-1.3.9.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('.png_bg');
  
  /* string argument can be any CSS selector */
  /* .png_bg example is unnecessary */
  /* change it to what suits you! */
</script>
<![endif]--></head>
<body>
<div class="translate">
<div id="topo"><p class="float-left"></p>
<!--  <p class="float-right"><a href="#">inglês</a> | <a href="#">português</a> | <a href="#">espanhol</a></p>--></div>
  <div id="cabecalho">
    <h1 class="logo png_bg"><a href="index.php">Systhex</a></h1>
    <ul id="menu">
      <li><a href="index.php">Página Inicial</a></li>
      <li><a href="sobre-a-systhex.php">Sobre a Systhex</a></li>
      <li><a href="produtos.php">Parceria</a></li>
      <li><a href="distribuidores.php">Distribuidores</a></li>
      <li><a href="cases.php">Casos Clínicos</a></li>
      <li><a href="eventos.php">Eventos</a></li>
      <li><a href="contato.php">Contato</a></li>
    </ul>
  </div>
<div id="banner"> <img src="imagens/banner-interna-contato.jpg" /> </div>
<div id="container-conteudo">
  <div id="container-destaque">
    <div class="destaque-esquerdo">
        <h3>Newsletter</h3>
<?php

if($_POST){
	$nome      = $_POST["nome"];
	$email     = $_POST["email"];
	
	$to = "contato@redsuns.com.br";
	$message = " Novo contato Newsletter
		Nome: $nome
		Email: $email

	";

	$header = "From: ". $nome . " <" . $email . ">\n"; //optional headerfields
	$assunto = "[systhex] - Newsletter";

	if (@mail($to, $assunto, $message, $header)){
		echo "<p>Seu cadastro foi enviada com sucesso. Em breve entraremos em contato.</p>";
	}else{
		echo "<p>Não foi possível encaminhar a sua mensagem. Por favor, tente novamente mais tarde.</p>";
	}
} else {
	echo "<p>Tenha acesso as novidades do setor de implantes e seja o primeiro a aproveitar promoções   exclusivas </p> ";
}
?> 
<p>
	<form name="newsletter" method="post" action="contato.php?send=true" >
          <input name="nome" type="text" id="textfield" value="Nome" size="35" />
        </p>
        <p>
          <input name="email" type="text" id="textfield2" value="E-mail" size="35" />
        </p>
        <p>&nbsp;</p>

			<a href="javascript: cadastraNewsletter()" class="botao">Cadastrar</a>          
        </form>
    </div>
  </div>
  <div id="conteudo">
    <div id="conteudo-principal">
      <h1>Contato</h1>
  	<form name="FormContato" method="post" action="contato.php?send=true">
<?php

if($_POST){
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$msg = $_POST["mensagem"];
	$telefone = $_POST["telefone"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$estado = $_POST["estado"];		
	$to = "flavia@systhex.com.br, diogo@systhex.com.br";
	$message = "
		Nova mensagem fale conosco
		Nome: $nome
		Telefone: $telefone
		Email: $email
		Mensagem: $msg
		Endereco: $endereco
		Cidade: $cidade
		Estado: $estado		
	";

	$header = "From: ". $nome . " <" . $email . ">\n"; //optional headerfields
	$assunto = "[systhex] - Fale Conosco";

	if (@mail($to, $assunto, $message, $header)){
		echo "<p><br/>Obrigado! Sua mensagem foi enviada com sucesso. Em breve entraremos em contato.</p>";

	}else{
		echo "<p><br/>Não foi possível encaminhar a sua mensagem. Por favor, tente novamente mais tarde.</p>";
	}
} else {
	echo "<p>Entre em contato conosco através do formulário abaixo, ou pelo fone (41) 3339-6905  </p>";
}
?>      
      
      <table width="100%" border="0" cellspacing="0" cellpadding="15">
        <tr>
          <td width="21%" align="right" valign="top">Nome:</td>
          <td valign="top" colspan="3"><input name="nome" type="text" id="textfield3" size="40" /></td>
        </tr>
        <tr>
          <td align="right" valign="top">E-mail:</td>
          <td valign="top" colspan="3"><input name="email" type="text" id="textfield4" size="40" /></td>
        </tr>
        <tr>
          <td align="right" valign="top">Telefone:</td>
          <td valign="top" colspan="3"><input name="telefone" type="text" id="textfield5" size="40" /></td>
        </tr>
        <tr>
          <td align="right" valign="top">Endereço:</td>
          <td valign="top" colspan="3"><input name="endereco" type="text" id="textfield5" size="40" /></td>
        </tr>       
        <tr>
          <td align="right" valign="top">Cidade:</td>
          <td width="16%" valign="top"><input name="cidade" type="text" id="textfield5" size="10" /></td>
			<td width="11%" align="right" valign="top">Estado:</td>
			<td width="52%" valign="top">
				<select name="estado" style=" padding:5px;">
					<option value=""></option>
					<option value="AC">AC</option>
					<option value="AL">AL</option>
					<option value="AM">AM</option>
					<option value="AP">AP</option>
					<option value="BA">BA</option>
					<option value="CE">CE</option>
					<option value="DF">DF</option>
					<option value="ES">ES</option>
					<option value="GO">GO</option>
					<option value="MA">MA</option>
					<option value="MG">MG</option>
					<option value="MS">MS</option>
					<option value="MT">MT</option>
					<option value="PA">PA</option>
					<option value="PB">PB</option>
					<option value="PE">PE</option>
					<option value="PI">PI</option>
					<option value="PR">PR</option>
					<option value="RJ">RJ</option>
					<option value="RN">RN</option>
					<option value="RO">RO</option>
					<option value="RR">RR</option>
					<option value="RS">RS</option>
					<option value="SC">SC</option>
					<option value="SE">SE</option>
					<option value="SP">SP</option>
					<option value="TO">TO</option>
				</select>
				</td>

        </tr>            
        <tr>
          <td align="right" valign="top">Mensagem:</td>
          <td valign="top" colspan="3"><textarea name="mensagem" id="textarea" cols="45" rows="10"></textarea></td>
        </tr>
        <tr>
          <td align="right" valign="top">&nbsp;</td>
          <td valign="top"><a href="javascript:enviaContato()" class="botao">Cadastrar</a></td>
        </tr>
      </table>
      </form>
      <p>&nbsp;</p>
    </div>
    <!--<div id="conteudo-secundario">
      <h1>Novidades</h1>
      <h3>Lorem ipsum dolor sit amet, consectetur </h3>
      <p>Adipiscing elit. Curabitur auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. </p>
      <p><a href="#">saiba mais</a></p>
      <p>&nbsp;</p>
      <h3>Lorem ipsum dolor sit amet, consectetur </h3>
      <p>Adipiscing elit. Curabitur auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. </p>
      <p><a href="#">saiba mais</a></p>
      <p>&nbsp;</p>
      <h3>Lorem ipsum dolor sit amet, consectetur </h3>
      <p>Adipiscing elit. Curabitur auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. </p>
      <p><a href="#">saiba mais</a></p>
    </div>-->
  </div>
</div>
<?php
include("rodape.php");
?>


</body>
</html>

