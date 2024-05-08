<?php
// Process form submission and add student record to database
// You would need to connect to your database here and sanitize inputs
$name = $_POST['name'];
$height = $_POST['height'];
$sex = $_POST['sex'];

// Process image upload
$picture = $_FILES['picture']['name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["picture"]["name"]);
move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file);

// Insert the data into your database
// $sql = "INSERT INTO students (name, picture, height, sex, ...) VALUES ('$name', '$picture', '$height', '$sex', ...)";
// Execute the SQL query

// Redirect back to the main page after adding the record
header("Location: new.html");
exit();
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone_number = $_POST['phone_number'];
    
    // Save the phone number to a file, database, or perform any other action
    // For simplicity, let's just display the phone number
    echo "<p>Phone number saved: $phone_number</p>";
}
?>
