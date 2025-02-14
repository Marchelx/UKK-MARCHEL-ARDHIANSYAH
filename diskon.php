<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI DISKON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: rgb(34, 53, 195);
            background: linear-gradient(0deg, rgba(34, 53, 195, 1) 0%, rgba(159, 15, 15, 1) 100%);
            background-size: cover;
            background-attachment: fixed;
        }

        h2 {
            text-shadow:  3px 3px 5px rgb(255, 255, 255);
            color: white;
        }

        h6{
            text-shadow:  3px 3px 5px rgb(255, 255, 255);
            color: white;
        }

        p {
            text-shadow:  3px 3px 5px rgb(255, 255, 255);
            color: white;
        }
        b {
            text-shadow:  3px 3px 5px rgb(255, 255, 255);
            color: white;
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="col-md-4 mx-auto">
        <marquee behavior="up" direction="scroll"><h2 class="text-center">SELAMAT DATANG DI APLIKASI PERHITUNGAN DISKON</h2></marquee>
            <form method="post" class="border rounded" id="diskonForm" autocomplete="off">
                <h6 class="text-center"><i>APLIKASI PERHITUNGAN DISKON</i></h6>
                <label class="form-label"><b>Harga (Rp)</b></label>
                <input type="number" class="form-control" name="harga" min="0" required>
                <label class="form-label"><b>Diskon (%)</b></label>
                <input type="text" class="form-control" name="diskon" min="0" max="100" maxlength="3" autocomplete="off" required>
                <button type="submit" class="btn btn-primary w-100 mt-2" name="hitung"><b>Hitung</b></button>
                <button type="button" class="btn btn-danger w-100 mt-2" onclick="resetForm()"><b>Hapus History</b></button>

            </form>
            <?php
            if (isset($_POST['hitung'])):
                $harga = $_POST['harga'];
                $diskon = $_POST['diskon'];
                if ($harga < 0 || $diskon < 0|| $diskon >100) {
                    echo "<script>alert('diskon hanya bisa 0-100%')</script>";
                } else{
                    $nilai_diskon = $harga *  ($diskon/100);
                    $total_harga =$harga - $nilai_diskon;
                    ?>
                    <div id="result" class="border rounded p-2">
                        <p>Harga (Rp): <b><?= number_format($harga,2,',','.')?></b></p>
                        <p>diskon <?= $diskon ?>%: Rp.<b><?= number_format($nilai_diskon,2,',','.')?></b></p>
                        <p>Total (Rp): <b><?= number_format($total_harga,2,',','.')?></b></p>
                     </div>
                    <?php }endif; ?>
        </div>
    </div>
    <p><marquee behavior="slide" direction="up" class="text-center">&copy; UKK RPL 2025 || MARCHEL ARDHIANSYAH || 0079249251</marquee></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function resetForm() {
            document.getElementById("diskonForm").reset();
            document.getElementById("result").innerHTML= "";
        }
    </script>
    
</body>
</html>