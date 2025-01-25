<section class="bg-color4" id="business">
<div class="row width-100 m-0 p-0">
<div class="col-md-6 m-0 p-0 d-flex justify-content-center align-items-center order-md-1 order-2">
    <div class="mx-5 my-5">
        <h1 class="text-center text-md-start text-color4 ls-xxs fw-800 bg-color1" style="font-size:40px;" data-aos="fade-up" data-aos-mirror="false" data-aos-easing="ease-in-out-back">Business</h1>
        <h5 class="text-center text-md-start text-color1 ls-1 lh-s" data-aos="fade-up" data-aos-mirror="false" data-aos-delay="200" data-aos-easing="ease-in-out-back">I have a business providing website development services for you. If you are interested in using my services, please see the packages I provide in the bottom.</h5>
        <div class="border-colorsec p-2" data-aos="fade-up" data-aos-mirror="false" data-aos-delay="350" data-aos-easing="ease-in-out-back">
            <p class="text-center text-md-start text-color1 ls-xs lh-s fst-italic mt-2 mb-0">Payment method:</p>
            <hr class="text-colo1 my-3">
            <div class="d-flex justify-content-center justify-content-md-start">
                <div class="">
                    <img src="<?= base_url('images/brand/logo-visacard.png') ?>" height="35px">
                    <img src="<?= base_url('images/brand/logo-mastercard.png') ?>" height="35px">
                    <img src="<?= base_url('images/brand/logo-paypal.png') ?>" height="35px">
                    <img src="<?= base_url('images/brand/logo-bri.png') ?>" height="35px">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-6 m-0 p-0 d-flex justify-content-center align-items-center order-md-2 order-1">
    <img src="<?= base_url('images/bg-lp-business.png') ?>" width="100%" class="pt-5" data-aos="fade-up" data-aos-mirror="false" data-aos-delay="200" data-aos-easing="ease-in-out-back">
</div>
</div>
</section>

<section class="bg-color4" style="padding-bottom:100px;">
<?php $num = 1; ?>
<div class="row m-0 p-0 width-100">
    <?php foreach($packages as $x) : ?>
        <?php 
        // $justify_lg = '';
        // if ($num % 3 == 1) {
        //     $justify_lg = 'justify-content-lg-end';
        // } elseif ($num % 3 == 2) {
        //     $justify_lg = 'justify-content-lg-center';
        // } else {
        //     $justify_lg = 'justify-content-lg-start';
        // }
        // if ($num % 2 == 1) {
        //     $justify_md = 'justify-content-md-end';
        // } else {
        //     $justify_md = 'justify-content-md-start';
        // }
        // $num++; 
    ?>
        <div class="col-12 col-md-6 col-lg-4 m-0 p-0 px-md-1 d-flex justify-content-center <?= '' // $justify_lg . ' ' . $justify_md ?> align-items-center mb-4">
            <div class="card bg-color4 border-color1-s m-0 py-4" style="width:340px;" data-aos="fade-up" data-aos-easing="ease-in-out-back">
                <h1 class="text-color1 text-center ls-xs"><?= $x['packets_name'] ?></h1>
                <div class="d-flex justify-content-center align-items-center">
                    <div class="position-relative">
                        <h5 class="text-secondary text-center ls-xxs position-absolute" style="transform:translate(-99%,-50%) rotate(-9deg);top:20px;left:-10px;"><del>$ <?= round($x['packets_pricex']) ?></del></h5>
                        <h1 class="text-color1 text-center fw-900 ls-xxs">$ <?= round($x['packets_price']) ?></h1>
                    </div>
                </div>
                <hr class="text-color1">
                <p class="text-color1 text-center mx-3 lh-s"><?= $x['packets_description'] ?></p>
                <a href="<?= base_url('package-' . strtolower($x['packets_name'])) ?>" class="text-center text-color2 fst-italic td-none">show detail →</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</section>