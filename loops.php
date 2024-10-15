<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tree Planting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: auto;
            text-align: center;
        }

        h1, h2 {
            color: #2e8b57;
        }

        pre {
            font-size: 20px;
            color: #4caf50;
            margin: 10px 0;
            white-space: pre-wrap;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            margin: 10px 0;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        @media (max-width: 600px) {
            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Exercise 1: Planting Trees 🌳</h1>

    <form method="post">
        <?php
        $treeCounts = [3, 8, 20];
        foreach ($treeCounts as $count) {
            echo "<div>
                    <button type='submit' name='plant' value='$count'>Plant $count Trees</button>
                  </div>";
        }
        ?>
    </form>

    <div id="result">
        <?php
        function displayTrees($number) {
            return str_repeat('🌳', $number);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['plant'])) {
            $numberOfTrees = intval($_POST['plant']);
            echo displayTrees($numberOfTrees) . '<br>';
        }
        ?>
    </div>

    <h2>Exercise 2: Planting More Trees 🌲🌴</h2>

    <div>
        <h3>Planting 🌲 (2 hours per tree)</h3>
        <?php
        $pineHours = [6, 8, 9];
        generatePlantingButtons($pineHours, 2, "plant_pine");
        ?>
        <div id="result_pine">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['plant_pine'])) {
                $hours = intval($_POST['plant_pine']);
                $numberOfPines = calculateTrees($hours, 2);
                echo "You can plant " . displayTrees($numberOfPines) . " during $hours hours.<br>";
            }
            ?>
        </div>
    </div>

    <div>
        <h3>Planting 🌴 (3 hours per tree)</h3>
        <?php
        $palmHours = [6, 2, 8];
        generatePlantingButtons($palmHours, 3, "plant_palms");
        ?>
        <div id="result_palms">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['plant_palms'])) {
                $hours = intval($_POST['plant_palms']);
                $numberOfPalms = calculateTrees($hours, 3);
                echo "You can plant " . displayTrees($numberOfPalms) . " during $hours hours.<br>";
            }
            ?>
        </div>
    </div>

    <?php
    function generatePlantingButtons($hoursArray, $hoursPerTree, $buttonName) {
        echo '<form method="post">';
        foreach ($hoursArray as $hour) {
            echo "<div>
                    <button type='submit' name='$buttonName' value='$hour'>Plant for $hour Hours</button>
                  </div>";
        }
        echo '</form>';
    }

    function calculateTrees($hours, $hoursPerTree) {
        return floor($hours / $hoursPerTree);
    }
    ?>

    <h1>Exercise 3: Planting a Forest 🌳🌲</h1>

    <?php
    function generateForest($columns, $rows, $alternate = false) {
        $forest = '';
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                $tree = $alternate ? ($i % 2 === 0 ? '🌳' : '🌲') : '🌳';
                $forest .= $tree;
            }
            $forest .= PHP_EOL;
        }
        return $forest;
    }

    function generateColumnAlternatingForest($columns, $rows) {
        $forest = '';
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                $tree = ($j % 2 === 0) ? '🌳' : '🌲';
                $forest .= $tree;
            }
            $forest .= PHP_EOL;
        }
        return $forest;
    }
    ?>

    <h2>Forest of 8 columns and 3 rows:</h2>
    <pre><?php echo generateForest(8, 3); ?></pre>

    <h2>Bigger forest of 40 columns and 25 rows:</h2>
    <pre><?php echo generateForest(40, 25); ?></pre>

    <h2>Forest of 10 columns and 5 rows with alternate types of trees:</h2>
    <pre><?php echo generateForest(10, 5, true); ?></pre>
    
    <h2>Forest of 7 columns and 8 rows with alternate types of trees in columns:</h2>
    <pre><?php echo generateColumnAlternatingForest(7, 8); ?></pre>

    <h1>Exercise 4: Planting Triangle Forests 🌳</h1>

    <?php
    function generateTriangleForest($rows, $reverse = false) {
        $forest = "";
        if ($reverse) {
            for ($i = $rows; $i > 0; $i--) {
                $forest .= str_repeat('🌳', $i) . PHP_EOL;
            }
        } else {
            for ($i = 1; $i <= $rows; $i++) {
                $forest .= str_repeat('🌳', $i) . PHP_EOL;
            }
        }
        return trim($forest);
    }
    ?>

    <h2>Normal Triangle Forest:</h2>
    <pre><?php echo generateTriangleForest(5); ?></pre>

    <h2>Reverse Triangle Forest:</h2>
    <pre><?php echo generateTriangleForest(5, true); ?></pre>

    <footer>
        <p>&copy; <?= date('Y'); ?> - Tree Planting</p>
    </footer>
</body>
</html>
