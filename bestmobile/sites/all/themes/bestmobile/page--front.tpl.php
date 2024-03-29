<?php print render($page['header']); 
global $base_url;
if (theme_get_setting('tm_value_theme_3') == 'left') {
  $said1 = 'beta';
  $said2 = 'alpha';
} else {
  $said1 = 'alpha';
  $said2 = 'beta';
}
?>

		<!-- Browser notification -->
		<div class="browser-notification ie6">
			<p>Your browser (Internet Explorer 7 or lower) is <strong>out of date</strong>. It has known <strong>security flaws</strong> and may <strong>not display all features</strong> of this and other websites. <a href="http://www.browser-update.org/update.html">Learn how to update your browser</a>.</p>
			<div class="close">X</div>
		</div>
		<!-- // Browser notification -->

		<!-- Top section --><!--
		<header id="top">
			<div class="container">
        <h1>//<?php print t('Navigate'); ?></h1>-->
				<!--<div class="frame">-->

					<!-- Top navigation -->
         <!-- <nav id="nav-top" class="clear">
           <!--//<?php if (isset($page['sidebar_top_menu'])) { print render($page['sidebar_top_menu']); } ?>-->
         <!--// <?php if (isset($page['sidebar_phone'])) { print render($page['sidebar_phone']); } ?> -->
          <!--</nav>-->
					<!-- // Top navigation -->

				<!--</div><!-- // .frame -->

			<!--</div>
		</header>-->
		<!-- // Top section -->

		<!-- Main section -->
		<div id="main" class="clear">
			<div class="container">

				<!-- Header -->
				<header id="header" class="clear">
					
						<h1 class="alpha">
              <a href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a>
						</h1>
						
						<hgroup id ="name-and-slogan">
						<h1 id="site-name">
						<a href="/drupal/" title="ACS" rel="home">
							<span><?php print $site_name; ?></span>
							</a>
						</h1>
						<h2 id="slogan">
							<span><?php print $site_slogan; ?></span>
						</h2>
					</hgroup>
          <?php if (isset($page['sidebar_top_ad'])) { print '<div class="ad beta vertical"><div>'.render($page['sidebar_top_ad']).'</div></div>'; } ?>
				</header>
				<!-- // Header -->

				<!-- Main navigation -->
        <?php if (isset($page['sidebar_navgation_menu'])) { print ''.render($page['sidebar_navgation_menu']).''; } ?>
				<!-- // Main navigation -->

				<!-- Banners -->
				<div id="banners" class="clear">
          <?php if (theme_get_setting('tm_value_theme_2') == 'full') { ?>  
          <div class="banner full flexslider">
          <?php } elseif (theme_get_setting('tm_value_theme_2') == 'banners') { ?>
					<div class="banner big flexslider alpha">
          <?php } else { ?>
          <div class="banner">
          <?php } ?>
		      <?php if ($sidebar_slideshow = render($page['sidebar_slideshow'])) print ''.$sidebar_slideshow.'' ; ?>
					</div>
          <?php if (theme_get_setting('tm_value_theme_2') == 'banners') { ?>
					  <div class="beta">
              <?php print render($page['sidebar_banner_1']); ?>						  
              <?php print render($page['sidebar_banner_2']); ?>
					  </div>
          <?php } ?>
				</div>
				<!-- // Banners -->

        <?php //if ($sidebar_slideshow = render($page['sidebar_slideshow'])) print '<section class="columns four clear"><ul>'.$sidebar_slideshow.'</ul></section>' ; ?>

        <?php if ($sidebar_fourcolumns = render($page['sidebar_fourcolumns'])) print '<section class="columns four clear"><ul>'.$sidebar_fourcolumns.'</ul></section>' ; ?>

				<!-- Content -->
				<?php if (arg(0) == 'portfolio' or arg(0) == 'galleries') { ?>
          <section id="content">
        <?php } else { ?>
          <section id="content" class="<?php print $said1; ?>">
        <?php } ?>
        <?php //if (isset($breadcrumb)) { print $breadcrumb; } ?>
				<?php if (isset($tabs)) { print ''. render($tabs); } ?>
				<?php if (isset($messages)) { print $messages; } ?>
				<?php if (isset($help)) { print $help; } ?>
          <?php if (isset($page['content']['system_main']['nodes']) or 
                (arg(0) == 'taxonomy' and arg(1) == 'term') or
                (arg(0) == 'blog') or 
                (arg(0) == 'archive') or
                (arg(0) == 'portfolio') or
                (arg(0) == 'galleries')
            ) { ?>
            <?php if ($title and (
                (arg(0) == 'taxonomy' and arg(1) == 'term') or
                (arg(0) == 'blog') or 
                (arg(0) == 'archive')
              )) { ?>
              <article class="post default">
						    <section class="main clear">
                 
						    </section>
					    </article>
            <?php } ?>
            <?php print render($page['content']); ?>
          <?php } else { ?>
					<!-- Default post with image -->
					
					<?php
if(!empty($page['content'])) : 
?>
<?php
if(drupal_is_front_page()) {
    unset($page['content']['system_main']['default_message']);
    }
?>	
							
                <?php
print render($page['content']); 
?>
<?php
endif; 
?>
				
				
						
					<!-- // Default post with image -->
          <?php } ?>

				</section>
				<!-- // Content -->
        <?php if (arg(0) != 'portfolio' and arg(0) != 'galleries') { ?>
				<!-- Aside -->
				<aside id="aside" class="<?php print $said2; ?>">
					<ul>
            <?php print render($page['sidebar_right']); ?>
					</ul>
				</aside>
				<!-- // Aside -->
        <?php } ?>
			</div>
		</div>
		<!-- // Main section -->

		<!-- Bottom section -->
		<footer id="bottom">
			<div class="container">

				<!-- Bottom aside -->
				<aside id="aside-bottom" class="clear">
					<ul>
						<li class="small widget widget-text">
							<?php print render($page['footer_one']); ?>
						</li>
						<li class="small widget widget-text">
							<?php print render($page['footer_two']); ?>
						</li>
						<li class="small widget widget-text">
							<?php print render($page['footer_three']); ?>
						</li>
						<li class="fixed widget widget-text">
							<?php print render($page['footer_four']); ?>
						</li>
					</ul>
				</aside>
				<!-- // Bottom aside -->

				<!-- Footer -->
				<section id="footer" class="clear">
					<p class="alpha"><?php print render($page['footer_copyright']); ?><a href="http://www.themesnap.com/">Drupal theme by ThemeSnap.com</a></p>
				</section>
				<!-- // Footer -->

			</div>
		</footer>
		<!-- // Bottom section -->

<?php //print '<pre>'. check_plain(print_r($page['content']['system_main'], 1)) .'</pre>'; ?>