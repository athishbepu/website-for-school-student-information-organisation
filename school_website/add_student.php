<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $house = $_POST['house'];
    $admission_number = $_POST['admission_number'];
    $religion = $_POST['religion'];
    $aadhar_number = $_POST['aadhar_number'];
    $caste = $_POST['caste'];
    $category = $_POST['category'];
    $permanent_address = $_POST['permanent_address'];
    $mobile_father = $_POST['mobile_father'];
    $mobile_mother = $_POST['mobile_mother'];
    $other_mobile = $_POST['other_mobile'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $father_occupation = $_POST['father_occupation'];
    $mother_occupation = $_POST['mother_occupation'];
    $identification_mark1 = $_POST['identification_mark1'];
    $identification_mark2 = $_POST['identification_mark2'];
    $blood_group = $_POST['blood_group'];
    $hobbies = $_POST['hobbies'];
    $ambition = $_POST['ambition'];
    $favorite_subject1 = $_POST['favorite_subject1'];
    $favorite_subject2 = $_POST['favorite_subject2'];
    $area_interested1 = $_POST['area_interested1'];
    $area_interested2 = $_POST['area_interested2'];

    $photo = $_FILES['photo']['name'];
    $target = "images/".basename($photo);
    move_uploaded_file($_FILES['photo']['tmp_name'], $target);

    $sql = "INSERT INTO students (name, dob, gender, photo, email, class, house, admission_number, religion, aadhar_number, caste, category, permanent_address, mobile_father, mobile_mother, other_mobile, father_name, mother_name, father_occupation, mother_occupation, identification_mark1, identification_mark2, blood_group, hobbies, ambition, favorite_subject1, favorite_subject2, area_interested1, area_interested2) VALUES ('$name', '$dob', '$gender', '$photo', '$email', '$class', '$house', '$admission_number', '$religion', '$aadhar_number', '$caste', '$category', '$permanent_address', '$mobile_father', '$mobile_mother', '$other_mobile', '$father_name', '$mother_name', '$father_occupation', '$mother_occupation', '$identification_mark1', '$identification_mark2', '$blood_group', '$hobbies', '$ambition', '$favorite_subject1', '$favorite_subject2', '$area_interested1', '$area_interested2')";

    if ($conn->query($sql) === TRUE) {
        echo "New student added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" , initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Add Student</h1>
    <form method="post" enctype="multipart/form-data" class = container>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="dob">DOB:</label>
        <input type="date" name="dob" required><br>
        <label for="gender">Gender:</label>
        <input type="text" name="gender" required><br>
        <label for="photo">Photo:</label>
        <input type="file" name="photo" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="class">Class:</label>
        <input type="text" name="class" required><br>
        <label for="house">House:</label>
        <input type="text" name="house"><br>
        <label for="admission_number">Admission Number:</label>
        <input type="text" name="admission_number" required><br>
        <label for="religion">Religion:</label>
        <input type="text" name="religion"><br>
        <label for="aadhar_number">Aadhar Number:</label>
        <input type="text" name="aadhar_number" required><br>
        <label for="caste">Caste:</label>
        <input type="text" name="caste"><br>
        <label for="category">Category:</label>
        <input type="text" name="category"><br>
        <label for="permanent_address">Permanent Address:</label>
        <textarea name="permanent_address" required></textarea><br>
        <label for="mobile_father">Mobile Number of Father:</label>
        <input type="text" name="mobile_father" required><br>
        <label for="mobile_mother">Mobile Number of Mother:</label>
        <input type="text" name="mobile_mother"><br>
        <label for="other_mobile">Any Other Mobile No Number, If Available:</label>
        <input type="text" name="other_mobile"><br>
        <label for="father_name">Father's Name:</label>
        <input type="text" name="father_name" required><br>
        <label for="mother_name">Mother's Name:</label>
        <input type="text" name="mother_name" required><br>
        <label for="father_occupation">Father's Occupation:</label>
        <input type="text" name="father_occupation"><br>
        <label for="mother_occupation">Mother's Occupation:</label>
        <input type="text" name="mother_occupation"><br>
        <label for="identification_mark1">Identification Mark 1:</label>
        <textarea name="identification_mark1"></textarea><br>
        <label for="identification_mark2">Identification Mark 2:</label>
        <textarea name="identification_mark2"></textarea><br>
        <label for="blood_group">Blood Group:</label>
        <input type="text" name="blood_group"><br>
        <label for="hobbies">Hobbies:</label>
        <textarea name="hobbies"></textarea><br>
        <label for="ambition">Ambition:</label>
        <textarea name="ambition"></textarea><br>
        <label for="favorite_subject1">Favorite Subject 1:</label>
        <input type="text" name="favorite_subject1"><br>
        <label for="favorite_subject2">Favorite Subject 2:</label>
        <input type="text" name="favorite_subject2"><br>
        <label for="area_interested1">Area Interested In:</label>
        <textarea name="area_interested1"></textarea><br>
        <label for="area_interested2">Area Interested In:</label>
        <textarea name="area_interested2"></textarea><br>
        <button type="submit">Add Student</button>
    </form>
</body>
</html>
