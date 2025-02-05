@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Dashboard</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <!-- Main Content: Cards and Attendance Chart -->
            <div class="col-lg-8">
                <!-- Cards Section -->
                <div class="row">
                    <!-- First Row of Cards -->
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('users.index') }}">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-graduation-cap fa-2x"></i>
                                    <h6 class="cards">Users</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <a href="{{ route('course-units.index') }}">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-book fa-2x"></i>
                                    <h6 class="cards">Course Units</h6>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 mb-3">
                        <a href="{{ route('students.index') }}">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-user-graduate fa-2x"></i>
                                    <h6 class="cards">Students</h6>
                                </div>
                            </div>
                            <a>
                    </div>

                    <!-- Second Row of Cards -->

                    <div class="col-md-4 mb-3">
                        <a href="{{ route('lecturers.index') }}">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-book fa-2x"></i>
                                    <h6 class="cards">Lecturers</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- <div class="col-md-4 mb-3">
                        <div class="card text-center shadow-sm">
                            <div class="card-body">
                                <i class="fas fa-chalkboard-teacher fa-2x"></i>
                                <h6 class="cards">Lecturers</h6>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-md-4 mb-3">
                        <a href="{{ route('enrollments.index') }}">
                            <div class="card text-center shadow-sm">
                                <div class="card-body">
                                    <i class="fas fa-plus fa-2x"></i>
                                    <h6 class="cards">Enrollment</h6>
                                </div>
                        </a>
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

            <!-- Attendance Chart Section -->
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Attendance</h5>
                    <canvas id="attendanceChart" height="200"></canvas>
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

    <!-- Notice Board and Events Calendar -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card p-4" style="border: 2px solid #b49b5c;">
                <h5 style="color: black;">Notice Board</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>School annual sports day</strong><br>
                        <span>20 July, 2025</span>
                        <span class="float-right">20k views</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Women's Empowerment</strong><br>
                        <span>10 July, 2025</span>
                        <span class="float-right">15k views</span>
                    </li>
                    <li class="list-group-item">
                        <strong>30 days of coding challenge festival</strong><br>
                        <span>05 July, 2025</span>
                        <span class="float-right">15k views</span>
                    </li>
                    <li class="list-group-item">
                        <strong>Thank God Its a Friday</strong><br>
                        <span>05 July, 2025</span>
                        <span class="float-right">15k views</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card p-4" style="border: 2px solid white;">
                <h5 style="color: black ">Events Calendar</h5>
                <div id="eventsCalendar"></div>
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
<!-- FullCalendar -->
<link href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.8/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.8/main.min.js"></script>

<script>
    // Attendance Chart
        const attendanceChart = new Chart(document.getElementById('attendanceChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [
                    {
                        label: 'Total Present',
                        data: [200, 180, 220, 210, 250],
                        backgroundColor: '#800000',
                        borderColor: '#b39a5b',
                        borderWidth: 1,
                    },
                    {
                        label: 'Total Absent',
                        data: [50, 70, 30, 40, 20],
                        backgroundColor: '#b39a5b',
                        borderColor: '#800000',
                        borderWidth: 1,
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        ticks: { color: '#800000' }
                    },
                    y: {
                        ticks: { color: '#800000' }
                    }
                },
                plugins: {
                    legend: {
                        labels: { color: '#800000' }
                    }
                }
            }
        });

        // FullCalendar Initialization
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('eventsCalendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [FullCalendarDayGrid],
                initialView: 'dayGridMonth',
                events: [
                    { title: 'Event 1', date: '2024-11-18' },
                    { title: 'Event 2', date: '2024-11-22' },
                ],
            });
            calendar.render();
        });
</script>
@endsection