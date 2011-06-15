<script type="text/javascript">

var msg = "";

</script>

<?php

$sql = "select pergunta_id, pergunta_texto from enquete_pergunta order by pergunta_id desc limit 1";
$query = mysql_query($sql);

$row = mysql_fetch_assoc($query);

$pergunta_texto = $row["pergunta_texto"];
$pergunta_id    = $row["pergunta_id"];

if($_POST){
	
	$resposta_id = $_POST["resposta_id"];

	if($resposta_id != ""){

		$sql = "update enquete_resposta set resposta_voto=resposta_voto+1 where resposta_id = ".$resposta_id ."";
		
		$query = mysql_query($sql);

		if ($query){
			$msg = "Voto computado com sucesso.";
		} else {
			$msg = "Erro ao computar o voto.";
		}

	} 

}

?>

<script type="text/javascript">

function ver_resultados(){

	alert("Resultados disponível a partir do dia 10 de abril.");
	return false;

}

</script>

<h2>ENCUESTA</h2>
<?php if (isset($msg)) {?>
<p><?=$msg?></p>
<?php } ?>
<p><?=utf8_encode($pergunta_texto)?></p>
<form action="index.php?enquete=true" method="post" name="FormEnquete">

	<?php

	$sql = "select resposta_id, resposta_texto from enquete_resposta where resposta_pergunta = '".$pergunta_id."'";
	$query = mysql_query($sql);

	while($row = mysql_fetch_assoc($query)){
		echo "<input type='radio' value='".$row['resposta_id']."' name='resposta_id' />".utf8_encode($row['resposta_texto'])."<br />";
	}

	?>
	
  <br />

  <button class="button"><span>Votación</span></button>
  <button class="button" onclick="ver_resultados()"><span>resultados</span></button>
</form>
