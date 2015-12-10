<?


// array associativi 

$dizionario=array ("fish"=>"pesce","snail"=>"lumaca");

$dizionario["cat"]="gatto";

$dizionario["dog"]="cane";
$dizionario["mokej"]="mangia banana";
$dizionario["pig"]="u puerco";
//ksort($dizionario);
asort($dizionario);
//arsort($dizionario);
foreach ($dizionario as $i=>$el) {

echo $i ."-".$el . "<br>";


}
?>


