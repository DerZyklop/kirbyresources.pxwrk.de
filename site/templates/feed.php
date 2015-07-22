<?php

$articles = $pages->find('neuigkeiten')->children()->visible()->flip()->limit(10);

snippet('feed', array(
  'link'  => url('de/neuigkeiten'),
  'items' => $articles,
  'descriptionField'  => 'text',
  'descriptionExcerpt' => '0'
));
?>
