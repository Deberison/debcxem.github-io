<form action="cursova.php" method="POST">
<h1 align="center">МАТЕМАТИЧНІ ФУНКЦІЇ</h1>
<p class="a">Площа та об'єм кімнати</p>
width<input type="text" name="z"><br><br>
length<input type="text" name="x"><br><br>
height<input type="text" name="c"><br><br>
<input type="submit" name="porahuvati">
</form>
<?php
$width=$_POST['z'];
$length=$_POST['x'];
$height=$_POST['c'];
$s=$width*$length;
$v=$s*$height;
echo " Площа шириною -" .$width. " та довжиною - " .$length. " = ". $s. "м<sup>2</sup><br>";
echo " Об`єм при висоті " .$height. " = ". $v."м<sup>3</sup>";
?>
