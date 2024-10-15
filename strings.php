<?php  
// Exercice 1 : Le cycle de la vie
$seedling = '🌱';
$caterpillar = '🐛';
$spider = '🕷️';
$frog = '🐸';
$owl = '🦉';
$fox = '🦊';

//concatenation
$circleOfLife = $seedling . ' ' . $caterpillar . ' ' . $spider . ' ' . $frog . ' ' . $owl . ' ' . $fox;

// Exercice 2 : Mufasa

$king = 'Mufasa';
// first character of the King :
$firstCharacter = $king[0];
// last character of the King :
$lastCharacter = $king[-1];
// now the King is Simba :
$king = 'Simba';
// second character of the King :
$secondCharacter = $king[1];

// Exercice 3 : anagrams

$shinningAnagram = 'star';
$oldAnagram = 'raptor';

// Pour shinningAnagram
$anagram1 = '';
$anagram1 .= $shinningAnagram[3]; // 'r'
$anagram1 .= $shinningAnagram[2]; // 'a'
$anagram1 .= $shinningAnagram[1]; // 't'
$anagram1 .= $shinningAnagram[0]; // 's'

// Pour oldAnagram
$anagram2 = '';
$anagram2 .= $oldAnagram[2]; // 'p'
$anagram2 .= $oldAnagram[1]; // 'a'
$anagram2 .= $oldAnagram[0]; // 'r'
$anagram2 .= $oldAnagram[5]; // 'r'
$anagram2 .= $oldAnagram[4]; // 'o'
$anagram2 .= $oldAnagram[3]; // 't'

?>

<!DOCTYPE html>
<html>
<head>
    <title> Strings </title>
</head>

<body>
    <header>
        <h1> Strings </h1>
    </header>
    <section>
        <h1>Le cycle de la vie</h1>
        <p><?= $circleOfLife; ?></p>
    </section>
    <section>
        <h1>Mufasa</h1>
        <p>Le premier caractère du roi est : <?= $firstCharacter; ?></p>
        <p>Le dernier caractère du roi est : <?= $lastCharacter; ?></p>
        <p>Le roi est <?= $king; ?>.</p>
        <p>Le deuxième caractère du roi est : <?= $secondCharacter; ?></p>
    </section>
    <section>
        <h1>Anagrammes</h1>
        <p>Le nouvel anagramme de "<?= $shinningAnagram; ?>" est : <?= $anagram1; ?></p>
        <p>Le nouvel anagramme de "<?= $oldAnagram; ?>" est : <?= $anagram2; ?></p>
    </section>

    <footer>
        <p> &copy; <?= date('Y'); ?> - Strings </p>
    </footer>
</body>
</html>

