<?php

require_once 'config.php';
// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve and sanitize form inputs
    $name   = htmlspecialchars(trim($_POST['hospitalName']));
    $number = htmlspecialchars(trim($_POST['number']));
    $city   = htmlspecialchars(trim($_POST['city']));
    $speciality  = htmlspecialchars(trim($_POST['speciality']));

    // Validate required fields
    $errors = [];

    if (empty($name)) {
        $errors[] = "Full Name is required.";
    }
    if (empty($number)) {
        $errors[] = "Contact Number is required.";
    }
    if (empty($city)) {
        $errors[] = "City is required.";
    }
    if (empty($speciality)) {
        $errors[] = "Speciality is required.";
    }
    

    // If there are errors, display them
    if (!empty($errors)) {
        echo "<h3>Please correct the following errors:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
        echo "<a href='javascript:history.back()'>Go Back</a>";
    } else {
        // Prepare an SQL statement to insert the data into the database
        $sql = "INSERT INTO `hospital` (`name`, `number`, `city`, `speciality`) VALUES (?, ?, ?, ?)";

        // Initialize a statement and prepare the SQL query
        $stmt = mysqli_prepare($connect, $sql);

        // Check if the statement was prepared successfully
        if ($stmt === false) {
            die("Error preparing the SQL statement: " . mysqli_error($connect));
        }

        // Bind the parameters to the SQL query
        mysqli_stmt_bind_param($stmt, "ssss", $name, $number, $city, $speciality);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // Success message
            echo "<h2>Thank you for your submission, $name!</h2>";
            echo "<h3>Your Details:</h3>";
            echo "<p><strong>Full Name:</strong> $name</p>";
            echo "<p><strong>Contact Number:</strong> $number</p>";
            echo "<p><strong>City:</strong> $city</p>";
            echo "<p><strong>Speciality:</strong> $speciality</p>";
            
        } else {
            // Error message
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }

    // Close the database connection
    mysqli_close($connect);

} else {
    // If the form wasn't submitted, redirect back to the form
    header("Location: your_form_page.html"); // Replace with your actual form page
    exit();
}
?>
