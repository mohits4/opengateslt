<?php


namespace MoOauthClient\GrantTypes;

define("\x43\122\131\x50\x54\x5f\110\x41\123\110\137\115\117\x44\105\137\111\116\124\105\x52\x4e\x41\114", 1);
define("\x43\122\131\x50\x54\137\x48\101\123\x48\x5f\115\x4f\104\x45\137\x4d\110\x41\x53\110", 2);
define("\103\x52\x59\x50\124\x5f\110\101\x53\x48\x5f\115\117\104\105\137\110\101\x53\110", 3);
class Crypt_Hash
{
    var $hashParam;
    var $b;
    var $l = false;
    var $hash;
    var $key = false;
    var $opad;
    var $ipad;
    function __construct($Iq = "\163\x68\141\61")
    {
        if (defined("\103\x52\x59\120\x54\137\x48\x41\123\x48\137\x4d\117\x44\105")) {
            goto U4F;
        }
        switch (true) {
            case extension_loaded("\x68\141\x73\x68"):
                define("\103\x52\x59\120\124\137\110\x41\x53\110\x5f\115\117\104\105", CRYPT_HASH_MODE_HASH);
                goto q73;
            case extension_loaded("\x6d\x68\x61\x73\x68"):
                define("\x43\x52\131\x50\124\137\110\x41\123\110\x5f\115\x4f\104\x45", CRYPT_HASH_MODE_MHASH);
                goto q73;
            default:
                define("\x43\122\131\x50\x54\137\x48\101\123\110\x5f\x4d\x4f\104\105", CRYPT_HASH_MODE_INTERNAL);
        }
        FJX:
        q73:
        U4F:
        $this->setHash($Iq);
    }
    function Crypt_Hash($Iq = "\x73\150\141\x31")
    {
        $this->__construct($Iq);
    }
    function setKey($qi = false)
    {
        $this->key = $qi;
    }
    function getHash()
    {
        return $this->hashParam;
    }
    function setHash($Iq)
    {
        $this->hashParam = $Iq = strtolower($Iq);
        switch ($Iq) {
            case "\x6d\x64\x35\55\x39\x36":
            case "\163\x68\x61\61\55\x39\x36":
            case "\x73\150\x61\x32\x35\66\x2d\x39\x36":
            case "\163\150\x61\x35\x31\62\x2d\x39\x36":
                $Iq = substr($Iq, 0, -3);
                $this->l = 12;
                goto X2v;
            case "\155\x64\x32":
            case "\155\144\x35":
                $this->l = 16;
                goto X2v;
            case "\x73\150\141\61":
                $this->l = 20;
                goto X2v;
            case "\163\150\141\62\65\66":
                $this->l = 32;
                goto X2v;
            case "\163\x68\141\63\70\64":
                $this->l = 48;
                goto X2v;
            case "\x73\150\x61\x35\x31\x32":
                $this->l = 64;
        }
        A2g:
        X2v:
        switch ($Iq) {
            case "\x6d\144\62":
                $qw = CRYPT_HASH_MODE == CRYPT_HASH_MODE_HASH && in_array("\155\x64\x32", hash_algos()) ? CRYPT_HASH_MODE_HASH : CRYPT_HASH_MODE_INTERNAL;
                goto dGr;
            case "\x73\x68\141\x33\x38\x34":
            case "\163\x68\x61\65\x31\62":
                $qw = CRYPT_HASH_MODE == CRYPT_HASH_MODE_MHASH ? CRYPT_HASH_MODE_INTERNAL : CRYPT_HASH_MODE;
                goto dGr;
            default:
                $qw = CRYPT_HASH_MODE;
        }
        uaX:
        dGr:
        switch ($qw) {
            case CRYPT_HASH_MODE_MHASH:
                switch ($Iq) {
                    case "\155\144\x35":
                        $this->hash = MHASH_MD5;
                        goto X7s;
                    case "\163\150\141\62\x35\66":
                        $this->hash = MHASH_SHA256;
                        goto X7s;
                    case "\163\150\x61\x31":
                    default:
                        $this->hash = MHASH_SHA1;
                }
                FqW:
                X7s:
                return;
            case CRYPT_HASH_MODE_HASH:
                switch ($Iq) {
                    case "\155\144\x35":
                        $this->hash = "\x6d\x64\x35";
                        return;
                    case "\155\x64\x32":
                    case "\163\x68\x61\x32\65\x36":
                    case "\x73\x68\x61\63\70\64":
                    case "\x73\150\x61\65\x31\x32":
                        $this->hash = $Iq;
                        return;
                    case "\x73\150\x61\x31":
                    default:
                        $this->hash = "\x73\150\x61\61";
                }
                Q02:
                c0X:
                return;
        }
        wDl:
        pFk:
        switch ($Iq) {
            case "\x6d\144\62":
                $this->b = 16;
                $this->hash = array($this, "\137\x6d\144\62");
                goto Zm6;
            case "\x6d\x64\x35":
                $this->b = 64;
                $this->hash = array($this, "\137\155\144\65");
                goto Zm6;
            case "\x73\x68\x61\62\65\x36":
                $this->b = 64;
                $this->hash = array($this, "\137\163\x68\141\x32\65\x36");
                goto Zm6;
            case "\163\150\141\x33\70\64":
            case "\x73\150\141\x35\61\62":
                $this->b = 128;
                $this->hash = array($this, "\x5f\x73\x68\x61\x35\61\62");
                goto Zm6;
            case "\x73\x68\141\x31":
            default:
                $this->b = 64;
                $this->hash = array($this, "\x5f\x73\150\141\61");
        }
        EzJ:
        Zm6:
        $this->ipad = str_repeat(chr(54), $this->b);
        $this->opad = str_repeat(chr(92), $this->b);
    }
    function hash($kf)
    {
        $qw = is_array($this->hash) ? CRYPT_HASH_MODE_INTERNAL : CRYPT_HASH_MODE;
        if (!empty($this->key) || is_string($this->key)) {
            goto tFN;
        }
        switch ($qw) {
            case CRYPT_HASH_MODE_MHASH:
                $TG = mhash($this->hash, $kf);
                goto gEA;
            case CRYPT_HASH_MODE_HASH:
                $TG = hash($this->hash, $kf, true);
                goto gEA;
            case CRYPT_HASH_MODE_INTERNAL:
                $TG = call_user_func($this->hash, $kf);
        }
        RaG:
        gEA:
        goto GdD;
        tFN:
        switch ($qw) {
            case CRYPT_HASH_MODE_MHASH:
                $TG = mhash($this->hash, $kf, $this->key);
                goto Hr6;
            case CRYPT_HASH_MODE_HASH:
                $TG = hash_hmac($this->hash, $kf, $this->key, true);
                goto Hr6;
            case CRYPT_HASH_MODE_INTERNAL:
                $qi = strlen($this->key) > $this->b ? call_user_func($this->hash, $this->key) : $this->key;
                $qi = str_pad($qi, $this->b, chr(0));
                $Mj = $this->ipad ^ $qi;
                $Mj .= $kf;
                $Mj = call_user_func($this->hash, $Mj);
                $TG = $this->opad ^ $qi;
                $TG .= $Mj;
                $TG = call_user_func($this->hash, $TG);
        }
        umV:
        Hr6:
        GdD:
        return substr($TG, 0, $this->l);
    }
    function getLength()
    {
        return $this->l;
    }
    function _md5($kg)
    {
        return pack("\x48\x2a", md5($kg));
    }
    function _sha1($kg)
    {
        return pack("\x48\52", sha1($kg));
    }
    function _md2($kg)
    {
        static $YG = array(41, 46, 67, 201, 162, 216, 124, 1, 61, 54, 84, 161, 236, 240, 6, 19, 98, 167, 5, 243, 192, 199, 115, 140, 152, 147, 43, 217, 188, 76, 130, 202, 30, 155, 87, 60, 253, 212, 224, 22, 103, 66, 111, 24, 138, 23, 229, 18, 190, 78, 196, 214, 218, 158, 222, 73, 160, 251, 245, 142, 187, 47, 238, 122, 169, 104, 121, 145, 21, 178, 7, 63, 148, 194, 16, 137, 11, 34, 95, 33, 128, 127, 93, 154, 90, 144, 50, 39, 53, 62, 204, 231, 191, 247, 151, 3, 255, 25, 48, 179, 72, 165, 181, 209, 215, 94, 146, 42, 172, 86, 170, 198, 79, 184, 56, 210, 150, 164, 125, 182, 118, 252, 107, 226, 156, 116, 4, 241, 69, 157, 112, 89, 100, 113, 135, 32, 134, 91, 207, 101, 230, 45, 168, 2, 27, 96, 37, 173, 174, 176, 185, 246, 28, 70, 97, 105, 52, 64, 126, 15, 85, 71, 163, 35, 221, 81, 175, 58, 195, 92, 249, 206, 186, 197, 234, 38, 44, 83, 13, 110, 133, 40, 132, 9, 211, 223, 205, 244, 65, 129, 77, 82, 106, 220, 55, 200, 108, 193, 171, 250, 36, 225, 123, 8, 12, 189, 177, 74, 120, 136, 149, 139, 227, 99, 232, 109, 233, 203, 213, 254, 59, 0, 29, 57, 242, 239, 183, 14, 102, 88, 208, 228, 166, 119, 114, 248, 235, 117, 75, 10, 49, 68, 80, 180, 143, 237, 31, 26, 219, 153, 141, 51, 159, 17, 131, 20);
        $Fp = 16 - (strlen($kg) & 15);
        $kg .= str_repeat(chr($Fp), $Fp);
        $fl = strlen($kg);
        $R3 = str_repeat(chr(0), 16);
        $vi = chr(0);
        $nH = 0;
        G7N:
        if (!($nH < $fl)) {
            goto num;
        }
        $J1 = 0;
        ZEs:
        if (!($J1 < 16)) {
            goto nIk;
        }
        $R3[$J1] = chr($YG[ord($kg[$nH + $J1] ^ $vi)] ^ ord($R3[$J1]));
        $vi = $R3[$J1];
        Y52:
        $J1++;
        goto ZEs;
        nIk:
        qQg:
        $nH += 16;
        goto G7N;
        num:
        $kg .= $R3;
        $fl += 16;
        $zb = str_repeat(chr(0), 48);
        $nH = 0;
        K9b:
        if (!($nH < $fl)) {
            goto zPP;
        }
        $J1 = 0;
        qxN:
        if (!($J1 < 16)) {
            goto lPn;
        }
        $zb[$J1 + 16] = $kg[$nH + $J1];
        $zb[$J1 + 32] = $zb[$J1 + 16] ^ $zb[$J1];
        i4h:
        $J1++;
        goto qxN;
        lPn:
        $EA = chr(0);
        $J1 = 0;
        u9e:
        if (!($J1 < 18)) {
            goto geg;
        }
        $VT = 0;
        pSc:
        if (!($VT < 48)) {
            goto X0M;
        }
        $zb[$VT] = $EA = $zb[$VT] ^ chr($YG[ord($EA)]);
        mah:
        $VT++;
        goto pSc;
        X0M:
        $EA = chr(ord($EA) + $J1);
        W2V:
        $J1++;
        goto u9e;
        geg:
        T52:
        $nH += 16;
        goto K9b;
        zPP:
        return substr($zb, 0, 16);
    }
    function _sha256($kg)
    {
        if (!extension_loaded("\x73\165\150\157\163\151\x6e")) {
            goto s_h;
        }
        return pack("\x48\x2a", sha256($kg));
        s_h:
        $Iq = array(1779033703, 3144134277, 1013904242, 2773480762, 1359893119, 2600822924, 528734635, 1541459225);
        static $VT = array(1116352408, 1899447441, 3049323471, 3921009573, 961987163, 1508970993, 2453635748, 2870763221, 3624381080, 310598401, 607225278, 1426881987, 1925078388, 2162078206, 2614888103, 3248222580, 3835390401, 4022224774, 264347078, 604807628, 770255983, 1249150122, 1555081692, 1996064986, 2554220882, 2821834349, 2952996808, 3210313671, 3336571891, 3584528711, 113926993, 338241895, 666307205, 773529912, 1294757372, 1396182291, 1695183700, 1986661051, 2177026350, 2456956037, 2730485921, 2820302411, 3259730800, 3345764771, 3516065817, 3600352804, 4094571909, 275423344, 430227734, 506948616, 659060556, 883997877, 958139571, 1322822218, 1537002063, 1747873779, 1955562222, 2024104815, 2227730452, 2361852424, 2428436474, 2756734187, 3204031479, 3329325298);
        $fl = strlen($kg);
        $kg .= str_repeat(chr(0), 64 - ($fl + 8 & 63));
        $kg[$fl] = chr(128);
        $kg .= pack("\x4e\62", 0, $fl << 3);
        $qW = str_split($kg, 64);
        foreach ($qW as $pn) {
            $O0 = array();
            $nH = 0;
            ygu:
            if (!($nH < 16)) {
                goto Q2P;
            }
            extract(unpack("\x4e\164\x65\x6d\160", $this->_string_shift($pn, 4)));
            $O0[] = $Mj;
            fY0:
            $nH++;
            goto ygu;
            Q2P:
            $nH = 16;
            hKB:
            if (!($nH < 64)) {
                goto nn1;
            }
            $w0 = $this->_rightRotate($O0[$nH - 15], 7) ^ $this->_rightRotate($O0[$nH - 15], 18) ^ $this->_rightShift($O0[$nH - 15], 3);
            $of = $this->_rightRotate($O0[$nH - 2], 17) ^ $this->_rightRotate($O0[$nH - 2], 19) ^ $this->_rightShift($O0[$nH - 2], 10);
            $O0[$nH] = $this->_add($O0[$nH - 16], $w0, $O0[$nH - 7], $of);
            mpR:
            $nH++;
            goto hKB;
            nn1:
            list($t6, $GD, $R3, $Af, $to, $Dk, $pf, $Dt) = $Iq;
            $nH = 0;
            gdV:
            if (!($nH < 64)) {
                goto CEC;
            }
            $w0 = $this->_rightRotate($t6, 2) ^ $this->_rightRotate($t6, 13) ^ $this->_rightRotate($t6, 22);
            $H4 = $t6 & $GD ^ $t6 & $R3 ^ $GD & $R3;
            $Lp = $this->_add($w0, $H4);
            $of = $this->_rightRotate($to, 6) ^ $this->_rightRotate($to, 11) ^ $this->_rightRotate($to, 25);
            $ig = $to & $Dk ^ $this->_not($to) & $pf;
            $wR = $this->_add($Dt, $of, $ig, $VT[$nH], $O0[$nH]);
            $Dt = $pf;
            $pf = $Dk;
            $Dk = $to;
            $to = $this->_add($Af, $wR);
            $Af = $R3;
            $R3 = $GD;
            $GD = $t6;
            $t6 = $this->_add($wR, $Lp);
            nv2:
            $nH++;
            goto gdV;
            CEC:
            $Iq = array($this->_add($Iq[0], $t6), $this->_add($Iq[1], $GD), $this->_add($Iq[2], $R3), $this->_add($Iq[3], $Af), $this->_add($Iq[4], $to), $this->_add($Iq[5], $Dk), $this->_add($Iq[6], $pf), $this->_add($Iq[7], $Dt));
            W50:
        }
        svZ:
        return pack("\x4e\x38", $Iq[0], $Iq[1], $Iq[2], $Iq[3], $Iq[4], $Iq[5], $Iq[6], $Iq[7]);
    }
    function _sha512($kg)
    {
        if (class_exists("\x4d\x61\x74\x68\x5f\102\x69\x67\111\x6e\x74\x65\x67\x65\x72")) {
            goto Nvt;
        }
        include_once "\x4d\x61\164\x68\x2f\x42\151\147\111\156\164\145\147\145\162\x2e\x70\150\160";
        Nvt:
        static $P6, $rO, $VT;
        if (isset($VT)) {
            goto lGw;
        }
        $P6 = array("\x63\x62\142\142\x39\144\x35\144\x63\x31\60\65\x39\145\144\x38", "\66\x32\x39\x61\x32\x39\x32\141\x33\x36\x37\143\144\x35\x30\x37", "\71\x31\65\x39\x30\61\x35\x61\63\60\x37\60\144\144\x31\67", "\x31\65\x32\146\145\143\x64\70\146\67\60\x65\65\x39\x33\x39", "\x36\x37\63\63\62\x36\66\67\x66\146\143\60\x30\x62\63\x31", "\70\145\142\x34\64\x61\x38\x37\x36\x38\65\x38\x31\x35\x31\61", "\144\x62\x30\x63\x32\x65\60\x64\x36\64\x66\71\70\x66\x61\x37", "\64\x37\x62\x35\64\70\x31\144\142\x65\x66\141\64\x66\x61\x34");
        $rO = array("\x36\141\x30\71\x65\66\x36\67\x66\63\142\x63\x63\71\60\70", "\142\x62\66\67\x61\x65\x38\65\70\64\x63\141\x61\67\63\142", "\x33\x63\66\x65\146\63\67\62\x66\x65\71\x34\146\70\x32\142", "\x61\x35\64\x66\x66\65\63\141\65\x66\61\x64\63\66\146\61", "\x35\61\60\145\x35\62\x37\146\141\x64\x65\x36\70\62\x64\x31", "\71\x62\60\65\x36\70\x38\x63\x32\x62\63\x65\66\143\61\146", "\61\x66\x38\x33\x64\x39\x61\142\146\142\x34\x31\x62\144\66\x62", "\65\x62\145\x30\x63\144\x31\x39\61\63\67\x65\62\61\x37\x39");
        $nH = 0;
        SLo:
        if (!($nH < 8)) {
            goto jpe;
        }
        $P6[$nH] = new Math_BigInteger($P6[$nH], 16);
        $P6[$nH]->setPrecision(64);
        $rO[$nH] = new Math_BigInteger($rO[$nH], 16);
        $rO[$nH]->setPrecision(64);
        ASJ:
        $nH++;
        goto SLo;
        jpe:
        $VT = array("\x34\62\x38\x61\62\x66\71\x38\144\67\62\70\141\x65\x32\x32", "\67\x31\x33\x37\x34\x34\x39\61\x32\63\145\x66\66\x35\x63\x64", "\x62\x35\x63\x30\146\142\143\146\145\x63\64\x64\63\142\x32\146", "\x65\71\142\65\144\x62\x61\65\x38\61\x38\71\144\142\x62\x63", "\63\x39\x35\66\x63\62\65\142\146\x33\x34\x38\x62\x35\63\x38", "\x35\x39\146\x31\61\61\146\x31\142\x36\x30\65\x64\60\61\x39", "\x39\x32\63\x66\x38\62\x61\64\x61\146\61\x39\64\146\71\142", "\141\x62\61\x63\x35\x65\x64\65\144\x61\x36\144\x38\x31\61\x38", "\144\x38\60\x37\141\x61\71\70\141\x33\60\63\x30\62\64\62", "\x31\x32\70\63\65\142\x30\61\64\65\x37\x30\x36\x66\x62\145", "\62\x34\63\61\70\x35\142\145\x34\145\145\64\x62\x32\70\143", "\x35\x35\x30\x63\x37\x64\x63\63\x64\x35\146\146\x62\64\x65\62", "\x37\x32\142\145\x35\x64\67\64\146\62\67\x62\x38\x39\66\146", "\x38\60\x64\x65\142\x31\146\145\63\x62\x31\x36\x39\x36\142\61", "\71\142\144\x63\60\66\x61\x37\62\x35\x63\67\61\x32\x33\x35", "\143\61\71\x62\146\x31\x37\64\x63\x66\66\71\62\x36\x39\64", "\145\64\x39\x62\66\x39\x63\61\71\145\146\61\64\x61\144\x32", "\145\x66\142\145\x34\x37\70\66\x33\70\64\146\62\x35\145\63", "\60\146\143\61\71\144\x63\x36\x38\142\x38\143\x64\x35\142\65", "\62\x34\60\x63\141\61\x63\x63\67\x37\x61\x63\71\x63\x36\x35", "\x32\144\x65\x39\x32\143\66\146\x35\71\62\142\60\x32\67\65", "\x34\141\67\64\x38\x34\x61\x61\66\x65\141\66\145\64\70\63", "\65\143\x62\x30\141\71\144\143\142\144\x34\61\x66\142\144\64", "\x37\66\146\x39\x38\x38\144\141\70\x33\61\61\65\63\142\65", "\x39\70\63\x65\x35\61\65\x32\145\x65\66\x36\x64\x66\141\142", "\x61\x38\63\x31\x63\66\66\x64\62\144\142\x34\63\x32\x31\x30", "\142\x30\60\63\x32\67\143\70\71\70\x66\142\62\x31\63\146", "\x62\146\65\71\67\x66\143\x37\x62\145\x65\x66\60\145\145\64", "\x63\x36\x65\60\x30\x62\146\63\x33\x64\141\70\70\146\143\62", "\144\x35\x61\67\x39\x31\x34\x37\x39\63\60\141\141\x37\62\x35", "\60\66\143\x61\x36\x33\x35\61\145\60\x30\x33\x38\x32\x36\146", "\x31\x34\62\x39\x32\x39\x36\x37\x30\141\x30\145\x36\x65\67\x30", "\62\x37\x62\67\x30\x61\x38\x35\64\x36\144\62\x32\x66\146\143", "\x32\145\x31\142\62\x31\63\70\65\x63\x32\x36\x63\71\x32\66", "\x34\144\62\143\x36\144\x66\x63\65\x61\x63\64\x32\141\145\x64", "\65\63\x33\70\60\144\61\x33\71\144\x39\x35\142\x33\x64\146", "\x36\x35\x30\141\67\x33\x35\64\x38\142\x61\146\x36\63\144\x65", "\x37\x36\x36\x61\60\x61\142\x62\63\x63\x37\x37\x62\62\141\x38", "\70\61\x63\x32\143\71\62\x65\x34\x37\x65\144\x61\x65\x65\x36", "\x39\x32\67\62\x32\x63\x38\x35\61\x34\70\62\63\x35\63\142", "\x61\x32\x62\x66\145\x38\x61\x31\64\x63\x66\61\60\63\66\x34", "\141\70\61\x61\66\x36\x34\142\142\x63\64\62\63\60\x30\x31", "\x63\x32\x34\142\70\142\x37\60\144\x30\x66\70\x39\67\71\61", "\x63\67\66\x63\65\61\141\63\x30\66\x35\64\x62\x65\x33\60", "\144\61\x39\62\145\70\61\71\x64\x36\145\146\x35\62\x31\70", "\144\x36\x39\71\60\x36\62\x34\x35\65\x36\65\141\71\x31\60", "\146\64\x30\145\63\65\x38\65\65\67\67\x31\62\60\62\x61", "\61\x30\x36\141\x61\x30\67\60\x33\62\142\142\x64\x31\142\x38", "\x31\71\141\x34\143\x31\x31\66\142\x38\x64\x32\x64\60\143\70", "\61\x65\x33\x37\x36\143\x30\70\x35\61\x34\61\141\x62\65\63", "\62\67\x34\70\67\x37\x34\x63\144\x66\70\145\145\142\71\x39", "\63\64\142\x30\x62\143\x62\x35\145\x31\x39\x62\x34\x38\141\70", "\x33\x39\x31\143\60\x63\142\63\143\x35\x63\x39\x35\x61\66\x33", "\x34\x65\x64\70\141\x61\x34\x61\145\x33\64\x31\x38\141\143\142", "\x35\142\x39\143\143\141\x34\x66\x37\67\x36\x33\145\63\67\63", "\x36\70\x32\x65\66\x66\x66\63\x64\66\142\x32\142\x38\141\x33", "\x37\x34\70\x66\x38\62\145\x65\x35\144\145\146\x62\x32\146\x63", "\x37\x38\141\x35\x36\63\66\146\64\x33\61\67\x32\146\66\x30", "\70\x34\143\70\67\70\61\x34\141\x31\x66\60\x61\142\67\62", "\x38\143\x63\67\x30\62\60\70\x31\x61\x36\x34\x33\71\145\143", "\x39\60\x62\x65\x66\x66\146\x61\62\x33\x36\63\61\145\62\x38", "\x61\64\x35\60\66\143\x65\142\144\x65\x38\x32\x62\144\x65\x39", "\142\x65\x66\x39\141\63\146\x37\x62\x32\143\66\67\x39\61\x35", "\x63\66\x37\61\x37\x38\146\62\x65\63\67\62\65\63\x32\142", "\x63\141\x32\x37\63\145\x63\145\145\141\62\x36\66\x31\x39\143", "\x64\61\x38\x36\142\70\143\67\x32\x31\143\60\x63\x32\60\67", "\145\x61\x64\x61\x37\x64\144\x36\x63\144\x65\60\x65\x62\x31\x65", "\146\x35\67\144\x34\146\x37\x66\145\x65\x36\145\144\61\67\70", "\x30\66\146\x30\66\x37\141\141\x37\62\61\67\66\x66\142\x61", "\60\x61\x36\63\67\x64\143\65\x61\62\x63\x38\x39\70\x61\66", "\61\x31\x33\146\71\70\x30\64\142\145\146\71\60\x64\x61\x65", "\x31\x62\67\61\60\142\63\65\61\x33\61\143\x34\67\x31\x62", "\x32\70\x64\x62\67\67\x66\x35\62\63\60\64\x37\x64\70\64", "\x33\x32\x63\x61\141\142\67\x62\x34\60\143\x37\x32\64\x39\x33", "\x33\143\x39\145\x62\x65\60\x61\x31\x35\143\71\142\x65\142\143", "\64\x33\x31\x64\x36\x37\143\x34\x39\143\x31\x30\x30\x64\x34\x63", "\64\143\x63\65\x64\64\142\x65\x63\142\x33\145\x34\x32\x62\66", "\x35\71\x37\x66\x32\71\x39\143\x66\x63\x36\65\67\x65\x32\141", "\65\146\x63\142\66\146\x61\x62\x33\141\144\66\146\x61\145\x63", "\x36\x63\64\64\x31\x39\x38\143\64\141\64\67\65\70\x31\x37");
        $nH = 0;
        Hjy:
        if (!($nH < 80)) {
            goto z9W;
        }
        $VT[$nH] = new Math_BigInteger($VT[$nH], 16);
        sst:
        $nH++;
        goto Hjy;
        z9W:
        lGw:
        $Iq = $this->l == 48 ? $P6 : $rO;
        $fl = strlen($kg);
        $kg .= str_repeat(chr(0), 128 - ($fl + 16 & 127));
        $kg[$fl] = chr(128);
        $kg .= pack("\x4e\64", 0, 0, 0, $fl << 3);
        $qW = str_split($kg, 128);
        foreach ($qW as $pn) {
            $O0 = array();
            $nH = 0;
            fec:
            if (!($nH < 16)) {
                goto Lbn;
            }
            $Mj = new Math_BigInteger($this->_string_shift($pn, 8), 256);
            $Mj->setPrecision(64);
            $O0[] = $Mj;
            xo9:
            $nH++;
            goto fec;
            Lbn:
            $nH = 16;
            NAL:
            if (!($nH < 80)) {
                goto WF9;
            }
            $Mj = array($O0[$nH - 15]->bitwise_rightRotate(1), $O0[$nH - 15]->bitwise_rightRotate(8), $O0[$nH - 15]->bitwise_rightShift(7));
            $w0 = $Mj[0]->bitwise_xor($Mj[1]);
            $w0 = $w0->bitwise_xor($Mj[2]);
            $Mj = array($O0[$nH - 2]->bitwise_rightRotate(19), $O0[$nH - 2]->bitwise_rightRotate(61), $O0[$nH - 2]->bitwise_rightShift(6));
            $of = $Mj[0]->bitwise_xor($Mj[1]);
            $of = $of->bitwise_xor($Mj[2]);
            $O0[$nH] = $O0[$nH - 16]->copy();
            $O0[$nH] = $O0[$nH]->add($w0);
            $O0[$nH] = $O0[$nH]->add($O0[$nH - 7]);
            $O0[$nH] = $O0[$nH]->add($of);
            SgF:
            $nH++;
            goto NAL;
            WF9:
            $t6 = $Iq[0]->copy();
            $GD = $Iq[1]->copy();
            $R3 = $Iq[2]->copy();
            $Af = $Iq[3]->copy();
            $to = $Iq[4]->copy();
            $Dk = $Iq[5]->copy();
            $pf = $Iq[6]->copy();
            $Dt = $Iq[7]->copy();
            $nH = 0;
            ZyK:
            if (!($nH < 80)) {
                goto W23;
            }
            $Mj = array($t6->bitwise_rightRotate(28), $t6->bitwise_rightRotate(34), $t6->bitwise_rightRotate(39));
            $w0 = $Mj[0]->bitwise_xor($Mj[1]);
            $w0 = $w0->bitwise_xor($Mj[2]);
            $Mj = array($t6->bitwise_and($GD), $t6->bitwise_and($R3), $GD->bitwise_and($R3));
            $H4 = $Mj[0]->bitwise_xor($Mj[1]);
            $H4 = $H4->bitwise_xor($Mj[2]);
            $Lp = $w0->add($H4);
            $Mj = array($to->bitwise_rightRotate(14), $to->bitwise_rightRotate(18), $to->bitwise_rightRotate(41));
            $of = $Mj[0]->bitwise_xor($Mj[1]);
            $of = $of->bitwise_xor($Mj[2]);
            $Mj = array($to->bitwise_and($Dk), $pf->bitwise_and($to->bitwise_not()));
            $ig = $Mj[0]->bitwise_xor($Mj[1]);
            $wR = $Dt->add($of);
            $wR = $wR->add($ig);
            $wR = $wR->add($VT[$nH]);
            $wR = $wR->add($O0[$nH]);
            $Dt = $pf->copy();
            $pf = $Dk->copy();
            $Dk = $to->copy();
            $to = $Af->add($wR);
            $Af = $R3->copy();
            $R3 = $GD->copy();
            $GD = $t6->copy();
            $t6 = $wR->add($Lp);
            l5T:
            $nH++;
            goto ZyK;
            W23:
            $Iq = array($Iq[0]->add($t6), $Iq[1]->add($GD), $Iq[2]->add($R3), $Iq[3]->add($Af), $Iq[4]->add($to), $Iq[5]->add($Dk), $Iq[6]->add($pf), $Iq[7]->add($Dt));
            Us9:
        }
        eSz:
        $Mj = $Iq[0]->toBytes() . $Iq[1]->toBytes() . $Iq[2]->toBytes() . $Iq[3]->toBytes() . $Iq[4]->toBytes() . $Iq[5]->toBytes();
        if (!($this->l != 48)) {
            goto bKb;
        }
        $Mj .= $Iq[6]->toBytes() . $Iq[7]->toBytes();
        bKb:
        return $Mj;
    }
    function _rightRotate($Wq, $pY)
    {
        $q3 = 32 - $pY;
        $cQ = (1 << $q3) - 1;
        return $Wq << $q3 & 4294967295 | $Wq >> $pY & $cQ;
    }
    function _rightShift($Wq, $pY)
    {
        $cQ = (1 << 32 - $pY) - 1;
        return $Wq >> $pY & $cQ;
    }
    function _not($Wq)
    {
        return ~$Wq & 4294967295;
    }
    function _add()
    {
        static $MH;
        if (isset($MH)) {
            goto ilO;
        }
        $MH = pow(2, 32);
        ilO:
        $SV = 0;
        $GU = func_get_args();
        foreach ($GU as $RB) {
            $SV += $RB < 0 ? ($RB & 2147483647) + 2147483648 : $RB;
            bs2:
        }
        aX1:
        switch (true) {
            case is_int($SV):
            case version_compare(PHP_VERSION, "\x35\x2e\63\56\60") >= 0 && (php_uname("\x6d") & "\xdf\xdf\xdf") != "\101\122\x4d":
            case (PHP_OS & "\337\xdf\337") === "\x57\111\116":
                return fmod($SV, $MH);
        }
        fwQ:
        yYK:
        return fmod($SV, 2147483648) & 2147483647 | (fmod(floor($SV / 2147483648), 2) & 1) << 31;
    }
    function _string_shift(&$ys, $fu = 1)
    {
        $lb = substr($ys, 0, $fu);
        $ys = substr($ys, $fu);
        return $lb;
    }
}
