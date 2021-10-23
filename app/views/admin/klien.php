
    <!-- DESIGN -->
    <div class="kel">
        <h4>Design</h4>
        <div class="img">
            <div class="t-img"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</button><img src="../asset/portpolio/photo2.jpg" alt="" class="image-responsive slid" width="100%" height="100%"></div>
            <div class="t-img"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</button><img src="../asset/portpolio/photo2.jpg" alt="" class="image-responsive slid" width="100%" height="100%"></div>


        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#designModal""><i class=" fas fa-plus"></i>Tambah</button>

        <!-- modal -->
        <div class=" modal fade" id="designModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="designModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="color: #161616;" class="modal-title" id="designModalLabel">Modal Design</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color:#161616;">
                        <form action="" method="">
                            <div class="mb-3">
                                <label for="design" class="form-label">Deskripsi</label>
                                <input type="text" class="form-control mb-4" name="design" id="design" placeholder="Masukan Deskripsi">
                                <input type="file" class="form-control" aria-label="file example" required>
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



        <!-- PHOTO -->
        <div class="kel">
            <h4>Photo</h4>
            <div class="img">
                <div class="t-img"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</button><img src="../asset/portpolio/photo2.jpg" alt="" class="image-responsive slid" width="100%" height="100%"></div>
                <div class="t-img"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</button><img src="../asset/portpolio/photo2.jpg" alt="" class="image-responsive slid" width="100%" height="100%"></div>


            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#photoModal""><i class=" fas fa-plus"></i>Tambah</button>

            <!-- modal -->
            <div class=" modal fade" id="photoModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="photoModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 style="color: #161616;" class="modal-title" id="photoModalLabel">Modal Photo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="color:#161616;">
                            <form action="" method="">
                                <div class="mb-3">
                                    <label for="photo" class="form-label">Deskripsi</label>
                                    <input type="text" name="photo" class="form-control mb-4" id="photo" placeholder="Masukan Deskripsi">
                                    <input type="file" class="form-control" aria-label="file example" required>
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

        </div>