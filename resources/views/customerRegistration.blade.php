<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAWN MASTER - New Customer Registration</title>
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

        .section-title {
            color: var(--primary-color);
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent-color);
        }

        .form-label {
            font-weight: 500;
            color: var(--text-dark);
            font-size: 14px;
            margin-bottom: 40px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .input-group:hover .form-label {
            transform: translateX(5px);
            color: var(--accent-color);
        }

        .form-control {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 8px 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            background-color: #f8fafc;
			margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(201, 176, 55, 0.1);
            background-color: white;
            transform: translateX(5px);
        }

        .btn {
            padding: 10px 24px;
            font-weight: 500;
			text-transform: uppercase;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 14px;
            letter-spacing: 0.5px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .save-btn {
            background-color: var(--accent-color);
            border: none;
            color: var(--primary-color);
        }

        .clear-btn {
            background-color: #e53e3e;
            border: none;
            color: white;
        }

        .exit-btn {
            background-color: var(--primary-color);
            border: none;
            color: white;
        }
		
		.btn-container {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
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

        .required-field::after {
            content: "*";
            color: var(--error);
            margin-left: 4px;
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
                padding: 20px;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }

            .header .title {
                font-size: 28px;
            }

            .home-btn {
                bottom: 20px;
                right: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Enhanced Header Section -->
        <div class="header">
            <div class="logo-section">
                <i class="fas fa-balance-scale logo-icon"></i>
                <h1 class="title">PAWN MASTER</h1>
                <p class="subtitle">Customer Registration</p>
            </div>
        </div>

        <!-- Main Panel -->
        <div class="panel">
            <form id="customerRegistrationForm">
                <!-- Personal Information Section -->
                <div class="section-title">Personal Information</div>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="cusId" class="form-label col-md-4 required-field">Customer ID</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="cusId" placeholder="Auto-generated" readonly>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="name" class="form-label col-md-4 required-field">Full Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="name" placeholder="Enter legal full name">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="nic" class="form-label col-md-4 required-field">ID Number</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="nic" placeholder="NIC number">
                                
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="birthday" class="form-label col-md-4 required-field">Date of Birth</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="birthday">
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="form-label col-md-4">Gender</label>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="address" class="form-label col-md-4 required-field">Address</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control mb-2" id="address" placeholder="Street Address">
                                <input type="text" class="form-control mb-2" id="city" placeholder="City">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="state" placeholder="State">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" id="zip" placeholder="ZIP Code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="phone" class="form-label col-md-4 required-field">Phone</label>
                            <div class="col-md-8">
                                <input type="tel" class="form-control" id="phone" placeholder="Primary contact number">
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="email" class="form-label col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" class="form-control" id="email" placeholder="Email address">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Security Section -->
                <div class="section-title">Account Security</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="password" class="form-label col-md-4 required-field">Password</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="password" placeholder="Create password">
                                <small class="text-muted">Minimum 8 characters, include numbers and symbols</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="confirmPassword" class="form-label col-md-4 required-field">Confirm</label>
                            <div class="col-md-8">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                </div>
				
				
                
                    <div class="col-md-6">
                        <div class="input-group">
                            <label class="form-label col-md-4">Delivery Method</label>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="deliveryMethod" id="sendEmail" value="email" checked>
                                    <label class="form-check-label" for="sendEmail">Email</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="deliveryMethod" id="sendPhone" value="phone">
                                    <label class="form-check-label" for="sendPhone">Phone</label>
                                </div>
                            </div>
                        </div>
                    
                </div>

                <!-- Emergency Contact Section -->
                <div class="section-title">Emergency Contact</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="emergencyName" class="form-label col-md-4">Contact Name</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="emergencyName" placeholder="Emergency contact name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label for="emergencyPhone" class="form-label col-md-4">Contact Phone</label>
                            <div class="col-md-8">
                                <input type="tel" class="form-control" id="emergencyPhone" placeholder="Emergency contact number">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="btn-container">
                    <button type="submit" class="btn save-btn me-2">
                        <i class="fas fa-save"></i> Save Customer
                    </button>
                    <button type="button" class="btn clear-btn me-2">
                        <i class="fas fa-undo"></i> Clear Form
                    </button>
                    <button type="button" class="btn exit-btn me-2">
                        <i class="fas fa-check-circle"></i> Save & Exit
                    </button>
                    <button type="button" class="btn save-btn">
                        <i class="fas fa-hand-holding-dollar"></i> New Pawn
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Home Button -->
    <a href="#" class="home-btn">
        <i class="fas fa-home"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>