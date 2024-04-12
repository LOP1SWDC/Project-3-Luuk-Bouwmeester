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

        <section class="dranken_secondary">
            <img src="img/wijn.jpg" alt="Wijn afbeelding">

                <section class="dranken_secondary_text">
                    <h1>Bent u misschien geinteresseerd in iets chiquers?</h1>
                    <p>Wij bieden ook dieverse wijnen aan!.</p>
                    <p>Ontdek ons uitgebreide assortiment van verfijnde wijnen uit verschillende streken en van gerenommeerde wijnhuizen. Of u nu op zoek bent naar een elegante rode wijn, een frisse witte wijn of een sprankelende champagne, wij hebben voor elk wat wils.</p>
                    <p>Wilt u meer weten over onze wijnen, hun smaakprofielen en de perfecte foodpairing? Neem dan gerust contact met ons op. Ons deskundige team staat klaar om u te voorzien van advies en aanbevelingen, zodat u kunt genieten van een onvergetelijke wijnervaring.</p>
                    <p>Proost op smaakvolle momenten en laat ons uw reis door de wereld van heerlijke wijnen begeleiden!</p>
                </section>
                
        </section>
        
    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>