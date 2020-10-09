<?php


namespace MoOauthClient\Backup;

use MoOauthClient\App;
use MoOauthClient\Config;
class BackupHandler
{
    private $plugin_config;
    private $apps_list;
    public static function restore_settings($N6 = '')
    {
        if (!(!is_array($N6) || empty($N6))) {
            goto Pk;
        }
        return false;
        Pk:
        $me = false;
        $wT = isset($N6["\x70\x6c\x75\147\151\156\x5f\143\157\156\x66\x69\x67"]) ? $N6["\x70\154\x75\x67\x69\x6e\137\143\157\156\146\151\147"] : false;
        $cy = isset($N6["\x61\160\x70\x5f\x63\x6f\156\146\151\x67\x73"]) ? $N6["\141\x70\160\137\143\x6f\x6e\146\x69\147\163"] : false;
        if (!$wT) {
            goto ld;
        }
        $me = self::restore_plugin_config($wT);
        ld:
        if (!$cy) {
            goto DD;
        }
        return $me && self::restore_apps_config($cy);
        DD:
        return false;
    }
    private static function restore_plugin_config($wT)
    {
        global $Sk;
        if (!empty($wT)) {
            goto t9;
        }
        return false;
        t9:
        $jc = new Config($wT);
        if (empty($jc)) {
            goto Ms;
        }
        $Sk->mo_oauth_client_update_option("\x6d\157\x5f\157\x61\x75\164\x68\137\143\154\x69\x65\x6e\164\137\143\x6f\156\146\x69\147", $jc);
        return true;
        Ms:
        return false;
    }
    private static function restore_apps_config($cy)
    {
        global $Sk;
        if (!(!is_array($cy) && empty($cy))) {
            goto ir;
        }
        return false;
        ir:
        $jy = array();
        foreach ($cy as $cZ => $h7) {
            $U3 = new App($h7);
            $jy[$cZ] = $U3;
            ug:
        }
        oq:
        $Sk->mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\141\165\x74\x68\137\x61\x70\x70\x73\137\154\x69\163\x74", $jy);
        return true;
    }
    public static function get_backup_json()
    {
        global $Sk;
        $Yc = $Sk->export_plugin_config();
        return json_encode($Yc, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}
