<?php


namespace MoOauthClient;

use MoOauthClient\OauthHandlerInterface;
class OauthHandler implements OauthHandlerInterface
{
    public function get_token($fs, $zU, $B3 = true, $N0 = false)
    {
        global $Sk;
        foreach ($zU as $qi => $sh) {
            $zU[$qi] = html_entity_decode($sh);
            gO:
        }
        f1:
        $NZ = '';
        if (!isset($zU["\143\x6c\x69\145\156\x74\x5f\163\x65\143\162\x65\x74"])) {
            goto O0;
        }
        $NZ = $zU["\x63\154\151\145\x6e\x74\137\163\x65\143\162\145\164"];
        O0:
        $qD = array("\101\x63\x63\145\x70\x74" => "\x61\160\160\154\151\143\141\164\x69\x6f\156\x2f\x6a\163\157\x6e", "\143\150\x61\x72\163\145\x74" => "\x55\124\106\x20\x2d\40\x38", "\x43\x6f\x6e\x74\x65\156\164\x2d\x54\x79\x70\145" => "\x61\x70\160\154\151\x63\x61\164\x69\157\x6e\57\x78\x2d\x77\167\x77\x2d\x66\x6f\x72\x6d\55\165\162\154\x65\x6e\x63\157\144\145\x64", "\x41\165\164\150\157\x72\151\172\x61\x74\x69\x6f\156" => "\102\x61\163\151\x63\40" . base64_encode($zU["\x63\154\x69\145\x6e\x74\137\x69\x64"] . "\72" . $NZ));
        if (!isset($zU["\x63\157\x64\145\137\166\145\162\x69\146\x69\x65\162"])) {
            goto sI;
        }
        unset($qD["\x41\165\164\150\157\x72\151\172\141\164\151\x6f\x6e"]);
        sI:
        if (1 === $B3 && 0 === $N0) {
            goto tk;
        }
        if (0 === $B3 && 1 === $N0) {
            goto Rp;
        }
        goto wR;
        tk:
        unset($zU["\143\x6c\151\145\156\164\137\151\x64"]);
        if (!isset($zU["\143\x6c\151\x65\156\x74\137\x73\x65\x63\x72\145\164"])) {
            goto qD;
        }
        unset($zU["\143\154\x69\145\x6e\x74\137\x73\x65\143\162\x65\164"]);
        qD:
        goto wR;
        Rp:
        if (!isset($qD["\101\x75\x74\150\x6f\x72\x69\172\x61\x74\151\157\156"])) {
            goto jo;
        }
        unset($qD["\101\x75\164\x68\x6f\162\x69\172\141\164\x69\x6f\156"]);
        jo:
        wR:
        $n4 = wp_remote_post($fs, array("\155\145\164\x68\x6f\x64" => "\120\117\123\124", "\x74\151\x6d\145\157\165\x74" => 45, "\x72\145\x64\x69\x72\145\x63\x74\151\x6f\156" => 5, "\150\164\164\160\166\x65\162\163\151\157\156" => "\x31\56\x30", "\142\x6c\x6f\143\x6b\x69\156\147" => true, "\x68\x65\141\144\145\162\163" => $qD, "\x62\x6f\144\171" => $zU, "\143\x6f\157\x6b\x69\x65\163" => array(), "\x73\x73\x6c\166\145\x72\151\x66\171" => false));
        if (!is_wp_error($n4)) {
            goto Z9;
        }
        wp_die(wp_kses($n4->get_error_message(), \get_valid_html()));
        die;
        Z9:
        $n4 = $n4["\x62\157\x64\x79"];
        if (is_array(json_decode($n4, true))) {
            goto VO;
        }
        echo "\x3c\x73\x74\162\157\x6e\x67\x3e\122\145\163\160\x6f\156\x73\x65\40\72\40\74\x2f\x73\164\x72\157\x6e\147\x3e\74\142\x72\x3e";
        print_r($n4);
        echo "\74\142\162\76\74\x62\162\76";
        die("\x49\156\x76\141\x6c\151\144\40\162\x65\163\x70\157\x6e\163\x65\40\x72\145\x63\x65\151\x76\x65\144\56");
        VO:
        $Dc = json_decode($n4, true);
        if (isset($Dc["\x65\162\162\157\x72\137\144\145\x73\143\162\x69\x70\164\151\x6f\x6e"])) {
            goto k0;
        }
        if (isset($Dc["\x65\x72\x72\157\162"])) {
            goto ME;
        }
        goto rr;
        k0:
        $this->handle_error(json_encode($Dc["\145\162\x72\x6f\x72\137\144\x65\x73\143\162\151\160\x74\151\157\156"]), $zU);
        return;
        goto rr;
        ME:
        $this->handle_error(json_encode($Dc["\x65\162\162\157\162"]), $zU);
        return;
        rr:
        return $n4;
    }
    public function get_access_token($fs, $zU, $B3, $N0)
    {
        $n4 = $this->get_token($fs, $zU, $B3, $N0);
        $Dc = json_decode($n4, true);
        if (!("\160\x61\x73\163\x77\x6f\x72\144" === $zU["\x67\162\x61\x6e\164\x5f\x74\171\x70\x65"])) {
            goto mn;
        }
        return $Dc;
        mn:
        if (isset($Dc["\x61\x63\x63\145\163\163\137\164\157\153\x65\x6e"])) {
            goto Lh;
        }
        echo "\x49\156\x76\141\x6c\x69\x64\40\x72\145\x73\160\x6f\156\x73\145\x20\x72\145\x63\x65\x69\166\x65\144\x20\x66\162\x6f\155\x20\117\101\x75\x74\150\40\120\x72\x6f\166\x69\x64\145\162\x2e\x20\x43\x6f\156\x74\x61\143\164\x20\171\157\165\162\x20\x61\144\x6d\x69\x6e\151\x73\x74\x72\x61\x74\157\x72\x20\146\x6f\162\x20\155\157\x72\145\x20\144\x65\x74\x61\x69\154\x73\56\74\x62\162\x3e\x3c\x62\x72\76\x3c\x73\x74\162\x6f\156\147\76\x52\145\163\160\x6f\x6e\163\145\x20\x3a\x20\74\57\163\164\x72\157\x6e\x67\76\74\x62\x72\x3e" . $n4;
        die;
        goto cl;
        Lh:
        return $Dc["\141\143\x63\145\163\163\x5f\164\157\153\145\156"];
        cl:
    }
    public function get_id_token($fs, $zU, $B3, $N0)
    {
        $n4 = $this->get_token($fs, $zU, $B3, $N0);
        $Dc = json_decode($n4, true);
        if (isset($Dc["\x69\144\x5f\x74\157\x6b\145\x6e"])) {
            goto Me;
        }
        echo "\111\156\x76\x61\154\x69\144\40\x72\145\163\160\157\156\x73\x65\x20\162\x65\x63\x65\x69\166\145\144\40\x66\x72\157\x6d\40\117\160\x65\x6e\x49\144\40\x50\162\x6f\x76\x69\x64\145\162\56\x20\103\157\156\164\141\x63\164\40\171\x6f\165\162\x20\x61\144\x6d\151\x6e\x69\x73\164\x72\x61\164\x6f\162\x20\146\x6f\x72\40\155\x6f\x72\x65\x20\144\x65\164\x61\x69\154\x73\x2e\x3c\142\162\x3e\74\x62\x72\76\x3c\163\164\162\x6f\156\x67\x3e\122\x65\x73\x70\157\156\163\145\40\x3a\x20\74\x2f\163\164\x72\157\156\147\76\x3c\142\x72\x3e" . $n4;
        die;
        goto OI;
        Me:
        return $Dc;
        OI:
    }
    public function get_resource_owner_from_id_token($lo)
    {
        $iT = explode("\56", $lo);
        if (!isset($iT[1])) {
            goto Gq;
        }
        $pr = base64_decode($iT[1]);
        if (!is_array(json_decode($pr, true))) {
            goto Yu;
        }
        return json_decode($pr, true);
        Yu:
        Gq:
        echo "\x49\x6e\166\x61\x6c\151\144\x20\x72\145\163\160\157\x6e\x73\x65\40\x72\145\143\145\x69\x76\145\x64\56\74\x62\x72\x3e\74\x73\x74\x72\x6f\156\147\76\151\144\x5f\164\157\x6b\x65\156\x20\72\40\x3c\57\x73\164\162\x6f\x6e\147\76" . $lo;
        die;
    }
    public function get_resource_owner($Tx, $qJ)
    {
        global $Sk;
        $qD = array();
        $qD["\x41\165\164\150\x6f\162\x69\172\141\x74\151\x6f\156"] = "\x42\x65\141\162\x65\x72\x20" . $qJ;
        if (!(strpos($Tx, "\x61\x63\143\x65\x73\163\137\x74\x6f\x6b\x65\x6e") !== false && strpos($Tx, "\75") !== false)) {
            goto xB;
        }
        $Tx .= $qJ;
        xB:
        $n4 = wp_remote_post($Tx, array("\155\x65\x74\x68\157\144" => "\107\105\124", "\164\151\x6d\x65\x6f\x75\164" => 45, "\162\145\144\151\162\x65\x63\x74\x69\157\x6e" => 5, "\150\164\164\x70\166\145\162\x73\151\x6f\156" => "\61\x2e\x30", "\142\154\x6f\x63\153\151\x6e\x67" => true, "\150\145\x61\x64\x65\162\x73" => $qD, "\143\x6f\157\153\x69\145\163" => array(), "\x73\163\x6c\166\145\162\x69\x66\x79" => false));
        if (!is_wp_error($n4)) {
            goto O_;
        }
        wp_die(wp_kses($n4->get_error_message(), \get_valid_html()));
        die;
        O_:
        $n4 = $n4["\142\x6f\x64\171"];
        if (is_array(json_decode($n4, true))) {
            goto NR;
        }
        echo "\74\x73\164\162\x6f\156\147\x3e\x52\x65\x73\x70\157\x6e\x73\x65\40\72\x20\x3c\x2f\163\x74\162\157\156\x67\x3e\x3c\142\x72\x3e";
        print_r($n4);
        echo "\74\x62\x72\76\x3c\x62\x72\76";
        die("\111\156\166\141\x6c\x69\x64\x20\162\145\x73\x70\x6f\x6e\163\x65\x20\162\145\143\x65\151\x76\x65\x64\56");
        NR:
        $Dc = json_decode($n4, true);
        if (isset($Dc["\145\x72\x72\157\162\137\144\145\163\x63\x72\x69\160\x74\x69\157\156"])) {
            goto pt;
        }
        if (isset($Dc["\145\x72\162\157\x72"])) {
            goto Ow;
        }
        goto NL;
        pt:
        die(json_encode($Dc["\x65\162\162\157\162\x5f\144\x65\163\x63\162\151\x70\164\151\157\156"]));
        goto NL;
        Ow:
        die(json_encode($Dc["\145\162\162\x6f\x72"]));
        NL:
        return $Dc;
    }
    public function get_response($vo)
    {
        $n4 = wp_remote_get($vo, array("\x6d\x65\x74\150\x6f\144" => "\107\105\x54", "\164\x69\155\145\x6f\165\164" => 45, "\x72\x65\x64\x69\x72\x65\143\x74\151\x6f\x6e" => 5, "\x68\x74\x74\x70\x76\145\x72\x73\x69\x6f\156" => 1.0, "\x62\x6c\x6f\x63\x6b\x69\156\147" => true, "\150\x65\x61\x64\145\x72\x73" => array(), "\143\x6f\157\x6b\151\x65\x73" => array(), "\x73\163\154\x76\x65\x72\x69\x66\x79" => false));
        if (!is_wp_error($n4)) {
            goto Tb;
        }
        wp_die(wp_kses($n4->get_error_message(), \get_valid_html()));
        die;
        Tb:
        $n4 = $n4["\142\x6f\144\x79"];
        $Dc = json_decode($n4, true);
        if (isset($Dc["\145\x72\162\x6f\x72\137\x64\x65\163\x63\162\x69\160\164\151\157\156"])) {
            goto Ib;
        }
        if (isset($Dc["\x65\x72\162\157\162"])) {
            goto Pw;
        }
        goto y4;
        Ib:
        die($Dc["\145\x72\x72\157\x72\137\144\145\163\143\162\151\x70\x74\x69\157\x6e"]);
        goto y4;
        Pw:
        die($Dc["\145\162\162\157\x72"]);
        y4:
        return $Dc;
    }
    private function handle_error($Q1, $zU)
    {
        global $Sk;
        if (!($zU["\147\162\x61\x6e\x74\137\164\x79\x70\x65"] === "\x70\x61\x73\x73\167\157\162\144")) {
            goto Ie;
        }
        $s5 = site_url();
        $s5 = "\77\x6f\x70\164\x69\157\156\x3d\145\162\162\157\x72\155\x61\x6e\x61\147\145\162\x26\145\162\x72\x6f\162\75" . \base64_encode($Q1);
        $Sk->redirect_user($s5);
        die;
        Ie:
        die($Q1);
    }
}
