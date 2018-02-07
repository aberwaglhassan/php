<!--list.php avec utilisation layout(voir fin de page)>
<?php $title='liste des posts'?>

<?php ob_start()?>
        <h1>liste des posts</h1>
        <ul>
            <?php foreach ($posts as $articles): ?>
            <li>
                <a href="detailController.php?id=<?=$articles['id']?>">
                    <?= $articles['title']?>
                </a>

            <?php endforeach ?>
        </ul>
<?php $content= ob_get_clean()?>
<?php include 'layout.php'?>
