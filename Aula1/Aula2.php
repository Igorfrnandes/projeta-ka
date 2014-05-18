<?php

$nomes = array(0=>'Igor',1=>'joao',2=>'maria',3=>'luuh',5=>'pedro',4=>'marcos');

#simples
/*
echo $nomes[0].'<br>';
echo $nomes[1].'<br>';
echo $nomes[3].'<br>';
*/

#laço de repetição FOR
#for($i=0;$i<=5;$i++){
# echo $nomes[$i].'<br>';
#
#}

#echo count($nomes);//conta posições do array

for($i=0;$i<count($nomes);$i++){
 echo $nomes[$i].'<br>';
}

