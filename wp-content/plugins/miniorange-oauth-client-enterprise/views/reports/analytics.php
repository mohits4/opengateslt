<?php


function mycode_table_column_exists($uI, $El)
{
    global $wpdb;
    $PC = $wpdb->get_results($wpdb->prepare("\123\x45\114\105\103\124\40\52\x20\106\122\x4f\x4d\x20\x49\116\x46\117\122\x4d\x41\124\111\x4f\116\x5f\x53\x43\x48\x45\115\101\56\x43\x4f\x4c\x55\115\x4e\123\x20\x57\x48\x45\x52\105\x20\124\x41\102\114\x45\137\x53\x43\x48\x45\x4d\101\40\75\x20\45\x73\40\101\x4e\104\40\124\101\x42\114\x45\x5f\116\101\x4d\x45\x20\x3d\x20\45\x73\x20\x41\116\x44\x20\x43\117\114\125\x4d\x4e\x5f\x4e\101\x4d\105\x20\75\x20\45\x73\x20", DB_NAME, $uI, $El));
    if (empty($PC)) {
        goto B5;
    }
    return true;
    B5:
    return false;
}
function mo_oauth_user_analytics()
{
    global $wpdb;
    $QO = $wpdb->prefix . Mo_Oauth_Constants::USER_TRANSCATIONS_TABLE;
    $xt = "\103\x52\x45\x41\124\x45\40\124\101\102\x4c\x45\x20\111\106\x20\116\117\124\x20\x45\130\111\123\x54\123\40" . $QO . "\x20\50\12\x9\x9\11\140\x69\144\140\40\x62\151\x67\151\156\164\x20\x4e\x4f\124\x20\x4e\x55\114\x4c\40\101\x55\x54\x4f\137\x49\116\103\x52\x45\x4d\x45\x4e\x54\x2c\40\40\140\165\x73\x65\162\156\x61\x6d\x65\140\40\155\145\x64\151\x75\155\164\145\170\x74\40\116\117\x54\40\x4e\x55\x4c\x4c\40\x2c\140\x73\164\x61\164\x75\163\140\x20\x6d\x65\144\151\165\x6d\164\145\170\x74\x20\116\117\x54\40\x4e\x55\x4c\114\40\54\x60\141\160\160\x6e\x61\x6d\x65\140\x20\x6d\145\x64\151\x75\155\164\145\170\x74\x20\116\117\124\x20\116\125\x4c\114\54\40\x60\145\x6d\x61\x69\x6c\x60\x20\x6d\x65\x64\151\165\155\x74\x65\170\164\x20\x4e\x4f\x54\40\116\125\x4c\x4c\54\x20\140\x63\x6c\x69\x65\156\x74\x69\x70\x60\x20\x6d\145\144\151\x75\x6d\164\x65\x78\164\x20\x4e\x4f\124\40\116\125\114\114\x2c\x20\140\156\x61\166\x69\147\141\x74\x69\157\x6e\165\x72\x6c\140\x20\155\x65\x64\x69\165\x6d\x74\x65\x78\x74\x20\116\x4f\124\40\116\125\x4c\x4c\x2c\40\140\143\x72\145\141\x74\145\x64\137\x74\151\x6d\x65\x73\x74\x61\155\160\140\40\x54\x49\x4d\105\x53\124\x41\x4d\120\x20\x44\105\106\x41\x55\x4c\124\40\x43\x55\x52\122\105\116\x54\x5f\x54\111\x4d\x45\123\x54\101\x4d\120\54\x20\125\x4e\111\121\125\x45\40\x4b\x45\x59\x20\151\144\x20\50\x69\x64\x29\x29\73";
    require_once ABSPATH . "\167\x70\55\141\x64\x6d\151\156\x2f\x69\x6e\x63\154\165\x64\x65\163\57\165\160\x67\x72\141\144\x65\x2e\x70\x68\x70";
    dbDelta($xt);
    if (mycode_table_column_exists($QO, "\145\155\141\151\154") && mycode_table_column_exists($QO, "\x63\x6c\x69\145\x6e\x74\151\x70") && mycode_table_column_exists($QO, "\156\141\x76\x69\x67\141\x74\x69\x6f\156\165\x72\x6c")) {
        goto Ev;
    }
    $wpdb->query("\101\114\x54\105\122\40\124\x41\102\114\x45\40" . $QO . "\40\x41\104\104\40\x65\155\x61\x69\154\40\155\145\x64\x69\165\155\x74\x65\x78\164\40\116\x4f\x54\40\x4e\x55\114\114");
    $wpdb->query("\101\x4c\x54\105\x52\x20\x54\x41\x42\114\105\40" . $QO . "\x20\101\x44\x44\x20\x63\154\151\x65\x6e\x74\151\160\x20\x6d\x65\144\x69\165\155\164\x65\170\x74\40\x4e\x4f\x54\x20\x4e\x55\x4c\x4c");
    $wpdb->query("\x41\114\124\105\122\40\x54\101\x42\x4c\105\40" . $QO . "\x20\101\x44\x44\x20\x6e\141\x76\x69\x67\x61\x74\x69\x6f\x6e\x75\162\x6c\x20\x6d\x65\144\x69\165\x6d\x74\x65\x78\x74\40\x4e\117\124\40\116\125\x4c\x4c");
    Ev:
    $L0 = new Mo_OAuth_User_Reports();
    $m7 = $L0->get_all_transactions();
    ?>


 <div class="mo_table_layout">
<div class="mo_wpns_small_layout">
	<form name="f" method="post" action="" id="manualblockipform" >
		<input type="hidden" name="option" value="mo_wpns_manual_clear" />
		<table  ><!--  -->
            <tr>
                <td style="width: 100%">
                    <h2>
                        User Transactions Report
                    </h2>
                </td>

                 <td>
                	<input type="button" class="button button-primary button-large" value="Refresh" onClick="window.location.reload()">
                </td>

		        <td>
                    <input type="submit" class="button button-primary button-large" value="Clear Reports">
                </td>

            </tr>
        </table>
	</form>


	<table id="reports_table" class="display mo_oauth_client_user_analytics" cellspacing="0" width="100%" border="1px" bgcolor="#CCCCCC" bordercolor= "#CCCCCC" >
        <thead>
            <tr>
				<td><b>Username</td>
				
				<td><b>Status</td>
				
				<td><b>Application</td>
				
				<td><b>Created Date</td>

				<td><b>Email</td>

				<td><b>Client IP</td>

				<td><b>Navigation URL</td> 
            </tr>
        </thead>
        <tbody>
	
            <?php 
    foreach ($m7 as $gt) {
        echo "\74\164\x72\76\74\x74\x64\76\74\x62\76" . $gt->username . "\74\x2f\x74\x64\76\x3c\x74\144\x3e";
        if ($gt->status == Mo_Oauth_Constants::SUCCESS) {
            goto Wb;
        }
        if (strpos(Mo_Oauth_Constants::FAILED, $gt->status) !== false || strpos(Mo_Oauth_Constants::FAILED, $gt->status) >= 0) {
            goto X0;
        }
        echo "\x4e\x2f\x41";
        goto vN;
        X0:
        echo "\x3c\x73\160\x61\156\40\x73\164\171\154\145\75\143\157\x6c\157\x72\x3a\x72\x65\144\76" . $gt->status . "\74\57\x73\160\141\x6e\x3e";
        vN:
        goto yf;
        Wb:
        echo "\74\x73\160\141\x6e\40\163\x74\x79\x6c\x65\75\x63\x6f\x6c\157\x72\72\x67\162\x65\145\156\76" . Mo_Oauth_Constants::SUCCESS . "\x3c\57\x73\x70\x61\x6e\76";
        yf:
        echo "\x3c\164\x64\x3e" . $gt->appname . "\74\x2f\164\144\x3e";
        echo "\x3c\164\x64\x3e" . date("\x4d\40\x6a\54\x20\131\54\40\147\72\151\x3a\163\x20\141", strtotime($gt->created_timestamp)) . "\74\57\164\x64\x3e";
        echo "\x3c\x74\144\x3e" . $gt->email . "\x3c\x2f\x74\144\x3e";
        echo "\x3c\x74\x64\x3e" . $gt->clientip . "\74\x2f\164\144\x3e";
        echo "\74\x74\x64\x3e" . $gt->navigationurl . "\74\x2f\164\x64\x3e\74\x2f\164\162\x3e";
        rj:
    }
    Cr:
    ?>
        </tbody>
    </table>
</div>
</div>
<script>
	jQuery(document).ready(function() {
		jQuery('#reports_table').DataTable({
			"order": [[ 4, "desc" ]]
		});
	} );
	</script>
<?php 
}
?>
