<?php
//error_reporting(0);



function Baglan($url){
	$curl=curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($curl,CURLOPT_SSL_VERIFYHOST,0);
	curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,0);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);

	$cikti=curl_exec($curl);
	echo curl_error($curl);
	curl_close($curl);
	return str_replace(array("\n","\t","\r"),null,$cikti);
}











?>