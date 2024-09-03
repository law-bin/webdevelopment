<?php
$dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
    or die("Unable to select database");

session_start();

if (!(isset($_SESSION['Aname']))) {
    echo "Unauthorized Access";
    return;
}

if (isset($_POST) & !empty($_POST)) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $createdby = $_POST['createdby'];
    $query = "INSERT INTO `events` (name, description, type, time, date , createdby ) 
    VALUES ('$name', '$desc', '$type', '$time', '$date' , '$createdby') ";

$res = mysqli_query($dbc, $query);
if ($res) {
    header('location: ../../events.php');
} else {
    $fmsg = "Failed to Insert data.";
    print_r($res);
}
     
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Enigma | Add Events</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>

    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../home.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Road Safety</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
          
            <li>
                <a href="#">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Event list</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Requests</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Users</span>
                </a>
            </li>
            
            <li class="log_out">
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            
            <div class="profile-details">
                <img src="https://t4.ftcdn.net/jpg/00/97/00/09/360_F_97000908_wwH2goIihwrMoeV9QF3BW6HtpsVFaNVM.jpg"
                    alt="profile">
                <span class="admin_name">
                    <?php echo $_SESSION["Aname"] ?>
                </span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>



        <style>
body {
    font-family: 'Poppins', sans-serif; /* Similar modern font */
    background-color: #f0f4fa; /* Light background */
    color: #333; /* Dark text color */
}

h2 {
    color: #333; /* Dark heading color */
    font-weight: 600;
    margin-bottom: 30px;
}

.container {

    width: 90%;
    max-width: 600px; /* Adjust width for form */
    margin: 0 auto;
    background-color: #ffffff; /* White background for form */
    padding: 30px;
    border-radius: 12px; /* Rounded corners */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.form-group label {
    font-weight: 500;
    color: #555; /* Slightly lighter text color for labels */
    margin-bottom: 8px;
    display: block;
}

.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd; /* Light border */
    margin-bottom: 20px;
    font-size: 14px;
    color: #333; /* Dark text color */
}

select.form-control {
    appearance: none;
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
    width: 100%;
    font-size: 14px;
    color: #333;
}

input[type="submit"].btn-primary {
    background-color: #4a90e2; /* Blue color for submit button */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
}

input[type="submit"].btn-primary:hover {
    background-color: #357ab7; /* Darker blue on hover */
}

.alert-danger {
    background-color: #ff6b6b; /* Red background for alert */
    color: white;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 20px;
}


        </style>
        <body>
    <div class="container">
        <?php if (isset($fmsg)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $fmsg; ?>
            </div>
        <?php } ?>

        <h2 style="padding-top: 120px; margin-left: 20px">Add New Event</h2>
        <form method="post" style="margin-left: 20px" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="" required />
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" name="desc" value="" required />
            </div>
            <div class="form-group">
                <label>Category: </label>
                <select name="type" class="form-control">
                    <option value="Onsite">Onsite</option>
                    <option value="Online">Online</option>
                </select>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" value="" />
            </div>
            <div class="form-group">
                <label>Time</label>
                <input type="time" class="form-control" name="time" value="" />
            </div>
            <div class="form-group">
                <label>Created By</label>
                <input type="text" class="form-control" name="createdby" value="" required />
            </div>
            



           



            <input type="submit" class="btn btn-primary" value="Add Event" />
        </form>
    </div>
</body>

        
        <?php include_once('../../templates/footer.php') ?>

</body>

</html>