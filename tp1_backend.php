<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body> 
    <?php
$mensaje = "HOLA MUNDO"; 
echo $mensaje;  
   ?> <br>

<br> <?php /* ACA EMPIEZAN LAS CUENTAS */
$salonA = 20;
$salonB = 10;
$sumasalonab = $salonA + $salonB;
echo $sumasalonab;
?> <br>

<br> <?php
$salonA = 20;
$salonB = 10;
$restasalonab = $salonA - $salonB;
echo $restasalonab;
?> <br>

<br> <?php
$salonA = 20;
$salonB = 10;
$multiplicasalonab = $salonA * $salonB;
echo $multiplicasalonab;
?> <br>

<br> <?php
$salonA = 20;
$salonB = 10;
$divisionsalonab = $salonA / $salonB;
echo $divisionsalonab;
?> <br>

<br> <?php
$salonA = 20;
$salonB = 10;
$restosalonab = $salonA % $salonB;
echo $restosalonab;
?> <br>

 <br> <?php /*CELSIUS A FHARENHEIT */
 $celsius= 20;
 $centigradosafharenheit = $celsius*32; 
 echo $centigradosafharenheit;
 ?> <br>

 <br> <?php /*PERIMETRO DEL RECTANGULO*/
$base= 18;
$altura = 12; 
$perimetro= $base*2+$altura*2;
echo $perimetro
 ?> <br>

  <br> <?php /*AREA DEL RECTANGULO*/
  $base = 18;
  $altura = 12;
  $area = $base*$altura;
  echo $area
?> <br>

<br> <?php /*PERIMETRO DE UN CIRCULO*/
$radio = 30;
$pi = 3.1416;
$diametro =$radio*2;
$perimetro = $pi*$diametro;
echo $perimetro
?> <br>

<br> <?php /*DIAMETRO DE UN CIRCULO*/
echo $diametro
?>

</body>
</html>