<?php

$url = "https://www.cbioportal.org/api/session/comparison_session";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "authority: www.cbioportal.org",
   "content-type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"groups":[{"name":"Breast","description":"","studies":[{"id":"brca_tcga","samples":["TCGA-A2-A0EV-01","TCGA-3C-AAAU-01","TCGA-3C-AALI-01","TCGA-3C-AALK-01","TCGA-5L-AAT1-01"],"patients":["TCGA-A2-A0EV-01","TCGA-3C-AAAU-01","TCGA-3C-AALI-01","TCGA-3C-AALK-01","TCGA-5L-AAT1-01"]}],"origin":["brca_tcga"],"uid":"62665b890934121b56df06b5","isSharedGroup":false,"nonExistentSamples":[]},{"name":"Breast","description":"","studies":[{"id":"brca_tcga","samples":["TCGA-A2-A0EV-01","TCGA-A8-A075-01","TCGA-AC-A23H-01","TCGA-AN-A049-01","TCGA-AO-A0JC-01"],"patients":["TCGA-A2-A0EV-01","TCGA-A8-A075-01","TCGA-AC-A23H-01","TCGA-AN-A049-01","TCGA-AO-A0JC-01"]}],"origin":["summit_2018"],"uid":"62665b9404dc35387469649a","isSharedGroup":false,"nonExistentSamples":[]}],"origin":["brca_tcga"]}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

