<section class="slider">
    <div class="margin"></div>


    <!-- slider -->
    <div class="kel">
        <h4>Slider</h4>
        <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#sliderModal""><i class=" fas fa-plus"></i>Tambah</button>
        <?php $i=1 ; ?>
        <div class="img">
        <?php foreach($data['slider'] as $gambar ): ?>
        
            <div class="t-slid" style="display: inline; margin-right:10px;">
                <button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</button><img src="<?= BASEURL ; ?>/img/portpolio/<?= $gambar['gambar'] ; ?>" alt="" class="image-responsive slid" width="100%" height="100%">
            </div>
        

        <?php endforeach ; ?>
        </div>
        

        <!-- modal -->
        <div class=" modal fade" id="sliderModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sliderModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="color: #161616;" class="modal-title" id="sliderModalLabel">Modal Slider</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color:#161616;">
                        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="">
                            <div class="mb-3">
                                <input type="file" name="slider" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- iklan -->
    </div>
   


</section>