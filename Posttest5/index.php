<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Website Freelance Cari Duit" />

    <title>Cari Duit by Weesia</title>

    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/32f82e1dca.js" crossorigin="anonymous"></script>
</head>

<body>
    <aside class="sidebar offcanvas-lg offcanvas-start">
        <div class="d-flex justify-content-end m-4 d-block d-lg-none">
            <button data-bs-dismiss="offcanvas" data-bs-target=".sidebar" class="btn p-0 border-0 fs-4" aria-label="Button Close">
                <i class="fas fa-close"></i>
            </button>
        </div>

        <div class="logo-brand mt-lg-5">
            <img src="./assets/images/logo.png" alt="Logo Cari Duit" width="52" height="50" />
            <div>
                <h6 class="title">Cari Duit</h6>
                <p class="tagline">Ayo cuan bersama</p>
            </div>
        </div>

        <hr />
        <nav class="menu flex-fill">
            <div class="section-menu">
                <a href="#" class="item-menu active" onclick="handleClickMenu(this)">
                    <p>Market</p>
                </a>

                <a href="#" class="item-menu" onclick="handleClickMenu(this)">
                    <p>Project</p>
                </a>

                <a href="#" class="item-menu" onclick="alertBox(this)">
                    <p class="flex-fill">Keuangan</p>
                </a>

                <a href="#" class="item-menu" onclick="handleClickMenu(this)">
                    <p class="flex-fill">Notifikasi</p>
                    <div class="circle-notif rounded-circle">
                        <p>9</p>
                    </div>
                </a>

                <a href="#" class="item-menu" onclick="handleClickMenu(this)">
                    <p>Klien</p>
                </a>

                <a href="#" class="item-menu" onclick="handleClickMenu(this)">
                    <a href="form/index.php" class="item-menu">Form Absen</a>
                </a>

                <a href="#" class="item-menu" onclick="handleClickMenu(this)">
                    <a href="form/data.php" class="item-menu">Data Absen</a>
                </a>

            </div>

        </nav>
        <footer>
            <div class="d-flex gap-3 align-items-center mb-4">
                <img src="./assets/icons/ic_mode.svg" alt="Mode Display" />
                <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
                <div>
                    <input id="checkbox" type="checkbox" class="toggle-theme" aria-label="Toggle Theme" />
                    <label for="checkbox" class="label-toggle">
                        <img src="./assets/icons/ic_moon.svg" width="50%" class="ic-theme" id="ic-dark" alt="Icon Dark" />
                        <img src="./assets/icons/ic_sun.svg" width="50%" class="ic-theme" id="ic-light" alt="Icon Light" />
                    </label>
                </div>
            </div>
            <p>??Hendi_2009106009_A120.</p>
        </footer>
    </aside>

    <main class="content flex-fill">
        <section>
            <button aria-controls="sidebar" data-bs-toggle="offcanvas" data-bs-target=".sidebar" aria-label="Button Hamburger" class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none">
                <i class="fa-solid fa-bars"></i>
            </button>
            <nav class="nav-content gap-5">
                <div class="d-flex gap-3 align-items-center">
                    <img src="./assets/images/Bella.jpeg" alt="Photo Profile" class="photo-profile" />
                    <div>
                        <p class="title-content mb-2">Good Morning, Bella</p>
                    </div>
                </div>
                <div class="search-wrapper">
                    <div class="search-bar flex-fill">
                        <input class="form-control" type="text" placeholder="Search" />
                    </div>
            </nav>
        </section>

        <section class="d-flex flex-column gap-4">
            <div class="d-flex justify-content-between align-items-center gap-3">
                <h4 class="title-section-content">Market</h4>
                <a href="#" class="btn-link">View All Project</a>
            </div>
            <div class="d-flex gap-4 flex-wrap">
                <div class="project-card">
                    <img src="https://img.freepik.com/free-vector/developers-building-testing-deploying-chatbots-platforms-chatbot-platform-virtual-assistant-development-cross-platform-chatbot-concept_335657-1864.jpg?size=626&ext=jpg&ga=GA1.2.1365155565.1663206064" alt="Bot" width="260" height="180" />
                    <div class="project-detail">
                        <div>
                            <p class="title-detail">Bot</p>
                        </div>
                    </div>
                    <div class="project-detail">
                        <div>
                            <p class="label-detail mb-1">Starting:</p>
                            <p class="price-detail">Rp 200.000</p>
                        </div>
                        <button class="apply-project button btn-rounded" onclick="alertBox(this)">Apply</button>
                    </div>
                </div>

                <div class="project-card">
                    <img src="https://img.freepik.com/free-vector/tiny-content-writers-creating-web-articles-flat-illustration_74855-15537.jpg?size=626&ext=jpg&uid=R79225351&ga=GA1.2.1365155565.1663206064" alt="Dokumen" width="260" height="180" />
                    <div class="project-detail">
                        <div>
                            <p class="title-detail">Jasa Writing</p>
                        </div>
                    </div>
                    <div class="project-detail">
                        <div>
                            <p class="label-detail mb-1">Starting:</p>
                            <p class="price-detail">Rp 250.000</p>
                        </div>
                        <button class="apply-project button btn-rounded">Apply</button>
                    </div>
                </div>

                <div class="project-card">
                    <img src="https://img.freepik.com/free-vector/designers-are-working-desing-web-page-web-design-user-interface-user-experience-content-organization_335657-4403.jpg?size=626&ext=jpg&uid=R79225351&ga=GA1.2.1365155565.1663206064" alt="Desain Website" width="260" height="180" />
                    <div class="project-detail">
                        <div>
                            <p class="title-detail">Desain Website</p>
                        </div>
                    </div>
                    <div class="project-detail">
                        <div>
                            <p class="label-detail mb-1">Starting:</p>
                            <p class="price-detail">Rp 900.000</p>
                        </div>
                        <button class="apply-project button btn-rounded">Apply</button>
                        <p id="info" style="display: relative;">Applied</p>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                    Tambah Data
                </button>
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Jam Kerja</th>
                        <th>Projek yang Dikerjakan</th>
                        <th>Hal yang Dikerjakan
                        </th>
                        <th>Aksi</th>

                    </tr>

                    <?php
                    $no = 1;
                    $tampil = mysqli_query($conn, "SELECT * FROM dataabsen  ORDER BY id DESC ");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>

                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['jam_kerja'] ?></td>
                            <td><?= $data['projek'] ?></td>
                            <td><?= $data['hal'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>"> Ubah </a>
                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>"> Hapus </a>
                            </td>
                        </tr>

                        <!-- Modal ubah -->
                        <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Form Data Absen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="aksi_crud.php">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <div class="modal-body">


                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input type="text" class="form-control" name="namaa" value="<?= $data['nama'] ?>">
                                            </div>


                                            <div class="mb-3">
                                                <label class="form-label">Jam Kerja</label>
                                                <input type="text" class="form-control" name="jamkerja" value="<?= $data['jam_kerja'] ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Harga Pembelian di Atas 20</label>
                                                <input type="text" class="form-control" name="projekk" value="<?= $data['projek'] ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Harga Pembelian di Atas 50</label>
                                                <input type="text" class="form-control" name="hall" value="<?= $data['hal'] ?>">
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bubah">Ubah</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal ubah -->

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="aksi_crud.php">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <div class="modal-body">

                                            <h5> Apakah anda yakin akan menghapus data ini? <br>
                                                <span class="text-danger"><?= $data['nama'] ?> - <?= $data['projek'] ?></span>

                                            </h5>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="bhapus">Hapus</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Modal Hapus -->

                    <?php endwhile; ?>

                </table>
                <!-- Modal -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Form Data Absen</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="aksi_crud.php">
                                <div class="modal-body">


                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="namaa">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Jam Kerja</label>
                                        <input type="text" class="form-control" name="jamkerja">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Projek yang dikerjakan</label>
                                        <input type="text" class="form-control" name="projekk">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Hal yang dikerjakan</label>
                                        <input type="text" class="form-control" name="hall">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="bsimpan">Simpan</button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal -->

            </div>
        </section>

        <script src="./js/index.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>