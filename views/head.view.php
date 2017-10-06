<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title><?php echo $pageTitle; ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta name="description" content="<?php echo $pageDesc; ?>">
	<!-- Open Graph Code -->
	<meta property="og:title" content="<?php echo $pageTitle; ?>"/>
	<meta property="og:description" content="<?php echo $pageDesc; ?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo $pageUrl; ?>"/>
	<meta property="og:image" content="<?php echo $pageThumb; ?>"/>
	<!-- End Open Graph Code -->
	<link rel="icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" href="css/bqs.css">
	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '1418618418233855'); 
		fbq('track', 'PageView');
	</script>
	<noscript>
	 	<img height="1" width="1" 
		src="https://www.facebook.com/tr?id=1418618418233855&ev=PageView
		&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
</head>