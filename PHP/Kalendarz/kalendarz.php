<?php
    $conn = new mysqli('localhost', 'root', '', 'terminarz')
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <div class="baner">
        <div class="baner1">
            <img src="logo1.png" alt="lipiec">
        </div>
        <div class="baner2">
            <h1>TERMINARZ</h1>
                <?php
                    echo "<p>najbliższe zadania: ";
                    $sql1 = "SELECT DISTINCT wpis from zadania WHERE dataZadania <= '2020-07-07' AND wpis <> '';";
                    $result1 = $conn->query1(query1: $sql1);
                    while($row = $result -> fetch_array()) {
                        echo "$row[0];";
                    }
                    echo "</p>"
                ?>
        </div>
    </div>
    <div class="glowny">
        <?php
            $sql2 = "SELECT dataZadania, wpis FROM `zadania` WHERE miesiac = 'lipiec';";
            $result2 = $conn->query2(query2: $sql2);
            while($row = $result2 -> fetch_array()) {
                echo "<div>";
                echo "<h6>$row[0]</h6>";
                echo "<p>$row[1]</p>";
                echo "</div>";
            }
        ?>
    </div>
    <div class="stopka">
        <a href="sierpien.html">
            <p>Terminarz na sierpień</p>
        </a>
        <p>Stronę wykonał: 07262904730</p>
    </div>
</body>
</html>
<?php
    $conn -> close();
?>