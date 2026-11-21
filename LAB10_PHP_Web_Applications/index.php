<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB 10 - PHP Applications</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="topbar">
    <a class="brand" href="index.php">PHP LAB 10</a>
    <span class="tag">Web Programming 26–27</span>
</header>
<main class="container">
    <section class="hero">
        <p class="eyebrow">WEB PROGRAMMING LAB</p>
        <h1>PHP Web Applications</h1>
        <p class="intro">Three small PHP applications demonstrating sessions, date and time, and age-based access messages.</p>
    </section>

    <section class="cards">
        <article class="card">
            <div class="number">01</div>
            <h2>Name, Session & Logout</h2>
            <p>Enter your name, view a welcome page, and log out to see your session duration.</p>
            <a class="button" href="app-a.php">Open Application A</a>
        </article>
        <article class="card">
            <div class="number">02</div>
            <h2>Date, Time & Day</h2>
            <p>Display the current date, time, and day using PHP.</p>
            <a class="button" href="app-b.php">Open Application B</a>
        </article>
        <article class="card">
            <div class="number">03</div>
            <h2>Age Authorization</h2>
            <p>Enter a name and age to check the access message for the user.</p>
            <a class="button" href="app-c.php">Open Application C</a>
        </article>
    </section>
    <p class="note">This project uses PHP only. No database is required.</p>
</main>
<footer>© 2026 PHP LAB 10 · Student Web Programming Project</footer>
</body>
</html>
