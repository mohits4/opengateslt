<?php


class Mo_OAuth_User_Reports
{
    static function get_all_transactions()
    {
        global $wpdb;
        $KW = $wpdb->get_results("\123\x45\114\105\x43\x54\x20\165\163\145\162\156\x61\x6d\x65\54\x20\163\x74\141\164\x75\x73\40\x2c\x61\160\160\156\x61\155\x65\40\54\143\x72\145\141\164\145\144\x5f\x74\151\x6d\x65\163\164\x61\x6d\160\54\40\x65\x6d\141\x69\154\54\x20\143\x6c\x69\145\x6e\x74\x69\x70\x2c\40\156\x61\x76\151\147\x61\x74\151\157\156\x75\x72\x6c\40\x46\x52\117\115\x20" . $wpdb->prefix . Mo_Oauth_Constants::USER_TRANSCATIONS_TABLE);
        return $KW;
    }
    static function add_transactions($cS, $Gj, $rd, $jw, $ff, $da)
    {
        global $wpdb;
        if (!($cS == '')) {
            goto GVk;
        }
        $cS = "\55";
        GVk:
        $wpdb->insert($wpdb->prefix . Mo_Oauth_Constants::USER_TRANSCATIONS_TABLE, array("\165\x73\145\x72\156\x61\x6d\145" => $cS, "\x73\164\141\164\165\x73" => $Gj, "\141\x70\x70\156\x61\x6d\x65" => $rd, "\x65\x6d\x61\151\154" => $jw, "\x63\x6c\151\x65\x6e\x74\x69\x70" => $ff, "\156\x61\166\151\x67\141\164\151\157\x6e\x75\x72\x6c" => $da));
    }
}
?>
