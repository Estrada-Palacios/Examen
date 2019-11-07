<html>
<head><title>Área del rectangulo</title></head>
<body bgcolor="pink" text="000033">
<h2>Resultado: Área del rectangulo</h2>
<p>
<?php
 extract($_REQUEST, EXTR_SKIP); //Extrayendo los imputs del formulario

 $result = $radio * $PI;
 print "$result = $radio * $radio * $PI <br>";
?>
</body>
</html> 