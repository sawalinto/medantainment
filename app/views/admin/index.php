<section class="dashboard">
    <h1 class="mt-5 mb-5" style="color: white;">Dashboard</h1>


    <p style="color: white; margin-top: 50px; font-size: 20px;"><i class="fas fa-inbox"></i>Pesan</p>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <?php foreach ($data['home'] as $home) : ?>

        <div class="card" style="display: inline-block;" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $home['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $home['hp']; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted"><?= $home['email']; ?></h6>
                <!-- <p class="card-text" style="color: #161616;"><?= $home['pesan']; ?></p> -->
                <a href="<?= BASEURL; ?>/admin/detail/<?= $home['id']; ?>" class="card-link btn btn-primary"><i class="fas fa-info"></i></a>
                <a href="<?= BASEURL; ?>/admin/hapus/<?= $home['id']; ?> " onclick="return confirm('Hapus?')" class="card-link btn btn-danger"><i class="fas fa-trash"></i></a>
                
            </div>
        </div>
        <style>
            .fa-info {
                padding: 0;
                margin: 0 auto;
            }

            .fa-trash {
                padding: 0;
                margin: 0 auto;
            }
        </style>

    <?php
    endforeach; ?>



</section>