<?php


include "\144\x65\146\141\x75\154\x74\x61\x70\x70\x73\x2e\x70\150\x70";
function add_app()
{
    ?>

		<script>
			function selectapp() {
				var oidc_providers = ["amazon", "salesforce", "paypal", "yahoo", "onelogin", "okta", "adfs", "gigya"];
				
				var appname = document.getElementById("mo_oauth_app").value;
				document.getElementById("instructions").innerHTML  = "";
				if(appname=="google"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\147\157\157\147\154\x65", false);
    ?>
';
				} else if(appname=="facebook"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\146\141\143\145\x62\x6f\x6f\153", false);
    ?>
';
				} else if(appname=="eveonline_new"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\x65\166\145\157\x6e\154\x69\x6e\x65\137\156\145\167", false);
    ?>
';
				} else if(appname=="azure"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\x61\172\x75\x72\145", false);
    ?>
';
				} else if(appname=="discord"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\144\x69\163\143\x6f\x72\x64", false);
    ?>
';
				} else if(appname=="salesforce"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\163\x61\x6c\145\x73\x66\x6f\x72\143\x65", false);
    ?>
';
				} else if(appname=="amazon"){
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions("\141\x6d\x61\172\x6f\156", false);
    ?>
';
				} else {
					document.getElementById("instructions").innerHTML  = '<?php 
    mo_oauth_client_instructions('', false);
    ?>
';
				}

				 if(appname=="eveonline") { 
					jQuery("#mo_oauth_display_app_name_div").hide();
					jQuery("#mo_oauth_custom_app_name_div").hide();
					jQuery("#mo_oauth_authorizeurl_div").hide();
					jQuery("#mo_oauth_accesstokenurl_div").hide();
					jQuery("#mo_oauth_resourceownerdetailsurl_div").hide();
					jQuery("#mo_oauth_email_attr_div").hide();
					jQuery("#mo_oauth_name_attr_div").hide();
					jQuery("#mo_oauth_jwks_uri_div").hide();
					jQuery("#mo_oauth_custom_app_name").removeAttr('required');
					jQuery("#mo_oauth_authorizeurl").removeAttr('required');
					jQuery("#mo_oauth_accesstokenurl").removeAttr('required');
					jQuery("#callbackurl").val("https://login.xecurify.com/moas/oauth/client/callback");
				}else if(appname){
					jQuery("#mo_oauth_display_app_name_div").show();
					jQuery("#mo_oauth_custom_app_name_div").show();
					jQuery("#mo_oauth_authorizeurl_div").show();
					jQuery("#mo_oauth_accesstokenurl_div").show();
					if(appname == "openidconnect" || oidc_providers.includes(appname)){
						jQuery("#mo_oauth_jwks_uri_div").show();
						jQuery("#mo_oauth_resourceownerdetailsurl_div").hide();
					}
					else {
						jQuery("#mo_oauth_jwks_uri_div").hide();
						jQuery("#mo_oauth_resourceownerdetailsurl_div").show();
					}
					jQuery("#mo_oauth_authorizeurl").attr('required','true');
					jQuery("#mo_oauth_accesstokenurl").attr('required','true');
					
					
					jQuery("#mo_oauth_email_attr_div").show();
					jQuery("#mo_oauth_name_attr_div").show();
					jQuery("#mo_oauth_custom_app_name").attr('required','true');
					jQuery("#mo_oauth_email_attr").attr('required','true');
					jQuery("#mo_oauth_name_attr").attr('required','true');
					jQuery("#callbackurl").val("<?php 
    echo site_url();
    ?>
");
					document.getElementById('mo_oauth_custom_app_name').value = "";

					var oauth_providers = ["google","facebook","windows","eveonlinenew","azure","discord","strava","bitrix24","github","clever","box","dash10","fitbit","cognito","hr_answerlink","invision_community"];

						if( oauth_providers.includes(appname)) {
						if(appname=="azure"){
							var scope ="openid";
							var authorizeurl = 'https://login.microsoftonline.com/<TENANT-ID>/oauth2/authorize';
							var accesstokenurl = 'https://login.microsoftonline.com/<TENANT-ID>/oauth2/token';
							var resourceownerdetailsurl = 'https://login.windows.net/common/openid/userinfo';
						} else if(appname=="facebook"){
							var scope = "email";
							var authorizeurl = 'https://www.facebook.com/dialog/oauth';
							var accesstokenurl = 'https://graph.facebook.com/v2.8/oauth/access_token';
							var resourceownerdetailsurl = 'https://graph.facebook.com/me/?fields=id,name,email,age_range,first_name,gender,last_name,link&access_token=';
						} else if(appname=="google"){
							var scope = "email";
							var authorizeurl = "https://accounts.google.com/o/oauth2/auth";
							var accesstokenurl = "https://www.googleapis.com/oauth2/v3/token";
							var resourceownerdetailsurl = "https://www.googleapis.com/plus/v1/people/me";
						}  else if(appname=="windows"){
							var scope = "User.Read";
							var authorizeurl = "https://login.live.com/oauth20_authorize.srf";
							var accesstokenurl = "https://login.live.com/oauth20_token.srf";
							var resourceownerdetailsurl = "https://apis.live.net/v5.0/me";
						}  else if(appname=="strava"){
							var scope = "public";
							var authorizeurl = "https://www.strava.com/oauth/authorize";
							var accesstokenurl = "https://www.strava.com/oauth/token";
							var resourceownerdetailsurl = "https://www.strava.com/api/v3/athlete";
						}   else if(appname=="discord"){
							var scope = "identify email";
							var authorizeurl = "https://discordapp.com/api/oauth2/authorize";
							var accesstokenurl = "https://discordapp.com/api/oauth2/token";
							var resourceownerdetailsurl = "https://discordapp.com/api/users/@me";
						}  else if(appname=="bitrix24"){
							var scope = "user";
							var authorizeurl = "http://[your-id].bitrix24.com/oauth/authorize";
							var accesstokenurl = "http://[your-id].bitrix24.com/oauth/token";
							var resourceownerdetailsurl = "https://[your-id].bitrix24.com/rest/user.current.json?auth=";
						}  else if(appname=="github"){
							var scope = "user";
							var authorizeurl = "https://github.com/login/oauth/authorize";
							var accesstokenurl = "https://github.com/login/oauth/access_token";
							var resourceownerdetailsurl = "https://api.github.com/user?access_token=";
						}  else if(appname=="clever"){
							var scope = "read";
							var authorizeurl = "https://clever.com/oauth/authorize";
							var accesstokenurl = "https://clever.com/oauth/tokens";
							var resourceownerdetailsurl = "https://api.clever.com/v1.1/me";
						}  else if(appname=="box"){
							var scope = "root_readwrite";
							var authorizeurl = "https://account.box.com/api/oauth2/authorize";
							var accesstokenurl = "https://api.box.com/oauth2/token";
							var resourceownerdetailsurl = "https://api.box.com/2.0/users/me";
						}  else if(appname=="dash10"){
							var scope = "email";
							var authorizeurl = "<server-domain-name>?oauth=authorize";
							var accesstokenurl = "<server-domain-name>?oauth=token";
							var resourceownerdetailsurl = "<server-domain-name>?oauth=me&access_token=";
						}  else if(appname=="fitbit"){
							var scope = "profile";
							var authorizeurl = "https://www.fitbit.com/oauth2/authorize?";
							var accesstokenurl = "https://api.fitbit.com/oauth2/token";
							var resourceownerdetailsurl = "https://www.fitbit.com/1/user";
						}  else if(appname=="cognito"){
							var scope = "openid";
							var authorizeurl = "https://<cognito-app-domain>/oauth2/authorize";
							var accesstokenurl = "https://<cognito-app-domain>/oauth2/token";
							var resourceownerdetailsurl = "https://<cognito-app-domain>/oauth2/userInfo";
						}  else if(appname=="hr_answerlink"){
							var scope = "/app";
							var authorizeurl = "https://<your-domain>.myhrsupportcenter.com/oauth/token";
							var accesstokenurl = "https://<your-domain>.myhrsupportcenter.com/sso/v2/tokens?user_id=";
							var resourceownerdetailsurl = "https://<your-domain>.myhrsupportcenter.com/sso/v2/sessions";
						}  else if(appname=="invision_community"){
							var scope = "email";
							var authorizeurl = "https://ips.dev/oauth/authorize";
							var accesstokenurl = "https://ips.dev/oauth/token";
							var resourceownerdetailsurl = "https://ips.dev/oauth/core/me";
						}  
						
					}
					if(oidc_providers.includes(appname)) {

						if(appname=="amazon"){
							var authorizeurl = "https://www.amazon.com/ap/oa";
							var accesstokenurl = "https://api.amazon.com/auth/o2/token";
						} else if(appname=="salesforce"){
							var authorizeurl = "https://login.salesforce.com/services/oauth2/authorize";
							var accesstokenurl = "https://login.salesforce.com/services/oauth2/token";
						} else if(appname=="paypal"){
							var authorizeurl = "https://www.paypal.com/signin/authorize";
							var accesstokenurl = "https://api.paypal.com/v1/oauth2/token";
						} else if(appname=="yahoo"){
							var authorizeurl = "https://api.login.yahoo.com/oauth2/request_auth";
							var accesstokenurl = "https://api.login.yahoo.com/oauth2/get_token";

						} else if(appname=="onelogin"){
							var authorizeurl = "https://<site-url>.onelogin.com/oidc/auth";
							var accesstokenurl = "https://<site-url>.onelogin.com/oidc/token";
						} else if(appname=="okta"){
							var authorizeurl = "https://{yourOktaDomain}.com/oauth2/default/v1/authorize";
							var accesstokenurl = "https://{yourOktaDomain}.com/oauth2/default/v1/token";
						} else if(appname=="adfs"){
							var authorizeurl = "https://fs.fabidentity.com/adfs/oauth2/authorize/";
							var accesstokenurl = "https://fs.fabidentity.com/adfs/oauth2/token/";
						} else if(appname=="gigya"){
							var authorizeurl = "https://fidm.[Data_Center_ID].gigya.com/oidc/op/v1.0/[The-OP-API-Key]/authorize";
							var accesstokenurl = "https://fidm.[Data_Center_ID].gigya.com/oidc/op/v1.0/[The-OP-API-Key]/token";
						}  
						var resourceownerdetailsurl = "";
						var scope = "openid";
						if(appname=="amazon")
							var scope = "profile";
					}
					else if( ( appname == "oauth" ) || ( appname == "openidconnect" ) )
					{
						var scope = "email";
						var authorizeurl = "";
						var accesstokenurl = "";
						var resourceownerdetailsurl = "";
					} else if(appname=="eveonlinenew"){
							var scope ="characterContactsRead";
							var authorizeurl = 'https://login.eveonline.com/oauth/authorize';
							var accesstokenurl = 'https://login.eveonline.com/oauth/token';
							var resourceownerdetailsurl = 'https://esi.tech.ccp.is/verify/';
							//jQuery("#mo_oauth_display_app_name_div").hide();
							jQuery("#mo_oauth_custom_app_name_div").hide();
							jQuery("#mo_oauth_authorizeurl_div").hide();
							jQuery("#mo_oauth_accesstokenurl_div").hide();
							jQuery("#mo_oauth_resourceownerdetailsurl_div").hide();
							document.getElementById('mo_oauth_custom_app_name').value = "EveOnlineApp";	
						}
					document.getElementById('mo_oauth_scope').value=scope;
					document.getElementById('mo_oauth_authorizeurl').value=authorizeurl;
					document.getElementById('mo_oauth_accesstokenurl').value=accesstokenurl;
					document.getElementById('mo_oauth_resourceownerdetailsurl').value=resourceownerdetailsurl;
					jQuery("#mo_oauth_authorizeurl").attr('required','true');
					jQuery("#mo_oauth_accesstokenurl").attr('required','true');					
					
				}

			}
		</script>
		<div id="toggle2" class="panel_toggle">
			<h3>Add Application</h3>
		</div>
		<form id="form-common" name="form-common" method="post" action="admin.php?page=mo_oauth_settings">
		<input type="hidden" name="option" value="mo_oauth_add_app" />
		<table class="mo_settings_table">
			<tr>
			<td><strong><font color="#FF0000">*</font>Select Application:</strong></td>
			<td>
				<select class="mo_table_textbox" required="true" name="mo_oauth_app_name" id="mo_oauth_app" onchange="selectapp()">
				  <option value="">Select Application</option>
				  <option value="oauth">Custom OAuth Server</option>
				  <option value="openidconnect">Custom OpenId Connect</option>
				  <option value="azure">Azure</option>
				  <option value="discord">Discord</option>
				  <option value="google">Google</option>
				  <option value="facebook">Facebook</option>
				  <option value="windows">Windows Account</option>
				  <!--option value="eveonline">Eve Online</option-->
				  <option value="eveonlinenew">Eve Online</option>
				  <option value="strava">Strava</option>
				  <option value="bitrix24">Bitrix 24</option>
				  <option value="github">Git Hub</option>
				  <option value="clever">Clever</option>
				  <option value="box">Box</option>
				  <option value="dash10">Dash 10</option>
				  <option value="fitbit">FitBit</option>
				  <option value="hr_answerlink">HR Answerlink</option>
				  <option value="invision_community">Invision Community</option>
				  <!-- OpenID Servers below-->
				  <option value="amazon">Amazon</option>
				  <option value="salesforce">SalesForce</option>
				  <option value="paypal">PayPal</option>
				  <option value="yahoo">Yahoo</option>
				  <option value="cognito">Cognito</option>
				  <option value="onelogin">OneLogin</option>
				  <option value="okta">Okta</option>
				  <option value="adfs">ADFS</option>
				  <option value="gigya">Gigya</option>
				</select>
			</td>
			</tr>
			<tr><td><strong>Redirect / Callback URL</strong></td>
			<td><input class="mo_table_textbox" id="callbackurl"  type="text" readonly="true" value='<?php 
    echo site_url();
    ?>
'></td>
			</tr>
			<tr>
			<tr  style="display:none" id="mo_oauth_custom_app_name_div">
				<td><strong><font color="#FF0000">*</font>Custom App Name:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_custom_app_name" name="mo_oauth_custom_app_name" value=""></td>
			</tr>
			<tr style="display:none" id="mo_oauth_display_app_name_div">
				<td><strong>Display App Name:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_display_app_name" name="mo_oauth_display_app_name" value=""></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client ID:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text" name="mo_oauth_client_id" value=""></td>
			</tr>
			<tr>
				<td><strong><font color="#FF0000">*</font>Client Secret:</strong></td>
				<td><input class="mo_table_textbox" required="" type="text"  name="mo_oauth_client_secret" value=""></td>
			</tr>
			<tr>
				<td><strong>Scope:</strong></td>
				<td><input class="mo_table_textbox" type="text" name="mo_oauth_scope" id="mo_oauth_scope" value="email"></td>
			</tr>
			<tr style="display:none" id="mo_oauth_authorizeurl_div">
				<td><strong><font color="#FF0000">*</font>Authorize Endpoint:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_authorizeurl" name="mo_oauth_authorizeurl" value=""></td>
			</tr>
			<tr style="display:none" id="mo_oauth_accesstokenurl_div">
				<td><strong><font color="#FF0000">*</font>Access Token Endpoint:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_accesstokenurl" name="mo_oauth_accesstokenurl" value=""></td>
			</tr>
			<tr style="display:none" id="mo_oauth_resourceownerdetailsurl_div">
				<td><strong><font color="#FF0000">*</font>Get User Info Endpoint:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_resourceownerdetailsurl" name="mo_oauth_resourceownerdetailsurl" value=""></td>
			</tr>
			<tr style="display: none"><td></td><td><input class="mo_table_textbox" type="checkbox" name="disable_authorization_header" id="disable_authorization_header" value="" > (Check if does not require Authorization Header)</td></tr>
			<tr style="display:none" id="mo_oauth_groupdetailsurl_div">
				<td><strong>Group Info Endpoint <small>(Optional)</small></strong></td>
				<td><input class="mo_table_textbox"  type="text" name="mo_oauth_groupdetailsurl" value="" ></td>
			</tr>
			<tr style="display: none" id="mo_oauth_jwks_uri_div">
				<td><strong>JWKS URI </strong><br><small>(for Signature Validation)</small></td>
				<td><input class="mo_table_textbox"  type="text" name="mo_oauth_jwks_uri" value="" ></td>
			</tr>
			<!--<tr style="display:none" id="mo_oauth_email_attr_div">
				<td><strong><font color="#FF0000">*</font>Email Attribute:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_email_attr" name="mo_oauth_email_attr" value=""></td>
			</tr>
			<tr style="display:none" id="mo_oauth_name_attr_div">
				<td><strong><font color="#FF0000">*</font>Name Attribute:</strong></td>
				<td><input class="mo_table_textbox" type="text" id="mo_oauth_name_attr" name="mo_oauth_name_attr" value=""></td>
			</tr>-->
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="submit" value="Save settings"
					class="button button-primary button-large" /></td>
			</tr>
			</table>
		</form>

		<div id="instructions">

		</div>

		<?php 
}
?>
