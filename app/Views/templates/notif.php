<?php $session = session(); ?>
<?php if ($session->get('notif') === true): ?>

<div id="floating-notif" class="position-fixed" style="bottom:5px;left:5px;z-index:10;" data-aos="zoom-in" data-aos-easing="ease-in-out-back" data-aos-delay="2000" data-aos-once="true">

<div class="card p-1 m-0 bg-color4 shadow-m border-color4" style="width:300px;z-index:-222;">
    <div class="p-0 position-relative">
        <div class="row m-0 p-0">
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
<div class="row m-0 p-0" style="z-index:11;">
    <div class="col-9 m-0 p-0">
        <a href="https://wa.me/6281388324884" target="_blank" class="btn btn-secondary btn-sm py-0 shadow" style="width:99%;"><i class="fab fa-whatsapp"></i> Oh, right!</a>
    </div>
    <div class="col-3 m-0 p-0">
        <button id="close-floating-notif" class="btn btn-secondary btn-sm py-0 width-100 shadow">x</button>
    </div>
</div>

</div>

<?php endif; ?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const floatingCard = document.getElementById('floating-notif');
    const lpChat = document.getElementById('lp-chat');
    let isFloatingCardClosed = false; // Flag untuk melacak status penutupan

    // IntersectionObserver untuk mengatur tampilan floating-notif berdasarkan apakah lpChat ada di viewport
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Jika sudah ditutup oleh user, jangan tampilkan lagi
                if (!isFloatingCardClosed) {
                    floatingCard.style.display = 'none';
                }
            } else {
                if (!isFloatingCardClosed) {
                    floatingCard.style.display = 'block';
                }
            }
        });
    }, {
        root: null,
        threshold: 0.1
    });

    observer.observe(lpChat);

    // Menutup floating-notif ketika tombol close-floating-notif diklik
    document.getElementById('close-floating-notif').addEventListener('click', function() {
        floatingCard.style.display = 'none';
        isFloatingCardClosed = true; // Set flag ke true setelah ditutup
    });
});
</script>