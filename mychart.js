var ctx = document.getElementById('myChart').getContext('2d');
fetch('data.php')
    .then(response => response.json())
    .then(jsonData => {
        var labels = jsonData.map(item => item.TITLE);
        var dataValues = jsonData.map(item => item.SCORE);

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Scores',
                    data: dataValues,
                    backgroundColor: [
                        'rgba(255, 0, 0, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgb(60, 179, 113, 0.2)',
                        'rgba(238, 130, 238, 0.2)',
                        'rgba(255, 165, 0, 0.2)',
                        // เพิ่มสีเพิ่มเติมตามจำนวนชิ้นใน Pie Chart
                    ],
                    borderColor: [
                        'rgba(255, 0, 0, 1)',
                        'rgba(0, 0, 255, 1)',
                        'rgb(60, 179, 113, 1)',
                        'rgba(238, 130, 238, 1)',
                        'rgba(255, 165, 0, 1)',
                        // เพิ่มสีเพิ่มเติมตามจำนวนชิ้นใน Pie Chart
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'right'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.label || '';
                                var value = context.parsed || '';
                                var dataset = context.dataset || {};
                                var total = dataset.data.reduce((acc, curr) => acc + curr, 0);
                                var percentage = ((value / total) * 100).toFixed(2);
                                return label + ': ' + parseInt(value) + ' (' + percentage + '%)';
                            }
                        }
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));