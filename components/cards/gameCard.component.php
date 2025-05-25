<?php
function displayGameCard($game) {
    echo '
    <div class="game-card">
        <img src="' . $game['image'] . '" alt="' . $game['title'] . '" class="game-card-image">
        <h3 class="game-card-title">' . htmlspecialchars($game['title']) . '</h3>
        <p class="game-card-meta">' . htmlspecialchars($game['console']) . ' - ' . $game['year'] . '</p>
        <p class="game-card-review">' . htmlspecialchars($game['review']) . '</p>
    </div>';
}
?>
