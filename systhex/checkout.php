<?php
include("cabecalho.php");
?>

<body>
<div class="translate">
<div id="topo">
  <p class="float-left"></p>
  <!--  <p class="float-right"><a href="#">inglês</a> | <a href="#">português</a> | <a href="#">espanhol</a></p>--></div>
<div id="cabecalho">    <h1 class="logo png_bg"><a href="index.php">Systhex</a></h1>
<ul id="menu">
    <li><a href="index.php">Página Inicial</a></li>
    <li><a href="sobre-a-systhex.php">Sobre a Systhex</a></li>      <li><a href="produtos.php">Produtos</a></li>
<li><a href="distribuidores.php">Distribuidores</a></li>
    <li><a href="cases.php">Cases</a></li>
    <li><a href="eventos.php">Eventos</a></li>
    <li><a href="contato.php">Contato</a></li>
  </ul>
</div>
<div id="banner"> <img src="imagens/banner-interna.jpg" /> </div>
<div id="container-conteudo">
  <div id="container-destaque">
    <div class="destaque-esquerdo">
      <h3>Catálogo de Produtos</h3>
      <p><img src="imagens/imagem-catalogo-produtos.jpg" width="258" height="70" /></p>
      <p>Baixe já o nosso catálogo   de produtos 2009. E encontre de forma ágil e rápida exatamente o produto     que procura.</p>
		<p>Para visualizar o catálogo é necessário instalar o Adobe Reader. <a href="http://get.adobe.com/br/reader/" target="_blank">Clique aqui para efeturar a instalação</a>.</p>
      <p><a href="#" class="botao">download</a></p>
      <h3>&nbsp;</h3>
    </div>
  </div>
  <div id="conteudo">
    <div id="conteudo-principal">
      <h1>Finalizar compra</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. Maecenas aliquam viverra malesuada. </p>
      <table class="tabela-produtos" width="100%" border="0" cellspacing="0" cellpadding="10">
        <thead>
          <th>Produto</th>
          <th>Valor</th>
          <th>Quantidade</th>
          <th>Total</th>
          </thead>
        <tr>
          <td>Lorem Ipsum</td>
          <td>R$ 280,00</td>
          <td>1
            <label></label></td>
          <td>R$ 100,00</td>
        </tr>
    <tr class="linha">
          <td>Lorem Ipsum</td>
          <td>R$ 280,00</td>
          <td>1
          <label></label></td>
          <td>R$ 100,00</td>
        </tr>
          <tr>
          <td>Lorem Ipsum</td>
          <td>R$ 280,00</td>
          <td>2
            <label></label></td>
          <td>R$ 100,00</td>
        </tr>
      </table>
      <h2>Frete</h2>
      <table width="52%" border="0" cellspacing="0" cellpadding="15">
        <tr>
          <td align="right">Endereço da entrega:</td>
          <td><label>
            <input type="text" name="textfield" id="textfield" />
          </label></td>
        </tr>
        <tr>
          <td align="right">Estado:</td>
          <td><label>
          <input type="text" name="textfield2" id="textfield2" />
          </label></td>
        </tr>
        <tr>
          <td align="right">CEP:</td>
          <td><label>
          <input type="text" name="textfield3" id="textfield3" />
          </label></td>
        </tr>
        <tr>
          <td align="right">&nbsp;</td>
          <td><a href="checkout.php" class="botao">Comprar</a></td>
        </tr>
      </table>
      <p>
        <label></label>
      </p>
    </div>
    <div id="conteudo-secundario">
      <h1>Categorias</h1>
      <ul>
        <li><a href="#">Adipiscing elit. Curabitur auctor</a></li>
        <li><a href="#">Acus a eleifend lobortis</a></li>
        <li><a href="#">Leo risus aliquet neque</a></li>
        <li><a href="#">At congue urna</a></li>
        <li><a href="#">Maecenas aliquam viverra malesuada</a></li>
        <li><a href="#">Ut purus erat, egestas vitae</a></li>
        <li><a href="#">Quisque molestie, dui et pretium sagittis</a></li>
      </ul>
    </div>
  </div>
</div>
<?php
include("rodape.php");
?>


</body>
</html>

