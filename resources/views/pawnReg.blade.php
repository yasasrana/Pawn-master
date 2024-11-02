<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Pawn Page</title>
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
			margin-bottom: 20px;
            transition: transform 0.3s ease, color 0.3s ease;
        }
		
		input-group:hover .form-label {
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
        <!-- Title Section (Centered Title) -->
        <div class="header">
            <i class="fas fa-balance-scale logo-icon"></i>
            <h1 class="title">PAWN MASTER</h1>
			<p class="subtitle">New Pawn</p>
        </div>

        <!-- New Pawn Panel -->
        <div class="panel">
            <form>
                <!-- Left and Right Section Labels and Inputs -->
				<div class="section-title">Pawn Information</div>
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label for="pawnerId" class="form-label col-md-4">Pawner ID</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="pawnerId" placeholder="Enter Pawner ID">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="itemNo" class="form-label col-md-4">Pawn Item No</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="itemNo" placeholder="Enter Pawn Item No">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="description" class="form-label col-md-4">Description</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="description" placeholder="Enter Description">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="category" class="form-label col-md-4">Category</label>
                            <div class="col-md-8">
                                <select class="form-control" id="category">
                                    <option value="Jewelry">Jewellery</option>
                                    <option value="Electronics">Electronics</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="details" class="form-label col-md-4">Details</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="details" placeholder="Enter Details">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="dmr" class="form-label col-md-4">DMR</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="dmr" placeholder="Enter DMR">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="weight" class="form-label col-md-4">Weight</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="weight" placeholder="Enter Weight">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="quantity" class="form-label col-md-4">Quantity</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" id="quantity" placeholder="Enter Quantity">
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <label for="marketValue" class="form-label col-md-4">Market Value</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="marketValue" placeholder="Enter Market Value">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="payableAmount" class="form-label col-md-4">Payable Amount</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="payableAmount" placeholder="Enter Payable Amount">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="loanAmount" class="form-label col-md-4">Loan Amount</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="loanAmount" placeholder="Enter Loan Amount">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="interestRate" class="form-label col-md-4">Interest Rate</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="interestRate" placeholder="Enter Interest Rate">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="pawnDate" class="form-label col-md-4">Pawn Date</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="pawnDate">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="dueDate" class="form-label col-md-4">Due Date</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="dueDate">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="serviceCharge" class="form-label col-md-4">Service Charge</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="serviceCharge" placeholder="Enter Service Charge">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Buttons Section -->
                <div class="btn-container">
                    <button type="button" class="btn save-btn"><i class="fas fa-save"></i> Save</button>
                    <button type="button" class="btn clear-btn"><i class="fas fa-undo"></i> Clear</button>
                    <button type="button" class="btn exit-btn"><i class="fas fa-check-circle"></i> Another Item</button>
                    <button type="button" class="btn exit-btn"><i class="fas fa-sign-out-alt"></i> Exit</button>
                </div>
            </form>
        </div>
    </div>
	
	<a href="#" class="home-btn">
        <i class="fas fa-home"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
