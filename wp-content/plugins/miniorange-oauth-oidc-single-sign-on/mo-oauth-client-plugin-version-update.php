<?php


require_once dirname(__FILE__) . "\x2f\x69\156\143\x6c\165\144\x65\163\57\154\x69\142\x2f\155\157\x2d\x6f\x70\x74\151\157\156\163\55\145\x6e\165\155\56\160\150\160";
add_action("\x61\x64\155\151\156\137\151\156\x69\164", "\x6d\157\137\x6f\141\x75\x74\150\137\x63\x6c\151\x65\156\164\x5f\165\160\x64\141\x74\145");
class mo_oauth_client_update_framework
{
    private $current_version;
    private $update_path;
    private $plugin_slug;
    private $slug;
    private $plugin_file;
    private $new_version_changelog;
    public function __construct($V_, $rI = "\57", $g1 = "\57")
    {
        $this->current_version = $V_;
        $this->update_path = $rI;
        $this->plugin_slug = $g1;
        list($wR, $Lp) = explode("\x2f", $g1);
        $this->slug = $wR;
        $this->plugin_file = $Lp;
        add_filter("\160\x72\x65\x5f\x73\x65\x74\x5f\x73\151\164\x65\x5f\x74\162\141\156\163\x69\x65\x6e\x74\137\165\x70\x64\x61\x74\145\x5f\160\x6c\x75\x67\x69\156\x73", array(&$this, "\x6d\157\137\x6f\x61\165\x74\x68\x5f\x63\150\x65\143\153\x5f\x75\160\x64\x61\164\x65"));
        add_filter("\x70\x6c\165\147\151\156\x73\x5f\x61\160\151", array(&$this, "\155\157\137\x6f\141\x75\164\150\x5f\x63\x6c\x69\145\156\164\137\x63\150\x65\x63\153\137\151\156\146\x6f"), 10, 3);
    }
    public function mo_oauth_check_update($dF)
    {
        if (!empty($dF->checked)) {
            goto WQ;
        }
        return $dF;
        WQ:
        $d_ = $this->getRemote();
        if ($d_["\x73\164\x61\164\x75\x73"] == "\x53\125\x43\103\x45\x53\123") {
            goto RN;
        }
        if (!($d_["\163\x74\x61\164\165\x73"] == "\104\x45\x4e\111\105\x44")) {
            goto uL;
        }
        if (!version_compare($this->current_version, $d_["\156\x65\167\x56\145\x72\x73\151\157\156"], "\x3c")) {
            goto yj;
        }
        $FW = new stdClass();
        $FW->slug = $this->slug;
        $FW->new_version = $d_["\x6e\x65\x77\126\x65\162\x73\x69\157\156"];
        $FW->url = "\x68\164\164\x70\x73\72\57\x2f\155\151\x6e\x69\x6f\162\141\156\147\x65\56\143\157\155";
        $FW->plugin = $this->plugin_slug;
        $FW->tested = $d_["\143\x6d\x73\x43\x6f\x6d\x70\141\x74\151\x62\x69\x6c\151\164\x79\x56\145\162\x73\151\157\156"];
        $FW->icons = array("\61\170" => $d_["\151\x63\x6f\x6e"]);
        $FW->status_code = $d_["\x73\164\141\164\x75\163"];
        $FW->license_information = $d_["\154\151\x63\145\156\163\145\111\x6e\x66\157\162\155\x61\164\151\157\156"];
        update_option("\155\157\137\x6f\141\x75\x74\150\x5f\154\151\x63\x65\x6e\163\x65\x5f\145\x78\160\x69\162\x79\x5f\x64\x61\x74\145", $d_["\154\151\x63\x65\x6e\145\105\x78\160\151\162\171\x44\x61\x74\x65"]);
        $dF->response[$this->plugin_slug] = $FW;
        $oS = true;
        update_option("\x6d\x6f\137\157\x61\165\164\x68\137\x73\x6c\x65", $oS);
        set_transient("\165\x70\x64\x61\164\145\137\x70\154\x75\147\151\x6e\x73", $dF);
        return $dF;
        yj:
        uL:
        goto rW;
        RN:
        $oS = false;
        update_option("\155\157\137\x6f\x61\165\164\x68\x5f\x73\x6c\x65", $oS);
        if (!version_compare($this->current_version, $d_["\156\x65\167\126\x65\x72\163\x69\157\x6e"], "\x3c")) {
            goto J_;
        }
        ini_set("\x6d\x61\170\137\145\170\145\x63\165\164\151\157\156\137\164\x69\155\145", 600);
        ini_set("\155\145\155\157\162\171\137\154\x69\x6d\151\x74", "\61\60\62\x34\115");
        $rC = plugin_dir_path(__FILE__);
        $rC = rtrim($rC, "\x2f");
        $rC = rtrim($rC, "\134");
        $Yc = $rC . "\55\x62\x61\x63\153\x75\160\55" . $this->current_version . "\56\172\x69\160";
        $this->mo_oauth_client_create_backup_dir();
        $RT = $this->getAuthToken();
        $Ue = round(microtime(true) * 1000);
        $Ue = number_format($Ue, 0, '', '');
        $FW = new stdClass();
        $FW->slug = $this->slug;
        $FW->new_version = $d_["\x6e\x65\x77\x56\x65\x72\163\x69\157\x6e"];
        $FW->url = "\150\164\x74\x70\x73\x3a\x2f\57\x6d\x69\x6e\151\x6f\x72\141\x6e\x67\x65\x2e\143\x6f\x6d";
        $FW->plugin = $this->plugin_slug;
        $FW->package = mo_oauth_client_options_plugin_constants::HOSTNAME . "\57\155\x6f\141\x73\x2f\x70\x6c\165\x67\151\x6e\57\144\x6f\x77\x6e\x6c\x6f\x61\144\x2d\165\160\x64\x61\x74\145\77\160\154\x75\147\151\156\123\x6c\165\x67\x3d" . $this->plugin_slug . "\46\x6c\151\143\x65\156\163\x65\120\154\141\x6e\x4e\141\x6d\145\75" . mo_oauth_client_options_plugin_constants::LICENSE_PLAN_NAME . "\46\143\x75\163\x74\x6f\155\145\162\x49\144\x3d" . get_option("\x6d\x6f\137\x6f\x61\165\164\x68\137\141\x64\x6d\151\x6e\x5f\x63\x75\163\164\x6f\155\x65\x72\x5f\x6b\x65\171") . "\x26\x6c\x69\x63\145\x6e\x73\x65\x54\171\160\145\75" . mo_oauth_client_options_plugin_constants::LICENSE_TYPE . "\46\141\x75\164\x68\x54\157\x6b\145\156\75" . $RT . "\x26\157\x74\x70\124\157\153\145\156\x3d" . $Ue;
        $FW->tested = $d_["\143\x6d\x73\103\157\x6d\160\141\x74\x69\x62\151\154\x69\164\x79\x56\x65\x72\x73\x69\x6f\156"];
        $FW->icons = array("\61\x78" => $d_["\x69\143\x6f\156"]);
        $FW->new_version_changelog = $d_["\143\x68\x61\x6e\x67\145\x6c\x6f\x67"];
        $FW->status_code = $d_["\x73\164\x61\164\165\163"];
        update_option("\x6d\157\x5f\157\141\x75\x74\x68\x5f\154\x69\x63\x65\x6e\163\145\137\x65\x78\160\151\162\x79\x5f\144\141\164\145", $d_["\154\151\x63\x65\x6e\145\x45\x78\x70\151\162\x79\104\x61\164\145"]);
        $dF->response[$this->plugin_slug] = $FW;
        set_transient("\165\160\x64\141\x74\145\x5f\x70\x6c\x75\147\151\156\x73", $dF);
        return $dF;
        J_:
        rW:
        return $dF;
    }
    public function mo_oauth_client_check_info($FW, $Df, $bW)
    {
        if (!(($Df == "\x71\x75\x65\162\171\x5f\x70\154\x75\x67\x69\x6e\x73" || $Df == "\160\154\x75\x67\151\x6e\137\151\x6e\146\157\162\155\141\x74\151\x6f\x6e") && isset($bW->slug) && ($bW->slug === $this->slug || $bW->slug === $this->plugin_file))) {
            goto up;
        }
        $bT = $this->getRemote();
        remove_filter("\160\x6c\x75\x67\x69\156\163\137\x61\x70\x69", array($this, "\155\x6f\137\157\141\x75\164\150\x5f\143\x6c\x69\145\156\164\x5f\x63\150\x65\x63\153\x5f\x69\156\x66\x6f"));
        $Lz = plugins_api("\160\x6c\x75\x67\151\156\x5f\x69\156\146\157\162\x6d\x61\x74\x69\157\156", array("\163\154\x75\x67" => "\155\151\156\x69\157\162\141\156\x67\x65\55\x6c\157\x67\151\156\x2d\x77\x69\164\150\55\145\x76\x65\x2d\x6f\156\154\151\156\145\55\x67\157\x6f\147\x6c\145\55\x66\x61\143\145\142\x6f\157\153", "\146\x69\145\154\x64\163" => array("\x61\143\x74\151\166\x65\x5f\x69\156\163\x74\x61\x6c\154\163" => true, "\156\165\x6d\x5f\162\141\x74\151\156\147\163" => true, "\x72\x61\164\x69\x6e\147" => true, "\162\141\x74\151\156\x67\x73" => true, "\x72\x65\166\x69\x65\167\163" => true)));
        $pb = false;
        $wk = false;
        $Gx = false;
        $fk = false;
        $r2 = '';
        $eW = '';
        if (is_wp_error($Lz)) {
            goto yO;
        }
        $pb = $Lz->active_installs;
        $wk = $Lz->rating;
        $Gx = $Lz->ratings;
        $fk = $Lz->num_ratings;
        $r2 = $Lz->sections["\x64\x65\163\x63\162\x69\x70\164\x69\157\156"];
        $eW = $Lz->sections["\162\x65\x76\x69\x65\x77\163"];
        yO:
        add_filter("\x70\x6c\165\147\151\x6e\163\137\141\x70\151", array($this, "\x6d\x6f\137\x6f\141\x75\164\150\x5f\x63\x6c\x69\x65\x6e\x74\137\143\x68\x65\143\153\137\151\x6e\146\157"), 10, 3);
        if ($bT["\163\x74\141\164\x75\163"] == "\123\x55\103\x43\x45\x53\x53") {
            goto va;
        }
        if (!($bT["\163\x74\141\164\165\x73"] == "\104\x45\116\111\x45\x44")) {
            goto o0;
        }
        if (!version_compare($this->current_version, $bT["\156\145\167\126\x65\162\163\x69\x6f\156"], "\74")) {
            goto R8;
        }
        $ih = new stdClass();
        $ih->slug = $this->slug;
        $ih->plugin = $this->plugin_slug;
        $ih->name = $bT["\160\154\x75\x67\x69\156\x4e\x61\x6d\145"];
        $ih->version = $bT["\x6e\x65\x77\126\x65\x72\163\x69\x6f\156"];
        $ih->new_version = $bT["\156\145\167\126\x65\x72\163\x69\157\x6e"];
        $ih->tested = $bT["\143\x6d\x73\x43\157\x6d\160\x61\164\x69\142\151\154\x69\164\171\126\x65\x72\x73\151\157\156"];
        $ih->requires = $bT["\143\x6d\x73\x4d\x69\156\x56\x65\162\163\x69\157\156"];
        $ih->requires_php = $bT["\x70\x68\x70\x4d\151\x6e\126\145\162\163\151\x6f\x6e"];
        $ih->compatibility = array($bT["\x63\155\163\x43\x6f\x6d\x70\141\164\151\x62\151\154\x69\x74\171\x56\145\162\163\x69\x6f\156"]);
        $ih->url = $bT["\143\155\x73\120\154\x75\x67\151\156\125\x72\x6c"];
        $ih->author = $bT["\x70\x6c\x75\147\x69\156\101\165\x74\150\x6f\x72"];
        $ih->author_profile = $bT["\x70\154\x75\x67\x69\x6e\101\165\x74\x68\x6f\x72\x50\162\x6f\x66\x69\x6c\x65"];
        $ih->last_updated = $bT["\154\141\x73\164\x55\160\x64\x61\164\145\x64"];
        $ih->banners = array("\154\x6f\167" => $bT["\142\x61\x6e\x6e\145\162"]);
        $ih->icons = array("\x31\x78" => $bT["\x69\143\x6f\156"]);
        $ih->sections = array("\143\150\x61\x6e\x67\x65\x6c\157\x67" => $bT["\143\150\141\156\x67\x65\154\157\x67"], "\154\x69\143\x65\156\x73\145\x5f\x69\x6e\x66\157\x72\x6d\x61\x74\151\x6f\156" => _x($bT["\x6c\151\143\145\x6e\x73\x65\x49\x6e\x66\x6f\162\x6d\x61\164\x69\x6f\156"], "\x50\154\165\x67\x69\156\40\x69\x6e\x73\x74\x61\x6c\154\145\162\40\x73\x65\x63\164\151\157\156\x20\164\151\164\x6c\145"), "\144\145\163\143\x72\x69\x70\164\151\157\156" => $r2, "\x52\145\166\151\145\x77\x73" => $eW);
        $ih->external = '';
        $ih->homepage = $bT["\150\157\155\x65\160\141\x67\x65"];
        $ih->reviews = true;
        $ih->active_installs = $pb;
        $ih->rating = $wk;
        $ih->ratings = $Gx;
        $ih->num_ratings = $fk;
        update_option("\155\157\137\x6f\141\x75\164\150\x5f\x6c\151\143\x65\156\x73\145\x5f\x65\170\160\x69\162\x79\x5f\144\x61\x74\x65", $bT["\x6c\151\143\145\x6e\x65\105\170\160\151\162\x79\104\x61\164\x65"]);
        return $ih;
        R8:
        o0:
        goto II;
        va:
        $oS = false;
        update_option("\155\157\137\157\141\x75\x74\150\x5f\x73\x6c\145", $oS);
        if (!version_compare($this->current_version, $bT["\x6e\145\167\x56\145\x72\163\151\x6f\x6e"], "\74\75")) {
            goto lW;
        }
        $ih = new stdClass();
        $ih->slug = $this->slug;
        $ih->name = $bT["\160\x6c\165\x67\x69\x6e\x4e\141\155\145"];
        $ih->plugin = $this->plugin_slug;
        $ih->version = $bT["\156\x65\x77\126\x65\162\x73\151\x6f\x6e"];
        $ih->new_version = $bT["\x6e\x65\x77\x56\x65\162\163\151\x6f\x6e"];
        $ih->tested = $bT["\143\155\163\x43\x6f\x6d\x70\141\x74\151\142\x69\154\x69\164\171\x56\145\162\x73\x69\x6f\156"];
        $ih->requires = $bT["\143\x6d\163\115\x69\156\126\145\x72\x73\151\157\156"];
        $ih->requires_php = $bT["\x70\x68\x70\115\151\156\x56\145\x72\x73\151\157\x6e"];
        $ih->compatibility = array($bT["\143\x6d\x73\103\157\x6d\x70\x61\164\151\142\151\x6c\x69\x74\171\x56\145\x72\x73\151\157\156"]);
        $ih->url = $bT["\143\155\163\x50\x6c\x75\147\151\x6e\125\162\154"];
        $ih->author = $bT["\x70\x6c\165\147\151\156\101\x75\164\x68\157\x72"];
        $ih->author_profile = $bT["\x70\x6c\165\x67\x69\156\101\165\x74\x68\157\162\120\x72\157\x66\x69\154\x65"];
        $ih->last_updated = $bT["\154\141\163\164\125\160\144\141\164\145\144"];
        $ih->banners = array("\154\x6f\x77" => $bT["\x62\141\x6e\x6e\145\162"]);
        $ih->icons = array("\x31\170" => $bT["\151\143\157\156"]);
        $ih->sections = array("\x63\x68\141\156\x67\145\154\x6f\x67" => $bT["\143\x68\141\156\147\x65\x6c\x6f\x67"], "\x6c\151\x63\145\x6e\163\145\x5f\x69\x6e\x66\157\x72\x6d\x61\x74\x69\157\156" => _x($bT["\154\x69\143\x65\156\163\x65\x49\156\146\157\x72\155\141\164\151\x6f\156"], "\x50\154\x75\x67\x69\x6e\x20\151\x6e\x73\x74\141\x6c\154\x65\x72\x20\x73\145\143\164\151\157\156\x20\x74\x69\x74\154\145"), "\144\145\x73\143\162\x69\160\x74\x69\x6f\x6e" => $r2, "\x52\145\x76\151\145\167\x73" => $eW);
        $RT = $this->getAuthToken();
        $Ue = round(microtime(true) * 1000);
        $Ue = number_format($Ue, 0, '', '');
        $ih->download_link = mo_oauth_client_options_plugin_constants::HOSTNAME . "\x2f\x6d\157\141\x73\57\160\x6c\x75\x67\x69\x6e\x2f\144\157\x77\156\x6c\x6f\x61\144\x2d\x75\160\x64\141\x74\x65\x3f\160\154\165\x67\151\x6e\123\x6c\165\x67\x3d" . $this->plugin_slug . "\x26\154\151\143\145\156\x73\145\x50\154\141\156\x4e\x61\155\x65\75" . mo_oauth_client_options_plugin_constants::LICENSE_PLAN_NAME . "\46\x63\165\163\164\157\155\x65\162\111\x64\x3d" . get_option("\155\157\x5f\157\141\x75\164\x68\137\x61\144\155\x69\x6e\137\143\x75\x73\x74\x6f\x6d\x65\x72\137\153\145\171") . "\46\154\151\x63\x65\x6e\x73\145\124\171\160\x65\x3d" . mo_oauth_client_options_plugin_constants::LICENSE_TYPE . "\x26\x61\x75\164\x68\124\157\153\x65\x6e\x3d" . $RT . "\46\x6f\164\160\124\x6f\153\145\156\75" . $Ue;
        $ih->package = $ih->download_link;
        $ih->external = '';
        $ih->homepage = $bT["\x68\157\155\x65\x70\x61\147\145"];
        $ih->reviews = true;
        $ih->active_installs = $pb;
        $ih->rating = $wk;
        $ih->ratings = $Gx;
        $ih->num_ratings = $fk;
        update_option("\x6d\x6f\x5f\157\141\165\x74\150\137\154\151\143\145\156\163\145\x5f\x65\x78\160\151\162\171\137\x64\141\164\x65", $bT["\154\151\143\145\x6e\145\x45\170\160\151\x72\171\104\141\x74\145"]);
        return $ih;
        lW:
        II:
        up:
        return $FW;
    }
    private function getRemote()
    {
        $uc = get_option("\x6d\157\x5f\157\141\x75\x74\x68\137\141\x64\155\x69\156\137\x63\165\163\x74\x6f\155\x65\x72\137\x6b\145\x79");
        $KZ = get_option("\x6d\x6f\137\157\x61\165\164\x68\137\141\144\155\x69\x6e\137\x61\x70\151\137\153\x65\171");
        $Ue = round(microtime(true) * 1000);
        $Z3 = $uc . number_format($Ue, 0, '', '') . $KZ;
        $RT = hash("\163\x68\141\65\61\62", $Z3);
        $Ue = number_format($Ue, 0, '', '');
        $wn = array("\160\154\x75\x67\x69\156\x53\154\x75\147" => $this->plugin_slug, "\154\151\x63\145\156\x73\145\120\x6c\141\156\x4e\x61\155\145" => mo_oauth_client_options_plugin_constants::LICENSE_PLAN_NAME, "\x63\x75\163\164\x6f\x6d\145\162\111\x64" => $uc, "\154\x69\143\x65\156\163\x65\124\171\160\x65" => mo_oauth_client_options_plugin_constants::LICENSE_TYPE);
        $CF = array("\150\145\141\x64\x65\162\163" => array("\x43\157\156\x74\145\156\164\55\124\x79\160\x65" => "\x61\x70\160\x6c\151\143\141\164\x69\x6f\156\x2f\x6a\163\x6f\156\x3b\40\143\x68\141\x72\163\145\164\75\165\x74\x66\x2d\x38", "\x43\165\163\x74\x6f\155\145\162\x2d\113\x65\171" => $uc, "\124\x69\155\145\163\x74\141\155\x70" => $Ue, "\x41\165\164\150\x6f\162\x69\x7a\141\164\x69\x6f\156" => $RT), "\x62\157\x64\x79" => json_encode($wn), "\155\x65\164\x68\x6f\x64" => "\120\117\x53\124", "\144\141\x74\x61\x5f\146\157\x72\155\x61\x74" => "\142\x6f\x64\171", "\x73\163\x6c\x76\145\162\151\146\x79" => false);
        $n4 = wp_remote_post($this->update_path, $CF);
        if (!(!is_wp_error($n4) || wp_remote_retrieve_response_code($n4) === 200)) {
            goto tb;
        }
        $w2 = json_decode($n4["\x62\x6f\144\171"], true);
        return $w2;
        tb:
        return false;
    }
    private function getAuthToken()
    {
        $uc = get_option("\x6d\157\137\157\141\x75\x74\x68\x5f\x61\144\155\151\156\137\x63\165\x73\164\157\155\145\x72\x5f\153\145\x79");
        $KZ = get_option("\x6d\x6f\137\x6f\x61\165\164\150\137\141\144\155\x69\x6e\137\x61\x70\151\x5f\153\x65\x79");
        $Ue = round(microtime(true) * 1000);
        $Z3 = $uc . number_format($Ue, 0, '', '') . $KZ;
        $RT = hash("\163\150\x61\65\61\62", $Z3);
        return $RT;
    }
    function zipData($PG, $EV)
    {
        if (!(extension_loaded("\172\151\160") && file_exists($PG) && count(glob($PG . DIRECTORY_SEPARATOR . "\x2a")) !== 0)) {
            goto Zj;
        }
        $oV = new ZipArchive();
        if (!$oV->open($EV, ZIPARCHIVE::CREATE)) {
            goto Xx;
        }
        $PG = realpath($PG);
        if (is_dir($PG) === true) {
            goto Av;
        }
        if (!is_file($PG)) {
            goto Yt;
        }
        $oV->addFromString(basename($PG), file_get_contents($PG));
        Yt:
        goto n9;
        Av:
        $dO = new RecursiveDirectoryIterator($PG);
        $dO->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
        $W1 = new RecursiveIteratorIterator($dO, RecursiveIteratorIterator::SELF_FIRST);
        foreach ($W1 as $ff) {
            $ff = realpath($ff);
            if (is_dir($ff) === true) {
                goto rt;
            }
            if (!(is_file($ff) === true)) {
                goto Fy;
            }
            $oV->addFromString(str_replace($PG . DIRECTORY_SEPARATOR, '', $ff), file_get_contents($ff));
            Fy:
            goto T7;
            rt:
            $oV->addEmptyDir(str_replace($PG . DIRECTORY_SEPARATOR, '', $ff . DIRECTORY_SEPARATOR));
            T7:
            u5:
        }
        J5:
        n9:
        Xx:
        return $oV->close();
        Zj:
        return false;
    }
    function mo_oauth_client_plugin_update_message($o1, $n4)
    {
        if (array_key_exists("\163\x74\141\164\x75\163\137\143\157\144\x65", $o1)) {
            goto n_;
        }
        return;
        n_:
        if ($o1["\x73\x74\x61\164\165\163\137\143\157\x64\145"] == "\x53\125\103\103\105\123\123") {
            goto cZ;
        }
        if (!($o1["\x73\164\x61\x74\x75\x73\x5f\x63\157\x64\x65"] == "\x44\105\116\111\x45\x44")) {
            goto cV;
        }
        echo sprintf(__($o1["\154\x69\x63\x65\x6e\163\145\x5f\151\156\x66\157\162\x6d\141\x74\151\157\x6e"]));
        cV:
        goto Cm;
        cZ:
        $rC = plugin_dir_path(dirname(__FILE__));
        $rC = rtrim($rC, "\57");
        $rC = rtrim($rC, "\134");
        $Yc = "\x6d\151\156\x69\157\x72\x61\x6e\x67\x65\55\157\x61\165\x74\150\55\157\x69\x64\143\55\x73\x69\156\x67\x6c\x65\x2d\x73\151\147\x6e\55\157\156\x2d\x62\x61\143\x6b\165\160\x2d" . $this->current_version . "\56\172\151\x70";
        $C_ = explode("\74\x2f\165\154\76", $o1["\x6e\x65\x77\137\x76\x65\162\163\151\157\156\x5f\x63\150\x61\156\147\x65\x6c\x6f\147"]);
        $H9 = $C_[0];
        $cd = $H9 . "\74\57\165\x6c\x3e";
        echo "\74\x64\x69\166\x3e\x3c\142\76";
        if (is_writable($r0)) {
            goto rV;
        }
        echo "\x3c\142\x72\57\76\74\x73\160\x61\x6e\40\x73\x74\171\x6c\x65\x3d\42\x63\x6f\154\x6f\x72\x3a\162\145\x64\42\x3e\x3c\142\x3e\116\117\x54\x45\x3a\x20\x49\164\x20\x73\x65\x65\155\x73\40\164\x68\145\40\165\x70\x6c\x6f\141\x64\x73\40\144\151\162\x65\x63\x74\x6f\162\171\x20\x69\163\x20\156\157\164\40\x77\x72\151\164\141\x62\x6c\x65\x2e\40\x42\x61\143\153\165\x70\x20\x6f\x66\x20\x74\x68\x65\40\143\165\x72\162\145\156\x74\x20\x70\x6c\x75\x67\151\156\40\x76\145\x72\x73\x69\x6f\156\40\x63\157\x75\154\144\x6e\x27\164\x20\x62\x65\40\143\162\145\141\x74\x65\x64\x2e\x3c\142\162\57\x3e\x49\x74\x20\x69\163\40\x72\145\143\157\x6d\x6d\x65\x6e\x64\x65\x64\40\x74\157\40\x70\x72\157\x76\151\144\145\x20\167\162\151\164\145\x20\160\x65\162\x6d\x69\x73\163\x69\x6f\x6e\x20\164\157\40\164\x68\x65\x20\165\160\x6c\x6f\x61\144\x73\40\x64\151\x72\x65\143\164\157\162\x79\40\141\156\144\40\x74\150\145\156\40\143\150\145\x63\153\40\x66\x6f\162\40\165\x70\x64\x61\x74\145\x73\x20\151\156\x20\157\x72\x64\145\x72\x20\164\x6f\40\x63\162\145\x61\x74\145\40\x61\x20\x62\x61\143\153\165\160\56\x3c\57\142\76\x3c\57\x73\x70\141\x6e\x3e";
        goto Pn;
        rV:
        echo __("\x3c\142\162\40\57\x3e\x41\x6e\x20\141\x75\164\x6f\155\141\x74\151\143\40\x62\141\x63\153\165\160\40\x6f\146\40\143\x75\x72\x72\x65\x6e\x74\40\x76\x65\162\163\x69\x6f\x6e\40" . $this->current_version . "\x20\x68\141\163\40\142\x65\x65\x6e\40\x63\x72\145\x61\x74\x65\144\40\141\x74\x20\164\150\x65\40\x6c\157\x63\x61\164\x69\x6f\x6e\40" . $rC . "\40\x77\x69\x74\x68\x20\164\150\145\40\x6e\141\155\x65\40\74\x73\160\x61\x6e\40\x73\164\x79\x6c\145\x3d\x22\x63\x6f\154\x6f\x72\x3a\43\x30\x30\67\x33\x61\x61\x3b\42\76" . $Yc . "\x3c\57\x73\160\x61\x6e\x3e\x2e\x20\111\156\40\143\141\x73\x65\x2c\x20\x73\157\x6d\x65\x74\150\x69\x6e\147\40\142\162\145\141\153\163\x20\x64\165\162\151\156\x67\x20\164\150\x65\x20\165\x70\x64\141\x74\x65\54\40\171\x6f\x75\x20\143\141\156\40\162\x65\166\145\x72\164\x20\x74\157\40\171\157\165\162\x20\143\x75\162\162\145\156\164\40\166\x65\x72\163\x69\157\156\40\x62\171\x20\162\145\160\x6c\x61\143\151\x6e\147\x20\x74\150\145\x20\142\x61\x63\153\x75\x70\40\x75\x73\151\156\147\40\x46\x54\x50\x20\x61\143\x63\145\x73\x73\x2e", "\155\151\x6e\x69\x6f\162\141\156\147\x65\55\x6f\141\165\164\x68\x2d\157\151\x64\143\x2d\x73\x69\156\x67\154\145\x2d\163\151\x67\x6e\x2d\x6f\156") . "\74\57\x62\x3e";
        Pn:
        echo "\x3c\57\x64\x69\166\x3e\74\144\x69\x76\x20\163\164\x79\x6c\145\75\42\x63\x6f\154\157\x72\72\x20\43\x66\x30\60\x3b\x22\x3e" . __("\74\142\162\40\x2f\x3e\124\x61\153\x65\x20\141\40\155\151\156\x75\164\x65\40\x74\x6f\40\143\x68\145\x63\x6b\x20\164\x68\x65\40\x63\x68\141\x6e\x67\x65\154\x6f\147\40\x6f\x66\40\x6c\x61\164\x65\163\164\x20\x76\x65\x72\163\x69\x6f\x6e\x20\x6f\146\40\164\x68\145\x20\x70\154\165\x67\151\x6e\56\40\110\x65\162\x65\47\x73\x20\x77\x68\x79\40\171\x6f\165\x20\156\x65\145\x64\x20\164\157\40\x75\160\x64\x61\x74\x65\x3a", "\x6d\151\x6e\151\157\x72\141\x6e\147\145\x2d\x6f\141\x75\164\150\55\x6f\x69\x64\x63\x2d\x73\x69\x6e\147\x6c\145\x2d\x73\x69\147\156\x2d\x6f\156") . "\74\57\144\x69\166\x3e";
        echo "\74\x64\x69\166\x20\163\x74\171\x6c\x65\x3d\x22\x66\157\156\x74\55\167\x65\x69\x67\150\x74\72\40\x6e\x6f\162\x6d\141\x6c\73\x22\76" . $cd . "\74\x2f\x64\x69\x76\76\x3c\142\x3e\116\x6f\x74\x65\x3a\x3c\57\x62\x3e\40\x50\154\x65\141\163\145\x20\x63\154\151\143\153\40\x6f\x6e\x20\x3c\x62\x3e\126\x69\x65\167\x20\126\x65\x72\x73\x69\157\x6e\x20\144\x65\164\x61\x69\x6c\163\x3c\57\x62\x3e\x20\154\151\156\153\40\164\157\40\x67\145\164\x20\x63\x6f\155\x70\154\x65\164\x65\x20\x63\x68\x61\156\x67\145\x6c\x6f\147\40\x61\x6e\x64\x20\154\151\x63\145\156\163\x65\x20\x69\x6e\x66\x6f\162\155\141\164\x69\157\156\x2e\40\x43\154\x69\143\x6b\40\157\156\40\x3c\142\x3e\125\160\x64\141\x74\145\x20\x4e\157\167\74\57\142\76\40\x6c\x69\156\x6b\x20\164\157\x20\165\x70\144\x61\164\x65\40\x74\x68\145\40\160\154\x75\147\151\156\x20\164\x6f\x20\x6c\x61\164\x65\x73\x74\x20\166\x65\162\163\x69\157\156\56";
        Cm:
    }
    public function mo_oauth_license_key_notice()
    {
        if (!array_key_exists("\x6d\157\x6f\141\x75\x74\x68\143\154\x69\x65\156\x74\55\x64\151\163\155\x69\x73\x73", $_GET)) {
            goto e6;
        }
        return;
        e6:
        if (!(get_option("\x6d\x6f\137\x6f\x61\165\164\150\137\163\154\145") && new DateTime() > get_option("\155\x6f\x2d\157\141\165\x74\x68\55\143\x6c\151\145\x6e\x74\55\160\x6c\165\x67\x69\156\x2d\164\151\155\145\x72"))) {
            goto qp;
        }
        $vo = esc_url(add_query_arg(array("\x6d\157\157\141\x75\164\x68\x63\154\151\145\x6e\164\x2d\144\x69\163\x6d\151\x73\163" => wp_create_nonce("\157\x61\x75\164\x68\x2d\143\x6c\151\x65\x6e\x74\55\x64\x69\x73\x6d\151\x73\x73"))));
        echo "\x3c\x73\143\162\x69\x70\164\x3e\15\xa\11\11\x9\x9\146\x75\x6e\143\x74\x69\x6f\156\x20\155\x6f\117\x41\165\x74\150\120\x61\x79\x6d\145\x6e\164\x53\x74\x65\x70\163\x28\x29\40\x7b\xd\xa\x9\x9\11\x9\x9\x76\141\x72\40\x61\x74\164\162\x20\75\40\144\x6f\143\165\155\145\x6e\x74\x2e\x67\x65\x74\x45\x6c\x65\155\x65\156\x74\x42\x79\x49\144\x28\x22\x6d\157\x6f\x61\165\x74\150\x63\x6c\x69\x65\x6e\164\160\141\171\x6d\145\x6e\x74\163\164\145\x70\x73\42\x29\56\x73\x74\x79\x6c\145\x2e\144\151\163\x70\x6c\141\x79\73\15\12\x9\x9\11\x9\x9\x69\x66\50\141\164\164\162\x20\x3d\x3d\x20\x22\156\x6f\x6e\145\x22\51\x7b\xd\xa\11\x9\11\x9\x9\x9\144\x6f\143\165\x6d\145\x6e\164\x2e\147\145\x74\105\x6c\x65\155\x65\x6e\x74\102\171\x49\144\50\x22\155\x6f\157\x61\165\164\x68\x63\154\151\145\x6e\x74\x70\141\171\155\145\x6e\x74\x73\x74\x65\160\163\42\x29\56\163\x74\171\x6c\x65\56\144\x69\163\160\154\x61\171\x20\75\40\42\x62\x6c\x6f\143\x6b\42\x3b\xd\12\11\x9\x9\x9\x9\175\145\x6c\x73\145\x7b\xd\12\11\x9\11\11\x9\x9\x64\x6f\143\165\x6d\x65\156\x74\56\147\x65\x74\105\x6c\145\x6d\145\156\x74\102\x79\111\x64\x28\x22\155\157\x6f\141\x75\x74\150\x63\154\151\145\156\164\160\141\171\x6d\x65\x6e\x74\x73\x74\145\x70\x73\x22\x29\56\x73\164\171\154\x65\x2e\x64\x69\x73\x70\154\141\x79\x20\x3d\x20\42\x6e\157\156\x65\42\x3b\xd\xa\11\11\11\x9\x9\x7d\xd\12\x9\11\x9\x9\175\15\12\11\11\11\74\x2f\x73\143\x72\x69\160\x74\76";
        echo "\x3c\144\x69\x76\40\x69\144\75\42\155\x65\163\x73\x61\x67\145\x22\x20\x73\164\171\x6c\145\75\42\x70\157\163\x69\164\151\157\156\x3a\162\x65\x6c\x61\x74\151\x76\x65\x22\40\143\154\141\x73\x73\x3d\x22\x6e\x6f\x74\x69\143\145\x20\156\x6f\x74\151\x63\x65\x20\156\x6f\x74\151\143\x65\55\167\141\x72\156\151\156\x67\42\x3e\x3c\142\162\40\x2f\x3e\x3c\163\x70\141\156\x20\x63\x6c\x61\x73\163\x3d\x22\x61\x6c\151\147\156\154\145\x66\x74\42\x20\163\164\x79\154\x65\75\x22\x63\x6f\154\157\x72\72\43\141\60\x30\73\146\157\156\164\55\x66\141\155\x69\154\171\72\40\x2d\x77\x65\x62\153\151\164\x2d\x70\151\143\164\157\147\x72\x61\x70\x68\73\x66\x6f\156\164\x2d\x73\151\x7a\145\72\x20\x32\x35\x70\170\73\42\x3e\x49\115\120\x4f\x52\124\101\116\x54\x21\x3c\x2f\163\160\x61\x6e\76\74\142\x72\x20\x2f\76\74\x69\155\147\x20\163\x72\143\75\42" . plugin_dir_url(__FILE__) . "\151\155\141\147\x65\163\x2f\155\x69\x6e\x69\157\x72\141\x6e\147\145\x2d\154\157\x67\157\56\160\x6e\x67" . "\x22\40\143\154\141\x73\163\75\42\141\x6c\x69\147\x6e\x6c\x65\x66\164\42\40\x68\x65\151\x67\x68\164\75\x22\70\x37\x22\x20\167\x69\x64\x74\150\x3d\x22\x36\66\42\40\141\154\x74\x3d\42\x6d\x69\156\x69\x4f\162\141\x6e\147\145\x20\x6c\x6f\x67\x6f\x22\40\163\164\171\154\x65\75\42\155\141\162\147\151\x6e\72\x31\x30\160\x78\40\61\x30\x70\x78\x20\x31\x30\160\x78\40\x30\x3b\x20\x68\145\x69\x67\150\x74\x3a\61\x32\x38\160\170\x3b\40\x77\x69\144\x74\150\72\x20\61\x32\x38\x70\x78\73\42\76\x3c\x68\63\76\x6d\151\156\x69\117\x72\141\156\x67\145\x20\117\x41\x75\x74\x68\x20\x2f\40\117\160\x65\156\111\x44\x20\103\157\156\x6e\x65\143\x74\40\62\56\60\x20\x53\151\x6e\x67\x6c\145\40\x53\151\x67\156\x2d\117\156\40\123\x75\x70\x70\x6f\x72\x74\x20\x26\40\x4d\141\x69\x6e\x74\145\x6e\141\x6e\143\145\x20\x4c\x69\x63\145\x6e\x73\x65\x20\105\170\x70\151\162\x65\144\x3c\57\x68\x33\76\x3c\x70\x3e\131\x6f\x75\x72\40\155\x69\x6e\151\117\162\141\156\x67\x65\40\x4f\x41\165\x74\x68\40\x2f\x20\x4f\x70\x65\x6e\x49\104\x20\x43\x6f\x6e\x6e\x65\x63\x74\40\123\151\x6e\x67\x6c\x65\40\123\151\147\x6e\x2d\117\156\40\x6c\151\143\x65\x6e\163\145\x20\151\163\40\145\170\x70\x69\x72\145\x64\56\x20\124\x68\x69\163\40\x6d\x65\x61\x6e\163\40\x79\x6f\165\342\x80\x99\162\145\x20\155\x69\163\x73\151\x6e\x67\x20\157\x75\x74\x20\157\156\x20\154\x61\164\x65\163\164\40\163\145\143\165\162\x69\x74\x79\40\160\x61\x74\143\150\x65\x73\x2c\40\x63\x6f\155\x70\141\164\151\142\151\154\151\164\x79\x20\167\151\x74\150\x20\164\150\145\x20\154\141\x74\145\x73\x74\40\x50\110\x50\40\x76\x65\162\163\x69\157\156\163\40\141\156\x64\x20\127\x6f\x72\x64\160\162\145\163\x73\x2e\x20\x4d\157\163\164\40\x69\155\x70\157\162\x74\141\156\x74\x6c\171\x20\x79\157\x75\xe2\200\231\154\154\x20\142\x65\40\155\x69\x73\x73\151\x6e\x67\40\x6f\x75\164\40\x6f\x6e\x20\x6f\165\x72\x20\x61\x77\145\x73\x6f\x6d\x65\40\163\165\160\x70\157\x72\x74\41\x20\74\57\160\76\15\xa\11\x9\x3c\160\76\74\x61\40\150\162\145\x66\75\x22" . mo_oauth_client_options_plugin_constants::HOSTNAME . "\x2f\155\157\x61\163\x2f\154\157\x67\x69\x6e\77\162\x65\144\x69\x72\145\143\x74\x55\x72\154\75" . mo_oauth_client_options_plugin_constants::HOSTNAME . "\x2f\x6d\x6f\141\163\x2f\x61\144\155\x69\156\x2f\143\x75\163\164\x6f\155\145\162\x2f\x6c\151\143\145\x6e\163\145\x72\145\x6e\x65\167\141\154\163\x3f\162\145\x6e\x65\x77\x61\x6c\x72\x65\161\165\145\163\x74\75" . mo_oauth_client_options_plugin_constants::LICENSE_TYPE . "\x22\x20\x63\154\x61\163\x73\x3d\42\x62\x75\164\164\x6f\x6e\40\x62\x75\164\164\157\x6e\x2d\160\x72\151\x6d\141\162\x79\42\40\x74\141\162\x67\145\x74\75\x22\137\x62\154\141\156\153\42\76\x52\x65\x6e\x65\x77\40\x79\157\165\x72\x20\163\x75\160\x70\x6f\x72\164\x20\x6c\x69\143\x65\156\163\x65\x3c\57\141\x3e\x26\x6e\142\x73\x70\x3b\x26\x6e\x62\163\160\73\x3c\142\76\74\x61\40\150\x72\x65\x66\75\42\43\42\40\157\156\x63\154\151\x63\153\75\x22\155\157\117\x41\x75\x74\150\120\x61\x79\x6d\x65\156\x74\123\x74\145\160\x73\50\x29\42\x3e\103\x6c\151\143\x6b\x20\x68\145\162\145\x3c\57\x61\76\40\x74\157\x20\153\156\x6f\167\x20\150\157\167\40\x74\157\40\x72\x65\156\x65\167\x3f\x3c\x2f\142\76\x3c\x64\151\x76\x20\151\144\x3d\x22\155\157\x6f\141\x75\x74\x68\x63\154\x69\145\156\164\x70\141\x79\x6d\145\x6e\x74\x73\164\145\x70\x73\x22\40\40\163\x74\171\x6c\145\x3d\42\144\151\163\160\x6c\141\171\72\x20\156\157\x6e\145\x3b\42\76\x3c\142\x72\40\57\76\x3c\x75\154\40\163\164\x79\154\x65\75\x22\154\151\x73\x74\55\x73\164\x79\154\x65\x3a\40\x64\151\x73\x63\x3b\x6d\x61\x72\x67\151\156\55\x6c\x65\x66\164\72\40\61\x35\160\x78\x3b\x22\x3e\15\xa\74\x6c\151\76\103\154\151\143\153\40\157\x6e\x20\141\142\x6f\x76\145\x20\x62\x75\164\164\x6f\156\40\x74\157\40\154\157\147\151\156\x20\151\156\164\157\x20\155\x69\x6e\x69\117\x72\x61\x6e\147\x65\x2e\x3c\57\x6c\151\76\15\xa\x3c\x6c\x69\76\x59\157\x75\40\167\x69\154\154\x20\142\145\x20\x72\x65\x64\151\x72\x65\x63\x74\145\144\x20\164\157\x20\x70\154\x75\x67\151\156\40\162\x65\156\x65\x77\141\x6c\40\160\x61\147\145\x20\141\146\x74\145\162\x20\x6c\157\x67\x69\156\x2e\x3c\x2f\154\x69\76\xd\12\x3c\154\151\x3e\x49\146\x20\164\150\145\x20\x70\x6c\x75\x67\x69\156\x20\x6c\x69\x63\x65\156\x73\145\40\x70\154\141\156\40\151\x73\x20\x6e\x6f\x74\40\163\x65\154\145\143\164\145\x64\x20\164\x68\145\156\x20\143\x68\157\x6f\163\x65\x20\164\150\x65\x20\x72\151\147\x68\164\40\157\x6e\x65\40\x66\x72\157\x6d\x20\164\x68\145\x20\144\162\157\160\144\x6f\167\x6e\x2c\40\x6f\x74\x68\145\162\167\x69\x73\145\x20\143\x6f\156\x74\141\x63\x74\x20\74\x62\x3e\74\141\x20\150\x72\x65\146\x3d\42\x6d\x61\x69\154\x74\x6f\x3a\151\156\x66\x6f\x40\x78\145\143\x75\x72\151\x66\x79\56\143\157\155\x2e\x63\x6f\155\42\x3e\151\x6e\146\157\100\170\x65\143\x75\162\151\x66\x79\x2e\x63\157\155\56\143\x6f\x6d\x3c\x2f\x61\76\74\57\142\x3e\x20\164\157\x20\153\156\x6f\167\x20\x61\x62\x6f\165\164\40\x79\157\165\x72\x20\154\x69\143\145\x6e\x73\145\40\160\154\141\156\x2e\x3c\x2f\x6c\151\76\15\xa\x3c\x6c\x69\76\131\x6f\x75\x20\167\151\x6c\154\40\x73\x65\145\40\164\x68\x65\x20\160\154\165\147\151\156\x20\x72\145\x6e\145\167\x61\154\x20\x61\x6d\x6f\x75\x6e\164\x2e\x3c\57\154\x69\x3e\xd\12\74\x6c\x69\x3e\106\x69\154\154\40\165\x70\40\171\157\x75\x72\x20\x43\162\145\x64\x69\x74\40\x43\141\x72\x64\40\x69\x6e\x66\x6f\162\155\141\x74\x69\x6f\156\40\x74\x6f\40\x6d\141\153\145\x20\164\x68\145\x20\160\141\x79\155\145\x6e\x74\x2e\x3c\x2f\154\x69\76\15\xa\74\x6c\151\x3e\117\156\143\145\40\164\x68\x65\x20\x70\141\x79\x6d\145\156\x74\x20\x69\x73\40\144\157\x6e\x65\54\x20\143\154\151\143\153\x20\x6f\156\40\x3c\x62\76\x43\x68\x65\x63\x6b\x20\x41\147\x61\151\x6e\74\57\x62\x3e\40\x62\165\x74\164\x6f\x6e\40\146\x72\x6f\155\40\x74\150\x65\40\x46\157\x72\x63\x65\x20\125\160\144\x61\x74\x65\40\141\162\145\141\40\157\x66\40\x79\x6f\x75\162\x20\127\x6f\x72\x64\x50\162\145\x73\163\x20\141\x64\155\x69\156\40\144\x61\x73\x68\x62\157\141\x72\x64\40\x6f\x72\40\x77\x61\x69\x74\40\146\157\x72\40\x61\x20\144\x61\171\x20\x74\x6f\x20\147\x65\x74\x20\164\x68\x65\x20\x61\x75\x74\x6f\x6d\141\x74\151\143\x20\x75\x70\x64\141\x74\145\x2e\74\x2f\x6c\x69\76\15\xa\74\154\151\x3e\103\x6c\151\143\x6b\x20\x6f\156\40\74\x62\76\125\160\x64\141\x74\145\x20\116\x6f\167\74\57\142\x3e\x20\x6c\x69\156\x6b\40\164\x6f\40\151\156\x73\x74\141\x6c\x6c\40\x74\x68\145\x20\x6c\141\x74\x65\x73\x74\40\x76\145\x72\163\x69\x6f\x6e\x20\x6f\x66\x20\x74\150\x65\x20\160\x6c\x75\x67\151\156\x20\x66\x72\x6f\155\x20\x70\154\165\x67\151\156\x20\x6d\141\x6e\x61\x67\145\x72\40\141\162\145\141\40\157\x66\40\171\157\165\162\40\x61\x64\155\x69\x6e\40\144\x61\x73\150\142\x6f\x61\162\x64\x2e\x3c\x2f\154\x69\76\xd\xa\x3c\57\165\154\76\111\x6e\40\143\x61\x73\145\x2c\x20\171\x6f\165\x20\x61\x72\145\40\x66\x61\143\x69\156\147\x20\x61\156\x79\x20\144\151\146\146\x69\143\165\154\x74\x79\x20\x69\156\x20\x69\x6e\x73\164\x61\x6c\x6c\151\156\x67\x20\x74\150\x65\40\x75\160\x64\141\x74\145\54\40\x70\154\x65\141\163\x65\x20\x63\x6f\156\x74\141\143\x74\40\x3c\142\x3e\x3c\141\40\150\x72\145\146\x3d\42\155\x61\x69\154\x74\157\x3a\151\156\x66\x6f\x40\x78\x65\x63\165\x72\151\x66\171\56\x63\157\155\56\x63\x6f\155\x22\x3e\151\x6e\x66\x6f\x40\170\x65\x63\x75\162\151\x66\x79\56\143\157\155\56\143\x6f\155\74\x2f\x61\x3e\74\x2f\x62\76\x2e\xd\xa\117\165\x72\x20\123\x75\x70\x70\157\162\x74\x20\x45\170\x65\143\x75\x74\x69\x76\145\40\167\x69\x6c\154\40\141\x73\x73\x69\x73\x74\40\171\157\165\x20\151\x6e\x20\151\156\x73\x74\x61\154\154\x69\x6e\147\x20\x74\150\145\x20\x75\x70\144\x61\x74\x65\163\x2e\x3c\142\162\x20\57\x3e\x3c\151\76\x46\157\x72\40\155\x6f\x72\x65\40\x69\x6e\146\157\162\x6d\x61\x74\x69\157\x6e\x2c\40\160\x6c\x65\141\163\x65\x20\x63\x6f\x6e\164\x61\x63\x74\x20\x3c\x62\76\74\x61\40\150\x72\x65\x66\75\x22\155\141\151\x6c\x74\157\72\151\156\x66\157\100\170\x65\x63\165\162\151\x66\x79\x2e\x63\157\155\56\143\x6f\155\42\76\151\x6e\x66\157\100\170\145\143\165\162\151\x66\x79\x2e\143\x6f\155\x2e\x63\x6f\155\x3c\57\x61\76\74\57\142\x3e\56\74\x2f\151\x3e\74\x2f\144\x69\x76\x3e\74\x61\x20\150\x72\x65\x66\x3d\42" . $vo . "\x22\x20\x63\x6c\141\163\163\x3d\42\141\154\x69\x67\x6e\x72\x69\x67\150\x74\x20\x62\165\164\164\157\156\x20\142\165\164\x74\x6f\x6e\x2d\x6c\x69\156\153\x22\x3e\x44\151\x73\x6d\151\x73\163\74\x2f\x61\76\74\57\160\76\xd\12\x9\x9\74\x64\x69\x76\x20\143\x6c\x61\163\163\x3d\x22\143\x6c\145\141\x72\x22\76\x3c\57\144\x69\166\76\x3c\x2f\144\x69\166\76";
        qp:
    }
    public function mo_oauth_client_dismiss_notice()
    {
        if (!empty($_GET["\x6d\157\157\x61\165\x74\150\143\154\x69\145\156\164\x2d\144\x69\163\x6d\151\163\163"])) {
            goto sm;
        }
        return;
        sm:
        if (wp_verify_nonce($_GET["\155\x6f\157\x61\x75\x74\150\x63\154\x69\145\156\x74\55\x64\x69\x73\x6d\x69\x73\163"], "\157\141\x75\164\x68\55\143\154\151\145\156\164\55\x64\151\163\155\151\x73\x73")) {
            goto A0;
        }
        return;
        A0:
        if (!(isset($_GET["\x6d\157\157\x61\165\164\150\143\154\151\145\x6e\x74\x2d\x64\151\163\x6d\x69\x73\x73"]) && wp_verify_nonce($_GET["\155\157\157\x61\165\x74\x68\x63\154\151\145\156\164\55\144\x69\x73\x6d\151\x73\163"], "\157\141\165\x74\150\55\x63\x6c\x69\x65\156\x74\55\144\x69\x73\155\151\x73\163"))) {
            goto OU;
        }
        $Ty = new DateTime();
        $Ty->modify("\53\x31\40\144\141\x79");
        update_option("\155\157\x2d\157\x61\165\164\150\55\x63\x6c\151\x65\156\x74\x2d\160\x6c\165\x67\151\156\55\x74\151\155\145\162", $Ty);
        OU:
    }
    function mo_oauth_client_create_backup_dir()
    {
        $rC = plugin_dir_path(__FILE__);
        $rC = rtrim($rC, "\57");
        $rC = rtrim($rC, "\x5c");
        $o1 = get_plugin_data(__FILE__);
        $gT = $o1["\124\x65\170\x74\x44\157\155\141\151\x6e"];
        $r0 = wp_upload_dir();
        $MI = $r0["\142\141\x73\x65\x64\x69\x72"];
        $r0 = rtrim($MI, "\57");
        if (is_writable($r0)) {
            goto f7;
        }
        return;
        f7:
        $mW = $r0 . DIRECTORY_SEPARATOR . "\142\x61\143\153\165\x70" . DIRECTORY_SEPARATOR . $gT . "\x2d\x62\141\x63\153\165\x70\x2d" . $this->current_version;
        if (file_exists($mW)) {
            goto ke;
        }
        mkdir($mW, 511, true);
        ke:
        $PG = $rC;
        $EV = $mW;
        $this->mo_oauth_client_copy_files_to_backup_dir($PG, $EV);
    }
    function mo_oauth_client_copy_files_to_backup_dir($rC, $mW)
    {
        if (!is_dir($rC)) {
            goto xb;
        }
        $aD = scandir($rC);
        xb:
        if (!empty($aD)) {
            goto cd;
        }
        return;
        cd:
        foreach ($aD as $Dc) {
            if (!($Dc == "\x2e" || $Dc == "\x2e\56")) {
                goto tW;
            }
            goto Gx;
            tW:
            $u0 = $rC . DIRECTORY_SEPARATOR . $Dc;
            $Br = $mW . DIRECTORY_SEPARATOR . $Dc;
            if (is_dir($u0)) {
                goto nT;
            }
            copy($u0, $Br);
            goto NC;
            nT:
            if (file_exists($Br)) {
                goto ml;
            }
            mkdir($Br, 511, true);
            ml:
            $this->mo_oauth_client_copy_files_to_backup_dir($u0, $Br);
            NC:
            Gx:
        }
        Jc:
    }
}
function mo_oauth_client_update()
{
    $Fn = mo_oauth_client_options_plugin_constants::HOSTNAME;
    $E4 = mo_oauth_client_options_plugin_constants::Version;
    $DP = $Fn . "\57\x6d\157\x61\x73\x2f\x61\x70\x69\x2f\x70\154\165\x67\151\x6e\x2f\155\145\164\141\144\x61\x74\x61";
    $g1 = plugin_basename(dirname(__FILE__) . "\x2f\155\157\x5f\x6f\141\165\164\x68\x5f\163\145\x74\164\x69\156\147\x73\x2e\x70\150\x70");
    $Tz = new mo_oauth_client_update_framework($E4, $DP, $g1);
    add_action("\x69\156\137\160\154\x75\x67\x69\156\x5f\165\160\x64\141\164\145\x5f\x6d\145\x73\163\141\x67\x65\55{$g1}", array($Tz, "\155\x6f\x5f\x6f\141\165\x74\x68\x5f\143\x6c\151\x65\x6e\164\137\x70\x6c\165\147\151\156\x5f\x75\160\144\x61\164\x65\x5f\155\145\x73\x73\141\147\x65"), 10, 2);
    add_action("\141\x64\155\x69\x6e\137\x68\x65\x61\x64", array($Tz, "\155\157\137\157\x61\x75\164\x68\137\154\151\x63\145\156\x73\145\137\153\x65\x79\137\x6e\x6f\x74\x69\x63\x65"));
    add_action("\141\144\155\x69\x6e\x5f\x6e\x6f\164\151\143\x65\163", array($Tz, "\155\x6f\x5f\157\x61\x75\x74\150\137\x63\154\x69\x65\x6e\164\x5f\144\x69\163\155\x69\x73\x73\x5f\156\x6f\x74\151\x63\145"), 50);
    if (!get_option("\x6d\x6f\x5f\157\x61\165\164\x68\137\163\x6c\145")) {
        goto lD;
    }
    update_option("\155\x6f\x5f\157\141\165\164\x68\x5f\163\154\145\137\x6d\x65\163\x73\x61\147\145", "\x59\x6f\x75\x72\40\117\101\165\164\150\40\x2f\40\x4f\160\145\156\x49\104\40\103\x6f\x6e\156\145\143\x74\40\x70\x6c\165\x67\x69\156\40\x6c\x69\143\145\x6e\x73\145\40\x68\x61\163\x20\x62\x65\145\156\x20\145\170\x70\151\x72\145\x64\56\40\x59\x6f\165\40\x61\x72\x65\40\155\151\x73\x73\151\x6e\147\40\157\165\x74\40\157\x6e\40\x75\x70\x64\141\x74\145\x73\40\141\x6e\x64\40\x73\x75\x70\x70\157\162\x74\41\40\120\154\x65\141\163\145\x20\74\141\40\x68\x72\145\146\75\42" . mo_oauth_client_options_plugin_constants::HOSTNAME . "\57\x6d\x6f\141\163\x2f\x6c\157\x67\x69\x6e\77\x72\x65\x64\151\x72\x65\x63\164\125\x72\x6c\x3d" . mo_oauth_client_options_plugin_constants::HOSTNAME . "\57\155\157\x61\x73\x2f\141\144\155\x69\156\57\143\165\x73\164\157\155\x65\162\57\154\x69\x63\145\x6e\x73\145\x72\x65\x6e\145\167\x61\154\163\x3f\x72\x65\156\x65\x77\x61\154\162\x65\x71\165\x65\163\164\75" . mo_oauth_client_options_plugin_constants::LICENSE_TYPE . "\x20\x22\x20\x74\141\x72\147\x65\164\x3d\42\137\x62\x6c\141\x6e\153\42\76\74\x62\76\x43\154\x69\143\x6b\x20\x48\145\x72\x65\x3c\x2f\142\x3e\74\x2f\x61\76\x20\x74\x6f\x20\x72\x65\156\145\x77\x20\164\150\145\40\x53\x75\160\160\157\x72\x74\40\x61\x6e\144\x20\x4d\x61\151\156\164\x65\x6e\x61\x63\145\x20\160\x6c\141\x6e\56");
    lD:
}
