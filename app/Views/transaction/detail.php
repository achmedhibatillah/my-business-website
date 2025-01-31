<?php 
$total = $tr['transaction_price_hosting'] + $tr['transaction_price_domain'] + $tr['transaction_price_ssl'] + $tr['transaction_price_api'] + $tr['transaction_service_uiux'] + $tr['transaction_service_frontend'] + $tr['transaction_service_backend'] + $tr['transaction_service_database'];
?>

<section class="bg-color4 d-flex justify-content-center" style="min-height:100vh;padding-top:120px;padding-bottom:90px;">
<div class="container m-0 p-0" style="width:95%;">
    <h1 class="text-color2 fw-bold mb-0 position-relative text-center" style="font-size:58px;">
        Transaction
        <i class="fas fa-check-circle position-absolute cursor-pointer" style="font-size:30px;transform:translate(-50%,-50%)rotate(7deg);top:0px;" data-bs-toggle="modal" data-bs-target="#info-ready"></i>
    </h1>
    <div class="row m-0 p-0 justify-content-center">
    <div class="col-12 col-md-5 m-0 p-0 pt-2">
        <div class="d-flex justify-content-center mb-3">
            <a href="<?= base_url('download-transaction-') . $tr['transaction_id'] ?>" class="btn btn-color2" style="color:var(--color-4);"><i class="fas fa-download me-2"></i> Download PDF here</a>
        </div>
            <div id="transaction-detail" class="card m-0 p-4 bg-colorseclight text-secondary">
                <h4 class="text-center">achmedhibatillah.com</h4>
                <hr>
                <p class="mb-0 text-center">Transaction Receipt</p>
                <p class="mb-0 text-center mb-1">#<?= $tr['transaction_id'] ?></p>
                <hr>
                <p class="mb-0"><?= date('d/m/Y', strtotime($tr['created_at'])) ?></p>
                <p class="mb-0"><?= date('H:i', strtotime($tr['created_at'])) ?> Asia/Jakarta</p>
                <hr>
                <table>
                    <tr>
                        <td class="align-top lh-1" style="width:20%;">Orderer</td>
                        <td class="align-top lh-1" style="width:3%;">:</td>
                        <td class="align-top lh-1" style="width:77%;"><?= 'Firman' ?></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-3" style="width:20%;">Domain</td>
                        <td class="align-top lh-1 pt-3" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-3" style="width:77%;"><?= $tr['transaction_domain'] ?></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-3" style="width:20%;">Requirements</td>
                        <td class="align-top lh-1 pt-3" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-3" style="width:77%;"><?= $tr['transaction_requirement'] ?></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">Framework</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"><?= $tr['transaction_framework'] ?></td>
                    </tr>
                </table>
                <hr>
                <div class="bg-colorsec rounded text-light px-2 we-33 d-inline">ID</div>
                <p class="mb-3 fw-bold">Price Detail:</p>
                
                <table>
                    <tr>
                        <td class="align-top lh-1" style="width:20%;">Hosting</td>
                        <td class="align-top lh-1" style="width:3%;">:</td>
                        <td class="align-top lh-1" style="width:77%;"> Rp. <?= number_format($tr['transaction_price_hosting'], 0, ',', '.') ?>,00 <div class="fsz-12 mt-1 lh-1 ms-2"><?= $tr['transaction_desc_hosting'] ?></div></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">Domain</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_price_domain'], 0, ',', '.') ?>,00 <div class="fsz-12 mt-1 lh-1 ms-2"><?= $tr['transaction_desc_domain'] ?></div></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">SSL</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_price_ssl'], 0, ',', '.') ?>,00 <div class="fsz-12 mt-1 lh-1 ms-2"><?= $tr['transaction_desc_ssl'] ?></div></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">API Integration</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_price_api'], 0, ',', '.') ?>,00 <div class="fsz-12 mt-1 lh-1 ms-2"><?= $tr['transaction_desc_api'] ?></div></td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">UI/UX Services</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_service_uiux'], 0, ',', '.') ?>,00</td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">Front-End Development</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_service_frontend'], 0, ',', '.') ?>,00</td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">Back-End Development</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_service_backend'], 0, ',', '.') ?>,00</td>
                    </tr>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">Databases Development</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($tr['transaction_service_database'], 0, ',', '.') ?>,00</td>
                    </tr>
                </table>
                <hr>
                <table>
                    <tr>
                        <td class="align-top lh-1 pt-2" style="width:20%;">Total</td>
                        <td class="align-top lh-1 pt-2" style="width:3%;">:</td>
                        <td class="align-top lh-1 pt-2" style="width:77%;"> Rp. <?= number_format($total, 0, ',', '.') ?>,00</td>
                    </tr>
                </table>
                <hr class="mt-4">
                <p class="lh-1 mb-0">Thank you for your trust in using my services. If you have any questions, please contact:</p>
                <a href="mailto:contact@achmedhibatillah.com" class="td-none">contact@achmedhibatillah.com</a>
            </div>
        </div>
    </div>
</div>
</section>