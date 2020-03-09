<?php 

// GNU Lesser General Public License (LGPL) v3.0 .
// An open source project created by Saman Ebrahimnezhad .
// Created at Iran (IR) .
// PHP 7 .

// This is the example of TXT2AES usage : First include TXT2AES.php file then declare an object of TXT2AES class then can work with that.

include 'TXT2AES.php';

$txt2aes = new TXT2AES();

// Encrypt with random key and random iv

if($txt2aes->encrypt("Hello world")) {
    echo "1:\n";
    echo $txt2aes->getDecrypted();
    echo "<br/>";
    echo $txt2aes->getKey();
    echo "<br/>";
    echo $txt2aes->getIV();
    echo "<br/>";
    echo $txt2aes->getEncrypted();
    echo "<br/>";
}

// Encrypt with given key and random iv

$key = "/B?E(H+KbPeShVmYq3t6w9z#C&F)J@Nc";

if($txt2aes->encrypt("Hello again", $key)) {
    echo "2:\n";
    echo $txt2aes->getDecrypted();
    echo "<br/>";
    echo $txt2aes->getKey();
    echo "<br/>";
    echo $txt2aes->getIV();
    echo "<br/>";
    echo $txt2aes->getEncrypted();
    echo "<br/>";
}

// Encrypt with given key and given iv

$key = "/B?E(H+KbPeShVmYq3t6w9z#C&F)J@Nc";

$iv = "202e 235s 3242 234v 23v4";

if($txt2aes->encrypt("Hello for last time", $key, $iv)) {
    echo "3:\n";
    echo $txt2aes->getDecrypted();
    echo "<br/>";
    echo $txt2aes->getKey();
    echo "<br/>";
    echo $txt2aes->getIV();
    echo "<br/>";
    echo $txt2aes->getEncrypted();
    echo "<br/>";
}


// Decryption

$encrypted = "fDc9U5CNv9PugUy46zLVJrsOgIlBMWq62a99UCZjBmA=";
$key = "/B?E(H+KbPeShVmYq3t6w9z#C&F)J@Nc";
$iv = "202e 235s 3242 234v 23v4";

if($txt2aes->decrypt($encrypted, $key, $iv)) {
    echo "DECRYPTION:\n";
    echo $txt2aes->getDecrypted();
}

?>