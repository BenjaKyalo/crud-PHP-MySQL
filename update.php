<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $addressid = $_POST['address_id'];

        $firstname = $_POST['firstname'];

        $email = $_POST['email'];

        $street = $_POST['street'];

        $zipcode = $_POST['zipcode']; 

        $city = $_POST['city']; 

        $sql = "UPDATE `addresses` SET `name`='$name',`first_name`='$firstname',
        `email`='$email',`street`='$street',`zip_code`='$zipcode',`city`='$city' WHERE `id`='$addressid'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $addressid = $_GET['id']; 

    $sql = "SELECT * FROM `addresses` WHERE `id`='$addressid'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $firstname = $row['first_name'];

            $email = $row['email'];

            $street  = $row['street'];

            $zipcode = $row['zip_code'];

            $city = $row['city'];

            $id = $row['id'];

        } 

    ?>

        <h2>Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend> information:</legend>

            Name:<br>

            <input type="text" name="name" value="<?php echo $name; ?>">

            <input type="hidden" name="address_id" value="<?php echo $id; ?>">

            <br>

            First name:<br>

            <input type="text" name="firstname" value="<?php echo $firstname; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Street:<br>

            <input type="text" name="street" value="<?php echo $street; ?>">

            <br>

            zip code:<br>

            <input type="text" name="zipcode" value="<?php echo $zipcode; ?>">

            <br>

            City:<br>

            <input type="text" name="city" value="<?php echo $city; ?>">

            <br>

            
            <input type="submit" value="Update" name="update">
            <a class="btn btn-info" href="view.php">back</a>

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 

