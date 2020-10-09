<?php


namespace MoOauthClient;

use MoOauthClient\App;
use MoOauthClient\Backup\EnvVarResolver;
class MOUtils
{
    const FREE = 0;
    const STANDARD = 1;
    const PREMIUM = 2;
    const ENTERPRISE = 3;
    const ALL_INCLUSIVE = 4;
    public function __construct()
    {
        remove_action("\141\144\155\x69\156\137\156\x6f\164\x69\x63\x65\163", array($this, "\x6d\x6f\x5f\157\x61\x75\164\x68\137\163\x75\x63\x63\145\163\163\x5f\155\x65\x73\x73\x61\x67\145"));
        remove_action("\141\144\155\x69\156\x5f\x6e\157\x74\x69\x63\x65\163", array($this, "\x6d\x6f\137\x6f\141\165\x74\x68\x5f\145\x72\x72\157\162\137\x6d\145\x73\x73\x61\x67\x65"));
    }
    public function mo_oauth_success_message()
    {
        $hr = "\x65\162\162\x6f\162";
        $IW = $this->mo_oauth_client_get_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION);
        echo "\74\144\151\166\40\143\154\x61\163\x73\x3d\x27" . $hr . "\47\76\x20\74\x70\76" . $IW . "\x3c\x2f\160\76\74\x2f\144\x69\x76\x3e";
    }
    public function mo_oauth_error_message()
    {
        $hr = "\x75\x70\x64\141\164\x65\x64";
        $IW = $this->mo_oauth_client_get_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION);
        echo "\74\x64\151\x76\40\143\x6c\141\163\x73\75\47" . $hr . "\x27\76\74\x70\x3e" . $IW . "\74\57\x70\x3e\x3c\57\x64\151\x76\76";
    }
    public function mo_oauth_show_success_message()
    {
        remove_action("\x61\144\155\x69\x6e\137\x6e\157\164\151\143\x65\x73", array($this, "\x6d\x6f\x5f\x6f\141\165\164\150\x5f\x73\165\143\x63\145\x73\163\137\x6d\145\163\163\141\x67\x65"));
        add_action("\141\x64\x6d\151\156\137\x6e\x6f\164\x69\x63\x65\163", array($this, "\155\x6f\x5f\157\x61\165\164\x68\x5f\145\x72\162\157\162\x5f\x6d\145\163\x73\141\x67\145"));
    }
    public function mo_oauth_show_error_message()
    {
        remove_action("\141\144\155\151\156\x5f\x6e\x6f\164\151\x63\145\163", array($this, "\155\157\x5f\157\x61\x75\x74\150\137\x65\x72\x72\x6f\162\x5f\155\145\163\x73\141\x67\145"));
        add_action("\141\144\155\x69\x6e\137\x6e\157\x74\151\143\x65\x73", array($this, "\155\157\137\157\x61\165\164\150\137\x73\x75\143\x63\145\163\163\137\x6d\145\163\163\141\147\145"));
    }
    public function mo_oauth_is_customer_registered()
    {
        $nW = $this->mo_oauth_client_get_option("\x6d\x6f\x5f\157\x61\x75\164\x68\137\x61\x64\x6d\151\156\x5f\x65\155\141\x69\154");
        $UA = $this->mo_oauth_client_get_option("\155\157\137\157\x61\x75\x74\x68\137\x61\x64\x6d\x69\156\x5f\143\165\163\x74\x6f\155\x65\x72\137\x6b\x65\171");
        if (!$nW || !$UA || !is_numeric(trim($UA))) {
            goto Dw;
        }
        return 1;
        goto xs;
        Dw:
        return 0;
        xs:
    }
    public function mooauthencrypt($aF)
    {
        $MF = $this->mo_oauth_client_get_option("\143\165\163\x74\157\x6d\x65\x72\x5f\164\157\153\x65\156");
        if ($MF) {
            goto ex;
        }
        return "\x66\x61\x6c\163\145";
        ex:
        $MF = str_split(str_pad('', strlen($aF), $MF, STR_PAD_RIGHT));
        $yz = str_split($aF);
        foreach ($yz as $VT => $TO) {
            $ao = ord($TO) + ord($MF[$VT]);
            $yz[$VT] = chr($ao > 255 ? $ao - 256 : $ao);
            w3:
        }
        TB:
        return base64_encode(join('', $yz));
    }
    public function mooauthdecrypt($aF)
    {
        $aF = base64_decode($aF);
        $MF = $this->mo_oauth_client_get_option("\143\x75\x73\x74\157\x6d\145\162\137\164\x6f\153\145\156");
        if ($MF) {
            goto wE;
        }
        return "\x66\141\x6c\163\x65";
        wE:
        $MF = str_split(str_pad('', strlen($aF), $MF, STR_PAD_RIGHT));
        $yz = str_split($aF);
        foreach ($yz as $VT => $TO) {
            $ao = ord($TO) - ord($MF[$VT]);
            $yz[$VT] = chr($ao < 0 ? $ao + 256 : $ao);
            zv:
        }
        fp:
        return join('', $yz);
    }
    public function mo_oauth_check_empty_or_null($sh)
    {
        if (!(!isset($sh) || empty($sh))) {
            goto LD;
        }
        return true;
        LD:
        return false;
    }
    public function mo_oauth_is_curl_installed()
    {
        if (in_array("\x63\165\162\x6c", get_loaded_extensions())) {
            goto s5;
        }
        return 0;
        goto v1;
        s5:
        return 1;
        v1:
    }
    public function mo_oauth_show_curl_error()
    {
        if (!($this->mo_oauth_is_curl_installed() === 0)) {
            goto EC;
        }
        $this->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\74\x61\40\x68\162\145\x66\x3d\x22\x68\164\164\160\x3a\x2f\57\160\150\x70\56\x6e\x65\x74\x2f\x6d\141\156\165\141\154\57\x65\156\57\143\x75\x72\154\x2e\151\x6e\x73\x74\141\x6c\154\141\164\x69\157\x6e\x2e\x70\x68\160\x22\x20\x74\x61\x72\x67\145\x74\x3d\x22\x5f\x62\x6c\141\156\153\42\x3e\120\x48\120\40\103\125\122\114\x20\145\170\x74\145\156\163\x69\157\156\x3c\57\141\x3e\x20\x69\163\x20\156\157\164\x20\x69\156\163\x74\x61\154\x6c\145\x64\x20\157\162\40\x64\x69\x73\141\x62\154\145\144\x2e\40\120\154\x65\x61\x73\145\x20\x65\156\141\142\x6c\x65\40\151\164\x20\164\x6f\40\143\157\x6e\164\x69\156\165\145\x2e");
        $this->mo_oauth_show_error_message();
        return;
        EC:
    }
    public function mo_oauth_is_clv()
    {
        $lP = $this->mo_oauth_client_get_option("\155\x6f\137\157\141\165\x74\150\137\x6c\x76");
        $lP = boolval($lP) ? $this->mooauthdecrypt($lP) : "\146\141\x6c\x73\145";
        $lP = !empty($this->mo_oauth_client_get_option("\155\x6f\137\157\141\165\x74\x68\x5f\154\153")) && "\x74\162\165\x65" === $lP ? 1 : 0;
        if (!($lP === 0)) {
            goto k1;
        }
        return $this->verify_lk();
        k1:
        return $lP;
    }
    public function mo_oauth_hbca_xyake()
    {
        if ($this->mo_oauth_is_customer_registered()) {
            goto Nz;
        }
        return false;
        Nz:
        if ($this->mo_oauth_client_get_option("\155\157\137\x6f\141\165\x74\x68\x5f\141\x64\x6d\x69\x6e\137\x63\x75\x73\164\157\155\x65\x72\137\x6b\145\x79") > 138200) {
            goto Ip;
        }
        return false;
        goto yF;
        Ip:
        return true;
        yF:
    }
    public function get_default_app($ex, $IY = false)
    {
        if ($ex) {
            goto r5;
        }
        return false;
        r5:
        $ci = false;
        $NO = file_get_contents(MOC_DIR . "\x72\145\x73\157\165\x72\143\x65\163\x2f\141\160\160\137\x63\x6f\155\160\157\x6e\x65\x6e\x74\x73\x2f\x64\145\146\141\165\154\164\x61\160\x70\163\x2e\152\163\157\x6e", true);
        $uT = json_decode($NO, $IY);
        foreach ($uT as $vf => $x3) {
            if (!($vf === $ex)) {
                goto zu;
            }
            if ($IY) {
                goto Ak;
            }
            $x3->appId = $vf;
            goto r3;
            Ak:
            $x3["\x61\x70\x70\111\144"] = $vf;
            r3:
            return $x3;
            zu:
            s4:
        }
        Ky:
        return false;
    }
    public function get_plugin_config()
    {
        $jc = $this->mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\x74\150\x5f\143\x6c\x69\145\156\x74\137\x63\x6f\x6e\146\151\x67");
        return !$jc || empty($jc) ? new Config(array()) : $jc;
    }
    public function get_app_list()
    {
        return $this->mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\164\150\137\141\x70\x70\163\x5f\154\151\163\164") ? $this->mo_oauth_client_get_option("\155\x6f\x5f\157\x61\165\164\150\x5f\x61\x70\x70\x73\137\154\151\163\x74") : false;
    }
    public function get_app_by_name($nd = '')
    {
        $Li = $this->get_app_list();
        if ($Li) {
            goto lT;
        }
        return false;
        lT:
        if (!('' === $nd || false === $nd)) {
            goto AJ;
        }
        $V0 = array_values($Li);
        return isset($V0[0]) ? $V0[0] : false;
        AJ:
        foreach ($Li as $qi => $U3) {
            if (!($nd === $qi)) {
                goto MW;
            }
            return $U3;
            MW:
            J8:
        }
        A1:
        return false;
    }
    public function get_default_app_by_code_name($nd = '')
    {
        $Li = $this->mo_oauth_client_get_option("\155\157\137\157\x61\165\164\150\x5f\141\x70\x70\163\x5f\x6c\151\x73\x74") ? $this->mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\165\164\150\x5f\141\160\x70\163\137\154\x69\x73\x74") : false;
        if ($Li) {
            goto uc;
        }
        return false;
        uc:
        if (!('' === $nd)) {
            goto JW;
        }
        $V0 = array_values($Li);
        return isset($V0[0]) ? $V0[0] : false;
        JW:
        foreach ($Li as $qi => $U3) {
            $pw = $U3->get_app_name();
            if (!($nd === $pw)) {
                goto v0;
            }
            return $this->get_default_app($U3->get_app_config("\141\x70\x70\137\x74\x79\x70\x65"), true);
            v0:
            B_:
        }
        ms:
        return false;
    }
    public function set_app_by_name($nd, $h7)
    {
        $Li = $this->mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\x74\150\137\x61\160\160\163\x5f\x6c\151\x73\164") ? $this->mo_oauth_client_get_option("\155\157\137\157\x61\x75\164\x68\137\141\x70\160\x73\137\154\x69\163\164") : false;
        if ($Li) {
            goto iI;
        }
        return false;
        iI:
        foreach ($Li as $qi => $U3) {
            if (!($nd === $qi)) {
                goto Pm;
            }
            $Li[$qi] = new App($h7);
            $Li[$qi]->set_app_name($qi);
            $this->mo_oauth_client_update_option("\155\x6f\x5f\157\x61\165\x74\x68\x5f\141\x70\x70\163\x5f\154\151\163\164", $Li);
            return true;
            Pm:
            p9:
        }
        mE:
        return false;
    }
    public function mo_oauth_jhuyn_jgsukaj($Aa, $OK)
    {
        return $this->mo_oauth_jkhuiysuayhbw($Aa, $OK);
    }
    public function mo_oauth_jkhuiysuayhbw($iS, $KS)
    {
        $Yo = 0;
        $wd = false;
        $tK = $this->mo_oauth_client_get_option("\x6d\x6f\137\157\x61\165\164\150\x5f\x61\165\x74\x68\157\162\151\172\141\x74\151\x6f\156\x73");
        if (empty($tK)) {
            goto gk;
        }
        $Yo = $this->mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\x75\x74\150\x5f\x61\x75\164\150\157\162\151\x7a\141\x74\x69\157\156\163");
        gk:
        $user = $this->mo_oauth_hjsguh_kiishuyauh878gs($iS, $KS);
        if (!$user) {
            goto Ru;
        }
        ++$Yo;
        Ru:
        $this->mo_oauth_client_update_option("\x6d\157\137\x6f\141\x75\164\150\137\x61\165\164\x68\x6f\x72\151\x7a\141\164\x69\157\x6e\x73", $Yo);
        if (!($Yo >= 10)) {
            goto D3;
        }
        $Xf = base64_decode("\142\x57\71\x66\x62\62\x46\61\144\x47\x68\x66\132\155\170\150\x5a\x77\x3d\x3d");
        $this->mo_oauth_client_update_option($Xf, true);
        D3:
        return $user;
    }
    public function mo_oauth_hjsguh_kiishuyauh878gs($nW, $w9)
    {
        $Pa = wp_generate_password(10, false);
        $Dg = is_email($nW) ? wp_create_user($nW, $Pa, $nW) : wp_create_user($nW, $Pa);
        do_action("\x75\163\x65\162\x5f\162\145\x67\151\x73\164\x65\x72", $Dg);
        $user = get_user_by("\x6c\x6f\147\151\156", $nW);
        wp_update_user(array("\111\104" => $Dg, "\x66\151\162\163\x74\x5f\156\141\155\x65" => $w9));
        return $user;
    }
    public function check_versi($yT)
    {
        return $this->get_versi() >= $yT;
    }
    public function get_versi()
    {
        return VERSION === "\x6d\157\137\x61\x6c\x6c\137\x69\x6e\143\154\165\x73\x69\x76\x65\137\166\145\162\x73\151\x6f\156" ? self::ALL_INCLUSIVE : VERSION === "\155\x6f\x5f\x65\156\164\x65\x72\x70\x72\x69\x73\145\137\166\145\162\x73\151\x6f\x6e" ? self::ENTERPRISE : (VERSION === "\x6d\x6f\x5f\160\162\145\x6d\x69\165\155\x5f\166\x65\x72\x73\x69\157\x6e" ? self::PREMIUM : (VERSION === "\x6d\157\137\x73\164\141\156\x64\141\x72\144\137\x76\145\162\163\x69\157\156" ? self::STANDARD : self::FREE));
    }
    public function get_versi_str()
    {
        switch ($this->get_versi()) {
            case self::ALL_INCLUSIVE:
                return "\x41\x4c\114\x5f\111\x4e\103\114\125\123\111\126\x45";
            case self::ENTERPRISE:
                return "\105\x4e\124\105\x52\x50\122\111\123\x45";
            case self::PREMIUM:
                return "\120\122\x45\x4d\x49\x55\x4d";
            case self::STANDARD:
                return "\123\x54\101\x4e\x44\x41\122\x44";
            case self::FREE:
            default:
                return "\106\x52\105\105";
        }
        tI:
        oX:
    }
    public function mo_oauth_client_get_option($qi, $Bk = false)
    {
        $sh = getenv(strtoupper($qi));
        if (!$sh) {
            goto s_;
        }
        $sh = EnvVarResolver::resolve_var($qi, $sh);
        goto D4;
        s_:
        $sh = is_multisite() && $this->check_versi(3) ? get_site_option($qi, $Bk) : get_option($qi, $Bk);
        D4:
        if (!(!$sh || $Bk == $sh)) {
            goto oC;
        }
        return $Bk;
        oC:
        return $sh;
    }
    public function mo_oauth_client_update_option($qi, $sh)
    {
        return is_multisite() && $this->check_versi(3) ? update_site_option($qi, $sh) : update_option($qi, $sh);
    }
    public function mo_oauth_client_delete_option($qi)
    {
        return is_multisite() && $this->check_versi(3) ? delete_site_option($qi) : delete_option($qi);
    }
    public function array_overwrite($A4, $Im, $el)
    {
        if ($el) {
            goto h0;
        }
        array_push($A4, $Im);
        return array_unique($A4);
        h0:
        foreach ($Im as $qi => $sh) {
            $A4[$qi] = $sh;
            kw:
        }
        lJ:
        return $A4;
    }
    public function gen_rand_str($fl = 10)
    {
        $Lf = "\141\x62\x63\x64\x65\x66\147\150\151\x6a\153\x6c\x6d\156\x6f\160\161\162\163\164\165\166\167\170\171\x7a\x41\x42\103\x44\x45\x46\107\x48\111\x4a\113\x4c\115\116\x4f\120\x51\x52\x53\x54\125\126\127\130\x59\x5a";
        $zj = strlen($Lf);
        $cB = '';
        $nH = 0;
        Ks:
        if (!($nH < $fl)) {
            goto d9;
        }
        $cB .= $Lf[rand(0, $zj - 1)];
        Wf:
        $nH++;
        goto Ks;
        d9:
        return $cB;
    }
    public function parse_url($vo)
    {
        $ci = array();
        $LX = explode("\77", $vo);
        $ci["\x68\x6f\163\x74"] = $LX[0];
        $ci["\x71\x75\x65\x72\171"] = isset($LX[1]) && '' !== $LX[1] ? $LX[1] : '';
        if (!(empty($ci["\x71\x75\145\162\171"]) || '' === $ci["\161\165\145\162\x79"])) {
            goto t3;
        }
        return $ci;
        t3:
        $Vf = array();
        foreach (explode("\46", $ci["\161\165\145\x72\x79"]) as $zF) {
            $LX = explode("\x3d", $zF);
            if (!(is_array($LX) && count($LX) === 2)) {
                goto oW;
            }
            $Vf[str_replace("\141\155\160\x3b", '', $LX[0])] = $LX[1];
            oW:
            if (!(is_array($LX) && "\163\x74\x61\164\145" === $LX[0])) {
                goto em;
            }
            $LX = explode("\x73\x74\141\x74\x65\75", $zF);
            $Vf["\x73\164\x61\x74\145"] = $LX[1];
            em:
            DQ:
        }
        sV:
        $ci["\161\165\x65\x72\171"] = is_array($Vf) && !empty($Vf) ? $Vf : array();
        return $ci;
    }
    public function generate_url($Sl)
    {
        if (!(!is_array($Sl) || empty($Sl))) {
            goto Sh;
        }
        return '';
        Sh:
        if (isset($Sl["\150\x6f\x73\x74"])) {
            goto j3;
        }
        return '';
        j3:
        $vo = $Sl["\150\x6f\163\x74"];
        $sx = '';
        $nH = 0;
        foreach ($Sl["\161\x75\x65\162\171"] as $Z_ => $sh) {
            if (!($nH !== 0)) {
                goto BK;
            }
            $sx .= "\x26";
            BK:
            $sx .= "{$Z_}\x3d{$sh}";
            $nH += 1;
            Vy:
        }
        sC:
        return $vo . "\x3f" . $sx;
    }
    public function getnestedattribute($jt, $qi)
    {
        if (!($qi == '')) {
            goto Ol;
        }
        return '';
        Ol:
        $oc = explode("\56", $qi);
        if (count($oc) > 1) {
            goto qj;
        }
        if (is_array($jt[$qi])) {
            goto fj;
        }
        $pl = $oc[0];
        if (!isset($jt[$pl])) {
            goto Zy;
        }
        if (is_array($jt[$pl])) {
            goto sX;
        }
        return $jt[$pl];
        goto Gd;
        sX:
        return $jt[$pl][0];
        Gd:
        Zy:
        goto U0;
        fj:
        if (!(count($jt[$qi]) > 1)) {
            goto UP;
        }
        return $jt[$qi];
        UP:
        return $jt[$qi][0];
        U0:
        goto C8;
        qj:
        $pl = $oc[0];
        if (!isset($jt[$pl])) {
            goto ry;
        }
        return $this->getnestedattribute($jt[$pl], str_replace($pl . "\56", '', $qi));
        ry:
        C8:
    }
    public function get_client_ip()
    {
        $oP = '';
        if (getenv("\110\x54\124\x50\x5f\x43\x4c\x49\105\x4e\x54\x5f\111\x50")) {
            goto rd;
        }
        if (getenv("\110\x54\124\120\137\x58\x5f\x46\x4f\x52\127\x41\x52\104\x45\104\137\x46\117\x52")) {
            goto dH;
        }
        if (getenv("\x48\x54\x54\x50\137\x58\137\x46\117\x52\x57\x41\x52\104\x45\x44")) {
            goto XR;
        }
        if (getenv("\x48\124\124\120\x5f\106\117\122\127\x41\x52\x44\x45\x44\x5f\x46\x4f\122")) {
            goto Md;
        }
        if (getenv("\110\124\x54\x50\x5f\x46\117\122\x57\101\122\104\105\104")) {
            goto ip;
        }
        if (getenv("\x52\x45\115\x4f\x54\105\137\x41\x44\104\x52")) {
            goto RS;
        }
        $oP = "\125\x4e\113\x4e\117\x57\x4e";
        goto vV;
        rd:
        $oP = getenv("\110\x54\x54\120\x5f\103\114\111\x45\116\x54\137\111\x50");
        goto vV;
        dH:
        $oP = getenv("\x48\x54\124\120\x5f\x58\x5f\106\117\x52\127\101\x52\104\x45\x44\137\106\x4f\x52");
        goto vV;
        XR:
        $oP = getenv("\110\x54\x54\x50\137\130\x5f\x46\117\122\127\101\x52\104\105\104");
        goto vV;
        Md:
        $oP = getenv("\110\x54\124\x50\x5f\x46\117\122\127\x41\x52\x44\105\104\x5f\106\117\122");
        goto vV;
        ip:
        $oP = getenv("\110\124\x54\x50\137\x46\117\x52\x57\101\122\x44\x45\x44");
        goto vV;
        RS:
        $oP = getenv("\122\x45\x4d\x4f\124\105\x5f\x41\x44\x44\122");
        vV:
        return $oP;
    }
    public function get_current_url()
    {
        return (isset($_SERVER["\x48\124\124\120\123"]) ? "\150\x74\164\x70\x73" : "\x68\164\164\160") . "\72\x2f\x2f{$_SERVER["\x48\x54\124\x50\x5f\110\x4f\x53\x54"]}{$_SERVER["\122\105\121\x55\105\x53\x54\x5f\x55\x52\111"]}";
    }
    public function store_info($aA = '', $sh = false)
    {
        if (!('' === $aA || !$sh)) {
            goto HA;
        }
        return;
        HA:
        setcookie($aA, $sh);
    }
    public function redirect_user($vo = false, $nn = false)
    {
        if (!(false === $vo)) {
            goto gg;
        }
        return;
        gg:
        if (!$nn) {
            goto uw;
        }
        ?>
			<script>
				var myWindow = window.open("<?php 
        echo $vo;
        ?>
", "Test Configuration", "width=600, height=600");
				while(1) {
					if(myWindow.closed()) {
						$(document).trigger("config_tested");
						break;
					} else {continue;}
				}
			</script>
			<?php 
        uw:
        ?>
		<script>
			window.location.replace("<?php 
        echo $vo;
        ?>
");
		</script>
		<?php 
        die;
    }
    public function is_ajax_request()
    {
        return defined("\104\x4f\111\x4e\107\x5f\x41\112\101\x58") && DOING_AJAX;
    }
    public function deactivate_plugin()
    {
        $this->mo_oauth_client_delete_option("\x68\157\x73\x74\137\x6e\141\155\145");
        $this->mo_oauth_client_delete_option("\156\x65\167\x5f\x72\x65\147\151\x73\164\162\141\164\151\x6f\156");
        $this->mo_oauth_client_delete_option("\155\157\x5f\x6f\141\165\x74\x68\137\x61\x64\155\151\x6e\x5f\160\150\157\156\145");
        $this->mo_oauth_client_delete_option("\166\145\162\151\146\x79\x5f\x63\x75\163\164\x6f\x6d\145\162");
        $this->mo_oauth_client_delete_option("\x6d\x6f\137\157\x61\165\x74\150\x5f\141\x64\x6d\151\156\137\143\x75\163\164\157\x6d\145\x72\137\x6b\145\171");
        $this->mo_oauth_client_delete_option("\155\157\x5f\x6f\141\x75\164\150\x5f\141\x64\155\151\156\137\x61\160\x69\x5f\153\x65\171");
        $this->mo_oauth_client_delete_option("\155\x6f\x5f\157\x61\x75\x74\150\137\156\x65\167\x5f\143\165\163\164\157\155\x65\x72");
        $this->mo_oauth_client_delete_option("\x63\165\163\x74\x6f\155\145\162\137\x74\157\x6b\x65\x6e");
        $this->mo_oauth_client_delete_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION);
        $this->mo_oauth_client_delete_option("\x6d\x6f\x5f\157\x61\x75\164\150\x5f\x72\x65\x67\x69\163\x74\162\141\x74\151\157\x6e\x5f\163\164\x61\x74\x75\x73");
        $this->mo_oauth_client_delete_option("\155\157\137\157\x61\x75\x74\150\x5f\x6e\x65\167\137\x63\165\x73\164\157\155\x65\162");
        $this->mo_oauth_client_delete_option("\x6e\145\167\137\x72\145\147\151\x73\x74\162\141\164\151\157\x6e");
        $this->mo_oauth_client_delete_option("\155\157\137\x6f\x61\x75\x74\x68\x5f\154\x6f\x67\151\x6e\x5f\151\x63\x6f\156\137\x63\165\163\164\157\x6d\x5f\150\x65\x69\x67\150\164");
        $this->mo_oauth_client_delete_option("\x6d\x6f\137\x6f\141\x75\164\x68\137\x6c\x6f\147\x69\x6e\x5f\151\143\157\x6e\x5f\143\x75\x73\164\157\155\137\163\x69\x7a\145");
        $this->mo_oauth_client_delete_option("\155\x6f\x5f\x6f\x61\x75\164\x68\137\x6c\157\x67\151\x6e\x5f\x69\143\157\x6e\x5f\143\x75\x73\164\157\x6d\137\x63\157\x6c\157\162");
        $this->mo_oauth_client_delete_option("\155\x6f\x5f\157\x61\x75\x74\150\137\x6c\x6f\147\151\156\x5f\x69\x63\x6f\x6e\x5f\x63\165\x73\164\x6f\x6d\137\142\x6f\165\x6e\144\141\162\x79");
    }
    public function base64url_encode($Zu)
    {
        return rtrim(strtr(base64_encode($Zu), "\53\x2f", "\x2d\137"), "\75");
    }
    public function base64url_decode($Zu)
    {
        return base64_decode(str_pad(strtr($Zu, "\x2d\x5f", "\x2b\x2f"), strlen($Zu) % 4, "\75", STR_PAD_RIGHT));
    }
    function export_plugin_config($LA = false)
    {
        $wT = array();
        $cy = array();
        $j0 = array();
        $wT = $this->get_plugin_config();
        $cy = get_site_option("\155\x6f\137\157\x61\165\x74\150\x5f\x61\x70\x70\x73\137\154\151\163\164");
        if (empty($wT)) {
            goto a7;
        }
        $wT = $wT->get_current_config();
        a7:
        if (!is_array($cy)) {
            goto B1;
        }
        foreach ($cy as $cZ => $h7) {
            $SH = $h7->get_app_config();
            if (!$LA) {
                goto KG;
            }
            unset($SH["\143\154\x69\x65\156\164\137\151\144"]);
            unset($SH["\x63\154\151\x65\156\164\137\163\145\x63\x72\x65\x74"]);
            KG:
            $j0[$cZ] = $SH;
            bw:
        }
        rp:
        B1:
        $fv = array("\x70\x6c\165\147\151\x6e\x5f\143\157\x6e\x66\x69\147" => $wT, "\x61\x70\x70\x5f\x63\x6f\x6e\146\151\147\x73" => $j0);
        return $fv;
    }
    private function verify_lk()
    {
        $od = new \MoOauthClient\Standard\Customer();
        $iF = $this->mo_oauth_client_get_option("\155\157\x5f\x6f\141\x75\x74\150\x5f\154\x69\143\x65\156\163\x65\x5f\153\145\171");
        if (!empty($iF)) {
            goto kl;
        }
        return 0;
        kl:
        $yo = $od->XfskodsfhHJ($iF);
        $yo = json_decode($yo, true);
        return isset($yo["\163\164\x61\x74\165\x73"]) && "\123\125\103\x43\105\x53\x53" === $yo["\x73\x74\141\x74\165\x73"];
    }
    public function is_valid_jwt($rg = '')
    {
        $LX = explode("\x2e", $rg);
        if (!(count($LX) === 3)) {
            goto m2;
        }
        return true;
        m2:
        return false;
    }
    public function validate_appslist($Li)
    {
        if (is_array($Li)) {
            goto Gy;
        }
        return false;
        Gy:
        foreach ($Li as $qi => $U3) {
            if (!$U3 instanceof \MoOauthClient\App) {
                goto Bo;
            }
            goto EP;
            Bo:
            return false;
            EP:
        }
        rb:
        return true;
    }
}
