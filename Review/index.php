<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="description" content="Review pagina van restaurant Hot dasi Handi">
    <meta name="author" content="L. Bouwmeester">
    <meta name="keywords" content="">
    <title>Hot Dasi Handi - Review</title>
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

        ?>
    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>