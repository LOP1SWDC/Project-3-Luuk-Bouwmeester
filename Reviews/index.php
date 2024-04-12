<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="description" content="Reviews pagina van restaurant Hot dasi Handi">
    <meta name="author" content="L. Bouwmeester">
    <meta name="keywords" content="">
    <title>Hot Dasi Handi - Reviews</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <?php include "../php_shared/header.php"; ?>

    <main>
        <section class="review_text">
            <h1>Welkom bij de reviews!</h1>
            <p>Hier vindt je wat mensen vinden over onze restaurant.</p>
        </section>

        <?php
            $reviews = array(
                array(
                    "naam" => "John",
                    "beschrijving" => "Geweldige ervaring! Het eten was heerlijk en de service was uitstekend. Ik raad de Tandoori Kip ten zeerste aan.",
                    "rating" => "5"
                    ),
                array(
                    "naam" => "Lisa",
                    "beschrijving" => "Heerlijk eten en een gezellige sfeer. De Butter Chicken was absoluut verrukkelijk. Ik kom zeker terug!",
                    "rating" => "4"
                ),
                    array(
                    "naam" => "David",
                    "beschrijving" => "Goed eten, maar de service kan beter. De Prawn Biryani was smaakvol, maar de wachttijd was een beetje lang.",
                    "rating" => "3"
                )
            );

            // Functie om i.p.v. nummers omtezetten naar sterren.
            function genereerSterRating($rating, $totaalSterren) {
                // Dit zijn de AASCI-Symolen die we gaan gebruiken.
                $ingevuldeSter = "★";
                $legeSter = "☆";
            
                // De string is eerst leeg, deze gaan we vullen met sterren.
                $return = "";

                // Loop door maximale sterren die we kunnen hebben.
                for ($i = 1; $i <= $totaalSterren; $i++) {
                    // Als we onder de rating zijn (dus rating = 3, dan is tot en met 3 dit true), vullen we een ingevulde ster doe.
                    if ($i <= $rating) {
                        $return .= $ingevuldeSter;

                    // Zo niet, moeten we een lege ster toevoegen.
                    } else {
                        $return .= $legeSter;
                    }
                }
            
                // Return de sterren.
                return $return;
            }
            
            // Maak dit als een constant zodat het makkelijker leesbaar is waar de 5 voor is.
            $MAXIMALE_RATING = 5;

            // Loop door elke review.
            foreach ($reviews as $review) {
                echo '<section class="geplaatste_review_container">';

                echo '<section class="geplaatste_review">';
                echo '<h1>' . $review['naam'] . '</h1>';
                echo '<p>' . $review['beschrijving'] . '</p>';
                echo '<p>Rating: ' . genereerSterRating($review['rating'], $MAXIMALE_RATING) . '</p>';
               
                echo '</section>';
            }

            // Zorg ervoor dat als iemand een formulier invult, er ook een review wordt geplaatst.
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $naam = $_POST["naam"];
                $beschrijving = $_POST["beschrijving"];
                $rating = $_POST["rating"];

                // Het formulier is geldig, we kunnen nu de review plaatsen, dit doen we op dezelfde manier als hiervoor.
                if (!empty($naam) && !empty($beschrijving) && !empty($rating)) {
                    echo '<section class="geplaatste_review_container">';

                    echo '<section class="geplaatste_review">';
                    echo '<h1>' . $naam . '</h1>';
                    echo '<p>' . $beschrijving . '</p>';
                    echo '<p>Rating: ' . genereerSterRating($rating, $MAXIMALE_RATING) . '</p>';
                    
                    echo '</section>';
                } else {
                    echo "<script>alert('Sorry! er is iets misgegaan, Uw review is niet geplaatst..');</script>";
                }
            }

        ?>
    </main>

    <form action="index.php" method="POST" class="formulier">
        <h1>Wil je ook reviewen?</h1>
        <p>Vul dan dit formulier in!</p>

        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" required>

        <label for="beschrijving">Beschrijving</label>
        <input type="text" id="beschrijving" name="beschrijving">

        <label for="rating">Hoeveel sterren</label>
        <select id="rating" name="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>

        <input type="submit" value="Verzend formulier">
    </form>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>