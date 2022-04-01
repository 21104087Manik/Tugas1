
<!DOCTYPE html>
<html>
    <head>
        <title>Menghitung Luas Segitiga</title>
    </head>
    <body>
        <h1>Hitung Luas Segitiga</h1>
        <form action="LuasSegitiga.php" method="post" >
            <table>
                <tr>
                    <td>
                        <label>Nilai Alas :</label>
                        <br>
                        <input type="number" name="alas">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nilai Tinggi :</label>
                        <br>
                        <input type="number" name="tinggi">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Luasnya</label>
                    <?php
                        if(isset($_POST['submit']))
                        {
                            $alas = $_POST['alas'];
                            $tinggi = $_POST['tinggi'];
                            $luas = 1/2 * $alas * $tinggi;
                            
                            echo ": $luas";
                        }     
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Hitung Luas Segitiga">
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html> 