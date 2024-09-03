<?php
// Database connection
$dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
    or die("Unable to select database");

session_start();

if (!(isset($_SESSION['Aname']))) {
    echo "Unauthorized Access";
    return;
}

// Handle deletion
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_query = "DELETE FROM user WHERE id = $delete_id";
    $delete_result = mysqli_query($dbc, $delete_query);

    if ($delete_result) {
        header("Location: user.php"); // Refresh the page after deletion
        exit();
    } else {
        echo "Failed to delete record: " . mysqli_error($dbc);
    }
}

// Fetch data from the requests table
$query = "SELECT * FROM user";
$result = mysqli_query($dbc, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($dbc));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
<?php
    include_once('./templates/sidebar.php');
    ?>

    <link rel="stylesheet" href="home.css">
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif; /* Similar modern font */
        background-color: #f0f4fa; /* Light background */
        color: #333; /* Dark text color */
    }

    h2 {
        color: #333; /* Dark heading color */
        font-weight: 600;
        text-align: left;
        margin-bottom: 0px;
        text-align: center;
    }

    .container {
    width: 90%;
    max-width: 1200px;
    margin: 40px auto 20px; /* Increased top margin for downward shift */
    background-color: #ffffff; /* White background for content */
    padding: 20px;
    border-radius: 12px; /* Rounded corners */
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 70px; /* Adds space above the entire table */
}
    
    .table thead {
        background-color: #f0f4fa; /* Light background for the header */
        text-align: left;
        font-weight: bold;
        color: #333; /* Dark text color */
    }

    .table thead th {
        padding: 15px 20px;
        font-size: 14px;
    }

    .table tbody td {
        padding: 15px 20px;
        font-size: 14px;
        color: #555; /* Slightly lighter text color for rows */
        border-bottom: 1px solid #eee; /* Subtle row separation */
    }

    .table tbody tr:hover {
        background-color: #f7fafc; /* Hover effect for rows */
        transition: background-color 0.2s ease-in-out;
    }

    .btn {
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 8px;
        border: none;
        cursor: pointer;
    }

    .btn-danger {
        background-color: #ff6b6b; /* Red color for delete button */
        color: #fff;
    }

    .btn-sm {
        padding: 5px 10px; /* Smaller padding for smaller buttons */
    }
</style>

<body>
    <div style="padding-top: 120px;">
        <h2>Users</h2> <!-- Header moved outside of the container -->
    </div>
    
    <div class="container">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>email</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['Username'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Mobile'] . "</td>";
                  
                    echo "<td><a href='./components/users/delete.php?delete_id=" . $row['UserID'] . "' class='btn btn-danger btn-sm'>Delete</a></td>";;
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php include_once('./templates/footer.php'); ?>
</body>


</html>

<?php
// Close the database connection
mysqli_close($dbc);
?>
