<?php
// Get form data
$name = $_POST['name'];
$eventName = $_POST['event_name'];
$description= $_POST['description'];
$eventType = $_POST['event_type'];
$eventDate = $_POST['event_date'];
$eventTime = $_POST['event_time'];

// Process event data (e.g., display on screen, log to file, etc.)
echo "Event submitted successfully!";

// Pass data to requests.php using session (optional for persistence)
session_start();
$_SESSION['events'][] = array(
    'name' => $name,
    'event_name' => $eventName,
    'description'=> $description,
    'event_type' => $eventType,
    'event_date' => $eventDate,
    'event_time' => $eventTime
);
?>