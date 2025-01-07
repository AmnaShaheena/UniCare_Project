<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>
    <link rel="stylesheet" href="../../style/gpa.css">
    <link rel="stylesheet" href="../../style/header.css">
    <link rel="stylesheet" href="../../style/footer.css">
    
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
