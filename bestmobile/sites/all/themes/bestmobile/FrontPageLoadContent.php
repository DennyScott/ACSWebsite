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
                  <h1 class="title"><?php print $title; ?></h1>
						    </section>
					    </article>
            <?php } ?>
            <?php print render($page['content']); ?>
          <?php } else { ?>
					<!-- Default post with image -->
					<article class="post default">
						<section class="main clear">
							<h1 class="title"><?php print $title; ?></h1>
							<div class="content">
                <?php print render($page['content']); ?>
							</div>
						</section>
					</article>
					<!-- // Default post with image -->
          <?php } ?>

				</section>