<?php
$dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
    or die("Unable to connect to the database");

session_start();




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
    $event_name = mysqli_real_escape_string($dbc, trim($_POST['event_name']));
    $description = mysqli_real_escape_string($dbc, trim($_POST['description']));
    $type = mysqli_real_escape_string($dbc, trim($_POST['type']));
    $event_date = mysqli_real_escape_string($dbc, trim($_POST['event_date']));
    $event_time = mysqli_real_escape_string($dbc, trim($_POST['event_time']));

    $query = "INSERT INTO `requests` (name, event_name, description, event_type, event_time, event_date) 
              VALUES ('$name', '$event_name', '$description', '$type', '$event_time', '$event_date')";

    $res = mysqli_query($dbc, $query);

    if ($res) {
        $success_msg = "Event successfully added!";
    } else {
        $fmsg = "Failed to insert data.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Request</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Event Request Form</h2>
        
        <?php if (isset($fmsg)) { ?>
            <div class="alert alert-danger"><?php echo $fmsg; ?></div>
        <?php } ?>
        <?php if (isset($success_msg)) { ?>
            <div class="alert alert-success"><?php echo $success_msg; ?></div>
        <?php } ?>
        
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Name</label>
                <input type="text" class="form-control" name="event_name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Type</label>
                <select class="form-select" name="type">
                    <option value="Onsite">Onsite</option>
                    <option value="Online">Online</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Date</label>
                <input type="date" class="form-control" name="event_date" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Event Time</label>
                <input type="time" class="form-control" name="event_time" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
