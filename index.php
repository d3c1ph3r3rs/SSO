<?php
//library JWT
require_once("src/JWT.php");
//params
$token = 'acces_token (I get this token of response array)';
$key = 'client_secret_azureAD';
//decoded
$decoded = JWT::decode( $token, $key, array('RS256') );
print_r($decoded);
?>
