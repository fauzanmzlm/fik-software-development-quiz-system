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
                <div class="card-number">{{ $numberOfStudents }}</div>
                <div class="card-text">Number of Students</div>
            </div>

            <!-- Number of Educators -->
            <div class="dashboard-card">
                <i class="fas fa-chalkboard-teacher card-icon mb-3"></i>
                <div class="card-number">{{ $numberOfEducators }}</div>
                <div class="card-text">Number of Educators</div>
            </div>

            <!-- Number of Quizzes -->
            <div class="dashboard-card">
                <i class="fas fa-file-alt card-icon mb-3"></i>
                <div class="card-number">{{ $numberOfQuizzes }}</div>
                <div class="card-text">Number of Quizzes</div>
            </div>

            <!-- Average Performance -->
            <div class="dashboard-card">
                <i class="fas fa-chart-line card-icon mb-3"></i>
                <div class="card-number">{{ number_format($averagePerformance, 2) }}</div>
                <div class="card-text">Average Performance</div>
            </div>
        </div>
        <!-- Graph Section -->
        <div class="chart-container mx-5 mb-5">
            <div class="text-right">
                <button id="downloadChart"><span>Download Chart as Image &nbsp;&nbsp;<span class="text-success"><i
                                class="fas fa-download"></i></span></span></button>
            </div>
            <canvas id="quizChart"></canvas>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('quizChart').getContext('2d');
        const quizLabels = @json($topQuizzes->pluck('title'));
        const quizCounts = @json($topQuizzes->pluck('tests_count'));

        const quizChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: quizLabels,
                datasets: [{
                    label: 'Number of Attempts',
                    data: quizCounts,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: true, // Enable the title
                        text: 'Top 10 Quiz Attempts', // The title text
                        font: {
                            size: 18 // Set the font size of the title
                        }
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true, // Enable title for x-axis
                            text: 'Quizzes' // X-axis title
                        },
                        ticks: {
                            padding: 10, // Adjust the space between the labels and the axis
                            autoSkip: false, // Ensure no labels are skipped
                            maxRotation: 0, // Rotate the labels if needed to prevent overlap
                            minRotation: 90
                        }
                    },
                    y: {
                        title: {
                            display: true, // Enable title for y-axis
                            text: 'Number of Attempts' // Y-axis title
                        },
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1, // Ensure the interval is 1
                            callback: function(value) {
                                return Number.isInteger(value) ? value : null; // Show only integers
                            }
                        }
                    }
                }
            }
        });

        // Function to download the chart as an image
        document.getElementById('downloadChart').addEventListener('click', function() {
            // Get the image data URL from the canvas
            const imageLink = document.createElement('a');
            imageLink.href = document.getElementById('quizChart').toDataURL('image/png');
            imageLink.download = 'quiz_chart.png'; // File name for the downloaded image
            imageLink.click(); // Trigger the download
        });
    </script>
