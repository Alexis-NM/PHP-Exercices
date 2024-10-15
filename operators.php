<?php 

//Tu commences avec un stock de 12 cacahuètes 🥜.
//Met à jour le stock 🥜 en utilisant le bon opérateur et affiche-le pour chaque étape.
// 🐘 mange 1 🥜, décrémente ton stock
// 🐷 a très faim, il en mange 8 🥜, décrémente ton stock
// 🐿️ recharge 3 🥜 de son stock d'hiver
// 🐵 te fait une blague, et cache la moitié du reste 🥜, décrémente ton stock.
// 🐘🐷🐿️ sont en colère contre 🐵. Les pauvres 🐵 devraient multiplier le stock par 3 pour se faire pardonner.

$peanutStock = 12 ;
$peanutStock -= 1;
$peanutStock -= 8;
$peanutStock += 3;
$peanutStock /= 2;
$peanutStock *= 3;

echo "🥜 : $peanutStock" . PHP_EOL;

?>

<!-- // Output with this command : php operators.php -->