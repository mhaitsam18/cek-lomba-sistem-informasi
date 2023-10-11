<body id="page-top">
    <section class="page-section bg-primary" id="about">
        <div class="container pt-5">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4 class="card-title">Informasi Lomba </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <form action="" method="post">

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Masukan Nama atau Kategori Lomba" name="keyword">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary mb1 bg-blue" name="submit">
                                                    Search</button>
                                            </div>
                                        </div>
                                    </form>


                    </div>
                    <tr>

                        <center>
                            <th>No </th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Penyelenggara</th>
                            <th>Deadline</th>
                            <th>Counting Day</th>
                            <th>Action</th>
                        </center>
                    </tr>
                    </thead>
                    <tbody>

                        <?php $no = 1;
                        // if (isset($getInput['input']))
                        foreach ($getInput as $lom) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $lom['Title']; ?></td>
                                <td><?= $lom['link']; ?></td>
                                <td><?= $lom['Penyelenggara']; ?></td>
                                <td><?= $lom['Deadline']; ?></td>
                                <td><?= $lom['curdate']; ?></td>
                                <td>
                                    <a href="<?= base_url('tambah_lomba/edit/' . $lom['id']); ?>" class="btn btn-success">
                                        Detail</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                        </tr>
                    </tbody>

                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>