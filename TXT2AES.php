<?php

// GNU Lesser General Public License (LGPL) v3.0 .
// An open source project created by Saman Ebrahimnezhad .
// Created at Iran (IR) .
// PHP 7 .

class TXT2AES {

    private $encrypted = NULL; // Encrypted text
    private $decrypted = NULL; // Decrypted and normal text
    private $iv = NULL; // Initialization vector
    private $key = NULL; // Encryption key

    function __construct($encrypted, $iv, $key) {
        
        // If you want to decrypt use this when you want to create an object

        $this->encrypted = $encrypted;
        $this->iv = $iv;
        $this->key = $key;

    }

    function __construct($txt) {

        // If you want to encrypt use this when you want to create an object

        $this->decrypted = $txt;
    }

    function encryptWithRandomKey() {

        // If was success returns TRUE

        if($this->decrypted != NULL) {

            define('AES_256_CBC', 'aes-256-cbc');

            $this->key = openssl_random_pseudo_bytes(32);

            $this->iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

            $this->encrypted = openssl_encrypt($this->decrypted, AES_256_CBC, $key, 0, $iv);

            return TRUE;

        }

        return FALSE;

    }

    function encryptWithKey($key) {
        
        // If was success returns TRUE

    }

    function decrypt() {

        // If was success returns TRUE

        if($this->encrypted != NULL) {

            define('AES_256_CBC', 'aes-256-cbc');

            $this->decrypted = openssl_decrypt($this->encrypted, AES_256_CBC, $this->key, 0, base64_decode($this->iv));

            return TRUE;

        }

        return FALSE;

    }

}

?>