<?php
#Exercise1
$var1=2;
$var2=3;

$total = $var1 + $var2;

echo $total;

?>

<?php 

#Exercise2
$nbre = 4;
for($i=0;$i<=10;$i++)
{
$nbre ++;
echo $nbre;
}


?>

<?php
  #Exercise3  
    $marks = 33;
$grade="";
    if($marks >= 60) {
        $grade = "Premiere Division";

    } else if($marks >=45 AND $marks <= 59) {
        $grade = "Deuxieme Division";
	    
} else if($marks >= 33 AND $marks <= 44) {
        $grade = "Troisieme Division";

    } else {
        $grade = "Echec";

    }
echo $grade;
?>

<?php
#Exercise4
    
    $jour = 3;
    $message = "";
    
    switch ($jour) {
        case 1:
            $message = "Lundi";
            break;
        case 2:
            $message = "Mardi";
            break;
        case 3:
            $message = "Mercredi";
            break;
        case 4:
            $message = "Jeudi";
            break;
        case 5:
            $message = "Vendredi";
            break;
        case 6:
            $message = "Samedi";
            break;
        case 7:
            $message = "Dimanche";
            break;
        default:
            $message = "Le nombre est invalide par défaut";
            break;
    }
echo $message;
?>
