<?php

$app=App::getInstance();

$categorie=$app->getTable('Category')->find($_GET['id']);
if($categorie===false){
   $app::notFound();
}

$articles=$app->getTable('Post')->LastByCategory($_GET['id']);

$categories=$app->getTable('Category')->all();


?>

<h1><?= $categorie->title ?></h1>
    
<div class="row">
    <div class="col-sm-8">
    
        <?php foreach ($articles as $post): ?>
            <h2>
                <a href="<?= $post->getURL(); ?>"><?= $post->title; ?></a>
            </h2>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->getExtract(); ?></p>

        <?php endforeach; ?>
    </div>

    <div class="col-sm-4">
        <ul>
            <?php foreach ($category as $categorie): ?>
                <li> 
                    <a href="<?= $categorie->url; ?>"><?= $categorie->title; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
  </div>
