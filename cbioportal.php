<?php
header("Access-Control-Allow-Origin: *");
$url = "https://www.cbioportal.org/api/session/comparison_session";
$jsondat = $_POST["DATA"];

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "authority: www.cbioportal.org",
   "content-type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = $jsondat;

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo $resp;

?>