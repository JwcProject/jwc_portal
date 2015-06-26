<?php
/**
 * @file
 * Returns the HTML for comments.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728216
 */
?>
<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
  
	<div class="comment-picture">
		<?php if ($picture){ ?>
			<?php print $picture; ?>
		<?php } else { ?>
			<img src="<?php print url(drupal_get_path('theme', 'jwc').'/images/default-avatar.png'); ?>" width="80" height="80">
		<?php } ?>
	</div>
  
	<?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h3<?php print $title_attributes; ?>>
        <?php print $title; ?>
        <?php if ($new): ?>
          <mark class="new"><?php print $new; ?></mark>
        <?php endif; ?>
      </h3>
    <?php elseif ($new): ?>
      <mark class="new"><?php print $new; ?></mark>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  
	<div class="comment-submitted"><?php print $submitted; ?></div>

    <?php if ($status == 'comment-unpublished'): ?>
      <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
    <?php endif; ?>
  </header>

  <div class="comment-content">
	  <?php
		// We hide the comments and links now so that we can render them later.
		hide($content['links']);
		print render($content);
	  ?>
  </div>

  <?php if ($signature): ?>
    <footer class="user-signature clearfix">
      <?php print $signature; ?>
    </footer>
  <?php endif; ?>

  <?php print render($content['links']) ?>
</article>
