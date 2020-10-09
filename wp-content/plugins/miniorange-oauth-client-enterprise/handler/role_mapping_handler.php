<?php


class Mo_OAuth_Client_Role_Mapping
{
    function apply($oO, $rL, $xk, $Vw)
    {
        if (!(!$Vw && mo_oauth_client_get_option("\x6d\157\x5f\157\x61\x75\164\x68\x5f\x63\154\x69\x65\156\x74\x5f" . $rL . "\x5f\x6b\x65\145\x70\x5f\x65\x78\151\163\x74\151\156\147\137\x75\163\145\x72\137\x72\157\154\145\x73") == 1 && !mo_oauth_client_get_option("\x6d\157\x5f\157\x61\165\x74\x68\x5f\x63\154\151\145\x6e\164\x5f" . $rL . "\137\162\x65\x73\x74\162\151\x63\164\137\154\x6f\x67\x69\x6e\x5f\146\x6f\x72\137\155\141\x70\160\x65\144\x5f\162\x6f\154\145\x73"))) {
            goto B3x;
        }
        return;
        B3x:
        if (!user_can($oO, "\141\x64\155\151\156\x69\x73\x74\x72\x61\x74\157\x72")) {
            goto Io2;
        }
        return;
        Io2:
        if (is_array($xk)) {
            goto QOX;
        }
        $k1 = json_decode($xk, true);
        if (is_array($k1) && json_last_error() == JSON_ERROR_NONE) {
            goto dbg;
        }
        $p6 = explode("\73", $xk);
        goto GW0;
        dbg:
        $p6 = $k1;
        GW0:
        goto KvR;
        QOX:
        $p6 = $xk;
        KvR:
        $Bl = 0;
        $wN = 0;
        if (!is_numeric(mo_oauth_client_get_option("\x6d\157\137\157\141\x75\164\150\137\x63\154\151\145\x6e\x74\137" . $rL . "\x5f\x72\157\x6c\x65\x5f\155\x61\x70\160\151\x6e\147\x5f\143\x6f\x75\156\x74"))) {
            goto wzX;
        }
        $wN = intval(mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\x75\164\x68\137\x63\154\151\145\156\164\x5f" . $rL . "\137\162\x6f\154\x65\137\155\141\160\160\x69\156\147\137\x63\x6f\x75\x6e\x74"));
        wzX:
        $wT = new WP_User($oO);
        $P3 = 1;
        t_I:
        if (!($P3 <= $wN)) {
            goto jLK;
        }
        $Iu = mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\x61\x75\x74\150\x5f\143\154\151\145\156\164\137" . $rL . "\x5f\x6d\141\x70\x70\151\x6e\x67\x5f\x6b\145\171\x5f" . $P3);
        foreach ($p6 as $Wz) {
            if (!(strtolower($Wz) == strtolower($Iu))) {
                goto lmu;
            }
            $su = mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\165\164\150\137\x63\154\151\x65\x6e\x74\137" . $rL . "\x5f\x6d\141\x70\x70\151\x6e\147\137\166\141\x6c\165\145\137" . $P3);
            if (!$su) {
                goto cv3;
            }
            if (!($Bl == 0)) {
                goto oaY;
            }
            $wT->set_role('');
            oaY:
            $wT->add_role($su);
            $Bl++;
            cv3:
            lmu:
            ZO2:
        }
        Mhj:
        NDS:
        $P3++;
        goto t_I;
        jLK:
        if (!($Bl == 0)) {
            goto pwV;
        }
        if (mo_oauth_client_get_option("\155\157\x5f\x6f\x61\x75\164\150\x5f\x63\x6c\x69\x65\x6e\164\x5f" . $rL . "\x5f\162\x65\x73\164\x72\151\x63\164\x5f\154\x6f\147\x69\x6e\137\146\157\162\x5f\155\x61\x70\160\x65\144\137\x72\157\154\x65\x73")) {
            goto ZkO;
        }
        if (mo_oauth_client_get_option("\155\x6f\x5f\x6f\141\x75\x74\x68\137\143\x6c\x69\145\x6e\164\137" . $rL . "\137\x6d\141\x70\160\151\156\x67\137\x76\x61\154\x75\145\x5f\144\x65\146\x61\165\x6c\x74")) {
            goto wXC;
        }
        goto llR;
        ZkO:
        wp_die("\x59\x6f\165\x72\40\x64\x6f\x6e\47\164\x20\150\x61\166\145\40\160\145\162\x6d\151\x73\x73\151\x6f\x6e\x20\164\x6f\x20\x6c\157\147\x69\x6e\x20\x77\151\164\x68\x20\x79\x6f\x75\162\x20\x63\x75\162\x72\145\x6e\164\x20\162\x6f\154\x65\x2e");
        goto llR;
        wXC:
        $wT->set_role(mo_oauth_client_get_option("\155\157\137\x6f\x61\165\x74\x68\x5f\143\154\x69\145\156\x74\x5f" . $rL . "\137\155\141\160\x70\x69\156\147\137\166\141\154\165\145\137\x64\145\146\141\x75\154\x74"));
        llR:
        pwV:
    }
}
?>
