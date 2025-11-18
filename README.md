# Sorting-Algorithm

# Bubble Sort in PHP

A simple PHP web application that demonstrates the Bubble Sort algorithm.  
Users can enter a list of integers and choose whether to sort them in ascending or descending order.  
The program outputs the original array, the sorted array, and the total number of swaps performed during sorting.

📌 Features

- Accepts user input (comma-separated integers)
- Implements Bubble Sort manually (no built-in sorting)
- Supports:
  - 🔼 Ascending sort
  - 🔽 Descending sort
- Displays:
  - Original array  
  - Sorted array  
  - Number of swaps  

🧮 How It Works

The sorting logic is implemented in the `bubbleSort()` function:

php
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
