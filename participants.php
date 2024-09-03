<!DOCTYPE html>
<html>
<head>
    <title>Event Requests</title>
</head>
<body>
    <h2>Event Requests</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Event Name</th>
            <th>Type</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        <tr>
            <td><?php echo $_GET['name']; ?></td>
            <td><?php echo $_GET['event_name']; ?></td>
            <td><?php echo $_GET['event_type']; ?></td>
            <td><?php echo $_GET['event_date']; ?></td>
            <td><?php echo $_GET['event_time']; ?></td>
        </tr>
    </table>
</body>
</html>