<div class="container home mb-5">
        <div class="row">
            <div class="col mt-5 animate__animated animate__fadeInLeft">
                <h1 class="h1">
                    KAMI YANG <br> ANDA CARI !
                </h1>
                <h3 class="h3">
                    Butuh jasa iklan untuk usaha kamu?<br>
                    Kami solusi yang cocok untuk anda!<br>

                </h3>
                <button type="button" class="btn btn-primary mt-3">Contact Us</button>
            </div>
            <div class="col d-none d-lg-block img-vid animate__animated animate__fadeInRight">
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <!-- <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div> -->

                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="<?= BASEURL ;?>/img/jg.png" class="d-block w-100" alt="">

                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="<?= BASEURL ;?>/img/sosial.png" class="d-block w-100" alt="">

                        </div>
                        <div class="carousel-item">
                            <img src="<?= BASEURL ;?>/img/designer.png" class="d-block w-100" alt="">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>

        <!-- ============owlCarousel==================== -->
        <div class="row mt-5  d-md-block d-lg-none">
            <div class="col">
                <div class="owl-carousel owl-theme">
                    <img src="<?= BASEURL ;?>/img/jg.png" alt="" class="hom item" width="500">
                    <img src="<?= BASEURL ;?>/img/sosial.png" alt="" class="hom item" width="500">
                    <img src="<?= BASEURL ;?>/img/designer.png" alt="" class="hom item" width="500">
                </div>

            </div>
        </div>





        <!-- ================== POrtpolio ===================== -->
        <section>
            <div class="container home2">
                <div class="row">
                    <div class="col sec d-none  d-sm-none d-md-none d-lg-block">
                        <img src="<?= BASEURL ;?>/img/about.jpg" width="450" height="335" style="width: 100%; height: auto;">

                    </div>
                    <div class="col sec ">

                        <h2>
                            <i class="fa fa-address-card"></i>
                            Tentang Kami
                        </h2>
                        <p>
                            Medantainment adalah Digital Creative Agency yang berdiri sejak tahun 2017. Kami opsi
                            terbaik untuk urusan desain kampanye perusahaan Anda. Kami berfokus pada pembuatan desain
                            terbaik untuk merek Anda dan memberi sentuhan keajaiban untuk kampanye perusahaan Anda,
                            memberikan pengembangan kreatif, strategis, dan teknis dari produk dan layanan berbasis
                            online. Kami menawarkan layanan lengkap meliputi SEM, SEO, iklan online, desain dan
                            pengembangan sosial media hingga konsultasi marketing digital kepada Anda. So, let's make it
                            happen with us !!
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="row portpolio">
                <div class="col">
                    <h2 class="text-center" id="portpolio" style="color: white;">Portfolio</h2>
                    <p class="text-center">

                        <button class="btn btn-primary video1" type="button">Iklan</button>
                        <button class="btn btn-primary design1" type="button">Design</button>
                        <!-- <button class="btn btn-primary poto1" role="button" aria-expanded="false">Photo</button> -->

                    </p>
                </div>
            </div>
            <div class="row port">
                <div class="col  text-center">
                    <!-- <div class="photo">
                        <div class="te">
                            <img src="<?= BASEURL ;?>/img/portpolio/photo1.jpg" width="250" alt="" class="img-thumbnail m-2">
                            <img src="<?= BASEURL ;?>/img/portpolio/photo2.jpg" width="250" alt="" class="img-thumbnail m-2">
                            <img src="<?= BASEURL ;?>/img/portpolio/photo3.jpg" width="250" alt="" class="img-thumbnail m-2">


                        </div>

                    </div> -->
                    <?php $i=1 ; ?>
                    <div class="video">
                        <?php foreach ($data['link'] as $link) : ?>
                               <?php if($i<=3){?>
                                <iframe class="iframe" width="420" height="315" src="https://www.youtube.com/embed/<?=$link['link'];?>"></iframe>
                               <?php }  ?>
                            <?php $i++ ; ?>
                        <?php endforeach ; ?>
                    </div>

                    <div class="design ">

                        <img src="<?= BASEURL ;?>/img/food2.jpg" width="250" alt="" class="img-thumbnail m-2 owl-item">
                        <img src="<?= BASEURL ;?>/img/food3.jpg" width="250" alt="" class="img-thumbnail m-2 owl-item">
                        <img src="<?= BASEURL ;?>/img/3D1.jpg" width="250" alt="" class="img-thumbnail m-2 owl-item">
                        <!-- <img src="asset/food2.jpg" width="250" alt="" class="img-thumbnail m-2 owl-item"> -->
                    </div>


                </div>
                <a href="<?=BASEURL;?>/portfolio" class="text-center mt-3 see">See All</a>
            </div>

        </section>

        <!-- ============================ Harga ======================= -->
        <section class="card-0">
            <div class="row">
                <div class="col">
                    <h3 class="h3">Apa yang kami tawarkan untuk anda?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="card bg-dark" style="width: 18rem;">

                        <div class="card-body">
                            <img src="<?= BASEURL ;?>/img/iklan.jpg" class="card-img-top">
                            <h3 class="h3 text-center">
                                Iklan Video
                            </h3>


                            <script>
                                for (var i = 1; i <= 5; i++) {
                                    document.write(
                                        "<img src='https://img.icons8.com/ios-glyphs/20/ffffff/star--v1.png' />");
                                }
                            </script>


                            
                            <ul style="color: white; list-style:none; padding:0;" class="mt-3">
                                <li style="font-weight: bold;">VIDEO</li>
                                <li>4K/HD 1080P</li>
                                <li>Promotional Videos</li>
                                <li>Music Videos</li>
                                <li>After Effect Project</li>
                                <li></li>
                                <hr>
                                <li style="font-weight: bold;">WHAT VIDEO</li>
                                <li>Direction/Montage</li>
                                <li>Video Editing</li>
                                <li>Outdoor/Extreme</li>
                                <li>Color Correction</li>
                                <li></li>
                                
                            </ul>
                            
                            <a href="https://api.whatsapp.com/send?phone=+6281361365489&text=Saya%20ingin jasa%20Videographer%20anda%20">
                                <button type="button" class="btn btn-primary">Pilih Paket</button>
                                </a>
                        </div>
                        <!-- <button type="button" class="btn btn-primary">Pilih Paket</button> -->
                    </div>
                </div>
                
                <div class="col text-center">
                    <div class="card bg-dark" style="width: 18rem;">

                        <div class="card-body">
                            <img src="<?= BASEURL ;?>/img/isometric_12.png" class="card-img-top">
                            <h3 class="h3 text-center">
                                Designer
                            </h3>


                            <script>
                                for (var i = 1; i <= 5; i++) {
                                    document.write(
                                        "<img src='https://img.icons8.com/ios-glyphs/20/ffffff/star--v1.png'/>");
                                }
                            </script>


                            <p class="card-text keterangan">

                            <ul style="color: white; list-style:none; padding:0;" class="mt-3">
                                <li style="font-weight: bold;">Content Creator</li>
                                <li>Feed Instagram</li>
                                <li>Story Instagram</li>
                                <li>Feed Facebook</li>
                                <li>Story Facebook</li>
                                <li></li>
                                <hr>
                                <li style="font-weight: bold;">Advertising</li>
                                <li>Brosur</li>
                                <li>Flyer</li>
                                <li>Umbul-Umbul</li>
                                <li>Billboard</li>
                                <li></li>
                                
                            </ul>
                            <a
                                href="https://api.whatsapp.com/send?phone=+6281361365489&text=Saya%20ingin jasa%20desain%20anda%20">
                                <button type="button" class="btn btn-primary">Pilih Paket</button>
                            </a>
                        </div>
                        <!-- <button type="button" class="btn btn-primary">Pilih Paket</button> -->
                    </div>
                </div>
            </div>
        </section>
    </div>



   