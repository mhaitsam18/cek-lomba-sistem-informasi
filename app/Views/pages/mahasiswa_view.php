<body id="page-top">
    <section class="page-section bg-primary" id="about">
        <div class="container pt-5">

            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4 class="card-title">Laporan Mahasiswa </h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('pages/input_mahasiswa'); ?>" class="btn btn-success mb-3">Input Data</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <form action="" method="post">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control"
                                                placeholder="Masukan Nama atau Kelas" name="keyword">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary mb1 bg-blue" name="submit">
                                                    Search</button>
                                            </div>
                                        </div>
                                    </form>


                    </div>
                    <th>No </th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Email</th>
                    <th>Nama Lomba </th>
                    <th>Kategori </th>
                    <!-- <th>Bukti</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getInput as $isi) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $isi['nim']; ?></td>
                            <td><?= $isi['nama']; ?></td>
                            <td><?= $isi['kelas']; ?></td>
                            <td><?= $isi['email']; ?></td>
                            <td><?= $isi['nama_lomba']; ?></td>
                            <td><?= $isi['kategori']; ?></td>

                            <td>


                            </td>
                        </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>