<?php
include('config.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM students WHERE id='$id'");
    $student = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
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

    if ($_FILES['photo']['name']) {
        $photo = $_FILES['photo']['name'];
        $target = "images/".basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $target);
        $photo_update = ", photo='$photo'";
    } else {
        $photo_update = "";
    }

    $sql = "UPDATE students SET name='$name', dob='$dob', gender='$gender', email='$email', class='$class', house='$house', admission_number='$admission_number', religion='$religion', aadhar_number='$aadhar_number', caste='$caste', category='$category', permanent_address='$permanent_address', mobile_father='$mobile_father', mobile_mother='$mobile_mother', other_mobile='$other_mobile', father_name='$father_name', mother_name='$mother_name', father_occupation='$father_occupation', mother_occupation='$mother_occupation', identification_mark1='$identification_mark1', identification_mark2='$identification_mark2', blood_group='$blood_group', hobbies='$hobbies', ambition='$ambition', favorite_subject1='$favorite_subject1', favorite_subject2='$favorite_subject2', area_interested1='$area_interested1', area_interested2='$area_interested2' $photo_update WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Student updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Edit Student</h1>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $student['name']; ?>" required><br>
        <label for="dob">DOB:</label>
        <input type="date" name="dob" value="<?php echo $student['dob']; ?>" required><br>
        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="<?php echo $student['gender']; ?>" required><br>
        <label for="photo">Photo:</label>
        <input type="file" name="photo"><br>
        <img src="images/<?php echo $student['photo']; ?>" alt="Photo" width="100"><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $student['email']; ?>" required><br>
        <label for="class">Class:</label>
        <input type="text" name="class" value="<?php echo $student['class']; ?>" required><br>
        <label for="house">House:</label>
        <input type="text" name="house" value="<?php echo $student['house']; ?>"><br>
        <label for="admission_number">Admission Number:</label>
        <input type="text" name="admission_number" value="<?php echo $student['admission_number']; ?>" required><br>
        <label for="religion">Religion:</label>
        <input type="text" name="religion" value="<?php echo $student['religion']; ?>"><br>
        <label for="aadhar_number">Aadhar Number:</label>
        <input type="text" name="aadhar_number" value="<?php echo $student['aadhar_number']; ?>" required><br>
        <label for="caste">Caste:</label>
        <input type="text" name="caste" value="<?php echo $student['caste']; ?>"><br>
        <label for="category">Category:</label>
        <input type="text" name="category" value="<?php echo $student['category']; ?>"><br>
        <label for="permanent_address">Permanent Address:</label>
        <textarea name="permanent_address" required><?php echo $student['permanent_address']; ?></textarea><br>
        <label for="mobile_father">Mobile Number of Father:</label>
        <input type="text" name="mobile_father" value="<?php echo $student['mobile_father']; ?>" required><br>
        <label for="mobile_mother">Mobile Number of Mother:</label>
        <input type="text" name="mobile_mother" value="<?php echo $student['mobile_mother']; ?>"><br>
        <label for="other_mobile">Any Other Mobile No Number, If Available:</label>
        <input type="text" name="other_mobile" value="<?php echo $student['other_mobile']; ?>"><br>
        <label for="father_name">Father's Name:</label>
        <input type="text" name="father_name" value="<?php echo $student['father_name']; ?>" required><br>
        <label for="mother_name">Mother's Name:</label>
        <input type="text" name="mother_name" value="<?php echo $student['mother_name']; ?>" required><br>
        <label for="father_occupation">Father's Occupation:</label>
        <input type="text" name="father_occupation" value="<?php echo $student['father_occupation']; ?>"><br>
        <label for="mother_occupation">Mother's Occupation:</label>
        <input type="text" name="mother_occupation" value="<?php echo $student['mother_occupation']; ?>"><br>
        <label for="identification_mark1">Identification Mark 1:</label>
        <textarea name="identification_mark1"><?php echo $student['identification_mark1']; ?></textarea><br>
        <label for="identification_mark2">Identification Mark 2:</label>
        <textarea name="identification_mark2"><?php echo $student['identification_mark2']; ?></textarea><br>
        <label for="blood_group">Blood Group:</label>
        <input type="text" name="blood_group" value="<?php echo $student['blood_group']; ?>"><br>
        <label for="hobbies">Hobbies:</label>
        <textarea name="hobbies"><?php echo $student['hobbies']; ?></textarea><br>
        <label for="ambition">Ambition:</label>
        <textarea name="ambition"><?php echo $student['ambition']; ?></textarea><br>
        <label for="favorite_subject1">Favorite Subject 1:</label>
        <input type="text" name="favorite_subject1" value="<?php echo $student['favorite_subject1']; ?>"><br>
        <label for="favorite_subject2">Favorite Subject 2:</label>
        <input type="text" name="favorite_subject2" value="<?php echo $student['favorite_subject2']; ?>"><br>
        <label for="area_interested1">Area Interested In:</label>
        <textarea name="area_interested1"><?php echo $student['area_interested1']; ?></textarea><br>
        <label for="area_interested2">Area Interested In:</label>
        <textarea name="area_interested2"><?php echo $student['area_interested2']; ?></textarea><br>
        <button type="submit">Update Student</button>
    </form>
</body>
</html>
