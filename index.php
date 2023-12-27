<?php
$insert = false;
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
}

// Assigning values from the form
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc']; // Added missing semicolon here

 // SQL query
 $sql = "INSERT INTO `travel_trip`.`travel_trip` (`Name`, `Age`, `Gender`, `Email`, `Phone Number`, `desc`, `Dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
 
// Execute the query
if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <img src="./Bg.jpeg" class="bg" alt="" />
    <div class="container">
      <h2>Welcome to College Trip Form</h2>
      <p>Enter your Detail to conform the particpation in the trip</p>
      <p class="submitform">Thank for submit this form</p>
      <form action="index.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter Your Name"
        />
        <input type="text" name="age" id="age" placeholder="Enter Your Age" />
        <input
          type="text"
          name="gender"
          id="gender"
          placeholder="Enter Your Gender"
        />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter Your Email"
        />
        <input
          type="text"
          id="phone"
          name="phone"
          placeholder="Enter Your Phone Number"
        />
        <textarea
          name="desc"
          id=""
          cols="30"
          rows="10"
          placeholder="Enter any other Details"
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
  </body>
  <script src="./script.js"></script>
</html>
