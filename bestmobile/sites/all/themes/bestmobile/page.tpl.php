<?php print render($page['header']); 
global $base_url;
if (theme_get_setting('tm_value_theme_3') == 'left') {
  $said1 = 'beta';
  $said2 = 'alpha';
} else {
  $said1 = 'alpha';
  $said2 = 'beta';
}
if (arg(1)) $arg1 = arg(1); else $arg1 = 0;
if (!isset($page['content']['system_main']['nodes'][$arg1]['#node']->type)) $page['content']['system_main']['nodes'][$arg1]['#node']->type = '';
?>
		<!-- Browser notification -->
		<div class="browser-notification ie6">
			<p>Your browser (Internet Explorer 7 or lower) is <strong>out of date</strong>. It has known <strong>security flaws</strong> and may <strong>not display all features</strong> of this and other websites. <a href="http://www.browser-update.org/update.html">Learn how to update your browser</a>.</p>
			<div class="close">X</div>
		</div>
		<!-- // Browser notification -->

		<!-- Top section -->
		<header id="top">
			<div class="container">
        <h1><?php print t('Navigate'); ?></h1>
				<div class="frame">

					<!-- Top navigation -->
          <nav id="nav-top" class="clear">
          <!--//<?php if (isset($page['sidebar_top_menu'])) { print render($page['sidebar_top_menu']); } ?>-->
         <!--// <?php if (isset($page['sidebar_phone'])) { print render($page['sidebar_phone']); } ?> -->
          </nav>
					<!-- // Top navigation -->

				</div><!-- // .frame -->

			</div>
		</header>
		<!-- // Top section -->

		<!-- Main section -->
		<div id="main" class="clear">
			<div class="container">

				<!-- Header -->
				<header id="header" class="clear">
					<hgroup class="alpha">
						<h1 class="alpha"><a href="<?php print check_url($front_page); ?>" title="<?php print $site_name; ?>"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></a></h1>
						<h2 class="vertical">
							<span><?php print $site_slogan; ?></span>
						</h2>
					</hgroup>
          <?php if (isset($page['sidebar_top_ad'])) { print '<div class="ad beta vertical"><div>'.render($page['sidebar_top_ad']).'</div></div>'; } ?>
				</header>
				<!-- // Header -->

				<!-- Main navigation -->
        <?php if (isset($page['sidebar_navgation_menu'])) { print ''.render($page['sidebar_navgation_menu']).''; } ?>
				<!-- // Main navigation -->

				<!-- Content -->
				<?php if (arg(0) == 'portfolio' or arg(0) == 'galleries' or 
          $page['content']['system_main']['nodes'][$arg1]['#node']->type == 'full_width' or
          $page['content']['system_main']['nodes'][$arg1]['#node']->type == 'portfolio'
          ) { ?>
          <section id="content">
        <?php } else { ?>
          <section id="content" class="<?php print $said1; ?>">
        <?php } ?>
        <?php //if (isset($breadcrumb)) { print $breadcrumb; } ?>
				<?php if (isset($tabs)) { print ''. render($tabs); } ?>
				<?php if (isset($messages)) { print $messages; } ?>
				<?php if (isset($help)) { print $help; } ?>
          <?php if ($page['content']['system_main']['nodes'][$arg1]['#node']->type or 
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
                  <h1 class="title"><?php print $title; ?></h1>
						    </section>
					    </article>
            <?php } ?>
            <?php if ($action_links) {print '<ul class="action-links">'.render($action_links).'</ul>';}?><?php print render($page['content']); ?><br /><?php print $feed_icons; ?>
          <?php } else { ?>
					<!-- Default post with image -->
					<article class="post default">
						<section class="main clear">
							<h1 class="title"><?php print $title; ?></h1>
							<div class="content">
                <?php if ($action_links) {print '<ul class="action-links">'.render($action_links).'</ul>';}?><?php print render($page['content']); ?><br /><?php print $feed_icons; ?>
							</div>
						</section>
					</article>
					<!-- // Default post with image -->
          <?php } ?>

				</section>
				
				
					<ul>
            <?php print render($page['sidebar']); ?>
					</ul>
				
				<!-- // Content -->
        <?php if (arg(0) != 'portfolio' and arg(0) != 'galleries' and 
          $page['content']['system_main']['nodes'][$arg1]['#node']->type != 'full_width' and
          $page['content']['system_main']['nodes'][$arg1]['#node']->type != 'portfolio'
          ) { ?>
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

<?php //print '<pre>'. check_plain(print_r($page['content']['system_main']['nodes'][arg(1)]['#node']->type, 1)) .'</pre>'; ?>