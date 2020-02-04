## Project :  A Basic example of RSA encryption
This is a web project to demonstrate RSA encryption on a text input at the client side and decrypting the encryption at the server.  

Step 1:  Import Script
Add the rsa.js script file as a script tag 
```
	<script src="rsa.js"></script>
```


Step 2: Place Method trigger 

When submitting your form on a  onClick event, you will probably have something like this: 
```
<button type="submit" onclick="RSA_encryption()">Encrypt message</button>
```
Step 3 : Design Method 
```
function RSA_encryption() {
			var plaintext = document.getElementById("message").value;
			var pubilc_key = "";
            var encrypt = new JSEncrypt();
			encrypt.setPublicKey(pubilc_key);
			var encrypted = encrypt.encrypt(plaintext);
			document.getElementById("message").value = encrypted;
  //          console.log(document.getElementById("message").value );
			// Encrypt with the public key...
			// fetch('../public.key')
			//  .then(response => response.text())
			// .then(text => console.log(text))	
		}
    
    ```
Setp 4: Decryption with PHP
Explore server.php file. Should be self explanatory .



