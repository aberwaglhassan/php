<?php $title=$row['title']?>

<?php ob_start()?>
    <h1><?=$row['title']?></h1>

    <div class="date"><?=$row['cree_le']?></div>
    <div class="body">
        <?=$row['description']?>
    </div>
<?php $content=ob_get_clean()?>
<?php include 'layout.php'?>