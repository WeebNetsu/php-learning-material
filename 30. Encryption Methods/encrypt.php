<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

/* 
    MD5 is useful encryption method, it is oneway, meaning once it is encrypted, you cannot decrypt it.

    NOTE that MD5 is no longer secure to be used for passwords
    MD5 can still be used to generate checksums to verify file integrity
*/
$password1 = "123pass";
// md5() -> encrypts string
$md5 = md5($password1);

echo "Password before encryption: $password1 <br> Password after encryption: $md5 <br>";

echo "<br>";

/* 
    For more secure password hashing, you should instead use sha256. Note that sha256 is also just oneway encryption
*/
$password2 = "123pass"; // The data you want to encrypt

$sha256 = hash('sha256', $password2); // Perform SHA-256 encryption

echo "Password before encryption: $password2 <br> Password after encryption: $sha256";

echo "<br>";

/* 
    To compare a one way encrypted password to an entered password, the entered password will need to be encrypted
    and then. Usually you will also have a seed (like a secret key to the code) that is required to hash the password.
    Note that if you ever use a seed, that you should never lose it, or you will lose access to anything you encrypted
    thus far
*/

// this is a 2-way encryption, for encrypting and decrypting data
$password3 = "123pass"; // The data to be encrypted

$key = "MySecretKey"; // The encryption key

// an IV is used to ensure the randomness of the encrypted value, so it cannot be easily decrypted
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc')); // Generate a random IV (Initialization Vector)

// aes-256-cbc - the encryption method
// $key - basically the password for the encryption, do not lose
// OPENSSL_RAW_DATA - specify how to work with the data passed into the encryption function
// $iv - Initialization Vector - the starting point for the encryption and its randomness, do not lose it
// note that the iv does not need to be stored as securely, however, every encryption operation
// is required to have a unique iv to ensure it is secure
$cipher = openssl_encrypt($password3, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv); // Encrypt the password3

// note that the key and iv are provided, they should not be lost, or you cannot decrypt
$decrypted = openssl_decrypt($cipher, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv); // Decrypt the cipher

echo "<br>";
echo "Encrypted: " . base64_encode($cipher) . "<br>";
echo "Decrypted: " . $decrypted;
?>