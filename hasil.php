<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> -= Formulir Biodata =- </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-warning">

    <!-- Membuat Variabel PHP -->
    <?php
    $nama = $_POST["Nama"];
    $ttl = $_POST["TTL"];
    $notelp = $_POST["notelp"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $alamat = $_POST["alamat"];
    $kampus = $_POST["kampus"];
    $jurusan = $_POST["jurusan"];
    $semester = $_POST["semester"];
    $nrp = $_POST["nrp"];
    $kegiatan = $_POST["kegiatan"];
    ?>
    <!-- End Pembuatan Variabel PHP  -->

    <form action="index.html">
        <div class="card bg-warning">
            <div class="card-header text-center mb-3 mb-sm-3 bg-primary text-light">
                <h2>Biodata Mahasiswa</h2>
            </div>
            <div class="container">
                <div class="row">

                    <!-- Card 1 -->
                    <div class="col-sm-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-sm-3">
                                    <label class="form-label text-center">
                                        Nama Lengkap :
                                    </label><br>
                                    <label><?php echo "$nama" ?></label>
                                </div>

                                <div class="mb-sm-3">
                                    <label class="form-label">
                                        Tempat,Tanggal Lahir :
                                    </label><br>
                                    <label><?php echo "$ttl" ?></label>
                                </div>

                                <div class="mb-sm-3">
                                    <label class="form-label">
                                        No.Telepon / HP :
                                    </label><br>
                                    <label><?php echo "$notelp" ?></label>
                                </div>

                                <div class="mb-sm-3">
                                    <label class="form-label">
                                        Jenis Kelamin :
                                    </label><br>
                                    <label><?php echo "$jeniskelamin" ?></label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"> Alamat : </label><br>
                                    <label><?php echo "$alamat" ?></label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Akhir Card 1 -->

                    <!-- Card 2 -->
                    <div class="col-sm-6 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-sm-3">
                                    <label class="form-label text-center">
                                        Universitas / Politeknik :
                                    </label><br>
                                    <label><?php echo "$kampus" ?></label>
                                </div>

                                <div class="mb-sm-3">
                                    <label class="form-label">
                                        Jurusan :
                                    </label><br>
                                    <label><?php echo "$jurusan" ?></label>
                                </div>

                                <div class="mb-sm-3">
                                    <label class="form-label">
                                        Semester :
                                    </label><br>
                                    <label><?php echo "$semester" ?></label>
                                </div>

                                <div class="mb-sm-3">
                                    <label class="form-label">
                                        NIM / NRP :
                                    </label><br>
                                    <label><?php echo "$nrp" ?></label>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label"> Kegiatan Organisasi / UKM : </label><br>
                                    <label><?php echo "$kegiatan" ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Card 2 -->

                    <div>
                        <button class="btn btn-primary w-100"> KEMBALI</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>