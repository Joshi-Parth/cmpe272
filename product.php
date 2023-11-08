<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
      <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
</head>
<body>
    <?php
        
        
        function updateVisitedProductsCookie($productName) {
            $visitedProducts = [];
            $display_products = [];
            if (isset($_COOKIE['visited_products'])) {
                $visitedProducts = json_decode($_COOKIE['visited_products'], true);
            }
        
            // Add the product to the list and keep only the last five products
            array_unshift($visitedProducts, $productName);
            $display_products = array_slice($visitedProducts, 0, 5);
        
            // Store the list in a cookie
            setcookie('visited_products', json_encode($visitedProducts), time() + 3600, '/');
            // print_r($display_products);
        }   
    // Check if the 'product' query parameter exists
    if (isset($_GET['product'])) {
        $selectedProduct = $_GET['product'];
        updateVisitedProductsCookie($selectedProduct);
        
        // Define an array of product data (you can expand this array)
        $products = array(
            array(
                "name" => "Tennis",
                'description' => 'Find Tennis Partners near you !',
                "image" => "tennis.jpg",
                
            ),
            array(
                "name" => "Soccer",
                'description' => 'Find Soccer Team Partners near you !.',
                "image" => "soccer.jpg",
            ),
            array(
                "name" => "Basketball",
                'description' => 'Find Basketball Team Partners near you !',
                "image" => "basketball.jpg",
            ),
            array(
                "name" => "Pickle Ball",
                'description' => 'Find Pickle Ball Partners near you !',
                "image" => "pickleball.jpg",
            ),
            array(
                "name" => "Table Tennis",
                'description' => 'Find Table Tennis Partners near you !',
                "image" => "tabletennis.jpg",
            ),
            array(
                "name" => "Badminton",
                'description' => 'Find Table Tennis Partners near you !',
                "image" => "badminton1.jpg",
            ),
            array(
                "name" => "Squash",
                'description' => 'Find Squash Partners near you !',
                "image" => "squash.jpg",
            ),
            array(
                "name" => "American Football",
                'description' => 'Find American Football Team Partners near you !',
                "image" => "americanFootball.jpg",
            ),
            array(
                "name" => "Snooker",
                'description' => 'Find Snooker Partners near you !',
                "image" => "snooker.jpg",
            ),
            array(
                "name" => "Baseball",
                'description' => 'Find Baseball Team Partners near you !',
                "image" => "baseball.jpg",
            ),
        );
             
        foreach ($products as $product) {
            if ($product['name'] == $selectedProduct) {
                // echo "Selected Product: " . $visitedProducts. "$$$";
                // print_r($visitedProducts);
                echo "<h1>{$product['name']}</h1>";
                echo "<p>{$product['description']}</p>";
                echo "<img src='assets/img/team/{$product['image']}' alt='{$product['name']}' width='300' height='500'>";
                break;
            }
        }
    } else {
        echo "Product parameter missing.";
    }
    ?>
</body>
</html>
