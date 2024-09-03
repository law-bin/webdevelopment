<?php
session_start();
if (!isset($_SESSION['Aname'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon"
        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMadras_Institute_of_Technology&psig=AOvVaw24Hw_au4PBbWiMiHhdyvE4&ust=1666952722381000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKCDkfuYgPsCFQAAAAAdAAAAABAE"
        type="image/x-icon">

    <title>Enigma | View participants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: 'Poppins', sans-serif; /* Similar to the font in the image */
        background-color: #f0f4fa; /* Light background similar to the image */
        color: #333;
    }

    .table {
        width: 100%;
        max-width: 1200px;
        margin: 20px auto;
        background-color: #ffffff; /* White background for the table */
        border-collapse: separate;
        border-spacing: 0;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
        border-radius: 12px; /* Rounded corners */
        overflow: hidden;
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

    .btn-primary {
        background-color: #4b7bec; /* Blue color similar to the buttons in the image */
        color: #fff;
    }

    .btn-info {
        background-color: #6c5ce7; /* Purple color for edit button */
        color: #fff;
    }

    .btn-danger {
        background-color: #ff6b6b; /* Red color for delete button */
        color: #fff;
    }

    .btn-sm {
        padding: 5px 10px; /* Smaller padding for smaller buttons */
    }

    /* Status Label Styles */
    .status-active {
        color: #fff;
        background-color: #32d296;
        border-radius: 12px;
        padding: 4px 10px;
        font-size: 12px;
    }

    .status-inactive {
        color: #fff;
        background-color: #ff6b6b;
        border-radius: 12px;
        padding: 4px 10px;
        font-size: 12px;
    }

    /* Align "Add New" button */
    .add-new-btn {
        background-color: #4b7bec;
        color: #fff;
        border-radius: 8px;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        margin-right: 20px;
        text-align: center;
    }

    /* Container Adjustments */
    .container {
        margin-top: 45px;
        padding: 20px;
    }
</style>

      <!------- 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $server; ?>css/style.css">

    Latest compiled and minified JavaScript
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
    ------>
<?php
    include_once('./templates/sidebar.php');
    ?>

    <?php
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";

    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to select database");
    ?>
    <br><br>
    <div class="row" style="margin-top: 75px; margin-bottom: 20px; margin-left: 20px; display: flex; justify-content: center;">
    <a href="./components/event/add.php"><button type="button" class="btn btn-primary ml-4 pl-2">Add New</button></a>
</div>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">Event ID</th>
                <th scope="col">Event Name</th>
                <th scope="col">Description</th>
                <th scope="col">Type</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
             

                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query1 = "select * from events";
            $exe1 = mysqli_query($dbc, $query1);
            while ($row1 = mysqli_fetch_array($exe1)) {
                $p_id = $row1['eid'];
                $name = $row1['name'];
                $desc = $row1['description'];
                $type = $row1['type'];
                $date = $row1['date'];
                $time = $row1['time'];
               
                echo "
                                <tr>
                                    <td>" . $p_id . "</td>
                                    <td>" . $name . "</td>
                                    <td>" . $desc . "</td>
                                    <td>" . $type . "</td>
                                    <td>" . $date . "</td>
                                    <td>" . $time . "</td>
                                    
                                    <td>
						<a href='./components/event/update.php?id=$p_id'><button type='button' class='btn btn-info'>Edit</button></a>

            <a href='./components/event/delete.php?id=$p_id'>
                <button type='button' class='btn btn-danger btn-xs'>Delete</button> </a>

            </td>

            </tr>";
            }

            ?>
        </tbody>
    </table>
    </div>
    <div class="col-lg-3"></div>
    </div>
    </div>
    </section>
    <?php
    include_once('./templates/footer.php');
    ?>
    </body>