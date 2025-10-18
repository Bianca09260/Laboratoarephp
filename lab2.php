<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laborator PHP - Concepte de Bază</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .rezultat {
            background-color: #f4f4f4;
            padding: 10px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Laborator PHP - Concepte de Bază</h1>

    <?php
    // 1. Variabile
    $nume = "Bia";
    $varsta = 20;
    $inaltime = 1.62;
    $greutate = 60;
    $elem1=7;
    $elem2=2;
    $suma=0;

    // 2. Constante
    define("CURS_EURO", 5.1);

    // 3. Afișare variabile
    echo "<h2>Variabile și Afișare</h2>";
    echo "Nume: $nume <br>";
    echo "Vârsta: $varsta ani <br>";
    echo "Înălțime: $inaltime m <br>";

    // 4. Utilizare constantă
    echo "<h2>Constante</h2>";
    echo "Cursul EURO este: " . CURS_EURO . " RON <br>";

    // 5. Operații aritmetice
    echo "<h2>Operații Aritmetice</h2>";
    $suma = 100;
    $suma_euro = $suma / CURS_EURO;
    echo "$suma RON = $suma_euro EURO <br>";

    $IMC=0;
    $IMC = $greutate * $inaltime;
    echo "indicele este $IMC ";


    // 6. Structuri condiționale
    echo "<h2>Structuri Condiționale</h2>";
    if ($varsta >= 18 && $varsta<=65) {
        echo "$nume este major(ă). <br>";
    } else {
        echo "$nume este minor(ă). <br>";
    }

    // 7. Structuri repetitive
    echo "<h2>Structuri Repetitive</h2>";
    echo "Numărătoare: ";
    for ($i = 1; $i <= 10; $i++) {
        echo "$i ";
    }
    echo "<br>";

    // 8. Array-uri
    echo "<h2>Array-uri</h2>";
    $fructe = array("măr", "banană", "portocală", "zmeura", "lamaie");
    echo "Fructe: ";
    foreach ($fructe as $fruct) {
        echo "$fruct ";
    }
    echo "<br>";

    // 9. Funcții
    function salut($nume) {
        return "Salut, $nume!";
    }

    function calcul($elem1, $elem2)
    {
          $suma=$elem1 + $elem2;
          return "suma este $suma";
    }

    echo "<h2>Funcții</h2>";
    echo salut($nume);
    echo "<br>";
    echo calcul($elem1,$elem2);
    ?>

    <h2>Formular PHP</h2>
    <form method="post" action="">
        <label for="numeInput">Introdu un nume:</label>
        <input type="text" id="numeInput" name="numeInput">
        <input type="submit" value="Trimite">
        <input type="number" id="varsta" name="varsta">
    </form>

    <?php
    // 10. Procesare formular
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeInput = $_POST['numeInput'];
        $varsta = $_POST['varsta'];
        echo "<div class='rezultat'>";
        echo "Numele introdus: " . htmlspecialchars($numeInput);
        echo "<br>" ;
        echo "Varsta introdusa este " .htmlspecialchars($varsta);
        echo "</div>";
    }
    ?>
</body>
</html>
