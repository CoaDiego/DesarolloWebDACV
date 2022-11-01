<?php
session_start();

if (isset($_SESSION['candidato1']))
{
	$votos_candidato1=$_SESSION['candidato1'];
}
else
{
   $votos_candidato1=0;	
}
if (isset($_SESSION['candidato2']))
{
	$votos_candidato2=$_SESSION['candidato2'];
}
else
{
   $votos_candidato2=0;	
}

isset($_SESSION['candidato3'])?
$votos_candidato3=$_SESSION['candidato3']:$votos_candidato3=0;

isset($_SESSION['candidato4'])?
$votos_candidato4=$_SESSION['candidato4']:$votos_candidato4=0;


$votacion=$_POST['votacion'];

switch ($votacion) {
	case 'candidato1':
		$votos_candidato1++;
		break;
	case 'candidato2':
		$votos_candidato2++;
		break;
	case 'candidato3':
		$votos_candidato3++;
		break;
	case 'candidato4':
		$votos_candidato4++;
		break;
}

?>

Resultados votación 	<br>
<ul class="preguntas">
	<li>Candidato A:<span ><?php echo $votos_candidato1 ?> </span></li>
	<li>Candidato B:<span ><?php echo $votos_candidato2 ?> </span></li>
	<li>Candidato C:<span ><?php echo $votos_candidato3 ?> </span></li>
	<li>Candidato D:<span ><?php echo $votos_candidato4 ?> </span></li>
</ul>

<!-- <?php
	isset($_SESSION['candidato1',$votos_candidato1,0]);
	isset($_SESSION['candidato2',$votos_candidato2,0]);
	isset($_SESSION['candidato3',$votos_candidato3,0]);
	isset($_SESSION['candidato4',$votos_candidato4,0]);
?> -->
