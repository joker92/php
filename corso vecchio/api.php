<?php
        $url="https://centralservices.top-ix.org/restapi/topixmembers";
        // create cURL session
        $ch = curl_init();
        // set the URL
        curl_setopt($ch, CURLOPT_URL, $url);
        // return the response instead of printing
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // set the type of authentication
        curl_setopt($ch, CURLOPT_HTTP_VERSION, 1.0);
        // accetta certificati SSL non verificati
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1);

        // send the request and store the response in $resp
        $resp= curl_exec($ch);
        curl_close($ch);

        $members=json_decode($resp);

	$aziende=[];
	foreach ($members as $m) {
		$a = new Azienda();

		$a->nome = $m->name;
		$a->sitoweb = $m->website;
		$a->logo = $m->logo_image;
		$a->indirizzo = $m->addressmail;

		$aziende[]=$a;
	}

?>
