<?php 

//decrypt code for output1
$output1='bzVYUVMzbXJ0cXE3S01yaENEM0NOdz09'; //test encoded output1
$privateKey 	= 'NOWEINF32523EFW63HGBERV34235'; // user define key
$secretKey 		= 'hd203dh2bx2zp'; // user define secret key
$encryptMethod      = "AES-256-CBC";
$stringEncrypt      = $output1; // user encrypt value

$key    = hash('sha256', $privateKey);
$ivalue = substr(hash('sha256', $secretKey), 0, 16); // sha256 is hash_hmac_algo

 $output_decoded = openssl_decrypt(base64_decode($stringEncrypt), $encryptMethod, $key, 0, $ivalue);

echo"output 1 decoded: $output_decoded"; //output1 decoded succesfully


//decrypt code for output2
$output2='bjBaa3Jham4zanFWR3gvaXVURDRJQT09'; // test encoded output2
$privateKey2	= 'DANFOVBWEVCB432HNFC032FH2QADJ'; // user define key
$secretKey2 		= 'g124hbfo02fg'; // user define secret key
$encryptMethod2      = "AES-256-CBC";
$stringEncrypt2      = $output2; // user encrypt value

$key2    = hash('sha256', $privateKey2);
$ivalue2 = substr(hash('sha256', $secretKey2), 0, 16); // sha256 is hash_hmac_algo

 $output_decoded2 = openssl_decrypt(base64_decode($stringEncrypt2), $encryptMethod2, $key2, 0, $ivalue2);

echo"output 2 decoded: $output_decoded2"; //output1 decoded succesfully


//decoding complete for test values above, script is ready for use.

    ?>