<section class="bg-color4 d-flex justify-content-center align-items-center" style="min-height:100vh;">
<div class="">
    <p class="fsz-14 text-center text-color1 ls-s lh-xs mb-1">Mau nyoba login kah, sayang?</p>
    <p class="fsz-14 text-center text-color1 ls-s lh-xs mb-2">Gpp, masukin key-nya dulu tapi.</p>
    <form action="<?= base_url('verification') ?>" method="post">
        <?= csrf_field() ?>
        <input type="text" name="key" class="input-color4 p-1 ps-2 m-0 he-40 <?= session()->getFlashdata('errors-auth') && isset(session()->getFlashdata('errors-auth')['key']) ? 'is-invalidd' : '' ?>" placeholder="key.." style="width:270px;" value="<?= old('key') ?>">
        <?php if (session()->getFlashdata('errors-auth') && isset(session()->getFlashdata('errors-auth')['key'])): ?>
            <div class="text-danger text-center mt-1 mb-1 lh-s" style="font-size:13px;"><?= session()->getFlashdata('errors-auth')['key'] ?></div>
        <?php endif; ?>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-color1 m-0 p-0 px-3 he-25 d-block">Verif!</button>
        </div>
    </form>
</div>
</section>