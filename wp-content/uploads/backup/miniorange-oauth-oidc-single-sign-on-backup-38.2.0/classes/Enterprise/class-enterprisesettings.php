<?php


namespace MoOauthClient\Enterprise;

use MoOauthClient\Premium\PremiumSettings;
use MoOauthClient\Enterprise\SignInSettingsSettings;
use MoOauthClient\Enterprise\AppSettings;
use MoOauthClient\Enterprise\UserAnalyticsDBOps as DBOps;
class EnterpriseSettings
{
    private $premium_settings;
    public function __construct()
    {
        $this->premium_settings = new PremiumSettings();
        add_action("\141\x64\x6d\151\x6e\137\151\x6e\151\x74", array($this, "\155\157\x5f\157\x61\165\x74\150\137\x63\x6c\151\145\x6e\x74\x5f\x65\156\164\145\162\x70\x72\151\x73\145\x5f\x73\x65\164\164\151\156\147\x73"));
    }
    public function mo_oauth_client_enterprise_settings()
    {
        $K6 = new SignInSettingsSettings();
        $a6 = new AppSettings();
        $K6->mo_oauth_save_settings();
        $a6->save_advanced_grant_settings();
        if (!(isset($_POST["\x6d\x6f\137\167\160\156\163\x5f\x6d\141\x6e\165\141\154\137\x63\x6c\145\141\x72\137\x6e\x6f\156\x63\145"]) && wp_verify_nonce(sanitize_text_field(wp_unslash($_POST["\x6d\157\x5f\167\160\156\x73\x5f\155\x61\x6e\x75\141\154\137\143\154\145\x61\162\x5f\x6e\x6f\156\x63\145"])), "\155\157\137\167\160\156\x73\137\x6d\141\x6e\165\141\x6c\137\143\154\x65\x61\162") && isset($_POST[\MoOAuthConstants::OPTION]) && "\x6d\157\137\x77\160\156\x73\137\x6d\x61\x6e\x75\141\x6c\137\143\154\145\x61\x72" === $_POST[\MoOAuthConstants::OPTION])) {
            goto Zo;
        }
        $q0 = new DBOps();
        $q0->drop_table();
        Zo:
    }
}
