<?php

$this->layout('layout', [
    'bodyClass' => 'home',
    'meta_description' => $this->text('meta-description-index')
    ]);

$this->section('content');

// We include alert messages in this layout, so it will be processed before the
// main layout. Therefore the main layout won't repeat them
?>

<div class="home">

    <?= $this->supply('home-content') ?>

</div>

<?php $this->replace() ?>


<?php $this->section('head') ?>
    <?= $this->insert('home/partials/styles') ?>
<?php $this->append() ?>

<?php $this->section('footer') ?>
    <?= $this->insert('home/partials/javascript') ?>
<?php $this->append() ?>
