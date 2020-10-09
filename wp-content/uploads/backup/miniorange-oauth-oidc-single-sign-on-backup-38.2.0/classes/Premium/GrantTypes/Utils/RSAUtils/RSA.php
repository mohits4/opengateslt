<?php


namespace MoOauthClient\GrantTypes;

if (function_exists("\x63\162\x79\160\x74\137\x72\x61\x6e\144\x6f\x6d\137\163\164\x72\151\156\x67")) {
    goto Ez;
}
include_once "\122\141\156\x64\157\x6d\56\160\150\160";
Ez:
if (class_exists("\x43\x72\x79\160\x74\137\x48\141\163\x68")) {
    goto Yc;
}
include_once "\x48\141\163\x68\x2e\160\x68\160";
Yc:
define("\103\122\x59\120\124\x5f\x52\123\101\137\x45\x4e\x43\122\x59\120\x54\x49\117\x4e\137\117\101\105\120", 1);
define("\103\x52\131\120\x54\137\x52\x53\101\137\x45\x4e\103\x52\x59\120\x54\x49\x4f\x4e\x5f\x50\x4b\103\x53\x31", 2);
define("\103\122\131\120\124\137\x52\x53\x41\x5f\105\116\x43\x52\131\x50\x54\111\117\x4e\137\116\x4f\x4e\x45", 3);
define("\x43\122\131\x50\124\137\x52\123\x41\137\x53\111\x47\116\x41\124\x55\122\x45\x5f\120\123\123", 1);
define("\x43\122\131\120\x54\x5f\122\123\101\137\x53\111\x47\116\x41\x54\x55\x52\x45\x5f\120\x4b\103\x53\x31", 2);
define("\103\122\x59\120\124\137\122\123\101\x5f\x41\123\x4e\61\137\111\x4e\124\105\107\105\x52", 2);
define("\x43\122\131\120\x54\x5f\122\x53\x41\x5f\101\123\116\61\x5f\x42\x49\x54\x53\x54\x52\x49\x4e\107", 3);
define("\x43\122\131\120\x54\x5f\x52\x53\101\x5f\x41\x53\x4e\61\x5f\x4f\103\x54\x45\x54\x53\x54\122\x49\116\x47", 4);
define("\x43\x52\131\x50\x54\137\x52\123\101\x5f\101\x53\x4e\61\x5f\x4f\x42\x4a\105\103\124", 6);
define("\103\122\131\x50\124\137\x52\123\101\137\101\123\x4e\x31\137\123\x45\x51\x55\x45\x4e\103\105", 48);
define("\103\122\131\120\124\x5f\122\123\x41\137\115\117\x44\x45\137\x49\x4e\124\x45\122\116\101\x4c", 1);
define("\103\122\x59\x50\124\x5f\122\123\x41\x5f\115\117\x44\x45\x5f\117\120\105\x4e\x53\x53\x4c", 2);
define("\x43\x52\x59\x50\x54\137\122\x53\x41\137\117\120\105\x4e\123\123\x4c\x5f\x43\117\116\x46\111\107", dirname(__FILE__) . "\57\x2e\x2e\x2f\157\x70\145\156\163\163\x6c\56\143\x6e\x66");
define("\x43\x52\131\120\124\x5f\122\123\101\x5f\x50\x52\x49\x56\x41\124\105\137\x46\x4f\122\115\x41\124\x5f\120\x4b\x43\x53\x31", 0);
define("\x43\x52\131\120\124\x5f\x52\x53\x41\x5f\x50\x52\x49\x56\x41\124\105\x5f\x46\x4f\x52\x4d\101\x54\x5f\120\125\x54\x54\x59", 1);
define("\103\122\131\x50\x54\x5f\x52\123\101\137\x50\x52\111\126\x41\124\105\x5f\106\117\x52\115\101\124\x5f\x58\115\114", 2);
define("\x43\x52\x59\x50\124\137\122\123\x41\137\120\122\111\x56\x41\124\x45\x5f\106\117\122\x4d\101\x54\x5f\120\113\103\x53\70", 8);
define("\x43\122\x59\120\124\x5f\x52\123\x41\x5f\120\x55\x42\114\111\x43\137\106\x4f\x52\x4d\101\x54\x5f\x52\x41\x57", 3);
define("\103\x52\x59\120\124\x5f\122\123\101\x5f\120\x55\102\x4c\x49\x43\137\106\x4f\x52\115\101\124\x5f\x50\x4b\103\123\x31", 4);
define("\x43\x52\x59\x50\124\137\x52\123\101\x5f\120\x55\x42\114\x49\x43\x5f\x46\x4f\x52\x4d\x41\124\137\120\113\x43\x53\x31\137\122\101\127", 4);
define("\103\x52\131\120\x54\x5f\x52\x53\101\x5f\120\x55\x42\x4c\111\103\137\106\x4f\x52\115\x41\124\137\x58\115\114", 5);
define("\103\122\131\120\124\137\x52\123\x41\137\x50\125\102\114\111\103\137\106\x4f\122\x4d\101\x54\x5f\117\120\x45\116\x53\123\x48", 6);
define("\103\x52\x59\120\124\137\x52\123\x41\x5f\120\125\x42\x4c\111\x43\137\106\x4f\x52\115\101\x54\x5f\120\x4b\x43\x53\70", 7);
class Crypt_RSA
{
    var $zero;
    var $one;
    var $privateKeyFormat = CRYPT_RSA_PRIVATE_FORMAT_PKCS1;
    var $publicKeyFormat = CRYPT_RSA_PUBLIC_FORMAT_PKCS8;
    var $modulus;
    var $k;
    var $exponent;
    var $primes;
    var $exponents;
    var $coefficients;
    var $hashName;
    var $hash;
    var $hLen;
    var $sLen;
    var $mgfHash;
    var $mgfHLen;
    var $encryptionMode = CRYPT_RSA_ENCRYPTION_OAEP;
    var $signatureMode = CRYPT_RSA_SIGNATURE_PSS;
    var $publicExponent = false;
    var $password = false;
    var $components = array();
    var $current;
    var $configFile;
    var $comment = "\160\150\160\163\x65\143\x6c\151\x62\55\x67\145\156\145\162\141\x74\145\x64\55\x6b\x65\x79";
    function __construct()
    {
        if (class_exists("\x4d\141\x74\150\x5f\102\x69\147\111\156\x74\145\x67\145\x72")) {
            goto CD;
        }
        include_once dirname(__FILE__) . "\x2f\x4d\141\x74\150\57\x42\x69\147\111\x6e\164\x65\x67\145\162\x2e\160\150\160";
        CD:
        $this->configFile = CRYPT_RSA_OPENSSL_CONFIG;
        if (defined("\x43\x52\x59\x50\124\137\x52\123\x41\137\x4d\117\x44\x45")) {
            goto q3;
        }
        switch (true) {
            case defined("\115\101\x54\110\137\102\x49\x47\x49\x4e\x54\x45\x47\105\x52\137\117\120\x45\116\x53\x53\114\137\104\x49\123\101\x42\x4c\105"):
                define("\x43\x52\x59\120\124\x5f\x52\123\101\x5f\115\117\x44\x45", CRYPT_RSA_MODE_INTERNAL);
                goto r0;
            case !function_exists("\x6f\160\145\156\x73\x73\x6c\137\x70\x6b\145\171\137\x67\145\x74\x5f\x64\145\164\x61\151\x6c\163"):
                define("\103\x52\131\x50\x54\137\x52\x53\101\137\115\x4f\x44\105", CRYPT_RSA_MODE_INTERNAL);
                goto r0;
            case extension_loaded("\x6f\x70\x65\156\x73\163\154") && version_compare(PHP_VERSION, "\64\56\x32\56\60", "\x3e\75") && file_exists($this->configFile):
                ob_start();
                @phpinfo();
                $Dc = ob_get_contents();
                ob_end_clean();
                preg_match_all("\x23\117\160\145\156\123\123\114\x20\50\x48\145\141\x64\x65\162\174\x4c\x69\142\x72\141\x72\x79\x29\40\x56\x65\162\x73\x69\157\x6e\x28\x2e\52\x29\43\151\155", $Dc, $gt);
                $kT = array();
                if (empty($gt[1])) {
                    goto V8;
                }
                $nH = 0;
                P1:
                if (!($nH < count($gt[1]))) {
                    goto gQ;
                }
                $l_ = trim(str_replace("\75\76", '', strip_tags($gt[2][$nH])));
                if (!preg_match("\57\x28\134\x64\x2b\x5c\56\x5c\144\x2b\x5c\56\134\144\53\x29\57\x69", $l_, $kg)) {
                    goto ni;
                }
                $kT[$gt[1][$nH]] = $kg[0];
                goto Mr;
                ni:
                $kT[$gt[1][$nH]] = $l_;
                Mr:
                rA:
                $nH++;
                goto P1;
                gQ:
                V8:
                switch (true) {
                    case !isset($kT["\x48\145\x61\x64\145\162"]):
                    case !isset($kT["\114\x69\x62\162\x61\x72\x79"]):
                    case $kT["\110\145\x61\144\145\x72"] == $kT["\x4c\x69\142\x72\x61\162\171"]:
                    case version_compare($kT["\x48\x65\141\144\x65\162"], "\61\56\x30\x2e\60") >= 0 && version_compare($kT["\114\151\142\162\x61\x72\x79"], "\x31\x2e\60\56\x30") >= 0:
                        define("\103\x52\x59\x50\124\137\122\x53\x41\x5f\115\x4f\104\x45", CRYPT_RSA_MODE_OPENSSL);
                        goto Cp;
                    default:
                        define("\103\x52\131\x50\124\x5f\x52\x53\101\137\115\x4f\x44\105", CRYPT_RSA_MODE_INTERNAL);
                        define("\115\101\124\110\137\x42\111\107\x49\x4e\124\105\107\x45\x52\137\117\120\x45\x4e\123\x53\114\x5f\104\111\x53\101\x42\114\x45", true);
                }
                lC:
                Cp:
                goto r0;
            default:
                define("\103\x52\x59\120\x54\137\122\x53\101\x5f\x4d\x4f\x44\x45", CRYPT_RSA_MODE_INTERNAL);
        }
        yL:
        r0:
        q3:
        $this->zero = new Math_BigInteger();
        $this->one = new Math_BigInteger(1);
        $this->hash = new Crypt_Hash("\163\150\x61\x31");
        $this->hLen = $this->hash->getLength();
        $this->hashName = "\163\150\141\61";
        $this->mgfHash = new Crypt_Hash("\163\x68\141\x31");
        $this->mgfHLen = $this->mgfHash->getLength();
    }
    function Crypt_RSA()
    {
        $this->__construct();
    }
    function createKey($Xr = 1024, $MR = false, $pU = array())
    {
        if (defined("\x43\122\x59\x50\124\x5f\x52\123\101\x5f\x45\130\120\x4f\x4e\105\x4e\124")) {
            goto ca;
        }
        define("\x43\x52\x59\x50\124\137\122\123\101\137\x45\130\120\117\x4e\x45\116\124", "\66\65\65\63\x37");
        ca:
        if (defined("\103\x52\x59\120\x54\137\122\x53\x41\137\123\x4d\x41\114\114\105\x53\x54\x5f\x50\122\111\x4d\x45")) {
            goto o9;
        }
        define("\x43\122\131\x50\x54\137\x52\123\x41\137\x53\x4d\x41\114\x4c\x45\123\124\137\120\122\111\x4d\105", 4096);
        o9:
        if (!(CRYPT_RSA_MODE == CRYPT_RSA_MODE_OPENSSL && $Xr >= 384 && CRYPT_RSA_EXPONENT == 65537)) {
            goto mL;
        }
        $jc = array();
        if (!isset($this->configFile)) {
            goto ND;
        }
        $jc["\x63\157\156\146\x69\147"] = $this->configFile;
        ND:
        $BR = openssl_pkey_new(array("\x70\x72\x69\x76\x61\x74\x65\x5f\153\x65\171\x5f\142\x69\x74\163" => $Xr) + $jc);
        openssl_pkey_export($BR, $Ux, null, $jc);
        $ye = openssl_pkey_get_details($BR);
        $ye = $ye["\153\x65\171"];
        $Ux = call_user_func_array(array($this, "\x5f\x63\x6f\156\x76\145\x72\164\120\162\151\166\141\x74\x65\x4b\145\x79"), array_values($this->_parseKey($Ux, CRYPT_RSA_PRIVATE_FORMAT_PKCS1)));
        $ye = call_user_func_array(array($this, "\137\143\157\x6e\x76\145\x72\x74\x50\165\142\154\x69\x63\x4b\x65\x79"), array_values($this->_parseKey($ye, CRYPT_RSA_PUBLIC_FORMAT_PKCS1)));
        g_:
        if (!(openssl_error_string() !== false)) {
            goto hH;
        }
        goto g_;
        hH:
        return array("\x70\162\x69\166\x61\x74\x65\x6b\145\171" => $Ux, "\x70\165\x62\x6c\151\x63\153\145\171" => $ye, "\160\x61\162\x74\151\141\154\x6b\x65\171" => false);
        mL:
        static $to;
        if (isset($to)) {
            goto HT;
        }
        $to = new Math_BigInteger(CRYPT_RSA_EXPONENT);
        HT:
        extract($this->_generateMinMax($Xr));
        $iH = $UO;
        $Mj = $Xr >> 1;
        if ($Mj > CRYPT_RSA_SMALLEST_PRIME) {
            goto Fs;
        }
        $Aj = 2;
        goto XN;
        Fs:
        $Aj = floor($Xr / CRYPT_RSA_SMALLEST_PRIME);
        $Mj = CRYPT_RSA_SMALLEST_PRIME;
        XN:
        extract($this->_generateMinMax($Mj + $Xr % $Mj));
        $p5 = $uR;
        extract($this->_generateMinMax($Mj));
        $nP = new Math_BigInteger();
        $Lc = $this->one->copy();
        if (!empty($pU)) {
            goto xN;
        }
        $tC = $xF = $p2 = array();
        $A1 = array("\164\157\x70" => $this->one->copy(), "\x62\x6f\164\164\x6f\155" => false);
        goto uB;
        xN:
        extract(unserialize($pU));
        uB:
        $Qd = time();
        $ya = count($p2) + 1;
        nM:
        $nH = $ya;
        pg:
        if (!($nH <= $Aj)) {
            goto PK;
        }
        if (!($MR !== false)) {
            goto q8;
        }
        $MR -= time() - $Qd;
        $Qd = time();
        if (!($MR <= 0)) {
            goto Sg;
        }
        return array("\160\x72\x69\x76\141\164\x65\153\x65\171" => '', "\x70\x75\x62\154\151\143\x6b\145\x79" => '', "\x70\x61\x72\164\x69\x61\154\153\x65\171" => serialize(array("\160\162\x69\155\x65\163" => $p2, "\x63\x6f\145\x66\x66\x69\143\151\x65\156\164\163" => $xF, "\154\143\x6d" => $A1, "\x65\x78\x70\x6f\x6e\145\156\x74\x73" => $tC)));
        Sg:
        q8:
        if ($nH == $Aj) {
            goto wc;
        }
        $p2[$nH] = $nP->randomPrime($UO, $uR, $MR);
        goto qG;
        wc:
        list($UO, $Mj) = $iH->divide($Lc);
        if ($Mj->equals($this->zero)) {
            goto Ig;
        }
        $UO = $UO->add($this->one);
        Ig:
        $p2[$nH] = $nP->randomPrime($UO, $p5, $MR);
        qG:
        if (!($p2[$nH] === false)) {
            goto si;
        }
        if (count($p2) > 1) {
            goto xU;
        }
        array_pop($p2);
        $Vz = serialize(array("\x70\x72\x69\155\x65\163" => $p2, "\x63\x6f\x65\146\x66\x69\143\x69\145\156\x74\x73" => $xF, "\154\x63\x6d" => $A1, "\x65\170\160\157\x6e\145\156\164\x73" => $tC));
        goto K7;
        xU:
        $Vz = '';
        K7:
        return array("\160\162\151\x76\x61\164\145\153\x65\x79" => '', "\160\x75\142\154\x69\143\x6b\145\x79" => '', "\x70\x61\x72\164\151\141\x6c\x6b\x65\x79" => $Vz);
        si:
        if (!($nH > 2)) {
            goto F3;
        }
        $xF[$nH] = $Lc->modInverse($p2[$nH]);
        F3:
        $Lc = $Lc->multiply($p2[$nH]);
        $Mj = $p2[$nH]->subtract($this->one);
        $A1["\x74\x6f\160"] = $A1["\x74\x6f\x70"]->multiply($Mj);
        $A1["\x62\x6f\164\x74\157\x6d"] = $A1["\142\157\x74\x74\x6f\155"] === false ? $Mj : $A1["\142\x6f\x74\164\157\155"]->gcd($Mj);
        $tC[$nH] = $to->modInverse($Mj);
        eC:
        $nH++;
        goto pg;
        PK:
        list($Mj) = $A1["\x74\x6f\160"]->divide($A1["\x62\x6f\x74\x74\x6f\x6d"]);
        $cz = $Mj->gcd($to);
        $ya = 1;
        if (!$cz->equals($this->one)) {
            goto nM;
        }
        Wv:
        $Af = $to->modInverse($Mj);
        $xF[2] = $p2[2]->modInverse($p2[1]);
        return array("\x70\x72\151\x76\141\x74\145\153\145\171" => $this->_convertPrivateKey($Lc, $to, $Af, $p2, $tC, $xF), "\160\x75\x62\154\x69\143\x6b\x65\171" => $this->_convertPublicKey($Lc, $to), "\160\x61\x72\x74\x69\141\154\x6b\x65\x79" => false);
    }
    function _convertPrivateKey($Lc, $to, $Af, $p2, $tC, $xF)
    {
        $bU = $this->privateKeyFormat != CRYPT_RSA_PRIVATE_FORMAT_XML;
        $Aj = count($p2);
        $h5 = array("\166\x65\x72\x73\151\x6f\156" => $Aj == 2 ? chr(0) : chr(1), "\155\x6f\x64\165\154\165\163" => $Lc->toBytes($bU), "\160\x75\142\154\151\143\x45\170\160\157\156\x65\x6e\164" => $to->toBytes($bU), "\x70\x72\x69\x76\x61\x74\145\x45\x78\160\x6f\156\x65\x6e\x74" => $Af->toBytes($bU), "\x70\x72\x69\155\x65\x31" => $p2[1]->toBytes($bU), "\160\x72\151\x6d\x65\62" => $p2[2]->toBytes($bU), "\x65\170\x70\157\x6e\x65\x6e\164\61" => $tC[1]->toBytes($bU), "\145\170\x70\157\156\x65\156\164\x32" => $tC[2]->toBytes($bU), "\x63\x6f\145\x66\146\151\143\151\145\156\x74" => $xF[2]->toBytes($bU));
        switch ($this->privateKeyFormat) {
            case CRYPT_RSA_PRIVATE_FORMAT_XML:
                if (!($Aj != 2)) {
                    goto Oj;
                }
                return false;
                Oj:
                return "\x3c\x52\x53\x41\x4b\145\171\126\x61\x6c\x75\145\x3e\xd\12" . "\x20\40\74\x4d\157\x64\165\x6c\165\x73\76" . base64_encode($h5["\x6d\x6f\x64\165\154\165\163"]) . "\74\x2f\115\157\x64\x75\x6c\165\x73\76\xd\12" . "\40\40\x3c\105\x78\160\x6f\x6e\145\156\164\x3e" . base64_encode($h5["\x70\x75\x62\x6c\x69\x63\x45\x78\160\157\156\145\156\x74"]) . "\x3c\x2f\105\170\x70\x6f\x6e\x65\156\164\x3e\15\xa" . "\x20\40\74\120\76" . base64_encode($h5["\160\162\x69\x6d\x65\61"]) . "\x3c\57\120\76\15\12" . "\x20\x20\x3c\x51\x3e" . base64_encode($h5["\x70\x72\x69\x6d\145\62"]) . "\x3c\57\x51\76\xd\12" . "\40\40\74\104\120\76" . base64_encode($h5["\145\x78\x70\157\156\x65\156\x74\x31"]) . "\x3c\57\x44\x50\76\15\12" . "\40\40\x3c\104\121\x3e" . base64_encode($h5["\145\170\x70\x6f\x6e\145\156\164\62"]) . "\x3c\x2f\104\x51\76\xd\xa" . "\x20\x20\x3c\x49\156\166\145\162\163\x65\121\76" . base64_encode($h5["\x63\x6f\x65\x66\146\151\143\151\145\x6e\164"]) . "\x3c\x2f\x49\x6e\166\x65\162\x73\145\121\76\15\12" . "\x20\40\x3c\x44\x3e" . base64_encode($h5["\160\162\151\166\x61\164\145\105\170\160\157\x6e\x65\x6e\x74"]) . "\x3c\57\104\x3e\xd\12" . "\x3c\x2f\122\123\x41\113\145\171\126\141\154\165\x65\76";
                goto ua;
            case CRYPT_RSA_PRIVATE_FORMAT_PUTTY:
                if (!($Aj != 2)) {
                    goto WH;
                }
                return false;
                WH:
                $qi = "\120\165\x54\x54\x59\x2d\x55\x73\x65\162\x2d\113\x65\171\55\x46\x69\154\145\x2d\62\x3a\40\163\x73\x68\x2d\x72\163\x61\15\12\105\156\x63\162\171\x70\164\151\x6f\156\72\40";
                $fp = !empty($this->password) || is_string($this->password) ? "\141\x65\x73\62\65\66\55\x63\x62\x63" : "\x6e\157\156\x65";
                $qi .= $fp;
                $qi .= "\15\xa\103\157\x6d\155\145\x6e\164\x3a\40" . $this->comment . "\xd\xa";
                $aL = pack("\x4e\141\52\x4e\x61\x2a\x4e\x61\x2a", strlen("\x73\163\150\55\x72\163\141"), "\x73\x73\x68\x2d\x72\163\x61", strlen($h5["\x70\165\142\x6c\151\x63\x45\x78\160\x6f\x6e\145\x6e\x74"]), $h5["\160\x75\142\154\x69\x63\x45\170\x70\x6f\156\145\x6e\x74"], strlen($h5["\155\x6f\144\x75\x6c\165\x73"]), $h5["\x6d\157\x64\x75\x6c\165\163"]);
                $PG = pack("\x4e\x61\x2a\116\141\x2a\116\141\x2a\x4e\141\52", strlen("\163\x73\x68\x2d\x72\163\141"), "\163\163\x68\x2d\x72\163\141", strlen($fp), $fp, strlen($this->comment), $this->comment, strlen($aL), $aL);
                $aL = base64_encode($aL);
                $qi .= "\120\x75\x62\154\151\x63\x2d\x4c\x69\x6e\145\163\72\40" . (strlen($aL) + 63 >> 6) . "\15\xa";
                $qi .= chunk_split($aL, 64);
                $ZO = pack("\x4e\141\x2a\116\x61\x2a\116\x61\52\x4e\x61\x2a", strlen($h5["\160\162\151\166\141\x74\145\105\x78\x70\157\156\145\156\164"]), $h5["\160\x72\x69\x76\141\x74\145\x45\x78\x70\157\x6e\x65\x6e\164"], strlen($h5["\x70\x72\151\155\145\61"]), $h5["\x70\x72\x69\x6d\x65\61"], strlen($h5["\160\x72\151\155\x65\62"]), $h5["\x70\x72\151\x6d\x65\62"], strlen($h5["\x63\157\x65\x66\146\151\x63\151\145\156\x74"]), $h5["\143\157\145\146\x66\x69\x63\x69\145\x6e\x74"]);
                if (empty($this->password) && !is_string($this->password)) {
                    goto f9;
                }
                $ZO .= crypt_random_string(16 - (strlen($ZO) & 15));
                $PG .= pack("\116\141\52", strlen($ZO), $ZO);
                if (class_exists("\x43\x72\x79\x70\164\x5f\101\105\123")) {
                    goto kZ;
                }
                include_once "\103\162\x79\160\164\57\101\x45\123\56\160\150\x70";
                kZ:
                $Ft = 0;
                $zX = '';
                bd:
                if (!(strlen($zX) < 32)) {
                    goto TX;
                }
                $Mj = pack("\116\141\52", $Ft++, $this->password);
                $zX .= pack("\110\x2a", sha1($Mj));
                goto bd;
                TX:
                $zX = substr($zX, 0, 32);
                $lc = new Crypt_AES();
                $lc->setKey($zX);
                $lc->disablePadding();
                $ZO = $lc->encrypt($ZO);
                $qY = "\160\x75\164\164\x79\x2d\x70\x72\x69\x76\x61\164\x65\55\153\145\171\55\x66\151\x6c\x65\x2d\155\141\x63\x2d\x6b\x65\171" . $this->password;
                goto g0;
                f9:
                $PG .= pack("\x4e\x61\52", strlen($ZO), $ZO);
                $qY = "\x70\x75\x74\164\171\55\160\162\151\x76\141\164\x65\x2d\x6b\145\x79\55\146\x69\x6c\145\x2d\x6d\x61\143\x2d\x6b\145\x79";
                g0:
                $ZO = base64_encode($ZO);
                $qi .= "\x50\x72\151\166\x61\164\145\55\114\x69\156\x65\x73\72\x20" . (strlen($ZO) + 63 >> 6) . "\15\xa";
                $qi .= chunk_split($ZO, 64);
                if (class_exists("\103\162\x79\160\x74\137\110\141\x73\150")) {
                    goto VV;
                }
                include_once "\x43\x72\x79\160\164\57\110\141\163\150\56\160\x68\x70";
                VV:
                $Iq = new Crypt_Hash("\163\150\x61\61");
                $Iq->setKey(pack("\x48\52", sha1($qY)));
                $qi .= "\x50\x72\x69\x76\x61\x74\145\55\x4d\101\x43\72\40" . bin2hex($Iq->hash($PG)) . "\15\12";
                return $qi;
            default:
                $HJ = array();
                foreach ($h5 as $w9 => $sh) {
                    $HJ[$w9] = pack("\x43\141\x2a\x61\52", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($sh)), $sh);
                    J0:
                }
                kr:
                $dy = implode('', $HJ);
                if (!($Aj > 2)) {
                    goto SQ;
                }
                $ma = '';
                $nH = 3;
                ek:
                if (!($nH <= $Aj)) {
                    goto rZ;
                }
                $P9 = pack("\103\x61\52\x61\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($p2[$nH]->toBytes(true))), $p2[$nH]->toBytes(true));
                $P9 .= pack("\x43\x61\52\141\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($tC[$nH]->toBytes(true))), $tC[$nH]->toBytes(true));
                $P9 .= pack("\103\141\52\141\52", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($xF[$nH]->toBytes(true))), $xF[$nH]->toBytes(true));
                $ma .= pack("\103\141\52\x61\x2a", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($P9)), $P9);
                QM:
                $nH++;
                goto ek;
                rZ:
                $dy .= pack("\x43\x61\x2a\x61\x2a", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($ma)), $ma);
                SQ:
                $dy = pack("\x43\x61\x2a\141\x2a", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($dy)), $dy);
                if (!($this->privateKeyFormat == CRYPT_RSA_PRIVATE_FORMAT_PKCS8)) {
                    goto ul;
                }
                $Fi = pack("\x48\x2a", "\x33\x30\60\x64\x30\x36\x30\71\62\x61\x38\66\64\x38\x38\66\x66\x37\x30\144\60\x31\x30\x31\x30\61\x30\65\60\x30");
                $dy = pack("\x43\x61\x2a\x61\52\x43\x61\52\141\x2a", CRYPT_RSA_ASN1_INTEGER, "\1\0", $Fi, 4, $this->_encodeLength(strlen($dy)), $dy);
                $dy = pack("\x43\x61\52\x61\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($dy)), $dy);
                if (!empty($this->password) || is_string($this->password)) {
                    goto F2;
                }
                $dy = "\55\55\x2d\55\x2d\x42\x45\x47\111\116\x20\x50\x52\x49\126\101\x54\105\40\113\105\x59\x2d\55\x2d\55\x2d\xd\xa" . chunk_split(base64_encode($dy), 64) . "\55\55\x2d\55\55\x45\x4e\x44\x20\120\x52\111\126\x41\x54\x45\40\x4b\x45\x59\x2d\x2d\x2d\x2d\x2d";
                goto tm;
                F2:
                $ct = crypt_random_string(8);
                $pF = 2048;
                if (class_exists("\103\162\171\160\164\137\x44\105\123")) {
                    goto BX;
                }
                include_once "\103\x72\171\x70\x74\x2f\x44\105\123\56\x70\x68\x70";
                BX:
                $lc = new Crypt_DES();
                $lc->setPassword($this->password, "\x70\x62\153\144\146\x31", "\x6d\x64\x35", $ct, $pF);
                $dy = $lc->encrypt($dy);
                $mB = pack("\x43\x61\x2a\141\x2a\x43\141\52\116", CRYPT_RSA_ASN1_OCTETSTRING, $this->_encodeLength(strlen($ct)), $ct, CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(4), $pF);
                $as = "\x2a\206\110\206\367\xd\x1\5\x3";
                $d7 = pack("\x43\x61\x2a\x61\x2a\x43\x61\52\x61\52", CRYPT_RSA_ASN1_OBJECT, $this->_encodeLength(strlen($as)), $as, CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($mB)), $mB);
                $dy = pack("\x43\x61\52\x61\52\103\x61\52\141\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($d7)), $d7, CRYPT_RSA_ASN1_OCTETSTRING, $this->_encodeLength(strlen($dy)), $dy);
                $dy = pack("\103\141\x2a\141\x2a", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($dy)), $dy);
                $dy = "\x2d\55\x2d\55\x2d\x42\105\107\111\116\x20\x45\x4e\103\x52\x59\x50\x54\x45\x44\40\120\x52\111\126\x41\x54\105\x20\x4b\x45\131\x2d\x2d\x2d\55\x2d\xd\xa" . chunk_split(base64_encode($dy), 64) . "\x2d\55\x2d\x2d\55\x45\x4e\x44\x20\105\x4e\x43\122\131\120\x54\105\104\40\120\122\x49\x56\101\x54\x45\x20\113\x45\x59\x2d\x2d\x2d\x2d\x2d";
                tm:
                return $dy;
                ul:
                if (!empty($this->password) || is_string($this->password)) {
                    goto Qe;
                }
                $dy = "\55\x2d\55\55\55\x42\x45\107\x49\116\40\122\123\101\40\x50\x52\x49\x56\x41\x54\x45\40\113\x45\131\55\x2d\55\55\55\xd\12" . chunk_split(base64_encode($dy), 64) . "\55\x2d\x2d\x2d\55\x45\x4e\104\x20\x52\x53\101\40\120\x52\111\126\101\x54\105\x20\113\x45\131\55\x2d\x2d\55\55";
                goto Cj;
                Qe:
                $bM = crypt_random_string(8);
                $zX = pack("\110\x2a", md5($this->password . $bM));
                $zX .= substr(pack("\x48\52", md5($zX . $this->password . $bM)), 0, 8);
                if (class_exists("\103\162\171\x70\x74\137\x54\162\151\x70\154\145\104\x45\123")) {
                    goto AF;
                }
                include_once "\103\x72\171\160\x74\57\x54\162\x69\x70\x6c\145\104\x45\123\x2e\160\x68\160";
                AF:
                $lS = new Crypt_TripleDES();
                $lS->setKey($zX);
                $lS->setIV($bM);
                $bM = strtoupper(bin2hex($bM));
                $dy = "\55\x2d\x2d\x2d\x2d\x42\105\x47\111\x4e\x20\x52\x53\101\40\120\x52\x49\126\101\124\x45\40\x4b\105\131\x2d\55\x2d\55\x2d\15\xa" . "\x50\162\157\x63\x2d\x54\x79\x70\x65\x3a\x20\64\x2c\105\x4e\103\122\x59\120\124\105\x44\15\12" . "\104\x45\x4b\x2d\111\156\x66\157\x3a\x20\104\x45\x53\55\x45\x44\x45\63\55\103\102\x43\x2c{$bM}\15\12" . "\xd\xa" . chunk_split(base64_encode($lS->encrypt($dy)), 64) . "\x2d\55\55\55\55\105\x4e\104\40\122\123\101\x20\120\122\111\126\x41\x54\x45\40\x4b\105\x59\55\x2d\x2d\x2d\x2d";
                Cj:
                return $dy;
        }
        C2:
        ua:
    }
    function _convertPublicKey($Lc, $to)
    {
        $bU = $this->publicKeyFormat != CRYPT_RSA_PUBLIC_FORMAT_XML;
        $dR = $Lc->toBytes($bU);
        $Cs = $to->toBytes($bU);
        switch ($this->publicKeyFormat) {
            case CRYPT_RSA_PUBLIC_FORMAT_RAW:
                return array("\x65" => $to->copy(), "\x6e" => $Lc->copy());
            case CRYPT_RSA_PUBLIC_FORMAT_XML:
                return "\74\x52\x53\x41\x4b\x65\x79\x56\x61\x6c\165\x65\x3e\15\12" . "\x20\40\74\115\x6f\x64\165\154\165\x73\x3e" . base64_encode($dR) . "\74\57\x4d\157\144\x75\x6c\165\163\76\xd\12" . "\x20\x20\74\x45\x78\x70\157\156\x65\156\x74\76" . base64_encode($Cs) . "\x3c\x2f\x45\x78\x70\157\156\x65\x6e\x74\76\15\xa" . "\74\x2f\x52\123\x41\113\145\x79\x56\x61\x6c\165\x65\x3e";
                goto Fh;
            case CRYPT_RSA_PUBLIC_FORMAT_OPENSSH:
                $ud = pack("\116\x61\x2a\116\141\52\116\x61\x2a", strlen("\163\x73\150\x2d\x72\x73\x61"), "\163\163\x68\55\x72\x73\x61", strlen($Cs), $Cs, strlen($dR), $dR);
                $ud = "\163\x73\150\55\162\x73\x61\40" . base64_encode($ud) . "\x20" . $this->comment;
                return $ud;
            default:
                $HJ = array("\x6d\x6f\x64\165\154\x75\x73" => pack("\103\141\52\141\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($dR)), $dR), "\x70\x75\x62\154\x69\x63\x45\170\x70\157\x6e\x65\x6e\x74" => pack("\x43\x61\52\x61\x2a", CRYPT_RSA_ASN1_INTEGER, $this->_encodeLength(strlen($Cs)), $Cs));
                $ud = pack("\103\x61\52\x61\x2a\x61\52", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($HJ["\x6d\x6f\x64\165\154\165\x73"]) + strlen($HJ["\160\165\x62\154\151\x63\105\x78\160\x6f\x6e\145\x6e\x74"])), $HJ["\155\157\x64\165\x6c\x75\163"], $HJ["\160\165\142\x6c\151\143\x45\170\x70\x6f\x6e\x65\156\164"]);
                if ($this->publicKeyFormat == CRYPT_RSA_PUBLIC_FORMAT_PKCS1_RAW) {
                    goto mO;
                }
                $Fi = pack("\x48\52", "\x33\60\60\x64\60\66\x30\x39\62\141\70\66\64\x38\70\x36\x66\67\60\144\60\61\x30\61\60\61\x30\65\60\60");
                $ud = chr(0) . $ud;
                $ud = chr(3) . $this->_encodeLength(strlen($ud)) . $ud;
                $ud = pack("\103\141\x2a\x61\x2a", CRYPT_RSA_ASN1_SEQUENCE, $this->_encodeLength(strlen($Fi . $ud)), $Fi . $ud);
                $ud = "\x2d\55\x2d\55\x2d\x42\x45\x47\x49\116\40\x50\125\x42\x4c\111\103\40\113\105\x59\x2d\55\x2d\x2d\x2d\15\12" . chunk_split(base64_encode($ud), 64) . "\x2d\x2d\x2d\x2d\55\x45\116\104\40\x50\125\102\x4c\111\103\x20\113\x45\131\x2d\55\x2d\55\x2d";
                goto Ue;
                mO:
                $ud = "\55\55\55\55\x2d\x42\x45\x47\111\116\40\122\x53\101\40\x50\x55\x42\x4c\x49\x43\40\113\105\x59\55\x2d\55\55\x2d\xd\12" . chunk_split(base64_encode($ud), 64) . "\55\x2d\x2d\x2d\55\x45\116\x44\40\x52\123\x41\40\120\125\x42\x4c\111\103\x20\113\105\x59\55\55\55\x2d\x2d";
                Ue:
                return $ud;
        }
        Nd:
        Fh:
    }
    function _parseKey($qi, $ds)
    {
        if (!($ds != CRYPT_RSA_PUBLIC_FORMAT_RAW && !is_string($qi))) {
            goto Hn;
        }
        return false;
        Hn:
        switch ($ds) {
            case CRYPT_RSA_PUBLIC_FORMAT_RAW:
                if (is_array($qi)) {
                    goto Vn;
                }
                return false;
                Vn:
                $HJ = array();
                switch (true) {
                    case isset($qi["\x65"]):
                        $HJ["\160\165\142\154\151\143\x45\170\160\157\156\145\x6e\x74"] = $qi["\x65"]->copy();
                        goto L_;
                    case isset($qi["\x65\x78\160\157\156\x65\156\x74"]):
                        $HJ["\x70\x75\x62\x6c\x69\x63\105\170\160\x6f\156\145\x6e\x74"] = $qi["\145\170\x70\157\156\x65\x6e\x74"]->copy();
                        goto L_;
                    case isset($qi["\x70\165\142\x6c\x69\x63\x45\170\160\157\x6e\x65\156\164"]):
                        $HJ["\x70\165\x62\x6c\151\143\105\x78\x70\x6f\x6e\145\156\164"] = $qi["\x70\165\142\154\x69\143\x45\170\160\x6f\156\145\156\164"]->copy();
                        goto L_;
                    case isset($qi[0]):
                        $HJ["\160\165\x62\x6c\151\143\x45\170\160\x6f\156\145\156\x74"] = $qi[0]->copy();
                }
                zc:
                L_:
                switch (true) {
                    case isset($qi["\156"]):
                        $HJ["\x6d\157\144\165\x6c\x75\163"] = $qi["\x6e"]->copy();
                        goto lE;
                    case isset($qi["\x6d\x6f\x64\x75\154\157"]):
                        $HJ["\155\157\x64\x75\x6c\165\163"] = $qi["\x6d\x6f\144\x75\x6c\157"]->copy();
                        goto lE;
                    case isset($qi["\x6d\157\x64\x75\154\165\x73"]):
                        $HJ["\x6d\x6f\144\165\x6c\165\x73"] = $qi["\x6d\157\x64\165\x6c\x75\163"]->copy();
                        goto lE;
                    case isset($qi[1]):
                        $HJ["\155\157\144\165\x6c\x75\x73"] = $qi[1]->copy();
                }
                gP:
                lE:
                return isset($HJ["\155\157\144\x75\154\165\163"]) && isset($HJ["\x70\165\x62\x6c\x69\x63\105\x78\160\157\156\145\x6e\164"]) ? $HJ : false;
            case CRYPT_RSA_PRIVATE_FORMAT_PKCS1:
            case CRYPT_RSA_PRIVATE_FORMAT_PKCS8:
            case CRYPT_RSA_PUBLIC_FORMAT_PKCS1:
                if (preg_match("\43\x44\x45\113\55\111\x6e\146\157\x3a\40\x28\x2e\x2b\x29\x2c\x28\x2e\53\x29\43", $qi, $gt)) {
                    goto Qc;
                }
                $Ix = $this->_extractBER($qi);
                goto cE;
                Qc:
                $bM = pack("\x48\52", trim($gt[2]));
                $zX = pack("\110\52", md5($this->password . substr($bM, 0, 8)));
                $zX .= pack("\110\52", md5($zX . $this->password . substr($bM, 0, 8)));
                $qi = preg_replace("\43\136\x28\77\72\120\x72\x6f\143\x2d\124\x79\160\x65\x7c\104\x45\113\55\111\156\x66\x6f\51\x3a\40\x2e\x2a\43\x6d", '', $qi);
                $rQ = $this->_extractBER($qi);
                if (!($rQ === false)) {
                    goto JJ;
                }
                $rQ = $qi;
                JJ:
                switch ($gt[1]) {
                    case "\x41\x45\123\x2d\62\65\x36\55\103\102\x43":
                        if (class_exists("\103\162\x79\x70\164\137\101\105\x53")) {
                            goto t0;
                        }
                        include_once "\x43\162\171\160\x74\x2f\x41\x45\123\56\x70\x68\160";
                        t0:
                        $lc = new Crypt_AES();
                        goto ov;
                    case "\x41\x45\123\55\61\x32\70\55\103\102\103":
                        if (class_exists("\103\162\x79\x70\x74\137\x41\105\123")) {
                            goto mq;
                        }
                        include_once "\x43\162\x79\x70\164\x2f\x41\105\123\x2e\160\x68\x70";
                        mq:
                        $zX = substr($zX, 0, 16);
                        $lc = new Crypt_AES();
                        goto ov;
                    case "\104\x45\123\x2d\x45\104\x45\x33\x2d\103\x46\102":
                        if (class_exists("\x43\x72\x79\160\x74\137\x54\x72\151\x70\154\x65\104\105\x53")) {
                            goto hU;
                        }
                        include_once "\x43\x72\x79\160\164\57\124\162\151\x70\x6c\x65\104\105\x53\56\160\x68\160";
                        hU:
                        $lc = new Crypt_TripleDES(CRYPT_DES_MODE_CFB);
                        goto ov;
                    case "\x44\105\123\x2d\105\104\105\63\x2d\103\102\x43":
                        if (class_exists("\103\x72\x79\160\x74\x5f\x54\x72\151\x70\154\145\x44\105\123")) {
                            goto aN;
                        }
                        include_once "\x43\x72\x79\x70\164\x2f\124\x72\151\160\x6c\x65\x44\x45\x53\x2e\x70\x68\x70";
                        aN:
                        $zX = substr($zX, 0, 24);
                        $lc = new Crypt_TripleDES();
                        goto ov;
                    case "\x44\x45\x53\55\x43\102\103":
                        if (class_exists("\103\x72\171\160\x74\137\x44\105\x53")) {
                            goto PJ;
                        }
                        include_once "\x43\x72\x79\x70\x74\x2f\104\x45\123\56\x70\150\160";
                        PJ:
                        $lc = new Crypt_DES();
                        goto ov;
                    default:
                        return false;
                }
                BW:
                ov:
                $lc->setKey($zX);
                $lc->setIV($bM);
                $Ix = $lc->decrypt($rQ);
                cE:
                if (!($Ix !== false)) {
                    goto Dz;
                }
                $qi = $Ix;
                Dz:
                $HJ = array();
                if (!(ord($this->_string_shift($qi)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto pw;
                }
                return false;
                pw:
                if (!($this->_decodeLength($qi) != strlen($qi))) {
                    goto HR;
                }
                return false;
                HR:
                $aA = ord($this->_string_shift($qi));
                if (!($aA == CRYPT_RSA_ASN1_INTEGER && substr($qi, 0, 3) == "\1\0\x30")) {
                    goto vR;
                }
                $this->_string_shift($qi, 3);
                $aA = CRYPT_RSA_ASN1_SEQUENCE;
                vR:
                if (!($aA == CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto yg;
                }
                $Mj = $this->_string_shift($qi, $this->_decodeLength($qi));
                if (!(ord($this->_string_shift($Mj)) != CRYPT_RSA_ASN1_OBJECT)) {
                    goto YV;
                }
                return false;
                YV:
                $fl = $this->_decodeLength($Mj);
                switch ($this->_string_shift($Mj, $fl)) {
                    case "\x2a\206\x48\x86\367\15\1\1\1":
                        goto VB;
                    case "\x2a\x86\110\206\367\xd\1\x5\x3":
                        if (!(ord($this->_string_shift($Mj)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                            goto TP;
                        }
                        return false;
                        TP:
                        if (!($this->_decodeLength($Mj) != strlen($Mj))) {
                            goto Ex;
                        }
                        return false;
                        Ex:
                        $this->_string_shift($Mj);
                        $ct = $this->_string_shift($Mj, $this->_decodeLength($Mj));
                        if (!(ord($this->_string_shift($Mj)) != CRYPT_RSA_ASN1_INTEGER)) {
                            goto Oh;
                        }
                        return false;
                        Oh:
                        $this->_decodeLength($Mj);
                        list(, $pF) = unpack("\116", str_pad($Mj, 4, chr(0), STR_PAD_LEFT));
                        $this->_string_shift($qi);
                        $fl = $this->_decodeLength($qi);
                        if (!(strlen($qi) != $fl)) {
                            goto oQ;
                        }
                        return false;
                        oQ:
                        if (class_exists("\x43\162\171\x70\164\137\104\105\x53")) {
                            goto rD;
                        }
                        include_once "\x43\162\x79\x70\x74\x2f\104\x45\123\56\x70\150\160";
                        rD:
                        $lc = new Crypt_DES();
                        $lc->setPassword($this->password, "\x70\142\x6b\144\146\x31", "\x6d\x64\65", $ct, $pF);
                        $qi = $lc->decrypt($qi);
                        if (!($qi === false)) {
                            goto b1;
                        }
                        return false;
                        b1:
                        return $this->_parseKey($qi, CRYPT_RSA_PRIVATE_FORMAT_PKCS1);
                    default:
                        return false;
                }
                He:
                VB:
                $aA = ord($this->_string_shift($qi));
                $this->_decodeLength($qi);
                if (!($aA == CRYPT_RSA_ASN1_BITSTRING)) {
                    goto RM;
                }
                $this->_string_shift($qi);
                RM:
                if (!(ord($this->_string_shift($qi)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto fr;
                }
                return false;
                fr:
                if (!($this->_decodeLength($qi) != strlen($qi))) {
                    goto nf;
                }
                return false;
                nf:
                $aA = ord($this->_string_shift($qi));
                yg:
                if (!($aA != CRYPT_RSA_ASN1_INTEGER)) {
                    goto ZK;
                }
                return false;
                ZK:
                $fl = $this->_decodeLength($qi);
                $Mj = $this->_string_shift($qi, $fl);
                if (!(strlen($Mj) != 1 || ord($Mj) > 2)) {
                    goto Rd;
                }
                $HJ["\x6d\x6f\x64\165\x6c\x75\x73"] = new Math_BigInteger($Mj, 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ[$ds == CRYPT_RSA_PUBLIC_FORMAT_PKCS1 ? "\x70\165\x62\154\x69\143\105\x78\x70\x6f\x6e\145\156\164" : "\x70\x72\151\166\141\164\145\105\x78\160\x6f\x6e\x65\156\164"] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                return $HJ;
                Rd:
                if (!(ord($this->_string_shift($qi)) != CRYPT_RSA_ASN1_INTEGER)) {
                    goto ZV;
                }
                return false;
                ZV:
                $fl = $this->_decodeLength($qi);
                $HJ["\x6d\x6f\144\165\154\165\163"] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\160\x75\x62\x6c\x69\143\105\170\x70\157\156\145\156\x74"] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\160\162\151\166\141\164\x65\x45\x78\x70\157\x6e\145\156\x74"] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\160\162\x69\x6d\x65\163"] = array(1 => new Math_BigInteger($this->_string_shift($qi, $fl), 256));
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\x70\x72\x69\155\x65\163"][] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\x65\170\x70\157\156\x65\x6e\164\163"] = array(1 => new Math_BigInteger($this->_string_shift($qi, $fl), 256));
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\145\170\160\157\x6e\145\156\164\163"][] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\143\157\x65\146\x66\x69\x63\x69\x65\156\x74\x73"] = array(2 => new Math_BigInteger($this->_string_shift($qi, $fl), 256));
                if (empty($qi)) {
                    goto aQ;
                }
                if (!(ord($this->_string_shift($qi)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto T6;
                }
                return false;
                T6:
                $this->_decodeLength($qi);
                dc:
                if (empty($qi)) {
                    goto OB;
                }
                if (!(ord($this->_string_shift($qi)) != CRYPT_RSA_ASN1_SEQUENCE)) {
                    goto qo;
                }
                return false;
                qo:
                $this->_decodeLength($qi);
                $qi = substr($qi, 1);
                $fl = $this->_decodeLength($qi);
                $HJ["\160\x72\x69\x6d\145\x73"][] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\x65\170\x70\157\156\145\x6e\x74\163"][] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                $this->_string_shift($qi);
                $fl = $this->_decodeLength($qi);
                $HJ["\x63\x6f\x65\146\x66\151\143\151\x65\156\x74\x73"][] = new Math_BigInteger($this->_string_shift($qi, $fl), 256);
                goto dc;
                OB:
                aQ:
                return $HJ;
            case CRYPT_RSA_PUBLIC_FORMAT_OPENSSH:
                $LX = explode("\40", $qi, 3);
                $qi = isset($LX[1]) ? base64_decode($LX[1]) : false;
                if (!($qi === false)) {
                    goto ou;
                }
                return false;
                ou:
                $XT = isset($LX[2]) ? $LX[2] : false;
                $lf = substr($qi, 0, 11) == "\0\x0\x0\7\163\x73\150\x2d\x72\163\x61";
                if (!(strlen($qi) <= 4)) {
                    goto q9;
                }
                return false;
                q9:
                extract(unpack("\x4e\x6c\145\156\x67\x74\150", $this->_string_shift($qi, 4)));
                $Cs = new Math_BigInteger($this->_string_shift($qi, $fl), -256);
                if (!(strlen($qi) <= 4)) {
                    goto V3;
                }
                return false;
                V3:
                extract(unpack("\116\x6c\x65\156\x67\164\150", $this->_string_shift($qi, 4)));
                $dR = new Math_BigInteger($this->_string_shift($qi, $fl), -256);
                if ($lf && strlen($qi)) {
                    goto bI;
                }
                return strlen($qi) ? false : array("\x6d\x6f\144\x75\154\165\163" => $dR, "\160\165\x62\x6c\x69\143\105\170\x70\x6f\156\145\156\164" => $Cs, "\x63\x6f\x6d\x6d\x65\156\164" => $XT);
                goto xx;
                bI:
                if (!(strlen($qi) <= 4)) {
                    goto Ot;
                }
                return false;
                Ot:
                extract(unpack("\x4e\x6c\x65\156\x67\164\x68", $this->_string_shift($qi, 4)));
                $xa = new Math_BigInteger($this->_string_shift($qi, $fl), -256);
                return strlen($qi) ? false : array("\155\157\144\165\154\165\x73" => $xa, "\x70\165\142\x6c\x69\x63\105\170\x70\x6f\x6e\145\x6e\164" => $dR, "\143\157\x6d\155\x65\x6e\x74" => $XT);
                xx:
            case CRYPT_RSA_PRIVATE_FORMAT_XML:
            case CRYPT_RSA_PUBLIC_FORMAT_XML:
                $this->components = array();
                $xY = xml_parser_create("\125\x54\x46\55\70");
                xml_set_object($xY, $this);
                xml_set_element_handler($xY, "\137\x73\x74\x61\x72\x74\x5f\x65\154\145\x6d\x65\156\164\x5f\x68\141\156\x64\154\x65\162", "\137\163\164\x6f\160\x5f\145\x6c\x65\155\x65\156\x74\137\150\x61\x6e\144\154\145\x72");
                xml_set_character_data_handler($xY, "\x5f\144\x61\x74\x61\137\150\x61\x6e\x64\154\x65\162");
                if (xml_parse($xY, "\x3c\x78\155\154\x3e" . $qi . "\74\57\x78\x6d\154\x3e")) {
                    goto ud;
                }
                return false;
                ud:
                return isset($this->components["\x6d\x6f\144\x75\x6c\x75\163"]) && isset($this->components["\160\x75\x62\154\x69\x63\x45\170\x70\157\x6e\x65\x6e\x74"]) ? $this->components : false;
            case CRYPT_RSA_PRIVATE_FORMAT_PUTTY:
                $HJ = array();
                $qi = preg_split("\x23\x5c\162\x5c\x6e\174\x5c\162\x7c\134\156\43", $qi);
                $ds = trim(preg_replace("\43\120\x75\x54\x54\131\x2d\125\163\145\162\55\113\145\171\x2d\106\x69\x6c\145\x2d\x32\x3a\40\x28\56\x2b\x29\43", "\x24\x31", $qi[0]));
                if (!($ds != "\163\163\x68\x2d\162\163\x61")) {
                    goto Px;
                }
                return false;
                Px:
                $fp = trim(preg_replace("\x23\x45\x6e\x63\x72\x79\160\164\x69\x6f\x6e\72\40\x28\x2e\53\x29\x23", "\44\x31", $qi[1]));
                $XT = trim(preg_replace("\x23\x43\157\x6d\x6d\x65\x6e\x74\72\40\50\x2e\x2b\x29\x23", "\44\x31", $qi[2]));
                $Iy = trim(preg_replace("\43\x50\x75\142\154\151\143\x2d\x4c\x69\156\145\x73\x3a\x20\50\134\x64\x2b\x29\x23", "\x24\61", $qi[3]));
                $aL = base64_decode(implode('', array_map("\x74\162\151\x6d", array_slice($qi, 4, $Iy))));
                $aL = substr($aL, 11);
                extract(unpack("\116\x6c\x65\x6e\x67\164\150", $this->_string_shift($aL, 4)));
                $HJ["\x70\x75\142\x6c\151\x63\x45\170\x70\x6f\x6e\145\x6e\164"] = new Math_BigInteger($this->_string_shift($aL, $fl), -256);
                extract(unpack("\x4e\x6c\145\156\x67\x74\x68", $this->_string_shift($aL, 4)));
                $HJ["\155\157\x64\x75\154\x75\x73"] = new Math_BigInteger($this->_string_shift($aL, $fl), -256);
                $XL = trim(preg_replace("\43\120\x72\151\x76\x61\164\145\x2d\x4c\x69\156\145\x73\x3a\40\50\134\x64\x2b\51\43", "\x24\x31", $qi[$Iy + 4]));
                $ZO = base64_decode(implode('', array_map("\x74\162\151\x6d", array_slice($qi, $Iy + 5, $XL))));
                switch ($fp) {
                    case "\x61\x65\163\62\65\x36\x2d\143\x62\143":
                        if (class_exists("\103\162\x79\x70\x74\137\101\x45\x53")) {
                            goto F7;
                        }
                        include_once "\103\x72\171\160\164\x2f\101\x45\123\56\x70\150\x70";
                        F7:
                        $zX = '';
                        $Ft = 0;
                        mw:
                        if (!(strlen($zX) < 32)) {
                            goto hs;
                        }
                        $Mj = pack("\116\x61\52", $Ft++, $this->password);
                        $zX .= pack("\x48\52", sha1($Mj));
                        goto mw;
                        hs:
                        $zX = substr($zX, 0, 32);
                        $lc = new Crypt_AES();
                }
                a_:
                Ge:
                if (!($fp != "\x6e\157\156\x65")) {
                    goto p0;
                }
                $lc->setKey($zX);
                $lc->disablePadding();
                $ZO = $lc->decrypt($ZO);
                if (!($ZO === false)) {
                    goto Js;
                }
                return false;
                Js:
                p0:
                extract(unpack("\116\x6c\145\156\147\164\x68", $this->_string_shift($ZO, 4)));
                if (!(strlen($ZO) < $fl)) {
                    goto tZ;
                }
                return false;
                tZ:
                $HJ["\160\162\151\x76\x61\x74\x65\105\x78\160\157\156\x65\x6e\164"] = new Math_BigInteger($this->_string_shift($ZO, $fl), -256);
                extract(unpack("\x4e\154\145\x6e\147\x74\x68", $this->_string_shift($ZO, 4)));
                if (!(strlen($ZO) < $fl)) {
                    goto UG;
                }
                return false;
                UG:
                $HJ["\x70\x72\151\x6d\145\163"] = array(1 => new Math_BigInteger($this->_string_shift($ZO, $fl), -256));
                extract(unpack("\116\154\145\156\147\164\x68", $this->_string_shift($ZO, 4)));
                if (!(strlen($ZO) < $fl)) {
                    goto DE;
                }
                return false;
                DE:
                $HJ["\160\x72\x69\155\x65\163"][] = new Math_BigInteger($this->_string_shift($ZO, $fl), -256);
                $Mj = $HJ["\160\x72\x69\x6d\145\x73"][1]->subtract($this->one);
                $HJ["\x65\170\160\x6f\x6e\145\156\x74\163"] = array(1 => $HJ["\x70\x75\142\154\x69\x63\x45\x78\160\157\x6e\145\156\x74"]->modInverse($Mj));
                $Mj = $HJ["\x70\162\151\x6d\x65\163"][2]->subtract($this->one);
                $HJ["\145\170\160\x6f\156\x65\x6e\x74\x73"][] = $HJ["\x70\x75\142\154\151\x63\105\x78\160\157\156\145\x6e\164"]->modInverse($Mj);
                extract(unpack("\116\x6c\x65\x6e\147\x74\x68", $this->_string_shift($ZO, 4)));
                if (!(strlen($ZO) < $fl)) {
                    goto W3;
                }
                return false;
                W3:
                $HJ["\x63\157\x65\146\x66\151\x63\x69\x65\156\164\163"] = array(2 => new Math_BigInteger($this->_string_shift($ZO, $fl), -256));
                return $HJ;
        }
        Hk:
        hv:
    }
    function getSize()
    {
        return !isset($this->modulus) ? 0 : strlen($this->modulus->toBits());
    }
    function _start_element_handler($LW, $w9, $Qb)
    {
        switch ($w9) {
            case "\115\117\x44\125\x4c\125\x53":
                $this->current =& $this->components["\x6d\x6f\144\x75\154\x75\163"];
                goto qt;
            case "\105\130\x50\117\116\x45\x4e\x54":
                $this->current =& $this->components["\160\165\142\154\151\x63\x45\x78\160\x6f\x6e\x65\156\164"];
                goto qt;
            case "\120":
                $this->current =& $this->components["\160\x72\x69\155\x65\163"][1];
                goto qt;
            case "\121":
                $this->current =& $this->components["\160\162\151\x6d\x65\163"][2];
                goto qt;
            case "\104\120":
                $this->current =& $this->components["\145\170\x70\x6f\x6e\x65\x6e\x74\163"][1];
                goto qt;
            case "\104\121":
                $this->current =& $this->components["\145\170\x70\x6f\156\145\x6e\164\163"][2];
                goto qt;
            case "\x49\116\x56\x45\122\123\105\x51":
                $this->current =& $this->components["\x63\x6f\x65\146\x66\x69\143\x69\145\156\164\163"][2];
                goto qt;
            case "\104":
                $this->current =& $this->components["\x70\x72\x69\166\141\x74\145\105\x78\x70\x6f\x6e\x65\x6e\164"];
        }
        Ql:
        qt:
        $this->current = '';
    }
    function _stop_element_handler($LW, $w9)
    {
        if (!isset($this->current)) {
            goto Vi;
        }
        $this->current = new Math_BigInteger(base64_decode($this->current), 256);
        unset($this->current);
        Vi:
    }
    function _data_handler($LW, $Zu)
    {
        if (!(!isset($this->current) || is_object($this->current))) {
            goto mC;
        }
        return;
        mC:
        $this->current .= trim($Zu);
    }
    function loadKey($qi, $ds = false)
    {
        if (!(is_object($qi) && strtolower(get_class($qi)) == "\x63\162\x79\160\164\x5f\162\x73\x61")) {
            goto jB;
        }
        $this->privateKeyFormat = $qi->privateKeyFormat;
        $this->publicKeyFormat = $qi->publicKeyFormat;
        $this->k = $qi->k;
        $this->hLen = $qi->hLen;
        $this->sLen = $qi->sLen;
        $this->mgfHLen = $qi->mgfHLen;
        $this->encryptionMode = $qi->encryptionMode;
        $this->signatureMode = $qi->signatureMode;
        $this->password = $qi->password;
        $this->configFile = $qi->configFile;
        $this->comment = $qi->comment;
        if (!is_object($qi->hash)) {
            goto Nb;
        }
        $this->hash = new Crypt_Hash($qi->hash->getHash());
        Nb:
        if (!is_object($qi->mgfHash)) {
            goto XS;
        }
        $this->mgfHash = new Crypt_Hash($qi->mgfHash->getHash());
        XS:
        if (!is_object($qi->modulus)) {
            goto Dv;
        }
        $this->modulus = $qi->modulus->copy();
        Dv:
        if (!is_object($qi->exponent)) {
            goto w5;
        }
        $this->exponent = $qi->exponent->copy();
        w5:
        if (!is_object($qi->publicExponent)) {
            goto IK;
        }
        $this->publicExponent = $qi->publicExponent->copy();
        IK:
        $this->primes = array();
        $this->exponents = array();
        $this->coefficients = array();
        foreach ($this->primes as $n_) {
            $this->primes[] = $n_->copy();
            sh:
        }
        gd:
        foreach ($this->exponents as $j3) {
            $this->exponents[] = $j3->copy();
            Z3:
        }
        Lx:
        foreach ($this->coefficients as $sB) {
            $this->coefficients[] = $sB->copy();
            Zt:
        }
        t2:
        return true;
        jB:
        if ($ds === false) {
            goto wI;
        }
        $HJ = $this->_parseKey($qi, $ds);
        goto l_;
        wI:
        $Zi = array(CRYPT_RSA_PUBLIC_FORMAT_RAW, CRYPT_RSA_PRIVATE_FORMAT_PKCS1, CRYPT_RSA_PRIVATE_FORMAT_XML, CRYPT_RSA_PRIVATE_FORMAT_PUTTY, CRYPT_RSA_PUBLIC_FORMAT_OPENSSH);
        foreach ($Zi as $ds) {
            $HJ = $this->_parseKey($qi, $ds);
            if (!($HJ !== false)) {
                goto R6;
            }
            goto mK;
            R6:
            uF:
        }
        mK:
        l_:
        if (!($HJ === false)) {
            goto se;
        }
        $this->comment = null;
        $this->modulus = null;
        $this->k = null;
        $this->exponent = null;
        $this->primes = null;
        $this->exponents = null;
        $this->coefficients = null;
        $this->publicExponent = null;
        return false;
        se:
        if (!(isset($HJ["\x63\x6f\x6d\x6d\x65\156\x74"]) && $HJ["\143\157\x6d\x6d\145\156\164"] !== false)) {
            goto X5;
        }
        $this->comment = $HJ["\x63\157\x6d\x6d\x65\x6e\164"];
        X5:
        $this->modulus = $HJ["\x6d\x6f\144\165\x6c\x75\x73"];
        $this->k = strlen($this->modulus->toBytes());
        $this->exponent = isset($HJ["\160\x72\x69\x76\141\x74\x65\105\170\160\x6f\x6e\145\x6e\164"]) ? $HJ["\160\162\x69\166\x61\x74\145\105\x78\160\x6f\x6e\145\156\164"] : $HJ["\x70\x75\x62\x6c\x69\x63\105\170\x70\x6f\156\145\x6e\x74"];
        if (isset($HJ["\160\162\151\155\x65\163"])) {
            goto mr;
        }
        $this->primes = array();
        $this->exponents = array();
        $this->coefficients = array();
        $this->publicExponent = false;
        goto nz;
        mr:
        $this->primes = $HJ["\160\162\x69\x6d\145\x73"];
        $this->exponents = $HJ["\x65\x78\x70\x6f\x6e\x65\156\164\x73"];
        $this->coefficients = $HJ["\x63\x6f\145\x66\x66\x69\x63\x69\145\x6e\164\x73"];
        $this->publicExponent = $HJ["\160\x75\142\x6c\x69\143\105\x78\160\x6f\156\x65\156\x74"];
        nz:
        switch ($ds) {
            case CRYPT_RSA_PUBLIC_FORMAT_OPENSSH:
            case CRYPT_RSA_PUBLIC_FORMAT_RAW:
                $this->setPublicKey();
                goto ej;
            case CRYPT_RSA_PRIVATE_FORMAT_PKCS1:
                switch (true) {
                    case strpos($qi, "\55\102\x45\x47\111\x4e\40\x50\x55\102\114\x49\103\x20\113\x45\x59\55") !== false:
                    case strpos($qi, "\55\x42\105\x47\111\x4e\x20\122\123\x41\x20\x50\125\x42\114\x49\103\40\113\105\131\55") !== false:
                        $this->setPublicKey();
                }
                gH:
                pW:
        }
        NS:
        ej:
        return true;
    }
    function setPassword($CV = false)
    {
        $this->password = $CV;
    }
    function setPublicKey($qi = false, $ds = false)
    {
        if (empty($this->publicExponent)) {
            goto f2;
        }
        return false;
        f2:
        if (!($qi === false && !empty($this->modulus))) {
            goto BB;
        }
        $this->publicExponent = $this->exponent;
        return true;
        BB:
        if ($ds === false) {
            goto dj;
        }
        $HJ = $this->_parseKey($qi, $ds);
        goto D1;
        dj:
        $Zi = array(CRYPT_RSA_PUBLIC_FORMAT_RAW, CRYPT_RSA_PUBLIC_FORMAT_PKCS1, CRYPT_RSA_PUBLIC_FORMAT_XML, CRYPT_RSA_PUBLIC_FORMAT_OPENSSH);
        foreach ($Zi as $ds) {
            $HJ = $this->_parseKey($qi, $ds);
            if (!($HJ !== false)) {
                goto iw;
            }
            goto X6;
            iw:
            nU:
        }
        X6:
        D1:
        if (!($HJ === false)) {
            goto su;
        }
        return false;
        su:
        if (!(empty($this->modulus) || !$this->modulus->equals($HJ["\x6d\x6f\x64\165\x6c\165\x73"]))) {
            goto JQ;
        }
        $this->modulus = $HJ["\155\157\144\x75\154\x75\163"];
        $this->exponent = $this->publicExponent = $HJ["\x70\x75\x62\x6c\151\x63\105\170\x70\157\156\145\156\164"];
        return true;
        JQ:
        $this->publicExponent = $HJ["\x70\x75\x62\154\151\143\105\x78\160\157\156\x65\156\164"];
        return true;
    }
    function setPrivateKey($qi = false, $ds = false)
    {
        if (!($qi === false && !empty($this->publicExponent))) {
            goto hk;
        }
        $this->publicExponent = false;
        return true;
        hk:
        $BR = new Crypt_RSA();
        if ($BR->loadKey($qi, $ds)) {
            goto rn;
        }
        return false;
        rn:
        $BR->publicExponent = false;
        $this->loadKey($BR);
        return true;
    }
    function getPublicKey($ds = CRYPT_RSA_PUBLIC_FORMAT_PKCS8)
    {
        if (!(empty($this->modulus) || empty($this->publicExponent))) {
            goto v2;
        }
        return false;
        v2:
        $fj = $this->publicKeyFormat;
        $this->publicKeyFormat = $ds;
        $Mj = $this->_convertPublicKey($this->modulus, $this->publicExponent);
        $this->publicKeyFormat = $fj;
        return $Mj;
    }
    function getPublicKeyFingerprint($qs = "\x6d\x64\65")
    {
        if (!(empty($this->modulus) || empty($this->publicExponent))) {
            goto CR;
        }
        return false;
        CR:
        $dR = $this->modulus->toBytes(true);
        $Cs = $this->publicExponent->toBytes(true);
        $ud = pack("\116\x61\52\x4e\141\52\x4e\x61\x2a", strlen("\163\163\x68\55\162\163\x61"), "\x73\163\150\55\x72\163\141", strlen($Cs), $Cs, strlen($dR), $dR);
        switch ($qs) {
            case "\x73\x68\x61\x32\x35\66":
                $Iq = new Crypt_Hash("\163\x68\141\x32\x35\x36");
                $m6 = base64_encode($Iq->hash($ud));
                return substr($m6, 0, strlen($m6) - 1);
            case "\x6d\144\x35":
                return substr(chunk_split(md5($ud), 2, "\x3a"), 0, -1);
            default:
                return false;
        }
        Xt:
        O5:
    }
    function getPrivateKey($ds = CRYPT_RSA_PUBLIC_FORMAT_PKCS1)
    {
        if (!empty($this->primes)) {
            goto BC;
        }
        return false;
        BC:
        $fj = $this->privateKeyFormat;
        $this->privateKeyFormat = $ds;
        $Mj = $this->_convertPrivateKey($this->modulus, $this->publicExponent, $this->exponent, $this->primes, $this->exponents, $this->coefficients);
        $this->privateKeyFormat = $fj;
        return $Mj;
    }
    function _getPrivatePublicKey($qw = CRYPT_RSA_PUBLIC_FORMAT_PKCS8)
    {
        if (!(empty($this->modulus) || empty($this->exponent))) {
            goto JS;
        }
        return false;
        JS:
        $fj = $this->publicKeyFormat;
        $this->publicKeyFormat = $qw;
        $Mj = $this->_convertPublicKey($this->modulus, $this->exponent);
        $this->publicKeyFormat = $fj;
        return $Mj;
    }
    function __toString()
    {
        $qi = $this->getPrivateKey($this->privateKeyFormat);
        if (!($qi !== false)) {
            goto tV;
        }
        return $qi;
        tV:
        $qi = $this->_getPrivatePublicKey($this->publicKeyFormat);
        return $qi !== false ? $qi : '';
    }
    function __clone()
    {
        $qi = new Crypt_RSA();
        $qi->loadKey($this);
        return $qi;
    }
    function _generateMinMax($Xr)
    {
        $XD = $Xr >> 3;
        $UO = str_repeat(chr(0), $XD);
        $uR = str_repeat(chr(255), $XD);
        $Al = $Xr & 7;
        if ($Al) {
            goto mW;
        }
        $UO[0] = chr(128);
        goto kP;
        mW:
        $UO = chr(1 << $Al - 1) . $UO;
        $uR = chr((1 << $Al) - 1) . $uR;
        kP:
        return array("\x6d\151\x6e" => new Math_BigInteger($UO, 256), "\155\141\x78" => new Math_BigInteger($uR, 256));
    }
    function _decodeLength(&$ys)
    {
        $fl = ord($this->_string_shift($ys));
        if (!($fl & 128)) {
            goto U7;
        }
        $fl &= 127;
        $Mj = $this->_string_shift($ys, $fl);
        list(, $fl) = unpack("\116", substr(str_pad($Mj, 4, chr(0), STR_PAD_LEFT), -4));
        U7:
        return $fl;
    }
    function _encodeLength($fl)
    {
        if (!($fl <= 127)) {
            goto b9;
        }
        return chr($fl);
        b9:
        $Mj = ltrim(pack("\116", $fl), chr(0));
        return pack("\103\141\52", 128 | strlen($Mj), $Mj);
    }
    function _string_shift(&$ys, $fu = 1)
    {
        $lb = substr($ys, 0, $fu);
        $ys = substr($ys, $fu);
        return $lb;
    }
    function setPrivateKeyFormat($GV)
    {
        $this->privateKeyFormat = $GV;
    }
    function setPublicKeyFormat($GV)
    {
        $this->publicKeyFormat = $GV;
    }
    function setHash($Iq)
    {
        switch ($Iq) {
            case "\x6d\144\x32":
            case "\155\144\65":
            case "\x73\x68\141\x31":
            case "\x73\x68\141\x32\65\x36":
            case "\x73\x68\141\x33\70\x34":
            case "\163\x68\141\x35\x31\x32":
                $this->hash = new Crypt_Hash($Iq);
                $this->hashName = $Iq;
                goto V4;
            default:
                $this->hash = new Crypt_Hash("\163\150\141\x31");
                $this->hashName = "\163\x68\141\61";
        }
        KD:
        V4:
        $this->hLen = $this->hash->getLength();
    }
    function setMGFHash($Iq)
    {
        switch ($Iq) {
            case "\x6d\x64\62":
            case "\155\x64\x35":
            case "\x73\150\141\x31":
            case "\163\x68\141\x32\x35\x36":
            case "\x73\150\x61\x33\x38\x34":
            case "\163\x68\x61\65\x31\x32":
                $this->mgfHash = new Crypt_Hash($Iq);
                goto bp;
            default:
                $this->mgfHash = new Crypt_Hash("\163\x68\x61\61");
        }
        k3:
        bp:
        $this->mgfHLen = $this->mgfHash->getLength();
    }
    function setSaltLength($HP)
    {
        $this->sLen = $HP;
    }
    function _i2osp($zb, $Wt)
    {
        $zb = $zb->toBytes();
        if (!(strlen($zb) > $Wt)) {
            goto tH;
        }
        user_error("\111\156\x74\145\x67\x65\162\40\164\x6f\x6f\x20\x6c\x61\x72\x67\x65");
        return false;
        tH:
        return str_pad($zb, $Wt, chr(0), STR_PAD_LEFT);
    }
    function _os2ip($zb)
    {
        return new Math_BigInteger($zb, 256);
    }
    function _exponentiate($zb)
    {
        switch (true) {
            case empty($this->primes):
            case $this->primes[1]->equals($this->zero):
            case empty($this->coefficients):
            case $this->coefficients[2]->equals($this->zero):
            case empty($this->exponents):
            case $this->exponents[1]->equals($this->zero):
                return $zb->modPow($this->exponent, $this->modulus);
        }
        Lr:
        kC:
        $Aj = count($this->primes);
        if (defined("\103\122\131\120\124\x5f\122\x53\101\x5f\104\x49\123\101\x42\x4c\105\x5f\x42\114\111\x4e\x44\x49\x4e\107")) {
            goto TU;
        }
        $y2 = $this->primes[1];
        $nH = 2;
        gj:
        if (!($nH <= $Aj)) {
            goto eJ;
        }
        if (!($y2->compare($this->primes[$nH]) > 0)) {
            goto du;
        }
        $y2 = $this->primes[$nH];
        du:
        l7:
        $nH++;
        goto gj;
        eJ:
        $XZ = new Math_BigInteger(1);
        $Zn = $XZ->random($XZ, $y2->subtract($XZ));
        $F2 = array(1 => $this->_blind($zb, $Zn, 1), 2 => $this->_blind($zb, $Zn, 2));
        $Dt = $F2[1]->subtract($F2[2]);
        $Dt = $Dt->multiply($this->coefficients[2]);
        list(, $Dt) = $Dt->divide($this->primes[1]);
        $kg = $F2[2]->add($Dt->multiply($this->primes[2]));
        $Zn = $this->primes[1];
        $nH = 3;
        Zk:
        if (!($nH <= $Aj)) {
            goto JV;
        }
        $F2 = $this->_blind($zb, $Zn, $nH);
        $Zn = $Zn->multiply($this->primes[$nH - 1]);
        $Dt = $F2->subtract($kg);
        $Dt = $Dt->multiply($this->coefficients[$nH]);
        list(, $Dt) = $Dt->divide($this->primes[$nH]);
        $kg = $kg->add($Zn->multiply($Dt));
        p8:
        $nH++;
        goto Zk;
        JV:
        goto I2;
        TU:
        $F2 = array(1 => $zb->modPow($this->exponents[1], $this->primes[1]), 2 => $zb->modPow($this->exponents[2], $this->primes[2]));
        $Dt = $F2[1]->subtract($F2[2]);
        $Dt = $Dt->multiply($this->coefficients[2]);
        list(, $Dt) = $Dt->divide($this->primes[1]);
        $kg = $F2[2]->add($Dt->multiply($this->primes[2]));
        $Zn = $this->primes[1];
        $nH = 3;
        vN:
        if (!($nH <= $Aj)) {
            goto od;
        }
        $F2 = $zb->modPow($this->exponents[$nH], $this->primes[$nH]);
        $Zn = $Zn->multiply($this->primes[$nH - 1]);
        $Dt = $F2->subtract($kg);
        $Dt = $Dt->multiply($this->coefficients[$nH]);
        list(, $Dt) = $Dt->divide($this->primes[$nH]);
        $kg = $kg->add($Zn->multiply($Dt));
        FE:
        $nH++;
        goto vN;
        od:
        I2:
        return $kg;
    }
    function _blind($zb, $Zn, $nH)
    {
        $zb = $zb->multiply($Zn->modPow($this->publicExponent, $this->primes[$nH]));
        $zb = $zb->modPow($this->exponents[$nH], $this->primes[$nH]);
        $Zn = $Zn->modInverse($this->primes[$nH]);
        $zb = $zb->multiply($Zn);
        list(, $zb) = $zb->divide($this->primes[$nH]);
        return $zb;
    }
    function _equals($zb, $LB)
    {
        if (!(strlen($zb) != strlen($LB))) {
            goto Wi;
        }
        return false;
        Wi:
        $SV = 0;
        $nH = 0;
        yn:
        if (!($nH < strlen($zb))) {
            goto uI;
        }
        $SV |= ord($zb[$nH]) ^ ord($LB[$nH]);
        xn:
        $nH++;
        goto yn;
        uI:
        return $SV == 0;
    }
    function _rsaep($kg)
    {
        if (!($kg->compare($this->zero) < 0 || $kg->compare($this->modulus) > 0)) {
            goto Bx;
        }
        user_error("\115\x65\163\x73\141\147\x65\x20\x72\145\160\x72\145\x73\x65\156\x74\141\x74\x69\x76\x65\x20\x6f\165\x74\x20\x6f\146\x20\162\141\156\147\145");
        return false;
        Bx:
        return $this->_exponentiate($kg);
    }
    function _rsadp($R3)
    {
        if (!($R3->compare($this->zero) < 0 || $R3->compare($this->modulus) > 0)) {
            goto Yv;
        }
        user_error("\103\x69\160\x68\x65\x72\164\145\x78\x74\40\x72\x65\160\162\145\163\145\x6e\x74\x61\164\151\166\x65\40\157\x75\164\40\x6f\x66\x20\x72\x61\x6e\x67\x65");
        return false;
        Yv:
        return $this->_exponentiate($R3);
    }
    function _rsasp1($kg)
    {
        if (!($kg->compare($this->zero) < 0 || $kg->compare($this->modulus) > 0)) {
            goto xo;
        }
        user_error("\x4d\x65\x73\163\141\147\145\40\x72\145\x70\x72\145\x73\x65\x6e\x74\141\x74\151\x76\145\x20\157\x75\164\x20\x6f\146\x20\162\141\156\x67\x65");
        return false;
        xo:
        return $this->_exponentiate($kg);
    }
    function _rsavp1($YG)
    {
        if (!($YG->compare($this->zero) < 0 || $YG->compare($this->modulus) > 0)) {
            goto Nm;
        }
        user_error("\x53\x69\x67\156\x61\x74\x75\162\145\x20\162\x65\160\x72\x65\163\x65\156\x74\x61\x74\x69\x76\x65\x20\157\x75\164\x20\x6f\x66\x20\162\x61\x6e\x67\145");
        return false;
        Nm:
        return $this->_exponentiate($YG);
    }
    function _mgf1($Nr, $Sh)
    {
        $EA = '';
        $Yh = ceil($Sh / $this->mgfHLen);
        $nH = 0;
        ei:
        if (!($nH < $Yh)) {
            goto yh;
        }
        $R3 = pack("\x4e", $nH);
        $EA .= $this->mgfHash->hash($Nr . $R3);
        Ff:
        $nH++;
        goto ei;
        yh:
        return substr($EA, 0, $Sh);
    }
    function _rsaes_oaep_encrypt($kg, $vi = '')
    {
        $dz = strlen($kg);
        if (!($dz > $this->k - 2 * $this->hLen - 2)) {
            goto qI;
        }
        user_error("\115\x65\x73\163\141\x67\145\40\x74\x6f\157\x20\x6c\x6f\156\x67");
        return false;
        qI:
        $Us = $this->hash->hash($vi);
        $cv = str_repeat(chr(0), $this->k - $dz - 2 * $this->hLen - 2);
        $M5 = $Us . $cv . chr(1) . $kg;
        $on = crypt_random_string($this->hLen);
        $f9 = $this->_mgf1($on, $this->k - $this->hLen - 1);
        $P_ = $M5 ^ $f9;
        $HT = $this->_mgf1($P_, $this->hLen);
        $es = $on ^ $HT;
        $QO = chr(0) . $es . $P_;
        $kg = $this->_os2ip($QO);
        $R3 = $this->_rsaep($kg);
        $R3 = $this->_i2osp($R3, $this->k);
        return $R3;
    }
    function _rsaes_oaep_decrypt($R3, $vi = '')
    {
        if (!(strlen($R3) != $this->k || $this->k < 2 * $this->hLen + 2)) {
            goto eF;
        }
        user_error("\104\x65\x63\x72\171\160\164\151\x6f\156\x20\x65\x72\162\x6f\162");
        return false;
        eF:
        $R3 = $this->_os2ip($R3);
        $kg = $this->_rsadp($R3);
        if (!($kg === false)) {
            goto Zg;
        }
        user_error("\x44\145\x63\162\171\160\x74\151\157\156\x20\x65\x72\162\157\162");
        return false;
        Zg:
        $QO = $this->_i2osp($kg, $this->k);
        $Us = $this->hash->hash($vi);
        $LB = ord($QO[0]);
        $es = substr($QO, 1, $this->hLen);
        $P_ = substr($QO, $this->hLen + 1);
        $HT = $this->_mgf1($P_, $this->hLen);
        $on = $es ^ $HT;
        $f9 = $this->_mgf1($on, $this->k - $this->hLen - 1);
        $M5 = $P_ ^ $f9;
        $fc = substr($M5, 0, $this->hLen);
        $kg = substr($M5, $this->hLen);
        if ($this->_equals($Us, $fc)) {
            goto IX;
        }
        user_error("\104\145\143\162\171\x70\x74\151\x6f\156\x20\145\162\162\157\x72");
        return false;
        IX:
        $kg = ltrim($kg, chr(0));
        if (!(ord($kg[0]) != 1)) {
            goto n6;
        }
        user_error("\104\x65\x63\x72\171\x70\x74\x69\157\156\40\x65\162\162\157\162");
        return false;
        n6:
        return substr($kg, 1);
    }
    function _raw_encrypt($kg)
    {
        $Mj = $this->_os2ip($kg);
        $Mj = $this->_rsaep($Mj);
        return $this->_i2osp($Mj, $this->k);
    }
    function _rsaes_pkcs1_v1_5_encrypt($kg)
    {
        $dz = strlen($kg);
        if (!($dz > $this->k - 11)) {
            goto y7;
        }
        user_error("\115\x65\x73\x73\x61\147\145\40\164\x6f\157\40\x6c\157\156\147");
        return false;
        y7:
        $ug = $this->k - $dz - 3;
        $cv = '';
        qA:
        if (!(strlen($cv) != $ug)) {
            goto NA;
        }
        $Mj = crypt_random_string($ug - strlen($cv));
        $Mj = str_replace("\x0", '', $Mj);
        $cv .= $Mj;
        goto qA;
        NA:
        $ds = 2;
        if (!(defined("\103\122\131\x50\x54\x5f\122\x53\101\x5f\120\113\103\x53\61\x35\x5f\x43\117\x4d\120\x41\124") && (!isset($this->publicExponent) || $this->exponent !== $this->publicExponent))) {
            goto Ug;
        }
        $ds = 1;
        $cv = str_repeat("\xff", $ug);
        Ug:
        $QO = chr(0) . chr($ds) . $cv . chr(0) . $kg;
        $kg = $this->_os2ip($QO);
        $R3 = $this->_rsaep($kg);
        $R3 = $this->_i2osp($R3, $this->k);
        return $R3;
    }
    function _rsaes_pkcs1_v1_5_decrypt($R3)
    {
        if (!(strlen($R3) != $this->k)) {
            goto jm;
        }
        user_error("\104\145\143\162\x79\160\x74\x69\x6f\156\40\x65\x72\162\x6f\x72");
        return false;
        jm:
        $R3 = $this->_os2ip($R3);
        $kg = $this->_rsadp($R3);
        if (!($kg === false)) {
            goto ft;
        }
        user_error("\x44\145\x63\x72\171\x70\164\x69\x6f\x6e\40\x65\x72\162\157\x72");
        return false;
        ft:
        $QO = $this->_i2osp($kg, $this->k);
        if (!(ord($QO[0]) != 0 || ord($QO[1]) > 2)) {
            goto dZ;
        }
        user_error("\104\145\143\162\171\x70\164\151\157\156\x20\145\x72\x72\157\162");
        return false;
        dZ:
        $cv = substr($QO, 2, strpos($QO, chr(0), 2) - 2);
        $kg = substr($QO, strlen($cv) + 3);
        if (!(strlen($cv) < 8)) {
            goto XW;
        }
        user_error("\x44\145\x63\162\x79\160\x74\151\157\x6e\x20\145\162\x72\x6f\162");
        return false;
        XW:
        return $kg;
    }
    function _emsa_pss_encode($kg, $oT)
    {
        $m3 = $oT + 1 >> 3;
        $HP = $this->sLen !== null ? $this->sLen : $this->hLen;
        $DO = $this->hash->hash($kg);
        if (!($m3 < $this->hLen + $HP + 2)) {
            goto E9;
        }
        user_error("\x45\156\x63\x6f\144\x69\156\147\x20\x65\x72\x72\x6f\162");
        return false;
        E9:
        $ct = crypt_random_string($HP);
        $cc = "\0\0\0\x0\0\0\0\x0" . $DO . $ct;
        $Dt = $this->hash->hash($cc);
        $cv = str_repeat(chr(0), $m3 - $HP - $this->hLen - 2);
        $M5 = $cv . chr(1) . $ct;
        $f9 = $this->_mgf1($Dt, $m3 - $this->hLen - 1);
        $P_ = $M5 ^ $f9;
        $P_[0] = ~chr(255 << ($oT & 7)) & $P_[0];
        $QO = $P_ . $Dt . chr(188);
        return $QO;
    }
    function _emsa_pss_verify($kg, $QO, $oT)
    {
        $m3 = $oT + 1 >> 3;
        $HP = $this->sLen !== null ? $this->sLen : $this->hLen;
        $DO = $this->hash->hash($kg);
        if (!($m3 < $this->hLen + $HP + 2)) {
            goto bg;
        }
        return false;
        bg:
        if (!($QO[strlen($QO) - 1] != chr(188))) {
            goto CA;
        }
        return false;
        CA:
        $P_ = substr($QO, 0, -$this->hLen - 1);
        $Dt = substr($QO, -$this->hLen - 1, $this->hLen);
        $Mj = chr(255 << ($oT & 7));
        if (!((~$P_[0] & $Mj) != $Mj)) {
            goto Cn;
        }
        return false;
        Cn:
        $f9 = $this->_mgf1($Dt, $m3 - $this->hLen - 1);
        $M5 = $P_ ^ $f9;
        $M5[0] = ~chr(255 << ($oT & 7)) & $M5[0];
        $Mj = $m3 - $this->hLen - $HP - 2;
        if (!(substr($M5, 0, $Mj) != str_repeat(chr(0), $Mj) || ord($M5[$Mj]) != 1)) {
            goto QP;
        }
        return false;
        QP:
        $ct = substr($M5, $Mj + 1);
        $cc = "\0\0\x0\x0\0\x0\x0\0" . $DO . $ct;
        $Rc = $this->hash->hash($cc);
        return $this->_equals($Dt, $Rc);
    }
    function _rsassa_pss_sign($kg)
    {
        $QO = $this->_emsa_pss_encode($kg, 8 * $this->k - 1);
        $kg = $this->_os2ip($QO);
        $YG = $this->_rsasp1($kg);
        $YG = $this->_i2osp($YG, $this->k);
        return $YG;
    }
    function _rsassa_pss_verify($kg, $YG)
    {
        if (!(strlen($YG) != $this->k)) {
            goto l8;
        }
        user_error("\111\x6e\x76\x61\154\x69\x64\40\x73\151\147\156\x61\x74\165\162\145");
        return false;
        l8:
        $sa = 8 * $this->k;
        $xv = $this->_os2ip($YG);
        $cc = $this->_rsavp1($xv);
        if (!($cc === false)) {
            goto mS;
        }
        user_error("\x49\x6e\x76\x61\154\151\x64\x20\163\x69\147\156\141\x74\165\162\145");
        return false;
        mS:
        $QO = $this->_i2osp($cc, $sa >> 3);
        if (!($QO === false)) {
            goto Ia;
        }
        user_error("\111\156\166\x61\x6c\151\x64\40\163\151\x67\x6e\x61\164\x75\162\145");
        return false;
        Ia:
        return $this->_emsa_pss_verify($kg, $QO, $sa - 1);
    }
    function _emsa_pkcs1_v1_5_encode($kg, $m3)
    {
        $Dt = $this->hash->hash($kg);
        if (!($Dt === false)) {
            goto Gz;
        }
        return false;
        Gz:
        switch ($this->hashName) {
            case "\155\144\62":
                $EA = pack("\x48\52", "\63\60\62\x30\x33\60\x30\x63\x30\66\x30\70\62\141\70\66\x34\x38\70\x36\x66\x37\x30\144\60\62\60\x32\60\x35\60\60\60\64\61\x30");
                goto wZ;
            case "\x6d\x64\x35":
                $EA = pack("\110\x2a", "\x33\x30\62\x30\x33\60\60\x63\x30\66\60\70\62\x61\x38\66\x34\x38\70\66\146\67\x30\144\60\x32\x30\x35\x30\x35\60\60\x30\x34\61\x30");
                goto wZ;
            case "\163\x68\x61\x31":
                $EA = pack("\x48\52", "\x33\x30\x32\x31\63\x30\60\71\60\x36\60\65\62\x62\60\145\x30\x33\x30\x32\61\141\60\x35\x30\60\60\x34\x31\x34");
                goto wZ;
            case "\x73\150\141\62\x35\66":
                $EA = pack("\x48\52", "\x33\x30\x33\x31\x33\60\60\x64\60\x36\x30\x39\66\x30\x38\x36\64\70\60\x31\66\x35\x30\x33\x30\x34\x30\x32\x30\61\60\x35\x30\60\60\x34\62\x30");
                goto wZ;
            case "\163\x68\141\x33\70\x34":
                $EA = pack("\110\52", "\63\60\x34\61\x33\x30\x30\144\60\x36\60\x39\x36\60\x38\x36\64\x38\60\61\66\65\60\x33\60\64\x30\62\60\62\60\65\60\60\x30\x34\63\x30");
                goto wZ;
            case "\x73\150\x61\x35\x31\x32":
                $EA = pack("\x48\52", "\63\x30\65\61\63\60\60\x64\x30\x36\60\x39\x36\60\70\66\64\70\x30\x31\x36\x35\x30\63\60\x34\60\62\x30\63\60\x35\60\x30\x30\x34\x34\60");
        }
        BI:
        wZ:
        $EA .= $Dt;
        $v0 = strlen($EA);
        if (!($m3 < $v0 + 11)) {
            goto Va;
        }
        user_error("\111\156\164\145\156\144\x65\x64\40\145\x6e\143\157\x64\x65\x64\x20\155\145\163\163\x61\147\x65\x20\154\x65\x6e\x67\x74\150\x20\x74\157\x6f\x20\163\x68\x6f\x72\164");
        return false;
        Va:
        $cv = str_repeat(chr(255), $m3 - $v0 - 3);
        $QO = "\x0\1{$cv}\0{$EA}";
        return $QO;
    }
    function _rsassa_pkcs1_v1_5_sign($kg)
    {
        $QO = $this->_emsa_pkcs1_v1_5_encode($kg, $this->k);
        if (!($QO === false)) {
            goto rN;
        }
        user_error("\x52\x53\101\40\x6d\x6f\x64\x75\154\x75\163\40\x74\157\157\x20\x73\150\x6f\162\164");
        return false;
        rN:
        $kg = $this->_os2ip($QO);
        $YG = $this->_rsasp1($kg);
        $YG = $this->_i2osp($YG, $this->k);
        return $YG;
    }
    function _rsassa_pkcs1_v1_5_verify($kg, $YG)
    {
        if (!(strlen($YG) != $this->k)) {
            goto x4;
        }
        user_error("\x49\156\x76\141\154\151\144\40\163\x69\x67\x6e\141\164\x75\x72\x65");
        return false;
        x4:
        $YG = $this->_os2ip($YG);
        $cc = $this->_rsavp1($YG);
        if (!($cc === false)) {
            goto mD;
        }
        user_error("\111\x6e\166\x61\x6c\x69\144\x20\163\151\147\x6e\x61\x74\x75\x72\145");
        return false;
        mD:
        $QO = $this->_i2osp($cc, $this->k);
        if (!($QO === false)) {
            goto Nt;
        }
        user_error("\x49\x6e\166\x61\154\x69\x64\40\x73\151\x67\156\x61\x74\x75\162\145");
        return false;
        Nt:
        $xH = $this->_emsa_pkcs1_v1_5_encode($kg, $this->k);
        if (!($xH === false)) {
            goto Xz;
        }
        user_error("\122\123\101\x20\x6d\x6f\144\x75\154\165\x73\40\x74\157\157\40\x73\150\157\162\x74");
        return false;
        Xz:
        return $this->_equals($QO, $xH);
    }
    function setEncryptionMode($qw)
    {
        $this->encryptionMode = $qw;
    }
    function setSignatureMode($qw)
    {
        $this->signatureMode = $qw;
    }
    function setComment($XT)
    {
        $this->comment = $XT;
    }
    function getComment()
    {
        return $this->comment;
    }
    function encrypt($p7)
    {
        switch ($this->encryptionMode) {
            case CRYPT_RSA_ENCRYPTION_NONE:
                $p7 = str_split($p7, $this->k);
                $rQ = '';
                foreach ($p7 as $kg) {
                    $rQ .= $this->_raw_encrypt($kg);
                    xg:
                }
                Tt:
                return $rQ;
            case CRYPT_RSA_ENCRYPTION_PKCS1:
                $fl = $this->k - 11;
                if (!($fl <= 0)) {
                    goto Mj;
                }
                return false;
                Mj:
                $p7 = str_split($p7, $fl);
                $rQ = '';
                foreach ($p7 as $kg) {
                    $rQ .= $this->_rsaes_pkcs1_v1_5_encrypt($kg);
                    HD:
                }
                mZ:
                return $rQ;
            default:
                $fl = $this->k - 2 * $this->hLen - 2;
                if (!($fl <= 0)) {
                    goto BR;
                }
                return false;
                BR:
                $p7 = str_split($p7, $fl);
                $rQ = '';
                foreach ($p7 as $kg) {
                    $rQ .= $this->_rsaes_oaep_encrypt($kg);
                    nK_:
                }
                Uj:
                return $rQ;
        }
        vm:
        OE:
    }
    function decrypt($rQ)
    {
        if (!($this->k <= 0)) {
            goto Wwo;
        }
        return false;
        Wwo:
        $rQ = str_split($rQ, $this->k);
        $rQ[count($rQ) - 1] = str_pad($rQ[count($rQ) - 1], $this->k, chr(0), STR_PAD_LEFT);
        $p7 = '';
        switch ($this->encryptionMode) {
            case CRYPT_RSA_ENCRYPTION_NONE:
                $wH = "\137\162\141\x77\137\145\156\143\162\171\160\164";
                goto nNQ;
            case CRYPT_RSA_ENCRYPTION_PKCS1:
                $wH = "\x5f\162\163\x61\145\163\137\160\x6b\143\163\x31\x5f\x76\x31\137\x35\x5f\x64\145\143\162\x79\x70\x74";
                goto nNQ;
            default:
                $wH = "\x5f\162\163\x61\x65\x73\137\x6f\x61\145\160\137\x64\x65\x63\x72\171\x70\x74";
        }
        N1j:
        nNQ:
        foreach ($rQ as $R3) {
            $Mj = $this->{$wH}($R3);
            if (!($Mj === false)) {
                goto km0;
            }
            return false;
            km0:
            $p7 .= $Mj;
            Bxv:
        }
        DM1:
        return $p7;
    }
    function sign($IW)
    {
        if (!(empty($this->modulus) || empty($this->exponent))) {
            goto Yo1;
        }
        return false;
        Yo1:
        switch ($this->signatureMode) {
            case CRYPT_RSA_SIGNATURE_PKCS1:
                return $this->_rsassa_pkcs1_v1_5_sign($IW);
            default:
                return $this->_rsassa_pss_sign($IW);
        }
        bRk:
        dtn:
    }
    function verify($IW, $zO)
    {
        if (!(empty($this->modulus) || empty($this->exponent))) {
            goto xh5;
        }
        return false;
        xh5:
        switch ($this->signatureMode) {
            case CRYPT_RSA_SIGNATURE_PKCS1:
                return $this->_rsassa_pkcs1_v1_5_verify($IW, $zO);
            default:
                return $this->_rsassa_pss_verify($IW, $zO);
        }
        fq1:
        Nod:
    }
    function _extractBER($aF)
    {
        $Mj = preg_replace("\x23\x2e\x2a\x3f\136\55\x2b\x5b\136\x2d\135\53\x2d\x2b\133\x5c\162\x5c\156\40\x5d\52\44\x23\x6d\x73", '', $aF, 1);
        $Mj = preg_replace("\43\55\x2b\x5b\x5e\55\135\53\x2d\53\43", '', $Mj);
        $Mj = str_replace(array("\xd", "\12", "\40"), '', $Mj);
        $Mj = preg_match("\43\x5e\133\x61\55\172\101\x2d\x5a\134\144\57\53\135\52\75\x7b\60\54\62\175\x24\x23", $Mj) ? base64_decode($Mj) : false;
        return $Mj != false ? $Mj : $aF;
    }
}
