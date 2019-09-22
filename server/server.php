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
echo 'Received data' . $input;
echo '<br></br>Unencrypted Data: ' . $decrypted;

$file = fopen("../database/database.txt","a");
//insert this input (plus a newline) into the database.txt
fwrite($file, $decrypted."\n");
fclose($file);

echo '<br></br> Data added to database '
?>
</body>
</html>
