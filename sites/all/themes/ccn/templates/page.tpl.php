<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div id="header-wrapper">
    <div id="header" class="clearfix">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Cloud Class Network'); ?>" rel="home" id="logo">
          <img src="<?php print $logo; ?>" alt="<?php print t('Cloud Class Network'); ?>"/>
        </a>
      <?php endif; ?>

      <?php if ($main_menu || $secondary_menu): ?>
        <div id="navigation" class="menu">
          <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
          <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['header']): ?>
        <div id="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($page['front_hot']): ?>
    <div id="front-hot-wrapper">
      <div id="front-hot"><?php print render($page['front_hot']); ?></div>
    </div>
  <?php endif; ?>

  <div id="main-wrapper">
    <div id="main" class="clearfix">
      <div id="content">
        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">
            <?php print $breadcrumb; ?>
            <?php if ($page['highlighted']): ?>
              <div id="highlighted"><?php print render($page['highlighted']) ?></div>
            <?php endif; ?>

            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php print $messages; ?>
            <?php print render($page['help']); ?>

            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>

            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <div id="content-area">
          <?php print render($page['content']) ?>
        </div>
      </div>

      <?php if ($page['sidebar_first']): ?>
        <div id="sidebar-first" class="column sidebar first">
          <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <div id="sidebar-second" class="column sidebar second">
          <?php print render($page['sidebar_second']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div id="footer-wrapper">
    <div id="footer">
      <div class="copyright">Copyright by 2013 deviantART. All rights reserved</div>
      <?php if ($page['footer']): ?>
        <?php print render($page['footer']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
