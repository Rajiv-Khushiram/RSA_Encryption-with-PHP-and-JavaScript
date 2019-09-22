<?php 
include('rsa.php');
?>
<html>
<body>

<h1>Lab 8 Demo 2: PHP RSA test</h1>
<?php

// set the plaintext
$plaintext = 'hello world';
echo 'Plain text: ' . $plaintext."<br/><br/><br/>";

// Get the public Key
$publicKey = get_rsa_publickey('public.key');

// compute the ciphertext
$encrypted = rsa_encryption($plaintext, $publicKey);
echo $encrypted."<br/><br/><br/>";

// Get the private Key
$privateKey = get_rsa_privatekey('private.key');

// compute the decrypted value
$decrypted = rsa_decryption($encrypted, $privateKey);

echo 'Unencrypted Data: ' . $decrypted;
?>
</body>
</html>
