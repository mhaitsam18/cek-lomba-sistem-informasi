<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Lomba</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $lomba['poster']; ?>" class="img-fluid rounded-start">

                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $lomba['Title']; ?></h5>
                            <p class="card-text"><?= $lomba['Penyelenggara']; ?></p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="/lomba/delete <?= $lomba['id']; ?>" class="btn btn-danger">Delete</a>
                            <br>
                            <a href="/lomba">Kembali ke datar lomba</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>