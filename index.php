<?php
/*
Faiza Berrichi
date:07/06/2021
première partie exo1
*/
echo "<h3 style ='color:red;'>exercice 1:</h3>";
$string="Hello PHP";
echo $string;
echo "<br>";

echo "<h3 style ='color:red;'>exercice 2:</h3>";
$nom="Berrichi";
$prénom="Faiza";
$age="34";
echo "je m'appelle ". $prénom."  ".$nom." j'ai ".$age." ans. <br>";
echo "<br>";


echo "<h3 style ='color:red;'>exercice 3:</h3>";
if ($age>=18){
    echo"vous êtes majeur <br>";
}else
echo"vous n'êtes pas majeur <br>";


echo "<h3 style ='color:red;'>exercice 4:</h3>";
$alétoireAge=rand(0, 100) ;

echo $alétoireAge. "<br>";
if ($alétoireAge>=18){
    echo"vous êtes majeur <br>";
}else
echo"vous n'êtes pas majeur <br>";


echo "<h3 style ='color:red;'>exercice 5:</h3>";
echo "<br>";
$genre = array(
    ' un homme',
    'une femme',
);
$key = array_rand($genre);
echo"vous êtes " . $genre[$key]." et vous avez " .$alétoireAge." ans . <br>";
echo "<br>";
echo "<h3 style ='color:red;'>exercice 6:</h3>";
$magnitude=rand(0, 9) ;
switch ($magnitude){
    case 0:
        echo
        $magnitude." pas de séismet";
        break;
    case 1:
        echo $magnitude." Micro-séisme impossible à ressentir";
        break;
    case 2:
            echo $magnitude." Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
         break;
    case 3:
        echo $magnitude." Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti";
        break;
    case 4:
        echo $magnitude." Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats"  ;
        break;
     case 5:
        echo $magnitude. " Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes ";     
        break;
     case 6:
        echo $magnitude. " Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre";
        break;
    case 7: 
        echo $magnitude. " Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance";
        break;
    case 8: 
        echo $magnitude. " Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres";
        break;
    case 9:
        echo $magnitude. " Séisme capable de tout détruire sur une très vaste zone";
        break;

}

?>