<?php
	session_start();
	$key = openssl_random_pseudo_bytes(32); // $_SESSION['usuarioNiveisAcessoId']; //$_SESSION['chave'];
	$plaintext = "message to be encrypted";
	$cipher = "aes-128-gcm";
	if (in_array($cipher, openssl_get_cipher_methods()))
	{
		$ivlen = openssl_cipher_iv_length($cipher);
		$iv = openssl_random_pseudo_bytes($ivlen);
		$ciphertext = openssl_encrypt($plaintext, $cipher, $key, $options=0, $iv, $tag);
		
		//store $cipher, $iv, and $tag for decryption later
		$original_plaintext = openssl_decrypt($ciphertext, $cipher, $key, $options=0, $iv, $tag);
		echo "Texto Plano: ".$original_plaintext."\n";
		echo "<br>";
		echo "texto cifrado: ".$ciphertext."\n";
		echo "<br>";
		echo "chave: ".$key."\n";
	}
?>