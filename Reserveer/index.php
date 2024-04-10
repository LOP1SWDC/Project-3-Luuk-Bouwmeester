<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <meta name="description" content="Reserveer pagina van restaurant Hot dasi Handi">
    <meta name="author" content="L. Bouwmeester">
    <meta name="keywords" content="">
    <title>Hot Dasi Handi - Reserveer</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="js/main.js" defer></script>
</head>

<body>
    <?php include "../php_shared/header.php"; ?>

    <main>

        <section class="reserveer_main">
            <form action="index.php" method="POST" class="formulier">
                <h1>Hot Dasi Handi</h1>
                <p>Reserveer hier uw plek.</p>

                <label for="voornaam">Voornaam</label>
                <input type="text" id="voornaam" name="voornaam" required>

                <label for="tussenvoegsel">Tussenvoegsel</label>
                <input type="text" id="tussenvoegsel" name="tussenvoegsel">

                <label for="achternaam">Achternaam</label>
                <input type="text" id="achternaam" name="achternaam" required>

                <label for="telefoonnummer">Telefoonnummer</label>
                <input type="tel" id="telefoonnummer" name="telefoonnummer" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="aantal_personen">Aantal personen</label>
                <input type="number" id="aantal_personen" name="aantal_personen" required>

                <label for="datum">Datum van reservering</label>
                <input type="date" id="datum" name="datum" required>

                <label for="tijd">Tijd van reservering</label>
                <select id="tijd" name="tijd" required>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                </select>

                <input type="submit" value="Verzend formulier">

            </form>

        </section>

        <section class="avg_main">

            <input type="checkbox" id="toggle_avg">
            <label for="toggle_avg">&#8801;</label>
            <label for="toggle_avg">Laat de AVG Regels zien.</label>

            <section class="avg_content">
                <?php include "avg.php"; ?>
            </section>

        </section>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $voornaam = $_POST["voornaam"];
                $tussenvoegsel = $_POST["tussenvoegsel"];
                $achternaam = $_POST["achternaam"];
                $telefoonnummer = $_POST["telefoonnummer"];
                $email = $_POST["email"];
                $aantal_personen = $_POST["aantal_personen"];
                $datum = $_POST["datum"];
                $tijd = $_POST["tijd"];

                if (!empty($voornaam) && !empty($achternaam) && !empty($telefoonnummer) && !empty($email) && !empty($aantal_personen) && !empty($datum) && !empty($tijd)) {
                    echo "<script>alert('Bedankt voor uw reservering! Gegevens van uw bestelling:\\n\\nNaam: $voornaam $tussenvoegsel $achternaam\\nTelefoonnummer: $telefoonnummer\\nEmail: $email\\nDatum: $datum\\nTijd: $tijd\\nAantal personen: $aantal_personen');</script>";
                } else {
                    echo "<script>alert('Reservatie is niet gelukt.');</script>";
                }
            }
        ?>

    </main>

    <?php include "../php_shared/footer.php"; ?>
</body>
</html>