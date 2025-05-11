<?php
    $conn = new mysqli('localhost', 'root', '', 'sklep');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep dla uczniów</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>Dzisiejsze promocje naszego sklepu</h1>
    </div>
    <div class="lewy">
        <h2>Taniej o 30%</h2>
        <ol>
            <?php
                $sql = "SELECT nazwa FROM `towary` WHERE promocja = 1;";
                $result = $conn->query($sql);

                while($row = $result->fetch_array()) {
                    echo "<li>$row[0]</li>";
                }
            ?>
        </ol>
    </div>
    <div class="srodkowy">
        <h2>Sprawdź cenę</h2>
        <form action="index.php" method="post">
            <select name="towar" id="towar">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <button type="submit" name="check" id="check">SPRAWDŹ</button>
        </form>
        <?php
            if(isset($_POST["check"])) {
                echo "<div class='script'>";
                    $towar = $_POST["towar"];
                    $sql = "SELECT cena FROM towary WHERE nazwa = '$towar';";
                    $result = $conn->query($sql);

                    while($row = $result -> fetch_array()) {
                        $cena = $row[0];
                        $nowacena = $cena - ($cena * 0.3);
                        echo "cena regularna: $cena<br>";
                        echo "cena w promocji 30%: $nowacena";
                    }
                echo "</div>";
            }
        ?>
    </div>
    <div class="prawy">
        <h2>Kontakt</h2>
        <p>e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
        <img src="promocja.png" alt="promocja">
    </div>
    <div class="stopka">
        <h4>Autor strony: 07262904730</h4>
    </div>
</body>
</html>

<?php
    $conn -> close();
?>