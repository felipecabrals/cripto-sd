<?php
	session_start();
	 if ( 
		$_SESSION['usuarioNiveisAcessoId'] == 1 ||
		$_SESSION['usuarioNiveisAcessoId'] == 2 ||
		$_SESSION['usuarioNiveisAcessoId'] == 3
		)
	{
		$key=$_SESSION['usuarioNiveisAcessoId']; //$_SESSION['chave']; 
		//$plaintext = "message to be encrypted";
		//$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
		/*$cipher = "aes-128-gcm";
		if (in_array($cipher, openssl_get_cipher_methods()))
		{
			$ivlen = openssl_cipher_iv_length($cipher);
			$iv = openssl_random_pseudo_bytes($ivlen);
			$ciphertext = openssl_encrypt($nome_temporario, $cipher, $key, $options=0, $iv, $tag);*/
			
// DECRIPTAR
			//store $cipher, $iv, and $tag for decryption later
			//$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
			//echo $original_plaintext."\n";
			//echo $ciphertext."\n";
		//}
		$nome_temporario=$_FILES["Arquivo"]["tmp_name"];
		$nome_real=$_FILES["Arquivo"]["name"];
		 copy($nome_temporario,"criptografados/$nome_real");
		//copy($nome_temporario,"criptografados/tese");
		//copy($ciphertext,"criptografados/$nome_real");
	}
	else
	{ 
		header("Location: index.php");
	}

/* function encryptFile($source, $key, $dest) 
{
    $key = $_SESSION['usuarioNiveisAcessoId']; //substr(sha1($key, true), 0, 16);
    $iv = openssl_random_pseudo_bytes(16);

    $error = false;
    if ($fpOut = fopen($dest, 'w')) {
        // Put the initialzation vector to the beginning of the file
        fwrite($fpOut, $iv);
        if ($fpIn = fopen($source, 'rb')) {
            while (!feof($fpIn)) {
                $plaintext = fread($fpIn, 16 * FILE_ENCRYPTION_BLOCKS);
                $ciphertext = openssl_encrypt($plaintext, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $iv);
                // Use the first 16 bytes of the ciphertext as the next initialization vector
                $iv = substr($ciphertext, 0, 16);
                fwrite($fpOut, $ciphertext);
            }
            fclose($fpIn);
        } else {
            $error = true;
        }
        fclose($fpOut);
    } else {
        $error = true;
    }

    return $error ? false : $dest;
}*/

?>
<br>
<html>
<body> 

<a href="voltar.php">Voltar</a>