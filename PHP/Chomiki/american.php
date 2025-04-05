<?php
    $conn = new mysqli("localhost", "root", "", "hodowla");
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="baner">
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </div>
    <div class="lewy-menu">
        <a href="peruwianka.php">
            <p>Rasa Peruwianka</p>
        </a>
        <a href="american.php">
            <p>Rasa American</p>
        </a>
        <a href="crested.php">
            <p>Rasa Crested</p>
        </a>
    </div>
    <div class="lewy-main">
        <img src="/american.jpg" alt="Świnka morska rasy american">
        <?php
            $sql2 = "SELECT DISTINCT data_ur, miot, rasa FROM swinki JOIN rasy ON rasy_id = rasy.id WHERE rasy_id=6";
            $result2 = $conn->query($sql2);
            while($row = $result2 -> fetch_array()) {
                echo "<h2>Rasa: $row[2]</h2>";
                echo "<p>Data urodzenia: $row[0]</p>";
                echo "<p>Oznaczenie miotu: $row[1]</p>";
            }
        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php
            $sql3 = "SELECT imie, cena, opis FROM swinki WHERE rasy_id = 6";
            $result3 = $conn->query($sql3);
            while($row = $result3 -> fetch_array()) {
                echo "<h3>$row[0] - $row[1] zł</h3>";
                echo "<p>$row[2]</p>";
            }
        ?>
    </div>
    <div class="prawy">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
                $sql1 = "SELECT rasa FROM rasy";
                $result = $conn->query($sql1);
                while($row = $result -> fetch_array()) {
                    echo "<li>$row[0]</li>";
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
    $conn -> close();
?>