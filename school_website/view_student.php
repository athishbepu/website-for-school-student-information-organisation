<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
// Include database connection
include 'config.php';

// Initialize search query
$searchQuery = "";

// Check if the form is submitted
if (isset($_POST['search'])) {
    $searchQuery = $_POST['searchQuery'];
}

// Modify the SQL query to include the search condition
$sql = "SELECT * FROM students WHERE name LIKE '%$searchQuery%' OR class LIKE '%$searchQuery%' OR house LIKE '%$searchQuery%' OR admission_number LIKE '%$searchQuery%'";
$result = $conn->query($sql);

// Get total number of students
$totalStudents = $result->num_rows;

// Reset the result to fetch again for displaying students
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .action-buttons button {
            padding: 5px 10px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #4caf50;
            color: white;
        }
        .print-btn {
            background-color: #008cba;
            color: white;
        }
        .delete-btn {
            background-color: #f44336;
            color: white;
        }
    </style>
    <script>
        function printStudentDetails(id) {
            var win = window.open('print_student.php?id=' + id, '_blank');
            win.focus();
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>View Students</h1>

        <!-- Display total number of students -->
        <p>Total Students: <?php echo $totalStudents; ?></p>

        <!-- Search Form -->
        <form method="post" action="">
            <input type="text" name="searchQuery" placeholder="Search by name, class, house, admission number" value="<?php echo htmlspecialchars($searchQuery); ?>">
            <button type="submit" name="search">Search</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>House</th>
                    <th>Admission Number</th>
                    <th>Religion</th>
                    <th>Aadhar Number</th>
                    <th>Caste</th>
                    <th>Category</th>
                    <th>Permanent Address</th>
                    <th>Mobile (Father)</th>
                    <th>Mobile (Mother)</th>
                    <th>Other Mobile</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Father's Occupation</th>
                    <th>Mother's Occupation</th>
                    <th>Identification Mark 1</th>
                    <th>Identification Mark 2</th>
                    <th>Blood Group</th>
                    <th>Hobbies</th>
                    <th>Ambition</th>
                    <th>Favorite Subject 1</th>
                    <th>Favorite Subject 2</th>
                    <th>Area Interested In 1</th>
                    <th>Area Interested In 2</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['dob'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td><img src='images/" . $row['photo'] . "' alt='Student Photo' width='50'></td>";  // Corrected path
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['class'] . "</td>";
                        echo "<td>" . $row['house'] . "</td>";
                        echo "<td>" . $row['admission_number'] . "</td>";
                        echo "<td>" . $row['religion'] . "</td>";
                        echo "<td>" . $row['aadhar_number'] . "</td>";
                        echo "<td>" . $row['caste'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>" . $row['permanent_address'] . "</td>";
                        echo "<td>" . $row['mobile_father'] . "</td>";
                        echo "<td>" . $row['mobile_mother'] . "</td>";
                        echo "<td>" . $row['other_mobile'] . "</td>";
                        echo "<td>" . $row['father_name'] . "</td>";
                        echo "<td>" . $row['mother_name'] . "</td>";
                        echo "<td>" . $row['father_occupation'] . "</td>";
                        echo "<td>" . $row['mother_occupation'] . "</td>";
                        echo "<td>" . $row['identification_mark1'] . "</td>";
                        echo "<td>" . $row['identification_mark2'] . "</td>";
                        echo "<td>" . $row['blood_group'] . "</td>";
                        echo "<td>" . $row['hobbies'] . "</td>";
                        echo "<td>" . $row['ambition'] . "</td>";
                        echo "<td>" . $row['favorite_subject1'] . "</td>";
                        echo "<td>" . $row['favorite_subject2'] . "</td>";
                        echo "<td>" . $row['area_interested1'] . "</td>";
                        echo "<td>" . $row['area_interested2'] . "</td>";
                        echo "<td class='action-buttons'>";
                        echo "<a href='edit_student.php?id=" . $row['id'] . "'><button class='edit-btn'>Edit</button></a>";
                        echo "<button class='print-btn' onclick='printStudentDetails(" . $row['id'] . ")'>Print</button>";
                        echo "<a href='delete_student.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this student?')\"><button class='delete-btn'>Delete</button></a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='31'>No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
