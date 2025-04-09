<?php
    $conn = new mysqli('localhost', 'root', '', 'podroze')
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <div class="baner">
        <h1>BIURO PODRÓŻY</h1>
    </div>
    <div class="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td>
                <td>Wenecja</td>
                <td>Paryż</td>
            </tr>
            <tr>
                <td>od 600 zł</td>
                <td>od 1200 zł</td>
                <td>od 1200 zł</td>
            </tr>
        </table>
    </div>
    <div class="srodkowy">
        <h2>W tym roku jedziemy do...</h2>
        <?php
            $sql = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis";
            $result = $conn->query(query: $sql);
            while($row = $result -> fetch_array()) {
                echo "<img src='$row[0]' alt='$row[1]' title='$row[2]'>";
            }
        ?>
    </div>
    <div class="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">
            <p>napisz do nas</p>
        </a>
        <p>444555666</p>
    </div>
    <div class="dane">
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php
                $sql = "SELECT cel, dataWyjazdu FROM wycieczki WHERE dostepna = false;";
                $result = $conn->query(query: $sql);
                while($row = $result -> fetch_array()) {
                    echo "<li>Dnia $row[1] pojechaliśmy do $row[0]</li>";
                }
            ?>
        </ol>
    </div>
    <div class="stopka">
        <p>Stronę wykonał: 07262904730</p>
    </div>
</body>
</html>

<?php
    $conn -> close()
?>