<?php

# CAVS 11.1
# Config info for aes_values
# AESVS VarKey test data for OFB
# State : Encrypt and Decrypt
# Key Length : 128
# Generated on Fri Apr 22 15:11:59 2011

namespace AES\Test;

use AES\Mode\OFB;
use AES\Key;

class OFBVarKey128 extends \PHPUnit_Framework_TestCase
{
    function caseProvider()
    {
        return [
            ['80000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '0edd33d3c621e546455bd8ba1418bec8'],
            ['c0000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4bc3f883450c113c64ca42e1112a9e87'],
            ['e0000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '72a1da770f5d7ac4c9ef94d822affd97'],
            ['f0000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '970014d634e2b7650777e8e84d03ccd8'],
            ['f8000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f17e79aed0db7e279e955b5f493875a7'],
            ['fc000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9ed5a75136a940d0963da379db4af26a'],
            ['fe000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c4295f83465c7755e8fa364bac6a7ea5'],
            ['ff000000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b1d758256b28fd850ad4944208cf1155'],
            ['ff800000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '42ffb34c743de4d88ca38011c990890b'],
            ['ffc00000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9958f0ecea8b2172c0c1995f9182c0f3'],
            ['ffe00000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '956d7798fac20f82a8823f984d06f7f5'],
            ['fff00000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a01bf44f2d16be928ca44aaf7b9b106b'],
            ['fff80000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b5f1a33e50d40d103764c76bd4c6b6f8'],
            ['fffc0000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '2637050c9fc0d4817e2d69de878aee8d'],
            ['fffe0000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '113ecbe4a453269a0dd26069467fb5b5'],
            ['ffff0000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '97d0754fe68f11b9e375d070a608c884'],
            ['ffff8000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c6a0b3e998d05068a5399778405200b4'],
            ['ffffc000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'df556a33438db87bc41b1752c55e5e49'],
            ['ffffe000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '90fb128d3a1af6e548521bb962bf1f05'],
            ['fffff000000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '26298e9c1db517c215fadfb7d2a8d691'],
            ['fffff800000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a6cb761d61f8292d0df393a279ad0380'],
            ['fffffc00000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '12acd89b13cd5f8726e34d44fd486108'],
            ['fffffe00000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '95b1703fc57ba09fe0c3580febdd7ed4'],
            ['ffffff00000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'de11722d893e9f9121c381becc1da59a'],
            ['ffffff80000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6d114ccb27bf391012e8974c546d9bf2'],
            ['ffffffc0000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '5ce37e17eb4646ecfac29b9cc38d9340'],
            ['ffffffe0000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '18c1b6e2157122056d0243d8a165cddb'],
            ['fffffff0000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '99693e6a59d1366c74d823562d7e1431'],
            ['fffffff8000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6c7c64dc84a8bba758ed17eb025a57e3'],
            ['fffffffc000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e17bc79f30eaab2fac2cbbe3458d687a'],
            ['fffffffe000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1114bc2028009b923f0b01915ce5e7c4'],
            ['ffffffff000000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9c28524a16a1e1c1452971caa8d13476'],
            ['ffffffff800000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ed62e16363638360fdd6ad62112794f0'],
            ['ffffffffc00000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '5a8688f0b2a2c16224c161658ffd4044'],
            ['ffffffffe00000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '23f710842b9bb9c32f26648c786807ca'],
            ['fffffffff00000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '44a98bf11e163f632c47ec6a49683a89'],
            ['fffffffff80000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '0f18aff94274696d9b61848bd50ac5e5'],
            ['fffffffffc0000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '82408571c3e2424540207f833b6dda69'],
            ['fffffffffe0000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '303ff996947f0c7d1f43c8f3027b9b75'],
            ['ffffffffff0000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7df4daf4ad29a3615a9b6ece5c99518a'],
            ['ffffffffff8000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c72954a48d0774db0b4971c526260415'],
            ['ffffffffffc000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1df9b76112dc6531e07d2cfda04411f0'],
            ['ffffffffffe000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8e4d8e699119e1fc87545a647fb1d34f'],
            ['fffffffffff000000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'e6c4807ae11f36f091c57d9fb68548d1'],
            ['fffffffffff800000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8ebf73aad49c82007f77a5c1ccec6ab4'],
            ['fffffffffffc00000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '4fb288cc2040049001d2c7585ad123fc'],
            ['fffffffffffe00000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '04497110efb9dceb13e2b13fb4465564'],
            ['ffffffffffff00000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '75550e6cb5a88e49634c9ab69eda0430'],
            ['ffffffffffff80000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b6768473ce9843ea66a81405dd50b345'],
            ['ffffffffffffc0000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'cb2f430383f9084e03a653571e065de6'],
            ['ffffffffffffe0000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ff4e66c07bae3e79fb7d210847a3b0ba'],
            ['fffffffffffff0000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7b90785125505fad59b13c186dd66ce3'],
            ['fffffffffffff8000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8b527a6aebdaec9eaef8eda2cb7783e5'],
            ['fffffffffffffc000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '43fdaf53ebbc9880c228617d6a9b548b'],
            ['fffffffffffffe000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '53786104b9744b98f052c46f1c850d0b'],
            ['ffffffffffffff000000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b5ab3013dd1e61df06cbaf34ca2aee78'],
            ['ffffffffffffff800000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7470469be9723030fdcc73a8cd4fbb10'],
            ['ffffffffffffffc00000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a35a63f5343ebe9ef8167bcb48ad122e'],
            ['ffffffffffffffe00000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'fd8687f0757a210e9fdf181204c30863'],
            ['fffffffffffffff00000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7a181e84bd5457d26a88fbae96018fb0'],
            ['fffffffffffffff80000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '653317b9362b6f9b9e1a580e68d494b5'],
            ['fffffffffffffffc0000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '995c9dc0b689f03c45867b5faa5c18d1'],
            ['fffffffffffffffe0000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '77a4d96d56dda398b9aabecfc75729fd'],
            ['ffffffffffffffff0000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '84be19e053635f09f2665e7bae85b42d'],
            ['ffffffffffffffff8000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '32cd652842926aea4aa6137bb2be2b5e'],
            ['ffffffffffffffffc000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '493d4a4f38ebb337d10aa84e9171a554'],
            ['ffffffffffffffffe000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd9bff7ff454b0ec5a4a2a69566e2cb84'],
            ['fffffffffffffffff000000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '3535d565ace3f31eb249ba2cc6765d7a'],
            ['fffffffffffffffff800000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f60e91fc3269eecf3231c6e9945697c6'],
            ['fffffffffffffffffc00000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ab69cfadf51f8e604d9cc37182f6635a'],
            ['fffffffffffffffffe00000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '7866373f24a0b6ed56e0d96fcdafb877'],
            ['ffffffffffffffffff00000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1ea448c2aac954f5d812e9d78494446a'],
            ['ffffffffffffffffff80000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'acc5599dd8ac02239a0fef4a36dd1668'],
            ['ffffffffffffffffffc0000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd8764468bb103828cf7e1473ce895073'],
            ['ffffffffffffffffffe0000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1b0d02893683b9f180458e4aa6b73982'],
            ['fffffffffffffffffff0000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '96d9b017d302df410a937dcdb8bb6e43'],
            ['fffffffffffffffffff8000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ef1623cc44313cff440b1594a7e21cc6'],
            ['fffffffffffffffffffc000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '284ca2fa35807b8b0ae4d19e11d7dbd7'],
            ['fffffffffffffffffffe000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f2e976875755f9401d54f36e2a23a594'],
            ['ffffffffffffffffffff000000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ec198a18e10e532403b7e20887c8dd80'],
            ['ffffffffffffffffffff800000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '545d50ebd919e4a6949d96ad47e46a80'],
            ['ffffffffffffffffffffc00000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dbdfb527060e0a71009c7bb0c68f1d44'],
            ['ffffffffffffffffffffe00000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9cfa1322ea33da2173a024f2ff0d896d'],
            ['fffffffffffffffffffff00000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '8785b1a75b0f3bd958dcd0e29318c521'],
            ['fffffffffffffffffffff80000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '38f67b9e98e4a97b6df030a9fcdd0104'],
            ['fffffffffffffffffffffc0000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '192afffb2c880e82b05926d0fc6c448b'],
            ['fffffffffffffffffffffe0000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6a7980ce7b105cf530952d74daaf798c'],
            ['ffffffffffffffffffffff0000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ea3695e1351b9d6858bd958cf513ef6c'],
            ['ffffffffffffffffffffff8000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6da0490ba0ba0343b935681d2cce5ba1'],
            ['ffffffffffffffffffffffc000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f0ea23af08534011c60009ab29ada2f1'],
            ['ffffffffffffffffffffffe000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ff13806cf19cc38721554d7c0fcdcd4b'],
            ['fffffffffffffffffffffff000000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '6838af1f4f69bae9d85dd188dcdf0688'],
            ['fffffffffffffffffffffff800000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '36cf44c92d550bfb1ed28ef583ddf5d7'],
            ['fffffffffffffffffffffffc00000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'd06e3195b5376f109d5c4ec6c5d62ced'],
            ['fffffffffffffffffffffffe00000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c440de014d3d610707279b13242a5c36'],
            ['ffffffffffffffffffffffff00000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f0c5c6ffa5e0bd3a94c88f6b6f7c16b9'],
            ['ffffffffffffffffffffffff80000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '3e40c3901cd7effc22bffc35dee0b4d9'],
            ['ffffffffffffffffffffffffc0000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b63305c72bedfab97382c406d0c49bc6'],
            ['ffffffffffffffffffffffffe0000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '36bbaab22a6bd4925a99a2b408d2dbae'],
            ['fffffffffffffffffffffffff0000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '307c5b8fcd0533ab98bc51e27a6ce461'],
            ['fffffffffffffffffffffffff8000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '829c04ff4c07513c0b3ef05c03e337b5'],
            ['fffffffffffffffffffffffffc000000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'f17af0e895dda5eb98efc68066e84c54'],
            ['fffffffffffffffffffffffffe000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '277167f3812afff1ffacb4a934379fc3'],
            ['ffffffffffffffffffffffffff000000', '00000000000000000000000000000000', '00000000000000000000000000000000', '2cb1dc3a9c72972e425ae2ef3eb597cd'],
            ['ffffffffffffffffffffffffff800000', '00000000000000000000000000000000', '00000000000000000000000000000000', '36aeaa3a213e968d4b5b679d3a2c97fe'],
            ['ffffffffffffffffffffffffffc00000', '00000000000000000000000000000000', '00000000000000000000000000000000', '9241daca4fdd034a82372db50e1a0f3f'],
            ['ffffffffffffffffffffffffffe00000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'c14574d9cd00cf2b5a7f77e53cd57885'],
            ['fffffffffffffffffffffffffff00000', '00000000000000000000000000000000', '00000000000000000000000000000000', '793de39236570aba83ab9b737cb521c9'],
            ['fffffffffffffffffffffffffff80000', '00000000000000000000000000000000', '00000000000000000000000000000000', '16591c0f27d60e29b85a96c33861a7ef'],
            ['fffffffffffffffffffffffffffc0000', '00000000000000000000000000000000', '00000000000000000000000000000000', '44fb5c4d4f5cb79be5c174a3b1c97348'],
            ['fffffffffffffffffffffffffffe0000', '00000000000000000000000000000000', '00000000000000000000000000000000', '674d2b61633d162be59dde04222f4740'],
            ['ffffffffffffffffffffffffffff0000', '00000000000000000000000000000000', '00000000000000000000000000000000', 'b4750ff263a65e1f9e924ccfd98f3e37'],
            ['ffffffffffffffffffffffffffff8000', '00000000000000000000000000000000', '00000000000000000000000000000000', '62d0662d6eaeddedebae7f7ea3a4f6b6'],
            ['ffffffffffffffffffffffffffffc000', '00000000000000000000000000000000', '00000000000000000000000000000000', '70c46bb30692be657f7eaa93ebad9897'],
            ['ffffffffffffffffffffffffffffe000', '00000000000000000000000000000000', '00000000000000000000000000000000', '323994cfb9da285a5d9642e1759b224a'],
            ['fffffffffffffffffffffffffffff000', '00000000000000000000000000000000', '00000000000000000000000000000000', '1dbf57877b7b17385c85d0b54851e371'],
            ['fffffffffffffffffffffffffffff800', '00000000000000000000000000000000', '00000000000000000000000000000000', 'dfa5c097cdc1532ac071d57b1d28d1bd'],
            ['fffffffffffffffffffffffffffffc00', '00000000000000000000000000000000', '00000000000000000000000000000000', '3a0c53fa37311fc10bd2a9981f513174'],
            ['fffffffffffffffffffffffffffffe00', '00000000000000000000000000000000', '00000000000000000000000000000000', 'ba4f970c0a25c41814bdae2e506be3b4'],
            ['ffffffffffffffffffffffffffffff00', '00000000000000000000000000000000', '00000000000000000000000000000000', '2dce3acb727cd13ccd76d425ea56e4f6'],
            ['ffffffffffffffffffffffffffffff80', '00000000000000000000000000000000', '00000000000000000000000000000000', '5160474d504b9b3eefb68d35f245f4b3'],
            ['ffffffffffffffffffffffffffffffc0', '00000000000000000000000000000000', '00000000000000000000000000000000', '41a8a947766635dec37553d9a6c0cbb7'],
            ['ffffffffffffffffffffffffffffffe0', '00000000000000000000000000000000', '00000000000000000000000000000000', '25d6cfe6881f2bf497dd14cd4ddf445b'],
            ['fffffffffffffffffffffffffffffff0', '00000000000000000000000000000000', '00000000000000000000000000000000', '41c78c135ed9e98c096640647265da1e'],
            ['fffffffffffffffffffffffffffffff8', '00000000000000000000000000000000', '00000000000000000000000000000000', '5a4d404d8917e353e92a21072c3b2305'],
            ['fffffffffffffffffffffffffffffffc', '00000000000000000000000000000000', '00000000000000000000000000000000', '02bc96846b3fdc71643f384cd3cc3eaf'],
            ['fffffffffffffffffffffffffffffffe', '00000000000000000000000000000000', '00000000000000000000000000000000', '9ba4a9143f4e5d4048521c4f8877d88e'],
            ['ffffffffffffffffffffffffffffffff', '00000000000000000000000000000000', '00000000000000000000000000000000', 'a1f6258c877d5fcd8964484538bfc92c']
        ];
    }

    /**
     * @dataProvider caseProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ofb = new OFB;
        $ctx = $ofb->init($key, hex2bin($iv));
        $result = $ofb->encrypt($ctx, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider caseProvider
     */
    function testDecrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ofb = new OFB;
        $ctx = $ofb->init($key, hex2bin($iv));
        $result = $ofb->decrypt($ctx, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}
