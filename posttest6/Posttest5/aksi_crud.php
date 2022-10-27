<?php
include "koneksi.php";

if (isset($_POST['bsimpan'])) {

    if ($_FILES['gambar']['size'] != 0) {
        // Set File Gambar
        $format_file = $_FILES['gambar']['name'];
        $tmp_name = $_FILES['gambar']['tmp_name'];

        $tipe = explode('.', $format_file);
        $tipe2 = $tipe[1];

        $rand_num = rand(100, 999);
        $rename = 'Course-' . $tipe[0] . '.' . $tipe2;
        // End Set File Gambar
    }

    move_uploaded_file($tmp_name, './image/' . $rename);

    $sql = "INSERT INTO dataabsen (nama, jam_kerja, projek, hal, gambar, timee)
                                        VALUES ('$_POST[namaa]',
                                                '$_POST[jamkerja]',
                                                '$_POST[projekk]',
                                                '$_POST[hall]',
                                                '" . $rename . "',
                                                '$_POST[timee]'
                                                )";
    $simpan = mysqli_query($conn, $sql);

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses');
                document.location='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal');
                document.location='index.php';
            </script>";
    }
}

if (isset($_POST['bubah'])) {

    $ubah = mysqli_query($conn, "UPDATE dataabsen SET
                                                       nama = '$_POST[namaa]',
                                                       jam_kerja = '$_POST[jamkerja]',
                                                       projek = '$_POST[projekk]',
                                                       hal = '$_POST[hall]'
                                                    WHERE id = '$_POST[id]'
                                                        ");

    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukses');
                document.location='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal');
                document.location='index.php';
            </script>";
    }
}

if (isset($_POST['bhapus'])) {

    $ubah = mysqli_query($conn, "DELETE FROM dataabsen WHERE id = '$_POST[id]' ");

    if ($hapus) {
        echo "<script>
                alert('Hapus Data Sukses');
                document.location='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Hapus Data Sukses');
                document.location='index.php';
            </script>";
    }
}
