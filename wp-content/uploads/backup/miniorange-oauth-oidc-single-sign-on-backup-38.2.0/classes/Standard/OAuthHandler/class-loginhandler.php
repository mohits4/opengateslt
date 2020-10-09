<?php


namespace MoOauthClient\Standard;

use MoOauthClient\LoginHandler as FreeLoginHandler;
use MoOauthClient\Config;
use MoOauthClient\StorageManager;
class LoginHandler extends FreeLoginHandler
{
    public $config;
    public function handle_group_test_conf($p4 = array(), $h7 = array(), $qJ = '', $ie = false, $NM = false)
    {
        $this->render_test_config_output($p4, false);
        if (!(!isset($h7["\x67\162\157\165\160\144\145\x74\141\x69\x6c\163\x75\x72\154"]) || '' === $h7["\x67\x72\x6f\x75\x70\144\145\164\x61\151\x6c\163\x75\162\x6c"])) {
            goto hAf;
        }
        return;
        hAf:
        $Uq = array();
        $Xg = $h7["\x67\x72\x6f\165\160\x64\x65\164\141\x69\154\x73\165\162\x6c"];
        if (!('' === $qJ)) {
            goto WSt;
        }
        return;
        WSt:
        if (!('' !== $Xg)) {
            goto EiD;
        }
        $Uq = $this->oauth_handler->get_resource_owner($Xg, $qJ);
        if (!($NM && '' !== $NM)) {
            goto thy;
        }
        if (!(is_array($Uq) && !empty($Uq))) {
            goto cFa;
        }
        $this->render_test_config_output($Uq, true);
        cFa:
        return;
        thy:
        EiD:
    }
    public function handle_sso($X3, $h7, $p4, $xM, $Tu, $SC = false)
    {
        global $Sk;
        $BM = isset($h7["\x75\x73\x65\x72\156\x61\155\x65\x5f\x61\164\x74\162"]) ? $h7["\165\163\145\x72\156\141\x6d\145\137\141\164\x74\162"] : '';
        $ZW = isset($h7["\x65\155\141\151\x6c\x5f\x61\x74\164\x72"]) ? $h7["\145\x6d\x61\151\x6c\x5f\141\x74\x74\162"] : '';
        $QZ = isset($h7["\146\x69\162\163\x74\156\x61\x6d\x65\x5f\141\164\x74\x72"]) ? $h7["\146\151\162\163\x74\x6e\x61\x6d\145\x5f\141\x74\x74\162"] : '';
        $lZ = isset($h7["\154\141\163\164\x6e\x61\155\x65\137\141\164\x74\x72"]) ? $h7["\154\x61\163\x74\x6e\x61\x6d\145\137\x61\164\x74\x72"] : '';
        $RQ = isset($h7["\x64\151\163\x70\154\x61\171\137\141\164\x74\162"]) ? $h7["\x64\151\163\160\154\x61\171\137\x61\164\x74\162"] : '';
        $BL = $Sk->getnestedattribute($p4, $BM);
        $nW = $Sk->getnestedattribute($p4, $ZW);
        $TL = $Sk->getnestedattribute($p4, $QZ);
        $gf = $Sk->getnestedattribute($p4, $lZ);
        $Bl = $TL . "\x20" . $gf;
        $this->config = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\x75\x74\150\137\x63\154\151\x65\156\164\137\x63\157\x6e\146\151\147");
        $this->config = !$this->config || empty($this->config) ? array() : $this->config->get_current_config();
        if (!empty($xM)) {
            goto R1E;
        }
        wp_die(wp_kses("\x54\x68\x65\x20\163\x74\x61\164\x65\x20\160\141\162\141\x6d\145\x74\x65\x72\40\151\163\40\x65\x6d\160\164\x79\56", \get_valid_html()));
        R1E:
        $PD = new StorageManager($xM);
        do_action("\x6d\157\137\x6f\x61\165\164\x68\x5f\147\145\164\x5f\165\163\x65\x72\x5f\141\164\164\162\x73", $p4);
        if (empty($RQ)) {
            goto vBz;
        }
        switch ($RQ) {
            case "\106\116\x41\115\x45":
                $Bl = $TL;
                goto aD3;
            case "\114\x4e\x41\115\105":
                $Bl = $gf;
                goto aD3;
            case "\125\123\105\122\x4e\101\115\105":
                $Bl = $BL;
                goto aD3;
            case "\114\116\101\x4d\105\137\x46\x4e\x41\115\x45":
                $Bl = $gf . "\40" . $TL;
            default:
                goto aD3;
        }
        Rqi:
        aD3:
        vBz:
        if (!empty($BL)) {
            goto XDW;
        }
        $this->check_status(array("\155\163\147" => "\x55\x73\145\162\156\x61\x6d\145\40\156\x6f\164\x20\162\145\143\x65\x69\166\145\144\x2e\40\x43\x68\x65\143\153\x20\x79\157\165\162\x20\x3c\163\164\x72\x6f\156\x67\x3e\101\x74\x74\162\151\x62\x75\x74\x65\40\x4d\x61\160\x70\x69\156\147\x3c\57\x73\x74\x72\157\156\147\76\x20\143\x6f\x6e\x66\151\x67\x75\x72\x61\x74\151\157\x6e\56", "\x63\157\x64\145" => "\x55\116\101\115\105", "\163\x74\x61\164\x75\x73" => false, "\x61\160\x70\x6c\x69\143\x61\164\x69\x6f\156" => $X3, "\x65\x6d\x61\x69\x6c" => '', "\x75\x73\145\162\156\x61\x6d\145" => ''));
        XDW:
        if (!(!empty($nW) && false === strpos($nW, "\100"))) {
            goto WOU;
        }
        $this->check_status(array("\155\x73\x67" => "\115\x61\x70\x70\145\144\x20\105\x6d\141\x69\x6c\40\141\164\164\x72\x69\x62\x75\164\145\x20\x64\x6f\145\x73\x20\x6e\157\x74\x20\143\x6f\156\x74\141\x69\x6e\x20\166\x61\154\151\x64\40\145\x6d\141\x69\154\56", "\x63\157\144\x65" => "\x45\115\101\111\x4c", "\x73\x74\x61\164\x75\x73" => false, "\x61\x70\x70\154\x69\143\141\x74\151\x6f\156" => $X3, "\x63\x6c\x69\145\x6e\x74\x5f\x69\x70" => $Sk->get_client_ip(), "\x65\x6d\x61\x69\x6c" => $nW, "\165\x73\x65\x72\x6e\141\155\145" => $BL));
        WOU:
        do_action("\155\157\x5f\x6f\x61\165\x74\150\137\x72\145\163\164\162\x69\143\164\137\145\155\x61\151\154\163", $nW, $this->config);
        $user = get_user_by("\x6c\157\x67\x69\x6e", $BL);
        if ($user) {
            goto cF0;
        }
        $user = get_user_by("\x65\155\x61\x69\154", $nW);
        cF0:
        $Dg = $user ? $user->ID : 0;
        $i3 = 0 === $Dg;
        if (!(!(isset($this->config["\x61\x75\x74\157\137\x72\145\147\x69\x73\x74\x65\162"]) && 1 === intval($this->config["\x61\x75\164\157\x5f\162\145\x67\151\163\x74\x65\x72"])) && $i3)) {
            goto lAs;
        }
        $this->check_status(array("\155\x73\x67" => "\122\145\147\x69\x73\164\162\x61\164\151\x6f\156\x20\x69\x73\x20\144\151\x73\x61\142\154\x65\144\40\146\157\x72\40\x74\x68\x69\x73\40\163\151\x74\145\56\x20\120\154\x65\x61\x73\145\x20\x63\x6f\156\x74\x61\143\164\40\171\x6f\x75\x72\40\141\144\x6d\x69\156\x69\163\164\162\141\x74\x6f\x72", "\x63\x6f\144\x65" => "\122\x45\107\111\123\124\122\x41\x54\x49\117\116\x5f\x44\111\x53\x41\102\x4c\105\x44", "\x73\x74\x61\164\x75\x73" => false, "\141\160\160\x6c\x69\x63\141\x74\151\157\156" => $X3, "\143\154\x69\145\156\164\137\151\x70" => $Sk->get_client_ip(), "\x65\x6d\141\151\x6c" => $nW, "\x75\x73\145\162\156\x61\155\145" => $BL));
        lAs:
        if (!$i3) {
            goto GV1;
        }
        $Pa = wp_generate_password(10, false);
        $Dg = wp_create_user($BL, $Pa, $nW);
        do_action("\x75\163\145\x72\x5f\162\x65\147\x69\x73\164\145\162", $Dg);
        GV1:
        if (!($i3 || (!isset($this->config["\x6b\145\x65\160\x5f\145\x78\151\x73\164\x69\156\147\x5f\x75\x73\x65\x72\x73"]) || 1 !== intval($this->config["\x6b\x65\145\x70\137\x65\170\151\x73\x74\x69\156\x67\x5f\165\x73\145\162\163"])))) {
            goto jcl;
        }
        if (!is_wp_error($Dg)) {
            goto aPc;
        }
        $Dg = get_user_by("\154\x6f\x67\151\x6e", $BL)->ID;
        aPc:
        $SF = array("\111\x44" => $Dg, "\146\x69\162\x73\164\x5f\156\141\155\x65" => $TL, "\x6c\x61\163\164\137\156\x61\155\x65" => $gf, "\144\151\x73\160\154\141\171\137\x6e\x61\x6d\x65" => $Bl, "\x75\163\145\x72\137\154\157\x67\151\x6e" => $BL, "\x75\x73\145\162\137\156\x69\143\145\156\x61\155\145" => $BL);
        if (isset($this->config["\153\145\x65\x70\x5f\x65\170\x69\163\164\x69\156\x67\x5f\145\155\x61\151\154\x5f\x61\x74\x74\x72"]) && 1 === intval($this->config["\x6b\x65\x65\x70\x5f\x65\x78\x69\163\x74\x69\156\x67\137\x65\x6d\141\151\x6c\137\141\164\164\x72"])) {
            goto E4C;
        }
        $SF["\165\x73\x65\162\x5f\x65\155\x61\151\x6c"] = $nW;
        wp_update_user($SF);
        goto WmA;
        E4C:
        wp_update_user($SF);
        WmA:
        update_user_meta($Dg, "\155\157\137\x6f\x61\x75\164\x68\137\x62\165\x64\144\171\x70\162\x65\163\x73\137\141\164\164\162\x69\142\165\164\145\x73", $p4);
        jcl:
        $user = get_user_by("\111\x44", $Dg);
        if ($user) {
            goto qS9;
        }
        return;
        qS9:
        $zx = '';
        if (isset($this->config["\141\x66\x74\x65\x72\137\x6c\157\x67\151\x6e\137\x75\x72\x6c"]) && '' !== $this->config["\141\x66\x74\x65\162\x5f\154\157\147\151\156\x5f\x75\x72\154"]) {
            goto NiL;
        }
        $EW = $PD->get_value("\x72\145\144\151\x72\x65\x63\164\x5f\x75\x72\151");
        $zx = rawurldecode($EW && '' !== $EW ? $EW : site_url());
        goto bov;
        NiL:
        $zx = $this->config["\141\x66\x74\x65\162\137\154\x6f\147\x69\x6e\137\165\162\x6c"];
        bov:
        do_action("\155\x6f\x5f\157\x61\x75\x74\x68\x5f\x63\154\x69\x65\x6e\x74\x5f\x6d\141\160\x5f\x72\157\x6c\145\163", array("\x75\163\145\162\137\151\x64" => $Dg, "\x61\x70\x70\x5f\x63\x6f\156\x66\x69\x67" => $h7, "\156\x65\x77\137\165\163\145\x72" => $i3, "\162\145\x73\157\x75\162\143\x65\137\x6f\x77\x6e\x65\x72" => $p4));
        do_action("\x6d\157\x5f\157\141\165\164\x68\x5f\154\x6f\147\147\x65\144\x5f\151\156\x5f\165\x73\x65\162\x5f\x74\157\x6b\145\x6e", $user, $Tu);
        $this->check_status(array("\x6d\163\x67" => "\x4c\157\x67\x69\x6e\x20\x53\x75\143\x63\x65\x73\163\x66\x75\154\41", "\143\157\144\x65" => "\x4c\117\107\x49\116\x5f\123\x55\x43\103\105\123\123", "\163\x74\x61\164\x75\x73" => true, "\141\160\x70\x6c\151\x63\141\x74\151\x6f\x6e" => $X3, "\143\x6c\x69\x65\156\164\x5f\151\x70" => $Sk->get_client_ip(), "\156\141\x76\x69\147\141\x74\151\x6f\x6e\x75\x72\154" => $zx, "\x65\155\x61\x69\154" => $nW, "\x75\x73\x65\162\156\141\x6d\x65" => $BL));
        if (!$SC) {
            goto u5A;
        }
        return $user;
        u5A:
        update_user_meta($user->ID, "\x6d\157\137\157\141\x75\x74\x68\137\x63\154\151\145\x6e\x74\x5f\x6c\141\163\164\137\151\x64\137\x74\157\x6b\145\x6e", isset($Tu["\151\x64\137\x74\157\153\x65\x6e"]) ? $Tu["\151\144\137\x74\x6f\153\x65\x6e"] : false);
        wp_set_current_user($user->ID);
        wp_set_auth_cookie($user->ID);
        do_action("\x77\x70\x5f\154\x6f\147\x69\x6e", $user->user_login, $user);
        $Ew = $PD->get_value("\162\x65\163\x74\162\x69\x63\x74\x72\x65\x64\x69\x72\x65\143\x74") !== false;
        $ut = $PD->get_value("\160\157\x70\x75\x70") === "\151\147\x6e\157\162\145";
        if (isset($this->config["\x70\x6f\160\165\160\x5f\154\x6f\x67\x69\156"]) && 1 === intval($this->config["\160\157\x70\x75\160\137\x6c\x6f\147\x69\x6e"]) && !$ut && !boolval($Ew)) {
            goto E9a;
        }
        wp_redirect($zx);
        goto MSu;
        E9a:
        echo "\x3c\x73\143\162\x69\160\x74\76\x77\151\156\x64\x6f\167\56\157\160\x65\x6e\x65\162\56\x48\x61\156\x64\154\x65\x50\157\x70\x75\160\122\145\x73\165\154\164\50\42" . $zx . "\42\51\x3b\x77\x69\x6e\144\157\x77\56\x63\154\157\x73\x65\50\x29\73\x3c\x2f\163\x63\162\151\x70\164\76";
        MSu:
        die;
    }
    public function check_status($zU)
    {
        if (isset($zU["\x73\164\x61\164\x75\163"])) {
            goto VbQ;
        }
        wp_die(wp_kses("\x53\x6f\155\x65\164\150\x69\156\x67\x20\x77\x65\x6e\x74\40\x77\162\x6f\x6e\x67\x2e\x20\120\x6c\x65\141\x73\x65\40\x74\162\171\x20\114\157\147\147\x69\156\x67\x20\151\x6e\40\141\147\x61\151\x6e\56", \get_valid_html()));
        VbQ:
        if (!(isset($zU["\163\164\x61\x74\165\163"]) && true === $zU["\x73\164\141\x74\165\163"] && (isset($zU["\143\157\x64\145"]) && "\x4c\x4f\x47\x49\116\x5f\123\125\x43\x43\105\x53\x53" === $zU["\x63\x6f\x64\145"]))) {
            goto nd2;
        }
        return true;
        nd2:
        if (!(true !== $zU["\x73\164\x61\164\165\163"])) {
            goto K5d;
        }
        $FR = isset($zU["\155\163\147"]) && !empty($zU["\x6d\x73\x67"]) ? $zU["\x6d\163\147"] : "\123\157\x6d\145\x74\x68\x69\156\147\40\167\x65\156\x74\40\x77\162\157\156\147\56\x20\120\x6c\145\x61\x73\145\x20\164\162\171\x20\114\x6f\147\147\x69\156\147\x20\151\156\x20\x61\147\141\151\x6e\x2e";
        wp_die(wp_kses($FR, \get_valid_html()));
        die;
        K5d:
    }
}
