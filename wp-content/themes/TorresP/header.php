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
		<meta name="description" content="Torres Piña precandidato a Senador">

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36525743-3', 'auto');
  ga('send', 'pageview');

</script>
		 
		<?php wp_head(); ?>
		 

	</head>

		<!-- preloader -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/preloader.js"></script>
	<?php echo get_template_part("contenidos/Loading/loading")?>

	<body class="flexcroll">
		<div class="customCursor box"></div>

 
 
