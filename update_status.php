<?php
// Path to the JSON file
$json_file = 'website_status.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the current IP address of the user
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Get the current date and time
    $date_time = date('Y-m-d H:i:s');

    // Get the data sent from the JavaScript
    $status = $_POST['status'];
    $website_status_text = $_POST['website_status_text'];

    // Create an array to store the data
    $data = array(
        'status' => $status,
        'date_time' => $date_time,
        'ip_address' => $ip_address,
        'website_status_text' => $website_status_text
    );

    // Convert the array to JSON
    $json_data = json_encode($data);

    // Save the JSON data to a file
    file_put_contents($json_file, $json_data);

    echo "Status updated successfully!";
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // If the JSON file exists, read the data and return it
    if (file_exists($json_file)) {
        $json_data = file_get_contents($json_file);
        echo $json_data;
    } else {
        // If the file does not exist, return a default response
        echo json_encode(array(
            'status' => 'active',
            'date_time' => date('Y-m-d H:i:s'),
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'website_status_text' => 'Website is now active!'
        ));
    }
}
?>
