<?php
        if(isset($_POST['submit'])){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $total = 0;

            function addition($angka1,$angka2,$jumlah){
                $jumlah=$angka1 + $angka2;
                return $jumlah;
            }
            $penjumlahan=addition ($number1,$number2,$total);

            function subtraction($angka1,$angka2,$jumlah){
                $jumlah=$angka1 - $angka2;
                return $jumlah;
            }
            $pengurangan=subtraction ($number1,$number2,$total);

            function times($angka1,$angka2,$jumlah){
                $jumlah=$angka1 * $angka2;
                return $jumlah;
            }
            $perkalian=times ($number1,$number2,$total);

            function division($angka1,$angka2,$jumlah){
                $jumlah=$angka1 / $angka2;
                return $jumlah;
            }
            $pembagian=division ($number1,$number2,$total);

            function modulus($angka1,$angka2,$jumlah){
                $jumlah=$angka1 % $angka2;
                return $jumlah;
            }
            $sisa_hasil_bagi=modulus ($number1,$number2,$total);
        }
?>

<html>
    <head>
        <style>
            body {
                background-color: whitesmoke;
                color: blue;
                text-emphasis-color: white;
            }
            h2 {
                margin-left: 37%;
                margin-right: 37%;
                width:auto; 
                height:auto;
                background:wheat;
                border:solid 3px black;
                padding: 5px;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                font-size: 18px;
            }
        </style>
        <Title>Kalkulator</Title>
    </head>

    <body>
        <form action="" method="POST" style="text-align: center;">
            <td>NUMBER 1 : </td>
            <input type="number" name="number1" id="number1"><br>   
            <td>NUMBER 2 : </td>
            <input type="number" name="number2" id="number2"> <br><br>
            <button type="submit" name="submit" id="submit"> Submit Number</button>
        </form>

        <h2>
            <?php
            echo "Berikut Hasil Perhitungan : <br><br>  ";
            echo "PENJUMLAHAN <br> \n";
            echo "Operator : + <br>";
            echo "Hasil = ";
            echo "$penjumlahan <br>";
            echo "<br>";

            echo "PENGURANGAN <br>";
            echo "Operator : - <br>";
            echo "Hasil = ";
            echo "$pengurangan <br>";
            echo "<br>";

            echo "PERKALIAN <br>";
            echo "Operator : * <br>";
            echo "Hasil = ";
            echo "$perkalian <br>";
            echo "<br>";

            echo "PEMBAGIAN <br>";
            echo "Operator : / <br>";
            echo "Hasil = ";
            echo "$pembagian <br>";
            echo "<br>";

            echo "MODULUS <br>";
            echo "Operator : % <br>";
            echo "Hasil = ";
            echo "$sisa_hasil_bagi <br>";
            echo "<br>";
            ?>
        </h2>
        
    </body>
</html>