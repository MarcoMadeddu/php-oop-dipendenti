<?php
include_once __DIR__ . '/warehouse/dipendenti.php';
include_once __DIR__ . '/warehouse/magazzinieri.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="app">
        <div class="dipendenti">
            <h2>Dipendenti</h2>
            <ul>
            <?php foreach($allDip as $dip){ ?>
                <li>
                    <h3> Nome: <?php echo $dip-> nome ?> </h3>
                    <h3> Congome:<?php echo $dip-> cognome ?> </h3>
                    <h3> Età: <?php echo $dip-> età ?> </h3>
                    <h3> Mansione: <?php echo $dip-> mansione ?> </h3>
                    <h3> Salario: <?php echo $dip-> salario ?> </h3>
                    <h3> Contratto:<?php echo $dip-> contratto ?> </h3>
                    <h3> Grado:<?php echo $dip-> grado ?> </h3>
                </li>
            <?php }; ?>
            </ul>
        </div>

        <div class="magazzinieri">
            <h2>Magazzinieri</h2>
            <ul>
                <?php foreach($allMag as $mag) { ?>
                <li>
                    <h3> Nome: <?php echo $mag-> nome ?> </h3>
                    <h3> Congome:<?php echo $mag-> cognome ?> </h3>
                    <h3> Età: <?php echo $mag-> età ?> </h3>
                    <h3> Settore: <?php echo $mag-> settore ?> </h3>
                    <h3> Badge: <?php echo $mag-> badge ?> </h3>
                    <h3> Stato:<?php echo $mag-> stato ?> </h3>
                </li>
                <?php }; ?>
            </ul>
        </div>
    </div>
</body>
</html>