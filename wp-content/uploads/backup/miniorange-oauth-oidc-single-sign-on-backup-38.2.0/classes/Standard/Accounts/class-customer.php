<?php


namespace MoOauthClient\Standard;

use MoOauthClient\Customer as NormalCustomer;
class Customer extends NormalCustomer
{
    public $email;
    public $phone;
    private $default_customer_key = "\x31\66\65\x35\65";
    private $default_api_key = "\146\x46\x64\62\x58\143\166\x54\107\104\145\x6d\132\x76\142\x77\61\x62\143\125\145\x73\116\112\127\x45\161\x4b\142\142\125\161";
    public function check_customer_ln()
    {
        global $Sk;
        $vo = $Sk->mo_oauth_client_get_option("\150\x6f\163\164\x5f\156\x61\x6d\x65") . "\57\x6d\157\x61\163\57\162\145\163\x74\57\143\165\163\164\x6f\155\145\162\57\x6c\151\x63\145\156\x73\x65";
        $UA = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\165\x74\x68\137\141\144\155\151\156\x5f\143\x75\163\x74\x6f\155\145\x72\x5f\x6b\x65\171");
        $Zq = $Sk->mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\x75\x74\150\137\x61\x64\x6d\151\x6e\x5f\x61\x70\151\x5f\x6b\145\x79");
        $BL = $Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\141\x75\x74\x68\137\141\x64\155\151\x6e\x5f\145\x6d\141\151\154");
        $qG = $Sk->mo_oauth_client_get_option("\155\x6f\137\x6f\x61\x75\x74\150\137\x61\144\x6d\x69\x6e\x5f\x70\x68\157\x6e\x65");
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\163\150\141\65\61\62", $Yg);
        $IM = "\x43\165\163\164\x6f\155\145\x72\x2d\x4b\145\x79\x3a\40" . $UA;
        $wl = "\124\151\155\x65\163\x74\141\155\x70\72\x20" . $kt;
        $Y_ = "\101\165\x74\150\x6f\162\x69\172\x61\x74\151\157\x6e\72\40" . $go;
        $Dy = '';
        $Dy = array("\143\x75\x73\x74\157\x6d\145\x72\x49\x64" => $UA, "\141\x70\x70\154\151\143\x61\164\151\157\x6e\x4e\x61\x6d\x65" => "\167\160\137\157\x61\165\x74\x68\137\x63\x6c\x69\145\x6e\164\x5f" . \strtolower($Sk->get_versi_str()) . "\x5f\x70\154\x61\x6e");
        $TM = wp_json_encode($Dy);
        $qD = array("\x43\x6f\x6e\164\145\156\x74\55\x54\x79\x70\145" => "\x61\160\x70\x6c\151\x63\141\x74\151\157\156\57\152\163\x6f\x6e");
        $qD["\x43\x75\163\x74\157\155\145\162\x2d\113\x65\x79"] = $UA;
        $qD["\x54\x69\x6d\x65\x73\x74\x61\155\160"] = $kt;
        $qD["\101\165\164\150\157\x72\x69\172\x61\x74\151\157\156"] = $go;
        $zU = array("\x6d\x65\x74\150\x6f\x64" => "\120\117\x53\x54", "\x62\x6f\x64\x79" => $TM, "\164\151\x6d\145\x6f\165\x74" => "\65", "\162\x65\144\151\162\x65\x63\x74\x69\x6f\156" => "\x35", "\150\x74\x74\x70\x76\145\162\163\151\157\x6e" => "\61\56\x30", "\142\x6c\x6f\143\x6b\151\156\147" => true, "\x68\145\x61\x64\x65\162\x73" => $qD);
        $n4 = wp_remote_post($vo, $zU);
        if (!is_wp_error($n4)) {
            goto gvX;
        }
        $Rx = $n4->get_error_message();
        echo "\x53\157\155\x65\x74\x68\x69\x6e\147\40\167\145\156\x74\x20\167\x72\157\156\x67\72\x20{$Rx}";
        die;
        gvX:
        return wp_remote_retrieve_body($n4);
    }
    public function XfskodsfhHJ($iF)
    {
        global $Sk;
        $vo = $Sk->mo_oauth_client_get_option("\x68\157\163\164\137\x6e\x61\x6d\145") . "\x2f\x6d\x6f\141\x73\x2f\141\x70\x69\x2f\142\141\143\x6b\x75\x70\143\x6f\144\145\x2f\166\x65\162\151\146\x79";
        $UA = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\x75\164\x68\x5f\141\144\x6d\x69\x6e\137\143\165\163\164\x6f\155\145\162\137\x6b\145\x79");
        $Zq = $Sk->mo_oauth_client_get_option("\x6d\x6f\137\157\x61\165\164\x68\137\x61\144\x6d\151\156\x5f\141\160\151\x5f\153\x65\171");
        $BL = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\157\141\x75\164\x68\x5f\141\x64\155\x69\156\137\x65\155\x61\x69\154");
        $qG = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\141\x75\x74\150\137\x61\x64\x6d\151\x6e\x5f\160\150\x6f\156\145");
        $kt = self::get_timestamp();
        $Yg = $UA . $kt . $Zq;
        $go = hash("\x73\150\x61\65\61\x32", $Yg);
        $IM = "\103\x75\x73\164\x6f\x6d\x65\x72\55\113\x65\x79\x3a\40" . $UA;
        $wl = "\124\x69\155\145\x73\164\x61\x6d\x70\x3a\40" . $kt;
        $Y_ = "\x41\x75\164\150\157\162\151\172\141\164\x69\x6f\x6e\x3a\x20" . $go;
        $Dy = '';
        $Dy = array("\x63\x6f\x64\145" => $iF, "\x63\x75\163\164\x6f\x6d\145\x72\113\145\171" => $UA, "\x61\x64\x64\x69\164\151\x6f\x6e\141\154\106\x69\145\154\144\x73" => array("\x66\x69\145\x6c\144\61" => site_url()));
        $TM = wp_json_encode($Dy);
        $qD = array("\x43\x6f\156\164\145\x6e\164\55\124\171\160\145" => "\141\160\x70\x6c\x69\143\141\x74\x69\x6f\x6e\x2f\x6a\163\157\x6e");
        $qD["\103\x75\x73\164\157\x6d\x65\162\x2d\x4b\145\171"] = $UA;
        $qD["\124\x69\x6d\x65\163\164\141\x6d\x70"] = $kt;
        $qD["\x41\x75\x74\150\157\x72\151\172\x61\164\151\157\x6e"] = $go;
        $zU = array("\155\145\x74\150\x6f\x64" => "\x50\x4f\x53\x54", "\x62\157\x64\x79" => $TM, "\164\x69\155\145\157\x75\x74" => "\x35", "\162\145\x64\x69\162\x65\x63\164\151\157\156" => "\x35", "\150\x74\x74\160\166\x65\162\163\x69\157\156" => "\x31\x2e\x30", "\142\154\x6f\143\x6b\x69\156\147" => true, "\x68\145\x61\x64\145\x72\163" => $qD);
        $n4 = wp_remote_post($vo, $zU);
        if (!is_wp_error($n4)) {
            goto pnZ;
        }
        $Rx = $n4->get_error_message();
        echo "\123\x6f\x6d\145\x74\x68\x69\x6e\147\x20\x77\x65\x6e\x74\40\x77\162\157\156\x67\72\x20{$Rx}";
        die;
        pnZ:
        return wp_remote_retrieve_body($n4);
    }
}
