<?php


namespace MoOauthClient\Premium;

use MoOauthClient\Standard\StandardSettings;
use MoOauthClient\Premium\AppSettings;
use MoOauthClient\Premium\SignInSettingsSettings;
class PremiumSettings
{
    private $standard_settings;
    public function __construct()
    {
        $this->standard_settings = new StandardSettings();
        add_action("\x61\x64\155\x69\x6e\x5f\x69\156\151\x74", array($this, "\x6d\157\x5f\157\141\165\164\x68\137\x63\154\x69\145\156\x74\137\160\162\x65\x6d\151\x75\155\x5f\163\145\x74\x74\x69\156\x67\163"));
    }
    public function mo_oauth_client_premium_settings()
    {
        $K6 = new SignInSettingsSettings();
        $a6 = new AppSettings();
        $a6->save_app_settings();
        $a6->save_advanced_grant_settings();
        $K6->mo_oauth_save_settings();
    }
}
