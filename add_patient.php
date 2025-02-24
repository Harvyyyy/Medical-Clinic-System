<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Patient - SOAP System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #EBE5C2;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .header {
            background: #1a1a2e;
            color: white;
            padding: 15px 30px;
            width: 100%;
        }
        .header .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
        .header .navbar-nav .nav-link {
            color: white;
            font-weight: 500;
            margin-left: 10px;
        }
        .footer {
            background: #1a1a2e;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 50px;
            width: 100%;
        }
        .form-control {
            border: 2px solid #C14600;
            transition: all 0.3s ease-in-out;
        }
        .form-control:focus {
            border-color: #C14600;
            box-shadow: 0 0 8px rgba(193, 70, 0, 0.5);
        }
        .btn-primary {
            background: #C14600;
            border: none;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg header">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">SOAP System - Add Patient</a>
        <div class="d-flex">
            <a href="dashboard.php" class="btn btn-success me-2">Dashboard</a>
            <a href="add_soap.php" class="btn btn-success me-2">Provide Diagnosis & Treatment</a>
            <a href="view_soap.php" class="btn btn-success me-2">View Diagnosis & Treatment Plan</a>
            <a href="login.php?logout=success" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2 class="text-center">Add Patient</h2>
    <form action="add_patient.php" method="POST" class="w-50 mx-auto">
        <label>Name:</label>
        <input type="text" name="name" class="form-control mb-2" required>

        <label>Age:</label>
        <input type="number" name="age" class="form-control mb-2" required>

        <label>Gender:</label>
        <select name="gender" class="form-control mb-2" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <h4 class="text-center">Subjective Data</h4>
        <label>Symptoms:</label>
        <textarea name="symptoms" class="form-control mb-2" required></textarea>

        <label>Medical History:</label>
        <textarea name="medical_history" class="form-control mb-2" required></textarea>

        <h4 class="text-center">Objective Data</h4>
        <label>Blood Pressure (e.g., 120/80 mmHg):</label>
        <input type="text" name="blood_pressure" class="form-control mb-2" required>

        <label>Heart Rate (BPM):</label>
        <input type="number" name="heart_rate" class="form-control mb-2" required>

        <label>Temperature (°C):</label>
        <input type="number" step="0.1" name="temperature" class="form-control mb-2" required>

        <label>Weight (kg):</label>
        <input type="number" step="0.1" name="weight" class="form-control mb-2" required>

        <label>Diagnostic Tests (e.g., X-ray, Blood Test results):</label>
        <textarea name="diagnostic_tests" class="form-control mb-2" required></textarea>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Add Patient</button>
        </div>
    </form>
</div>

<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> SOAP System. All rights reserved.</p>
</footer>

</body>
</html>