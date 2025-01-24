<style>
/* Smartphone Kecil */
@media screen and (max-width: 575px) {
  .bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-sm.png") ?>');
    background-size: auto 100vh;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
  }
  .col-hi { margin-top: -230px; }
  .text-responsive { font-size: 0.7rem; }
  .text-p-responsive { font-size: 13px; }
  .text-p-responsive-2 { font-size: 13px; }
  .card-body-project { margin-top: 80px; }
}

/* Smartphone sedang */
@media screen and (min-width: 576px) and (max-width: 767px) {
.bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-sm.png") ?>');
    background-size: auto 100vh;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
}
.col-hi { margin-top:-270px; }
.text-responsive { font-size: 0.8rem; }
.text-p-responsive { font-size: 14px; }
.text-p-responsive-2 { font-size: 14px; }
.card-body-project { margin-top: 95px; }
}

/* Tablet */
@media screen and (min-width: 768px) and (max-width: 990px) {
.bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-md.png") ?>');
    background-size: 100vw auto;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
}
.col-hi { margin-top:70px; } 
.text-responsive { font-size: 0.9rem; }
.text-p-responsive { font-size: 15px; }
.text-p-responsive-2 { font-size: 10px; }
.card-body-project { margin-top: 80px; }
}

/* Laptop */
@media screen and (min-width: 991px) {
.bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-lg.png") ?>');
    background-size: 100vw auto;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
}
.col-hi { margin-top:90px; } 
.text-responsive { font-size: 1rem; }
.text-p-responsive { font-size: 16px; }
.text-p-responsive-2 { font-size: 16px; }
.card-body-project { margin-top: 130px; }
}
</style>