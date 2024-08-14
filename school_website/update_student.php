<?php
include 'db.php';
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
$father_mobile = $_POST['father_mobile'];
$mother_mobile = $_POST['mother_mobile'];
$other_mobile = $_POST['other_mobile'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$father_occupation = $_POST['father_occupation'];
$mother_occupation = $_POST['mother_occupation'];
$identification_mark_1 = $_POST['identification_mark_1'];
$identification_mark_2 = $_POST['identification_mark_2'];
$blood_group = $_POST['blood_group'];
$hobbies = $_POST['hobbies'];
$ambition = $_POST['ambition'];
$favorite_subject_1 = $_POST['favorite_subject_1'];
$favorite_subject_2 = $_POST['favorite_subject_2'];
$area_interested_1 = $_POST['area_interested_1'];
$area_interested_2 = $_POST['area_interested_2'];
$password = isset($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : null;
$photo = $_FILES['photo']['name'];
$target_dir = "images/";
$target_file = $target_dir . basename($photo);

if ($photo) {
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        $photo_query = ", photo='$photo'";
    } else {
        echo "Sorry, there was an error uploading your file.";
        exit;
    }
} else {
    $photo_query = "";
}

if ($password) {
    $password_query = ", password='$password'";
} else {
    $password_query = "";
}

$sql = "UPDATE students SET name='$name', dob='$dob', gender='$gender', email='$email', class='$class', house='$house', admission_number='$admission_number', religion='$religion', aadhar_number='$aadhar_number', caste='$caste', category='$category', permanent_address='$permanent_address', father_mobile='$father_mobile', mother_mobile='$mother_mobile', other_mobile='$other_mobile', father_name='$father_name', mother_name='$mother_name', father_occupation='$father_occupation', mother_occupation='$mother_occupation', identification_mark_1='$identification_mark_1', identification_mark_2='$identification_mark_2', blood_group='$blood_group', hobbies='$hobbies', ambition='$ambition', favorite_subject_1='$favorite_subject_1', favorite_subject_2='$favorite_subject_2', area_interested_1='$area_interested_1', area_interested_2='$area_interested_2' $password_query $photo_query WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Student updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
