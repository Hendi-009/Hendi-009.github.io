<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Duit by Weesia</title>
    <link rel="stylesheet" href="style.css?v7">
</head>
<body>
    <div class = "h1">
        <h1>Absen</h1>
    </div>
    <div class = "containerr">
        <table border = "2">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>JamKerja</th>
                <th>Projek</th>
                <th>Catatan</th>
            </tr>
            <tr>
                <td>
                    1.
                </td>
                
                <td>
                    <?php echo $_POST['nama'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['jam'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['projek'] ?>
                </td>
                
                <td>
                    <?php echo $_POST['catatan'] ?>
                </td>  
            </tr>
        </table>
    </div>
</body>
</html>