<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header, footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .calculator {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #28a745;
            margin-top: 20px;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include '../common/header.php'; ?>

    <main>
        <div class="calculator">
            <h1>GPA Calculator</h1>
            <form method="POST">
                <div class="form-group">
                    <label for="subject-name">Subject Name:</label>
                    <input type="text" name="subject_name" id="subject-name" placeholder="Enter subject name" required>
                </div>

                <div class="form-group">
                    <label for="grade">Grade (e.g., A, B+, C):</label>
                    <select name="grade" id="grade" required>
                        <option value="4">A+</option>
                        <option value="4">A</option>
                        <option value="3.7">A-</option>
                        <option value="3.3">B+</option>
                        <option value="3">B</option>
                        <option value="2.7">B-</option>
                        <option value="2.3">C+</option>
                        <option value="2">C</option>
                        <option value="1.7">C-</option>
                        <option value="1.3">D+</option>
                        <option value="1">D</option>
                        <option value="0">E</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="credits">Credits:</label>
                    <input type="number" name="credits" id="credits" min="1" placeholder="Enter course credits" required>
                </div>

                <button type="submit" name="add_course">Add Course</button>
            </form>

            <?php
            

            if (!isset($_SESSION['courses'])) {
                $_SESSION['courses'] = [];
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_course'])) {
                $subject_name = htmlspecialchars($_POST['subject_name']);
                $grade = floatval($_POST['grade']);
                $credits = intval($_POST['credits']);

                // Add course to the session
                $_SESSION['courses'][] = [
                    'subject_name' => $subject_name,
                    'grade' => $grade,
                    'credits' => $credits,
                ];
            }

            if (!empty($_SESSION['courses'])) {
                echo '<div class="form-group"><h2>Courses:</h2><ul>';
                foreach ($_SESSION['courses'] as $course) {
                    echo '<li>Subject: ' . $course['subject_name'] . ', Grade: ' . $course['grade'] . ', Credits: ' . $course['credits'] . '</li>';
                }
                echo '</ul></div>';
                echo '<form method="POST"><button type="submit" name="calculate_gpa">Calculate GPA</button></form>';
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate_gpa'])) {
                $total_credits = 0;
                $total_grade_points = 0;

                foreach ($_SESSION['courses'] as $course) {
                    $total_credits += $course['credits'];
                    $total_grade_points += $course['grade'] * $course['credits'];
                }

                $gpa = $total_credits > 0 ? $total_grade_points / $total_credits : 0;
                echo '<div class="result">Your GPA is: ' . number_format($gpa, 2) . '</div>';
            }
            ?>
        </div>
    </main>

   
        <?php include '../common/footer.php'; ?>
    
</body>
</html>
