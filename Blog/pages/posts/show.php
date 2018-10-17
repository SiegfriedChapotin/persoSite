<?php

$app= App::getInstance();

$post = $app->getTable('Post')->find($_GET['id']);
if($post ===false){

    $app->notfound();
}
$app->title=$post->titre;
?>

<div class="row">
    <diSv class="col-sm-8">


        <h2>   <?= $post->title; ?>   </h2>
        <p> 
            <em><?= $post->categorie; ?></em>
        </p>

        <p><?= $post->content; ?></p>


    </diSv>

    <div class="col-sm-4">
        <ul>
            <?php foreach ($Category as $categorie): ?>
                <li> 
                    <a href="<?= $categorie->url; ?>"><?= $categorie->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
