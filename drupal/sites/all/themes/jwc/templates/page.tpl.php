<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">

  <header class="header" id="header" role="banner">

    <div class="wrapper">
	<?php if ($logo): ?>
      <h1><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a></h1>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
	<?php print render($page['mininav']); ?>
	<div class="clear"></div>
    <?php print render($page['header']); ?>	
	</div>

  </header>

  <div id="main">

    <div id="navigation">

      <div class="wrapper">
		<?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>
	  </div>

    </div>
	
	<?php if ($is_front) print render($page['banner']); ?>

    <div class="wrapper">
	  <div id="content" class="column" role="main">
        <!-- <?php print $breadcrumb; ?> -->
	    <?php if ($is_front) { ?>
          <div class="news">
	  	    <?php print render($page['news']); ?>
          </div>
	      <div class="spotlights">
		    <?php print render($page['business_routes']); ?>
          </div>
     	<?php } else {?>
		  <a id="main-content"></a>
		  <?php print render($title_prefix); ?>
		  <?php if ($title): ?>
		    <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
		  <?php endif; ?>
		  <?php print render($title_suffix); ?>
		  <?php print $messages; ?>
		  <?php print render($tabs); ?>
		  <?php print render($page['help']); ?>
		  <?php if ($action_links): ?>
		    <ul class="action-links"><?php print render($action_links); ?></ul>
		  <?php endif; ?>
		  <?php print render($page['content']); ?>
		  <?php print $feed_icons; ?>
	    <?php } ?>
    </div>

	<?php if($is_front): ?>
		<?php
		  // Render the sidebars to see if there's anything in them.
		  $sidebar_first  = render($page['sidebar_first']);
		?>

		<?php if ($sidebar_first || $sidebar_second): ?>
		  <aside class="sidebars">
		    <?php print $sidebar_first; ?>
			<section class="region region-sidebar-second column sidebar">
				<ul>
						<li class="imh"><a href="http://202.202.1.176:8080/default.aspx">教学管理信息系统</a></li>
						<li class="weixin"><a href="http://202.202.1.176/">重大教学</a></li>
						<li class="ioa"><a href="http://syjx.cqu.edu.cn/">实验教学管理系统</a></li>
						<li class="ixy"><a href="http://222.198.128.199:8080/cquutp_zc/">学生报到注册系统</a></li>
				</ul>
			</section>
		  </aside>
		<?php endif; ?>
	<?php endif; ?>

  </div>	
	</div>
  <footer class="footer">
  	<div class="wrapper">
		<div class="siteinfo">
			<div class="org">
				<a href="http://www.cqu.edu.cn">Chongqing University</a>			
			</div>
			<address class="adr">
				<span class="street-address">重庆市沙坪坝区沙正街174号</span>
				,
				<span class="postal-code">邮编400044</span>			
			</address>
			<div class="license">（渝ICP备05005762号）</div>	
			<div class="copyright">©2015 重庆大学教务处 All Rights Reserved</div>	
		</div>
		<div class="resources">
			<div class="left-links">
				<?php print render($page['left_footer_links']) ?>			
			</div>
			<div class="right-links">
				<?php print render($page['right_footer_links']) ?>
			</div>
		</div>
	</div>
  </footer>
</div>
