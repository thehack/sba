<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
  <head>
    <meta charset="utf-8">
    <title>Shane Birney Architects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Serving Derry and Beyond">
    <meta name="author" content="Tim Inman">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
    <link href="<?php bloginfo('stylesheet_url');?>?v='refresh css'" rel="stylesheet">
    <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <style type="text/css">
    </style>
  </head>
  <body>
        <a id="circleLogo" style="display:none;" href="<?php echo site_url(); ?>"><img src="http://localhost/shane/wp-content/themes/wp_pure_css/pure/img/sba.png"></a>

    <div id="title">
      <br>
      <h1><a id="typeLogo" class="brand" href="<?php echo site_url(); ?>"><img src="http://localhost/shane/wp-content/uploads/2014/06/path321.png" alt="<?php bloginfo(name); ?>"></a></h1>
    </div>
    <div id="menu">

      <?php wp_nav_menu( array( 'theme_location' => 'header-menu') ); ?>
    </div>

    <!-- under static menu-->
    <br>
    <br>
    <br>
