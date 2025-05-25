<?php
require BASE_PATH . '/vendor/autoload.php';

require_once BASE_PATH . '/components/templates/foot.component.php';
require_once BASE_PATH . '/components/templates/head.component.php';
require_once BASE_PATH . '/components/templates/nav.component.php';
require_once BASE_PATH . '/handlers/data.php';
require_once BASE_PATH . '/components/cards/gameCard.component.php';

$gameList = $games;
?>

<section class="hero">

    <h1>Past Game blog posts</h1>


    <section class="game-grid">
    <?php foreach ($gameList as $game): ?>
        <?php displayGameCard($game); ?>
    <?php endforeach; ?>
    </section>
    <a class= "cta-button" href= "../index.php">← Back to Home</a>