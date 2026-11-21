<?php
$message = "";
$messageType = "";
$enteredName = "";
$enteredAge = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $enteredName = trim($_POST["name"] ?? "");
    $enteredAge = trim($_POST["age"] ?? "");

    if ($enteredName === "" || $enteredAge === "" || filter_var($enteredAge, FILTER_VALIDATE_INT) === false || (int)$enteredAge < 0 || (int)$enteredAge > 120) {
        $message = "Please enter a valid name and age (0–120).";
        $messageType = "error";
    } else {
        $safeName = htmlspecialchars($enteredName, ENT_QUOTES, "UTF-8");
        if ((int)$enteredAge < 18) {
            $message = "Hello, " . $safeName . ". You are not authorized to visit this site.";
            $messageType = "warning";
        } else {
            $message = "Welcome to this site, " . $safeName . "!";
            $messageType = "success";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application C | PHP LAB 10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar"><a class="brand" href="index.php">PHP LAB 10</a><a class="navlink" href="index.php">← All applications</a></header>
<main class="container narrow">
    <p class="eyebrow">APPLICATION C</p>
    <h1>Age Authorization Check</h1>
    <p class="intro">Enter a name and age. PHP will display the correct message.</p>
    <form class="form-card" method="post" action="app-c.php">
        <label for="name">Enter your name</label>
        <input id="name" type="text" name="name" maxlength="60" value="<?= htmlspecialchars($enteredName, ENT_QUOTES, "UTF-8") ?>" required>
        <label for="age">Enter your age</label>
        <input id="age" type="number" name="age" min="0" max="120" value="<?= htmlspecialchars($enteredAge, ENT_QUOTES, "UTF-8") ?>" required>
        <button class="button" type="submit">Check authorization</button>
    </form>
    <?php if ($message !== ""): ?>
        <div class="result <?= $messageType ?>">
            <h2><?= $message ?></h2>
        </div>
    <?php endif; ?>
</main>
<footer>PHP LAB 10 · Application C</footer>
</body>
</html>
