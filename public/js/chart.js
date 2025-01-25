var ctx = document.getElementById('toplanguages').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie', // Tipe grafik lingkaran
    data: {
        labels: ['PHP', 'JavaScript', 'SCSS', 'HTML', 'CSS', 'Smarty'],
        datasets: [{
            label: 'Language Distribution',
            data: [88.4, 4.21, 3.25, 2.92, 1.08, 0.14], // Data
            backgroundColor: [
                '#4F5D95', // PHP (warna khas PHP)
                '#F7DF1E', // JavaScript (warna khas JS)
                '#C74894', // SCSS (warna khas SCSS)
                '#E44D26', // HTML (warna khas HTML)
                '#1572B6', // CSS (warna khas CSS)
                '#F8A400'  // Smarty (warna khas Smarty)
            ],
            borderColor: [
                '#4F5D95',
                '#F7DF1E',
                '#C74894',
                '#E44D26',
                '#1572B6',
                '#F8A400'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false, // Menghilangkan legenda (labels)
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2) + '%'; // Menampilkan persen
                    }
                }
            }
        }
    }
});