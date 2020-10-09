<?php


namespace MoOauthClient\Enterprise;

class UserAnalyticsDBOps
{
    const USER_TRANSACTIONS_TABLE = "\167\160\156\x73\x5f\x74\162\141\156\163\141\x63\x74\151\x6f\x6e\x73";
    public function __construct()
    {
        $this->make_table_if_not_exists();
        $this->add_col_if_not_exists(self::USER_TRANSACTIONS_TABLE, "\145\155\141\151\154");
        $this->add_col_if_not_exists(self::USER_TRANSACTIONS_TABLE, "\x63\154\x69\145\156\x74\x69\160");
        $this->add_col_if_not_exists(self::USER_TRANSACTIONS_TABLE, "\x6e\x61\166\151\x67\141\164\151\x6f\156\x75\162\154");
    }
    private function make_table_if_not_exists()
    {
        global $wpdb;
        $PF = "\x43\122\x45\x41\124\x45\x20\x54\101\102\x4c\x45\x20\111\106\x20\116\117\124\x20\105\x58\x49\123\x54\123\x20" . $wpdb->base_prefix . self::USER_TRANSACTIONS_TABLE . "\x20\x28\15\xa\11\11\11\140\151\x64\140\40\142\151\147\x69\x6e\164\40\x4e\x4f\124\40\116\125\114\114\x20\101\125\x54\117\x5f\x49\x4e\x43\122\x45\x4d\105\x4e\124\x2c\40\40\x60\165\163\145\x72\156\x61\155\145\140\x20\x6d\x65\144\151\165\x6d\x74\145\x78\x74\40\x4e\117\x54\40\116\125\114\114\40\x2c\x60\163\x74\x61\x74\165\x73\x60\x20\x6d\x65\144\151\x75\x6d\x74\145\x78\x74\x20\116\117\124\x20\x4e\x55\x4c\x4c\40\54\140\141\x70\x70\x6e\x61\x6d\x65\140\40\155\x65\144\151\x75\x6d\164\145\x78\164\40\x4e\x4f\124\40\x4e\125\114\114\x2c\x20\140\145\155\141\151\154\140\40\155\145\144\151\165\155\x74\145\x78\164\x20\116\x4f\124\40\x4e\x55\114\x4c\54\x20\x60\x63\154\x69\145\156\x74\151\160\140\x20\155\145\144\151\x75\x6d\164\145\170\164\40\116\117\124\40\116\125\114\114\54\40\x60\x6e\x61\x76\151\x67\x61\x74\x69\157\x6e\x75\162\x6c\140\40\x6d\x65\144\151\x75\x6d\x74\x65\170\164\x20\116\x4f\124\40\x4e\x55\x4c\x4c\x2c\40\140\x63\162\145\141\164\145\x64\137\164\151\x6d\145\x73\x74\141\x6d\160\x60\x20\x54\111\115\105\x53\x54\101\115\x50\x20\x44\x45\106\x41\x55\114\124\40\103\125\x52\x52\x45\x4e\x54\137\124\x49\x4d\x45\x53\124\x41\115\120\54\x20\x55\116\111\121\x55\105\40\113\105\x59\40\x69\144\x20\50\151\144\x29\51\73";
        require_once ABSPATH . "\x77\160\x2d\141\x64\x6d\x69\156\57\151\x6e\143\154\165\x64\145\x73\x2f\165\x70\x67\162\x61\144\x65\x2e\x70\150\160";
        dbDelta($PF);
    }
    public function check_col_exists($zo = '', $r8 = '')
    {
        if (!('' === $zo || '' === $r8)) {
            goto qh;
        }
        return false;
        qh:
        global $wpdb;
        $J5 = $wpdb->get_results($wpdb->prepare("\123\x45\114\x45\103\124\x20\52\x20\106\x52\x4f\115\x20\111\116\x46\x4f\x52\115\x41\124\111\x4f\116\137\123\103\110\105\115\x41\x2e\103\x4f\x4c\x55\115\x4e\123\40\x57\110\x45\x52\x45\40\x54\x41\102\x4c\x45\137\x53\103\x48\105\115\x41\x20\75\x20\x25\163\x20\101\116\104\40\124\101\x42\114\x45\x5f\116\101\x4d\105\40\x3d\x20\x25\163\40\x41\116\104\x20\103\x4f\114\125\115\116\137\116\x41\115\x45\x20\75\40\x25\x73\40", DB_NAME, $wpdb->base_prefix . $zo, $r8));
        if (empty($J5)) {
            goto Ys;
        }
        return true;
        Ys:
        return false;
    }
    public function add_col_if_not_exists($zo = '', $r8 = '', $SE = true)
    {
        $this->make_table_if_not_exists();
        if (!('' === $zo || '' === $r8)) {
            goto Ub;
        }
        return false;
        Ub:
        if (!$this->check_col_exists($zo, $r8)) {
            goto T9;
        }
        return true;
        T9:
        global $wpdb;
        $LO = $SE ? "\x4e\117\124\x20\116\x55\x4c\114" : '';
        $wpdb->query("\101\x4c\x54\105\x52\40\x54\x41\102\x4c\x45\x20" . $wpdb->base_prefix . self::USER_TRANSACTIONS_TABLE . "\40\101\x44\x44\x20" . $r8 . "\40\155\145\x64\151\x75\x6d\x74\145\x78\164\x20" . $LO);
    }
    private function get_all_transactions()
    {
        global $wpdb;
        $FV = $wpdb->get_results("\x53\105\114\105\103\124\x20\x75\x73\145\x72\156\141\155\145\54\40\163\x74\x61\164\x75\163\x20\54\141\x70\x70\156\x61\x6d\145\x20\x2c\x63\162\x65\141\164\145\x64\x5f\164\x69\155\145\x73\164\141\x6d\160\x2c\x20\x65\155\141\151\154\54\x20\143\154\151\145\x6e\x74\x69\160\54\x20\156\141\166\151\147\141\164\x69\157\x6e\x75\x72\x6c\40\106\x52\x4f\115\x20" . $wpdb->base_prefix . self::USER_TRANSACTIONS_TABLE);
        return $FV;
    }
    public function get_entries($zU = true)
    {
        $UZ = $this->get_all_transactions();
        if ($UZ) {
            goto rm;
        }
        return array();
        rm:
        if (!(true === $zU)) {
            goto H9;
        }
        return $UZ;
        H9:
        return array();
    }
    public function add_transact($zU = array(), $Qe = false)
    {
        if (!$Qe) {
            goto R2;
        }
        $this->add_to_wpdb();
        return true;
        R2:
        $ci = $this->add_to_wpdb($BL = isset($zU["\165\163\x65\162\x6e\x61\155\145"]) ? $zU["\x75\163\145\162\156\x61\x6d\145"] : "\55", $me = isset($zU["\163\164\141\x74\x75\163"]) ? $zU["\163\164\x61\164\x75\163"] : false, $iF = isset($zU["\x63\x6f\144\x65"]) ? $zU["\x63\157\x64\145"] : "\55", $nd = isset($zU["\141\160\160\x6c\151\x63\141\164\x69\x6f\156"]) ? $zU["\x61\160\x70\x6c\151\143\x61\164\x69\x6f\x6e"] : "\55", $nW = isset($zU["\x65\155\141\x69\x6c"]) ? $zU["\145\155\x61\151\154"] : "\x2d", $jF = isset($zU["\143\x6c\x69\145\x6e\164\x5f\151\160"]) ? $zU["\143\x6c\x69\x65\156\x74\137\x69\160"] : "\x2d", $b5 = isset($zU["\156\141\166\151\x67\141\164\151\x6f\156\165\162\x6c"]) ? $zU["\156\141\166\x69\147\x61\x74\x69\157\156\165\x72\x6c"] : "\x2d");
        return \boolval($ci);
    }
    private function add_to_wpdb($BL = '', $me = false, $iF = '', $nd = '', $nW = '', $jF = '', $b5 = '')
    {
        $RG = '';
        if (!('' === $iF && false === $me)) {
            goto vh;
        }
        $RG = "\x4e\x2f\x41";
        vh:
        $RG = $this->get_status_message($iF, $me);
        $zU = array("\x75\163\145\x72\156\x61\155\145" => isset($BL) && '' !== $BL ? $BL : "\x2d", "\x73\x74\141\164\165\163" => isset($RG) && '' !== $RG ? $RG : "\x2d", "\x61\160\x70\x6e\141\x6d\145" => isset($nd) && '' !== $nd ? $nd : "\55", "\145\155\x61\x69\154" => isset($nW) && '' !== $nW ? $nW : "\55", "\x63\x6c\151\145\x6e\164\151\160" => isset($jF) && '' !== $jF ? $jF : "\55", "\x6e\141\166\x69\x67\x61\164\x69\x6f\156\x75\x72\x6c" => isset($b5) && '' !== $b5 ? $b5 : "\x2d");
        global $wpdb;
        return $wpdb->insert($wpdb->base_prefix . self::USER_TRANSACTIONS_TABLE, $zU);
    }
    private function get_status_message($iF = '', $me = '')
    {
        if (!(true === $me)) {
            goto X3;
        }
        return "\123\x55\103\x43\105\x53\x53";
        X3:
        switch ($iF) {
            case "\105\115\x41\x49\114":
                return "\106\x41\x49\114\105\104\56\40\111\156\166\x61\x6c\151\x64\40\105\155\141\x69\154\40\122\x65\x63\145\x69\166\145\144\56";
            case "\125\116\101\x4d\105":
                return "\x46\x41\x49\x4c\x45\x44\56\40\x49\156\x76\x61\154\x69\x64\40\x55\163\145\x72\x6e\141\155\145\x20\122\x65\143\145\151\x65\166\x65\144\x2e";
            case "\x52\x45\107\111\123\x54\x52\101\124\x49\x4f\x4e\137\104\111\x53\x41\102\x4c\105\x44":
                return "\x46\x41\111\x4c\105\104\x2e\x20\122\145\147\151\x73\164\162\141\x74\x69\157\x6e\40\x64\151\x73\x61\x62\x6c\x65\x64\x2e";
            default:
                return "\x46\101\x49\114\x45\104";
        }
        Cr:
        Ft:
    }
    public function drop_table()
    {
        global $wpdb;
        if (!($wpdb->get_var("\123\x48\117\x57\x20\x54\101\102\114\105\x53\40\114\x49\113\x45\40\x27" . $wpdb->prefix . self::USER_TRANSACTIONS_TABLE . "\47") === $wpdb->prefix . self::USER_TRANSACTIONS_TABLE)) {
            goto ja;
        }
        $FI = $wpdb->get_results("\x44\122\117\x50\x20\x54\101\102\x4c\x45\x20" . $wpdb->prefix . self::USER_TRANSACTIONS_TABLE);
        ja:
    }
}
