<?php 
$email_encode='test@gmail.com'; // user defined value1
$privateKey1 	= 'NOWEINF32523EFW63HGBERV34235'; // user define key1
    $secretKey1		= 'hd203dh2bx2zp'; // user define secret key1
    $encryptMethod1      = "AES-256-CBC";
    $string1 		=$email_encode ; // user define value2

    $key1 = hash('sha256', $privateKey1);
    $ivalue1 = substr(hash('sha256', $secretKey1), 0, 16); // sha256 is hash_hmac_algo
    $result1 = openssl_encrypt($string1, $encryptMethod1, $key1, 0, $ivalue1);
    $output1= base64_encode($result1);  // output1 is a encripted value

    

$confirm_code_encode='12345'; // user defined value2
$privateKey2 	= 'DANFOVBWEVCB432HNFC032FH2QADJ'; // user define key2
    $secretKey2		= 'g124hbfo02fg'; // user define secret key2
    $encryptMethod2     = "AES-256-CBC";
    $string2		=$confirm_code_encode ; // user define value2

    $key2 = hash('sha256', $privateKey2);
    $ivalue2 = substr(hash('sha256', $secretKey2), 0, 16); // sha256 is hash_hmac_algo
    $result2 = openssl_encrypt($string2, $encryptMethod2, $key2, 0, $ivalue2);
    $output2= base64_encode($result2);  // output2 is a encripted value
    
    
    echo"this is output 1 encoded: $output1"; 
    echo"this is output 2 encoded: $output2";

//encoding complete for test values above script is ready for use


//decrypt code for output1

$privateKey 	= 'NOWEINF32523EFW63HGBERV34235'; // user define key
$secretKey 		= 'hd203dh2bx2zp'; // user define secret key
$encryptMethod      = "AES-256-CBC";
$stringEncrypt      = $output1; // output1 encrypt value

$key    = hash('sha256', $privateKey);
$ivalue = substr(hash('sha256', $secretKey), 0, 16); // sha256 is hash_hmac_algo

 $output_decoded = openssl_decrypt(base64_decode($stringEncrypt), $encryptMethod, $key, 0, $ivalue);

echo"output 1 decoded: $output_decoded"; //output1 decoded succesfully


//decrypt code for output2

$privateKey2	= 'DANFOVBWEVCB432HNFC032FH2QADJ'; // user define key
$secretKey2 		= 'g124hbfo02fg'; // user define secret key
$encryptMethod2      = "AES-256-CBC";
$stringEncrypt2      = $output2; // output2 encrypt value

$key2    = hash('sha256', $privateKey2);
$ivalue2 = substr(hash('sha256', $secretKey2), 0, 16); // sha256 is hash_hmac_algo

 $output_decoded2 = openssl_decrypt(base64_decode($stringEncrypt2), $encryptMethod2, $key2, 0, $ivalue2);

echo"output 2 decoded: $output_decoded2"; //output1 decoded succesfully


//encoding and decoding script complete and  is ready for use.

    ?>
