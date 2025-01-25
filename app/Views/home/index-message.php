<section class="bg-color2">

<div id="lp-chat" class="row m-0 p-0 width-100" style="min-height:100vh;padding-top:100px !important;">

<div class="col-md-6 m-0 p-0 d-flex justify-content-center align-items-center">
    <div>
    <?php if (session()->getFlashdata('rate-success')): ?>
        <div class="alert alert-success text-center m-3 text-color3" data-aos="fade-up" data-aos-easing="ease-in-out-back">
            <?= session()->getFlashdata('rate-success') ?>
        </div>
    <?php endif; ?>

    <?php $session = session(); ?>
    <?php if ($session->get('rate') === true): ?>
    <div class="card bg-color4 border-color4 m-3 p-3" id="lp-rate" data-aos="fade-up" data-aos-easing="ease-in-out-back">
        <form action="<?= base_url('submit-rate') ?>" method="post">
            <h4 class="mb-4 ls-xs text-color3 text-center">Rate me</h4>
            <hr class="text-color2">
            <div class="d-flex justify-content-center align-items-center">
            <div class="rating">
                <input type="radio" id="star5" name="rate_rate" value="5"><label for="star5" title="Awesome">&#9733;</label>
                <input type="radio" id="star4" name="rate_rate" value="4"><label for="star4" title="Good">&#9733;</label>
                <input type="radio" id="star3" name="rate_rate" value="3"><label for="star3" title="Average">&#9733;</label>
                <input type="radio" id="star2" name="rate_rate" value="2"><label for="star2" title="Not Good">&#9733;</label>
                <input type="radio" id="star1" name="rate_rate" value="1"><label for="star1" title="Bad">&#9733;</label>
            </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-sm btn-color3 mt-3 px-5">Submit</button>
            </div>
        </form>
    </div>
    <?php endif; ?>


    <div class="card bg-color4 border-color4 m-3 p-3" id="lp-suggestion" data-aos="fade-up" data-aos-easing="ease-in-out-back">
        <form action="<?= base_url('submit-suggestion') ?>" method="post">
            <h4 class="mb-4 ls-xs text-color3">Give me a suggestions to be better..</h4>
            <hr class="text-color2">
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success text-center text-color3">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <div class="row m-0 p-0">
                <div class="col-6 m-0 p-0">
                    <div class="form-group me-1">
                        <label class="text-color3" for="firstname">First name</label>
                        <input name="suggestion-firstname" type="text" class="form-control bg-color4 border-color3 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['suggestion-firstname']) ? 'is-invalid' : '' ?>" id="firstname" placeholder="..." value="<?= old('suggestion-firstname') ?>">
                    </div>
                </div>
                <div class="col-6 m-0 p-0">
                    <div class="form-group">
                        <label class="text-color3" for="lastname">Last name</label>
                        <input name="suggestion-lastname" type="text" class="form-control bg-color4 border-color3 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['suggestion-lastname']) ? 'is-invalid' : '' ?>" id="lastname" placeholder="..." value="<?= old('suggestion-lastname') ?>">

                    </div>
                </div>
            </div>
            <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['suggestion-firstname'])): ?>
                <p class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['suggestion-firstname'] ?> If you do not want to include your name, click the checkbox below.</p>
            <?php elseif (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['suggestion-lastname'])): ?>
                <p class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['suggestion-lastname'] ?> If you do not want to include your name, click the checkbox below.</p>
            <?php endif; ?>
            <div class="form-check">
                <input class="form-check-input border-color3 cursor-pointer" type="checkbox" id="disableNameCheckbox">
                <label class="form-check-label text-color3" style="font-size:14px;" for="disableNameCheckbox">
                    I didn't include name.
                </label>
            </div>
            <div class="form-group mb-3">
                <label class="text-color3 lh-1" for="what">Give your suggestion here</label>
                <textarea name="suggestion-suggestion" type="text" class="form-control bg-color4 border-color3 <?= session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['suggestion-suggestion']) ? 'is-invalid' : '' ?>" id="what" placeholder="..." style="height:100px;"><?= old('suggestion-suggestion') ?></textarea>
                <?php if (session()->getFlashdata('errors') && isset(session()->getFlashdata('errors')['suggestion-suggestion'])): ?>
                    <div class="text-danger mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors')['suggestion-suggestion'] ?></div>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-sm btn-color3 mt-3 px-5">Send</button>
        </form>
    </div>
    </div>
</div>

<div class="col-md-6 m-0 p-0 d-flex justify-content-center align-items-center">
<div class="card bg-color2 border-none px-3">
    <div class="card-body">
        <p class="text-color4 lh-s mb-0 text-p-responsive" data-aos="fade-up" data-aos-easing="ease-in-out-back">If there is something that needs to be discussed,</p>
        <h2 class="text-color4 ls-xxs lh-xs mb-2" data-aos="fade-up" data-aos-easing="ease-in-out-back">you can chat me on Whatsapp.</h2>
        <hr class="text-color4" data-aos="fade-up" data-aos-easing="ease-in-out-back">
        <div class="card p-1 m-0 bg-color4 cursor-pointer" onclick="window.open('https://wa.me/6281388324884', '_blank');" style="width:300px;" data-aos="fade-up" data-aos-easing="ease-in-out-back">
            <div class="p-0">
                <div class="row m-0">
                    <div class="col-3 m-0 p-0">
                        <div class="position-relative d-inline">
                            <img src="<?= base_url('images/whatsapp.png') ?>" style="width:50px;" class="border-colorsec-m rounded-circle">
                            <i class="fas fa-circle text-success position-absolute" style="transform:translate(-50%,-50%);bottom:-22px;right:-22%;"></i>
                        </div>
                    </div>
                    <div class="col-7 m-0 p-0" style="overflow-x:hidden; white-space:nowrap;">
                        <h5 class="text-color1 mt-1 mb-0" style="font-size:17px;">Achmed Hibatillah</h5>
                        <p class="text-color1 my-0">Can I help you?<img src="<?= base_url('images/emoji/face-smiling-eye-smiling.png') ?>" class="pb-1 img-death" style="width:18px;"></p>
                    </div>
                    <div class="col-2 m-0 p-0">
                        <p class="text-success text-center m-0">Now</p>
                        <div class="d-flex justify-content-center">
                            <p class="text-light bg-success d-flex justify-content-center my-0 p-0" style="border-radius:50%;width:20px;height:20px;font-size:14px;">1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="https://wa.me/6281388324884" target="_blank" class="text-color4 mt-5 td-none" data-aos="fade-up" data-aos-delay="400" data-aos-easing="ease-in-out-back">My Whatsapp <i class="fab fa-whatsapp"></i> →</a>
    </div>
</div>
</div>

</div>

</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const checkbox = document.getElementById('disableNameCheckbox');
    const firstname = document.getElementById('firstname');
    const lastname = document.getElementById('lastname');

    if (firstname.value === '-' && lastname.value === '-') {
        checkbox.checked = true;
        firstname.disabled = true;
        lastname.disabled = true;
        firstname.classList.add('disabled-input');
        lastname.classList.add('disabled-input');

        if (!document.getElementById('hidden-firstname')) {
            let hiddenFirst = document.createElement('input');
            hiddenFirst.type = 'hidden';
            hiddenFirst.name = 'suggestion-firstname';
            hiddenFirst.value = '-';
            hiddenFirst.id = 'hidden-firstname';
            firstname.parentNode.appendChild(hiddenFirst);
        }

        if (!document.getElementById('hidden-lastname')) {
            let hiddenLast = document.createElement('input');
            hiddenLast.type = 'hidden';
            hiddenLast.name = 'suggestion-lastname';
            hiddenLast.value = '-';
            hiddenLast.id = 'hidden-lastname';
            lastname.parentNode.appendChild(hiddenLast);
        }
    }

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            firstname.disabled = true;
            lastname.disabled = true;
            firstname.classList.add('disabled-input');
            lastname.classList.add('disabled-input');

            if (!document.getElementById('hidden-firstname')) {
                let hiddenFirst = document.createElement('input');
                hiddenFirst.type = 'hidden';
                hiddenFirst.name = 'suggestion-firstname';
                hiddenFirst.value = '-';
                hiddenFirst.id = 'hidden-firstname';
                firstname.parentNode.appendChild(hiddenFirst);
            }

            if (!document.getElementById('hidden-lastname')) {
                let hiddenLast = document.createElement('input');
                hiddenLast.type = 'hidden';
                hiddenLast.name = 'suggestion-lastname';
                hiddenLast.value = '-';
                hiddenLast.id = 'hidden-lastname';
                lastname.parentNode.appendChild(hiddenLast);
            }

        } else {
            firstname.disabled = false;
            lastname.disabled = false;
            firstname.classList.remove('disabled-input');
            lastname.classList.remove('disabled-input');

            const hiddenFirst = document.getElementById('hidden-firstname');
            const hiddenLast = document.getElementById('hidden-lastname');
            if (hiddenFirst) hiddenFirst.remove();
            if (hiddenLast) hiddenLast.remove();
        }
    });
});
</script>


<style>
.disabled-input { background-color:rgb(221, 221, 221) !important; color:rgb(156, 156, 156) !important; cursor: not-allowed; }
.rating { direction: rtl; font-size: 30px; }
.rating input { display: none; }
.rating label { color: var(--color-3); cursor: pointer; }
.rating input:checked ~ label, .rating label:hover, .rating label:hover ~ label {color: #ffcc00; }
</style>