<?php
include("cabecalho.php");
?>
<body id="pagina-inicial">
<div class="translate">
  <div id="topo">
    <p class="float-left"></p>
    <!--  <p class="float-right"><a href="#">inglês</a> | <a href="#">português</a> | <a href="#">espanhol</a></p>-->
  </div>
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
  <div id="banner">
    <!--url's used in the movie-->
    <!--text used in the movie-->
    <script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) {  // if we've detected an acceptable version
		// embed the flash movie
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,45,0',
			'width', '980',
			'height', '416',
			'src', 'imagens/banner-systhex',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'transparent',
			'devicefont', 'false',
			'id', 'banner-systhex',
			'bgcolor', '#ffffff',
			'name', 'banner-systhex',
			'menu', 'true',
			'allowScriptAccess','sameDomain',
			'allowFullScreen','false',
			'movie', 'imagens/banner-systhex',
			'salign', ''
			); //end AC code
	} else {  // flash is too old or we can't detect the plugin
		var alternateContent = '<img src="imagens/banner-systhex.jpg" />'
		document.write(alternateContent);  // insert non-flash content
	}
}
// -->
</script>
    <noscript>
    // Provide alternate content for browsers that do not support scripting
    // or for those that have scripting disabled.
    Alternate HTML content should be placed here. This content requires the Adobe Flash Player. <a href="http://www.macromedia.com/go/getflash/">Get Flash</a>
    </noscript>
  </div>
  <div id="container-conteudo">
    <div id="container-destaque">
      <div class="destaque-esquerdo">
        <h3>Catálogo de Produtos</h3>
        <p><img src="imagens/imagem-catalogo-produtos.jpg" width="258" height="70" /></p>
      <p>Visualize já o nosso catálogo   de produtos 2009.<br />
 E encontre de forma ágil e rápida exatamente o produto    que procura.</p><br />

        <p><a href="catalogo.php"  class="botao">Visualizar</a></p>
      </div>
      <div class="destaque-direito">  
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
	echo "<p>Tenha acesso as novidades   do setor de implantes e seja o primeiro a aproveitar promoções   exclusivas </p> ";
}
?>
        <p>
        <form name="newsletter" method="post" action="index.php?send=true" onSubmit="return validaContato()">
          <input name="nome" type="text" id="textfield" value="Nome" size="35" />
          </p>
          <p>
            <input name="email" type="text" id="textfield2" value="E-mail" size="35" />
          </p>
          <p>&nbsp;</p>
          <a href="javascript:cadastraNewsletter()" class="botao">Cadastrar</a>
        </form>
      </div>
    </div>
    <div id="conteudo">
      <div id="conteudo-principal">
        <h2>Bem Vindo</h2>
     
        <p>Seja Bem Vindo ao site da Systhex, aqui   você terá acesso aos nossos produtos. No site você também encontrará   notícias e atualidades. Além de um espaço exclusivo onde será   disponibilizado   cases, cirurgias de sucesso realizadas na área de implantes dentários. </p>
        <p><a href="sobre-a-systhex.php">saiba mais</a> | <a href="catalogo.php">conheça nossos produtos</a></p>
        
      </div>
      <div id="conteudo-secundario">
<h2>INFORMATIVO</h2>
<h3>Prezados Clientes</h3>

<p>Para melhor atende-los informamos que á partir do dia 02/04/2011 a Systhex abrirá aos sábados e o horário de atendimento será das 08:00 as 12:00 horas.</p>
<p>A Direção</p>
         
      <hr style="border:#fff; background-color:#999; color:#999"/>      
        <h2>LANÇAMENTO</h2>
        <img src="fotos/logo-cone.png" border="0" style="border:0px;" />
        <img src="fotos/Imagem-001.png" border="0" style="border:0px; margin-left:43px;"/>
       <h3 style="margin-left:30px;" >Plataforma Shifting</h3>
        <div style="float:left"> <p align="center" >Plataforma<br />3.6 | 4.3 | 5.0</p></div>
        <div style="float:left; margin-left:40px;"><p align="center" >Comprimentos<br />8.5 | 10 | 11.5<br />13 | 15</p> </div>  	

        
 
      </div>
    </div>
  </div>
  <?php
include("rodape.php");
?>
</body>
</html>
