<?php
// Your local user data
$myArr = array(
    "Martin Luther King",
    "Gandhi",
    "Trump",
    "Biden",
);

$remote_urls = [ 'https://peaceful-crag-29178-e57028cb57c2.herokuapp.com/users.php','http://hritik.us.to/cmpe-272-gym/users.php'];

$remoteData = array();
foreach ($remote_urls as $remote_url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $remote_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
    }

    curl_close($ch);

    if ($response === false) {
        echo 'cURL request failed';
    } else {
        $decodedData = json_decode($response);
        if ($decodedData === null) {
            echo 'JSON parsing failed';
        } else {
            $remoteData = array_merge($remoteData, $decodedData);
        }
    }
}

$mergedData = array_merge($myArr, $remoteData);

echo '<h1>All User Data</h1>';
echo '<ul>';

foreach ($mergedData as $user) {
    echo '<li>' . htmlspecialchars($user) . '</li>';
}

echo '</ul>';
?>

