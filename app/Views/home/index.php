<section class="position-relative bg-lp-top bg-color4" style="height:100vh;">
<div class="row m-0 p-0 width-100 height-100">
    <div class="col-md-6"></div>
    <div class="col-md-6 d-flex justify-content-center justify-content-sm-start align-items-start align-items-sm-center col-hi">
        <div>
            <h4 class="ls-1 text-color3 position-relative text-center text-sm-start">Hi, Everybody! 
                <img src="<?= base_url('images/emoji/waving-hand.png') ?>" class="position-absolute ms-1"  style="height:25px;"> 
                <i class="fst-normal" style="margin-left:40px;">I’am</i>
            </h4>
            <h1 class="text-color1 ls-xs fw-800 mb-0 text-center text-sm-start">Achmed Hibatillah</h1>
            <h4 class="text-color1 mb-0 text-center text-sm-start" style="margin-top:-2px;"><i class="me-2">as</i> Full-Stack Web Developer</h4>
            <h4 class="text-color2 mt-3 lh-s text-center text-sm-start">IT Undergraduate Student <br>at Brawijaya University</h4>

            <div class="d-flex flex-column flex-md-row align-items-center mt-0 mt-lg-4 p-0" style="width:320px;">
                <a href="<?= base_url('#about-me') ?>" class="btn btn-sm btn-color1 mt-3 mt-md-0 me-md-1" style="width:160px;">More about me</a>
                <a href="<?= base_url('#about-me') ?>" class="btn btn-sm btn-color1 mt-1 mt-md-0" style="width:160px;">Business Information</a>
            </div>

        </div>
    </div>
</div>
</section>

<section class="bg-color2 d-flex justify-content-center align-items-center py-5" style="min-height:100vh;" id="about-me">
<div style="width: 80%;">
    <div class="bg-color4 position-relative" style="padding:35px;margin-top:30px;">
        <img src="<?= base_url('images/emoji/quote.png') ?>" class="position-absolute" style="width:50px;top:-50px;left:-10px;">
        <h3 class="position-absolute fw-bold text-color4" style="top:-30px;left:50px;">About Me</h3>
        <img src="<?= base_url('images/emoji/job-developer.png') ?>" class="position-absolute" style="width:50px;top:-33px;right:20px;transform:rotate(7deg)">
        <h5 class="ls-1 text-color1" style="text-align:justify;">I’m a skilled <i class="fst-normal bg-color2 text-color4">web developer</i> with expertise in <i class="fst-normal bg-color3 text-color4 p-0">full-stack development</i>, both front-end and back-end. I’m proficient in <i class="fst-normal bg-color3 text-color4 p-0">PHP</i> and have hands-on experience using popular frameworks like CodeIgniter and Laravel for building robust back-end systems. On the front-end, I have strong skills in <i class="fst-normal bg-color3 text-color4 p-0">HTML</i>, <i class="fst-normal bg-color3 text-color4 p-0">CSS (Bootstrap)</i>, and <i class="fst-normal bg-color3 text-color4 p-0">JavaScript</i>, which allow me to create responsive and interactive user interfaces. I’m also adept at <i class="fst-normal bg-color3 text-color4 p-0">managing database query</i> and working with <i class="fst-normal bg-color3 text-color4 p-0">database programming</i> to ensure efficient data handling and smooth integration across applications.</h5>
    </div>
    <a href="<?= base_url('about-me') ?>" class="btn btn-color4 btn-sm mt-2 px-5 fw-bold">More <i class="fas fa-external-link-alt ms-2"></i></a>
</div>
</section>

<?= $this->include('home/index-skills') ?>

<?= $this->include('home/index-project') ?>

<?= $this->include('home/index-business') ?>

<?= $this->include('home/index-reach-me') ?>