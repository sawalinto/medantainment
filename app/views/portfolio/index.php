<div class="container">
        <h2 class="text-center" style="color: aliceblue; margin-top: 150px;">Portfolio Kami </h2>
        <div class="row">
            <div class="col text-center">
                <button type="button" class="btn btn-outline-primary video1 btn2">Iklan</button>

                <button type="button" class="btn btn-outline-primary poto1 btn2">Photo</button>

                <button type="button" class="btn btn-outline-primary design1 btn2">Design</button>
            </div>
            
        </div>

        
    </div>
    <div class="row mt-5">
        <div class="col text-center">
            <div class="video">

            <?php foreach($data['link'] as $link) : ?>
                <iframe class="iframe" width="420" height="315" src="https://www.youtube.com/embed/<?=$link['link'];?>">
                </iframe>
            <?php endforeach ; ?>
                
            </div>

            <div class="photo">
                <div class="te">
                    <img src="<?=BASEURL;?>/img/portpolio/photo1.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo2.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo3.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo1.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo2.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo3.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo1.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo2.jpg" width="250" alt="" class="img-thumbnail m-2">
                    <img src="<?=BASEURL;?>/img/portpolio/photo3.jpg" width="250" alt="" class="img-thumbnail m-2">
                    
                    

                </div>

            </div>
        </div>
    </div>
