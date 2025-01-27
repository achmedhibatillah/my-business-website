<section class="bg-color4 d-flex justify-content-center" style="min-height:100vh;padding-top:120px;">
<div class="container m-0 p-0" style="width:80%;">
    <h1 class="text-color2 fw-bold mb-0 position-relative" style="font-size:58px;">
        <?= $package['packets_name'] ?>
        <i class="fas fa-check-circle position-absolute cursor-pointer" style="font-size:30px;transform:translate(-50%,-50%)rotate(7deg);top:0px;" data-bs-toggle="modal" data-bs-target="#info-ready"></i>
    </h1>
    <h5 class="text-secondary ms-3 mb-4">Package</h5>
    <div class="card m-0 mt-3 bg-color4 border-colorsec">
        <div class="card-body">
            <div class="row m-0 p-0">
                <div class="col-md-3 m-0 p-0">
                    <div class="card bg-color2 py-3 px-3" style="width:max-content;">
                        <i class="h3 fst-normal fw-bold ls-xs text-colorsec d-inline m-0"><del>$ <?= $package['packets_pricex'] ?></del></i>
                        <h1 class="fw-bold ls-xs text-color4 d-inline m-0">$ <?= $package['packets_price'] ?></h1>
                    </div>
                </div>
                <div class="col-md-9 m-0 p-0 d-flex justify-content-start justify-content-md-center align-items-start align-items-md-center">
                    <h4 class="text-color2 fw-light lh-s mt-3 mt-md-0 mb-0"><?= $package['packets_description'] ?></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 mb-5 p-0">
        <div class="col-md-6 m-0 p-0">
            <div class="card mt-5 bg-color4">
                <div class="card-header p-0">
                    <h2 class="text-center m-0 my-2 text-color2 ls-s">You get</h2>
                </div>
                <div class="py-5 px-4">
                    <table>
                        <tr style="height: 35px;">
                            <td class="align-top text-center text-color3" style="width:50px;"><i class="fas fa-check"></i></td>
                            <td class="align-top text-color2"><?= $package['packets_features'] ?> request features <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-requestfeatures"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_responsive'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Responsive site <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-responsivesite"></i></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_hosting'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Hosting <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-hosting"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_domain'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Domain <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-domain"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_ssl'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">SSL <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-ssl"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_auth'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Authentication access <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-auth"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_root'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Root authentication access <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-root"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_crud'] == 0) ? '<i class="text-secondary">-</i>' : '<i class="fas fa-check text-color3"></i>' ?></td>
                            <td class="align-top text-color2"><?= ($package['packets_crud'] == 0) ? '' : $package['packets_crud'] ?> CRUD operation <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-crud"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_uiux'] == 0) ? '<i class="text-secondary">-</i>' : '<i class="fas fa-check text-color3"></i>' ?></td>
                            <td class="align-top text-color2"><?= ($package['packets_uiux'] == 0) ? '' : $package['packets_uiux'] ?> UI/UX design <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-uiux"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_statistic'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Statistic / data analytic program <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-statistic"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_api'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">API integration <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-api"></i></td>
                        </tr>
                        <tr style="height: 35px;">
                            <td class="align-top text-center" style="width:50px;"><?= ($package['packets_logo'] == 1) ? '<i class="fas fa-check text-color3"></i>' : '<i class="text-secondary">-</i>' ?></td>
                            <td class="align-top text-color2">Logo design <i class="fas fa-info-circle text-secondary cursor-pointer" data-bs-toggle="modal" data-bs-target="#info-logo"></i></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="d-flex justify-content-center justify-content-md-start">
                <div class="ms-0 ms-md-5">
                    <img src="<?= base_url('images/brand/logo-visacard.png') ?>" height="35px">
                    <img src="<?= base_url('images/brand/logo-mastercard.png') ?>" height="35px">
                    <img src="<?= base_url('images/brand/logo-paypal.png') ?>" height="35px">
                    <img src="<?= base_url('images/brand/logo-bri.png') ?>" height="35px">
                </div>
            </div>
            <div class="ms-0 ms-md-5 mt-3">
                <div class="card p-3 bg-color4" id="form-order">
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success text-center text-color3 lh-1">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?= base_url('submit-order') ?>" method="post">
                        <input type="hidden" name="order-slug" value="<?= $package['packets_name'] ?>">
                        <input type="hidden" name="packets-id" value="<?= $package['packets_id'] ?>">
                        <p class="mb-4 text-color2">* Before paying for your order, I would like to contact you via email and invite you for online meet to know what your requirement.</p>

                        <div class="form-group mb-3">
                            <label class="text-color2" for="exampleInputEmail1">Email address</label>
                            <input name="order-email" type="text" class="form-control border-color2 bg-color4 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-email']) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="..." value="<?= old('order-email') ?>">
                            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-email'])): ?>
                                <div class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['order-email'] ?></div>
                            <?php endif; ?>
                            <small id="emailHelp" class="form-text text-muted">I will reply via the email you sent.</small>
                        </div> 

                        <div class="row m-0 p-0">
                            <div class="col-6 m-0 p-0">
                                <div class="form-group me-1">
                                    <label class="text-color2" for="firstname">First name</label>
                                    <input name="order-firstname" type="text" class="form-control border-color2 bg-color4 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-firstname']) ? 'is-invalid' : '' ?>" id="firstname" placeholder="..." value="<?= old('order-firstname') ?>">
                                </div>
                            </div>
                            <div class="col-6 m-0 p-0">
                                <div class="form-group">
                                    <label class="text-color2" for="lastname">Last name</label>
                                    <input name="order-lastname" type="text" class="form-control border-color2 bg-color4 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-lastname']) ? 'is-invalid' : '' ?>" id="lastname" placeholder="..." value="<?= old('order-lastname') ?>">
                                </div>
                            </div>
                        </div>
                        <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-firstname'])): ?>
                            <p class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['order-firstname'] ?></p>
                        <?php elseif (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-lastname'])): ?>
                            <p class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['order-lastname'] ?></p>
                        <?php endif; ?>

                        <div class="form-group mt-4 mb-3">
                            <label class="text-color2 lh-1" for="what">What kind of website do you want?</label>
                            <textarea name="order-requirement" type="text" class="form-control border-color2 bg-color4 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-requirement']) ? 'is-invalid' : '' ?>" id="what" placeholder="..." style="height:100px;"><?= old('order-requirement') ?></textarea>
                            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['order-requirement'])): ?>
                                <div class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['order-requirement'] ?></div>
                            <?php endif; ?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-color2-4 mt-3 px-5">Order this package now!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?= $this->include('home/package-info') ?>
<div class="bg-color4" style="padding-top: 200px;"></div>
<?= $this->include('home/index-reach-me') ?>

<script>
window.addEventListener("load", function() {
  if (window.location.hash === "#form-order") {
    const targetElement = document.querySelector("#form-order");
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 110,
        behavior: "smooth"
      });
    }
  }
});
</script>