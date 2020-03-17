<!DOCTYPE html>
<html>
<head>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet"/>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?php bloginfo( 'description' ); ?></title>

<?php wp_head(); ?>
</head>
<body style="background-image: url(<?php the_field('background_image') ?>);">

    <nav class="navbar navbar-expand-lg navbar-light bg-light text-decoration-none">
    
		<a class="navbar-brand img-fluid img-fluid" href="index.php"><img class="l_height" src="<?php the_field('navbar-brand') ?>" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarContent">
      <?php   wp_nav_menu (array( 
          'theme location' => 'main_nav',
          'container' => false,         
          'menu_class' => 'navbar navbar-expand-lg navbar-light bg-light text-decoration-none',
          'menu_id' => 'navbarContent'
           ) );   ?>
		</div>
	  </nav>