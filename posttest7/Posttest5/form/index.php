<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Duit by Weesia</title>
    <link rel="stylesheet" href="style.css?v5">
</head>
<body>
    <div class = "h1">
        <h1>Absen</h1>
    </div>
    <div class = "container">
        <form action="data.php" method="post">
        <div class = "isi">
            
            <label  for="">Nama</label>
            <input  type="text" name="nama" required>
            <label for="">Jam Kerja</label>
            <input type="number" name="jam" required>
            <label  for="">Projek yang Dikerjakan</label>
            <input  type="text" name="projek" required>
            <label  for="">Hal yang Dikerjakan</label>
            <input  type="text" name="catatan" required>

            <button type="submit" name="submit"><b>Submit</b></button>
        </div>
    </form>
    </div>
</body>
</html>