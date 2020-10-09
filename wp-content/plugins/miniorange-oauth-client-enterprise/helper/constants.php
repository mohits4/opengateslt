<?php


class Mo_Oauth_Constants
{
    const SUCCESS = "\x73\x75\x63\143\145\163\x73";
    const FAILED = "\106\x61\x69\x6c\x65\x64";
    const USER_TRANSCATIONS_TABLE = "\167\160\x6e\163\x5f\164\x72\141\156\x73\x61\x63\x74\x69\157\x6e\x73";
    public static function failure($Ei = '')
    {
        switch ($Ei) {
            case "\x65\x6d\x61\151\x6c":
                return Mo_Oauth_Constants::FAILED . "\x20\x3a\x20\x49\156\x76\x61\x69\154\144\40\145\x6d\x61\151\154";
                goto UeV;
            case "\x75\x73\145\162\156\141\x6d\145":
                return Mo_Oauth_Constants::FAILED . "\40\72\40\x49\156\166\x61\154\x69\x64\40\x75\x73\145\x72\x6e\141\155\x65";
                goto UeV;
            case "\x66\x69\162\163\x74\137\156\141\155\x65":
                return Mo_Oauth_Constants::FAILED . "\40\x3a\40\111\x6e\166\141\x6c\x69\144\40\146\x69\x72\x73\164\137\156\x61\x6d\145";
                goto UeV;
            case "\162\145\x67\151\163\164\x72\141\x74\151\x6f\156":
                return Mo_Oauth_Constants::FAILED . "\x3a\40\111\x6e\x76\x61\x6c\151\x64\x20\162\145\147\151\x73\x74\x72\141\164\151\x6f\x6e";
                goto UeV;
            default:
                return Mo_Oauth_Constants::FAILED;
                goto UeV;
        }
        RGf:
        UeV:
    }
}
?>
