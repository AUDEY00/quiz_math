<?php
session_start();
if (!isset($_SESSION['num_questions'], $_SESSION['quiz_type'])) {
    header('Location: Settings.php');
    exit;
}