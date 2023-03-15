<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Get the account type, username, and password from the form data
	$account_type = $_POST['account_type'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	// Check the credentials against the accounts
	if ($account_type == 'teacher') {
		if (($username == 'Teacher1' && $password == 'Teach1') || 
			($username == 'Teacher2' && $password == 'Teach2') ||
			($username == 'Teacher3' && $password == 'Teach3')) {
			// Redirect to the teacher gradebook page
			header('Location: teacher_gradebook.php');
			exit();
		}
	} elseif ($account_type == 'student') {
		if (($username == 'Student1' && $password == 'Learn1') || 
			($username == 'Student2' && $password == 'Learn2')) {
			// Redirect to the student gradebook page
			header('Location: student_gradebook.php');
			exit();
		}
	}
	
	// If the credentials are invalid, display an error message
	echo '<script>alert("Invalid credentials!")</script>';
}
?>
