<?php
    $conn = new mysqli('localhost', 'root', '', 'kupauto')
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komis aut</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1><em><strong>KupAuto!</strong></em> Internetowy Komis Samochodowy</h1>
    </div>
    <div class="glowny1">
        <?php
            $sql = "SELECT model, rocznik, przebieg, paliwo, cena, zdjecie FROM samochody WHERE id = 10;";
            $result = $conn->query(query: $sql);
            while($row = $result -> fetch_array()) {
                echo "<img src='$row[5]' alt='oferta dnia'>";
                echo "<h4>Oferta Dnia: Toyota $row[0]</h4>";
                echo "<p>Rocznik: $row[1], przebieg: $row[2], paliwo: $row[3]</p>";
                echo "<h4>Cena: $row[4]</h4>";
            }
        ?>
    </div>
    <div class="glowny2">
        <h2>Oferty Wyróżnione</h2>
        <?php
            $sql = "SELECT nazwa, model, rocznik, cena, zdjecie FROM samochody JOIN marki ON marki_id = marki.id WHERE wyrozniony=1 LIMIT 4;";
            $result = $conn->query(query: $sql);
            while($row = $result -> fetch_array()) {
                echo "<div>";
                    echo "<img src='$row[4] alt='$row[1]'>";
                    echo "<h4>$row[0] $row[1]</h4>";
                    echo "<p>Rocznik $row[2]</p>";
                    echo "<h4>Cena: $row[3]</h4>";
                echo "</div>";
            }
        ?>
    </div>
    <div class="glowny3">
        <h2>Wybierz markę</h2>
        <form action="KupAuto.php" method="post">
            <select name="lista" id="lista">
                <?php
                    $sql = "SELECT nazwa FROM marki";
                    $result = $conn->query(query: $sql);
                    while($row = $result -> fetch_array()) {
                        echo "<option value='$row[0]'>$row[0]</option>";
                    }
                ?>
            </select>
            <button>Wyszukaj</button>
        </form>
        <?php
            if(isset($_POST['lista'])) {
                $model = $_POST['lista'];
                $sql = "SELECT model, cena, zdjecie FROM samochody JOIN marki ON marki_id = marki.id WHERE nazwa = '$model';";
                $result = $conn->query(query: $sql);
                while($row = $result -> fetch_array()) {
                    echo "<div>";
                        echo "<img src='$row[2]' alt='$row[0]'>";
                        echo "<h4>$model $row[0]</h4>";
                        echo "<h4> Cena: $row[1]</h4>";
                    echo "</div>";
                }
            }
        ?>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: 07262904730</p>
        <p><a href="http://firmy.pl/komis">Znajdź nas także</a></p>
    </div>
</body>
</html>

<?php
    $conn -> close();
?>