<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    // Handle image update
    if (!empty($_FILES['image']['tmp_name'])) {
        $targetDir = "uploads/";
        $imageName = basename($_FILES['image']['name']);
        $targetFile = $targetDir . $imageName;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if ($_FILES["image"]["size"] > 2000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        if ($uploadOk == 1 && move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            // Delete the old image from the server
            $query = "SELECT image FROM services WHERE id = '$id'";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $oldImage = $row['image'];
            if (file_exists("uploads/$oldImage")) {
                unlink("uploads/$oldImage");
            }

            // Update the service
            $query = "UPDATE services SET title = '$title', description = '$description', image = '$imageName' WHERE id = '$id'";
        }
    } else {
        // Update without changing the image
        $query = "UPDATE services SET title = '$title', description = '$description' WHERE id = '$id'";
    }

    if ($conn->query($query)) {
        echo "Service updated successfully!";
        header('Location: services.php'); // Redirect back to the services list
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $query = "SELECT * FROM services WHERE id = '$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Service</h1>
        <a href="services.php" class="btn btn-primary mb-3">Back to Services</a>

        <form method="POST" action="edit_services.php" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="mb-3">
                <label for="title" class="form-label">Service Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="<?= $row['title'] ?>" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" id="description" class="form-control" required><?= $row['description'] ?></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload New Image (Optional):</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" name="submit" class="btn btn-success">Update Service</button>
        </form>
    </div>
</body>
</html>
