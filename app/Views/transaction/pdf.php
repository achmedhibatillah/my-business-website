<?php 
$total = $tr['transaction_price_hosting'] + $tr['transaction_price_domain'] + $tr['transaction_price_ssl'] + $tr['transaction_price_api'] + $tr['transaction_service_uiux'] + $tr['transaction_service_frontend'] + $tr['transaction_service_backend'] + $tr['transaction_service_database'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Transaction PDF</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .container {
        padding: 20px;
    }
    .card {
        border: 1px solid #ccc;
        padding: 20px;
    }
    .text-center {
        text-align: center;
    }
    .fw-bold {
        font-weight: bold;
    }
    .table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    .table td {
        padding: 8px;
        border: 1px solid #ddd;
    }
</style>
</head>
<body>
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
</body>
</html>