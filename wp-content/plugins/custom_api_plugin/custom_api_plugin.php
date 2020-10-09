<?php
  /*
  Plugin name: Custom Api Plugin
  Plugin URI: https://opengateanalytics.com/
  Description: Opengate Analytics 
  Author: Sumit kumar
  Author URI: http://AUTHOR_URI.com
  Version: 1.0
  */
  add_shortcode('custom-plugin-powerbi', 'tbare_wordpress_plugin_demo');
// global $newReportID;
//   function tbare_wordpress_plugin_demo($atts) {
// 	//print_r($atts); exit;
// 	$Content = "<style>\r\n";
// 	$Content .= ".demoClass {\r\n";
// 	$Content .= "color: #26b158;font-size: 16px\r\n";
// 	$Content .= "}\r\n";
// 	$Content .= "</style>\r\n";
// 	$Content .= ' &nbsp;&nbsp;<button class="demoClass">Export PPTX</button>';

// 				//echo $newReportID = $atts['postid'];

// 					//print_r($atts);
		
//     return $Content;
// }


add_action( 'admin_menu', 'register_my_custom_menu_page' );

function register_my_custom_menu_page(){
    add_menu_page( 'custom_api_plugin', 'Export Report', 'manage_options', 'my-plugin-settings', 'my_plugin_custom_function', 66 );
    //call register settings function
	add_action( 'admin_init', 'register_my_cool_plugin_settings' );
}
function register_my_cool_plugin_settings() {
	//register our settings
	//register_setting( 'my-cool-plugin-settings-group', 'grant_type' );
	register_setting( 'my-cool-plugin-settings-group', 'username' );
	register_setting( 'my-cool-plugin-settings-group', 'password' );
	register_setting( 'my-cool-plugin-settings-group', 'client_id' );
	register_setting( 'my-cool-plugin-settings-group', 'client_secret' );
	//register_setting( 'my-cool-plugin-settings-group', 'resource' );
	//register_setting( 'my-cool-plugin-settings-group', 'file_format' );
}

function my_plugin_custom_function() {
	?>
<style type="text/css">
	/* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea, input[type=password] {
  width: 100%; /* Full width */
  padding: 8px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input#submit {
    font-size: 16px;
    font-weight: 600;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
  width: 50%;
}
label {
	font-weight: 500;
	font-size: 16px;
	width: 100%;
}
p.submit {
	margin-top: 10px;
}


</style>
<div class="wrap">
<h1>Export Report Configuration</h1>
<div class="container">
	<form method="post" action="options.php">
	    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
	    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
	    <!-- <table class="form-table"> -->

	    <label for="username">Username</label>
	    <input type="text" name="username" value="<?php echo esc_attr( get_option('username') ); ?>" />

	    <label for="password">Password</label>
	    <input type="password" name="password" value="<?php echo esc_attr( get_option('password') ); ?>" />

	    <label for="client id">Client ID</label>
	    <input type="text" name="client_id" value="<?php echo esc_attr( get_option('client_id') ); ?>" />

	    <label for="client secret">Client Secret</label>
	    <input type="text" name="client_secret" value="<?php echo esc_attr( get_option('client_secret') ); ?>" />
	     <?php submit_button(); ?>
		  </form>
		</div>
</div>
<?php } 

// function to get the bearer token
function get_custom_powebi_data($id)
{
   /*
    Get data from Plugin and fetch Bearer Token
    */
    $newParamUrlID = $id->get_url_params(); // to get report id from URL
    //$grant_type 	= esc_attr( get_option('grant_type') );
    $username = esc_attr(get_option('username'));
    $password = esc_attr(get_option('password'));
    $client_id = esc_attr(get_option('client_id'));
    $client_secret = esc_attr(get_option('client_secret'));

    $request = wp_remote_post('https://login.microsoftonline.com/common/oauth2/token', array(
        'body' => array(
            'grant_type' => 'password',
            'username' => $username,
            'password' => $password,
            'client_id' => $client_id,
            'client_secret' => $client_secret,
            'resource' => 'https://analysis.windows.net/powerbi/api'
        ) ,

    ));
    $tokenCode = json_decode($request['body']);

    if ($tokenCode->access_token)
    {

        //Get Token from above request and send request for Export as PDF
        $reportID = $newParamUrlID['id']; //'b57925f7-0f38-4199-b8ad-8ced72d30a72';
        return $bearerToken = str_replace('"', '', $tokenCode->access_token);
    }
}

// export which needs to hit at first time
function exportToReport($id){
	$bearerToken = $_SERVER['HTTP_TOKEN'];
	$reportID =  $id->get_url_params()['id'];
	$requestExport = wp_remote_post('https://api.powerbi.com/v1.0/myorg/reports/'.$reportID.'/ExportTo', array(
            'headers' => array(
                'Authorization' => "Bearer ".$bearerToken,
                'content_type' => 'application/json'
            ) ,
            'mimeType' => 'multipart/form-data',
            'body' => array(
                'format' => $_SERVER['HTTP_TYPE']
            ) ,
    ));
    $reqExported = json_decode($requestExport['response']['code']);

    if ($reqExported == 202)
    {
        return array('exportId' => json_decode($requestExport['body'])->id, 'error'=> false);
    }
    else
    {
        return array('message' => json_decode($requestExport['body'])->error->message, 'error'=>true);
    }

}

function get_export_file_status($id)
{
    $bearerToken = $_SERVER['HTTP_TOKEN'];
    $exportID = $_SERVER['HTTP_EXPORTID'];
    $reportID = $id->get_url_params()['id'];

    $requestExportStauts = wp_remote_get('https://api.powerbi.com/v1.0/myorg/reports/'.$reportID.'/exports/'.$exportID.'', array(
        'headers' => array(
            'Authorization' => "Bearer ".$bearerToken,
            'Content-Type' => 'application/pdf; charset=UTF-8',
        ) ,
        'timeout' => 600,
    ));
    
    // print_r(json_decode($requestExportStauts['body']));

    $exportStauts = json_decode($requestExportStauts['body'])->status;

    if ($exportStauts == "Succeeded")
    {
        return array('status'=> true, 'response' => json_decode($requestExportStauts['body']));      
    } else {
    	return array('status' => false, 'response' => json_decode($requestExportStauts['body']));
    }

}

function download_exported_report($id)
{
	$bearerToken = $_SERVER['HTTP_TOKEN'];
    $exportID = $_SERVER['HTTP_EXPORTID'];
    $reportID = $id->get_url_params()['id'];

    $requestExportFinal = wp_remote_get('https://api.powerbi.com/v1.0/myorg/reports/'.$reportID.'/exports/'.$exportID.'/file', array(
        'headers' => array(
            'Authorization' => "Bearer ".$bearerToken,
            'Content-Type' => 'application/pdf; charset=UTF-8',
        ) ,
        'timeout' => 600,
        'stream' => true,
        'filename' => 'pdfFiles/'.time().$_SERVER['HTTP_FILENAME'],

    ));

    return rest_ensure_response($requestExportFinal);
}



//The Following create registers an api route with multiple parameters.
add_action('rest_api_init', 'add_custom_powerbi_api');

function add_custom_powerbi_api()
{
    register_rest_route('/api', '/export-to-pdf/(?P<id>[a-z0-9 .\-]+)', array(
        'methods' => 'GET',
        'callback' => 'get_custom_powebi_data',
    ));
    register_rest_route('/api', '/exportToReport/(?P<id>[a-z0-9 .\-]+)', array(
        'methods' => 'GET',
        'callback' => 'exportToReport',
    ));
    register_rest_route('/api', '/exportGetStatusFile/(?P<id>[a-z0-9 .\-]+)', array(
        'methods' => 'GET',
        'callback' => 'get_export_file_status',
    ));
    register_rest_route('/api', '/donwloadFile/(?P<id>[a-z0-9 .\-]+)', array(
        'methods' => 'GET',
        'callback' => 'download_exported_report',
    ));

}

?>
