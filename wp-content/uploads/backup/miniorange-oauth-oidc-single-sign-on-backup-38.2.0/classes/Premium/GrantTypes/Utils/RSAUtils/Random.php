<?php


namespace MoOauthClient\GrantTypes;

if (function_exists("\143\x72\x79\x70\x74\137\x72\x61\x6e\144\x6f\155\137\163\164\x72\151\x6e\147")) {
    goto eWZ;
}
define("\x43\x52\131\120\x54\137\x52\x41\116\104\x4f\x4d\137\x49\123\137\127\111\x4e\104\117\127\x53", strtoupper(substr(PHP_OS, 0, 3)) === "\x57\x49\x4e");
function crypt_random_string($fl)
{
    if ($fl) {
        goto Ml1;
    }
    return '';
    Ml1:
    if (CRYPT_RANDOM_IS_WINDOWS) {
        goto Ifv;
    }
    if (!(extension_loaded("\157\160\145\156\x73\x73\x6c") && version_compare(PHP_VERSION, "\x35\56\x33\x2e\60", "\x3e\x3d"))) {
        goto v65;
    }
    return openssl_random_pseudo_bytes($fl);
    v65:
    static $D6 = true;
    if (!($D6 === true)) {
        goto xvU;
    }
    $D6 = @fopen("\x2f\x64\145\x76\x2f\x75\162\x61\x6e\x64\157\155", "\x72\x62");
    xvU:
    if (!($D6 !== true && $D6 !== false)) {
        goto W8V;
    }
    return fread($D6, $fl);
    W8V:
    if (!extension_loaded("\155\143\162\x79\160\x74")) {
        goto KEv;
    }
    return @mcrypt_create_iv($fl, MCRYPT_DEV_URANDOM);
    KEv:
    goto oqU;
    Ifv:
    if (!(extension_loaded("\155\x63\162\171\x70\164") && version_compare(PHP_VERSION, "\x35\x2e\63\x2e\60", "\x3e\75"))) {
        goto efs;
    }
    return @mcrypt_create_iv($fl);
    efs:
    if (!(extension_loaded("\x6f\160\x65\156\x73\x73\154") && version_compare(PHP_VERSION, "\x35\x2e\63\56\x34", "\x3e\75"))) {
        goto Xa2;
    }
    return openssl_random_pseudo_bytes($fl);
    Xa2:
    oqU:
    static $lc = false, $TO;
    if (!($lc === false)) {
        goto Nsf;
    }
    $QL = session_id();
    $Nl = ini_get("\x73\145\163\163\151\157\x6e\x2e\165\163\145\x5f\143\157\x6f\x6b\151\x65\x73");
    $Nn = session_cache_limiter();
    $TX = isset($_SESSION) ? $_SESSION : false;
    if (!($QL != '')) {
        goto kdh;
    }
    session_write_close();
    kdh:
    session_id(1);
    ini_set("\163\x65\163\x73\x69\x6f\x6e\56\x75\x73\145\x5f\x63\157\157\x6b\x69\x65\163", 0);
    session_cache_limiter('');
    session_start(array("\x72\145\x61\144\137\x61\x6e\x64\137\143\x6c\x6f\x73\x65" => true));
    $TO = $on = $_SESSION["\x73\145\x65\x64"] = pack("\x48\52", sha1((isset($_SERVER) ? phpseclib_safe_serialize($_SERVER) : '') . (isset($_POST) ? phpseclib_safe_serialize($_POST) : '') . (isset($_GET) ? phpseclib_safe_serialize($_GET) : '') . (isset($_COOKIE) ? phpseclib_safe_serialize($_COOKIE) : '') . phpseclib_safe_serialize($GLOBALS) . phpseclib_safe_serialize($_SESSION) . phpseclib_safe_serialize($TX)));
    if (isset($_SESSION["\x63\x6f\x75\156\164"])) {
        goto Iyu;
    }
    $_SESSION["\143\157\x75\x6e\164"] = 0;
    Iyu:
    $_SESSION["\143\157\165\156\x74"]++;
    session_write_close();
    if ($QL != '') {
        goto juJ;
    }
    if ($TX !== false) {
        goto zsH;
    }
    unset($_SESSION);
    goto wEO;
    zsH:
    $_SESSION = $TX;
    unset($TX);
    wEO:
    goto XVc;
    juJ:
    session_id($QL);
    session_start(array("\162\145\141\x64\137\141\x6e\144\137\143\154\x6f\163\x65" => true));
    ini_set("\163\145\163\163\151\x6f\156\x2e\x75\163\145\x5f\x63\157\x6f\153\x69\x65\x73", $Nl);
    session_cache_limiter($Nn);
    XVc:
    $qi = pack("\110\52", sha1($on . "\x41"));
    $bM = pack("\110\x2a", sha1($on . "\x43"));
    switch (true) {
        case phpseclib_resolve_include_path("\103\x72\x79\160\x74\57\101\x45\123\x2e\x70\150\x70"):
            if (class_exists("\x43\x72\x79\160\x74\x5f\x41\x45\x53")) {
                goto bBI;
            }
            include_once "\x41\105\x53\x2e\x70\x68\160";
            bBI:
            $lc = new Crypt_AES(CRYPT_AES_MODE_CTR);
            goto LJf;
        case phpseclib_resolve_include_path("\103\162\x79\x70\164\57\124\167\x6f\146\x69\x73\150\56\x70\150\x70"):
            if (class_exists("\x43\x72\x79\x70\x74\x5f\x54\x77\x6f\x66\x69\x73\x68")) {
                goto IUe;
            }
            include_once "\124\x77\157\x66\x69\163\150\56\160\x68\x70";
            IUe:
            $lc = new Crypt_Twofish(CRYPT_TWOFISH_MODE_CTR);
            goto LJf;
        case phpseclib_resolve_include_path("\x43\x72\171\x70\164\57\x42\x6c\x6f\167\146\151\x73\150\x2e\160\150\x70"):
            if (class_exists("\x43\x72\x79\160\x74\137\x42\x6c\157\x77\146\151\x73\x68")) {
                goto qlT;
            }
            include_once "\102\x6c\157\x77\x66\151\x73\150\56\160\150\x70";
            qlT:
            $lc = new Crypt_Blowfish(CRYPT_BLOWFISH_MODE_CTR);
            goto LJf;
        case phpseclib_resolve_include_path("\x43\x72\171\x70\x74\57\x54\162\x69\x70\154\145\x44\105\x53\x2e\x70\150\160"):
            if (class_exists("\103\162\171\x70\x74\137\124\162\x69\x70\x6c\145\104\x45\x53")) {
                goto EMq;
            }
            include_once "\x54\162\151\160\154\x65\104\105\123\x2e\x70\150\x70";
            EMq:
            $lc = new Crypt_TripleDES(CRYPT_DES_MODE_CTR);
            goto LJf;
        case phpseclib_resolve_include_path("\x43\162\171\160\x74\57\104\105\123\x2e\160\x68\x70"):
            if (class_exists("\103\x72\171\160\x74\x5f\x44\x45\123")) {
                goto VD8;
            }
            include_once "\104\x45\123\56\x70\x68\x70";
            VD8:
            $lc = new Crypt_DES(CRYPT_DES_MODE_CTR);
            goto LJf;
        case phpseclib_resolve_include_path("\x43\x72\171\x70\164\57\122\103\64\x2e\160\150\x70"):
            if (class_exists("\x43\x72\x79\160\x74\137\122\x43\x34")) {
                goto xI4;
            }
            include_once "\122\103\x34\x2e\160\x68\160";
            xI4:
            $lc = new Crypt_RC4();
            goto LJf;
        default:
            user_error("\143\162\x79\160\x74\x5f\x72\x61\156\x64\157\155\137\163\x74\162\x69\x6e\147\x20\x72\x65\x71\165\151\162\x65\163\40\x61\164\x20\154\x65\x61\x73\164\x20\x6f\156\x65\40\163\x79\x6d\155\145\164\x72\x69\x63\40\143\151\160\150\145\x72\40\x62\145\40\x6c\x6f\x61\x64\x65\144");
            return false;
    }
    cxv:
    LJf:
    $lc->setKey($qi);
    $lc->setIV($bM);
    $lc->enableContinuousBuffer();
    Nsf:
    $SV = '';
    k36:
    if (!(strlen($SV) < $fl)) {
        goto ymu;
    }
    $nH = $lc->encrypt(microtime());
    $Zn = $lc->encrypt($nH ^ $TO);
    $TO = $lc->encrypt($Zn ^ $nH);
    $SV .= $Zn;
    goto k36;
    ymu:
    return substr($SV, 0, $fl);
}
eWZ:
if (function_exists("\160\150\x70\x73\145\143\x6c\151\x62\x5f\163\141\146\x65\x5f\163\x65\162\x69\x61\154\x69\172\x65")) {
    goto KFm;
}
function phpseclib_safe_serialize(&$C_)
{
    if (!is_object($C_)) {
        goto mf5;
    }
    return '';
    mf5:
    if (is_array($C_)) {
        goto ECv;
    }
    return serialize($C_);
    ECv:
    if (!isset($C_["\137\x5f\x70\x68\160\x73\x65\x63\x6c\151\142\137\155\141\x72\x6b\145\x72"])) {
        goto kuS;
    }
    return '';
    kuS:
    $I3 = array();
    $C_["\137\137\x70\x68\x70\x73\145\143\x6c\x69\142\137\x6d\x61\162\x6b\x65\162"] = true;
    foreach (array_keys($C_) as $qi) {
        if (!($qi !== "\x5f\137\160\150\x70\x73\x65\x63\x6c\x69\x62\137\x6d\x61\162\x6b\x65\162")) {
            goto woS;
        }
        $I3[$qi] = phpseclib_safe_serialize($C_[$qi]);
        woS:
        JP0:
    }
    bV1:
    unset($C_["\x5f\x5f\x70\150\160\x73\x65\x63\x6c\151\142\x5f\155\141\x72\153\x65\162"]);
    return serialize($I3);
}
KFm:
if (function_exists("\160\x68\160\x73\x65\143\x6c\151\142\137\162\x65\x73\157\x6c\166\145\x5f\151\156\x63\x6c\165\x64\145\x5f\160\141\x74\x68")) {
    goto sL4;
}
function phpseclib_resolve_include_path($Oa)
{
    if (!function_exists("\163\x74\x72\x65\141\155\137\162\145\163\157\154\x76\145\x5f\151\156\x63\x6c\x75\x64\x65\x5f\160\x61\164\x68")) {
        goto VNJ;
    }
    return stream_resolve_include_path($Oa);
    VNJ:
    if (!file_exists($Oa)) {
        goto LH3;
    }
    return realpath($Oa);
    LH3:
    $kj = PATH_SEPARATOR == "\x3a" ? preg_split("\43\x28\77\x3c\41\160\150\141\x72\51\72\43", get_include_path()) : explode(PATH_SEPARATOR, get_include_path());
    foreach ($kj as $MU) {
        $nq = substr($MU, -1) == DIRECTORY_SEPARATOR ? '' : DIRECTORY_SEPARATOR;
        $ff = $MU . $nq . $Oa;
        if (!file_exists($ff)) {
            goto Xyq;
        }
        return realpath($ff);
        Xyq:
        rjC:
    }
    MDG:
    return false;
}
sL4:
