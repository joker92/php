


<?php





 class  animale{

	const nzampe=0;
	public $nome;

	public function verso(){
	return "non so..";
	}
}


class cane extends Animale {

	const nzampe=4;
	
	public function verso (){
		return "bau bau";	
}
}



class papero extends Animale {

	const nzampe= 2;
	
	public function verso() {
	

	return "qua qua";
}
}



class pesce extends Animale {

	const nzampe=0;
	
	public function verso (){
	
	return".....";
}
}


