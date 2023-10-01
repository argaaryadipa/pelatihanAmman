<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 12</title>
</head>
<style>
    .container {
        background-color: #fff;
        padding: 20px;
        width: 350px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .container h3 {
        margin-bottom: 20px;
        text-align: center;
    }

    .input {
        text-align: center;
        padding-bottom: 10px;
    }
</style>
<body>
        <form action="" method="POST" class="container">
            <h3>Tugas Pertemuan 12</h3>
            <hr>
            <div class="input">
                <label>Masukkan nominal</label> 
                <br>
                <input type="number" name="nominal" placeholder="Masukkan nominal">
                <br>
                <input type="submit" name="terbilang" value="Terbilang">
                <!-- <button type="submit" name="submit" id="submit">Proses</button> -->
            </div>
        </form>
    
    <?php
    if (isset($_POST['terbilang'])){
        echo "Terbilang : ". terbilang ($_POST['nominal']);
    }  

    function terbilang ($nominal){
        $angka = array ("", "satu", "dua", "tiga", "empat", "lima", "enam", 
        "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nominal < 12) {
            return $angka[$nominal];
        }
        elseif ($nominal < 20){
            return terbilang($nominal - 10). " belas ";
        }
        elseif ($nominal < 100){
            return terbilang($nominal / 10). " puluh ". terbilang($nominal % 10);
        }
        elseif ($nominal < 200){
            return " seratus ". terbilang($nominal - 100);
        }
        elseif ($nominal < 1000){
            return terbilang($nominal / 100). " ratus ". terbilang($nominal % 100);
        }
        elseif ($nominal < 2000){
            return " seribu ". terbilang($nominal - 1000);
        }
        elseif ($nominal < 1000000){
            return terbilang($nominal / 1000). " ribu ". terbilang($nominal % 1000);
        }
        elseif ($nominal < 1000000000){
            return terbilang($nominal / 1000000). " juta ". terbilang($nominal % 1000000); 
        }
        elseif ($nominal < 1000000000000){
            return terbilang($nominal / 1000000000). " miliar ". terbilang($nominal % 1000000000);
        }        
        return;
    }

    ?>
</body>
</html>