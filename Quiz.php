<?php
session_start();
if (!isset($_SESSION['num_questions'], $_SESSION['quiz_type'])) {
    header('Location: Settings.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Math Quiz</title>
</head>
<body>
    <h1>Math Quiz</h1>
    <form action="results.php" method="post">
        <?php foreach ($questions as $index => $question): ?>
            <p>
                <label><?php echo "Q" . ($index + 1) . ": $question"; ?></label><br>
                <?php foreach ($options[$index] as $option): ?>
                    <input type="radio" name="response[<?php echo $index; ?>]" value="<?php echo $option; ?>" required>
                    <?php echo $option; ?><br>
                <?php endforeach; ?>
            </p>
        <?php endforeach; ?>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
