<div id="wrapper">
  <!--header-->
  <header class="grid-100 mobile-grid-100 grid-parent" role="banner" id="header">
    <div class="grid-container">

      <div class="grid-30 mobile-grid-100">
        <?php if ($logo): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif; ?>

        <?php if ($site_name || $site_slogan): ?>
	  <?php if ($site_name): ?>
	    <h1 class="site-name">
	      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
	    </h1>
	  <?php endif; ?>

          <?php if ($site_slogan): ?>
	    <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
	  <?php endif; ?>
	<?php endif; ?>

	<?php print render($page['branding']); ?>
      </div>

      <div class="grid-70 mobile-grid-100">
        <div id="navigation">
	  <?php print render($page['header']); ?> 
	</div>
      </div>

    </div>

    <div class="grid-container">
      <div class="grid-100">
        <?php print render($page['navigation']); ?> 
      </div>
    </div>
  </header>
  <!--/header-->
  
  <div class="grid-100 grid-parent" role="main" id="main">
    <div class="grid-container">
      <div class="grid-100">
        <?php print render($page['highlighted']); ?>
        <?php print $breadcrumb; ?>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1 class="page-title"><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
      </div>
    </div>
	
    <div class="grid-container"><div class="grid-100">
      <?php print render($page['content']); ?>
    </div>
  </div>
  
  <footer class="grid-100 grid-parent" role="contentinfo" id="footer">
    <div class="grid-container">
      <div class="grid-100 mobile-grid-100">
        <div class="footer">
          <?php print render($page['footer']); ?>
          <div class="grid-20 grid-parent mobile-grid-100">
  	    <?php print render($page['footer_logo']); ?>
  	  </div>
  	  <div class="grid-80 grid-parent mobile-grid-100">
	    <?php print render($page['footer_menu']); ?>
	  </div>
        </div>
      </div>
    </div>
  </footer>

</div>
