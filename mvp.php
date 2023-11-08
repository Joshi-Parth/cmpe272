<?php
if (isset($_COOKIE['visited_products'])) {
    // Retrieve the visited products list from the cookie
    $visitedProducts = json_decode($_COOKIE['visited_products'], true);

    if (!empty($visitedProducts)) {
        // Count the occurrences of each product
        $productCounts = array_count_values($visitedProducts);

        // Sort the products by visit count in descending order
        arsort($productCounts);

        // Display the most visited product
        $mostVisitedProduct = key($productCounts);
        $visitCount = current($productCounts);

        echo '<h2>Most Visited Product</h2>';
        echo "<p>The most visited product is: <strong>{$mostVisitedProduct}</strong> (Visited {$visitCount} times).</p>";
    } else {
        echo 'No visited products yet.';
    }
} else {
    echo 'No visited products yet.';
}
?>
