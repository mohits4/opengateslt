<?php


namespace MoOauthClient\Enterprise;

use MoOauthClient\Config;
use MoOauthClient\Premium\SignInSettingsSettings as PremiumSignInSettingsSettings;
class SignInSettingsSettings extends PremiumSignInSettingsSettings
{
    public function change_current_config($post, $jc)
    {
        $jc = parent::change_current_config($post, $jc);
        $jc->add_config("\x64\x79\x6e\141\155\x69\x63\137\143\x61\154\154\142\x61\x63\153\137\x75\162\154", isset($post["\144\171\x6e\x61\155\x69\143\x5f\x63\x61\154\154\142\x61\143\x6b\137\x75\x72\x6c"]) ? stripslashes(wp_unslash($post["\x64\171\156\x61\x6d\x69\143\137\x63\141\154\154\x62\141\143\x6b\137\165\162\154"])) : '');
        $jc->add_config("\141\143\164\151\166\141\164\145\x5f\x75\163\x65\162\x5f\141\156\x61\154\x79\x74\x69\x63\x73", isset($post["\x6d\157\x5f\141\x63\164\x69\166\x61\164\145\137\165\x73\x65\162\137\x61\x6e\x61\x6c\x79\x74\x69\143\163"]) ? stripslashes(wp_unslash($post["\x6d\x6f\137\x61\143\164\151\166\141\x74\145\x5f\x75\163\x65\x72\137\x61\156\x61\154\x79\x74\151\x63\163"])) : '');
        $jc->add_config("\x61\x63\164\x69\166\141\164\145\137\163\x69\x6e\x67\x6c\145\137\x6c\x6f\147\151\x6e\137\146\x6c\x6f\x77", isset($post["\x6d\157\x5f\141\143\x74\151\x76\x61\x74\145\x5f\163\151\x6e\147\x6c\145\137\154\x6f\x67\151\156\137\146\x6c\157\x77"]) ? stripslashes(wp_unslash($post["\x6d\x6f\137\x61\x63\x74\151\166\141\x74\x65\x5f\163\151\156\x67\x6c\145\x5f\x6c\157\147\x69\156\137\x66\x6c\157\167"])) : '');
        $jc->add_config("\143\157\155\155\x6f\156\x5f\154\x6f\147\151\156\137\142\x75\x74\164\157\156\x5f\144\151\x73\160\x6c\x61\171\x5f\x6e\x61\x6d\145", isset($post["\x63\x6f\155\155\157\x6e\x5f\154\157\x67\151\156\x5f\x62\x75\164\164\x6f\156\137\x64\151\163\160\154\141\171\137\156\141\155\145"]) ? stripslashes(wp_unslash($post["\143\x6f\x6d\155\x6f\156\137\x6c\x6f\147\151\156\137\x62\165\x74\164\157\156\137\144\151\163\x70\154\x61\x79\x5f\x6e\141\155\x65"])) : '');
        global $Sk;
        $Sk->mo_oauth_client_update_option("\x6d\157\x5f\x6f\141\x75\164\150\137\x63\x6c\x69\x65\156\x74\x5f\154\x6f\x61\144\x5f\x61\156\141\x6c\171\164\151\143\163", isset($post["\155\157\x5f\x61\x63\164\151\166\x61\x74\145\137\x75\x73\x65\x72\x5f\141\156\141\x6c\171\164\x69\x63\x73"]));
        $Sk->mo_oauth_client_update_option("\x6d\157\x5f\x6f\141\x75\164\x68\x5f\141\143\x74\x69\166\141\164\145\x5f\x73\x69\x6e\x67\x6c\x65\137\x6c\157\x67\151\156\x5f\146\x6c\157\x77", isset($post["\x6d\157\137\x61\x63\x74\x69\166\x61\164\145\137\163\x69\x6e\x67\x6c\145\x5f\x6c\x6f\x67\151\156\137\x66\x6c\x6f\x77"]));
        $Sk->mo_oauth_client_update_option("\x6d\157\x5f\157\x61\x75\164\150\137\x63\157\x6d\155\157\x6e\137\x6c\157\147\151\x6e\x5f\142\x75\164\x74\x6f\156\137\144\x69\x73\x70\x6c\x61\171\x5f\x6e\141\155\145", isset($post["\x63\157\x6d\x6d\157\x6e\137\x6c\x6f\147\x69\x6e\137\x62\x75\164\x74\x6f\156\x5f\x64\x69\163\x70\x6c\x61\171\x5f\x6e\x61\x6d\145"]) ? stripslashes(wp_unslash($post["\x63\157\155\155\157\x6e\137\x6c\157\x67\x69\x6e\x5f\142\x75\164\164\157\x6e\137\x64\151\163\x70\154\x61\171\x5f\x6e\141\155\x65"])) : '');
        return $jc;
    }
}
