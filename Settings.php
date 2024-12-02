<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $_SESSION['num_questions'] = $_POST['num_questions'];
    $_SESSION['quiz_type'] = $_POST['quiz_type'];
    header('Location: quiz.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Math Quiz Settings</title>
</head>
<body>
    
</body>
</html>