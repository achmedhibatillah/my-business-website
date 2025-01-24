<section class="position-relative bg-lp-top bg-color4" style="height:100vh;"> 
    <div class="row m-0 p-0 width-100 height-100">
        <div class="col-md-6"></div>
        <div class="col-md-6 d-flex justify-content-center justify-content-md-start align-items-start align-items-md-center col-hi">
            <div class="text-center text-md-start">
                <h4 class="ls-1 text-color3 position-relative" data-aos="fade-up" data-aos-delay="10" data-aos-easing="ease-in-out-back">
                    Hi, Everybody! 
                    <img src="<?= base_url('images/emoji/waving-hand.png') ?>" class="position-absolute ms-1" style="height:25px;">
                    <i class="fst-normal" style="margin-left:40px;">I’am</i>
                </h4>
                <h1 class="text-color1 ls-xs fw-800 mb-0" data-aos="fade-up" data-aos-delay="150" data-aos-easing="ease-in-out-back">Achmed Hibatillah</h1>
                <h4 class="text-color1 mb-0" style="margin-top:-2px;" data-aos="fade-up" data-aos-delay="200" data-aos-easing="ease-in-out-back">
                    <i class="me-1">as</i> Full-Stack Web Developer
                </h4>
                <h4 class="text-color2 mt-3 lh-s" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-out-back">
                    IT Undergraduate Student <br>at Brawijaya University
                </h4>
                <div class="d-flex flex-column flex-md-row align-items-center mt-0 mt-lg-4 p-0" style="width:320px;">
                    <a href="<?= base_url('#about-me') ?>" class="btn btn-sm btn-color1 mt-3 mt-md-0 me-md-1" style="width:160px;" data-aos="fade-up" data-aos-delay="550" data-aos-easing="ease-in-out-back">Know about me</a>
                    <a href="<?= base_url('#business') ?>" class="btn btn-sm btn-color1 mt-1 mt-md-0" style="width:160px;" data-aos="fade-up" data-aos-delay="750" data-aos-easing="ease-in-out-back">Business Information</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-color2 d-flex justify-content-center align-items-center py-5" style="min-height:100vh;" id="about-me">
<div style="width: 80%;" data-aos="fade-up" data-aos-delay="10" data-aos-duration="900" data-aos-easing="ease-in-out-back">
    <div class="bg-color4 position-relative" style="padding:35px;margin-top:30px;">
        <img src="<?= base_url('images/emoji/quote.png') ?>" class="position-absolute" style="width:50px;top:-50px;left:-10px;" data-aos="fade-down" data-aos-delay="10" data-aos-duration="700" data-aos-easing="ease-in-out-back">
        <h3 class="position-absolute fw-bold text-color4" style="top:-30px;left:50px;">About Me</h3>
        <img src="<?= base_url('images/emoji/job-developer.png') ?>" class="position-absolute" style="width:50px;top:-33px;right:20px;transform:rotate(7deg)">
        <span id="type-about-me"></span>
    </div>
    <a href="<?= base_url('profile') ?>" class="btn btn-color4 btn-sm mt-2 px-5 fw-bold" data-aos="fade-up" data-aos-delay="10" data-aos-offset="50" data-aos-easing="ease-in-out-back">More <i class="fas fa-external-link-alt ms-2"></i></a>
</div>
</section>

<?= $this->include('home/index-skills') ?>

<?= $this->include('home/index-project') ?>

<?= $this->include('home/index-business') ?>

<?= $this->include('home/index-message') ?>

<?= $this->include('home/index-reach-me') ?>
