<?php 



function getEncryptedUser(){

    $username=$_POST['username']; // user defined value1
    $privateKey1 	= 'NOWEINF32523EFW63HGBERV34235'; // user defined key1
    $secretKey1		= 'hd203dh2bx2zp'; // user defined secret key1
    $encryptMethod1      = "AES-256-CBC";
    $string1 		=$username ; // user defined value2

    $key1 = hash('sha256', $privateKey1);
    $ivalue1 = substr(hash('sha256', $secretKey1), 0, 16); // sha256 is hash_hmac_algo
    $result1 = openssl_encrypt($string1, $encryptMethod1, $key1, 0, $ivalue1);
    $output1= base64_encode($result1);  // output1 is a encripted value of the user input under email_encode

    return $output1;
}

function getEncryptedUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    

    $ip_address=$ip ;// user defined value1
    $privateKey1 	= '8NOJQCIPN9-runD-HFNFIQJF'; // user defined key1
    $secretKey1		= '4NCaasjfj-0E2U9Edi2E'; // user defined secret key1
    $encryptMethod1      = "AES-256-CBC";
    $string1 		=$ip_address ; // user defined value2

    $key1 = hash('sha256', $privateKey1);
    $ivalue1 = substr(hash('sha256', $secretKey1), 0, 16); // sha256 is hash_hmac_algo
    $result1 = openssl_encrypt($string1, $encryptMethod1, $key1, 0, $ivalue1);
    $output2= base64_encode($result1);  // output1 is a encripted value of the user input under email_encode

    return $output2;

}






?>