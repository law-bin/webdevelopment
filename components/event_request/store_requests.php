<?php
$dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
    or die("Unable to select database");

session_start();

if (isset($_POST) && !empty($_POST)) {
    // Input validation
    $name = mysqli_real_escape_string($dbc, $_POST['name']);
    $event_name = mysqli_real_escape_string($dbc, $_POST['event_name']);
    $description = mysqli_real_escape_string($dbc, $_POST['description']);
    $event_type = mysqli_real_escape_string($dbc, $_POST['event_type']);
    $event_date = mysqli_real_escape_string($dbc, $_POST['event_date']);
    $event_time = mysqli_real_escape_string($dbc, $_POST['event_time']);

    $query = "INSERT INTO `requests` (name, event_name, description, event_type, event_time, event_date)
              VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($dbc, $query);
    $stmt->bind_param("ssssss", $name, $event_name, $description, $event_type, $event_time, $event_date);

    if ($stmt->execute()) {
        header('location: ../../requests.php');
    } else {
        $fmsg = "Failed to Insert data: " . $stmt->error;
        // Handle error, e.g., log the error, display a user-friendly message
    }

    $stmt->close();
}
?>