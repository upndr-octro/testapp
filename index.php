<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic PHP Page</title>
</head>
<body>
    <h1>Hello, World! This is a Basic PHP Page.</h1>
    
    <p>Current server time: <?php echo date('Y-m-d H:i:s'); ?></p>
    
    <?php
    // Example of a PHP variable and conditional statement
    $name = "Upendra";
    if ($name == "Upendra") {
        echo "<p>Welcome back, $name!</p>";
    } else {
        echo "<p>Hello, guest!</p>";
    }
    ?>
</body>
</html>
