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
                    "naam" => "Naam",
                    "beschrijving" => "Beschrijving",
                    "rating" => "5"
                ),
                array(
                    "naam" => "Naam",
                    "beschrijving" => "Beschrijving",
                    "rating" => "5"
                ),
                array(
                    "naam" => "Naam",
                    "beschrijving" => "Beschrijving",
                    "rating" => "5"
                )
            );

            foreach ($reviews as $review) {
                echo '<section class="geplaatste_review">';
                echo '<h1>' . $review['naam'] . '</h1>';
                echo '<p>' . $review['beschrijving'] . '</p>';
                echo '<p>Rating: ' . $review['rating'] . '</p>';
                echo '</section>';
            }

        ?>
    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>