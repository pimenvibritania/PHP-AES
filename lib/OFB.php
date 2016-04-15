<?php declare(strict_types = 1);

namespace AES;

use AES\Context\OFB\{
    Context,
    EncryptionContext,
    DecryptionContext
};
use AES\Exception\IVLengthException;

class OFB extends Cipher
{
    private function init($context, Key $key, string $iv)
    {
        if (strlen($iv) !== 16) {
            throw new IVLengthException;
        }

        $context->key = $key;
        $context->iv = $iv;
    }

    function initEncryption(Key $key, string $iv): EncryptionContext
    {
        $context = new EncryptionContext;
        $this->init($context, $key, $iv);
        return $context;
    }

    function initDecryption(Key $key, string $iv): DecryptionContext
    {
        $context = new DecryptionContext;
        $this->init($context, $key, $iv);
        return $context;
    }

    private function transcrypt(Context $context, string $message): string
    {
        $iv = $context->iv;
        $keyStream = $context->keyStream;

        $bytesRequired = strlen($message) - strlen($keyStream);
        $bytesOver = $bytesRequired % 16;

        $blockCount = ($bytesRequired >> 4) + ($bytesOver > 0);
        while ($blockCount--) {
            $iv = $this->encryptBlock($context->key, $iv);
            $keyStream .= $iv;
        }

        $context->buffer = substr($keyStream, $bytesRequired);
        $context->iv = $iv;

        return $message ^ $keyStream;
    }

    function encrypt(EncryptionContext $context, string $message): string
    {
        return $this->transcrypt($context, $message);
    }

    function decrypt(DecryptionContext $context, string $message): string
    {
        return $this->transcrypt($context, $message);
    }
} 