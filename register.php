<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "", "registration_form");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$roll_no = $_POST['roll_no'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$father_name = $_POST['father_name'];
$dob = $_POST['dob'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';

$department = isset($_POST['dept'])
    ? implode(",", $_POST['dept'])
    : '';

$course = $_POST['course'];

$city = $_POST['city'];
$address = $_POST['add1'];

$photo = "";

if(isset($_FILES['photo']) && $_FILES['photo']['error']==0)
{
    $photo = $_FILES['photo']['name'];

    move_uploaded_file(
        $_FILES['photo']['tmp_name'],
        "uploads/".$photo
    );
}

$sql = "INSERT INTO students
(
roll_no,
first_name,
last_name,
father_name,
dob,
contact_no,
email,
password,
gender,
department,
course,
student_photo,
city,
address
)
VALUES
(
'$roll_no',
'$first_name',
'$last_name',
'$father_name',
'$dob',
'$contact_no',
'$email',
'$password',
'$gender',
'$department',
'$course',
'$photo',
'$city',
'$address'
)";

if(mysqli_query($conn,$sql))
{
    echo "Registration Successful!";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>