

<?php  	

//---------array di array---------

//nel echo sotto si puo solamente stampare  
//le terminate citta che sono in sieme esempio se vogliamo 
//echo $distanze [firenze][reggio calabria] non si puo 
//perche non sono nello stesso array


$distanze=array(
"torino"=>array(
	   "roma"=>675,
	   "reggio calabria"=>1365,
	   "milano"=>140
	   
  ),

"firenze"=>array(
	   "torino"=>395,
	   "roma"=>280
  ),
"udine"=>array(
       "torino"=>510,
       "roma"=>640


  )
);
//echo $distanze["torino"]["roma"];
?>