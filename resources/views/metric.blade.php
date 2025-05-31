<!DOCTYPE html>
<html>
<head>
    <title>Métrica</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Gráfico de ejemplo</h1>
    <canvas id="miGrafico" width="400" height="200"></canvas>

    <script>
        const ctx = document.getElementById('miGrafico').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
                datasets: [{
                    label: 'Usuarios',
                    data: [12, 19, 3, 5],
                    borderColor: 'blue',
                    borderWidth: 2,
                    fill: false
                }]
            }
        });
    </script>
</body>
</html>
