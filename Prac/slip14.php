<?php
function fibonacci($n)
{
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
$num_terms = 5;
$fibonacci_sequence = fibonacci($num_terms);
echo "Fibonacci sequence up to $num_terms terms: \n";
foreach ($fibonacci_sequence as $term) {
}
echo $term . " ";
