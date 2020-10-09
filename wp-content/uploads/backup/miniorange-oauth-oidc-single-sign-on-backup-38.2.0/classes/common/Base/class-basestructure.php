<?php


namespace MoOauthClient\Base;

use MoOauthClient\Backup;
use MoOauthClient\Support;
require_once "\x63\x6c\x61\x73\163\x2d\154\x6f\141\x64\x65\x72\x2e\160\x68\160";
class BaseStructure
{
    private $loader;
    public function __construct()
    {
        add_action("\x61\144\155\151\156\x5f\x6d\x65\x6e\x75", array($this, "\141\144\x6d\x69\156\x5f\155\145\x6e\x75"));
        $this->loader = new Loader();
    }
    public function admin_menu()
    {
        $cJ = add_menu_page("\x4d\117\x20\x4f\101\x75\x74\x68\x20\123\x65\164\164\x69\156\147\163\40" . __("\103\x6f\x6e\146\x69\147\x75\162\145\40\117\101\165\x74\150", "\155\157\137\x6f\141\x75\164\150\137\163\x65\x74\x74\151\156\x67\x73"), "\155\151\156\151\x4f\x72\x61\156\147\x65\x20\117\101\x75\164\150", "\141\144\155\x69\156\x69\x73\164\x72\141\x74\157\x72", "\x6d\157\137\x6f\141\165\x74\150\x5f\x73\x65\164\x74\x69\x6e\147\163", array($this, "\155\x65\156\x75\x5f\x6f\160\x74\151\x6f\156\163"), MOC_URL . "\x72\145\x73\x6f\x75\x72\143\x65\x73\x2f\x69\x6d\141\147\x65\x73\57\155\151\156\x69\157\162\x61\156\147\145\56\160\x6e\147");
        global $u1;
        if (!(is_array($u1) && isset($u1["\155\x6f\x5f\x6f\x61\165\x74\x68\137\163\x65\164\x74\151\x6e\x67\163"]))) {
            goto t8;
        }
        $u1["\155\157\x5f\x6f\141\165\164\150\x5f\163\145\164\164\x69\156\147\163"][0][0] = __("\x43\x6f\x6e\x66\151\x67\x75\x72\145\x20\x4f\x41\165\x74\150", "\155\x6f\137\x6f\141\165\164\x68\137\154\157\147\151\156");
        t8:
    }
    public function menu_options()
    {
        $U6 = isset($_GET["\164\x61\142"]) ? $_GET["\x74\141\142"] : '';
        ?>
		<div id="mo_oauth_settings">
			<div id='moblock' class='moc-overlay dashboard'></div>
			<div class="miniorange_container">
				<?php 
        $this->content_navbar($U6);
        ?>
				<table style="width:100%;">
					<tr>
						<td style="vertical-align:top;width:65%;" class="mo_oauth_content">
							<?php 
        $this->loader->load_current_tab($U6);
        ?>
						</td>
						<?php 
        if (!("\154\x69\x63\x65\x6e\163\151\x6e\147" !== $U6)) {
            goto dB;
        }
        ?>
							<td style="vertical-align:top;padding-left:1%;" class="mo_oauth_sidebar">
							<?php 
        $Ui = new Support();
        $Ui->support();
        ?>
                            <br>
                            <br>
                            <?php 
        $Yc = new Backup();
        $Yc->backup();
        ?>
							</td>
						<?php 
        dB:
        ?>
					</tr>
				</table>
			</div>

		</div>
		<?php 
    }
    public function content_navbar($U6)
    {
        global $Sk;
        ?>
		<div class="wrap">
			<div class="header-warp">
				<h1>miniOrange OAuth/OpenID Client
				&emsp;<a id="licensing_button_id" class="link_button top_license" href="admin.php?page=mo_oauth_settings&tab=licensing">Premium Plans</a>
				&nbsp;<a id="faq_button_id" class="link_button" href="https://faq.miniorange.com/kb/oauth-openid-connect/" target="_blank">FAQs</a>
				&nbsp;<a id="faq_button_id" class="link_button" href="https://forum.miniorange.com/" target="_blank">Ask questions on our forum</a>
				</h1>
				<?php 
        if (!("\x6c\151\143\x65\156\163\x69\156\x67" === $U6)) {
            goto WW;
        }
        ?>
				<div id="moc-lp-imp-btns" style="float:right;">
					<a class="btn btn-outline-danger" target="_blank" href="https://plugins.miniorange.com/wordpress-oauth-client">Full Feature List</a>&emsp;<a class="btn btn-outline-primary" onclick="getlicensekeys()" href="#">Get License Keys</a>
				</div>
				<?php 
        WW:
        ?>
				<div><img style="float:left;" src="<?php 
        echo MOC_URL . "\57\x72\145\x73\x6f\x75\x72\143\x65\163\x2f\x69\x6d\141\x67\x65\163\x2f\154\x6f\147\157\x2e\160\156\x67";
        ?>
"></div>
				<?php 
        if (!($Sk->get_versi() === 0)) {
            goto WJ;
        }
        ?>
					<div class="buts" style="float:right;">
						<div id="restart_tour_button" class="mo-otp-help-button static" style="margin-right:10px;z-index:10">
								<a class="button button-primary button-large">
									<span class="dashicons dashicons-controls-repeat" style="margin:5% 0 0 0;"></span>
										Restart Tour
								</a>
						</div>
					</div>
				<?php 
        WJ:
        ?>
		</div>
		<div id="tab">
		<h2 class="nav-tab-wrapper">
			<a id="tab-config" class="nav-tab <?php 
        echo "\143\157\x6e\x66\x69\x67" === $U6 ? "\156\x61\x76\55\164\x61\x62\55\141\x63\x74\151\x76\145" : '';
        ?>
" href="admin.php?page=mo_oauth_settings&tab=config">Configure OAuth</a>
			<a id="tab-customization" class="nav-tab <?php 
        echo "\x63\x75\163\164\x6f\x6d\x69\172\x61\164\x69\157\156" === $U6 ? "\x6e\x61\x76\x2d\x74\x61\142\55\141\x63\164\x69\x76\x65" : '';
        ?>
" href="admin.php?page=mo_oauth_settings&tab=customization">Customizations</a>
			<?php 
        if (!($Sk->mo_oauth_client_get_option("\x6d\157\x5f\x6f\141\x75\x74\x68\137\x65\x76\145\x6f\x6e\154\x69\x6e\145\x5f\145\x6e\x61\142\154\145") === 1)) {
            goto i6;
        }
        ?>
				<a id="tab-eve" class="nav-tab <?php 
        echo "\155\157\137\157\141\x75\x74\150\137\145\x76\145\x5f\x6f\x6e\154\x69\x6e\x65\x5f\x73\145\164\x75\160" === $U6 ? "\156\x61\166\x2d\x74\x61\x62\55\x61\x63\164\x69\166\145" : '';
        ?>
" href="admin.php?page=mo_oauth_eve_online_setup">Advanced EVE Online Settings</a>
			<?php 
        i6:
        ?>
			<a id="tab-signinsettings" class="nav-tab <?php 
        echo "\163\151\x67\156\x69\x6e\x73\145\x74\x74\151\156\x67\x73" === $U6 ? "\x6e\141\x76\x2d\x74\x61\x62\x2d\141\x63\164\151\x76\145" : '';
        ?>
" href="admin.php?page=mo_oauth_settings&tab=signinsettings">Sign In Settings</a>
			<?php 
        do_action("\x6d\157\137\x6f\x61\x75\164\x68\x5f\x63\x6c\x69\x65\156\x74\x5f\x61\x64\144\137\156\x61\x76\137\x74\x61\x62\x73\137\165\x69\x5f\x69\x6e\x74\x65\x72\x6e\x61\154", $U6);
        ?>
			<?php 
        if (!($Sk->get_versi() === 0)) {
            goto a2;
        }
        ?>
				<a id="tab-requestdemo" class="nav-tab <?php 
        echo "\162\145\x71\165\145\x73\164\x66\x6f\162\144\x65\155\157" === $U6 ? "\156\x61\x76\55\164\x61\142\55\141\143\x74\151\x76\x65" : '';
        ?>
" href="admin.php?page=mo_oauth_settings&tab=requestfordemo">Request For Demo</a>
			<?php 
        a2:
        ?>
			<a id="acc_setup_button_id" class="nav-tab <?php 
        echo "\x61\143\x63\x6f\x75\156\164" === $U6 ? "\x6e\x61\x76\x2d\164\x61\142\55\x61\x63\x74\x69\x76\145" : '';
        ?>
" href="admin.php?page=mo_oauth_settings&tab=account">Account Setup</a>
		</h2>
		</div>
		<?php 
    }
}
