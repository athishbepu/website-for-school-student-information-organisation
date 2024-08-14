<?php
// Include database connection
include 'config.php';
// Get the student ID from the URL
$student_id = $_GET['id'];

// Fetch the student's details from the database
$sql = "SELECT * FROM students WHERE id = $student_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $student = $result->fetch_assoc();
} else {
    echo "No student found with this ID.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Student Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .student-details {
            margin: 20px 0;
        }
        .student-details img {
            max-width: 150px;
        }
        .student-details div {
            margin-bottom: 10px;
        }
        .student-details label {
            font-weight: bold;
        }
        .student-details span {
            margin-left: 10px;
        }
        .print-btn {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #008cba;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
        }
    </style>
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>
<body>
    <h1>Student Details</h1>
    <div class="student-details">
        <div><label>ID:</label><span><?php echo $student['id']; ?></span></div>
        <div><label>Name:</label><span><?php echo $student['name']; ?></span></div>
        <div><label>DOB:</label><span><?php echo $student['dob']; ?></span></div>
        <div><label>Gender:</label><span><?php echo $student['gender']; ?></span></div>
        <div><label>Photo:</label><span><img src='images/<?php echo $student['photo']; ?>' alt='Student Photo'></span></div>
        <div><label>Email:</label><span><?php echo $student['email']; ?></span></div>
        <div><label>Class:</label><span><?php echo $student['class']; ?></span></div>
        <div><label>House:</label><span><?php echo $student['house']; ?></span></div>
        <div><label>Admission Number:</label><span><?php echo $student['admission_number']; ?></span></div>
        <div><label>Religion:</label><span><?php echo $student['religion']; ?></span></div>
        <div><label>Aadhar Number:</label><span><?php echo $student['aadhar_number']; ?></span></div>
        <div><label>Caste:</label><span><?php echo $student['caste']; ?></span></div>
        <div><label>Category:</label><span><?php echo $student['category']; ?></span></div>
        <div><label>Permanent Address:</label><span><?php echo $student['permanent_address']; ?></span></div>
        <div><label>Mobile (Father):</label><span><?php echo $student['mobile_father']; ?></span></div>
        <div><label>Mobile (Mother):</label><span><?php echo $student['mobile_mother']; ?></span></div>
        <div><label>Other Mobile:</label><span><?php echo $student['other_mobile']; ?></span></div>
        <div><label>Father's Name:</label><span><?php echo $student['father_name']; ?></span></div>
        <div><label>Mother's Name:</label><span><?php echo $student['mother_name']; ?></span></div>
        <div><label>Father's Occupation:</label><span><?php echo $student['father_occupation']; ?></span></div>
        <div><label>Mother's Occupation:</label><span><?php echo $student['mother_occupation']; ?></span></div>
        <div><label>Identification Mark 1:</label><span><?php echo $student['identification_mark1']; ?></span></div>
        <div><label>Identification Mark 2:</label><span><?php echo $student['identification_mark2']; ?></span></div>
        <div><label>Blood Group:</label><span><?php echo $student['blood_group']; ?></span></div>
        <div><label>Hobbies:</label><span><?php echo $student['hobbies']; ?></span></div>
        <div><label>Ambition:</label><span><?php echo $student['ambition']; ?></span></div>
        <div><label>Favorite Subject 1:</label><span><?php echo $student['favorite_subject1']; ?></span></div>
        <div><label>Favorite Subject 2:</label><span><?php echo $student['favorite_subject2']; ?></span></div>
        <div><label>Area Interested In 1:</label><span><?php echo $student['area_interested1']; ?></span></div>
        <div><label>Area Interested In 2:</label><span><?php echo $student['area_interested2']; ?></span></div>
    </div>
    <button class="print-btn" onclick="printPage()">Print</button>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>

