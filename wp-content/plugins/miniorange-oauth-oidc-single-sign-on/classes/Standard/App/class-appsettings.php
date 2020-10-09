<?php


namespace MoOauthClient\Standard;

use MoOauthClient\App;
use MoOauthClient\Free\AppSettings as FreeAppSettings;
class AppSettings extends FreeAppSettings
{
    public function change_app_settings($post, $x5)
    {
        $x5 = parent::change_app_settings($post, $x5);
        $x5["\x64\x69\163\160\154\x61\x79\x61\x70\x70\x6e\141\155\x65"] = isset($post["\155\157\x5f\x6f\141\x75\x74\x68\137\144\151\163\160\154\x61\171\x5f\x61\160\160\x5f\x6e\141\x6d\145"]) ? trim(stripslashes($post["\155\157\137\157\x61\165\x74\x68\x5f\144\151\163\x70\154\x61\171\137\x61\x70\160\x5f\156\141\x6d\x65"])) : '';
        return $x5;
    }
    public function change_attribute_mapping($post, $x5)
    {
        $x5 = parent::change_attribute_mapping($post, $x5);
        $x5["\x65\155\x61\151\x6c\137\x61\x74\164\162"] = isset($post["\155\x6f\x5f\157\141\165\x74\x68\x5f\145\x6d\141\151\154\137\141\164\164\x72"]) ? stripslashes($post["\155\157\137\x6f\x61\x75\164\x68\137\x65\x6d\x61\151\154\x5f\x61\x74\x74\162"]) : '';
        $x5["\146\x69\x72\163\164\x6e\141\x6d\x65\x5f\141\x74\x74\x72"] = isset($post["\x6d\x6f\137\x6f\x61\x75\164\x68\137\146\151\x72\x73\x74\x6e\x61\x6d\145\137\x61\164\x74\162"]) ? trim(stripslashes($post["\x6d\157\137\x6f\141\x75\x74\x68\x5f\146\x69\162\x73\164\156\x61\x6d\145\137\x61\164\164\162"])) : '';
        $x5["\154\141\x73\164\x6e\x61\x6d\145\137\x61\164\x74\162"] = isset($post["\x6d\157\137\x6f\141\x75\x74\x68\137\x6c\141\163\x74\x6e\x61\155\x65\x5f\141\x74\x74\162"]) ? trim(stripslashes($post["\x6d\x6f\x5f\157\141\165\x74\150\137\x6c\141\x73\x74\x6e\x61\x6d\145\137\141\x74\164\162"])) : '';
        $x5["\x64\151\x73\x70\154\x61\x79\137\x61\164\164\162"] = isset($post["\x6f\x61\165\x74\150\x5f\143\x6c\151\x65\156\164\137\x61\x6d\x5f\x64\x69\163\x70\x6c\x61\x79\137\x6e\141\155\x65"]) ? trim(stripslashes($post["\157\141\x75\164\150\137\x63\x6c\x69\x65\156\164\x5f\141\155\137\144\151\163\160\x6c\x61\171\x5f\x6e\141\155\145"])) : '';
        return $x5;
    }
}
