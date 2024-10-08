<?php

include 'dbconfig.php';

try {
    // Prepare an SQL statement for insertion into the Teachers table
    $stmt = $conn->prepare("INSERT INTO Teachers (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)");

    // Define the values to be inserted
    $first_name = 'Alice';
    $last_name = 'Johnson';
    $email = 'alice.johnson@example.com';
    $phone = '555-1234';

    // Execute the prepared statement with the data
    $stmt->execute([$first_name, $last_name, $email, $phone]);

    // Confirm the insertion
    echo "New teacher added successfully.";
} catch (PDOException $e) {
    // Handle any database errors
    echo "Failed to add teacher. Please try again later.";
    error_log($e->getMessage()); // Log the error for debugging
}
?>
