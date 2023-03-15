<?php

// Define the valid accounts
$accounts = array(
  'teacher' => array(
    'Teacher1' => 'Teach1',
    'Teacher2' => 'Teach2',
    'Teacher3' => 'Teach3'
  ),
  'student' => array(
    'Student1' => 'Learn1',
    'Student2' => 'Learn2'
  )
);

// Get the form data
$account_type = $_POST['account_type'];
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the account is valid
if (isset($accounts[$account_type]) && isset($accounts[$account_type][$username]) && $accounts[$account_type][$username] === $password) {
  // Redirect to the appropriate personalized portal
  if ($account_type === 'teacher') {
    header('Location: teacher.php');
    exit;
  } else {
    header('Location: student.php');
    exit;
  }
} else {
  // Invalid account, redirect back to the login page with an error message
  header('Location: index.php?error=invalid');
  exit;
}

?>
