<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Segitiga Bintang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body {
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        /* background: linear-gradient(#ff00d0, #22c1c3); */
    }
    h2, h3 {
        margin-bottom: 0;
    }
    hr {
        width: 80%;
    }
    form {
        margin-top: 2rem;
    }
    pre {
        margin-top: 1.4rem;
        text-align: left;
    }
    .result {
        margin: 1rem auto;
        padding: 0.25rem 0.25rem 1rem 0.25rem;
        background-color: antiquewhite;
        width: 30%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>
<body>
   <h2>Form Segitiga Bintang</h2> 
   <hr>

   <form action="" method="post">
        <div class="container">
            <label for="">Tinggi Segitiga : </label>
            <input type="number" name="tinggi_segitiga" required>
            <button class="btn btn-primary" type="submit" name="submit"
            onclick="alert('Submit data?')">
            Submit
            </button>
            <button class="btn btn-danger" type="reset" name="reset"
            onclick="alert('Reset data?')">
                Reset
            </button>
            <!-- <input type="submit" name="submit">
            <input type="reset" name="reset"> -->
        </div>
    </form>

        <?php
            if (isset($_POST['submit'])) {
                $tinggi_segitiga = $_POST['tinggi_segitiga'];

                echo "<div class='result'>";
                echo "<h3>Hasil Segitiga</h3>";
                echo "<span>(Tinggi Segitiga : $tinggi_segitiga)</span>";
                echo "<pre>";

                for ($i = 1; $i <= $tinggi_segitiga; $i++) { 
                    for ($j = 1; $j <= $i; $j++) { 
                        echo "*";
                    }
                    echo "<br>";
                }
                echo "<pre>";
                echo "<div>";
            }
        ?>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>