<?php
include 'db.php';
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$sql = "SELECT * FROM soap_records ORDER BY id DESC";
$result = $conn->query($sql);
if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Diagnosis and Treatment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #EBE5C2;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .header {
            background: #1a1a2e;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h2 {
            margin: 0;
            font-size: 24px;
            color: white;
        }
        .footer {
            background: #1a1a2e;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: auto;
        }
        .btn-custom {
            margin-right: 10px;
        }
        .btn-primary {
            background: #D98324 !important;
            border: none;
            color: white;
        }
        .btn-primary:hover {
            background: #b76d1d !important;
        }
        .header div {
            display: flex;
            gap: 5px;
        }
        .btn-custom {
            margin-right: 0;
        }
        .container {
            max-width: 90%;
        }
        .alert {
            margin: 10px auto;
            width: 80%;
        }
        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }
        }
    </style>

</head>
<body>
    <div class="header">
        <h2>SOAP System - SOAP Records</h2>
        <div>
            <a href="dashboard.php" class="btn btn-success btn-custom">Dashboard</a>
            <a href="add_patient.php" class="btn btn-success btn-custom">Add Patient</a>
            <a href="add_soap.php" class="btn btn-success btn-custom">Provide Diagnosis & Treatment</a>
            <a href="login.php?logout=success" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <div class="container mt-4">
        <h2 class="text-center">SOAP Records List</h2>

        <?php if ($result->num_rows > 0) { ?>
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Diagnosis</th>
                    <th>Medications</th>
                    <th>Therapies</th>
                    <th>Follow-up Appointments</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['patient_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['diagnosis']); ?></td>
                    <td><?php echo htmlspecialchars($row['medications']); ?></td>
                    <td><?php echo htmlspecialchars($row['therapies']); ?></td>
                    <td><?php echo htmlspecialchars($row['follow_up']); ?></td>
                    <td>
                        

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } else { ?>
            <div class="alert alert-warning text-center">No SOAP records found.</div>
        <?php } ?>
    </div>

    <div class="footer">
        <p>&copy; 2025 SOAP System. All rights reserved.</p>
    </div>
</body>
</html>
