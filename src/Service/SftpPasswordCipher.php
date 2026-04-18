<?php
// src/Service/SftpPasswordCipher.php
namespace App\Service;

class SftpPasswordCipher
{
    public function __construct(private string $appSecret) {}

    public function encrypt(string $plain): string
    {
        $key = substr(hash('sha256', $this->appSecret, true), 0, 32);
        $iv = substr(hash('sha256', 'sftp_iv_'.$this->appSecret, true), 0, 16);

        return base64_encode(
            openssl_encrypt($plain, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv)
        );
    }

    public function decrypt(string $encrypted): string
    {
        $key = substr(hash('sha256', $this->appSecret, true), 0, 32);
        $iv = substr(hash('sha256', 'sftp_iv_'.$this->appSecret, true), 0, 16);

        return openssl_decrypt(
            base64_decode($encrypted),
            'AES-256-CBC',
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
    }
}
