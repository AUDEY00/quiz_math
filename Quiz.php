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
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 20px;
        }

        form {
            display: inline-block;
            text-align: left;
            margin-top: 20px;
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 15px 0;
        }

        label {
            font-weight: bold;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
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
