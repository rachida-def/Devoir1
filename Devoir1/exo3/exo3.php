<?php
echo "<h1>Centrale d'achats</h1><h4>commande clients</h4>";
if (!$ch = fopen("commande.txt","r"))
    {echo "Echec de l'ouverture du fichier";}
else {
	echo "<table border=2 ><tr bgcolor=#00effe><th> Numero de commande</th><th> Numero client </th><th>date de commande </th><th> designation article</th><th>quantite(PAl) </th><th>prix unitaire </th><th>Date de livrasion </th><th>Adresse client </th></tr>";
  while(!feof($ch)) {
	  $l= fgets($ch,255);
	  $c=explode('|',$l);
	  echo "<tr>";
	   foreach($c as  $elm) {
	     echo"<td width=100px height=40px align=center>$elm</td>";
      }
    
  } echo "</tr></table>";
  fclose($ch);} 
  
 /* $f = fopen("archivesCli.txt","a");
  fputs($f,$a."|".$a1."|".$a2."|".$a3);
  fputs($f,"\n");
  fclose($f); 
  print "Résultats bien enregistrés";
*/
?>