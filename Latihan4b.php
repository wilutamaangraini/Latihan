<?php
    $negaraAwal = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];
?>

<?php
    $negarabaru = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand", "Laos", "Filipina", "Myanmar"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for array</title>
</head>
<body>
    <h3>Daftar Negara ASEAN awal :</h3>
    <?php
        for ($i = 0; $i < count($negaraAwal); $i++) {
            echo "<li>$negaraAwal[$i]</li>";
        }
    ?>

    <br>
    <h3>Daftar Negara ASEAN baru :</h3>

    <?php
        for ($i = 0; $i < count($negarabaru); $i++) {
            echo "<li>$negarabaru[$i]</li>";
        }
    ?>   
</body>
</html>
