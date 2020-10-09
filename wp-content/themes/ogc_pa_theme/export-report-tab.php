<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 template Name: Export Report Tab
 * @package WordPress
 * 
 */
//,uprint_r($_GET);
$report_id = $_GET['report_id'];
$type = $_GET['type'];
if(empty($report_id) || empty($type))
{
	echo "Invalid request!!"; exit;
}
 get_header();
//echo "Report - ".$report_id." - Type - ".$type;
?>
<style type="text/css">
	.html5-progress-bar {
        padding: 15px 15px;
        border-radius: 3px;
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, .2);
    }
    .html5-progress-bar progress {
        background-color: #f3f3f3;
        border: 0;
        width: 80%;
        height: 18px;
        border-radius: 9px;
    }
    .html5-progress-bar progress::-webkit-progress-bar {
        background-color: #f3f3f3;
        border-radius: 9px;
    }
    .html5-progress-bar progress::-webkit-progress-value {
        background: #cdeb8e;
        background: -moz-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #cdeb8e), color-stop(100%, #a5c956));
        background: -webkit-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: -o-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: -ms-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: linear-gradient(to bottom, #cdeb8e 0%, #a5c956 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cdeb8e', endColorstr='#a5c956', GradientType=0);
        border-radius: 9px;
    }
    .html5-progress-bar progress::-moz-progress-bar {
        background: #cdeb8e;
        background: -moz-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #cdeb8e), color-stop(100%, #a5c956));
        background: -webkit-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: -o-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: -ms-linear-gradient(top, #cdeb8e 0%, #a5c956 100%);
        background: linear-gradient(to bottom, #cdeb8e 0%, #a5c956 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cdeb8e', endColorstr='#a5c956', GradientType=0);
        border-radius: 9px;
    }
    .html5-progress-bar .progress-value {
        padding: 0px 5px;
        line-height: 20px;
        margin-left: 5px;
        font-size: .8em;
        color: #555;
        height: 18px;
        float: right;
    }
    /* just some CSS for the loading DIV */
     .loading {
        position: fixed;
        height: 100%;
        width: 100%;
        top:0;
        left: 0;
        background: rgba(0, 0, 0, 0.6);
        z-index:9999;
        font-size: 20px;
        text-align: center;
        padding-top: 200px;
        color: #fff;
        display: none;
    }
</style>
<div class="loading">
    <img src="https://mychart.uchealth.org/MyChart/en-US/images/spinner64.gif" style="width: 10%" />
    <div class="demo-wrapper html5-progress-bar">
        <div class="progress-bar-wrapper">
            <p style="text-align: center; margin-bottom: 20px; font-size: 1.4em">File is exporting please wait. This may take 5-10 minutes.</p>
            <progress id="progressbar" value="0" max="100"></progress>  <span class="progress-value" style="color: white;float: initial;">0%</span>
        </div>
    </div>
</div>

<script type="text/javascript">
    // step:1
   window.onload = function(){
        let type = '<?php echo $type; ?>';//$(this).attr('data-attr'); 
        $('.loading').show();
        //window.open(window.location.href);
        // window.open(window.location.origin+'/opengate-fint/export_response.pdf');
        $.ajax({
            url:'<?php echo site_url(); ?>/wp-json/api/export-to-pdf/<?php echo $report_id?>',
            type: 'get',
            cache: false,
            success : function (response){
                // console.log('response',response)
                let data = {
                    'token': response,
                    'report_id': '<?php echo $report_id?>',
                    'type' : type,
                }

                exportToReport(data);

            } ,
            error: function (xhr, data, error){
                alert('Invalid request. Please contact admin support.');
                console.log(xhr);
                console.log(data);
                console.log(error);
                window.close();
                $('.loading').hide();
            }
        })
    }
    //step : 2
    let exportToReport = (req) => {

        $.ajax({
            url: '<?php echo site_url(); ?>/wp-json/api/exportToReport/<?php echo $report_id?>',
            type: 'get',
            cache: false,
            headers: {
                token: req.token,
                type : req.type
            },
            success : function (response){
                console.log('response',response)
                let exportId = response.exportId;
                if(response.error){
                    //error message will show.
                    alert('Export not enable for this report. Pleasse contact admin support.');
                    window.close();
                    $('.loading').hide();
                } else {
                   interval = setInterval(function() {
                   $.ajax({
                            url: '<?php echo site_url(); ?>/wp-json/api/exportGetStatusFile/<?php echo $report_id?>',
                            type: 'get',
                            cache: false,
                            headers: {
                                token: req.token,
                                exportId : exportId
                            },
                            success : function (response){
                                if(response.status){
                                    clearInterval(interval);
                                    downloadPdfFile(exportId, req.token, req.type)
                                } else {
                                    $('#progressbar')[0].value = response.response.percentComplete;
                                    $('.progress-value').html(response.response.percentComplete+'%');
                                }
                            } ,
                            error: function (xhr, data, error){
                                console.log(xhr);
                                console.log(data);
                                console.log(error);
                            }
                        }) 
                   }, 50000)
                }
                
            } ,
            error: function (xhr, data, error){
                console.log(xhr);
                console.log(data);
                console.log(error);
            }
        })
    }
    // step 3
    let downloadPdfFile = (expId, token, fileType)=>{
        clearInterval(expId, token);
        $.ajax({
            url: '<?php echo site_url(); ?>/wp-json/api/donwloadFile/<?php echo $report_id?>',
            type: 'get',
            cache: false,
            headers: {
                token: token,
                exportId : expId,
                filename: 'exported_file.'+fileType.toLowerCase()
            },
            success : function (response){
                console.log(response);
                $('.loading').hide();
               window.location.href=`${window.location.origin}/${response.filename}`;
                if(fileType == 'PPTX') {
                	setTimeout(function(){ alert("PPTX file has been downloaded successfully"), window.close() }, 5000);
                	
                }  
                
            } ,
            error: function (xhr, data, error){
                console.log(xhr);
                console.log(data);
                console.log(error);
            }
        })
    }
</script>
<?php
get_footer();
