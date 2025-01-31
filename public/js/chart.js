var ctx = document.getElementById('toplanguages').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['PHP', 'JavaScript', 'SCSS', 'HTML', 'CSS', 'Smarty'],
        datasets: [{
            label: 'Language Distribution',
            data: [88.4, 4.21, 3.25, 2.92, 1.08, 0.14],
            backgroundColor: [
                '#4F5D95', // PHP
                '#F7DF1E', // JavaScript
                '#C74894', // SCSS
                '#E44D26', // HTML
                '#1572B6', // CSS
                '#F8A400'  // Smarty
            ],
            borderWidth: 0
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: {
            duration: 1500,
            easing: 'easeInOutBounce'
        },
        plugins: {
            legend: {
                display: false,
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw.toFixed(2) + '%';
                    }
                }
            }
        }
    }
});
