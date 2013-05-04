<?php 
$this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
$this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
$this->output->set_header('Pragma: no-cache');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" /> 

    <!--[if gt IE 8]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />        
    <![endif]-->                
    <title><?php echo $titulo; ?></title>
    <link rel="icon" type="image/ico" href="<?php echo base_url(); ?>static/img/favicon.ico"/>
    
    <link href="<?php echo base_url(); ?>static/css/stylesheets.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 10]>
        <link href="<?php echo base_url(); ?>static/css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->           
    <!--[if lte IE 7]>
        <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/other/lte-ie7.js'></script>
    <![endif]-->    
   
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jquery/jquery-1.9.1.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jquery/jquery-ui-1.10.1.custom.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jquery/jquery-migrate-1.1.1.min.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jquery/globalize.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/other/excanvas.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/other/jquery.mousewheel.min.js'></script>        
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/bootstrap/bootstrap.min.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/cookies/jquery.cookies.2.2.0.min.js'></script> 
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jflot/jquery.flot.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jflot/jquery.flot.stack.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jflot/jquery.flot.pie.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/jflot/jquery.flot.resize.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/epiechart/jquery.easy-pie-chart.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/sparklines/jquery.sparkline.min.js'></script>  
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>static/js/plugins/uniform/jquery.uniform.min.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>static/js/plugins/fullcalendar/fullcalendar.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/shbrush/XRegExp.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/shbrush/shCore.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/shbrush/shBrushXml.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/shbrush/shBrushJScript.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/shbrush/shBrushCss.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins/datatables/jquery.dataTables.min.js'></script>    
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/plugins.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/charts.js'></script>
    <script type='text/javascript' src='<?php echo base_url(); ?>static/js/actions.js'></script>   


    
    
</head>
<body>  