<?php


namespace MoOauthClient\Premium;

use MoOauthClient\Config;
use MoOauthClient\Standard\SignInSettingsSettings as StandardSignInSettingsSettings;
class SignInSettingsSettings extends StandardSignInSettingsSettings
{
    public function change_current_config($post, $jc)
    {
        global $Sk;
        $jc = parent::change_current_config($post, $jc);
        $jc->add_config("\162\145\x73\x74\x72\x69\143\164\145\144\137\x64\x6f\155\141\x69\156\163", isset($post["\162\x65\163\x74\162\x69\x63\164\x65\x64\x5f\144\157\x6d\141\151\x6e\163"]) ? stripslashes(wp_unslash($post["\162\145\163\164\x72\151\143\164\x65\144\x5f\x64\x6f\155\x61\151\x6e\x73"])) : '');
        $jc->add_config("\x72\x65\163\x74\162\151\x63\x74\137\x74\x6f\x5f\x6c\157\147\x67\145\x64\x5f\151\x6e\x5f\x75\x73\x65\x72\163", isset($post["\162\x65\x73\164\162\x69\x63\164\137\x74\157\x5f\x6c\x6f\x67\x67\145\x64\137\x69\x6e\137\x75\x73\145\x72\x73"]) ? stripslashes(wp_unslash($post["\x72\145\163\x74\162\x69\143\164\x5f\164\x6f\x5f\154\157\x67\x67\x65\x64\137\x69\x6e\137\165\163\145\162\163"])) : '');
        $jc->add_config("\x6b\145\x65\160\137\x65\x78\151\163\x74\151\156\x67\137\165\x73\x65\162\163", isset($post["\153\145\145\160\x5f\x65\170\x69\163\x74\151\x6e\x67\137\x75\163\x65\162\x73"]) ? stripslashes(wp_unslash($post["\153\x65\x65\x70\x5f\145\x78\x69\x73\164\151\156\147\x5f\165\163\x65\x72\163"])) : '');
        $jc->add_config("\153\145\145\x70\137\x65\x78\x69\163\164\x69\156\x67\x5f\145\155\x61\151\x6c\x5f\x61\x74\x74\162", isset($post["\153\x65\x65\x70\137\145\170\x69\x73\x74\151\x6e\x67\137\145\155\141\151\x6c\137\x61\x74\164\x72"]) ? stripslashes(wp_unslash($post["\x6b\145\145\x70\x5f\145\170\151\x73\x74\x69\x6e\147\x5f\x65\x6d\141\151\x6c\x5f\x61\x74\164\162"])) : '');
        $jc->add_config("\x61\x6c\x6c\157\x77\137\x72\145\x73\164\x72\x69\x63\164\x65\144\137\x64\157\x6d\141\x69\156\x73", isset($post["\141\154\x6c\x6f\167\x5f\x72\x65\x73\x74\162\x69\x63\x74\x65\144\x5f\x64\157\x6d\x61\x69\x6e\163"]) ? stripslashes(wp_unslash($post["\141\x6c\154\x6f\167\137\162\x65\163\164\x72\x69\143\x74\145\144\x5f\144\157\x6d\x61\x69\156\163"])) : '');
        $jc->add_config("\141\x75\164\x6f\x5f\162\145\x64\x69\162\145\143\x74\137\145\170\143\154\165\x64\145\137\165\162\x6c\163", isset($post["\141\165\x74\157\137\x72\x65\x64\x69\x72\x65\x63\x74\137\145\x78\143\x6c\x75\x64\x65\137\165\x72\x6c\x73"]) ? stripslashes(wp_unslash($post["\141\165\x74\x6f\x5f\x72\145\144\x69\162\145\x63\x74\137\x65\x78\143\154\x75\x64\145\x5f\x75\x72\x6c\x73"])) : '');
        return $jc;
    }
}
