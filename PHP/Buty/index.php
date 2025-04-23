<?php 
    $conn = new mysqli('localhost', 'root', '', 'obuwie');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obuwie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="naglowek">
        <h1>Obuwie męskie</h1>
    </div>
    <div class="glowny">
        <form action="zamow.php" method="post">
            <label for="model">Model: </label>
            <select name="lista" id="lista" class="kontrolki">
                <?php
                    $sql = "SELECT model FROM produkt";
                    $result = $conn->query(query: $sql);
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['model'] . "'>" . $row['model'] . "</option>";
                    }
                ?>
            </select>
            <label for="rozmiar">Rozmiar: </label>
            <select name="lista2" id="lista2" class="kontrolki">
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
            </select>
            <label for="liczbaPar">Liczba par: </label>
            <input type="number" name="liczbaPar" id="liczbaPar" class="kontrolki">
            <input type="submit" value="Zamów" class="kontrolki">
        </form>
        <?php
            $sql = "SELECT model, nazwa, cena, nazwa_pliku FROM buty JOIN produkty USING(model);";
            $result = $conn->query(query: $sql);
            while($row = $result->fetch_assoc()) {
                echo "<div class='buty'>";
                    echo "<img src='" . $row['nazwa_pliku'] . "'alt='but męski'>";
                    echo "<h2>" . $row['nazwa'] . "</h2>";
                    echo "<h5>Model: " .$row['model'] . "</h5>";
                    echo "<h4>Cena: " .$row['cena'] . "</h4>";
                echo "</div>";

            }
        ?>
    </div>
    <div class="stopka">
        <p>Autor strony: 07262904730</p>
    </div>
</body>
</html>

<?php
    $conn -> close();
?>