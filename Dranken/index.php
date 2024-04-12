<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="description" content="Dranken pagina van restaurant Hot dasi Handi">
    <meta name="author" content="L. Bouwmeester">
    <meta name="keywords" content="">
    <title>Hot Dasi Handi - Dranken</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <?php include "../php_shared/header.php"; ?>

    <main>

    <section class="dranken_main">

            <section class="dranken_text">
                <h1>Welkom bij onze dranken!</h1>
                <p>Hier vindt je al onze dranken.</p>
            </section>

            <section class="dranken_containers">
                <?php
                    $gerechten = [
                        [
                            "naam" => "7 up",
                            "img" => "img/7up.jpg",
                            "prijs" => "$2,75"
                        ],
                        [
                            "naam" => "Cola",
                            "img" => "img/cola.jpg",
                            "prijs" => "$2,50"
                        ],
                        [
                            "naam" => "Dr pepper",
                            "img" => "img/dr_pepper.jpg",
                            "prijs" => "$2,00"
                        ],
                        [
                            "naam" => "Pepsi",
                            "img" => "img/pepsi.jpg",
                            "prijs" => "$2,50"
                        ],
                        [
                            "naam" => "Ice tea",
                            "img" => "img/ice_tea.jpg",
                            "prijs" => "$2,50"
                        ],
                        [
                            "naam" => "Fanta",
                            "img" => "img/fanta.jpg",
                            "prijs" => "$2,25"
                        ],
                    ];

                    foreach ($gerechten as $gerecht) {
                        echo '<section class="drank_single">';
                        echo '<img src=' . $gerecht['img'] . '>';
                        echo '<h1>' . $gerecht['naam'] . '</h1>';
                        echo '<p>Prijs: ' . $gerecht['prijs'] . '</p>';
                        echo '</section>';
                    }
                ?>
        </section>

    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>