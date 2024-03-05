
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - String/Decimal Encrypt or Decrypt in PHP</title>
</head>
<body>
    
<h1 style="text-align: center;">String/Decimal Encrypt or Decrypt in PHP</h1>
<?php  
// making hex_key 
$str = "secret_key";
echo "Hex Key: ".bin2hex($str);

// Including Encryption file 
require('_ENCRYPTION.php');
//DATA For Encryption or Decryption
$string_pin="000000";
// Encrypting
echo "<br><br>Encrypted DATA: ".$encrypted_value= ENCREYPTION::ENCODE($string_pin);
//Decrypting 
echo "<br><br>Decrypted DATA: ".$decrypted_value= ENCREYPTION::DECODE($encrypted_value);



?>



</body>
</html>