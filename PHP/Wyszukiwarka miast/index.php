<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyszukiwarka miast</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>
    <div class="zawartosc">
        <div class="naglowek">
            <img src="baner.jpg" alt="Polska">
        </div>
        <div class="lewy-gora">
            <h4>Podaj początek nazwy miasta</h4>
            <form action="index.php" method="post">
                <input type="text" name="miasto" id="miasto">
                <input type="submit" value="Szukaj" id="szukaj" name="szukaj">
            </form>
        </div>
        <div class="lewy-dol">
            <p>Egzamin INF.03</p>
            <p>Autor: 07262904730</p>
        </div>
        <div class="prawy">
            <h1>Wyniki wyszukiwania miast z uwzględnieniem filtra:</h1>
            <?php
                if (isset($_POST['szukaj'])) {
                    $miasto = $_POST['miasto'];
                    echo "<p>$miasto</p>";

                    $conn = new mysqli("localhost", "root", "", "wykaz");
                    $sql = "SELECT miasta.nazwa AS miasta_nazwa, wojewodztwa.nazwa AS wojewodztwa_nazwa FROM miasta JOIN wojewodztwa.id = id.wojewodztwa WHERE miasta.nazwa LIKE '$miasto%' ORDER BY miasta.nazwa;";
                    $result = $conn->query($sql);

                    echo "<table>";
                        echo "<tr>";
                            echo "<th>Miasto</th>";
                            echo "<th>Województwo</th>";
                        echo "</tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                            echo "<td>".$row['miasta_nazwa']."</td>";
                            echo "<td>".$row['wojewodztwa_nazwa']."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";

                    $conn->close();
                }
            ?>
        </div>
    </div>
</body>
</html>