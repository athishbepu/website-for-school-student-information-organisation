<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

include 'config.php';

if (isset($_GET['id'])) {
    $student_id = $_GET['id'];

    // Delete the student record from the database
    $sql = "DELETE FROM students WHERE id = $student_id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    header('Location: view_student.php');
    exit;
} else {
    echo "Invalid student ID";
    exit;
}
?>
