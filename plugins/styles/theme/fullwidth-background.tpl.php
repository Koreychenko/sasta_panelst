<div<?php print drupal_attributes($style_attributes); ?>>
<?php if ($pane_prefix): ?>
  <?php print $pane_prefix; ?>
<?php endif; ?>
<?php if ($title): ?>
  <h2 class="pane-title"><?php print $title; ?></h2>
<?php endif; ?>
<?php if ($admin_links): ?>
    <?php print $admin_links; ?>
  <?php endif; ?>
  <div class="container">
    <?php print render($content); ?>
  </div>
  <?php if ($pane_suffix): ?>
  <?php print $pane_suffix; ?>
<?php endif; ?>
</div>
