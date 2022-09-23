<h1><?= $page->title() ?></h1>

<?php foreach ($page->blocks()->toBlocks() as $block) : ?>
  <?= $block ?>
<?php endforeach ?>
