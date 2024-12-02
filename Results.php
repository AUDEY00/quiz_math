<?php
session_start();
if (!isset($_SESSION['answers'], $_POST['response'])) {
    header('Location: Settings.php');
    exit;
}