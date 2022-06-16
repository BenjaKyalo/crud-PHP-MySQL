<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $firstname = $_POST['firstname'];

    $email = $_POST['email'];

    $street = $_POST['street'];

    $zipcode = $_POST['zipcode'];

    $city = $_POST['city'];

    $sql = "INSERT INTO `addresses`(`name`, `first_name`, `email`, `street`, `zip_code`, 'city')
     VALUES ('$name','$firstname','$email','$street','$zipcode', '$city')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2> Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>address information:</legend>

    Name:<br>

    <input type="text" name="name">

    <br>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Street:<br>

    <input type="text" name="street">

    <br>

    Zip code:<br>

    <input type="text" name="zipcode">

    <br>

    City:<br>

    <input type="text" name="city">

    <br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>