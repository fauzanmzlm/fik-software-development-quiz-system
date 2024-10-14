<div>
    <style>
        .dashboard-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .dashboard-card {
            flex: 1;
            min-width: 200px;
            max-width: 300px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s;
            background-color: #fff;
            text-align: center;
        }

        .dashboard-card:hover {
            transform: translateY(-10px);
        }

        .card-icon {
            font-size: 2.5rem;
            color: #6c63ff;
        }

        .card-number {
            font-size: 2.2rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        .chart-container {
            margin-top: 40px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Media query for larger screens */
        @media (min-width: 992px) {
            .dashboard-container {
                justify-content: space-around;
            }
        }
    </style>

    <div class="mx-5">
        <div class="dashboard-container mx-1 pt-3">
            <!-- Number of Students -->
            <div class="dashboard-card">
                <i class="fas fa-user-graduate card-icon mb-3"></i>
                <div class="card-number">1,230</div>
                <div class="card-text">Number of Students</div>
            </div>

            <!-- Number of Educators -->
            <div class="dashboard-card">
                <i class="fas fa-chalkboard-teacher card-icon mb-3"></i>
                <div class="card-number">45</div>
                <div class="card-text">Number of Educators</div>
            </div>

            <!-- Number of Quizzes -->
            <div class="dashboard-card">
                <i class="fas fa-file-alt card-icon mb-3"></i>
                <div class="card-number">320</div>
                <div class="card-text">Number of Quizzes</div>
            </div>

            <!-- Average Performance -->
            <div class="dashboard-card">
                <i class="fas fa-chart-line card-icon mb-3"></i>
                <div class="card-number">85%</div>
                <div class="card-text">Average Performance</div>
            </div>
        </div>
        <!-- Graph Section -->
        <div class="chart-container mx-5 mb-5">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script>
        // Chart.js code to create a basic bar chart
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Math', 'Science', 'History', 'English', 'Geography'],
                datasets: [{
                    label: 'Top 10 Quiz Attempts',
                    data: [85, 72, 90, 75, 80],
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
