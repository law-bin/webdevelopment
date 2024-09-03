

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon"
        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMadras_Institute_of_Technology&psig=AOvVaw24Hw_au4PBbWiMiHhdyvE4&ust=1666952722381000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKCDkfuYgPsCFQAAAAAdAAAAABAE"
        type="image/x-icon">

    <title>Enigma | View participants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    

    <?php
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";

    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to select database");
    ?>
    <br><br>
    
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