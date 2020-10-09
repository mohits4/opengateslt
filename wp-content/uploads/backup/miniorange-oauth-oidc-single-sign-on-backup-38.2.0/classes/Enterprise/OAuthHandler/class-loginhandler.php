<?php


namespace MoOauthClient\Enterprise;

use MoOauthClient\Premium\LoginHandler as PremiumLoginHandler;
use MoOauthClient\Enterprise\UserAnalyticsDBOps;
class LoginHandler extends PremiumLoginHandler
{
    public function mo_oauth_client_generate_authorization_url($Ca, $cZ)
    {
        global $Sk;
        $Ca = parent::mo_oauth_client_generate_authorization_url($Ca, $cZ);
        $Q0 = $Sk->parse_url($Ca);
        $jc = $Sk->get_plugin_config();
        $MQ = $jc->get_config("\x64\171\x6e\141\x6d\151\143\x5f\143\x61\154\x6c\x62\x61\143\153\137\165\162\x6c");
        if (!(isset($MQ) && '' !== $MQ)) {
            goto cm;
        }
        $Q0["\x71\165\145\x72\171"]["\162\x65\x64\151\x72\145\143\x74\x5f\x75\x72\151"] = $MQ;
        return $Sk->generate_url($Q0);
        cm:
        return $Ca;
    }
    public function check_status($zU)
    {
        $q0 = new UserAnalyticsDBOps();
        if (isset($zU["\x73\164\141\x74\165\163"])) {
            goto Of;
        }
        $q0->add_transact($zU, true);
        wp_die(wp_kses("\123\x6f\x6d\x65\x74\150\151\156\x67\40\x77\x65\x6e\164\40\167\162\157\x6e\147\x2e\40\x50\x6c\x65\141\x73\145\x20\164\x72\x79\x20\114\157\x67\147\x69\x6e\147\x20\151\x6e\40\x61\x67\141\151\x6e\56", \get_valid_html()));
        Of:
        $q0->add_transact($zU);
        if (!(true !== $zU["\163\164\141\x74\165\163"])) {
            goto hS;
        }
        $FR = isset($zU["\155\x73\x67"]) && !empty($zU["\x6d\x73\147"]) ? $zU["\x6d\163\147"] : "\x53\157\x6d\x65\x74\x68\x69\x6e\x67\x20\x77\145\156\164\x20\x77\162\157\x6e\147\56\40\x50\x6c\x65\141\163\145\x20\x74\x72\x79\x20\x4c\157\x67\147\x69\x6e\x67\x20\x69\156\40\x61\147\x61\151\x6e\x2e";
        wp_die(wp_kses($FR, \get_valid_html()));
        die;
        hS:
    }
}
