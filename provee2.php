<?php

//echo"hello word!!\n" . "<br/>" ;
//$v1="8.2";
//$v2=3;

//echo $v1+$v2;
//echo "ciao". $v2

// variabili con array

$lista=array ();

//push lo mette in cosa 
array_push($lista,"ciao");
array_push($lista,"42");

//mette il valore in testa 
array_unshift($lista,"hello");

echo $lista[1];
array_unshift($lista,"cavallo");
echo $lista[1] ;


//cancella l ultimo elemento ....  array_pop($lista) 
//echo array_pop($lista);

//questo comando prende il primo comando della lista e lo toglie  array_shift($lista) 
//echo array_shift($lista);

//per far vedere l elemento della lista alla posizione che noi segnamo
//$lista[3];
echo "<br>contenuto di tutto l'array<br>";

//imposto a 8 il valoreche voglio mettere quindi 8=andrea
$lista[8]="andrea";


//per fare un ciclo:
foreach ($lista as $el) {

echo $el;
echo "<br>";
}
echo "<br>";
//per vedere anche l indice si inserisce (i=indice)
foreach ($lista as $i=>$el) {

echo $i ."-".$el;
echo "<br>";
}
echo "<br>";


echo"l'array contiene "   .count($lista).  " elementi" ; 

//ciclo for contiene 3 elementi separati dal ;  for (...;...;...,){
echo "<br>";
// echo $i=compaiono i risultati da 0a9
// echo $i++= aumenta sempre di uno il valore 9+1 =10
for($i=0 ;$i<10; $i++) {

echo $i;



}


//----------------------------

$nome="andrea";
// visualizza la 3 lettera del nome partendo da 0 quindi la lettera e la r
$nome[3]   ;
//conta il nomero del nome andrea andrea sono 6 lettere
strlen($nome)  ;  

// ti stampa l ultima lettera del nome andrea
$nome[strlen($nome)-1]  ; 
//scrivere nome al rovescio------
echo "<br>";
$nome="giuseppe";
for($i=strlen($nome)-1 ;$i>=0; $i--) {

echo $nome[$i] ;
 
}
echo "<br>";
//le funzioni servono per implementare un operazione comune che ci serve in dibersi punti del programma   funchtion nome della funzione ($variabile)


function aggiungiuno ($var) {
$var++;
return $var ;

}

echo aggiungiuno (5);
echo "<br>";
// array associativi 

$dizionario=array ("fish"=>"pesce","snail"=>"lumaca");

$dizionario["cat"]="gatto";

$dizionario["dog"]="cane";



foreach ($dizionario as $i=>$el) {

echo $i ."-".$el . "<br>";


}
?>


