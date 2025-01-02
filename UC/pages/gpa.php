<?php
if (isset($_POST['calculate'])) {
    $grades = $_POST['grades'];
    $credits = $_POST['credits'];

    // GPA Calculation
    $totalGradePoints = 0;
    $totalCredits = 0;

    for ($i = 0; $i < count($grades); $i++) {
        $grade = $grades[$i];
        $credit = $credits[$i];

        // Define GPA Scale (A=4, B=3, C=2, D=1, F=0)
        $gradePoint = 0;
        if ($grade >= 90) {
            $gradePoint = 4.0;
        } elseif ($grade >= 80) {
            $gradePoint = 3.0;
        } elseif ($grade >= 70) {
            $gradePoint = 2.0;
        } elseif ($grade >= 60) {
            $gradePoint = 1.0;
        } else {
            $gradePoint = 0.0;
        }

        $totalGradePoints += $gradePoint * $credit;
        $totalCredits += $credit;
    }

    // GPA = Total Grade Points / Total Credits
    $gpa = $totalGradePoints / $totalCredits;
    $gpa = round($gpa, 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../style/header.css">
    <link rel="stylesheet" href="../../style/footer.css">
    <style>
        body {
            background-color: #f3f4f6;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        .title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            color: #0044cc;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #0062cc;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .calculator-button {
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
        }

        .result {
            background-color: #e1f5fe;
            padding: 20px;
            margin-top: 30px;
            text-align: center;
            border-radius: 10px;
            font-size: 1.5rem;
            color: #0288d1;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .grade-input {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php include '../common/header.php'; ?>

<div class="container">
    <h2 class="title">GPA Calculator</h2>

    <!-- GPA Calculator Form -->
    <form method="POST" action="">
        <div class="form-group">
            <label for="numSubjects">Number of Subjects</label>
            <input type="number" class="form-control" id="numSubjects" name="numSubjects" required min="1">
        </div>

        <!-- Dynamic Subject and Grade Inputs -->
        <div id="subjects-container"></div>

        <button type="submit" class="btn btn-primary calculator-button" name="calculate">Calculate GPA</button>
    </form>

    <?php if (isset($gpa)): ?>
        <div class="result">
            <strong>Your GPA is: <?php echo $gpa; ?></strong>
        </div>
    <?php endif; ?>
</div>

<!-- Bootstrap JS and custom JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.getElementById("numSubjects").addEventListener("input", function() {
        const numSubjects = parseInt(this.value);
        const container = document.getElementById("subjects-container");
        container.innerHTML = "";

        // Dynamically create the grade and credit input fields for each subject
        for (let i = 0; i < numSubjects; i++) {
            container.innerHTML += `
                <div class="form-group">
                    <label for="grade${i}" class="form-label">Grade for Subject ${i + 1}</label>
                    <input type="number" class="form-control grade-input" id="grade${i}" name="grades[]" required min="0" max="100">
                </div>
                <div class="form-group">
                    <label for="credit${i}" class="form-label">Credits for Subject ${i + 1}</label>
                    <input type="number" class="form-control grade-input" id="credit${i}" name="credits[]" required min="1">
                </div>
            `;
        }
    });
</script>

<?php include '../common/footer.php'; ?>

</body>
</html>
