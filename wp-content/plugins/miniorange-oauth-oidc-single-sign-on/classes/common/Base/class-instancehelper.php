<?php


namespace MoOauthClient\Base;

class InstanceHelper
{
    private $current_version = "\x46\x52\x45\x45";
    private $utils;
    public function __construct()
    {
        $this->utils = new \MoOauthClient\MOUtils();
        $this->current_version = $this->utils->get_versi_str();
    }
    public function get_sign_in_settings_instance()
    {
        if (class_exists("\x4d\x6f\x4f\x61\x75\164\x68\x43\154\x69\x65\156\164\134\105\x6e\164\145\x72\x70\x72\151\163\x65\134\123\151\x67\156\111\156\123\x65\164\164\x69\156\147\163") && $this->utils->check_versi(3)) {
            goto dD;
        }
        if (class_exists("\115\x6f\x4f\141\165\164\150\103\x6c\x69\145\156\164\134\x50\x72\x65\x6d\151\165\155\134\x53\151\x67\156\x49\156\123\145\x74\164\x69\x6e\147\163") && $this->utils->check_versi(2)) {
            goto nI;
        }
        if (class_exists("\115\157\117\141\165\164\150\x43\154\x69\x65\x6e\164\x5c\123\164\141\156\144\141\x72\x64\x5c\x53\x69\147\x6e\x49\156\x53\145\x74\164\151\156\147\x73") && $this->utils->check_versi(1)) {
            goto k_;
        }
        if (class_exists("\134\115\157\x4f\x61\x75\164\150\x43\154\151\x65\156\164\134\106\162\145\145\x5c\x53\151\x67\156\111\156\123\145\164\164\x69\156\x67\163") && $this->utils->check_versi(0)) {
            goto YG;
        }
        wp_die("\120\x6c\x65\141\163\145\40\x43\150\141\156\x67\x65\x20\124\x68\145\40\166\x65\162\163\151\157\156\40\x62\141\x63\153\x20\x74\157\x20\167\150\141\164\x20\151\x74\40\x72\x65\x61\154\x6c\171\x20\167\x61\163");
        die;
        goto BD;
        dD:
        return new \MoOauthClient\Enterprise\SignInSettings();
        goto BD;
        nI:
        return new \MoOauthClient\Premium\SignInSettings();
        goto BD;
        k_:
        return new \MoOauthClient\Standard\SignInSettings();
        goto BD;
        YG:
        return new \MoOauthClient\Free\SignInSettings();
        BD:
    }
    public function get_requestdemo_instance()
    {
        if (!class_exists("\134\115\x6f\117\x61\x75\x74\x68\x43\154\151\x65\x6e\164\134\106\x72\x65\145\134\122\145\x71\x75\x65\163\164\x66\x6f\162\x64\x65\155\157")) {
            goto oz;
        }
        return new \MoOauthClient\Free\Requestfordemo();
        oz:
    }
    public function get_customization_instance()
    {
        if (class_exists("\x4d\157\117\x61\x75\164\150\x43\154\151\145\x6e\x74\x5c\105\x6e\x74\x65\x72\160\162\151\163\145\134\x43\165\163\164\x6f\155\151\172\141\x74\x69\157\x6e") && $this->utils->check_versi(3)) {
            goto Cv;
        }
        if (class_exists("\x4d\x6f\x4f\x61\165\164\x68\103\x6c\151\145\x6e\164\134\120\x72\145\155\x69\x75\x6d\x5c\x43\165\163\x74\157\x6d\151\x7a\x61\x74\151\x6f\x6e") && $this->utils->check_versi(2)) {
            goto Rh;
        }
        if (class_exists("\x4d\157\117\x61\x75\164\x68\x43\154\151\145\x6e\164\x5c\x53\164\x61\x6e\x64\141\162\144\x5c\103\x75\163\x74\157\155\151\x7a\141\164\x69\x6f\156") && $this->utils->check_versi(1)) {
            goto Mg;
        }
        if (class_exists("\x5c\x4d\157\117\141\165\164\x68\x43\x6c\x69\145\156\164\134\x46\162\145\145\x5c\x43\165\163\x74\157\155\151\172\x61\x74\151\x6f\x6e") && $this->utils->check_versi(0)) {
            goto q7;
        }
        wp_die("\120\154\x65\141\x73\x65\40\x43\x68\x61\x6e\147\145\x20\124\150\x65\x20\166\145\x72\x73\x69\x6f\156\40\142\x61\x63\153\x20\164\x6f\40\x77\x68\x61\x74\x20\151\x74\x20\x72\x65\x61\154\154\x79\x20\167\141\x73");
        die;
        goto wz;
        Cv:
        return new \MoOauthClient\Enterprise\Customization();
        goto wz;
        Rh:
        return new \MoOauthClient\Premium\Customization();
        goto wz;
        Mg:
        return new \MoOauthClient\Standard\Customization();
        goto wz;
        q7:
        return new \MoOauthClient\Free\Customization();
        wz:
    }
    public function get_clientappui_instance()
    {
        if (class_exists("\x4d\157\117\141\x75\x74\x68\103\x6c\x69\x65\156\x74\x5c\105\x6e\164\145\x72\160\162\151\163\145\134\103\154\151\145\x6e\164\x41\160\x70\125\x49") && $this->utils->check_versi(3)) {
            goto BV;
        }
        if (class_exists("\x4d\157\117\x61\165\164\x68\x43\154\151\145\x6e\x74\134\120\x72\145\155\151\x75\x6d\134\x43\154\x69\x65\156\x74\x41\x70\x70\125\x49") && $this->utils->check_versi(2)) {
            goto RO;
        }
        if (class_exists("\x4d\x6f\x4f\x61\x75\164\150\103\154\151\x65\156\x74\134\x53\164\141\x6e\x64\x61\162\144\x5c\103\154\x69\x65\x6e\x74\x41\x70\160\125\x49") && $this->utils->check_versi(1)) {
            goto ad;
        }
        if (class_exists("\x5c\115\x6f\117\x61\165\164\150\103\x6c\x69\145\x6e\x74\134\106\162\145\x65\134\103\154\x69\x65\156\x74\101\x70\160\x55\x49") && $this->utils->check_versi(0)) {
            goto z1;
        }
        wp_die("\x50\154\x65\x61\163\x65\x20\x43\x68\141\x6e\147\145\40\124\x68\x65\40\x76\x65\x72\163\151\157\156\x20\142\141\143\153\x20\164\157\x20\167\150\x61\x74\x20\x69\164\40\162\x65\141\x6c\x6c\x79\40\167\141\x73");
        die;
        goto La;
        BV:
        return new \MoOauthClient\Enterprise\ClientAppUI();
        goto La;
        RO:
        return new \MoOauthClient\Premium\ClientAppUI();
        goto La;
        ad:
        return new \MoOauthClient\Standard\ClientAppUI();
        goto La;
        z1:
        return new \MoOauthClient\Free\ClientAppUI();
        La:
    }
    public function get_login_handler_instance()
    {
        if (class_exists("\x4d\157\117\141\165\x74\150\103\154\151\x65\x6e\164\134\105\156\x74\x65\x72\160\162\x69\x73\145\134\114\x6f\147\x69\x6e\x48\x61\x6e\144\154\x65\162") && $this->utils->check_versi(3)) {
            goto mm;
        }
        if (class_exists("\x4d\x6f\117\x61\165\164\150\103\154\x69\x65\156\x74\x5c\x50\x72\x65\155\151\x75\x6d\134\x4c\157\147\x69\156\110\x61\156\144\154\145\162") && $this->utils->check_versi(2)) {
            goto dS;
        }
        if (class_exists("\x4d\x6f\x4f\141\x75\164\x68\103\x6c\151\x65\x6e\164\134\123\164\141\156\x64\x61\162\144\x5c\114\x6f\x67\151\156\110\x61\x6e\144\x6c\145\x72") && $this->utils->check_versi(1)) {
            goto cL;
        }
        if (class_exists("\134\x4d\157\x4f\141\165\x74\150\x43\154\151\x65\156\164\x5c\x4c\157\x67\151\x6e\x48\141\x6e\x64\x6c\145\162") && $this->utils->check_versi(0)) {
            goto gX;
        }
        wp_die("\120\x6c\145\x61\x73\145\40\103\150\141\x6e\x67\x65\40\124\x68\x65\x20\x76\145\162\x73\x69\x6f\156\40\142\x61\x63\x6b\x20\x74\x6f\x20\167\150\x61\x74\40\151\x74\40\x72\145\x61\x6c\x6c\x79\x20\x77\141\x73");
        die;
        goto sW;
        mm:
        return new \MoOauthClient\Enterprise\LoginHandler();
        goto sW;
        dS:
        return new \MoOauthClient\Premium\LoginHandler();
        goto sW;
        cL:
        return new \MoOauthClient\Standard\LoginHandler();
        goto sW;
        gX:
        return new \MoOauthClient\LoginHandler();
        sW:
    }
    public function get_settings_instance()
    {
        if (class_exists("\115\157\117\x61\x75\164\x68\103\154\151\145\x6e\x74\x5c\105\x6e\164\x65\162\160\x72\151\x73\x65\x5c\105\x6e\x74\x65\162\160\x72\x69\x73\x65\x53\x65\164\164\x69\156\x67\163") && $this->utils->check_versi(3)) {
            goto vs;
        }
        if (class_exists("\x4d\157\x4f\141\x75\x74\150\103\154\151\x65\x6e\164\134\x50\x72\x65\x6d\x69\x75\x6d\134\120\x72\x65\155\x69\x75\155\123\145\164\164\x69\156\x67\163") && $this->utils->check_versi(2)) {
            goto nG;
        }
        if (class_exists("\115\x6f\117\141\165\x74\x68\103\x6c\x69\145\156\x74\x5c\x53\164\141\x6e\x64\x61\x72\144\134\123\x74\x61\156\144\x61\162\x64\123\x65\164\164\x69\156\x67\x73") && $this->utils->check_versi(1)) {
            goto cs;
        }
        if (class_exists("\x4d\x6f\117\141\x75\164\x68\x43\154\x69\145\156\164\x5c\x46\x72\145\x65\x5c\x46\162\145\145\123\145\x74\x74\151\156\x67\163") && $this->utils->check_versi(0)) {
            goto eU;
        }
        wp_die("\x50\154\145\141\x73\x65\x20\103\150\x61\x6e\x67\145\x20\124\150\145\x20\166\145\x72\163\x69\x6f\156\40\142\141\x63\x6b\x20\164\x6f\x20\x77\150\141\164\40\151\164\x20\x72\145\141\154\x6c\x79\x20\x77\x61\x73");
        die;
        goto aG;
        vs:
        return new \MoOauthClient\Enterprise\EnterpriseSettings();
        goto aG;
        nG:
        return new \MoOauthClient\Premium\PremiumSettings();
        goto aG;
        cs:
        return new \MoOauthClient\Standard\StandardSettings();
        goto aG;
        eU:
        return new \MoOauthClient\Free\FreeSettings();
        aG:
    }
    public function get_accounts_instance()
    {
        if (class_exists("\x4d\157\117\141\165\164\x68\103\x6c\x69\x65\156\164\134\x50\x61\x69\144\x5c\x41\143\x63\x6f\165\156\164\x73") && $this->utils->check_versi(1)) {
            goto gz;
        }
        return new \MoOauthClient\Accounts();
        goto x0;
        gz:
        return new \MoOauthClient\Paid\Accounts();
        x0:
    }
    public function get_user_analytics()
    {
        if (class_exists("\115\x6f\x4f\141\x75\x74\x68\103\154\x69\x65\156\164\134\105\x6e\164\145\x72\160\x72\x69\x73\145\134\125\x73\x65\x72\101\156\141\154\171\164\x69\143\163") && $this->utils->check_versi(3)) {
            goto Ji;
        }
        wp_die("\120\154\x65\x61\163\x65\x20\x43\x68\x61\156\147\x65\40\124\150\145\x20\166\x65\162\163\151\157\156\x20\x62\141\143\153\40\x74\x6f\x20\x77\150\x61\x74\40\151\164\40\162\x65\141\154\154\171\40\x77\x61\x73");
        die;
        goto gA;
        Ji:
        return new \MoOauthClient\Enterprise\UserAnalytics();
        gA:
    }
    public function get_utils_instance()
    {
        if (!(class_exists("\115\157\117\141\x75\x74\x68\x43\x6c\151\145\156\164\x5c\123\164\x61\x6e\144\x61\x72\x64\134\115\117\125\x74\151\x6c\163") && $this->utils->check_versi(1))) {
            goto mV;
        }
        return new \MoOauthClient\Standard\MOUtils();
        mV:
        return $this->utils;
    }
}
