<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="Achmed Hibatillah" />
    <meta property="og:description" content="Welcome to Ahmed Hibatillah's portfolio website!" />
    <meta property="og:url" content="https://achmedhibatillah.com" />
    <meta property="og:image" content="<?= base_url('images/meta.png') ?>" />
    <meta property="og:type" content="website" />

    <title>Achmed Hibatillah | <?= $judul ?></title>

    <link rel="icon" href="<?= base_url('images/profile.png') ?>" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Poppins Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Fas Fa Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- SweetAlert CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.3/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- CDN AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-3d"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="<?= base_url('js/shart.js') ?>"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Github Calendar -->
    <link rel="stylesheet" href="<?= base_url('css/github-calendar.css') ?>"/>

    <!-- Internal CSS -->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/achmedhibatillah/cdn-achmedhibatillah.com/refs/heads/main/style.css">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <?= $this->include('templates/style-lp') ?>

</head>
<body>

<button id="scrollToTopBtn" class="btn btn-primary">↑</button>

<style>
#scrollToTopBtn { position: fixed; bottom: 13px; right: 13px; display: none; background-color: var(--color-1); color: white; border: none; border-radius: 50%; font-size: 20px; padding: 10px; cursor: pointer; z-index: 9999; width: 40px; height: 40px; justify-content: center; align-items: center; box-shadow: 0 0 5px rgba(0, 0, 0, 0.8); }
#scrollToTopBtn:hover { background-color:rgb(0, 21, 92); }
</style>
<script>
window.onscroll = function() {
    var button = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        button.style.display = "flex";
    } else {
        button.style.display = "none";
    }
};

document.getElementById("scrollToTopBtn").onclick = function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>