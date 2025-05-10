<?php
    if(isset($_POST["data"]) && isset($_POST["osoby"]) && isset($_POST["telefon"])) {
        $data = $_POST["data"];
        $osoby = $_POST["osoby"];
        $telefon = $_POST['telefon'];

        $conn = new mysqli('localhost', 'root', '', 'baza');

        $sql = "INSERT INTO `rezerwacje` (`id`, `nr_stolika`, `data_rez`, `liczba_osob`, `telefon`) VALUES (NULL, '1', '2017-07-04', '4', '111222333');";
        $result = $conn->query($sql);

        $conn -> close();

        echo "Dodano rezerwację do bazy";
    }