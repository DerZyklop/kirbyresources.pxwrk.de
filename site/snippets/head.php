<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />

  <?php snippet('head_opengraph') ?>
  <?php snippet('head_favicon') ?>
  <?php snippet('head_rss') ?>

  <?php echo css('assets/styles/styles.css') ?>

  <link type="text/plain" rel="author" href="http://domain/humans.txt" />
</head>
