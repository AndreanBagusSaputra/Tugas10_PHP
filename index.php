<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <h1>Rumus Jajar Genjang</h1>
    <form method="POST">
        <table>
            <tr>
                <td>Alas</td>
                <td>
                    <input type="text" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>
                    <input type="text" name="tinggi" require>
                </td>
            </tr>
             <tr>
                <td>Sisi Miring</td>
                <td>
                    <input type="text" name="simir" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="hitung">
                </td>
            </tr>
        </table>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];
            $simir = $_POST['simir'];

            $luasjajargenjang = $alas * $tinggi;
            echo 'Luas Jajar Genjang tersebut adalah: ', $luasjajargenjang;

            $keljajargenjang = 2 * ($alas + $simir);
            echo '<hr> Luas Jajar Genjang tersebut adalah: ', $keljajargenjang;

            $sisijajargenjang = ($keljajargenjang / 2) - $simir;
            echo '<hr>SIsi Jajar Genjang tersebut adalah: ', $sisijajargenjang;

            $alasjajargenjang = $luasjajargenjang / $tinggi;
            echo '<hr>Alas Jajar Genjang tersebut adalah: ', $alasjajargenjang;

            $tngjajargenjang = $luasjajargenjang / $alas;
            echo '<hr>Tinggi Jajar Genjang tersebut adalah: ', $tngjajargenjang;
        }
    ?>
</body>
</html>