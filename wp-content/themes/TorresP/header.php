<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/Icono.png" sizes="32x32" />
        


		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'  name='viewport' />
		<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/portada1200x630.png" />
		 

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/materialize/materialize.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-4.0.0-beta.2/dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome-4.7.0/css/font-awesome.css">
		<meta name="description" content="Torres Piña precandidato a Senador">

	 

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.11&appId=314621292334581';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		 
		<?php wp_head(); ?>
		 

	</head>

		<!-- preloader -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/preloader.js"></script>
	<?php echo get_template_part("contenidos/Loading/loading")?>

	<body class="flexcroll">


 
 
