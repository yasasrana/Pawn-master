<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAWN MASTER - Inventory Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
	
        :root {
            --primary-color: #1a3a5c;
            --secondary-color: #2c5282;
            --accent-color: #c9b037;
            --background: #f8f9fa;
            --text-dark: #2d3748;
            --text-light: #718096;
            --success: #48bb78;
            --error: #f56565;
            --warning: #ed8936;
        }

        body {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            margin: 0;
            padding: 20px 0;
            color: var(--text-dark);
        }

        .container {
            max-width: 1200px;
            padding: 0 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            color: white;
            animation: fadeIn 0.5s ease;
        }

        .header .logo-icon {
            font-size: 48px;
            color: var(--accent-color);
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }

        .header .logo-icon:hover {
            transform: scale(1.1);
        }

        .header .title {
            font-size: 36px;
            font-weight: 700;
            margin: 0;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .header .subtitle {
            color: rgba(255,255,255,0.9);
            font-size: 16px;
            margin-top: 5px;
        }

        .panel {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin-bottom: 30px;
            animation: slideUp 0.5s ease;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .search-input {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #f8fafc;
            width: 100%;
        }

        .search-input:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(201, 176, 55, 0.1);
            outline: none;
        }

        .inventory-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .inventory-table th {
            background-color: var(--primary-color);
            color: white;
            padding: 12px;
            font-weight: 600;
            text-align: left;
            border-bottom: 2px solid var(--accent-color);
        }

        .inventory-table td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
        }

        .inventory-table tbody tr {
            transition: all 0.3s ease;
        }

        .inventory-table tbody tr:hover {
            background-color: #f8fafc;
            transform: translateX(5px);
        }

        .status-badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
        }

        .status-active {
            background-color: var(--success);
            color: white;
        }

        .status-expired {
            background-color: var(--error);
            color: white;
        }

        .status-warning {
            background-color: var(--warning);
            color: white;
        }

        .action-btn {
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin-right: 5px;
        }

        .view-btn {
            background-color: var(--primary-color);
            color: white;
        }

        .edit-btn {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }

        .delete-btn {
            background-color: var(--error);
            color: white;
        }

        .home-btn {
            background-color: var(--accent-color);
            color: var(--primary-color);
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .home-btn:hover {
            transform: translateY(-5px) rotate(360deg);
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(20px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .panel {
                padding: 15px;
                overflow-x: auto;
            }

            .header .title {
                font-size: 28px;
            }

            .action-btn {
                padding: 4px 8px;
                margin-bottom: 5px;
                display: block;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <i class="fas fa-gem logo-icon"></i>
            <h1 class="title">PAWN MASTER</h1>
            <p class="subtitle">Inventory Management System</p>
        </div>

        <div class="panel">
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search inventory...">
            </div>

            <div class="table-responsive">
                <table class="inventory-table">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Customer Name</th>
                            <th>Item Description</th>
                            <th>Pawn Date</th>
                            <th>Due Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PW001</td>
                            <td>John Smith</td>
                            <td>Gold Ring 18K</td>
                            <td>2024-10-15</td>
                            <td>2024-11-15</td>
                            <td>$500.00</td>
                            <td><span class="status-badge status-active">Active</span></td>
                            <td>
                                <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>PW002</td>
                            <td>Sarah Johnson</td>
                            <td>Diamond Necklace</td>
                            <td>2024-09-20</td>
                            <td>2024-10-20</td>
                            <td>$1,200.00</td>
                            <td><span class="status-badge status-warning">Due Soon</span></td>
                            <td>
                                <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>PW003</td>
                            <td>Michael Brown</td>
                            <td>Rolex Watch</td>
                            <td>2024-08-15</td>
                            <td>2024-09-15</td>
                            <td>$3,500.00</td>
                            <td><span class="status-badge status-expired">Expired</span></td>
                            <td>
                                <button class="action-btn view-btn"><i class="fas fa-eye"></i></button>
                                <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                <button class="action-btn delete-btn"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="#" class="home-btn">
        <i class="fas fa-home"></i>
    </a>
</body>
</html>