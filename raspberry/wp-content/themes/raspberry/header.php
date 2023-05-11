<html>
<meta name="viewport" content="width-device-width, initial-scale=1"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada|Raleway" rel="stylesheet"> 

<head>
	<title><?php wp_title( '-', true, 'right' ); bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
  <?php wp_head(); ?>
</head>

<body>

  <header>
    <h1><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ) ?></a></h1>
  </header>
  
  <nav>
    <?php wp_nav_menu( [ 'theme_location' => 'main-menu' ] ); ?>
  </nav>