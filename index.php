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
  
  
 </body>
</html>
