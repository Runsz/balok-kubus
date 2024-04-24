<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Volume & Luas Permukaan</title>
    <style>
        .container{
            width: 90%;
            margin: 50px auto;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif ;
        }
        button{
            border: 0;
            border-radius: 5px;
            padding: 7px 10px;
            width: 150px;
            margin: 0 10px;
        }
        .hitung{
            margin-bottom: 10px;
            background-color: green;
            color: white;
            border: 0;
            border-radius: 5px;
            padding: 7px 10px;
            width: fit-content;
        }
        .hitung:hover{
            cursor: pointer;
            background-color: darkgreen;
        }
        button:hover{
            cursor: pointer;
        }
        input{
            width: 180px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dua">
            <a href="index.php?kubus"><button <?php echo !isset($_GET['balok']) && !isset($_POST['hitung-balok']) ? "style='background-color: blue;'":"" ?>>Kubus</button></a>
            <a href="index.php?balok"><button <?php echo isset($_GET['balok']) || isset($_POST['hitung-balok']) ? "style='background-color: blue;'":"" ?>>Balok</button></a>
        </div>
        <?php 
            if (isset($_GET['balok']) || isset($_POST['hitung-balok'])) { ?>
                <h1>Menghitung Volume & Luas Permukaan Balok</h1>
                <form action="index.php" method="post">
                    <label for="">Panjang</label>
                    <input placeholder="masukkan panjang dalam cm" name="p" type="text" required>cm<br><br>
                    <label for="">Lebar</label>
                    <input placeholder="masukkan lebar dalam cm" name="l" type="text" required>cm<br><br>
                    <label for="">Tinggi</label>
                    <input placeholder="masukkan tinggi dalam cm" name="t" type="text" required>cm<br>
                    <p>Ket : bilangan desimal menggunakan titik(.)</p>
                    <button class="hitung" name="hitung-balok" type="submit">Hitung</button>
                </form>
        <?php }
            else{ ?>
                <h1>Menghitung Volume & Luas Permukaan Kubus</h1>
                <form action="index.php" method="post">
                    <label for="">Sisi</label>
                    <input name="s" type="text" placeholder="masukkan sisi dalam cm" required>cm<br>
                    <p>Ket : bilangan desimal menggunakan titik(.)</p>
                    <button class="hitung" name="hitung-kubus" type="submit">Hitung</button>
                </form>
        <?php } ?>
        
        <?php 
            if (isset($_POST['hitung-balok'])) {
                $l = (float)$_POST['l'];
                $p = (float)$_POST['p'];
                $t = (float)$_POST['t'];
                $volume = (float)$l * $t * $p;
                $lp = (float)($p*$l*2)+($p*$t*2)+($l*$t*2);

                echo 'Panjang  = '.$p."cm<br>";
                echo 'Lebar = '.$l."cm<br>";
                echo 'Tinggi = '.$t."cm<br>";
                echo 'Volume = '.$volume."cm<sup>3</sup><br>";
                echo 'Luas Permukaan = '.$lp."cm<br>";
            }
            else if (isset($_POST['hitung-kubus'])) {
                $s = (float)$_POST['s'];
                $volume = (float)$s * $s * $s;
                $lp = (float)$s*$s*6;

                echo 'Sisi  = '.$s."cm<br>";
                echo 'Volume = '.$volume."cm<sup>3</sup><br>";
                echo 'Luas Permukaan = '.$lp."cm<br>";
            }
        ?>
    </div>
</body>
</html>