<?php


namespace MoOauthClient\Backup;

use MoOauthClient\App;
class EnvVarResolver
{
    public static function resolve_var($qi, $sh)
    {
        switch ($qi) {
            case "\x6d\157\x5f\x6f\x61\x75\164\x68\x5f\141\160\x70\163\137\154\x69\x73\x74":
                $sh = self::resolve_apps_list($sh);
                goto My;
            default:
                goto My;
        }
        Sl:
        My:
        return $sh;
    }
    private static function resolve_apps_list($sh)
    {
        if (!is_array($sh)) {
            goto RI;
        }
        return $sh;
        RI:
        $sh = json_decode($sh, true);
        if (!(json_last_error() !== JSON_ERROR_NONE)) {
            goto cM;
        }
        return array();
        cM:
        $KR = array();
        foreach ($sh as $cZ => $h7) {
            if (!$h7 instanceof App) {
                goto RZ;
            }
            $KR[$cZ] = $h7;
            goto QN;
            RZ:
            if (!(!isset($h7["\143\154\x69\x65\x6e\x74\x5f\x69\x64"]) || empty($h7["\x63\x6c\151\x65\156\164\x5f\151\144"]))) {
                goto zs;
            }
            $h7["\143\154\x69\x65\x6e\x74\137\151\144"] = isset($h7["\143\x6c\151\x65\156\164\x69\x64"]) ? $h7["\x63\154\x69\145\x6e\x74\x69\x64"] : '';
            zs:
            if (!(!isset($h7["\x63\x6c\151\145\x6e\x74\137\163\x65\x63\x72\145\x74"]) || empty($h7["\x63\154\151\145\156\164\x5f\x73\x65\143\x72\145\x74"]))) {
                goto Yj;
            }
            $h7["\x63\154\x69\x65\156\164\137\x73\145\x63\162\145\164"] = isset($h7["\143\154\151\x65\156\164\x73\x65\143\162\x65\x74"]) ? $h7["\x63\154\x69\x65\x6e\x74\x73\145\143\x72\x65\164"] : '';
            Yj:
            unset($h7["\x63\x6c\x69\145\x6e\164\x69\x64"]);
            unset($h7["\x63\154\x69\x65\156\164\163\145\x63\x72\145\164"]);
            $U3 = new App();
            $U3->migrate_app($h7, $cZ);
            $KR[$cZ] = $U3;
            QN:
        }
        iy:
        return $KR;
    }
}
