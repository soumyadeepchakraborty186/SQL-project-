<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'student_registration_db';
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . ' (' . $conn->connect_errno . ')');
}
if (isset($_POST['submit'])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $mobileNumber = $_POST["mobileNumber"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $pinCode = $_POST["pinCode"];
    $state = $_POST["state"];
    $country = $_POST["country"];
    $hobbies = implode(", ", $_POST["hobbies"]);
    $board_10th = $_POST["board_10th"];
    $percentage_10th = $_POST["percentage_10th"];
    $year_10th = $_POST["year_10th"];
    $board_12th = $_POST["board_12th"];
    $percentage_12th = $_POST["percentage_12th"];
    $year_12th = $_POST["year_12th"];
    $board_graduation = $_POST["board_graduation"];
    $percentage_graduation = $_POST["percentage_graduation"];
    $year_graduation = $_POST["year_graduation"];
    $sql = "INSERT INTO student_data (first_name, last_name, dob, email, mobile_number, gender, address, city, pin_code, state, country, hobbies, board_10th, percentage_10th, year_10th, board_12th, percentage_12th, year_12th, board_graduation, percentage_graduation, year_graduation) 
        VALUES ('$firstName', '$lastName', '$dob', '$email', '$mobileNumber', '$gender', '$address', '$city', '$pinCode', '$state', '$country', '$hobbies', '$board_10th', '$percentage_10th', '$year_10th', '$board_12th', '$percentage_12th', '$year_12th', '$board_graduation', '$percentage_graduation', '$year_graduation')";
    if (mysqli_query($conn, $sql)) {
        echo "New Details Entry inserted successfully !";
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>