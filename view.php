<?php 

include "config.php";

$sql = "SELECT * FROM addresses";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>addresses</h2>

        <table class="table">

            <thead>

                <tr>

                <th>ID</th>

                <th>Name</th>

                <th>First Name</th>

                <th>Email</th>

                <th>Street</th>

                <th>Zip code</th>

                <th>City</th>
                
                </tr>

            </thead>

            <tbody> 

                <?php

                    if ($result->num_rows > 0) {

                        while ($row = $result->fetch_assoc()) {

                ?>

                            <tr>

                            <td><?php echo $row['id']; ?></td>

                            <td><?php echo $row['name']; ?></td>

                            <td><?php echo $row['first_name']; ?></td>

                            <td><?php echo $row['email']; ?></td>

                            <td><?php echo $row['street']; ?></td>

                            <td><?php echo $row['zip_code']; ?></td>

                            <td><?php echo $row['city']; ?></td>

                            <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                            </tr>                       

                <?php       }

                    }

                ?>                

            </tbody>

        </table>
        <a href="json.php" class="btn btn-warning pull-left"> Export JSON</a>
        <a href="xml.php" class="btn btn-info pull-center-left"> Export XML</a>

    </div> 

</body>

</html>

