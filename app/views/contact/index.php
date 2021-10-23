<div class="container con">
    <div class="row">
        <div class="col">
            <h2 style="color: aliceblue;">Contact Information</h2>
            <p>Fill up the form and our them team</p>

            <div class="telpon">
                <i class="fa fa-phone" style="color: aliceblue; font-size: 18px;"></i>
                <p style="display: inline; margin-left: 10px;">0813 6136 5489</p>
            </div>
            <div class="email">
                <i class="fa fa-envelope" style="color: aliceblue; font-size: 18px;"></i>
                <p style="display: inline; margin-left: 10px;">admin@medantainment.com</p>
            </div>
            <div class="map">
                <i class="fa fa-map" style="color: aliceblue; font-size: 18px;"></i>
                <p style="display: inline; margin-left: 10px;">Jl. Gaperta No.269, Medan</p>
            </div>
            <div class="map2">
                <iframe class="map-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9470.680893206729!2d98.63512549951072!3d3.6033189743480625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f006a3a9e2d%3A0xa2a8058dd1c4a4da!2sMedantainment!5e0!3m2!1sid!2sid!4v1630332478400!5m2!1sid!2sid" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

        </div>


        <style>

        </style>
        <div class="col">
            <form action="<?= BASEURL; ?>/contact/tambahPesan" method="post">
            <h2 style="color: aliceblue; margin-bottom: -20px;">Hubungi Kami</h2>
            <div class="row mt-5">
                <div class="col">
                    <input type="text" class="form-control" name="nama" placeholder="Name" aria-label="First name">
                </div>
                <div class="col">
                    <input type="text" name="hp" class="form-control" placeholder="No Hp" aria-label="hp">
                </div>
                <div class="mb-3 mt-3">
                    <!-- <label for="exampleFormControlInput1" class="form-label">Email address</label> -->
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                </div>
                <div class="mb-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label" style="color: aliceblue; text-align: start !important;">Masukan
                        Pesan</label>
                    <textarea class="form-control" name="pesan" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
            <button class="btn btn-primary" style="width:100%;" type="submit">Kirim</button>
            </form>
        </div>
    </div>
</div>