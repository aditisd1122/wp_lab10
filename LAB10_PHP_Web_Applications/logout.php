<?php
session_start();

$name = $_SESSION["student_name"] ?? "User";
$startTime = $_SESSION["login_time"] ?? time();
$endTime = time();
$duration = max(0, $endTime - $startTime);

session_unset();
session_destroy();

$hours = floor($duration / 3600);
$minutes = floor(($duration % 3600) / 60);
$seconds = $duration % 60;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout | PHP LAB 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar"><a class="brand" href="index.php">PHP LAB 10</a><a class="navlink" href="index.php">← Home</a></header>
<main class="container narrow">
    <section class="result success">
        <p class="eyebrow">LOGOUT SUCCESSFUL</p>
        <h1>Thank you, <?= htmlspecialchars($name, ENT_QUOTES, "UTF-8") ?>!</h1>
        <p>You have successfully logged out.</p>
        <div class="duration">
            <span>Your session duration</span>
            <strong><?= sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds) ?></strong>
            <small>Hours : Minutes : Seconds</small>
        </div>
        <a class="button" href="app-a.php">Login again</a>
        <a class="text-link" href="index.php">Back to all applications</a>
    </section>
</main>
<footer>PHP LAB 10 · Application A</footer>
</body>
</html>
