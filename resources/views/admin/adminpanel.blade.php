<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - SkillSwap</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #343a40;
            padding-top: 20px;
            position: fixed;
            width: 240px;
        }

        .sidebar a {
            color: #ffffff;
            padding: 12px 20px;
            display: block;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        /* Page content */
        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .card {
            border-radius: 12px;
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h4 class="text-center text-white mb-4">SkillSwap Admin</h4>

        <a href="#">📊 Dashboard</a>
        <a href="#">👥 Users</a>
        <a href="#">📚 Skills</a>
        <a href="#">📅 Sessions</a>
        <a href="#">🚨 Reports</a>
        <a href="#">📈 Analytics</a>
        <a href="#">⚙ Settings</a>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">🚪 Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>


    </div>

    <!-- MAIN CONTENT -->
    <div class="content">

        <!-- Top Navbar -->
        <nav class="navbar navbar-light bg-white shadow-sm rounded mb-4 px-3">
            <span class="navbar-brand mb-0 h5">Dashboard</span>
            <span class="text-muted">Admin Panel</span>
        </nav>

        <!-- Dashboard Stats -->
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Total Users</h6>
                    <h3>1,284</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Active Teachers</h6>
                    <h3>342</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Skills Listed</h6>
                    <h3>122</h3>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm p-3">
                    <h6>Pending Reports</h6>
                    <h3>9</h3>
                </div>
            </div>
        </div>

        <!-- Charts & Tables Section -->
        <div class="row mt-4">
            <div class="col-md-8">
                <div class="card shadow-sm p-3">
                    <h5>User Growth</h5>
                    <canvas id="growthChart" height="120"></canvas>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm p-3">
                    <h5>Top Skills</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            Programming <span>124 users</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Graphic Design <span>98 users</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Cooking <span>54 users</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Guitar <span>42 users</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('growthChart');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'New Users',
                    data: [40, 60, 75, 90, 120, 140],
                    borderWidth: 2,
                    borderColor: 'blue'
                }]
            }
        });
    </script>

</body>
</html>
