<div<?php print $attributes; ?>>
  <header role="banner">
    <div class="grid-container grid-parent">

      <?php if ($logo): ?>
        <div class="grid-30">
          <?php print render($page['branding']); ?>
        </div>
      <?php endif; ?>

      <div class="grid-70">
        <?php print render($page['navigation']); ?>
      </div>

    </div>
  </header>

  <div class="grid-container grid-parent">
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

    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php if ($action_links): ?>
      <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>
    <?php print render($page['content']); ?>
    <?php print $feed_icons; ?>
  </div>

  <footer class="grid-container grid-parent" role="contentinfo">
    <?php print render($page['footer']); ?>
  </footer>
</div>
