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
        <h1>Math Quiz Settings</h1>
        <form method="post">
            <label for="num_questions">Number of Questions:</label>
            <input type="number" id="num_questions" name="num_questions" min="1" required><br><br>

            <label for="quiz_type">Quiz Type:</label>
            <select id="quiz_type" name="quiz_type" required>
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select><br><br>

            <button type="submit">Start Quiz</button>
        </form>
</body>
</html>