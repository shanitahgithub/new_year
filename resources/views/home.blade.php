{{-- @extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Dashboard Content</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 --}}


 {{-- @extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <!-- Stats Section -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card bg-light shadow-sm p-3">
                        <h5>Total Students</h5>
                        <h3>2500</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card bg-light shadow-sm p-3">
                        <h5>Total Teachers</h5>
                        <h3>150</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card bg-light shadow-sm p-3">
                        <h5>Total Employees</h5>
                        <h3>600</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card bg-light shadow-sm p-3">
                        <h5>Total Earnings</h5>
                        <h3>$10,000</h3>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card p-4">
                        <h5>Total Students by Gender</h5>
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card p-4">
                        <h5>Attendance</h5>
                        <canvas id="attendanceChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Notices & Calendar -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>Notice Board</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>School annual sports day</strong><br>
                                <span>20 July, 2023</span>
                                <span class="float-right">20k views</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Annual function celebration</strong><br>
                                <span>05 July, 2023</span>
                                <span class="float-right">15k views</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Mid-term exam routine published</strong><br>
                                <span>15 June, 2023</span>
                                <span class="float-right">22k views</span>
                            </li>
                            <li class="list-group-item">
                                <strong>Inter school annual painting competition</strong><br>
                                <span>10 June, 2023</span>
                                <span class="float-right">18k views</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5>Event Calendar</h5>
                        <div id="calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gender Chart
        const genderChart = new Chart(document.getElementById('genderChart').getContext('2d'), {
            type: 'doughnut',
            data: {
                labels: ['Boys', 'Girls'],
                datasets: [{
                    data: [1500, 1000],
                    backgroundColor: ['#36A2EB', '#FF6384'],
                }]
            }
        });

        // Attendance Chart
        const attendanceChart = new Chart(document.getElementById('attendanceChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [
                    {
                        label: 'Total Present',
                        data: [200, 180, 220, 210, 250],
                        backgroundColor: '#36A2EB',
                    },
                    {
                        label: 'Total Absent',
                        data: [50, 70, 30, 40, 20],
                        backgroundColor: '#FF6384',
                    }
                ]
            }
        });
    </script>
@endsection --}}


@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <!-- Main Content: Cards and Chart -->
                <div class="col-lg-8">
                    <!-- Cards Section -->
                    <div class="row">
                        <!-- First Row of Cards -->
                        <div class="col-md-4 mb-3">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-graduation-cap fa-2x"></i>
                                    <h6 class="cards">5 Programs</h6>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-book fa-2x"></i>
                                    <h6 class="cards">Course Units</h6>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-user-graduate fa-2x"></i>
                                    <h6 class="cards">Students</h6>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Second Row of Cards -->
                        <div class="col-md-4 mb-3">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-chalkboard-teacher fa-2x"></i>
                                    <h6 class="cards">Lecturers</h6>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-plus fa-2x"></i>
                                    <h6 class="cards">Enrollment</h6>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-pencil-alt fa-2x"></i>
                                    <h6 class="cards">Lessons</h6>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bar Chart Section -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <canvas id="dashboardChart" height="200"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Right Sidebar: Upcoming Events and Recent Activity -->
                <div class="col-lg-4">
                    <!-- Upcoming Events Section -->
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <h5 class="mb-3">Upcoming</h5>
                            <div class="d-flex align-items-center mb-2">
                                <i class="text-danger fas fa-bell fa-lg mr-2"></i>
                                <div>
                                    <p class="mb-0 font-weight-bold">Meeting with Mrs.Barbra</p>
                                    <small>09:20 AM | Due Soon</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="text-danger fas fa-bell fa-lg mr-2"></i>
                                <div>
                                    <p class="mb-0 font-weight-bold">Meeting with Mrs.Leticia</p>
                                    <small>07:20 PM | Due Soon</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity Section -->
                    <div class="card shadow-sm mb-3">
                        <div class="card-body">
                            <h5>Recent Activity</h5>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-tasks mr-2"></i> Submission NLP Programming</li>
                                <li><i class="fas fa-tasks mr-2"></i> Outcome Administration</li>
                                <li><i class="fas fa-tasks mr-2"></i> Teacher Panel Discussion</li>
                                <li><i class="fas fa-tasks mr-2"></i> Submission Data Structure</li>
                                <li><i class="fas fa-tasks mr-2"></i> Submission Module 5</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Latest Message Section -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5>Latest Message</h5>
                            <p class="mb-0">No new messages</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Include FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Chart.js configuration
        const ctx = document.getElementById('dashboardChart').getContext('2d');
        const dashboardChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Exams', 'Students', 'Lessons', 'Semester', 'Tests'],
                datasets: [{
                    label: 'Count',
                    data: [12, 19, 8, 15, 10],
                    backgroundColor: [
                        '#aa0000',
                        '#eddfd6',
                        '#b39a5b',
                        '#d47e7e',
                        '#be5c4f'
                    ],
                    borderColor: [
'#aa0000',
                        '#eddfd6',
                        '#b39a5b',
                        '#d47e7e',
                        '#be5c4f'
                    ],
                    borderWidth: 1
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
        });
    </script>
@endsection
