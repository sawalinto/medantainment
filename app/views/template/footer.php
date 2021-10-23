<div class="sosmed fixed-bottom">
        <a href="https://api.whatsapp.com/send?phone=+6281361365489&text=Saya%20tertarik%20untuk%20mengambil%20jasa%20ini%20segera."
            class="">
            <img src="https://img.icons8.com/ios-glyphs/40/ffffff/whatsapp.png" />
        </a>
        <a href="https://www.instagram.com/medantainment/" class="">
            <img src="https://img.icons8.com/glyph-neue/40/ffffff/instagram-new.png" />
        </a>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000000" fill-opacity="1"
            d="M0,288L30,288C60,288,120,288,180,250.7C240,213,300,139,360,144C420,149,480,235,540,224C600,213,660,107,720,101.3C780,96,840,192,900,197.3C960,203,1020,117,1080,101.3C1140,85,1200,139,1260,165.3C1320,192,1380,192,1410,192L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
        </path>
    </svg>
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <img src="<?= BASEURL ;?>/img/LOGO.png" width="150" alt="" class="text-center">
                    <p>&copy;Copyright 2021 Medantainment, Medan, Indonesia</p>
                    <!-- <span class="d-block">Copyright Medantainment 2021</span> -->
                </div>
                <div class="col">
                    <ul>
                        <span class="head">Layanan</span>
                        <li class="li">videography</li>
                        <li class="li">Photography</li>
                        <li class="li">Cinematography</li>
                        <li class="li">Design Graphic</li>
                        <li class="li">Social Media Handling</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <span class="head">Company</span>
                        <li class="li">About</li>
                        <li class="li">portpolio</li>
                        <li class="li">Contact</li>
                        <li class="li">Instagram</li>
                        <li class="li">Facebook</li>
                    </ul>
                </div>
                <div class="col">
                    <ul>
                        <span class="head">Office</span>
                        <li class="li">Medantainment</li>
                        <li class="li">Jl. Gaperta N0.269, Medan</li>
                        <li class="li">0813 6136 5489</li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="<?= BASEURL ;?>/js/javascript.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= BASEURL ;?>/js/jquery.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="<?= BASEURL ;?>/js/jquery.min.js"></script>
    <script src="owlcarousel/dist/owl.carousel.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 2,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        });
    </script>
</body>

</html>