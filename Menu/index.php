<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="description" content="Menu pagina van restaurant Hot dasi Handi">
    <meta name="author" content="L. Bouwmeester">
    <meta name="keywords" content="">
    <title>Hot Dasi Handi - Menu</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <?php include "../php_shared/header.php"; ?>

    <main>
        <section class="menu_text">
            <h1>Welkom bij onze menu!</h1>
            <p>Hier vindt je ons menu waarbij al onze gerechten.</p>
        </section>

        <section class="menu_gerechten">
            <?php
                $gerechten = [
                    [
                        "naam" => "Tandoori Kip",
                        "ingredienten" => "Kipfilet gemarineerd in yoghurt, garam masala, en kruiden, geroosterd in een tandoor-oven",
                        "prijs" => "$15,50"
                    ],
                    [
                        "naam" => "Butter Chicken",
                        "ingredienten" => "Gegrilde kipfilet in een romige tomatensaus met boter en Indiase kruiden",
                        "prijs" => "$14,99"
                    ],
                    [
                        "naam" => "Prawn Biryani",
                        "ingredienten" => "Gekruide garnalen en basmatirijst gestoomd in een aromatische mix van specerijen",
                        "prijs" => "$18,50"
                    ],
                    [
                        "naam" => "Palak Paneer",
                        "ingredienten" => "Spinazie gekookt met Indiase kaas (paneer), tomaten, uien en kruiden",
                        "prijs" => "$12,99"
                    ],
                    [
                        "naam" => "Naan Brood",
                        "ingredienten" => "Luchtig, versgebakken platbrood met knoflook en koriander",
                        "prijs" => "$4,50"
                    ],
                    [
                        "naam" => "Samosa",
                        "ingredienten" => "Krokante deeghapjes gevuld met aardappel, erwten en specerijen",
                        "prijs" => "$3,99"
                    ],
                    [
                        "naam" => "Mango Lassi",
                        "ingredienten" => "Verfrissende yoghurtdrank met mango, melk en een vleugje kardemom",
                        "prijs" => "$4,99"
                    ]
                ];

                foreach ($gerechten as $gerecht) {
                    echo '<section class="menu_gerecht">';
                    echo '<h1>' . $gerecht['naam'] . '</h1>';
                    echo '<p>Ingrediënten: ' . $gerecht['ingredienten'] . '</p>';
                    echo '<p>Prijs: ' . $gerecht['prijs'] . '</p>';
                    echo '</section>';
                }
            ?>
        </section>
    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>