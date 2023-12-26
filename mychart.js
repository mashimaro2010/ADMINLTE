var ctx = document.getElementById('myChart').getContext('2d');
fetch('data.php')
    .then(response => response.json())
    .then(jsonData => {
        var labels = jsonData.map(item => item.TITLE);
        var dataValues = jsonData.map(item => item.SCORE);

        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Scores',
                    data: dataValues,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    legend: {
                        display: false // ซ่อนตำแหน่งของ Label ใน legend
                    },
                    annotation: {
                        annotations: labels.map((label, index) => ({
                            type: 'line',
                            mode: 'horizontal',
                            scaleID: 'y',
                            value: dataValues[index],
                            borderColor: 'red',
                            borderWidth: 2,
                            label: {
                                enabled: true,
                                content: label + ': ' + dataValues[index],
                                position: 'right'
                            }
                        }))
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));