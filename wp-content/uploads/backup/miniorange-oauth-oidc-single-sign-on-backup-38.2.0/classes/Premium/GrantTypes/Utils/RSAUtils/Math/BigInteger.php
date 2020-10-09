<?php


namespace MoOauthClient\GrantTypes;

define("\115\x41\x54\x48\x5f\102\x49\107\x49\x4e\x54\x45\x47\x45\122\x5f\x4d\x4f\x4e\124\x47\x4f\115\x45\122\131", 0);
define("\x4d\101\x54\x48\137\x42\111\x47\111\x4e\x54\x45\107\x45\x52\137\102\x41\122\x52\x45\124\x54", 1);
define("\x4d\x41\x54\110\x5f\x42\x49\x47\x49\x4e\x54\105\107\105\122\137\120\117\x57\x45\122\117\106\x32", 2);
define("\115\101\124\x48\x5f\x42\111\x47\x49\116\x54\x45\107\x45\122\137\103\x4c\101\x53\123\111\x43", 3);
define("\x4d\x41\124\x48\137\x42\x49\x47\x49\x4e\x54\105\x47\x45\x52\x5f\116\x4f\x4e\x45", 4);
define("\115\x41\x54\110\x5f\x42\x49\107\111\116\x54\105\x47\x45\122\137\126\x41\x4c\125\105", 0);
define("\115\101\x54\110\x5f\102\111\x47\111\116\124\105\x47\105\x52\x5f\x53\111\107\x4e", 1);
define("\115\x41\x54\110\x5f\102\111\107\x49\116\x54\105\x47\105\x52\x5f\126\101\x52\111\x41\x42\114\105", 0);
define("\115\x41\124\x48\x5f\x42\x49\107\x49\x4e\124\x45\107\x45\122\137\104\101\124\101", 1);
define("\x4d\101\124\110\x5f\x42\x49\x47\111\116\x54\x45\x47\x45\x52\x5f\115\x4f\x44\105\137\x49\x4e\124\105\122\x4e\x41\114", 1);
define("\x4d\x41\124\x48\137\102\111\x47\111\116\x54\105\x47\105\x52\x5f\115\x4f\x44\105\x5f\x42\103\115\101\124\110", 2);
define("\x4d\101\124\110\x5f\x42\111\107\x49\116\124\x45\x47\x45\122\x5f\x4d\117\104\105\x5f\x47\115\x50", 3);
define("\115\x41\124\x48\137\102\111\x47\x49\116\x54\105\107\x45\x52\x5f\x4b\x41\x52\x41\x54\x53\125\x42\x41\137\x43\125\x54\117\106\106", 25);
class Math_BigInteger
{
    var $value;
    var $is_negative = false;
    var $precision = -1;
    var $bitmask = false;
    var $hex;
    function __construct($zb = 0, $m6 = 10)
    {
        if (defined("\x4d\x41\124\x48\x5f\102\111\107\111\x4e\124\x45\x47\105\122\137\115\117\x44\105")) {
            goto rK6;
        }
        switch (true) {
            case extension_loaded("\147\x6d\160"):
                define("\115\x41\124\x48\x5f\102\111\107\x49\116\124\x45\x47\105\x52\137\115\117\x44\x45", MATH_BIGINTEGER_MODE_GMP);
                goto TYy;
            case extension_loaded("\142\x63\x6d\x61\x74\x68"):
                define("\115\101\124\x48\x5f\x42\x49\x47\111\116\x54\x45\107\105\122\x5f\115\117\104\105", MATH_BIGINTEGER_MODE_BCMATH);
                goto TYy;
            default:
                define("\115\x41\x54\110\x5f\102\x49\x47\111\116\x54\x45\107\105\122\137\x4d\x4f\104\105", MATH_BIGINTEGER_MODE_INTERNAL);
        }
        hSc:
        TYy:
        rK6:
        if (!(extension_loaded("\x6f\160\145\156\163\x73\x6c") && !defined("\x4d\x41\x54\x48\x5f\102\111\107\111\116\x54\x45\x47\x45\x52\x5f\117\120\x45\x4e\123\x53\114\137\104\111\x53\x41\102\x4c\x45") && !defined("\x4d\x41\x54\110\x5f\102\x49\107\111\116\x54\105\x47\x45\122\x5f\x4f\x50\105\x4e\123\123\114\137\105\x4e\101\x42\114\x45\104"))) {
            goto DD1;
        }
        ob_start();
        @phpinfo();
        $Dc = ob_get_contents();
        ob_end_clean();
        preg_match_all("\43\x4f\x70\145\x6e\x53\123\x4c\40\x28\110\145\141\x64\x65\162\174\x4c\151\x62\x72\x61\x72\x79\51\x20\x56\145\x72\163\x69\157\x6e\x28\x2e\52\51\x23\151\155", $Dc, $gt);
        $kT = array();
        if (empty($gt[1])) {
            goto KkK;
        }
        $nH = 0;
        JfQ:
        if (!($nH < count($gt[1]))) {
            goto vIg;
        }
        $l_ = trim(str_replace("\75\76", '', strip_tags($gt[2][$nH])));
        if (!preg_match("\x2f\50\x5c\x64\53\134\56\x5c\x64\x2b\134\56\134\144\53\51\57\x69", $l_, $kg)) {
            goto qER;
        }
        $kT[$gt[1][$nH]] = $kg[0];
        goto RGd;
        qER:
        $kT[$gt[1][$nH]] = $l_;
        RGd:
        LxK:
        $nH++;
        goto JfQ;
        vIg:
        KkK:
        switch (true) {
            case !isset($kT["\110\145\x61\x64\x65\162"]):
            case !isset($kT["\114\151\142\162\141\x72\171"]):
            case $kT["\110\x65\x61\x64\145\162"] == $kT["\x4c\151\142\162\141\162\x79"]:
            case version_compare($kT["\110\145\141\144\145\162"], "\x31\x2e\x30\56\x30") >= 0 && version_compare($kT["\114\151\x62\x72\141\162\x79"], "\x31\x2e\x30\x2e\x30") >= 0:
                define("\x4d\101\124\x48\137\x42\x49\107\111\116\x54\105\x47\x45\122\x5f\x4f\120\105\x4e\123\123\x4c\x5f\105\x4e\101\x42\114\105\x44", true);
                goto C8I;
            default:
                define("\115\101\124\110\x5f\x42\x49\x47\111\116\x54\105\107\x45\122\x5f\x4f\x50\105\116\123\x53\114\x5f\104\111\123\x41\102\x4c\x45", true);
        }
        haS:
        C8I:
        DD1:
        if (defined("\120\x48\x50\137\x49\116\124\137\123\x49\132\105")) {
            goto dV2;
        }
        define("\120\110\x50\x5f\x49\116\124\137\x53\x49\132\105", 4);
        dV2:
        if (!(!defined("\115\x41\x54\x48\x5f\102\111\107\x49\x4e\124\x45\x47\105\122\137\x42\101\123\x45") && MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_INTERNAL)) {
            goto rWl;
        }
        switch (PHP_INT_SIZE) {
            case 8:
                define("\x4d\101\124\x48\x5f\x42\x49\x47\111\116\x54\105\107\105\x52\137\x42\x41\123\105", 31);
                define("\x4d\101\x54\x48\x5f\102\111\x47\111\116\x54\x45\107\105\122\x5f\102\101\123\105\137\106\125\114\114", 2147483648);
                define("\115\101\124\110\x5f\x42\x49\107\x49\x4e\124\x45\x47\105\122\x5f\115\101\x58\x5f\104\x49\107\x49\124", 2147483647);
                define("\115\x41\x54\110\x5f\102\x49\x47\x49\116\x54\x45\107\105\122\x5f\x4d\123\102", 1073741824);
                define("\x4d\x41\x54\110\137\x42\x49\107\x49\x4e\124\x45\107\x45\x52\x5f\x4d\x41\130\x31\x30", 1000000000);
                define("\115\x41\124\110\x5f\x42\x49\107\111\x4e\x54\105\x47\105\x52\x5f\x4d\x41\x58\x31\x30\137\x4c\105\x4e", 9);
                define("\115\101\x54\x48\137\x42\x49\107\111\116\x54\x45\x47\105\122\x5f\115\101\130\137\104\111\x47\x49\x54\x32", pow(2, 62));
                goto DXD;
            default:
                define("\x4d\x41\x54\110\x5f\x42\x49\107\x49\x4e\124\x45\107\x45\122\137\x42\101\x53\x45", 26);
                define("\115\x41\x54\x48\137\x42\x49\107\x49\x4e\x54\x45\107\x45\122\x5f\x42\x41\x53\105\137\106\125\x4c\114", 67108864);
                define("\115\101\124\x48\137\x42\x49\107\111\x4e\x54\x45\x47\x45\x52\137\115\x41\130\x5f\x44\x49\107\111\x54", 67108863);
                define("\x4d\101\x54\110\137\x42\x49\107\x49\116\124\x45\x47\105\x52\137\x4d\123\x42", 33554432);
                define("\115\101\x54\x48\x5f\102\111\x47\111\x4e\x54\x45\x47\x45\122\x5f\x4d\101\130\61\x30", 10000000);
                define("\x4d\x41\124\x48\137\102\111\x47\111\116\124\105\107\x45\x52\x5f\x4d\101\x58\x31\x30\137\114\x45\116", 7);
                define("\x4d\101\124\110\137\x42\111\x47\x49\116\x54\x45\x47\x45\x52\x5f\115\x41\x58\x5f\x44\111\107\111\x54\62", pow(2, 52));
        }
        Ljd:
        DXD:
        rWl:
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                switch (true) {
                    case is_resource($zb) && get_resource_type($zb) == "\107\115\x50\x20\151\x6e\164\x65\x67\145\162":
                    case is_object($zb) && get_class($zb) == "\x47\115\x50":
                        $this->value = $zb;
                        return;
                }
                IRn:
                pyK:
                $this->value = gmp_init(0);
                goto NDx;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $this->value = "\60";
                goto NDx;
            default:
                $this->value = array();
        }
        U8h:
        NDx:
        if (!(empty($zb) && (abs($m6) != 256 || $zb !== "\x30"))) {
            goto rYn;
        }
        return;
        rYn:
        switch ($m6) {
            case -256:
                if (!(ord($zb[0]) & 128)) {
                    goto QNj;
                }
                $zb = ~$zb;
                $this->is_negative = true;
                QNj:
            case 256:
                switch (MATH_BIGINTEGER_MODE) {
                    case MATH_BIGINTEGER_MODE_GMP:
                        $this->value = function_exists("\147\155\160\137\151\x6d\160\157\x72\x74") ? gmp_import($zb) : gmp_init("\60\x78" . bin2hex($zb));
                        if (!$this->is_negative) {
                            goto hPW;
                        }
                        $this->value = gmp_neg($this->value);
                        hPW:
                        goto MCr;
                    case MATH_BIGINTEGER_MODE_BCMATH:
                        $js = strlen($zb) + 3 & 4294967292;
                        $zb = str_pad($zb, $js, chr(0), STR_PAD_LEFT);
                        $nH = 0;
                        lCT:
                        if (!($nH < $js)) {
                            goto j0T;
                        }
                        $this->value = bcmul($this->value, "\64\62\x39\x34\x39\66\x37\x32\x39\66", 0);
                        $this->value = bcadd($this->value, 16777216 * ord($zb[$nH]) + (ord($zb[$nH + 1]) << 16 | ord($zb[$nH + 2]) << 8 | ord($zb[$nH + 3])), 0);
                        msj:
                        $nH += 4;
                        goto lCT;
                        j0T:
                        if (!$this->is_negative) {
                            goto FsW;
                        }
                        $this->value = "\x2d" . $this->value;
                        FsW:
                        goto MCr;
                    default:
                        WSS:
                        if (!strlen($zb)) {
                            goto vYg;
                        }
                        $this->value[] = $this->_bytes2int($this->_base256_rshift($zb, MATH_BIGINTEGER_BASE));
                        goto WSS;
                        vYg:
                }
                P6s:
                MCr:
                if (!$this->is_negative) {
                    goto wY1;
                }
                if (!(MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_INTERNAL)) {
                    goto BFV;
                }
                $this->is_negative = false;
                BFV:
                $Mj = $this->add(new Math_BigInteger("\x2d\x31"));
                $this->value = $Mj->value;
                wY1:
                goto x_q;
            case 16:
            case -16:
                if (!($m6 > 0 && $zb[0] == "\x2d")) {
                    goto FLi;
                }
                $this->is_negative = true;
                $zb = substr($zb, 1);
                FLi:
                $zb = preg_replace("\x23\136\x28\x3f\x3a\x30\x78\x29\x3f\50\133\x41\x2d\x46\141\x2d\x66\x30\55\x39\135\52\51\56\52\43", "\44\x31", $zb);
                $hE = false;
                if (!($m6 < 0 && hexdec($zb[0]) >= 8)) {
                    goto nWX;
                }
                $this->is_negative = $hE = true;
                $zb = bin2hex(~pack("\x48\52", $zb));
                nWX:
                switch (MATH_BIGINTEGER_MODE) {
                    case MATH_BIGINTEGER_MODE_GMP:
                        $Mj = $this->is_negative ? "\55\x30\170" . $zb : "\60\x78" . $zb;
                        $this->value = gmp_init($Mj);
                        $this->is_negative = false;
                        goto y1P;
                    case MATH_BIGINTEGER_MODE_BCMATH:
                        $zb = strlen($zb) & 1 ? "\x30" . $zb : $zb;
                        $Mj = new Math_BigInteger(pack("\110\x2a", $zb), 256);
                        $this->value = $this->is_negative ? "\x2d" . $Mj->value : $Mj->value;
                        $this->is_negative = false;
                        goto y1P;
                    default:
                        $zb = strlen($zb) & 1 ? "\x30" . $zb : $zb;
                        $Mj = new Math_BigInteger(pack("\110\52", $zb), 256);
                        $this->value = $Mj->value;
                }
                FNv:
                y1P:
                if (!$hE) {
                    goto dnb;
                }
                $Mj = $this->add(new Math_BigInteger("\55\x31"));
                $this->value = $Mj->value;
                dnb:
                goto x_q;
            case 10:
            case -10:
                $zb = preg_replace("\x23\x28\77\74\x21\x5e\51\x28\x3f\72\55\51\x2e\52\174\50\x3f\74\75\x5e\x7c\55\51\60\52\x7c\x5b\136\55\x30\x2d\71\x5d\x2e\x2a\x23", '', $zb);
                switch (MATH_BIGINTEGER_MODE) {
                    case MATH_BIGINTEGER_MODE_GMP:
                        $this->value = gmp_init($zb);
                        goto q38;
                    case MATH_BIGINTEGER_MODE_BCMATH:
                        $this->value = $zb === "\x2d" ? "\60" : (string) $zb;
                        goto q38;
                    default:
                        $Mj = new Math_BigInteger();
                        $hj = new Math_BigInteger();
                        $hj->value = array(MATH_BIGINTEGER_MAX10);
                        if (!($zb[0] == "\55")) {
                            goto RwO;
                        }
                        $this->is_negative = true;
                        $zb = substr($zb, 1);
                        RwO:
                        $zb = str_pad($zb, strlen($zb) + (MATH_BIGINTEGER_MAX10_LEN - 1) * strlen($zb) % MATH_BIGINTEGER_MAX10_LEN, 0, STR_PAD_LEFT);
                        UDF:
                        if (!strlen($zb)) {
                            goto hLc;
                        }
                        $Mj = $Mj->multiply($hj);
                        $Mj = $Mj->add(new Math_BigInteger($this->_int2bytes(substr($zb, 0, MATH_BIGINTEGER_MAX10_LEN)), 256));
                        $zb = substr($zb, MATH_BIGINTEGER_MAX10_LEN);
                        goto UDF;
                        hLc:
                        $this->value = $Mj->value;
                }
                WHh:
                q38:
                goto x_q;
            case 2:
            case -2:
                if (!($m6 > 0 && $zb[0] == "\x2d")) {
                    goto H3V;
                }
                $this->is_negative = true;
                $zb = substr($zb, 1);
                H3V:
                $zb = preg_replace("\43\136\x28\x5b\60\x31\135\x2a\x29\x2e\52\43", "\44\x31", $zb);
                $zb = str_pad($zb, strlen($zb) + 3 * strlen($zb) % 4, 0, STR_PAD_LEFT);
                $aF = "\60\x78";
                FCa:
                if (!strlen($zb)) {
                    goto L0f;
                }
                $wY = substr($zb, 0, 4);
                $aF .= dechex(bindec($wY));
                $zb = substr($zb, 4);
                goto FCa;
                L0f:
                if (!$this->is_negative) {
                    goto Unx;
                }
                $aF = "\x2d" . $aF;
                Unx:
                $Mj = new Math_BigInteger($aF, 8 * $m6);
                $this->value = $Mj->value;
                $this->is_negative = $Mj->is_negative;
                goto x_q;
            default:
        }
        FP0:
        x_q:
    }
    function Math_BigInteger($zb = 0, $m6 = 10)
    {
        $this->__construct($zb, $m6);
    }
    function toBytes($uH = false)
    {
        if (!$uH) {
            goto ww8;
        }
        $re = $this->compare(new Math_BigInteger());
        if (!($re == 0)) {
            goto oqM;
        }
        return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
        oqM:
        $Mj = $re < 0 ? $this->add(new Math_BigInteger(1)) : $this->copy();
        $XD = $Mj->toBytes();
        if (!empty($XD)) {
            goto aWh;
        }
        $XD = chr(0);
        aWh:
        if (!(ord($XD[0]) & 128)) {
            goto PmL;
        }
        $XD = chr(0) . $XD;
        PmL:
        return $re < 0 ? ~$XD : $XD;
        ww8:
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                if (!(gmp_cmp($this->value, gmp_init(0)) == 0)) {
                    goto wi5;
                }
                return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
                wi5:
                if (function_exists("\x67\155\160\137\145\x78\160\157\162\x74")) {
                    goto lsY;
                }
                $Mj = gmp_strval(gmp_abs($this->value), 16);
                $Mj = strlen($Mj) & 1 ? "\60" . $Mj : $Mj;
                $Mj = pack("\x48\52", $Mj);
                goto rSW;
                lsY:
                $Mj = gmp_export($this->value);
                rSW:
                return $this->precision > 0 ? substr(str_pad($Mj, $this->precision >> 3, chr(0), STR_PAD_LEFT), -($this->precision >> 3)) : ltrim($Mj, chr(0));
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value === "\60")) {
                    goto mAW;
                }
                return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
                mAW:
                $sh = '';
                $nO = $this->value;
                if (!($nO[0] == "\x2d")) {
                    goto Jj5;
                }
                $nO = substr($nO, 1);
                Jj5:
                GeM:
                if (!(bccomp($nO, "\60", 0) > 0)) {
                    goto MvC;
                }
                $Mj = bcmod($nO, "\61\66\x37\x37\x37\62\x31\x36");
                $sh = chr($Mj >> 16) . chr($Mj >> 8) . chr($Mj) . $sh;
                $nO = bcdiv($nO, "\x31\x36\x37\x37\67\x32\61\66", 0);
                goto GeM;
                MvC:
                return $this->precision > 0 ? substr(str_pad($sh, $this->precision >> 3, chr(0), STR_PAD_LEFT), -($this->precision >> 3)) : ltrim($sh, chr(0));
        }
        afp:
        dWk:
        if (count($this->value)) {
            goto gAT;
        }
        return $this->precision > 0 ? str_repeat(chr(0), $this->precision + 1 >> 3) : '';
        gAT:
        $SV = $this->_int2bytes($this->value[count($this->value) - 1]);
        $Mj = $this->copy();
        $nH = count($Mj->value) - 2;
        SCb:
        if (!($nH >= 0)) {
            goto WQV;
        }
        $Mj->_base256_lshift($SV, MATH_BIGINTEGER_BASE);
        $SV = $SV | str_pad($Mj->_int2bytes($Mj->value[$nH]), strlen($SV), chr(0), STR_PAD_LEFT);
        MTt:
        --$nH;
        goto SCb;
        WQV:
        return $this->precision > 0 ? str_pad(substr($SV, -($this->precision + 7 >> 3)), $this->precision + 7 >> 3, chr(0), STR_PAD_LEFT) : $SV;
    }
    function toHex($uH = false)
    {
        return bin2hex($this->toBytes($uH));
    }
    function toBits($uH = false)
    {
        $ip = $this->toHex($uH);
        $Xr = '';
        $nH = strlen($ip) - 8;
        $Qd = strlen($ip) & 7;
        QYd:
        if (!($nH >= $Qd)) {
            goto T1B;
        }
        $Xr = str_pad(decbin(hexdec(substr($ip, $nH, 8))), 32, "\x30", STR_PAD_LEFT) . $Xr;
        ho6:
        $nH -= 8;
        goto QYd;
        T1B:
        if (!$Qd) {
            goto l7G;
        }
        $Xr = str_pad(decbin(hexdec(substr($ip, 0, $Qd))), 8, "\60", STR_PAD_LEFT) . $Xr;
        l7G:
        $SV = $this->precision > 0 ? substr($Xr, -$this->precision) : ltrim($Xr, "\x30");
        if (!($uH && $this->compare(new Math_BigInteger()) > 0 && $this->precision <= 0)) {
            goto I4f;
        }
        return "\60" . $SV;
        I4f:
        return $SV;
    }
    function toString()
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_strval($this->value);
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value === "\x30")) {
                    goto H8B;
                }
                return "\x30";
                H8B:
                return ltrim($this->value, "\60");
        }
        qrJ:
        RAt:
        if (count($this->value)) {
            goto J_B;
        }
        return "\60";
        J_B:
        $Mj = $this->copy();
        $Mj->is_negative = false;
        $n1 = new Math_BigInteger();
        $n1->value = array(MATH_BIGINTEGER_MAX10);
        $SV = '';
        o1b:
        if (!count($Mj->value)) {
            goto KAS;
        }
        list($Mj, $MH) = $Mj->divide($n1);
        $SV = str_pad(isset($MH->value[0]) ? $MH->value[0] : '', MATH_BIGINTEGER_MAX10_LEN, "\x30", STR_PAD_LEFT) . $SV;
        goto o1b;
        KAS:
        $SV = ltrim($SV, "\60");
        if (!empty($SV)) {
            goto OC1;
        }
        $SV = "\x30";
        OC1:
        if (!$this->is_negative) {
            goto Eny;
        }
        $SV = "\x2d" . $SV;
        Eny:
        return $SV;
    }
    function copy()
    {
        $Mj = new Math_BigInteger();
        $Mj->value = $this->value;
        $Mj->is_negative = $this->is_negative;
        $Mj->precision = $this->precision;
        $Mj->bitmask = $this->bitmask;
        return $Mj;
    }
    function __toString()
    {
        return $this->toString();
    }
    function __clone()
    {
        return $this->copy();
    }
    function __sleep()
    {
        $this->hex = $this->toHex(true);
        $NR = array("\x68\145\x78");
        if (!($this->precision > 0)) {
            goto AYB;
        }
        $NR[] = "\160\x72\145\x63\x69\163\151\157\x6e";
        AYB:
        return $NR;
    }
    function __wakeup()
    {
        $Mj = new Math_BigInteger($this->hex, -16);
        $this->value = $Mj->value;
        $this->is_negative = $Mj->is_negative;
        if (!($this->precision > 0)) {
            goto UTm;
        }
        $this->setPrecision($this->precision);
        UTm:
    }
    function __debugInfo()
    {
        $T_ = array();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Kk = "\x67\155\x70";
                goto Bat;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Kk = "\142\143\x6d\x61\164\150";
                goto Bat;
            case MATH_BIGINTEGER_MODE_INTERNAL:
                $Kk = "\x69\156\164\x65\x72\156\x61\x6c";
                $T_[] = PHP_INT_SIZE == 8 ? "\66\64\x2d\142\151\164" : "\63\62\x2d\142\151\x74";
        }
        SGz:
        Bat:
        if (!(MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_GMP && defined("\x4d\x41\124\110\137\x42\111\107\x49\x4e\x54\105\x47\105\x52\137\117\x50\105\x4e\123\x53\114\137\x45\x4e\x41\x42\x4c\105\104"))) {
            goto fls;
        }
        $T_[] = "\x4f\160\145\x6e\123\x53\x4c";
        fls:
        if (empty($T_)) {
            goto afv;
        }
        $Kk .= "\40\50" . implode($T_, "\54\40") . "\51";
        afv:
        return array("\x76\141\154\165\145" => "\x30\170" . $this->toHex(true), "\x65\x6e\x67\x69\156\x65" => $Kk);
    }
    function add($LB)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_add($this->value, $LB->value);
                return $this->_normalize($Mj);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Mj = new Math_BigInteger();
                $Mj->value = bcadd($this->value, $LB->value, 0);
                return $this->_normalize($Mj);
        }
        UFP:
        lAC:
        $Mj = $this->_add($this->value, $this->is_negative, $LB->value, $LB->is_negative);
        $SV = new Math_BigInteger();
        $SV->value = $Mj[MATH_BIGINTEGER_VALUE];
        $SV->is_negative = $Mj[MATH_BIGINTEGER_SIGN];
        return $this->_normalize($SV);
    }
    function _add($YK, $Fk, $h4, $VF)
    {
        $WI = count($YK);
        $S8 = count($h4);
        if ($WI == 0) {
            goto do0;
        }
        if ($S8 == 0) {
            goto RVz;
        }
        goto b0O;
        do0:
        return array(MATH_BIGINTEGER_VALUE => $h4, MATH_BIGINTEGER_SIGN => $VF);
        goto b0O;
        RVz:
        return array(MATH_BIGINTEGER_VALUE => $YK, MATH_BIGINTEGER_SIGN => $Fk);
        b0O:
        if (!($Fk != $VF)) {
            goto ihT;
        }
        if (!($YK == $h4)) {
            goto FJ6;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        FJ6:
        $Mj = $this->_subtract($YK, false, $h4, false);
        $Mj[MATH_BIGINTEGER_SIGN] = $this->_compare($YK, false, $h4, false) > 0 ? $Fk : $VF;
        return $Mj;
        ihT:
        if ($WI < $S8) {
            goto wA5;
        }
        $Rn = $S8;
        $sh = $YK;
        goto R9T;
        wA5:
        $Rn = $WI;
        $sh = $h4;
        R9T:
        $sh[count($sh)] = 0;
        $K9 = 0;
        $nH = 0;
        $J1 = 1;
        YAY:
        if (!($J1 < $Rn)) {
            goto WG_;
        }
        $N9 = $YK[$J1] * MATH_BIGINTEGER_BASE_FULL + $YK[$nH] + $h4[$J1] * MATH_BIGINTEGER_BASE_FULL + $h4[$nH] + $K9;
        $K9 = $N9 >= MATH_BIGINTEGER_MAX_DIGIT2;
        $N9 = $K9 ? $N9 - MATH_BIGINTEGER_MAX_DIGIT2 : $N9;
        $Mj = MATH_BIGINTEGER_BASE === 26 ? intval($N9 / 67108864) : $N9 >> 31;
        $sh[$nH] = (int) ($N9 - MATH_BIGINTEGER_BASE_FULL * $Mj);
        $sh[$J1] = $Mj;
        ayB:
        $nH += 2;
        $J1 += 2;
        goto YAY;
        WG_:
        if (!($J1 == $Rn)) {
            goto z3r;
        }
        $N9 = $YK[$nH] + $h4[$nH] + $K9;
        $K9 = $N9 >= MATH_BIGINTEGER_BASE_FULL;
        $sh[$nH] = $K9 ? $N9 - MATH_BIGINTEGER_BASE_FULL : $N9;
        ++$nH;
        z3r:
        if (!$K9) {
            goto vKY;
        }
        xbR:
        if (!($sh[$nH] == MATH_BIGINTEGER_MAX_DIGIT)) {
            goto Z2w;
        }
        $sh[$nH] = 0;
        W8K:
        ++$nH;
        goto xbR;
        Z2w:
        ++$sh[$nH];
        vKY:
        return array(MATH_BIGINTEGER_VALUE => $this->_trim($sh), MATH_BIGINTEGER_SIGN => $Fk);
    }
    function subtract($LB)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_sub($this->value, $LB->value);
                return $this->_normalize($Mj);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Mj = new Math_BigInteger();
                $Mj->value = bcsub($this->value, $LB->value, 0);
                return $this->_normalize($Mj);
        }
        Pum:
        fjj:
        $Mj = $this->_subtract($this->value, $this->is_negative, $LB->value, $LB->is_negative);
        $SV = new Math_BigInteger();
        $SV->value = $Mj[MATH_BIGINTEGER_VALUE];
        $SV->is_negative = $Mj[MATH_BIGINTEGER_SIGN];
        return $this->_normalize($SV);
    }
    function _subtract($YK, $Fk, $h4, $VF)
    {
        $WI = count($YK);
        $S8 = count($h4);
        if ($WI == 0) {
            goto sA2;
        }
        if ($S8 == 0) {
            goto qIi;
        }
        goto UhG;
        sA2:
        return array(MATH_BIGINTEGER_VALUE => $h4, MATH_BIGINTEGER_SIGN => !$VF);
        goto UhG;
        qIi:
        return array(MATH_BIGINTEGER_VALUE => $YK, MATH_BIGINTEGER_SIGN => $Fk);
        UhG:
        if (!($Fk != $VF)) {
            goto Znj;
        }
        $Mj = $this->_add($YK, false, $h4, false);
        $Mj[MATH_BIGINTEGER_SIGN] = $Fk;
        return $Mj;
        Znj:
        $HY = $this->_compare($YK, $Fk, $h4, $VF);
        if ($HY) {
            goto q_J;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        q_J:
        if (!(!$Fk && $HY < 0 || $Fk && $HY > 0)) {
            goto RXO;
        }
        $Mj = $YK;
        $YK = $h4;
        $h4 = $Mj;
        $Fk = !$Fk;
        $WI = count($YK);
        $S8 = count($h4);
        RXO:
        $K9 = 0;
        $nH = 0;
        $J1 = 1;
        pOU:
        if (!($J1 < $S8)) {
            goto Ehw;
        }
        $N9 = $YK[$J1] * MATH_BIGINTEGER_BASE_FULL + $YK[$nH] - $h4[$J1] * MATH_BIGINTEGER_BASE_FULL - $h4[$nH] - $K9;
        $K9 = $N9 < 0;
        $N9 = $K9 ? $N9 + MATH_BIGINTEGER_MAX_DIGIT2 : $N9;
        $Mj = MATH_BIGINTEGER_BASE === 26 ? intval($N9 / 67108864) : $N9 >> 31;
        $YK[$nH] = (int) ($N9 - MATH_BIGINTEGER_BASE_FULL * $Mj);
        $YK[$J1] = $Mj;
        Hzg:
        $nH += 2;
        $J1 += 2;
        goto pOU;
        Ehw:
        if (!($J1 == $S8)) {
            goto z29;
        }
        $N9 = $YK[$nH] - $h4[$nH] - $K9;
        $K9 = $N9 < 0;
        $YK[$nH] = $K9 ? $N9 + MATH_BIGINTEGER_BASE_FULL : $N9;
        ++$nH;
        z29:
        if (!$K9) {
            goto AZT;
        }
        p4g:
        if ($YK[$nH]) {
            goto jtR;
        }
        $YK[$nH] = MATH_BIGINTEGER_MAX_DIGIT;
        QPB:
        ++$nH;
        goto p4g;
        jtR:
        --$YK[$nH];
        AZT:
        return array(MATH_BIGINTEGER_VALUE => $this->_trim($YK), MATH_BIGINTEGER_SIGN => $Fk);
    }
    function multiply($zb)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_mul($this->value, $zb->value);
                return $this->_normalize($Mj);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Mj = new Math_BigInteger();
                $Mj->value = bcmul($this->value, $zb->value, 0);
                return $this->_normalize($Mj);
        }
        w8C:
        ooM:
        $Mj = $this->_multiply($this->value, $this->is_negative, $zb->value, $zb->is_negative);
        $xd = new Math_BigInteger();
        $xd->value = $Mj[MATH_BIGINTEGER_VALUE];
        $xd->is_negative = $Mj[MATH_BIGINTEGER_SIGN];
        return $this->_normalize($xd);
    }
    function _multiply($YK, $Fk, $h4, $VF)
    {
        $O1 = count($YK);
        $m7 = count($h4);
        if (!(!$O1 || !$m7)) {
            goto Bay;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        Bay:
        return array(MATH_BIGINTEGER_VALUE => min($O1, $m7) < 2 * MATH_BIGINTEGER_KARATSUBA_CUTOFF ? $this->_trim($this->_regularMultiply($YK, $h4)) : $this->_trim($this->_karatsuba($YK, $h4)), MATH_BIGINTEGER_SIGN => $Fk != $VF);
    }
    function _regularMultiply($YK, $h4)
    {
        $O1 = count($YK);
        $m7 = count($h4);
        if (!(!$O1 || !$m7)) {
            goto DER;
        }
        return array();
        DER:
        if (!($O1 < $m7)) {
            goto T1_;
        }
        $Mj = $YK;
        $YK = $h4;
        $h4 = $Mj;
        $O1 = count($YK);
        $m7 = count($h4);
        T1_:
        $QS = $this->_array_repeat(0, $O1 + $m7);
        $K9 = 0;
        $J1 = 0;
        UQo:
        if (!($J1 < $O1)) {
            goto qES;
        }
        $Mj = $YK[$J1] * $h4[0] + $K9;
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $QS[$J1] = (int) ($Mj - MATH_BIGINTEGER_BASE_FULL * $K9);
        qGK:
        ++$J1;
        goto UQo;
        qES:
        $QS[$J1] = $K9;
        $nH = 1;
        nP2:
        if (!($nH < $m7)) {
            goto VSi;
        }
        $K9 = 0;
        $J1 = 0;
        $VT = $nH;
        ncC:
        if (!($J1 < $O1)) {
            goto ikC;
        }
        $Mj = $QS[$VT] + $YK[$J1] * $h4[$nH] + $K9;
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $QS[$VT] = (int) ($Mj - MATH_BIGINTEGER_BASE_FULL * $K9);
        tLW:
        ++$J1;
        ++$VT;
        goto ncC;
        ikC:
        $QS[$VT] = $K9;
        p09:
        ++$nH;
        goto nP2;
        VSi:
        return $QS;
    }
    function _karatsuba($YK, $h4)
    {
        $kg = min(count($YK) >> 1, count($h4) >> 1);
        if (!($kg < MATH_BIGINTEGER_KARATSUBA_CUTOFF)) {
            goto bJM;
        }
        return $this->_regularMultiply($YK, $h4);
        bJM:
        $TZ = array_slice($YK, $kg);
        $S_ = array_slice($YK, 0, $kg);
        $o8 = array_slice($h4, $kg);
        $jE = array_slice($h4, 0, $kg);
        $X_ = $this->_karatsuba($TZ, $o8);
        $rR = $this->_karatsuba($S_, $jE);
        $FZ = $this->_add($TZ, false, $S_, false);
        $Mj = $this->_add($o8, false, $jE, false);
        $FZ = $this->_karatsuba($FZ[MATH_BIGINTEGER_VALUE], $Mj[MATH_BIGINTEGER_VALUE]);
        $Mj = $this->_add($X_, false, $rR, false);
        $FZ = $this->_subtract($FZ, false, $Mj[MATH_BIGINTEGER_VALUE], false);
        $X_ = array_merge(array_fill(0, 2 * $kg, 0), $X_);
        $FZ[MATH_BIGINTEGER_VALUE] = array_merge(array_fill(0, $kg, 0), $FZ[MATH_BIGINTEGER_VALUE]);
        $oo = $this->_add($X_, false, $FZ[MATH_BIGINTEGER_VALUE], $FZ[MATH_BIGINTEGER_SIGN]);
        $oo = $this->_add($oo[MATH_BIGINTEGER_VALUE], $oo[MATH_BIGINTEGER_SIGN], $rR, false);
        return $oo[MATH_BIGINTEGER_VALUE];
    }
    function _square($zb = false)
    {
        return count($zb) < 2 * MATH_BIGINTEGER_KARATSUBA_CUTOFF ? $this->_trim($this->_baseSquare($zb)) : $this->_trim($this->_karatsubaSquare($zb));
    }
    function _baseSquare($sh)
    {
        if (!empty($sh)) {
            goto JU1;
        }
        return array();
        JU1:
        $ls = $this->_array_repeat(0, 2 * count($sh));
        $nH = 0;
        $q6 = count($sh) - 1;
        Y2C:
        if (!($nH <= $q6)) {
            goto W2L;
        }
        $gN = $nH << 1;
        $Mj = $ls[$gN] + $sh[$nH] * $sh[$nH];
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $ls[$gN] = (int) ($Mj - MATH_BIGINTEGER_BASE_FULL * $K9);
        $J1 = $nH + 1;
        $VT = $gN + 1;
        lTC:
        if (!($J1 <= $q6)) {
            goto DDV;
        }
        $Mj = $ls[$VT] + 2 * $sh[$J1] * $sh[$nH] + $K9;
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $ls[$VT] = (int) ($Mj - MATH_BIGINTEGER_BASE_FULL * $K9);
        A1j:
        ++$J1;
        ++$VT;
        goto lTC;
        DDV:
        $ls[$nH + $q6 + 1] = $K9;
        gvu:
        ++$nH;
        goto Y2C;
        W2L:
        return $ls;
    }
    function _karatsubaSquare($sh)
    {
        $kg = count($sh) >> 1;
        if (!($kg < MATH_BIGINTEGER_KARATSUBA_CUTOFF)) {
            goto lAS;
        }
        return $this->_baseSquare($sh);
        lAS:
        $TZ = array_slice($sh, $kg);
        $S_ = array_slice($sh, 0, $kg);
        $X_ = $this->_karatsubaSquare($TZ);
        $rR = $this->_karatsubaSquare($S_);
        $FZ = $this->_add($TZ, false, $S_, false);
        $FZ = $this->_karatsubaSquare($FZ[MATH_BIGINTEGER_VALUE]);
        $Mj = $this->_add($X_, false, $rR, false);
        $FZ = $this->_subtract($FZ, false, $Mj[MATH_BIGINTEGER_VALUE], false);
        $X_ = array_merge(array_fill(0, 2 * $kg, 0), $X_);
        $FZ[MATH_BIGINTEGER_VALUE] = array_merge(array_fill(0, $kg, 0), $FZ[MATH_BIGINTEGER_VALUE]);
        $dB = $this->_add($X_, false, $FZ[MATH_BIGINTEGER_VALUE], $FZ[MATH_BIGINTEGER_SIGN]);
        $dB = $this->_add($dB[MATH_BIGINTEGER_VALUE], $dB[MATH_BIGINTEGER_SIGN], $rR, false);
        return $dB[MATH_BIGINTEGER_VALUE];
    }
    function divide($LB)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $wW = new Math_BigInteger();
                $Xw = new Math_BigInteger();
                list($wW->value, $Xw->value) = gmp_div_qr($this->value, $LB->value);
                if (!(gmp_sign($Xw->value) < 0)) {
                    goto uzZ;
                }
                $Xw->value = gmp_add($Xw->value, gmp_abs($LB->value));
                uzZ:
                return array($this->_normalize($wW), $this->_normalize($Xw));
            case MATH_BIGINTEGER_MODE_BCMATH:
                $wW = new Math_BigInteger();
                $Xw = new Math_BigInteger();
                $wW->value = bcdiv($this->value, $LB->value, 0);
                $Xw->value = bcmod($this->value, $LB->value);
                if (!($Xw->value[0] == "\55")) {
                    goto Akd;
                }
                $Xw->value = bcadd($Xw->value, $LB->value[0] == "\x2d" ? substr($LB->value, 1) : $LB->value, 0);
                Akd:
                return array($this->_normalize($wW), $this->_normalize($Xw));
        }
        Fbf:
        Nfn:
        if (!(count($LB->value) == 1)) {
            goto LfN;
        }
        list($Ot, $Zn) = $this->_divide_digit($this->value, $LB->value[0]);
        $wW = new Math_BigInteger();
        $Xw = new Math_BigInteger();
        $wW->value = $Ot;
        $Xw->value = array($Zn);
        $wW->is_negative = $this->is_negative != $LB->is_negative;
        return array($this->_normalize($wW), $this->_normalize($Xw));
        LfN:
        static $YD;
        if (isset($YD)) {
            goto QWr;
        }
        $YD = new Math_BigInteger();
        QWr:
        $zb = $this->copy();
        $LB = $LB->copy();
        $C1 = $zb->is_negative;
        $HA = $LB->is_negative;
        $zb->is_negative = $LB->is_negative = false;
        $HY = $zb->compare($LB);
        if ($HY) {
            goto Iwu;
        }
        $Mj = new Math_BigInteger();
        $Mj->value = array(1);
        $Mj->is_negative = $C1 != $HA;
        return array($this->_normalize($Mj), $this->_normalize(new Math_BigInteger()));
        Iwu:
        if (!($HY < 0)) {
            goto l7T;
        }
        if (!$C1) {
            goto mew;
        }
        $zb = $LB->subtract($zb);
        mew:
        return array($this->_normalize(new Math_BigInteger()), $this->_normalize($zb));
        l7T:
        $Al = $LB->value[count($LB->value) - 1];
        $Qj = 0;
        x5I:
        if ($Al & MATH_BIGINTEGER_MSB) {
            goto zI5;
        }
        $Al <<= 1;
        zAL:
        ++$Qj;
        goto x5I;
        zI5:
        $zb->_lshift($Qj);
        $LB->_lshift($Qj);
        $h4 =& $LB->value;
        $hT = count($zb->value) - 1;
        $XQ = count($LB->value) - 1;
        $wW = new Math_BigInteger();
        $O2 =& $wW->value;
        $O2 = $this->_array_repeat(0, $hT - $XQ + 1);
        static $Mj, $R2, $QQ;
        if (isset($Mj)) {
            goto h2O;
        }
        $Mj = new Math_BigInteger();
        $R2 = new Math_BigInteger();
        $QQ = new Math_BigInteger();
        h2O:
        $aQ =& $Mj->value;
        $VO =& $QQ->value;
        $aQ = array_merge($this->_array_repeat(0, $hT - $XQ), $h4);
        rEB:
        if (!($zb->compare($Mj) >= 0)) {
            goto UMh;
        }
        ++$O2[$hT - $XQ];
        $zb = $zb->subtract($Mj);
        $hT = count($zb->value) - 1;
        goto rEB;
        UMh:
        $nH = $hT;
        ILn:
        if (!($nH >= $XQ + 1)) {
            goto b21;
        }
        $YK =& $zb->value;
        $Id = array(isset($YK[$nH]) ? $YK[$nH] : 0, isset($YK[$nH - 1]) ? $YK[$nH - 1] : 0, isset($YK[$nH - 2]) ? $YK[$nH - 2] : 0);
        $tu = array($h4[$XQ], $XQ > 0 ? $h4[$XQ - 1] : 0);
        $bG = $nH - $XQ - 1;
        if ($Id[0] == $tu[0]) {
            goto pbZ;
        }
        $O2[$bG] = $this->_safe_divide($Id[0] * MATH_BIGINTEGER_BASE_FULL + $Id[1], $tu[0]);
        goto mrE;
        pbZ:
        $O2[$bG] = MATH_BIGINTEGER_MAX_DIGIT;
        mrE:
        $aQ = array($tu[1], $tu[0]);
        $R2->value = array($O2[$bG]);
        $R2 = $R2->multiply($Mj);
        $VO = array($Id[2], $Id[1], $Id[0]);
        YYS:
        if (!($R2->compare($QQ) > 0)) {
            goto OHb;
        }
        --$O2[$bG];
        $R2->value = array($O2[$bG]);
        $R2 = $R2->multiply($Mj);
        goto YYS;
        OHb:
        $eP = $this->_array_repeat(0, $bG);
        $aQ = array($O2[$bG]);
        $Mj = $Mj->multiply($LB);
        $aQ =& $Mj->value;
        $aQ = array_merge($eP, $aQ);
        $zb = $zb->subtract($Mj);
        if (!($zb->compare($YD) < 0)) {
            goto WBs;
        }
        $aQ = array_merge($eP, $h4);
        $zb = $zb->add($Mj);
        --$O2[$bG];
        WBs:
        $hT = count($YK) - 1;
        TqH:
        --$nH;
        goto ILn;
        b21:
        $zb->_rshift($Qj);
        $wW->is_negative = $C1 != $HA;
        if (!$C1) {
            goto B63;
        }
        $LB->_rshift($Qj);
        $zb = $LB->subtract($zb);
        B63:
        return array($this->_normalize($wW), $this->_normalize($zb));
    }
    function _divide_digit($Bw, $n1)
    {
        $K9 = 0;
        $SV = array();
        $nH = count($Bw) - 1;
        bZx:
        if (!($nH >= 0)) {
            goto YcP;
        }
        $Mj = MATH_BIGINTEGER_BASE_FULL * $K9 + $Bw[$nH];
        $SV[$nH] = $this->_safe_divide($Mj, $n1);
        $K9 = (int) ($Mj - $n1 * $SV[$nH]);
        Wk1:
        --$nH;
        goto bZx;
        YcP:
        return array($SV, $K9);
    }
    function modPow($to, $Lc)
    {
        $Lc = $this->bitmask !== false && $this->bitmask->compare($Lc) < 0 ? $this->bitmask : $Lc->abs();
        if (!($to->compare(new Math_BigInteger()) < 0)) {
            goto cLT;
        }
        $to = $to->abs();
        $Mj = $this->modInverse($Lc);
        if (!($Mj === false)) {
            goto PG_;
        }
        return false;
        PG_:
        return $this->_normalize($Mj->modPow($to, $Lc));
        cLT:
        if (!(MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_GMP)) {
            goto WAJ;
        }
        $Mj = new Math_BigInteger();
        $Mj->value = gmp_powm($this->value, $to->value, $Lc->value);
        return $this->_normalize($Mj);
        WAJ:
        if (!($this->compare(new Math_BigInteger()) < 0 || $this->compare($Lc) > 0)) {
            goto PnV;
        }
        list(, $Mj) = $this->divide($Lc);
        return $Mj->modPow($to, $Lc);
        PnV:
        if (!defined("\115\101\x54\110\137\102\111\107\x49\116\x54\105\x47\x45\122\x5f\x4f\120\105\116\123\x53\x4c\x5f\105\116\101\x42\114\x45\x44")) {
            goto L3m;
        }
        $HJ = array("\155\x6f\x64\x75\154\x75\x73" => $Lc->toBytes(true), "\160\165\142\x6c\151\x63\x45\x78\160\x6f\x6e\145\156\164" => $to->toBytes(true));
        $HJ = array("\155\157\144\x75\154\165\x73" => pack("\x43\141\x2a\x61\52", 2, $this->_encodeASN1Length(strlen($HJ["\x6d\x6f\144\x75\x6c\165\163"])), $HJ["\x6d\157\144\x75\x6c\x75\163"]), "\160\165\142\x6c\x69\143\105\170\160\157\x6e\x65\x6e\164" => pack("\103\x61\x2a\141\52", 2, $this->_encodeASN1Length(strlen($HJ["\x70\165\142\x6c\x69\x63\105\170\x70\x6f\156\x65\156\x74"])), $HJ["\160\165\142\154\x69\143\x45\x78\x70\x6f\156\145\156\164"]));
        $ud = pack("\103\x61\x2a\x61\x2a\141\52", 48, $this->_encodeASN1Length(strlen($HJ["\155\x6f\144\165\x6c\x75\163"]) + strlen($HJ["\x70\x75\x62\x6c\x69\143\105\170\x70\x6f\x6e\145\156\164"])), $HJ["\x6d\x6f\144\x75\x6c\x75\x73"], $HJ["\x70\165\x62\154\x69\x63\105\x78\160\157\x6e\145\156\164"]);
        $Fi = pack("\x48\x2a", "\63\60\x30\144\x30\x36\60\71\x32\141\70\x36\64\x38\x38\66\146\67\60\x64\60\61\x30\x31\x30\x31\x30\x35\x30\x30");
        $ud = chr(0) . $ud;
        $ud = chr(3) . $this->_encodeASN1Length(strlen($ud)) . $ud;
        $lz = pack("\103\x61\x2a\x61\52", 48, $this->_encodeASN1Length(strlen($Fi . $ud)), $Fi . $ud);
        $ud = "\55\55\x2d\x2d\55\x42\105\x47\111\116\40\x50\125\x42\114\x49\x43\x20\113\x45\x59\x2d\x2d\55\55\x2d\15\xa" . chunk_split(base64_encode($lz)) . "\x2d\x2d\55\55\x2d\x45\x4e\104\x20\x50\x55\x42\114\111\103\40\113\105\x59\x2d\55\55\x2d\x2d";
        $p7 = str_pad($this->toBytes(), strlen($Lc->toBytes(true)) - 1, "\0", STR_PAD_LEFT);
        if (!openssl_public_encrypt($p7, $SV, $ud, OPENSSL_NO_PADDING)) {
            goto VPL;
        }
        return new Math_BigInteger($SV, 256);
        VPL:
        L3m:
        if (!(MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_BCMATH)) {
            goto Z4_;
        }
        $Mj = new Math_BigInteger();
        $Mj->value = bcpowmod($this->value, $to->value, $Lc->value, 0);
        return $this->_normalize($Mj);
        Z4_:
        if (!empty($to->value)) {
            goto hhl;
        }
        $Mj = new Math_BigInteger();
        $Mj->value = array(1);
        return $this->_normalize($Mj);
        hhl:
        if (!($to->value == array(1))) {
            goto FrX;
        }
        list(, $Mj) = $this->divide($Lc);
        return $this->_normalize($Mj);
        FrX:
        if (!($to->value == array(2))) {
            goto Vcy;
        }
        $Mj = new Math_BigInteger();
        $Mj->value = $this->_square($this->value);
        list(, $Mj) = $Mj->divide($Lc);
        return $this->_normalize($Mj);
        Vcy:
        return $this->_normalize($this->_slidingWindow($to, $Lc, MATH_BIGINTEGER_BARRETT));
        if (!($Lc->value[0] & 1)) {
            goto e2i;
        }
        return $this->_normalize($this->_slidingWindow($to, $Lc, MATH_BIGINTEGER_MONTGOMERY));
        e2i:
        $nH = 0;
        PCi:
        if (!($nH < count($Lc->value))) {
            goto wW5;
        }
        if (!$Lc->value[$nH]) {
            goto qRX;
        }
        $Mj = decbin($Lc->value[$nH]);
        $J1 = strlen($Mj) - strrpos($Mj, "\61") - 1;
        $J1 += 26 * $nH;
        goto wW5;
        qRX:
        pmX:
        ++$nH;
        goto PCi;
        wW5:
        $Le = $Lc->copy();
        $Le->_rshift($J1);
        $ES = new Math_BigInteger();
        $ES->value = array(1);
        $ES->_lshift($J1);
        $ij = $Le->value != array(1) ? $this->_slidingWindow($to, $Le, MATH_BIGINTEGER_MONTGOMERY) : new Math_BigInteger();
        $TU = $this->_slidingWindow($to, $ES, MATH_BIGINTEGER_POWEROF2);
        $o8 = $ES->modInverse($Le);
        $p8 = $Le->modInverse($ES);
        $SV = $ij->multiply($ES);
        $SV = $SV->multiply($o8);
        $Mj = $TU->multiply($Le);
        $Mj = $Mj->multiply($p8);
        $SV = $SV->add($Mj);
        list(, $SV) = $SV->divide($Lc);
        return $this->_normalize($SV);
    }
    function powMod($to, $Lc)
    {
        return $this->modPow($to, $Lc);
    }
    function _slidingWindow($to, $Lc, $qw)
    {
        static $Ja = array(7, 25, 81, 241, 673, 1793);
        $QP = $to->value;
        $YT = count($QP) - 1;
        $Qh = decbin($QP[$YT]);
        $nH = $YT - 1;
        r4K:
        if (!($nH >= 0)) {
            goto oyA;
        }
        $Qh .= str_pad(decbin($QP[$nH]), MATH_BIGINTEGER_BASE, "\60", STR_PAD_LEFT);
        mFe:
        --$nH;
        goto r4K;
        oyA:
        $YT = strlen($Qh);
        $nH = 0;
        $SJ = 1;
        Nea:
        if (!($nH < count($Ja) && $YT > $Ja[$nH])) {
            goto XDh;
        }
        X9X:
        ++$SJ;
        ++$nH;
        goto Nea;
        XDh:
        $Ky = $Lc->value;
        $y_ = array();
        $y_[1] = $this->_prepareReduce($this->value, $Ky, $qw);
        $y_[2] = $this->_squareReduce($y_[1], $Ky, $qw);
        $Mj = 1 << $SJ - 1;
        $nH = 1;
        WBg:
        if (!($nH < $Mj)) {
            goto sA3;
        }
        $gN = $nH << 1;
        $y_[$gN + 1] = $this->_multiplyReduce($y_[$gN - 1], $y_[2], $Ky, $qw);
        Us2:
        ++$nH;
        goto WBg;
        sA3:
        $SV = array(1);
        $SV = $this->_prepareReduce($SV, $Ky, $qw);
        $nH = 0;
        XQz:
        if (!($nH < $YT)) {
            goto VoB;
        }
        if (!$Qh[$nH]) {
            goto SOe;
        }
        $J1 = $SJ - 1;
        lYF:
        if (!($J1 > 0)) {
            goto Wn8;
        }
        if (empty($Qh[$nH + $J1])) {
            goto sz2;
        }
        goto Wn8;
        sz2:
        lXK:
        --$J1;
        goto lYF;
        Wn8:
        $VT = 0;
        gvc:
        if (!($VT <= $J1)) {
            goto N4b;
        }
        $SV = $this->_squareReduce($SV, $Ky, $qw);
        NAZ:
        ++$VT;
        goto gvc;
        N4b:
        $SV = $this->_multiplyReduce($SV, $y_[bindec(substr($Qh, $nH, $J1 + 1))], $Ky, $qw);
        $nH += $J1 + 1;
        goto mB0;
        SOe:
        $SV = $this->_squareReduce($SV, $Ky, $qw);
        ++$nH;
        mB0:
        mo0:
        goto XQz;
        VoB:
        $Mj = new Math_BigInteger();
        $Mj->value = $this->_reduce($SV, $Ky, $qw);
        return $Mj;
    }
    function _reduce($zb, $Lc, $qw)
    {
        switch ($qw) {
            case MATH_BIGINTEGER_MONTGOMERY:
                return $this->_montgomery($zb, $Lc);
            case MATH_BIGINTEGER_BARRETT:
                return $this->_barrett($zb, $Lc);
            case MATH_BIGINTEGER_POWEROF2:
                $R2 = new Math_BigInteger();
                $R2->value = $zb;
                $QQ = new Math_BigInteger();
                $QQ->value = $Lc;
                return $zb->_mod2($Lc);
            case MATH_BIGINTEGER_CLASSIC:
                $R2 = new Math_BigInteger();
                $R2->value = $zb;
                $QQ = new Math_BigInteger();
                $QQ->value = $Lc;
                list(, $Mj) = $R2->divide($QQ);
                return $Mj->value;
            case MATH_BIGINTEGER_NONE:
                return $zb;
            default:
        }
        EQd:
        K1p:
    }
    function _prepareReduce($zb, $Lc, $qw)
    {
        if (!($qw == MATH_BIGINTEGER_MONTGOMERY)) {
            goto uZz;
        }
        return $this->_prepMontgomery($zb, $Lc);
        uZz:
        return $this->_reduce($zb, $Lc, $qw);
    }
    function _multiplyReduce($zb, $LB, $Lc, $qw)
    {
        if (!($qw == MATH_BIGINTEGER_MONTGOMERY)) {
            goto J83;
        }
        return $this->_montgomeryMultiply($zb, $LB, $Lc);
        J83:
        $Mj = $this->_multiply($zb, false, $LB, false);
        return $this->_reduce($Mj[MATH_BIGINTEGER_VALUE], $Lc, $qw);
    }
    function _squareReduce($zb, $Lc, $qw)
    {
        if (!($qw == MATH_BIGINTEGER_MONTGOMERY)) {
            goto Wap;
        }
        return $this->_montgomeryMultiply($zb, $zb, $Lc);
        Wap:
        return $this->_reduce($this->_square($zb), $Lc, $qw);
    }
    function _mod2($Lc)
    {
        $Mj = new Math_BigInteger();
        $Mj->value = array(1);
        return $this->bitwise_and($Lc->subtract($Mj));
    }
    function _barrett($Lc, $kg)
    {
        static $uY = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        $up = count($kg);
        if (!(count($Lc) > 2 * $up)) {
            goto Erk;
        }
        $R2 = new Math_BigInteger();
        $QQ = new Math_BigInteger();
        $R2->value = $Lc;
        $QQ->value = $kg;
        list(, $Mj) = $R2->divide($QQ);
        return $Mj->value;
        Erk:
        if (!($up < 5)) {
            goto D5v;
        }
        return $this->_regularBarrett($Lc, $kg);
        D5v:
        if (($qi = array_search($kg, $uY[MATH_BIGINTEGER_VARIABLE])) === false) {
            goto Pp8;
        }
        extract($uY[MATH_BIGINTEGER_DATA][$qi]);
        goto nzr;
        Pp8:
        $qi = count($uY[MATH_BIGINTEGER_VARIABLE]);
        $uY[MATH_BIGINTEGER_VARIABLE][] = $kg;
        $R2 = new Math_BigInteger();
        $yy =& $R2->value;
        $yy = $this->_array_repeat(0, $up + ($up >> 1));
        $yy[] = 1;
        $QQ = new Math_BigInteger();
        $QQ->value = $kg;
        list($EZ, $x8) = $R2->divide($QQ);
        $EZ = $EZ->value;
        $x8 = $x8->value;
        $uY[MATH_BIGINTEGER_DATA][] = array("\x75" => $EZ, "\x6d\61" => $x8);
        nzr:
        $vw = $up + ($up >> 1);
        $Zs = array_slice($Lc, 0, $vw);
        $K8 = array_slice($Lc, $vw);
        $Zs = $this->_trim($Zs);
        $Mj = $this->_multiply($K8, false, $x8, false);
        $Lc = $this->_add($Zs, false, $Mj[MATH_BIGINTEGER_VALUE], false);
        if (!($up & 1)) {
            goto j3s;
        }
        return $this->_regularBarrett($Lc[MATH_BIGINTEGER_VALUE], $kg);
        j3s:
        $Mj = array_slice($Lc[MATH_BIGINTEGER_VALUE], $up - 1);
        $Mj = $this->_multiply($Mj, false, $EZ, false);
        $Mj = array_slice($Mj[MATH_BIGINTEGER_VALUE], ($up >> 1) + 1);
        $Mj = $this->_multiply($Mj, false, $kg, false);
        $SV = $this->_subtract($Lc[MATH_BIGINTEGER_VALUE], false, $Mj[MATH_BIGINTEGER_VALUE], false);
        f20:
        if (!($this->_compare($SV[MATH_BIGINTEGER_VALUE], $SV[MATH_BIGINTEGER_SIGN], $kg, false) >= 0)) {
            goto ilZ;
        }
        $SV = $this->_subtract($SV[MATH_BIGINTEGER_VALUE], $SV[MATH_BIGINTEGER_SIGN], $kg, false);
        goto f20;
        ilZ:
        return $SV[MATH_BIGINTEGER_VALUE];
    }
    function _regularBarrett($zb, $Lc)
    {
        static $uY = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        $Fd = count($Lc);
        if (!(count($zb) > 2 * $Fd)) {
            goto Xgn;
        }
        $R2 = new Math_BigInteger();
        $QQ = new Math_BigInteger();
        $R2->value = $zb;
        $QQ->value = $Lc;
        list(, $Mj) = $R2->divide($QQ);
        return $Mj->value;
        Xgn:
        if (!(($qi = array_search($Lc, $uY[MATH_BIGINTEGER_VARIABLE])) === false)) {
            goto XSG;
        }
        $qi = count($uY[MATH_BIGINTEGER_VARIABLE]);
        $uY[MATH_BIGINTEGER_VARIABLE][] = $Lc;
        $R2 = new Math_BigInteger();
        $yy =& $R2->value;
        $yy = $this->_array_repeat(0, 2 * $Fd);
        $yy[] = 1;
        $QQ = new Math_BigInteger();
        $QQ->value = $Lc;
        list($Mj, ) = $R2->divide($QQ);
        $uY[MATH_BIGINTEGER_DATA][] = $Mj->value;
        XSG:
        $Mj = array_slice($zb, $Fd - 1);
        $Mj = $this->_multiply($Mj, false, $uY[MATH_BIGINTEGER_DATA][$qi], false);
        $Mj = array_slice($Mj[MATH_BIGINTEGER_VALUE], $Fd + 1);
        $SV = array_slice($zb, 0, $Fd + 1);
        $Mj = $this->_multiplyLower($Mj, false, $Lc, false, $Fd + 1);
        if (!($this->_compare($SV, false, $Mj[MATH_BIGINTEGER_VALUE], $Mj[MATH_BIGINTEGER_SIGN]) < 0)) {
            goto aOB;
        }
        $nM = $this->_array_repeat(0, $Fd + 1);
        $nM[count($nM)] = 1;
        $SV = $this->_add($SV, false, $nM, false);
        $SV = $SV[MATH_BIGINTEGER_VALUE];
        aOB:
        $SV = $this->_subtract($SV, false, $Mj[MATH_BIGINTEGER_VALUE], $Mj[MATH_BIGINTEGER_SIGN]);
        cDu:
        if (!($this->_compare($SV[MATH_BIGINTEGER_VALUE], $SV[MATH_BIGINTEGER_SIGN], $Lc, false) > 0)) {
            goto TwJ;
        }
        $SV = $this->_subtract($SV[MATH_BIGINTEGER_VALUE], $SV[MATH_BIGINTEGER_SIGN], $Lc, false);
        goto cDu;
        TwJ:
        return $SV[MATH_BIGINTEGER_VALUE];
    }
    function _multiplyLower($YK, $Fk, $h4, $VF, $cT)
    {
        $O1 = count($YK);
        $m7 = count($h4);
        if (!(!$O1 || !$m7)) {
            goto Jgq;
        }
        return array(MATH_BIGINTEGER_VALUE => array(), MATH_BIGINTEGER_SIGN => false);
        Jgq:
        if (!($O1 < $m7)) {
            goto CzU;
        }
        $Mj = $YK;
        $YK = $h4;
        $h4 = $Mj;
        $O1 = count($YK);
        $m7 = count($h4);
        CzU:
        $QS = $this->_array_repeat(0, $O1 + $m7);
        $K9 = 0;
        $J1 = 0;
        xtB:
        if (!($J1 < $O1)) {
            goto N_b;
        }
        $Mj = $YK[$J1] * $h4[0] + $K9;
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $QS[$J1] = (int) ($Mj - MATH_BIGINTEGER_BASE_FULL * $K9);
        dGH:
        ++$J1;
        goto xtB;
        N_b:
        if (!($J1 < $cT)) {
            goto TyC;
        }
        $QS[$J1] = $K9;
        TyC:
        $nH = 1;
        hiv:
        if (!($nH < $m7)) {
            goto I0P;
        }
        $K9 = 0;
        $J1 = 0;
        $VT = $nH;
        oJS:
        if (!($J1 < $O1 && $VT < $cT)) {
            goto hEr;
        }
        $Mj = $QS[$VT] + $YK[$J1] * $h4[$nH] + $K9;
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $QS[$VT] = (int) ($Mj - MATH_BIGINTEGER_BASE_FULL * $K9);
        q3w:
        ++$J1;
        ++$VT;
        goto oJS;
        hEr:
        if (!($VT < $cT)) {
            goto mk8;
        }
        $QS[$VT] = $K9;
        mk8:
        iOk:
        ++$nH;
        goto hiv;
        I0P:
        return array(MATH_BIGINTEGER_VALUE => $this->_trim($QS), MATH_BIGINTEGER_SIGN => $Fk != $VF);
    }
    function _montgomery($zb, $Lc)
    {
        static $uY = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        if (!(($qi = array_search($Lc, $uY[MATH_BIGINTEGER_VARIABLE])) === false)) {
            goto iIb;
        }
        $qi = count($uY[MATH_BIGINTEGER_VARIABLE]);
        $uY[MATH_BIGINTEGER_VARIABLE][] = $zb;
        $uY[MATH_BIGINTEGER_DATA][] = $this->_modInverse67108864($Lc);
        iIb:
        $VT = count($Lc);
        $SV = array(MATH_BIGINTEGER_VALUE => $zb);
        $nH = 0;
        JzO:
        if (!($nH < $VT)) {
            goto x7k;
        }
        $Mj = $SV[MATH_BIGINTEGER_VALUE][$nH] * $uY[MATH_BIGINTEGER_DATA][$qi];
        $Mj = $Mj - MATH_BIGINTEGER_BASE_FULL * (MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31);
        $Mj = $this->_regularMultiply(array($Mj), $Lc);
        $Mj = array_merge($this->_array_repeat(0, $nH), $Mj);
        $SV = $this->_add($SV[MATH_BIGINTEGER_VALUE], false, $Mj, false);
        VBs:
        ++$nH;
        goto JzO;
        x7k:
        $SV[MATH_BIGINTEGER_VALUE] = array_slice($SV[MATH_BIGINTEGER_VALUE], $VT);
        if (!($this->_compare($SV, false, $Lc, false) >= 0)) {
            goto FCv;
        }
        $SV = $this->_subtract($SV[MATH_BIGINTEGER_VALUE], false, $Lc, false);
        FCv:
        return $SV[MATH_BIGINTEGER_VALUE];
    }
    function _montgomeryMultiply($zb, $LB, $kg)
    {
        $Mj = $this->_multiply($zb, false, $LB, false);
        return $this->_montgomery($Mj[MATH_BIGINTEGER_VALUE], $kg);
        static $uY = array(MATH_BIGINTEGER_VARIABLE => array(), MATH_BIGINTEGER_DATA => array());
        if (!(($qi = array_search($kg, $uY[MATH_BIGINTEGER_VARIABLE])) === false)) {
            goto nBS;
        }
        $qi = count($uY[MATH_BIGINTEGER_VARIABLE]);
        $uY[MATH_BIGINTEGER_VARIABLE][] = $kg;
        $uY[MATH_BIGINTEGER_DATA][] = $this->_modInverse67108864($kg);
        nBS:
        $Lc = max(count($zb), count($LB), count($kg));
        $zb = array_pad($zb, $Lc, 0);
        $LB = array_pad($LB, $Lc, 0);
        $kg = array_pad($kg, $Lc, 0);
        $t6 = array(MATH_BIGINTEGER_VALUE => $this->_array_repeat(0, $Lc + 1));
        $nH = 0;
        bFH:
        if (!($nH < $Lc)) {
            goto PsJ;
        }
        $Mj = $t6[MATH_BIGINTEGER_VALUE][0] + $zb[$nH] * $LB[0];
        $Mj = $Mj - MATH_BIGINTEGER_BASE_FULL * (MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31);
        $Mj = $Mj * $uY[MATH_BIGINTEGER_DATA][$qi];
        $Mj = $Mj - MATH_BIGINTEGER_BASE_FULL * (MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31);
        $Mj = $this->_add($this->_regularMultiply(array($zb[$nH]), $LB), false, $this->_regularMultiply(array($Mj), $kg), false);
        $t6 = $this->_add($t6[MATH_BIGINTEGER_VALUE], false, $Mj[MATH_BIGINTEGER_VALUE], false);
        $t6[MATH_BIGINTEGER_VALUE] = array_slice($t6[MATH_BIGINTEGER_VALUE], 1);
        TsX:
        ++$nH;
        goto bFH;
        PsJ:
        if (!($this->_compare($t6[MATH_BIGINTEGER_VALUE], false, $kg, false) >= 0)) {
            goto Ul8;
        }
        $t6 = $this->_subtract($t6[MATH_BIGINTEGER_VALUE], false, $kg, false);
        Ul8:
        return $t6[MATH_BIGINTEGER_VALUE];
    }
    function _prepMontgomery($zb, $Lc)
    {
        $R2 = new Math_BigInteger();
        $R2->value = array_merge($this->_array_repeat(0, count($Lc)), $zb);
        $QQ = new Math_BigInteger();
        $QQ->value = $Lc;
        list(, $Mj) = $R2->divide($QQ);
        return $Mj->value;
    }
    function _modInverse67108864($zb)
    {
        $zb = -$zb[0];
        $SV = $zb & 3;
        $SV = $SV * (2 - $zb * $SV) & 15;
        $SV = $SV * (2 - ($zb & 255) * $SV) & 255;
        $SV = $SV * (2 - ($zb & 65535) * $SV & 65535) & 65535;
        $SV = fmod($SV * (2 - fmod($zb * $SV, MATH_BIGINTEGER_BASE_FULL)), MATH_BIGINTEGER_BASE_FULL);
        return $SV & MATH_BIGINTEGER_MAX_DIGIT;
    }
    function modInverse($Lc)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_invert($this->value, $Lc->value);
                return $Mj->value === false ? false : $this->_normalize($Mj);
        }
        Zgz:
        hI4:
        static $YD, $XZ;
        if (isset($YD)) {
            goto KxE;
        }
        $YD = new Math_BigInteger();
        $XZ = new Math_BigInteger(1);
        KxE:
        $Lc = $Lc->abs();
        if (!($this->compare($YD) < 0)) {
            goto eqY;
        }
        $Mj = $this->abs();
        $Mj = $Mj->modInverse($Lc);
        return $this->_normalize($Lc->subtract($Mj));
        eqY:
        extract($this->extendedGCD($Lc));
        if ($cz->equals($XZ)) {
            goto QRp;
        }
        return false;
        QRp:
        $zb = $zb->compare($YD) < 0 ? $zb->add($Lc) : $zb;
        return $this->compare($YD) < 0 ? $this->_normalize($Lc->subtract($zb)) : $this->_normalize($zb);
    }
    function extendedGCD($Lc)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                extract(gmp_gcdext($this->value, $Lc->value));
                return array("\x67\x63\144" => $this->_normalize(new Math_BigInteger($pf)), "\x78" => $this->_normalize(new Math_BigInteger($YG)), "\171" => $this->_normalize(new Math_BigInteger($EA)));
            case MATH_BIGINTEGER_MODE_BCMATH:
                $EZ = $this->value;
                $TO = $Lc->value;
                $t6 = "\x31";
                $GD = "\x30";
                $R3 = "\60";
                $Af = "\61";
                WJK:
                if (!(bccomp($TO, "\x30", 0) != 0)) {
                    goto hTV;
                }
                $Ot = bcdiv($EZ, $TO, 0);
                $Mj = $EZ;
                $EZ = $TO;
                $TO = bcsub($Mj, bcmul($TO, $Ot, 0), 0);
                $Mj = $t6;
                $t6 = $R3;
                $R3 = bcsub($Mj, bcmul($t6, $Ot, 0), 0);
                $Mj = $GD;
                $GD = $Af;
                $Af = bcsub($Mj, bcmul($GD, $Ot, 0), 0);
                goto WJK;
                hTV:
                return array("\x67\143\x64" => $this->_normalize(new Math_BigInteger($EZ)), "\x78" => $this->_normalize(new Math_BigInteger($t6)), "\171" => $this->_normalize(new Math_BigInteger($GD)));
        }
        X4O:
        aIx:
        $LB = $Lc->copy();
        $zb = $this->copy();
        $pf = new Math_BigInteger();
        $pf->value = array(1);
        JKm:
        if ($zb->value[0] & 1 || $LB->value[0] & 1) {
            goto QXw;
        }
        $zb->_rshift(1);
        $LB->_rshift(1);
        $pf->_lshift(1);
        goto JKm;
        QXw:
        $EZ = $zb->copy();
        $TO = $LB->copy();
        $t6 = new Math_BigInteger();
        $GD = new Math_BigInteger();
        $R3 = new Math_BigInteger();
        $Af = new Math_BigInteger();
        $t6->value = $Af->value = $pf->value = array(1);
        $GD->value = $R3->value = array();
        Lq3:
        if (empty($EZ->value)) {
            goto Nxp;
        }
        aV8:
        if ($EZ->value[0] & 1) {
            goto QsQ;
        }
        $EZ->_rshift(1);
        if (!(!empty($t6->value) && $t6->value[0] & 1 || !empty($GD->value) && $GD->value[0] & 1)) {
            goto yY4;
        }
        $t6 = $t6->add($LB);
        $GD = $GD->subtract($zb);
        yY4:
        $t6->_rshift(1);
        $GD->_rshift(1);
        goto aV8;
        QsQ:
        GMo:
        if ($TO->value[0] & 1) {
            goto fGV;
        }
        $TO->_rshift(1);
        if (!(!empty($Af->value) && $Af->value[0] & 1 || !empty($R3->value) && $R3->value[0] & 1)) {
            goto QPO;
        }
        $R3 = $R3->add($LB);
        $Af = $Af->subtract($zb);
        QPO:
        $R3->_rshift(1);
        $Af->_rshift(1);
        goto GMo;
        fGV:
        if ($EZ->compare($TO) >= 0) {
            goto UUJ;
        }
        $TO = $TO->subtract($EZ);
        $R3 = $R3->subtract($t6);
        $Af = $Af->subtract($GD);
        goto Mth;
        UUJ:
        $EZ = $EZ->subtract($TO);
        $t6 = $t6->subtract($R3);
        $GD = $GD->subtract($Af);
        Mth:
        goto Lq3;
        Nxp:
        return array("\x67\143\x64" => $this->_normalize($pf->multiply($TO)), "\x78" => $this->_normalize($R3), "\x79" => $this->_normalize($Af));
    }
    function gcd($Lc)
    {
        extract($this->extendedGCD($Lc));
        return $cz;
    }
    function abs()
    {
        $Mj = new Math_BigInteger();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj->value = gmp_abs($this->value);
                goto e17;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Mj->value = bccomp($this->value, "\60", 0) < 0 ? substr($this->value, 1) : $this->value;
                goto e17;
            default:
                $Mj->value = $this->value;
        }
        y23:
        e17:
        return $Mj;
    }
    function compare($LB)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_cmp($this->value, $LB->value);
            case MATH_BIGINTEGER_MODE_BCMATH:
                return bccomp($this->value, $LB->value, 0);
        }
        G9E:
        mgK:
        return $this->_compare($this->value, $this->is_negative, $LB->value, $LB->is_negative);
    }
    function _compare($YK, $Fk, $h4, $VF)
    {
        if (!($Fk != $VF)) {
            goto uHP;
        }
        return !$Fk && $VF ? 1 : -1;
        uHP:
        $SV = $Fk ? -1 : 1;
        if (!(count($YK) != count($h4))) {
            goto Qy1;
        }
        return count($YK) > count($h4) ? $SV : -$SV;
        Qy1:
        $Rn = max(count($YK), count($h4));
        $YK = array_pad($YK, $Rn, 0);
        $h4 = array_pad($h4, $Rn, 0);
        $nH = count($YK) - 1;
        v4f:
        if (!($nH >= 0)) {
            goto OXO;
        }
        if (!($YK[$nH] != $h4[$nH])) {
            goto Se6;
        }
        return $YK[$nH] > $h4[$nH] ? $SV : -$SV;
        Se6:
        FJE:
        --$nH;
        goto v4f;
        OXO:
        return 0;
    }
    function equals($zb)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_cmp($this->value, $zb->value) == 0;
            default:
                return $this->value === $zb->value && $this->is_negative == $zb->is_negative;
        }
        cR6:
        Gax:
    }
    function setPrecision($Xr)
    {
        $this->precision = $Xr;
        if (MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_BCMATH) {
            goto pMb;
        }
        $this->bitmask = new Math_BigInteger(bcpow("\62", $Xr, 0));
        goto Oxt;
        pMb:
        $this->bitmask = new Math_BigInteger(chr((1 << ($Xr & 7)) - 1) . str_repeat(chr(255), $Xr >> 3), 256);
        Oxt:
        $Mj = $this->_normalize($this);
        $this->value = $Mj->value;
    }
    function bitwise_and($zb)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_and($this->value, $zb->value);
                return $this->_normalize($Mj);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $b4 = $this->toBytes();
                $XK = $zb->toBytes();
                $fl = max(strlen($b4), strlen($XK));
                $b4 = str_pad($b4, $fl, chr(0), STR_PAD_LEFT);
                $XK = str_pad($XK, $fl, chr(0), STR_PAD_LEFT);
                return $this->_normalize(new Math_BigInteger($b4 & $XK, 256));
        }
        e6o:
        zOH:
        $SV = $this->copy();
        $fl = min(count($zb->value), count($this->value));
        $SV->value = array_slice($SV->value, 0, $fl);
        $nH = 0;
        Qam:
        if (!($nH < $fl)) {
            goto hGY;
        }
        $SV->value[$nH] &= $zb->value[$nH];
        Fxy:
        ++$nH;
        goto Qam;
        hGY:
        return $this->_normalize($SV);
    }
    function bitwise_or($zb)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_or($this->value, $zb->value);
                return $this->_normalize($Mj);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $b4 = $this->toBytes();
                $XK = $zb->toBytes();
                $fl = max(strlen($b4), strlen($XK));
                $b4 = str_pad($b4, $fl, chr(0), STR_PAD_LEFT);
                $XK = str_pad($XK, $fl, chr(0), STR_PAD_LEFT);
                return $this->_normalize(new Math_BigInteger($b4 | $XK, 256));
        }
        shc:
        mnI:
        $fl = max(count($this->value), count($zb->value));
        $SV = $this->copy();
        $SV->value = array_pad($SV->value, $fl, 0);
        $zb->value = array_pad($zb->value, $fl, 0);
        $nH = 0;
        zEC:
        if (!($nH < $fl)) {
            goto c94;
        }
        $SV->value[$nH] |= $zb->value[$nH];
        hDU:
        ++$nH;
        goto zEC;
        c94:
        return $this->_normalize($SV);
    }
    function bitwise_xor($zb)
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                $Mj = new Math_BigInteger();
                $Mj->value = gmp_xor(gmp_abs($this->value), gmp_abs($zb->value));
                return $this->_normalize($Mj);
            case MATH_BIGINTEGER_MODE_BCMATH:
                $b4 = $this->toBytes();
                $XK = $zb->toBytes();
                $fl = max(strlen($b4), strlen($XK));
                $b4 = str_pad($b4, $fl, chr(0), STR_PAD_LEFT);
                $XK = str_pad($XK, $fl, chr(0), STR_PAD_LEFT);
                return $this->_normalize(new Math_BigInteger($b4 ^ $XK, 256));
        }
        Gv4:
        w1Q:
        $fl = max(count($this->value), count($zb->value));
        $SV = $this->copy();
        $SV->is_negative = false;
        $SV->value = array_pad($SV->value, $fl, 0);
        $zb->value = array_pad($zb->value, $fl, 0);
        $nH = 0;
        crI:
        if (!($nH < $fl)) {
            goto gv8;
        }
        $SV->value[$nH] ^= $zb->value[$nH];
        pb_:
        ++$nH;
        goto crI;
        gv8:
        return $this->_normalize($SV);
    }
    function bitwise_not()
    {
        $Mj = $this->toBytes();
        if (!($Mj == '')) {
            goto iYe;
        }
        return $this->_normalize(new Math_BigInteger());
        iYe:
        $jM = decbin(ord($Mj[0]));
        $Mj = ~$Mj;
        $Al = decbin(ord($Mj[0]));
        if (!(strlen($Al) == 8)) {
            goto ZH9;
        }
        $Al = substr($Al, strpos($Al, "\60"));
        ZH9:
        $Mj[0] = chr(bindec($Al));
        $rx = strlen($jM) + 8 * strlen($Mj) - 8;
        $c1 = $this->precision - $rx;
        if (!($c1 <= 0)) {
            goto ZBx;
        }
        return $this->_normalize(new Math_BigInteger($Mj, 256));
        ZBx:
        $sR = chr((1 << ($c1 & 7)) - 1) . str_repeat(chr(255), $c1 >> 3);
        $this->_base256_lshift($sR, $rx);
        $Mj = str_pad($Mj, strlen($sR), chr(0), STR_PAD_LEFT);
        return $this->_normalize(new Math_BigInteger($sR | $Mj, 256));
    }
    function bitwise_rightShift($Qj)
    {
        $Mj = new Math_BigInteger();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                static $Pg;
                if (isset($Pg)) {
                    goto Qqg;
                }
                $Pg = gmp_init("\62");
                Qqg:
                $Mj->value = gmp_div_q($this->value, gmp_pow($Pg, $Qj));
                goto Cg8;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Mj->value = bcdiv($this->value, bcpow("\62", $Qj, 0), 0);
                goto Cg8;
            default:
                $Mj->value = $this->value;
                $Mj->_rshift($Qj);
        }
        iWS:
        Cg8:
        return $this->_normalize($Mj);
    }
    function bitwise_leftShift($Qj)
    {
        $Mj = new Math_BigInteger();
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                static $Pg;
                if (isset($Pg)) {
                    goto mc_;
                }
                $Pg = gmp_init("\x32");
                mc_:
                $Mj->value = gmp_mul($this->value, gmp_pow($Pg, $Qj));
                goto B80;
            case MATH_BIGINTEGER_MODE_BCMATH:
                $Mj->value = bcmul($this->value, bcpow("\62", $Qj, 0), 0);
                goto B80;
            default:
                $Mj->value = $this->value;
                $Mj->_lshift($Qj);
        }
        UXB:
        B80:
        return $this->_normalize($Mj);
    }
    function bitwise_leftRotate($Qj)
    {
        $Xr = $this->toBytes();
        if ($this->precision > 0) {
            goto r_v;
        }
        $Mj = ord($Xr[0]);
        $nH = 0;
        K5h:
        if (!($Mj >> $nH)) {
            goto QvP;
        }
        kpL:
        ++$nH;
        goto K5h;
        QvP:
        $G5 = 8 * strlen($Xr) - 8 + $nH;
        $cQ = chr((1 << ($G5 & 7)) - 1) . str_repeat(chr(255), $G5 >> 3);
        goto tuG;
        r_v:
        $G5 = $this->precision;
        if (MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_BCMATH) {
            goto h2m;
        }
        $cQ = $this->bitmask->toBytes();
        goto zHB;
        h2m:
        $cQ = $this->bitmask->subtract(new Math_BigInteger(1));
        $cQ = $cQ->toBytes();
        zHB:
        tuG:
        if (!($Qj < 0)) {
            goto TCH;
        }
        $Qj += $G5;
        TCH:
        $Qj %= $G5;
        if ($Qj) {
            goto hkq;
        }
        return $this->copy();
        hkq:
        $b4 = $this->bitwise_leftShift($Qj);
        $b4 = $b4->bitwise_and(new Math_BigInteger($cQ, 256));
        $XK = $this->bitwise_rightShift($G5 - $Qj);
        $SV = MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_BCMATH ? $b4->bitwise_or($XK) : $b4->add($XK);
        return $this->_normalize($SV);
    }
    function bitwise_rightRotate($Qj)
    {
        return $this->bitwise_leftRotate(-$Qj);
    }
    function setRandomGenerator($nP)
    {
    }
    function _random_number_helper($Rn)
    {
        if (function_exists("\x63\162\171\x70\x74\137\162\141\156\x64\x6f\x6d\x5f\163\x74\162\x69\156\x67")) {
            goto gAK;
        }
        $xz = '';
        if (!($Rn & 1)) {
            goto eSX;
        }
        $xz .= chr(mt_rand(0, 255));
        eSX:
        $s2 = $Rn >> 1;
        $nH = 0;
        eJ6:
        if (!($nH < $s2)) {
            goto lj9;
        }
        $xz .= pack("\156", mt_rand(0, 65535));
        DFf:
        ++$nH;
        goto eJ6;
        lj9:
        goto Z7K;
        gAK:
        $xz = crypt_random_string($Rn);
        Z7K:
        return new Math_BigInteger($xz, 256);
    }
    function random($Sb, $qA = false)
    {
        if (!($Sb === false)) {
            goto MBT;
        }
        return false;
        MBT:
        if ($qA === false) {
            goto zfl;
        }
        $UO = $Sb;
        $uR = $qA;
        goto KJf;
        zfl:
        $uR = $Sb;
        $UO = $this;
        KJf:
        $Iu = $uR->compare($UO);
        if (!$Iu) {
            goto h2i;
        }
        if ($Iu < 0) {
            goto Pkc;
        }
        goto vUf;
        h2i:
        return $this->_normalize($UO);
        goto vUf;
        Pkc:
        $Mj = $uR;
        $uR = $UO;
        $UO = $Mj;
        vUf:
        static $XZ;
        if (isset($XZ)) {
            goto EEu;
        }
        $XZ = new Math_BigInteger(1);
        EEu:
        $uR = $uR->subtract($UO->subtract($XZ));
        $Rn = strlen(ltrim($uR->toBytes(), chr(0)));
        $bi = new Math_BigInteger(chr(1) . str_repeat("\0", $Rn), 256);
        $xz = $this->_random_number_helper($Rn);
        list($W9) = $bi->divide($uR);
        $W9 = $W9->multiply($uR);
        ugs:
        if (!($xz->compare($W9) >= 0)) {
            goto K0P;
        }
        $xz = $xz->subtract($W9);
        $bi = $bi->subtract($W9);
        $xz = $xz->bitwise_leftShift(8);
        $xz = $xz->add($this->_random_number_helper(1));
        $bi = $bi->bitwise_leftShift(8);
        list($W9) = $bi->divide($uR);
        $W9 = $W9->multiply($uR);
        goto ugs;
        K0P:
        list(, $xz) = $xz->divide($uR);
        return $this->_normalize($xz->add($UO));
    }
    function randomPrime($Sb, $qA = false, $MR = false)
    {
        if (!($Sb === false)) {
            goto Em6;
        }
        return false;
        Em6:
        if ($qA === false) {
            goto Ptk;
        }
        $UO = $Sb;
        $uR = $qA;
        goto lpU;
        Ptk:
        $uR = $Sb;
        $UO = $this;
        lpU:
        $Iu = $uR->compare($UO);
        if (!$Iu) {
            goto XL1;
        }
        if ($Iu < 0) {
            goto t3l;
        }
        goto Uv5;
        XL1:
        return $UO->isPrime() ? $UO : false;
        goto Uv5;
        t3l:
        $Mj = $uR;
        $uR = $UO;
        $UO = $Mj;
        Uv5:
        static $XZ, $Pg;
        if (isset($XZ)) {
            goto HVQ;
        }
        $XZ = new Math_BigInteger(1);
        $Pg = new Math_BigInteger(2);
        HVQ:
        $Qd = time();
        $zb = $this->random($UO, $uR);
        if (!(MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_GMP && extension_loaded("\x67\x6d\x70") && version_compare(PHP_VERSION, "\x35\56\x32\56\x30", "\x3e\75"))) {
            goto nHI;
        }
        $oe = new Math_BigInteger();
        $oe->value = gmp_nextprime($zb->value);
        if (!($oe->compare($uR) <= 0)) {
            goto BvL;
        }
        return $oe;
        BvL:
        if ($UO->equals($zb)) {
            goto sgM;
        }
        $zb = $zb->subtract($XZ);
        sgM:
        return $zb->randomPrime($UO, $zb);
        nHI:
        if (!$zb->equals($Pg)) {
            goto P0i;
        }
        return $zb;
        P0i:
        $zb->_make_odd();
        if (!($zb->compare($uR) > 0)) {
            goto SPt;
        }
        if (!$UO->equals($uR)) {
            goto gDh;
        }
        return false;
        gDh:
        $zb = $UO->copy();
        $zb->_make_odd();
        SPt:
        $dV = $zb->copy();
        OPo:
        if (!true) {
            goto jJ2;
        }
        if (!($MR !== false && time() - $Qd > $MR)) {
            goto h_P;
        }
        return false;
        h_P:
        if (!$zb->isPrime()) {
            goto an4;
        }
        return $zb;
        an4:
        $zb = $zb->add($Pg);
        if (!($zb->compare($uR) > 0)) {
            goto GXD;
        }
        $zb = $UO->copy();
        if (!$zb->equals($Pg)) {
            goto rlb;
        }
        return $zb;
        rlb:
        $zb->_make_odd();
        GXD:
        if (!$zb->equals($dV)) {
            goto sI9;
        }
        return false;
        sI9:
        goto OPo;
        jJ2:
    }
    function _make_odd()
    {
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                gmp_setbit($this->value, 0);
                goto V28;
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value[strlen($this->value) - 1] % 2 == 0)) {
                    goto TTk;
                }
                $this->value = bcadd($this->value, "\61");
                TTk:
                goto V28;
            default:
                $this->value[0] |= 1;
        }
        SR5:
        V28:
    }
    function isPrime($EA = false)
    {
        $fl = strlen($this->toBytes());
        if ($EA) {
            goto Pm6;
        }
        if ($fl >= 163) {
            goto fDN;
        }
        if ($fl >= 106) {
            goto kPe;
        }
        if ($fl >= 81) {
            goto GcT;
        }
        if ($fl >= 68) {
            goto mnT;
        }
        if ($fl >= 56) {
            goto lym;
        }
        if ($fl >= 50) {
            goto Z3g;
        }
        if ($fl >= 43) {
            goto nII;
        }
        if ($fl >= 37) {
            goto lKf;
        }
        if ($fl >= 31) {
            goto atR;
        }
        if ($fl >= 25) {
            goto GD8;
        }
        if ($fl >= 18) {
            goto lgZ;
        }
        $EA = 27;
        goto wQt;
        lgZ:
        $EA = 18;
        wQt:
        goto sX6;
        GD8:
        $EA = 15;
        sX6:
        goto GDK;
        atR:
        $EA = 12;
        GDK:
        goto Aw3;
        lKf:
        $EA = 9;
        Aw3:
        goto kpr;
        nII:
        $EA = 8;
        kpr:
        goto DTF;
        Z3g:
        $EA = 7;
        DTF:
        goto BQ_;
        lym:
        $EA = 6;
        BQ_:
        goto LEw;
        mnT:
        $EA = 5;
        LEw:
        goto oKX;
        GcT:
        $EA = 4;
        oKX:
        goto P9r;
        kPe:
        $EA = 3;
        P9r:
        goto V0W;
        fDN:
        $EA = 2;
        V0W:
        Pm6:
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                return gmp_prob_prime($this->value, $EA) != 0;
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (!($this->value === "\x32")) {
                    goto wCB;
                }
                return true;
                wCB:
                if (!($this->value[strlen($this->value) - 1] % 2 == 0)) {
                    goto YM_;
                }
                return false;
                YM_:
                goto AOn;
            default:
                if (!($this->value == array(2))) {
                    goto ThB;
                }
                return true;
                ThB:
                if (!(~$this->value[0] & 1)) {
                    goto ADV;
                }
                return false;
                ADV:
        }
        ypl:
        AOn:
        static $p2, $YD, $XZ, $Pg;
        if (isset($p2)) {
            goto EwN;
        }
        $p2 = array(3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97, 101, 103, 107, 109, 113, 127, 131, 137, 139, 149, 151, 157, 163, 167, 173, 179, 181, 191, 193, 197, 199, 211, 223, 227, 229, 233, 239, 241, 251, 257, 263, 269, 271, 277, 281, 283, 293, 307, 311, 313, 317, 331, 337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503, 509, 521, 523, 541, 547, 557, 563, 569, 571, 577, 587, 593, 599, 601, 607, 613, 617, 619, 631, 641, 643, 647, 653, 659, 661, 673, 677, 683, 691, 701, 709, 719, 727, 733, 739, 743, 751, 757, 761, 769, 773, 787, 797, 809, 811, 821, 823, 827, 829, 839, 853, 857, 859, 863, 877, 881, 883, 887, 907, 911, 919, 929, 937, 941, 947, 953, 967, 971, 977, 983, 991, 997);
        if (!(MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_INTERNAL)) {
            goto kIw;
        }
        $nH = 0;
        oUj:
        if (!($nH < count($p2))) {
            goto Ljc;
        }
        $p2[$nH] = new Math_BigInteger($p2[$nH]);
        g0k:
        ++$nH;
        goto oUj;
        Ljc:
        kIw:
        $YD = new Math_BigInteger();
        $XZ = new Math_BigInteger(1);
        $Pg = new Math_BigInteger(2);
        EwN:
        if (!$this->equals($XZ)) {
            goto M4C;
        }
        return false;
        M4C:
        if (MATH_BIGINTEGER_MODE != MATH_BIGINTEGER_MODE_INTERNAL) {
            goto L1c;
        }
        $sh = $this->value;
        foreach ($p2 as $n_) {
            list(, $Zn) = $this->_divide_digit($sh, $n_);
            if ($Zn) {
                goto Dy6;
            }
            return count($sh) == 1 && $sh[0] == $n_;
            Dy6:
            nRF:
        }
        vm9:
        goto EYP;
        L1c:
        foreach ($p2 as $n_) {
            list(, $Zn) = $this->divide($n_);
            if (!$Zn->equals($YD)) {
                goto Z2g;
            }
            return $this->equals($n_);
            Z2g:
            tfM:
        }
        pia:
        EYP:
        $Lc = $this->copy();
        $cG = $Lc->subtract($XZ);
        $T6 = $Lc->subtract($Pg);
        $Zn = $cG->copy();
        $EL = $Zn->value;
        if (MATH_BIGINTEGER_MODE == MATH_BIGINTEGER_MODE_BCMATH) {
            goto x7D;
        }
        $nH = 0;
        $oY = count($EL);
        kf_:
        if (!($nH < $oY)) {
            goto BEO;
        }
        $Mj = ~$EL[$nH] & 16777215;
        $J1 = 1;
        Tg9:
        if (!($Mj >> $J1 & 1)) {
            goto G82;
        }
        mGm:
        ++$J1;
        goto Tg9;
        G82:
        if (!($J1 != 25)) {
            goto Wz8;
        }
        goto BEO;
        Wz8:
        eDx:
        ++$nH;
        goto kf_;
        BEO:
        $YG = 26 * $nH + $J1;
        $Zn->_rshift($YG);
        goto o9z;
        x7D:
        $YG = 0;
        ajq:
        if (!($Zn->value[strlen($Zn->value) - 1] % 2 == 0)) {
            goto nLp;
        }
        $Zn->value = bcdiv($Zn->value, "\62", 0);
        ++$YG;
        goto ajq;
        nLp:
        o9z:
        $nH = 0;
        N5m:
        if (!($nH < $EA)) {
            goto Sbi;
        }
        $t6 = $this->random($Pg, $T6);
        $LB = $t6->modPow($Zn, $Lc);
        if (!(!$LB->equals($XZ) && !$LB->equals($cG))) {
            goto WAY;
        }
        $J1 = 1;
        wvf:
        if (!($J1 < $YG && !$LB->equals($cG))) {
            goto No6;
        }
        $LB = $LB->modPow($Pg, $Lc);
        if (!$LB->equals($XZ)) {
            goto qGg;
        }
        return false;
        qGg:
        Ikd:
        ++$J1;
        goto wvf;
        No6:
        if ($LB->equals($cG)) {
            goto p6K;
        }
        return false;
        p6K:
        WAY:
        D1W:
        ++$nH;
        goto N5m;
        Sbi:
        return true;
    }
    function _lshift($Qj)
    {
        if (!($Qj == 0)) {
            goto Bpn;
        }
        return;
        Bpn:
        $aE = (int) ($Qj / MATH_BIGINTEGER_BASE);
        $Qj %= MATH_BIGINTEGER_BASE;
        $Qj = 1 << $Qj;
        $K9 = 0;
        $nH = 0;
        oSC:
        if (!($nH < count($this->value))) {
            goto vTw;
        }
        $Mj = $this->value[$nH] * $Qj + $K9;
        $K9 = MATH_BIGINTEGER_BASE === 26 ? intval($Mj / 67108864) : $Mj >> 31;
        $this->value[$nH] = (int) ($Mj - $K9 * MATH_BIGINTEGER_BASE_FULL);
        W1d:
        ++$nH;
        goto oSC;
        vTw:
        if (!$K9) {
            goto TjP;
        }
        $this->value[count($this->value)] = $K9;
        TjP:
        HKv:
        if (!$aE--) {
            goto Rxk;
        }
        array_unshift($this->value, 0);
        goto HKv;
        Rxk:
    }
    function _rshift($Qj)
    {
        if (!($Qj == 0)) {
            goto owQ;
        }
        return;
        owQ:
        $aE = (int) ($Qj / MATH_BIGINTEGER_BASE);
        $Qj %= MATH_BIGINTEGER_BASE;
        $mY = MATH_BIGINTEGER_BASE - $Qj;
        $Hd = (1 << $Qj) - 1;
        if (!$aE) {
            goto Lme;
        }
        $this->value = array_slice($this->value, $aE);
        Lme:
        $K9 = 0;
        $nH = count($this->value) - 1;
        Ogs:
        if (!($nH >= 0)) {
            goto GyA;
        }
        $Mj = $this->value[$nH] >> $Qj | $K9;
        $K9 = ($this->value[$nH] & $Hd) << $mY;
        $this->value[$nH] = $Mj;
        Ys9:
        --$nH;
        goto Ogs;
        GyA:
        $this->value = $this->_trim($this->value);
    }
    function _normalize($SV)
    {
        $SV->precision = $this->precision;
        $SV->bitmask = $this->bitmask;
        switch (MATH_BIGINTEGER_MODE) {
            case MATH_BIGINTEGER_MODE_GMP:
                if (!($this->bitmask !== false)) {
                    goto Y21;
                }
                $SV->value = gmp_and($SV->value, $SV->bitmask->value);
                Y21:
                return $SV;
            case MATH_BIGINTEGER_MODE_BCMATH:
                if (empty($SV->bitmask->value)) {
                    goto XTQ;
                }
                $SV->value = bcmod($SV->value, $SV->bitmask->value);
                XTQ:
                return $SV;
        }
        aSR:
        nfn:
        $sh =& $SV->value;
        if (count($sh)) {
            goto qVF;
        }
        return $SV;
        qVF:
        $sh = $this->_trim($sh);
        if (empty($SV->bitmask->value)) {
            goto MCP;
        }
        $fl = min(count($sh), count($this->bitmask->value));
        $sh = array_slice($sh, 0, $fl);
        $nH = 0;
        l3n:
        if (!($nH < $fl)) {
            goto iVT;
        }
        $sh[$nH] = $sh[$nH] & $this->bitmask->value[$nH];
        bVb:
        ++$nH;
        goto l3n;
        iVT:
        MCP:
        return $SV;
    }
    function _trim($sh)
    {
        $nH = count($sh) - 1;
        x69:
        if (!($nH >= 0)) {
            goto Hwp;
        }
        if (!$sh[$nH]) {
            goto rex;
        }
        goto Hwp;
        rex:
        unset($sh[$nH]);
        yjQ:
        --$nH;
        goto x69;
        Hwp:
        return $sh;
    }
    function _array_repeat($Tg, $hj)
    {
        return $hj ? array_fill(0, $hj, $Tg) : array();
    }
    function _base256_lshift(&$zb, $Qj)
    {
        if (!($Qj == 0)) {
            goto GWn;
        }
        return;
        GWn:
        $d6 = $Qj >> 3;
        $Qj &= 7;
        $K9 = 0;
        $nH = strlen($zb) - 1;
        PWB:
        if (!($nH >= 0)) {
            goto JRK;
        }
        $Mj = ord($zb[$nH]) << $Qj | $K9;
        $zb[$nH] = chr($Mj);
        $K9 = $Mj >> 8;
        LXL:
        --$nH;
        goto PWB;
        JRK:
        $K9 = $K9 != 0 ? chr($K9) : '';
        $zb = $K9 . $zb . str_repeat(chr(0), $d6);
    }
    function _base256_rshift(&$zb, $Qj)
    {
        if (!($Qj == 0)) {
            goto d01;
        }
        $zb = ltrim($zb, chr(0));
        return '';
        d01:
        $d6 = $Qj >> 3;
        $Qj &= 7;
        $Xw = '';
        if (!$d6) {
            goto paS;
        }
        $Qd = $d6 > strlen($zb) ? -strlen($zb) : -$d6;
        $Xw = substr($zb, $Qd);
        $zb = substr($zb, 0, -$d6);
        paS:
        $K9 = 0;
        $mY = 8 - $Qj;
        $nH = 0;
        P5u:
        if (!($nH < strlen($zb))) {
            goto HgM;
        }
        $Mj = ord($zb[$nH]) >> $Qj | $K9;
        $K9 = ord($zb[$nH]) << $mY & 255;
        $zb[$nH] = chr($Mj);
        zbZ:
        ++$nH;
        goto P5u;
        HgM:
        $zb = ltrim($zb, chr(0));
        $Xw = chr($K9 >> $mY) . $Xw;
        return ltrim($Xw, chr(0));
    }
    function _int2bytes($zb)
    {
        return ltrim(pack("\x4e", $zb), chr(0));
    }
    function _bytes2int($zb)
    {
        $Mj = unpack("\116\151\156\164", str_pad($zb, 4, chr(0), STR_PAD_LEFT));
        return $Mj["\x69\156\164"];
    }
    function _encodeASN1Length($fl)
    {
        if (!($fl <= 127)) {
            goto X8J;
        }
        return chr($fl);
        X8J:
        $Mj = ltrim(pack("\116", $fl), chr(0));
        return pack("\x43\x61\52", 128 | strlen($Mj), $Mj);
    }
    function _safe_divide($zb, $LB)
    {
        if (!(MATH_BIGINTEGER_BASE === 26)) {
            goto bR7;
        }
        return (int) ($zb / $LB);
        bR7:
        return ($zb - $zb % $LB) / $LB;
    }
}
