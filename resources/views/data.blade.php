data.blade.php (buat isi data2 tamu)

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
</head>
<body>
    <h2>Input Data Tamu</h2>
    <form action="/daftar" method="POST">
        @csrf
        <label >Nama:</label>
        <input type="text" name="nama"><br><br>

        <label >Alamat:</label>
        <textarea name="alamat"></textarea><br><br>

        <label >Email:</label>
        <textarea name="email"></textarea><br><br>

        <label >NIK:</label>
        <textarea name="nik"></textarea><br><br>

        <button type="submit">Kirim</button>
    </form>
</body>
</html>