<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/


require_once "\x5f\141\165\x74\x6f\x6c\157\141\144\x2e\x70\x68\x70";
class mo_oauth
{
    function __construct()
    {
        add_action("\x61\144\x6d\x69\x6e\x5f\x6d\145\156\x75", array($this, "\x6d\151\x6e\x69\x6f\162\x61\156\147\x65\137\155\145\x6e\165"));
        add_action("\x69\x6e\x69\164", array($this, "\x6d\151\x6e\151\157\x72\141\x6e\147\145\137\157\141\165\164\x68\137\160\141\147\x65\137\x72\x65\x73\164\x72\151\143\x74"));
        add_action("\167\160\x5f\146\157\157\164\145\x72", array($this, "\x6d\x6f\137\157\x61\165\164\x68\137\x63\154\x69\145\156\164\137\x69\x6d\x70\154\x69\x63\151\164\x5f\146\x72\x61\x67\x6d\x65\156\164\x5f\x68\x61\156\144\154\145\162"));
        add_action("\141\x64\x6d\x69\x6e\137\151\x6e\151\164", array($this, "\x6d\151\x6e\x69\x6f\x72\x61\156\x67\145\137\x6f\x61\x75\164\150\x5f\x73\x61\166\145\137\x73\145\164\164\x69\156\147\163"));
        add_action("\x70\154\x75\x67\x69\x6e\163\137\154\157\x61\x64\x65\x64", array($this, "\155\157\137\x6c\x6f\147\x69\156\x5f\x77\151\x64\x67\x65\x74\137\x74\145\x78\x74\137\x64\x6f\x6d\141\x69\156"));
        add_action("\x61\144\155\151\x6e\x5f\145\x6e\x71\x75\145\165\x65\137\x73\x63\x72\x69\160\x74\163", array($this, "\160\154\x75\147\151\x6e\x5f\x73\x65\x74\164\x69\x6e\x67\x73\137\163\164\171\x6c\145"));
        add_action("\x61\144\155\x69\x6e\x5f\x65\x6e\x71\165\145\165\x65\137\163\x63\162\151\160\164\x73", array($this, "\160\154\165\x67\151\x6e\137\163\145\x74\x74\x69\156\147\163\137\x73\x63\x72\x69\160\x74"));
        add_action("\x77\x70\x5f\x65\x6e\x71\165\x65\x75\145\137\163\x63\162\x69\160\164\x73", array($this, "\160\x6c\165\x67\151\x6e\137\163\145\x74\164\151\x6e\x67\x73\137\x73\x74\x79\x6c\x65"), 5);
        add_action("\163\x68\157\x77\x5f\165\x73\x65\162\x5f\x70\162\x6f\x66\x69\x6c\x65", array($this, "\x73\150\157\x77\137\165\x73\x65\x72\x5f\160\x72\x6f\146\x69\x6c\145\x5f\x63\x75\x73\164\157\x6d"));
        add_action("\145\x64\x69\164\137\x75\163\145\x72\137\x70\x72\x6f\x66\x69\x6c\x65", array($this, "\x73\150\x6f\167\137\x75\163\x65\162\x5f\x70\162\x6f\x66\151\x6c\x65\137\143\165\x73\x74\x6f\155"));
        register_activation_hook(__FILE__, array($this, "\x6d\x6f\x5f\157\x61\x75\164\150\x5f\141\x63\164\x69\x76\141\164\145"));
        register_deactivation_hook(__FILE__, array($this, "\x6d\x6f\x5f\x6f\141\165\164\150\137\x64\x65\141\143\164\151\x76\141\164\x65"));
        remove_action("\x61\144\155\x69\x6e\137\x6e\x6f\164\x69\x63\145\163", array($this, "\x6d\157\137\x6f\x61\x75\x74\x68\x5f\x73\165\x63\143\x65\163\163\x5f\x6d\145\163\163\x61\x67\145"));
        remove_action("\141\x64\x6d\x69\x6e\137\156\x6f\164\x69\x63\x65\x73", array($this, "\155\157\x5f\x6f\x61\165\x74\150\137\x65\x72\x72\x6f\x72\137\155\x65\x73\x73\x61\x67\145"));
        mo_oauth_client_update_option("\155\157\137\x6f\x61\x75\x74\x68\137\x6c\157\x67\x69\x6e\137\151\143\157\x6e\137\x73\x70\141\x63\145", "\65");
        mo_oauth_client_update_option("\x6d\x6f\137\157\x61\165\x74\150\137\x6c\157\x67\x69\156\x5f\x69\143\x6f\x6e\x5f\x63\x75\163\164\x6f\155\x5f\x77\151\x64\164\x68", "\x33\62\x35\56\64\63");
        mo_oauth_client_update_option("\x6d\157\137\x6f\x61\x75\x74\150\137\x6c\157\x67\x69\x6e\x5f\151\143\157\x6e\137\x63\165\163\x74\157\155\x5f\150\145\x69\147\x68\164", "\x39\x2e\x36\x33");
        add_option("\155\157\x5f\x6f\x61\165\x74\x68\137\154\x6f\x67\151\x6e\137\151\x63\157\x6e\x5f\143\x75\x73\x74\x6f\x6d\137\x73\151\x7a\145", "\x33\x35");
        add_option("\155\157\137\x6f\141\165\164\150\x5f\154\157\x67\151\x6e\137\x69\x63\x6f\156\x5f\143\165\x73\164\x6f\x6d\x5f\x63\157\154\x6f\162", "\x32\x42\64\61\x46\x46");
        add_option("\155\157\x5f\157\x61\x75\164\x68\137\x6c\x6f\147\151\x6e\137\151\x63\x6f\156\137\143\165\163\164\x6f\155\137\x62\x6f\x75\x6e\x64\141\162\x79", "\64");
        add_shortcode("\x6d\157\137\157\x61\x75\x74\x68\137\154\x6f\x67\x69\156", array($this, "\x6d\x6f\137\157\x61\165\164\150\137\163\x68\157\x72\164\x63\157\x64\x65\137\154\x6f\147\x69\x6e"));
        add_action("\154\157\147\151\x6e\x5f\x66\x6f\x72\155", array($this, "\155\157\x5f\x6f\x61\165\x74\x68\137\x63\x6c\x69\x65\x6e\164\137\155\x6f\x64\x69\x66\171\137\154\x6f\147\x69\x6e\137\x66\157\x72\x6d"));
        add_action("\167\x70\x5f\x6c\x6f\147\x6f\x75\x74", array($this, "\x6d\x6f\137\157\141\165\x74\x68\x5f\143\154\x69\x65\x6e\x74\137\141\x75\x74\x6f\x5f\x72\x65\144\151\162\145\x63\x74\137\x65\x78\x74\145\162\x6e\141\x6c\x5f\141\x66\164\x65\x72\137\154\x6f\147\x6f\x75\164"));
        if (!mo_oauth_client_get_option("\x6d\x6f\x5f\157\x61\x75\164\x68\x5f\x63\x6c\x69\145\156\x74\x5f\x65\156\141\142\x6c\145\137\x70\141\x73\x73\x77\x6f\162\144\x5f\147\x72\141\x6e\164")) {
            goto ccX;
        }
        remove_filter("\x61\165\x74\x68\x65\x6e\164\151\143\141\164\x65", "\x77\160\137\x61\x75\x74\x68\x65\x6e\164\151\143\x61\x74\145\137\x75\163\x65\x72\x6e\141\155\145\137\160\x61\163\163\167\x6f\x72\x64", 20, 3);
        $Ih = new Mo_OAuth_Login_Hanlder();
        add_filter("\x61\x75\164\x68\x65\x6e\x74\x69\x63\x61\164\145", array($Ih, "\155\x6f\137\x6f\141\x75\164\150\x5f\154\x6f\147\151\156"), 20, 3);
        ccX:
        add_filter("\x6d\x6f\137\x6f\x61\165\x74\150\137\162\x65\146\x72\x65\x73\x68\x5f\164\157\x6b\x65\156", array($this, "\x6d\x6f\137\157\x61\165\x74\x68\x5f\x72\145\x66\162\145\163\x68\x5f\164\x6f\x6b\x65\156"));
    }
    function show_user_profile_custom($user)
    {
        $Op = array();
        $S1 = wp_load_alloptions();
        ?>
			<h3>Extra profile information</h3>

				<table class="form-table">

					<tr>
						<td><b><label for="user">User Name</label></b></td>

						<td>
							<b><?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
        echo esc_attr(get_the_author_meta("\144\x69\x73\x70\154\141\x79\x5f\156\141\x6d\145", $user->ID));
        ?>
</b></td><br>
							
						</tr>
						<tr><td><?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
        echo "\101\x64\144\151\x74\151\x6f\156\x61\x6c\x20\x49\156\146\x6f\40\72\x20";
        ?>
</td></tr>
						<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
        $P3 = -1;
        foreach ($S1 as $rJ => $O2) {
            if (strpos($rJ, "\155\x6f\x5f\x6f\x61\165\x74\150\137\143\x75\x73\164\x6f\x6d\137\x61\x74\x74") === false) {
                goto hA0;
            }
            ?>
								<tr>

									<td>
										<b>
											<font color="#FF0000"></font>
											<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
            $P3++;
            echo mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\x75\x74\x68\137\x74\145\x6d\160\x5f\x6b\145\x79" . $P3);
            ?>
										</b>
									</td>
									<td>
										<b>
											<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
            echo $O2;
            ?>
										</b>
									</td>
								</tr><?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
            goto ELe;
            hA0:
            ELe:
            UlP:
        }
        dv7:
        ?>
				</table>
			
			<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
    }
    function mo_oauth_success_message()
    {
        $W3 = "\145\x72\162\157\x72";
        $cQ = mo_oauth_client_get_option("\155\x65\163\x73\141\147\145");
        echo "\74\144\x69\166\x20\x63\x6c\x61\x73\x73\x3d\47" . $W3 . "\47\x3e\x20\x3c\160\x3e" . $cQ . "\x3c\57\160\x3e\x3c\x2f\144\x69\166\x3e";
    }
    function mo_oauth_error_message()
    {
        $W3 = "\x75\160\144\141\164\145\144";
        $cQ = mo_oauth_client_get_option("\x6d\145\163\163\x61\147\x65");
        echo "\x3c\144\151\166\x20\143\x6c\141\x73\163\x3d\x27" . $W3 . "\x27\76\x3c\160\76" . $cQ . "\x3c\57\160\x3e\74\x2f\144\151\166\x3e";
    }
    public function mo_oauth_activate()
    {
        mo_oauth_client_update_option("\x6d\157\x5f\157\141\165\x74\x68\137\143\x6c\151\x65\x6e\x74\x5f\141\x75\164\x6f\x5f\x72\145\x67\x69\163\x74\145\x72", 1);
    }
    public function mo_oauth_deactivate()
    {
        do_action("\x63\154\x65\141\162\137\157\x73\x5f\x63\x61\143\150\x65");
        mo_oauth_client_delete_option("\155\157\x5f\157\x61\165\164\150\137\154\x76");
        mo_oauth_client_delete_option("\150\157\x73\x74\x5f\156\141\155\x65");
        mo_oauth_client_delete_option("\156\x65\x77\137\162\x65\147\x69\163\x74\x72\141\164\x69\157\156");
        mo_oauth_client_delete_option("\x6d\157\137\157\x61\x75\x74\150\137\x61\144\x6d\x69\x6e\x5f\160\150\x6f\x6e\x65");
        mo_oauth_client_delete_option("\x76\145\162\x69\x66\x79\137\x63\165\163\164\157\x6d\145\162");
        mo_oauth_client_delete_option("\x6d\157\x5f\157\x61\165\x74\150\x5f\141\x64\155\151\x6e\x5f\143\165\x73\x74\x6f\x6d\145\162\x5f\153\x65\171");
        mo_oauth_client_delete_option("\x6d\157\137\x6f\141\x75\x74\x68\137\141\144\x6d\151\156\137\x61\160\151\137\153\x65\x79");
        mo_oauth_client_delete_option("\x6d\157\x5f\x6f\x61\x75\x74\150\x5f\156\x65\x77\x5f\x63\x75\x73\x74\157\x6d\145\162");
        mo_oauth_client_delete_option("\143\165\x73\x74\x6f\x6d\145\162\137\x74\157\153\145\x6e");
        mo_oauth_client_delete_option("\155\x65\x73\163\x61\147\x65");
        mo_oauth_client_delete_option("\x6d\x6f\x5f\157\141\165\x74\x68\x5f\x72\x65\x67\151\x73\x74\162\x61\x74\151\x6f\156\x5f\x73\x74\141\164\165\x73");
    }
    private $settings = array("\x6d\157\x5f\x6f\x61\x75\164\x68\x5f\x66\141\x63\x65\x62\157\x6f\153\137\143\154\151\x65\x6e\164\x5f\x73\x65\x63\162\x65\164" => '', "\x6d\x6f\137\x6f\141\165\x74\x68\137\x66\141\143\x65\142\157\x6f\153\137\143\154\x69\145\156\164\137\151\144" => '', "\x6d\x6f\x5f\157\141\x75\164\x68\137\x66\141\x63\x65\142\157\157\x6b\x5f\x65\156\x61\142\x6c\x65\144" => 0);
    function miniorange_menu()
    {
        $Lk = add_menu_page("\115\117\x20\117\x41\x75\x74\150\x20\x53\145\164\164\x69\x6e\x67\x73\40" . __("\103\157\x6e\146\151\x67\165\x72\x65\40\x4f\101\165\164\x68", "\x6d\x6f\137\x6f\x61\x75\x74\150\137\163\x65\x74\164\151\x6e\147\x73"), "\155\151\156\x69\117\162\141\x6e\147\145\x20\x4f\101\165\x74\150", "\x61\x64\155\151\x6e\x69\x73\x74\x72\x61\164\x6f\x72", "\x6d\x6f\137\x6f\141\x75\x74\x68\x5f\163\x65\164\164\151\156\x67\163", array($this, "\155\157\x5f\157\x61\x75\x74\150\137\154\157\147\151\156\x5f\x6f\x70\x74\x69\157\x6e\x73"), plugin_dir_url(__FILE__) . "\151\155\x61\147\x65\x73\x2f\x6d\151\156\151\x6f\x72\x61\x6e\x67\x65\56\160\156\147");
        if (!(mo_oauth_client_get_option("\x6d\157\137\x6f\x61\x75\x74\x68\137\156\145\x77\x5f\x63\165\163\x74\157\x6d\145\x72") != 1)) {
            goto ebt;
        }
        $Lk = add_submenu_page("\155\157\137\157\141\x75\x74\x68\137\163\145\x74\164\151\156\x67\x73", "\x4d\117\x20\x4c\157\147\x69\156\40" . __("\101\144\x76\141\156\x63\145\144\x20\x45\126\105\40\117\156\x6c\151\x6e\x65\x20\x53\145\164\164\151\156\x67\163"), __("\101\144\x76\141\156\143\145\144\40\x45\x56\105\40\x4f\156\154\x69\x6e\145\40\123\145\164\x74\151\156\147\163"), "\141\x64\155\x69\156\x69\x73\x74\x72\141\164\157\162", "\x6d\x6f\x5f\157\141\165\x74\150\x5f\145\166\145\x5f\157\x6e\154\x69\x6e\145\x5f\x73\x65\164\x75\160", "\x6d\x6f\x5f\145\166\x65\137\x6f\x6e\154\x69\156\145\x5f\x63\157\x6e\x66\151\x67");
        ebt:
        global $az;
        if (!(is_array($az) and isset($az["\x6d\x6f\137\x6f\141\x75\x74\x68\137\163\x65\164\x74\151\x6e\x67\x73"]))) {
            goto o7U;
        }
        $az["\155\157\x5f\157\x61\165\x74\x68\x5f\x73\145\x74\164\151\x6e\x67\x73"][0][0] = __("\103\x6f\x6e\146\x69\x67\x75\x72\x65\40\117\x41\165\164\x68", "\155\157\137\x6f\141\x75\x74\x68\x5f\154\157\x67\x69\156");
        o7U:
    }
    function mo_oauth_login_options()
    {
        global $wpdb;
        mo_oauth_client_update_option("\150\157\x73\x74\x5f\156\141\155\x65", "\150\164\164\x70\163\x3a\x2f\x2f\154\157\x67\151\156\x2e\x78\x65\x63\x75\162\x69\146\x79\56\x63\x6f\x6d");
        $Bp = mo_oauth_is_customer_registered();
        mo_oauth_client_load_layout($Bp);
    }
    function plugin_settings_style()
    {
        wp_enqueue_style("\155\157\x5f\157\141\165\164\x68\x5f\x61\144\155\x69\156\137\163\145\x74\x74\x69\x6e\147\x73\137\x73\x74\171\x6c\x65", plugins_url("\143\163\x73\x2f\x73\164\171\x6c\x65\x5f\163\x65\x74\x74\151\156\147\x73\x2e\x63\x73\x73", __FILE__));
        wp_enqueue_style("\155\x6f\137\157\141\x75\x74\x68\137\x61\x64\x6d\x69\156\137\163\145\164\164\x69\x6e\147\x73\x5f\160\150\157\156\145\x5f\x73\164\x79\154\x65", plugins_url("\143\163\163\57\160\x68\157\x6e\145\x2e\143\163\x73", __FILE__));
        wp_enqueue_style("\155\157\137\x77\160\x6e\x73\x5f\x61\144\x6d\151\x6e\x5f\163\x65\164\164\x69\156\x67\163\137\x64\141\164\x61\164\x61\x62\154\x65\137\163\x74\171\x6c\145", plugins_url("\x63\x73\163\x2f\152\161\x75\145\x72\171\56\x64\141\164\x61\124\x61\x62\x6c\x65\x73\x2e\155\151\156\56\143\163\x73", __FILE__));
        wp_enqueue_style("\155\157\55\x77\x70\x2d\142\157\157\164\163\164\x72\x61\x70\55\x73\157\x63\x69\x61\x6c", plugins_url("\x63\163\163\x2f\x62\157\x6f\x74\163\x74\162\141\160\x2d\163\157\x63\151\x61\x6c\x2e\x63\163\x73", __FILE__), false);
        wp_enqueue_style("\x6d\x6f\55\167\x70\55\x62\157\157\164\x73\x74\x72\141\160\55\x6d\141\151\x6e", plugins_url("\143\163\163\57\142\x6f\157\164\163\164\x72\141\x70\x2e\155\x69\x6e\55\x70\162\x65\x76\x69\145\x77\56\x63\163\x73", __FILE__), false);
        wp_enqueue_style("\155\157\55\x77\160\55\x66\157\156\164\55\x61\167\x65\x73\157\155\145", plugins_url("\x63\163\x73\57\x66\x6f\156\164\x2d\x61\167\145\163\157\155\x65\x2e\155\151\156\56\143\x73\x73\x3f\x76\145\x72\163\151\x6f\156\75\x34\x2e\70", __FILE__), false);
        wp_enqueue_style("\x6d\157\55\x77\x70\55\146\157\156\164\x2d\x61\167\145\x73\x6f\155\x65", plugins_url("\x63\x73\163\x2f\146\157\156\x74\55\x61\x77\145\163\157\x6d\145\x2e\143\163\x73\x3f\x76\145\x72\x73\x69\157\x6e\x3d\64\x2e\70", __FILE__), false);
    }
    function plugin_settings_script()
    {
        wp_enqueue_script("\155\157\137\x77\160\x6e\163\137\x61\144\x6d\x69\156\x5f\x64\x61\164\x61\x74\141\142\154\x65\137\x73\143\x72\151\160\x74", plugins_url("\152\x73\x2f\x6a\x71\165\145\162\171\x2e\144\141\x74\141\124\141\142\x6c\x65\163\x2e\155\151\156\x2e\x6a\163", __FILE__));
        wp_enqueue_script("\155\157\137\x6f\141\x75\164\x68\137\x61\144\155\151\156\x5f\163\x65\x74\164\151\156\147\x73\137\163\x63\x72\151\x70\x74", plugins_url("\x6a\163\57\x73\x65\x74\x74\151\156\147\163\56\152\163", __FILE__));
        wp_enqueue_script("\x6d\157\137\x6f\141\x75\x74\x68\137\x61\x64\155\x69\x6e\x5f\x73\145\164\x74\x69\156\147\163\137\160\x68\x6f\x6e\x65\137\163\x63\x72\151\160\164", plugins_url("\x6a\x73\57\x70\150\157\156\x65\56\x6a\x73", __FILE__));
        wp_enqueue_script("\x6d\x6f\x5f\157\141\x75\164\x68\x5f\141\144\155\x69\x6e\x5f\x73\145\164\x74\x69\156\147\x73\137\x73\x63\x72\151\160\164", plugins_url("\x6a\163\57\142\x6f\x6f\164\x73\x74\x72\141\160\x2e\155\x69\156\56\x6a\163", __FILE__));
    }
    function mo_login_widget_text_domain()
    {
        load_plugin_textdomain("\x66\x6c\x77", FALSE, basename(dirname(__FILE__)) . "\x2f\154\x61\x6e\x67\165\x61\147\145\x73");
    }
    private function mo_oauth_show_success_message()
    {
        remove_action("\141\144\x6d\151\x6e\137\156\x6f\164\151\143\145\163", array($this, "\x6d\x6f\x5f\x6f\141\165\x74\x68\137\163\x75\x63\x63\145\x73\x73\x5f\x6d\145\x73\x73\x61\147\145"));
        add_action("\141\144\155\x69\x6e\137\x6e\157\164\151\x63\x65\163", array($this, "\x6d\x6f\x5f\157\x61\165\x74\x68\137\145\162\x72\157\162\137\155\x65\163\x73\141\147\145"));
    }
    private function mo_oauth_show_error_message()
    {
        remove_action("\141\144\155\x69\156\137\156\x6f\x74\151\143\x65\x73", array($this, "\155\x6f\x5f\x6f\141\165\x74\x68\x5f\x65\162\162\x6f\162\x5f\x6d\145\x73\x73\x61\x67\145"));
        add_action("\x61\144\x6d\151\x6e\x5f\156\x6f\164\x69\x63\x65\163", array($this, "\x6d\157\x5f\157\x61\x75\164\x68\x5f\163\165\x63\143\145\x73\x73\137\x6d\x65\163\x73\141\x67\145"));
    }
    public function mo_oauth_check_empty_or_null($O2)
    {
        if (!(!isset($O2) || empty($O2))) {
            goto SYJ;
        }
        return true;
        SYJ:
        return false;
    }
    function mo_oauth_client_modify_login_form()
    {
        echo "\74\151\156\x70\x75\164\x20\164\171\160\145\75\x22\150\x69\x64\x64\145\x6e\42\40\156\141\155\x65\75\42\157\x61\x75\x74\x68\154\157\x67\x69\x6e\x22\40\166\x61\x6c\x75\145\x3d\42\x66\x61\154\163\145\x22\76" . "\xa";
    }
    function mo_oauth_client_auto_redirect_external_after_logout()
    {
        if (!(mo_oauth_client_get_option("\x6d\x6f\x5f\157\x61\165\164\x68\137\x63\154\151\145\x6e\x74\x5f\141\x66\164\145\x72\x5f\x6c\157\x67\x6f\x75\164\x5f\165\x72\x6c") && mo_oauth_client_get_option("\x6d\x6f\137\157\141\165\x74\x68\x5f\143\x6c\x69\145\x6e\x74\x5f\141\x66\164\145\x72\x5f\x6c\x6f\147\x6f\x75\164\137\x75\x72\154") != '')) {
            goto iZg;
        }
        wp_redirect(mo_oauth_client_get_option("\x6d\x6f\x5f\157\x61\x75\x74\x68\x5f\x63\x6c\151\x65\x6e\164\x5f\x61\146\164\145\x72\137\x6c\x6f\147\157\x75\x74\x5f\165\x72\x6c"));
        die;
        iZg:
    }
    function mo_oauth_refresh_token($aH)
    {
        $L0 = new Mo_OAuth_Hanlder();
        $vQ = mo_oauth_client_get_option("\155\x6f\137\x6f\141\x75\164\150\137\x61\x70\160\163\137\x6c\151\163\x74");
        $X6 = false;
        foreach ($vQ as $OY => $AO) {
            $X6 = $AO;
            goto kay;
            bjM:
        }
        kay:
        if (!$X6) {
            goto IqC;
        }
        return $L0->getRefreshToken($X6["\x61\x63\143\x65\x73\163\164\x6f\153\x65\156\x75\162\154"], "\162\x65\146\162\x65\163\150\x5f\x74\157\x6b\145\156", $X6["\x63\154\x69\x65\x6e\164\151\x64"], $X6["\x63\154\151\145\156\x74\x73\145\x63\x72\145\164"], $aH, $X6["\162\145\x64\x69\162\x65\143\164\165\x72\x69"]);
        IqC:
        return false;
    }
    function miniorange_oauth_page_restrict()
    {
        if (!(!is_user_logged_in() && mo_oauth_client_get_option("\x6d\x6f\137\x6f\x61\165\x74\150\x5f\x63\x6c\x69\x65\x6e\x74\x5f\162\x65\163\164\x72\151\143\164\137\x74\157\x5f\154\157\x67\x67\x65\144\x5f\151\x6e\137\165\x73\x65\162\163") == 1)) {
            goto feV;
        }
        if (!(isset($_REQUEST["\157\141\165\x74\x68\154\x6f\147\151\x6e"]) && $_REQUEST["\x6f\141\165\164\150\x6c\157\147\151\156"] == "\146\141\154\163\145" || isset($_REQUEST["\x63\x6f\x64\x65"]) || isset($_REQUEST["\141\x63\143\145\163\x73\137\164\x6f\153\145\156"]) || isset($_REQUEST["\x69\144\137\164\157\x6b\145\x6e"]) || isset($_REQUEST["\x74\x6f\x6b\x65\x6e"]))) {
            goto KLD;
        }
        return;
        KLD:
        $mj = mo_oauth_client_get_option("\155\157\137\157\141\x75\164\150\x5f\x63\154\151\x65\156\x74\x5f\141\x75\164\x6f\137\x72\145\144\x69\162\x65\x63\x74\137\x65\170\143\x6c\x75\144\x65\x5f\x75\x72\x6c\163");
        if (empty($mj)) {
            goto NBB;
        }
        $DL = (isset($_SERVER["\110\x54\x54\120\123"]) ? "\x68\x74\164\160\x73" : "\x68\x74\164\160") . "\x3a\57\57{$_SERVER["\110\x54\124\x50\x5f\x48\x4f\x53\x54"]}{$_SERVER["\x52\x45\121\x55\x45\x53\124\x5f\x55\x52\111"]}";
        $DL = trim($DL, "\x2f");
        $zP = explode("\xa", $mj);
        foreach ($zP as $Ms) {
            $Ms = trim($Ms, "\57");
            if (empty($Ms)) {
                goto ni4;
            }
            if (!($DL == $Ms)) {
                goto b23;
            }
            return;
            b23:
            ni4:
            OuK:
        }
        JAz:
        NBB:
        $vQ = mo_oauth_client_get_option("\155\x6f\137\x6f\141\165\x74\x68\137\x61\160\160\x73\137\154\151\163\164");
        if (!($vQ && sizeof($vQ) >= 1)) {
            goto NcA;
        }
        if (!is_array($vQ)) {
            goto v2u;
        }
        foreach ($vQ as $OY => $AO) {
            $AF = mo_oauth_client_get_option("\155\157\137\157\x61\165\x74\150\137\x63\x6c\151\x65\156\164\x5f\141\x66\x74\145\x72\137\x6c\x6f\147\x69\156\x5f\165\x72\154");
            if (!empty($AF)) {
                goto RVZ;
            }
            $DL = (isset($_SERVER["\x48\124\124\120\x53"]) ? "\150\164\164\160\163" : "\150\164\164\160") . "\72\57\57{$_SERVER["\110\x54\124\120\x5f\110\117\x53\124"]}{$_SERVER["\122\105\121\125\105\123\x54\x5f\125\x52\x49"]}";
            goto A_U;
            RVZ:
            $DL = mo_oauth_client_get_option("\x6d\157\x5f\x6f\x61\165\x74\x68\137\x63\154\x69\x65\156\x74\137\x61\x66\x74\x65\x72\137\154\x6f\x67\x69\156\x5f\x75\162\154");
            A_U:
            wp_cache_set("\157\141\x75\164\150\x5f\x72\x65\160\154\141\171\163\164\x61\x74\x65", $DL, "\155\157\x5f\157\x61\165\x74\150\x5f\143\154\x69\x65\156\x74\x5f\x70\162\145\155\x69\165\x6d");
            echo "\x50\154\x65\141\163\x65\x20\x77\x61\x69\x74\x2e\x2e\56\56";
            if (mo_oauth_client_get_option("\155\x6f\x5f\157\141\165\x74\x68\x5f\x63\x6c\151\145\x6e\164\x5f\160\x6f\160\x75\x70\x5f\154\x6f\x67\151\156")) {
                goto Crr;
            }
            echo "\74\163\143\x72\151\x70\164\x3e\x77\x69\x6e\144\157\167\x2e\x6c\157\143\141\164\151\157\x6e\x2e\x68\162\x65\x66\40\x3d\x20\47" . site_url() . "\x2f\x3f\x6f\160\164\x69\157\156\x3d\x6f\141\165\164\x68\162\x65\144\x69\x72\x65\143\164\x26\141\x70\x70\x5f\x6e\141\155\x65\x3d" . $OY . "\46\x72\145\x64\x69\x72\145\143\x74\x5f\165\x72\x6c\75" . rawurlencode($DL) . "\x27\73\x3c\57\x73\x63\x72\151\x70\164\x3e";
            goto ufC;
            Crr:
            echo "\74\x73\143\x72\151\160\164\76\x66\165\x6e\143\x74\151\x6f\x6e\x20\x48\141\156\x64\154\x65\120\x6f\x70\x75\160\x52\x65\x73\165\x6c\164\x28\162\x65\163\x75\154\164\51\173\167\x69\x6e\144\157\x77\56\x6c\x6f\143\x61\164\151\157\156\x2e\x68\162\145\146\40\75\40\x72\145\x73\165\x6c\164\x3b\175\167\x69\x6e\x64\157\167\x2e\x6f\160\x65\156\x65\x72\x2e\110\x61\x6e\x64\154\145\120\x6f\160\x75\160\x52\145\x73\x75\x6c\x74\x28\42" . $DL . "\42\x29\73\167\x69\156\144\157\x77\56\143\154\157\x73\145\50\51\x3b\x3c\x2f\x73\143\162\x69\160\x74\x3e";
            echo "\x3c\x73\x63\x72\x69\x70\164\76\166\141\162\x20\x6d\x79\x57\151\x6e\144\157\167\x20\75\40\167\x69\156\x64\157\167\x2e\157\x70\x65\x6e\50\47" . site_url() . "\57\x3f\x6f\160\164\151\157\x6e\x3d\157\141\x75\x74\150\162\x65\x64\x69\x72\x65\x63\x74\46\x61\160\x70\x5f\156\x61\155\x65\75" . $OY . "\46\162\x65\x64\151\x72\145\143\164\x5f\x75\162\x6c\x3d" . rawurlencode($DL) . "\47\x2c\x20\47\x27\54\40\x27\167\151\144\x74\150\75\x35\x30\x30\x2c\150\145\x69\x67\x68\164\75\65\x30\x30\x27\x29\x3b\74\57\163\x63\162\151\160\x74\76";
            ufC:
            die;
            NaF:
        }
        Y4C:
        v2u:
        NcA:
        feV:
    }
    function miniorange_oauth_save_settings()
    {
        if (!(current_user_can("\155\141\156\141\147\x65\137\157\160\164\151\157\156\x73") && isset($_POST["\x6f\x70\164\x69\157\x6e"]))) {
            goto aIk;
        }
        if ($_POST["\157\x70\164\151\x6f\x6e"] == "\155\x6f\x5f\157\x61\165\164\x68\x5f\162\x65\147\x69\x73\x74\145\x72\137\143\x75\163\x74\157\x6d\x65\162") {
            goto Pnx;
        }
        if (isset($_POST["\157\x70\164\151\157\x6e"]) and $_POST["\x6f\160\x74\151\157\x6e"] == "\x6d\157\137\157\x61\x75\164\150\137\166\141\x6c\151\x64\x61\164\x65\137\157\164\160") {
            goto hPk;
        }
        if ($_POST["\x6f\160\164\151\x6f\x6e"] == "\155\x6f\137\x6f\x61\x75\164\150\x5f\166\145\x72\x69\146\x79\x5f\x63\x75\x73\164\x6f\155\145\162") {
            goto zJh;
        }
        if ($_POST["\157\x70\164\151\x6f\156"] == "\155\157\x5f\145\x76\x65\137\163\x61\166\145\137\x61\160\x69\x5f\153\x65\x79") {
            goto B03;
        }
        if ($_POST["\x6f\160\x74\x69\x6f\156"] == "\155\x6f\137\x65\x76\145\137\163\x61\x76\145\137\141\x6c\x6c\157\167\x65\144") {
            goto HHT;
        }
        if ($_POST["\157\160\x74\x69\x6f\156"] == "\155\157\137\x6f\141\x75\x74\x68\137\x61\x64\x64\x5f\x61\160\160") {
            goto lMG;
        }
        if ($_POST["\x6f\160\x74\x69\157\156"] == "\155\157\137\x6f\141\165\x74\150\x5f\147\162\x61\156\x74\x5f\x73\145\164\x74\151\156\x67\x73") {
            goto M8g;
        }
        if (!($_POST["\157\160\164\151\x6f\x6e"] == "\155\157\137\x6f\x61\165\x74\x68\137\x61\x70\x70\x5f\x63\165\163\164\157\155\x69\x7a\x61\164\151\157\x6e")) {
            goto QQR;
        }
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\141\x75\164\150\137\x69\x63\x6f\156\x5f\x77\x69\x64\x74\150", trim(stripslashes($_POST["\155\x6f\x5f\x6f\x61\x75\x74\x68\137\x69\x63\x6f\x6e\x5f\167\151\x64\164\150"])));
        mo_oauth_client_update_option("\155\157\137\157\x61\165\x74\150\137\151\x63\157\x6e\x5f\150\x65\151\147\x68\164", trim(stripslashes($_POST["\155\157\137\157\141\165\x74\x68\137\151\143\157\156\x5f\x68\x65\151\x67\x68\164"])));
        mo_oauth_client_update_option("\155\157\x5f\x6f\141\165\164\x68\x5f\x69\x63\x6f\x6e\137\x6d\x61\x72\x67\x69\x6e", trim(stripslashes($_POST["\155\157\137\x6f\x61\x75\164\x68\x5f\151\x63\x6f\x6e\137\x6d\141\162\x67\151\x6e"])));
        mo_oauth_client_update_option("\x6d\x6f\x5f\157\x61\x75\x74\x68\x5f\x69\x63\x6f\156\137\x63\157\156\146\151\147\165\162\x65\x5f\x63\x73\x73", trim(stripcslashes($_POST["\x6d\x6f\137\157\141\165\164\x68\x5f\x69\143\x6f\156\x5f\x63\x6f\x6e\146\151\x67\165\162\145\x5f\x63\163\163"])));
        mo_oauth_client_update_option("\x6d\157\x5f\157\x61\165\x74\x68\x5f\x63\x75\x73\x74\157\x6d\x5f\x6c\x6f\147\157\165\x74\137\164\x65\170\x74", trim(stripslashes($_POST["\x6d\157\137\157\141\x75\x74\150\137\x63\x75\x73\164\x6f\155\137\154\157\147\x6f\x75\164\x5f\x74\145\x78\164"])));
        mo_oauth_client_update_option("\x6d\145\x73\163\141\147\x65", "\x59\157\x75\x72\40\x73\145\x74\x74\x69\156\x67\163\x20\167\145\x72\x65\40\163\x61\x76\145\x64");
        $this->mo_oauth_show_success_message();
        QQR:
        goto Wup;
        M8g:
        $rL = '';
        if (!isset($_POST["\x6d\x6f\x5f\157\x61\x75\164\150\137\x61\160\160\137\x6e\x61\x6d\145"])) {
            goto XDZ;
        }
        $rL = $_POST["\155\x6f\137\x6f\x61\165\x74\x68\x5f\141\x70\160\137\156\141\x6d\x65"];
        XDZ:
        if (!($rL !== '')) {
            goto RT4;
        }
        if (!isset($_POST["\x67\162\x61\156\164\x5f\x74\x79\x70\145"])) {
            goto v3W;
        }
        mo_oauth_client_update_option("\x6d\157\x5f\x6f\x61\165\x74\150\137" . $rL . "\x5f\147\x72\141\x6e\x74\137\164\171\160\145", stripslashes($_POST["\x67\162\141\156\164\x5f\x74\171\160\145"]));
        mo_oauth_client_update_option("\x6d\157\x5f\157\x61\165\164\150\137\x63\x6c\151\x65\156\164\137\145\156\141\x62\154\145\137\162\145\x66\x72\145\x73\150\x5f\164\157\153\145\156\x5f\x67\162\x61\156\x74", isset($_POST["\155\157\x5f\157\141\165\x74\150\137\x63\154\151\145\156\164\x5f\145\x6e\141\x62\x6c\x65\137\162\145\x66\x72\x65\x73\x68\137\x74\157\153\x65\x6e\x5f\147\162\x61\156\x74"]) ? $_POST["\x6d\x6f\x5f\157\141\x75\164\x68\x5f\x63\154\x69\145\156\164\137\x65\156\141\x62\154\x65\137\x72\x65\146\x72\145\163\150\137\164\157\153\145\156\137\147\162\141\x6e\164"] : 0);
        mo_oauth_client_update_option("\155\x6f\x5f\x6f\x61\165\164\150\x5f\x63\x6c\x69\145\156\164\x5f\145\156\141\x62\154\x65\x5f\160\x61\163\x73\167\x6f\x72\144\137\147\x72\x61\x6e\x74", isset($_POST["\155\x6f\137\x6f\141\x75\164\x68\137\x63\x6c\x69\145\x6e\164\137\x65\x6e\x61\142\154\145\137\160\141\x73\x73\167\157\x72\x64\x5f\147\x72\x61\156\164"]) ? $_POST["\x6d\x6f\x5f\x6f\141\x75\164\x68\x5f\x63\x6c\151\145\x6e\x74\x5f\x65\156\x61\142\154\145\x5f\160\x61\163\163\167\x6f\x72\144\137\x67\162\x61\x6e\x74"] : 0);
        if (isset($_POST["\x6a\167\164\137\x73\165\x70\160\x6f\x72\x74"])) {
            goto MYi;
        }
        mo_oauth_client_update_option("\155\157\137\157\141\x75\164\x68\137" . $rL . "\x5f\x6a\167\164\x5f\x73\165\160\x70\x6f\162\x74", (int) 0);
        goto lmR;
        MYi:
        mo_oauth_client_update_option("\155\x6f\137\x6f\141\165\164\150\137" . $rL . "\137\x6a\167\164\137\x73\x75\160\160\157\162\164", (int) 1);
        lmR:
        if (!isset($_POST["\152\167\x74\x5f\x61\154\x67\157"])) {
            goto IrJ;
        }
        mo_oauth_client_update_option("\155\x6f\x5f\x6f\x61\x75\x74\150\137" . $rL . "\x5f\152\x77\164\137\x61\154\147\157", stripslashes($_POST["\x6a\x77\164\137\x61\154\x67\x6f"]));
        if ($_POST["\x6a\x77\164\x5f\141\154\147\x6f"] === "\122\123\x41" && isset($_POST["\x6d\x6f\x5f\x6f\x61\x75\x74\150\x5f\x78\65\x30\x39\x5f\143\145\x72\164"])) {
            goto e0S;
        }
        if (!($_POST["\x6a\x77\x74\x5f\141\154\147\x6f"] === "\x48\x53\x41")) {
            goto noh;
        }
        mo_oauth_client_delete_option("\155\x6f\x5f\x6f\141\x75\164\150\x5f" . $rL . "\137\170\x35\60\x39\137\x63\145\162\x74");
        noh:
        goto wkg;
        e0S:
        mo_oauth_client_update_option("\155\x6f\137\x6f\x61\x75\164\x68\137" . $rL . "\137\x78\x35\x30\71\x5f\143\145\162\x74", stripslashes($_POST["\x6d\x6f\x5f\x6f\141\165\164\150\137\x78\x35\x30\x39\x5f\x63\145\162\x74"]));
        wkg:
        IrJ:
        v3W:
        mo_oauth_client_update_option("\x6d\145\x73\163\x61\x67\145", "\131\x6f\x75\162\40\163\145\x74\164\151\x6e\147\163\x20\141\x72\145\x20\163\x61\166\x65\x64\40\x73\165\x63\x63\x65\163\163\146\x75\154\x6c\x79\x2e");
        $this->mo_oauth_show_success_message();
        wp_redirect("\x61\x64\x6d\x69\156\56\160\x68\x70\77\160\x61\147\x65\75\155\x6f\x5f\157\141\165\x74\150\137\x73\x65\x74\x74\151\x6e\147\163\46\x61\x63\x74\x69\157\156\x3d\165\160\144\x61\x74\145\46\x61\x70\160\x3d" . urlencode($rL));
        RT4:
        Wup:
        goto V4l;
        lMG:
        $YI = '';
        $gv = '';
        $ea = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\155\x6f\137\x6f\x61\165\x74\150\x5f\143\x6c\x69\x65\156\164\137\x69\144"]) || $this->mo_oauth_check_empty_or_null($_POST["\x6d\157\137\157\x61\165\164\150\x5f\143\154\x69\145\156\x74\x5f\163\145\x63\x72\145\164"])) {
            goto OM0;
        }
        $YI = trim(stripslashes($_POST["\x6d\157\x5f\157\x61\x75\x74\150\137\163\143\x6f\160\x65"]));
        $gv = trim(stripslashes($_POST["\x6d\x6f\x5f\157\141\x75\164\x68\137\143\x6c\x69\x65\x6e\164\137\151\144"]));
        $ea = trim(stripslashes($_POST["\x6d\157\x5f\157\141\x75\x74\150\137\143\x6c\x69\145\156\164\137\163\145\143\162\x65\x74"]));
        $t3 = trim(stripslashes($_POST["\155\x6f\x5f\157\141\x75\x74\150\137\143\x75\163\164\x6f\155\x5f\x61\x70\x70\x5f\156\141\155\x65"]));
        $rd = trim(stripslashes($_POST["\155\x6f\137\157\141\165\164\150\x5f\x63\x75\x73\164\x6f\155\x5f\141\160\160\x5f\x6e\141\x6d\145"]));
        add_option("\x6d\x6f\137\x6f\x61\x75\164\150\137\141\160\x70\137\156\141\x6d\145\x5f" . $t3, $rd);
        if (isset($_POST["\x64\x69\x73\x61\142\x6c\x65\x5f\x61\x75\x74\x68\157\162\x69\x7a\x61\164\151\x6f\156\x5f\150\x65\x61\144\x65\x72"])) {
            goto XWR;
        }
        mo_oauth_client_update_option("\155\157\x5f\x6f\x61\165\x74\150\137\143\x6c\151\145\156\164\x5f\144\x69\163\x61\142\x6c\145\x5f\141\x75\164\150\157\x72\x69\172\141\x74\x69\x6f\156\x5f\150\x65\141\x64\145\162", 0);
        goto A42;
        XWR:
        $_POST["\144\151\163\x61\142\x6c\145\x5f\x61\165\x74\x68\157\x72\151\x7a\141\164\x69\157\x6e\137\x68\x65\141\x64\145\x72"] === "\145\x6e\141\x62\154\145" ? mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\x75\164\150\137\143\x6c\151\x65\156\164\137\144\x69\x73\x61\x62\x6c\145\137\141\x75\x74\x68\157\x72\x69\172\141\x74\x69\157\x6e\137\x68\x65\141\x64\x65\x72", 1) : mo_oauth_client_update_option("\155\157\x5f\157\x61\x75\164\150\x5f\143\154\151\145\156\x74\137\144\x69\x73\141\x62\x6c\145\137\141\x75\x74\150\x6f\x72\x69\x7a\x61\x74\x69\x6f\156\137\150\x65\x61\x64\x65\162", 0);
        A42:
        if (mo_oauth_client_get_option("\155\x6f\x5f\x6f\141\x75\164\150\137\x61\160\160\163\137\154\151\x73\164")) {
            goto FHe;
        }
        $vQ = array();
        goto Bi2;
        FHe:
        $vQ = mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\x75\x74\150\137\x61\x70\x70\163\137\x6c\151\163\164");
        Bi2:
        $ie = '';
        $BY = '';
        $za = '';
        $Db = array();
        foreach ($vQ as $OY => $X6) {
            if (!($rd == $OY)) {
                goto slv;
            }
            $Db = $X6;
            goto mpa;
            slv:
            tQi:
        }
        mpa:
        $Db["\x63\154\x69\x65\x6e\164\x69\x64"] = $gv;
        $Db["\x63\x6c\x69\145\x6e\164\x73\145\143\x72\145\164"] = $ea;
        $Db["\163\143\157\x70\145"] = $YI;
        if ($this->mo_oauth_check_empty_or_null($_POST["\x6d\x6f\x5f\x6f\x61\165\164\x68\137\141\x70\x70\137\164\171\x70\145"])) {
            goto FLw;
        }
        $Db["\x61\160\160\x74\171\160\145"] = trim(stripcslashes($_POST["\x6d\x6f\137\157\x61\165\164\x68\x5f\141\160\160\x5f\164\171\x70\x65"]));
        FLw:
        if (isset($Db["\162\145\x64\x69\162\145\x63\x74\165\x72\x69"])) {
            goto P40;
        }
        $Db["\162\145\144\151\162\145\143\x74\x75\x72\151"] = site_url();
        P40:
        $VW = array("\141\155\x61\x7a\157\156", "\x73\x61\154\x65\163\x66\x6f\162\x63\145", "\160\x61\171\x70\141\x6c", "\x79\141\x68\x6f\x6f", "\x6f\156\x65\154\157\x67\x69\x6e", "\157\153\164\x61", "\141\x64\x66\163", "\147\151\147\171\x61");
        if (isset($Db["\x61\x70\160\164\x79\160\145"])) {
            goto DLW;
        }
        if ($rd == "\157\160\145\156\x69\144\143\157\156\156\x65\143\x74" || in_array($rd, $VW)) {
            goto exV;
        }
        $Db["\141\160\x70\164\x79\160\145"] = "\157\x61\x75\164\150";
        goto GvM;
        exV:
        $Db["\141\160\x70\164\x79\160\145"] = "\x6f\x70\145\x6e\x69\144\x63\157\x6e\x6e\x65\143\x74";
        GvM:
        DLW:
        if ($rd == "\x65\166\145\157\x6e\x6c\x69\x6e\x65") {
            goto vB7;
        }
        if (!($rd == "\145\x76\145\157\156\154\151\x6e\x65\x6e\145\167")) {
            goto Pyh;
        }
        mo_oauth_client_update_option("\x6d\157\x5f\x6f\141\x75\164\x68\137\x65\x76\x65\157\156\x6c\151\156\145\x5f\145\156\141\142\x6c\x65", 1);
        Pyh:
        $A7 = trim(stripcslashes(isset($_POST["\155\x6f\x5f\157\141\165\x74\x68\x5f\152\x77\153\x73\137\165\x72\151"]) ? $_POST["\x6d\157\x5f\157\141\x75\x74\150\x5f\x6a\x77\153\163\x5f\x75\x72\151"] : ''));
        $sF = trim(stripslashes(isset($_POST["\x6d\157\137\157\x61\x75\x74\150\x5f\x61\165\164\x68\x6f\x72\151\x7a\x65\x75\162\154"]) ? $_POST["\155\x6f\x5f\x6f\141\165\164\150\x5f\x61\165\x74\x68\x6f\x72\x69\x7a\145\165\162\x6c"] : ''));
        $lv = trim(stripslashes(isset($_POST["\x6d\157\137\x6f\x61\x75\x74\x68\x5f\141\x63\143\145\x73\163\164\x6f\153\x65\x6e\165\162\x6c"]) ? $_POST["\x6d\x6f\137\x6f\141\x75\x74\150\x5f\141\x63\x63\145\163\163\x74\157\x6b\145\156\165\x72\x6c"] : ''));
        $h8 = trim(stripslashes(isset($_POST["\x6d\x6f\x5f\157\x61\165\x74\150\137\x72\145\163\157\165\162\x63\x65\157\167\156\145\162\144\145\164\x61\x69\154\x73\x75\162\154"]) ? $_POST["\155\157\x5f\157\x61\165\164\150\137\x72\145\163\157\165\162\143\x65\157\x77\x6e\145\162\144\145\x74\141\151\154\x73\165\162\x6c"] : ''));
        $qJ = trim(stripslashes(isset($_POST["\155\157\x5f\x6f\141\x75\x74\150\137\x67\162\157\x75\160\x64\145\x74\x61\x69\154\x73\x75\162\x6c"]) ? $_POST["\155\157\x5f\x6f\141\165\x74\150\137\147\162\157\165\x70\x64\145\164\141\151\x6c\163\165\x72\x6c"] : ''));
        goto u3C;
        vB7:
        mo_oauth_client_update_option("\x6d\157\137\x6f\141\165\x74\150\x5f\145\x76\x65\157\156\154\x69\x6e\x65\137\145\x6e\141\x62\154\x65", 1);
        mo_oauth_client_update_option("\155\157\137\157\141\x75\164\x68\137\x65\166\x65\157\x6e\154\x69\156\x65\x5f\x63\154\151\145\156\x74\x5f\151\x64", $gv);
        mo_oauth_client_update_option("\155\x6f\137\157\x61\x75\x74\x68\x5f\x65\x76\x65\157\x6e\154\x69\x6e\x65\137\x63\154\x69\x65\156\164\137\163\145\x63\x72\145\164", $ea);
        if (!(mo_oauth_client_get_option("\x6d\x6f\x5f\x6f\x61\x75\164\x68\x5f\x65\166\145\157\156\154\151\156\x65\x5f\x63\154\151\x65\156\164\137\x69\x64") && mo_oauth_client_get_option("\155\x6f\137\157\x61\165\164\150\x5f\x65\x76\145\157\156\154\151\156\145\x5f\x63\154\151\145\x6e\x74\137\x73\x65\143\162\145\164"))) {
            goto f4P;
        }
        $Hc = new Customer();
        $cQ = $Hc->add_oauth_application("\x65\x76\x65\x6f\x6e\x6c\151\x6e\145", "\105\126\x45\x20\x4f\156\x6c\x69\156\x65\40\x4f\x41\x75\164\x68");
        if ($cQ == "\x41\160\160\154\x69\143\x61\x74\x69\x6f\156\x20\x43\x72\x65\141\x74\x65\144") {
            goto V9I;
        }
        mo_oauth_client_update_option("\x6d\145\163\163\141\147\145", $cQ);
        $this->mo_oauth_show_error_message();
        goto GmT;
        V9I:
        mo_oauth_client_update_option("\x6d\x65\x73\163\141\147\x65", "\x59\157\165\x72\x20\163\x65\x74\x74\x69\156\x67\163\40\x77\145\x72\x65\x20\163\x61\166\145\144\x2e\x20\x47\157\40\164\x6f\x20\x41\x64\166\141\156\x63\145\x64\x20\105\126\x45\x20\x4f\x6e\154\x69\x6e\145\40\123\x65\x74\x74\151\156\147\163\x20\x66\x6f\x72\40\x63\157\156\x66\x69\147\x75\162\151\156\147\x20\x72\x65\163\164\x72\x69\143\x74\x69\157\156\x73\x20\x6f\x6e\x20\165\163\x65\162\x20\163\x69\147\156\x20\151\156\x2e");
        $this->mo_oauth_show_success_message();
        GmT:
        f4P:
        $sF = '';
        $lv = '';
        $h8 = '';
        u3C:
        if (!(isset($_POST["\155\x6f\137\x6f\141\x75\x74\150\x5f\x64\x69\163\160\x6c\x61\x79\x5f\141\x70\160\137\x6e\141\155\x65"]) && $_POST["\155\157\137\x6f\141\x75\x74\x68\x5f\144\151\163\x70\x6c\141\x79\137\x61\160\x70\x5f\x6e\x61\x6d\145"] != '')) {
            goto PuJ;
        }
        $za = trim(stripslashes($_POST["\x6d\x6f\x5f\157\141\x75\164\x68\137\x64\151\163\160\x6c\x61\171\137\x61\x70\160\137\156\x61\x6d\145"]));
        PuJ:
        if ($rd != "\145\x76\145\x6f\156\x6c\151\156\145" && $rd != "\145\166\x65\157\156\154\x69\156\x65\137\156\x65\167") {
            goto Bgr;
        }
        if ($rd == "\145\166\x65\157\156\154\x69\x6e\145\137\156\145\167") {
            goto Yf2;
        }
        $rd = trim(stripcslashes($_POST["\x6d\x6f\x5f\157\141\x75\x74\150\137\x61\160\x70\137\x6e\141\x6d\x65"]));
        goto Jfl;
        Yf2:
        $rd = "\x65\166\145\x20\157\x6e\x6c\151\x6e\x65";
        Jfl:
        goto GuA;
        Bgr:
        $rd = trim(stripcslashes($_POST["\x6d\x6f\x5f\x6f\141\x75\x74\150\x5f\x63\165\163\x74\x6f\x6d\x5f\141\160\x70\x5f\156\x61\155\x65"]));
        GuA:
        $Db["\141\165\x74\x68\157\x72\x69\172\x65\165\x72\154"] = $sF;
        $Db["\141\x63\x63\145\163\x73\164\157\x6b\x65\x6e\x75\162\x6c"] = $lv;
        $Db["\162\x65\x73\x6f\165\x72\x63\145\x6f\167\x6e\x65\x72\144\x65\164\141\x69\x6c\x73\x75\x72\x6c"] = $h8;
        $Db["\x67\162\157\165\x70\x64\x65\x74\x61\151\x6c\163\165\x72\x6c"] = $qJ;
        $Db["\x6a\167\153\163\x5f\165\162\151"] = $A7;
        if (!($za != '')) {
            goto KTy;
        }
        $Db["\144\151\163\x70\x6c\x61\x79\141\x70\x70\156\x61\155\145"] = $za;
        KTy:
        if (!isset($_POST["\x6d\157\x5f\157\141\x75\x74\x68\137\x61\x70\160\137\x6e\141\155\145"])) {
            goto t2o;
        }
        $Db["\141\160\x70\x49\144"] = stripslashes($_POST["\155\x6f\137\x6f\x61\x75\x74\150\x5f\x61\x70\x70\x5f\x6e\141\155\145"]);
        t2o:
        if (!isset($_POST["\x6d\157\137\x6f\141\165\x74\150\137\x61\160\160\137\x6e\141\x6d\x65"])) {
            goto pIA;
        }
        $Db["\141\160\x70\111\144"] = stripslashes($_POST["\x6d\157\137\x6f\x61\165\x74\x68\137\x61\x70\x70\137\156\x61\x6d\145"]);
        if (!($_POST["\x6d\157\137\157\x61\x75\x74\x68\137\x61\160\x70\137\156\x61\x6d\x65"] === "\147\141\x70\160\163")) {
            goto DIC;
        }
        $Db["\141\165\x74\150\x6f\162\x69\172\145\165\x72\154"] = "\x68\164\164\160\x73\72\57\x2f\x61\x63\x63\157\x75\x6e\164\163\56\147\x6f\157\x67\154\145\x2e\143\157\x6d\57\157\57\157\x61\165\164\x68\x32\x2f\x61\x75\x74\150";
        $Db["\141\143\x63\145\x73\163\164\x6f\153\x65\x6e\165\x72\154"] = "\150\x74\x74\x70\x73\72\57\57\x77\167\167\56\x67\x6f\157\147\x6c\145\x61\x70\151\163\x2e\x63\157\155\x2f\157\x61\165\x74\x68\x32\x2f\166\x34\57\164\157\x6b\145\156";
        $Db["\x72\145\163\157\x75\162\143\x65\157\x77\x6e\x65\162\x64\x65\164\x61\151\154\x73\165\x72\x6c"] = "\150\x74\x74\160\163\x3a\57\x2f\167\167\x77\56\147\157\x6f\147\154\x65\x61\x70\x69\x73\56\143\157\x6d\x2f\157\141\x75\164\x68\x32\x2f\x76\61\57\x75\x73\x65\162\x69\156\x66\x6f";
        DIC:
        pIA:
        $vQ[$rd] = $Db;
        mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\165\x74\150\137\141\160\160\163\x5f\154\151\163\164", $vQ);
        $ij = '';
        mo_oauth_client_update_option("\155\145\x73\163\141\x67\x65", "\101\144\x76\141\156\143\x65\144\40\x53\x65\164\164\x69\156\x67\40\x68\x61\163\40\x62\x65\x65\x6e\x20\x75\160\144\141\x74\x65\x64\56" . $ij);
        wp_redirect("\141\144\155\x69\x6e\56\160\150\x70\77\x70\x61\x67\x65\75\155\x6f\137\x6f\141\x75\164\150\137\163\x65\x74\164\151\156\147\163\46\x61\x63\164\x69\157\156\x3d\165\160\x64\141\164\x65\46\x61\x70\x70\75" . urlencode($rd));
        $this->mo_oauth_show_success_message();
        goto E4E;
        OM0:
        mo_oauth_client_update_option("\155\x65\x73\x73\141\147\x65", "\120\x6c\x65\141\x73\145\40\145\156\x74\x65\162\x20\x76\141\154\151\144\40\103\x6c\x69\x65\156\x74\x20\x49\x44\x20\x61\x6e\x64\40\x43\x6c\x69\145\x6e\x74\40\123\145\x63\162\145\164\x2e");
        $this->mo_oauth_show_error_message();
        return;
        E4E:
        V4l:
        goto mKW;
        HHT:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto Fqy;
        }
        return $this->mo_oauth_show_curl_error();
        Fqy:
        $yO = stripslashes($_POST["\155\157\x5f\x65\x76\145\x5f\141\154\154\x6f\x77\145\x64\137\143\x6f\x72\160\x73"]);
        mo_oauth_client_update_option("\155\157\x5f\145\166\145\x5f\141\x6c\154\157\x77\145\x64\x5f\143\x6f\x72\x70\163", $yO);
        mo_oauth_client_update_option("\x6d\x65\163\163\141\147\x65", "\131\157\x75\162\x20\x63\x6f\156\146\151\147\x75\162\141\x74\151\x6f\156\40\x69\x73\40\165\160\x64\141\164\x65\144\56");
        $this->mo_oauth_show_success_message();
        mKW:
        goto Xdu;
        B03:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto DiI;
        }
        return $this->mo_oauth_show_curl_error();
        DiI:
        $AT = '';
        $Q9 = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\155\x6f\x5f\x65\x76\x65\137\141\160\x69\137\x6b\145\171"]) || $this->mo_oauth_check_empty_or_null($_POST["\155\x6f\137\x65\166\x65\x5f\166\x65\x72\x69\x66\151\x63\141\x74\x69\x6f\156\x5f\x63\x6f\144\x65"])) {
            goto IlL;
        }
        $AT = stripslashes($_POST["\x6d\x6f\x5f\x65\166\x65\137\141\x70\x69\137\x6b\145\171"]);
        $Q9 = stripslashes($_POST["\155\157\x5f\x65\x76\145\x5f\x76\145\162\151\x66\151\143\141\164\151\157\x6e\x5f\143\157\144\x65"]);
        goto Pqk;
        IlL:
        mo_oauth_client_update_option("\155\145\x73\163\x61\x67\145", "\101\154\x6c\x20\x74\150\145\x20\146\x69\145\x6c\144\163\40\x61\162\145\x20\162\145\161\x75\x69\x72\x65\144\56\40\120\x6c\145\x61\x73\x65\x20\145\x6e\x74\x65\x72\x20\113\145\x79\40\111\x44\40\x61\156\x64\x20\126\145\x72\146\151\143\x61\x74\151\x6f\x6e\40\x63\157\144\x65\40\x74\157\x20\x73\x61\x76\x65\x20\101\120\x49\40\x4b\145\171\40\x64\x65\x74\141\151\154\x73\56");
        $this->mo_oauth_show_error_message();
        return;
        Pqk:
        mo_oauth_client_update_option("\x6d\x6f\137\145\166\145\x5f\x61\160\x69\137\x6b\x65\171", $AT);
        mo_oauth_client_update_option("\x6d\157\137\x65\166\145\137\x76\145\x72\x69\146\151\x63\x61\x74\151\157\x6e\137\143\x6f\144\145", $Q9);
        if (mo_oauth_client_get_option("\155\157\137\x65\166\145\137\x61\160\151\137\x6b\x65\x79") && mo_oauth_client_get_option("\155\157\137\145\x76\145\137\166\x65\x72\x69\x66\151\x63\x61\x74\x69\157\x6e\x5f\143\157\x64\145")) {
            goto P38;
        }
        mo_oauth_client_update_option("\155\x65\163\163\141\x67\x65", "\120\154\x65\x61\x73\x65\x20\145\156\164\x65\x72\40\113\x65\x79\x20\111\104\x20\x61\156\x64\40\x56\145\162\x66\151\x63\x61\x74\151\x6f\156\x20\143\x6f\x64\145\x20\x74\157\x20\x73\x61\x76\x65\40\101\x50\x49\40\113\145\171\x20\x64\x65\x74\x61\151\154\163");
        $this->mo_oauth_show_error_message();
        goto c0v;
        P38:
        mo_oauth_client_update_option("\x6d\x65\163\x73\141\x67\145", "\x59\x6f\x75\x72\40\x41\x50\x49\x20\x4b\x65\x79\x20\x64\145\x74\x61\151\154\163\x20\150\141\x76\x65\x20\142\145\145\156\40\x73\141\166\x65\x64");
        $this->mo_oauth_show_success_message();
        c0v:
        Xdu:
        goto KSB;
        zJh:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto iqC;
        }
        return $this->mo_oauth_show_curl_error();
        iqC:
        $jw = '';
        $uN = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\145\155\141\x69\x6c"]) || $this->mo_oauth_check_empty_or_null($_POST["\160\x61\x73\x73\167\157\x72\x64"])) {
            goto eG9;
        }
        $jw = sanitize_email($_POST["\145\x6d\x61\151\154"]);
        $uN = stripslashes($_POST["\160\x61\x73\163\x77\157\162\144"]);
        goto VIj;
        eG9:
        mo_oauth_client_update_option("\x6d\x65\x73\x73\x61\x67\x65", "\x41\x6c\154\x20\x74\x68\x65\40\146\151\145\x6c\x64\163\40\141\162\x65\40\162\145\161\165\x69\162\145\x64\56\40\x50\154\145\141\x73\x65\x20\x65\156\164\x65\162\x20\166\x61\x6c\x69\144\x20\145\156\x74\162\x69\145\x73\56");
        $this->mo_oauth_show_error_message();
        return;
        VIj:
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\165\x74\x68\x5f\141\x64\155\x69\x6e\x5f\x65\x6d\141\x69\154", $jw);
        mo_oauth_client_update_option("\x70\x61\163\163\167\157\x72\x64", $uN);
        $Hc = new Customer();
        $yZ = $Hc->get_customer_key();
        $qU = json_decode($yZ, true);
        if (json_last_error() == JSON_ERROR_NONE) {
            goto t94;
        }
        mo_oauth_client_update_option("\x6d\x65\163\163\141\x67\x65", "\x49\x6e\166\141\x6c\x69\144\40\165\163\145\162\156\x61\155\145\40\x6f\x72\40\x70\141\x73\163\x77\157\162\x64\56\40\x50\x6c\145\x61\x73\x65\40\164\162\171\40\141\147\141\151\x6e\x2e");
        $this->mo_oauth_show_error_message();
        goto wVu;
        t94:
        mo_oauth_client_update_option("\155\x6f\137\x6f\141\x75\164\150\137\x61\144\x6d\x69\156\x5f\143\x75\163\164\x6f\x6d\145\162\137\x6b\x65\x79", $qU["\x69\144"]);
        mo_oauth_client_update_option("\155\x6f\137\x6f\x61\x75\x74\150\137\x61\x64\x6d\x69\x6e\137\x61\160\151\137\153\145\171", $qU["\141\160\151\x4b\x65\x79"]);
        mo_oauth_client_update_option("\143\165\163\x74\x6f\x6d\x65\x72\x5f\x74\157\153\145\156", $qU["\x74\x6f\153\x65\156"]);
        mo_oauth_client_update_option("\x6d\157\137\157\141\x75\x74\x68\x5f\141\x64\x6d\151\156\137\x70\x68\x6f\156\145", $qU["\x70\150\x6f\x6e\x65"]);
        mo_oauth_client_delete_option("\x70\141\163\163\167\157\x72\x64");
        mo_oauth_client_update_option("\155\145\x73\x73\x61\147\145", "\x43\165\x73\164\x6f\155\x65\162\40\x72\x65\x74\162\151\145\x76\x65\x64\40\x73\x75\x63\143\145\x73\x73\x66\x75\154\x6c\x79");
        mo_oauth_client_delete_option("\166\145\162\x69\146\171\x5f\x63\165\163\x74\157\155\x65\x72");
        $this->mo_oauth_show_success_message();
        wVu:
        KSB:
        goto c4R;
        hPk:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto UGp;
        }
        return $this->mo_oauth_show_curl_error();
        UGp:
        $ed = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\x6d\157\x5f\157\x61\x75\x74\150\137\157\164\x70\137\x74\157\153\x65\156"])) {
            goto hIs;
        }
        $ed = stripslashes($_POST["\155\x6f\x5f\157\x61\165\164\150\x5f\x6f\164\160\x5f\164\x6f\153\145\156"]);
        goto YVM;
        hIs:
        mo_oauth_client_update_option("\155\145\163\x73\141\x67\x65", "\120\154\145\x61\x73\x65\x20\x65\156\164\145\x72\x20\x61\x20\166\141\154\x75\145\x20\x69\x6e\40\117\124\x50\40\x66\151\145\x6c\x64\x2e");
        mo_oauth_client_update_option("\155\x6f\137\157\141\165\164\150\x5f\162\145\x67\x69\x73\x74\162\141\164\151\x6f\x6e\137\x73\x74\x61\164\x75\163", "\x4d\117\137\117\124\x50\137\126\x41\114\111\x44\101\124\x49\117\x4e\137\x46\101\x49\x4c\125\122\x45");
        $this->mo_oauth_show_error_message();
        return;
        YVM:
        $Hc = new Customer();
        $Gh = wp_cache_get("\x6d\x6f\x5f\157\x61\x75\164\x68\137\x74\x72\141\x6e\x73\141\143\x74\x69\x6f\156\x49\x64", "\155\x6f\x5f\x6f\141\165\164\x68\x5f\143\154\151\145\156\x74\137\160\162\145\x6d\151\165\x6d");
        $yZ = json_decode($Hc->validate_otp_token($Gh, $ed), true);
        if (strcasecmp($yZ["\x73\x74\x61\164\165\163"], "\123\x55\103\103\x45\x53\123") == 0) {
            goto RnB;
        }
        mo_oauth_client_update_option("\155\145\163\163\x61\147\x65", "\x49\156\166\x61\x6c\x69\144\x20\157\156\145\40\x74\x69\155\145\40\160\x61\163\x73\143\157\144\x65\x2e\40\120\x6c\145\x61\x73\145\40\x65\x6e\164\x65\x72\40\141\x20\166\141\x6c\151\x64\40\117\x54\120\x2e");
        mo_oauth_client_update_option("\155\157\x5f\x6f\141\165\x74\x68\137\162\x65\147\151\x73\x74\162\141\x74\x69\157\x6e\137\163\164\x61\x74\165\163", "\115\x4f\x5f\x4f\124\x50\x5f\x56\x41\x4c\111\104\x41\124\111\117\116\137\x46\x41\x49\x4c\125\x52\x45");
        $this->mo_oauth_show_error_message();
        goto l1g;
        RnB:
        $this->create_customer();
        l1g:
        c4R:
        goto y2R;
        Pnx:
        $jw = '';
        $uN = '';
        $vx = '';
        $X1 = '';
        $J4 = '';
        $No = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\x65\x6d\x61\x69\x6c"]) || $this->mo_oauth_check_empty_or_null($_POST["\160\x61\163\x73\167\x6f\162\x64"]) || $this->mo_oauth_check_empty_or_null($_POST["\143\x6f\x6e\146\x69\x72\155\120\141\x73\163\167\157\x72\144"])) {
            goto yaI;
        }
        if (strlen($_POST["\x70\141\163\163\167\157\x72\144"]) < 8 || strlen($_POST["\143\x6f\x6e\x66\151\162\155\120\x61\163\163\167\x6f\162\144"]) < 8) {
            goto gSu;
        }
        $jw = sanitize_email($_POST["\x65\155\141\151\154"]);
        $uN = stripslashes($_POST["\x70\141\x73\x73\x77\x6f\162\x64"]);
        $vx = stripslashes($_POST["\143\157\x6e\146\x69\x72\x6d\x50\141\x73\x73\x77\157\x72\144"]);
        $X1 = stripslashes($_POST["\x66\x6e\141\155\x65"]);
        $J4 = stripslashes($_POST["\154\156\141\x6d\145"]);
        $No = stripslashes($_POST["\143\x6f\155\x70\x61\156\x79"]);
        goto wHt;
        gSu:
        mo_oauth_client_update_option("\x6d\145\163\x73\x61\x67\x65", "\x43\x68\157\x6f\163\145\40\141\40\x70\x61\163\x73\x77\157\x72\x64\40\x77\x69\164\150\40\155\x69\x6e\x69\155\x75\155\x20\154\145\x6e\x67\164\150\x20\70\x2e");
        $this->mo_oauth_show_error_message();
        return;
        wHt:
        goto fac;
        yaI:
        mo_oauth_client_update_option("\155\145\163\x73\x61\147\x65", "\101\154\x6c\40\164\x68\145\40\x66\151\x65\154\144\x73\40\x61\162\x65\x20\x72\x65\x71\x75\x69\x72\145\x64\x2e\x20\x50\x6c\x65\x61\x73\x65\x20\x65\x6e\164\145\x72\x20\166\141\x6c\151\x64\40\145\x6e\x74\162\151\x65\x73\x2e");
        $this->mo_oauth_show_error_message();
        return;
        fac:
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\x75\164\150\137\141\x64\155\x69\156\x5f\x65\155\x61\x69\154", $jw);
        mo_oauth_client_update_option("\155\157\137\157\x61\165\x74\150\x5f\141\x64\x6d\x69\156\x5f\x66\x6e\141\x6d\x65", $X1);
        mo_oauth_client_update_option("\155\157\137\157\x61\x75\164\150\x5f\x61\144\155\151\156\x5f\154\x6e\141\155\x65", $J4);
        mo_oauth_client_update_option("\x6d\157\x5f\157\x61\x75\x74\150\x5f\141\x64\x6d\151\x6e\x5f\143\157\155\x70\x61\x6e\x79", $No);
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto SV8;
        }
        return $this->mo_oauth_show_curl_error();
        SV8:
        if (strcmp($uN, $vx) == 0) {
            goto tnW;
        }
        mo_oauth_client_update_option("\155\145\x73\x73\x61\x67\x65", "\120\141\163\163\x77\157\162\144\x73\x20\x64\x6f\x20\x6e\157\164\40\x6d\x61\x74\143\x68\56");
        mo_oauth_client_delete_option("\x76\145\x72\151\146\171\x5f\x63\x75\163\164\157\155\x65\x72");
        $this->mo_oauth_show_error_message();
        goto E41;
        tnW:
        mo_oauth_client_update_option("\x70\141\x73\163\167\x6f\x72\x64", $uN);
        $Hc = new Customer();
        $yZ = json_decode($Hc->check_customer(), true);
        if (strcasecmp($yZ["\163\x74\141\164\165\163"], "\x43\x55\123\x54\117\115\105\122\137\116\x4f\124\x5f\x46\117\x55\x4e\x44") == 0) {
            goto flZ;
        }
        $this->mo_oauth_get_current_customer();
        goto F32;
        flZ:
        $yZ = json_decode($Hc->send_otp_token(), true);
        if (strcasecmp($yZ["\163\x74\141\x74\x75\x73"], "\123\125\x43\x43\105\123\x53") == 0) {
            goto LoS;
        }
        mo_oauth_client_update_option("\x6d\x65\163\x73\141\x67\x65", "\x54\150\x65\162\145\40\167\x61\x73\40\141\156\x20\145\162\x72\157\x72\x20\151\156\x20\163\x65\x6e\x64\x69\x6e\147\40\x65\x6d\x61\x69\154\56\40\x50\154\x65\x61\x73\145\x20\x63\154\x69\x63\153\40\x6f\x6e\x20\x52\x65\x73\145\x6e\x64\x20\117\x54\120\x20\164\157\x20\164\162\x79\40\x61\x67\x61\151\x6e\x2e");
        mo_oauth_client_update_option("\155\157\137\157\141\x75\164\150\137\162\145\x67\x69\x73\164\x72\x61\164\151\157\x6e\x5f\163\164\141\x74\x75\163", "\115\117\x5f\117\x54\x50\137\x44\x45\114\x49\126\105\122\x45\x44\137\106\x41\x49\x4c\x55\122\x45");
        $this->mo_oauth_show_error_message();
        goto Ftz;
        LoS:
        mo_oauth_client_update_option("\x6d\145\163\x73\141\147\145", "\40\101\40\157\x6e\x65\x20\x74\x69\x6d\145\40\x70\x61\x73\x73\x63\157\x64\x65\x20\151\x73\40\163\x65\x6e\164\40\164\x6f\40" . mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\x75\164\150\x5f\x61\x64\x6d\151\156\x5f\x65\x6d\x61\151\x6c") . "\x2e\x20\120\154\145\141\163\x65\40\x65\x6e\x74\145\162\x20\x74\x68\145\x20\x4f\x54\x50\x20\x68\145\x72\x65\40\x74\157\40\166\145\162\151\146\171\40\171\157\x75\x72\x20\145\155\x61\151\x6c\56");
        wp_cache_set("\x6d\157\x5f\x6f\141\x75\164\x68\x5f\x74\162\x61\156\163\141\x63\164\151\x6f\156\x49\144", $yZ["\164\x78\111\144"], "\x6d\x6f\137\157\x61\x75\x74\150\x5f\143\154\x69\145\156\164\137\x70\x72\145\x6d\151\x75\x6d");
        mo_oauth_client_update_option("\155\157\x5f\x6f\141\x75\164\150\137\x72\x65\147\x69\x73\164\162\x61\x74\151\157\156\137\x73\164\x61\x74\165\163", "\115\x4f\137\117\124\120\137\x44\x45\x4c\x49\x56\105\122\105\104\x5f\123\125\103\x43\x45\x53\x53");
        $this->mo_oauth_show_success_message();
        Ftz:
        F32:
        E41:
        y2R:
        if ($_POST["\157\x70\x74\x69\157\156"] == "\155\157\137\167\x70\156\x73\137\x6d\x61\x6e\165\x61\154\137\x63\154\145\141\x72") {
            goto hOV;
        }
        if ($_POST["\157\160\x74\x69\157\x6e"] == "\x6d\157\137\157\141\165\x74\x68\x5f\x61\164\164\x72\151\x62\165\164\x65\137\155\x61\160\160\x69\156\147") {
            goto cpF;
        }
        if (isset($_POST["\x6f\160\x74\151\157\x6e"]) && $_POST["\157\160\x74\151\157\x6e"] == "\155\x6f\x5f\x6f\x61\165\164\150\x5f\143\154\151\145\156\x74\137\x73\141\x76\145\137\x72\x6f\x6c\145\137\155\x61\x70\x70\151\156\x67") {
            goto dj6;
        }
        if (isset($_POST["\x6f\160\164\151\x6f\156"]) && $_POST["\157\160\x74\x69\157\156"] == "\155\157\137\x6f\x61\x75\x74\150\137\x63\154\151\x65\x6e\x74\x5f\141\144\166\141\x6e\143\145\x64\x5f\x73\145\164\164\x69\156\x67\x73") {
            goto AFV;
        }
        if ($_POST["\157\x70\x74\x69\157\156"] == "\155\157\x5f\x6f\x61\165\164\150\137\x67\x6f\157\x67\x6c\145") {
            goto ofs;
        }
        if (isset($_POST["\157\160\164\151\157\x6e"]) and $_POST["\157\160\x74\151\x6f\x6e"] == "\155\157\137\x6f\141\165\x74\x68\137\145\166\x65\157\156\154\151\x6e\x65") {
            goto F3N;
        }
        if ($_POST["\x6f\160\164\151\157\156"] == "\155\157\x5f\157\x61\165\x74\x68\137\146\141\x63\145\x62\x6f\x6f\x6b") {
            goto x1E;
        }
        if ($_POST["\157\160\x74\x69\x6f\x6e"] == "\x6d\157\137\x6f\141\x75\164\x68\x5f\143\x6c\x69\145\x6e\x74\x5f\166\145\162\151\x66\171\x5f\154\x69\x63\x65\156\x73\145") {
            goto q7C;
        }
        if ($_POST["\x6f\160\x74\x69\157\x6e"] == "\155\x6f\137\x6f\x61\165\164\150\137\x63\157\x6e\164\x61\143\x74\137\165\x73\x5f\x71\x75\145\x72\171\137\157\160\x74\151\157\x6e") {
            goto but;
        }
        if ($_POST["\157\x70\164\151\157\156"] == "\155\157\x5f\157\141\x75\164\150\137\x72\x65\163\x65\156\x64\137\157\x74\x70") {
            goto WMf;
        }
        if (!($_POST["\x6f\x70\x74\151\x6f\x6e"] == "\x6d\157\x5f\x6f\141\x75\x74\150\137\143\x68\x61\156\x67\145\x5f\145\x6d\141\x69\154")) {
            goto QF0;
        }
        mo_oauth_client_update_option("\x6d\157\x5f\157\x61\x75\x74\x68\x5f\x72\145\147\151\x73\x74\162\x61\x74\151\x6f\x6e\x5f\163\x74\x61\164\x75\163", '');
        QF0:
        goto NgV;
        WMf:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto DSs;
        }
        return $this->mo_oauth_show_curl_error();
        DSs:
        $Hc = new Customer();
        $yZ = json_decode($Hc->send_otp_token(), true);
        if (strcasecmp($yZ["\163\164\x61\x74\165\x73"], "\123\125\103\x43\x45\123\x53") == 0) {
            goto Tpq;
        }
        mo_oauth_client_update_option("\x6d\145\163\x73\x61\147\x65", "\124\150\145\162\x65\x20\167\141\163\x20\x61\x6e\x20\x65\x72\x72\x6f\162\x20\x69\x6e\x20\x73\x65\x6e\x64\151\156\147\x20\x65\x6d\141\151\x6c\56\40\x50\x6c\145\141\x73\x65\40\143\x6c\151\143\153\x20\x6f\156\40\x52\145\x73\x65\x6e\x64\x20\117\x54\120\40\x74\157\x20\164\x72\x79\x20\141\147\x61\151\x6e\x2e");
        mo_oauth_client_update_option("\155\x6f\x5f\x6f\x61\165\x74\x68\137\x72\145\147\151\x73\164\x72\141\x74\151\x6f\156\137\163\164\141\164\165\x73", "\115\117\137\117\x54\120\137\104\x45\114\111\126\105\122\105\x44\137\106\x41\111\x4c\x55\122\x45");
        $this->mo_oauth_show_error_message();
        goto j_G;
        Tpq:
        mo_oauth_client_update_option("\155\145\x73\163\x61\x67\145", "\40\x41\40\x6f\156\x65\40\164\x69\x6d\x65\40\x70\x61\163\x73\143\157\x64\x65\x20\151\163\x20\x73\145\x6e\x74\40\x74\x6f\40" . mo_oauth_client_get_option("\x6d\157\137\157\x61\x75\x74\150\x5f\x61\144\x6d\151\156\x5f\x65\x6d\x61\151\154") . "\40\141\147\x61\x69\156\56\40\x50\154\x65\141\163\145\x20\143\x68\145\x63\153\x20\151\x66\x20\171\157\165\40\147\157\164\x20\x74\x68\x65\40\x6f\164\x70\x20\141\156\x64\x20\145\156\x74\x65\162\x20\151\x74\40\x68\145\x72\x65\56");
        wp_cache_set("\155\x6f\137\157\x61\x75\x74\x68\137\164\x72\x61\x6e\x73\x61\x63\x74\151\157\x6e\x49\144", $yZ["\164\170\x49\144"], "\155\x6f\x5f\157\x61\165\x74\150\137\x63\x6c\151\x65\156\164\x5f\x70\x72\x65\x6d\x69\x75\x6d");
        mo_oauth_client_update_option("\155\157\137\157\x61\x75\164\x68\x5f\162\x65\x67\x69\x73\164\x72\x61\x74\x69\157\156\137\163\164\141\x74\165\163", "\x4d\x4f\137\x4f\x54\x50\x5f\x44\x45\114\111\x56\105\122\105\104\x5f\123\x55\103\103\x45\123\x53");
        $this->mo_oauth_show_success_message();
        j_G:
        NgV:
        goto Y6t;
        but:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto LSS;
        }
        return $this->mo_oauth_show_curl_error();
        LSS:
        $jw = $_POST["\x6d\157\x5f\x6f\141\x75\164\150\x5f\x63\x6f\156\164\x61\x63\x74\x5f\x75\x73\137\x65\155\x61\151\x6c"];
        $iW = $_POST["\155\157\137\157\141\165\x74\150\x5f\x63\x6f\x6e\x74\x61\x63\164\137\165\x73\137\160\150\157\156\x65"];
        $uZ = $_POST["\155\157\137\157\x61\x75\x74\x68\x5f\143\x6f\156\x74\141\x63\x74\137\x75\x73\137\161\165\145\x72\171"];
        $Hc = new Customer();
        if ($this->mo_oauth_check_empty_or_null($jw) || $this->mo_oauth_check_empty_or_null($uZ)) {
            goto lYg;
        }
        $X8 = $Hc->submit_contact_us($jw, $iW, $uZ);
        if ($X8 == false) {
            goto TWZ;
        }
        mo_oauth_client_update_option("\155\145\163\x73\x61\x67\x65", "\x54\x68\x61\156\x6b\163\40\146\x6f\x72\x20\x67\145\164\164\151\x6e\147\40\151\156\x20\164\x6f\x75\x63\150\41\40\127\145\40\163\150\x61\154\x6c\x20\147\145\x74\x20\142\141\x63\153\40\x74\x6f\40\171\x6f\x75\x20\x73\150\x6f\x72\164\x6c\x79\56");
        $this->mo_oauth_show_success_message();
        goto vVY;
        TWZ:
        mo_oauth_client_update_option("\155\x65\163\x73\x61\x67\x65", "\131\x6f\x75\x72\x20\x71\165\145\x72\171\40\x63\157\x75\x6c\144\x20\x6e\157\x74\40\x62\145\40\163\165\142\x6d\151\164\x74\x65\144\x2e\40\x50\x6c\x65\x61\163\145\40\164\x72\171\40\141\147\x61\x69\156\56");
        $this->mo_oauth_show_error_message();
        vVY:
        goto z0W;
        lYg:
        mo_oauth_client_update_option("\x6d\x65\x73\163\141\147\145", "\x50\154\145\x61\163\145\x20\146\x69\154\154\40\x75\x70\x20\105\155\141\151\154\40\141\156\144\40\x51\x75\x65\x72\x79\x20\x66\x69\x65\154\144\163\x20\x74\157\x20\x73\165\142\x6d\x69\164\40\x79\157\165\162\40\161\165\145\x72\x79\56");
        $this->mo_oauth_show_error_message();
        z0W:
        Y6t:
        goto gqo;
        q7C:
        if (!(!isset($_POST["\155\157\x5f\157\x61\x75\164\x68\137\x63\154\151\x65\156\164\137\154\x69\143\x65\x6e\x73\x65\x5f\153\145\x79"]) || empty($_POST["\x6d\157\x5f\x6f\x61\x75\x74\150\x5f\143\x6c\151\x65\156\164\137\x6c\151\x63\x65\x6e\163\145\x5f\153\145\171"]))) {
            goto LBh;
        }
        mo_oauth_client_update_option("\155\145\x73\163\141\x67\145", "\x50\x6c\145\141\163\x65\40\x65\156\x74\145\162\x20\x76\141\154\x69\144\x20\x6c\x69\x63\x65\156\163\145\40\x6b\145\x79\56");
        $this->mo_oauth_show_error_message();
        return;
        LBh:
        $GK = trim($_POST["\155\157\x5f\157\141\165\x74\150\x5f\143\x6c\151\x65\x6e\164\x5f\154\151\x63\145\156\163\145\137\153\145\x79"]);
        $Hc = new Customer();
        $yZ = json_decode($Hc->check_customer_ln(), true);
        if (strcasecmp($yZ["\x73\x74\141\164\x75\163"], "\123\125\x43\103\105\123\123") == 0) {
            goto AxU;
        }
        mo_oauth_client_update_option("\155\x65\163\163\x61\x67\x65", "\x49\x6e\x76\141\154\x69\144\x20\154\x69\x63\145\156\x73\x65\56\x20\120\154\x65\141\x73\145\x20\164\x72\x79\x20\141\147\x61\x69\156\x2e");
        $this->mo_oauth_show_error_message();
        goto JN3;
        AxU:
        $yZ = json_decode($Hc->XfskodsfhHJ($GK), true);
        if (strcasecmp($yZ["\x73\164\x61\x74\165\x73"], "\123\125\x43\x43\105\123\x53") == 0) {
            goto Q0W;
        }
        if (strcasecmp($yZ["\163\164\141\x74\x75\x73"], "\106\x41\111\x4c\x45\104") == 0) {
            goto wdD;
        }
        mo_oauth_client_update_option("\155\x65\x73\163\x61\147\x65", "\x41\x6e\40\145\162\162\x6f\162\40\157\x63\x63\165\162\145\x64\x20\167\x68\x69\154\145\40\x70\162\x6f\143\145\x73\163\x69\156\x67\40\171\157\x75\162\40\162\x65\x71\165\145\x73\164\x2e\x20\120\x6c\145\141\163\145\x20\124\162\171\x20\141\147\141\151\156\x2e");
        $this->mo_oauth_show_error_message();
        goto uTl;
        wdD:
        mo_oauth_client_update_option("\155\145\x73\163\x61\147\145", "\x59\x6f\165\x20\150\x61\x76\145\x20\145\156\164\145\162\x65\x64\x20\x61\x6e\40\x69\156\x76\141\154\x69\144\x20\x6c\151\143\145\x6e\163\145\x20\x6b\x65\171\x2e\40\120\154\145\141\x73\x65\x20\145\156\x74\x65\x72\x20\x61\40\x76\141\x6c\151\x64\x20\x6c\151\143\145\156\x73\x65\40\153\x65\x79\56");
        $this->mo_oauth_show_error_message();
        uTl:
        goto MwN;
        Q0W:
        mo_oauth_client_update_option("\x6d\157\137\x6f\141\165\164\x68\137\154\153", mooauthencrypt($GK));
        mo_oauth_client_update_option("\155\157\x5f\157\141\x75\x74\x68\137\x6c\x76", mooauthencrypt("\164\x72\165\x65"));
        mo_oauth_client_update_option("\155\145\163\x73\141\147\x65", "\131\x6f\x75\162\40\x6c\x69\143\145\x6e\163\x65\40\151\x73\40\x76\x65\162\151\x66\x69\145\144\56\40\x59\157\x75\40\x63\141\156\40\x6e\157\167\40\163\x65\x74\165\x70\40\x74\x68\x65\x20\160\x6c\165\147\151\x6e\56");
        $this->mo_oauth_show_success_message();
        MwN:
        JN3:
        gqo:
        goto Ax4;
        x1E:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto grv;
        }
        return $this->mo_oauth_show_curl_error();
        grv:
        $YI = '';
        $gv = '';
        $ea = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\155\x6f\x5f\x6f\x61\x75\x74\x68\137\146\x61\143\145\142\x6f\157\153\x5f\163\143\157\160\x65"]) || $this->mo_oauth_check_empty_or_null($_POST["\x6d\x6f\x5f\x6f\141\165\164\150\137\146\141\x63\x65\x62\x6f\x6f\x6b\x5f\143\154\x69\x65\156\x74\137\x69\x64"]) || $this->mo_oauth_check_empty_or_null($_POST["\155\x6f\x5f\x6f\141\x75\x74\x68\x5f\146\141\143\145\x62\157\157\x6b\137\143\154\151\145\156\x74\x5f\x73\x65\x63\x72\x65\x74"])) {
            goto mGW;
        }
        $YI = stripslashes($_POST["\x6d\157\x5f\157\141\165\164\x68\137\x66\x61\143\x65\142\157\x6f\x6b\137\x73\143\x6f\160\145"]);
        $gv = stripslashes($_POST["\x6d\157\x5f\x6f\x61\165\x74\x68\137\146\x61\x63\145\x62\157\157\153\137\143\154\x69\x65\156\164\137\x69\144"]);
        $ea = stripslashes($_POST["\155\157\137\x6f\141\x75\164\x68\137\146\141\x63\145\x62\x6f\x6f\153\x5f\143\x6c\x69\145\156\x74\x5f\163\x65\x63\x72\145\164"]);
        goto RJo;
        mGW:
        mo_oauth_client_update_option("\155\x65\x73\163\x61\147\145", "\120\x6c\145\x61\x73\145\x20\x65\156\x74\x65\162\40\103\154\x69\x65\156\x74\x20\x49\104\x20\141\156\x64\40\103\154\x69\x65\156\x74\40\123\145\143\x72\145\x74\40\164\157\40\163\x61\166\x65\x20\163\145\164\x74\151\x6e\147\163\x2e");
        $this->mo_oauth_show_error_message();
        return;
        RJo:
        if (mo_oauth_is_customer_registered()) {
            goto sEv;
        }
        mo_oauth_client_update_option("\155\145\163\163\x61\147\145", "\x50\154\x65\x61\x73\x65\x20\162\x65\147\x69\163\164\x65\162\40\x63\165\163\164\x6f\x6d\145\x72\x20\142\145\146\157\162\x65\x20\164\162\171\x69\156\147\40\164\x6f\x20\x73\141\x76\x65\40\157\x74\x68\145\x72\40\143\x6f\156\x66\x69\147\165\162\x61\x74\x69\x6f\x6e\163");
        $this->mo_oauth_show_error_message();
        goto oMJ;
        sEv:
        mo_oauth_client_update_option("\x6d\x6f\x5f\157\x61\165\x74\150\137\x66\x61\x63\x65\x62\157\157\x6b\137\145\156\x61\x62\154\145", isset($_POST["\x6d\x6f\137\x6f\x61\x75\164\x68\137\146\141\143\x65\142\x6f\157\153\137\145\156\141\x62\154\145"]) ? $_POST["\155\x6f\137\157\x61\165\x74\x68\x5f\146\141\x63\x65\142\157\157\153\x5f\x65\156\x61\142\x6c\145"] : 0);
        mo_oauth_client_update_option("\x6d\x6f\137\157\x61\x75\164\x68\x5f\x66\141\x63\x65\142\x6f\157\x6b\x5f\x73\143\x6f\160\x65", $YI);
        mo_oauth_client_update_option("\155\x6f\137\157\x61\x75\x74\x68\x5f\146\141\x63\x65\142\x6f\157\x6b\137\x63\x6c\151\145\x6e\164\x5f\x69\144", $gv);
        mo_oauth_client_update_option("\155\157\137\157\141\x75\164\150\x5f\x66\x61\143\145\x62\x6f\157\153\137\143\154\x69\145\156\x74\137\x73\145\143\x72\x65\x74", $ea);
        if (mo_oauth_client_get_option("\x6d\x6f\x5f\157\141\165\164\x68\x5f\x66\141\x63\x65\x62\x6f\157\x6b\137\x63\x6c\x69\145\x6e\x74\x5f\151\144") && mo_oauth_client_get_option("\155\157\137\x6f\x61\165\164\150\137\x66\x61\143\x65\x62\157\x6f\x6b\137\143\154\151\x65\156\164\137\163\145\143\162\145\164")) {
            goto K7W;
        }
        mo_oauth_client_update_option("\155\x65\163\x73\x61\147\145", "\x50\154\145\x61\163\x65\x20\145\156\164\145\x72\x20\x43\154\151\145\x6e\x74\x20\111\x44\x20\x61\x6e\x64\x20\x43\154\151\x65\156\164\x20\x53\145\x63\162\145\x74\x20\164\157\x20\163\141\166\145\40\x73\x65\x74\164\x69\156\147\163");
        mo_oauth_client_update_option("\155\157\137\157\141\x75\164\x68\x5f\147\157\157\147\154\x65\137\x65\156\x61\142\x6c\145", false);
        $this->mo_oauth_show_error_message();
        goto Zvy;
        K7W:
        $Hc = new Customer();
        $cQ = $Hc->add_oauth_application("\x66\141\143\x65\142\157\x6f\153", "\x46\x61\143\x65\x62\157\157\153\40\117\x41\165\x74\150");
        if ($cQ == "\101\x70\160\x6c\x69\143\141\x74\x69\157\x6e\40\103\162\x65\141\164\145\x64") {
            goto Q6J;
        }
        mo_oauth_client_update_option("\155\145\x73\x73\x61\x67\x65", $cQ);
        $this->mo_oauth_show_error_message();
        goto ui1;
        Q6J:
        mo_oauth_client_update_option("\x6d\x65\163\x73\x61\147\145", "\x59\157\x75\x72\40\x73\145\164\x74\151\156\147\x73\40\167\145\x72\145\x20\x73\141\166\x65\144");
        $this->mo_oauth_show_success_message();
        ui1:
        Zvy:
        oMJ:
        Ax4:
        goto Q4C;
        F3N:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto Mr2;
        }
        return $this->mo_oauth_show_curl_error();
        Mr2:
        $gv = '';
        $ea = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\x6d\157\x5f\157\141\x75\x74\150\137\x65\166\x65\157\156\x6c\151\x6e\x65\137\x63\154\x69\x65\x6e\x74\x5f\163\145\x63\162\x65\x74"]) || $this->mo_oauth_check_empty_or_null($_POST["\155\x6f\137\x6f\141\165\164\x68\x5f\x65\x76\145\x6f\156\x6c\151\156\145\137\143\154\x69\x65\156\x74\137\x73\145\143\x72\145\164"])) {
            goto Amb;
        }
        $gv = stripslashes($_POST["\155\157\137\157\x61\165\164\x68\x5f\145\166\145\x6f\156\154\151\x6e\x65\137\143\154\151\x65\x6e\164\137\x69\144"]);
        $ea = stripslashes($_POST["\x6d\x6f\137\157\141\x75\x74\150\x5f\145\166\145\x6f\156\x6c\x69\x6e\x65\137\143\154\151\x65\156\x74\x5f\163\x65\x63\162\x65\x74"]);
        goto vzm;
        Amb:
        mo_oauth_client_update_option("\155\x65\x73\163\x61\147\145", "\x50\x6c\x65\141\x73\x65\40\145\x6e\164\x65\162\40\x43\x6c\x69\145\x6e\x74\40\111\x44\x20\x61\x6e\144\40\x43\154\151\145\x6e\164\40\123\x65\x63\162\x65\164\x20\x74\x6f\40\163\x61\x76\x65\x20\x73\x65\x74\164\151\156\147\x73\56");
        $this->mo_oauth_show_error_message();
        return;
        vzm:
        if (mo_oauth_is_customer_registered()) {
            goto Jvo;
        }
        mo_oauth_client_update_option("\155\x65\163\163\x61\147\x65", "\x50\154\145\x61\163\145\x20\162\145\x67\151\x73\x74\x65\x72\40\143\x75\163\164\157\155\145\x72\x20\x62\145\x66\157\x72\145\x20\x74\162\171\151\156\147\x20\x74\157\40\163\x61\x76\x65\x20\157\164\x68\x65\162\x20\143\157\156\146\151\x67\x75\x72\x61\164\151\x6f\x6e\x73");
        $this->mo_oauth_show_error_message();
        goto WsZ;
        Jvo:
        mo_oauth_client_update_option("\x6d\x6f\x5f\157\x61\x75\164\150\x5f\145\x76\x65\x6f\156\x6c\x69\x6e\145\x5f\145\x6e\141\x62\154\x65", isset($_POST["\x6d\x6f\x5f\x6f\141\165\164\150\137\x65\x76\x65\x6f\156\154\x69\156\x65\137\145\156\x61\142\x6c\145"]) ? $_POST["\x6d\x6f\x5f\157\x61\x75\164\x68\137\145\x76\145\157\x6e\154\x69\x6e\x65\137\145\156\141\142\x6c\x65"] : 0);
        mo_oauth_client_update_option("\x6d\157\x5f\157\x61\165\164\x68\137\x65\x76\x65\x6f\156\154\151\x6e\145\137\x63\154\151\x65\156\x74\x5f\151\144", $gv);
        mo_oauth_client_update_option("\x6d\157\x5f\157\141\x75\164\x68\x5f\145\166\x65\x6f\156\154\151\x6e\x65\137\143\x6c\x69\145\x6e\x74\137\x73\x65\x63\162\x65\x74", $ea);
        if (mo_oauth_client_get_option("\x6d\x6f\137\x6f\141\x75\164\150\x5f\145\166\x65\157\x6e\x6c\x69\x6e\145\137\143\154\151\x65\156\164\x5f\x69\x64") && mo_oauth_client_get_option("\155\x6f\137\157\x61\x75\164\x68\x5f\x65\x76\x65\157\156\x6c\x69\156\x65\x5f\143\x6c\151\x65\156\x74\137\163\145\143\162\x65\x74")) {
            goto xcF;
        }
        mo_oauth_client_update_option("\x6d\145\163\163\x61\x67\145", "\x50\154\145\141\163\145\x20\145\x6e\164\x65\x72\x20\103\154\x69\145\156\x74\x20\111\x44\x20\x61\x6e\144\40\103\154\x69\145\156\x74\40\x53\x65\143\162\145\164\40\164\157\x20\x73\141\166\x65\40\x73\145\164\164\151\156\147\163");
        mo_oauth_client_update_option("\x6d\157\x5f\157\141\165\x74\150\x5f\145\166\145\x6f\x6e\x6c\x69\156\145\x5f\x65\x6e\141\142\x6c\x65", false);
        $this->mo_oauth_show_error_message();
        goto s2g;
        xcF:
        $Hc = new Customer();
        $cQ = $Hc->add_oauth_application("\x65\x76\x65\157\156\x6c\151\156\145", "\105\126\x45\x20\117\156\x6c\x69\x6e\x65\40\117\x41\x75\x74\150");
        if ($cQ == "\x41\160\x70\x6c\x69\143\x61\x74\151\157\156\x20\x43\x72\145\141\x74\145\x64") {
            goto w0p;
        }
        mo_oauth_client_update_option("\155\x65\x73\163\141\x67\x65", $cQ);
        $this->mo_oauth_show_error_message();
        goto S1w;
        w0p:
        mo_oauth_client_update_option("\x6d\x65\x73\x73\x61\147\145", "\131\157\x75\162\40\163\145\164\164\151\x6e\147\x73\x20\x77\x65\162\x65\40\163\x61\x76\145\144\56\x20\x47\x6f\40\x74\157\x20\101\144\x76\x61\x6e\x63\x65\144\x20\x45\x56\x45\40\x4f\156\154\151\x6e\145\x20\123\x65\x74\164\151\156\x67\163\40\x66\x6f\162\x20\143\x6f\x6e\x66\151\x67\x75\162\x69\x6e\147\40\162\x65\163\x74\x72\151\143\x74\x69\x6f\156\x73\x20\157\x6e\40\165\x73\145\x72\x20\x73\x69\147\156\40\151\156\56");
        $this->mo_oauth_show_success_message();
        S1w:
        s2g:
        WsZ:
        Q4C:
        goto qXI;
        ofs:
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto ETM;
        }
        return $this->mo_oauth_show_curl_error();
        ETM:
        $YI = '';
        $gv = '';
        $ea = '';
        if ($this->mo_oauth_check_empty_or_null($_POST["\x6d\x6f\137\157\x61\x75\164\150\137\147\157\x6f\147\154\145\x5f\163\143\x6f\x70\145"]) || $this->mo_oauth_check_empty_or_null($_POST["\155\157\x5f\157\x61\x75\164\150\137\x67\x6f\157\x67\154\145\x5f\143\154\x69\145\156\164\x5f\x69\144"]) || $this->mo_oauth_check_empty_or_null($_POST["\155\157\x5f\x6f\x61\165\x74\x68\x5f\147\x6f\157\147\154\x65\137\x63\x6c\151\x65\x6e\164\137\x73\145\143\162\145\164"])) {
            goto fcy;
        }
        $YI = stripslashes($_POST["\x6d\x6f\137\157\141\165\164\x68\x5f\147\x6f\157\147\154\145\137\x73\x63\157\160\145"]);
        $gv = stripslashes($_POST["\155\157\137\157\x61\165\164\x68\137\147\157\x6f\147\x6c\x65\x5f\143\x6c\x69\x65\x6e\x74\137\x69\x64"]);
        $ea = stripslashes($_POST["\155\157\137\157\x61\165\x74\x68\137\147\x6f\157\147\154\145\x5f\x63\x6c\x69\x65\x6e\164\137\x73\x65\143\162\x65\x74"]);
        goto fCv;
        fcy:
        mo_oauth_client_update_option("\x6d\x65\x73\x73\x61\x67\145", "\120\x6c\145\141\163\145\40\x65\156\x74\x65\162\x20\x43\x6c\151\x65\x6e\x74\40\x49\x44\x20\141\x6e\x64\40\x43\x6c\151\x65\156\x74\40\x53\x65\x63\162\x65\x74\x20\164\x6f\40\x73\x61\x76\145\x20\x73\145\164\164\x69\x6e\x67\163\56");
        $this->mo_oauth_show_error_message();
        return;
        fCv:
        if (mo_oauth_is_customer_registered()) {
            goto Ed0;
        }
        mo_oauth_client_update_option("\155\145\163\x73\x61\147\x65", "\x50\x6c\x65\x61\163\145\x20\x72\x65\x67\151\x73\x74\145\x72\x20\143\x75\163\x74\157\x6d\x65\x72\x20\142\145\146\x6f\162\x65\x20\164\162\171\151\156\x67\x20\164\157\x20\x73\141\166\x65\x20\x6f\x74\150\145\x72\40\143\x6f\156\x66\x69\147\165\x72\141\x74\x69\157\x6e\x73");
        $this->mo_oauth_show_error_message();
        goto pXr;
        Ed0:
        mo_oauth_client_update_option("\155\x6f\137\x6f\x61\165\164\x68\137\147\157\157\147\154\145\x5f\145\x6e\141\142\x6c\145", isset($_POST["\x6d\157\137\157\141\x75\x74\x68\137\147\x6f\x6f\x67\x6c\x65\137\x65\x6e\141\142\x6c\145"]) ? $_POST["\155\157\137\x6f\141\x75\164\x68\137\147\x6f\157\x67\154\145\137\145\x6e\x61\142\x6c\145"] : 0);
        mo_oauth_client_update_option("\x6d\x6f\137\157\x61\165\164\150\x5f\x67\x6f\157\147\x6c\145\x5f\x73\143\x6f\160\x65", $YI);
        mo_oauth_client_update_option("\155\157\137\157\141\x75\164\150\x5f\x67\x6f\157\x67\154\x65\137\143\154\151\145\x6e\164\137\x69\144", $gv);
        mo_oauth_client_update_option("\155\157\137\157\141\x75\x74\x68\137\147\x6f\x6f\x67\154\x65\137\143\x6c\x69\145\156\164\x5f\x73\x65\143\162\145\164", $ea);
        if (mo_oauth_client_get_option("\x6d\157\137\x6f\x61\x75\164\x68\137\x67\157\157\x67\x6c\x65\137\x63\154\151\145\156\164\x5f\151\144") && mo_oauth_client_get_option("\155\157\137\157\x61\x75\164\x68\137\x67\157\157\x67\x6c\145\x5f\x63\x6c\x69\x65\156\x74\x5f\163\x65\x63\x72\145\x74")) {
            goto qto;
        }
        mo_oauth_client_update_option("\x6d\145\163\x73\x61\147\145", "\120\154\x65\141\163\145\x20\x65\x6e\164\145\x72\40\x43\x6c\x69\x65\x6e\164\40\x49\104\x20\x61\x6e\x64\40\x43\x6c\x69\145\x6e\164\40\123\x65\143\x72\145\164\x20\164\x6f\40\x73\141\x76\145\x20\x73\145\164\x74\151\156\x67\x73");
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\x75\164\x68\137\x67\157\157\147\154\x65\137\x65\x6e\x61\142\154\145", false);
        $this->mo_oauth_show_error_message();
        goto dl1;
        qto:
        $Hc = new Customer();
        $cQ = $Hc->add_oauth_application("\147\x6f\157\147\x6c\x65", "\107\157\x6f\147\x6c\x65\x20\x4f\x41\x75\164\150");
        if ($cQ == "\x41\x70\160\x6c\151\x63\141\164\151\157\x6e\40\x43\x72\x65\141\x74\145\144") {
            goto cey;
        }
        mo_oauth_client_update_option("\155\145\163\163\x61\147\x65", $cQ);
        $this->mo_oauth_show_error_message();
        goto RKf;
        cey:
        mo_oauth_client_update_option("\x6d\x65\163\x73\x61\x67\145", "\131\157\165\162\x20\x73\145\164\x74\151\156\x67\163\x20\167\145\162\145\40\163\x61\166\x65\144");
        $this->mo_oauth_show_success_message();
        RKf:
        dl1:
        pXr:
        qXI:
        goto hC0;
        AFV:
        mo_oauth_client_update_option("\155\157\x5f\141\143\x74\151\x76\x61\164\145\x5f\163\151\156\147\154\145\x5f\154\157\147\x69\156\x5f\146\x6c\x6f\167", isset($_POST["\x6d\x6f\137\141\x63\x74\151\x76\141\164\145\x5f\163\x69\156\147\154\145\137\x6c\x6f\147\x69\156\137\x66\154\157\x77"]) ? $_POST["\x6d\x6f\x5f\x61\x63\164\151\x76\141\164\x65\137\163\x69\x6e\x67\x6c\145\137\154\157\x67\151\156\137\146\154\x6f\x77"] : 0);
        mo_oauth_client_update_option("\x6d\157\137\x6f\141\165\164\150\x5f\143\x6c\x69\145\156\164\137\143\x6f\x6d\x6d\157\156\137\154\x6f\147\151\x6e\x5f\x62\165\x74\164\x6f\x6e\137\144\151\163\160\154\141\171\137\156\x61\x6d\x65", isset($_POST["\143\157\155\x6d\x6f\x6e\137\x6c\157\147\151\156\x5f\x62\165\x74\x74\157\156\137\144\x69\x73\160\154\141\x79\x5f\x6e\x61\x6d\145"]) ? $_POST["\x63\x6f\155\x6d\157\x6e\137\154\x6f\x67\151\156\x5f\142\165\164\x74\157\156\x5f\x64\x69\x73\x70\154\141\171\x5f\x6e\141\155\145"] : '');
        mo_oauth_client_update_option("\155\157\137\x61\143\x74\151\x76\141\164\145\137\165\x73\x65\x72\x5f\x61\x6e\x61\154\171\164\151\143\x73", isset($_POST["\155\x6f\137\x61\x63\164\151\166\141\x74\x65\137\x75\163\145\x72\x5f\141\x6e\x61\154\x79\x74\151\x63\163"]) ? $_POST["\155\x6f\137\141\143\164\x69\x76\x61\x74\x65\137\x75\163\x65\x72\137\x61\x6e\141\x6c\x79\164\x69\x63\x73"] : 0);
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\165\x74\150\x5f\x63\154\151\145\x6e\164\137\x72\145\163\x74\162\x69\x63\164\x5f\164\157\x5f\x6c\x6f\147\147\145\x64\x5f\151\156\x5f\x75\x73\145\162\x73", isset($_POST["\162\x65\163\x74\162\151\143\x74\x5f\x74\x6f\x5f\154\157\147\147\x65\144\137\x69\x6e\x5f\x75\163\x65\x72\x73"]) ? $_POST["\162\145\163\164\162\151\143\x74\x5f\x74\157\137\x6c\157\x67\x67\145\x64\x5f\151\156\137\x75\x73\x65\x72\163"] : 0);
        mo_oauth_client_update_option("\x6d\x6f\137\157\141\x75\164\x68\137\x63\x6c\x69\145\156\164\137\x61\165\x74\x6f\x5f\162\145\x64\151\162\145\x63\x74\x5f\145\x78\x63\x6c\165\144\145\137\165\162\154\x73", isset($_POST["\141\165\164\157\x5f\x72\145\144\x69\162\x65\143\164\137\x65\170\143\154\x75\144\145\137\x75\x72\154\x73"]) ? $_POST["\x61\x75\164\x6f\137\x72\145\x64\x69\x72\x65\143\164\137\x65\x78\143\x6c\165\x64\x65\137\165\x72\x6c\x73"] : '');
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\141\165\164\150\x5f\143\154\151\x65\156\x74\x5f\x70\x6f\x70\x75\x70\137\x6c\157\x67\151\156", isset($_POST["\x70\x6f\160\165\160\137\154\157\x67\x69\156"]) ? $_POST["\160\157\160\165\x70\x5f\154\x6f\x67\x69\156"] : 0);
        mo_oauth_client_update_option("\x6d\157\x5f\x6f\x61\x75\x74\x68\137\143\154\151\x65\x6e\x74\137\162\145\163\x74\162\x69\x63\164\x65\x64\137\x64\x6f\x6d\141\151\x6e\163", isset($_POST["\x72\x65\163\x74\x72\x69\143\x74\x65\x64\x5f\x64\x6f\x6d\141\151\x6e\x73"]) ? $_POST["\x72\x65\x73\x74\162\151\x63\164\145\144\137\144\x6f\155\x61\x69\x6e\163"] : 0);
        mo_oauth_client_update_option("\x6d\x6f\x5f\157\141\x75\164\x68\x5f\x63\x6c\x69\145\156\164\137\141\x66\x74\145\162\x5f\x6c\x6f\x67\x69\x6e\x5f\165\x72\154", stripslashes($_POST["\143\x75\163\x74\x6f\x6d\x5f\141\x66\x74\x65\162\137\154\157\147\x69\156\x5f\x75\x72\x6c"]));
        mo_oauth_client_update_option("\155\157\137\157\141\165\164\x68\x5f\x63\x6c\151\145\156\164\137\141\146\164\x65\162\x5f\154\157\147\x6f\165\164\137\x75\x72\154", stripslashes($_POST["\143\x75\163\164\157\155\x5f\x61\x66\164\x65\162\137\x6c\x6f\x67\x6f\165\164\x5f\165\162\154"]));
        mo_oauth_client_update_option("\155\157\x5f\157\141\x75\x74\150\137\x64\171\156\x61\155\151\x63\137\x63\x61\154\x6c\x62\x61\143\153\137\165\x72\154", stripslashes($_POST["\x64\x79\x6e\141\155\x69\143\x5f\143\141\154\x6c\x62\x61\143\x6b\x5f\x75\162\154"]));
        mo_oauth_client_update_option("\x6d\157\x5f\157\141\x75\x74\x68\x5f\x63\x6c\x69\x65\x6e\x74\x5f\141\x75\x74\x6f\x5f\162\145\x67\x69\x73\x74\x65\162", isset($_POST["\x61\165\x74\x6f\x5f\x72\145\147\x69\x73\164\145\x72"]) ? $_POST["\141\165\164\157\137\162\x65\147\151\x73\x74\x65\x72"] : 0);
        $ij = '';
        mo_oauth_client_update_option("\155\x65\163\x73\x61\x67\145", "\x41\144\166\x61\x6e\x63\x65\144\x20\123\145\x74\x74\151\x6e\147\40\x68\141\163\40\142\145\145\x6e\40\165\160\x64\x61\164\x65\x64\x2e" . $ij);
        $this->mo_oauth_show_success_message();
        hC0:
        goto QpT;
        dj6:
        $rd = stripslashes($_POST["\155\157\x5f\157\141\x75\x74\150\x5f\141\160\x70\137\156\141\x6d\x65"]);
        mo_oauth_client_update_option("\x6d\x6f\x5f\157\141\165\164\150\137\143\154\151\x65\x6e\164\x5f" . $rd . "\137\153\145\145\x70\x5f\145\170\x69\x73\164\151\x6e\x67\137\165\x73\145\x72\x5f\x72\x6f\154\x65\x73", isset($_POST["\153\145\x65\x70\137\x65\170\x69\163\x74\x69\156\147\x5f\165\163\145\162\137\162\157\154\x65\x73"]) ? $_POST["\x6b\145\x65\x70\x5f\x65\170\151\x73\164\151\x6e\x67\x5f\165\163\145\162\137\x72\x6f\x6c\145\163"] : 0);
        mo_oauth_client_update_option("\155\x6f\137\157\141\165\x74\150\x5f\143\154\x69\x65\156\x74\x5f" . $rd . "\137\162\145\163\164\x72\x69\143\164\137\154\x6f\x67\x69\156\137\146\157\x72\137\155\141\x70\x70\x65\x64\x5f\x72\x6f\154\x65\163", isset($_POST["\162\x65\163\x74\x72\151\x63\x74\x5f\x6c\157\147\x69\x6e\137\146\157\x72\137\x6d\141\x70\160\145\144\137\x72\157\x6c\145\163"]) ? $_POST["\162\145\x73\x74\x72\x69\x63\164\137\x6c\157\x67\x69\156\137\146\157\x72\x5f\x6d\x61\160\160\145\x64\x5f\x72\157\x6c\145\x73"] : false);
        $f8 = 100;
        $fl = 0;
        $P3 = 1;
        OgK:
        if (!($P3 <= $f8)) {
            goto QL2;
        }
        if (isset($_POST["\155\141\160\160\x69\156\147\137\153\x65\x79\137" . $P3]) && isset($_POST["\155\141\x70\160\x69\x6e\147\137\153\x65\x79\x5f" . $P3])) {
            goto R5Q;
        }
        goto QL2;
        goto IIu;
        R5Q:
        if (!($_POST["\155\141\x70\x70\x69\156\x67\137\153\145\x79\137" . $P3] == '')) {
            goto WlU;
        }
        goto PJu;
        WlU:
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\x61\165\x74\150\137\x63\x6c\x69\145\156\x74\137" . $rd . "\137\155\x61\x70\160\x69\x6e\147\x5f\153\145\171\137" . $P3, $_POST["\155\141\160\x70\151\156\x67\137\x6b\145\x79\137" . $P3]);
        mo_oauth_client_update_option("\155\x6f\x5f\x6f\141\165\x74\150\137\143\x6c\x69\x65\x6e\x74\137" . $rd . "\x5f\x6d\x61\160\x70\151\x6e\x67\x5f\x76\x61\154\x75\145\x5f" . $P3, $_POST["\x6d\x61\x70\160\x69\x6e\x67\137\x76\141\x6c\165\145\x5f" . $P3]);
        $fl++;
        IIu:
        PJu:
        $P3++;
        goto OgK;
        QL2:
        mo_oauth_client_update_option("\155\157\x5f\x6f\x61\x75\x74\x68\x5f\143\154\151\x65\x6e\164\137" . $rd . "\137\x72\x6f\x6c\x65\137\x6d\x61\160\160\x69\x6e\147\x5f\143\x6f\165\156\x74", $fl);
        if (!isset($_POST["\x6d\141\160\x70\151\x6e\x67\x5f\166\141\x6c\165\145\x5f\x64\145\x66\141\165\154\x74"])) {
            goto TFT;
        }
        mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\165\x74\150\x5f\x63\x6c\151\145\156\164\137" . $rd . "\137\155\x61\x70\x70\151\156\147\x5f\166\x61\x6c\x75\145\x5f\x64\145\146\x61\x75\x6c\164", $_POST["\155\x61\x70\160\151\x6e\147\137\x76\141\x6c\165\145\x5f\144\145\146\141\165\154\164"]);
        TFT:
        $ij = '';
        mo_oauth_client_update_option("\x6d\x65\x73\x73\141\147\145", "\x52\x6f\x6c\x65\x20\x6d\x61\x70\160\151\156\x67\40\150\x61\163\x20\142\x65\x65\156\40\165\x70\144\x61\164\x65\x64\56" . $ij);
        $this->mo_oauth_show_success_message();
        QpT:
        goto mlq;
        cpF:
        $rd = trim(stripslashes($_POST["\x6d\157\x5f\x6f\x61\x75\x74\150\x5f\x61\160\x70\137\x6e\x61\155\x65"]));
        $Qu = trim(stripslashes($_POST["\155\x6f\137\157\x61\165\x74\x68\137\x75\163\145\162\156\141\155\x65\x5f\x61\x74\164\162"]));
        $ie = trim(stripslashes($_POST["\155\x6f\x5f\157\x61\165\x74\150\137\x65\155\x61\x69\154\137\x61\164\x74\x72"]));
        $Xo = trim(stripslashes($_POST["\x6d\x6f\x5f\x6f\141\165\164\x68\137\x66\x69\162\163\x74\156\141\155\x65\137\x61\x74\164\x72"]));
        $p0 = trim(stripslashes($_POST["\155\157\x5f\157\x61\165\x74\x68\137\154\x61\x73\164\x6e\x61\x6d\145\137\141\x74\164\x72"]));
        $h9 = trim(stripslashes($_POST["\x6f\x61\x75\x74\x68\x5f\x63\x6c\x69\145\156\x74\x5f\141\155\137\x64\x69\x73\160\154\141\171\x5f\x6e\x61\155\x65"]));
        $vQ = mo_oauth_client_get_option("\155\x6f\137\157\x61\165\164\x68\x5f\x61\160\x70\163\137\154\151\163\164");
        foreach ($vQ as $kI => $X6) {
            if (!($rd == $kI)) {
                goto Sei;
            }
            $X6["\165\x73\x65\x72\x6e\141\x6d\145\137\x61\164\x74\x72"] = $Qu;
            $X6["\x65\x6d\x61\151\154\137\x61\164\164\x72"] = $ie;
            $X6["\x66\x69\x72\x73\x74\x6e\x61\155\x65\137\x61\164\x74\x72"] = $Xo;
            $X6["\154\141\163\164\x6e\x61\x6d\145\137\141\x74\x74\162"] = $p0;
            $X6["\144\x69\163\x70\x6c\141\171\x5f\x61\x74\x74\x72"] = $h9;
            if (!isset($_POST["\x6d\x61\160\x70\x69\156\x67\x5f\147\x72\x6f\165\x70\156\141\x6d\145\137\141\164\x74\162\151\x62\x75\x74\145"])) {
                goto wzl;
            }
            mo_oauth_client_update_option("\155\x6f\x5f\x6f\141\x75\164\150\x5f\x63\154\x69\x65\x6e\164\x5f" . $rd . "\137\155\141\x70\160\151\156\x67\137\x67\x72\157\x75\160\156\x61\x6d\145\137\141\x74\164\162\151\x62\x75\164\145", $_POST["\155\141\x70\x70\151\156\147\137\x67\162\x6f\165\x70\x6e\x61\155\x65\137\x61\164\x74\x72\x69\142\165\x74\x65"]);
            wzl:
            $Op = array();
            $P3 = 0;
            foreach ($_POST as $OY => $O2) {
                if (!(strpos($OY, "\155\157\137\157\141\165\x74\x68\x5f\143\x6c\151\145\156\164\137\143\x75\163\164\x6f\x6d\137\x61\164\164\162\151\x62\165\164\x65\137\x6b\145\x79") !== false && !empty($_POST[$OY]))) {
                    goto hf9;
                }
                $P3++;
                $t9 = "\x6d\x6f\x5f\157\141\x75\x74\150\x5f\x63\154\x69\145\x6e\x74\137\x63\x75\x73\x74\x6f\155\137\141\164\164\162\x69\142\x75\x74\145\x5f\x76\141\154\165\x65\x5f" . $P3;
                $Op[$O2] = $_POST[$t9];
                hf9:
                tfQ:
            }
            eXQ:
            mo_oauth_client_update_option("\155\157\x5f\157\141\x75\x74\150\x5f\143\x6c\151\x65\156\164\137\143\x75\x73\164\x6f\155\137\141\x74\164\162\163\x5f\x6d\x61\x70\160\151\x6e\147", $Op);
            $vQ[$kI] = $X6;
            goto XfN;
            Sei:
            d3o:
        }
        XfN:
        mo_oauth_client_update_option("\x6d\x6f\x5f\x6f\141\165\x74\x68\137\x61\x70\160\x73\137\154\x69\163\164", $vQ);
        mo_oauth_client_update_option("\155\x65\x73\x73\141\x67\145", "\131\157\165\162\40\163\x65\164\164\151\x6e\147\163\40\141\x72\x65\40\163\x61\166\x65\144\x20\163\x75\143\x63\x65\163\163\x66\x75\154\154\171\x2e");
        $this->mo_oauth_show_success_message();
        wp_redirect("\x61\144\155\151\156\x2e\160\150\x70\77\160\x61\x67\145\x3d\x6d\157\137\x6f\x61\165\164\x68\137\163\145\164\x74\151\156\x67\163\x26\x61\143\164\151\157\x6e\x3d\x75\x70\144\141\164\145\46\x61\x70\160\x3d" . urlencode($rd));
        mlq:
        goto EH0;
        hOV:
        global $wpdb;
        $uI = $wpdb->prefix . Mo_Oauth_Constants::USER_TRANSCATIONS_TABLE;
        if (!($wpdb->get_var("\123\x48\x4f\127\40\124\x41\102\x4c\x45\123\40\x4c\x49\113\105\40\47{$uI}\x27") === $uI)) {
            goto MIB;
        }
        $jQ = $wpdb->get_results("\x44\x52\117\x50\x20\x54\x41\x42\x4c\x45\x20" . $wpdb->prefix . Mo_Oauth_Constants::USER_TRANSCATIONS_TABLE);
        MIB:
        EH0:
        aIk:
    }
    function mo_oauth_get_current_customer()
    {
        $Hc = new Customer();
        $yZ = $Hc->get_customer_key();
        $qU = json_decode($yZ, true);
        if (json_last_error() == JSON_ERROR_NONE) {
            goto CSu;
        }
        mo_oauth_client_update_option("\x6d\145\x73\x73\141\147\x65", "\131\157\x75\x20\x61\154\162\145\x61\144\171\x20\150\x61\x76\145\x20\x61\x6e\40\141\x63\x63\157\x75\156\x74\40\167\151\x74\150\x20\155\x69\x6e\151\x4f\x72\x61\156\x67\x65\56\40\120\154\x65\141\163\145\40\145\x6e\164\x65\162\40\141\x20\x76\x61\x6c\151\144\40\x70\x61\163\x73\167\157\x72\144\x2e");
        mo_oauth_client_update_option("\x76\x65\162\x69\x66\x79\137\x63\x75\163\x74\x6f\x6d\145\x72", "\x74\x72\x75\145");
        mo_oauth_client_delete_option("\156\x65\x77\137\162\145\x67\151\x73\164\162\x61\x74\151\157\156");
        $this->mo_oauth_show_error_message();
        goto swb;
        CSu:
        mo_oauth_client_update_option("\155\157\x5f\x6f\x61\165\x74\150\137\x61\144\155\x69\x6e\x5f\143\165\163\164\x6f\x6d\x65\162\137\153\145\x79", $qU["\x69\144"]);
        mo_oauth_client_update_option("\155\157\x5f\x6f\x61\x75\x74\x68\x5f\x61\x64\155\151\x6e\x5f\141\160\x69\x5f\x6b\x65\171", $qU["\141\160\x69\113\x65\x79"]);
        mo_oauth_client_update_option("\143\165\163\x74\x6f\x6d\x65\x72\x5f\164\157\153\145\x6e", $qU["\164\x6f\x6b\x65\x6e"]);
        mo_oauth_client_update_option("\x70\x61\163\x73\167\157\x72\144", '');
        mo_oauth_client_update_option("\x6d\x65\x73\163\141\x67\x65", "\x43\165\x73\x74\x6f\x6d\x65\162\x20\162\145\164\x72\151\145\x76\145\144\x20\x73\165\x63\x63\145\x73\x73\x66\x75\x6c\154\171");
        mo_oauth_client_delete_option("\166\145\162\x69\146\x79\x5f\x63\x75\163\x74\157\x6d\145\x72");
        mo_oauth_client_delete_option("\156\145\167\x5f\162\x65\147\x69\x73\164\162\141\164\x69\x6f\x6e");
        $this->mo_oauth_show_success_message();
        swb:
    }
    function create_customer()
    {
        $Hc = new Customer();
        $qU = json_decode($Hc->create_customer(), true);
        if (strcasecmp($qU["\x73\164\141\164\165\163"], "\x43\125\x53\x54\117\115\x45\x52\137\125\123\105\122\116\x41\115\x45\137\101\114\122\105\x41\x44\131\x5f\105\130\x49\x53\124\123") == 0) {
            goto bt8;
        }
        if (!(strcasecmp($qU["\163\x74\141\x74\165\163"], "\123\x55\x43\x43\105\x53\x53") == 0)) {
            goto PJB;
        }
        mo_oauth_client_update_option("\x6d\157\137\157\141\x75\164\x68\137\x61\x64\x6d\x69\x6e\x5f\143\165\163\164\x6f\155\x65\162\137\153\x65\171", $qU["\x69\144"]);
        mo_oauth_client_update_option("\155\x6f\137\x6f\141\x75\164\150\137\x61\144\x6d\x69\x6e\x5f\141\160\x69\x5f\153\x65\x79", $qU["\x61\x70\x69\113\145\x79"]);
        mo_oauth_client_update_option("\143\165\163\x74\x6f\155\145\162\x5f\x74\157\x6b\x65\x6e", $qU["\x74\x6f\153\x65\156"]);
        mo_oauth_client_update_option("\x70\x61\163\x73\167\x6f\162\144", '');
        mo_oauth_client_update_option("\155\145\x73\163\x61\147\x65", "\122\145\x67\x69\x73\164\x65\x72\145\x64\40\x73\x75\143\x63\145\x73\x73\x66\x75\154\154\171\x2e");
        mo_oauth_client_update_option("\x6d\x6f\137\x6f\x61\165\x74\x68\137\x72\145\147\151\163\x74\162\x61\x74\151\157\x6e\137\163\164\x61\164\165\x73", "\x4d\x4f\137\117\101\x55\124\110\137\122\105\107\x49\123\x54\122\x41\x54\x49\x4f\x4e\x5f\103\x4f\115\120\114\105\x54\105");
        mo_oauth_client_update_option("\x6d\157\x5f\157\141\x75\x74\150\x5f\x6e\x65\x77\x5f\143\x75\x73\164\157\155\145\x72", 1);
        mo_oauth_client_delete_option("\x76\x65\162\151\x66\x79\x5f\143\165\x73\x74\x6f\x6d\x65\162");
        mo_oauth_client_delete_option("\x6e\x65\x77\137\x72\145\147\151\x73\x74\162\x61\164\151\x6f\156");
        $this->mo_oauth_show_success_message();
        PJB:
        goto JIF;
        bt8:
        $this->mo_oauth_get_current_customer();
        mo_oauth_client_delete_option("\155\x6f\137\x6f\141\165\164\150\137\x6e\x65\167\x5f\143\x75\163\164\157\x6d\145\162");
        JIF:
    }
    function mo_oauth_show_curl_error()
    {
        if (!(mo_oauth_is_curl_installed() == 0)) {
            goto nO3;
        }
        mo_oauth_client_update_option("\155\x65\x73\x73\141\x67\x65", "\74\141\40\x68\x72\x65\x66\75\42\x68\x74\x74\x70\x3a\57\57\160\x68\160\56\156\145\x74\57\155\x61\x6e\x75\x61\x6c\x2f\x65\156\x2f\143\165\x72\154\x2e\x69\x6e\163\x74\141\x6c\x6c\141\164\151\x6f\x6e\x2e\x70\x68\160\42\x20\x74\141\162\147\x65\164\75\42\137\142\154\141\x6e\153\x22\76\x50\x48\120\40\x43\x55\x52\114\40\145\x78\164\x65\x6e\x73\151\157\x6e\x3c\57\x61\76\x20\151\x73\x20\x6e\x6f\x74\40\151\156\163\164\141\x6c\x6c\145\144\40\157\x72\x20\144\151\x73\141\142\154\x65\144\x2e\x20\x50\154\145\141\x73\145\x20\145\156\141\x62\x6c\145\40\151\164\x20\164\x6f\x20\x63\x6f\x6e\x74\151\x6e\x75\145\56");
        $this->mo_oauth_show_error_message();
        return;
        nO3:
    }
    function mo_oauth_shortcode_login($EN)
    {
        $T4 = new Mo_Oauth_Widget();
        if ($EN) {
            goto wqD;
        }
        return $T4->mo_oauth_login_form(false);
        goto g8N;
        wqD:
        return $T4->mo_oauth_login_form($bX = true, $ok = $EN[0]);
        g8N:
    }
    function mo_oauth_client_implicit_fragment_handler()
    {
        ?>
			<script>
				function convert_to_url(obj) {
					return Object
					.keys(obj)
					.map(k => `${encodeURIComponent(k)}=${encodeURIComponent(obj[k])}`)
					.join('&');
				}

				function pass_to_backend() {
					if(window.location.hash) {
						var hash = window.location.hash;
						var elements = {};
						hash.split("#")[1].split("&").forEach(element => {
							var vars = element.split("=");
							elements[vars[0]] = vars[1];
						});
						if(("access_token" in elements) || ("id_token" in elements) || ("token" in elements)) {
							if(window.location.href.indexOf("?") !== -1) {
								window.location = (window.location.href.split("?")[0] + window.location.hash).split('#')[0] + "?" + convert_to_url(elements);
							} else {
								window.location = window.location.href.split('#')[0] + "?" + convert_to_url(elements);
							}
						}
					}
				}

				pass_to_backend();
			</script>

		<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
    }
}
function mo_oauth_my_show_extra_profile_fields($user)
{
    ?>
		<h3>Extra profile information</h3>
		<table class="form-table">
			<tr>
				<th><label for="characterName">Character Name</label></th>
				<td>
					<input type="text" id="characterName" disabled="true" value="<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
    echo get_user_meta($user->ID, "\165\163\x65\162\x5f\145\166\145\157\156\x6c\x69\156\x65\x5f\143\x68\x61\x72\x61\143\x74\145\x72\137\156\141\155\x65", true);
    ?>
" class="regular-text" /><br />
				</td>
				<td rowspan="3"><?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
    echo mo_oauth_avatar_manager_get_custom_avatar($user->ID, "\61\62\x38");
    ?>
</td>
			</tr>
			<tr>
				<th><label for="corporation">Corporation Name</label></th>
				<td>
					<input type="text" id="corporation" disabled="true" value="<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
    echo get_user_meta($user->ID, "\165\x73\x65\162\x5f\145\x76\145\157\x6e\154\151\156\145\137\143\x6f\x72\x70\157\x72\141\x74\x69\x6f\156\137\x6e\141\155\145", true);
    ?>
" class="regular-text" /><br />
				</td>
			</tr>
			<tr>
				<th><label for="alliance">Alliance Name</label></th>
				<td>
					<input type="text" id="alliance" disabled="true" value="<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
    echo get_user_meta($user->ID, "\x75\163\145\162\137\145\166\145\157\156\154\x69\x6e\x65\137\x61\154\154\151\x61\x6e\143\x65\137\x6e\141\x6d\x65", true);
    ?>
" class="regular-text" /><br />
				</td>
			</tr>
		</table>
	<?php
/**
* Plugin Name: OAuth Single Sign On - SSO (OAuth client)
* Plugin URI: http://miniorange.com
* Description: This plugin enables login to your Wordpress site using OAuth apps like Google, Facebook, EVE Online and other.
* Version: 31.5.7
* Author: miniOrange
* Author URI: http://miniorange.com
*/ 
}
function mo_oauth_is_customer_registered()
{
    $jw = mo_oauth_client_get_option("\x6d\157\137\157\141\x75\x74\150\137\x61\x64\155\151\156\x5f\x65\155\x61\151\x6c");
    $qU = mo_oauth_client_get_option("\155\x6f\x5f\157\x61\x75\164\150\x5f\141\144\155\151\x6e\137\143\x75\163\164\x6f\155\x65\162\137\153\145\171");
    if (!$jw || !$qU || !is_numeric(trim($qU))) {
        goto ciR;
    }
    return 1;
    goto uo0;
    ciR:
    return 0;
    uo0:
}
function mo_oauth_is_clv()
{
    $iN = mo_oauth_client_get_option("\x6d\x6f\137\157\x61\x75\x74\150\137\154\153");
    $GG = mo_oauth_client_get_option("\155\x6f\137\x6f\x61\165\164\x68\x5f\x6c\166");
    if (!$GG) {
        goto uXD;
    }
    $GG = mooauthdecrypt($GG);
    uXD:
    if (!(!empty($iN) && $GG == "\x74\x72\165\x65")) {
        goto Bsz;
    }
    return 1;
    Bsz:
    return 0;
}
function mooauthencrypt($oK)
{
    $im = mo_oauth_client_get_option("\143\165\163\x74\x6f\x6d\x65\162\137\x74\x6f\153\145\156");
    $im = str_split(str_pad('', strlen($oK), $im, STR_PAD_RIGHT));
    $lB = str_split($oK);
    foreach ($lB as $ac => $lT) {
        $td = ord($lT) + ord($im[$ac]);
        $lB[$ac] = chr($td > 255 ? $td - 256 : $td);
        cMy:
    }
    SjL:
    return base64_encode(join('', $lB));
}
function mooauthdecrypt($oK)
{
    $oK = base64_decode($oK);
    $im = mo_oauth_client_get_option("\x63\165\x73\x74\157\155\145\x72\137\x74\157\x6b\145\156");
    $im = str_split(str_pad('', strlen($oK), $im, STR_PAD_RIGHT));
    $lB = str_split($oK);
    foreach ($lB as $ac => $lT) {
        $td = ord($lT) - ord($im[$ac]);
        $lB[$ac] = chr($td < 0 ? $td + 256 : $td);
        H64:
    }
    pwr:
    return join('', $lB);
}
function mo_oauth_is_curl_installed()
{
    if (in_array("\x63\165\x72\154", get_loaded_extensions())) {
        goto GLS;
    }
    return 0;
    goto L_L;
    GLS:
    return 1;
    L_L:
}
new mo_oauth();
