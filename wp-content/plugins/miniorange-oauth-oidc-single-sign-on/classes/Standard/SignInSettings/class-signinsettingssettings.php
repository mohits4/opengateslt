<?php


namespace MoOauthClient\Standard;

use MoOauthClient\Config;
class SignInSettingsSettings
{
    private $plugin_config;
    public function __construct()
    {
        $Mj = $this->get_config_option();
        if ($Mj && isset($Mj)) {
            goto YY3;
        }
        $this->plugin_config = new Config();
        $this->save_config_option($this->plugin_config);
        goto pqF;
        YY3:
        $this->save_config_option($Mj);
        $this->plugin_config = $Mj;
        pqF:
    }
    public function save_config_option($jc = array())
    {
        global $Sk;
        if (!(isset($jc) && !empty($jc))) {
            goto Inu;
        }
        return $Sk->mo_oauth_client_update_option("\155\157\x5f\157\x61\165\164\x68\137\143\154\151\145\x6e\x74\137\143\157\156\x66\151\x67", $jc);
        Inu:
        return false;
    }
    public function get_config_option()
    {
        global $Sk;
        return $Sk->mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\x75\164\x68\137\x63\x6c\151\145\x6e\x74\137\x63\157\156\146\x69\x67");
    }
    public function get_sane_config()
    {
        $jc = $this->plugin_config;
        if ($jc && isset($jc)) {
            goto WMU;
        }
        $jc = $this->get_config_option();
        WMU:
        if (!(!$jc || !isset($jc))) {
            goto fr8;
        }
        $jc = new Config();
        fr8:
        return $jc;
    }
    public function mo_oauth_save_settings()
    {
        global $Sk;
        $jc = $this->get_sane_config();
        if (!(isset($_POST["\155\157\137\163\x69\x67\x6e\x69\x6e\163\x65\x74\x74\151\x6e\147\x73\x5f\156\x6f\x6e\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\x6f\x5f\163\x69\x67\x6e\151\x6e\x73\x65\x74\164\x69\156\147\163\137\156\157\156\143\145"])), "\x6d\157\x5f\x6f\141\165\x74\150\x5f\x63\x6c\151\145\x6e\164\x5f\x73\151\147\156\x5f\x69\156\x5f\x73\x65\164\x74\151\x6e\x67\x73") && (isset($_POST[\MoOAuthConstants::OPTION]) && "\155\157\137\x6f\141\x75\x74\x68\x5f\x63\x6c\151\x65\x6e\x74\137\x61\144\166\141\x6e\143\x65\144\137\163\145\164\x74\x69\156\147\163" === $_POST[\MoOAuthConstants::OPTION]))) {
            goto LHS;
        }
        $jc = $this->change_current_config($_POST, $jc);
        $jc->save_settings($jc->get_current_config());
        $this->save_config_option($jc);
        LHS:
    }
    public function change_current_config($post, $jc)
    {
        $jc->add_config("\141\x66\164\145\162\137\x6c\157\147\x69\156\x5f\x75\162\x6c", isset($post["\143\165\163\164\157\155\137\141\146\164\145\x72\137\x6c\x6f\147\x69\156\x5f\x75\x72\154"]) ? stripslashes(wp_unslash($post["\x63\x75\163\164\x6f\155\137\x61\x66\164\x65\162\137\x6c\x6f\147\151\x6e\x5f\x75\x72\x6c"])) : '');
        $jc->add_config("\141\x66\164\x65\162\x5f\154\x6f\x67\157\x75\x74\137\x75\x72\154", isset($post["\x63\x75\163\x74\x6f\155\137\141\146\164\145\x72\x5f\154\x6f\147\x6f\x75\164\137\x75\162\x6c"]) ? stripslashes(wp_unslash($post["\143\165\163\164\157\x6d\137\x61\146\x74\145\162\x5f\x6c\x6f\x67\157\x75\x74\137\x75\x72\x6c"])) : '');
        $jc->add_config("\160\157\160\x75\160\x5f\x6c\157\x67\151\x6e", isset($post["\160\x6f\160\x75\160\137\x6c\x6f\x67\151\156"]) ? stripslashes(wp_unslash($post["\160\157\160\165\160\x5f\x6c\x6f\x67\x69\156"])) : 0);
        $jc->add_config("\x61\x75\164\x6f\x5f\162\x65\147\151\x73\164\145\162", isset($post["\x61\165\x74\157\x5f\162\145\x67\151\163\x74\145\x72"]) ? stripslashes(wp_unslash($post["\141\x75\164\157\x5f\162\145\x67\151\163\x74\145\x72"])) : 0);
        $jc->add_config("\x63\157\156\x66\x69\x72\x6d\x5f\x6c\x6f\x67\157\165\x74", isset($post["\x63\x6f\156\146\151\162\155\x5f\154\157\147\157\165\x74"]) ? stripslashes(wp_unslash($post["\143\x6f\156\146\151\162\155\x5f\154\157\x67\157\x75\164"])) : 0);
        return $jc;
    }
}
