<html>
 <head>
  <title>Teste PHP</title>
 </head>
 <body>
 <?php echo "<p>Olá Mundo, eh só mais uma página teste!</p>"; ?>
  
  <?php
$valor1 = 40;
$valor2 = 20;

if (  $valor1 > $valor2  )
  echo "A variável $valor1 é maior que a variável $valor2";
else if (  $valor2 > $valor1 )
  echo "A variável $valor2 é maior que a variável $valor1";
else
  echo "A variável $valor1 é igual à variável $valor2";
?>
  
  <?php
function retornaDiv($n){
	$divisores = array();
	/* Tenta dividir por todos os números entre 1 e a metade inferior do número */
	$metInf = floor($n/2);
		for($i=1;$i<=$metInf;$i++){
			if(!($n%$i))
				$divisores[] = $i;
		}
	return $divisores;
}

function somaPerfeita($n,$div){
	$soma = 0;
	foreach($div as $divisores){
		$soma += $divisores;
	}
	
	if($soma==$n){
		return true;
	}else{
		return false;
	}
}

//Recendo o número do usuário via form ou via url
$n = $_GET["n"];
$nPerf = array();
$i = 2;	

while(count($nPerf)<$n){
	$div = retornaDiv($i);
	if(somaPerfeita($i,$div))
	     $nPerf[] = $i;
	$i += 2;
}

foreach($nPerf as $key){
	echo $key."<br>";
}
?>
  
  
 </body>
</html>
