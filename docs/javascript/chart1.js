
        // Datos del gráfico
        var labels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo"];
        var data = [550, 720, 440, 1300, 1750];

        // Configuración del gráfico
        var config = {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Vistas',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color de fondo de las barras
                    borderColor: 'rgba(75, 192, 1, 1)', // Color del borde de las barras
                    borderWidth: 2 // Ancho del borde de las barras
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        };

        // Crear el gráfico
        var myChart = new Chart(document.getElementById('myChart'), config);
   