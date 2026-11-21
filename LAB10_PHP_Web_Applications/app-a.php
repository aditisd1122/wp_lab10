<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["name"] ?? "");
    if ($name !== "") {
        $_SESSION["student_name"] = $name;
        $_SESSION["login_time"] = time();
        header("Location: app-a.php");
        exit;
    }
    $error = "Please enter your name.";
}

$isLoggedIn = isset($_SESSION["student_name"], $_SESSION["login_time"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application A | PHP LAB 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar"><a class="brand" href="index.php">PHP LAB 10</a><a class="navlink" href="index.php">← All applications</a></header>
<main class="container narrow">
    <p class="eyebrow">APPLICATION A</p>
    <h1>Name Input, Session & Logout</h1>
    <?php if ($isLoggedIn): ?>
        <section class="result success">
            <p class="eyebrow">WELCOME</p>
            <h2>Hello, <?= htmlspecialchars($_SESSION["student_name"], ENT_QUOTES, "UTF-8") ?>!</h2>
            <p>You are successfully logged in using a PHP session.</p>
            <p class="small">Session started at: <strong><?= date("h:i:s A", $_SESSION["login_time"]) ?></strong></p>
            <a class="button danger" href="logout.php">Logout</a>
        </section>
    <?php else: ?>
        <form class="form-card" method="post" action="app-a.php">
            <label for="name">Enter your name</label>
            <input id="name" type="text" name="name" placeholder="Your name" maxlength="60" required>
            <?php if (!empty($error)): ?><p class="error"><?= htmlspecialchars($error) ?></p><?php endif; ?>
            <button class="button" type="submit">Submit</button>
        </form>
    <?php endif; ?>
</main>
<footer>PHP LAB 10 · Application A</footer>
</body>
</html>
