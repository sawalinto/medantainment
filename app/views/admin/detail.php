<style>
    h5{
        color: white !important;
    }
</style>
<div class="container mt-5">
    <div class="row">
        <div class="col ">
            <h4><i class="fas fa-envelope-open-text"></i>Pesan dari <?=  $data['home']['nama']; ?></h4>
            <h6><?= $data['home']['email'] ; ?></h6>
            <h6><i class="fas fa-phone-alt"></i><?= $data['home']['hp'] ; ?></h6>
            
            <div class="card">
                <div class="body-card p-3">
                <p style="margin-top: 30px; color:black"><?= $data['home']['pesan'] ; ?></p>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>