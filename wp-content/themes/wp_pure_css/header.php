<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
  <head>
    <meta charset="utf-8">
    <title>Shane Birney Architects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serving Derry and Beyond">
    <meta name="author" content="Tim Inman">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/pure/img/favicon.ico?ver=2.0" />
    <link href="<?php bloginfo('stylesheet_url');?>?v='refresh css'" rel="stylesheet">
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
    </style>
  </head>
  <body>
    <a id="circleLogo" href="<?php echo site_url(); ?>"><img src="http://localhost/shane/wp-content/uploads/2014/06/logo.png"></a>
    <div id="logo"><a href="<?php echo site_url(); ?>">SHANE BIRNEY ARCHITECTS</a></div>
    <div id="menu">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
    </div>
    <br><!-- under static menu-->