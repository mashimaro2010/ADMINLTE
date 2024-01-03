var ctx = document.getElementById('myChart').getContext('2d');
fetch('data.php')
    .then(response => response.json())
    .then(jsonData => {
        var labels = jsonData.map(item => item.TITLE);
        var dataValues = jsonData.map(item => item.SCORE);

        var myChart = new Chart(ctx, {
            type: 'pie', // เปลี่ยนเป็น 'pie' เพื่อให้เป็น Pie Chart
            data: {
                labels: labels,
                datasets: [{
                    label: 'Scores',
                    data: dataValues,
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        // เพิ่มสีเพิ่มเติมตามจำนวนชิ้นใน Pie Chart
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)',
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
                                var value = context.parsed || 0;
                                return label + ': ' + value.toFixed(2); // แสดงค่าเป็นทศนิยม
                            }
                        }
                    }
                }
            }
        });
    })
    .catch(error => console.error('Error fetching data:', error));