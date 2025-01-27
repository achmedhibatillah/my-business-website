<div class="bg-color4 py-5">
    <h1 class="text-center text-color3 ls-xs fw-900"><?= $judul ?></h1>
    <div class="d-flex justify-content-center">
        <a href="<?= base_url('s') ?>" class="text-color3">kaluar</a>
    </div>
    <div class="row m-0 p-0 justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card m-0 p-1 pt-4 text-color3 bg-transparent border-color3">
                <canvas id="trafficChart"></canvas>
            </div>
            <div class="card m-0 p-3 mt-3 text-color3 bg-transparent border-color3">
                <p class="ls-s">Data:</p>
                <pre class="fsz-10"><?= $dump ?></pre>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('trafficChart').getContext('2d');
    
    const trafficChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= $labels; ?>,
            datasets: [{
                label: 'Jumlah Pengunjung',
                data: <?= $data; ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgb(75, 192, 192)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Tanggal'
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Jumlah Pengunjung'
                    },
                    beginAtZero: true
                }
            }
        }
    });
</script>
