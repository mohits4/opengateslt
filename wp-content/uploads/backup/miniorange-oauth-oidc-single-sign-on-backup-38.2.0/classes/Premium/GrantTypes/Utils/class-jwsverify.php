<?php


namespace MoOauthClient\GrantTypes;

class JWSVerify
{
    public $algo;
    public function __construct($Gc = '')
    {
        if (!empty($Gc)) {
            goto aDr;
        }
        return;
        aDr:
        $Gc = explode("\123", $Gc);
        if (!(!is_array($Gc) || 2 !== count($Gc))) {
            goto g1C;
        }
        return WP_Error("\151\156\x76\x61\154\151\144\137\x73\151\x67\156\x61\x74\x75\162\145", __("\124\150\x65\40\x53\151\x67\x6e\141\164\x75\x72\145\40\163\x65\x65\x6d\x73\x20\x74\x6f\40\142\145\x20\x69\156\x76\141\154\x69\x64\40\x6f\x72\40\165\156\163\165\160\x70\x6f\x72\164\x65\144\x2e"));
        g1C:
        if ("\x48" === $Gc[0]) {
            goto WSJ;
        }
        if ("\x52" === $Gc[0]) {
            goto joY;
        }
        return WP_Error("\x69\156\x76\x61\154\151\x64\137\163\151\147\x6e\141\164\x75\x72\x65", __("\x54\x68\x65\x20\x73\x69\x67\156\141\x74\x75\x72\145\x20\x61\154\x67\157\x72\x69\164\150\x6d\x20\163\145\x65\x6d\x73\40\x74\x6f\x20\142\x65\40\165\156\x73\165\x70\160\157\162\x74\145\144\40\157\162\40\x69\156\166\x61\x6c\x69\x64\x2e"));
        goto mzJ;
        WSJ:
        $this->algo["\x61\x6c\x67"] = "\110\123\x41";
        goto mzJ;
        joY:
        $this->algo["\x61\x6c\147"] = "\122\x53\101";
        mzJ:
        $this->algo["\163\x68\141"] = $Gc[1];
    }
    private function validate_hmac($fm = '', $yv = '', $tV = '')
    {
        if (!(empty($fm) || empty($tV))) {
            goto Ezj;
        }
        return false;
        Ezj:
        $A8 = $this->algo["\x73\x68\141"];
        $A8 = "\x73\150\x61" . $A8;
        $n2 = \hash_hmac($A8, $fm, $yv, true);
        return hash_equals($n2, $tV);
    }
    private function validate_rsa($fm = '', $sE = '', $tV = '')
    {
        if (!(empty($fm) || empty($tV))) {
            goto Prd;
        }
        return false;
        Prd:
        $A8 = $this->algo["\x73\x68\x61"];
        $rl = '';
        $LX = explode("\55\55\55\x2d\55", $sE);
        if (preg_match("\57\134\x72\134\x6e\x7c\134\x72\x7c\x5c\156\57", $LX[2])) {
            goto xJg;
        }
        $Pd = "\x2d\x2d\x2d\x2d\x2d" . $LX[1] . "\55\x2d\55\x2d\x2d\xa";
        $XG = 0;
        BZQ:
        if (!($kv = substr($LX[2], $XG, 64))) {
            goto wom;
        }
        $Pd .= $kv . "\12";
        $XG += 64;
        goto BZQ;
        wom:
        $Pd .= "\x2d\x2d\x2d\55\55" . $LX[3] . "\55\x2d\55\x2d\55\xa";
        $rl = $Pd;
        goto fmD;
        xJg:
        $rl = $sE;
        fmD:
        $Bv = false;
        switch ($A8) {
            case "\62\x35\x36":
                $Bv = openssl_verify($fm, $tV, $rl, OPENSSL_ALGO_SHA256);
                goto qzj;
            case "\x33\x38\64":
                $Bv = openssl_verify($fm, $tV, $rl, OPENSSL_ALGO_SHA384);
                goto qzj;
            case "\x35\61\62":
                $Bv = openssl_verify($fm, $tV, $rl, OPENSSL_ALGO_SHA512);
                goto qzj;
            default:
                $Bv = false;
                goto qzj;
        }
        fWM:
        qzj:
        return $Bv;
    }
    public function verify($fm = '', $yv = '', $tV = '')
    {
        if (!(empty($fm) || empty($tV))) {
            goto bSZ;
        }
        return false;
        bSZ:
        $Gc = $this->algo["\141\x6c\147"];
        switch ($Gc) {
            case "\x48\x53\x41":
                return $this->validate_hmac($fm, $yv, $tV);
            case "\122\123\x41":
                return @$this->validate_rsa($fm, $yv, $tV);
            default:
                return false;
        }
        lwL:
        c7j:
    }
}
