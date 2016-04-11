<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MCT test data for OFB
# State : Encrypt and Decrypt
# Key Length : 256
# Generated on Fri Apr 22 15:12:03 2011

namespace AES\Test;

use AES\Mode\OFB;
use AES\Key;

class OFBMCT256 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['b46129976d3fb9a83b10d3f6bb928a5b2e8fd00ec10fdf7513ccd83af1e6aaa1', '39c6a3ab26ae170921c503fc62ec0ba9', '7a644b53ef2cb607328c63dd61321515', '0e865252917d7a10547480988fe3f80e'],
            ['9336d1d84a26bf77c866b7526fd3607a2009825c5072a56547b858a27e0552af', '0e865252917d7a10547480988fe3f80e', '2757f84f271906dff37664a4d441ea21', 'c4c13f49860e427bd12af7f2271a0f20'],
            ['8f5bca03aa7672bda813187e66b13f79e4c8bd15d67ce71e9692af50591f5d8f', 'c4c13f49860e427bd12af7f2271a0f20', '1c6d1bdbe050cdca6075af2c09625f03', '279bb28c1391203dd1d05e7cd9280015'],
            ['ef39eb2fe78dedaef0950fb851c103efc3530f99c5edc7234742f12c80375d9a', '279bb28c1391203dd1d05e7cd9280015', '6062212c4dfb9f13588617c637703c96', '2cc50d62e9de131a43080b88b0289da8'],
            ['f65b449ac1b786b255fbb78a75ba3accef9602fb2c33d439044afaa4301fc032', '2cc50d62e9de131a43080b88b0289da8', '1962afb5263a6b1ca56eb832247b3923', '72d4ae84c5bd29007b1903646d79cbe2'],
            ['76df207b7af7f6bc473ebad885df289e9d42ac7fe98efd397f53f9c05d660bd0', '72d4ae84c5bd29007b1903646d79cbe2', '808464e1bb40700e12c50d52f0651252', '1caa928b78383edeaf66dc259d658732'],
            ['c8ae2a52284cb2bc2cfca7b6f375416581e83ef491b6c3e7d03525e5c0038ce2', '1caa928b78383edeaf66dc259d658732', 'be710a2952bb44006bc21d6e76aa69fb', '386109ad358a96ce54b02d964017ef03'],
            ['ccc4e31232fa2e076989526c5eb81398b9893759a43c552984850873801463e1', '386109ad358a96ce54b02d964017ef03', '046ac9401ab69cbb4575f5daadcd52fd', '9b1c64dc5e06f6489dd6e8aeceb46334'],
            ['2d231f53386bc82a3ac9077a3daec7ca22955385fa3aa3611953e0dd4ea000d5', '9b1c64dc5e06f6489dd6e8aeceb46334', 'e1e7fc410a91e62d534055166316d452', '93a4ecffb4df4fc2d59c47e2cfd93e15'],
            ['81977733efc3dceb6a495b8ea360fe66b131bf7a4ee5eca3cccfa73f81793ec0', '93a4ecffb4df4fc2d59c47e2cfd93e15', 'acb46860d7a814c150805cf49ece39ac', '4440e7ab52b0792d7e58b2924e9dd0ff'],
            ['12a65f8a897a5d9cc79a4ca0360e2460f57158d11c55958eb29715adcfe4ee3f', '4440e7ab52b0792d7e58b2924e9dd0ff', '933128b966b98177add3172e956eda06', '47dc817d9db4ec0be9cfa7f35dfb703e'],
            ['85e1da0755e16d989d56aaff3a6759ccb2add9ac81e179855b58b25e921f9e01', '47dc817d9db4ec0be9cfa7f35dfb703e', '9747858ddc9b30045acce65f0c697dac', 'b0e602a8812ae142a605c7ab90c73306'],
            ['9656917e65bb400529b735b34fc55130024bdb0400cb98c7fd5d75f502d8ad07', 'b0e602a8812ae142a605c7ab90c73306', '13b74b79305a2d9db4e19f4c75a208fc', 'd3bef9c7bc9de0c5136242ed49295095'],
            ['777e68c1a04ac446f6bbe6c1b8af43d6d1f522c3bc567802ee3f37184bf1fd92', 'd3bef9c7bc9de0c5136242ed49295095', 'e128f9bfc5f18443df0cd372f76a12e6', '4126ec33e8e4e992c2f7cf349b3ae3a7'],
            ['b072423d2001b860c2a7f1d1bc483afd90d3cef054b291902cc8f82cd0cb1e35', '4126ec33e8e4e992c2f7cf349b3ae3a7', 'c70c2afc804b7c26341c171004e7792b', '658c9edc780d4c95ff3dde95b3966bbd'],
            ['0f8bd24458f21306676953b23fd02b2cf55f502c2cbfdd05d3f526b9635d7588', '658c9edc780d4c95ff3dde95b3966bbd', 'bff9907978f3ab66a5cea263839811d1', '3d52cf297d70ec8b8664b39971c59f29'],
            ['b48908e68454676beece1631ef08bbc1c80d9f0551cf318e559195201298eaa1', '3d52cf297d70ec8b8664b39971c59f29', 'bb02daa2dca6746d89a74583d0d890ed', 'bee97cfb543aa88fa529333a919d17a6'],
            ['44ec55b2d69ad3d2fcf7ad7f50d2a7ef76e4e3fe05f59901f0b8a61a8305fd07', 'bee97cfb543aa88fa529333a919d17a6', 'f0655d5452ceb4b91239bb4ebfda1c2e', '018ea25488250ce3e63641fedf4bc61d'],
            ['53de14ec439244ab0ee4716c1348c7b6776a41aa8dd095e2168ee7e45c4e3b1a', '018ea25488250ce3e63641fedf4bc61d', '1732415e95089779f213dc13439a6059', 'e71b6d6ae6559691ef78a6e3838635a6'],
            ['fccb08f93da3b6847c3007ccf9630dd890712cc06b850373f9f64107dfc80ebc', 'e71b6d6ae6559691ef78a6e3838635a6', 'af151c157e31f22f72d476a0ea2bca6e', 'b29da4db11b83b4f67915d37e708d06d'],
            ['f721d7a2f339aca5614a7d1804c353ae22ec881b7a3d383c9e671c3038c0ded1', 'b29da4db11b83b4f67915d37e708d06d', '0beadf5bce9a1a211d7a7ad4fda05e76', '47d2f39c447ee5fc6077a0349ae54530'],
            ['95c51e9a40c5378e81d8e123577c97a6653e7b873e43ddc0fe10bc04a2259be1', '47d2f39c447ee5fc6077a0349ae54530', '62e4c938b3fc9b2be0929c3b53bfc408', 'c7a96313bdef8684ce01610e64597278'],
            ['7a0bd429e24530409d212877d1edad5ca297189483ac5b443011dd0ac67ce999', 'c7a96313bdef8684ce01610e64597278', 'efcecab3a28007ce1cf9c95486913afa', '29cc20c3624bcd2b2cbba0ee9d4b4fa6'],
            ['acde3bfb0dde00081a91ce4b0ac0d28c8b5b3857e1e7966f1caa7de45b37a63f', '29cc20c3624bcd2b2cbba0ee9d4b4fa6', 'd6d5efd2ef9b304887b0e63cdb2d7fd0', '9e718306e73448d97f4ae297bf70a667'],
            ['ff32dcbbbef2dfe57d75cd5b9bcec117152abb5106d3deb663e09f73e4470058', '9e718306e73448d97f4ae297bf70a667', '53ece740b32cdfed67e40310910e139b', '553de328a3e6a51dd368346a29476c3d'],
            ['5c44fdd621eb005635fec41918ffcd5740175879a5357babb088ab19cd006c65', '553de328a3e6a51dd368346a29476c3d', 'a376216d9f19dfb3488b094283310c40', 'ee1c85be6e383f41cd8c5bb9c6de650b'],
            ['37783c8d9cabc54144eb99b48057fe38ae0bddc7cb0d44ea7d04f0a00bde096e', 'ee1c85be6e383f41cd8c5bb9c6de650b', '6b3cc15bbd40c51771155dad98a8336f', 'a006ab97ac3d7949664b6052c60f368b'],
            ['67366b0e82450b0d426a4dbba829d7ef0e0d765067303da31b4f90f2cdd13fe5', 'a006ab97ac3d7949664b6052c60f368b', '504e57831eeece4c0681d40f287e29d7', 'cbfd93ffbd52f1ecabed91997192036c'],
            ['e426f385c94fba8a7af833252dc522aac5f0e5afda62cc4fb0a2016bbc433c89', 'cbfd93ffbd52f1ecabed91997192036c', '8310988b4b0ab18738927e9e85ecf545', '8b461584ccaf162b2b40064d733e986c'],
            ['62f014a76a7992352a70eb8b3bc731444eb6f02b16cdda649be20726cf7da4e5', '8b461584ccaf162b2b40064d733e986c', '86d6e722a33628bf5088d8ae160213ee', '06ea10b42a81e0421a83b1fe63afbfed'],
            ['b7611d3580570d5b297881e3dc2d3cd3485ce09f3c4c3a268161b6d8acd21b08', '06ea10b42a81e0421a83b1fe63afbfed', 'd5910992ea2e9f6e03086a68e7ea0d97', 'ce806af29e77f455720e22e20d37c6a1'],
            ['16609dff64b680c49ac82b27ffa023f486dc8a6da23bce73f36f943aa1e5dda9', 'ce806af29e77f455720e22e20d37c6a1', 'a10180cae4e18d9fb3b0aac4238d1f27', '18e622d4f64adf746df2347b371fa6d8'],
            ['9f04cfddbe2972e5cbe780b011d457949e3aa8b9547111079e9da04196fa7b71', '18e622d4f64adf746df2347b371fa6d8', '89645222da9ff221512fab97ee747460', '0e3e3c037f750990be7e89ef113af1a1'],
            ['f54ba679ad25038b58926a1e7f4233d4900494ba2b04189720e329ae87c08ad0', '0e3e3c037f750990be7e89ef113af1a1', '6a4f69a4130c716e9375eaae6e966440', '21b1cc7a88a4f1885ee000b6b679e6b1'],
            ['788fbff8d589dcd1992c8def86212df5b1b558c0a3a0e91f7e03291831b96c61', '21b1cc7a88a4f1885ee000b6b679e6b1', '8dc4198178acdf5ac1bee7f1f9631e21', 'cb543013362ef50fe1564256a7ff3f12'],
            ['cd64073cd430c7024a6b61361dbbd1077ae168d3958e1c109f556b4e96465373', 'cb543013362ef50fe1564256a7ff3f12', 'b5ebb8c401b91bd3d347ecd99b9afcf2', '2e94640d18886d5e45262239d73758ae'],
            ['5ad97f2f7feaaa07e0c4dfae27852eba54750cde8d06714eda73497741710bdd', '2e94640d18886d5e45262239d73758ae', '97bd7813abda6d05aaafbe983a3effbd', 'fea23bd01a312ee2cd4fa00ba85d4406'],
            ['22a4385b7ec3f54155f6223b6dec292faad7370e97375fac173ce97ce92c4fdb', 'fea23bd01a312ee2cd4fa00ba85d4406', '787d477401295f46b532fd954a690795', '16870921083904878aeeb523441e5b1e'],
            ['a55fb965504daf41ff4cc186d083c9d9bc503e2f9f0e5b2b9dd25c5fad3214c5', '16870921083904878aeeb523441e5b1e', '87fb813e2e8e5a00aabae3bdbd6fe0f6', 'f2388c3c067cf5985e2cab93eb06a2d3'],
            ['9b9dd18ae4559f67857299047c24dc7e4e68b2139972aeb3c3fef7cc4634b616', 'f2388c3c067cf5985e2cab93eb06a2d3', '3ec268efb41830267a3e5882aca715a7', 'db56429b6c88e1e332a7622fac5fb856'],
            ['f86814b44ada2a88ee6a6853dc8e7341953ef088f5fa4f50f15995e3ea6b0e40', 'db56429b6c88e1e332a7622fac5fb856', '63f5c53eae8fb5ef6b18f157a0aaaf3f', 'cd0649da4c54ff311fa162d34f9a6624'],
            ['5139609aa9cdbd54f664b0a9ec3141b35838b952b9aeb061eef8f730a5f16864', 'cd0649da4c54ff311fa162d34f9a6624', 'a951742ee31797dc180ed8fa30bf32f2', 'a3565fb850adb3da7282b72bf9c3f75a'],
            ['df78bc694dc37d5296463c02e4bc1d08fb6ee6eae90303bb9c7a401b5c329f3e', 'a3565fb850adb3da7282b72bf9c3f75a', '8e41dcf3e40ec00660228cab088d5cbb', '15330877dfb197bdd834e3a739928407'],
            ['76aaf1303dd67a38f51b8a737597b658ee5dee9d36b29406444ea3bc65a01b39', '15330877dfb197bdd834e3a739928407', 'a9d24d597015076a635db671912bab50', '4d589808ca671d54dc5dbcf71162049e'],
            ['0b16ca4b548f4fa5ce226e3bdb4aca51a3057695fcd5895298131f4b74c21fa7', '4d589808ca671d54dc5dbcf71162049e', '7dbc3b7b6959359d3b39e448aedd7c09', '4803dcd501481022ba7754399f21e81c'],
            ['556140fd046d96ec0e43b3bf23242923eb06aa40fd9d997022644b72ebe3f7bb', '4803dcd501481022ba7754399f21e81c', '5e778ab650e2d949c061dd84f86ee372', '791ba0c894b4f7aec78b5a39b9b3fc8a'],
            ['574b585b835fafdbd365e44829ececcf921d0a8869296edee5ef114b52500b31', '791ba0c894b4f7aec78b5a39b9b3fc8a', '022a18a687323937dd2657f70ac8c5ec', '69c14d39bedef0bde1894d031515f1ee'],
            ['90380963fb11e94d74038782fbc6b224fbdc47b1d7f79e6304665c484745fadf', '69c14d39bedef0bde1894d031515f1ee', 'c7735138784e4696a76663cad22a5eeb', 'cf5d786bae8580f9bb87066a6cf1430f'],
            ['8cef32b8df02fffd031eeb0c741eb23834813fda79721e9abfe15a222bb4b9d0', 'cf5d786bae8580f9bb87066a6cf1430f', '1cd73bdb241316b0771d6c8e8fd8001c', '30676e7a02f6446c2b06abe6f1a9eef7'],
            ['1ad682a809cc7fffac245c5b156d69c704e651a07b845af694e7f1c4da1d5727', '30676e7a02f6446c2b06abe6f1a9eef7', '9639b010d6ce8002af3ab7576173dbff', '9a4af659a4c16bbadd5cc5166f985331'],
            ['671d564d5a6b7d6123a73d7456a9dae99eaca7f9df45314c49bb34d2b5850416', '9a4af659a4c16bbadd5cc5166f985331', '7dcbd4e553a7029e8f83612f43c4b32e', 'fd1b93ea3fc4f1d47d5cbce67d436d5c'],
            ['31ec44b283ee420e03fdf519541b858a63b73413e081c09834e78834c8c6694a', 'fd1b93ea3fc4f1d47d5cbce67d436d5c', '56f112ffd9853f6f205ac86d02b25f63', '1f8e26076b455b8da68d94048d6ad050'],
            ['79fdb45fe342bc273763cf35a193cfe47c3912148bc49b15926a1c3045acb91a', '1f8e26076b455b8da68d94048d6ad050', '4811f0ed60acfe29349e3a2cf5884a6e', '19219319997612a4c6862689c95201cf'],
            ['3cba4d5aeb355575d3a60a7773fe76f76518810d12b289b154ec3ab98cfeb8d5', '19219319997612a4c6862689c95201cf', '4547f9050877e952e4c5c542d26db913', '996a1b7e07d324f7a6958d811673a3aa'],
            ['0b321c998d7230148e6e616f58c26febfc729a731561ad46f279b7389a8d1b7f', '996a1b7e07d324f7a6958d811673a3aa', '378851c3664765615dc86b182b3c191c', '5d2f9df99d59d8666ad216a011b254ee'],
            ['808a294b2bcf2091e27a82759ca41f36a15d078a8838752098aba1988b3f4f91', '5d2f9df99d59d8666ad216a011b254ee', '8bb835d2a6bd10856c14e31ac46670dd', 'cf0e854db38f32170b6b940a8162ee1d'],
            ['b2b843b18783d1b8f7341868207851516e5382c73bb7473793c035920a5da18c', 'cf0e854db38f32170b6b940a8162ee1d', '32326afaac4cf129154e9a1dbcdc4e67', 'ab9cca58d75a687b5f07de79e40865fe'],
            ['44508200224a9f75dc70731720b198c2c5cf489feced2f4cccc7ebebee55c472', 'ab9cca58d75a687b5f07de79e40865fe', 'f6e8c1b1a5c94ecd2b446b7f00c9c993', 'b03b734fdddd11883ac396c44257e13e'],
            ['424965645a51cc91a28674cc30fcfe1e75f43bd031303ec4f6047d2fac02254c', 'b03b734fdddd11883ac396c44257e13e', '0619e764781b53e47ef607db104d66dc', '02ef7b42ee830ce6e383c041556568e9'],
            ['0eee448d9a7307613e668130e0319d8e771b4092dfb332221587bd6ef9674da5', '02ef7b42ee830ce6e383c041556568e9', '4ca721e9c022cbf09ce0f5fcd0cd6390', '4fdef5f9e6ddd87ff91fd7d24949eb98'],
            ['356aec4cc5740d59e6af46e2f042232838c5b56b396eea5dec986abcb02ea63d', '4fdef5f9e6ddd87ff91fd7d24949eb98', '3b84a8c15f070a38d8c9c7d21073bea6', '6d4c89c5084c8f6a47851e3c7ba4aaac'],
            ['6ac010fe683ccd8bb61b66fc2e302fa955893cae31226537ab1d7480cb8a0c91', '6d4c89c5084c8f6a47851e3c7ba4aaac', '5faafcb2ad48c0d250b4201ede720c81', '9acba2ea6c26b735e6f014650691707b'],
            ['11c7a21eec5ddec4588810bae2c05f3ccf429e445d04d2024ded60e5cd1b7cea', '9acba2ea6c26b735e6f014650691707b', '7b07b2e08461134fee937646ccf07095', '960fd5e11bd73e2a27c46feedd97a84a'],
            ['e90cf4765286ee28c7a77f41a5aa134b594d4ba546d3ec286a290f0b108cd4a0', '960fd5e11bd73e2a27c46feedd97a84a', 'f8cb5668bedb30ec9f2f6ffb476a4c77', '8e3cb0b786a6efe1784d17f605ace400'],
            ['56ef5fd088a30a283699b15a3408a7e9d771fb12c07503c9126418fd152030a0', '8e3cb0b786a6efe1784d17f605ace400', 'bfe3aba6da25e400f13ece1b91a2b4a2', '6e0915e7e50e695c7a7eae1a1afc835b'],
            ['97ed0ed4360df70b5d3d40e26af6954bb978eef5257b6a95681ab6e70fdcb3fb', '6e0915e7e50e695c7a7eae1a1afc835b', 'c1025104beaefd236ba4f1b85efe32a2', 'fe90ecc63ff29147588ca1ffa3159faf'],
            ['f6bb171996ec911cd73f9db8a189d4d447e802331a89fbd230961718acc92c54', 'fe90ecc63ff29147588ca1ffa3159faf', '615619cda0e166178a02dd5acb7f419f', '0641fbde4095b7eee7f92d41fa5567b9'],
            ['4aa7d81839bebd70bba0f997178db3af41a9f9ed5a1c4c3cd76f3a59569c4bed', '0641fbde4095b7eee7f92d41fa5567b9', 'bc1ccf01af522c6c6c9f642fb604677b', '26c185a85fd217aac7005627fadbf133'],
            ['2e90be4f829ddce20e3ec52f97e8a12267687c4505ce5b96106f6c7eac47bade', '26c185a85fd217aac7005627fadbf133', '64376657bb236192b59e3cb88065128d', '6db46e480b65ca4e5774b484daf32ed6'],
            ['61153c5e27681efff493c916cb9e0f490adc120d0eab91d8471bd8fa76b49408', '6db46e480b65ca4e5774b484daf32ed6', '4f858211a5f5c21dfaad0c395c76ae6b', 'f34d2abb15588d93f214557b46a80cd6'],
            ['a409f6c96f8cd638997cfdc1ff2e40d4f99138b61bf31c4bb50f8d81301c98de', 'f34d2abb15588d93f214557b46a80cd6', 'c51cca9748e4c8c76def34d734b04f9d', 'f6e702fbc750c69ce2c7c54e448bdf7c'],
            ['15e963985d34c59fd207ad7aecfc0e450f763a4ddca3dad757c848cf749747a2', 'f6e702fbc750c69ce2c7c54e448bdf7c', 'b1e0955132b813a74b7b50bb13d24e91', 'a75ed26a81e47246c6d316b54d17cb86'],
            ['d402e61949fa0a3f7f749f220204dc91a828e8275d47a891911b5e7a39808c24', 'a75ed26a81e47246c6d316b54d17cb86', 'c1eb858114cecfa0ad733258eef8d2d4', '7be5007f73e5d8a0a26ba404fdd1cedb'],
            ['53d0bf5661cdcf0a86549f40eea8dee9d3cde8582ea270313370fa7ec45142ff', '7be5007f73e5d8a0a26ba404fdd1cedb', '87d2594f2837c535f9200062ecac0278', '5cedf9411f7655529a8d1b75d5849f56'],
            ['aa9a578b9db0c3b72963ea2f00258ca38f20111931d42563a9fde10b11d5dda9', '5cedf9411f7655529a8d1b75d5849f56', 'f94ae8ddfc7d0cbdaf37756fee8d524a', 'f024ce21a00fa9e920f5e6e692656a91'],
            ['a1ce9880d29c355d8aa474d2ca3546957f04df3891db8c8a890807ed83b0b738', 'f024ce21a00fa9e920f5e6e692656a91', '0b54cf0b4f2cf6eaa3c79efdca10ca36', 'bffdf3cc0046e1b482c9555f73c13661'],
            ['06218bdb46fbd7df65740b9764d84f88c0f92cf4919d6d3e0bc152b2f0718159', 'bffdf3cc0046e1b482c9555f73c13661', 'a7ef135b9467e282efd07f45aeed091d', '84723011f5329e7cea3a960911ba8c11'],
            ['ea158a109e919283b58e012f3184894c448b1ce564aff342e1fbc4bbe1cb0d48', '84723011f5329e7cea3a960911ba8c11', 'ec3401cbd86a455cd0fa0ab8555cc6c4', '4e0772625da788e288b79db661c4c849'],
            ['edb8124f909f0c02b00fafdaf446eb180a8c6e8739087ba0694c590d800fc501', '4e0772625da788e288b79db661c4c849', '07ad985f0e0e9e810581aef5c5c26254', 'b15db593147f44df291b42cca2c8b48b'],
            ['e54b8232e01785c9615f8a3a72ba4138bbd1db142d773f7f40571bc122c7718a', 'b15db593147f44df291b42cca2c8b48b', '08f3907d708889cbd15025e086fcaa20', '6316ffe1ad23419ec9ea3436251333bc'],
            ['31d30dcb1258db4c3c145068257c7e82d8c724f580547ee189bd2ff707d44236', '6316ffe1ad23419ec9ea3436251333bc', 'd4988ff9f24f5e855d4bda5257c63fba', '8b87eeba3112c31a5c2ab90c25a5431a'],
            ['6e2848fdc3bd6a60813552628343d9b65340ca4fb146bdfbd59796fb2271012c', '8b87eeba3112c31a5c2ab90c25a5431a', '5ffb4536d1e5b12cbd21020aa63fa734', '64677085906ec7a8cd7033b04189c7dd'],
            ['b2c907f7e4a75d0cb800b97460ef79fc3727baca21287a5318e7a54b63f8c6f1', '64677085906ec7a8cd7033b04189c7dd', 'dce14f0a271a376c3935eb16e3aca04a', '43733facf2121c7ad92e00357418f8c2'],
            ['7734bb149b7679af9c9e6fff9ced85b774548566d33a6629c1c9a57e17e03e33', '43733facf2121c7ad92e00357418f8c2', 'c5fdbce37fd124a3249ed68bfc02fc4b', '6e7623c15f237eb28b9bf3dea9fe9637'],
            ['21ea14cda062f28829a7bb58d04be9891a22a6a78c19189b4a5256a0be1ea804', '6e7623c15f237eb28b9bf3dea9fe9637', '56deafd93b148b27b539d4a74ca66c3e', '3e718a8d49420c25ddbf6034f20ca8d1'],
            ['091bc8fa03c8fa8fe26badd8ecca715824532c2ac55b14be97ed36944c1200d5', '3e718a8d49420c25ddbf6034f20ca8d1', '28f1dc37a3aa0807cbcc16803c8198d1', 'a06336134590b569e04edaa2eb2b4119'],
            ['2041989031131597cc3fb845267a75c684301a3980cba1d777a3ec36a73941cc', 'a06336134590b569e04edaa2eb2b4119', '295a506a32dbef182e54159dcab0049e', '76b6eed4459d22ddcb712d367dba9e57'],
            ['798063caa2407b6b24f248cf9b9d4d18f286f4edc556830abcd2c100da83df9b', '76b6eed4459d22ddcb712d367dba9e57', '59c1fb5a93536efce8cdf08abde738de', 'a3fef4b3711ad064e6a282d45cd81d7d'],
            ['b8d6e9f60f7d2fc3a843c8e243c4bdd85178005eb44c536e5a7043d4865bc2e6', 'a3fef4b3711ad064e6a282d45cd81d7d', 'c1568a3cad3d54a88cb1802dd859f0c0', '685d7924a01b09775ad193350558e532'],
            ['631ac991e763e2ad052292c994c6d13d3925797a14575a1900a1d0e1830327d4', '685d7924a01b09775ad193350558e532', 'dbcc2067e81ecd6ead615a2bd7026ce5', 'efd39a522ac07090239dcb8ed5b98bc2'],
            ['e1a354605730894256106e01fbb68a4bd6f6e3283e972a89233c1b6f56baac16', 'efd39a522ac07090239dcb8ed5b98bc2', '82b99df1b0536bef5332fcc86f705b76', 'daad7a0411bfb6ed1d1decd3cdaf10ca'],
            ['4a2f95dde1871ca628d3ff0e388db70d0c5b992c2f289c643e21f7bc9b15bcdc', 'daad7a0411bfb6ed1d1decd3cdaf10ca', 'ab8cc1bdb6b795e47ec3910fc33b3d46', 'f355aa26a59f90e52f09a1e423efb464'],
            ['509b76b8fbb876ed69e2234665447bf9ff0e330a8ab70c8111285658b8fa08b8', 'f355aa26a59f90e52f09a1e423efb464', '1ab4e3651a3f6a4b4131dc485dc9ccf4', 'd1b0c4e629e955160c807ea6ee1b9dc8'],
            ['57503017e81bdda3c9315b18add9ea212ebef7eca35e59971da828fe56e19570', 'd1b0c4e629e955160c807ea6ee1b9dc8', '07cb46af13a3ab4ea0d3785ec89d91d8', 'ab7fff36e5aaa27faf5650869e9b9e3c'],
            ['28a0c1740b338dfe019e06da201339ea85c108da46f4fbe8b2fe7878c87a0b4c', 'ab7fff36e5aaa27faf5650869e9b9e3c', '7ff0f163e328505dc8af5dc28dcad3cb', 'fd5383b5c180db75a58aa664893c8bff'],
            ['1c9db47e9b59b56b055e47f34ddd7c0178928b6f8774209d1774de1c414680b3', 'fd5383b5c180db75a58aa664893c8bff', '343d750a906a389504c041296dce45eb', 'fb99060d665ea8c006600a1464b73c99'],
            ['e449993971b89815ba17b6257f287259830b8d62e12a885d1114d40825f1bc2a', 'fb99060d665ea8c006600a1464b73c99', 'f8d42d47eae12d7ebf49f1d632f50e58', '1e391e0f0ebf267e7678b06d286a0d08'],
            ['4333b987988092339ea95f16fdf0bb569d32936def95ae23676c64650d9bb122', '1e391e0f0ebf267e7678b06d286a0d08', 'a77a20bee9380a2624bee93382d8c90f', '4d61969f35ef196bfe19ec957fd88f22'],
            ['267aa4c04f617333c3f95ba6f3f43812d05305f2da7ab748997588f072433e00', '4d61969f35ef196bfe19ec957fd88f22', '65491d47d7e1e1005d5004b00e048344', '770aee3170ca16d7d0cfe3b5082700fd'],
            ['d387493179cf7bc1b550c0f8945321e5a759ebc3aab0a19f49ba6b457a643efd', '770aee3170ca16d7d0cfe3b5082700fd', 'f5fdedf136ae08f276a99b5e67a719f7', '5fe7772bc8807a9fcb5f35cf23ef3c73']
        ];
    }

    function decryptProvider()
    {
        return [
            ['8eda005a16f5d0cc62727e92ded412e8e7d9e01f98000043e049fffcd83cd4b2', '57d404ae6da97c9ed315a13739954cf9', '53de1c313745ecf39963059435541fba', 'e68ee3c8cabb00e41be436499ac47d5c'],
            ['f53e8b66b842c965aff798ccc5dc2b1d015703d752bb00a7fbadc9b542f8a9ee', 'e68ee3c8cabb00e41be436499ac47d5c', '7be48b3caeb719a9cd85e65e1b0839f5', '4e308f73650d6bd43dbefc856c9b1d79'],
            ['c5d0afd4c684c623300a29ad1d53bfdc4f678ca437b66b73c61335302e63b497', '4e308f73650d6bd43dbefc856c9b1d79', '30ee24b27ec60f469ffdb161d88f94c1', 'ac6e3bde5b6bc6fb035e500f0cbc7372'],
            ['2e9b8ec2864e5ebfe0a13cbc17bf4e50e309b77a6cddad88c54d653f22dfc7e5', 'ac6e3bde5b6bc6fb035e500f0cbc7372', 'eb4b211640ca989cd0ab15110aecf18c', '65156e82c48f016a8f485edc48f11193'],
            ['30316c6235bc65814e0c10073d6f4e6a861cd9f8a852ace24a053be36a2ed676', '65156e82c48f016a8f485edc48f11193', '1eaae2a0b3f23b3eaead2cbb2ad0003a', '928e8a6b2d1d1a604c9ae5c5743ab0b3'],
            ['5bd486a4147773cec6926627eeb9517a14925393854fb682069fde261e1466c5', '928e8a6b2d1d1a604c9ae5c5743ab0b3', '6be5eac621cb164f889e7620d3d61f10', '6085c957401c3083be78b2bb6007bc57'],
            ['3c8ee7ed9a596224dc9f66819f45d43974179ac4c5538601b8e76c9d7e13da92', '6085c957401c3083be78b2bb6007bc57', '675a61498e2e11ea1a0d00a671fc8543', 'f7fc7b9fdd0e378ed87966f39a91a6ee'],
            ['2cdf1bb56defc28b6126993f5668b09183ebe15b185db18f609e0a6ee4827c7c', 'f7fc7b9fdd0e378ed87966f39a91a6ee', '1051fc58f7b6a0afbdb9ffbec92d64a8', '6090e451ae6da5f5cf872506c98c7564'],
            ['776ee99e645a38b80973594bba9426fbe37b050ab630147aaf192f682d0e0918', '6090e451ae6da5f5cf872506c98c7564', '5bb1f22b09b5fa336855c074ecfc966a', 'ed13f3ce0c5836ef660cdad0ffbf7b60'],
            ['e672402d1c1177654d6473d07d6e601a0e68f6c4ba682295c915f5b8d2b17278', 'ed13f3ce0c5836ef660cdad0ffbf7b60', '911ca9b3784b4fdd44172a9bc7fa46e1', 'ce83639498d7a1359f9743e28c3a9500'],
            ['fe7963d1b22e58f658fcdff046dccc31c0eb955022bf83a05682b65a5e8be778', 'ce83639498d7a1359f9743e28c3a9500', '180b23fcae3f2f931598ac203bb2ac2b', 'c79f1d0500c8b2222bc42f64df79f9a0'],
            ['417586a13c118ccd7907afc5cb764d1e07748855227731827d46993e81f21ed8', 'c79f1d0500c8b2222bc42f64df79f9a0', 'bf0ce5708e3fd43b21fb70358daa812f', '4b1bcbce9067dcdbe7902a730131e78e'],
            ['d251ac19b6afa674ccf7da381d8d7b9c4c6f439bb210ed599ad6b34d80c3f956', '4b1bcbce9067dcdbe7902a730131e78e', '93242ab88abe2ab9b5f075fdd6fb3682', '1ed844ddd01df20d0322d94dd0ff620d'],
            ['83ecbc951cb86046a87dfed54bdb233a52b70746620d1f5499f46a00503c9b5b', '1ed844ddd01df20d0322d94dd0ff620d', '51bd108caa17c632648a24ed565658a6', '69da6832cc97d678ee73327542a4e8aa'],
            ['63c0ac5d9aea312793da4c748713266f3b6d6f74ae9ac92c77875875129873f1', '69da6832cc97d678ee73327542a4e8aa', 'e02c10c8865251613ba7b2a1ccc80555', '1d64763d70a7dfd2f185ae3a8d4b13ee'],
            ['975236e9a4a1dfa18b34c36b505b714c26091949de3d16fe8602f64f9fd3601f', '1d64763d70a7dfd2f185ae3a8d4b13ee', 'f4929ab43e4bee8618ee8f1fd7485723', 'c671999eeed11040bc5198aa2057f6f3'],
            ['3657a95258d3f9ba839a94544eee08a0e07880d730ec06be3a536ee5bf8496ec', 'c671999eeed11040bc5198aa2057f6f3', 'a1059fbbfc72261b08ae573f1eb579ec', 'fe0d5effe92c8172881ef849baa899a0'],
            ['df440fbc2260d2fe6118780f380d2f1a1e75de28d9c087ccb24d96ac052c0f4c', 'fe0d5effe92c8172881ef849baa899a0', 'e913a6ee7ab32b44e282ec5b76e327ba', 'fa06013df4b9264bcc65e2c30b8b909a'],
            ['89184b5ac996f9dc1e42575dbfae0771e473df152d79a1877e28746f0ea79fd6', 'fa06013df4b9264bcc65e2c30b8b909a', '565c44e6ebf62b227f5a2f5287a3286b', '769531afed95548368faa8b3cef715b1'],
            ['5553729787c4188fdb9866d5b21566e392e6eebac0ecf50416d2dcdcc0508a67', '769531afed95548368faa8b3cef715b1', 'dc4b39cd4e52e153c5da31880dbb6192', 'b73ba8d72dabaa67cf075015230884d6'],
            ['4c7af12f8425b925723be1095560b6ef25dd466ded475f63d9d58cc9e3580eb1', 'b73ba8d72dabaa67cf075015230884d6', '192983b803e1a1aaa9a387dce775d00c', '7318c51336bfbde1ef75680f633edad4'],
            ['6bc269f08edf325036a6b6c56860176256c5837edbf8e28236a0e4c68066d465', '7318c51336bfbde1ef75680f633edad4', '27b898df0afa8b75449d57cc3d00a18d', 'b73aa5a47643b251a037529c7a79a7ac'],
            ['dc658e3251890322ef312fa96c0c3303e1ff26daadbb50d39697b65afa1f73c9', 'b73aa5a47643b251a037529c7a79a7ac', 'b7a7e7c2df563172d997996c046c2461', 'f876c4bdadf7291db9a28e34af26af4a'],
            ['fe3077dbe0d5358af4c4056a6e1ca6d41989e267004c79ce2f35386e5539dc83', 'f876c4bdadf7291db9a28e34af26af4a', '2255f9e9b15c36a81bf52ac3021095d7', '3cc472af7740ec2b3a877e11256f134b'],
            ['478d1437a540eb67885819a411c82065254d90c8770c95e515b2467f7056cfc8', '3cc472af7740ec2b3a877e11256f134b', 'b9bd63ec4595deed7c9c1cce7fd486b1', '82dce4c0a555913bf61d6d33f552412b'],
            ['6e85e75ec6cf2796c98224b27d5db701a7917408d25904dee3af2b4c85048ee3', '82dce4c0a555913bf61d6d33f552412b', '2908f369638fccf141da3d166c959764', 'fc03646daa34e6515d77da9f2ac45a58'],
            ['47c6a953df8cf789db7e5d732eeed0c15b921065786de28fbed8f1d3afc0d4bb', 'fc03646daa34e6515d77da9f2ac45a58', '29434e0d1943d01f12fc79c153b367c0', '0ad9ad05def46990678db8558b999280'],
            ['1ad7d52bc6bb4b0ea2f36008ed885197514bbd60a6998b1fd95549862459463b', '0ad9ad05def46990678db8558b999280', '5d117c781937bc87798d3d7bc3668156', '9800777c7ee51a4999a9f9839044b84a'],
            ['0012cb0548df9881453e25395f43509ac94bca1cd87c915640fcb005b41dfe71', '9800777c7ee51a4999a9f9839044b84a', '1ac51e2e8e64d38fe7cd4531b2cb010d', '9ed2157701446789366217e0f0087de8'],
            ['8734e595b2ffe98a9f23131c096b7f185799df6bd938f6df769ea7e544158399', '9ed2157701446789366217e0f0087de8', '87262e90fa20710bda1d362556282f82', 'a7d81d45a5597e6553a89439a2a7cb43'],
            ['61e71ad2a07148b5ab3ea113c8db69ebf041c22e7c6188ba253633dce6b248da', 'a7d81d45a5597e6553a89439a2a7cb43', 'e6d3ff47128ea13f341db20fc1b016f3', 'baf38920e6ac8ed10dad1940d2fd5006'],
            ['08360ac74b63d3436eaaf2c96d59f0094ab24b0e9acd066b289b2a9c344f18dc', 'baf38920e6ac8ed10dad1940d2fd5006', '69d11015eb129bf6c59453daa58299e2', '607a55fee86b21f4e511b484161aec75'],
            ['b05bbed7ada5d91464887a61282f20e02ac81ef072a6279fcd8a9e182255f4a9', '607a55fee86b21f4e511b484161aec75', 'b86db410e6c60a570a2288a84576d0e9', '7185b78e56bb43ed0978d97c99993477'],
            ['d95b66553ce15606de3edf77bb6176b25b4da97e241d6472c4f24764bbccc0de', '7185b78e56bb43ed0978d97c99993477', '6900d88291448f12bab6a516934e5652', 'e3191c91066c1da38ceae1d559fe5c06'],
            ['b7110a48f5b0fc88bdefba6348119241b854b5ef227179d14818a6b1e2329cd8', 'e3191c91066c1da38ceae1d559fe5c06', '6e4a6c1dc951aa8e63d16514f370e4f3', 'b4df17ba93bbcb262ed7659a276aab98'],
            ['7333af866232c9b6278f70bb348255ce0c8ba255b1cab2f766cfc32bc5583740', 'b4df17ba93bbcb262ed7659a276aab98', 'c422a5ce9782353e9a60cad87c93c78f', '72778df11d351a7f48c427a39f837391'],
            ['a88ee3586351e62fd9f8e170dcdae8c27efc2fa4acffa8882e0be4885adb44d1', '72778df11d351a7f48c427a39f837391', 'dbbd4cde01632f99fe7791cbe858bd0c', '7daa915f550a4b9aaed0f075349a0181'],
            ['62a6a631785d50c7f2557ae7e27e013f0356befbf9f5e31280db14fd6e414550', '7daa915f550a4b9aaed0f075349a0181', 'ca2845691b0cb6e82bad9b973ea4e9fd', '5ad455ffaa344cbaca9cb69826040f6e'],
            ['3b03e4ecf02daaaaf0f4ac4a424a24c15982eb0453c1afa84a47a26548454a3e', '5ad455ffaa344cbaca9cb69826040f6e', '59a542dd8870fa6d02a1d6ada03425fe', 'd84f86ee15ea5013fb212b6656e6cacf'],
            ['0a11eaf03d706db1c76888d12f87a94e81cd6dea462bffbbb16689031ea380f1', 'd84f86ee15ea5013fb212b6656e6cacf', '31120e1ccd5dc71b379c249b6dcd8d8f', 'bf389ddac4575621be7753b3720eb5e6'],
            ['3583b1cada97904b10e69bdb0dbec9e83ef5f030827ca99a0f11dab06cad3517', 'bf389ddac4575621be7753b3720eb5e6', '3f925b3ae7e7fdfad78e130a223960a6', 'ee18625fe4531dee86bfa26231c23524'],
            ['494bbcdeed514792b2c0bd094c5b8195d0ed926f662fb47489ae78d25d6f0033', 'ee18625fe4531dee86bfa26231c23524', '7cc80d1437c6d7d9a22626d241e5487d', '13115ab20aafaa94912b1c54663682f9'],
            ['89177e6866a74677fed6afb85242ae2dc3fcc8dd6c801ee0188564863b5982ca', '13115ab20aafaa94912b1c54663682f9', 'c05cc2b68bf601e54c1612b11e192fb8', '9e3682d26df8bc62192f550d92973523'],
            ['51b97b3e6aaf06d35f80af5bcdbf57195dca4a0f0178a28201aa318ba9ceb7e9', '9e3682d26df8bc62192f550d92973523', 'd8ae05560c0840a4a15600e39ffdf934', 'db42119dc01bac8b3f52fc0a95908081'],
            ['ae6b5943492200ffa272ab88364d2e8586885b92c1630e093ef8cd813c5e3768', 'db42119dc01bac8b3f52fc0a95908081', 'ffd2227d238d062cfdf204d3fbf2799c', '8205d6c6882b1b2c4591b2f09560608c'],
            ['c9159f2b80c7fbcfdaf0ff51e6f05940048d8d54494815257b697f71a93e57e4', '8205d6c6882b1b2c4591b2f09560608c', '677ec668c9e5fb30788254d9d0bd77c5', '7234ca2712c5955d793cf9931cefd178'],
            ['fe3216b82038c880e59e257686d72ca076b947735b8d8078025586e2b5d1869c', '7234ca2712c5955d793cf9931cefd178', '37278993a0ff334f3f6eda27602775e0', 'a5fd7721c14741865634d6765e36bddc'],
            ['90c50747a18775dfffd069ec207b8ab0d34430529acac1fe54615094ebe73b40', 'a5fd7721c14741865634d6765e36bddc', '6ef711ff81bfbd5f1a4e4c9aa6aca610', '3b9040bba45f5baa16e9d0be53ba0b94'],
            ['fad7d8337bc888a41f42b0ba777a3c49e8d470e93e959a544288802ab85d30d4', '3b9040bba45f5baa16e9d0be53ba0b94', '6a12df74da4ffd7be092d9565701b6f9', '445b1356b22b16522616351af89d4061'],
            ['2aa5624e73ed38f6058e2732ff26de39ac8f63bf8cbe8c06649eb53040c070b5', '445b1356b22b16522616351af89d4061', 'd072ba7d0825b0521acc9788885ce270', '4865a151b9075bc03fcd7fc4c791e9ac'],
            ['22ac24b97272d53ccbe57172301c0094e4eac2ee35b9d7c65b53caf487519919', '4865a151b9075bc03fcd7fc4c791e9ac', '080946f7019fedcace6b5640cf3adead', '330f2c7c2c9aef373dca879a89793d52'],
            ['4f5b05c074d9509616c2078baa37b0dcd7e5ee92192338f166994d6e0e28a44b', '330f2c7c2c9aef373dca879a89793d52', '6df7217906ab85aadd2776f99a2bb048', '5b81837d8945ca91da7966a806ffdffc'],
            ['c529e545e18cbcaffad3d060775618558c646def9066f260bce02bc608d77bb7', '5b81837d8945ca91da7966a806ffdffc', '8a72e0859555ec39ec11d7ebdd61a889', '72b74a0f7e34a88633e27205fa00e0bc'],
            ['939bb4967daa6424948a0f5074ee5c25fed327e0ee525ae68f0259c3f2d79b0b', '72b74a0f7e34a88633e27205fa00e0bc', '56b251d39c26d88b6e59df3003b84470', 'c8c1aaf8a70f7ebeed81791150e07db8'],
            ['27176a0ee9a8cedd3da3d1345be2c8f236128d18495d2458628320d2a237e6b3', 'c8c1aaf8a70f7ebeed81791150e07db8', 'b48cde989402aaf9a929de642f0c94d7', '2033aa10b4abbafe5c4623ad04e499dc'],
            ['513e1a03956c1056f1d412c7ac9122ab16212708fdf69ea63ec5037fa6d37f6f', '2033aa10b4abbafe5c4623ad04e499dc', '7629700d7cc4de8bcc77c3f3f773ea59', '24eab2062a5f33a834bb0377292f25da'],
            ['f70cef768352ae0236544052d960e53332cb950ed7a9ad0e0a7e00088ffc5ab5', '24eab2062a5f33a834bb0377292f25da', 'a632f575163ebe54c780529575f1c798', 'fa946cacee44f5be0e17bd5279e72d93'],
            ['b379027fe0e3b2814982f88bbcca1279c85ff9a239ed58b00469bd5af61b7726', 'fa946cacee44f5be0e17bd5279e72d93', '4475ed0963b11c837fd6b8d965aaf74a', 'f57cf0633c3c4767ce1748bd77b54030'],
            ['268962186b301acfeaae4ea84b0355e93d2309c105d11fd7ca7ef5e781ae3716', 'f57cf0633c3c4767ce1748bd77b54030', '95f060678bd3a84ea32cb623f7c94790', '3c665a24790ef0bc6d6bcac4edbed96b'],
            ['8ae8fbf94be00b74605d3a52249049c9014553e57cdfef6ba7153f236c10ee7d', '3c665a24790ef0bc6d6bcac4edbed96b', 'ac6199e120d011bb8af374fa6f931c20', 'e2411a3fd85a4432810e982a08c03d9f'],
            ['226f95d54b47063dec38cdbcc76ac3eee30449daa485ab59261ba70964d0d3e2', 'e2411a3fd85a4432810e982a08c03d9f', 'a8876e2c00a70d498c65f7eee3fa8a27', '0695ca6b4501388236051ca7f965bf78'],
            ['2091f37ab9993408d4ed63af80d589ece59183b1e18493db101ebbae9db56c9a', '0695ca6b4501388236051ca7f965bf78', '02fe66aff2de323538d5ae1347bf4a02', '975a22f48b0f5aafebb56427d120fb8b'],
            ['c43db8d74b2e5fd1abcb5b9beb022acb72cba1456a8bc974fbabdf894c959711', '975a22f48b0f5aafebb56427d120fb8b', 'e4ac4badf2b76bd97f2638346bd7a327', 'd268292b1131e186f0d2286afc506b82'],
            ['627507fcac83b625eb8f324b7bb1f56ba0a3886e7bba28f20b79f7e3b0c5fc93', 'd268292b1131e186f0d2286afc506b82', 'a648bf2be7ade9f4404469d090b3dfa0', 'b54d560b003c158d7de0f3a4fefebe08'],
            ['08ef9d8b4b6141130fdd5e869affb92a15eede657b863d7f769904474e3b429b', 'b54d560b003c158d7de0f3a4fefebe08', '6a9a9a77e7e2f736e4526ccde14e4c41', '5492a91461b2434cb840dc299f8e0482'],
            ['a2bcbce8d4ab3ef7cfa897801bf2e52b417c77711a347e33ced9d86ed1b54619', '5492a91461b2434cb840dc299f8e0482', 'aa5321639fca7fe4c075c906810d5c01', '36ace281d64f80b8c595c03ba608a503'],
            ['69e5dcf0a70739a47270863a98d3f0f677d095f0cc7bfe8b0b4c185577bde31a', '36ace281d64f80b8c595c03ba608a503', 'cb59601873ac0753bdd811ba832115dd', 'b0c9475cd0cf4cc5d0a5fd33302b3418'],
            ['72a6c060f0872f6a41e8c96207b175bfc719d2ac1cb4b24edbe9e5664796d702', 'b0c9475cd0cf4cc5d0a5fd33302b3418', '1b431c90578016ce33984f589f628549', '32f869fb1098721671b2ef30668cc213'],
            ['6aeb872d0eeb4d036da5b9fbb0b252e7f5e1bb570c2cc058aa5b0a56211a1511', '32f869fb1098721671b2ef30668cc213', '184d474dfe6c62692c4d7099b7032758', 'b2f7fb0f25867b63f8d25d522c5a0efd'],
            ['586f3c9943e8497a2153ac324e5598124716405829aabb3b528957040d401bec', 'b2f7fb0f25867b63f8d25d522c5a0efd', '3284bbb44d0304794cf615c9fee7caf5', '49d7afb27cd25a6104972fb3b4c8ecf7'],
            ['aa9ee38f7848822150998767630e84e10ec1efea5578e15a561e78b7b988f71b', '49d7afb27cd25a6104972fb3b4c8ecf7', 'f2f1df163ba0cb5b71ca2b552d5b1cf3', '34d1c8c220e1e0b614ba88cad24689ff'],
            ['7a5f257f2425223da03e39363317bba43a102728759901ec42a4f07d6bce7ee4', '34d1c8c220e1e0b614ba88cad24689ff', 'd0c1c6f05c6da01cf0a7be5150193f45', '44c173854b0bad93982555b8bb419921'],
            ['de48177e6427bd433a5205f235064e7d7ed154ad3e92ac7fda81a5c5d08fe7c5', '44c173854b0bad93982555b8bb419921', 'a417320140029f7e9a6c3cc40611f5d9', 'd4139ff4659f6c985131a30c86a3a9c9'],
            ['7d19570fd63d8214111627b519f4469daac2cb595b0dc0e78bb006c9562c4e0c', 'd4139ff4659f6c985131a30c86a3a9c9', 'a3514071b21a3f572b4422472cf208e0', '2719efdc65a8eb0e6f0f29753c13146c'],
            ['cf0458907495e4ceadd98064e4734a168ddb24853ea52be9e4bf2fbc6a3f5a60', '2719efdc65a8eb0e6f0f29753c13146c', 'b21d0f9fa2a866dabccfa7d1fd870c8b', 'c17b9bc55f10935150fcd65356d86930'],
            ['9fda8887ed83187d1724792fd10d142d4ca0bf4061b5b8b8b443f9ef3ce73350', 'c17b9bc55f10935150fcd65356d86930', '50ded0179916fcb3bafdf94b357e5e3b', 'fd9cc5d9c38aeded124efe8162db73c3'],
            ['676bf80d944fca5aa6ceedd5cf6b7a98b13c7a99a23f5555a60d076e5e3c4093', 'fd9cc5d9c38aeded124efe8162db73c3', 'f8b1708a79ccd227b1ea94fa1e666eb5', 'bca5314c1b215c31d7a9cb17132b3d54'],
            ['bd32d330b86406553dc309e9b0bd9d610d994bd5b91e096471a4cc794d177dc7', 'bca5314c1b215c31d7a9cb17132b3d54', 'da592b3d2c2bcc0f9b0de43c7fd6e7f9', 'fe6d948475aca222b6dc3f8f909e0042'],
            ['b47fe0e8be922217b03f468a8dabcf9af3f4df51ccb2ab46c778f3f6dd897d85', 'fe6d948475aca222b6dc3f8f909e0042', '094d33d806f624428dfc4f633d1652fb', 'abc18bb7890d513d8878a5aa035ff8cb'],
            ['bd0d98ee1f21d7fbf9829195cb1d9d63583554e645bffa7b4f00565cded6854e', 'abc18bb7890d513d8878a5aa035ff8cb', '09727806a1b3f5ec49bdd71f46b652f9', 'c188f9bcfa9dcf41fcffbef3b4ad9e25'],
            ['b601529e9d6d465ef5466f606cd23fc599bdad5abf22353ab3ffe8af6a7b1b6b', 'c188f9bcfa9dcf41fcffbef3b4ad9e25', '0b0cca70824c91a50cc4fef5a7cfa2a6', '3869d5892a3e8706631b8d9cae5f46c1'],
            ['b1a9c9e266d747d03eab9d49214265b4a1d478d3951cb23cd0e46533c4245daa', '3869d5892a3e8706631b8d9cae5f46c1', '07a89b7cfbba018ecbedf2294d905a71', '8f0dc9d2e611a5b32188ba9f5cd8895d'],
            ['f856111bbb1f81b6435b8fc248d315f32ed9b101730d178ff16cdfac98fcd4f7', '8f0dc9d2e611a5b32188ba9f5cd8895d', '49ffd8f9ddc8c6667df0128b69917047', '9b1df8d8b61c9998b96bca4a6211dea2'],
            ['add6219ee357dc1ca8295654de2d7ac3b5c449d9c5118e17480715e6faed0a55', '9b1df8d8b61c9998b96bca4a6211dea2', '5580308558485daaeb72d99696fe6f30', '6931e6ab27d24410bc1e1b06379088fa'],
            ['478fd2f85dbbdee8c3cc32fa39a382a0dcf5af72e2c3ca07f4190ee0cd7d82af', '6931e6ab27d24410bc1e1b06379088fa', 'ea59f366beec02f46be564aee78ef863', '08a5712351cea6fd4eb94a2eb730da50'],
            ['7380547f73db52be3b429035bcde1108d450de51b30d6cfabaa044ce7a4d58ff', '08a5712351cea6fd4eb94a2eb730da50', '340f86872e608c56f88ea2cf857d93a8', 'a1823317940d2990ac80aba2ca9df8be'],
            ['29dc1ef35018bba357aad24e4803561975d2ed462700456a1620ef6cb0d0a041', 'a1823317940d2990ac80aba2ca9df8be', '5a5c4a8c23c3e91d6ce8427bf4dd4711', 'e71a568a22c73d6d5d2037fd8282ffe5'],
            ['9271d202ea82e1c31480278943c459c592c8bbcc05c778074b00d89132525fa4', 'e71a568a22c73d6d5d2037fd8282ffe5', 'bbadccf1ba9a5a60432af5c70bc70fdc', '9065aa28c470a38e4694dc01855ab35a'],
            ['c96c8f034db533983263b82bfe36bbf902ad11e4c1b7db890d940490b708ecfe', '9065aa28c470a38e4694dc01855ab35a', '5b1d5d01a737d25b26e39fa2bdf2e23c', 'a4f7127bde324d8c76b4b4401fbf7449'],
            ['2eadfaee4d81234ef9fb0a356d2d3f8fa65a039f1f8596057b20b0d0a8b798b7', 'a4f7127bde324d8c76b4b4401fbf7449', 'e7c175ed003410d6cb98b21e931b8476', '28342de9cbbdbb7f271cd9b7c75ea679'],
            ['dc087d488d839b9708d18dd1b29661ba8e6e2e76d4382d7a5c3c69676fe93ece', '28342de9cbbdbb7f271cd9b7c75ea679', 'f2a587a6c002b8d9f12a87e4dfbb5e35', '34314ce023be1c0d481fbc155bc2ee0c'],
            ['0b8c92c3dc7007370472d390de5d514bba5f6296f78631771423d572342bd0c2', '34314ce023be1c0d481fbc155bc2ee0c', 'd784ef8b51f39ca00ca35e416ccb30f1', 'b530ccd4ded42cfa9a38d15d4716fb70'],
            ['4945a19f1451c7ead764f516ba28c4f30f6fae4229521d8d8e1b042f733d2bb2', 'b530ccd4ded42cfa9a38d15d4716fb70', '42c9335cc821c0ddd3162686647595b8', '672ae00b2df9a78e15fe28f49ff4fd13'],
            ['fe44b297f50b46751a8ebeda8902163268454e4904abba039be52cdbecc9d6a1', '672ae00b2df9a78e15fe28f49ff4fd13', 'b7011308e15a819fcdea4bcc332ad2c1', '7ade2e55d4aaa1aa136e6d3c7f915608'],
            ['835b94edb2986e631df86d27342f9342129b601cd0011ba9888b41e7935880a9', '7ade2e55d4aaa1aa136e6d3c7f915608', '7d1f267a479328160776d3fdbd2d8570', '0d5d7bddaae2bd96989cabec4ee32aa2'],
            ['e9a097e7c0cae0601a4c1cfb1ee4b5f91fc61bc17ae3a63f1017ea0bddbbaa0b', '0d5d7bddaae2bd96989cabec4ee32aa2', '6afb030a72528e0307b471dc2acb26bb', '38c5ffae0d91b2fe82de312a452b99f4'],
            ['f9dfa0a61c4efbd2b788b85c02429b1d2703e46f777214c192c9db21989033ff', '38c5ffae0d91b2fe82de312a452b99f4', '107f3741dc841bb2adc4a4a71ca62ee4', '41529fb557a7199792df6fab66faadca'],
            ['53ea3aabd7b226d4bd42c0b09d5e361a66517bda20d50d560016b48afe6a9e35', '41529fb557a7199792df6fab66faadca', 'aa359a0dcbfcdd060aca78ec9f1cad07', '1ac6f9d2a0b5d9881d46e240de96ea81'],
            ['52230f7bf9c8926044f22603bcdf15987c9782088060d4de1d5056ca20fc74b4', '1ac6f9d2a0b5d9881d46e240de96ea81', '01c935d02e7ab4b4f9b0e6b321812382', '92f61ce67fcacdc61c197581c051eefe'],
            ['820c11c18c36f93b0cafe2a43d2dc72bee619eeeffaa19180149234be0ad9a4a', '92f61ce67fcacdc61c197581c051eefe', 'd02f1eba75fe6b5b485dc4a781f2d2b3', 'dc777f806e2bc45b0b9348689e947ca7']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $iv, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ofb = new OFB;
        $ctx = $ofb->init($key, hex2bin($iv));
        $lastCiphertext = hex2bin($plaintext);

        // http://csrc.nist.gov/groups/STM/cavp/documents/aes/AESAVS.pdf 6.4.2 --- OK...

        $nextPlaintext = $ofb->encrypt($ctx, $lastCiphertext);
        $lastCiphertext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisCiphertext = $ofb->encrypt($ctx, $lastCiphertext);
            $lastCiphertext = $nextPlaintext;
            $nextPlaintext = $thisCiphertext;
        }

        $this->assertSame(hex2bin($ciphertext), $nextPlaintext);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $iv, $ciphertext, $plaintext)
    {
        $key = new Key(hex2bin($key));
        $ofb = new OFB;
        $ctx = $ofb->init($key, hex2bin($iv));
        $lastPlaintext = hex2bin($ciphertext);

        $nextCiphertext = $ofb->decrypt($ctx, $lastPlaintext);
        $lastPlaintext = hex2bin($iv);

        for ($i = 1; $i < 1000; $i++) {
            $thisPlaintext = $ofb->decrypt($ctx, $lastPlaintext);
            $lastPlaintext = $nextCiphertext;
            $nextCiphertext = $thisPlaintext;
        }

        $this->assertSame(hex2bin($plaintext), $nextCiphertext);
    }
}
