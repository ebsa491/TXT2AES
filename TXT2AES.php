<?php

// GNU Lesser General Public License (LGPL) v3.0 .
// The project has been developed by Saman Ebrahimnezhad .
// Created at Iran (IR) .
// PHP 7 .

define('AES_256_CBC', 'aes-256-cbc');

class TXT2AES {

    private $encrypted = NULL; // Encrypted text
    private $decrypted = NULL; // Decrypted and normal text
    private $iv = NULL; // Initialization vector
    private $key = NULL; // Encryption key

    function getEncrypted() {
        return $this->encrypted;
    }

    function getDecrypted() {
        return $this->decrypted;
    }

    function getKey() {
        return $this->key;
    }

    function getIV() {
        return $this->iv;
    }

    function encrypt($data, $key = NULL, $iv = NULL) {

        // If you want to encrypt use this
        // If you don't give key and iv parameters function makes a random key and a random iv
        // If was success returns TRUE

        $this->decrypted = $data;

        if($this->decrypted != NULL) {

            if($key != NULL) {
                if($iv != NULL) {

                    // encryptWithKeyAndIV : Encrypt with given key and given iv

                    $this->key = $key;

                    $this->iv = $iv;

                    $this->encrypted = openssl_encrypt($this->decrypted, AES_256_CBC, $this->key, 0, $this->iv);

                    return TRUE;

                } else {

                    // encryptWithKeyRandomIV : Encrypt with given key and random iv

                    $this->key = $key;
            
                    $this->iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));
            
                    $this->encrypted = openssl_encrypt($this->decrypted, AES_256_CBC, $this->key, 0, $this->iv);
            
                    return TRUE;

                }
            } else {

                // encryptWithRandomKeyAndIV : Encrypt with random key and random iv

                $this->key = openssl_random_pseudo_bytes(32);

                $this->iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

                $this->encrypted = openssl_encrypt($this->decrypted, AES_256_CBC, $this->key, 0, $this->iv);

                return TRUE;

            }

        }

        return FALSE;

    }

    function decrypt($encrypted, $key, $iv) {

        // If you want to decrypt use this
        // If was success returns TRUE

        $this->encrypted = $encrypted;
        $this->iv = $iv;
        $this->key = $key;

        if($this->encrypted != NULL && $this->key != NULL && $this->iv != NULL) {

            $this->decrypted = openssl_decrypt($this->encrypted, AES_256_CBC, $this->key, 0, $this->iv);

            return TRUE;

        }

        return FALSE;

    }

}

?>