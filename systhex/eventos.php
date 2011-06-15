<?php
include("cabecalho.php");
?>
<body>
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
  <div id="banner"> <img src="imagens/banner-interna-eventos.jpg" /> </div>
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
	echo "<p>Tenha acesso as novidades   do setor de implantes e seja o primeiro a aproveitar promoções   exclusivas </p> ";
}
?>
        <p>
        <form name="newsletter" method="post" action="eventos.php?send=true" onSubmit="return validaContato()">
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
        <h1>Eventos</h1>
        <a id="ANCHOR-21" class="hidden" ></a> <br />
        <br />
        <h2>3 º Meeting Internacional de Implantodontia</h2>
        <p>Data: 10 a 12 de junho em Florianopolis - SC.  </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto21/001.jpg"> <img alt="example_group" src="fotos/foto21/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto21/002.jpg"> <img alt="example_group" src="fotos/foto21/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto21/003.jpg"> <img alt="example_group" src="fotos/foto21/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto21/004.jpg"> <img alt="example_group" src="fotos/foto21/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto21/005.jpg"> <img alt="example_group" src="fotos/foto21/005.jpg" /> </a>  </div>
        <div class="clear-both"></div>               
        <a id="ANCHOR-19" class="hidden" ></a> <br />
        <br />
        <h2>Congresso Intl de Odontologia de Ponta Grossa</h2>
        <p>Data: 14 a 16 de outubro em Ponta Grossa/PR.  </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto19/001.JPG"> <img alt="example_group" src="fotos/foto19/001.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/002.JPG"> <img alt="example_group" src="fotos/foto19/002.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/003.JPG"> <img alt="example_group" src="fotos/foto19/003.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/004.JPG"> <img alt="example_group" src="fotos/foto19/004.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/005.JPG"> <img alt="example_group" src="fotos/foto19/005.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/006.JPG"> <img alt="example_group" src="fotos/foto19/006.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/007.JPG"> <img alt="example_group" src="fotos/foto19/007.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/008.JPG"> <img alt="example_group" src="fotos/foto19/008.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/009.JPG"> <img alt="example_group" src="fotos/foto19/009.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto19/010.JPG"> <img alt="example_group" src="fotos/foto19/010.JPG" /> </a>  </div>
        <div class="clear-both"></div>             
        <a id="ANCHOR-18" class="hidden" ></a> <br />
        <br />
        <h2>Congresso Intl de Odontologia Cointer</h2>
        <p>Data: 03 a 05 de setembro em Brasília/DF.  </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto18/001.JPG"> <img alt="example_group" src="fotos/foto18/001.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto18/002.JPG"> <img alt="example_group" src="fotos/foto18/002.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto18/003.JPG"> <img alt="example_group" src="fotos/foto18/003.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto18/004.JPG"> <img alt="example_group" src="fotos/foto18/004.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto18/005.JPG"> <img alt="example_group" src="fotos/foto18/005.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto18/006.JPG"> <img alt="example_group" src="fotos/foto18/006.JPG" /> </a>  </div>
        <div class="clear-both"></div>        
        <a id="ANCHOR-17" class="hidden" ></a> <br />
        <br />
        <h2>ABROSS 2010-XI Encontro Internacional da Academia Brasileira de Osseointegração</h2>
        <p>Data:  17 a 19 de junho em São Paulo - SP. </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto17/001.jpg"> <img alt="example_group" src="fotos/foto17/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/002.jpg"> <img alt="example_group" src="fotos/foto17/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/003.jpg"> <img alt="example_group" src="fotos/foto17/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/004.jpg"> <img alt="example_group" src="fotos/foto17/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/005.jpg"> <img alt="example_group" src="fotos/foto17/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/006.jpg"> <img alt="example_group" src="fotos/foto17/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/007.jpg"> <img alt="example_group" src="fotos/foto17/007.jpg" /></a> <a rel="example_group" title="" href="fotos/foto17/008.jpg"> <img alt="example_group" src="fotos/foto17/008.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/009.jpg"> <img alt="example_group" src="fotos/foto17/009.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto17/010.jpg"> <img alt="example_group" src="fotos/foto17/010.jpg" /></a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-16" class="hidden" ></a> <br />
        <br />
        <h2>5º Cong Intl de Odontologia do Piauí</h2>
        <p>Realizado de 27 a 30 de Maio em  Piauí. </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto16/001.jpg"> <img alt="example_group" src="fotos/foto16/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto16/002.jpg"> <img alt="example_group" src="fotos/foto16/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto16/003.jpg"> <img alt="example_group" src="fotos/foto16/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto16/004.jpg"> <img alt="example_group" src="fotos/foto16/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto16/005.jpg"> <img alt="example_group" src="fotos/foto16/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto16/006.jpg"> <img alt="example_group" src="fotos/foto16/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto16/007.jpg"> <img alt="example_group" src="fotos/foto16/007.jpg" /></a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-15" class="hidden" ></a> <br />
        <br />
        <h2>VI Jornada de Odontologia de Vila Velha-ES e I Meeting Internacional de Implantodontia.</h2>
        <p>Realizado de 06 a 08 de maio em  Vila Velha - ES. </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto15/001.jpg"> <img alt="example_group" src="fotos/foto15/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto15/002.jpg"> <img alt="example_group" src="fotos/foto15/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto15/003.jpg"> <img alt="example_group" src="fotos/foto15/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto15/004.jpg"> <img alt="example_group" src="fotos/foto15/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto15/005.jpg"> <img alt="example_group" src="fotos/foto15/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto15/006.jpg"> <img alt="example_group" src="fotos/foto15/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto15/007.jpg"> <img alt="example_group" src="fotos/foto15/007.jpg" /></a> <a rel="example_group" title="" href="fotos/foto15/009.JPG"> <img alt="example_group" src="fotos/foto15/009.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto15/010.JPG"> <img alt="example_group" src="fotos/foto15/010.JPG" /> </a> <a rel="example_group" title="" href="fotos/foto15/011.JPG"> <img alt="example_group" src="fotos/foto15/011.JPG" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-14" class="hidden" ></a> <br />
        <br />
        <h2>2 º CIPE Cong Internacional de Periodontologia, 7 º Cong Internacional da ACPD.</h2>
        <p>Realizado de 22 a 24 de abril em São Paulo </p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto14/001.jpg"> <img alt="example_group" src="fotos/foto14/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto14/002.jpg"> <img alt="example_group" src="fotos/foto14/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto14/003.jpg"> <img alt="example_group" src="fotos/foto14/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto14/004.jpg"> <img alt="example_group" src="fotos/foto14/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto14/005.jpg"> <img alt="example_group" src="fotos/foto14/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto14/006.jpg"> <img alt="example_group" src="fotos/foto14/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto14/007.jpg"> <img alt="example_group" src="fotos/foto14/007.jpg" /></a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-13" class="hidden" ></a> <br />
        <br />
        <h2>COPEO Congresso de Odontologia de Pernambuco.</h2>
        <p>Realizado de 25 a 28 de março de 2010 em Recife.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto13/001.jpg"> <img alt="example_group" src="fotos/foto13/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/002.jpg"> <img alt="example_group" src="fotos/foto13/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/003.jpg"> <img alt="example_group" src="fotos/foto13/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/004.jpg"> <img alt="example_group" src="fotos/foto13/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/005.jpg"> <img alt="example_group" src="fotos/foto13/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/006.jpg"> <img alt="example_group" src="fotos/foto13/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/007.jpg"> <img alt="example_group" src="fotos/foto13/007.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/008.jpg"> <img alt="example_group" src="fotos/foto13/008.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/009.jpg"> <img alt="example_group" src="fotos/foto13/009.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/010.jpg"> <img alt="example_group" src="fotos/foto13/010.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/011.jpg"> <img alt="example_group" src="fotos/foto13/011.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/012.jpg"> <img alt="example_group" src="fotos/foto13/012.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/013.jpg"> <img alt="example_group" src="fotos/foto13/013.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/014.jpg"> <img alt="example_group" src="fotos/foto13/014.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/015.jpg"> <img alt="example_group" src="fotos/foto13/015.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/016.jpg"> <img alt="example_group" src="fotos/foto13/016.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/017.jpg"> <img alt="example_group" src="fotos/foto13/017.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/018.jpg"> <img alt="example_group" src="fotos/foto13/018.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/019.jpg"> <img alt="example_group" src="fotos/foto13/019.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/020.jpg"> <img alt="example_group" src="fotos/foto13/020.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto13/021.jpg"> <img alt="example_group" src="fotos/foto13/021.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-2" class="hidden" ></a> <br />
        <br />
        <h2>CiOSP -Congresso Internacional de Odontologia de São Paulo</h2>
        <p>Realizado dos dias 30/01 a 03/02 de 2010 no Anhembi em SP.</p>
        <p> Evento sem dúvida que não temos palavras para comentar.De muitos negócios e contatos profissionais de alto padrão.</p>
        <p> Sem dúvida é um dos melhores eventos.Para a Systhex é um evento que sem dúvida abre muito mais portas em todo territorio nacional e internacional.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto1/001.jpg"> <img alt="example_group" src="fotos/foto1/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto1/002.jpg"> <img alt="example_group" src="fotos/foto1/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto1/003.jpg"> <img alt="example_group" src="fotos/foto1/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto1/004.jpg"> <img alt="example_group" src="fotos/foto1/004.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-3" class="hidden" ></a> <br />
        <br />
        <h2>CIOPAR-Congresso Internacional de Odontologia do Paraná</h2>
        <p>Realizado dos dias 02 a 04 de dezembro de 2009 no Estação Convention Center Embratel.</p>
        <p> Foi um evento maravilhoso para nossa firmação na capital e estado.</p>
        <p> Tivemos a visita de profissionais importantes no nosso Stand.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto2/001.jpg"> <img alt="example_group" src="fotos/foto2/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto2/002.jpg"> <img alt="example_group" src="fotos/foto2/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto2/003.jpg"> <img alt="example_group" src="fotos/foto2/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto2/004.jpg"> <img alt="example_group" src="fotos/foto2/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto2/005.jpg"> <img alt="example_group" src="fotos/foto2/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto2/006.jpg"> <img alt="example_group" src="fotos/foto2/006.jpg" /> </a></div>
        <div class="clear-both"></div>
        <a id="ANCHOR-5" class="hidden" ></a> <br />
        <br />
        <h2>II Congresso Internacional de Odontologia de Mato Grosso do Sul</h2>
        <p>Realizado dos dias 29 a 31 de outubro de 2009.</p>
        <p> Evento muito bom para firmamos mais nossa marca na região e nossa parceria com nosso parceiro local(Via Oral).</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto5/001.jpg"> <img alt="example_group" src="fotos/foto5/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto5/002.jpg"> <img alt="example_group" src="fotos/foto5/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto5/003.jpg"> <img alt="example_group" src="fotos/foto5/003.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-12" class="hidden" ></a> <br />
        <br />
        <h2>IV Congresso Internacional de Odontologia de Santa Catarina.</h2>
        <p>Realizado de 21 a 24 de outubro de 2009 em Florianópolis.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto12/001.jpg"> <img alt="example_group" src="fotos/foto12/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/002.jpg"> <img alt="example_group" src="fotos/foto12/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/003.jpg"> <img alt="example_group" src="fotos/foto12/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/004.jpg"> <img alt="example_group" src="fotos/foto12/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/005.jpg"> <img alt="example_group" src="fotos/foto12/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/006.jpg"> <img alt="example_group" src="fotos/foto12/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/007.jpg"> <img alt="example_group" src="fotos/foto12/007.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/008.jpg"> <img alt="example_group" src="fotos/foto12/008.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/009.jpg"> <img alt="example_group" src="fotos/foto12/009.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/012.jpg"> <img alt="example_group" src="fotos/foto12/012.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto12/013.jpg"> <img alt="example_group" src="fotos/foto12/013.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-11" class="hidden" ></a> <br />
        <br />
        <h2>Congresso Internacional de Odontologia em Vila Velha/ES</h2>
        <p>Realizado de 01 a 03 de outubro de 2009.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto11/001.jpg"> <img alt="example_group" src="fotos/foto11/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/002.jpg"> <img alt="example_group" src="fotos/foto11/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/003.jpg"> <img alt="example_group" src="fotos/foto11/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/004.jpg"> <img alt="example_group" src="fotos/foto11/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/005.jpg"> <img alt="example_group" src="fotos/foto11/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/006.jpg"> <img alt="example_group" src="fotos/foto11/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/007.jpg"> <img alt="example_group" src="fotos/foto11/007.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto11/008.jpg"> <img alt="example_group" src="fotos/foto11/008.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-4" class="hidden" ></a> <br />
        <br />
        <h2>CIOGO-Congresso de Odontologia de Goiás.</h2>
        <p>Realizado dos dias 24 a 26 de setembro de 2009.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto4/001.jpg"> <img alt="example_group" src="fotos/foto4/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto4/002.jpg"> <img alt="example_group" src="fotos/foto4/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto4/003.jpg"> <img alt="example_group" src="fotos/foto4/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto4/004.jpg"> <img alt="example_group" src="fotos/foto4/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto4/005.jpg"> <img alt="example_group" src="fotos/foto4/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto4/006.jpg"> <img alt="example_group" src="fotos/foto4/006.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-6" class="hidden" ></a> <br />
        <br />
        <h2>20 anos de osseointegração em São Paulo</h2>
        <p>Realizado dos dias 03 a 05 de setembro de 2009 
          no Anhembi.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto6/001.jpg"> <img alt="example_group" src="fotos/foto6/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto6/002.jpg"> <img alt="example_group" src="fotos/foto6/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto6/003.jpg"> <img alt="example_group" src="fotos/foto6/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto6/004.jpg"> <img alt="example_group" src="fotos/foto6/004.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-1" class="hidden" ></a> <br />
        <br />
        <h2>CIORJ Congresso Internacional de Odontologia do Rio de Janeiro</h2>
        <p>Realizado de 15 a 18 de julho de 2009.</p>
        <div id="galeria"> <a rel="example_group" title="" href="fotos/foto3/001.jpg"> <img alt="example_group" src="fotos/foto3/001.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto3/002.jpg"> <img alt="example_group" src="fotos/foto3/002.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto3/003.jpg"> <img alt="example_group" src="fotos/foto3/003.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto3/004.jpg"> <img alt="example_group" src="fotos/foto3/004.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto3/005.jpg"> <img alt="example_group" src="fotos/foto3/005.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto3/006.jpg"> <img alt="example_group" src="fotos/foto3/006.jpg" /> </a> <a rel="example_group" title="" href="fotos/foto3/007.jpg"> <img alt="example_group" src="fotos/foto3/007.jpg" /> </a> </div>
        <div class="clear-both"></div>
        <a id="ANCHOR-7" class="hidden" ></a><br />
        <br />
        <h2>Systhex patrocina curso dentro do décimo CIOPAR</h2>
        <p><img src="imagens/imagem-eventos.jpg" width="608" height="128" /></p>
        <p><strong>A Systhex promove nesta quinta-feira as 9:00h da  manhã, em parceria com Congresso Internacional de Odontologia do Paraná (CIOPAR),  o curso: Implante Imediato com Estética Imediata, com o renomado Professor </strong><strong>Raul Gomes Junior. </strong></p>
        <p> Não  perca esta oportunidade de atualizar seus conhecimentos sobre o tema e  potencializar sua rede de relacionamentos. O curso será realizado no Estação  Convention Center , que fica na Av. Sete de Setembro, 2775, Curitiba-PR.</p>
        <p> A  Systhex também está participando da Feira do Congresso, então não deixe de  visitar nosso estande e conferir o que existe de mais moderno e atual em  relação a implantes dentários. </p>
        <h3>Ementa  do Curso</h3>
        <p> Os  implantes osseointegrados foram inicialmente utilizados com o intuito de  reconstruir arcos edêntulos, sendo que as cirurgias eram realizadas em dois  tempos. </p>
        <p> Em  um primeiro estágio se realizava a instalação dos implantes e no segundo era  feita a reabertura e exposição dos mesmos ao meio bucal.</p>
        <p> Posteriormente  esta técnica teve sua aplicação ampliada para arcos parcialmente edêntulos, com  isto, grandes resultados estéticos e funcionais em reabilitações orais foram  alcançados. </p>
        <p> Uma  vez dominada a técnica cirúrgica em dois tempos, vários trabalhos foram  realizados submetendo os implantes à carga imediatamente após a sua colocação,  a chamada carga imediata, o que favoreceu a diminuição do tempo de espera para  a instalação da prótese definitiva.</p>
        <p> A  colocação imediata de implantes em alvéolos pós-extração com instalação  subseqüente da prótese na mesma sessão, oferece algumas vantagens sobre o  protocolo clássico.</p>
        <p> Com  esta técnica preservam-se as cristas ósseas alveolares em um nível aceitável, o  que favorece a manutenção do contorno gengival com forma e espessura adequadas,  fator indispensável para a obtenção da estética ideal.</p>
        <h3>Curriculo do professor</h3>
        <p> Raul  Gomes Junior</p>
        <p> Especialista e Mestre em Implantodontia pela UFSC.</p>
        <p> Coordenador do Curso de  Especialização em   Implantodontia UNICSUL/Florianópolis.</p>
        <p> Consultor Científico  Systhex. Autor do Livro Implantodontia do Sonho à Realidade</p>
        <p><br />
        </p>
      </div>
      <div id="conteudo-secundario">
        <h1>Próximos eventos</h1>
        <h3>Latin American Osseointegration Congress</h3>
        <p>Data:  02 a 05 de Julho de 2011. </p>
        <p>Local: Centro de Convenções do Expo Center Norte
Rua José Bernardo Pinto, 333 – Vila Guilherme– 
São Paulo/SP
 </p>
        <hr />    
        <h3>20&deg; CIORJ Congresso Internacional de Odontologia do Rio de Janeiro </h3>
        <p>Data:  20 a 23 de Julho de 2011. </p>
        
        <p>Horário: Atividades Científicas: 09h às 18h
                Exposição Comercial: 12h às 20h</p>
        <p>Local: Riocentro  - Pavilhões 3 e 5 – Av. Salvador Allende, 6555 - Barra da Tijuca – Rio de Janeiro – RJ – 22780-160 </p>
        <p>Eventos Simultâneos: XII Congresso Mundial de Odontologia Militar<br />

                                     IV Endo em Foco da Associação Brasileira de Endodontia do Rio de Janeiro<br />
 
                                     IV Congresso das Regionais da ABO-RJ<br />

</p>
        
        <hr />      
        <h3>XI CIOPAR Congresso Internacional de Odontologia do Paraná </h3>
        <p>Data : 06 a 08 de outubro de 2011. </p>
        <p>Local: Expo Curitiba
Rua Prof. Pedro Viriato Parigot de Souza, 5300
Campo Comprido - Curitiba - PR
 </p>
 <p>Tel.: (41) 3317-3000<br />
www.expounimedcuritiba.com.br
</p>
        <hr />                              
  
  
            
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h1>Eventos realizados</h1>
        <h3>Congresso Intl de Odontologia de Ponta Grossa </h3>
        <p>Data:  14 a 16 de outubro. </p>
        <p>Local: Ponta Grossa/PR </p>
        <p><a href="#ANCHOR-19">saiba mais</a></p>
        <hr />            
        <h3>Congresso Intl de Odontologia Cointer</h3>
        <p>Data:  03 a 05 de setembro. </p>
        <p>Local: Brasília/DF </p>
        <p><a href="#ANCHOR-18">saiba mais</a></p>
        <hr />        
        <h3>ABROSS 2010-XI Encontro Internacional da Academia Brasileira de Osseointegração</h3>
        <p>Data:  17 a 19 de junho. </p>
        <p>Local: São Paulo - SP. </p>
        <p><a href="#ANCHOR-17">saiba mais</a></p>
        <hr />
        <h3>3 º Meeting Internacional de Implantodontia</h3>
        <p>Data:  10 a 12 de junho. </p>
        <p>Local: Florianopolis - SC. </p>
      <p><a href="#ANCHOR-21">saiba mais</a></p>
        <hr />
        <h3>5º Cong Intl de Odontologia do Piauí</h3>
        <p>Realizado de 27 a 30 de Maio em  Piauí.</p>
        <p><a href="#ANCHOR-16">saiba mais</a></p>
        <hr />
        <h3>VI Jornada de Odontologia de Vila Velha-ES e I Meeting Internacional de Implantodontia</h3>
        <p>Realizado de 06 a 08 de maio em  Vila Velha - ES.</p>
        <p><a href="#ANCHOR-15">saiba mais</a></p>
        <hr />
        <h3>2 º CIPE Cong Internacional de Periodontologia, 7 º Cong Internacional da ACPD.</h3>
        <p>Realizado de 22 a 24 de abril em São Paulo </p>
        <p><a href="#ANCHOR-14">saiba mais</a></p>
        <hr />
        <h3>COPEO Congresso de Odontologia de Pernambuco</h3>
        <p>Realizado de 25 a 28 de março de 2010 em Recife. </p>
        <p><a href="#ANCHOR-13">saiba mais</a></p>
        <hr />
        <h3>CiOSP -Congresso Internacional de Odontologia de São Paulo</h3>
        <p>Realizado dos dias 30 de janeiro a 03 de fevereiro de 2010 no Anhembi em SP. </p>
        <p><a href="#ANCHOR-2">saiba mais</a></p>
        <hr />
        <h3>CIOPAR-Congresso Internacional de Odontologia do Paraná</h3>
        <p>Realizado dos dias 02 a 04 de dezembro de 2009 no Estação Convention Center Embratel.</p>
        <p><a href="#ANCHOR-3">saiba mais</a></p>
        <hr />
        <h3>II Congresso Internacional de Odontologia de Mato Grosso do Sul</h3>
        <p>Realizado dos dias 29 a 31 de outubro de 2009. </p>
        <p><a href="#ANCHOR-5">saiba mais</a></p>
        <hr />
        <h3>IV Congresso Internacional de Odontologia de Santa Catarina</h3>
        <p>Realizado de 21 a 24 de outubro de 2009. </p>
        <p><a href="#ANCHOR-12">saiba mais</a></p>
        <p>&nbsp;</p>
        <hr />
        <h3>Congresso Internacional de Odontologia em Vila Velha/ES</h3>
        <p>Realizado de 01 a 03 de outubro de 2009. </p>
        <p><a href="#ANCHOR-11">saiba mais</a></p>
        <p>&nbsp;</p>
        <hr />
        <h3>CIOGO-Congresso de Odontologia de Goiás.</h3>
        <p>Realizado dos dias 24 a 26 de setembro de 2009.</p>
        <p><a href="#ANCHOR-4">saiba mais</a></p>
        <hr />
        <h3>20 anos de osseointegração em São Paulo</h3>
        <p>Realizado dos dias 03 a 05 de setembro de 2009 
          no Anhembi. </p>
        <p><a href="#ANCHOR-6">saiba mais</a></p>
        <hr />
        <h3>CIORJ Congresso Internacional de Odontologia do Rio de Janeiro</h3>
        <p>Realizado de 15 a 18 de julho de 2009. </p>
        <p><a href="#ANCHOR-1">saiba mais</a></p>
        <p>&nbsp;</p>
        <hr />
        <h3>Systhex patrocina curso dentro do décimo CIOPAR</h3>
        <p>A Systhex promove nesta quinta-feira as 9:00h da  manhã, em parceria com Congresso Internacional de Odontologia do Paraná (CIOPAR),  o curso: Implante Imediato com Estética Imediata, com o renomado Professor </strong><strong>Raul Gomes Junior. </p>
        <p><a href="#ANCHOR-7">saiba mais</a></p>
      </div>
    </div>
  </div>
  <?php
include("rodape.php");
?>
</body>
</html>
