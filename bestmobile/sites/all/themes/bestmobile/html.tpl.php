<!DOCTYPE html>
<html class="no-js" dir="<?php print $language->dir; ?>" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>">
<head>
  <?php global $base_url; ?>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Rokkitt:400,700" />
  <?php print $styles; ?>
  <!--[if lte IE 9]>
  <link rel="stylesheet" href="<?php print $base_url.'/'.path_to_theme(); ?>/css/ie9.css" />
  <![endif]-->
  <!--[if lte IE 8]>
  <link rel="stylesheet" href="<?php print $base_url.'/'.path_to_theme(); ?>/css/ie8.css" />
  <script src="<?php print $base_url.'/'.path_to_theme(); ?>/js/html5.js"></script>
  <script src="<?php print $base_url.'/'.path_to_theme(); ?>/js/respond.min.js"></script>
  <![endif]-->
  <?php print $scripts; ?>

</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
