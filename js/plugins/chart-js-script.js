var ctx = $("#result-pie");
var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["TC", "TW", "TN"],
        datasets: [{
            data: [7, 4, 1],
            backgroundColor: [
                'rgb(40, 167, 69)',
                'rgb(220, 53, 69)',
                'rgb(23, 162, 184)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        responsive: true
    }
});
var ctx = $("#result-bar");
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["FM", "PS", "NS", "MO"],
        datasets: [{
            data: [48, 28, -4, 24],
            backgroundColor: [
                'rgba(255, 193, 7, 0.7)',
                'rgba(23, 162, 184, 0.7)',
                'rgba(220, 53, 69, 0.7)',
                'rgba(40, 167, 69, 0.7)'

            ]
        }]
    },
    options: {
        legend: {
            display: false
        },
        responsive: true
    }
});