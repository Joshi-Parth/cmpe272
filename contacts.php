<?php
$contactFile = 'contacts.txt';

if (file_exists($contactFile)) {
    $contactInfo = file($contactFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Initialize variables
    $location = "";
    $email = "";
    $phone = "";

    // Parse the contact information
    foreach ($contactInfo as $line) {
        $parts = explode(':', $line);
        if (count($parts) == 2) {
            $field = trim($parts[0]);
            $value = trim($parts[1]);

            switch ($field) {
                case 'Location':
                    $location = $value;
                    break;
                case 'Email':
                    $email = $value;
                    break;
                case 'Phone':
                    $phone = $value;
                    break;
            }
        }
    }
} else {
    echo "Contact file not found.";
}
?>

