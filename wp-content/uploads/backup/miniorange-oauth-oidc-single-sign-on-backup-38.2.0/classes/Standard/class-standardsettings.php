<?php


namespace MoOauthClient\Standard;

use MoOauthClient\Free\FreeSettings;
use MoOauthClient\Free\CustomizationSettings;
use MoOauthClient\Standard\AppSettings;
use MoOauthClient\Standard\SignInSettingsSettings;
use MoOauthClient\Standard\Customer;
class StandardSettings
{
    private $free_settings;
    public function __construct()
    {
        $this->free_settings = new FreeSettings();
        add_action("\141\144\x6d\x69\156\137\x69\156\x69\x74", array($this, "\x6d\157\137\157\141\165\x74\x68\137\143\154\x69\145\156\x74\x5f\163\164\x61\156\144\x61\162\x64\x5f\163\145\x74\164\x69\156\147\163"));
        add_action("\x64\157\x5f\x6d\141\x69\156\x5f\x73\145\164\x74\x69\x6e\x67\163\x5f\151\x6e\164\x65\x72\156\x61\x6c", array($this, "\x64\157\x5f\x69\156\164\145\162\156\x61\x6c\137\163\145\x74\x74\151\x6e\147\x73"), 1, 10);
    }
    public function mo_oauth_client_standard_settings()
    {
        $hn = new CustomizationSettings();
        $K6 = new SignInSettingsSettings();
        $a6 = new AppSettings();
        $hn->save_customization_settings();
        $a6->save_app_settings();
        $K6->mo_oauth_save_settings();
    }
    public function do_internal_settings($post)
    {
        global $Sk;
        if (!(isset($_POST["\x6d\157\x5f\157\141\165\x74\150\x5f\x63\154\151\x65\x6e\x74\x5f\166\x65\162\151\146\x79\137\154\151\x63\x65\156\163\x65\137\156\x6f\156\x63\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\x6f\141\165\164\150\x5f\143\154\151\145\156\x74\x5f\166\x65\x72\151\146\x79\x5f\154\x69\143\145\156\x73\145\x5f\156\x6f\156\x63\145"])), "\x6d\x6f\x5f\x6f\x61\x75\164\150\x5f\x63\154\151\145\x6e\164\x5f\x76\x65\x72\151\146\171\x5f\x6c\151\143\145\156\x73\x65") && isset($post[\MoOAuthConstants::OPTION]) && "\x6d\157\x5f\x6f\x61\165\164\x68\137\143\154\151\x65\x6e\x74\x5f\166\x65\162\x69\x66\x79\x5f\x6c\x69\143\145\x6e\163\x65" === $post[\MoOAuthConstants::OPTION])) {
            goto nKb;
        }
        if (!(!isset($post["\155\157\137\x6f\141\165\x74\150\137\143\x6c\x69\145\156\164\137\154\151\x63\x65\x6e\163\x65\x5f\153\x65\171"]) || empty($post["\155\x6f\137\157\x61\165\164\150\137\x63\154\151\145\156\x74\x5f\154\151\143\x65\156\163\x65\137\x6b\x65\x79"]))) {
            goto IS3;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x50\154\145\141\163\145\40\145\156\x74\x65\x72\x20\166\x61\x6c\x69\x64\40\x6c\x69\x63\145\156\x73\145\x20\x6b\x65\x79\56");
        $this->mo_oauth_show_error_message();
        return;
        IS3:
        $iF = trim($post["\x6d\157\137\157\141\x75\x74\x68\x5f\x63\x6c\x69\x65\x6e\x74\x5f\154\x69\x63\145\x6e\163\145\137\153\x65\x79"]);
        $od = new Customer();
        $Dc = json_decode($od->check_customer_ln(), true);
        if (strcasecmp($Dc["\x73\164\x61\164\x75\x73"], "\123\125\103\x43\105\123\123") === 0) {
            goto QqM;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x49\x6e\166\141\154\151\x64\x20\154\151\143\145\x6e\x73\145\x2e\x20\x50\154\145\141\163\x65\40\x74\x72\x79\x20\x61\147\141\151\156\56");
        $Sk->mo_oauth_show_error_message();
        goto eiQ;
        QqM:
        $Dc = json_decode($od->XfskodsfhHJ($iF), true);
        if (strcasecmp($Dc["\x73\x74\141\164\165\163"], "\x53\125\x43\x43\x45\123\x53") === 0) {
            goto mzt;
        }
        if (strcasecmp($Dc["\163\164\141\x74\x75\163"], "\106\101\111\x4c\x45\x44") === 0) {
            goto x_4;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x41\156\40\x65\x72\162\157\162\x20\x6f\x63\143\x75\x72\x65\x64\40\x77\150\x69\x6c\145\x20\x70\x72\x6f\x63\x65\163\x73\151\x6e\x67\40\171\x6f\x75\x72\40\162\145\x71\165\x65\x73\x74\x2e\40\120\x6c\x65\141\x73\145\40\x54\162\x79\x20\x61\147\141\x69\x6e\56");
        $Sk->mo_oauth_show_error_message();
        goto Uop;
        mzt:
        $Sk->mo_oauth_client_update_option("\155\157\x5f\x6f\141\x75\x74\150\137\x6c\x6b", $Sk->mooauthencrypt($iF));
        $Sk->mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\x75\x74\150\137\x6c\x76", $Sk->mooauthencrypt("\164\x72\165\x65"));
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x59\157\x75\162\x20\154\x69\x63\145\156\163\145\40\x69\163\x20\166\x65\162\x69\x66\151\x65\x64\x2e\x20\x59\157\165\x20\x63\141\156\x20\156\157\x77\40\x73\x65\x74\x75\160\40\x74\150\145\x20\x70\154\165\147\151\156\56");
        $Sk->mo_oauth_show_success_message();
        goto Uop;
        x_4:
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\131\x6f\165\40\x68\141\166\145\40\145\x6e\164\x65\162\x65\x64\x20\x61\x6e\x20\151\x6e\x76\x61\154\151\144\40\x6c\151\143\145\x6e\x73\x65\x20\153\145\x79\56\40\120\154\145\x61\163\x65\40\x65\156\x74\145\162\40\141\40\166\x61\x6c\151\x64\40\154\x69\x63\x65\x6e\163\x65\40\x6b\x65\x79\x2e");
        $Sk->mo_oauth_show_error_message();
        Uop:
        eiQ:
        nKb:
    }
}
