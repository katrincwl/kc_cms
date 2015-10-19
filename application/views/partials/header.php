<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo (isset($meta_description))?$meta_description:"";?>">
    <meta name="keywords" content="<?php echo (isset($meta_keywords))?$meta_keywords:"";?>">
    <meta property="og:url" content="<?php echo current_url();?>" />
    <?php  if (isset($og_type)){ ?>
        <meta property="og:type" content="<?php echo $og_type;?>" />
    <?php  } ?>
    <meta property="og:title" content="<?php echo (isset($og_title))?$og_title:(isset($page_title))?$page_title:"";?>" />
    <meta property="og:description"  content="<?php echo (isset($og_description))?$og_description:(isset($meta_description))?$meta_description:"";?>" />
    <?php  if (isset($og_image)){ ?>
        <meta property="og:image"  content="<?php echo $og_image;?>" />
    <?php  } ?>
    <link rel="icon" href="../../favicon.ico">
    <title><?php  echo  (isset($page_title))? $page_title:""; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('public/css/kc_bootstrap.css');?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('public/css/app.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <?php if (SHOW_LOADER_FRONTEND): ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/pace.css') ?>">
        <script src="<?php echo base_url('public/js/pace.min.js');?>"></script>
        <script type="text/javascript">
            paceOptions = {
              ajax: false, // disabled
              document: true, // disabled
              eventLag: false, // disabled
              elements: {
                selectors: ['body']
              }
            };
        </script>
    <?php endif ?>
    <?php
        if (isset($custom_css)){
            foreach ($custom_css as $css){
    ?>
                <link href="<?php echo base_url($css);?>" rel="stylesheet">
    <?php
            }
        }
    ?>

    <?php if (isset($custom_js)): ?>
        <?php if (isset($custom_js['top'])): ?>
            <?php foreach ($custom_js['top'] as $top_js): ?>
                <script src="<?php echo base_url($top_js);?>"></script>
            <?php endforeach ?>
        <?php endif ?>
    <?php endif ?>

    <?php 
    if (ENVIRONMENT == 'development'){
        include_once APPPATH.'views/partials/debugbar_resources.php';
    }
    ?>
</head>
<body>
<?php 
if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()){
    include_once APPPATH.'views/admin/navbar.php';
}
?>
