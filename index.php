<!DOCTYPE html>
<html>
<head>
    <title>Bubble Sort in PHP</title>
</head>
<body>

<h2>Bubble Sort Program</h2>

<form method="post">
    <label>Enter integers separated by command:</label><br>
    <input type="text" name="numbers" required>
    <br><br>

    <label>Sort Order:</label><br>
    <select name="order">
        <option value="asc">Ascending</option>
        <option value="desc">Descending</option>
    </select>
    <br><br>

    <input type="submit" value="Sort">
</form>

<?php

function bubbleSort($arr, $order) {
    $n = count($arr);
    $swaps = 0;


    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            $condition = ($order === "asc")
                       ? ($arr[$j] > $arr[$j + 1])
                       : ($arr[$j] < $arr[$j + 1]);

            if ($condition) {
               
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                $swaps++;
            }
        }
    }

    return [$arr, $swaps];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $input = $_POST["numbers"];
    $order = $_POST["order"];

    
    $arr = array_map('intval', explode(",", $input));
    $original = $arr;

    
    list($sorted, $swaps) = bubbleSort($arr, $order);

    echo "<h3>Results:</h3>";
    echo "Original array: " . implode(", ", $original) . "<br>";
    echo "Sorted array ($order): " . implode(", ", $sorted) . "<br>";
    echo "Total swaps: $swaps <br>";
}

?>

</body>
</html>
