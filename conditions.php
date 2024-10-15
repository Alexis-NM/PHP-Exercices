<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        select, input[type="number"] {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>PHP Exercises</h1>

<!-- Exercise 1 : The Cutest One -->
<h2>Exercise 1 : The Cutest One</h2>
<form method="POST">
    <label for="cutestAnimal">Choose the cutest animal:</label>
    <select name="cutestAnimal" id="cutestAnimal">
        <option value="">-- Select an animal --</option>
        <option value="🐼">🐼 Panda</option>
        <option value="🐱">🐱 Cat</option>
        <option value="🕷️">🕷️ Spider</option>
    </select>
    <button type="submit" name="submitCute">Submit</button>
</form>
<div class="result">
    <?php
    if (isset($_POST['submitCute'])) {
        $cutestAnimal = $_POST['cutestAnimal'];
        if ($cutestAnimal === '🐼') {
            echo "You are right, pandas are so cuuute (and they can do kung fu !)";
        } elseif ($cutestAnimal === '🐱') {
            echo "Little kittens are cute too (just before scratching you slyly 🩹...)";
        } elseif ($cutestAnimal === '🕷️') {
            echo "Erk, you're a creepy one.";
        } else {
            echo "Please choose the cutest animal in this list 🐼🐱🕷️";
        }
    }
    ?>
</div>

<!-- Exercise 2 : Biodiversity Protection -->
<h2>Exercise 2 : Biodiversity Protection</h2>
<form method="POST">
    <label for="animalPopulation">Choose an animal's population:</label>
    <select name="animalPopulation" id="animalPopulation">
        <option value="0">🦖</option>
        <option value="150">🐘</option>
        <option value="1000">🐼</option>
        <option value="1000000000">🐱</option>
    </select>
    <button type="submit" name="submitPopulation">Submit</button>
</form>
<div class="result">
    <?php
    if (isset($_POST['submitPopulation'])) {
        $animalPopulation = (int)$_POST['animalPopulation'];
        if ($animalPopulation === 0) {
            echo "The animal is extinct.";
        } elseif ($animalPopulation < 200) {
            echo "The animal is critically endangered.";
        } elseif ($animalPopulation < 3000) {
            echo "The animal is threatened.";
        } else {
            echo "The population is not threatened.";
        }
    }
    ?>
</div>

<!-- Exercise 3 : Dangerous Animals -->
<h2>Exercise 3 : Dangerous Animals</h2>
<form method="POST">
    <label for="isCarnivorous">Is the animal carnivorous?</label>
    <select name="isCarnivorous" id="isCarnivorous">
        <option value="true">Yes</option>
        <option value="false">No</option>
    </select>
    <label for="weight">Animal's weight (in kg):</label>
    <input type="number" name="weight" id="weight" min="0" required>
    <button type="submit" name="submitDanger">Submit</button>
</form>
<div class="result">
    <?php
    if (isset($_POST['submitDanger'])) {
        $isCarnivorous = ($_POST['isCarnivorous'] === 'true');
        $weight = (int)$_POST['weight'];
        if (($isCarnivorous && $weight > 50) || $weight > 1000) {
            echo "Ouch, you should run !";
        } else {
            echo "It is gentle as a lamb 🐑.";
        }
    }
    ?>
</div>

</body>
</html>