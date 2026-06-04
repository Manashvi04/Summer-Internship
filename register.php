<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect("localhost", "root", "", "registration_form");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Students Table Query
$roll_no = $_POST['roll_no'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$father_name = $_POST['father_name'];
$dob = $_POST['dob'];
$contact_no = $_POST['contact_no'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$dept_id = $_POST['dept_id'];
$course_id = $_POST['course_id'];
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
(roll_no,first_name,last_name,father_name,dob,contact_no,email,password,gender,dept_id,course_id,student_photo,city,address)VALUES
('$roll_no','$first_name','$last_name','$father_name','$dob','$contact_no','$email','$password','$gender','$dept_id','$course_id','$photo','$city','$address')";

//Courses Table Query
//$sql = "INSERT INTO courses (course_name) VALUES ('AI'),('Data Science'),('Cloud Computing'),('Digital Marketing'),('E-commerce')";

//Departments Table Query
//$sql = "INSERT INTO departments (dept_name) VALUES ('CSE'),('CE'),('IT'),('Ec'),('Civil'),('Mechanical')";

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