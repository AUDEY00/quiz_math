<?php
session_start();
if (!isset($_SESSION['answers'], $_POST['response'])) {
    header('Location: Settings.php');
    exit;
}

$answers = $_SESSION['answers'];
$responses = $_POST['response'];
$score = 0;