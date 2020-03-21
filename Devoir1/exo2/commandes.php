
<?php

$cmd=array();
  try{
    $fd=fopen("commande.txt","r");
     $i=0;
        while(!feof($fd)){
         	$ligne=fgets($fd);
          	$s=explode("|",$ligne);
         		$cmd[$i]=$s[0];
                     echo "$cmd[$i] <br>";
         	    $cmd[$i]=$s[1];
         	        echo "cmd[$i]<br>";
         	    $cmd[$i]=$s[2];
         	        echo "$cmd[$i]</br>";
         	    $cmd[$i]=$s[3];
         	        echo "$cmd[$i]</br>";
         	    $cmd[$i]=$s[4];
         	        echo "$cmd[$i]</br>";
         	    $cmd[$i]=$s[5];
         	        echo "$cmd[$i]</br>";
         		$i++;
        }

    fclose($fd);
  }catch(Exception $e){

  	die("erreur est survenue!");
  }

?>