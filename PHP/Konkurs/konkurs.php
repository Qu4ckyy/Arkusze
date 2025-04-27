<?php
    $conn = new mysqli('localhost', 'root', '', 'konkurs');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLOTARIAT SZKOLNY</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="naglowek">
        <h1>KONKURS - WOLOTARIAT SZKOLNY</h1>
    </div>
    <div class="lewy">
        <h3>Konkursowe nagrody</h3>
        <button onclick="location.reload()">Losuj nowe nagrody</button>

        <table>
            <thead>
                <tr>
                    <th>Nr</th>
                    <th>Nazwa</th>
                    <th>Opis</th>
                    <th>Wartość</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT nazwa, opis, cena FROM nagrody ORDER BY RAND() LIMIT 5;";
                    $result = query($sql);
                    $i = 1;
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['nazwa'] . "</td>";
                            echo "<td>" . $row['opis'] . "</td>";
                            echo "<td>" . $row['cena'] . "</td>";
                        echo "</tr>";
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
    <div class="prawy">
        <img src="./pliki/puchar.png" alt="Puchar dla wolontariusza">
        <h4>Polecane linki</h4>
        <ul>
            <li><a href="kw1.png">Kwerenda1</a></li>
            <li><a href="kw2.png">Kwerenda2</a></li>
            <li><a href="kw3.png">Kwerenda3</a></li>
            <li><a href="kw4.png">Kwerenda4</a></li>
        </ul>
    </div>
    <div class="stopka">
        <p>Numer zdającego: 07262904730</p>
    </div>
</body>
</html>

<?php
    $conn -> close();
?>