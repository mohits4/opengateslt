<?php


namespace MoOauthClient\Base;

use MoOauthClient\Licensing;
use MoOauthClient\Base\InstanceHelper;
class Loader
{
    private $instance_helper;
    public function __construct()
    {
        add_action("\x61\144\155\151\156\137\x65\156\161\x75\x65\x75\x65\x5f\163\143\x72\151\x70\x74\x73", array($this, "\160\154\165\147\151\x6e\x5f\163\145\164\164\151\x6e\147\x73\x5f\x73\x74\171\x6c\x65"));
        add_action("\x61\x64\155\151\x6e\137\145\x6e\161\165\x65\165\145\137\x73\143\162\x69\x70\164\x73", array($this, "\160\x6c\x75\x67\x69\x6e\137\x73\x65\x74\x74\151\156\x67\163\x5f\163\143\162\x69\160\164"));
        $this->instance_helper = new InstanceHelper();
    }
    public function plugin_settings_style()
    {
        wp_enqueue_style("\x6d\x6f\137\157\x61\x75\x74\x68\x5f\141\144\x6d\151\156\x5f\x73\x65\164\164\x69\156\147\163\137\163\164\x79\x6c\x65", MOC_URL . "\162\145\x73\x6f\165\x72\143\x65\x73\x2f\143\x73\163\x2f\163\164\x79\x6c\145\x5f\163\145\164\164\x69\x6e\x67\163\x2e\x63\163\163", array(), $fX = null, $vI = false);
        wp_enqueue_style("\155\157\137\157\141\165\x74\x68\x5f\141\144\x6d\x69\156\137\x73\145\x74\x74\151\x6e\x67\163\137\x70\150\157\156\x65\137\x73\x74\x79\x6c\x65", MOC_URL . "\x72\145\x73\157\165\x72\x63\x65\163\x2f\143\163\x73\57\x70\x68\157\x6e\x65\56\143\163\x73", array(), $fX = null, $vI = false);
        wp_enqueue_style("\155\157\137\157\141\165\x74\x68\x5f\141\x64\x6d\151\x6e\137\163\x65\x74\x74\151\156\x67\163\137\144\x61\164\x61\x74\141\x62\154\x65", MOC_URL . "\162\145\x73\157\165\162\x63\145\163\x2f\x63\x73\163\57\x6a\161\165\x65\162\171\56\144\x61\164\x61\x54\x61\142\154\x65\x73\56\155\151\156\56\143\163\x73", array(), $fX = null, $vI = false);
        wp_enqueue_style("\x6d\157\x2d\167\x70\55\x62\x6f\x6f\164\163\x74\x72\x61\160\55\163\x6f\x63\151\141\x6c", MOC_URL . "\162\x65\163\157\x75\162\x63\145\x73\x2f\x63\x73\163\57\x62\x6f\x6f\164\x73\x74\162\141\160\x2d\x73\157\x63\151\141\154\56\x63\x73\x73", array(), $fX = null, $vI = false);
        wp_enqueue_style("\155\157\x2d\x77\160\x2d\x62\x6f\157\x74\x73\164\x72\141\x70\55\155\141\151\x6e", MOC_URL . "\x72\145\x73\x6f\165\162\143\145\x73\57\143\163\x73\x2f\x62\x6f\157\164\163\x74\x72\141\160\x2e\x6d\151\156\x2d\x70\x72\x65\x76\151\145\x77\56\143\x73\x73", array(), $fX = null, $vI = false);
        wp_enqueue_style("\155\x6f\55\167\160\55\x66\157\x6e\164\x2d\141\167\145\163\x6f\x6d\x65", MOC_URL . "\162\x65\x73\x6f\x75\x72\143\145\163\x2f\x63\x73\x73\x2f\146\157\x6e\x74\x2d\141\x77\x65\x73\x6f\155\145\56\x6d\151\156\56\143\163\x73\x3f\x76\145\x72\163\x69\157\x6e\75\64\56\70", array(), $fX = null, $vI = false);
        wp_enqueue_style("\x6d\157\55\x77\x70\55\146\x6f\x6e\x74\x2d\x61\167\145\163\157\x6d\145", MOC_URL . "\162\x65\163\157\165\162\143\x65\x73\x2f\143\x73\163\57\146\157\156\x74\x2d\141\x77\x65\163\157\x6d\x65\56\x63\x73\x73\x3f\x76\x65\x72\x73\151\157\156\75\64\56\x38", array(), $fX = null, $vI = false);
        if (!(isset($_REQUEST["\x74\x61\142"]) && "\x6c\151\143\x65\156\x73\x69\x6e\147" === $_REQUEST["\164\x61\x62"])) {
            goto rs;
        }
        wp_enqueue_style("\x6d\x6f\137\157\x61\x75\164\x68\x5f\142\x6f\x6f\164\x73\164\162\x61\160\x5f\143\163\x73", MOC_URL . "\162\x65\x73\157\165\162\x63\x65\163\57\x63\163\x73\x2f\142\x6f\157\164\x73\x74\x72\141\160\57\142\157\x6f\164\x73\x74\162\141\x70\x2e\155\151\156\x2e\143\163\163", array(), $fX = null, $vI = false);
        rs:
    }
    public function plugin_settings_script()
    {
        wp_enqueue_script("\x6d\157\x5f\157\x61\165\164\150\x5f\141\144\x6d\151\156\x5f\163\145\x74\x74\x69\156\x67\163\137\163\x63\x72\x69\x70\164", MOC_URL . "\162\145\163\157\x75\x72\143\145\163\57\152\163\57\x73\x65\164\x74\151\156\x67\x73\56\x6a\x73", array(), $fX = null, $vI = false);
        wp_enqueue_script("\155\157\x5f\x6f\141\165\x74\150\137\141\x64\155\x69\156\x5f\x73\x65\x74\x74\x69\x6e\147\x73\137\160\150\x6f\x6e\x65\137\x73\143\162\151\160\164", MOC_URL . "\x72\145\x73\x6f\x75\162\x63\145\163\x2f\x6a\x73\57\160\x68\x6f\156\x65\x2e\152\163", array(), $fX = null, $vI = false);
        wp_enqueue_script("\155\157\137\x6f\141\x75\x74\150\137\141\x64\x6d\151\156\137\x73\x65\x74\x74\x69\x6e\x67\163\137\x64\141\x74\x61\164\x61\142\x6c\145", MOC_URL . "\x72\145\163\157\165\x72\x63\x65\163\x2f\152\x73\57\x6a\161\165\145\162\x79\x2e\x64\141\x74\141\124\141\142\154\x65\163\56\155\x69\x6e\x2e\x6a\163", array(), $fX = null, $vI = false);
        if (!(isset($_REQUEST["\164\141\142"]) && "\x6c\x69\x63\x65\156\x73\x69\156\147" === $_REQUEST["\164\141\142"])) {
            goto zb;
        }
        wp_enqueue_script("\x6d\x6f\137\157\141\x75\164\x68\137\x6d\157\x64\x65\162\x6e\151\x7a\162\x5f\163\x63\x72\151\x70\x74", MOC_URL . "\x72\x65\x73\x6f\x75\162\143\x65\x73\57\152\163\57\155\157\144\x65\x72\156\151\x7a\x72\56\152\163", array(), $fX = null, $vI = true);
        wp_enqueue_script("\x6d\x6f\137\x6f\x61\165\164\150\x5f\160\x6f\160\x6f\x76\x65\162\x5f\x73\x63\162\x69\x70\x74", MOC_URL . "\162\x65\x73\157\x75\162\143\145\x73\57\x6a\x73\x2f\142\157\157\164\x73\164\162\x61\160\57\160\157\160\160\x65\x72\56\x6d\151\x6e\x2e\x6a\x73", array(), $fX = null, $vI = true);
        wp_enqueue_script("\x6d\x6f\x5f\x6f\x61\165\x74\150\x5f\x62\x6f\x6f\164\163\x74\162\x61\x70\x5f\x73\x63\x72\x69\160\x74", MOC_URL . "\162\x65\163\157\165\162\143\x65\163\x2f\152\x73\57\142\x6f\x6f\x74\163\164\x72\x61\160\57\x62\x6f\x6f\x74\x73\x74\x72\141\160\56\155\x69\x6e\56\152\x73", array(), $fX = null, $vI = true);
        zb:
    }
    public function load_current_tab($U6)
    {
        global $Sk;
        $nU = 0 === $Sk->get_versi();
        $Qg = false;
        if ($nU) {
            goto dQ;
        }
        $Qg = $Sk->mo_oauth_client_get_option("\155\157\x5f\157\141\165\x74\x68\137\x63\x6c\x69\145\x6e\164\137\x6c\x6f\x61\144\137\x61\x6e\x61\x6c\171\x74\151\x63\163");
        $Qg = boolval($Qg) ? boolval($Qg) : false;
        $nU = $Sk->check_versi(1) && $Sk->mo_oauth_is_clv();
        dQ:
        if ("\141\143\143\157\165\156\x74" === $U6 || !$nU) {
            goto YF;
        }
        if ("\143\x75\163\x74\157\155\x69\172\x61\x74\x69\157\156" === $U6 && $nU) {
            goto ks;
        }
        if ("\x73\151\147\x6e\151\156\163\x65\x74\164\x69\156\x67\163" === $U6 && $nU) {
            goto yJ;
        }
        if ($Qg && "\141\x6e\x61\154\171\x74\x69\x63\x73" === $U6 && $nU) {
            goto yu;
        }
        if ("\154\151\143\x65\156\x73\151\156\x67" === $U6) {
            goto w4;
        }
        if ("\162\x65\x71\x75\145\x73\x74\146\157\x72\x64\x65\155\x6f" === $U6 && $nU) {
            goto Af;
        }
        if (empty($U6) && $nU) {
            goto hM;
        }
        $this->instance_helper->get_clientappui_instance()->render_free_ui();
        goto BY;
        YF:
        $Mg = $this->instance_helper->get_accounts_instance();
        if ($Sk->mo_oauth_client_get_option("\x76\145\x72\x69\146\x79\x5f\143\x75\163\164\x6f\155\145\162") === "\164\162\x75\145") {
            goto KO;
        }
        if (trim($Sk->mo_oauth_client_get_option("\155\157\137\157\x61\165\x74\150\x5f\x61\x64\x6d\x69\x6e\137\145\155\x61\151\154")) !== '' && trim($Sk->mo_oauth_client_get_option("\155\x6f\x5f\x6f\x61\165\x74\x68\x5f\x61\144\155\x69\x6e\x5f\x61\160\151\x5f\x6b\145\x79")) === '' && $Sk->mo_oauth_client_get_option("\156\x65\167\x5f\162\x65\147\151\163\x74\x72\141\x74\x69\x6f\x6e") !== "\164\x72\x75\145") {
            goto Oy;
        }
        if (!$Sk->mo_oauth_is_clv() && $Sk->check_versi(1) && $Sk->mo_oauth_is_customer_registered()) {
            goto LV;
        }
        $Mg->register();
        goto uA;
        KO:
        $Mg->verify_password_ui();
        goto uA;
        Oy:
        $Mg->verify_password_ui();
        goto uA;
        LV:
        $Mg->mo_oauth_lp();
        uA:
        goto BY;
        ks:
        $this->instance_helper->get_customization_instance()->render_free_ui();
        goto BY;
        yJ:
        $this->instance_helper->get_sign_in_settings_instance()->render_free_ui();
        goto BY;
        yu:
        $this->instance_helper->get_user_analytics()->render_ui();
        goto BY;
        w4:
        (new Licensing())->show_licensing_page();
        goto BY;
        Af:
        $this->instance_helper->get_requestdemo_instance()->render_free_ui();
        goto BY;
        hM:
        ?>
					<a id="goregister" style="display:none;" href="<?php 
        echo add_query_arg(array("\164\x61\x62" => "\143\x6f\x6e\146\x69\x67"), htmlentities($_SERVER["\122\105\x51\x55\105\123\124\x5f\x55\x52\111"]));
        ?>
">

					<script>
						location.href = jQuery('#goregister').attr('href');
					</script>
				<?php 
        BY:
    }
}
