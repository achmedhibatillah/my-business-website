<nav id="navbar-user" class="navbar navbar-expand-lg shadow" style="padding: 2px;">
  <div class="container-fluid bg-color3 d-flex align-items-center justify-content-between">
    <!-- Logo -->
    <div class="d-flex justify-content-center align-items-center p-0">
        <a class="navbar-brand p-0 m-0" href="<?= base_url('/') ?>" style="position:relative;">
            <img src="<?= base_url('images/logo-text-color4.png') ?>" alt="logo" style="height:25px;position:absolute;top:-12.5px" class="m-0">
        </a>
    </div>
    <!-- Navbar Menu -->
    <div class="collapse navbar-collapse order-1 me-2" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link ls-nav text-color4" href="<?= base_url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ls-nav text-color4" href="<?= base_url('#about-me') ?>">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ls-nav text-color4" href="<?= base_url('#skills') ?>">My Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ls-nav text-color4" href="<?= base_url('#project') ?>">My Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ls-nav text-color4" href="<?= base_url('#business') ?>">Business</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ls-nav text-color4" href="<?= base_url('#reach-me') ?>">Reach Me</a>
        </li>
      </ul>
    </div>
    <!-- Toggler and User Icon -->
    <div class="d-flex align-items-center justify-content-between order-2" id="btn-nav">
      <a href="<?= base_url('message') ?>" id="" class="me-auto" style="text-decoration: none !important;"><i class="fas fa-comments text-color4"></i></a>
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border: none;">
        <i class="fas fa-bars text-color1"></i>
      </button>
    </div>
  </div>
</nav>

<style>
.active {
    color: var(--color-1) !important;
}

#navbar-user {
    transform: translate(-50%, 0%);
    position: fixed;
    top: 10px;
    left: 50%;
    border-radius: 50px;
    z-index: 999;
    width: 90%;
}

#navbar-user .container-fluid {
    border-radius: 50px;
    box-shadow: 
        inset 0 4px 10px rgba(255, 255, 255, 0.5),
        inset 0 -4px 10px rgba(0, 0, 0, 0.2),
        0 4px 10px rgba(0, 0, 0, 0.3);
}
#user-icon {
    background-color: var(--color-1);
    border-radius: 50%;
    aspect-ratio: 1 / 1;
    height: 25px;
    font-size: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.ls-nav {
    letter-spacing: -1px !important;
    font-weight: normal;
}
.swal-custom-primary-bg {
    background-color: var(--color-1) !important;
    color: #fff !important;
    border-radius: 10px;
}
.swal-confirm-text-color {
    color: var(--color-1) !important;
}
@media (max-width: 768px) {
  #navbarNav.show + #btn-nav {
    width: 100%;
    margin: 7px 0 10px 0;
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar-user");
    const navbarcont = document.querySelector("#navbar-user .container-fluid");
    const toggler = document.querySelector(".navbar-toggler");
    const navbarCollapse = document.getElementById("navbarNav");

    // Event saat navbar dibuka
    navbarCollapse.addEventListener("show.bs.collapse", function () {
        navbar.style.borderRadius = "7px";
        navbarcont.style.borderRadius = "7px";
    });

    // Event saat navbar ditutup
    navbarCollapse.addEventListener("hide.bs.collapse", function () {
        navbar.style.borderRadius = "50px";
        navbarcont.style.borderRadius = "50px";
    });
});

function showAccountInfo() {
    Swal.fire({
        title: 'Akun Anda',
        html: `
<p class="text-color4 fst-italic text-center">No kartu kendali</p>
<h3 class="text-color2 text-center fw-bold ls-1" style="margin-top: -16px;">#0000</h3>
<p class="text-color4 fst-italic text-center">Nama lengkap</p>
<h3 class="text-color2 text-center fw-bold ls-1" style="margin-top: -16px;">Nama Guest</h3>
        `,
        icon: 'info',
        showCloseButton: true,
        showCancelButton: true,
        confirmButtonText: 'Lihat profil',
        cancelButtonText: 'Logout',
        cancelButtonColor: '#dc3545',
        confirmButtonColor: 'var(--color-2)',
        focusConfirm: false,
        customClass: {
            popup: 'swal-custom-primary-bg',
            confirmButton: 'swal-confirm-text-color',
        },
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?= base_url('profil-user') ?>";
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            window.location.href = "<?= base_url('user-logout') ?>";
        }
    });
}

</script>