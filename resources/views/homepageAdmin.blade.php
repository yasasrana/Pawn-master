<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAWN MASTER - Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a3a5c;
            --secondary-color: #2c5282;
            --accent-color: #c9b037;
            --background-color: #f8f9fa;
            --sidebar-color: #374151;
            --sidebar-hover-color: #4a5568;
            --text-dark: #2d3748;
            --highlight-color: #c9b037;
        }

        body {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            overflow-x: hidden;
            color: var(--text-dark);
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 80px;
            background-color: var(--sidebar-color);
            color: white;
            border-radius: 0 16px 16px 0;
            transition: all 0.3s ease;
            padding-top: 40px;
            z-index: 1000;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        #sidebar.expanded {
            width: 260px;
        }

        #sidebar h5, #sidebar a {
            padding-left: 20px;
            color: #f5f6fa;
            text-decoration: none;
        }

        #sidebar h5 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            display: none;
        }

        #sidebar.expanded h5 {
            display: block;
        }

        #sidebar a {
            display: flex;
            align-items: center;
            padding: 12px;
            font-size: 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        #sidebar a:hover {
            background-color: var(--sidebar-hover-color);
            color: var(--highlight-color);
        }

        #sidebar a i {
            margin-right: 15px;
            font-size: 1.2rem;
        }

        #sidebar.expanded a span {
            display: inline-block;
        }

        #sidebar a span {
            display: none;
        }

        #toggle-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--sidebar-color);
            border: none;
            color: white;
            padding: 5px;
            cursor: pointer;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        #sidebar.expanded #toggle-btn {
            right: 20px;
        }

        .content {
            margin-left: 100px;
            padding: 20px;
            width: calc(100% - 120px);
            transition: margin-left 0.3s ease, width 0.3s ease;
        }

        .content.expanded {
            margin-left: 280px;
            width: calc(100% - 300px);
        }

        .content h1 {
            text-align: center;
            font-size: 36px;
            font-weight: 700;
            color: white;
            margin-bottom: 30px;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 20px;
            color: white;
        }

        .logo-icon {
            font-size: 48px;
            color: var(--accent-color);
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .logo-icon:hover {
            transform: scale(1.1);
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        .card-icon {
            font-size: 36px;
            color: var(--accent-color);
            margin-bottom: 10px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .card-value {
            font-size: 24px;
            font-weight: 700;
        }

        .quick-actions {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .quick-actions button {
            margin: 0 10px;
        }

        .input-group {
            margin-top: 20px;
        }

        @media screen and (max-width: 768px) {
            #sidebar {
                width: 80px;
            }

            #sidebar.expanded {
                width: 80px;
            }

            .content {
                margin-left: 100px;
                width: calc(100% - 120px);
            }

            .content.expanded {
                margin-left: 100px;
                width: calc(100% - 120px);
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar" class="collapsed">
        <div>
            <h5>Menu</h5>
            <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
            <a href="#"><i class="fas fa-users"></i><span>Customers</span></a>
            <a href="#"><i class="fas fa-boxes"></i><span>Inventory</span></a>
            <a href="#"><i class="fas fa-hand-holding-usd"></i><span>Pawns</span></a>
            <a href="#"><i class="fas fa-shopping-cart"></i><span>Sales</span></a>
        </div>
        <button id="toggle-btn"><i class="fas fa-bars"></i></button>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="logo-section">
            <i class="fas fa-balance-scale logo-icon"></i>
        </div>
        <h1>Welcome to PAWN MASTER</h1>

        <!-- KPI Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-hand-holding-usd card-icon"></i>
                    <div class="card-title">Active Pawns</div>
                    <div class="card-value">2,854</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-shopping-cart card-icon"></i>
                    <div class="card-title">Total Sales</div>
                    <div class="card-value">$5,642,120</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-users card-icon"></i>
                    <div class="card-title">Total Customers</div>
                    <div class="card-value">12,721</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <i class="fas fa-chart-line card-icon"></i>
                    <div class="card-title">Revenue</div>
                    <div class="card-value">$1,275,340</div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <button type="button" class="btn btn-primary">
                <i class="fas fa-plus"></i> Add New Pawn
            </button>
            <button type="button" class="btn btn-secondary">
                <i class="fas fa-user-plus"></i> Register Customer
            </button>
            <button type="button" class="btn btn-success">
                <i class="fas fa-file-alt"></i> Generate Reports
            </button>
        </div>

        <!-- Search Bar -->
        <div class="input-group mt-4">
            <input type="text" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const content = document.querySelector('.content');

        let isExpanded = false;

        toggleBtn.addEventListener('click', function () {
            isExpanded = !isExpanded;
            sidebar.classList.toggle('expanded');
            content.classList.toggle('expanded');
        });
    </script>
</body>

</html>
