<style>
/* Smartphone sedang (361px - 600px) */
@media screen and (max-width: 600px) {
.bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-sm.png") ?>');
    background-size: auto 100vh;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
}   
.col-hi { margin-top:-250px; }
.text-p-responsive { font-size: 14px; }
.text-p-responsive-2 { font-size: 14px; }
.card-body-project { margin-top: 95px; }
}

/* Tablet (601px - 1024px) */
@media screen and (min-width: 601px) and (max-width: 1024px) {
.bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-md.png") ?>');
    background-size: 100vw auto;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
}
.col-hi { margin-top:90px; } 
.text-p-responsive { font-size: 15px; }
.text-p-responsive-2 { font-size: 10px; }
.card-body-project { margin-top: 80px; }
}

/* Laptop (1025px - 1366px) */
@media screen and (min-width: 1025px) {
.bg-lp-top { 
    background-image: url('<?= base_url("images/bg-lp-top-lg.png") ?>');
    background-size: 100vw auto;
    background-attachment: scroll;
    background-position: center center;
    background-repeat: no-repeat;
}
.col-hi { margin-top:115px; } 
.text-p-responsive { font-size: 16px; }
.text-p-responsive-2 { font-size: 16px; }
.card-body-project { margin-top: 130px; }
}
</style>