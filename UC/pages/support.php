<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .support-header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px 0;
            background-color: #f8f9fa;
        }

        .support-header h1 {
            font-size: 2.5rem;
            color: #b04c35;
        }

        .support-card {
            border: 1px solid #e2c5b8;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .support-card:hover {
            transform: translateY(-5px);
        }

        .support-card h5 {
            color: #5a2c1c;
        }

        .support-card p {
            color: #333;
        }

        .btn-support {
            background-color: #b04c35;
            color: #fff;
            border: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-support:hover {
            background-color: #8a3726;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UniCare</a>
        </div>
    </nav>

    <div class="container mt-5">
        <!-- Page Header -->
        <div class="support-header">
            <h1>Support Services</h1>
            <p>Find assistance for administrative tasks, document submission, and more.</p>
        </div>

        <!-- Support Services Cards -->
        <div class="row g-4">
            <!-- Document Submission Section -->
            <div class="col-md-4">
                <div class="card support-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Document Submission</h5>
                        <p class="card-text">Submit official documents like medical letters, scholarship applications, and more.</p>
                        <a href="#" class="btn btn-support w-100">Submit Now</a>
                    </div>
                </div>
            </div>

            <!-- Administrative Assistance Section -->
            <div class="col-md-4">
                <div class="card support-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Administrative Assistance</h5>
                        <p class="card-text">Get help with fee clarifications, transcript requests, and other administrative tasks.</p>
                        <a href="#" class="btn btn-support w-100">Get Assistance</a>
                    </div>
                </div>
            </div>

            <!-- Letter Templates Section -->
            <div class="col-md-4">
                <div class="card support-card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Letter Templates</h5>
                        <p class="card-text">Access and customize templates for official letters like medical or attendance letters.</p>
                        <a href="#" class="btn btn-support w-100">Explore Templates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white text-white text-center py-5"> </footer>
    <?php include '../common/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
