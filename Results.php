<?php
session_start();
if (!isset($_SESSION['answers'], $_POST['response'])) {
    header('Location: Settings.php');
    exit;
}

$answers = $_SESSION['answers'];
$responses = $_POST['response'];
$score = 0;

echo "<h1>Results</h1>";
foreach ($responses as $index => $response) {
    $correct = $answers[$index];
    if ($response == $correct) {
        echo "<p>Q" . ($index + 1) . ": Correct!</p>";
        $score++;
    } else {
        echo "<p>Q" . ($index + 1) . ": Incorrect. Correct answer: $correct</p>";
    }
}