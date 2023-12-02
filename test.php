<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XOR Encryption and Decryption</title>
</head>
<body>
<script>

// Function for XOR encryption
function encryptXOR(data, key) {
  let encryptedData = '';
  for (let i = 0; i < data.length; i++) {
    encryptedData += String.fromCharCode(data.charCodeAt(i) ^ key.charCodeAt(i % key.length));
  }
  return btoa(encryptedData);
}

// Function for XOR decryption
function decryptXOR(encryptedData, key) {
  encryptedData = atob(encryptedData);
  let decryptedData = '';
  for (let i = 0; i < encryptedData.length; i++) {
    decryptedData += String.fromCharCode(encryptedData.charCodeAt(i) ^ key.charCodeAt(i % key.length));
  }
  return decryptedData;
}

// Example usage
const secretKey = 'your-secret-key'; // Replace with a secure key

// Data to encrypt
const originalData = 'Hello, this is a secret message!';

// Encrypt the data
const encryptedData = encryptXOR(originalData, secretKey);
console.log('Encrypted Data:', encryptedData);

// Decrypt the data
const decryptedData = decryptXOR(encryptedData, secretKey);
console.log('Decrypted Data:', decryptedData);

</script>

</body>
</html>

<?php
include "include/dbfunctions.php";
echo dataDecrypt('KAMFCxIcCAo%3D');
?>
