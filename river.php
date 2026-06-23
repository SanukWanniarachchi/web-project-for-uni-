<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $width = $_POST["width"];
    $depth = $_POST["depth"];
    $speed = $_POST["speed"];

    if ($width == "" || $depth == "" || $speed == "") {
        $message = "Please fill all fields.";
    } elseif ($width <= 0 || $depth <= 0 || $speed <= 0) {
        $message = "All values must be greater than zero.";
    } else {
        $speedInMetersPerHour = $speed * 1000;
        $flowRate = $width * $depth * $speedInMetersPerHour;
        $message = "River Flow Rate is " . number_format($flowRate, 2) . " cubic meters per hour.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>River Flow Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <h1>River Flow Calculator</h1>
    </div>

    <div class="container">
        <div class="calculator-box">
            <h2>Calculate River Flow Rate</h2>

            <form method="post" action="river.php">
                <label>River Width (m)</label>
                <input type="number" step="any" name="width" placeholder="Enter width">

                <label>River Depth (m)</label>
                <input type="number" step="any" name="depth" placeholder="Enter depth">

                <label>Flow Speed (km/h)</label>
                <input type="number" step="any" name="speed" placeholder="Enter speed">

                <button type="submit">Calculate Flow Rate</button>
            </form>

            <p class="result"><?php echo $message; ?></p>

            <a href="index.html">Back to Home Page</a>
        </div>
    </div>
</body>
</html>
