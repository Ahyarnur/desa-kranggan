<x-tail/>
<body class="bg-bgp">
    <x-nav/>
    
    <main class="container mx-auto py-10 px-4">
      
        <div>
            <canvas id="myChart"></canvas>
          </div>
          
          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
          <script>
            // <block:setup:1>
              document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.getElementById('myChart').getContext('2d');
    let myChart;

    // Fungsi untuk membuat chart
    const createChart = (data) => {
        const labels = data.map(item => item.kategori); // Ambil label dari kategori
        const jumlahData = data.map(item => item.jumlah); // Ambil jumlah data

        const chartData = {
            labels: labels,
            datasets: [{
                label: 'Data Statistik Desa Kranggan',
                data: jumlahData,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)'
                ],
                borderWidth: 1
            }]
        };

        // Hapus chart lama jika ada
        if (myChart) {
            myChart.destroy();
        }

        myChart = new Chart(ctx, {
            type: 'bar',
            data: chartData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    };

    // Fungsi untuk mengambil data terbaru dari server
    const fetchData = async () => {
        try {
            const response = await fetch('/get-data-statistik'); // Endpoint API
            const data = await response.json();
            createChart(data);
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    };

    // Ambil data pertama kali
    fetchData();

    // Reload data secara periodik
    setInterval(fetchData, 10000); // Refresh data setiap 10 detik
});

          </script>
        <section class="mb-12 mt-10">
           <h3 class="text-2xl font-semibold text-gray-800 mb-4">Pendidikan</h3>
           <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
               
               <div class="bg-white p-6 rounded-lg shadow-lg">
                   <h4 class="text-xl font-semibold text-gray-700">SD</h4>
                   <p class="text-2xl font-bold text-green-700 mt-2">300</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg">
                   <h4 class="text-xl font-semibold text-gray-700">SMP</h4>
                   <p class="text-2xl font-bold text-green-700 mt-2">250</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg">
                   <h4 class="text-xl font-semibold text-gray-700">SMA</h4>
                   <p class="text-2xl font-bold text-green-700 mt-2">200</p>
               </div>
           </div>
       </section>
        </main>
     <!-- Pendidikan Section -->
</body>
<x-footer/>
