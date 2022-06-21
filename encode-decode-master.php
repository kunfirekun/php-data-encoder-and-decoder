
<?php 
$page='12345'; // user defined value
$privateKey1 	= 'DANFOVBWEVCB432HNFC032FH2QADJ'; // user define key
    $secretKey1		= 'g124hbfo02fg'; // user define secret key
    $encryptMethod1      = "AES-256-CBC";
    $string1 		=$page ; // user define value

    $key1 = hash('sha256', $privateKey1);
    $ivalue1 = substr(hash('sha256', $secretKey1), 0, 16); // sha256 is hash_hmac_algo
    $result1 = openssl_encrypt($string1, $encryptMethod1, $key1, 0, $ivalue1);
    $output1= base64_encode($result1);  // output is a encripted value

    echo"$output1";

    ?>