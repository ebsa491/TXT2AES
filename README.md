# TXT2AES
A PHP program that encrypts any text with AES and can decrypt that too (PHP 7 used) .

[![Build Status](https://img.shields.io/badge/build-passing-success)](https://samebison.ir)
[![PHP: 7.0](https://img.shields.io/badge/php-7.0-blueviolet)](https://php.net)
[![License: LGPL](https://img.shields.io/badge/license-LGPL--3.0-informational)](https://www.gnu.org/licenses/lgpl-3.0)

## AES

The Advanced Encryption Standard (AES), also known by its original name Rijndael (Dutch pronunciation: [ˈrɛindaːl]), is a specification for the encryption of electronic data established by the U.S. National Institute of Standards and Technology (NIST) in 2001.

[WikipediA](https://en.wikipedia.org/wiki/Advanced_Encryption_Standard)

This program use ***AES-CBC*** algorithm for encryption so a key and an IV is required.

## Usage

### Encryption with random key and random IV

```PHP 
...

include 'TXT2AES.php';

$txt2aes = new TXT2AES();

if($txt2aes->encrypt("Hello world")) {

    echo $txt2aes->getDecrypted();
    echo "<br/>";
    echo $txt2aes->getKey();
    echo "<br/>";
    echo $txt2aes->getIV();
    echo "<br/>";
    echo $txt2aes->getEncrypted();
    echo "<br/>";
    
}

...

```

### Encryption with given key and random IV

```PHP 
...

include 'TXT2AES.php';

$txt2aes = new TXT2AES();

$key = "/B?E(H+KbPeShVmYq3t6w9z#C&F)J@Nc";

if($txt2aes->encrypt("Hello again", $key)) {
    
    echo $txt2aes->getDecrypted();
    echo "<br/>";
    echo $txt2aes->getKey();
    echo "<br/>";
    echo $txt2aes->getIV();
    echo "<br/>";
    echo $txt2aes->getEncrypted();
    echo "<br/>";
    
}

...

```

### Encryption with given key and given IV

```PHP 
...

include 'TXT2AES.php';

$txt2aes = new TXT2AES();

$key = "/B?E(H+KbPeShVmYq3t6w9z#C&F)J@Nc";

$iv = "202e 235s 3242 234v 23v4";

if($txt2aes->encrypt("Hello for last time", $key, $iv)) {
    
    echo $txt2aes->getDecrypted();
    echo "<br/>";
    echo $txt2aes->getKey();
    echo "<br/>";
    echo $txt2aes->getIV();
    echo "<br/>";
    echo $txt2aes->getEncrypted();
    echo "<br/>";
    
}

...

```

### Decryption

```PHP 
...

include 'TXT2AES.php';

$txt2aes = new TXT2AES();

$encrypted = "fDc9U5CNv9PugUy46zLVJrsOgIlBMWq62a99UCZjBmA=";
$key = "/B?E(H+KbPeShVmYq3t6w9z#C&F)J@Nc";
$iv = "202e 235s 3242 234v 23v4";

if($txt2aes->decrypt($encrypted, $key, $iv)) {
    echo "DECRYPTION:\n";
    echo $txt2aes->getDecrypted();
}

...

```

## Index

- [TXT2AES class]()
  - [$encrypted]()
  - [$decrypted]()
  - [$iv]()
  - [$key]()
  - [getEncrypted()]()
  - [getDecrypted()]()
  - [getKey()]()
  - [getIV()]()
  - [encrypt($data, $key = NULL, $iv = NULL)]()
  - [decrypt($encrypted, $key, $iv)]()

### TXT2AES class

The main class of ***TXT2AES*** project. You should use this class for encryption and decryption.

### $encrypted

A private variable that keeps the encrypted text.

### $decrypted

A private variable that keeps the decrypted text and the plain text too.

### $iv

A private variable that keeps the initialization vector.

### $key

A private variable that keeps the encryption key.

### getEncrypted()

A function that returns $encrypted variable for public usage.


### getDecrypted()

A function that returns $decrypted variable for public usage.

### getKey()

A function that returns $key variable for public usage.

### getIV()

A function that returns $iv variable for public usage.

### encrypt($data, $key = NULL, $iv = NULL)

The encryption function with three parameters: 
* **$data** gets the plain text
* **$key** is an optional parameter that gets your key for encryption (if you don't fill it the function will generate a random key and iv)
* **$iv** is an optional parameter that gets your initialization vector (IV) for encryption (if you don't fill it the IV will be random)

**Note:** This function returns ```TRUE``` when the encryption was successful and returns ```FALSE``` when was not.

**Note:** If the encryption was successful you can get the properties with getter functions.

### decrypt($encrypted, $key, $iv)

The decryption function with three parameters:
* **$encrypted** gets your encrypted text
* **$key** gets your key for decryption
* **$iv** gets your initialization vector (IV)

**Note:** This function returns ```TRUE``` when the decryption was successful and returns ```FALSE``` when was not.

**Note:** If the decryption was successful you can get the properties with getter functions.

## Other

&#127279; GNU Lesser General Public License (LGPL) v3.0 .

An open source project created by Saman Ebrahimnezhad .

Created in Iran (IR) .

PHP 7 .
