<?php
// Connect to the database
$dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
    or die("Unable to select database");

// Check if 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the image from the database
    $query = "SELECT image FROM events WHERE eid = ?";
    $stmt = mysqli_prepare($dbc, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $image);
        mysqli_stmt_fetch($stmt);

        // Check if the image data is retrieved
        if ($image) {
            // Set the content type header
            header("Content-type: image/jpeg"); // Adjust the MIME type if needed
            echo $image;
        } else {
            // No image found for the given ID
            echo "No image found for this ID.";
        }

        mysqli_stmt_close($stmt);
    } else {
        // Failed to prepare statement
        echo "Failed to prepare statement.";
    }
} else {
    // 'id' parameter is not set
    echo "No ID provided.";
}

mysqli_close($dbc);
?>
