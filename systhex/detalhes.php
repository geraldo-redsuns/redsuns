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
      </div>
    </div>
    <div id="conteudo">
      <div id="conteudo-principal">
        <h1>Curabitur auctor</h1>
                <div class="coluna-imagem-produto">

        <img src="imagens/imagem-produtos.jpg" alt="" width="152" height="122" />
        </div>
        <div class="coluna-detalhes-produto">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. Maecenas aliquam viverra malesuada. </p>
        <p>Ut purus erat, egestas vitae ultrices non, eleifend in orci. Quisque molestie, dui et pretium sagittis, lectus tellus Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <p>Auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. Maecenas aliquam viverra malesuada. </p>
        <h3>Selecione o diâmentro e a altura</h3>
        <p>Auctor, lacus a eleifend lobortis, leo risus aliquet neque, ut congue urna dolor quis nulla. Maecenas aliquam viverra malesuada. </p>
        <table width="70%" border="0" cellspacing="0" cellpadding="15">
          <tr>
            <td align="right">Diâmetro: </td>
            <td><label>
              <select name="select" id="select">
                <option>3</option>
                <option>5</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td align="right">Altura: </td>
            <td><input type="text" name="textfield4" id="textfield4" /></td>
          </tr>
          <tr>
            <td align="right">Quantidade <br /></td>
            <td><input type="text" name="textfield5" id="textfield5" /></td>
          </tr>
        </table>
        <p><a href="#">comprar mais destes protudos</a></p>
        <p>&nbsp;</p>
        <h3>R$ 99.00 por unidade</h3>
        <p>&nbsp;</p>
        <p><a href="checkout.php" class="botao">Finalizar compra</a> <a href="produtos.php">continuar comprando</a></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        </div>
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

