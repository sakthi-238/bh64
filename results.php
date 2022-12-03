<?php

// Encode Key ID
$hex = $_GET["keyid"];            // and much more hex values as string as in your example
$bin = hex2bin($hex);       // convert the hex values to binary data stored as a PHP string
$keyid64 = base64_encode($bin); // remove == , replace as space
$finalkeyid64 = str_replace('=', '', $keyid64);


// Encode Key
$hex2 = $_GET["key"];            // and much more hex values as string as in your example
$bin2 = hex2bin($hex2);       // convert the hex values to binary data stored as a PHP string
$key64 = base64_encode($bin2); // remove == , replace as space
$finalkey64 = str_replace('=', '', $key64);
?>

{  
   "keys":[  
      {  
         "kty":"oct",
         "k":"<?php echo $finalkey64;?>",
         "kid":"<?php echo $finalkeyid64;?>"
      }
   ],
   "type":"temporary"
}


#https://clearkey-base64-2-hex-json.herokuapp.com/results.php?keyid=217e77e40cf4ec1269ea1e278eb2c610&key=b2a2333955933b7dc3d71e7685971f71