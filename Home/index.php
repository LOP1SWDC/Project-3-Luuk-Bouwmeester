<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="description" content="Home pagina van restaurant Hot dasi Handi">
    <meta name="author" content="L. Bouwmeester">
    <meta name="keywords" content="">
    <title>Hot Dasi Handi - Home</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <?php include "../php_shared/header.php"; ?>

    <main>
        <?php
            $slideshowAfbeeldingen = [
                "img/slideshow_1.png",
                "img/slideshow_2.png",
                "img/slideshow_3.png"
            ];

            foreach ($slideshowAfbeeldingen as $afbeelding) {
                echo '<section class="home_slideshow">';
                echo '<img src="' . $afbeelding . '" alt="Foto van eten restaurant">';
                echo '</section>';
            }
        ?>

        <section class="home_text">
            <section>
                <h1>Welkom bij Hot Desi Handi</h1>
                <p>Ontdek de magie van de Indiaanse keuken en laat je smaakpapillen verwennen met onze heerlijke gerechten. Bij Hot Desi Handi combineren we eeuwenoude tradities met moderne culinaire technieken om een unieke en onvergetelijke eetervaring te creëren.</p>
                <p>Geniet van de rijke smaken, de exotische kruiden en de verse ingrediënten die de essentie vormen van de inheemse Indiaanse keuken. Of je nu op zoek bent naar een hartige curry, een knapperige samosa of een verfrissende mango lassi, we hebben voor elk wat wils.</p>
            </section>

            <section>
                <h1>Passie voor Kwaliteit</h1>
                <p>Bij Hot Desi Handi streven we naar niets minder dan de hoogste kwaliteit in al onze gerechten. Onze getalenteerde chef-koks werken met zorgvuldig geselecteerde ingrediënten om gerechten te creëren die niet alleen heerlijk smaken, maar ook een lust voor het oog zijn.</p>
                <p>We geloven in het gebruik van verse, lokale en seizoensgebonden ingrediënten om de authenticiteit en smaak van onze gerechten te waarborgen. Kom langs en ervaar de perfecte combinatie van uitmuntende service, warme gastvrijheid en exceptionele kwaliteit.</p>
            </section>

            <section>
                <h1>Reserveer Nu en Ontdek</h1>
                <p>Breng een bezoek aan Hot Desi Handi en laat ons je meenemen op een culinaire reis door de rijke smaken en tradities van de Indiaanse keuken. Of je nu een romantisch diner voor twee plant, een feestelijke gelegenheid viert of gewoon zin hebt in een smaakvolle maaltijd, we heten je graag welkom.</p>
                <p>Reserveer nu om te genieten van onze heerlijke gerechten, de gezellige sfeer en de warme gastvrijheid. We kijken ernaar uit om je te verwelkomen bij Hot Desi Handi, waar elke maaltijd een feest voor de zintuigen is.</p>
            </section>
        </section>
    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>