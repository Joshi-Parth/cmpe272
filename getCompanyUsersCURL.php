<?php
// Your local user data
$myArr = array(
    "Martin Luther King",
    "Gandhi",
    "Trump",
    "Biden",
);

// Fetch data from the remote URL
$remoteData = array();

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://hritik.us.to/cmpe-272-gym/users.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
}

curl_close($ch);

if ($response === false) {
    echo 'cURL request failed';
} else {
    $remoteData = json_decode($response);
    if ($remoteData === null) {
        echo 'JSON parsing failed';
    }
}

// Merge local and remote data
$mergedData = array_merge($myArr, $remoteData);

// Display the merged data
echo '<h1>All User Data</h1>';
echo '<ul>';
foreach ($mergedData as $user) {
    echo '<li>' . htmlspecialchars($user) . '</li>';
}
echo '</ul>';
?>