<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Module Mark Calculation Result</title>
</head>
<body>
    <h2>Module Mark Calculation Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve coursework marks from the form
        $coursework1 = $_POST['coursework1'];
        $coursework2 = $_POST['coursework2'];
        
        // Calculate the overall module mark
        $overall_mark = ($coursework1 * 0.4) + ($coursework2 * 0.6);
        
        // Display the overall module mark to the user
        echo "<p>Your overall module mark is: " . $overall_mark . "</p>";
    } else {
        echo "<p>No data submitted</p>";
    }
    ?>
</body>
</html>