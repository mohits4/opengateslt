<?php


namespace MoOauthClient\Enterprise;

use MoOauthClient\Enterprise\UserAnalyticsDBOps;
class UserAnalytics
{
    private $db_ops;
    public function __construct()
    {
        $this->db_ops = new UserAnalyticsDBOps();
    }
    public function render_ui()
    {
        ?>
		<div class="mo_table_layout">
			<div class="mo_wpns_small_layout">
				<form action="" id="manualblockipform" method="post">
					<input type="hidden" name="option" value="mo_wpns_manual_clear" />
					<?php 
        wp_nonce_field("\x6d\157\x5f\167\x70\156\x73\x5f\x6d\141\x6e\165\141\x6c\137\x63\x6c\x65\141\162", "\x6d\157\x5f\x77\x70\156\163\x5f\x6d\141\156\x75\x61\154\x5f\x63\154\x65\x61\162\137\156\x6f\x6e\x63\x65");
        ?>
					<table>
						<tr>
							<td style="width: 100%"><h2>User Transactions Report</h2></td>
							<td>
								<input type="button" class="button button-primary button-large" value="Refresh" onClick="window.location.reload()">
							</td>
							<td>
								<input type="submit" class="button button-primary button-large" value="Clear Reports">
							</td>
						</tr>
					</table>
				</form>
				<table id="reports_table" class="display mo_oauth_client_user_analytics" cellspacing="0" width="100%" border="1px">
					<thead>
						<tr>
							<td><strong>Username</strong></td>
							<td><strong>Status</strong></td>
							<td><strong>Application</strong></td>
							<td><strong>Created Date</strong></td>
							<td><strong>Email</strong></td>
							<td><strong>Client IP</strong></td>
							<td><strong>Navigation URL</strong></td>
						</tr>
					</thead>
					<tbody>
						<?php 
        $this->populate_analytics_table();
        ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php 
    }
    private function populate_analytics_table()
    {
        $kd = $this->db_ops->get_entries(true);
        $s7 = array("\163\160\x61\156" => array("\x73\164\x79\154\145" => array()));
        foreach ($kd as $QB) {
            $nV = $this->get_status_html($QB->status);
            ?>
			<tr>
				<td><?php 
            echo wp_kses($QB->username, \get_valid_html());
            ?>
</td>
				<td><?php 
            echo wp_kses($nV, \get_valid_html($s7));
            ?>
</td>
				<td><?php 
            echo wp_kses($QB->appname, \get_valid_html());
            ?>
</td>
				<td><?php 
            echo wp_kses(date("\115\40\x6a\54\x20\x59\x2c\40\147\72\x69\72\163\40\x61", strtotime($QB->created_timestamp)), \get_valid_html());
            ?>
</td>
				<td><?php 
            echo wp_kses($QB->email, \get_valid_html());
            ?>
</td>
				<td><?php 
            echo wp_kses($QB->clientip, \get_valid_html());
            ?>
</td>
				<td><?php 
            echo wp_kses($QB->navigationurl, \get_valid_html());
            ?>
</td>
			</tr>
			<?php 
            Mv:
        }
        un:
    }
    private function get_status_html($me = '')
    {
        if (!('' === $me)) {
            goto ZO;
        }
        return '';
        ZO:
        if (strpos(\strtolower($me), \strtolower("\x46\101\x49\114\105\x44")) !== false) {
            goto RQ;
        }
        return "\74\163\x70\141\156\x20\163\164\x79\x6c\x65\x3d\x22\143\x6f\x6c\x6f\x72\72\147\x72\x65\145\156\x22\76" . $me . "\x3c\x2f\163\160\x61\156\x3e";
        goto tt;
        RQ:
        return "\74\163\x70\141\x6e\x20\163\164\171\154\x65\75\42\x63\x6f\x6c\157\x72\x3a\x72\x65\x64\42\x3e" . $me . "\x3c\x2f\163\x70\x61\x6e\x3e";
        tt:
    }
}
