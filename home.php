<?php
session_start();
if (!isset($_SESSION['Aname'])) {
    header('location:admin.php');
} else {
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";
    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to select database");
    $q1 = "SELECT COUNT('uid') AS u FROM user";
    $exe1 = mysqli_query($dbc, $q1);
   
    $q3 = "SELECT COUNT('eid') AS e FROM events";
    $exe3 = mysqli_query($dbc, $q3);
    $q4 = "SELECT COUNT('id') AS a FROM admin";
    $exe4 = mysqli_query($dbc, $q4);
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin page</title>
    <?php
    include_once('./templates/sidebar.php');
    ?>
    <div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Users</div>
                    <div class="number">
                        <?php while ($user = mysqli_fetch_array($exe1))
                            echo $user['u'] ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up to date</span>
                        </div>
                    </div>
                    <i class='bx bx-user-circle bx-tada cart one'></i>
                </div>




     





               <div class="box">
                    <div class="right-side">
                        <div class="box-topic">new requests</div>
                        <div class="number">
                        <?php
            // Database connection details
            $dbc = mysqli_connect("localhost", "root", "Red1!@#$", "webpagedb")
                or die("Unable to select database");

            // Retrieve the number of requests
            $sql = "SELECT COUNT(*) AS request_count FROM requests";
            $result = $dbc->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo $row['request_count'];
            } else {
                echo "0"; // Handle case where no requests are found
            }

            $dbc->close();
            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up to date</span>
                        </div>
                    </div>
                    <i class='bx  bxs-user-pin bx-flashing cart two'></i>
                </div>
                <div class="box">
                    





                    <div class="right-side">
                        <div class="box-topic">Total Events</div>
                        <div class="number">
                        <?php while ($user = mysqli_fetch_array($exe3))
                            echo $user['e'] ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up to date</span>
                        </div>
                    </div>
                    <i class='bx bxs-info-circle bx-spin cart three'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Admins</div>
                        <div class="number">
                        <?php while ($user = mysqli_fetch_array($exe4))
                            echo $user['a'] ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up to date</span>
                        </div>
                    </div>
                    <i class='bx bxs-home-smile bx-tada cart four'></i>
                </div>
            </div>
        </div>
        </section>
        <?php
                        include_once('./templates/footer.php');
                        ?>
    </body>

</html>