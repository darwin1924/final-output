<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Fetch the image name of the service to delete
    $query = "SELECT image FROM services WHERE id = '$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $imageName = $row['image'];

    // Delete the service from the database
    $query = "DELETE FROM services WHERE id = '$id'";

    if ($conn->query($query)) {
        // Delete the image file from the server
        if (file_exists("uploads/$imageName")) {
            unlink("uploads/$imageName");
        }
        echo "Service deleted successfully!";
        header('Location: services.php'); // Redirect back to the services list
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
