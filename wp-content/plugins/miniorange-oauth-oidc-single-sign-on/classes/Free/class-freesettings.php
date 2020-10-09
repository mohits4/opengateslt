<?php


namespace MoOauthClient\Free;

use MoOauthClient\Settings;
use MoOauthClient\Free\CustomizationSettings;
use MoOauthClient\Free\RequestfordemoSettings;
use MoOauthClient\Free\AppSettings;
use MoOauthClient\Customer;
class FreeSettings
{
    private $common_settings;
    public function __construct()
    {
        $this->common_settings = new Settings();
        add_action("\x61\x64\155\x69\156\x5f\151\x6e\151\164", array($this, "\x6d\157\137\x6f\141\165\164\150\137\143\x6c\151\145\156\164\137\x66\x72\x65\145\137\163\x65\164\164\151\x6e\x67\x73"));
        add_action("\x61\144\155\151\x6e\137\x66\157\157\x74\145\x72", array($this, "\x6d\x6f\137\x6f\x61\165\x74\x68\137\x63\x6c\x69\145\156\164\x5f\x66\145\145\x64\x62\141\x63\153\137\x72\x65\x71\165\x65\x73\x74"));
    }
    public function mo_oauth_client_free_settings()
    {
        global $Sk;
        $hn = new CustomizationSettings();
        $wg = new RequestfordemoSettings();
        $hn->save_customization_settings();
        $wg->save_requestdemo_settings();
        $a6 = new AppSettings();
        $a6->save_app_settings();
        if (!(isset($_POST["\x6d\157\137\x6f\x61\x75\x74\150\x5f\143\x6c\151\145\x6e\164\x5f\146\x65\x65\x64\142\x61\x63\x6b\137\x6e\x6f\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\x6f\137\x6f\x61\165\164\x68\137\x63\154\151\x65\156\x74\x5f\146\x65\145\x64\142\141\x63\153\x5f\156\x6f\x6e\143\145"])), "\x6d\x6f\137\x6f\x61\x75\164\x68\137\x63\x6c\x69\x65\x6e\164\137\x66\145\145\144\x62\x61\143\x6b") && isset($_POST[\MoOAuthConstants::OPTION]) && "\155\x6f\x5f\x6f\x61\x75\x74\x68\137\143\x6c\151\145\156\x74\x5f\146\x65\145\x64\x62\x61\143\x6b" === $_POST[\MoOAuthConstants::OPTION])) {
            goto cu;
        }
        $user = wp_get_current_user();
        $IW = "\x50\154\x75\147\151\x6e\40\x44\x65\x61\143\164\x69\166\141\x74\145\144\x3a";
        $nc = isset($_POST["\144\x65\141\143\x74\x69\x76\x61\x74\x65\x5f\162\x65\x61\163\157\x6e\x5f\162\141\x64\151\157"]) ? sanitize_text_field(wp_unslash($_POST["\144\x65\x61\x63\164\x69\166\141\164\x65\x5f\162\x65\x61\x73\x6f\156\x5f\162\141\x64\x69\157"])) : false;
        $Y5 = isset($_POST["\161\x75\x65\162\x79\137\146\145\x65\144\x62\141\x63\153"]) ? sanitize_text_field(wp_unslash($_POST["\x71\x75\x65\162\x79\x5f\x66\145\145\144\x62\x61\143\x6b"])) : false;
        if ($nc) {
            goto tB;
        }
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\120\x6c\145\x61\x73\x65\x20\x53\145\x6c\x65\x63\x74\40\157\x6e\145\x20\157\x66\40\x74\150\x65\x20\162\x65\141\x73\x6f\156\x73\40\54\x69\x66\x20\x79\x6f\x75\162\x20\162\x65\141\163\157\x6e\x20\x69\163\40\156\157\x74\x20\x6d\x65\x6e\x74\x69\x6f\156\145\x64\x20\x70\154\145\141\x73\145\x20\x73\x65\154\x65\x63\164\40\117\x74\150\145\x72\x20\122\145\141\163\157\x6e\x73");
        $Sk->mo_oauth_show_error_message();
        tB:
        $IW .= $nc;
        if (!isset($Y5)) {
            goto TF;
        }
        $IW .= "\x3a" . $Y5;
        TF:
        $nW = $Sk->mo_oauth_client_get_option("\x6d\157\137\157\x61\x75\x74\150\137\x61\x64\x6d\x69\156\137\145\155\141\x69\154");
        if (!($nW == '')) {
            goto rv;
        }
        $nW = $user->user_email;
        rv:
        $qG = $Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\165\x74\x68\x5f\x61\144\155\x69\156\x5f\x70\x68\x6f\x6e\x65");
        $ZJ = new Customer();
        $U5 = json_decode($ZJ->mo_oauth_send_email_alert($nW, $qG, $IW), true);
        deactivate_plugins(MOC_DIR . "\x6d\x6f\x5f\x6f\x61\165\x74\150\137\x73\145\x74\164\x69\156\147\x73\x2e\x70\x68\x70");
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\124\x68\x61\156\x6b\40\171\x6f\165\x20\x66\x6f\x72\x20\164\x68\x65\x20\x66\x65\x65\144\x62\141\x63\x6b\x2e");
        $Sk->mo_oauth_show_success_message();
        cu:
        if (!(isset($_POST["\x6d\157\137\157\x61\165\164\x68\x5f\143\x6c\x69\x65\156\164\x5f\163\x6b\x69\x70\x5f\x66\145\145\x64\x62\x61\143\153\x5f\x6e\157\x6e\143\x65"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\137\x6f\x61\x75\x74\150\x5f\143\154\x69\145\x6e\x74\x5f\x73\153\151\x70\137\x66\x65\145\x64\x62\141\x63\153\x5f\x6e\157\x6e\143\x65"])), "\x6d\x6f\x5f\x6f\x61\165\x74\150\x5f\x63\154\x69\145\156\164\x5f\163\153\x69\160\137\x66\145\x65\144\142\141\143\x6b") && isset($_POST["\x6f\x70\x74\151\x6f\x6e"]) && "\155\157\x5f\x6f\141\x75\164\x68\x5f\x63\154\x69\145\x6e\x74\137\163\153\x69\x70\137\x66\145\145\x64\142\x61\x63\153" === $_POST["\x6f\160\x74\x69\x6f\156"])) {
            goto OY;
        }
        deactivate_plugins(MOC_DIR . "\x6d\157\137\157\x61\x75\x74\x68\x5f\163\x65\x74\x74\151\156\147\163\x2e\x70\150\x70");
        $Sk->mo_oauth_client_update_option(\MoOAuthConstants::PANEL_MESSAGE_OPTION, "\x50\x6c\165\x67\x69\x6e\40\x44\145\141\143\164\151\166\141\x74\x65\144\x2e");
        $Sk->mo_oauth_show_success_message();
        OY:
    }
    public function mo_oauth_client_feedback_request()
    {
        $mQ = new \MoOauthClient\Free\Feedback();
        $mQ->show_form();
    }
}
