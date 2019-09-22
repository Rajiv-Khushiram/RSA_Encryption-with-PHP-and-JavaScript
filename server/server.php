<?php 
include('rsa.php');
?>
<html>
<body>

<h1>Lab 8 Demo 2: PHP RSA test</h1>
<?php   

// set the plaintext
$input = $_POST['message'];
//echo $input;
// compute the ciphertext
// Get the private Key

$privateKey  = file_get_contents('./private.key');
// compute the decrypted value
$decrypted = rsa_decryption($input, $privateKey);

echo 'Unencrypted Data: ' . $decrypted;
?>
</body>
</html>
