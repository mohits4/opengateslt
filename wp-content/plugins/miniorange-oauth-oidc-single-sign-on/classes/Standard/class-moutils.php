<?php


namespace MoOauthClient\Standard;

use MoOauthClient\MOUtils as CommonUtils;
class MOUtils extends CommonUtils
{
    private function manage_deactivate_cache()
    {
        global $Sk;
        $tU = $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\x61\x75\x74\150\x5f\x6c\x6b");
        if (!(!$Sk->mo_oauth_is_customer_registered() || false === $tU || empty($tU))) {
            goto Fsy;
        }
        return;
        Fsy:
        $Fn = $Sk->mo_oauth_client_get_option("\x68\157\x73\164\137\x6e\141\155\145");
        $vo = $Fn . "\x2f\155\x6f\141\163\57\x61\x70\151\x2f\142\141\x63\x6b\x75\x70\x63\157\144\x65\57\x75\x70\x64\141\x74\x65\163\164\141\164\x75\163";
        $UA = $Sk->mo_oauth_client_get_option("\x6d\x6f\137\157\141\x75\164\150\x5f\141\144\155\x69\156\137\x63\165\163\164\157\x6d\x65\x72\x5f\x6b\x65\171");
        $Zq = $Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\x75\164\x68\x5f\x61\x64\155\151\156\x5f\x61\x70\x69\137\x6b\145\x79");
        $iF = $Sk->mooauthdecrypt($tU);
        $kt = round(microtime(true) * 1000);
        $kt = number_format($kt, 0, '', '');
        $Yg = $UA . $kt . $Zq;
        $go = hash("\163\150\x61\x35\61\62", $Yg);
        $IM = "\x43\165\x73\x74\x6f\155\145\162\x2d\x4b\145\x79\x3a\40" . $UA;
        $wl = "\x54\151\x6d\x65\163\x74\x61\155\x70\72\x20" . $kt;
        $Y_ = "\101\x75\164\x68\x6f\x72\x69\x7a\141\164\151\x6f\x6e\72\x20" . $go;
        $Dy = '';
        $Dy = array("\x63\x6f\144\145" => $iF, "\143\165\x73\164\157\155\145\162\x4b\x65\171" => $UA, "\141\x64\144\151\164\x69\157\x6e\141\x6c\x46\151\145\154\x64\163" => array("\146\151\145\x6c\x64\61" => home_url()));
        $TM = wp_json_encode($Dy);
        $qD = array("\x43\x6f\x6e\x74\x65\156\x74\x2d\x54\x79\x70\145" => "\x61\160\160\x6c\x69\x63\x61\164\151\157\156\57\152\x73\x6f\156");
        $qD["\103\165\x73\164\157\x6d\145\x72\55\113\145\171"] = $UA;
        $qD["\x54\151\155\x65\163\164\x61\155\x70"] = $kt;
        $qD["\101\165\164\x68\157\x72\x69\172\x61\x74\151\x6f\156"] = $go;
        $zU = array("\x6d\145\164\x68\157\144" => "\120\117\123\x54", "\142\x6f\144\171" => $TM, "\164\x69\155\145\157\x75\164" => "\x35", "\x72\145\x64\x69\162\145\x63\164\x69\x6f\156" => "\65", "\150\x74\x74\160\x76\145\x72\163\x69\x6f\156" => "\x31\56\x30", "\142\x6c\157\143\x6b\x69\156\x67" => true, "\x68\x65\x61\144\145\x72\163" => $qD);
        $n4 = wp_remote_post($vo, $zU);
        if (!is_wp_error($n4)) {
            goto xsd;
        }
        $Rx = $n4->get_error_message();
        echo "\123\x6f\x6d\145\x74\x68\151\x6e\x67\40\x77\x65\x6e\x74\40\167\162\157\156\x67\x3a\x20{$Rx}";
        die;
        xsd:
        return wp_remote_retrieve_body($n4);
    }
    public function deactivate_plugin()
    {
        $this->manage_deactivate_cache();
        parent::deactivate_plugin();
        $this->mo_oauth_client_delete_option("\155\157\x5f\157\x61\165\x74\x68\x5f\154\153");
        $this->mo_oauth_client_delete_option("\x6d\157\137\x6f\141\x75\x74\150\137\154\166");
    }
}
