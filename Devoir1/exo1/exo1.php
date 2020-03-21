<html>
<p><h1 align="center" >Délice des Fruits&Légumes </h1></p>
<?php
 
 $numbers=array('<img src="IMG1.jpg" width="160" height="200">','<img src="IMG2.jpg" width="160" height="200">','<img src="IMG3.jpg" width="160" height="200">');
  shuffle($numbers);
  echo "<table><tr>";
  foreach($numbers as  $number) {
	  echo"<td width=500px align=center>$number</td>";
  }
  echo "</tr></table>";
  
?>
</html>