<?php
// This refers to the previous code block.
require "safeCrypto.php"; 

// Do this once then store it somehow:
$key = \Sodium\randombytes_buf(\Sodium\CRYPTO_SECRETBOX_KEYBYTES);
$message = 'We are all living in a yellow submarine';

$ciphertext = safeEncrypt($message, $key);
$plaintext = safeDecrypt($ciphertext, $key);

var_dump($ciphertext);
var_dump($plaintext);