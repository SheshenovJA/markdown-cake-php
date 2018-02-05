<div class="description">
    <?= $this->Markdown->toHtml('*fdsfdsds*'); ?>
</div>
<?php if (!empty($posts)) { ?>
<? foreach ($posts as $post) { ?>

        <div class="diescripton" id="<?= $post->id  ?>">
            <h1><?= $post->block_name ?></h1>
            <p>  <?= $this->Markdown->toHtml($post->content_mark); ?> </p>
        </div>

    <?php }?>
<?php }?>
