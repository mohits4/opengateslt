<?php


namespace MoOauthClient\Enterprise;

use MoOauthClient\App;
use MoOauthClient\Premium\AppSettings as PremiumAppSettings;
class AppSettings extends PremiumAppSettings
{
    public function save_grant_settings($post, $x5)
    {
        $x5 = parent::save_grant_settings($post, $x5);
        global $Sk;
        $x5["\x70\x6b\143\x65\x5f\146\x6c\157\167"] = isset($post["\160\x6b\x63\x65\137\146\154\x6f\167"]) ? 1 : 0;
        return $x5;
    }
}
