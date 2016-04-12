<?php declare(strict_types = 1);

namespace AES\Mode;

use AES\Cipher;
use AES\Context\CBC as Context;
use AES\Exception\InvalidContextException;
use AES\Exception\IVLengthException;
use AES\Key;

class CBC extends Cipher
{
    function init(Key $key, string $iv): Context
    {
        if (strlen($iv) !== 16) {
            throw new IVLengthException;
        }

        $ctx = new Context;

        $ctx->key = $key;
        $ctx->state = $iv;

        return $ctx;
    }

    function encrypt(Context $ctx, string $message): string
    {
        if ($ctx->mode === Context::MODE_DECRYPT) {
            throw new InvalidContextException('Decryption context supplied to encryption method');
        }
        $ctx->mode = Context::MODE_ENCRYPT;
        
        $offset = 0;
        $out = '';
        $iv = $ctx->state;

        $blocks = strlen($message) >> 4;
        while ($blocks--) {
            $out .= $iv = $this->encryptBlock($ctx->key, substr($message, $offset, 16) ^ $iv);
            $offset += 16;
        }

        $ctx->state = $iv;

        return $out;
    }

    function decrypt(Context $ctx, string $message): string
    {
        if ($ctx->mode === Context::MODE_ENCRYPT) {
            throw new InvalidContextException('Encryption context supplied to decryption method');
        }
        $ctx->mode = Context::MODE_DECRYPT;

        $offset = 0;
        $out = '';
        $iv = $ctx->state;

        $blocks = strlen($message) >> 4;
        while ($blocks--) {
            $out .= $this->decryptBlock($ctx->key, $block = substr($message, $offset, 16)) ^ $iv;
            $iv = $block;
            $offset += 16;
        }

        $ctx->state = $iv;

        return $out;
    }
}
