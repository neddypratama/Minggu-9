<html>
    <head>
        <title>Keranjang Pembeli</title>
    </head>
    <body>
        <h2>Jumlah yang dibeli: </h2>
        <?php
            $jmlGula = $_COOKIE["jumlahgula"];
            $jmlMinyak = $_COOKIE["jumlahminyak"];

            echo "jumlah gula yang dibeli adalah $jmlGula <br>";
            echo "jumlah minyak yang dibeli adalah $jmlMinyak";
        ?>
    </body>
</html>