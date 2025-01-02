
<?php
include '../common/sessionstart.php';

// Check if the form has been submitted for downloading the letter
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['letterContent'])) {
    $letterContent = isset($_POST['letterContent']) ? $_POST['letterContent'] : '';
    $templateName = isset($_POST['templateName']) ? $_POST['templateName'] : 'template';

    // Set headers for file download
    header('Content-Type: text/plain');
    header('Content-Disposition: attachment; filename="' . $templateName . '.txt"');
    header('Content-Length: ' . strlen($letterContent));

    // Output the letter content
    echo $letterContent;
  
}

// HTML output starts here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniCare - Templates</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../style/templates.css">
    <link rel="stylesheet" href="../../style/header.css">
</head>
<body>
    <?php include '../common/header.php'; ?>

    <?php
    // Templates defined as PHP variables
    $medicalTemplate = "
[Your Name]
[Your Registration Number]
[Date]

Head of the Department,
Faculty of Applied Science,
University of Vavuniya.

Subject: Submission of Medical Certificate

Dear Sir/Madam,

I, [Your Name], holding the registration number [Your Registration Number], am submitting my medical certificate for your review. I was unable to attend lectures from [Start Date] to [End Date] due to [Reason for Absence, e.g., illness].

I kindly request your acceptance of this medical certificate to account for my absence during the mentioned period. I apologize for any inconvenience caused and appreciate your understanding.

Thank you for your consideration.

Yours Sincerely,

[Your Signature]
";

    $attendanceTemplate = "
[Your Name]
[Your Registration Number]
[Date]

The Lecturer,
[Course Name],
[University Name]

Subject: Request for Excuse from Class Attendance

Dear [Lecturer’s Name],

I am writing to request an excuse for my absence from class on [Date(s) of Absence]. Unfortunately, I was unable to attend due to [reason for absence, e.g., illness, family emergency, or personal reasons].

I have made efforts to catch up on the missed material, and I am willing to complete any additional assignments or tasks that may be required. I apologize for any inconvenience my absence may have caused and kindly request your understanding and approval for this excuse.

Thank you for your consideration.

Yours Sincerely,

[Your Name]
[Your Contact Information]
";

    $accommodationTemplate = "
[Your Name]
[Your Registration Number]
[Date]

The Registrar,
University of Vavuniya.

Subject: Request for Hostel Accommodation

Dear Sir/Madam,

I am writing to formally request hostel accommodation for the upcoming academic term. I am currently enrolled as a [Your Year, e.g., First Year] student in the [Your Program, e.g., Faculty of Science] at [University Name]. Due to [reason for accommodation request, e.g., distance from home, lack of transport facilities], it would be highly beneficial for me to reside on campus.

I kindly request that you consider my application for hostel accommodation. I am willing to comply with all the rules and regulations of the hostel and university.

Thank you for considering my request. I am hopeful for a favorable response.

Yours Sincerely,

[Your Name]
[Your Contact Information]
";

    // Determine which template to show
    $selectedTemplate = isset($_POST['templateName']) ? $_POST['templateName'] : '';
    $letterContent = '';

    switch ($selectedTemplate) {
        case 'medicalTemplate':
            $letterContent = $medicalTemplate;
            break;
        case 'attendanceTemplate':
            $letterContent = $attendanceTemplate;
            break;
        case 'accommodationTemplate':
            $letterContent = $accommodationTemplate;
            break;
        default:
            $letterContent = '';
    }
    ?>

    <div class="container mt-5">
        <h2>Select a Letter Template</h2>
        
        <!-- Form for Template Selection -->
        <form action="" method="POST">
            <div class="btn-group mb-4" role="group">
                <button type="submit" name="templateName" value="medicalTemplate" class="btn1 btn-primary">Medical Leave Letter</button>
                <button type="submit" name="templateName" value="attendanceTemplate" class="btn2 btn-primary">Attendance Excuse Letter</button>
                <button type="submit" name="templateName" value="accommodationTemplate" class="btn3 btn-primary">Hostel Accommodation</button>
            </div>
        </form>

        <!-- Form for Editing and Downloading Template -->
        <form action="" method="POST">
            <!-- Editable Text Area for Letter Content -->
            <div class="mb-3">
                <textarea id="letterContent" name="letterContent" class="form-control" rows="10"><?php echo htmlspecialchars($letterContent); ?></textarea>
            </div>

            <!-- Hidden Field to Hold Template Name -->
            <input type="hidden" name="templateName" value="<?php echo htmlspecialchars($selectedTemplate); ?>">

            <!-- Download Button -->
            <button type="submit" class="btn btn-success">Download Letter</button>
        </form>
    </div>
    <section class="cta-section1 text-white py-3" >
  <div class="container text-center">
  </div>
</section>

    <?php include '../common/footer.php'; ?>

    <!-- Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>