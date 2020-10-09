<?php


namespace MoOauthClient\Premium;

class MappingHandler
{
    private $user_id = 0;
    private $app_config = array();
    private $group_name = '';
    private $is_new_user = false;
    public function __construct($Dg = 0, $h7 = array(), $gu = '', $i3 = false)
    {
        if (!(!array($h7) || empty($h7))) {
            goto qTd;
        }
        return;
        qTd:
        if (!user_can($Dg, "\x61\x64\155\x69\156\151\163\164\162\141\164\x6f\162")) {
            goto fPr;
        }
        return;
        fPr:
        $mv = is_array($gu) ? $gu : $this->get_group_array($gu);
        $this->group_name = $mv;
        $this->user_id = $Dg;
        $this->app_config = $h7;
        $this->is_new_user = $i3;
    }
    private function get_group_array($ie)
    {
        $Ix = json_decode($ie, true);
        return is_array($Ix) && json_last_error() === JSON_ERROR_NONE ? $Ix : explode("\x3b", $ie);
    }
    public function apply_custom_attribute_mapping($p4)
    {
        if (!(!isset($this->app_config["\x63\165\x73\x74\157\x6d\x5f\x61\164\164\162\163\x5f\155\141\160\x70\151\x6e\147"]) || empty($this->app_config["\x63\x75\x73\164\157\x6d\x5f\141\164\x74\x72\x73\137\x6d\141\160\x70\x69\156\x67"]))) {
            goto K3t;
        }
        return;
        K3t:
        global $Sk;
        $nH = -1;
        $cE = $this->app_config["\x63\x75\163\164\x6f\x6d\137\141\x74\x74\162\x73\137\155\x61\x70\x70\x69\x6e\147"];
        $EQ = array();
        foreach ($cE as $qi => $sh) {
            $cY = $Sk->getnestedattribute($p4, $sh);
            $EQ[$qi] = $cY;
            update_user_meta($this->user_id, $qi, $cY);
            QpK:
        }
        gNF:
        update_user_meta($this->user_id, "\x6d\157\x5f\x6f\141\165\164\x68\x5f\x63\165\163\164\x6f\x6d\137\141\x74\x74\x72\x69\142\x75\164\x65\x73", $EQ);
    }
    public function apply_role_mapping()
    {
        if (!(!$this->is_new_user && isset($this->app_config["\x6b\x65\x65\x70\x5f\145\170\151\x73\x74\x69\x6e\x67\137\x75\163\x65\162\137\x72\157\x6c\145\x73"]) && 1 === intval($this->app_config["\x6b\145\x65\160\137\x65\170\x69\163\x74\151\156\147\x5f\x75\x73\145\x72\137\162\x6f\154\145\163"]))) {
            goto YBn;
        }
        return;
        YBn:
        $dK = new \WP_User($this->user_id);
        $b0 = 0;
        $Om = isset($this->app_config["\x72\x6f\x6c\x65\137\155\x61\x70\160\151\x6e\x67\137\143\157\165\x6e\x74"]) ? intval($this->app_config["\162\x6f\x6c\145\137\x6d\x61\160\x70\151\x6e\x67\137\143\157\165\156\x74"]) : 0;
        $K0 = array();
        $nH = 1;
        nre:
        if (!($nH <= $Om)) {
            goto lCA;
        }
        $VI = isset($this->app_config["\137\155\141\160\x70\151\156\147\x5f\x6b\x65\171\x5f" . $nH]) ? $this->app_config["\x5f\155\x61\160\x70\x69\x6e\x67\137\x6b\x65\171\x5f" . $nH] : '';
        array_push($K0, $VI);
        foreach ($this->group_name as $Dp) {
            if (!(strtolower($Dp) === strtolower($VI))) {
                goto VtV;
            }
            $ag = isset($this->app_config["\137\155\141\x70\x70\151\x6e\147\x5f\166\x61\x6c\165\x65\x5f" . $nH]) ? $this->app_config["\137\155\x61\x70\x70\151\156\x67\137\x76\141\x6c\165\x65\137" . $nH] : '';
            if (!$ag) {
                goto szj;
            }
            if (!(0 === $b0)) {
                goto lK2;
            }
            $dK->set_role('');
            lK2:
            $dK->add_role($ag);
            $b0++;
            szj:
            VtV:
            N88:
        }
        m3i:
        xAX:
        $nH++;
        goto nre;
        lCA:
        if (!(0 === $b0 && isset($this->app_config["\x5f\x6d\x61\160\x70\x69\156\147\137\x76\141\154\165\145\137\x64\x65\146\x61\x75\154\164"]) && '' !== $this->app_config["\x5f\x6d\x61\x70\160\x69\x6e\147\x5f\166\x61\154\165\145\137\144\145\x66\141\165\154\x74"])) {
            goto fcb;
        }
        $dK->set_role($this->app_config["\137\x6d\141\160\160\x69\x6e\x67\137\166\x61\x6c\165\x65\137\144\145\146\x61\x75\154\164"]);
        fcb:
        $wd = 0;
        if (!(isset($this->app_config["\x72\x65\163\x74\x72\x69\x63\164\137\154\157\x67\x69\156\x5f\146\157\x72\137\x6d\141\160\160\145\x64\x5f\162\x6f\154\145\x73"]) && boolval($this->app_config["\x72\145\163\x74\x72\x69\143\164\137\154\x6f\147\x69\156\x5f\x66\157\x72\137\x6d\x61\x70\x70\145\144\137\162\x6f\154\x65\163"]))) {
            goto elX;
        }
        foreach ($this->group_name as $tm) {
            if (!in_array($tm, $K0, true)) {
                goto Rzx;
            }
            $wd = 1;
            Rzx:
            HRv:
        }
        ccg:
        if (!($wd !== 1)) {
            goto Dcg;
        }
        require_once ABSPATH . "\167\x70\55\x61\x64\155\151\x6e\x2f\x69\156\143\154\x75\144\145\x73\57\x75\x73\x65\162\56\160\150\x70";
        \wp_delete_user($this->user_id);
        wp_die("\131\157\165\40\x64\157\40\156\157\164\40\x68\141\166\x65\40\160\145\x72\155\x69\x73\x73\151\157\x6e\x73\x20\x74\x6f\x20\x6c\x6f\147\x69\156\x20\x77\x69\x74\150\40\171\157\x75\162\x20\143\165\162\162\x65\156\164\x20\162\157\x6c\145\x73\x2e\x20\120\x6c\145\141\x73\x65\x20\x63\x6f\x6e\x74\141\x63\164\x20\164\150\145\x20\101\x64\155\x69\156\x69\x73\164\162\141\164\157\162\56");
        Dcg:
        elX:
    }
}
