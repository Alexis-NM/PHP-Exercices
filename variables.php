<?php

$monkey = '🐒';
$gorilla = '🦍';
$orangutan = '🦧';
$dog = '🐕';
$wolf = '🐺';
$fox = '🦊';

$categories = [
    'Primates' => ['🐒', '🦍', '🦧'],
    'Mammifères' => ['🐒', '🦍', '🦧', '🐺', '🐅', '🐷', '🐘', '🐎'],
    'Les cétacés' => ['🐋', '🐬'],
    'La faune sauvage' => ['🐒', '🦍', '🦧', '🐺', '🐅', '🐘', '🐎', '🐋', '🐬'],
    'La vie marine' => ['🐋', '🐬', '🐟', '🐠', '🐡', '🦈', '🐙', '🐚', '🦀'],
    'Les poissons' => ['🐟', '🐠', '🐡', '🦈'],
    'Les dinosaures' => ['🦕', '🦖'],
    'Les créatures mythiques' => ['🦄', '🐉'],
    'Les animaux de la ferme' => ['🐄', '🦃', '🐓', '🐷', '🐑', '🐐', '🐎', '🐇'],
    'Les animaux de compagnie' => ['🐕', '🐱', '🐦', '🐠', '🐹'],
    'Les oiseaux' => ['🦃', '🐓', '🐧', '🕊️', '🦅', '🦆', '🦢', '🦉', '🦩', '🦚', '🦜'],
    'Les reptiles' => ['🐸', '🐊', '🐢', '🦎', '🐍'],
    'Les insectes' => ['🦋', '🐜', '🐝', '🐞', '🦗', '🦟'],
    'Les arthropodes' => ['🕷️', '🦂'],
    'Les animaux venimeux' => ['🕷️', '🦂', '🐍'],
    'Les prédateurs' => ['🐺', '🐅', '🦊', '🦁', '🐻', '🐊', '🦈', '🦖'],
    'Les herbivores' => ['🐄', '🐑', '🐇', '🐨', '🦙', '🦌', '🐪']
];

function renderSection($title, $items) {
    echo "<h2>$title</h2>";
    echo "<section><ul>";
    foreach ($items as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul></section>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title> Variables et emojis </title>
</head>
<body>
    <header>
        <h1> Variables et emojis </h1>
    </header>
    <h1>Tableau de classification des êtres vivants</h1>
    <?php
    foreach ($categories as $title => $items) {
        renderSection($title, $items);
    }
    ?>

    <footer>
        <p> &copy; <?= date('Y'); ?> - Variables et emojis </p>
    </footer>
</body>
</html>
