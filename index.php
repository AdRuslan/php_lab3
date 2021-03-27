<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Адигамов Руслан Равшанович, гр.201-321, лаб.раб.№3</title>
</head>
<body>
<header>
    <img src="Mospolytech_logo.jpg" alt="Mospolytech">
    <h1>Адигамов Руслан Равшанович, гр.201-321, лаб.раб.№3</h1>
</header>

<main>
    <div class="wrapper">
        <?php
        if (!isset($_GET['store']) && !isset($_GET['count'])) {
            $_GET['store'] = '';
            $_GET['count'] = 0;
        } else {
            if (isset($_GET['key'])) {
                $_GET['store'] .= $_GET['key'];
                $_GET['count']++;
            }
        }

        echo "<div class='result'>" . $_GET['store'] . "</div>";
        ?>

        <div class="keyboard">
            <a href="?key=1&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">1</a>
            <a href="?key=2&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">2</a>
            <a href="?key=3&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">3</a>
            <a href="?key=4&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">4</a>
            <a href="?key=5&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">5</a>
            <a href="?key=6&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">6</a>
            <a href="?key=7&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">7</a>
            <a href="?key=8&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">8</a>
            <a href="?key=9&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">9</a>
            <a href="?key=0&store=<?php echo $_GET['store']; ?>&count=<?php echo $_GET['count']; ?>">0</a>
            <a class="reset" href="/?key=&count=<?php echo $_GET['count']; ?>">СБРОС</a>
        </div>

    </div>
</main>

<footer>
    <?= "Количество нажатий: ".$_GET['count'] ?>
</footer>
</body>
</html>

