<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.3/dist/sweetalert2.all.min.js"></script>

<!-- GSAP Animation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>

<!-- Typed JS -->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="<?= base_url('js/typed.js') ?>"></script>

<!-- Chart JS -->
<script src="<?= base_url('js/chart.js') ?>"></script>

<!-- AOS -->
<script src="<?= base_url('js/aos.js') ?>"></script>
<script>
  AOS.init({
      once: false,
      mirror: true,
      duration: 700,
      easing: 'ease-in-out',
      offset: 20
  });
</script>

<!-- CDN Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html> 