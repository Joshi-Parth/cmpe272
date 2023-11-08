<?php

if (isset($_COOKIE['visited_products'])) {
    $displayProducts = [];
    $visitedProducts = json_decode($_COOKIE['visited_products'], true);
    // print_r($visitedProducts);
    $displayProducts = array_slice($visitedProducts, 0, 5);

    // Display the last five visited products
    echo '<h2>Last Five Visited Products</h2>';
    echo '<ul>';
    foreach ($displayProducts as $product) {
        echo '<li><a href="product.php?product=' . $product . '">' . $product . '</a></li>';
    }
    echo '</ul>';
} else {
    echo 'No products have been visited yet.';
}
?>
