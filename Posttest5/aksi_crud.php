<?php
include "koneksi.php";

if (isset($_POST['bsimpan'])) {

    $simpan = mysqli_query($conn, "INSERT INTO dataabsen (nama, jam_kerja, projek, hal)
                                        VALUES ('$_POST[namaa]',
                                                '$_POST[jamkerja]',
                                                '$_POST[projekk]',
                                                '$_POST[hall]')
                                                ");

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
