
<?php
$url = curl_init("http://www.canaldelcongreso.gob.mx/");
/*echo "<style> #headerTop {display:none;} #floatNav {display:none;} header {display:none;} #bnrTop{display:none;}".
              "#btnRadioCongreso{display:none;}".
              "#streamingList{display:none;}".
     " #streaming{display:block;}</style><base href='http://www.canaldelcongreso.gob.mx/'>";*/
     echo "<style>body > *{display:none;} #cdc{display:inline-block;} #cdc > *{display:none;} #streaming{display:block;} #streamingList{display:none;} #floatNav{display:none;} </style><base href='http://www.canaldelcongreso.gob.mx/'>";
     
$salida = curl_exec ($url);
curl_close($url);
?>
