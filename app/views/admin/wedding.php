<div class="kel">
    <h4 class="mt-5">Wedding</h4>

    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#iklanModal""><i class=" fas fa-plus"></i>Tambah</button>

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- modal -->
    <div class=" modal fade" id="iklanModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="iklanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 style="color: #161616;" class="modal-title" id="iklanModalLabel">Modal Iklan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color:#161616;">


                    <form action="<?= BASEURL; ?>/admin/tambahWedding" method="post">
                        <label for="link" class="form-label">Masukan Link Youtube</label>
                        <input type="text" name="wedding" class="form-control" id="link" placeholder="Link youtube">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>


                </form>
            </div>
        </div>
    </div>

    <div class="img">
        <?php $i = 1; ?>
        <div class="video">
            <?php foreach ($data['wedding'] as $link) : ?>
                <?php if ($i <= 10) { ?>
                    <div class="t-img">
                        <iframe class="iframe" width="315" height="250" src="https://www.youtube.com/embed/<?= $link['link']; ?>"></iframe>
                        <a href="<?= BASEURL ; ?>/admin/hapusWedding/<?= $link['id'] ; ?>"  onclick="return confirm('Hapus?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>

                    </div>

                <?php }  ?>
                <?php $i++; ?>
            <?php endforeach; ?>
        </div>



    </div>

</div>